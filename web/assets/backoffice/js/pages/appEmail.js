/*
 *  Document   : appEmail.js
 *  Author     : pixelcave
 *  Description: Custom javascript code used in Email Center page
 */

var AppEmail = function() {

    return {
        init: function() {
            // Choose one of the highlight classes for the message list rows: 'active', 'success', 'warning', 'danger'
            let rowHighlightClass = 'info';

            /* Add/Remove row highlighting on checkbox click */
            $('tbody').on('click', 'input:checkbox', function() {

                let checkedStatus   = $(this).prop('checked');
                let tableRow        = $(this).closest('tr');

                if (checkedStatus) {
                    tableRow.addClass(rowHighlightClass);
                } else {
                    tableRow.removeClass(rowHighlightClass);
                }
            });
            
            $('#selecctall').on('click', function () {

                if($(this).prop('checked')){
                    $('tbody input:checkbox').each(function() {
                        this.checked = true;
                        $(this).closest('tr').addClass(rowHighlightClass);
                    });
                }
                else{
                    $('tbody input:checkbox').each(function() {
                        this.checked = false;
                        $(this).closest('tr').removeClass(rowHighlightClass);
                    });
                }
            });

            let $mailsRows = $('#message-list').find('tbody').first();

            // Fonction de mise à jour des messages en fonction de la catégorie
            $('#email-nav').on('click', 'a',function (e) {
                e.preventDefault();

                let $activeCat = $(this).parent().siblings('.active');
                $activeCat.removeClass('active');
                $(this).parent().addClass('active');

                let loader = startLoader($('#page-content'));

                let mailState = $(this).data('state');
                let avatarDir = '/assets/img/avatar/';
                let currentConfig = categoryConfig[mailState];
                $.ajax({
                    url : '/messagerie/filter/' + mailState + '/1',
                    type: 'post',
                    success: function(response) {
                        let user = JSON.parse(response.user);
                        let mails = JSON.parse(response.data);
                        let html = '';

                        for (let mail of mails) {
                            html += formatMailRow(mail, user, currentConfig, avatarDir);
                        }

                        $mailsRows.html(html);
                        let $navLinks = $('#navigation').find('a');
                        $navLinks.first().data('page', 0);
                        $navLinks.last().data('page', 2);
                        $('tbody').find('input:checkbox').each(function() {
                            this.checked = false;
                            $(this).closest('tr').removeClass(rowHighlightClass);
                        });
                        $('#selecctall').prop('checked', false);
                        stopLoader(loader);
                    }
                });
            });

            //Fonction pour déplacer les mails en fonction du bouton choisi (dans la boîte de réception)
            $('#options').on('click', 'a', function (e) {
                e.preventDefault();
                let newState = ($(this).data('state'));
                let data = [];
                let i = 0;

                let $checkedRows = $('#message-list').find('tbody').find('input[type=checkbox]:checkbox:checked');
                if ($checkedRows.length > 0) {
                    $checkedRows.each(function () {
                        data.push($(this).data('id'));
                        i++;
                    });

                    let loader = startLoader($('#page-content'));

                    let mailState = $('#email-nav').find('li.active a').data('state');
                    let avatarDir = '/assets/img/avatar/';
                    let currentConfig = categoryConfig[mailState];
                    $.ajax({
                        url: '/messagerie/change/multiple/' + mailState + '/' + newState,
                        type: 'post',
                        data: {'data': data},
                        success: function (response) {
                            let user = JSON.parse(response.user);
                            let mails = JSON.parse(response.data);
                            let html = '';

                            if (user !== null && mails !== null) {
                                for (let mail of mails) {
                                    html += formatMailRow(mail, user, currentConfig, avatarDir);
                                }
                                $mailsRows.html(html);
                            }
                            $('tbody').find('input:checkbox').each(function() {
                                this.checked = false;
                                $(this).closest('tr').removeClass(rowHighlightClass);
                            });
                            $('#selecctall').prop('checked', false);                    stopLoader(loader);
                        }
                    });
                }
            });

            //Fonction pour déplacer les mails en fonction du bouton choisi (dans la vue d'un message)
            $('#markers').on('click', 'a', function (e) {
                e.preventDefault();
                let newState = ($(this).data('state'));
                let data = id;
                let loader = startLoader($('#page-content'));

                $.ajax({
                    url: '/messagerie/change/single/' + mailState + '/' + newState,
                    type: 'post',
                    data: {'data': data},
                    success: function (response) {
                        let state = JSON.parse(response);
                        let $state = $('#state');
                        if (state === 'unread' && mailState !== 'sent') {
                            $state.parent().append('<span class="pull-right" style="background-color: #e0cf62; color: #FFF; border-radius: 2px; padding: 0 5px; margin-right: 10px;">Non lu</span>');
                        } else {
                            $state.html(stateString[state]);
                            let prevConfig = categoryConfig[mailState];
                            let currentConfig = categoryConfig[newState];
                            $state.removeClass('label-' + prevConfig);
                            $state.addClass('label-' + currentConfig);
                            mailState = newState;
                        }
                        stopLoader(loader);
                    }
                });
            });

            //Fonction pour naviguer dans les messages (précédent / suivant)
            $('#navigation').on('click', 'a', function (e) {
                e.preventDefault();

                let newPage = $(this).data('page');
                if (newPage > 0) {
                    let mailState = $('#email-nav').find('li.active a').data('state');
                    let avatarDir = '/assets/img/avatar/';
                    let currentConfig = categoryConfig[mailState];

                    let loader = startLoader($('#page-content'));

                    $.ajax({
                        url: '/messagerie/filter/' + mailState + '/' + newPage,
                        type: 'post',
                        success: function (response) {
                            let user = JSON.parse(response.user);
                            let mails = JSON.parse(response.data);
                            let html = '';

                            if (mails.length > 0) {
                                for (let mail of mails) {
                                    html += formatMailRow(mail, user, currentConfig, avatarDir);
                                }

                                let $navLinks = $('#navigation').find('a');
                                $navLinks.first().data('page', newPage - 1);
                                $navLinks.last().data('page', newPage + 1);
                                $mailsRows.html(html);
                            }
                            $('tbody').find('input:checkbox').each(function() {
                                this.checked = false;
                                $(this).closest('tr').removeClass(rowHighlightClass);
                            });
                            $('#selecctall').prop('checked', false);
                            stopLoader(loader);
                        }
                    });
                }
            });

            // Fonction de mise à jour des destinataires en fonction du type de compte choisi
            let $recipientType = $('#akyos_mailboxbundle_mail_recipientType');
            $recipientType.change(function() {
                let $form = $(this).closest('form');
                let data = {};
                data[$recipientType.attr('name')] = $recipientType.val();
                let loader = startLoader($('.modal-content'));
                $.ajax({
                    url : $form.attr('action'),
                    type: $form.attr('method'),
                    data : data,
                    success: function(html) {
                        let $newSelect = $(html).find('#akyos_mailboxbundle_mail_recipient');
                        $newSelect.prepend('<option></option>');
                        stopLoader(loader);
                        $('#akyos_mailboxbundle_mail_recipient').replaceWith($newSelect);
                    }
                });
            });

        }
    };
}();

const categoryConfig = {
    'inbox':     'info',
    'favorite':  'warning',
    'important': 'info' ,
    'sent':      'success',
    'spam':      'danger',
    'trash':     'primary'
};
const stateString = {
    'inbox':     'Boîte de réception',
    'favorite':  'Favoris',
    'important': 'Important' ,
    'sent':      'Envoyé',
    'spam':      'SPAM',
    'trash':     'Corbeille'
};

function formatMailRow(mail, user, currentConfig, avatarDir) {
    let trStyle = '', envelopIcon = '';
    if (mail.sender.username !== user.username && !mail.read) {
        trStyle = ' style="background-color: #f7efb2"';
        envelopIcon = '<i class="fa fa-envelope fa-2x text-muted"></i>';
    }

    let avatarImage = mail.sender.username === user.username ? mail.recipient.image : mail.sender.image;

    return '<tr'+trStyle+'>' +
        `<td class="td-label td-label-${currentConfig} text-center" style="width: 5%;">` +
        `<label class="csscheckbox csscheckbox-${currentConfig}"><input type="checkbox" data-id="${mail.id}"><span></span></label></td>` +
        `<td class="text-center" style="width: 7%;"><img src="`+avatarDir+avatarImage+`" alt="avatar" class="img-circle"></td>` +
        `<td><h4><a href="/${user.type}/messagerie/${mail.id}" class="text-dark"><strong>`+limitSubjectLength(mail.subject)+`</strong></a></h4>` +
        `<span class="text-muted">`+limitContentLength(mail.content)+`</span></td>` +
        `<td class="hidden-xs text-center" style="width: 30px;">` + envelopIcon +`</td>` +
        // `<td class="hidden-xs text-center" style="width: 30px;"><i class="fa fa-paperclip fa-2x text-muted"></i></td>` +
        `<td class="hidden-xs text-right text-${currentConfig}" style="width: 180px;"><em>il y a `+dateToCountUp(mail.sendingDate)+`</em></td>` +
        `</tr>`;
}

function limitContentLength(content) {
    let maxLength = 50;
    if (content.length > maxLength - 4) {
        content = content.substr(0, maxLength - 4) + ' ...';
    }
    return content;
}

function limitSubjectLength(subject) {
    let maxLength = 40;
    if (subject.length > maxLength - 4) {
        subject = subject.substr(0, maxLength - 4) + ' ...';
    }
    return subject;
}

function dateToCountUp(date) {
    let strCountUp = '';
    let now = new Date();
    let countTo = new Date(date.timestamp*1000);
    let difference = (now-countTo);

    let days=Math.floor(difference/(60*60*1000*24));
    let years = Math.floor(days / 365);
    let months = Math.floor(days / 30);
    let hours=Math.floor((difference%(60*60*1000*24))/(60*60*1000));
    let mins=Math.floor(((difference%(60*60*1000*24))%(60*60*1000))/(60*1000));
    let secs=Math.floor((((difference%(60*60*1000*24))%(60*60*1000))%(60*1000))/1000);

    if (years > 0) {
        strCountUp = years > 1 ? years + ' ans' : years + ' an';
    } else if (months > 0) {
        strCountUp = months + ' mois';
    } else if (days > 0) {
        strCountUp = days > 1 ? days + ' jours' : days + ' jour';
    } else if (hours > 0) {
        strCountUp = hours > 1 ? hours + ' heures' : hours + ' heure';
    } else if (mins > 0) {
        strCountUp = mins > 1 ? mins + ' minutes' : mins + ' minute';
    } else if (secs > 0) {
        strCountUp = secs > 1 ? secs + ' secondes' : secs + ' seconde';
    }

    return strCountUp;
}
$( document ).ready(function() {

    // Fonction de mise à jour des messages en fonction de la catégorie
    $('#email-nav a').on('click', function (e) {
        e.preventDefault();

        $activeCat = $(this).parent().siblings('.active');
        $activeCat.removeClass('active');
        $(this).parent().addClass('active');

        var loader = startLoader($('#page-content'));

        var mailCategory = $(this).data('category');
        var avatarDir = '/assets/img/avatar/';
        var currentConfig = categoryConfig[mailCategory];
        $.ajax({
            url : '/messagerie/filter/' + mailCategory,
            type: 'post',
            success: function(response) {
                var user = JSON.parse(response.user);
                var mails = JSON.parse(response.data);
                var html = '';

                for (mail of mails) {
                    html += formatMailRow(mailCategory, mail, user, currentConfig, avatarDir);
                }

                stopLoader(loader);
                $('#message-list tbody').first().html(html);
            }
        });
    });

    // Fonction de mise à jour des destinataires en fonction du type de compte choisi
    var $recipientType = $('#akyos_mailboxbundle_mail_recipientType');

    $recipientType.change(function() {
        var $form = $(this).closest('form');
        var data = {};
        data[$recipientType.attr('name')] = $recipientType.val();
        var loader = startLoader($('.modal-content'));
        $.ajax({
            url : $form.attr('action'),
            type: $form.attr('method'),
            data : data,
            success: function(html) {
                $newSelect = $(html).find('#akyos_mailboxbundle_mail_recipient');
                $newSelect.prepend('<option></option>');
                stopLoader(loader);
                $('#akyos_mailboxbundle_mail_recipient').replaceWith(
                    $newSelect
                );
            }
        });
    });

});

var categoryConfig = {
    'inbox':     'info',
    'favorites': 'warning',
    'important': 'info' ,
    'sent':      'success',
    'spam':      'danger',
    'trash':     'muted'
};

function formatMailRow(mailCategory, mail, user, currentConfig, avatarDir) {
    if (mailCategory === 'inbox' && !mail.read) {
        trStyle = ' style="background-color: #f7efb2"';
        envelopIcon = '<i class="fa fa-envelope fa-2x text-muted"></i>';
    } else {
        trStyle = '';
        envelopIcon = '';
    }
    let avatarImage = mail.sender.username === user.username ? mail.recipient.image : mail.sender.image;

    return '<tr'+trStyle+'>' +
        `<td class="td-label td-label-${currentConfig} text-center" style="width: 5%;">` +
        `<label class="csscheckbox csscheckbox-${currentConfig}"><input type="checkbox"><span></span></label></td>` +
        `<td class="text-center" style="width: 7%;"><img src="`+avatarDir+avatarImage+`" alt="avatar" class="img-circle"></td>` +
        `<td><h4><a href="/${user.type}/messagerie/${mail.id}" class="text-dark"><strong>`+limitSubjectLength(mail.subject)+`</strong></a></h4>` +
        `<span class="text-muted">`+limitContentLength(mail.content)+`</span></td>` +
        `<td class="hidden-xs text-center" style="width: 30px;">` + envelopIcon +`</td>` +
        // `<td class="hidden-xs text-center" style="width: 30px;"><i class="fa fa-paperclip fa-2x text-muted"></i></td>` +
        `<td class="hidden-xs text-right text-${currentConfig}" style="width: 180px;"><em>il y a `+dateToCountUp(mail.sendingDate)+`</em></td>` +
        `</tr>`;
}

function limitContentLength(content)
{
    var maxLength = 50;
    if (content.length > maxLength - 4) {
        content = content.substr(0, maxLength - 4) + ' ...';
    }
    return content;
}

function limitSubjectLength(subject)
{
    var maxLength = 40;
    if (subject.length > maxLength - 4) {
        subject = subject.substr(0, maxLength - 4) + ' ...';
    }
    return subject;
}

function dateToCountUp(date)
{
    strCountUp = '';
    now = new Date();
    countTo = new Date(date.timestamp*1000);
    difference = (now-countTo);
    
    days=Math.floor(difference/(60*60*1000*24)*1);
    years = Math.floor(days / 365);
    months = Math.floor(days / 30);
    hours=Math.floor((difference%(60*60*1000*24))/(60*60*1000)*1);
    mins=Math.floor(((difference%(60*60*1000*24))%(60*60*1000))/(60*1000)*1);
    secs=Math.floor((((difference%(60*60*1000*24))%(60*60*1000))%(60*1000))/1000*1);

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
<?php

/* @FOSUser/Security/login_content.html.twig */
class __TwigTemplate_f3e70de22195b20d66d51ebd82d8aa60f93abcce4cf14a27480bc6b903fbce44 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d91d8ab904e1d6d0cb0e201b2ab0e331b11df933778a1503c072f7fbae40bbeb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d91d8ab904e1d6d0cb0e201b2ab0e331b11df933778a1503c072f7fbae40bbeb->enter($__internal_d91d8ab904e1d6d0cb0e201b2ab0e331b11df933778a1503c072f7fbae40bbeb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Security/login_content.html.twig"));

        $__internal_31776050021ff37e989bf53cb69400cdf836c654083717a38d34391bd707e99f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_31776050021ff37e989bf53cb69400cdf836c654083717a38d34391bd707e99f->enter($__internal_31776050021ff37e989bf53cb69400cdf836c654083717a38d34391bd707e99f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Security/login_content.html.twig"));

        // line 2
        echo "
";
        // line 3
        if ((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error"))) {
            // line 4
            echo "    <div>";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "messageKey", array()), $this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "messageData", array()), "security"), "html", null, true);
            echo "</div>
";
        }
        // line 6
        echo "
<form action=\"";
        // line 7
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_check");
        echo "\" method=\"post\">
    <div class=\"form-group\">
        ";
        // line 9
        if ((isset($context["csrf_token"]) ? $context["csrf_token"] : $this->getContext($context, "csrf_token"))) {
            // line 10
            echo "            <input type=\"hidden\" name=\"_csrf_token\" value=\"";
            echo twig_escape_filter($this->env, (isset($context["csrf_token"]) ? $context["csrf_token"] : $this->getContext($context, "csrf_token")), "html", null, true);
            echo "\"/>
        ";
        }
        // line 12
        echo "        <label class=\"sr-only\" for=\"username\">Identifiant</label>
        <input type=\"text\" id=\"username\" name=\"_username\" value=\"";
        // line 13
        echo twig_escape_filter($this->env, (isset($context["last_username"]) ? $context["last_username"] : $this->getContext($context, "last_username")), "html", null, true);
        echo "\" required=\"required\"
               placeholder=\"Identifiant...\" class=\"r-form-1-first-name form-control\"/>
    </div>

    <div class=\"form-group\">
        <label class=\"sr-only\" for=\"password\">Mot de passe</label>
        <input type=\"password\" id=\"password\" name=\"_password\" required=\"required\" placeholder=\"Mot de passe...\"
               class=\"r-form-1-first-name form-control\"/>
    </div>

    <div class=\"form-group\">
        <input type=\"checkbox\" id=\"remember_me\" name=\"_remember_me\" value=\"on\"/>
        <label for=\"remember_me\">";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("security.login.remember_me", array(), "FOSUserBundle"), "html", null, true);
        echo "</label>
    </div>

<button type=\"submit\" id=\"_submit\" name=\"_submit\" class=\"btn\">Se connecter</button>
</form>
";
        
        $__internal_d91d8ab904e1d6d0cb0e201b2ab0e331b11df933778a1503c072f7fbae40bbeb->leave($__internal_d91d8ab904e1d6d0cb0e201b2ab0e331b11df933778a1503c072f7fbae40bbeb_prof);

        
        $__internal_31776050021ff37e989bf53cb69400cdf836c654083717a38d34391bd707e99f->leave($__internal_31776050021ff37e989bf53cb69400cdf836c654083717a38d34391bd707e99f_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Security/login_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  70 => 25,  55 => 13,  52 => 12,  46 => 10,  44 => 9,  39 => 7,  36 => 6,  30 => 4,  28 => 3,  25 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% trans_default_domain 'FOSUserBundle' %}

{% if error %}
    <div>{{ error.messageKey|trans(error.messageData, 'security') }}</div>
{% endif %}

<form action=\"{{ path(\"fos_user_security_check\") }}\" method=\"post\">
    <div class=\"form-group\">
        {% if csrf_token %}
            <input type=\"hidden\" name=\"_csrf_token\" value=\"{{ csrf_token }}\"/>
        {% endif %}
        <label class=\"sr-only\" for=\"username\">Identifiant</label>
        <input type=\"text\" id=\"username\" name=\"_username\" value=\"{{ last_username }}\" required=\"required\"
               placeholder=\"Identifiant...\" class=\"r-form-1-first-name form-control\"/>
    </div>

    <div class=\"form-group\">
        <label class=\"sr-only\" for=\"password\">Mot de passe</label>
        <input type=\"password\" id=\"password\" name=\"_password\" required=\"required\" placeholder=\"Mot de passe...\"
               class=\"r-form-1-first-name form-control\"/>
    </div>

    <div class=\"form-group\">
        <input type=\"checkbox\" id=\"remember_me\" name=\"_remember_me\" value=\"on\"/>
        <label for=\"remember_me\">{{ 'security.login.remember_me'|trans }}</label>
    </div>

<button type=\"submit\" id=\"_submit\" name=\"_submit\" class=\"btn\">Se connecter</button>
</form>
", "@FOSUser/Security/login_content.html.twig", "/Applications/MAMP/htdocs/Symfony/bdx-1702-coprosyndic/app/Resources/FOSUserBundle/views/Security/login_content.html.twig");
    }
}

<?php

/* FOSUserBundle:Registration:confirmed.html.twig */
class __TwigTemplate_cfc8b37434bdf42d915cea81722885837d46c6f260f513b510f5477509a6434b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Registration:confirmed.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@FOSUser/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a9a2fc0d81f6f5ce6740fa805ce559542af460823b25279c4f611da4bc19c3b6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a9a2fc0d81f6f5ce6740fa805ce559542af460823b25279c4f611da4bc19c3b6->enter($__internal_a9a2fc0d81f6f5ce6740fa805ce559542af460823b25279c4f611da4bc19c3b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:confirmed.html.twig"));

        $__internal_ea3c9c448d5c1dad15885759d3e69eb17b97e168cf26b6b47bcc69d407b3368b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ea3c9c448d5c1dad15885759d3e69eb17b97e168cf26b6b47bcc69d407b3368b->enter($__internal_ea3c9c448d5c1dad15885759d3e69eb17b97e168cf26b6b47bcc69d407b3368b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:confirmed.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a9a2fc0d81f6f5ce6740fa805ce559542af460823b25279c4f611da4bc19c3b6->leave($__internal_a9a2fc0d81f6f5ce6740fa805ce559542af460823b25279c4f611da4bc19c3b6_prof);

        
        $__internal_ea3c9c448d5c1dad15885759d3e69eb17b97e168cf26b6b47bcc69d407b3368b->leave($__internal_ea3c9c448d5c1dad15885759d3e69eb17b97e168cf26b6b47bcc69d407b3368b_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_6e766b093d70b8a2f10842b7f577ef22a05ccba3dd0abb1b3edcc0b02fb5b32f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6e766b093d70b8a2f10842b7f577ef22a05ccba3dd0abb1b3edcc0b02fb5b32f->enter($__internal_6e766b093d70b8a2f10842b7f577ef22a05ccba3dd0abb1b3edcc0b02fb5b32f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_46d026ed6492f9cca34551c5d74048b8f7eab9fc95eccea4292ae2275987270a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_46d026ed6492f9cca34551c5d74048b8f7eab9fc95eccea4292ae2275987270a->enter($__internal_46d026ed6492f9cca34551c5d74048b8f7eab9fc95eccea4292ae2275987270a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.confirmed", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
    ";
        // line 7
        if ((isset($context["targetUrl"]) ? $context["targetUrl"] : $this->getContext($context, "targetUrl"))) {
            // line 8
            echo "    <p><a href=\"";
            echo twig_escape_filter($this->env, (isset($context["targetUrl"]) ? $context["targetUrl"] : $this->getContext($context, "targetUrl")), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.back", array(), "FOSUserBundle"), "html", null, true);
            echo "</a></p>
    ";
        }
        
        $__internal_46d026ed6492f9cca34551c5d74048b8f7eab9fc95eccea4292ae2275987270a->leave($__internal_46d026ed6492f9cca34551c5d74048b8f7eab9fc95eccea4292ae2275987270a_prof);

        
        $__internal_6e766b093d70b8a2f10842b7f577ef22a05ccba3dd0abb1b3edcc0b02fb5b32f->leave($__internal_6e766b093d70b8a2f10842b7f577ef22a05ccba3dd0abb1b3edcc0b02fb5b32f_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:confirmed.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  56 => 8,  54 => 7,  49 => 6,  40 => 5,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"@FOSUser/layout.html.twig\" %}

{% trans_default_domain 'FOSUserBundle' %}

{% block fos_user_content %}
    <p>{{ 'registration.confirmed'|trans({'%username%': user.username}) }}</p>
    {% if targetUrl %}
    <p><a href=\"{{ targetUrl }}\">{{ 'registration.back'|trans }}</a></p>
    {% endif %}
{% endblock fos_user_content %}
", "FOSUserBundle:Registration:confirmed.html.twig", "/Applications/MAMP/htdocs/Symfony/bdx-1702-coprosyndic/app/Resources/FOSUserBundle/views/Registration/confirmed.html.twig");
    }
}

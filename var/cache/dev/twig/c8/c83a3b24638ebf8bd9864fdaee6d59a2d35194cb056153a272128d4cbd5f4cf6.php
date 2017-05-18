<?php

/* FOSUserBundle:Resetting:email.txt.twig */
class __TwigTemplate_26a93cc247527f79bee9d39b85cbd041f3f38a5c2a02eca18162bbf7a9cce434 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'subject' => array($this, 'block_subject'),
            'body_text' => array($this, 'block_body_text'),
            'body_html' => array($this, 'block_body_html'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_fa052030a56cfef0b228f74ad7af1ef3e205430753675f8ed6ff2a7b71f87305 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fa052030a56cfef0b228f74ad7af1ef3e205430753675f8ed6ff2a7b71f87305->enter($__internal_fa052030a56cfef0b228f74ad7af1ef3e205430753675f8ed6ff2a7b71f87305_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:email.txt.twig"));

        $__internal_71fedb1f6ce0251dcc5a16085bb6e02dc1bd15cc754d0a83e1d2237f891e9e3d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_71fedb1f6ce0251dcc5a16085bb6e02dc1bd15cc754d0a83e1d2237f891e9e3d->enter($__internal_71fedb1f6ce0251dcc5a16085bb6e02dc1bd15cc754d0a83e1d2237f891e9e3d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        echo "
";
        // line 8
        $this->displayBlock('body_text', $context, $blocks);
        // line 13
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_fa052030a56cfef0b228f74ad7af1ef3e205430753675f8ed6ff2a7b71f87305->leave($__internal_fa052030a56cfef0b228f74ad7af1ef3e205430753675f8ed6ff2a7b71f87305_prof);

        
        $__internal_71fedb1f6ce0251dcc5a16085bb6e02dc1bd15cc754d0a83e1d2237f891e9e3d->leave($__internal_71fedb1f6ce0251dcc5a16085bb6e02dc1bd15cc754d0a83e1d2237f891e9e3d_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_e8e64bbec58f047519db6cf7a32920f8ff0acb47e12f0a25ec0c29ad4be9d60e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e8e64bbec58f047519db6cf7a32920f8ff0acb47e12f0a25ec0c29ad4be9d60e->enter($__internal_e8e64bbec58f047519db6cf7a32920f8ff0acb47e12f0a25ec0c29ad4be9d60e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        $__internal_981d0fe89e540481726c5f942dbc05835d84cc2ab5091619c90ae808a445fbdb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_981d0fe89e540481726c5f942dbc05835d84cc2ab5091619c90ae808a445fbdb->enter($__internal_981d0fe89e540481726c5f942dbc05835d84cc2ab5091619c90ae808a445fbdb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array())), "FOSUserBundle");
        
        $__internal_981d0fe89e540481726c5f942dbc05835d84cc2ab5091619c90ae808a445fbdb->leave($__internal_981d0fe89e540481726c5f942dbc05835d84cc2ab5091619c90ae808a445fbdb_prof);

        
        $__internal_e8e64bbec58f047519db6cf7a32920f8ff0acb47e12f0a25ec0c29ad4be9d60e->leave($__internal_e8e64bbec58f047519db6cf7a32920f8ff0acb47e12f0a25ec0c29ad4be9d60e_prof);

    }

    // line 8
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_726e2feb7607eceab3fd93fe7e07b76263e98f869a7fd1e6b0e939dcdd8e95bc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_726e2feb7607eceab3fd93fe7e07b76263e98f869a7fd1e6b0e939dcdd8e95bc->enter($__internal_726e2feb7607eceab3fd93fe7e07b76263e98f869a7fd1e6b0e939dcdd8e95bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        $__internal_ab04bae6d9e76dec8053bf53b6ce847041dac512ddf9c7ca184c9d059042d2d6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ab04bae6d9e76dec8053bf53b6ce847041dac512ddf9c7ca184c9d059042d2d6->enter($__internal_ab04bae6d9e76dec8053bf53b6ce847041dac512ddf9c7ca184c9d059042d2d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_ab04bae6d9e76dec8053bf53b6ce847041dac512ddf9c7ca184c9d059042d2d6->leave($__internal_ab04bae6d9e76dec8053bf53b6ce847041dac512ddf9c7ca184c9d059042d2d6_prof);

        
        $__internal_726e2feb7607eceab3fd93fe7e07b76263e98f869a7fd1e6b0e939dcdd8e95bc->leave($__internal_726e2feb7607eceab3fd93fe7e07b76263e98f869a7fd1e6b0e939dcdd8e95bc_prof);

    }

    // line 13
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_42565142ccf0ed8f77696fa7d6fd06a29d23896b02dbaf0e6f741ed18c71a1d6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_42565142ccf0ed8f77696fa7d6fd06a29d23896b02dbaf0e6f741ed18c71a1d6->enter($__internal_42565142ccf0ed8f77696fa7d6fd06a29d23896b02dbaf0e6f741ed18c71a1d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        $__internal_9e08da93bab7d54ac4b11ef92b4b2896fd70d372b3bb9483b132ec5fa8c51626 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9e08da93bab7d54ac4b11ef92b4b2896fd70d372b3bb9483b132ec5fa8c51626->enter($__internal_9e08da93bab7d54ac4b11ef92b4b2896fd70d372b3bb9483b132ec5fa8c51626_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_9e08da93bab7d54ac4b11ef92b4b2896fd70d372b3bb9483b132ec5fa8c51626->leave($__internal_9e08da93bab7d54ac4b11ef92b4b2896fd70d372b3bb9483b132ec5fa8c51626_prof);

        
        $__internal_42565142ccf0ed8f77696fa7d6fd06a29d23896b02dbaf0e6f741ed18c71a1d6->leave($__internal_42565142ccf0ed8f77696fa7d6fd06a29d23896b02dbaf0e6f741ed18c71a1d6_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:email.txt.twig";
    }

    public function getDebugInfo()
    {
        return array (  85 => 13,  73 => 10,  64 => 8,  54 => 4,  45 => 2,  35 => 13,  33 => 8,  30 => 7,  28 => 2,);
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
{% block subject %}
{%- autoescape false -%}
{{ 'resetting.email.subject'|trans({'%username%': user.username}) }}
{%- endautoescape -%}
{% endblock %}

{% block body_text %}
{% autoescape false %}
{{ 'resetting.email.message'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}) }}
{% endautoescape %}
{% endblock %}
{% block body_html %}{% endblock %}
", "FOSUserBundle:Resetting:email.txt.twig", "/Applications/MAMP/htdocs/Symfony/bdx-1702-coprosyndic/app/Resources/FOSUserBundle/views/Resetting/email.txt.twig");
    }
}

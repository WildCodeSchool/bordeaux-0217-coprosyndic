<?php

/* FOSUserBundle:Registration:email.txt.twig */
class __TwigTemplate_aa1cd6943fa9abe787c2a44e90ab83d820d0cb560028e7bdcc636d57e12bed77 extends Twig_Template
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
        $__internal_0e750d5fa15c3329527a33f60798aa4b38518c99a74ac14787824aad170a722c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0e750d5fa15c3329527a33f60798aa4b38518c99a74ac14787824aad170a722c->enter($__internal_0e750d5fa15c3329527a33f60798aa4b38518c99a74ac14787824aad170a722c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:email.txt.twig"));

        $__internal_bd161575ff2d68dd1728a18770e5ead4d3d20142e996504ba3b75592ac1c5607 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bd161575ff2d68dd1728a18770e5ead4d3d20142e996504ba3b75592ac1c5607->enter($__internal_bd161575ff2d68dd1728a18770e5ead4d3d20142e996504ba3b75592ac1c5607_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        echo "
";
        // line 8
        $this->displayBlock('body_text', $context, $blocks);
        // line 13
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_0e750d5fa15c3329527a33f60798aa4b38518c99a74ac14787824aad170a722c->leave($__internal_0e750d5fa15c3329527a33f60798aa4b38518c99a74ac14787824aad170a722c_prof);

        
        $__internal_bd161575ff2d68dd1728a18770e5ead4d3d20142e996504ba3b75592ac1c5607->leave($__internal_bd161575ff2d68dd1728a18770e5ead4d3d20142e996504ba3b75592ac1c5607_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_eccf6ce8446c7326b82c59515aaa93bfd7882e20282585feab1a9a6fd5951dd4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_eccf6ce8446c7326b82c59515aaa93bfd7882e20282585feab1a9a6fd5951dd4->enter($__internal_eccf6ce8446c7326b82c59515aaa93bfd7882e20282585feab1a9a6fd5951dd4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        $__internal_7ad887352581f908b6f4beb67fec30deb382d6236011a7d57d1a7f62378b8ea4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7ad887352581f908b6f4beb67fec30deb382d6236011a7d57d1a7f62378b8ea4->enter($__internal_7ad887352581f908b6f4beb67fec30deb382d6236011a7d57d1a7f62378b8ea4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        
        $__internal_7ad887352581f908b6f4beb67fec30deb382d6236011a7d57d1a7f62378b8ea4->leave($__internal_7ad887352581f908b6f4beb67fec30deb382d6236011a7d57d1a7f62378b8ea4_prof);

        
        $__internal_eccf6ce8446c7326b82c59515aaa93bfd7882e20282585feab1a9a6fd5951dd4->leave($__internal_eccf6ce8446c7326b82c59515aaa93bfd7882e20282585feab1a9a6fd5951dd4_prof);

    }

    // line 8
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_4cbb25e06214105e456c10461760320eb6791966e76ab0b3ecc9533c27ef4a97 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4cbb25e06214105e456c10461760320eb6791966e76ab0b3ecc9533c27ef4a97->enter($__internal_4cbb25e06214105e456c10461760320eb6791966e76ab0b3ecc9533c27ef4a97_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        $__internal_4679f4cfd425e36504fe6d63341940e9ed3e5fb59f59d1100fbfad94326479e4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4679f4cfd425e36504fe6d63341940e9ed3e5fb59f59d1100fbfad94326479e4->enter($__internal_4679f4cfd425e36504fe6d63341940e9ed3e5fb59f59d1100fbfad94326479e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_4679f4cfd425e36504fe6d63341940e9ed3e5fb59f59d1100fbfad94326479e4->leave($__internal_4679f4cfd425e36504fe6d63341940e9ed3e5fb59f59d1100fbfad94326479e4_prof);

        
        $__internal_4cbb25e06214105e456c10461760320eb6791966e76ab0b3ecc9533c27ef4a97->leave($__internal_4cbb25e06214105e456c10461760320eb6791966e76ab0b3ecc9533c27ef4a97_prof);

    }

    // line 13
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_5b86809b15465f72e3d24ab3a4319672802d74652401e6d6476c4a547f24ca59 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5b86809b15465f72e3d24ab3a4319672802d74652401e6d6476c4a547f24ca59->enter($__internal_5b86809b15465f72e3d24ab3a4319672802d74652401e6d6476c4a547f24ca59_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        $__internal_bebba0f0b7d518cd32ca0205c5ad6b05e892cf206eb103a78b05a9738a35a92b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bebba0f0b7d518cd32ca0205c5ad6b05e892cf206eb103a78b05a9738a35a92b->enter($__internal_bebba0f0b7d518cd32ca0205c5ad6b05e892cf206eb103a78b05a9738a35a92b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_bebba0f0b7d518cd32ca0205c5ad6b05e892cf206eb103a78b05a9738a35a92b->leave($__internal_bebba0f0b7d518cd32ca0205c5ad6b05e892cf206eb103a78b05a9738a35a92b_prof);

        
        $__internal_5b86809b15465f72e3d24ab3a4319672802d74652401e6d6476c4a547f24ca59->leave($__internal_5b86809b15465f72e3d24ab3a4319672802d74652401e6d6476c4a547f24ca59_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:email.txt.twig";
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
{{ 'registration.email.subject'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}) }}
{%- endautoescape -%}
{% endblock %}

{% block body_text %}
{% autoescape false %}
{{ 'registration.email.message'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}) }}
{% endautoescape %}
{% endblock %}
{% block body_html %}{% endblock %}
", "FOSUserBundle:Registration:email.txt.twig", "/Applications/MAMP/htdocs/Symfony/bdx-1702-coprosyndic/app/Resources/FOSUserBundle/views/Registration/email.txt.twig");
    }
}

<?php

/* FOSUserBundle:Group:edit.html.twig */
class __TwigTemplate_78ea1ca209167197aa98088a002fcd4f72b021c4fa777dacd0a0f67222a5b67b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Group:edit.html.twig", 1);
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
        $__internal_34b6e8c5b10e05c5ccacafd31a0eb3770df9b330f84ce295553dea87c20bdd0b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_34b6e8c5b10e05c5ccacafd31a0eb3770df9b330f84ce295553dea87c20bdd0b->enter($__internal_34b6e8c5b10e05c5ccacafd31a0eb3770df9b330f84ce295553dea87c20bdd0b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:edit.html.twig"));

        $__internal_3039f6d80bea1db8bd67fb64b1e4a5fd689f705eb19d968ca6cb6433ca493303 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3039f6d80bea1db8bd67fb64b1e4a5fd689f705eb19d968ca6cb6433ca493303->enter($__internal_3039f6d80bea1db8bd67fb64b1e4a5fd689f705eb19d968ca6cb6433ca493303_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_34b6e8c5b10e05c5ccacafd31a0eb3770df9b330f84ce295553dea87c20bdd0b->leave($__internal_34b6e8c5b10e05c5ccacafd31a0eb3770df9b330f84ce295553dea87c20bdd0b_prof);

        
        $__internal_3039f6d80bea1db8bd67fb64b1e4a5fd689f705eb19d968ca6cb6433ca493303->leave($__internal_3039f6d80bea1db8bd67fb64b1e4a5fd689f705eb19d968ca6cb6433ca493303_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_724365bcc31788b29e11c129e2d58268f38b8a0fabba6e26746c602c820eee26 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_724365bcc31788b29e11c129e2d58268f38b8a0fabba6e26746c602c820eee26->enter($__internal_724365bcc31788b29e11c129e2d58268f38b8a0fabba6e26746c602c820eee26_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_a70550e0e31e443ec0afe5bb946ca11537ac6085ed88681f66ebba58f7e0c6b8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a70550e0e31e443ec0afe5bb946ca11537ac6085ed88681f66ebba58f7e0c6b8->enter($__internal_a70550e0e31e443ec0afe5bb946ca11537ac6085ed88681f66ebba58f7e0c6b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/edit_content.html.twig", "FOSUserBundle:Group:edit.html.twig", 4)->display($context);
        
        $__internal_a70550e0e31e443ec0afe5bb946ca11537ac6085ed88681f66ebba58f7e0c6b8->leave($__internal_a70550e0e31e443ec0afe5bb946ca11537ac6085ed88681f66ebba58f7e0c6b8_prof);

        
        $__internal_724365bcc31788b29e11c129e2d58268f38b8a0fabba6e26746c602c820eee26->leave($__internal_724365bcc31788b29e11c129e2d58268f38b8a0fabba6e26746c602c820eee26_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 4,  40 => 3,  11 => 1,);
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

{% block fos_user_content %}
{% include \"@FOSUser/Group/edit_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Group:edit.html.twig", "/Applications/MAMP/htdocs/Symfony/bdx-1702-coprosyndic/app/Resources/FOSUserBundle/views/Group/edit.html.twig");
    }
}

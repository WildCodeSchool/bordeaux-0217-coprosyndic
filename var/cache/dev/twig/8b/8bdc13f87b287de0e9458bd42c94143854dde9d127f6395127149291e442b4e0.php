<?php

/* FOSUserBundle:Group:show.html.twig */
class __TwigTemplate_b31d61fbc66a07f32933300494549b2c83f18386e97a70509cef00e62ff26b60 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Group:show.html.twig", 1);
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
        $__internal_b81d7d4aa957f300957ad90cef0dea204c6c91b33c459e00dc5fae45af29b24c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b81d7d4aa957f300957ad90cef0dea204c6c91b33c459e00dc5fae45af29b24c->enter($__internal_b81d7d4aa957f300957ad90cef0dea204c6c91b33c459e00dc5fae45af29b24c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show.html.twig"));

        $__internal_a79d7c69d420464736f769d5409fa2d1b02f8d6b777f3ecae84384ba0ad0f86e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a79d7c69d420464736f769d5409fa2d1b02f8d6b777f3ecae84384ba0ad0f86e->enter($__internal_a79d7c69d420464736f769d5409fa2d1b02f8d6b777f3ecae84384ba0ad0f86e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b81d7d4aa957f300957ad90cef0dea204c6c91b33c459e00dc5fae45af29b24c->leave($__internal_b81d7d4aa957f300957ad90cef0dea204c6c91b33c459e00dc5fae45af29b24c_prof);

        
        $__internal_a79d7c69d420464736f769d5409fa2d1b02f8d6b777f3ecae84384ba0ad0f86e->leave($__internal_a79d7c69d420464736f769d5409fa2d1b02f8d6b777f3ecae84384ba0ad0f86e_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_d69ce05c777481ce33f1d07e9addd4860e3abe26ea4824def511793f758d8a23 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d69ce05c777481ce33f1d07e9addd4860e3abe26ea4824def511793f758d8a23->enter($__internal_d69ce05c777481ce33f1d07e9addd4860e3abe26ea4824def511793f758d8a23_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_e707eb3e479eb665bcda995ab6326c3e4c1b037ce41669fbed4bb7f506b30e71 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e707eb3e479eb665bcda995ab6326c3e4c1b037ce41669fbed4bb7f506b30e71->enter($__internal_e707eb3e479eb665bcda995ab6326c3e4c1b037ce41669fbed4bb7f506b30e71_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/show_content.html.twig", "FOSUserBundle:Group:show.html.twig", 4)->display($context);
        
        $__internal_e707eb3e479eb665bcda995ab6326c3e4c1b037ce41669fbed4bb7f506b30e71->leave($__internal_e707eb3e479eb665bcda995ab6326c3e4c1b037ce41669fbed4bb7f506b30e71_prof);

        
        $__internal_d69ce05c777481ce33f1d07e9addd4860e3abe26ea4824def511793f758d8a23->leave($__internal_d69ce05c777481ce33f1d07e9addd4860e3abe26ea4824def511793f758d8a23_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:show.html.twig";
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
{% include \"@FOSUser/Group/show_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Group:show.html.twig", "/Applications/MAMP/htdocs/Symfony/bdx-1702-coprosyndic/app/Resources/FOSUserBundle/views/Group/show.html.twig");
    }
}

<?php

/* FOSUserBundle:Group:new.html.twig */
class __TwigTemplate_d9c6c9e6713a67ddf5f03c6f94393240017a44f86fecfe9b31577ebb6a15e61d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Group:new.html.twig", 1);
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
        $__internal_08d702fd8e614d0f8fc767fe853a0f3cb38e7ad1f0a58a254e34387d5134a721 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_08d702fd8e614d0f8fc767fe853a0f3cb38e7ad1f0a58a254e34387d5134a721->enter($__internal_08d702fd8e614d0f8fc767fe853a0f3cb38e7ad1f0a58a254e34387d5134a721_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:new.html.twig"));

        $__internal_d965af408ef61aae39a772b585ab2ef7c3a1a22a6340cb8c74a3cea981843c3a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d965af408ef61aae39a772b585ab2ef7c3a1a22a6340cb8c74a3cea981843c3a->enter($__internal_d965af408ef61aae39a772b585ab2ef7c3a1a22a6340cb8c74a3cea981843c3a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_08d702fd8e614d0f8fc767fe853a0f3cb38e7ad1f0a58a254e34387d5134a721->leave($__internal_08d702fd8e614d0f8fc767fe853a0f3cb38e7ad1f0a58a254e34387d5134a721_prof);

        
        $__internal_d965af408ef61aae39a772b585ab2ef7c3a1a22a6340cb8c74a3cea981843c3a->leave($__internal_d965af408ef61aae39a772b585ab2ef7c3a1a22a6340cb8c74a3cea981843c3a_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_00e310656cbc26566ef81ef1ea982aa3adedeaa665ce1630cf22b916fe28f09d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_00e310656cbc26566ef81ef1ea982aa3adedeaa665ce1630cf22b916fe28f09d->enter($__internal_00e310656cbc26566ef81ef1ea982aa3adedeaa665ce1630cf22b916fe28f09d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_3835f548da96d1433c87d3b80422ce712b7d7c06c34bf5b1f464ba50052cc137 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3835f548da96d1433c87d3b80422ce712b7d7c06c34bf5b1f464ba50052cc137->enter($__internal_3835f548da96d1433c87d3b80422ce712b7d7c06c34bf5b1f464ba50052cc137_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/new_content.html.twig", "FOSUserBundle:Group:new.html.twig", 4)->display($context);
        
        $__internal_3835f548da96d1433c87d3b80422ce712b7d7c06c34bf5b1f464ba50052cc137->leave($__internal_3835f548da96d1433c87d3b80422ce712b7d7c06c34bf5b1f464ba50052cc137_prof);

        
        $__internal_00e310656cbc26566ef81ef1ea982aa3adedeaa665ce1630cf22b916fe28f09d->leave($__internal_00e310656cbc26566ef81ef1ea982aa3adedeaa665ce1630cf22b916fe28f09d_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:new.html.twig";
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
{% include \"@FOSUser/Group/new_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Group:new.html.twig", "/Applications/MAMP/htdocs/Symfony/bdx-1702-coprosyndic/app/Resources/FOSUserBundle/views/Group/new.html.twig");
    }
}

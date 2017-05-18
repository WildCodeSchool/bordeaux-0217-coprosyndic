<?php

/* @FOSUser/Registration/register.html.twig */
class __TwigTemplate_e0fe325d4921d590a4f9eb711b8741f0d703f1e30ab7daa08af133f162961a03 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Registration/register.html.twig", 1);
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
        $__internal_95ecf304cf60a9dc86b0ffb94009467a6fc3f04cb0ad82f5b625a6e8d2c5c759 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_95ecf304cf60a9dc86b0ffb94009467a6fc3f04cb0ad82f5b625a6e8d2c5c759->enter($__internal_95ecf304cf60a9dc86b0ffb94009467a6fc3f04cb0ad82f5b625a6e8d2c5c759_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/register.html.twig"));

        $__internal_6843bbd6d2c8acb553f0594578754d45c0b31fdb6db5cafccbd2c8c4d224bae5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6843bbd6d2c8acb553f0594578754d45c0b31fdb6db5cafccbd2c8c4d224bae5->enter($__internal_6843bbd6d2c8acb553f0594578754d45c0b31fdb6db5cafccbd2c8c4d224bae5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_95ecf304cf60a9dc86b0ffb94009467a6fc3f04cb0ad82f5b625a6e8d2c5c759->leave($__internal_95ecf304cf60a9dc86b0ffb94009467a6fc3f04cb0ad82f5b625a6e8d2c5c759_prof);

        
        $__internal_6843bbd6d2c8acb553f0594578754d45c0b31fdb6db5cafccbd2c8c4d224bae5->leave($__internal_6843bbd6d2c8acb553f0594578754d45c0b31fdb6db5cafccbd2c8c4d224bae5_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_8afa149f7d81828db86f980cfc5091bbb3cd39d990d1d395383f18a32ee557c0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8afa149f7d81828db86f980cfc5091bbb3cd39d990d1d395383f18a32ee557c0->enter($__internal_8afa149f7d81828db86f980cfc5091bbb3cd39d990d1d395383f18a32ee557c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_7f20f836ec8db3f419cfbbac08e2bdcfd5da7843bc87ddd8b73b49b3f9d154f0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7f20f836ec8db3f419cfbbac08e2bdcfd5da7843bc87ddd8b73b49b3f9d154f0->enter($__internal_7f20f836ec8db3f419cfbbac08e2bdcfd5da7843bc87ddd8b73b49b3f9d154f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Registration/register_content.html.twig", "@FOSUser/Registration/register.html.twig", 4)->display($context);
        
        $__internal_7f20f836ec8db3f419cfbbac08e2bdcfd5da7843bc87ddd8b73b49b3f9d154f0->leave($__internal_7f20f836ec8db3f419cfbbac08e2bdcfd5da7843bc87ddd8b73b49b3f9d154f0_prof);

        
        $__internal_8afa149f7d81828db86f980cfc5091bbb3cd39d990d1d395383f18a32ee557c0->leave($__internal_8afa149f7d81828db86f980cfc5091bbb3cd39d990d1d395383f18a32ee557c0_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Registration/register.html.twig";
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
{% include \"@FOSUser/Registration/register_content.html.twig\" %}
{% endblock fos_user_content %}
", "@FOSUser/Registration/register.html.twig", "/Applications/MAMP/htdocs/Symfony/bdx-1702-coprosyndic/vendor/friendsofsymfony/user-bundle/Resources/views/Registration/register.html.twig");
    }
}

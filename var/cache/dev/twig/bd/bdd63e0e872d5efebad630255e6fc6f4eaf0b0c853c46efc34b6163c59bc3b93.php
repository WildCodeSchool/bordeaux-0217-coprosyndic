<?php

/* WebProfilerBundle:Profiler:ajax_layout.html.twig */
class __TwigTemplate_2ec45baad8a9b5b0b9843288b53f8e023e2378e47a88b5e1bd185e463192940c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_6f285d40ab2f5158028ef13bdf23fe5891b4833effb9158732066a07e4821794 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6f285d40ab2f5158028ef13bdf23fe5891b4833effb9158732066a07e4821794->enter($__internal_6f285d40ab2f5158028ef13bdf23fe5891b4833effb9158732066a07e4821794_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        $__internal_5b6d16fbe9a4eca33ee27f6660ae6b570c8522db2097418029da5ec123799dbe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5b6d16fbe9a4eca33ee27f6660ae6b570c8522db2097418029da5ec123799dbe->enter($__internal_5b6d16fbe9a4eca33ee27f6660ae6b570c8522db2097418029da5ec123799dbe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_6f285d40ab2f5158028ef13bdf23fe5891b4833effb9158732066a07e4821794->leave($__internal_6f285d40ab2f5158028ef13bdf23fe5891b4833effb9158732066a07e4821794_prof);

        
        $__internal_5b6d16fbe9a4eca33ee27f6660ae6b570c8522db2097418029da5ec123799dbe->leave($__internal_5b6d16fbe9a4eca33ee27f6660ae6b570c8522db2097418029da5ec123799dbe_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_7a80a54bb48d7d7975585c338f8c900fd883c8151b5c232ea6b8a48f932e48a5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7a80a54bb48d7d7975585c338f8c900fd883c8151b5c232ea6b8a48f932e48a5->enter($__internal_7a80a54bb48d7d7975585c338f8c900fd883c8151b5c232ea6b8a48f932e48a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_72bb6754539d13a755eeace057b3f06173d4e64e82e3d5f8e622b8c3c0ced5e7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_72bb6754539d13a755eeace057b3f06173d4e64e82e3d5f8e622b8c3c0ced5e7->enter($__internal_72bb6754539d13a755eeace057b3f06173d4e64e82e3d5f8e622b8c3c0ced5e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_72bb6754539d13a755eeace057b3f06173d4e64e82e3d5f8e622b8c3c0ced5e7->leave($__internal_72bb6754539d13a755eeace057b3f06173d4e64e82e3d5f8e622b8c3c0ced5e7_prof);

        
        $__internal_7a80a54bb48d7d7975585c338f8c900fd883c8151b5c232ea6b8a48f932e48a5->leave($__internal_7a80a54bb48d7d7975585c338f8c900fd883c8151b5c232ea6b8a48f932e48a5_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  26 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% block panel '' %}
", "WebProfilerBundle:Profiler:ajax_layout.html.twig", "/Applications/MAMP/htdocs/Symfony/bdx-1702-coprosyndic/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/ajax_layout.html.twig");
    }
}

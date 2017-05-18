<?php

/* TwigBundle:Exception:exception.atom.twig */
class __TwigTemplate_37e2d6b1e479e45b336ffb18168b36e3447a61133ed892d9a6f5501e1fb4345f extends Twig_Template
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
        $__internal_04183ae88db9eeddd85c8f2e3d3c4dcfaa04d37fa491671dab79905c12e7ab3c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_04183ae88db9eeddd85c8f2e3d3c4dcfaa04d37fa491671dab79905c12e7ab3c->enter($__internal_04183ae88db9eeddd85c8f2e3d3c4dcfaa04d37fa491671dab79905c12e7ab3c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        $__internal_29bfd8dd9cf5ac5147e8f87c00d64568bc9b2396728230680197a4e29e143728 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_29bfd8dd9cf5ac5147e8f87c00d64568bc9b2396728230680197a4e29e143728->enter($__internal_29bfd8dd9cf5ac5147e8f87c00d64568bc9b2396728230680197a4e29e143728_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.atom.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_04183ae88db9eeddd85c8f2e3d3c4dcfaa04d37fa491671dab79905c12e7ab3c->leave($__internal_04183ae88db9eeddd85c8f2e3d3c4dcfaa04d37fa491671dab79905c12e7ab3c_prof);

        
        $__internal_29bfd8dd9cf5ac5147e8f87c00d64568bc9b2396728230680197a4e29e143728->leave($__internal_29bfd8dd9cf5ac5147e8f87c00d64568bc9b2396728230680197a4e29e143728_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.atom.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% include '@Twig/Exception/exception.xml.twig' with { 'exception': exception } %}
", "TwigBundle:Exception:exception.atom.twig", "/Applications/MAMP/htdocs/Symfony/bdx-1702-coprosyndic/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.atom.twig");
    }
}

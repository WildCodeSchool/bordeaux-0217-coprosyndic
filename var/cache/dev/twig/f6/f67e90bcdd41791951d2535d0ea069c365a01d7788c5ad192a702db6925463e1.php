<?php

/* TwigBundle:Exception:exception.rdf.twig */
class __TwigTemplate_1c4122c91df9e1e57064f2fbaf9eb0a2cb645b74d003b6a471498370b1a7b48f extends Twig_Template
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
        $__internal_8863e9b3d8e7cb954f6cac98649b049a2900c41bbe5cb9654a1e50292a664ef7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8863e9b3d8e7cb954f6cac98649b049a2900c41bbe5cb9654a1e50292a664ef7->enter($__internal_8863e9b3d8e7cb954f6cac98649b049a2900c41bbe5cb9654a1e50292a664ef7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        $__internal_0ee2428ee76cf866184833752d6d038abd1962f19882f881618ca2192830088b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0ee2428ee76cf866184833752d6d038abd1962f19882f881618ca2192830088b->enter($__internal_0ee2428ee76cf866184833752d6d038abd1962f19882f881618ca2192830088b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.rdf.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_8863e9b3d8e7cb954f6cac98649b049a2900c41bbe5cb9654a1e50292a664ef7->leave($__internal_8863e9b3d8e7cb954f6cac98649b049a2900c41bbe5cb9654a1e50292a664ef7_prof);

        
        $__internal_0ee2428ee76cf866184833752d6d038abd1962f19882f881618ca2192830088b->leave($__internal_0ee2428ee76cf866184833752d6d038abd1962f19882f881618ca2192830088b_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.rdf.twig";
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
", "TwigBundle:Exception:exception.rdf.twig", "/Applications/MAMP/htdocs/Symfony/bdx-1702-coprosyndic/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.rdf.twig");
    }
}

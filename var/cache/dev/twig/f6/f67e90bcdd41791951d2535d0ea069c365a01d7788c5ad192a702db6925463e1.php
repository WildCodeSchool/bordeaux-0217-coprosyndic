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
        $__internal_b4afdb6d416f329bdf51b08fe0d2a9301a7d5787650d5f61d33c57a75e54ddb7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b4afdb6d416f329bdf51b08fe0d2a9301a7d5787650d5f61d33c57a75e54ddb7->enter($__internal_b4afdb6d416f329bdf51b08fe0d2a9301a7d5787650d5f61d33c57a75e54ddb7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        $__internal_b3699670012fcfe7d3d9d4c5e825db0102a4e7df5770dee9bd3b7a7fbc50a287 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b3699670012fcfe7d3d9d4c5e825db0102a4e7df5770dee9bd3b7a7fbc50a287->enter($__internal_b3699670012fcfe7d3d9d4c5e825db0102a4e7df5770dee9bd3b7a7fbc50a287_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.rdf.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_b4afdb6d416f329bdf51b08fe0d2a9301a7d5787650d5f61d33c57a75e54ddb7->leave($__internal_b4afdb6d416f329bdf51b08fe0d2a9301a7d5787650d5f61d33c57a75e54ddb7_prof);

        
        $__internal_b3699670012fcfe7d3d9d4c5e825db0102a4e7df5770dee9bd3b7a7fbc50a287->leave($__internal_b3699670012fcfe7d3d9d4c5e825db0102a4e7df5770dee9bd3b7a7fbc50a287_prof);

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
", "TwigBundle:Exception:exception.rdf.twig", "/Applications/MAMP/htdocs/Symfony/bdx-1702-coprosyndic/easycopro/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.rdf.twig");
    }
}

<?php

/* TwigBundle:Exception:exception.js.twig */
class __TwigTemplate_c1c7eedc8361023cbd0a5b58c0097e66e899eccd134b61a274c86a9e900b1727 extends Twig_Template
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
        $__internal_a084b8eb799de2f7a3f5f740817baa8c278944028e4149051a97dc7a9589832f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a084b8eb799de2f7a3f5f740817baa8c278944028e4149051a97dc7a9589832f->enter($__internal_a084b8eb799de2f7a3f5f740817baa8c278944028e4149051a97dc7a9589832f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        $__internal_048a1dbc1d4764464898be34299f48d9ee977e2a9367e6c02b4b47fb0a974c7c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_048a1dbc1d4764464898be34299f48d9ee977e2a9367e6c02b4b47fb0a974c7c->enter($__internal_048a1dbc1d4764464898be34299f48d9ee977e2a9367e6c02b4b47fb0a974c7c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "TwigBundle:Exception:exception.js.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_a084b8eb799de2f7a3f5f740817baa8c278944028e4149051a97dc7a9589832f->leave($__internal_a084b8eb799de2f7a3f5f740817baa8c278944028e4149051a97dc7a9589832f_prof);

        
        $__internal_048a1dbc1d4764464898be34299f48d9ee977e2a9367e6c02b4b47fb0a974c7c->leave($__internal_048a1dbc1d4764464898be34299f48d9ee977e2a9367e6c02b4b47fb0a974c7c_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 3,  28 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("/*
{% include '@Twig/Exception/exception.txt.twig' with { 'exception': exception } %}
*/
", "TwigBundle:Exception:exception.js.twig", "/Applications/MAMP/htdocs/Symfony/bdx-1702-coprosyndic/easycopro/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.js.twig");
    }
}

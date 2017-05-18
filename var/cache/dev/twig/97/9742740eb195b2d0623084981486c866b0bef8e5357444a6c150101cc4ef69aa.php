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
        $__internal_ceb795b27c3bd66c33ccb153bbc9712a280fe5d3036f813cf762ba388b7ba2fb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ceb795b27c3bd66c33ccb153bbc9712a280fe5d3036f813cf762ba388b7ba2fb->enter($__internal_ceb795b27c3bd66c33ccb153bbc9712a280fe5d3036f813cf762ba388b7ba2fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        $__internal_02ab76c1b13fed7598e331284574c4f601888220f7bfdd9614a6870f08391979 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_02ab76c1b13fed7598e331284574c4f601888220f7bfdd9614a6870f08391979->enter($__internal_02ab76c1b13fed7598e331284574c4f601888220f7bfdd9614a6870f08391979_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "TwigBundle:Exception:exception.js.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_ceb795b27c3bd66c33ccb153bbc9712a280fe5d3036f813cf762ba388b7ba2fb->leave($__internal_ceb795b27c3bd66c33ccb153bbc9712a280fe5d3036f813cf762ba388b7ba2fb_prof);

        
        $__internal_02ab76c1b13fed7598e331284574c4f601888220f7bfdd9614a6870f08391979->leave($__internal_02ab76c1b13fed7598e331284574c4f601888220f7bfdd9614a6870f08391979_prof);

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
", "TwigBundle:Exception:exception.js.twig", "/Applications/MAMP/htdocs/Symfony/bdx-1702-coprosyndic/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.js.twig");
    }
}

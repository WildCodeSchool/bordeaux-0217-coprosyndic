<?php

/* TwigBundle:Exception:error.js.twig */
class __TwigTemplate_db9287946f6f94b22896d46a2f8b509d370f2fe1849ba969f04a7622465f3386 extends Twig_Template
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
        $__internal_82e6c8754778d314c046852f6fb796fd6c21c41c4ec75099c37a3c9f569a5098 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_82e6c8754778d314c046852f6fb796fd6c21c41c4ec75099c37a3c9f569a5098->enter($__internal_82e6c8754778d314c046852f6fb796fd6c21c41c4ec75099c37a3c9f569a5098_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

        $__internal_cc15e6f54d196bba0abed89aff5d2f424d5f197beb2a7506166190ba8abeb76b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cc15e6f54d196bba0abed89aff5d2f424d5f197beb2a7506166190ba8abeb76b->enter($__internal_cc15e6f54d196bba0abed89aff5d2f424d5f197beb2a7506166190ba8abeb76b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "js", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "js", null, true);
        echo "

*/
";
        
        $__internal_82e6c8754778d314c046852f6fb796fd6c21c41c4ec75099c37a3c9f569a5098->leave($__internal_82e6c8754778d314c046852f6fb796fd6c21c41c4ec75099c37a3c9f569a5098_prof);

        
        $__internal_cc15e6f54d196bba0abed89aff5d2f424d5f197beb2a7506166190ba8abeb76b->leave($__internal_cc15e6f54d196bba0abed89aff5d2f424d5f197beb2a7506166190ba8abeb76b_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 2,  25 => 1,);
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
{{ status_code }} {{ status_text }}

*/
", "TwigBundle:Exception:error.js.twig", "/Applications/MAMP/htdocs/Symfony/bdx-1702-coprosyndic/easycopro/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.js.twig");
    }
}

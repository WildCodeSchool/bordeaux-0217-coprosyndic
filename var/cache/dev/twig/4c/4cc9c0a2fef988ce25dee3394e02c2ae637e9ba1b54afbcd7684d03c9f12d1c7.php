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
        $__internal_a9773c6443b2d9560cb59e7f4e965d8e95c6f2661192659d85159a64b4ea7492 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a9773c6443b2d9560cb59e7f4e965d8e95c6f2661192659d85159a64b4ea7492->enter($__internal_a9773c6443b2d9560cb59e7f4e965d8e95c6f2661192659d85159a64b4ea7492_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

        $__internal_340acd6a5a5ad30063ffc7fa2c04f6ddf53c24ade8c4eb0b8b319c61eadfd599 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_340acd6a5a5ad30063ffc7fa2c04f6ddf53c24ade8c4eb0b8b319c61eadfd599->enter($__internal_340acd6a5a5ad30063ffc7fa2c04f6ddf53c24ade8c4eb0b8b319c61eadfd599_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

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
        
        $__internal_a9773c6443b2d9560cb59e7f4e965d8e95c6f2661192659d85159a64b4ea7492->leave($__internal_a9773c6443b2d9560cb59e7f4e965d8e95c6f2661192659d85159a64b4ea7492_prof);

        
        $__internal_340acd6a5a5ad30063ffc7fa2c04f6ddf53c24ade8c4eb0b8b319c61eadfd599->leave($__internal_340acd6a5a5ad30063ffc7fa2c04f6ddf53c24ade8c4eb0b8b319c61eadfd599_prof);

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
", "TwigBundle:Exception:error.js.twig", "/Applications/MAMP/htdocs/Symfony/bdx-1702-coprosyndic/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.js.twig");
    }
}

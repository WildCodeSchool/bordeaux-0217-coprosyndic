<?php

/* TwigBundle:Exception:error.atom.twig */
class __TwigTemplate_d9fad801b0ea5b69b472ccdc3c0890c596ab2e2553cec0a9378e1a9c00740e7e extends Twig_Template
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
        $__internal_a11287140e6cb1029de0efa143cba43acff086d0ea1a1702cb18583755c83ae7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a11287140e6cb1029de0efa143cba43acff086d0ea1a1702cb18583755c83ae7->enter($__internal_a11287140e6cb1029de0efa143cba43acff086d0ea1a1702cb18583755c83ae7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        $__internal_6829f088b6cbf1aa346f3bf4da04d51f39f820b27cde8ab41f4e5178ba5ee0be = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6829f088b6cbf1aa346f3bf4da04d51f39f820b27cde8ab41f4e5178ba5ee0be->enter($__internal_6829f088b6cbf1aa346f3bf4da04d51f39f820b27cde8ab41f4e5178ba5ee0be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.atom.twig", 1)->display($context);
        
        $__internal_a11287140e6cb1029de0efa143cba43acff086d0ea1a1702cb18583755c83ae7->leave($__internal_a11287140e6cb1029de0efa143cba43acff086d0ea1a1702cb18583755c83ae7_prof);

        
        $__internal_6829f088b6cbf1aa346f3bf4da04d51f39f820b27cde8ab41f4e5178ba5ee0be->leave($__internal_6829f088b6cbf1aa346f3bf4da04d51f39f820b27cde8ab41f4e5178ba5ee0be_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.atom.twig";
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
        return new Twig_Source("{% include '@Twig/Exception/error.xml.twig' %}
", "TwigBundle:Exception:error.atom.twig", "/Applications/MAMP/htdocs/Symfony/bdx-1702-coprosyndic/easycopro/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.atom.twig");
    }
}

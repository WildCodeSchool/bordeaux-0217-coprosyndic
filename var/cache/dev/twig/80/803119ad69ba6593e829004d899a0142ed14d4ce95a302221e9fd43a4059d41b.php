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
        $__internal_d2e8b0175847551592b213251f7eecd07062b63c5b459f847a4071c096aea023 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d2e8b0175847551592b213251f7eecd07062b63c5b459f847a4071c096aea023->enter($__internal_d2e8b0175847551592b213251f7eecd07062b63c5b459f847a4071c096aea023_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        $__internal_ebe683daf4e3c67eb5f1dc0fffb1f7cc6eb468e0676d72c30d19ae99c0614d90 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ebe683daf4e3c67eb5f1dc0fffb1f7cc6eb468e0676d72c30d19ae99c0614d90->enter($__internal_ebe683daf4e3c67eb5f1dc0fffb1f7cc6eb468e0676d72c30d19ae99c0614d90_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.atom.twig", 1)->display($context);
        
        $__internal_d2e8b0175847551592b213251f7eecd07062b63c5b459f847a4071c096aea023->leave($__internal_d2e8b0175847551592b213251f7eecd07062b63c5b459f847a4071c096aea023_prof);

        
        $__internal_ebe683daf4e3c67eb5f1dc0fffb1f7cc6eb468e0676d72c30d19ae99c0614d90->leave($__internal_ebe683daf4e3c67eb5f1dc0fffb1f7cc6eb468e0676d72c30d19ae99c0614d90_prof);

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
", "TwigBundle:Exception:error.atom.twig", "/Applications/MAMP/htdocs/Symfony/bdx-1702-coprosyndic/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.atom.twig");
    }
}

<?php

/* TwigBundle:Exception:error.rdf.twig */
class __TwigTemplate_3be2048eedc56ffa44862edaa6324fb9c0d440f212a8caef551b56568ae97948 extends Twig_Template
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
        $__internal_e3e830147e7437fc8a6ae30dab15382faf1fca2767e1546b684f0bab37e157e6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e3e830147e7437fc8a6ae30dab15382faf1fca2767e1546b684f0bab37e157e6->enter($__internal_e3e830147e7437fc8a6ae30dab15382faf1fca2767e1546b684f0bab37e157e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        $__internal_5c89076f8515f61b6683967983138400bf39ed5142d9294baf7ea12e0ffff86c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5c89076f8515f61b6683967983138400bf39ed5142d9294baf7ea12e0ffff86c->enter($__internal_5c89076f8515f61b6683967983138400bf39ed5142d9294baf7ea12e0ffff86c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.rdf.twig", 1)->display($context);
        
        $__internal_e3e830147e7437fc8a6ae30dab15382faf1fca2767e1546b684f0bab37e157e6->leave($__internal_e3e830147e7437fc8a6ae30dab15382faf1fca2767e1546b684f0bab37e157e6_prof);

        
        $__internal_5c89076f8515f61b6683967983138400bf39ed5142d9294baf7ea12e0ffff86c->leave($__internal_5c89076f8515f61b6683967983138400bf39ed5142d9294baf7ea12e0ffff86c_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.rdf.twig";
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
", "TwigBundle:Exception:error.rdf.twig", "/Applications/MAMP/htdocs/Symfony/bdx-1702-coprosyndic/easycopro/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.rdf.twig");
    }
}

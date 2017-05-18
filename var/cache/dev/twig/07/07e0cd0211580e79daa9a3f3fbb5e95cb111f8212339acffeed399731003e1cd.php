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
        $__internal_153f21ab2d77eb53d030aff04194418fed3f9c46790f315d1f980f8f6a905836 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_153f21ab2d77eb53d030aff04194418fed3f9c46790f315d1f980f8f6a905836->enter($__internal_153f21ab2d77eb53d030aff04194418fed3f9c46790f315d1f980f8f6a905836_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        $__internal_2865e49000624200e8779c9cd2b35d0553872a66c9718266d834d8c4b187184c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2865e49000624200e8779c9cd2b35d0553872a66c9718266d834d8c4b187184c->enter($__internal_2865e49000624200e8779c9cd2b35d0553872a66c9718266d834d8c4b187184c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.rdf.twig", 1)->display($context);
        
        $__internal_153f21ab2d77eb53d030aff04194418fed3f9c46790f315d1f980f8f6a905836->leave($__internal_153f21ab2d77eb53d030aff04194418fed3f9c46790f315d1f980f8f6a905836_prof);

        
        $__internal_2865e49000624200e8779c9cd2b35d0553872a66c9718266d834d8c4b187184c->leave($__internal_2865e49000624200e8779c9cd2b35d0553872a66c9718266d834d8c4b187184c_prof);

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
", "TwigBundle:Exception:error.rdf.twig", "/Applications/MAMP/htdocs/Symfony/bdx-1702-coprosyndic/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.rdf.twig");
    }
}

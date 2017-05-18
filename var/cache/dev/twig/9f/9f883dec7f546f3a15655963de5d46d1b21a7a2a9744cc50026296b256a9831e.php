<?php

/* TwigBundle:Exception:exception.css.twig */
class __TwigTemplate_a2962e0bc332439165087d82d424f9ab89a831a96d185b1da56608ada1667f7a extends Twig_Template
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
        $__internal_45e15d1f164c6ab20eaaf64b9628632db51b252c63e1c8ab939fbf8cc7a5faf9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_45e15d1f164c6ab20eaaf64b9628632db51b252c63e1c8ab939fbf8cc7a5faf9->enter($__internal_45e15d1f164c6ab20eaaf64b9628632db51b252c63e1c8ab939fbf8cc7a5faf9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        $__internal_194fa8fcdcbffec32a53f53003ebeec0df8385600a330f729d4544d8940e5ba6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_194fa8fcdcbffec32a53f53003ebeec0df8385600a330f729d4544d8940e5ba6->enter($__internal_194fa8fcdcbffec32a53f53003ebeec0df8385600a330f729d4544d8940e5ba6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "TwigBundle:Exception:exception.css.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_45e15d1f164c6ab20eaaf64b9628632db51b252c63e1c8ab939fbf8cc7a5faf9->leave($__internal_45e15d1f164c6ab20eaaf64b9628632db51b252c63e1c8ab939fbf8cc7a5faf9_prof);

        
        $__internal_194fa8fcdcbffec32a53f53003ebeec0df8385600a330f729d4544d8940e5ba6->leave($__internal_194fa8fcdcbffec32a53f53003ebeec0df8385600a330f729d4544d8940e5ba6_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.css.twig";
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
", "TwigBundle:Exception:exception.css.twig", "/Applications/MAMP/htdocs/Symfony/bdx-1702-coprosyndic/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.css.twig");
    }
}

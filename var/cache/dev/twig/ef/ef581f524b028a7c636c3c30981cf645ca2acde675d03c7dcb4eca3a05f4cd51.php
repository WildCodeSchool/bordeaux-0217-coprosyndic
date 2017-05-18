<?php

/* TwigBundle:Exception:error.json.twig */
class __TwigTemplate_2eff544ccf817e726e5d29d9d78d9ce3b3cea1355772dc5e0929c778b0f020a8 extends Twig_Template
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
        $__internal_68fab0b690f88fb3cdf111777b7cea6464e439c04aa8cd34155aefdd77618160 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_68fab0b690f88fb3cdf111777b7cea6464e439c04aa8cd34155aefdd77618160->enter($__internal_68fab0b690f88fb3cdf111777b7cea6464e439c04aa8cd34155aefdd77618160_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        $__internal_f640114e860d0a71f19f03a44e638ae1711eba1e806400afe17d0f912f899f43 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f640114e860d0a71f19f03a44e638ae1711eba1e806400afe17d0f912f899f43->enter($__internal_f640114e860d0a71f19f03a44e638ae1711eba1e806400afe17d0f912f899f43_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_68fab0b690f88fb3cdf111777b7cea6464e439c04aa8cd34155aefdd77618160->leave($__internal_68fab0b690f88fb3cdf111777b7cea6464e439c04aa8cd34155aefdd77618160_prof);

        
        $__internal_f640114e860d0a71f19f03a44e638ae1711eba1e806400afe17d0f912f899f43->leave($__internal_f640114e860d0a71f19f03a44e638ae1711eba1e806400afe17d0f912f899f43_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.json.twig";
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
        return new Twig_Source("{{ { 'error': { 'code': status_code, 'message': status_text } }|json_encode|raw }}
", "TwigBundle:Exception:error.json.twig", "/Applications/MAMP/htdocs/Symfony/bdx-1702-coprosyndic/easycopro/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.json.twig");
    }
}

<?php

/* TwigBundle:Exception:exception.json.twig */
class __TwigTemplate_5d6bb839a2a0a8914a335e36fc5dcb2f30f0311be0fd8a15cfefcc13f228235c extends Twig_Template
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
        $__internal_5a6969dea7e18042e94588f9e63f1c6be5560fa2ef97f86aee55842bd45d5e13 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5a6969dea7e18042e94588f9e63f1c6be5560fa2ef97f86aee55842bd45d5e13->enter($__internal_5a6969dea7e18042e94588f9e63f1c6be5560fa2ef97f86aee55842bd45d5e13_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.json.twig"));

        $__internal_96c2618cda4196aa1c7b0e00ed0cadd5ee6deabdd0b58b3c6949e8974bb2120f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_96c2618cda4196aa1c7b0e00ed0cadd5ee6deabdd0b58b3c6949e8974bb2120f->enter($__internal_96c2618cda4196aa1c7b0e00ed0cadd5ee6deabdd0b58b3c6949e8974bb2120f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "exception" => $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "toarray", array()))));
        echo "
";
        
        $__internal_5a6969dea7e18042e94588f9e63f1c6be5560fa2ef97f86aee55842bd45d5e13->leave($__internal_5a6969dea7e18042e94588f9e63f1c6be5560fa2ef97f86aee55842bd45d5e13_prof);

        
        $__internal_96c2618cda4196aa1c7b0e00ed0cadd5ee6deabdd0b58b3c6949e8974bb2120f->leave($__internal_96c2618cda4196aa1c7b0e00ed0cadd5ee6deabdd0b58b3c6949e8974bb2120f_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.json.twig";
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
        return new Twig_Source("{{ { 'error': { 'code': status_code, 'message': status_text, 'exception': exception.toarray } }|json_encode|raw }}
", "TwigBundle:Exception:exception.json.twig", "/Applications/MAMP/htdocs/Symfony/bdx-1702-coprosyndic/easycopro/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.json.twig");
    }
}

<?php

/* TwigBundle:Exception:traces.txt.twig */
class __TwigTemplate_a38873ee44f18913cb03b07e3d2f776da8568d991adc0a1a7fd706f67c172dc1 extends Twig_Template
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
        $__internal_888acf104aeef5611f70b08651e58cb7bebcb08ad10bde696316d09b0c1b9839 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_888acf104aeef5611f70b08651e58cb7bebcb08ad10bde696316d09b0c1b9839->enter($__internal_888acf104aeef5611f70b08651e58cb7bebcb08ad10bde696316d09b0c1b9839_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:traces.txt.twig"));

        $__internal_f03d77f11de37dc3103084f3488d3daf5cdab32b842196fb0f78b933b6117caf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f03d77f11de37dc3103084f3488d3daf5cdab32b842196fb0f78b933b6117caf->enter($__internal_f03d77f11de37dc3103084f3488d3daf5cdab32b842196fb0f78b933b6117caf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:traces.txt.twig"));

        // line 1
        if (twig_length_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "trace", array()))) {
            // line 2
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "trace", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["trace"]) {
                // line 3
                $this->loadTemplate("@Twig/Exception/trace.txt.twig", "TwigBundle:Exception:traces.txt.twig", 3)->display(array("trace" => $context["trace"]));
                // line 4
                echo "
";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['trace'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        
        $__internal_888acf104aeef5611f70b08651e58cb7bebcb08ad10bde696316d09b0c1b9839->leave($__internal_888acf104aeef5611f70b08651e58cb7bebcb08ad10bde696316d09b0c1b9839_prof);

        
        $__internal_f03d77f11de37dc3103084f3488d3daf5cdab32b842196fb0f78b933b6117caf->leave($__internal_f03d77f11de37dc3103084f3488d3daf5cdab32b842196fb0f78b933b6117caf_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:traces.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  33 => 4,  31 => 3,  27 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% if exception.trace|length %}
{% for trace in exception.trace %}
{% include '@Twig/Exception/trace.txt.twig' with { 'trace': trace } only %}

{% endfor %}
{% endif %}
", "TwigBundle:Exception:traces.txt.twig", "/Applications/MAMP/htdocs/Symfony/bdx-1702-coprosyndic/easycopro/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/traces.txt.twig");
    }
}

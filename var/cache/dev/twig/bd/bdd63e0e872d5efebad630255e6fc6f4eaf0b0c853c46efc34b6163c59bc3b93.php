<?php

/* WebProfilerBundle:Profiler:ajax_layout.html.twig */
class __TwigTemplate_2ec45baad8a9b5b0b9843288b53f8e023e2378e47a88b5e1bd185e463192940c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_3c765600b8cd2e790db0e5187c4dc6daa1ba95f4904092dc72a7bccc9746cff3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3c765600b8cd2e790db0e5187c4dc6daa1ba95f4904092dc72a7bccc9746cff3->enter($__internal_3c765600b8cd2e790db0e5187c4dc6daa1ba95f4904092dc72a7bccc9746cff3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        $__internal_2e4427c2424b5b29fd28b5372bf2ac1b9b4a6d5f76f270dfa223f7f56a2af4fc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2e4427c2424b5b29fd28b5372bf2ac1b9b4a6d5f76f270dfa223f7f56a2af4fc->enter($__internal_2e4427c2424b5b29fd28b5372bf2ac1b9b4a6d5f76f270dfa223f7f56a2af4fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_3c765600b8cd2e790db0e5187c4dc6daa1ba95f4904092dc72a7bccc9746cff3->leave($__internal_3c765600b8cd2e790db0e5187c4dc6daa1ba95f4904092dc72a7bccc9746cff3_prof);

        
        $__internal_2e4427c2424b5b29fd28b5372bf2ac1b9b4a6d5f76f270dfa223f7f56a2af4fc->leave($__internal_2e4427c2424b5b29fd28b5372bf2ac1b9b4a6d5f76f270dfa223f7f56a2af4fc_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_b0f1eabe86a50948f61ce97ebb44aae222230266037fceaf3849c50d61988e16 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b0f1eabe86a50948f61ce97ebb44aae222230266037fceaf3849c50d61988e16->enter($__internal_b0f1eabe86a50948f61ce97ebb44aae222230266037fceaf3849c50d61988e16_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_10d1e2e9b5af7cf0999b746d5467814e43524c1b33457a22811c0d736a94237d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_10d1e2e9b5af7cf0999b746d5467814e43524c1b33457a22811c0d736a94237d->enter($__internal_10d1e2e9b5af7cf0999b746d5467814e43524c1b33457a22811c0d736a94237d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_10d1e2e9b5af7cf0999b746d5467814e43524c1b33457a22811c0d736a94237d->leave($__internal_10d1e2e9b5af7cf0999b746d5467814e43524c1b33457a22811c0d736a94237d_prof);

        
        $__internal_b0f1eabe86a50948f61ce97ebb44aae222230266037fceaf3849c50d61988e16->leave($__internal_b0f1eabe86a50948f61ce97ebb44aae222230266037fceaf3849c50d61988e16_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  26 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% block panel '' %}
", "WebProfilerBundle:Profiler:ajax_layout.html.twig", "/Applications/MAMP/htdocs/Symfony/bdx-1702-coprosyndic/easycopro/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/ajax_layout.html.twig");
    }
}

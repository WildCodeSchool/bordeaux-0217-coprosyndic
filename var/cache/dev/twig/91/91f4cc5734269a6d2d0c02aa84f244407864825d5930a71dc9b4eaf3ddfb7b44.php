<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_8a31bbf6d27b61e74fed2c97266af7cf11e8909fb03298bf8178e142ab470eb2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e7e3e827584ce51635862164d0a4e1ef72210299dc581d22043c47230ce4e696 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e7e3e827584ce51635862164d0a4e1ef72210299dc581d22043c47230ce4e696->enter($__internal_e7e3e827584ce51635862164d0a4e1ef72210299dc581d22043c47230ce4e696_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_31bc43d447ef7d4fb8dc50e4be8a859312707b22093a953b40eb697f66fefba7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_31bc43d447ef7d4fb8dc50e4be8a859312707b22093a953b40eb697f66fefba7->enter($__internal_31bc43d447ef7d4fb8dc50e4be8a859312707b22093a953b40eb697f66fefba7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e7e3e827584ce51635862164d0a4e1ef72210299dc581d22043c47230ce4e696->leave($__internal_e7e3e827584ce51635862164d0a4e1ef72210299dc581d22043c47230ce4e696_prof);

        
        $__internal_31bc43d447ef7d4fb8dc50e4be8a859312707b22093a953b40eb697f66fefba7->leave($__internal_31bc43d447ef7d4fb8dc50e4be8a859312707b22093a953b40eb697f66fefba7_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_227623c2b21a500d058d023270ce1986717f22898fa6e958e340ca942258f27c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_227623c2b21a500d058d023270ce1986717f22898fa6e958e340ca942258f27c->enter($__internal_227623c2b21a500d058d023270ce1986717f22898fa6e958e340ca942258f27c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_44e5d35abde53c454d0cd6a24493e8176ed533809fa1feb41e5f9c54690802b1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_44e5d35abde53c454d0cd6a24493e8176ed533809fa1feb41e5f9c54690802b1->enter($__internal_44e5d35abde53c454d0cd6a24493e8176ed533809fa1feb41e5f9c54690802b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_44e5d35abde53c454d0cd6a24493e8176ed533809fa1feb41e5f9c54690802b1->leave($__internal_44e5d35abde53c454d0cd6a24493e8176ed533809fa1feb41e5f9c54690802b1_prof);

        
        $__internal_227623c2b21a500d058d023270ce1986717f22898fa6e958e340ca942258f27c->leave($__internal_227623c2b21a500d058d023270ce1986717f22898fa6e958e340ca942258f27c_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_c2a06c41a4ab5c3ca96a2701def96377d896b9cdd325c0b67bea9ce1c3650ded = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c2a06c41a4ab5c3ca96a2701def96377d896b9cdd325c0b67bea9ce1c3650ded->enter($__internal_c2a06c41a4ab5c3ca96a2701def96377d896b9cdd325c0b67bea9ce1c3650ded_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_38d526dd3d4590e8cd4a3ac0c7c7b5822015789bc06bfcba53604ad6bc48902b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_38d526dd3d4590e8cd4a3ac0c7c7b5822015789bc06bfcba53604ad6bc48902b->enter($__internal_38d526dd3d4590e8cd4a3ac0c7c7b5822015789bc06bfcba53604ad6bc48902b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_38d526dd3d4590e8cd4a3ac0c7c7b5822015789bc06bfcba53604ad6bc48902b->leave($__internal_38d526dd3d4590e8cd4a3ac0c7c7b5822015789bc06bfcba53604ad6bc48902b_prof);

        
        $__internal_c2a06c41a4ab5c3ca96a2701def96377d896b9cdd325c0b67bea9ce1c3650ded->leave($__internal_c2a06c41a4ab5c3ca96a2701def96377d896b9cdd325c0b67bea9ce1c3650ded_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_ddeeecbd4b5d9aeba275375d41c5ccf3b272e10e630625a325c1abb1cbf769be = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ddeeecbd4b5d9aeba275375d41c5ccf3b272e10e630625a325c1abb1cbf769be->enter($__internal_ddeeecbd4b5d9aeba275375d41c5ccf3b272e10e630625a325c1abb1cbf769be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_96360c10697919c0c13cb5de96220682926478292e1daabad3ea1c9dbbc7edc5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_96360c10697919c0c13cb5de96220682926478292e1daabad3ea1c9dbbc7edc5->enter($__internal_96360c10697919c0c13cb5de96220682926478292e1daabad3ea1c9dbbc7edc5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_96360c10697919c0c13cb5de96220682926478292e1daabad3ea1c9dbbc7edc5->leave($__internal_96360c10697919c0c13cb5de96220682926478292e1daabad3ea1c9dbbc7edc5_prof);

        
        $__internal_ddeeecbd4b5d9aeba275375d41c5ccf3b272e10e630625a325c1abb1cbf769be->leave($__internal_ddeeecbd4b5d9aeba275375d41c5ccf3b272e10e630625a325c1abb1cbf769be_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 33,  135 => 32,  129 => 28,  127 => 27,  123 => 25,  114 => 24,  103 => 21,  97 => 17,  95 => 16,  90 => 14,  85 => 13,  76 => 12,  63 => 9,  57 => 6,  54 => 5,  51 => 4,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block head %}
    {% if collector.hasexception %}
        <style>
            {{ render(path('_profiler_exception_css', { token: token })) }}
        </style>
    {% endif %}
    {{ parent() }}
{% endblock %}

{% block menu %}
    <span class=\"label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}\">
        <span class=\"icon\">{{ include('@WebProfiler/Icon/exception.svg') }}</span>
        <strong>Exception</strong>
        {% if collector.hasexception %}
            <span class=\"count\">
                <span>1</span>
            </span>
        {% endif %}
    </span>
{% endblock %}

{% block panel %}
    <h2>Exceptions</h2>

    {% if not collector.hasexception %}
        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    {% else %}
        <div class=\"sf-reset\">
            {{ render(path('_profiler_exception', { token: token })) }}
        </div>
    {% endif %}
{% endblock %}
", "@WebProfiler/Collector/exception.html.twig", "/Applications/MAMP/htdocs/Symfony/bdx-1702-coprosyndic/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/exception.html.twig");
    }
}

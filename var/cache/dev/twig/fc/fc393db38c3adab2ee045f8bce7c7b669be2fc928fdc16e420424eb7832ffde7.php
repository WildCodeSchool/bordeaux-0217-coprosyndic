<?php

/* WebProfilerBundle:Collector:ajax.html.twig */
class __TwigTemplate_eebed8d324785e24378ebbf02ec64d6e26d3ed3fb9e3cef95046baac6693cb94 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:ajax.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_849d3fd314c6c4676e61bed4b703ded77eafae2c3f380a98d33b510d298a2fb1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_849d3fd314c6c4676e61bed4b703ded77eafae2c3f380a98d33b510d298a2fb1->enter($__internal_849d3fd314c6c4676e61bed4b703ded77eafae2c3f380a98d33b510d298a2fb1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:ajax.html.twig"));

        $__internal_a3ef93b8dc1c5fe467ddc840f1bcba8b606ac751948bc7ccb6262128be6dff51 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a3ef93b8dc1c5fe467ddc840f1bcba8b606ac751948bc7ccb6262128be6dff51->enter($__internal_a3ef93b8dc1c5fe467ddc840f1bcba8b606ac751948bc7ccb6262128be6dff51_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_849d3fd314c6c4676e61bed4b703ded77eafae2c3f380a98d33b510d298a2fb1->leave($__internal_849d3fd314c6c4676e61bed4b703ded77eafae2c3f380a98d33b510d298a2fb1_prof);

        
        $__internal_a3ef93b8dc1c5fe467ddc840f1bcba8b606ac751948bc7ccb6262128be6dff51->leave($__internal_a3ef93b8dc1c5fe467ddc840f1bcba8b606ac751948bc7ccb6262128be6dff51_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_c11957cd72de88178b5115213712872c7cc4d01d008aa07cca6ad088fb924973 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c11957cd72de88178b5115213712872c7cc4d01d008aa07cca6ad088fb924973->enter($__internal_c11957cd72de88178b5115213712872c7cc4d01d008aa07cca6ad088fb924973_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_5a3da76042f575d01b133ae9969d43259f34971d0191a36d78aabac2346faeec = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5a3da76042f575d01b133ae9969d43259f34971d0191a36d78aabac2346faeec->enter($__internal_5a3da76042f575d01b133ae9969d43259f34971d0191a36d78aabac2346faeec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        // line 4
        echo "    ";
        ob_start();
        // line 5
        echo "        ";
        echo twig_include($this->env, $context, "@WebProfiler/Icon/ajax.svg");
        echo "
        <span class=\"sf-toolbar-value sf-toolbar-ajax-requests\">0</span>
    ";
        $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 8
        echo "
    ";
        // line 9
        $context["text"] = ('' === $tmp = "        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    ") ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 29
        echo "
    ";
        // line 30
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/toolbar_item.html.twig", array("link" => false));
        echo "
";
        
        $__internal_5a3da76042f575d01b133ae9969d43259f34971d0191a36d78aabac2346faeec->leave($__internal_5a3da76042f575d01b133ae9969d43259f34971d0191a36d78aabac2346faeec_prof);

        
        $__internal_c11957cd72de88178b5115213712872c7cc4d01d008aa07cca6ad088fb924973->leave($__internal_c11957cd72de88178b5115213712872c7cc4d01d008aa07cca6ad088fb924973_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:ajax.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 30,  82 => 29,  62 => 9,  59 => 8,  52 => 5,  49 => 4,  40 => 3,  11 => 1,);
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

{% block toolbar %}
    {% set icon %}
        {{ include('@WebProfiler/Icon/ajax.svg') }}
        <span class=\"sf-toolbar-value sf-toolbar-ajax-requests\">0</span>
    {% endset %}

    {% set text %}
        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    {% endset %}

    {{ include('@WebProfiler/Profiler/toolbar_item.html.twig', { link: false }) }}
{% endblock %}
", "WebProfilerBundle:Collector:ajax.html.twig", "/Applications/MAMP/htdocs/Symfony/bdx-1702-coprosyndic/easycopro/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/ajax.html.twig");
    }
}

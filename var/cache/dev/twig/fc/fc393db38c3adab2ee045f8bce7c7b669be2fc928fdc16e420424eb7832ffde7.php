<?php

/* @WebProfiler/Collector/ajax.html.twig */
class __TwigTemplate_eebed8d324785e24378ebbf02ec64d6e26d3ed3fb9e3cef95046baac6693cb94 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/ajax.html.twig", 1);
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
        $__internal_0d36909b9304b4b179d59b4227dc2dbe1f65c1f2bcd54e0b5ba0324ffe51c83d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0d36909b9304b4b179d59b4227dc2dbe1f65c1f2bcd54e0b5ba0324ffe51c83d->enter($__internal_0d36909b9304b4b179d59b4227dc2dbe1f65c1f2bcd54e0b5ba0324ffe51c83d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $__internal_0ee6e54fd0d60eaf18cbffdec62ce0f90db87fea97a1aada2b6aed4267e65a2b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0ee6e54fd0d60eaf18cbffdec62ce0f90db87fea97a1aada2b6aed4267e65a2b->enter($__internal_0ee6e54fd0d60eaf18cbffdec62ce0f90db87fea97a1aada2b6aed4267e65a2b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0d36909b9304b4b179d59b4227dc2dbe1f65c1f2bcd54e0b5ba0324ffe51c83d->leave($__internal_0d36909b9304b4b179d59b4227dc2dbe1f65c1f2bcd54e0b5ba0324ffe51c83d_prof);

        
        $__internal_0ee6e54fd0d60eaf18cbffdec62ce0f90db87fea97a1aada2b6aed4267e65a2b->leave($__internal_0ee6e54fd0d60eaf18cbffdec62ce0f90db87fea97a1aada2b6aed4267e65a2b_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_3764cdb76ff716f8c1b4f1b0faa3ea77fe4b2377ac565446ab26873f3b47c2cf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3764cdb76ff716f8c1b4f1b0faa3ea77fe4b2377ac565446ab26873f3b47c2cf->enter($__internal_3764cdb76ff716f8c1b4f1b0faa3ea77fe4b2377ac565446ab26873f3b47c2cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_598ee2c3bc15bd40ae77a6ccd0479be222e914c18e3a8a374c341d12d292745b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_598ee2c3bc15bd40ae77a6ccd0479be222e914c18e3a8a374c341d12d292745b->enter($__internal_598ee2c3bc15bd40ae77a6ccd0479be222e914c18e3a8a374c341d12d292745b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

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
        
        $__internal_598ee2c3bc15bd40ae77a6ccd0479be222e914c18e3a8a374c341d12d292745b->leave($__internal_598ee2c3bc15bd40ae77a6ccd0479be222e914c18e3a8a374c341d12d292745b_prof);

        
        $__internal_3764cdb76ff716f8c1b4f1b0faa3ea77fe4b2377ac565446ab26873f3b47c2cf->leave($__internal_3764cdb76ff716f8c1b4f1b0faa3ea77fe4b2377ac565446ab26873f3b47c2cf_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/ajax.html.twig";
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
", "@WebProfiler/Collector/ajax.html.twig", "/Applications/MAMP/htdocs/Symfony/bdx-1702-coprosyndic/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/ajax.html.twig");
    }
}

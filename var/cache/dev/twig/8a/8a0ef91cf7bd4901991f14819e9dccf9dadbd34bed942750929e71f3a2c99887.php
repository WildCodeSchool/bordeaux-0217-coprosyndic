<?php

/* WebProfilerBundle:Profiler:header.html.twig */
class __TwigTemplate_030d0e87e03ac30d2629ff4a6d721a9911af7551e1c6a8157ecabca8c849f9a3 extends Twig_Template
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
        $__internal_bdaed42b206d9d730415a65151c3a93225e4338017e9a1632ae5543788b0bbc2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bdaed42b206d9d730415a65151c3a93225e4338017e9a1632ae5543788b0bbc2->enter($__internal_bdaed42b206d9d730415a65151c3a93225e4338017e9a1632ae5543788b0bbc2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:header.html.twig"));

        $__internal_95a9189fa0bc6dd1c2e53d57801ac207aeab18f2bbd01b1d21d790669bdedee6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_95a9189fa0bc6dd1c2e53d57801ac207aeab18f2bbd01b1d21d790669bdedee6->enter($__internal_95a9189fa0bc6dd1c2e53d57801ac207aeab18f2bbd01b1d21d790669bdedee6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:header.html.twig"));

        // line 1
        echo "<div id=\"header\">
    <div class=\"container\">
        <h1>";
        // line 3
        echo twig_include($this->env, $context, "@WebProfiler/Icon/symfony.svg");
        echo " Symfony <span>Profiler</span></h1>

        <div class=\"search\">
            <form method=\"get\" action=\"https://symfony.com/search\" target=\"_blank\">
                <div class=\"form-row\">
                    <input name=\"q\" id=\"search-id\" type=\"search\" placeholder=\"search on symfony.com\">
                    <button type=\"submit\" class=\"btn\">Search</button>
                </div>
           </form>
        </div>
    </div>
</div>
";
        
        $__internal_bdaed42b206d9d730415a65151c3a93225e4338017e9a1632ae5543788b0bbc2->leave($__internal_bdaed42b206d9d730415a65151c3a93225e4338017e9a1632ae5543788b0bbc2_prof);

        
        $__internal_95a9189fa0bc6dd1c2e53d57801ac207aeab18f2bbd01b1d21d790669bdedee6->leave($__internal_95a9189fa0bc6dd1c2e53d57801ac207aeab18f2bbd01b1d21d790669bdedee6_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  29 => 3,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div id=\"header\">
    <div class=\"container\">
        <h1>{{ include('@WebProfiler/Icon/symfony.svg') }} Symfony <span>Profiler</span></h1>

        <div class=\"search\">
            <form method=\"get\" action=\"https://symfony.com/search\" target=\"_blank\">
                <div class=\"form-row\">
                    <input name=\"q\" id=\"search-id\" type=\"search\" placeholder=\"search on symfony.com\">
                    <button type=\"submit\" class=\"btn\">Search</button>
                </div>
           </form>
        </div>
    </div>
</div>
", "WebProfilerBundle:Profiler:header.html.twig", "/Applications/MAMP/htdocs/Symfony/bdx-1702-coprosyndic/easycopro/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/header.html.twig");
    }
}

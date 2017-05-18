<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_a0ab1fb4a0aa09ee5535a80573bc6497da13d5b38022c26061960146fcaea2bd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
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
        $__internal_0e00f64aeff5563777e5888981d0c3ca39293394477c34e542643f4afcbe358a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0e00f64aeff5563777e5888981d0c3ca39293394477c34e542643f4afcbe358a->enter($__internal_0e00f64aeff5563777e5888981d0c3ca39293394477c34e542643f4afcbe358a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_12d6f16df6e73929da4ed546b0eb6d85f77e7de54e4da081cb76cec3130db462 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_12d6f16df6e73929da4ed546b0eb6d85f77e7de54e4da081cb76cec3130db462->enter($__internal_12d6f16df6e73929da4ed546b0eb6d85f77e7de54e4da081cb76cec3130db462_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0e00f64aeff5563777e5888981d0c3ca39293394477c34e542643f4afcbe358a->leave($__internal_0e00f64aeff5563777e5888981d0c3ca39293394477c34e542643f4afcbe358a_prof);

        
        $__internal_12d6f16df6e73929da4ed546b0eb6d85f77e7de54e4da081cb76cec3130db462->leave($__internal_12d6f16df6e73929da4ed546b0eb6d85f77e7de54e4da081cb76cec3130db462_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_a6a544cfdc4463cbc22ab12b3fc3ef3c97bc16b0eeb4c54c4f58d87aa2037f7b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a6a544cfdc4463cbc22ab12b3fc3ef3c97bc16b0eeb4c54c4f58d87aa2037f7b->enter($__internal_a6a544cfdc4463cbc22ab12b3fc3ef3c97bc16b0eeb4c54c4f58d87aa2037f7b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_59bebcd68ca30858d7d59f9032ea928692599da5949e93241198067da9c44901 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_59bebcd68ca30858d7d59f9032ea928692599da5949e93241198067da9c44901->enter($__internal_59bebcd68ca30858d7d59f9032ea928692599da5949e93241198067da9c44901_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_59bebcd68ca30858d7d59f9032ea928692599da5949e93241198067da9c44901->leave($__internal_59bebcd68ca30858d7d59f9032ea928692599da5949e93241198067da9c44901_prof);

        
        $__internal_a6a544cfdc4463cbc22ab12b3fc3ef3c97bc16b0eeb4c54c4f58d87aa2037f7b->leave($__internal_a6a544cfdc4463cbc22ab12b3fc3ef3c97bc16b0eeb4c54c4f58d87aa2037f7b_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_1b0b64eaeac9a34562457ca808b6f2cca2aa4d4f07db7f8f717ba1368f0b6024 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1b0b64eaeac9a34562457ca808b6f2cca2aa4d4f07db7f8f717ba1368f0b6024->enter($__internal_1b0b64eaeac9a34562457ca808b6f2cca2aa4d4f07db7f8f717ba1368f0b6024_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_7275a25772218aaac90bb67e7c1a9ca197621ec3719025ef529ca6eb4a6e4f04 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7275a25772218aaac90bb67e7c1a9ca197621ec3719025ef529ca6eb4a6e4f04->enter($__internal_7275a25772218aaac90bb67e7c1a9ca197621ec3719025ef529ca6eb4a6e4f04_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_7275a25772218aaac90bb67e7c1a9ca197621ec3719025ef529ca6eb4a6e4f04->leave($__internal_7275a25772218aaac90bb67e7c1a9ca197621ec3719025ef529ca6eb4a6e4f04_prof);

        
        $__internal_1b0b64eaeac9a34562457ca808b6f2cca2aa4d4f07db7f8f717ba1368f0b6024->leave($__internal_1b0b64eaeac9a34562457ca808b6f2cca2aa4d4f07db7f8f717ba1368f0b6024_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_14773af347fe081df2d1bf9cc26d9e1fc3ba33792e9ebf9120115dca3bf81a82 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_14773af347fe081df2d1bf9cc26d9e1fc3ba33792e9ebf9120115dca3bf81a82->enter($__internal_14773af347fe081df2d1bf9cc26d9e1fc3ba33792e9ebf9120115dca3bf81a82_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_fb49666e0dd0898256d70587dac359454eadc8c6ea017dbe0f9956081fe25994 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fb49666e0dd0898256d70587dac359454eadc8c6ea017dbe0f9956081fe25994->enter($__internal_fb49666e0dd0898256d70587dac359454eadc8c6ea017dbe0f9956081fe25994_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_fb49666e0dd0898256d70587dac359454eadc8c6ea017dbe0f9956081fe25994->leave($__internal_fb49666e0dd0898256d70587dac359454eadc8c6ea017dbe0f9956081fe25994_prof);

        
        $__internal_14773af347fe081df2d1bf9cc26d9e1fc3ba33792e9ebf9120115dca3bf81a82->leave($__internal_14773af347fe081df2d1bf9cc26d9e1fc3ba33792e9ebf9120115dca3bf81a82_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 13,  85 => 12,  71 => 7,  68 => 6,  59 => 5,  42 => 3,  11 => 1,);
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

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "@WebProfiler/Collector/router.html.twig", "/Applications/MAMP/htdocs/Symfony/bdx-1702-coprosyndic/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}

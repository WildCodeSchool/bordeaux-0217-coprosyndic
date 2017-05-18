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
        $__internal_bbc15f22bdd4721d831bba6ca62e7b596b79c0fc3a49c911783e55c96c55da32 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bbc15f22bdd4721d831bba6ca62e7b596b79c0fc3a49c911783e55c96c55da32->enter($__internal_bbc15f22bdd4721d831bba6ca62e7b596b79c0fc3a49c911783e55c96c55da32_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_b37901287a89ee4191e0891699c96e40eb1e9d27719a4ffcb8ff6db6340bdcfa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b37901287a89ee4191e0891699c96e40eb1e9d27719a4ffcb8ff6db6340bdcfa->enter($__internal_b37901287a89ee4191e0891699c96e40eb1e9d27719a4ffcb8ff6db6340bdcfa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bbc15f22bdd4721d831bba6ca62e7b596b79c0fc3a49c911783e55c96c55da32->leave($__internal_bbc15f22bdd4721d831bba6ca62e7b596b79c0fc3a49c911783e55c96c55da32_prof);

        
        $__internal_b37901287a89ee4191e0891699c96e40eb1e9d27719a4ffcb8ff6db6340bdcfa->leave($__internal_b37901287a89ee4191e0891699c96e40eb1e9d27719a4ffcb8ff6db6340bdcfa_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_e25bdf392dd9c81789d0c31bce41082bf142671fbcbf373612f02cac24d1addf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e25bdf392dd9c81789d0c31bce41082bf142671fbcbf373612f02cac24d1addf->enter($__internal_e25bdf392dd9c81789d0c31bce41082bf142671fbcbf373612f02cac24d1addf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_e0aa81f6e68e7e27a39e997e43f17416af91ef81854d6f301e75ab040771e754 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e0aa81f6e68e7e27a39e997e43f17416af91ef81854d6f301e75ab040771e754->enter($__internal_e0aa81f6e68e7e27a39e997e43f17416af91ef81854d6f301e75ab040771e754_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_e0aa81f6e68e7e27a39e997e43f17416af91ef81854d6f301e75ab040771e754->leave($__internal_e0aa81f6e68e7e27a39e997e43f17416af91ef81854d6f301e75ab040771e754_prof);

        
        $__internal_e25bdf392dd9c81789d0c31bce41082bf142671fbcbf373612f02cac24d1addf->leave($__internal_e25bdf392dd9c81789d0c31bce41082bf142671fbcbf373612f02cac24d1addf_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_2787b5478f09a1f953d693d2a83ff09ac9524c75a4a96447ecf91c069cbf39be = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2787b5478f09a1f953d693d2a83ff09ac9524c75a4a96447ecf91c069cbf39be->enter($__internal_2787b5478f09a1f953d693d2a83ff09ac9524c75a4a96447ecf91c069cbf39be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_c2fe26369c5888f71db50597bf791d7a8095084a86808d49d701483dcd2a9f13 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c2fe26369c5888f71db50597bf791d7a8095084a86808d49d701483dcd2a9f13->enter($__internal_c2fe26369c5888f71db50597bf791d7a8095084a86808d49d701483dcd2a9f13_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_c2fe26369c5888f71db50597bf791d7a8095084a86808d49d701483dcd2a9f13->leave($__internal_c2fe26369c5888f71db50597bf791d7a8095084a86808d49d701483dcd2a9f13_prof);

        
        $__internal_2787b5478f09a1f953d693d2a83ff09ac9524c75a4a96447ecf91c069cbf39be->leave($__internal_2787b5478f09a1f953d693d2a83ff09ac9524c75a4a96447ecf91c069cbf39be_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_5e3c3cfe81ec67c1407b61cb7e5008c9df89ce3cd8658bb78114e9a8d6a23c09 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5e3c3cfe81ec67c1407b61cb7e5008c9df89ce3cd8658bb78114e9a8d6a23c09->enter($__internal_5e3c3cfe81ec67c1407b61cb7e5008c9df89ce3cd8658bb78114e9a8d6a23c09_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_b893696bb738707eee20133ad16a0b2992ad56fe49cbc30f20a2d3d51f9a93cf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b893696bb738707eee20133ad16a0b2992ad56fe49cbc30f20a2d3d51f9a93cf->enter($__internal_b893696bb738707eee20133ad16a0b2992ad56fe49cbc30f20a2d3d51f9a93cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_b893696bb738707eee20133ad16a0b2992ad56fe49cbc30f20a2d3d51f9a93cf->leave($__internal_b893696bb738707eee20133ad16a0b2992ad56fe49cbc30f20a2d3d51f9a93cf_prof);

        
        $__internal_5e3c3cfe81ec67c1407b61cb7e5008c9df89ce3cd8658bb78114e9a8d6a23c09->leave($__internal_5e3c3cfe81ec67c1407b61cb7e5008c9df89ce3cd8658bb78114e9a8d6a23c09_prof);

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

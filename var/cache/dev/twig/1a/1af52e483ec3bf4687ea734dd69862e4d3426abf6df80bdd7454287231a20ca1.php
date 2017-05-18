<?php

/* AKYOSEasyCoproBundle:Default:index.html.twig */
class __TwigTemplate_8fbbad789e601d2e7d1326e2593b4aedccfa871823f7873285b891afa37f2b2f extends Twig_Template
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
        $__internal_5456601e9aee7e4e4a37c942fc81646c299b9348be166697f17775492535e5b4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5456601e9aee7e4e4a37c942fc81646c299b9348be166697f17775492535e5b4->enter($__internal_5456601e9aee7e4e4a37c942fc81646c299b9348be166697f17775492535e5b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AKYOSEasyCoproBundle:Default:index.html.twig"));

        $__internal_afd4944175b2b39e2abab2c70fab42db5fe4277b3847af42c1886f112e7deddf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_afd4944175b2b39e2abab2c70fab42db5fe4277b3847af42c1886f112e7deddf->enter($__internal_afd4944175b2b39e2abab2c70fab42db5fe4277b3847af42c1886f112e7deddf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AKYOSEasyCoproBundle:Default:index.html.twig"));

        // line 1
        echo "Hello World!
";
        
        $__internal_5456601e9aee7e4e4a37c942fc81646c299b9348be166697f17775492535e5b4->leave($__internal_5456601e9aee7e4e4a37c942fc81646c299b9348be166697f17775492535e5b4_prof);

        
        $__internal_afd4944175b2b39e2abab2c70fab42db5fe4277b3847af42c1886f112e7deddf->leave($__internal_afd4944175b2b39e2abab2c70fab42db5fe4277b3847af42c1886f112e7deddf_prof);

    }

    public function getTemplateName()
    {
        return "AKYOSEasyCoproBundle:Default:index.html.twig";
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
        return new Twig_Source("Hello World!
", "AKYOSEasyCoproBundle:Default:index.html.twig", "/Applications/MAMP/htdocs/Symfony/bdx-1702-coprosyndic/src/AKYOS/EasyCoproBundle/Resources/views/Default/index.html.twig");
    }
}

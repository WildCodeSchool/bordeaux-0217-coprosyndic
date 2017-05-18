<?php

/* @Framework/Form/url_widget.html.php */
class __TwigTemplate_ad958e6b25f95e8e22d70cb7752af02f260df61969197f16ddc510b987aca6e4 extends Twig_Template
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
        $__internal_f55d1c168ee22cdaa2beac983f57c21b0130d3fa9a369cf14362d2b665a6d286 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f55d1c168ee22cdaa2beac983f57c21b0130d3fa9a369cf14362d2b665a6d286->enter($__internal_f55d1c168ee22cdaa2beac983f57c21b0130d3fa9a369cf14362d2b665a6d286_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        $__internal_c7e98d6e005a799c374e7d2645165186617c532480514404a8941a45d9d3b0f5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c7e98d6e005a799c374e7d2645165186617c532480514404a8941a45d9d3b0f5->enter($__internal_c7e98d6e005a799c374e7d2645165186617c532480514404a8941a45d9d3b0f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
";
        
        $__internal_f55d1c168ee22cdaa2beac983f57c21b0130d3fa9a369cf14362d2b665a6d286->leave($__internal_f55d1c168ee22cdaa2beac983f57c21b0130d3fa9a369cf14362d2b665a6d286_prof);

        
        $__internal_c7e98d6e005a799c374e7d2645165186617c532480514404a8941a45d9d3b0f5->leave($__internal_c7e98d6e005a799c374e7d2645165186617c532480514404a8941a45d9d3b0f5_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/url_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
", "@Framework/Form/url_widget.html.php", "/Applications/MAMP/htdocs/Symfony/bdx-1702-coprosyndic/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/url_widget.html.php");
    }
}

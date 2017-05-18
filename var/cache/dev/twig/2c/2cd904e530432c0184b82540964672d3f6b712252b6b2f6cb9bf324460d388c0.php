<?php

/* @Framework/Form/container_attributes.html.php */
class __TwigTemplate_74e564f1cb5e9bfcbd77129f985d2a68529be74457b2dbc82a8ca4332f82f9f5 extends Twig_Template
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
        $__internal_25336a7ad70aa2ba97a835410cc1349e4f52398f3596e7d5e5c15e6ff8ef076f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_25336a7ad70aa2ba97a835410cc1349e4f52398f3596e7d5e5c15e6ff8ef076f->enter($__internal_25336a7ad70aa2ba97a835410cc1349e4f52398f3596e7d5e5c15e6ff8ef076f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/container_attributes.html.php"));

        $__internal_f9153d2d976b80b9faa1702620e27ab4164991ccc99ecbba0e1a205d4e0aa857 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f9153d2d976b80b9faa1702620e27ab4164991ccc99ecbba0e1a205d4e0aa857->enter($__internal_f9153d2d976b80b9faa1702620e27ab4164991ccc99ecbba0e1a205d4e0aa857_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/container_attributes.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
";
        
        $__internal_25336a7ad70aa2ba97a835410cc1349e4f52398f3596e7d5e5c15e6ff8ef076f->leave($__internal_25336a7ad70aa2ba97a835410cc1349e4f52398f3596e7d5e5c15e6ff8ef076f_prof);

        
        $__internal_f9153d2d976b80b9faa1702620e27ab4164991ccc99ecbba0e1a205d4e0aa857->leave($__internal_f9153d2d976b80b9faa1702620e27ab4164991ccc99ecbba0e1a205d4e0aa857_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/container_attributes.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
", "@Framework/Form/container_attributes.html.php", "/Applications/MAMP/htdocs/Symfony/bdx-1702-coprosyndic/easycopro/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/container_attributes.html.php");
    }
}

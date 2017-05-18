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
        $__internal_64f4ca69d46bfdfcf7b920d66484c6e68e8c867c458ff684b525914e5c86ec65 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_64f4ca69d46bfdfcf7b920d66484c6e68e8c867c458ff684b525914e5c86ec65->enter($__internal_64f4ca69d46bfdfcf7b920d66484c6e68e8c867c458ff684b525914e5c86ec65_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/container_attributes.html.php"));

        $__internal_042a5662f81311b95670f1115f57f96a23e2d1029eb24f960fc34f130a4d2774 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_042a5662f81311b95670f1115f57f96a23e2d1029eb24f960fc34f130a4d2774->enter($__internal_042a5662f81311b95670f1115f57f96a23e2d1029eb24f960fc34f130a4d2774_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/container_attributes.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
";
        
        $__internal_64f4ca69d46bfdfcf7b920d66484c6e68e8c867c458ff684b525914e5c86ec65->leave($__internal_64f4ca69d46bfdfcf7b920d66484c6e68e8c867c458ff684b525914e5c86ec65_prof);

        
        $__internal_042a5662f81311b95670f1115f57f96a23e2d1029eb24f960fc34f130a4d2774->leave($__internal_042a5662f81311b95670f1115f57f96a23e2d1029eb24f960fc34f130a4d2774_prof);

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
", "@Framework/Form/container_attributes.html.php", "/Applications/MAMP/htdocs/Symfony/bdx-1702-coprosyndic/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/container_attributes.html.php");
    }
}

<?php

/* @Framework/Form/form.html.php */
class __TwigTemplate_2e98fe9f5da46ac6e7f8af6de6e0aa7e0565143ddd0a8d2273f58ea244384af1 extends Twig_Template
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
        $__internal_6a1d28b1fd92efbc13be0f829f0453eea0f07ea21232c7c3312defc5fa36346c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6a1d28b1fd92efbc13be0f829f0453eea0f07ea21232c7c3312defc5fa36346c->enter($__internal_6a1d28b1fd92efbc13be0f829f0453eea0f07ea21232c7c3312defc5fa36346c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        $__internal_487fed812cec99169f223abe501f9373bca076f4061aa7cb9b06cc25532396cf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_487fed812cec99169f223abe501f9373bca076f4061aa7cb9b06cc25532396cf->enter($__internal_487fed812cec99169f223abe501f9373bca076f4061aa7cb9b06cc25532396cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        // line 1
        echo "<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
";
        
        $__internal_6a1d28b1fd92efbc13be0f829f0453eea0f07ea21232c7c3312defc5fa36346c->leave($__internal_6a1d28b1fd92efbc13be0f829f0453eea0f07ea21232c7c3312defc5fa36346c_prof);

        
        $__internal_487fed812cec99169f223abe501f9373bca076f4061aa7cb9b06cc25532396cf->leave($__internal_487fed812cec99169f223abe501f9373bca076f4061aa7cb9b06cc25532396cf_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
", "@Framework/Form/form.html.php", "/Applications/MAMP/htdocs/Symfony/bdx-1702-coprosyndic/easycopro/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form.html.php");
    }
}

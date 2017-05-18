<?php

/* @Framework/Form/password_widget.html.php */
class __TwigTemplate_b685b16dfe6a86f2059a48079ac009145b60c691ad6abd8c154dc7c55aaa0dce extends Twig_Template
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
        $__internal_79a31c862761a243845ef28358351f59965ce7817e1bb0487d333573c35303fd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_79a31c862761a243845ef28358351f59965ce7817e1bb0487d333573c35303fd->enter($__internal_79a31c862761a243845ef28358351f59965ce7817e1bb0487d333573c35303fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        $__internal_ef97d1d12b9421bb9b432fd19c4ad995ab2ffdfb494d9e6602ccb99445170a44 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ef97d1d12b9421bb9b432fd19c4ad995ab2ffdfb494d9e6602ccb99445170a44->enter($__internal_ef97d1d12b9421bb9b432fd19c4ad995ab2ffdfb494d9e6602ccb99445170a44_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
";
        
        $__internal_79a31c862761a243845ef28358351f59965ce7817e1bb0487d333573c35303fd->leave($__internal_79a31c862761a243845ef28358351f59965ce7817e1bb0487d333573c35303fd_prof);

        
        $__internal_ef97d1d12b9421bb9b432fd19c4ad995ab2ffdfb494d9e6602ccb99445170a44->leave($__internal_ef97d1d12b9421bb9b432fd19c4ad995ab2ffdfb494d9e6602ccb99445170a44_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/password_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
", "@Framework/Form/password_widget.html.php", "/Applications/MAMP/htdocs/Symfony/bdx-1702-coprosyndic/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/password_widget.html.php");
    }
}

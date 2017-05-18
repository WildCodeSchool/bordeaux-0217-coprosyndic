<?php

/* @Framework/Form/reset_widget.html.php */
class __TwigTemplate_a57e3beeace61d5ef344e7724bd92c52149f3194f5fd6da2181ecb0f563dd635 extends Twig_Template
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
        $__internal_79ca896cb36ce005d76526413e6bf3e6e3dd1fb1b3d44490a3b2dc00ede33dc2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_79ca896cb36ce005d76526413e6bf3e6e3dd1fb1b3d44490a3b2dc00ede33dc2->enter($__internal_79ca896cb36ce005d76526413e6bf3e6e3dd1fb1b3d44490a3b2dc00ede33dc2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        $__internal_b678b6ec9c0e44b65925e61dd6cf33f0054cbd105ef9508fd78830261f2e8e48 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b678b6ec9c0e44b65925e61dd6cf33f0054cbd105ef9508fd78830261f2e8e48->enter($__internal_b678b6ec9c0e44b65925e61dd6cf33f0054cbd105ef9508fd78830261f2e8e48_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
";
        
        $__internal_79ca896cb36ce005d76526413e6bf3e6e3dd1fb1b3d44490a3b2dc00ede33dc2->leave($__internal_79ca896cb36ce005d76526413e6bf3e6e3dd1fb1b3d44490a3b2dc00ede33dc2_prof);

        
        $__internal_b678b6ec9c0e44b65925e61dd6cf33f0054cbd105ef9508fd78830261f2e8e48->leave($__internal_b678b6ec9c0e44b65925e61dd6cf33f0054cbd105ef9508fd78830261f2e8e48_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/reset_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
", "@Framework/Form/reset_widget.html.php", "/Applications/MAMP/htdocs/Symfony/bdx-1702-coprosyndic/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/reset_widget.html.php");
    }
}

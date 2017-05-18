<?php

/* @Framework/Form/textarea_widget.html.php */
class __TwigTemplate_a2c9496a9cdfbc8c5a8eb78f7043af9d8fbdcc59a6f6ae7edf5d62a165968ba2 extends Twig_Template
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
        $__internal_76a26ec165baa690877cceae89341532332d7f60a7c9239ab57a576fa1121214 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_76a26ec165baa690877cceae89341532332d7f60a7c9239ab57a576fa1121214->enter($__internal_76a26ec165baa690877cceae89341532332d7f60a7c9239ab57a576fa1121214_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        $__internal_6a2e99104f18f3a807078b4ae374f2a6ea84f9e457332b4f8d6d48eab973a20f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6a2e99104f18f3a807078b4ae374f2a6ea84f9e457332b4f8d6d48eab973a20f->enter($__internal_6a2e99104f18f3a807078b4ae374f2a6ea84f9e457332b4f8d6d48eab973a20f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        // line 1
        echo "<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
";
        
        $__internal_76a26ec165baa690877cceae89341532332d7f60a7c9239ab57a576fa1121214->leave($__internal_76a26ec165baa690877cceae89341532332d7f60a7c9239ab57a576fa1121214_prof);

        
        $__internal_6a2e99104f18f3a807078b4ae374f2a6ea84f9e457332b4f8d6d48eab973a20f->leave($__internal_6a2e99104f18f3a807078b4ae374f2a6ea84f9e457332b4f8d6d48eab973a20f_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/textarea_widget.html.php";
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
        return new Twig_Source("<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
", "@Framework/Form/textarea_widget.html.php", "/Applications/MAMP/htdocs/Symfony/bdx-1702-coprosyndic/easycopro/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/textarea_widget.html.php");
    }
}

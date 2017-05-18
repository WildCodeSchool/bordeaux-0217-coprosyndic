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
        $__internal_fc7fa483b3e888bd4abe3962b0588bc8c7fdc78a4d6e38bc80ccf9b7c58355d9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fc7fa483b3e888bd4abe3962b0588bc8c7fdc78a4d6e38bc80ccf9b7c58355d9->enter($__internal_fc7fa483b3e888bd4abe3962b0588bc8c7fdc78a4d6e38bc80ccf9b7c58355d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        $__internal_3cd4c737cb4c73050475c099064988171fcc9dcdfbae9feb961913b1a8a96621 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3cd4c737cb4c73050475c099064988171fcc9dcdfbae9feb961913b1a8a96621->enter($__internal_3cd4c737cb4c73050475c099064988171fcc9dcdfbae9feb961913b1a8a96621_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        // line 1
        echo "<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
";
        
        $__internal_fc7fa483b3e888bd4abe3962b0588bc8c7fdc78a4d6e38bc80ccf9b7c58355d9->leave($__internal_fc7fa483b3e888bd4abe3962b0588bc8c7fdc78a4d6e38bc80ccf9b7c58355d9_prof);

        
        $__internal_3cd4c737cb4c73050475c099064988171fcc9dcdfbae9feb961913b1a8a96621->leave($__internal_3cd4c737cb4c73050475c099064988171fcc9dcdfbae9feb961913b1a8a96621_prof);

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
", "@Framework/Form/textarea_widget.html.php", "/Applications/MAMP/htdocs/Symfony/bdx-1702-coprosyndic/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/textarea_widget.html.php");
    }
}

<?php

/* @Framework/Form/radio_widget.html.php */
class __TwigTemplate_acc8081fcaf1146b277ef1f3a48793869c4fc2a33e0ab88df9eae448cb9d44c4 extends Twig_Template
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
        $__internal_838cabd3599792142d5c94440ac5238ead8e2f99744f8402187b05dfed402390 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_838cabd3599792142d5c94440ac5238ead8e2f99744f8402187b05dfed402390->enter($__internal_838cabd3599792142d5c94440ac5238ead8e2f99744f8402187b05dfed402390_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        $__internal_ffa97a69f1743d13168c6b78d0fcd85f8888cad21ac429c616eb7abc17c91d4a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ffa97a69f1743d13168c6b78d0fcd85f8888cad21ac429c616eb7abc17c91d4a->enter($__internal_ffa97a69f1743d13168c6b78d0fcd85f8888cad21ac429c616eb7abc17c91d4a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        // line 1
        echo "<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_838cabd3599792142d5c94440ac5238ead8e2f99744f8402187b05dfed402390->leave($__internal_838cabd3599792142d5c94440ac5238ead8e2f99744f8402187b05dfed402390_prof);

        
        $__internal_ffa97a69f1743d13168c6b78d0fcd85f8888cad21ac429c616eb7abc17c91d4a->leave($__internal_ffa97a69f1743d13168c6b78d0fcd85f8888cad21ac429c616eb7abc17c91d4a_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/radio_widget.html.php";
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
        return new Twig_Source("<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
", "@Framework/Form/radio_widget.html.php", "/Applications/MAMP/htdocs/Symfony/bdx-1702-coprosyndic/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/radio_widget.html.php");
    }
}

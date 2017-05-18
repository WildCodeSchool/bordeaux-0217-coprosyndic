<?php

/* @Framework/Form/form_widget_simple.html.php */
class __TwigTemplate_2dc68a2e381a0d8a6a88bbe9c4e6504655ce5db859cf0383c25a40f16eb597fe extends Twig_Template
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
        $__internal_58f327c5d26385f419ff53644a559a7629f16bfd6440cdc18f7e70b4eef2d02a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_58f327c5d26385f419ff53644a559a7629f16bfd6440cdc18f7e70b4eef2d02a->enter($__internal_58f327c5d26385f419ff53644a559a7629f16bfd6440cdc18f7e70b4eef2d02a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        $__internal_881b3237ad0b5f8fa91ad8d56d07d6d4624def7b14a8367d6febf4bece5b0a42 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_881b3237ad0b5f8fa91ad8d56d07d6d4624def7b14a8367d6febf4bece5b0a42->enter($__internal_881b3237ad0b5f8fa91ad8d56d07d6d4624def7b14a8367d6febf4bece5b0a42_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        // line 1
        echo "<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
";
        
        $__internal_58f327c5d26385f419ff53644a559a7629f16bfd6440cdc18f7e70b4eef2d02a->leave($__internal_58f327c5d26385f419ff53644a559a7629f16bfd6440cdc18f7e70b4eef2d02a_prof);

        
        $__internal_881b3237ad0b5f8fa91ad8d56d07d6d4624def7b14a8367d6febf4bece5b0a42->leave($__internal_881b3237ad0b5f8fa91ad8d56d07d6d4624def7b14a8367d6febf4bece5b0a42_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_simple.html.php";
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
        return new Twig_Source("<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
", "@Framework/Form/form_widget_simple.html.php", "/Applications/MAMP/htdocs/Symfony/bdx-1702-coprosyndic/easycopro/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_widget_simple.html.php");
    }
}

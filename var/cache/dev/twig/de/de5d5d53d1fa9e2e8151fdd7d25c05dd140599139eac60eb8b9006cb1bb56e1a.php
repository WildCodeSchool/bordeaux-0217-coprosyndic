<?php

/* @Framework/Form/choice_widget_expanded.html.php */
class __TwigTemplate_2d21deb7b8dff7837c1df8cb15c0027a06ee632763e0470c3d54d1e1acd2e643 extends Twig_Template
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
        $__internal_7b4a86e06a800500a6689eb6fe55c8ff13fb860c744a39216727cc7be2dc2c0b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7b4a86e06a800500a6689eb6fe55c8ff13fb860c744a39216727cc7be2dc2c0b->enter($__internal_7b4a86e06a800500a6689eb6fe55c8ff13fb860c744a39216727cc7be2dc2c0b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        $__internal_1afb0e43df28ed422628b31de9bbec3fa08ab9d55a66a62b349a11d06b964676 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1afb0e43df28ed422628b31de9bbec3fa08ab9d55a66a62b349a11d06b964676->enter($__internal_1afb0e43df28ed422628b31de9bbec3fa08ab9d55a66a62b349a11d06b964676_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
";
        
        $__internal_7b4a86e06a800500a6689eb6fe55c8ff13fb860c744a39216727cc7be2dc2c0b->leave($__internal_7b4a86e06a800500a6689eb6fe55c8ff13fb860c744a39216727cc7be2dc2c0b_prof);

        
        $__internal_1afb0e43df28ed422628b31de9bbec3fa08ab9d55a66a62b349a11d06b964676->leave($__internal_1afb0e43df28ed422628b31de9bbec3fa08ab9d55a66a62b349a11d06b964676_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget_expanded.html.php";
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
        return new Twig_Source("<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
", "@Framework/Form/choice_widget_expanded.html.php", "/Applications/MAMP/htdocs/Symfony/bdx-1702-coprosyndic/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/choice_widget_expanded.html.php");
    }
}

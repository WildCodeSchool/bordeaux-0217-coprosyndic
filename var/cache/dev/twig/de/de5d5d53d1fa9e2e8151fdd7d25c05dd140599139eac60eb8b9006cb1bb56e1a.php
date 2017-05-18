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
        $__internal_38629813597d25dd7383308d8a972c77928997a2c91b18f50af55a60b23dd891 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_38629813597d25dd7383308d8a972c77928997a2c91b18f50af55a60b23dd891->enter($__internal_38629813597d25dd7383308d8a972c77928997a2c91b18f50af55a60b23dd891_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        $__internal_3cfabd058c88dd78d5e9ef641e1cc6047d08f1266d2c595200bfba085becbd09 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3cfabd058c88dd78d5e9ef641e1cc6047d08f1266d2c595200bfba085becbd09->enter($__internal_3cfabd058c88dd78d5e9ef641e1cc6047d08f1266d2c595200bfba085becbd09_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
";
        
        $__internal_38629813597d25dd7383308d8a972c77928997a2c91b18f50af55a60b23dd891->leave($__internal_38629813597d25dd7383308d8a972c77928997a2c91b18f50af55a60b23dd891_prof);

        
        $__internal_3cfabd058c88dd78d5e9ef641e1cc6047d08f1266d2c595200bfba085becbd09->leave($__internal_3cfabd058c88dd78d5e9ef641e1cc6047d08f1266d2c595200bfba085becbd09_prof);

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
", "@Framework/Form/choice_widget_expanded.html.php", "/Applications/MAMP/htdocs/Symfony/bdx-1702-coprosyndic/easycopro/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/choice_widget_expanded.html.php");
    }
}

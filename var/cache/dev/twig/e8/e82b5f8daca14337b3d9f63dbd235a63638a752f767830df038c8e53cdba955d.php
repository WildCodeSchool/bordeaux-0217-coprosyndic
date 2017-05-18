<?php

/* @Framework/Form/datetime_widget.html.php */
class __TwigTemplate_9551d0646aa72e9b90fcc6c8daf868867a32b19fbd85b09f7d97e3b6c45f4bfd extends Twig_Template
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
        $__internal_f71370033c54e3805d59190139f9c3a50f67a0b656b5fde272c058c25902377c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f71370033c54e3805d59190139f9c3a50f67a0b656b5fde272c058c25902377c->enter($__internal_f71370033c54e3805d59190139f9c3a50f67a0b656b5fde272c058c25902377c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        $__internal_a37ed475078ba0f368e00864f146be13bf0a7614d5e96d3cd13d1ab42680a7e8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a37ed475078ba0f368e00864f146be13bf0a7614d5e96d3cd13d1ab42680a7e8->enter($__internal_a37ed475078ba0f368e00864f146be13bf0a7614d5e96d3cd13d1ab42680a7e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        // line 1
        echo "<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
";
        
        $__internal_f71370033c54e3805d59190139f9c3a50f67a0b656b5fde272c058c25902377c->leave($__internal_f71370033c54e3805d59190139f9c3a50f67a0b656b5fde272c058c25902377c_prof);

        
        $__internal_a37ed475078ba0f368e00864f146be13bf0a7614d5e96d3cd13d1ab42680a7e8->leave($__internal_a37ed475078ba0f368e00864f146be13bf0a7614d5e96d3cd13d1ab42680a7e8_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/datetime_widget.html.php";
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
        return new Twig_Source("<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
", "@Framework/Form/datetime_widget.html.php", "/Applications/MAMP/htdocs/Symfony/bdx-1702-coprosyndic/easycopro/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/datetime_widget.html.php");
    }
}

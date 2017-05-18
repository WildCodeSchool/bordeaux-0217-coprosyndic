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
        $__internal_7df29850aff12565de5a45bee64198348308928b0c9ca911f77050e4f4afa60a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7df29850aff12565de5a45bee64198348308928b0c9ca911f77050e4f4afa60a->enter($__internal_7df29850aff12565de5a45bee64198348308928b0c9ca911f77050e4f4afa60a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        $__internal_7c170a222da0ad6323b590a18eff129558bfb05b628fd7ece79db89e29b024a8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7c170a222da0ad6323b590a18eff129558bfb05b628fd7ece79db89e29b024a8->enter($__internal_7c170a222da0ad6323b590a18eff129558bfb05b628fd7ece79db89e29b024a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        // line 1
        echo "<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
";
        
        $__internal_7df29850aff12565de5a45bee64198348308928b0c9ca911f77050e4f4afa60a->leave($__internal_7df29850aff12565de5a45bee64198348308928b0c9ca911f77050e4f4afa60a_prof);

        
        $__internal_7c170a222da0ad6323b590a18eff129558bfb05b628fd7ece79db89e29b024a8->leave($__internal_7c170a222da0ad6323b590a18eff129558bfb05b628fd7ece79db89e29b024a8_prof);

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
", "@Framework/Form/datetime_widget.html.php", "/Applications/MAMP/htdocs/Symfony/bdx-1702-coprosyndic/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/datetime_widget.html.php");
    }
}

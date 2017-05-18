<?php

/* @Framework/Form/form_widget_compound.html.php */
class __TwigTemplate_5e5416f515ff09f051aeca5752f0ecfce7ecf32d540f7919204d777b17fc983c extends Twig_Template
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
        $__internal_0d650a295541dc384b7f644fd8e94b1cbc9562b69fb2d14621da62714157e12a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0d650a295541dc384b7f644fd8e94b1cbc9562b69fb2d14621da62714157e12a->enter($__internal_0d650a295541dc384b7f644fd8e94b1cbc9562b69fb2d14621da62714157e12a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        $__internal_454dd93dd3a137497e0b8b9b7b8fde3ac72addb4aebc7e38e1542d60afc578ad = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_454dd93dd3a137497e0b8b9b7b8fde3ac72addb4aebc7e38e1542d60afc578ad->enter($__internal_454dd93dd3a137497e0b8b9b7b8fde3ac72addb4aebc7e38e1542d60afc578ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
";
        
        $__internal_0d650a295541dc384b7f644fd8e94b1cbc9562b69fb2d14621da62714157e12a->leave($__internal_0d650a295541dc384b7f644fd8e94b1cbc9562b69fb2d14621da62714157e12a_prof);

        
        $__internal_454dd93dd3a137497e0b8b9b7b8fde3ac72addb4aebc7e38e1542d60afc578ad->leave($__internal_454dd93dd3a137497e0b8b9b7b8fde3ac72addb4aebc7e38e1542d60afc578ad_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_compound.html.php";
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
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
", "@Framework/Form/form_widget_compound.html.php", "/Applications/MAMP/htdocs/Symfony/bdx-1702-coprosyndic/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_widget_compound.html.php");
    }
}

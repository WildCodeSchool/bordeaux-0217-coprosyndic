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
        $__internal_7ef5a7ce1cc2ba3c6b020d187e9cf3bab1f226ae4e6bc58f8d84d136334ca305 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7ef5a7ce1cc2ba3c6b020d187e9cf3bab1f226ae4e6bc58f8d84d136334ca305->enter($__internal_7ef5a7ce1cc2ba3c6b020d187e9cf3bab1f226ae4e6bc58f8d84d136334ca305_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        $__internal_41f7883a4fd7a74640931618f57d81791c1e363c31da17936429dfe4e2aa17b2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_41f7883a4fd7a74640931618f57d81791c1e363c31da17936429dfe4e2aa17b2->enter($__internal_41f7883a4fd7a74640931618f57d81791c1e363c31da17936429dfe4e2aa17b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
";
        
        $__internal_7ef5a7ce1cc2ba3c6b020d187e9cf3bab1f226ae4e6bc58f8d84d136334ca305->leave($__internal_7ef5a7ce1cc2ba3c6b020d187e9cf3bab1f226ae4e6bc58f8d84d136334ca305_prof);

        
        $__internal_41f7883a4fd7a74640931618f57d81791c1e363c31da17936429dfe4e2aa17b2->leave($__internal_41f7883a4fd7a74640931618f57d81791c1e363c31da17936429dfe4e2aa17b2_prof);

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
", "@Framework/Form/form_widget_compound.html.php", "/Applications/MAMP/htdocs/Symfony/bdx-1702-coprosyndic/easycopro/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_widget_compound.html.php");
    }
}

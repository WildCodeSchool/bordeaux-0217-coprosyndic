<?php

/* @Framework/Form/checkbox_widget.html.php */
class __TwigTemplate_4939240c8d71e130601f08bbb4bda343dbe9f40335f5412a663449eadf909200 extends Twig_Template
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
        $__internal_f4fc9d7bde788727dc4003388ca41474a7bb74f9a2a5d0ead22fde27086435cd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f4fc9d7bde788727dc4003388ca41474a7bb74f9a2a5d0ead22fde27086435cd->enter($__internal_f4fc9d7bde788727dc4003388ca41474a7bb74f9a2a5d0ead22fde27086435cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        $__internal_21e4c4901c10452b1a6d9b572f77168d975506eb28830a11aefe3571b3558f20 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_21e4c4901c10452b1a6d9b572f77168d975506eb28830a11aefe3571b3558f20->enter($__internal_21e4c4901c10452b1a6d9b572f77168d975506eb28830a11aefe3571b3558f20_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        // line 1
        echo "<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_f4fc9d7bde788727dc4003388ca41474a7bb74f9a2a5d0ead22fde27086435cd->leave($__internal_f4fc9d7bde788727dc4003388ca41474a7bb74f9a2a5d0ead22fde27086435cd_prof);

        
        $__internal_21e4c4901c10452b1a6d9b572f77168d975506eb28830a11aefe3571b3558f20->leave($__internal_21e4c4901c10452b1a6d9b572f77168d975506eb28830a11aefe3571b3558f20_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/checkbox_widget.html.php";
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
        return new Twig_Source("<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
", "@Framework/Form/checkbox_widget.html.php", "/Applications/MAMP/htdocs/Symfony/bdx-1702-coprosyndic/easycopro/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/checkbox_widget.html.php");
    }
}

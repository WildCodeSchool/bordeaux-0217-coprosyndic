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
        $__internal_6072515b5ccb77b6cc48d0ef75d3e5d191f220314364c0b99f71601da7d83042 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6072515b5ccb77b6cc48d0ef75d3e5d191f220314364c0b99f71601da7d83042->enter($__internal_6072515b5ccb77b6cc48d0ef75d3e5d191f220314364c0b99f71601da7d83042_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        $__internal_f34f2949fbcd158b8b7b8da9b2e92358572916cb00beec2e4f56752f1d3807d2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f34f2949fbcd158b8b7b8da9b2e92358572916cb00beec2e4f56752f1d3807d2->enter($__internal_f34f2949fbcd158b8b7b8da9b2e92358572916cb00beec2e4f56752f1d3807d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        // line 1
        echo "<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_6072515b5ccb77b6cc48d0ef75d3e5d191f220314364c0b99f71601da7d83042->leave($__internal_6072515b5ccb77b6cc48d0ef75d3e5d191f220314364c0b99f71601da7d83042_prof);

        
        $__internal_f34f2949fbcd158b8b7b8da9b2e92358572916cb00beec2e4f56752f1d3807d2->leave($__internal_f34f2949fbcd158b8b7b8da9b2e92358572916cb00beec2e4f56752f1d3807d2_prof);

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
", "@Framework/Form/checkbox_widget.html.php", "/Applications/MAMP/htdocs/Symfony/bdx-1702-coprosyndic/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/checkbox_widget.html.php");
    }
}

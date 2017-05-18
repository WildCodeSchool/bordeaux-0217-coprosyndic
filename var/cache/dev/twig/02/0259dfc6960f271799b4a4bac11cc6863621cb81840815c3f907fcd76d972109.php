<?php

/* @Framework/FormTable/form_widget_compound.html.php */
class __TwigTemplate_52d3587c9714c0cc89a08494411f571d4d4f1aed25cee5ed448109dc9acc7a8d extends Twig_Template
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
        $__internal_9a7bb0347eb74d54211a2b8b58faf564e53aeb4f1548fc9d85c16756f149df84 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9a7bb0347eb74d54211a2b8b58faf564e53aeb4f1548fc9d85c16756f149df84->enter($__internal_9a7bb0347eb74d54211a2b8b58faf564e53aeb4f1548fc9d85c16756f149df84_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

        $__internal_4ad5c20e44c255c684a2054c3bbf19e57c81dd5ab3515769028bda49f8d656aa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4ad5c20e44c255c684a2054c3bbf19e57c81dd5ab3515769028bda49f8d656aa->enter($__internal_4ad5c20e44c255c684a2054c3bbf19e57c81dd5ab3515769028bda49f8d656aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

        // line 1
        echo "<table <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <tr>
        <td colspan=\"2\">
            <?php echo \$view['form']->errors(\$form) ?>
        </td>
    </tr>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</table>
";
        
        $__internal_9a7bb0347eb74d54211a2b8b58faf564e53aeb4f1548fc9d85c16756f149df84->leave($__internal_9a7bb0347eb74d54211a2b8b58faf564e53aeb4f1548fc9d85c16756f149df84_prof);

        
        $__internal_4ad5c20e44c255c684a2054c3bbf19e57c81dd5ab3515769028bda49f8d656aa->leave($__internal_4ad5c20e44c255c684a2054c3bbf19e57c81dd5ab3515769028bda49f8d656aa_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_widget_compound.html.php";
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
        return new Twig_Source("<table <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <tr>
        <td colspan=\"2\">
            <?php echo \$view['form']->errors(\$form) ?>
        </td>
    </tr>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</table>
", "@Framework/FormTable/form_widget_compound.html.php", "/Applications/MAMP/htdocs/Symfony/bdx-1702-coprosyndic/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/FormTable/form_widget_compound.html.php");
    }
}

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
        $__internal_34849835a07b1f95297d4edd44b0fd5704d3d44f3d310a01549bda0008f09dd4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_34849835a07b1f95297d4edd44b0fd5704d3d44f3d310a01549bda0008f09dd4->enter($__internal_34849835a07b1f95297d4edd44b0fd5704d3d44f3d310a01549bda0008f09dd4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

        $__internal_7d07da1a0e8a9015f057ddd456c006f61b81fdaac13588b67f02dc8b7d246c4a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7d07da1a0e8a9015f057ddd456c006f61b81fdaac13588b67f02dc8b7d246c4a->enter($__internal_7d07da1a0e8a9015f057ddd456c006f61b81fdaac13588b67f02dc8b7d246c4a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

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
        
        $__internal_34849835a07b1f95297d4edd44b0fd5704d3d44f3d310a01549bda0008f09dd4->leave($__internal_34849835a07b1f95297d4edd44b0fd5704d3d44f3d310a01549bda0008f09dd4_prof);

        
        $__internal_7d07da1a0e8a9015f057ddd456c006f61b81fdaac13588b67f02dc8b7d246c4a->leave($__internal_7d07da1a0e8a9015f057ddd456c006f61b81fdaac13588b67f02dc8b7d246c4a_prof);

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
", "@Framework/FormTable/form_widget_compound.html.php", "/Applications/MAMP/htdocs/Symfony/bdx-1702-coprosyndic/easycopro/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/FormTable/form_widget_compound.html.php");
    }
}

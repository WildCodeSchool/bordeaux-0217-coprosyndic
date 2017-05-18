<?php

/* @Framework/FormTable/form_row.html.php */
class __TwigTemplate_c9d6a6f0b30e3bf0a84e383458e5961cb6e2def60cfba610286895ad10204785 extends Twig_Template
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
        $__internal_bbfce3f73e505ffd91b6c2048cb9ed593b3d24af858079bd552a92fb78f6a07a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bbfce3f73e505ffd91b6c2048cb9ed593b3d24af858079bd552a92fb78f6a07a->enter($__internal_bbfce3f73e505ffd91b6c2048cb9ed593b3d24af858079bd552a92fb78f6a07a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        $__internal_cba83a0253e185878655d5c11f2f2e13aaaff4e9779e8bff1b66eb7f1ca07a1f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cba83a0253e185878655d5c11f2f2e13aaaff4e9779e8bff1b66eb7f1ca07a1f->enter($__internal_cba83a0253e185878655d5c11f2f2e13aaaff4e9779e8bff1b66eb7f1ca07a1f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        // line 1
        echo "<tr>
    <td>
        <?php echo \$view['form']->label(\$form) ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form) ?>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_bbfce3f73e505ffd91b6c2048cb9ed593b3d24af858079bd552a92fb78f6a07a->leave($__internal_bbfce3f73e505ffd91b6c2048cb9ed593b3d24af858079bd552a92fb78f6a07a_prof);

        
        $__internal_cba83a0253e185878655d5c11f2f2e13aaaff4e9779e8bff1b66eb7f1ca07a1f->leave($__internal_cba83a0253e185878655d5c11f2f2e13aaaff4e9779e8bff1b66eb7f1ca07a1f_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_row.html.php";
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
        return new Twig_Source("<tr>
    <td>
        <?php echo \$view['form']->label(\$form) ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form) ?>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
", "@Framework/FormTable/form_row.html.php", "/Applications/MAMP/htdocs/Symfony/bdx-1702-coprosyndic/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/FormTable/form_row.html.php");
    }
}

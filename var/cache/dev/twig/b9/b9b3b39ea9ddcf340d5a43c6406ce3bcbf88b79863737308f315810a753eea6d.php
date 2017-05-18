<?php

/* @Framework/FormTable/hidden_row.html.php */
class __TwigTemplate_fe57c777a999d78c814327b35f450c63aea346a0ace73ee043f6e0cdd0048cd0 extends Twig_Template
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
        $__internal_f6f7c6f40c9232a60594534bb216cade7386e9d145337da9943368c856da69c9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f6f7c6f40c9232a60594534bb216cade7386e9d145337da9943368c856da69c9->enter($__internal_f6f7c6f40c9232a60594534bb216cade7386e9d145337da9943368c856da69c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        $__internal_df9d1cd1aeb425dad92b543f15d1bdfff30436a875c6cc3ac89cad2392f46f74 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_df9d1cd1aeb425dad92b543f15d1bdfff30436a875c6cc3ac89cad2392f46f74->enter($__internal_df9d1cd1aeb425dad92b543f15d1bdfff30436a875c6cc3ac89cad2392f46f74_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        // line 1
        echo "<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_f6f7c6f40c9232a60594534bb216cade7386e9d145337da9943368c856da69c9->leave($__internal_f6f7c6f40c9232a60594534bb216cade7386e9d145337da9943368c856da69c9_prof);

        
        $__internal_df9d1cd1aeb425dad92b543f15d1bdfff30436a875c6cc3ac89cad2392f46f74->leave($__internal_df9d1cd1aeb425dad92b543f15d1bdfff30436a875c6cc3ac89cad2392f46f74_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/hidden_row.html.php";
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
        return new Twig_Source("<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
", "@Framework/FormTable/hidden_row.html.php", "/Applications/MAMP/htdocs/Symfony/bdx-1702-coprosyndic/easycopro/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/FormTable/hidden_row.html.php");
    }
}

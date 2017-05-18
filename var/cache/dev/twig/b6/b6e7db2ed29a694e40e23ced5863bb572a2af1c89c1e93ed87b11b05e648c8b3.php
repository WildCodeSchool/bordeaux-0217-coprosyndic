<?php

/* @Framework/Form/money_widget.html.php */
class __TwigTemplate_b6976b9ec018942d7c084fce8cec64fa8f58cea606fd54f5cba4cd887cf56c32 extends Twig_Template
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
        $__internal_f15f6d9e208a72f07fb8086d931281fa23b7de952aa8e983e0fcd2bb6804cbcd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f15f6d9e208a72f07fb8086d931281fa23b7de952aa8e983e0fcd2bb6804cbcd->enter($__internal_f15f6d9e208a72f07fb8086d931281fa23b7de952aa8e983e0fcd2bb6804cbcd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        $__internal_2a82c160b24f3b6d08691f3a13c0d39868aa7af8733f7bb5a17eddbfc4f700bd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2a82c160b24f3b6d08691f3a13c0d39868aa7af8733f7bb5a17eddbfc4f700bd->enter($__internal_2a82c160b24f3b6d08691f3a13c0d39868aa7af8733f7bb5a17eddbfc4f700bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        // line 1
        echo "<?php echo str_replace('";
        echo twig_escape_filter($this->env, (isset($context["widget"]) ? $context["widget"] : $this->getContext($context, "widget")), "html", null, true);
        echo "', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
";
        
        $__internal_f15f6d9e208a72f07fb8086d931281fa23b7de952aa8e983e0fcd2bb6804cbcd->leave($__internal_f15f6d9e208a72f07fb8086d931281fa23b7de952aa8e983e0fcd2bb6804cbcd_prof);

        
        $__internal_2a82c160b24f3b6d08691f3a13c0d39868aa7af8733f7bb5a17eddbfc4f700bd->leave($__internal_2a82c160b24f3b6d08691f3a13c0d39868aa7af8733f7bb5a17eddbfc4f700bd_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/money_widget.html.php";
    }

    public function isTraitable()
    {
        return false;
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
        return new Twig_Source("<?php echo str_replace('{{ widget }}', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
", "@Framework/Form/money_widget.html.php", "/Applications/MAMP/htdocs/Symfony/bdx-1702-coprosyndic/easycopro/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/money_widget.html.php");
    }
}

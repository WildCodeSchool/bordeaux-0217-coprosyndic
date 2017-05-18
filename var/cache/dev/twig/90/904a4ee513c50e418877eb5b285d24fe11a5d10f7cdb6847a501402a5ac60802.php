<?php

/* @Framework/Form/hidden_row.html.php */
class __TwigTemplate_bdc4a107988af3ffb1294e73c8b9d975e7e84f4fc2c4dd87d84f62dbabf6a5af extends Twig_Template
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
        $__internal_e189390143e92d3550d01e231946493cad540b2fde69611a50a5601ad543c620 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e189390143e92d3550d01e231946493cad540b2fde69611a50a5601ad543c620->enter($__internal_e189390143e92d3550d01e231946493cad540b2fde69611a50a5601ad543c620_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_row.html.php"));

        $__internal_1e1e77fceccf3500e507dab9e7084ce2355ce4c15dff640d9605824897678e53 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1e1e77fceccf3500e507dab9e7084ce2355ce4c15dff640d9605824897678e53->enter($__internal_1e1e77fceccf3500e507dab9e7084ce2355ce4c15dff640d9605824897678e53_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_row.html.php"));

        // line 1
        echo "<?php echo \$view['form']->widget(\$form) ?>
";
        
        $__internal_e189390143e92d3550d01e231946493cad540b2fde69611a50a5601ad543c620->leave($__internal_e189390143e92d3550d01e231946493cad540b2fde69611a50a5601ad543c620_prof);

        
        $__internal_1e1e77fceccf3500e507dab9e7084ce2355ce4c15dff640d9605824897678e53->leave($__internal_1e1e77fceccf3500e507dab9e7084ce2355ce4c15dff640d9605824897678e53_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/hidden_row.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->widget(\$form) ?>
", "@Framework/Form/hidden_row.html.php", "/Applications/MAMP/htdocs/Symfony/bdx-1702-coprosyndic/easycopro/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/hidden_row.html.php");
    }
}

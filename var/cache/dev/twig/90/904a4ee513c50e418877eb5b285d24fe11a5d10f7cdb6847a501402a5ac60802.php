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
        $__internal_823e648016b4c75388af4ca6c51ceab7fa63a8036151d8232af10540929defd7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_823e648016b4c75388af4ca6c51ceab7fa63a8036151d8232af10540929defd7->enter($__internal_823e648016b4c75388af4ca6c51ceab7fa63a8036151d8232af10540929defd7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_row.html.php"));

        $__internal_573ffedf820baeedba3d51c1015303dea8c87145ab33d65ff0fad8fbcaac9f61 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_573ffedf820baeedba3d51c1015303dea8c87145ab33d65ff0fad8fbcaac9f61->enter($__internal_573ffedf820baeedba3d51c1015303dea8c87145ab33d65ff0fad8fbcaac9f61_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_row.html.php"));

        // line 1
        echo "<?php echo \$view['form']->widget(\$form) ?>
";
        
        $__internal_823e648016b4c75388af4ca6c51ceab7fa63a8036151d8232af10540929defd7->leave($__internal_823e648016b4c75388af4ca6c51ceab7fa63a8036151d8232af10540929defd7_prof);

        
        $__internal_573ffedf820baeedba3d51c1015303dea8c87145ab33d65ff0fad8fbcaac9f61->leave($__internal_573ffedf820baeedba3d51c1015303dea8c87145ab33d65ff0fad8fbcaac9f61_prof);

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
", "@Framework/Form/hidden_row.html.php", "/Applications/MAMP/htdocs/Symfony/bdx-1702-coprosyndic/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/hidden_row.html.php");
    }
}

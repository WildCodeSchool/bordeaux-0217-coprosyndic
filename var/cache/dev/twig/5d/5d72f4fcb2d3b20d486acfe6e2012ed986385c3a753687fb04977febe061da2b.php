<?php

/* @Framework/Form/attributes.html.php */
class __TwigTemplate_3b6ca1b2d46da73100521008658378106a83287a0f53afe550aba126b08fa583 extends Twig_Template
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
        $__internal_7e4c65be0f70cc53e8b8ae405eaeb274542563feec83b607233e9baab90b669a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7e4c65be0f70cc53e8b8ae405eaeb274542563feec83b607233e9baab90b669a->enter($__internal_7e4c65be0f70cc53e8b8ae405eaeb274542563feec83b607233e9baab90b669a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/attributes.html.php"));

        $__internal_32da8e6fd6a7389d407ac4b902c7f8c4b451fd1404f6e8568a6f16120486b45c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_32da8e6fd6a7389d407ac4b902c7f8c4b451fd1404f6e8568a6f16120486b45c->enter($__internal_32da8e6fd6a7389d407ac4b902c7f8c4b451fd1404f6e8568a6f16120486b45c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/attributes.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
";
        
        $__internal_7e4c65be0f70cc53e8b8ae405eaeb274542563feec83b607233e9baab90b669a->leave($__internal_7e4c65be0f70cc53e8b8ae405eaeb274542563feec83b607233e9baab90b669a_prof);

        
        $__internal_32da8e6fd6a7389d407ac4b902c7f8c4b451fd1404f6e8568a6f16120486b45c->leave($__internal_32da8e6fd6a7389d407ac4b902c7f8c4b451fd1404f6e8568a6f16120486b45c_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/attributes.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
", "@Framework/Form/attributes.html.php", "/Applications/MAMP/htdocs/Symfony/bdx-1702-coprosyndic/easycopro/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/attributes.html.php");
    }
}

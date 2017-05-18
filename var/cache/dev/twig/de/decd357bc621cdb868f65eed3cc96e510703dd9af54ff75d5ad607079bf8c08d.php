<?php

/* @Framework/Form/password_widget.html.php */
class __TwigTemplate_b685b16dfe6a86f2059a48079ac009145b60c691ad6abd8c154dc7c55aaa0dce extends Twig_Template
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
        $__internal_91336df233675be8423789efe28785852371d2ce385dea652fc88e44e1ae5bbf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_91336df233675be8423789efe28785852371d2ce385dea652fc88e44e1ae5bbf->enter($__internal_91336df233675be8423789efe28785852371d2ce385dea652fc88e44e1ae5bbf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        $__internal_c04e6fbd92e2b1dbeeb6b91724801c65c917d4ce7ee21badb7b65f0ff79247a3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c04e6fbd92e2b1dbeeb6b91724801c65c917d4ce7ee21badb7b65f0ff79247a3->enter($__internal_c04e6fbd92e2b1dbeeb6b91724801c65c917d4ce7ee21badb7b65f0ff79247a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
";
        
        $__internal_91336df233675be8423789efe28785852371d2ce385dea652fc88e44e1ae5bbf->leave($__internal_91336df233675be8423789efe28785852371d2ce385dea652fc88e44e1ae5bbf_prof);

        
        $__internal_c04e6fbd92e2b1dbeeb6b91724801c65c917d4ce7ee21badb7b65f0ff79247a3->leave($__internal_c04e6fbd92e2b1dbeeb6b91724801c65c917d4ce7ee21badb7b65f0ff79247a3_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/password_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
", "@Framework/Form/password_widget.html.php", "/Applications/MAMP/htdocs/Symfony/bdx-1702-coprosyndic/easycopro/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/password_widget.html.php");
    }
}

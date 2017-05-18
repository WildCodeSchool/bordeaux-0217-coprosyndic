<?php

/* @Framework/Form/form_widget.html.php */
class __TwigTemplate_0161c191cb3db52c07e4d4b28ec2a649ba0873feebaa84b2b4ab6655afc723ad extends Twig_Template
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
        $__internal_0bfba46e7119d8b9710ab82579cf6e0fb73e7aadefbda0eb12a2c600a59f7834 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0bfba46e7119d8b9710ab82579cf6e0fb73e7aadefbda0eb12a2c600a59f7834->enter($__internal_0bfba46e7119d8b9710ab82579cf6e0fb73e7aadefbda0eb12a2c600a59f7834_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        $__internal_4797f442f9e44490eb091a92408e9eb6a3a3e5d960bd18b1291907d5b2f0a4db = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4797f442f9e44490eb091a92408e9eb6a3a3e5d960bd18b1291907d5b2f0a4db->enter($__internal_4797f442f9e44490eb091a92408e9eb6a3a3e5d960bd18b1291907d5b2f0a4db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        // line 1
        echo "<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
";
        
        $__internal_0bfba46e7119d8b9710ab82579cf6e0fb73e7aadefbda0eb12a2c600a59f7834->leave($__internal_0bfba46e7119d8b9710ab82579cf6e0fb73e7aadefbda0eb12a2c600a59f7834_prof);

        
        $__internal_4797f442f9e44490eb091a92408e9eb6a3a3e5d960bd18b1291907d5b2f0a4db->leave($__internal_4797f442f9e44490eb091a92408e9eb6a3a3e5d960bd18b1291907d5b2f0a4db_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget.html.php";
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
        return new Twig_Source("<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
", "@Framework/Form/form_widget.html.php", "/Applications/MAMP/htdocs/Symfony/bdx-1702-coprosyndic/easycopro/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_widget.html.php");
    }
}

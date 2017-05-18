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
        $__internal_9cade23b6439cea3f8492ad7e5b6549020087413ffddff330712d2785c145f41 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9cade23b6439cea3f8492ad7e5b6549020087413ffddff330712d2785c145f41->enter($__internal_9cade23b6439cea3f8492ad7e5b6549020087413ffddff330712d2785c145f41_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        $__internal_8e009040acb51f20b08596cfc5f26e5d1061be69fa896cb17823ef010a41a236 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8e009040acb51f20b08596cfc5f26e5d1061be69fa896cb17823ef010a41a236->enter($__internal_8e009040acb51f20b08596cfc5f26e5d1061be69fa896cb17823ef010a41a236_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        // line 1
        echo "<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
";
        
        $__internal_9cade23b6439cea3f8492ad7e5b6549020087413ffddff330712d2785c145f41->leave($__internal_9cade23b6439cea3f8492ad7e5b6549020087413ffddff330712d2785c145f41_prof);

        
        $__internal_8e009040acb51f20b08596cfc5f26e5d1061be69fa896cb17823ef010a41a236->leave($__internal_8e009040acb51f20b08596cfc5f26e5d1061be69fa896cb17823ef010a41a236_prof);

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
", "@Framework/Form/form_widget.html.php", "/Applications/MAMP/htdocs/Symfony/bdx-1702-coprosyndic/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_widget.html.php");
    }
}

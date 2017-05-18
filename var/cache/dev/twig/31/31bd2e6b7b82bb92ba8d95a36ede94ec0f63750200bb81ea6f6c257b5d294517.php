<?php

/* @Framework/Form/choice_widget.html.php */
class __TwigTemplate_30da7ad7b328d25e42683f2fbed74867e739c23ae9b246dee7985d4fe4953f05 extends Twig_Template
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
        $__internal_ce953fd513449845915832afc7903bfa6878bd2d1a7c1a1a318f721b9d051f25 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ce953fd513449845915832afc7903bfa6878bd2d1a7c1a1a318f721b9d051f25->enter($__internal_ce953fd513449845915832afc7903bfa6878bd2d1a7c1a1a318f721b9d051f25_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        $__internal_1d94f1ba27292f9e6853c9625f5352c6fc68be77f2fa2d0cdb75b1533e6f84f6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1d94f1ba27292f9e6853c9625f5352c6fc68be77f2fa2d0cdb75b1533e6f84f6->enter($__internal_1d94f1ba27292f9e6853c9625f5352c6fc68be77f2fa2d0cdb75b1533e6f84f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        // line 1
        echo "<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
";
        
        $__internal_ce953fd513449845915832afc7903bfa6878bd2d1a7c1a1a318f721b9d051f25->leave($__internal_ce953fd513449845915832afc7903bfa6878bd2d1a7c1a1a318f721b9d051f25_prof);

        
        $__internal_1d94f1ba27292f9e6853c9625f5352c6fc68be77f2fa2d0cdb75b1533e6f84f6->leave($__internal_1d94f1ba27292f9e6853c9625f5352c6fc68be77f2fa2d0cdb75b1533e6f84f6_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget.html.php";
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
        return new Twig_Source("<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
", "@Framework/Form/choice_widget.html.php", "/Applications/MAMP/htdocs/Symfony/bdx-1702-coprosyndic/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/choice_widget.html.php");
    }
}

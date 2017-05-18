<?php

/* @Framework/Form/choice_attributes.html.php */
class __TwigTemplate_a5861ca3eed06fdd1521db96ed7b7fb36a2f2fe8de8133a4ff8c3de326dffbd7 extends Twig_Template
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
        $__internal_4662b661e997064d24bf68af4c60f2fbbfdc9261f5e12667d60caf2460ad87d8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4662b661e997064d24bf68af4c60f2fbbfdc9261f5e12667d60caf2460ad87d8->enter($__internal_4662b661e997064d24bf68af4c60f2fbbfdc9261f5e12667d60caf2460ad87d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_attributes.html.php"));

        $__internal_04e4a68802ae3169ff94e11082f6cc955a20f5c2f4165dbee6f550fe7e41c779 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_04e4a68802ae3169ff94e11082f6cc955a20f5c2f4165dbee6f550fe7e41c779->enter($__internal_04e4a68802ae3169ff94e11082f6cc955a20f5c2f4165dbee6f550fe7e41c779_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_attributes.html.php"));

        // line 1
        echo "<?php if (\$disabled): ?>disabled=\"disabled\" <?php endif ?>
<?php foreach (\$choice_attr as \$k => \$v): ?>
<?php if (\$v === true): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$k)) ?>
<?php elseif (\$v !== false): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$v)) ?>
<?php endif ?>
<?php endforeach ?>
";
        
        $__internal_4662b661e997064d24bf68af4c60f2fbbfdc9261f5e12667d60caf2460ad87d8->leave($__internal_4662b661e997064d24bf68af4c60f2fbbfdc9261f5e12667d60caf2460ad87d8_prof);

        
        $__internal_04e4a68802ae3169ff94e11082f6cc955a20f5c2f4165dbee6f550fe7e41c779->leave($__internal_04e4a68802ae3169ff94e11082f6cc955a20f5c2f4165dbee6f550fe7e41c779_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_attributes.html.php";
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
        return new Twig_Source("<?php if (\$disabled): ?>disabled=\"disabled\" <?php endif ?>
<?php foreach (\$choice_attr as \$k => \$v): ?>
<?php if (\$v === true): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$k)) ?>
<?php elseif (\$v !== false): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$v)) ?>
<?php endif ?>
<?php endforeach ?>
", "@Framework/Form/choice_attributes.html.php", "/Applications/MAMP/htdocs/Symfony/bdx-1702-coprosyndic/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/choice_attributes.html.php");
    }
}

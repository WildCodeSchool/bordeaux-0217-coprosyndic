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
        $__internal_26e7f69afe360d9806fab693806d47f8db669a04025c89f5b47406f37c180d3d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_26e7f69afe360d9806fab693806d47f8db669a04025c89f5b47406f37c180d3d->enter($__internal_26e7f69afe360d9806fab693806d47f8db669a04025c89f5b47406f37c180d3d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_attributes.html.php"));

        $__internal_d1dee54279436c34726b4c81e3fb47e983991f1edd54adfd97d8a5532bdb52e0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d1dee54279436c34726b4c81e3fb47e983991f1edd54adfd97d8a5532bdb52e0->enter($__internal_d1dee54279436c34726b4c81e3fb47e983991f1edd54adfd97d8a5532bdb52e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_attributes.html.php"));

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
        
        $__internal_26e7f69afe360d9806fab693806d47f8db669a04025c89f5b47406f37c180d3d->leave($__internal_26e7f69afe360d9806fab693806d47f8db669a04025c89f5b47406f37c180d3d_prof);

        
        $__internal_d1dee54279436c34726b4c81e3fb47e983991f1edd54adfd97d8a5532bdb52e0->leave($__internal_d1dee54279436c34726b4c81e3fb47e983991f1edd54adfd97d8a5532bdb52e0_prof);

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
", "@Framework/Form/choice_attributes.html.php", "/Applications/MAMP/htdocs/Symfony/bdx-1702-coprosyndic/easycopro/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/choice_attributes.html.php");
    }
}

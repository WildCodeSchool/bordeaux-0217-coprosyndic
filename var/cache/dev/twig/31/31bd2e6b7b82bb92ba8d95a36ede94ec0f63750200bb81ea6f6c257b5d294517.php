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
        $__internal_5531a2a4466c39f00ac91ed974e825eb285f8c5e8e20ac0d26a1e63cfb617da7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5531a2a4466c39f00ac91ed974e825eb285f8c5e8e20ac0d26a1e63cfb617da7->enter($__internal_5531a2a4466c39f00ac91ed974e825eb285f8c5e8e20ac0d26a1e63cfb617da7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        $__internal_06c2ed4549adcd7cb9492dd056ba8c3b2e0c49632f55ea63ab8f1fe1b106d065 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_06c2ed4549adcd7cb9492dd056ba8c3b2e0c49632f55ea63ab8f1fe1b106d065->enter($__internal_06c2ed4549adcd7cb9492dd056ba8c3b2e0c49632f55ea63ab8f1fe1b106d065_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        // line 1
        echo "<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
";
        
        $__internal_5531a2a4466c39f00ac91ed974e825eb285f8c5e8e20ac0d26a1e63cfb617da7->leave($__internal_5531a2a4466c39f00ac91ed974e825eb285f8c5e8e20ac0d26a1e63cfb617da7_prof);

        
        $__internal_06c2ed4549adcd7cb9492dd056ba8c3b2e0c49632f55ea63ab8f1fe1b106d065->leave($__internal_06c2ed4549adcd7cb9492dd056ba8c3b2e0c49632f55ea63ab8f1fe1b106d065_prof);

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
", "@Framework/Form/choice_widget.html.php", "/Applications/MAMP/htdocs/Symfony/bdx-1702-coprosyndic/easycopro/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/choice_widget.html.php");
    }
}

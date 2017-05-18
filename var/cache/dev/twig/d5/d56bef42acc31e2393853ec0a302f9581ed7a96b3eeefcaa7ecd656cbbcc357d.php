<?php

/* @Framework/Form/number_widget.html.php */
class __TwigTemplate_f7f61c297d6a7c736ca87a082777a38766034271aac3973d25c72cca63a94419 extends Twig_Template
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
        $__internal_097efc946511ffe1a65e9a9221e43ecff66a3f19bee1077de33e1f7427c65b5b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_097efc946511ffe1a65e9a9221e43ecff66a3f19bee1077de33e1f7427c65b5b->enter($__internal_097efc946511ffe1a65e9a9221e43ecff66a3f19bee1077de33e1f7427c65b5b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/number_widget.html.php"));

        $__internal_2d8f4decf363de8600c4d84deaa5a178c44f7c796bba204832b7bbdfa312725e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2d8f4decf363de8600c4d84deaa5a178c44f7c796bba204832b7bbdfa312725e->enter($__internal_2d8f4decf363de8600c4d84deaa5a178c44f7c796bba204832b7bbdfa312725e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/number_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?>
";
        
        $__internal_097efc946511ffe1a65e9a9221e43ecff66a3f19bee1077de33e1f7427c65b5b->leave($__internal_097efc946511ffe1a65e9a9221e43ecff66a3f19bee1077de33e1f7427c65b5b_prof);

        
        $__internal_2d8f4decf363de8600c4d84deaa5a178c44f7c796bba204832b7bbdfa312725e->leave($__internal_2d8f4decf363de8600c4d84deaa5a178c44f7c796bba204832b7bbdfa312725e_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/number_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?>
", "@Framework/Form/number_widget.html.php", "/Applications/MAMP/htdocs/Symfony/bdx-1702-coprosyndic/easycopro/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/number_widget.html.php");
    }
}

<?php

/* @Framework/Form/integer_widget.html.php */
class __TwigTemplate_433e2ea3e52165e8df8dee4526a176f3d2a615947455ef007141e68fd142ec61 extends Twig_Template
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
        $__internal_3a4b37c423a3e0510a28faaf990062d78c86a55d5728547e4a9e3ad15895cc6c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3a4b37c423a3e0510a28faaf990062d78c86a55d5728547e4a9e3ad15895cc6c->enter($__internal_3a4b37c423a3e0510a28faaf990062d78c86a55d5728547e4a9e3ad15895cc6c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        $__internal_2deb66d2a1c4fac4119f9ad3fe5a2ec074d0385e0065b1b48160cc4aa1d4e8a6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2deb66d2a1c4fac4119f9ad3fe5a2ec074d0385e0065b1b48160cc4aa1d4e8a6->enter($__internal_2deb66d2a1c4fac4119f9ad3fe5a2ec074d0385e0065b1b48160cc4aa1d4e8a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
";
        
        $__internal_3a4b37c423a3e0510a28faaf990062d78c86a55d5728547e4a9e3ad15895cc6c->leave($__internal_3a4b37c423a3e0510a28faaf990062d78c86a55d5728547e4a9e3ad15895cc6c_prof);

        
        $__internal_2deb66d2a1c4fac4119f9ad3fe5a2ec074d0385e0065b1b48160cc4aa1d4e8a6->leave($__internal_2deb66d2a1c4fac4119f9ad3fe5a2ec074d0385e0065b1b48160cc4aa1d4e8a6_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/integer_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
", "@Framework/Form/integer_widget.html.php", "/Applications/MAMP/htdocs/Symfony/bdx-1702-coprosyndic/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/integer_widget.html.php");
    }
}

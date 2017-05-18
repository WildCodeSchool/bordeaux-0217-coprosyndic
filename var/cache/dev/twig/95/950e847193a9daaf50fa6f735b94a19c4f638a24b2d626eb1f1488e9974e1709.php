<?php

/* @Framework/Form/email_widget.html.php */
class __TwigTemplate_06924a1356a8fa6502f04dabbc9691d0029bfeffc861796df5a68debcd11c7ce extends Twig_Template
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
        $__internal_cd7d6dc58f3956530ecb956d9e91dc115e9b27035463a6584d28f1a8a758408c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cd7d6dc58f3956530ecb956d9e91dc115e9b27035463a6584d28f1a8a758408c->enter($__internal_cd7d6dc58f3956530ecb956d9e91dc115e9b27035463a6584d28f1a8a758408c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        $__internal_4a2c0af401da556a0c02284d7d5c86a158d80b52da19bc69f9fe894f2048ea6e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4a2c0af401da556a0c02284d7d5c86a158d80b52da19bc69f9fe894f2048ea6e->enter($__internal_4a2c0af401da556a0c02284d7d5c86a158d80b52da19bc69f9fe894f2048ea6e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
";
        
        $__internal_cd7d6dc58f3956530ecb956d9e91dc115e9b27035463a6584d28f1a8a758408c->leave($__internal_cd7d6dc58f3956530ecb956d9e91dc115e9b27035463a6584d28f1a8a758408c_prof);

        
        $__internal_4a2c0af401da556a0c02284d7d5c86a158d80b52da19bc69f9fe894f2048ea6e->leave($__internal_4a2c0af401da556a0c02284d7d5c86a158d80b52da19bc69f9fe894f2048ea6e_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/email_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
", "@Framework/Form/email_widget.html.php", "/Applications/MAMP/htdocs/Symfony/bdx-1702-coprosyndic/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/email_widget.html.php");
    }
}

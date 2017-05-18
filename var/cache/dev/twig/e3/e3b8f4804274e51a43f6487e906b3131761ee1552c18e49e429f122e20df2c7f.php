<?php

/* @Framework/Form/hidden_widget.html.php */
class __TwigTemplate_94dc0279a6d8e22bf237b0582aa864b73e2a8daa85e8f9a9df988553033f63d7 extends Twig_Template
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
        $__internal_52126357b33263fcf0e633ab076c708d07d01148e637e2538996964adfe4c35a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_52126357b33263fcf0e633ab076c708d07d01148e637e2538996964adfe4c35a->enter($__internal_52126357b33263fcf0e633ab076c708d07d01148e637e2538996964adfe4c35a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        $__internal_0d987c0f60479506eeb52749a1b46df9b9cc138cca9807361e696602c6d91e71 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0d987c0f60479506eeb52749a1b46df9b9cc138cca9807361e696602c6d91e71->enter($__internal_0d987c0f60479506eeb52749a1b46df9b9cc138cca9807361e696602c6d91e71_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
";
        
        $__internal_52126357b33263fcf0e633ab076c708d07d01148e637e2538996964adfe4c35a->leave($__internal_52126357b33263fcf0e633ab076c708d07d01148e637e2538996964adfe4c35a_prof);

        
        $__internal_0d987c0f60479506eeb52749a1b46df9b9cc138cca9807361e696602c6d91e71->leave($__internal_0d987c0f60479506eeb52749a1b46df9b9cc138cca9807361e696602c6d91e71_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/hidden_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
", "@Framework/Form/hidden_widget.html.php", "/Applications/MAMP/htdocs/Symfony/bdx-1702-coprosyndic/easycopro/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/hidden_widget.html.php");
    }
}

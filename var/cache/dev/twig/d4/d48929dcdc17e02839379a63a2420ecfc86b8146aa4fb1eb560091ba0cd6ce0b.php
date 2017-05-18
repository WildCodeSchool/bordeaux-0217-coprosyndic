<?php

/* @Framework/Form/percent_widget.html.php */
class __TwigTemplate_d73eb0827a759900e7561ec6bb50fee62aaeadf76beb4620a683399b86322d24 extends Twig_Template
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
        $__internal_f6659dd825305e940c46bc469b1a9cd10da972a637280067722a79a0c693683e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f6659dd825305e940c46bc469b1a9cd10da972a637280067722a79a0c693683e->enter($__internal_f6659dd825305e940c46bc469b1a9cd10da972a637280067722a79a0c693683e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/percent_widget.html.php"));

        $__internal_e2c26acc120a318e4bd51df7b33b102af5ce7b024eff397f9205bb7270f9d99c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e2c26acc120a318e4bd51df7b33b102af5ce7b024eff397f9205bb7270f9d99c->enter($__internal_e2c26acc120a318e4bd51df7b33b102af5ce7b024eff397f9205bb7270f9d99c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/percent_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?> %
";
        
        $__internal_f6659dd825305e940c46bc469b1a9cd10da972a637280067722a79a0c693683e->leave($__internal_f6659dd825305e940c46bc469b1a9cd10da972a637280067722a79a0c693683e_prof);

        
        $__internal_e2c26acc120a318e4bd51df7b33b102af5ce7b024eff397f9205bb7270f9d99c->leave($__internal_e2c26acc120a318e4bd51df7b33b102af5ce7b024eff397f9205bb7270f9d99c_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/percent_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?> %
", "@Framework/Form/percent_widget.html.php", "/Applications/MAMP/htdocs/Symfony/bdx-1702-coprosyndic/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/percent_widget.html.php");
    }
}

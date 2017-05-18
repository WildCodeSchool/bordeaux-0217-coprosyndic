<?php

/* @Framework/Form/attributes.html.php */
class __TwigTemplate_3b6ca1b2d46da73100521008658378106a83287a0f53afe550aba126b08fa583 extends Twig_Template
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
        $__internal_c08ac8b3428ba9d76da354707181ea218ed7094c11895b233519a8e501aaa511 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c08ac8b3428ba9d76da354707181ea218ed7094c11895b233519a8e501aaa511->enter($__internal_c08ac8b3428ba9d76da354707181ea218ed7094c11895b233519a8e501aaa511_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/attributes.html.php"));

        $__internal_6407e1e5b830f26c54efc2e9eec78e0fcb8d28903e129d08dd57751cfadc1fef = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6407e1e5b830f26c54efc2e9eec78e0fcb8d28903e129d08dd57751cfadc1fef->enter($__internal_6407e1e5b830f26c54efc2e9eec78e0fcb8d28903e129d08dd57751cfadc1fef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/attributes.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
";
        
        $__internal_c08ac8b3428ba9d76da354707181ea218ed7094c11895b233519a8e501aaa511->leave($__internal_c08ac8b3428ba9d76da354707181ea218ed7094c11895b233519a8e501aaa511_prof);

        
        $__internal_6407e1e5b830f26c54efc2e9eec78e0fcb8d28903e129d08dd57751cfadc1fef->leave($__internal_6407e1e5b830f26c54efc2e9eec78e0fcb8d28903e129d08dd57751cfadc1fef_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/attributes.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
", "@Framework/Form/attributes.html.php", "/Applications/MAMP/htdocs/Symfony/bdx-1702-coprosyndic/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/attributes.html.php");
    }
}

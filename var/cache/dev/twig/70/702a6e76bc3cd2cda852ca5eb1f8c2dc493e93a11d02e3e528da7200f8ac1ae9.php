<?php

/* @Framework/FormTable/button_row.html.php */
class __TwigTemplate_470af82c395534327fa4192cf28e5ca126e59715193e849734abd49f87d02b2d extends Twig_Template
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
        $__internal_9e09fef607f1d3f1af7b7fb5766fd2e82ca94f91cf3670193915938f8f78b6ef = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9e09fef607f1d3f1af7b7fb5766fd2e82ca94f91cf3670193915938f8f78b6ef->enter($__internal_9e09fef607f1d3f1af7b7fb5766fd2e82ca94f91cf3670193915938f8f78b6ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        $__internal_b7eee17ae56d0c71b79e0f2fdecd6c26b06243b3db73ad3a9c01d0e8f45abaf2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b7eee17ae56d0c71b79e0f2fdecd6c26b06243b3db73ad3a9c01d0e8f45abaf2->enter($__internal_b7eee17ae56d0c71b79e0f2fdecd6c26b06243b3db73ad3a9c01d0e8f45abaf2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        // line 1
        echo "<tr>
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_9e09fef607f1d3f1af7b7fb5766fd2e82ca94f91cf3670193915938f8f78b6ef->leave($__internal_9e09fef607f1d3f1af7b7fb5766fd2e82ca94f91cf3670193915938f8f78b6ef_prof);

        
        $__internal_b7eee17ae56d0c71b79e0f2fdecd6c26b06243b3db73ad3a9c01d0e8f45abaf2->leave($__internal_b7eee17ae56d0c71b79e0f2fdecd6c26b06243b3db73ad3a9c01d0e8f45abaf2_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/button_row.html.php";
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
        return new Twig_Source("<tr>
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
", "@Framework/FormTable/button_row.html.php", "/Applications/MAMP/htdocs/Symfony/bdx-1702-coprosyndic/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/FormTable/button_row.html.php");
    }
}

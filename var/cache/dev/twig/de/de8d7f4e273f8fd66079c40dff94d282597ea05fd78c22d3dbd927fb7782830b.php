<?php

/* @Framework/Form/form_row.html.php */
class __TwigTemplate_0992200e561741c94855ec9c52355578c09f2c1fbf44ef79972620a1370059fc extends Twig_Template
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
        $__internal_f2c43ac6dfe2c7859a036175988d1611beab7b00c87119cb8e19b672921f5834 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f2c43ac6dfe2c7859a036175988d1611beab7b00c87119cb8e19b672921f5834->enter($__internal_f2c43ac6dfe2c7859a036175988d1611beab7b00c87119cb8e19b672921f5834_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        $__internal_c71388f5bef37b8231a8f788cc144bf591143fef414ea1d874bff3144e513e05 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c71388f5bef37b8231a8f788cc144bf591143fef414ea1d874bff3144e513e05->enter($__internal_c71388f5bef37b8231a8f788cc144bf591143fef414ea1d874bff3144e513e05_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_f2c43ac6dfe2c7859a036175988d1611beab7b00c87119cb8e19b672921f5834->leave($__internal_f2c43ac6dfe2c7859a036175988d1611beab7b00c87119cb8e19b672921f5834_prof);

        
        $__internal_c71388f5bef37b8231a8f788cc144bf591143fef414ea1d874bff3144e513e05->leave($__internal_c71388f5bef37b8231a8f788cc144bf591143fef414ea1d874bff3144e513e05_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_row.html.php";
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
        return new Twig_Source("<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
", "@Framework/Form/form_row.html.php", "/Applications/MAMP/htdocs/Symfony/bdx-1702-coprosyndic/easycopro/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_row.html.php");
    }
}

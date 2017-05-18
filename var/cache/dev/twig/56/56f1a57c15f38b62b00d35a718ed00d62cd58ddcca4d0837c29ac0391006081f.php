<?php

/* @Framework/Form/repeated_row.html.php */
class __TwigTemplate_e0d3b71ee19282b132d23fd687a27d7e1f4987079585de9815742d6f15c30eb5 extends Twig_Template
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
        $__internal_4696f5a6ad613b987a1289693e73850f98e1e24defbe8e6807bad627ba52bb44 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4696f5a6ad613b987a1289693e73850f98e1e24defbe8e6807bad627ba52bb44->enter($__internal_4696f5a6ad613b987a1289693e73850f98e1e24defbe8e6807bad627ba52bb44_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/repeated_row.html.php"));

        $__internal_484eacec429fd13e932cfffe7e01b5be435795b9dede9563198517defec8333c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_484eacec429fd13e932cfffe7e01b5be435795b9dede9563198517defec8333c->enter($__internal_484eacec429fd13e932cfffe7e01b5be435795b9dede9563198517defec8333c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/repeated_row.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_rows') ?>
";
        
        $__internal_4696f5a6ad613b987a1289693e73850f98e1e24defbe8e6807bad627ba52bb44->leave($__internal_4696f5a6ad613b987a1289693e73850f98e1e24defbe8e6807bad627ba52bb44_prof);

        
        $__internal_484eacec429fd13e932cfffe7e01b5be435795b9dede9563198517defec8333c->leave($__internal_484eacec429fd13e932cfffe7e01b5be435795b9dede9563198517defec8333c_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/repeated_row.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_rows') ?>
", "@Framework/Form/repeated_row.html.php", "/Applications/MAMP/htdocs/Symfony/bdx-1702-coprosyndic/easycopro/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/repeated_row.html.php");
    }
}

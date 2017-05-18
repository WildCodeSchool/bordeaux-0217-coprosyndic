<?php

/* @Framework/Form/reset_widget.html.php */
class __TwigTemplate_a57e3beeace61d5ef344e7724bd92c52149f3194f5fd6da2181ecb0f563dd635 extends Twig_Template
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
        $__internal_edc564ab4843c1336461ad6aea172b8a6e583418207a202eb52299b542a9618d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_edc564ab4843c1336461ad6aea172b8a6e583418207a202eb52299b542a9618d->enter($__internal_edc564ab4843c1336461ad6aea172b8a6e583418207a202eb52299b542a9618d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        $__internal_bdee8bbd406e5ec2a72ef1f484948748f0ff7b93701caab2f637be390515f5bc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bdee8bbd406e5ec2a72ef1f484948748f0ff7b93701caab2f637be390515f5bc->enter($__internal_bdee8bbd406e5ec2a72ef1f484948748f0ff7b93701caab2f637be390515f5bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
";
        
        $__internal_edc564ab4843c1336461ad6aea172b8a6e583418207a202eb52299b542a9618d->leave($__internal_edc564ab4843c1336461ad6aea172b8a6e583418207a202eb52299b542a9618d_prof);

        
        $__internal_bdee8bbd406e5ec2a72ef1f484948748f0ff7b93701caab2f637be390515f5bc->leave($__internal_bdee8bbd406e5ec2a72ef1f484948748f0ff7b93701caab2f637be390515f5bc_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/reset_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
", "@Framework/Form/reset_widget.html.php", "/Applications/MAMP/htdocs/Symfony/bdx-1702-coprosyndic/easycopro/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/reset_widget.html.php");
    }
}

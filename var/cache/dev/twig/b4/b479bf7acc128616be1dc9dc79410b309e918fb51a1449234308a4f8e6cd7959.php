<?php

/* @Framework/Form/button_row.html.php */
class __TwigTemplate_95dfecc2bc54143adf6739b230500a66d929caa10de6f5bfaf6ce3ad3a17378e extends Twig_Template
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
        $__internal_d2060aff33152889022affe72df0c01c6b354cc92c214bf59d0fca9cd4a6a2fe = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d2060aff33152889022affe72df0c01c6b354cc92c214bf59d0fca9cd4a6a2fe->enter($__internal_d2060aff33152889022affe72df0c01c6b354cc92c214bf59d0fca9cd4a6a2fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        $__internal_4610551ef5c890eca2bca998ee29823f9e1da2cb3398b928e64b3a8abd65705b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4610551ef5c890eca2bca998ee29823f9e1da2cb3398b928e64b3a8abd65705b->enter($__internal_4610551ef5c890eca2bca998ee29823f9e1da2cb3398b928e64b3a8abd65705b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_d2060aff33152889022affe72df0c01c6b354cc92c214bf59d0fca9cd4a6a2fe->leave($__internal_d2060aff33152889022affe72df0c01c6b354cc92c214bf59d0fca9cd4a6a2fe_prof);

        
        $__internal_4610551ef5c890eca2bca998ee29823f9e1da2cb3398b928e64b3a8abd65705b->leave($__internal_4610551ef5c890eca2bca998ee29823f9e1da2cb3398b928e64b3a8abd65705b_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_row.html.php";
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
    <?php echo \$view['form']->widget(\$form) ?>
</div>
", "@Framework/Form/button_row.html.php", "/Applications/MAMP/htdocs/Symfony/bdx-1702-coprosyndic/easycopro/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/button_row.html.php");
    }
}

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
        $__internal_f2beb2e0e7384679c0322429f333ce77d1b91ccc7d6fd6888ea02530ea512257 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f2beb2e0e7384679c0322429f333ce77d1b91ccc7d6fd6888ea02530ea512257->enter($__internal_f2beb2e0e7384679c0322429f333ce77d1b91ccc7d6fd6888ea02530ea512257_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        $__internal_5a97c5b0fea3c0d11b4975a10fcba8a35a80c792021355f041e51e5755fbb8bd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5a97c5b0fea3c0d11b4975a10fcba8a35a80c792021355f041e51e5755fbb8bd->enter($__internal_5a97c5b0fea3c0d11b4975a10fcba8a35a80c792021355f041e51e5755fbb8bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
";
        
        $__internal_f2beb2e0e7384679c0322429f333ce77d1b91ccc7d6fd6888ea02530ea512257->leave($__internal_f2beb2e0e7384679c0322429f333ce77d1b91ccc7d6fd6888ea02530ea512257_prof);

        
        $__internal_5a97c5b0fea3c0d11b4975a10fcba8a35a80c792021355f041e51e5755fbb8bd->leave($__internal_5a97c5b0fea3c0d11b4975a10fcba8a35a80c792021355f041e51e5755fbb8bd_prof);

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
", "@Framework/Form/integer_widget.html.php", "/Applications/MAMP/htdocs/Symfony/bdx-1702-coprosyndic/easycopro/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/integer_widget.html.php");
    }
}

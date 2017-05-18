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
        $__internal_c69f38f1d6c6fc4e41a5134ce98232497b156623edfeceaa840ce80664de0e79 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c69f38f1d6c6fc4e41a5134ce98232497b156623edfeceaa840ce80664de0e79->enter($__internal_c69f38f1d6c6fc4e41a5134ce98232497b156623edfeceaa840ce80664de0e79_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        $__internal_ef51df2b21a0307804cec52f7701934949c0abe993f8dcbb0e645d61b914c708 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ef51df2b21a0307804cec52f7701934949c0abe993f8dcbb0e645d61b914c708->enter($__internal_ef51df2b21a0307804cec52f7701934949c0abe993f8dcbb0e645d61b914c708_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
";
        
        $__internal_c69f38f1d6c6fc4e41a5134ce98232497b156623edfeceaa840ce80664de0e79->leave($__internal_c69f38f1d6c6fc4e41a5134ce98232497b156623edfeceaa840ce80664de0e79_prof);

        
        $__internal_ef51df2b21a0307804cec52f7701934949c0abe993f8dcbb0e645d61b914c708->leave($__internal_ef51df2b21a0307804cec52f7701934949c0abe993f8dcbb0e645d61b914c708_prof);

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
", "@Framework/Form/hidden_widget.html.php", "/Applications/MAMP/htdocs/Symfony/bdx-1702-coprosyndic/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/hidden_widget.html.php");
    }
}

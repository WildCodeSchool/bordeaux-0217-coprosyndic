<?php

/* @Framework/Form/submit_widget.html.php */
class __TwigTemplate_e1721a60dc789c3a6c99dca65dbac793c1f7da38caaf9309163e7e38eaf50e45 extends Twig_Template
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
        $__internal_1136797f8c82c7d8a3d1403aedfa9aa235b5ccbd9befd989dd6d0c44a871be3d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1136797f8c82c7d8a3d1403aedfa9aa235b5ccbd9befd989dd6d0c44a871be3d->enter($__internal_1136797f8c82c7d8a3d1403aedfa9aa235b5ccbd9befd989dd6d0c44a871be3d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        $__internal_cec576f2ab321a587aa5770969bd1ca161098dcf3fb052a516349e28ca6dfd54 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cec576f2ab321a587aa5770969bd1ca161098dcf3fb052a516349e28ca6dfd54->enter($__internal_cec576f2ab321a587aa5770969bd1ca161098dcf3fb052a516349e28ca6dfd54_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
";
        
        $__internal_1136797f8c82c7d8a3d1403aedfa9aa235b5ccbd9befd989dd6d0c44a871be3d->leave($__internal_1136797f8c82c7d8a3d1403aedfa9aa235b5ccbd9befd989dd6d0c44a871be3d_prof);

        
        $__internal_cec576f2ab321a587aa5770969bd1ca161098dcf3fb052a516349e28ca6dfd54->leave($__internal_cec576f2ab321a587aa5770969bd1ca161098dcf3fb052a516349e28ca6dfd54_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/submit_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
", "@Framework/Form/submit_widget.html.php", "/Applications/MAMP/htdocs/Symfony/bdx-1702-coprosyndic/easycopro/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/submit_widget.html.php");
    }
}

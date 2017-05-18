<?php

/* @Framework/Form/search_widget.html.php */
class __TwigTemplate_6433c15b8cce8609775c1d6f40f542b10dd83c95a66ac90f302beae12654d522 extends Twig_Template
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
        $__internal_b2d7dd1eda0fb6404bfa76afdbdbf7d66480c2976593f52a5f3af3d27a947ab2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b2d7dd1eda0fb6404bfa76afdbdbf7d66480c2976593f52a5f3af3d27a947ab2->enter($__internal_b2d7dd1eda0fb6404bfa76afdbdbf7d66480c2976593f52a5f3af3d27a947ab2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        $__internal_de6301d1fcb531e95c6485d19b62def80a15141d0c6078e4c883fd0cbe88f5f6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_de6301d1fcb531e95c6485d19b62def80a15141d0c6078e4c883fd0cbe88f5f6->enter($__internal_de6301d1fcb531e95c6485d19b62def80a15141d0c6078e4c883fd0cbe88f5f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'search')) ?>
";
        
        $__internal_b2d7dd1eda0fb6404bfa76afdbdbf7d66480c2976593f52a5f3af3d27a947ab2->leave($__internal_b2d7dd1eda0fb6404bfa76afdbdbf7d66480c2976593f52a5f3af3d27a947ab2_prof);

        
        $__internal_de6301d1fcb531e95c6485d19b62def80a15141d0c6078e4c883fd0cbe88f5f6->leave($__internal_de6301d1fcb531e95c6485d19b62def80a15141d0c6078e4c883fd0cbe88f5f6_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/search_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'search')) ?>
", "@Framework/Form/search_widget.html.php", "/Applications/MAMP/htdocs/Symfony/bdx-1702-coprosyndic/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/search_widget.html.php");
    }
}

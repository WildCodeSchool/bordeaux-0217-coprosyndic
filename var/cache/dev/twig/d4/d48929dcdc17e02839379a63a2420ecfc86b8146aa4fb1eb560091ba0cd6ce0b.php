<?php

/* @Framework/Form/percent_widget.html.php */
class __TwigTemplate_d73eb0827a759900e7561ec6bb50fee62aaeadf76beb4620a683399b86322d24 extends Twig_Template
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
        $__internal_1b6d141626b67529ad3dea01b2241ba218780ae80eae6c003f129485156e961b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1b6d141626b67529ad3dea01b2241ba218780ae80eae6c003f129485156e961b->enter($__internal_1b6d141626b67529ad3dea01b2241ba218780ae80eae6c003f129485156e961b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/percent_widget.html.php"));

        $__internal_8f69ad4d4e2ad25c5297d0025b3cfc5df5fa7103ab88c43ff01a2a5b82503d47 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8f69ad4d4e2ad25c5297d0025b3cfc5df5fa7103ab88c43ff01a2a5b82503d47->enter($__internal_8f69ad4d4e2ad25c5297d0025b3cfc5df5fa7103ab88c43ff01a2a5b82503d47_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/percent_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?> %
";
        
        $__internal_1b6d141626b67529ad3dea01b2241ba218780ae80eae6c003f129485156e961b->leave($__internal_1b6d141626b67529ad3dea01b2241ba218780ae80eae6c003f129485156e961b_prof);

        
        $__internal_8f69ad4d4e2ad25c5297d0025b3cfc5df5fa7103ab88c43ff01a2a5b82503d47->leave($__internal_8f69ad4d4e2ad25c5297d0025b3cfc5df5fa7103ab88c43ff01a2a5b82503d47_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/percent_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?> %
", "@Framework/Form/percent_widget.html.php", "/Applications/MAMP/htdocs/Symfony/bdx-1702-coprosyndic/easycopro/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/percent_widget.html.php");
    }
}

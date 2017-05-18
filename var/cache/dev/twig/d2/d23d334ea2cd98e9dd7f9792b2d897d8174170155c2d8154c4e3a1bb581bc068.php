<?php

/* @Framework/Form/form_widget_simple.html.php */
class __TwigTemplate_2dc68a2e381a0d8a6a88bbe9c4e6504655ce5db859cf0383c25a40f16eb597fe extends Twig_Template
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
        $__internal_3c633bdf079bce0d414f02cfee85c95413eccb9692640e05209b002706fba42e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3c633bdf079bce0d414f02cfee85c95413eccb9692640e05209b002706fba42e->enter($__internal_3c633bdf079bce0d414f02cfee85c95413eccb9692640e05209b002706fba42e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        $__internal_a3de5bb9ac720ba144923c468b0f68b0641b90386198a29078c7737c9a6cefec = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a3de5bb9ac720ba144923c468b0f68b0641b90386198a29078c7737c9a6cefec->enter($__internal_a3de5bb9ac720ba144923c468b0f68b0641b90386198a29078c7737c9a6cefec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        // line 1
        echo "<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
";
        
        $__internal_3c633bdf079bce0d414f02cfee85c95413eccb9692640e05209b002706fba42e->leave($__internal_3c633bdf079bce0d414f02cfee85c95413eccb9692640e05209b002706fba42e_prof);

        
        $__internal_a3de5bb9ac720ba144923c468b0f68b0641b90386198a29078c7737c9a6cefec->leave($__internal_a3de5bb9ac720ba144923c468b0f68b0641b90386198a29078c7737c9a6cefec_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_simple.html.php";
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
        return new Twig_Source("<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
", "@Framework/Form/form_widget_simple.html.php", "/Applications/MAMP/htdocs/Symfony/bdx-1702-coprosyndic/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_widget_simple.html.php");
    }
}

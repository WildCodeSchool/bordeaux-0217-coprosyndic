<?php

/* @Framework/Form/radio_widget.html.php */
class __TwigTemplate_acc8081fcaf1146b277ef1f3a48793869c4fc2a33e0ab88df9eae448cb9d44c4 extends Twig_Template
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
        $__internal_dc2295e4a0649730bfd63029387140f6307939245c71881f43919d92de674f4b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dc2295e4a0649730bfd63029387140f6307939245c71881f43919d92de674f4b->enter($__internal_dc2295e4a0649730bfd63029387140f6307939245c71881f43919d92de674f4b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        $__internal_717f4dc6e22cfdf69aca00cffef049ce28517ee5ab24e372f3ceda8bdcc98821 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_717f4dc6e22cfdf69aca00cffef049ce28517ee5ab24e372f3ceda8bdcc98821->enter($__internal_717f4dc6e22cfdf69aca00cffef049ce28517ee5ab24e372f3ceda8bdcc98821_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        // line 1
        echo "<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_dc2295e4a0649730bfd63029387140f6307939245c71881f43919d92de674f4b->leave($__internal_dc2295e4a0649730bfd63029387140f6307939245c71881f43919d92de674f4b_prof);

        
        $__internal_717f4dc6e22cfdf69aca00cffef049ce28517ee5ab24e372f3ceda8bdcc98821->leave($__internal_717f4dc6e22cfdf69aca00cffef049ce28517ee5ab24e372f3ceda8bdcc98821_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/radio_widget.html.php";
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
        return new Twig_Source("<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
", "@Framework/Form/radio_widget.html.php", "/Applications/MAMP/htdocs/Symfony/bdx-1702-coprosyndic/easycopro/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/radio_widget.html.php");
    }
}

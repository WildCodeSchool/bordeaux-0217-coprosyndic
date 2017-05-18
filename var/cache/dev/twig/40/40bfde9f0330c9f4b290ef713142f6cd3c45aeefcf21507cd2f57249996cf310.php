<?php

/* @Framework/Form/collection_widget.html.php */
class __TwigTemplate_3e5e1a781825ca5e0f69fd0e9e9978e55bde34e58df75ce20b9837536167278a extends Twig_Template
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
        $__internal_f0bff49c5880696185877e79b8419853e411d5378345c135fbc0b2ab60ed1f81 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f0bff49c5880696185877e79b8419853e411d5378345c135fbc0b2ab60ed1f81->enter($__internal_f0bff49c5880696185877e79b8419853e411d5378345c135fbc0b2ab60ed1f81_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        $__internal_2bdb0a1d24c45437bb48587d2dc3c340ea57c8eaa3569e8b54cc40dc03518559 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2bdb0a1d24c45437bb48587d2dc3c340ea57c8eaa3569e8b54cc40dc03518559->enter($__internal_2bdb0a1d24c45437bb48587d2dc3c340ea57c8eaa3569e8b54cc40dc03518559_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        // line 1
        echo "<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
";
        
        $__internal_f0bff49c5880696185877e79b8419853e411d5378345c135fbc0b2ab60ed1f81->leave($__internal_f0bff49c5880696185877e79b8419853e411d5378345c135fbc0b2ab60ed1f81_prof);

        
        $__internal_2bdb0a1d24c45437bb48587d2dc3c340ea57c8eaa3569e8b54cc40dc03518559->leave($__internal_2bdb0a1d24c45437bb48587d2dc3c340ea57c8eaa3569e8b54cc40dc03518559_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/collection_widget.html.php";
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
        return new Twig_Source("<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
", "@Framework/Form/collection_widget.html.php", "/Applications/MAMP/htdocs/Symfony/bdx-1702-coprosyndic/easycopro/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/collection_widget.html.php");
    }
}

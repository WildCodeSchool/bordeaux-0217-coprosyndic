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
        $__internal_029c94c5cf33a4b69189198f970f7a28388f95a38c2efb6459d13f63be5b8faa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_029c94c5cf33a4b69189198f970f7a28388f95a38c2efb6459d13f63be5b8faa->enter($__internal_029c94c5cf33a4b69189198f970f7a28388f95a38c2efb6459d13f63be5b8faa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        $__internal_cf034b477154a4b4c59a477fc6f0ba89e8b5ffe39ebdb8a6d77a2a77972a006a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cf034b477154a4b4c59a477fc6f0ba89e8b5ffe39ebdb8a6d77a2a77972a006a->enter($__internal_cf034b477154a4b4c59a477fc6f0ba89e8b5ffe39ebdb8a6d77a2a77972a006a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        // line 1
        echo "<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
";
        
        $__internal_029c94c5cf33a4b69189198f970f7a28388f95a38c2efb6459d13f63be5b8faa->leave($__internal_029c94c5cf33a4b69189198f970f7a28388f95a38c2efb6459d13f63be5b8faa_prof);

        
        $__internal_cf034b477154a4b4c59a477fc6f0ba89e8b5ffe39ebdb8a6d77a2a77972a006a->leave($__internal_cf034b477154a4b4c59a477fc6f0ba89e8b5ffe39ebdb8a6d77a2a77972a006a_prof);

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
", "@Framework/Form/collection_widget.html.php", "/Applications/MAMP/htdocs/Symfony/bdx-1702-coprosyndic/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/collection_widget.html.php");
    }
}

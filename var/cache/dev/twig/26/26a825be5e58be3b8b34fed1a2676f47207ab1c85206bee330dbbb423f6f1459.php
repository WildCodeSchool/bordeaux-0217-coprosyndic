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
        $__internal_65089c1dd6bb5ec7a68d8e3be40536e95b7ffd1864e5aa2de5addf42e476daa4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_65089c1dd6bb5ec7a68d8e3be40536e95b7ffd1864e5aa2de5addf42e476daa4->enter($__internal_65089c1dd6bb5ec7a68d8e3be40536e95b7ffd1864e5aa2de5addf42e476daa4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        $__internal_5a8cfd4390d0389b7c067737a7d9a5e082bcbf09afcbc2aa7ba30a71652e678e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5a8cfd4390d0389b7c067737a7d9a5e082bcbf09afcbc2aa7ba30a71652e678e->enter($__internal_5a8cfd4390d0389b7c067737a7d9a5e082bcbf09afcbc2aa7ba30a71652e678e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'search')) ?>
";
        
        $__internal_65089c1dd6bb5ec7a68d8e3be40536e95b7ffd1864e5aa2de5addf42e476daa4->leave($__internal_65089c1dd6bb5ec7a68d8e3be40536e95b7ffd1864e5aa2de5addf42e476daa4_prof);

        
        $__internal_5a8cfd4390d0389b7c067737a7d9a5e082bcbf09afcbc2aa7ba30a71652e678e->leave($__internal_5a8cfd4390d0389b7c067737a7d9a5e082bcbf09afcbc2aa7ba30a71652e678e_prof);

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
", "@Framework/Form/search_widget.html.php", "/Applications/MAMP/htdocs/Symfony/bdx-1702-coprosyndic/easycopro/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/search_widget.html.php");
    }
}

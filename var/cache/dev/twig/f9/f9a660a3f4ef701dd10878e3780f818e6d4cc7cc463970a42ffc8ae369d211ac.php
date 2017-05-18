<?php

/* @Framework/Form/url_widget.html.php */
class __TwigTemplate_ad958e6b25f95e8e22d70cb7752af02f260df61969197f16ddc510b987aca6e4 extends Twig_Template
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
        $__internal_8377ecbb64a22de8dad81ceed22c5edaa595d94b65912147f4b4ecb88f39e5bd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8377ecbb64a22de8dad81ceed22c5edaa595d94b65912147f4b4ecb88f39e5bd->enter($__internal_8377ecbb64a22de8dad81ceed22c5edaa595d94b65912147f4b4ecb88f39e5bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        $__internal_83b8c3cb5142cf6eb866f4a5e76b6c678388438573946d2ebe1200f627180f9f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_83b8c3cb5142cf6eb866f4a5e76b6c678388438573946d2ebe1200f627180f9f->enter($__internal_83b8c3cb5142cf6eb866f4a5e76b6c678388438573946d2ebe1200f627180f9f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
";
        
        $__internal_8377ecbb64a22de8dad81ceed22c5edaa595d94b65912147f4b4ecb88f39e5bd->leave($__internal_8377ecbb64a22de8dad81ceed22c5edaa595d94b65912147f4b4ecb88f39e5bd_prof);

        
        $__internal_83b8c3cb5142cf6eb866f4a5e76b6c678388438573946d2ebe1200f627180f9f->leave($__internal_83b8c3cb5142cf6eb866f4a5e76b6c678388438573946d2ebe1200f627180f9f_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/url_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
", "@Framework/Form/url_widget.html.php", "/Applications/MAMP/htdocs/Symfony/bdx-1702-coprosyndic/easycopro/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/url_widget.html.php");
    }
}

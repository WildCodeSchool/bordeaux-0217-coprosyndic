<?php

/* @Framework/Form/form_rows.html.php */
class __TwigTemplate_4da0d465ef7b09819e0199d9198ddf28ba896e604979d7afe237542da8914c85 extends Twig_Template
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
        $__internal_db368f3a3bdc9f243c3c7fcd1d6e4555dec3682dcfd1314452ea039604d193e2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_db368f3a3bdc9f243c3c7fcd1d6e4555dec3682dcfd1314452ea039604d193e2->enter($__internal_db368f3a3bdc9f243c3c7fcd1d6e4555dec3682dcfd1314452ea039604d193e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        $__internal_92e876ad4210004c21bfd8b7ec42260ff72803598a60f3c975c4e92b658c1824 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_92e876ad4210004c21bfd8b7ec42260ff72803598a60f3c975c4e92b658c1824->enter($__internal_92e876ad4210004c21bfd8b7ec42260ff72803598a60f3c975c4e92b658c1824_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
        
        $__internal_db368f3a3bdc9f243c3c7fcd1d6e4555dec3682dcfd1314452ea039604d193e2->leave($__internal_db368f3a3bdc9f243c3c7fcd1d6e4555dec3682dcfd1314452ea039604d193e2_prof);

        
        $__internal_92e876ad4210004c21bfd8b7ec42260ff72803598a60f3c975c4e92b658c1824->leave($__internal_92e876ad4210004c21bfd8b7ec42260ff72803598a60f3c975c4e92b658c1824_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rows.html.php";
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
        return new Twig_Source("<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
", "@Framework/Form/form_rows.html.php", "/Applications/MAMP/htdocs/Symfony/bdx-1702-coprosyndic/easycopro/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_rows.html.php");
    }
}

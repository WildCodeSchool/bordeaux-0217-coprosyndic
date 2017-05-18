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
        $__internal_e974c15f7ba20211f6642ca9a289c44842f25bf07695feb0269a83260b3befd8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e974c15f7ba20211f6642ca9a289c44842f25bf07695feb0269a83260b3befd8->enter($__internal_e974c15f7ba20211f6642ca9a289c44842f25bf07695feb0269a83260b3befd8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        $__internal_7f08d412588853681263316f85b866c060d0da7c5f144b6ab957bd54cdc1cc12 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7f08d412588853681263316f85b866c060d0da7c5f144b6ab957bd54cdc1cc12->enter($__internal_7f08d412588853681263316f85b866c060d0da7c5f144b6ab957bd54cdc1cc12_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
        
        $__internal_e974c15f7ba20211f6642ca9a289c44842f25bf07695feb0269a83260b3befd8->leave($__internal_e974c15f7ba20211f6642ca9a289c44842f25bf07695feb0269a83260b3befd8_prof);

        
        $__internal_7f08d412588853681263316f85b866c060d0da7c5f144b6ab957bd54cdc1cc12->leave($__internal_7f08d412588853681263316f85b866c060d0da7c5f144b6ab957bd54cdc1cc12_prof);

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
", "@Framework/Form/form_rows.html.php", "/Applications/MAMP/htdocs/Symfony/bdx-1702-coprosyndic/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_rows.html.php");
    }
}

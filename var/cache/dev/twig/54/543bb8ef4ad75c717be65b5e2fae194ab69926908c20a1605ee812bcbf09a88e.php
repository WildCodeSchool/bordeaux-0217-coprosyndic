<?php

/* @Framework/Form/form_end.html.php */
class __TwigTemplate_e4e71f926fdf95af45114576b779bcf46d1c2c8a44600236ee54b217b1ae579c extends Twig_Template
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
        $__internal_294a03779e2cdaad4c3263a8f1db815adc75a4f82ae3e054318d767418330a72 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_294a03779e2cdaad4c3263a8f1db815adc75a4f82ae3e054318d767418330a72->enter($__internal_294a03779e2cdaad4c3263a8f1db815adc75a4f82ae3e054318d767418330a72_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        $__internal_ee31855a37596a535645df62ecaa59baa8831c6eb67b3dabde591432ef2eeec4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ee31855a37596a535645df62ecaa59baa8831c6eb67b3dabde591432ef2eeec4->enter($__internal_ee31855a37596a535645df62ecaa59baa8831c6eb67b3dabde591432ef2eeec4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        // line 1
        echo "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
        
        $__internal_294a03779e2cdaad4c3263a8f1db815adc75a4f82ae3e054318d767418330a72->leave($__internal_294a03779e2cdaad4c3263a8f1db815adc75a4f82ae3e054318d767418330a72_prof);

        
        $__internal_ee31855a37596a535645df62ecaa59baa8831c6eb67b3dabde591432ef2eeec4->leave($__internal_ee31855a37596a535645df62ecaa59baa8831c6eb67b3dabde591432ef2eeec4_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_end.html.php";
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
        return new Twig_Source("<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
", "@Framework/Form/form_end.html.php", "/Applications/MAMP/htdocs/Symfony/bdx-1702-coprosyndic/easycopro/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_end.html.php");
    }
}

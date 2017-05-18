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
        $__internal_f640642202aed01a91c3b6c6f39162211f3148343548e49cd60ece2ed3057e20 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f640642202aed01a91c3b6c6f39162211f3148343548e49cd60ece2ed3057e20->enter($__internal_f640642202aed01a91c3b6c6f39162211f3148343548e49cd60ece2ed3057e20_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        $__internal_1292f48bcaa3df9e4d3fcb37a003d8cfa56cb8f3741da1d7f636a478cd092d84 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1292f48bcaa3df9e4d3fcb37a003d8cfa56cb8f3741da1d7f636a478cd092d84->enter($__internal_1292f48bcaa3df9e4d3fcb37a003d8cfa56cb8f3741da1d7f636a478cd092d84_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        // line 1
        echo "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
        
        $__internal_f640642202aed01a91c3b6c6f39162211f3148343548e49cd60ece2ed3057e20->leave($__internal_f640642202aed01a91c3b6c6f39162211f3148343548e49cd60ece2ed3057e20_prof);

        
        $__internal_1292f48bcaa3df9e4d3fcb37a003d8cfa56cb8f3741da1d7f636a478cd092d84->leave($__internal_1292f48bcaa3df9e4d3fcb37a003d8cfa56cb8f3741da1d7f636a478cd092d84_prof);

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
", "@Framework/Form/form_end.html.php", "/Applications/MAMP/htdocs/Symfony/bdx-1702-coprosyndic/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_end.html.php");
    }
}

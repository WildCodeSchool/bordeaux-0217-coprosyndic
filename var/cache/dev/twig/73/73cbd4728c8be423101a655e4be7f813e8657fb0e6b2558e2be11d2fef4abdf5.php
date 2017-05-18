<?php

/* @Framework/Form/form_rest.html.php */
class __TwigTemplate_a059dd6c7565efcfcd86138c2d357c4db3a23d120e1756affb9439ecd8680336 extends Twig_Template
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
        $__internal_c52452da8bac7a08db4b9ed4ab0fc7ab321db594d58c924585fcb1d80c4fb0c4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c52452da8bac7a08db4b9ed4ab0fc7ab321db594d58c924585fcb1d80c4fb0c4->enter($__internal_c52452da8bac7a08db4b9ed4ab0fc7ab321db594d58c924585fcb1d80c4fb0c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        $__internal_8337122b4b459ec54be479c3d23f2a08e9035b62ea13b0558730e3ecd488ad08 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8337122b4b459ec54be479c3d23f2a08e9035b62ea13b0558730e3ecd488ad08->enter($__internal_8337122b4b459ec54be479c3d23f2a08e9035b62ea13b0558730e3ecd488ad08_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
";
        
        $__internal_c52452da8bac7a08db4b9ed4ab0fc7ab321db594d58c924585fcb1d80c4fb0c4->leave($__internal_c52452da8bac7a08db4b9ed4ab0fc7ab321db594d58c924585fcb1d80c4fb0c4_prof);

        
        $__internal_8337122b4b459ec54be479c3d23f2a08e9035b62ea13b0558730e3ecd488ad08->leave($__internal_8337122b4b459ec54be479c3d23f2a08e9035b62ea13b0558730e3ecd488ad08_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rest.html.php";
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
        return new Twig_Source("<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
", "@Framework/Form/form_rest.html.php", "/Applications/MAMP/htdocs/Symfony/bdx-1702-coprosyndic/easycopro/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_rest.html.php");
    }
}

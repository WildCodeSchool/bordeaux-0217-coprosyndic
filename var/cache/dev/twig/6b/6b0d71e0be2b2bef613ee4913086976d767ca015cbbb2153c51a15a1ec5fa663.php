<?php

/* @Framework/Form/form.html.php */
class __TwigTemplate_2e98fe9f5da46ac6e7f8af6de6e0aa7e0565143ddd0a8d2273f58ea244384af1 extends Twig_Template
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
        $__internal_121c214d1602b374202ce7ff4cdfb996b870ee1a05b9ec28e408aca774ad6086 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_121c214d1602b374202ce7ff4cdfb996b870ee1a05b9ec28e408aca774ad6086->enter($__internal_121c214d1602b374202ce7ff4cdfb996b870ee1a05b9ec28e408aca774ad6086_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        $__internal_d4989393c0dc498f7351addba233d445958ef58805e7181be3517f8266195703 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d4989393c0dc498f7351addba233d445958ef58805e7181be3517f8266195703->enter($__internal_d4989393c0dc498f7351addba233d445958ef58805e7181be3517f8266195703_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        // line 1
        echo "<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
";
        
        $__internal_121c214d1602b374202ce7ff4cdfb996b870ee1a05b9ec28e408aca774ad6086->leave($__internal_121c214d1602b374202ce7ff4cdfb996b870ee1a05b9ec28e408aca774ad6086_prof);

        
        $__internal_d4989393c0dc498f7351addba233d445958ef58805e7181be3517f8266195703->leave($__internal_d4989393c0dc498f7351addba233d445958ef58805e7181be3517f8266195703_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
", "@Framework/Form/form.html.php", "/Applications/MAMP/htdocs/Symfony/bdx-1702-coprosyndic/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form.html.php");
    }
}

<?php

/* @Framework/Form/choice_options.html.php */
class __TwigTemplate_bacf48ce4835ee77772131f4c48b914b2c049d738a366e49a4befef131d2d64e extends Twig_Template
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
        $__internal_a122aedc3afc75813a2efc72659704d51d954a282afe1487d49213cf9a575e71 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a122aedc3afc75813a2efc72659704d51d954a282afe1487d49213cf9a575e71->enter($__internal_a122aedc3afc75813a2efc72659704d51d954a282afe1487d49213cf9a575e71_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_options.html.php"));

        $__internal_96e591a9e3867a87da16bbcec169519fbf739c715f2a6bffb3727c33f6e26d60 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_96e591a9e3867a87da16bbcec169519fbf739c715f2a6bffb3727c33f6e26d60->enter($__internal_96e591a9e3867a87da16bbcec169519fbf739c715f2a6bffb3727c33f6e26d60_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_options.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'choice_widget_options') ?>
";
        
        $__internal_a122aedc3afc75813a2efc72659704d51d954a282afe1487d49213cf9a575e71->leave($__internal_a122aedc3afc75813a2efc72659704d51d954a282afe1487d49213cf9a575e71_prof);

        
        $__internal_96e591a9e3867a87da16bbcec169519fbf739c715f2a6bffb3727c33f6e26d60->leave($__internal_96e591a9e3867a87da16bbcec169519fbf739c715f2a6bffb3727c33f6e26d60_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_options.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'choice_widget_options') ?>
", "@Framework/Form/choice_options.html.php", "/Applications/MAMP/htdocs/Symfony/bdx-1702-coprosyndic/easycopro/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/choice_options.html.php");
    }
}

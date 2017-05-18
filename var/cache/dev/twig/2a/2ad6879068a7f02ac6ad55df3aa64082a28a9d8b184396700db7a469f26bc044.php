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
        $__internal_739cbfcf84bee4163bdaa1c353893d0df3784a6d1847ccc997ca704f978f213c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_739cbfcf84bee4163bdaa1c353893d0df3784a6d1847ccc997ca704f978f213c->enter($__internal_739cbfcf84bee4163bdaa1c353893d0df3784a6d1847ccc997ca704f978f213c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_options.html.php"));

        $__internal_13aa5b5d5aae7f3d0d136012f581e5c197095629b6539ad3063ea7e7366b6b36 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_13aa5b5d5aae7f3d0d136012f581e5c197095629b6539ad3063ea7e7366b6b36->enter($__internal_13aa5b5d5aae7f3d0d136012f581e5c197095629b6539ad3063ea7e7366b6b36_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_options.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'choice_widget_options') ?>
";
        
        $__internal_739cbfcf84bee4163bdaa1c353893d0df3784a6d1847ccc997ca704f978f213c->leave($__internal_739cbfcf84bee4163bdaa1c353893d0df3784a6d1847ccc997ca704f978f213c_prof);

        
        $__internal_13aa5b5d5aae7f3d0d136012f581e5c197095629b6539ad3063ea7e7366b6b36->leave($__internal_13aa5b5d5aae7f3d0d136012f581e5c197095629b6539ad3063ea7e7366b6b36_prof);

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
", "@Framework/Form/choice_options.html.php", "/Applications/MAMP/htdocs/Symfony/bdx-1702-coprosyndic/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/choice_options.html.php");
    }
}

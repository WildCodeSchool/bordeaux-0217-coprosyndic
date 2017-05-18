<?php

/* @Framework/Form/form_row.html.php */
class __TwigTemplate_0992200e561741c94855ec9c52355578c09f2c1fbf44ef79972620a1370059fc extends Twig_Template
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
        $__internal_ed52908b937991fed403c4fbf1fa35698f3978bee01b07dbc36fab5fa2adedee = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ed52908b937991fed403c4fbf1fa35698f3978bee01b07dbc36fab5fa2adedee->enter($__internal_ed52908b937991fed403c4fbf1fa35698f3978bee01b07dbc36fab5fa2adedee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        $__internal_621dc51f22fd9476cc6c4cf7541fca412dabf69998546549ef7829f8f4fabcca = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_621dc51f22fd9476cc6c4cf7541fca412dabf69998546549ef7829f8f4fabcca->enter($__internal_621dc51f22fd9476cc6c4cf7541fca412dabf69998546549ef7829f8f4fabcca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_ed52908b937991fed403c4fbf1fa35698f3978bee01b07dbc36fab5fa2adedee->leave($__internal_ed52908b937991fed403c4fbf1fa35698f3978bee01b07dbc36fab5fa2adedee_prof);

        
        $__internal_621dc51f22fd9476cc6c4cf7541fca412dabf69998546549ef7829f8f4fabcca->leave($__internal_621dc51f22fd9476cc6c4cf7541fca412dabf69998546549ef7829f8f4fabcca_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_row.html.php";
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
        return new Twig_Source("<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
", "@Framework/Form/form_row.html.php", "/Applications/MAMP/htdocs/Symfony/bdx-1702-coprosyndic/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_row.html.php");
    }
}

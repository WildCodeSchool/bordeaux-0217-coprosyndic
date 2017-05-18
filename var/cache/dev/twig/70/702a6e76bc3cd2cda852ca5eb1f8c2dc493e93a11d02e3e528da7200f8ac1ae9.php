<?php

/* @Framework/FormTable/button_row.html.php */
class __TwigTemplate_470af82c395534327fa4192cf28e5ca126e59715193e849734abd49f87d02b2d extends Twig_Template
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
        $__internal_f4be1bce8cafe93b0e08ae96680caa43e802d789610738e0e2626470a74dd525 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f4be1bce8cafe93b0e08ae96680caa43e802d789610738e0e2626470a74dd525->enter($__internal_f4be1bce8cafe93b0e08ae96680caa43e802d789610738e0e2626470a74dd525_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        $__internal_7e81f43c1cc6905eb663ac7051f0043dedd6415baeffb08817075293f1c2ba0c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7e81f43c1cc6905eb663ac7051f0043dedd6415baeffb08817075293f1c2ba0c->enter($__internal_7e81f43c1cc6905eb663ac7051f0043dedd6415baeffb08817075293f1c2ba0c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        // line 1
        echo "<tr>
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_f4be1bce8cafe93b0e08ae96680caa43e802d789610738e0e2626470a74dd525->leave($__internal_f4be1bce8cafe93b0e08ae96680caa43e802d789610738e0e2626470a74dd525_prof);

        
        $__internal_7e81f43c1cc6905eb663ac7051f0043dedd6415baeffb08817075293f1c2ba0c->leave($__internal_7e81f43c1cc6905eb663ac7051f0043dedd6415baeffb08817075293f1c2ba0c_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/button_row.html.php";
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
        return new Twig_Source("<tr>
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
", "@Framework/FormTable/button_row.html.php", "/Applications/MAMP/htdocs/Symfony/bdx-1702-coprosyndic/easycopro/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/FormTable/button_row.html.php");
    }
}

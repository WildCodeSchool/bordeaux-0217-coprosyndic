<?php

/* @Framework/FormTable/hidden_row.html.php */
class __TwigTemplate_fe57c777a999d78c814327b35f450c63aea346a0ace73ee043f6e0cdd0048cd0 extends Twig_Template
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
        $__internal_2160a657bf1c621511994466a0ad01105a03d84cae493e4ae4ed9b33650801ee = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2160a657bf1c621511994466a0ad01105a03d84cae493e4ae4ed9b33650801ee->enter($__internal_2160a657bf1c621511994466a0ad01105a03d84cae493e4ae4ed9b33650801ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        $__internal_b490d044dda253f4c09d6ffa549e521754811aa81ece34b9541af0daa3f78126 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b490d044dda253f4c09d6ffa549e521754811aa81ece34b9541af0daa3f78126->enter($__internal_b490d044dda253f4c09d6ffa549e521754811aa81ece34b9541af0daa3f78126_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        // line 1
        echo "<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_2160a657bf1c621511994466a0ad01105a03d84cae493e4ae4ed9b33650801ee->leave($__internal_2160a657bf1c621511994466a0ad01105a03d84cae493e4ae4ed9b33650801ee_prof);

        
        $__internal_b490d044dda253f4c09d6ffa549e521754811aa81ece34b9541af0daa3f78126->leave($__internal_b490d044dda253f4c09d6ffa549e521754811aa81ece34b9541af0daa3f78126_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/hidden_row.html.php";
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
        return new Twig_Source("<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
", "@Framework/FormTable/hidden_row.html.php", "/Applications/MAMP/htdocs/Symfony/bdx-1702-coprosyndic/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/FormTable/hidden_row.html.php");
    }
}

<?php

/* @Framework/Form/button_row.html.php */
class __TwigTemplate_95dfecc2bc54143adf6739b230500a66d929caa10de6f5bfaf6ce3ad3a17378e extends Twig_Template
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
        $__internal_475ca3dfd4665fe4df5d494a85d5d2ca03e6b2c933961aed105cef55118f870c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_475ca3dfd4665fe4df5d494a85d5d2ca03e6b2c933961aed105cef55118f870c->enter($__internal_475ca3dfd4665fe4df5d494a85d5d2ca03e6b2c933961aed105cef55118f870c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        $__internal_9991160db2c556864d2ce8c41562f51d4798e95788275dbfb4913649eb092138 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9991160db2c556864d2ce8c41562f51d4798e95788275dbfb4913649eb092138->enter($__internal_9991160db2c556864d2ce8c41562f51d4798e95788275dbfb4913649eb092138_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_475ca3dfd4665fe4df5d494a85d5d2ca03e6b2c933961aed105cef55118f870c->leave($__internal_475ca3dfd4665fe4df5d494a85d5d2ca03e6b2c933961aed105cef55118f870c_prof);

        
        $__internal_9991160db2c556864d2ce8c41562f51d4798e95788275dbfb4913649eb092138->leave($__internal_9991160db2c556864d2ce8c41562f51d4798e95788275dbfb4913649eb092138_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_row.html.php";
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
    <?php echo \$view['form']->widget(\$form) ?>
</div>
", "@Framework/Form/button_row.html.php", "/Applications/MAMP/htdocs/Symfony/bdx-1702-coprosyndic/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/button_row.html.php");
    }
}

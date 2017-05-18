<?php

/* @Framework/Form/email_widget.html.php */
class __TwigTemplate_06924a1356a8fa6502f04dabbc9691d0029bfeffc861796df5a68debcd11c7ce extends Twig_Template
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
        $__internal_a44cb7fb01e773d473c33a5b5bcd8fe25dd319a02902591d81df51ce83483e74 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a44cb7fb01e773d473c33a5b5bcd8fe25dd319a02902591d81df51ce83483e74->enter($__internal_a44cb7fb01e773d473c33a5b5bcd8fe25dd319a02902591d81df51ce83483e74_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        $__internal_85f0daf575c8a12690b38a14c2a5e43fe24bfdbb094897db1557e37a5959997d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_85f0daf575c8a12690b38a14c2a5e43fe24bfdbb094897db1557e37a5959997d->enter($__internal_85f0daf575c8a12690b38a14c2a5e43fe24bfdbb094897db1557e37a5959997d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
";
        
        $__internal_a44cb7fb01e773d473c33a5b5bcd8fe25dd319a02902591d81df51ce83483e74->leave($__internal_a44cb7fb01e773d473c33a5b5bcd8fe25dd319a02902591d81df51ce83483e74_prof);

        
        $__internal_85f0daf575c8a12690b38a14c2a5e43fe24bfdbb094897db1557e37a5959997d->leave($__internal_85f0daf575c8a12690b38a14c2a5e43fe24bfdbb094897db1557e37a5959997d_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/email_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
", "@Framework/Form/email_widget.html.php", "/Applications/MAMP/htdocs/Symfony/bdx-1702-coprosyndic/easycopro/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/email_widget.html.php");
    }
}

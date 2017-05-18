<?php

/* @Framework/Form/form_enctype.html.php */
class __TwigTemplate_ef49dfddc4f436ae7634e9195fbf912e75728dbcaa7a630ef80bdb4c4413848d extends Twig_Template
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
        $__internal_0772bd5a94ece701305bdb65a473b99ecdad5a7ad41188f18fdec15f81b12be4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0772bd5a94ece701305bdb65a473b99ecdad5a7ad41188f18fdec15f81b12be4->enter($__internal_0772bd5a94ece701305bdb65a473b99ecdad5a7ad41188f18fdec15f81b12be4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        $__internal_d185d33ab9a806d6e9f5c67c396b1c9aed33f76bc9a335f322d57871c9be742d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d185d33ab9a806d6e9f5c67c396b1c9aed33f76bc9a335f322d57871c9be742d->enter($__internal_d185d33ab9a806d6e9f5c67c396b1c9aed33f76bc9a335f322d57871c9be742d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        // line 1
        echo "<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
";
        
        $__internal_0772bd5a94ece701305bdb65a473b99ecdad5a7ad41188f18fdec15f81b12be4->leave($__internal_0772bd5a94ece701305bdb65a473b99ecdad5a7ad41188f18fdec15f81b12be4_prof);

        
        $__internal_d185d33ab9a806d6e9f5c67c396b1c9aed33f76bc9a335f322d57871c9be742d->leave($__internal_d185d33ab9a806d6e9f5c67c396b1c9aed33f76bc9a335f322d57871c9be742d_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_enctype.html.php";
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
        return new Twig_Source("<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
", "@Framework/Form/form_enctype.html.php", "/Applications/MAMP/htdocs/Symfony/bdx-1702-coprosyndic/easycopro/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_enctype.html.php");
    }
}

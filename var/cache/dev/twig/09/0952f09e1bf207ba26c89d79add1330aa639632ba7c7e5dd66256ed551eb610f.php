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
        $__internal_44562c95128d459e1dfae89687aa0a04c023c3d447ab30bc1b3f8112a2b49ede = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_44562c95128d459e1dfae89687aa0a04c023c3d447ab30bc1b3f8112a2b49ede->enter($__internal_44562c95128d459e1dfae89687aa0a04c023c3d447ab30bc1b3f8112a2b49ede_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        $__internal_0665191611acd3f01f809ee73b03f0adfedd42aed6fc750557f9e577f0ee9563 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0665191611acd3f01f809ee73b03f0adfedd42aed6fc750557f9e577f0ee9563->enter($__internal_0665191611acd3f01f809ee73b03f0adfedd42aed6fc750557f9e577f0ee9563_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        // line 1
        echo "<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
";
        
        $__internal_44562c95128d459e1dfae89687aa0a04c023c3d447ab30bc1b3f8112a2b49ede->leave($__internal_44562c95128d459e1dfae89687aa0a04c023c3d447ab30bc1b3f8112a2b49ede_prof);

        
        $__internal_0665191611acd3f01f809ee73b03f0adfedd42aed6fc750557f9e577f0ee9563->leave($__internal_0665191611acd3f01f809ee73b03f0adfedd42aed6fc750557f9e577f0ee9563_prof);

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
", "@Framework/Form/form_enctype.html.php", "/Applications/MAMP/htdocs/Symfony/bdx-1702-coprosyndic/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_enctype.html.php");
    }
}

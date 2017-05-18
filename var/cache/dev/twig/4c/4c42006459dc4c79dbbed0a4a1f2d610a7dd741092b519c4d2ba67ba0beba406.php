<?php

/* FOSUserBundle:Resetting:reset.html.twig */
class __TwigTemplate_df43c2877f53bd57c6cf030199639aa7baaa09093f1bc036bbd014bb05f79d39 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Resetting:reset.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@FOSUser/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_dade8ebbdaccd1ae826609c63d013d1b7e5ba47fa3688f1f49eebb6188867471 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dade8ebbdaccd1ae826609c63d013d1b7e5ba47fa3688f1f49eebb6188867471->enter($__internal_dade8ebbdaccd1ae826609c63d013d1b7e5ba47fa3688f1f49eebb6188867471_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:reset.html.twig"));

        $__internal_d61442d1e29b7938cb29e3c2f06b4be963eee0dde03af25569f6cea8d70c7c86 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d61442d1e29b7938cb29e3c2f06b4be963eee0dde03af25569f6cea8d70c7c86->enter($__internal_d61442d1e29b7938cb29e3c2f06b4be963eee0dde03af25569f6cea8d70c7c86_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:reset.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_dade8ebbdaccd1ae826609c63d013d1b7e5ba47fa3688f1f49eebb6188867471->leave($__internal_dade8ebbdaccd1ae826609c63d013d1b7e5ba47fa3688f1f49eebb6188867471_prof);

        
        $__internal_d61442d1e29b7938cb29e3c2f06b4be963eee0dde03af25569f6cea8d70c7c86->leave($__internal_d61442d1e29b7938cb29e3c2f06b4be963eee0dde03af25569f6cea8d70c7c86_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_1f3861644205c9e6f42ae8b2f45606a5361ee6d013a25be51871d2ab26586a0b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1f3861644205c9e6f42ae8b2f45606a5361ee6d013a25be51871d2ab26586a0b->enter($__internal_1f3861644205c9e6f42ae8b2f45606a5361ee6d013a25be51871d2ab26586a0b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_936a7bd8de25b67944a7d4c3283ca12c0efb3ed6a03bccdf027a34b23623fa37 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_936a7bd8de25b67944a7d4c3283ca12c0efb3ed6a03bccdf027a34b23623fa37->enter($__internal_936a7bd8de25b67944a7d4c3283ca12c0efb3ed6a03bccdf027a34b23623fa37_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Resetting/reset_content.html.twig", "FOSUserBundle:Resetting:reset.html.twig", 4)->display($context);
        
        $__internal_936a7bd8de25b67944a7d4c3283ca12c0efb3ed6a03bccdf027a34b23623fa37->leave($__internal_936a7bd8de25b67944a7d4c3283ca12c0efb3ed6a03bccdf027a34b23623fa37_prof);

        
        $__internal_1f3861644205c9e6f42ae8b2f45606a5361ee6d013a25be51871d2ab26586a0b->leave($__internal_1f3861644205c9e6f42ae8b2f45606a5361ee6d013a25be51871d2ab26586a0b_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:reset.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 4,  40 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"@FOSUser/layout.html.twig\" %}

{% block fos_user_content %}
{% include \"@FOSUser/Resetting/reset_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Resetting:reset.html.twig", "/Applications/MAMP/htdocs/Symfony/bdx-1702-coprosyndic/app/Resources/FOSUserBundle/views/Resetting/reset.html.twig");
    }
}

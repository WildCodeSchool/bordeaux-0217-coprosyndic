<?php

/* FOSUserBundle:Registration:register.html.twig */
class __TwigTemplate_b97731d559802610bf6f6cb9824bd603427add78143ee48518fd8ede0974a879 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Registration:register.html.twig", 1);
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
        $__internal_504c5313c2c94ccec1c6605903547ac5e7f051620a39edb6c0f0563aca423ddc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_504c5313c2c94ccec1c6605903547ac5e7f051620a39edb6c0f0563aca423ddc->enter($__internal_504c5313c2c94ccec1c6605903547ac5e7f051620a39edb6c0f0563aca423ddc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:register.html.twig"));

        $__internal_82532a447eda66acd7f678d6d3f3acfb750568ac969caaf2023694d6b8eff75f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_82532a447eda66acd7f678d6d3f3acfb750568ac969caaf2023694d6b8eff75f->enter($__internal_82532a447eda66acd7f678d6d3f3acfb750568ac969caaf2023694d6b8eff75f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_504c5313c2c94ccec1c6605903547ac5e7f051620a39edb6c0f0563aca423ddc->leave($__internal_504c5313c2c94ccec1c6605903547ac5e7f051620a39edb6c0f0563aca423ddc_prof);

        
        $__internal_82532a447eda66acd7f678d6d3f3acfb750568ac969caaf2023694d6b8eff75f->leave($__internal_82532a447eda66acd7f678d6d3f3acfb750568ac969caaf2023694d6b8eff75f_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_49254c245ba3393142ab7f60d114bc1a432685c37a302701964e0abf7207660c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_49254c245ba3393142ab7f60d114bc1a432685c37a302701964e0abf7207660c->enter($__internal_49254c245ba3393142ab7f60d114bc1a432685c37a302701964e0abf7207660c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_f39db1f04db399e26e6913e5901c0f01588f7052feb96c4aced51ff67667f338 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f39db1f04db399e26e6913e5901c0f01588f7052feb96c4aced51ff67667f338->enter($__internal_f39db1f04db399e26e6913e5901c0f01588f7052feb96c4aced51ff67667f338_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Registration/register_content.html.twig", "FOSUserBundle:Registration:register.html.twig", 4)->display($context);
        
        $__internal_f39db1f04db399e26e6913e5901c0f01588f7052feb96c4aced51ff67667f338->leave($__internal_f39db1f04db399e26e6913e5901c0f01588f7052feb96c4aced51ff67667f338_prof);

        
        $__internal_49254c245ba3393142ab7f60d114bc1a432685c37a302701964e0abf7207660c->leave($__internal_49254c245ba3393142ab7f60d114bc1a432685c37a302701964e0abf7207660c_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:register.html.twig";
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
{% include \"@FOSUser/Registration/register_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Registration:register.html.twig", "/Applications/MAMP/htdocs/Symfony/bdx-1702-coprosyndic/app/Resources/FOSUserBundle/views/Registration/register.html.twig");
    }
}

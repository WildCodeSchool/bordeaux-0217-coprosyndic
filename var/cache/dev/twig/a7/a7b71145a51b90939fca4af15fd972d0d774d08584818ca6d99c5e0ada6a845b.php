<?php

/* FOSUserBundle:Resetting:request.html.twig */
class __TwigTemplate_65a3fe95d02e673f36238fefeb73b963cb369dff14abcdc2a171fed15fcca401 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Resetting:request.html.twig", 1);
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
        $__internal_7e38b62d5ef9cf698d47f1cf3373dd4c0c97473aabd3148dfa9d1b7fd85c3c5f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7e38b62d5ef9cf698d47f1cf3373dd4c0c97473aabd3148dfa9d1b7fd85c3c5f->enter($__internal_7e38b62d5ef9cf698d47f1cf3373dd4c0c97473aabd3148dfa9d1b7fd85c3c5f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:request.html.twig"));

        $__internal_20632dac5df1759d0a7d38993071a95cd0955a4b604d64531ffc768b2f60145b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_20632dac5df1759d0a7d38993071a95cd0955a4b604d64531ffc768b2f60145b->enter($__internal_20632dac5df1759d0a7d38993071a95cd0955a4b604d64531ffc768b2f60145b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:request.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7e38b62d5ef9cf698d47f1cf3373dd4c0c97473aabd3148dfa9d1b7fd85c3c5f->leave($__internal_7e38b62d5ef9cf698d47f1cf3373dd4c0c97473aabd3148dfa9d1b7fd85c3c5f_prof);

        
        $__internal_20632dac5df1759d0a7d38993071a95cd0955a4b604d64531ffc768b2f60145b->leave($__internal_20632dac5df1759d0a7d38993071a95cd0955a4b604d64531ffc768b2f60145b_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_b8e8c564690901c7730bfb1681470ddb8253864997a8563f060a021e69988f6e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b8e8c564690901c7730bfb1681470ddb8253864997a8563f060a021e69988f6e->enter($__internal_b8e8c564690901c7730bfb1681470ddb8253864997a8563f060a021e69988f6e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_490605f2b04fa93d7a7db0f7f17bf3b79d70fdf22c3cd3c3197a4bb44203f21e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_490605f2b04fa93d7a7db0f7f17bf3b79d70fdf22c3cd3c3197a4bb44203f21e->enter($__internal_490605f2b04fa93d7a7db0f7f17bf3b79d70fdf22c3cd3c3197a4bb44203f21e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Resetting/request_content.html.twig", "FOSUserBundle:Resetting:request.html.twig", 4)->display($context);
        
        $__internal_490605f2b04fa93d7a7db0f7f17bf3b79d70fdf22c3cd3c3197a4bb44203f21e->leave($__internal_490605f2b04fa93d7a7db0f7f17bf3b79d70fdf22c3cd3c3197a4bb44203f21e_prof);

        
        $__internal_b8e8c564690901c7730bfb1681470ddb8253864997a8563f060a021e69988f6e->leave($__internal_b8e8c564690901c7730bfb1681470ddb8253864997a8563f060a021e69988f6e_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:request.html.twig";
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
{% include \"@FOSUser/Resetting/request_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Resetting:request.html.twig", "/Applications/MAMP/htdocs/Symfony/bdx-1702-coprosyndic/app/Resources/FOSUserBundle/views/Resetting/request.html.twig");
    }
}

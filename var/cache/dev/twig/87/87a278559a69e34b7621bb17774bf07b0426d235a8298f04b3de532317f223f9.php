<?php

/* FOSUserBundle:Group:list.html.twig */
class __TwigTemplate_7e08034856465ba3a54647775b17648b52bc6f34fc698a0ece96e09d0c9fbadd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Group:list.html.twig", 1);
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
        $__internal_da0ac6270987072adc5200377a8e23ba52307bc96be97f5cdbf9114b667f6575 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_da0ac6270987072adc5200377a8e23ba52307bc96be97f5cdbf9114b667f6575->enter($__internal_da0ac6270987072adc5200377a8e23ba52307bc96be97f5cdbf9114b667f6575_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:list.html.twig"));

        $__internal_49067b84b2d31d39f6b332618a82186f3da2df0451e6fd500e279e28d5691b1a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_49067b84b2d31d39f6b332618a82186f3da2df0451e6fd500e279e28d5691b1a->enter($__internal_49067b84b2d31d39f6b332618a82186f3da2df0451e6fd500e279e28d5691b1a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_da0ac6270987072adc5200377a8e23ba52307bc96be97f5cdbf9114b667f6575->leave($__internal_da0ac6270987072adc5200377a8e23ba52307bc96be97f5cdbf9114b667f6575_prof);

        
        $__internal_49067b84b2d31d39f6b332618a82186f3da2df0451e6fd500e279e28d5691b1a->leave($__internal_49067b84b2d31d39f6b332618a82186f3da2df0451e6fd500e279e28d5691b1a_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_d488c55be76303fb01331198d34be7df2eaad829d60b826db38250f6ab68d158 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d488c55be76303fb01331198d34be7df2eaad829d60b826db38250f6ab68d158->enter($__internal_d488c55be76303fb01331198d34be7df2eaad829d60b826db38250f6ab68d158_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_598bd11afdea1e7902ffb5a006b7c6b51ece2f77a3cbb9821aa6c7190808ab14 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_598bd11afdea1e7902ffb5a006b7c6b51ece2f77a3cbb9821aa6c7190808ab14->enter($__internal_598bd11afdea1e7902ffb5a006b7c6b51ece2f77a3cbb9821aa6c7190808ab14_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/list_content.html.twig", "FOSUserBundle:Group:list.html.twig", 4)->display($context);
        
        $__internal_598bd11afdea1e7902ffb5a006b7c6b51ece2f77a3cbb9821aa6c7190808ab14->leave($__internal_598bd11afdea1e7902ffb5a006b7c6b51ece2f77a3cbb9821aa6c7190808ab14_prof);

        
        $__internal_d488c55be76303fb01331198d34be7df2eaad829d60b826db38250f6ab68d158->leave($__internal_d488c55be76303fb01331198d34be7df2eaad829d60b826db38250f6ab68d158_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:list.html.twig";
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
{% include \"@FOSUser/Group/list_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Group:list.html.twig", "/Applications/MAMP/htdocs/Symfony/bdx-1702-coprosyndic/app/Resources/FOSUserBundle/views/Group/list.html.twig");
    }
}

<?php

/* FOSUserBundle:ChangePassword:change_password.html.twig */
class __TwigTemplate_57931331b04f06ed759dbabb0a918f76ce78c31cb74bd93e36ec32c7b7a46c25 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:ChangePassword:change_password.html.twig", 1);
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
        $__internal_3f604d374308680a750bbbad4d377c6919676f21477e5811fe8e90aee5275f23 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3f604d374308680a750bbbad4d377c6919676f21477e5811fe8e90aee5275f23->enter($__internal_3f604d374308680a750bbbad4d377c6919676f21477e5811fe8e90aee5275f23_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:ChangePassword:change_password.html.twig"));

        $__internal_3d868c1f729c8911ccbce1e54024e2572fbf6905768cb92072fc9b31b96ffcf8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3d868c1f729c8911ccbce1e54024e2572fbf6905768cb92072fc9b31b96ffcf8->enter($__internal_3d868c1f729c8911ccbce1e54024e2572fbf6905768cb92072fc9b31b96ffcf8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:ChangePassword:change_password.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3f604d374308680a750bbbad4d377c6919676f21477e5811fe8e90aee5275f23->leave($__internal_3f604d374308680a750bbbad4d377c6919676f21477e5811fe8e90aee5275f23_prof);

        
        $__internal_3d868c1f729c8911ccbce1e54024e2572fbf6905768cb92072fc9b31b96ffcf8->leave($__internal_3d868c1f729c8911ccbce1e54024e2572fbf6905768cb92072fc9b31b96ffcf8_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_5bea8d389f26b9ad281c93e32b8573427c7b81a1ee5bc0fc2095f2f97a869c40 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5bea8d389f26b9ad281c93e32b8573427c7b81a1ee5bc0fc2095f2f97a869c40->enter($__internal_5bea8d389f26b9ad281c93e32b8573427c7b81a1ee5bc0fc2095f2f97a869c40_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_c63a1854dfcaaa0d774efde437e786309696efcc69c3b75078d03527cbd6709c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c63a1854dfcaaa0d774efde437e786309696efcc69c3b75078d03527cbd6709c->enter($__internal_c63a1854dfcaaa0d774efde437e786309696efcc69c3b75078d03527cbd6709c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/ChangePassword/change_password_content.html.twig", "FOSUserBundle:ChangePassword:change_password.html.twig", 4)->display($context);
        
        $__internal_c63a1854dfcaaa0d774efde437e786309696efcc69c3b75078d03527cbd6709c->leave($__internal_c63a1854dfcaaa0d774efde437e786309696efcc69c3b75078d03527cbd6709c_prof);

        
        $__internal_5bea8d389f26b9ad281c93e32b8573427c7b81a1ee5bc0fc2095f2f97a869c40->leave($__internal_5bea8d389f26b9ad281c93e32b8573427c7b81a1ee5bc0fc2095f2f97a869c40_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:ChangePassword:change_password.html.twig";
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
{% include \"@FOSUser/ChangePassword/change_password_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:ChangePassword:change_password.html.twig", "/Applications/MAMP/htdocs/Symfony/bdx-1702-coprosyndic/app/Resources/FOSUserBundle/views/ChangePassword/change_password.html.twig");
    }
}

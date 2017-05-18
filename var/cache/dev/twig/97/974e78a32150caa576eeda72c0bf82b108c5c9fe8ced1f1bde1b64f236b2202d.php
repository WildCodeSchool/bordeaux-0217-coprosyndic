<?php

/* @FOSUser/Security/login.html.twig */
class __TwigTemplate_7f6cf7cf6084033c205d6f2cf169d61a2d5840241930bb7df75097ff0f44f49d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Security/login.html.twig", 1);
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
        $__internal_5a8a542781ca2609b1a4821139a41dba829453f3fc9ec0a2a97b3845439007b0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5a8a542781ca2609b1a4821139a41dba829453f3fc9ec0a2a97b3845439007b0->enter($__internal_5a8a542781ca2609b1a4821139a41dba829453f3fc9ec0a2a97b3845439007b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Security/login.html.twig"));

        $__internal_2a46301b69347fa74a585894d1a1930508f254e1bb42b71547962ac0352c6592 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2a46301b69347fa74a585894d1a1930508f254e1bb42b71547962ac0352c6592->enter($__internal_2a46301b69347fa74a585894d1a1930508f254e1bb42b71547962ac0352c6592_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Security/login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a8a542781ca2609b1a4821139a41dba829453f3fc9ec0a2a97b3845439007b0->leave($__internal_5a8a542781ca2609b1a4821139a41dba829453f3fc9ec0a2a97b3845439007b0_prof);

        
        $__internal_2a46301b69347fa74a585894d1a1930508f254e1bb42b71547962ac0352c6592->leave($__internal_2a46301b69347fa74a585894d1a1930508f254e1bb42b71547962ac0352c6592_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_6edd06dbdfbfa0a949154b0481888c8d2cd3b4c90b67d192b946b588c40fd925 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6edd06dbdfbfa0a949154b0481888c8d2cd3b4c90b67d192b946b588c40fd925->enter($__internal_6edd06dbdfbfa0a949154b0481888c8d2cd3b4c90b67d192b946b588c40fd925_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_ee8c355e524f52d203e508bdb1107983c41bfd2ed00b5befc5c09c4ee52ce4bf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ee8c355e524f52d203e508bdb1107983c41bfd2ed00b5befc5c09c4ee52ce4bf->enter($__internal_ee8c355e524f52d203e508bdb1107983c41bfd2ed00b5befc5c09c4ee52ce4bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        echo "    ";
        echo twig_include($this->env, $context, "@FOSUser/Security/login_content.html.twig");
        echo "
";
        
        $__internal_ee8c355e524f52d203e508bdb1107983c41bfd2ed00b5befc5c09c4ee52ce4bf->leave($__internal_ee8c355e524f52d203e508bdb1107983c41bfd2ed00b5befc5c09c4ee52ce4bf_prof);

        
        $__internal_6edd06dbdfbfa0a949154b0481888c8d2cd3b4c90b67d192b946b588c40fd925->leave($__internal_6edd06dbdfbfa0a949154b0481888c8d2cd3b4c90b67d192b946b588c40fd925_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Security/login.html.twig";
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
    {{ include('@FOSUser/Security/login_content.html.twig') }}
{% endblock fos_user_content %}
", "@FOSUser/Security/login.html.twig", "/Applications/MAMP/htdocs/Symfony/bdx-1702-coprosyndic/app/Resources/FOSUserBundle/views/Security/login.html.twig");
    }
}

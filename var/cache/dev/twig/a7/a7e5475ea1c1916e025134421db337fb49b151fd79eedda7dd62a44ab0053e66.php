<?php

/* @FOSUser/Registration/confirmed.html.twig */
class __TwigTemplate_637d7da5cee86e1dda8cad0d69c46d315aadd0e9f2b7db78bcf6983d7c577b02 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Registration/confirmed.html.twig", 1);
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
        $__internal_b2889152433a9a3a66d1fb0dc71562fb9671c070d3c12348e58d0c71c7a4af3e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b2889152433a9a3a66d1fb0dc71562fb9671c070d3c12348e58d0c71c7a4af3e->enter($__internal_b2889152433a9a3a66d1fb0dc71562fb9671c070d3c12348e58d0c71c7a4af3e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/confirmed.html.twig"));

        $__internal_8537ce630c2dc0c6a9cf562933e70e39060aeb57d7f5618d083bdf45194c651c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8537ce630c2dc0c6a9cf562933e70e39060aeb57d7f5618d083bdf45194c651c->enter($__internal_8537ce630c2dc0c6a9cf562933e70e39060aeb57d7f5618d083bdf45194c651c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/confirmed.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b2889152433a9a3a66d1fb0dc71562fb9671c070d3c12348e58d0c71c7a4af3e->leave($__internal_b2889152433a9a3a66d1fb0dc71562fb9671c070d3c12348e58d0c71c7a4af3e_prof);

        
        $__internal_8537ce630c2dc0c6a9cf562933e70e39060aeb57d7f5618d083bdf45194c651c->leave($__internal_8537ce630c2dc0c6a9cf562933e70e39060aeb57d7f5618d083bdf45194c651c_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_2675fe8784b7d82a59f04b037d493c84307e6ca0c8845f125362dbdcfd06c3f3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2675fe8784b7d82a59f04b037d493c84307e6ca0c8845f125362dbdcfd06c3f3->enter($__internal_2675fe8784b7d82a59f04b037d493c84307e6ca0c8845f125362dbdcfd06c3f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_daa55d4282ad5cb5c9a3b6bed763eb0796c71815823316c20f7f0e85c509575c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_daa55d4282ad5cb5c9a3b6bed763eb0796c71815823316c20f7f0e85c509575c->enter($__internal_daa55d4282ad5cb5c9a3b6bed763eb0796c71815823316c20f7f0e85c509575c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.confirmed", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
    ";
        // line 7
        if ((isset($context["targetUrl"]) ? $context["targetUrl"] : $this->getContext($context, "targetUrl"))) {
            // line 8
            echo "    <p><a href=\"";
            echo twig_escape_filter($this->env, (isset($context["targetUrl"]) ? $context["targetUrl"] : $this->getContext($context, "targetUrl")), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.back", array(), "FOSUserBundle"), "html", null, true);
            echo "</a></p>
    ";
        }
        
        $__internal_daa55d4282ad5cb5c9a3b6bed763eb0796c71815823316c20f7f0e85c509575c->leave($__internal_daa55d4282ad5cb5c9a3b6bed763eb0796c71815823316c20f7f0e85c509575c_prof);

        
        $__internal_2675fe8784b7d82a59f04b037d493c84307e6ca0c8845f125362dbdcfd06c3f3->leave($__internal_2675fe8784b7d82a59f04b037d493c84307e6ca0c8845f125362dbdcfd06c3f3_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Registration/confirmed.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  56 => 8,  54 => 7,  49 => 6,  40 => 5,  11 => 1,);
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

{% trans_default_domain 'FOSUserBundle' %}

{% block fos_user_content %}
    <p>{{ 'registration.confirmed'|trans({'%username%': user.username}) }}</p>
    {% if targetUrl %}
    <p><a href=\"{{ targetUrl }}\">{{ 'registration.back'|trans }}</a></p>
    {% endif %}
{% endblock fos_user_content %}
", "@FOSUser/Registration/confirmed.html.twig", "/Applications/MAMP/htdocs/Symfony/bdx-1702-coprosyndic/vendor/friendsofsymfony/user-bundle/Resources/views/Registration/confirmed.html.twig");
    }
}

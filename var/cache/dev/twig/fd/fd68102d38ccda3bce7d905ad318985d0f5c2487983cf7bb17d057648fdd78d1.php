<?php

/* WebProfilerBundle:Profiler:toolbar_redirect.html.twig */
class __TwigTemplate_9b3d75d9857ca5d728ae6d599c01aa3590042d29e32328d63ad27fd0088645ae extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ef59ce7107ae3ea107fbd9394d261a36affa458ed5f88ed9f13a1f0e339eb1e0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ef59ce7107ae3ea107fbd9394d261a36affa458ed5f88ed9f13a1f0e339eb1e0->enter($__internal_ef59ce7107ae3ea107fbd9394d261a36affa458ed5f88ed9f13a1f0e339eb1e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $__internal_208009b5d20527e171d3a72ee5d56b39c1e182b3a5828aef97d15ab29a1eef7b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_208009b5d20527e171d3a72ee5d56b39c1e182b3a5828aef97d15ab29a1eef7b->enter($__internal_208009b5d20527e171d3a72ee5d56b39c1e182b3a5828aef97d15ab29a1eef7b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ef59ce7107ae3ea107fbd9394d261a36affa458ed5f88ed9f13a1f0e339eb1e0->leave($__internal_ef59ce7107ae3ea107fbd9394d261a36affa458ed5f88ed9f13a1f0e339eb1e0_prof);

        
        $__internal_208009b5d20527e171d3a72ee5d56b39c1e182b3a5828aef97d15ab29a1eef7b->leave($__internal_208009b5d20527e171d3a72ee5d56b39c1e182b3a5828aef97d15ab29a1eef7b_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_2795a3d8f162353212a8ed6982cf64942ce7629d7768156a34be3ac06a545d9d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2795a3d8f162353212a8ed6982cf64942ce7629d7768156a34be3ac06a545d9d->enter($__internal_2795a3d8f162353212a8ed6982cf64942ce7629d7768156a34be3ac06a545d9d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_835c336fa2a8b0a086d3e3686fba509d120fc5d19e35a7c0f5714fabacffe486 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_835c336fa2a8b0a086d3e3686fba509d120fc5d19e35a7c0f5714fabacffe486->enter($__internal_835c336fa2a8b0a086d3e3686fba509d120fc5d19e35a7c0f5714fabacffe486_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_835c336fa2a8b0a086d3e3686fba509d120fc5d19e35a7c0f5714fabacffe486->leave($__internal_835c336fa2a8b0a086d3e3686fba509d120fc5d19e35a7c0f5714fabacffe486_prof);

        
        $__internal_2795a3d8f162353212a8ed6982cf64942ce7629d7768156a34be3ac06a545d9d->leave($__internal_2795a3d8f162353212a8ed6982cf64942ce7629d7768156a34be3ac06a545d9d_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_3139936a4b03adc7023b21acff5e9fae20c0fdc75a5b74ef3867e70dd164cd29 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3139936a4b03adc7023b21acff5e9fae20c0fdc75a5b74ef3867e70dd164cd29->enter($__internal_3139936a4b03adc7023b21acff5e9fae20c0fdc75a5b74ef3867e70dd164cd29_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_7569f4d5627c816e2c038420d4a788b8143095b87d0aac24c074ca3772187fa7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7569f4d5627c816e2c038420d4a788b8143095b87d0aac24c074ca3772187fa7->enter($__internal_7569f4d5627c816e2c038420d4a788b8143095b87d0aac24c074ca3772187fa7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
";
        
        $__internal_7569f4d5627c816e2c038420d4a788b8143095b87d0aac24c074ca3772187fa7->leave($__internal_7569f4d5627c816e2c038420d4a788b8143095b87d0aac24c074ca3772187fa7_prof);

        
        $__internal_3139936a4b03adc7023b21acff5e9fae20c0fdc75a5b74ef3867e70dd164cd29->leave($__internal_3139936a4b03adc7023b21acff5e9fae20c0fdc75a5b74ef3867e70dd164cd29_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:toolbar_redirect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 8,  68 => 6,  59 => 5,  41 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block title 'Redirection Intercepted' %}

{% block body %}
    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"{{ location }}\">{{ location }}</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
{% endblock %}
", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", "/Applications/MAMP/htdocs/Symfony/bdx-1702-coprosyndic/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/toolbar_redirect.html.twig");
    }
}

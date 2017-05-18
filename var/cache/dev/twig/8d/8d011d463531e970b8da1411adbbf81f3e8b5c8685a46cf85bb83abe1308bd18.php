<?php

/* FOSUserBundle:Resetting:check_email.html.twig */
class __TwigTemplate_e07486e0c50b06f2dbb534994c5499b5f34a1ec0a6708809b603562fb99a8dd5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Resetting:check_email.html.twig", 1);
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
        $__internal_ba832677c3ed01db6e3754d7516e5bcb10924476ac9192c4e981ed9158a9901f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ba832677c3ed01db6e3754d7516e5bcb10924476ac9192c4e981ed9158a9901f->enter($__internal_ba832677c3ed01db6e3754d7516e5bcb10924476ac9192c4e981ed9158a9901f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:check_email.html.twig"));

        $__internal_a54b8e7e9f9f8c826486970b19a46a1044d53cf6779da3ebcbccaf3e86088b8d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a54b8e7e9f9f8c826486970b19a46a1044d53cf6779da3ebcbccaf3e86088b8d->enter($__internal_a54b8e7e9f9f8c826486970b19a46a1044d53cf6779da3ebcbccaf3e86088b8d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:check_email.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ba832677c3ed01db6e3754d7516e5bcb10924476ac9192c4e981ed9158a9901f->leave($__internal_ba832677c3ed01db6e3754d7516e5bcb10924476ac9192c4e981ed9158a9901f_prof);

        
        $__internal_a54b8e7e9f9f8c826486970b19a46a1044d53cf6779da3ebcbccaf3e86088b8d->leave($__internal_a54b8e7e9f9f8c826486970b19a46a1044d53cf6779da3ebcbccaf3e86088b8d_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_7c93f637559b94d5fabe0991188a5c77a016bcae965251a26fb47b7315438caa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7c93f637559b94d5fabe0991188a5c77a016bcae965251a26fb47b7315438caa->enter($__internal_7c93f637559b94d5fabe0991188a5c77a016bcae965251a26fb47b7315438caa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_1cd64fc24dcc36b208135e728c3d2a54f39be5c6c5761c9504a0c494ace99bac = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1cd64fc24dcc36b208135e728c3d2a54f39be5c6c5761c9504a0c494ace99bac->enter($__internal_1cd64fc24dcc36b208135e728c3d2a54f39be5c6c5761c9504a0c494ace99bac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "<p>
";
        // line 7
        echo nl2br(twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.check_email", array("%tokenLifetime%" => (isset($context["tokenLifetime"]) ? $context["tokenLifetime"] : $this->getContext($context, "tokenLifetime"))), "FOSUserBundle"), "html", null, true));
        echo "
</p>
";
        
        $__internal_1cd64fc24dcc36b208135e728c3d2a54f39be5c6c5761c9504a0c494ace99bac->leave($__internal_1cd64fc24dcc36b208135e728c3d2a54f39be5c6c5761c9504a0c494ace99bac_prof);

        
        $__internal_7c93f637559b94d5fabe0991188a5c77a016bcae965251a26fb47b7315438caa->leave($__internal_7c93f637559b94d5fabe0991188a5c77a016bcae965251a26fb47b7315438caa_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:check_email.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  52 => 7,  49 => 6,  40 => 5,  11 => 1,);
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
<p>
{{ 'resetting.check_email'|trans({'%tokenLifetime%': tokenLifetime})|nl2br }}
</p>
{% endblock %}
", "FOSUserBundle:Resetting:check_email.html.twig", "/Applications/MAMP/htdocs/Symfony/bdx-1702-coprosyndic/app/Resources/FOSUserBundle/views/Resetting/check_email.html.twig");
    }
}

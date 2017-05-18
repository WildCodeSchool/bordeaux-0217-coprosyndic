<?php

/* FOSUserBundle:Profile:show_content.html.twig */
class __TwigTemplate_9bd46ac6f6ba5cf53f2878b72e7a6fee8637c427eac5e9a70e3dbec3d22b0ee2 extends Twig_Template
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
        $__internal_230b18a4360e58b0fc735d2b4a2f20536a88e4f893d4ee62a5b702fa2e73fc94 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_230b18a4360e58b0fc735d2b4a2f20536a88e4f893d4ee62a5b702fa2e73fc94->enter($__internal_230b18a4360e58b0fc735d2b4a2f20536a88e4f893d4ee62a5b702fa2e73fc94_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:show_content.html.twig"));

        $__internal_660025bc591bd8bf2eb4e30e3ede368b72e6f0c7fe6ca5c8f7f17544a65419aa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_660025bc591bd8bf2eb4e30e3ede368b72e6f0c7fe6ca5c8f7f17544a65419aa->enter($__internal_660025bc591bd8bf2eb4e30e3ede368b72e6f0c7fe6ca5c8f7f17544a65419aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:show_content.html.twig"));

        // line 2
        echo "
<div class=\"fos_user_user_show\">
    <p>";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("profile.show.username", array(), "FOSUserBundle"), "html", null, true);
        echo ": ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "html", null, true);
        echo "</p>
    <p>";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("profile.show.email", array(), "FOSUserBundle"), "html", null, true);
        echo ": ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "email", array()), "html", null, true);
        echo "</p>
</div>
";
        
        $__internal_230b18a4360e58b0fc735d2b4a2f20536a88e4f893d4ee62a5b702fa2e73fc94->leave($__internal_230b18a4360e58b0fc735d2b4a2f20536a88e4f893d4ee62a5b702fa2e73fc94_prof);

        
        $__internal_660025bc591bd8bf2eb4e30e3ede368b72e6f0c7fe6ca5c8f7f17544a65419aa->leave($__internal_660025bc591bd8bf2eb4e30e3ede368b72e6f0c7fe6ca5c8f7f17544a65419aa_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:show_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  35 => 5,  29 => 4,  25 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% trans_default_domain 'FOSUserBundle' %}

<div class=\"fos_user_user_show\">
    <p>{{ 'profile.show.username'|trans }}: {{ user.username }}</p>
    <p>{{ 'profile.show.email'|trans }}: {{ user.email }}</p>
</div>
", "FOSUserBundle:Profile:show_content.html.twig", "/Applications/MAMP/htdocs/Symfony/bdx-1702-coprosyndic/app/Resources/FOSUserBundle/views/Profile/show_content.html.twig");
    }
}

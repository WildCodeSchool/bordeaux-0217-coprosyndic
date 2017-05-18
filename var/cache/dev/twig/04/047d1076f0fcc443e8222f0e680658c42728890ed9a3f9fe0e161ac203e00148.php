<?php

/* WebProfilerBundle:Profiler:info.html.twig */
class __TwigTemplate_dc1c62e7f97d3db95972fb296fdf6de7976737d02c4ac47b68461e781a5aa705 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Profiler:info.html.twig", 1);
        $this->blocks = array(
            'summary' => array($this, 'block_summary'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ac9fa86abb3c13731eeee7cc76b11c0d5147709d11e0f94d0a64ac9aaaade619 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ac9fa86abb3c13731eeee7cc76b11c0d5147709d11e0f94d0a64ac9aaaade619->enter($__internal_ac9fa86abb3c13731eeee7cc76b11c0d5147709d11e0f94d0a64ac9aaaade619_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:info.html.twig"));

        $__internal_ca058d81ffb16e11795883716949feb46efb14892e7fcba21812efb83e1f2e34 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ca058d81ffb16e11795883716949feb46efb14892e7fcba21812efb83e1f2e34->enter($__internal_ca058d81ffb16e11795883716949feb46efb14892e7fcba21812efb83e1f2e34_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:info.html.twig"));

        // line 3
        $context["messages"] = array("purge" => array("status" => "success", "title" => "The profiler database was purged successfully", "message" => "Now you need to browse some pages with the Symfony Profiler enabled to collect data."), "no_token" => array("status" => "error", "title" => (((((        // line 11
array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("There are no profiles") : ("Token not found")), "message" => (((((        // line 12
array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("No profiles found in the database.") : ((("Token \"" . ((array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "")) : (""))) . "\" was not found in the database.")))), "upload_error" => array("status" => "error", "title" => "A problem occurred when uploading the data", "message" => "No file given or the file was not uploaded successfully."), "already_exists" => array("status" => "error", "title" => "A problem occurred when uploading the data", "message" => "The token already exists in the database."));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ac9fa86abb3c13731eeee7cc76b11c0d5147709d11e0f94d0a64ac9aaaade619->leave($__internal_ac9fa86abb3c13731eeee7cc76b11c0d5147709d11e0f94d0a64ac9aaaade619_prof);

        
        $__internal_ca058d81ffb16e11795883716949feb46efb14892e7fcba21812efb83e1f2e34->leave($__internal_ca058d81ffb16e11795883716949feb46efb14892e7fcba21812efb83e1f2e34_prof);

    }

    // line 26
    public function block_summary($context, array $blocks = array())
    {
        $__internal_ad027e0500b417e3bfc2abbb95c0a4c82a75a6f923ff688308bd93cb8357d917 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ad027e0500b417e3bfc2abbb95c0a4c82a75a6f923ff688308bd93cb8357d917->enter($__internal_ad027e0500b417e3bfc2abbb95c0a4c82a75a6f923ff688308bd93cb8357d917_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        $__internal_898ca7bff67306ba0fd37ac11396fd0ed9c9fd54790e3f98140ed6b80804f97e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_898ca7bff67306ba0fd37ac11396fd0ed9c9fd54790e3f98140ed6b80804f97e->enter($__internal_898ca7bff67306ba0fd37ac11396fd0ed9c9fd54790e3f98140ed6b80804f97e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        // line 27
        echo "    <div class=\"status status-";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["messages"]) ? $context["messages"] : $this->getContext($context, "messages")), (isset($context["about"]) ? $context["about"] : $this->getContext($context, "about")), array(), "array"), "status", array()), "html", null, true);
        echo "\">
        <div class=\"container\">
            <h2>";
        // line 29
        echo twig_escape_filter($this->env, twig_title_string_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["messages"]) ? $context["messages"] : $this->getContext($context, "messages")), (isset($context["about"]) ? $context["about"] : $this->getContext($context, "about")), array(), "array"), "status", array())), "html", null, true);
        echo "</h2>
        </div>
    </div>
";
        
        $__internal_898ca7bff67306ba0fd37ac11396fd0ed9c9fd54790e3f98140ed6b80804f97e->leave($__internal_898ca7bff67306ba0fd37ac11396fd0ed9c9fd54790e3f98140ed6b80804f97e_prof);

        
        $__internal_ad027e0500b417e3bfc2abbb95c0a4c82a75a6f923ff688308bd93cb8357d917->leave($__internal_ad027e0500b417e3bfc2abbb95c0a4c82a75a6f923ff688308bd93cb8357d917_prof);

    }

    // line 34
    public function block_panel($context, array $blocks = array())
    {
        $__internal_16b99a791d7c2c121f1471b3b602f5e9420bb453460bd57ef3d8f4866169891f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_16b99a791d7c2c121f1471b3b602f5e9420bb453460bd57ef3d8f4866169891f->enter($__internal_16b99a791d7c2c121f1471b3b602f5e9420bb453460bd57ef3d8f4866169891f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_826eb980eea3f429eb8d794f11adb2fc28838fb78ce04d9ae156f8f2cdb350ea = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_826eb980eea3f429eb8d794f11adb2fc28838fb78ce04d9ae156f8f2cdb350ea->enter($__internal_826eb980eea3f429eb8d794f11adb2fc28838fb78ce04d9ae156f8f2cdb350ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 35
        echo "    <h2>";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["messages"]) ? $context["messages"] : $this->getContext($context, "messages")), (isset($context["about"]) ? $context["about"] : $this->getContext($context, "about")), array(), "array"), "title", array()), "html", null, true);
        echo "</h2>
    <p>";
        // line 36
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["messages"]) ? $context["messages"] : $this->getContext($context, "messages")), (isset($context["about"]) ? $context["about"] : $this->getContext($context, "about")), array(), "array"), "message", array()), "html", null, true);
        echo "</p>
";
        
        $__internal_826eb980eea3f429eb8d794f11adb2fc28838fb78ce04d9ae156f8f2cdb350ea->leave($__internal_826eb980eea3f429eb8d794f11adb2fc28838fb78ce04d9ae156f8f2cdb350ea_prof);

        
        $__internal_16b99a791d7c2c121f1471b3b602f5e9420bb453460bd57ef3d8f4866169891f->leave($__internal_16b99a791d7c2c121f1471b3b602f5e9420bb453460bd57ef3d8f4866169891f_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:info.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  89 => 36,  84 => 35,  75 => 34,  61 => 29,  55 => 27,  46 => 26,  36 => 1,  34 => 12,  33 => 11,  32 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% set messages = {
    'purge' : {
        status:  'success',
        title:   'The profiler database was purged successfully',
        message: 'Now you need to browse some pages with the Symfony Profiler enabled to collect data.'
    },
    'no_token' : {
        status:  'error',
        title:   (token|default('') == 'latest') ? 'There are no profiles' : 'Token not found',
        message: (token|default('') == 'latest') ? 'No profiles found in the database.' : 'Token \"' ~ token|default('') ~ '\" was not found in the database.'
    },
    'upload_error' : {
        status:  'error',
        title:   'A problem occurred when uploading the data',
        message: 'No file given or the file was not uploaded successfully.'
    },
    'already_exists' : {
        status:  'error',
        title:   'A problem occurred when uploading the data',
        message: 'The token already exists in the database.'
    }
} %}

{% block summary %}
    <div class=\"status status-{{ messages[about].status }}\">
        <div class=\"container\">
            <h2>{{ messages[about].status|title }}</h2>
        </div>
    </div>
{% endblock %}

{% block panel %}
    <h2>{{ messages[about].title }}</h2>
    <p>{{ messages[about].message }}</p>
{% endblock %}
", "WebProfilerBundle:Profiler:info.html.twig", "/Applications/MAMP/htdocs/Symfony/bdx-1702-coprosyndic/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/info.html.twig");
    }
}

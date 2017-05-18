<?php

/* ::base.html.twig */
class __TwigTemplate_5243e67711bac2fc0c14b6ec06976c49537ac5c99c8f4cd130d64480f977da94 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c555a9f2dc018426a48e65e473f24a0e2be97cf1c0df0afae4ce66db016cae41 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c555a9f2dc018426a48e65e473f24a0e2be97cf1c0df0afae4ce66db016cae41->enter($__internal_c555a9f2dc018426a48e65e473f24a0e2be97cf1c0df0afae4ce66db016cae41_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

        $__internal_f93996c5fa65cd6631f85d8dc0746e5958ff5ae274c7ac8b1d8f2e648f320871 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f93996c5fa65cd6631f85d8dc0746e5958ff5ae274c7ac8b1d8f2e648f320871->enter($__internal_f93996c5fa65cd6631f85d8dc0746e5958ff5ae274c7ac8b1d8f2e648f320871_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
        
        $__internal_c555a9f2dc018426a48e65e473f24a0e2be97cf1c0df0afae4ce66db016cae41->leave($__internal_c555a9f2dc018426a48e65e473f24a0e2be97cf1c0df0afae4ce66db016cae41_prof);

        
        $__internal_f93996c5fa65cd6631f85d8dc0746e5958ff5ae274c7ac8b1d8f2e648f320871->leave($__internal_f93996c5fa65cd6631f85d8dc0746e5958ff5ae274c7ac8b1d8f2e648f320871_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_e1fe90118d9f7711d6864e3df697af80e7d36b2ad53f5fa28dd57395a2fb0b8f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e1fe90118d9f7711d6864e3df697af80e7d36b2ad53f5fa28dd57395a2fb0b8f->enter($__internal_e1fe90118d9f7711d6864e3df697af80e7d36b2ad53f5fa28dd57395a2fb0b8f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f64d9ca935c8066ffb0ebf1a408a5cb9d92b5cf14c03a46cd02e7339bdc2f3b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6f64d9ca935c8066ffb0ebf1a408a5cb9d92b5cf14c03a46cd02e7339bdc2f3b->enter($__internal_6f64d9ca935c8066ffb0ebf1a408a5cb9d92b5cf14c03a46cd02e7339bdc2f3b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_6f64d9ca935c8066ffb0ebf1a408a5cb9d92b5cf14c03a46cd02e7339bdc2f3b->leave($__internal_6f64d9ca935c8066ffb0ebf1a408a5cb9d92b5cf14c03a46cd02e7339bdc2f3b_prof);

        
        $__internal_e1fe90118d9f7711d6864e3df697af80e7d36b2ad53f5fa28dd57395a2fb0b8f->leave($__internal_e1fe90118d9f7711d6864e3df697af80e7d36b2ad53f5fa28dd57395a2fb0b8f_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_26c62b486f929291173edb59b6d6f4c209a744effa09f4789a3b14f0660e90ca = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_26c62b486f929291173edb59b6d6f4c209a744effa09f4789a3b14f0660e90ca->enter($__internal_26c62b486f929291173edb59b6d6f4c209a744effa09f4789a3b14f0660e90ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_00c7a20a4a940b8aa878c6b22846b4a7d21c9aeb1b79055020cab600336fd136 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_00c7a20a4a940b8aa878c6b22846b4a7d21c9aeb1b79055020cab600336fd136->enter($__internal_00c7a20a4a940b8aa878c6b22846b4a7d21c9aeb1b79055020cab600336fd136_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_00c7a20a4a940b8aa878c6b22846b4a7d21c9aeb1b79055020cab600336fd136->leave($__internal_00c7a20a4a940b8aa878c6b22846b4a7d21c9aeb1b79055020cab600336fd136_prof);

        
        $__internal_26c62b486f929291173edb59b6d6f4c209a744effa09f4789a3b14f0660e90ca->leave($__internal_26c62b486f929291173edb59b6d6f4c209a744effa09f4789a3b14f0660e90ca_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_81284db84ce858c74955a1ddca1c472b88a6462f80b94533c3deaf309a5fe1c9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_81284db84ce858c74955a1ddca1c472b88a6462f80b94533c3deaf309a5fe1c9->enter($__internal_81284db84ce858c74955a1ddca1c472b88a6462f80b94533c3deaf309a5fe1c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_d3e0099d39e056e3da038e3d30821fe89fe39ba06a81814cf4fb61bdda05ea13 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d3e0099d39e056e3da038e3d30821fe89fe39ba06a81814cf4fb61bdda05ea13->enter($__internal_d3e0099d39e056e3da038e3d30821fe89fe39ba06a81814cf4fb61bdda05ea13_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_d3e0099d39e056e3da038e3d30821fe89fe39ba06a81814cf4fb61bdda05ea13->leave($__internal_d3e0099d39e056e3da038e3d30821fe89fe39ba06a81814cf4fb61bdda05ea13_prof);

        
        $__internal_81284db84ce858c74955a1ddca1c472b88a6462f80b94533c3deaf309a5fe1c9->leave($__internal_81284db84ce858c74955a1ddca1c472b88a6462f80b94533c3deaf309a5fe1c9_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_4669eae39855c14ccc34b534ff212ec44ee252737e4206c192bc6ea45e7bb38e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4669eae39855c14ccc34b534ff212ec44ee252737e4206c192bc6ea45e7bb38e->enter($__internal_4669eae39855c14ccc34b534ff212ec44ee252737e4206c192bc6ea45e7bb38e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_0d6fa8a54989286879f50044b4cae1312c670abfe27b294b99bc55411c69d2bd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0d6fa8a54989286879f50044b4cae1312c670abfe27b294b99bc55411c69d2bd->enter($__internal_0d6fa8a54989286879f50044b4cae1312c670abfe27b294b99bc55411c69d2bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_0d6fa8a54989286879f50044b4cae1312c670abfe27b294b99bc55411c69d2bd->leave($__internal_0d6fa8a54989286879f50044b4cae1312c670abfe27b294b99bc55411c69d2bd_prof);

        
        $__internal_4669eae39855c14ccc34b534ff212ec44ee252737e4206c192bc6ea45e7bb38e->leave($__internal_4669eae39855c14ccc34b534ff212ec44ee252737e4206c192bc6ea45e7bb38e_prof);

    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 11,  100 => 10,  83 => 6,  65 => 5,  53 => 12,  50 => 11,  48 => 10,  41 => 7,  39 => 6,  35 => 5,  29 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>{% block title %}Welcome!{% endblock %}</title>
        {% block stylesheets %}{% endblock %}
        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
    </head>
    <body>
        {% block body %}{% endblock %}
        {% block javascripts %}{% endblock %}
    </body>
</html>
", "::base.html.twig", "/Applications/MAMP/htdocs/Symfony/bdx-1702-coprosyndic/easycopro/app/Resources/views/base.html.twig");
    }
}

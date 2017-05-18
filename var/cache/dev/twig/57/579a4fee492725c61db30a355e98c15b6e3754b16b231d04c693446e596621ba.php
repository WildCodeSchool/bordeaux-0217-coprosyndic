<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_a0ab1fb4a0aa09ee5535a80573bc6497da13d5b38022c26061960146fcaea2bd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_7d6ccba20a039b900fefab62caee4285558ecaa1d3214042d2bd1654003eecb4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7d6ccba20a039b900fefab62caee4285558ecaa1d3214042d2bd1654003eecb4->enter($__internal_7d6ccba20a039b900fefab62caee4285558ecaa1d3214042d2bd1654003eecb4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_8abd76c2708df3a304387ad2f56abe1a41db89c371509377371bad9afc5fba2a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8abd76c2708df3a304387ad2f56abe1a41db89c371509377371bad9afc5fba2a->enter($__internal_8abd76c2708df3a304387ad2f56abe1a41db89c371509377371bad9afc5fba2a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7d6ccba20a039b900fefab62caee4285558ecaa1d3214042d2bd1654003eecb4->leave($__internal_7d6ccba20a039b900fefab62caee4285558ecaa1d3214042d2bd1654003eecb4_prof);

        
        $__internal_8abd76c2708df3a304387ad2f56abe1a41db89c371509377371bad9afc5fba2a->leave($__internal_8abd76c2708df3a304387ad2f56abe1a41db89c371509377371bad9afc5fba2a_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_6b8e541b165ef087eb8da43adb90c501925cb5627c0ec91b88085ea693e6c86b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6b8e541b165ef087eb8da43adb90c501925cb5627c0ec91b88085ea693e6c86b->enter($__internal_6b8e541b165ef087eb8da43adb90c501925cb5627c0ec91b88085ea693e6c86b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_b2a9cb76d099624d971fc29dda977ff3c48afb2976368f613ccd3d530f07ce71 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b2a9cb76d099624d971fc29dda977ff3c48afb2976368f613ccd3d530f07ce71->enter($__internal_b2a9cb76d099624d971fc29dda977ff3c48afb2976368f613ccd3d530f07ce71_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_b2a9cb76d099624d971fc29dda977ff3c48afb2976368f613ccd3d530f07ce71->leave($__internal_b2a9cb76d099624d971fc29dda977ff3c48afb2976368f613ccd3d530f07ce71_prof);

        
        $__internal_6b8e541b165ef087eb8da43adb90c501925cb5627c0ec91b88085ea693e6c86b->leave($__internal_6b8e541b165ef087eb8da43adb90c501925cb5627c0ec91b88085ea693e6c86b_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_22be8f811dfef11d35f7ac5f442870e7b51f8b951a02acb447d40d701fa4f294 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_22be8f811dfef11d35f7ac5f442870e7b51f8b951a02acb447d40d701fa4f294->enter($__internal_22be8f811dfef11d35f7ac5f442870e7b51f8b951a02acb447d40d701fa4f294_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_0dcf3b95446fbe9e3efce0024cdbd4d8df2652b6216fceb00ff506de249e86d6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0dcf3b95446fbe9e3efce0024cdbd4d8df2652b6216fceb00ff506de249e86d6->enter($__internal_0dcf3b95446fbe9e3efce0024cdbd4d8df2652b6216fceb00ff506de249e86d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_0dcf3b95446fbe9e3efce0024cdbd4d8df2652b6216fceb00ff506de249e86d6->leave($__internal_0dcf3b95446fbe9e3efce0024cdbd4d8df2652b6216fceb00ff506de249e86d6_prof);

        
        $__internal_22be8f811dfef11d35f7ac5f442870e7b51f8b951a02acb447d40d701fa4f294->leave($__internal_22be8f811dfef11d35f7ac5f442870e7b51f8b951a02acb447d40d701fa4f294_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_2faa7b654cbcffbf07c7ad3924f4a7f109bb3d49a39e9bfb683fbfdc438070e6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2faa7b654cbcffbf07c7ad3924f4a7f109bb3d49a39e9bfb683fbfdc438070e6->enter($__internal_2faa7b654cbcffbf07c7ad3924f4a7f109bb3d49a39e9bfb683fbfdc438070e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_8514d2476f69b2f6d2c054090fd75d69ed3374626fffc7ce9668607e156f2c0b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8514d2476f69b2f6d2c054090fd75d69ed3374626fffc7ce9668607e156f2c0b->enter($__internal_8514d2476f69b2f6d2c054090fd75d69ed3374626fffc7ce9668607e156f2c0b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_8514d2476f69b2f6d2c054090fd75d69ed3374626fffc7ce9668607e156f2c0b->leave($__internal_8514d2476f69b2f6d2c054090fd75d69ed3374626fffc7ce9668607e156f2c0b_prof);

        
        $__internal_2faa7b654cbcffbf07c7ad3924f4a7f109bb3d49a39e9bfb683fbfdc438070e6->leave($__internal_2faa7b654cbcffbf07c7ad3924f4a7f109bb3d49a39e9bfb683fbfdc438070e6_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 13,  85 => 12,  71 => 7,  68 => 6,  59 => 5,  42 => 3,  11 => 1,);
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

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "@WebProfiler/Collector/router.html.twig", "/Applications/MAMP/htdocs/Symfony/bdx-1702-coprosyndic/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}

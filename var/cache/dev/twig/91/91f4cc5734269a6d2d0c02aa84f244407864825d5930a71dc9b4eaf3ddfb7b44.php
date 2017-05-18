<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_8a31bbf6d27b61e74fed2c97266af7cf11e8909fb03298bf8178e142ab470eb2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
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
        $__internal_07f1fbd6d738a1c572859441f6b24a2e394f27b9a6d24f004c084bcc4292f329 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_07f1fbd6d738a1c572859441f6b24a2e394f27b9a6d24f004c084bcc4292f329->enter($__internal_07f1fbd6d738a1c572859441f6b24a2e394f27b9a6d24f004c084bcc4292f329_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_afd0f070d981ab741fcd8be5d6e34e0a447e47fe8b7db57c3eb55a34cf078866 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_afd0f070d981ab741fcd8be5d6e34e0a447e47fe8b7db57c3eb55a34cf078866->enter($__internal_afd0f070d981ab741fcd8be5d6e34e0a447e47fe8b7db57c3eb55a34cf078866_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_07f1fbd6d738a1c572859441f6b24a2e394f27b9a6d24f004c084bcc4292f329->leave($__internal_07f1fbd6d738a1c572859441f6b24a2e394f27b9a6d24f004c084bcc4292f329_prof);

        
        $__internal_afd0f070d981ab741fcd8be5d6e34e0a447e47fe8b7db57c3eb55a34cf078866->leave($__internal_afd0f070d981ab741fcd8be5d6e34e0a447e47fe8b7db57c3eb55a34cf078866_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_2c659ef1730077b6dd3d4d698433c567c588b35641e76946dee27c64ecf75040 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2c659ef1730077b6dd3d4d698433c567c588b35641e76946dee27c64ecf75040->enter($__internal_2c659ef1730077b6dd3d4d698433c567c588b35641e76946dee27c64ecf75040_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_e99d053b0a9d7faf0351d5bc6d068b63808a5d176a16668c13ed7d0bcdc8db1b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e99d053b0a9d7faf0351d5bc6d068b63808a5d176a16668c13ed7d0bcdc8db1b->enter($__internal_e99d053b0a9d7faf0351d5bc6d068b63808a5d176a16668c13ed7d0bcdc8db1b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_e99d053b0a9d7faf0351d5bc6d068b63808a5d176a16668c13ed7d0bcdc8db1b->leave($__internal_e99d053b0a9d7faf0351d5bc6d068b63808a5d176a16668c13ed7d0bcdc8db1b_prof);

        
        $__internal_2c659ef1730077b6dd3d4d698433c567c588b35641e76946dee27c64ecf75040->leave($__internal_2c659ef1730077b6dd3d4d698433c567c588b35641e76946dee27c64ecf75040_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_96d02c7a95c2b1a4cb1d449f3c2ef08b189f0ddb1152d7b3e5b6d93470795bc1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_96d02c7a95c2b1a4cb1d449f3c2ef08b189f0ddb1152d7b3e5b6d93470795bc1->enter($__internal_96d02c7a95c2b1a4cb1d449f3c2ef08b189f0ddb1152d7b3e5b6d93470795bc1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_fcada2e64b03c154ddafc3a332a067cefda9742aef74e3cdbd702e07a590fcc7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fcada2e64b03c154ddafc3a332a067cefda9742aef74e3cdbd702e07a590fcc7->enter($__internal_fcada2e64b03c154ddafc3a332a067cefda9742aef74e3cdbd702e07a590fcc7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_fcada2e64b03c154ddafc3a332a067cefda9742aef74e3cdbd702e07a590fcc7->leave($__internal_fcada2e64b03c154ddafc3a332a067cefda9742aef74e3cdbd702e07a590fcc7_prof);

        
        $__internal_96d02c7a95c2b1a4cb1d449f3c2ef08b189f0ddb1152d7b3e5b6d93470795bc1->leave($__internal_96d02c7a95c2b1a4cb1d449f3c2ef08b189f0ddb1152d7b3e5b6d93470795bc1_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_9df02fa58a9cfc6ee10b3111f38346665d8ef7e6eef1495a9fd79bfdc9d430e8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9df02fa58a9cfc6ee10b3111f38346665d8ef7e6eef1495a9fd79bfdc9d430e8->enter($__internal_9df02fa58a9cfc6ee10b3111f38346665d8ef7e6eef1495a9fd79bfdc9d430e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_6ae0b944d682e6f45142c3610a2c01ebdc1334af153615ba1455e59b85a49579 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6ae0b944d682e6f45142c3610a2c01ebdc1334af153615ba1455e59b85a49579->enter($__internal_6ae0b944d682e6f45142c3610a2c01ebdc1334af153615ba1455e59b85a49579_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_6ae0b944d682e6f45142c3610a2c01ebdc1334af153615ba1455e59b85a49579->leave($__internal_6ae0b944d682e6f45142c3610a2c01ebdc1334af153615ba1455e59b85a49579_prof);

        
        $__internal_9df02fa58a9cfc6ee10b3111f38346665d8ef7e6eef1495a9fd79bfdc9d430e8->leave($__internal_9df02fa58a9cfc6ee10b3111f38346665d8ef7e6eef1495a9fd79bfdc9d430e8_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 33,  135 => 32,  129 => 28,  127 => 27,  123 => 25,  114 => 24,  103 => 21,  97 => 17,  95 => 16,  90 => 14,  85 => 13,  76 => 12,  63 => 9,  57 => 6,  54 => 5,  51 => 4,  42 => 3,  11 => 1,);
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

{% block head %}
    {% if collector.hasexception %}
        <style>
            {{ render(path('_profiler_exception_css', { token: token })) }}
        </style>
    {% endif %}
    {{ parent() }}
{% endblock %}

{% block menu %}
    <span class=\"label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}\">
        <span class=\"icon\">{{ include('@WebProfiler/Icon/exception.svg') }}</span>
        <strong>Exception</strong>
        {% if collector.hasexception %}
            <span class=\"count\">
                <span>1</span>
            </span>
        {% endif %}
    </span>
{% endblock %}

{% block panel %}
    <h2>Exceptions</h2>

    {% if not collector.hasexception %}
        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    {% else %}
        <div class=\"sf-reset\">
            {{ render(path('_profiler_exception', { token: token })) }}
        </div>
    {% endif %}
{% endblock %}
", "@WebProfiler/Collector/exception.html.twig", "/Applications/MAMP/htdocs/Symfony/bdx-1702-coprosyndic/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/exception.html.twig");
    }
}

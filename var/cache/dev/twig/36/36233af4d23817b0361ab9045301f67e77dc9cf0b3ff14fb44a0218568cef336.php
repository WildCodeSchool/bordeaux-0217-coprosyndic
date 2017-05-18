<?php

/* @FOSUser/layout.html.twig */
class __TwigTemplate_d3f00c4b177c6b1cb44816f4e8bc93481e0c8335a805a068559a6c5cb578c499 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_b8e4850df3c0581c4e1131a0472781519dcf6ff0e9a66233e0bddcc76be0b428 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b8e4850df3c0581c4e1131a0472781519dcf6ff0e9a66233e0bddcc76be0b428->enter($__internal_b8e4850df3c0581c4e1131a0472781519dcf6ff0e9a66233e0bddcc76be0b428_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/layout.html.twig"));

        $__internal_3204e562e21311232b53c6972457f165fe8b2e619baa81da972f4b4f669a093f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3204e562e21311232b53c6972457f165fe8b2e619baa81da972f4b4f669a093f->enter($__internal_3204e562e21311232b53c6972457f165fe8b2e619baa81da972f4b4f669a093f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/layout.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
    </head>
    <body>
        ";
        // line 17
        echo "
        ";
        // line 18
        if ($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "hasPreviousSession", array())) {
            // line 19
            echo "            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "all", array(), "method"));
            foreach ($context['_seq'] as $context["type"] => $context["messages"]) {
                // line 20
                echo "                ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($context["messages"]);
                foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                    // line 21
                    echo "                    <div class=\"flash-";
                    echo twig_escape_filter($this->env, $context["type"], "html", null, true);
                    echo "\">
                        ";
                    // line 22
                    echo twig_escape_filter($this->env, $context["message"], "html", null, true);
                    echo "
                    </div>
                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 25
                echo "            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['type'], $context['messages'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 26
            echo "        ";
        }
        // line 27
        echo "
        <div>
            ";
        // line 29
        $this->displayBlock('fos_user_content', $context, $blocks);
        // line 31
        echo "        </div>
    </body>
</html>
";
        
        $__internal_b8e4850df3c0581c4e1131a0472781519dcf6ff0e9a66233e0bddcc76be0b428->leave($__internal_b8e4850df3c0581c4e1131a0472781519dcf6ff0e9a66233e0bddcc76be0b428_prof);

        
        $__internal_3204e562e21311232b53c6972457f165fe8b2e619baa81da972f4b4f669a093f->leave($__internal_3204e562e21311232b53c6972457f165fe8b2e619baa81da972f4b4f669a093f_prof);

    }

    // line 29
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_d749b599011c3a18df69e3309cb30392e2aec13f8edc8225586c64498cad7e43 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d749b599011c3a18df69e3309cb30392e2aec13f8edc8225586c64498cad7e43->enter($__internal_d749b599011c3a18df69e3309cb30392e2aec13f8edc8225586c64498cad7e43_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_e6f8992367adcce1ec2974d0aea4e2d91bbfa8de732ec77bea51a63d3a79b5de = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e6f8992367adcce1ec2974d0aea4e2d91bbfa8de732ec77bea51a63d3a79b5de->enter($__internal_e6f8992367adcce1ec2974d0aea4e2d91bbfa8de732ec77bea51a63d3a79b5de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 30
        echo "            ";
        
        $__internal_e6f8992367adcce1ec2974d0aea4e2d91bbfa8de732ec77bea51a63d3a79b5de->leave($__internal_e6f8992367adcce1ec2974d0aea4e2d91bbfa8de732ec77bea51a63d3a79b5de_prof);

        
        $__internal_d749b599011c3a18df69e3309cb30392e2aec13f8edc8225586c64498cad7e43->leave($__internal_d749b599011c3a18df69e3309cb30392e2aec13f8edc8225586c64498cad7e43_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  100 => 30,  91 => 29,  78 => 31,  76 => 29,  72 => 27,  69 => 26,  63 => 25,  54 => 22,  49 => 21,  44 => 20,  39 => 19,  37 => 18,  34 => 17,  26 => 1,);
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
    </head>
    <body>
        {#<div>
            {% if is_granted(\"IS_AUTHENTICATED_REMEMBERED\") %}
                {{ 'layout.logged_in_as'|trans({'%username%': app.user.username}, 'FOSUserBundle') }} |
                <a href=\"{{ path('fos_user_security_logout') }}\">
                    {{ 'layout.logout'|trans({}, 'FOSUserBundle') }}
                </a>
            {% else %}
                <a href=\"{{ path('fos_user_security_login') }}\">{{ 'layout.login'|trans({}, 'FOSUserBundle') }}</a>
            {% endif %}
        </div>#}

        {% if app.request.hasPreviousSession %}
            {% for type, messages in app.session.flashbag.all() %}
                {% for message in messages %}
                    <div class=\"flash-{{ type }}\">
                        {{ message }}
                    </div>
                {% endfor %}
            {% endfor %}
        {% endif %}

        <div>
            {% block fos_user_content %}
            {% endblock fos_user_content %}
        </div>
    </body>
</html>
", "@FOSUser/layout.html.twig", "/Applications/MAMP/htdocs/Symfony/bdx-1702-coprosyndic/app/Resources/FOSUserBundle/views/layout.html.twig");
    }
}

<?php

/* FOSUserBundle:Registration:check_email.html.twig */
class __TwigTemplate_bb074e817472731b2f87ad5d39fccb04ca9f5fe7e572f5907a58b2b4cd030283 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Registration:check_email.html.twig", 1);
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
        $__internal_7af569bf9dc45c7890cb7092eb5bbfa1e20b74139c3aaeef9cb49be81941179d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7af569bf9dc45c7890cb7092eb5bbfa1e20b74139c3aaeef9cb49be81941179d->enter($__internal_7af569bf9dc45c7890cb7092eb5bbfa1e20b74139c3aaeef9cb49be81941179d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:check_email.html.twig"));

        $__internal_1679569801a35e47d844955da40f7479fb03a2c5b11164d29bb6d542d1008cff = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1679569801a35e47d844955da40f7479fb03a2c5b11164d29bb6d542d1008cff->enter($__internal_1679569801a35e47d844955da40f7479fb03a2c5b11164d29bb6d542d1008cff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:check_email.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7af569bf9dc45c7890cb7092eb5bbfa1e20b74139c3aaeef9cb49be81941179d->leave($__internal_7af569bf9dc45c7890cb7092eb5bbfa1e20b74139c3aaeef9cb49be81941179d_prof);

        
        $__internal_1679569801a35e47d844955da40f7479fb03a2c5b11164d29bb6d542d1008cff->leave($__internal_1679569801a35e47d844955da40f7479fb03a2c5b11164d29bb6d542d1008cff_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_1eca45553ca776e54ce38006ce0bd899549cd43b4b4e6a41ce0e3fc5b71e4f07 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1eca45553ca776e54ce38006ce0bd899549cd43b4b4e6a41ce0e3fc5b71e4f07->enter($__internal_1eca45553ca776e54ce38006ce0bd899549cd43b4b4e6a41ce0e3fc5b71e4f07_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_f9d11fd6b05f6c5e657c8cdfd83d39d7511ff49a721fa0b59fcd1881db927a85 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f9d11fd6b05f6c5e657c8cdfd83d39d7511ff49a721fa0b59fcd1881db927a85->enter($__internal_f9d11fd6b05f6c5e657c8cdfd83d39d7511ff49a721fa0b59fcd1881db927a85_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.check_email", array("%email%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "email", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_f9d11fd6b05f6c5e657c8cdfd83d39d7511ff49a721fa0b59fcd1881db927a85->leave($__internal_f9d11fd6b05f6c5e657c8cdfd83d39d7511ff49a721fa0b59fcd1881db927a85_prof);

        
        $__internal_1eca45553ca776e54ce38006ce0bd899549cd43b4b4e6a41ce0e3fc5b71e4f07->leave($__internal_1eca45553ca776e54ce38006ce0bd899549cd43b4b4e6a41ce0e3fc5b71e4f07_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:check_email.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 6,  40 => 5,  11 => 1,);
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
    <p>{{ 'registration.check_email'|trans({'%email%': user.email}) }}</p>
{% endblock fos_user_content %}
", "FOSUserBundle:Registration:check_email.html.twig", "/Applications/MAMP/htdocs/Symfony/bdx-1702-coprosyndic/app/Resources/FOSUserBundle/views/Registration/check_email.html.twig");
    }
}

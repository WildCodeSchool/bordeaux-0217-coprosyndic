<?php

/* FOSUserBundle:Profile:edit.html.twig */
class __TwigTemplate_369231aa5baff8f1ad00ad1e424dae5b909a8b5d65124175ca3bfd9b94ad30da extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Profile:edit.html.twig", 1);
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
        $__internal_d0f4886ca90010a5c542814804bc1c79d1aec62911eb08b8f6724d21cac1abe7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d0f4886ca90010a5c542814804bc1c79d1aec62911eb08b8f6724d21cac1abe7->enter($__internal_d0f4886ca90010a5c542814804bc1c79d1aec62911eb08b8f6724d21cac1abe7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:edit.html.twig"));

        $__internal_8f204e5198b51339d7a1afce28bf2e29fa7cc40ab48fa653bae2113477356c22 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8f204e5198b51339d7a1afce28bf2e29fa7cc40ab48fa653bae2113477356c22->enter($__internal_8f204e5198b51339d7a1afce28bf2e29fa7cc40ab48fa653bae2113477356c22_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d0f4886ca90010a5c542814804bc1c79d1aec62911eb08b8f6724d21cac1abe7->leave($__internal_d0f4886ca90010a5c542814804bc1c79d1aec62911eb08b8f6724d21cac1abe7_prof);

        
        $__internal_8f204e5198b51339d7a1afce28bf2e29fa7cc40ab48fa653bae2113477356c22->leave($__internal_8f204e5198b51339d7a1afce28bf2e29fa7cc40ab48fa653bae2113477356c22_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_6f4da806b94cd706e7b7eecca6a223b6f60e3acad6ec698f0e29148ac090f0c1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6f4da806b94cd706e7b7eecca6a223b6f60e3acad6ec698f0e29148ac090f0c1->enter($__internal_6f4da806b94cd706e7b7eecca6a223b6f60e3acad6ec698f0e29148ac090f0c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_0bff239c7c2565ebe8de9901e49c67e07cea0abaf5672c7ebe2a223e2d7e2147 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0bff239c7c2565ebe8de9901e49c67e07cea0abaf5672c7ebe2a223e2d7e2147->enter($__internal_0bff239c7c2565ebe8de9901e49c67e07cea0abaf5672c7ebe2a223e2d7e2147_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Profile/edit_content.html.twig", "FOSUserBundle:Profile:edit.html.twig", 4)->display($context);
        
        $__internal_0bff239c7c2565ebe8de9901e49c67e07cea0abaf5672c7ebe2a223e2d7e2147->leave($__internal_0bff239c7c2565ebe8de9901e49c67e07cea0abaf5672c7ebe2a223e2d7e2147_prof);

        
        $__internal_6f4da806b94cd706e7b7eecca6a223b6f60e3acad6ec698f0e29148ac090f0c1->leave($__internal_6f4da806b94cd706e7b7eecca6a223b6f60e3acad6ec698f0e29148ac090f0c1_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 4,  40 => 3,  11 => 1,);
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

{% block fos_user_content %}
{% include \"@FOSUser/Profile/edit_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Profile:edit.html.twig", "/Applications/MAMP/htdocs/Symfony/bdx-1702-coprosyndic/app/Resources/FOSUserBundle/views/Profile/edit.html.twig");
    }
}

<?php

/* FOSUserBundle:Group:show_content.html.twig */
class __TwigTemplate_1836612a0bba521a19216f834883a0ef7123a684e7589b853b2fa628dca27053 extends Twig_Template
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
        $__internal_db4d17d9a0b83ea788b92c6fe9a297edd488c70e48ecc34d3eba6e00d671c294 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_db4d17d9a0b83ea788b92c6fe9a297edd488c70e48ecc34d3eba6e00d671c294->enter($__internal_db4d17d9a0b83ea788b92c6fe9a297edd488c70e48ecc34d3eba6e00d671c294_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show_content.html.twig"));

        $__internal_80628cb4ce278f2378745ddcc60f6974c94037f09d7c5e4d1f93d5fcbbb80fe7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_80628cb4ce278f2378745ddcc60f6974c94037f09d7c5e4d1f93d5fcbbb80fe7->enter($__internal_80628cb4ce278f2378745ddcc60f6974c94037f09d7c5e4d1f93d5fcbbb80fe7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show_content.html.twig"));

        // line 2
        echo "
<div class=\"fos_user_group_show\">
    <p>";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("group.show.name", array(), "FOSUserBundle"), "html", null, true);
        echo ": ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["group"]) ? $context["group"] : $this->getContext($context, "group")), "getName", array(), "method"), "html", null, true);
        echo "</p>
</div>
";
        
        $__internal_db4d17d9a0b83ea788b92c6fe9a297edd488c70e48ecc34d3eba6e00d671c294->leave($__internal_db4d17d9a0b83ea788b92c6fe9a297edd488c70e48ecc34d3eba6e00d671c294_prof);

        
        $__internal_80628cb4ce278f2378745ddcc60f6974c94037f09d7c5e4d1f93d5fcbbb80fe7->leave($__internal_80628cb4ce278f2378745ddcc60f6974c94037f09d7c5e4d1f93d5fcbbb80fe7_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:show_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  29 => 4,  25 => 2,);
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

<div class=\"fos_user_group_show\">
    <p>{{ 'group.show.name'|trans }}: {{ group.getName() }}</p>
</div>
", "FOSUserBundle:Group:show_content.html.twig", "/Applications/MAMP/htdocs/Symfony/bdx-1702-coprosyndic/app/Resources/FOSUserBundle/views/Group/show_content.html.twig");
    }
}

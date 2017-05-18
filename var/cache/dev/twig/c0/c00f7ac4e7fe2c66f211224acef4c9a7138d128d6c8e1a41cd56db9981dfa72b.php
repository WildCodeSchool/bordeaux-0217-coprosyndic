<?php

/* TwigBundle:Exception:error.css.twig */
class __TwigTemplate_571621d5270244bf66e42e97c0e327e29631da880e0e2536b9b1ac421aeac333 extends Twig_Template
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
        $__internal_98e3d433ffb4bcf066a3d2a690c54a70e77dd080c09cca316c5cfab77fadc824 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_98e3d433ffb4bcf066a3d2a690c54a70e77dd080c09cca316c5cfab77fadc824->enter($__internal_98e3d433ffb4bcf066a3d2a690c54a70e77dd080c09cca316c5cfab77fadc824_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

        $__internal_e1d4a48f5cd563cf2603f31bcac69db73f538d6d8be64868de8b5758b3824eb4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e1d4a48f5cd563cf2603f31bcac69db73f538d6d8be64868de8b5758b3824eb4->enter($__internal_e1d4a48f5cd563cf2603f31bcac69db73f538d6d8be64868de8b5758b3824eb4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "css", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "css", null, true);
        echo "

*/
";
        
        $__internal_98e3d433ffb4bcf066a3d2a690c54a70e77dd080c09cca316c5cfab77fadc824->leave($__internal_98e3d433ffb4bcf066a3d2a690c54a70e77dd080c09cca316c5cfab77fadc824_prof);

        
        $__internal_e1d4a48f5cd563cf2603f31bcac69db73f538d6d8be64868de8b5758b3824eb4->leave($__internal_e1d4a48f5cd563cf2603f31bcac69db73f538d6d8be64868de8b5758b3824eb4_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.css.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("/*
{{ status_code }} {{ status_text }}

*/
", "TwigBundle:Exception:error.css.twig", "/Applications/MAMP/htdocs/Symfony/bdx-1702-coprosyndic/easycopro/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.css.twig");
    }
}

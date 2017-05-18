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
        $__internal_f3f3bf25fe4e62152c8dbecad96c820479a1aeae0654be6c0028179f0f414e8c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f3f3bf25fe4e62152c8dbecad96c820479a1aeae0654be6c0028179f0f414e8c->enter($__internal_f3f3bf25fe4e62152c8dbecad96c820479a1aeae0654be6c0028179f0f414e8c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

        $__internal_3bb32b448c52707ca38b4d03f2f3c9a7ee3cf7180eaedbda5b6ae72cd2dd91cb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3bb32b448c52707ca38b4d03f2f3c9a7ee3cf7180eaedbda5b6ae72cd2dd91cb->enter($__internal_3bb32b448c52707ca38b4d03f2f3c9a7ee3cf7180eaedbda5b6ae72cd2dd91cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

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
        
        $__internal_f3f3bf25fe4e62152c8dbecad96c820479a1aeae0654be6c0028179f0f414e8c->leave($__internal_f3f3bf25fe4e62152c8dbecad96c820479a1aeae0654be6c0028179f0f414e8c_prof);

        
        $__internal_3bb32b448c52707ca38b4d03f2f3c9a7ee3cf7180eaedbda5b6ae72cd2dd91cb->leave($__internal_3bb32b448c52707ca38b4d03f2f3c9a7ee3cf7180eaedbda5b6ae72cd2dd91cb_prof);

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
", "TwigBundle:Exception:error.css.twig", "/Applications/MAMP/htdocs/Symfony/bdx-1702-coprosyndic/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.css.twig");
    }
}

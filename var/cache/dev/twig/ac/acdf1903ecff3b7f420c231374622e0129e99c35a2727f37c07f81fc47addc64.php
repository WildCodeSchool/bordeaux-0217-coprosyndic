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
        $__internal_62652aefd20ce911830316366b48d09d1da2b77094de2228b6da46345b669b56 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_62652aefd20ce911830316366b48d09d1da2b77094de2228b6da46345b669b56->enter($__internal_62652aefd20ce911830316366b48d09d1da2b77094de2228b6da46345b669b56_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

        $__internal_a501098a9d8ec74db0f647a5519ee5e6cdab71497490c87b30e42806595f173d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a501098a9d8ec74db0f647a5519ee5e6cdab71497490c87b30e42806595f173d->enter($__internal_a501098a9d8ec74db0f647a5519ee5e6cdab71497490c87b30e42806595f173d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

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
        
        $__internal_62652aefd20ce911830316366b48d09d1da2b77094de2228b6da46345b669b56->leave($__internal_62652aefd20ce911830316366b48d09d1da2b77094de2228b6da46345b669b56_prof);

        
        $__internal_a501098a9d8ec74db0f647a5519ee5e6cdab71497490c87b30e42806595f173d->leave($__internal_a501098a9d8ec74db0f647a5519ee5e6cdab71497490c87b30e42806595f173d_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_62d79f2f6f40dfb640e1a86d7c2d25faf56f95bf07a8ff705b9a82d24099b3b3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_62d79f2f6f40dfb640e1a86d7c2d25faf56f95bf07a8ff705b9a82d24099b3b3->enter($__internal_62d79f2f6f40dfb640e1a86d7c2d25faf56f95bf07a8ff705b9a82d24099b3b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_fc770c25fc3466f5a30c7cce1ac610c545cd0259add2397a69cec7721f930b5d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fc770c25fc3466f5a30c7cce1ac610c545cd0259add2397a69cec7721f930b5d->enter($__internal_fc770c25fc3466f5a30c7cce1ac610c545cd0259add2397a69cec7721f930b5d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_fc770c25fc3466f5a30c7cce1ac610c545cd0259add2397a69cec7721f930b5d->leave($__internal_fc770c25fc3466f5a30c7cce1ac610c545cd0259add2397a69cec7721f930b5d_prof);

        
        $__internal_62d79f2f6f40dfb640e1a86d7c2d25faf56f95bf07a8ff705b9a82d24099b3b3->leave($__internal_62d79f2f6f40dfb640e1a86d7c2d25faf56f95bf07a8ff705b9a82d24099b3b3_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_8b60c17d02db53bd10c84de715bf68bd4b90859db723401d3b06b7ee52b04882 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8b60c17d02db53bd10c84de715bf68bd4b90859db723401d3b06b7ee52b04882->enter($__internal_8b60c17d02db53bd10c84de715bf68bd4b90859db723401d3b06b7ee52b04882_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_0e8426a28db41da2674f4310fe8fef14ffcc8f664510a38f01b6b46ca8f3cd34 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0e8426a28db41da2674f4310fe8fef14ffcc8f664510a38f01b6b46ca8f3cd34->enter($__internal_0e8426a28db41da2674f4310fe8fef14ffcc8f664510a38f01b6b46ca8f3cd34_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_0e8426a28db41da2674f4310fe8fef14ffcc8f664510a38f01b6b46ca8f3cd34->leave($__internal_0e8426a28db41da2674f4310fe8fef14ffcc8f664510a38f01b6b46ca8f3cd34_prof);

        
        $__internal_8b60c17d02db53bd10c84de715bf68bd4b90859db723401d3b06b7ee52b04882->leave($__internal_8b60c17d02db53bd10c84de715bf68bd4b90859db723401d3b06b7ee52b04882_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_044546addb7dade11dbacae93fb9f4b467ba9a1c3fb9698c3153242772e97a3b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_044546addb7dade11dbacae93fb9f4b467ba9a1c3fb9698c3153242772e97a3b->enter($__internal_044546addb7dade11dbacae93fb9f4b467ba9a1c3fb9698c3153242772e97a3b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_6e7700b43da744436c893b8ea4494a06a262a06540788f8f964a2ee746556e03 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6e7700b43da744436c893b8ea4494a06a262a06540788f8f964a2ee746556e03->enter($__internal_6e7700b43da744436c893b8ea4494a06a262a06540788f8f964a2ee746556e03_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_6e7700b43da744436c893b8ea4494a06a262a06540788f8f964a2ee746556e03->leave($__internal_6e7700b43da744436c893b8ea4494a06a262a06540788f8f964a2ee746556e03_prof);

        
        $__internal_044546addb7dade11dbacae93fb9f4b467ba9a1c3fb9698c3153242772e97a3b->leave($__internal_044546addb7dade11dbacae93fb9f4b467ba9a1c3fb9698c3153242772e97a3b_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_a8398ec81b559112d06f71936d7a4019018d98072fcaee4f155f6485458f71a2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a8398ec81b559112d06f71936d7a4019018d98072fcaee4f155f6485458f71a2->enter($__internal_a8398ec81b559112d06f71936d7a4019018d98072fcaee4f155f6485458f71a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_d436cbad064a03b894bedc85c0642b398b4397b1f51f0df9a363755474b91118 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d436cbad064a03b894bedc85c0642b398b4397b1f51f0df9a363755474b91118->enter($__internal_d436cbad064a03b894bedc85c0642b398b4397b1f51f0df9a363755474b91118_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_d436cbad064a03b894bedc85c0642b398b4397b1f51f0df9a363755474b91118->leave($__internal_d436cbad064a03b894bedc85c0642b398b4397b1f51f0df9a363755474b91118_prof);

        
        $__internal_a8398ec81b559112d06f71936d7a4019018d98072fcaee4f155f6485458f71a2->leave($__internal_a8398ec81b559112d06f71936d7a4019018d98072fcaee4f155f6485458f71a2_prof);

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
", "::base.html.twig", "/Applications/MAMP/htdocs/Symfony/bdx-1702-coprosyndic/app/Resources/views/base.html.twig");
    }
}

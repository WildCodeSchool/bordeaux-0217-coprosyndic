<?php

/* @Framework/Form/form_errors.html.php */
class __TwigTemplate_357a3709962281e74fff48f323d6a2a62b03fd37567cfddb832b7c576498d165 extends Twig_Template
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
        $__internal_91209b44cd7e576ac1f303a55b9e57671dcb781715783cc6dea458fc8b625c03 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_91209b44cd7e576ac1f303a55b9e57671dcb781715783cc6dea458fc8b625c03->enter($__internal_91209b44cd7e576ac1f303a55b9e57671dcb781715783cc6dea458fc8b625c03_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        $__internal_cc7764429fa4f0565792faffd3e1f895b2c0a0ec1c9d2e1954529577663c6c7d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cc7764429fa4f0565792faffd3e1f895b2c0a0ec1c9d2e1954529577663c6c7d->enter($__internal_cc7764429fa4f0565792faffd3e1f895b2c0a0ec1c9d2e1954529577663c6c7d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        // line 1
        echo "<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
";
        
        $__internal_91209b44cd7e576ac1f303a55b9e57671dcb781715783cc6dea458fc8b625c03->leave($__internal_91209b44cd7e576ac1f303a55b9e57671dcb781715783cc6dea458fc8b625c03_prof);

        
        $__internal_cc7764429fa4f0565792faffd3e1f895b2c0a0ec1c9d2e1954529577663c6c7d->leave($__internal_cc7764429fa4f0565792faffd3e1f895b2c0a0ec1c9d2e1954529577663c6c7d_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_errors.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
", "@Framework/Form/form_errors.html.php", "/Applications/MAMP/htdocs/Symfony/bdx-1702-coprosyndic/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_errors.html.php");
    }
}

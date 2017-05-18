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
        $__internal_52ab77c0d9ec7b979117280a7e043ed844043af2cfa32ee4d886807620b63ecb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_52ab77c0d9ec7b979117280a7e043ed844043af2cfa32ee4d886807620b63ecb->enter($__internal_52ab77c0d9ec7b979117280a7e043ed844043af2cfa32ee4d886807620b63ecb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        $__internal_697d970c2e0586ef9db05e2ff6d01a8a018d9d150187c6f87412f1b9ec521840 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_697d970c2e0586ef9db05e2ff6d01a8a018d9d150187c6f87412f1b9ec521840->enter($__internal_697d970c2e0586ef9db05e2ff6d01a8a018d9d150187c6f87412f1b9ec521840_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        // line 1
        echo "<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
";
        
        $__internal_52ab77c0d9ec7b979117280a7e043ed844043af2cfa32ee4d886807620b63ecb->leave($__internal_52ab77c0d9ec7b979117280a7e043ed844043af2cfa32ee4d886807620b63ecb_prof);

        
        $__internal_697d970c2e0586ef9db05e2ff6d01a8a018d9d150187c6f87412f1b9ec521840->leave($__internal_697d970c2e0586ef9db05e2ff6d01a8a018d9d150187c6f87412f1b9ec521840_prof);

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
", "@Framework/Form/form_errors.html.php", "/Applications/MAMP/htdocs/Symfony/bdx-1702-coprosyndic/easycopro/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_errors.html.php");
    }
}

<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* metaBlock/metaBlock.html.twig */
class __TwigTemplate_98df61174878e94ef31f8a9bffd694e81df369c4cb80952b821c0fecbe6d1213 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'metaBlock' => [$this, 'block_metaBlock'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        $this->displayBlock('metaBlock', $context, $blocks);
    }

    public function block_metaBlock($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 2
        echo "    <!DOCTYPE html>
    <html lang=\"fr\">
    <head>
        <meta charset=\"UTF-8\">
        <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
        <title>MonAdmin - Articles</title>
    </head>
";
    }

    public function getTemplateName()
    {
        return "metaBlock/metaBlock.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  45 => 2,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% block metaBlock %}
    <!DOCTYPE html>
    <html lang=\"fr\">
    <head>
        <meta charset=\"UTF-8\">
        <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
        <title>MonAdmin - Articles</title>
    </head>
{% endblock %}", "metaBlock/metaBlock.html.twig", "C:\\Users\\2217873\\Documents\\developpementPerso\\trombiCards\\templates\\metaBlock\\metaBlock.html.twig");
    }
}

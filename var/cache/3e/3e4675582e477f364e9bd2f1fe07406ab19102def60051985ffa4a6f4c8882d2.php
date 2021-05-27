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

/* headBlock/headBlock.html.twig */
class __TwigTemplate_6ad34ccab94ee798c05d0f6de000b7685af8fcddb21f6e67653990f28cbbf913 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'headBlock' => [$this, 'block_headBlock'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        $this->displayBlock('headBlock', $context, $blocks);
    }

    public function block_headBlock($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 2
        echo "<head>
    <meta charset=\"UTF-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
</head>
";
    }

    public function getTemplateName()
    {
        return "headBlock/headBlock.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  45 => 2,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% block headBlock %}
<head>
    <meta charset=\"UTF-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
</head>
{% endblock %}", "headBlock/headBlock.html.twig", "C:\\Users\\2217873\\Documents\\developpementPerso\\trombiCards\\templates\\headBlock\\headBlock.html.twig");
    }
}

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

/* headerView/headerView.html.twig */
class __TwigTemplate_2778ea326ca4d9805944ef01c379d253222c1aaa2902b24ee496acb97e02a6be extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'headerBlock' => [$this, 'block_headerBlock'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        $this->displayBlock('headerBlock', $context, $blocks);
    }

    public function block_headerBlock($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 2
        echo "        <div class=\"header__title header--color header-sizeTitle\">
            <h1>MonAdmin</h1>
        </div>
";
    }

    public function getTemplateName()
    {
        return "headerView/headerView.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  45 => 2,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% block headerBlock %}
        <div class=\"header__title header--color header-sizeTitle\">
            <h1>MonAdmin</h1>
        </div>
{% endblock %}", "headerView/headerView.html.twig", "C:\\Users\\2217873\\Documents\\developpementPerso\\trombiCards\\templates\\headerView\\headerView.html.twig");
    }
}

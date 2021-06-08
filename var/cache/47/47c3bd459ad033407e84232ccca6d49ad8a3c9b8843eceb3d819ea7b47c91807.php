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
            'css' => [$this, 'block_css'],
            'header' => [$this, 'block_header'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        $this->displayBlock('css', $context, $blocks);
        // line 4
        echo "
";
        // line 5
        $this->displayBlock('header', $context, $blocks);
    }

    // line 1
    public function block_css($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 2
        echo "<link rel=\"stylesheet\" type=\"text/css\" href=\"/Assets/css/headerStylus.css\"
";
    }

    // line 5
    public function block_header($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 6
        echo "        <header>
                <div class=\"header__title header--color header-sizeTitle\">
                        <h1>MonAdmin</h1>
                </div>
        </header>
";
    }

    public function getTemplateName()
    {
        return "headerView/headerView.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  61 => 6,  57 => 5,  52 => 2,  48 => 1,  44 => 5,  41 => 4,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% block css %}
<link rel=\"stylesheet\" type=\"text/css\" href=\"/Assets/css/headerStylus.css\"
{% endblock %}

{% block header %}
        <header>
                <div class=\"header__title header--color header-sizeTitle\">
                        <h1>MonAdmin</h1>
                </div>
        </header>
{% endblock %}", "headerView/headerView.html.twig", "C:\\Users\\2217873\\Documents\\developpementPerso\\trombiCards\\templates\\headerView\\headerView.html.twig");
    }
}

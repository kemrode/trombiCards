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
                <div class=\"headerBox\">
                        <div class=\"header header__title--size header__title--color header__title--sizeTitle\">
                                <h1>MonAdmin</h1>
                        </div>
                        ";
        // line 11
        if ((0 === twig_compare(($context["connected"] ?? null), true))) {
            // line 12
            echo "                                <div class=\"headerButton\">
                                        <div class=\"home\">
                                                <div class=\"homeImg homeImg__background--backgroundcolor\">
                                                        <a href=\"/?controller=adminMain&action=adminMainView\"><img src=\"/Ressources/images/icons/homeWhite.png\"></a>
                                                </div>
                                        </div>
                                        <div class=\"logout\">
                                                <div class=\"logoutImg logoutImg__background--backgroundcolor\">
                                                        <a href=\"/?controller=user&action=logout\"><img src=\"/Ressources/images/icons/logoutWhite.svg\"></a>
                                                </div>
                                        </div>
                                </div>
                        ";
        }
        // line 25
        echo "                        ";
        if ((0 === twig_compare(($context["back"] ?? null), true))) {
            // line 26
            echo "                                <div class=\"headerButton\">
                                        <div class=\"home\">
                                                <div class=\"homeImg homeImg__background--backgroundcolor\">
                                                        <a href=\"/?controller=listMembers&action=listMembersView\"><img src=\"/Ressources/images/icons/backArrowWhite.png\"></a>
                                                </div>
                                        </div>
                                        <div class=\"logout\">
                                                <div class=\"logoutImg logoutImg__background--backgroundcolor\">
                                                        <a href=\"/?controller=user&action=logout\"><img src=\"/Ressources/images/icons/logoutWhite.svg\"></a>
                                                </div>
                                        </div>
                                </div>
                        ";
        }
        // line 39
        echo "                </div>
        </header>
";
    }

    public function getTemplateName()
    {
        return "headerView/headerView.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  103 => 39,  88 => 26,  85 => 25,  70 => 12,  68 => 11,  61 => 6,  57 => 5,  52 => 2,  48 => 1,  44 => 5,  41 => 4,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% block css %}
<link rel=\"stylesheet\" type=\"text/css\" href=\"/Assets/css/headerStylus.css\"
{% endblock %}

{% block header %}
        <header>
                <div class=\"headerBox\">
                        <div class=\"header header__title--size header__title--color header__title--sizeTitle\">
                                <h1>MonAdmin</h1>
                        </div>
                        {% if connected == true %}
                                <div class=\"headerButton\">
                                        <div class=\"home\">
                                                <div class=\"homeImg homeImg__background--backgroundcolor\">
                                                        <a href=\"/?controller=adminMain&action=adminMainView\"><img src=\"/Ressources/images/icons/homeWhite.png\"></a>
                                                </div>
                                        </div>
                                        <div class=\"logout\">
                                                <div class=\"logoutImg logoutImg__background--backgroundcolor\">
                                                        <a href=\"/?controller=user&action=logout\"><img src=\"/Ressources/images/icons/logoutWhite.svg\"></a>
                                                </div>
                                        </div>
                                </div>
                        {% endif %}
                        {% if back == true %}
                                <div class=\"headerButton\">
                                        <div class=\"home\">
                                                <div class=\"homeImg homeImg__background--backgroundcolor\">
                                                        <a href=\"/?controller=listMembers&action=listMembersView\"><img src=\"/Ressources/images/icons/backArrowWhite.png\"></a>
                                                </div>
                                        </div>
                                        <div class=\"logout\">
                                                <div class=\"logoutImg logoutImg__background--backgroundcolor\">
                                                        <a href=\"/?controller=user&action=logout\"><img src=\"/Ressources/images/icons/logoutWhite.svg\"></a>
                                                </div>
                                        </div>
                                </div>
                        {% endif %}
                </div>
        </header>
{% endblock %}", "headerView/headerView.html.twig", "C:\\Users\\2217873\\Documents\\developpementPerso\\trombiCards\\templates\\headerView\\headerView.html.twig");
    }
}

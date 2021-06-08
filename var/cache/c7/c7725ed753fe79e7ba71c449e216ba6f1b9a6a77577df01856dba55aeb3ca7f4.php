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

/* base/baseView.html.twig */
class __TwigTemplate_abfa5bb9f8a4a83f1f9424c07f4bdce9cd1b6db4b3219a4791903693075b2a62 extends Template
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
            'title' => [$this, 'block_title'],
            'connectionView' => [$this, 'block_connectionView'],
            'registerView' => [$this, 'block_registerView'],
            'adminMainView' => [$this, 'block_adminMainView'],
            'listMembersView' => [$this, 'block_listMembersView'],
            'updateMemberView' => [$this, 'block_updateMemberView'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"fr\">
<head>
    <meta charset=\"UTF-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    ";
        // line 7
        $this->displayBlock('css', $context, $blocks);
        // line 8
        echo "    ";
        $this->displayBlock('title', $context, $blocks);
        // line 9
        echo "</head>
<body>
<div class=\"primaryContainer primaryContainer--backgroundImage\">
    <div class=\"primaryContainer__header\">
        <header>
            ";
        // line 14
        $this->loadTemplate("headerView/headerView.html.twig", "base/baseView.html.twig", 14)->display($context);
        // line 15
        echo "        </header>
    </div>
    ";
        // line 17
        $this->displayBlock('connectionView', $context, $blocks);
        // line 18
        echo "    ";
        $this->displayBlock('registerView', $context, $blocks);
        // line 19
        echo "    ";
        $this->displayBlock('adminMainView', $context, $blocks);
        // line 20
        echo "    ";
        $this->displayBlock('listMembersView', $context, $blocks);
        // line 21
        echo "    ";
        $this->displayBlock('updateMemberView', $context, $blocks);
        // line 22
        echo "</div>
</body>
</html>";
    }

    // line 7
    public function block_css($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 8
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 17
    public function block_connectionView($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 18
    public function block_registerView($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 19
    public function block_adminMainView($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 20
    public function block_listMembersView($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 21
    public function block_updateMemberView($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    public function getTemplateName()
    {
        return "base/baseView.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  126 => 21,  120 => 20,  114 => 19,  108 => 18,  102 => 17,  96 => 8,  90 => 7,  84 => 22,  81 => 21,  78 => 20,  75 => 19,  72 => 18,  70 => 17,  66 => 15,  64 => 14,  57 => 9,  54 => 8,  52 => 7,  44 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html lang=\"fr\">
<head>
    <meta charset=\"UTF-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    {% block css %}{% endblock %}
    {% block title %}{% endblock %}
</head>
<body>
<div class=\"primaryContainer primaryContainer--backgroundImage\">
    <div class=\"primaryContainer__header\">
        <header>
            {% include \"headerView/headerView.html.twig\" %}
        </header>
    </div>
    {% block connectionView %}{% endblock %}
    {% block registerView %}{% endblock %}
    {% block adminMainView %}{% endblock %}
    {% block listMembersView %}{% endblock %}
    {% block updateMemberView %}{% endblock %}
</div>
</body>
</html>", "base/baseView.html.twig", "C:\\Users\\2217873\\Documents\\developpementPerso\\trombiCards\\templates\\base\\baseView.html.twig");
    }
}

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

/* baseView.html.twig */
class __TwigTemplate_ccb9fb7a2a768e4a05b7e1d843362fc8d33988a1fbff19509e91f4eca75bdea6 extends Template
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
            'notifAdmin' => [$this, 'block_notifAdmin'],
            'newNotif' => [$this, 'block_newNotif'],
            'updateNotif' => [$this, 'block_updateNotif'],
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
    <meta http-equiv=\"Content-type\" content=\"text/html;charset=utf-8\">
    ";
        // line 8
        $this->displayBlock('css', $context, $blocks);
        // line 9
        echo "    ";
        $this->displayBlock('title', $context, $blocks);
        // line 10
        echo "</head>
<body>
<div class=\"primaryContainer primaryContainer--backgroundImage\">
    <div class=\"primaryContainer__header\">
        <header>
            ";
        // line 15
        $this->loadTemplate("headerView/headerView.html.twig", "baseView.html.twig", 15)->display($context);
        // line 16
        echo "        </header>
    </div>
    ";
        // line 18
        $this->displayBlock('connectionView', $context, $blocks);
        // line 19
        echo "    ";
        $this->displayBlock('registerView', $context, $blocks);
        // line 20
        echo "    ";
        $this->displayBlock('adminMainView', $context, $blocks);
        // line 21
        echo "    ";
        $this->displayBlock('listMembersView', $context, $blocks);
        // line 22
        echo "    ";
        $this->displayBlock('updateMemberView', $context, $blocks);
        // line 23
        echo "    ";
        $this->displayBlock('notifAdmin', $context, $blocks);
        // line 24
        echo "    ";
        $this->displayBlock('newNotif', $context, $blocks);
        // line 25
        echo "    ";
        $this->displayBlock('updateNotif', $context, $blocks);
        // line 26
        echo "</div>
</body>
</html>";
    }

    // line 8
    public function block_css($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 9
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 18
    public function block_connectionView($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 19
    public function block_registerView($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 20
    public function block_adminMainView($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 21
    public function block_listMembersView($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 22
    public function block_updateMemberView($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 23
    public function block_notifAdmin($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 24
    public function block_newNotif($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 25
    public function block_updateNotif($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    public function getTemplateName()
    {
        return "baseView.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  157 => 25,  151 => 24,  145 => 23,  139 => 22,  133 => 21,  127 => 20,  121 => 19,  115 => 18,  109 => 9,  103 => 8,  97 => 26,  94 => 25,  91 => 24,  88 => 23,  85 => 22,  82 => 21,  79 => 20,  76 => 19,  74 => 18,  70 => 16,  68 => 15,  61 => 10,  58 => 9,  56 => 8,  47 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html lang=\"fr\">
<head>
    <meta charset=\"UTF-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <meta http-equiv=\"Content-type\" content=\"text/html;charset=utf-8\">
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
    {% block notifAdmin %}{% endblock %}
    {% block newNotif %}{% endblock %}
    {% block updateNotif %}{% endblock %}
</div>
</body>
</html>", "baseView.html.twig", "C:\\Users\\2217873\\Documents\\developpementPerso\\trombiCards\\templates\\baseView.html.twig");
    }
}

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

/* notificationView\updateNotificationView.html.twig */
class __TwigTemplate_ea82f5c0fd0507f7dcb5222ff1d24e6e9c4748e00a0d94c37265fc4d1643de36 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'css' => [$this, 'block_css'],
            'title' => [$this, 'block_title'],
            'updateNotif' => [$this, 'block_updateNotif'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "baseView.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("baseView.html.twig", "notificationView\\updateNotificationView.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_css($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 3
        echo "    <link rel=\"stylesheet\" type=\"text/css\" href=\"/Assets/css/updateNotificationStylus.css\">
";
    }

    // line 5
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 6
        echo "    <title>MonAdmin - nouvelle notification</title>
";
    }

    // line 8
    public function block_updateNotif($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 9
        echo "    <div class=\"notifContainer\">
        <div class=\"pageTitleBox\">
            <div class=\"labelTitle\">
                <h2>Modifier votre notification</h2>
            </div>
        </div>
        <form method=\"post\" action=\"/?controller=listNews&action=updateNotifView&param=";
        // line 15
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["notification"] ?? null), "notifId", [], "any", false, false, false, 15), "html", null, true);
        echo "\" name=\"newNotifForm\">
            <div class=\"newNotifBox newNotifBox__backgroundcolor--backgroundcolor newNotifBox__zindex--index\">
                <div class=\"notifTitle notifTitle__zindex--index\">
                    <input type=\"text\" name=\"notifTitle\" value=\"";
        // line 18
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["notification"] ?? null), "notifTitle", [], "any", false, false, false, 18), "html", null, true);
        echo "\">
                </div>
                <div class=\"notifText notifText__zindex--index\">
                    <textarea name=\"notifText\" >";
        // line 21
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["notification"] ?? null), "notifTxt", [], "any", false, false, false, 21), "html", null, true);
        echo "</textarea>
                </div>
            </div>
            <div class=\"btnBox\">
                <div class=\"addNewNotifBox addButtonNotifView\">
                    <button type=\"submit\" name=\"updateBtn\">modifier</button>
                </div>
            </div>
        </form>
    </div>
";
    }

    public function getTemplateName()
    {
        return "notificationView\\updateNotificationView.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  90 => 21,  84 => 18,  78 => 15,  70 => 9,  66 => 8,  61 => 6,  57 => 5,  52 => 3,  48 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'baseView.html.twig' %}
{% block css %}
    <link rel=\"stylesheet\" type=\"text/css\" href=\"/Assets/css/updateNotificationStylus.css\">
{% endblock %}
{% block title %}
    <title>MonAdmin - nouvelle notification</title>
{% endblock %}
{% block updateNotif %}
    <div class=\"notifContainer\">
        <div class=\"pageTitleBox\">
            <div class=\"labelTitle\">
                <h2>Modifier votre notification</h2>
            </div>
        </div>
        <form method=\"post\" action=\"/?controller=listNews&action=updateNotifView&param={{ notification.notifId }}\" name=\"newNotifForm\">
            <div class=\"newNotifBox newNotifBox__backgroundcolor--backgroundcolor newNotifBox__zindex--index\">
                <div class=\"notifTitle notifTitle__zindex--index\">
                    <input type=\"text\" name=\"notifTitle\" value=\"{{ notification.notifTitle }}\">
                </div>
                <div class=\"notifText notifText__zindex--index\">
                    <textarea name=\"notifText\" >{{ notification.notifTxt }}</textarea>
                </div>
            </div>
            <div class=\"btnBox\">
                <div class=\"addNewNotifBox addButtonNotifView\">
                    <button type=\"submit\" name=\"updateBtn\">modifier</button>
                </div>
            </div>
        </form>
    </div>
{% endblock %}", "notificationView\\updateNotificationView.html.twig", "C:\\Users\\2217873\\Documents\\developpementPerso\\trombiCards\\templates\\notificationView\\updateNotificationView.html.twig");
    }
}

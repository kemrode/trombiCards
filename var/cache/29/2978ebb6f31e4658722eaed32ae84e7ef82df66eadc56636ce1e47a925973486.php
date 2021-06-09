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

/* notificationView\notificationView.html.twig */
class __TwigTemplate_e9fa5ccbf3736cef119bb0113e3c30ffaca84717e1bc49509db77bee9c482649 extends Template
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
            'newNotif' => [$this, 'block_newNotif'],
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
        $this->parent = $this->loadTemplate("baseView.html.twig", "notificationView\\notificationView.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_css($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        echo "    <link rel=\"stylesheet\" type=\"text/css\" href=\"/Assets/css/notificationStylus.css\">
";
    }

    // line 6
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 7
        echo "    <title>MonAdmin - nouvelle notification</title>
";
    }

    // line 9
    public function block_newNotif($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 10
        echo "    <div class=\"notifContainer\">
        <div class=\"pageTitleBox\">
            <div class=\"labelTitle\">
                <h2>Nouvelle notification</h2>
            </div>
        </div>
            <form method=\"post\" action=\"/?controller=notification&action=addNewNotification\" name=\"newNotifForm\">
                <div class=\"newNotifBox newNotifBox__backgroundcolor--backgroundcolor newNotifBox__zindex--index\">
                    <div class=\"notifTitle notifTitle__zindex--index\">
                        <input type=\"text\" name=\"notifTitle\" placeholder=\"titre de la notification...\">
                    </div>
                    <div class=\"notifText notifText__zindex--index\">
                        <textarea name=\"notifText\" placeholder=\"Que souhaitez-vous raconter ?\"></textarea>
                    </div>
                </div>
                <div class=\"btnBox\">
                    <div class=\"addNewNotifBox addButtonNotifView\">
                        <button type=\"submit\" name=\"addBtn\">ajouter</button>
                    </div>
                </div>
            </form>
    </div>
";
    }

    public function getTemplateName()
    {
        return "notificationView\\notificationView.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  70 => 10,  66 => 9,  61 => 7,  57 => 6,  52 => 4,  48 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'baseView.html.twig' %}

{% block css %}
    <link rel=\"stylesheet\" type=\"text/css\" href=\"/Assets/css/notificationStylus.css\">
{% endblock %}
{% block title %}
    <title>MonAdmin - nouvelle notification</title>
{% endblock %}
{% block newNotif %}
    <div class=\"notifContainer\">
        <div class=\"pageTitleBox\">
            <div class=\"labelTitle\">
                <h2>Nouvelle notification</h2>
            </div>
        </div>
            <form method=\"post\" action=\"/?controller=notification&action=addNewNotification\" name=\"newNotifForm\">
                <div class=\"newNotifBox newNotifBox__backgroundcolor--backgroundcolor newNotifBox__zindex--index\">
                    <div class=\"notifTitle notifTitle__zindex--index\">
                        <input type=\"text\" name=\"notifTitle\" placeholder=\"titre de la notification...\">
                    </div>
                    <div class=\"notifText notifText__zindex--index\">
                        <textarea name=\"notifText\" placeholder=\"Que souhaitez-vous raconter ?\"></textarea>
                    </div>
                </div>
                <div class=\"btnBox\">
                    <div class=\"addNewNotifBox addButtonNotifView\">
                        <button type=\"submit\" name=\"addBtn\">ajouter</button>
                    </div>
                </div>
            </form>
    </div>
{% endblock %}", "notificationView\\notificationView.html.twig", "C:\\Users\\2217873\\Documents\\developpementPerso\\trombiCards\\templates\\notificationView\\notificationView.html.twig");
    }
}

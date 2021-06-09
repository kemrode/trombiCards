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

/* listNewsView\listNewsView.html.twig */
class __TwigTemplate_d02faf8bf1706ce543fbe694be11677da049263e200b71e46a68546d96b1519e extends Template
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
            'notifAdmin' => [$this, 'block_notifAdmin'],
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
        $this->parent = $this->loadTemplate("baseView.html.twig", "listNewsView\\listNewsView.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_css($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 3
        echo "    <link rel=\"stylesheet\" type=\"text/css\" href=\"/Assets/css/listNewsStylus.css\">
";
    }

    // line 5
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 6
        echo "    <title>MonAdmin - mes notifications</title>
";
    }

    // line 8
    public function block_notifAdmin($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 9
        echo "    <div class=\"notifContainer\">
        <div class=\"selectOptionsContainer\">
            <div class=\"addNewNotifBox\">
                <button type=\"submit\" name=\"addButton\"><a href=\"/?controller=notification&action=notificationView\">Nouvelle Notification</a></button> <!-- look at the button -->
            </div>
            <div class=\"updateLastNotifBox\">
                <button type=\"submit\" name=\"updateButton\" formaction=\"/?controller=user&action=connectionView\">Modifier</br>la dernière notification</br>entrée</button>

            </div>
        </div>
        <div class=\"listNotifBox listNotifBox__backgroundcolor--backgroundcolor\">
            ";
        // line 20
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["notifications"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["notif"]) {
            // line 21
            echo "                    <div class=\"notifBox notifBox__backgroundcolor--backgroundcolor\">
                        <div class=\"notifTitle\">
                            <label class=\"textTitle\">";
            // line 23
            echo twig_escape_filter($this->env, (($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = $context["notif"]) && is_array($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4) || $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 instanceof ArrayAccess ? ($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4["notifTitle"] ?? null) : null), "html", null, true);
            echo "</label>
                        </div>
                        <div class=\"timeBox\">
                            <div class=\"labelTimeNotif\">
                                <label class=\"labelTime\">créée le: </label>
                            </div>
                            <div class=\"notifTime\">
                                <label class=\"txtTime\">";
            // line 30
            echo twig_escape_filter($this->env, (($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 = $context["notif"]) && is_array($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144) || $__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 instanceof ArrayAccess ? ($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144["notifDate"] ?? null) : null), "html", null, true);
            echo "</label>
                            </div>
                        </div>
                        <div class=\"btnBox\">
                            <div class=\"updateBtn\">
                                <button type=\"submit\" name=\"updateButton\" formaction=\"/?controller=notification&action=notificationView\">MODIFIER</button>
                            </div>
                            <div class=\"deleteBtn\">
                                <button type=\"submit\" name=\"deleteButton\" formaction=\"\">SUPPRIMER</button>
                            </div>
                        </div>
                    </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['notif'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 43
        echo "        </div>
    </div>
";
    }

    public function getTemplateName()
    {
        return "listNewsView\\listNewsView.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  120 => 43,  101 => 30,  91 => 23,  87 => 21,  83 => 20,  70 => 9,  66 => 8,  61 => 6,  57 => 5,  52 => 3,  48 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"baseView.html.twig\" %}
{% block css %}
    <link rel=\"stylesheet\" type=\"text/css\" href=\"/Assets/css/listNewsStylus.css\">
{% endblock %}
{% block title %}
    <title>MonAdmin - mes notifications</title>
{% endblock %}
{% block notifAdmin %}
    <div class=\"notifContainer\">
        <div class=\"selectOptionsContainer\">
            <div class=\"addNewNotifBox\">
                <button type=\"submit\" name=\"addButton\"><a href=\"/?controller=notification&action=notificationView\">Nouvelle Notification</a></button> <!-- look at the button -->
            </div>
            <div class=\"updateLastNotifBox\">
                <button type=\"submit\" name=\"updateButton\" formaction=\"/?controller=user&action=connectionView\">Modifier</br>la dernière notification</br>entrée</button>

            </div>
        </div>
        <div class=\"listNotifBox listNotifBox__backgroundcolor--backgroundcolor\">
            {% for notif in notifications %}
                    <div class=\"notifBox notifBox__backgroundcolor--backgroundcolor\">
                        <div class=\"notifTitle\">
                            <label class=\"textTitle\">{{ notif[\"notifTitle\"] }}</label>
                        </div>
                        <div class=\"timeBox\">
                            <div class=\"labelTimeNotif\">
                                <label class=\"labelTime\">créée le: </label>
                            </div>
                            <div class=\"notifTime\">
                                <label class=\"txtTime\">{{ notif[\"notifDate\"] }}</label>
                            </div>
                        </div>
                        <div class=\"btnBox\">
                            <div class=\"updateBtn\">
                                <button type=\"submit\" name=\"updateButton\" formaction=\"/?controller=notification&action=notificationView\">MODIFIER</button>
                            </div>
                            <div class=\"deleteBtn\">
                                <button type=\"submit\" name=\"deleteButton\" formaction=\"\">SUPPRIMER</button>
                            </div>
                        </div>
                    </div>
            {% endfor %}
        </div>
    </div>
{% endblock %}", "listNewsView\\listNewsView.html.twig", "C:\\Users\\2217873\\Documents\\developpementPerso\\trombiCards\\templates\\listNewsView\\listNewsView.html.twig");
    }
}

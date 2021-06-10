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
        <form class=\"formBox\" name=\"formBox\" method=\"post\">
            <div class=\"selectOptionsContainer\">
                <div class=\"addNewNotifBox\">
                    <button type=\"submit\" name=\"addButton\" formaction=\"/?controller=notification&action=notificationView\">Nouvelle Notification</button>
                </div>
            </div>
            <div class=\"listNotifBox listNotifBox__backgroundcolor--backgroundcolor\">
                ";
        // line 17
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["notifications"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["notif"]) {
            // line 18
            echo "                    <div class=\"notifBox notifBox__backgroundcolor--backgroundcolor\">
                        <div class=\"notifBack\">
                            <div class=\"notifTitle\">
                                <label class=\"textTitle\">";
            // line 21
            echo twig_escape_filter($this->env, (($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = $context["notif"]) && is_array($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4) || $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 instanceof ArrayAccess ? ($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4["notifTitle"] ?? null) : null), "html", null, true);
            echo "</label>
                            </div>
                            <div class=\"timeBox\">
                                <div class=\"labelTimeNotif\">
                                    <label class=\"labelTime\">créée le: </label>
                                </div>
                                <div class=\"notifTime\">
                                    <label class=\"txtTime\">";
            // line 28
            echo twig_escape_filter($this->env, (($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 = $context["notif"]) && is_array($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144) || $__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 instanceof ArrayAccess ? ($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144["notifDate"] ?? null) : null), "html", null, true);
            echo "</label>
                                </div>
                            </div>
                        </div>
                        <div class=\"btnBox\">
                            <div class=\"updateBtn\">
                                <button type=\"submit\" name=\"updateButton\" formaction=\"/?controller=listNews&action=updateNotifView&param=";
            // line 34
            echo twig_escape_filter($this->env, (($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b = $context["notif"]) && is_array($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b) || $__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b instanceof ArrayAccess ? ($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b["notifId"] ?? null) : null), "html", null, true);
            echo "\">MODIFIER</button>
                            </div>
                            <div class=\"deleteBtn\">
                                <button type=\"submit\" name=\"deleteButton\" formaction=\"/?controller=listNews&action=deleteNotif&param=";
            // line 37
            echo twig_escape_filter($this->env, (($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 = $context["notif"]) && is_array($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002) || $__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 instanceof ArrayAccess ? ($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002["notifId"] ?? null) : null), "html", null, true);
            echo "\">SUPPRIMER</button>
                            </div>
                        </div>
                    </div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['notif'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 42
        echo "            </div>
        </form>
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
        return array (  125 => 42,  114 => 37,  108 => 34,  99 => 28,  89 => 21,  84 => 18,  80 => 17,  70 => 9,  66 => 8,  61 => 6,  57 => 5,  52 => 3,  48 => 2,  37 => 1,);
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
        <form class=\"formBox\" name=\"formBox\" method=\"post\">
            <div class=\"selectOptionsContainer\">
                <div class=\"addNewNotifBox\">
                    <button type=\"submit\" name=\"addButton\" formaction=\"/?controller=notification&action=notificationView\">Nouvelle Notification</button>
                </div>
            </div>
            <div class=\"listNotifBox listNotifBox__backgroundcolor--backgroundcolor\">
                {% for notif in notifications %}
                    <div class=\"notifBox notifBox__backgroundcolor--backgroundcolor\">
                        <div class=\"notifBack\">
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
                        </div>
                        <div class=\"btnBox\">
                            <div class=\"updateBtn\">
                                <button type=\"submit\" name=\"updateButton\" formaction=\"/?controller=listNews&action=updateNotifView&param={{ notif['notifId'] }}\">MODIFIER</button>
                            </div>
                            <div class=\"deleteBtn\">
                                <button type=\"submit\" name=\"deleteButton\" formaction=\"/?controller=listNews&action=deleteNotif&param={{ notif['notifId'] }}\">SUPPRIMER</button>
                            </div>
                        </div>
                    </div>
                {% endfor %}
            </div>
        </form>
    </div>
{% endblock %}", "listNewsView\\listNewsView.html.twig", "C:\\Users\\2217873\\Documents\\developpementPerso\\trombiCards\\templates\\listNewsView\\listNewsView.html.twig");
    }
}

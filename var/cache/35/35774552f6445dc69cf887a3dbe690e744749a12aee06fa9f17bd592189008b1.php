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

/* listMembersView\listMembersView.html.twig */
class __TwigTemplate_26f64b04dd15cac49808de1aaf3b977690528e875072925474dc9e5079a0a356 extends Template
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
            'listMembersView' => [$this, 'block_listMembersView'],
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
        $this->parent = $this->loadTemplate("baseView.html.twig", "listMembersView\\listMembersView.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_css($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 3
        echo "    <link rel=\"stylesheet\" type=\"text/css\" href=\"/Assets/css/listMemberStylus.css\">
";
    }

    // line 5
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 6
        echo "    <title>MonAdmin - membres</title>
";
    }

    // line 8
    public function block_listMembersView($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 9
        echo "    <div class=\"mainListContainer\">
            <div class=\"listBoxes\">
                ";
        // line 11
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["membersList"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["member"]) {
            // line 12
            echo "                    <div class=\"userBox userBox__background--backgroundColor\">
                        <form class=\"formContainer\" method=\"post\">
                            <div class=\"formBox\">
                                <div class=\"nameBox nameBox__background--backgroundColor\">
                                    <p>";
            // line 16
            echo twig_escape_filter($this->env, (($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = $context["member"]) && is_array($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4) || $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 instanceof ArrayAccess ? ($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4["userName"] ?? null) : null), "html", null, true);
            echo "</p>
                                </div>
                                <div class=\"firstnameBox firstnameBox__background--backgroundColor\">
                                    <p>";
            // line 19
            echo twig_escape_filter($this->env, (($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 = $context["member"]) && is_array($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144) || $__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 instanceof ArrayAccess ? ($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144["userFirstname"] ?? null) : null), "html", null, true);
            echo "</p>
                                </div>
                                <div class=\"nicknameBox nicknameBox__background--backgroundColor\">
                                    <p>";
            // line 22
            echo twig_escape_filter($this->env, (($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b = $context["member"]) && is_array($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b) || $__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b instanceof ArrayAccess ? ($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b["userNickname"] ?? null) : null), "html", null, true);
            echo "</p>
                                </div>
                                <div class=\"mailBox mailBox__background--backgroundColor\">
                                    <p>";
            // line 25
            echo twig_escape_filter($this->env, (($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 = $context["member"]) && is_array($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002) || $__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 instanceof ArrayAccess ? ($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002["userMail"] ?? null) : null), "html", null, true);
            echo "</p>
                                </div>
                                <div class=\"buttonBox\">
                                    <div class=\"updateBtn updateBtn__button--backgroundColor updateBtn__button--borderradius updateBtn__button--size\">
                                        <button type=\"submit\" name=\"updateBtn\" formaction=\"/?controller=updateView&action=updateMemberView&param=";
            // line 29
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["member"], "userId", [], "any", false, false, false, 29), "html", null, true);
            echo "\">Modifier</button>
                                    </div>
                                    <div class=\"deleteBtn deleteBtn__button--backgroundColor deleteBtn__button--borderradius deleteBtn__button--size\">
                                        <button type=\"submit\" name=\"deleteBtn\" formaction=\"/?controller=listMembers&action=deleteUser&param=";
            // line 32
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["member"], "userId", [], "any", false, false, false, 32), "html", null, true);
            echo "\">Supprimer</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['member'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 39
        echo "            </div>
            </div>
";
    }

    public function getTemplateName()
    {
        return "listMembersView\\listMembersView.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  128 => 39,  115 => 32,  109 => 29,  102 => 25,  96 => 22,  90 => 19,  84 => 16,  78 => 12,  74 => 11,  70 => 9,  66 => 8,  61 => 6,  57 => 5,  52 => 3,  48 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"baseView.html.twig\" %}
{% block css %}
    <link rel=\"stylesheet\" type=\"text/css\" href=\"/Assets/css/listMemberStylus.css\">
{% endblock %}
{% block title %}
    <title>MonAdmin - membres</title>
{% endblock %}
{% block listMembersView %}
    <div class=\"mainListContainer\">
            <div class=\"listBoxes\">
                {% for member in membersList %}
                    <div class=\"userBox userBox__background--backgroundColor\">
                        <form class=\"formContainer\" method=\"post\">
                            <div class=\"formBox\">
                                <div class=\"nameBox nameBox__background--backgroundColor\">
                                    <p>{{ member['userName'] }}</p>
                                </div>
                                <div class=\"firstnameBox firstnameBox__background--backgroundColor\">
                                    <p>{{ member['userFirstname'] }}</p>
                                </div>
                                <div class=\"nicknameBox nicknameBox__background--backgroundColor\">
                                    <p>{{ member['userNickname'] }}</p>
                                </div>
                                <div class=\"mailBox mailBox__background--backgroundColor\">
                                    <p>{{ member['userMail'] }}</p>
                                </div>
                                <div class=\"buttonBox\">
                                    <div class=\"updateBtn updateBtn__button--backgroundColor updateBtn__button--borderradius updateBtn__button--size\">
                                        <button type=\"submit\" name=\"updateBtn\" formaction=\"/?controller=updateView&action=updateMemberView&param={{ member.userId }}\">Modifier</button>
                                    </div>
                                    <div class=\"deleteBtn deleteBtn__button--backgroundColor deleteBtn__button--borderradius deleteBtn__button--size\">
                                        <button type=\"submit\" name=\"deleteBtn\" formaction=\"/?controller=listMembers&action=deleteUser&param={{ member.userId }}\">Supprimer</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                {% endfor %}
            </div>
            </div>
{% endblock %}", "listMembersView\\listMembersView.html.twig", "C:\\Users\\2217873\\Documents\\developpementPerso\\trombiCards\\templates\\listMembersView\\listMembersView.html.twig");
    }
}

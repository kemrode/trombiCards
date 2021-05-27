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

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        $this->loadTemplate("metaBlock/metaBlock.html.twig", "listMembersView\\listMembersView.html.twig", 1)->display($context);
        // line 2
        echo "<head>
    <link rel=\"stylesheet\" type=\"text/css\" href=\"/Assets/css/listMemberStylus.css\">
    <title>MonAdmin - membres</title>
</head>
<body>
    <div class=\"primaryContainer primaryContainer--backgroundImage\">
        <div class=\"primaryContainer__header\">
            <?php require 'headerView.php';?>
            ";
        // line 10
        $this->loadTemplate("headerView/headerView.html.twig", "listMembersView\\listMembersView.html.twig", 10)->display($context);
        // line 11
        echo "        </div>
        <div class=\"mainListContainer\">
            <div class=\"listBoxes\">
                ";
        // line 14
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["membersList"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["member"]) {
            // line 15
            echo "                    <div class=\"userBox userBox__background--backgroundColor\">
                        <div class=\"nameBox nameBox__background--backgroundColor\">
                            <p>";
            // line 17
            echo twig_escape_filter($this->env, (($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = $context["member"]) && is_array($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4) || $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 instanceof ArrayAccess ? ($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4["userName"] ?? null) : null), "html", null, true);
            echo "</p>
                        </div>
                        <div class=\"firstnameBox firstnameBox__background--backgroundColor\">
                            <p>";
            // line 20
            echo twig_escape_filter($this->env, (($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 = $context["member"]) && is_array($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144) || $__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 instanceof ArrayAccess ? ($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144["userFirstname"] ?? null) : null), "html", null, true);
            echo "</p>
                        </div>
                        <div class=\"nicknameBox nicknameBox__background--backgroundColor\">
                            <p>";
            // line 23
            echo twig_escape_filter($this->env, (($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b = $context["member"]) && is_array($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b) || $__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b instanceof ArrayAccess ? ($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b["userNickname"] ?? null) : null), "html", null, true);
            echo "</p>
                        </div>
                        <div class=\"mailBox mailBox__background--backgroundColor\">
                            <p>";
            // line 26
            echo twig_escape_filter($this->env, (($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 = $context["member"]) && is_array($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002) || $__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 instanceof ArrayAccess ? ($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002["userMail"] ?? null) : null), "html", null, true);
            echo "</p>
                        </div>
                        <div class=\"buttonBox\">
                            <div class=\"updateBtn updateBtn__button--backgroundColor updateBtn__button--borderradius updateBtn__button--size\">
                                <button type=\"submit\" name=\"updateBtn\">Modifier</button>
                            </div>
                            <div class=\"deleteBtn deleteBtn__button--backgroundColor deleteBtn__button--borderradius deleteBtn__button--size\">
                                <button type=\"submit\" name=\"deleteBtn\">Supprimer</button>
                            </div>
                        </div>
                    </div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['member'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 38
        echo "            </div>
        </div>
    </div>
<script></script>
</body>";
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
        return array (  100 => 38,  82 => 26,  76 => 23,  70 => 20,  64 => 17,  60 => 15,  56 => 14,  51 => 11,  49 => 10,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% include \"metaBlock/metaBlock.html.twig\" %}
<head>
    <link rel=\"stylesheet\" type=\"text/css\" href=\"/Assets/css/listMemberStylus.css\">
    <title>MonAdmin - membres</title>
</head>
<body>
    <div class=\"primaryContainer primaryContainer--backgroundImage\">
        <div class=\"primaryContainer__header\">
            <?php require 'headerView.php';?>
            {% include \"headerView/headerView.html.twig\" %}
        </div>
        <div class=\"mainListContainer\">
            <div class=\"listBoxes\">
                {% for member in membersList %}
                    <div class=\"userBox userBox__background--backgroundColor\">
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
                                <button type=\"submit\" name=\"updateBtn\">Modifier</button>
                            </div>
                            <div class=\"deleteBtn deleteBtn__button--backgroundColor deleteBtn__button--borderradius deleteBtn__button--size\">
                                <button type=\"submit\" name=\"deleteBtn\">Supprimer</button>
                            </div>
                        </div>
                    </div>
                {% endfor %}
            </div>
        </div>
    </div>
<script></script>
</body>", "listMembersView\\listMembersView.html.twig", "C:\\Users\\2217873\\Documents\\developpementPerso\\trombiCards\\templates\\listMembersView\\listMembersView.html.twig");
    }
}

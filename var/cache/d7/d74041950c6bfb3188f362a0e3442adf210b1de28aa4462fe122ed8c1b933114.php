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

/* updateViews/updateMemberView.html.twig */
class __TwigTemplate_29831b4152348ad2a92699c2ad1de2c928a610fafc0ebabb7a910bf1cdd93eb2 extends Template
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
        $this->loadTemplate("metaBlock/metaBlock.html.twig", "updateViews/updateMemberView.html.twig", 1)->display($context);
        // line 2
        echo "<head>
    <link rel=\"stylesheet\" type=\"text/css\" href=\"/Assets/css/updateMemberStylus.css\">
    <title>MonAdmin - modifier ";
        // line 4
        echo twig_escape_filter($this->env, (((($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = ($context["membre"] ?? null)) && is_array($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4) || $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 instanceof ArrayAccess ? ($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4["userName"] ?? null) : null) + " ") + (($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 = ($context["membre"] ?? null)) && is_array($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144) || $__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 instanceof ArrayAccess ? ($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144["userFirstname"] ?? null) : null)), "html", null, true);
        echo "</title>
</head>
<body>
<div class=\"primaryContainer primaryContainer--backgroundImage\">
    <div class=\"primaryContainer__header\">
        <?php require 'headerView.php';?>
        ";
        // line 10
        $this->loadTemplate("headerView/headerView.html.twig", "updateViews/updateMemberView.html.twig", 10)->display($context);
        // line 11
        echo "    </div>
    <div class=\"memberContainer\">
        <form class=\"formBox\" method=\"post\" action=\"\">
            <div class=\"blockMember\">
                <div class=\"blockName\">
                    <div class=\"nameBox\">
                        <p>";
        // line 17
        echo twig_escape_filter($this->env, (($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b = ($context["member"] ?? null)) && is_array($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b) || $__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b instanceof ArrayAccess ? ($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b["userName"] ?? null) : null), "html", null, true);
        echo "</p>
                    </div>
                    <div class=\"firstnameBox\">
                        <p>";
        // line 20
        echo twig_escape_filter($this->env, (($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 = ($context["member"] ?? null)) && is_array($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002) || $__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 instanceof ArrayAccess ? ($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002["userFirstname"] ?? null) : null), "html", null, true);
        echo "</p>
                    </div>
                </div>
                <div class=\"blockNickMail\">
                    <div class=\"nicknameBox\">
                        <p>";
        // line 25
        echo twig_escape_filter($this->env, (($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4 = ($context["member"] ?? null)) && is_array($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4) || $__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4 instanceof ArrayAccess ? ($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4["userNickname"] ?? null) : null), "html", null, true);
        echo "</p>
                    </div>
                    <div class=\"mailBox\">
                        <p>";
        // line 28
        echo twig_escape_filter($this->env, (($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666 = ($context["member"] ?? null)) && is_array($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666) || $__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666 instanceof ArrayAccess ? ($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666["userMail"] ?? null) : null), "html", null, true);
        echo "</p>
                    </div>
                </div>
                <div class=\"blockJob\">
                    <div class=\"jobBox\">
                        <div class=\"jobAdminBox\">
                            <h3>Passer Admin ?</h3>
                        </div>
                        <div class=\"switchBox\">
                            <label class=\"switch\">
                                <input type=\"hidden\" class=\"switchAdmin\" name=\"switchAdmin\" value=\"0\">
                                <input type=\"checkbox\" class=\"switchAdmin\" name=\"switchAdmin\" value=\"1\">
                                <span class=\"slider round\"></span>
                            </label>
                        </div>
                    </div>
                    <div class=\"blockButton\">
                        <div class=\"buttonBox\">
                            <button type=\"submit\" name=\"updateBtn\">MODIFIER PROFIL</button>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>

</body>";
    }

    public function getTemplateName()
    {
        return "updateViews/updateMemberView.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  82 => 28,  76 => 25,  68 => 20,  62 => 17,  54 => 11,  52 => 10,  43 => 4,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% include \"metaBlock/metaBlock.html.twig\" %}
<head>
    <link rel=\"stylesheet\" type=\"text/css\" href=\"/Assets/css/updateMemberStylus.css\">
    <title>MonAdmin - modifier {{ membre['userName']+' '+membre['userFirstname'] }}</title>
</head>
<body>
<div class=\"primaryContainer primaryContainer--backgroundImage\">
    <div class=\"primaryContainer__header\">
        <?php require 'headerView.php';?>
        {% include \"headerView/headerView.html.twig\" %}
    </div>
    <div class=\"memberContainer\">
        <form class=\"formBox\" method=\"post\" action=\"\">
            <div class=\"blockMember\">
                <div class=\"blockName\">
                    <div class=\"nameBox\">
                        <p>{{ member['userName'] }}</p>
                    </div>
                    <div class=\"firstnameBox\">
                        <p>{{ member['userFirstname'] }}</p>
                    </div>
                </div>
                <div class=\"blockNickMail\">
                    <div class=\"nicknameBox\">
                        <p>{{ member['userNickname'] }}</p>
                    </div>
                    <div class=\"mailBox\">
                        <p>{{ member['userMail'] }}</p>
                    </div>
                </div>
                <div class=\"blockJob\">
                    <div class=\"jobBox\">
                        <div class=\"jobAdminBox\">
                            <h3>Passer Admin ?</h3>
                        </div>
                        <div class=\"switchBox\">
                            <label class=\"switch\">
                                <input type=\"hidden\" class=\"switchAdmin\" name=\"switchAdmin\" value=\"0\">
                                <input type=\"checkbox\" class=\"switchAdmin\" name=\"switchAdmin\" value=\"1\">
                                <span class=\"slider round\"></span>
                            </label>
                        </div>
                    </div>
                    <div class=\"blockButton\">
                        <div class=\"buttonBox\">
                            <button type=\"submit\" name=\"updateBtn\">MODIFIER PROFIL</button>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>

</body>", "updateViews/updateMemberView.html.twig", "C:\\Users\\2217873\\Documents\\developpementPerso\\trombiCards\\templates\\updateViews\\updateMemberView.html.twig");
    }
}

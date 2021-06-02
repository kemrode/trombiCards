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
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, ($context["member"] ?? null), "userName", [], "any", false, false, false, 4) + " ") + twig_get_attribute($this->env, $this->source, ($context["member"] ?? null), "userFirstname", [], "any", false, false, false, 4)), "html", null, true);
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
        <form class=\"formBox\" method=\"post\" action=\"/?controller=updateView&action=updateSelectedMember&param=";
        // line 13
        echo "userId";
        echo "\">
            <div class=\"blockMember\">
                <div class=\"blockName\">
                    <div class=\"nameBox\">
                        <input type=\"text\" name=\"selectedName\" value=\"";
        // line 17
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["member"] ?? null), "userName", [], "any", false, false, false, 17), "html", null, true);
        echo "\">
                        <!--<p>";
        // line 18
        echo "</p>-->
                    </div>
                    <div class=\"firstnameBox\">
                        <input type=\"text\" name=\"selectedName\" value=\"";
        // line 21
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["member"] ?? null), "userFirstname", [], "any", false, false, false, 21), "html", null, true);
        echo "\">
                        <!--<p>";
        // line 22
        echo "</p>-->
                    </div>
                </div>
                <div class=\"blockNickMail\">
                    <div class=\"nicknameBox\">
                        <input type=\"text\" name=\"selectedName\" value=\"";
        // line 27
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["member"] ?? null), "userNickname", [], "any", false, false, false, 27), "html", null, true);
        echo "\">
                        <!--<p>";
        // line 28
        echo "</p>-->
                    </div>
                    <div class=\"mailBox\">
                        <input type=\"text\" name=\"selectedName\" value=\"";
        // line 31
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["member"] ?? null), "userMail", [], "any", false, false, false, 31), "html", null, true);
        echo "\">
                        <!--<p>";
        // line 32
        echo "</p>-->
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
        return array (  98 => 32,  94 => 31,  89 => 28,  85 => 27,  78 => 22,  74 => 21,  69 => 18,  65 => 17,  58 => 13,  54 => 11,  52 => 10,  43 => 4,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% include \"metaBlock/metaBlock.html.twig\" %}
<head>
    <link rel=\"stylesheet\" type=\"text/css\" href=\"/Assets/css/updateMemberStylus.css\">
    <title>MonAdmin - modifier {{ member.userName+' '+member.userFirstname }}</title>
</head>
<body>
<div class=\"primaryContainer primaryContainer--backgroundImage\">
    <div class=\"primaryContainer__header\">
        <?php require 'headerView.php';?>
        {% include \"headerView/headerView.html.twig\" %}
    </div>
    <div class=\"memberContainer\">
        <form class=\"formBox\" method=\"post\" action=\"/?controller=updateView&action=updateSelectedMember&param={{ 'userId' }}\">
            <div class=\"blockMember\">
                <div class=\"blockName\">
                    <div class=\"nameBox\">
                        <input type=\"text\" name=\"selectedName\" value=\"{{ member.userName}}\">
                        <!--<p>{# item['userName'] #}</p>-->
                    </div>
                    <div class=\"firstnameBox\">
                        <input type=\"text\" name=\"selectedName\" value=\"{{ member.userFirstname }}\">
                        <!--<p>{# member['userId'] #}</p>-->
                    </div>
                </div>
                <div class=\"blockNickMail\">
                    <div class=\"nicknameBox\">
                        <input type=\"text\" name=\"selectedName\" value=\"{{ member.userNickname }}\">
                        <!--<p>{# member['userNickname'] #}</p>-->
                    </div>
                    <div class=\"mailBox\">
                        <input type=\"text\" name=\"selectedName\" value=\"{{ member.userMail }}\">
                        <!--<p>{# member['userMail'] #}</p>-->
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

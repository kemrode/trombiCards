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

        $this->blocks = [
            'css' => [$this, 'block_css'],
            'title' => [$this, 'block_title'],
            'updateMemberView' => [$this, 'block_updateMemberView'],
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
        $this->parent = $this->loadTemplate("baseView.html.twig", "updateViews/updateMemberView.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_css($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        echo "    <link rel=\"stylesheet\" type=\"text/css\" href=\"/Assets/css/updateMemberStylus.css\">
";
    }

    // line 6
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 7
        echo "    <title>MonAdmin - modifier</title>
";
    }

    // line 9
    public function block_updateMemberView($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 10
        echo "    <div class=\"memberContainer\">
        <form class=\"formBox formBox__background--backgroundColor formBox__background--border\" method=\"post\" action=\"/?controller=updateView&action=updateSelectedMember&param=";
        // line 11
        echo twig_escape_filter($this->env, (($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = ($context["member"] ?? null)) && is_array($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4) || $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 instanceof ArrayAccess ? ($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4["userId"] ?? null) : null), "html", null, true);
        echo "\">
            <div class=\"blockMember\">
                <div class=\"block\">
                    <div class=\"blockBox nameBox\">
                        <input type=\"text\" name=\"selectedName\" value=\"";
        // line 15
        echo twig_escape_filter($this->env, (($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 = ($context["member"] ?? null)) && is_array($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144) || $__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 instanceof ArrayAccess ? ($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144["userName"] ?? null) : null), "html", null, true);
        echo "\">
                    </div>
                    <div class=\"blockBox firstnameBox\">
                        <input type=\"text\" name=\"selectedFirstname\" value=\"";
        // line 18
        echo twig_escape_filter($this->env, (($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b = ($context["member"] ?? null)) && is_array($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b) || $__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b instanceof ArrayAccess ? ($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b["userFirstname"] ?? null) : null), "html", null, true);
        echo "\">
                    </div>
                </div>
                <div class=\"block\">
                    <div class=\"blockBox nicknameBox\">
                        <input type=\"text\" name=\"selectedNickname\" value=\"";
        // line 23
        echo twig_escape_filter($this->env, (($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 = ($context["member"] ?? null)) && is_array($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002) || $__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 instanceof ArrayAccess ? ($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002["userNickname"] ?? null) : null), "html", null, true);
        echo "\">
                    </div>
                    <div class=\"blockBox mailBox\">
                        <input type=\"text\" name=\"selectedMail\" value=\"";
        // line 26
        echo twig_escape_filter($this->env, (($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4 = ($context["member"] ?? null)) && is_array($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4) || $__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4 instanceof ArrayAccess ? ($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4["userMail"] ?? null) : null), "html", null, true);
        echo "\">
                    </div>
                </div>
                <div class=\"block blockJob\">
                    <div class=\"jobBox jobBox__background--backgroundColor jobBox__background--border\">
                        <div class=\"jobAdminBox\">
                            <h3>Passer Admin ?</h3>
                        </div>
                        <div class=\"switchBox\">
                            <label class=\"switch\">
                                <input type=\"hidden\" class=\"switchAdmin\" name=\"switchAdmin\" value=\"1\">
                                <input type=\"checkbox\" class=\"switchAdmin\" name=\"switchAdmin\" value=\"0\">
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
";
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
        return array (  100 => 26,  94 => 23,  86 => 18,  80 => 15,  73 => 11,  70 => 10,  66 => 9,  61 => 7,  57 => 6,  52 => 4,  48 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"baseView.html.twig\" %}

{% block css %}
    <link rel=\"stylesheet\" type=\"text/css\" href=\"/Assets/css/updateMemberStylus.css\">
{% endblock %}
{% block title %}
    <title>MonAdmin - modifier</title>
{% endblock %}
{% block updateMemberView %}
    <div class=\"memberContainer\">
        <form class=\"formBox formBox__background--backgroundColor formBox__background--border\" method=\"post\" action=\"/?controller=updateView&action=updateSelectedMember&param={{ member['userId'] }}\">
            <div class=\"blockMember\">
                <div class=\"block\">
                    <div class=\"blockBox nameBox\">
                        <input type=\"text\" name=\"selectedName\" value=\"{{ member['userName']}}\">
                    </div>
                    <div class=\"blockBox firstnameBox\">
                        <input type=\"text\" name=\"selectedFirstname\" value=\"{{ member['userFirstname'] }}\">
                    </div>
                </div>
                <div class=\"block\">
                    <div class=\"blockBox nicknameBox\">
                        <input type=\"text\" name=\"selectedNickname\" value=\"{{ member['userNickname'] }}\">
                    </div>
                    <div class=\"blockBox mailBox\">
                        <input type=\"text\" name=\"selectedMail\" value=\"{{ member['userMail'] }}\">
                    </div>
                </div>
                <div class=\"block blockJob\">
                    <div class=\"jobBox jobBox__background--backgroundColor jobBox__background--border\">
                        <div class=\"jobAdminBox\">
                            <h3>Passer Admin ?</h3>
                        </div>
                        <div class=\"switchBox\">
                            <label class=\"switch\">
                                <input type=\"hidden\" class=\"switchAdmin\" name=\"switchAdmin\" value=\"1\">
                                <input type=\"checkbox\" class=\"switchAdmin\" name=\"switchAdmin\" value=\"0\">
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
{% endblock %}", "updateViews/updateMemberView.html.twig", "C:\\Users\\2217873\\Documents\\developpementPerso\\trombiCards\\templates\\updateViews\\updateMemberView.html.twig");
    }
}

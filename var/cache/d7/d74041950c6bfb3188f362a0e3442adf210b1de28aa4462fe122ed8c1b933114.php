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
        echo "    <title>MonAdmin - modifier ";
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, ($context["member"] ?? null), "userName", [], "any", false, false, false, 7) + " ") + twig_get_attribute($this->env, $this->source, ($context["member"] ?? null), "userFirstname", [], "any", false, false, false, 7)), "html", null, true);
        echo "</title>
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
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["member"] ?? null), "userId", [], "any", false, false, false, 11), "html", null, true);
        echo "\">
            <div class=\"blockMember\">
                <div class=\"block\">
                    <div class=\"blockBox nameBox\">
                        <input type=\"text\" name=\"selectedName\" value=\"";
        // line 15
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["member"] ?? null), "userName", [], "any", false, false, false, 15), "html", null, true);
        echo "\">
                    </div>
                    <div class=\"blockBox firstnameBox\">
                        <input type=\"text\" name=\"selectedFirstname\" value=\"";
        // line 18
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["member"] ?? null), "userFirstname", [], "any", false, false, false, 18), "html", null, true);
        echo "\">
                    </div>
                </div>
                <div class=\"block\">
                    <div class=\"blockBox nicknameBox\">
                        <input type=\"text\" name=\"selectedNickname\" value=\"";
        // line 23
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["member"] ?? null), "userNickname", [], "any", false, false, false, 23), "html", null, true);
        echo "\">
                    </div>
                    <div class=\"blockBox mailBox\">
                        <input type=\"text\" name=\"selectedMail\" value=\"";
        // line 26
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["member"] ?? null), "userMail", [], "any", false, false, false, 26), "html", null, true);
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
        return array (  102 => 26,  96 => 23,  88 => 18,  82 => 15,  75 => 11,  72 => 10,  68 => 9,  61 => 7,  57 => 6,  52 => 4,  48 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"baseView.html.twig\" %}

{% block css %}
    <link rel=\"stylesheet\" type=\"text/css\" href=\"/Assets/css/updateMemberStylus.css\">
{% endblock %}
{% block title %}
    <title>MonAdmin - modifier {{ member.userName+' '+member.userFirstname }}</title>
{% endblock %}
{% block updateMemberView %}
    <div class=\"memberContainer\">
        <form class=\"formBox formBox__background--backgroundColor formBox__background--border\" method=\"post\" action=\"/?controller=updateView&action=updateSelectedMember&param={{ member.userId }}\">
            <div class=\"blockMember\">
                <div class=\"block\">
                    <div class=\"blockBox nameBox\">
                        <input type=\"text\" name=\"selectedName\" value=\"{{ member.userName}}\">
                    </div>
                    <div class=\"blockBox firstnameBox\">
                        <input type=\"text\" name=\"selectedFirstname\" value=\"{{ member.userFirstname }}\">
                    </div>
                </div>
                <div class=\"block\">
                    <div class=\"blockBox nicknameBox\">
                        <input type=\"text\" name=\"selectedNickname\" value=\"{{ member.userNickname }}\">
                    </div>
                    <div class=\"blockBox mailBox\">
                        <input type=\"text\" name=\"selectedMail\" value=\"{{ member.userMail }}\">
                    </div>
                </div>
                <div class=\"block blockJob\">
                    <div class=\"jobBox jobBox__background--backgroundColor jobBox__background--border\">
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
{% endblock %}", "updateViews/updateMemberView.html.twig", "C:\\Users\\2217873\\Documents\\developpementPerso\\trombiCards\\templates\\updateViews\\updateMemberView.html.twig");
    }
}

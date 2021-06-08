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

/* registerView/registerView.html.twig */
class __TwigTemplate_2d41c865bd300213db0824b0f1e169f3a48472ac3d624c3cbd36656ecaa7d95b extends Template
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
            'registerView' => [$this, 'block_registerView'],
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
        $this->parent = $this->loadTemplate("baseView.html.twig", "registerView/registerView.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_css($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        echo "    <link rel=\"stylesheet\" type=\"text/css\" href=\"/Assets/css/registerStylus.css\">
";
    }

    // line 6
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 7
        echo "    <title>MonAdmin - S'enregistrer</title>
";
    }

    // line 9
    public function block_registerView($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 10
        echo "    <div class=\"registerContainer\">
            <div class=\"formContainer\">
                <form class=\"formBox\" method=\"post\" action=\"/?controller=register&action=registerNewUser\">
                    <div class=\"itemsContainer\">
                        <div class=\"itemBox\">
                            <input type=\"text\" name=\"userName\" placeholder=\"Votre Nom\" required>
                        </div>
                        <div class=\"itemBox\">
                            <input type=\"text\" name=\"userFirstName\" placeholder=\"Votre prénom\" required>
                        </div>
                        <div class=\"itemBox\">
                            <input type=\"text\" name=\"userNickName\" placeholder=\"Votre pseudonyme\" required>
                        </div>
                        <div class=\"itemBox\">
                            <input type=\"email\" name=\"userMail\" placeholder=\"Votre adresse e-mail\" required>
                        </div>
                        <div class=\"itemBox\">
                            <input type=\"password\" name=\"userPwd\" placeholder=\"Votre mot de passe\" required>
                        </div>
                        <div class=\"itemBox\">
                            <input type=\"password\" name=\"verifUserPwd\" placeholder=\"Votre mot de passe (pour vérification)\" required>
                        </div>
                    </div>
                    <div class=\"okBtn\">
                        <button type=\"submit\" name=\"okButton\">Ok, s'enregistrer</button>
                    </div>
                </form>
            </div>
        </div>
";
    }

    public function getTemplateName()
    {
        return "registerView/registerView.html.twig";
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
        return new Source("{% extends \"baseView.html.twig\" %}

{% block css %}
    <link rel=\"stylesheet\" type=\"text/css\" href=\"/Assets/css/registerStylus.css\">
{% endblock %}
{% block title %}
    <title>MonAdmin - S'enregistrer</title>
{% endblock %}
{% block registerView %}
    <div class=\"registerContainer\">
            <div class=\"formContainer\">
                <form class=\"formBox\" method=\"post\" action=\"/?controller=register&action=registerNewUser\">
                    <div class=\"itemsContainer\">
                        <div class=\"itemBox\">
                            <input type=\"text\" name=\"userName\" placeholder=\"Votre Nom\" required>
                        </div>
                        <div class=\"itemBox\">
                            <input type=\"text\" name=\"userFirstName\" placeholder=\"Votre prénom\" required>
                        </div>
                        <div class=\"itemBox\">
                            <input type=\"text\" name=\"userNickName\" placeholder=\"Votre pseudonyme\" required>
                        </div>
                        <div class=\"itemBox\">
                            <input type=\"email\" name=\"userMail\" placeholder=\"Votre adresse e-mail\" required>
                        </div>
                        <div class=\"itemBox\">
                            <input type=\"password\" name=\"userPwd\" placeholder=\"Votre mot de passe\" required>
                        </div>
                        <div class=\"itemBox\">
                            <input type=\"password\" name=\"verifUserPwd\" placeholder=\"Votre mot de passe (pour vérification)\" required>
                        </div>
                    </div>
                    <div class=\"okBtn\">
                        <button type=\"submit\" name=\"okButton\">Ok, s'enregistrer</button>
                    </div>
                </form>
            </div>
        </div>
{% endblock %}", "registerView/registerView.html.twig", "C:\\Users\\2217873\\Documents\\developpementPerso\\trombiCards\\templates\\registerView\\registerView.html.twig");
    }
}

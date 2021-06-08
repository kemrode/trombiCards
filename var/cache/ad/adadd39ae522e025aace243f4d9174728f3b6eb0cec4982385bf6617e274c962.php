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

/* connectionView\connectionView.html.twig */
class __TwigTemplate_326aac214e9d4f78f85bee0afc7a2feb92516d4ee4a84316a0c9503544d97e19 extends Template
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
            'connectionView' => [$this, 'block_connectionView'],
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
        $this->parent = $this->loadTemplate("baseView.html.twig", "connectionView\\connectionView.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_css($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        echo "    <link rel=\"stylesheet\" type=\"text/css\" href=\"/Assets/css/connectionStylus.css\">
";
    }

    // line 6
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 7
        echo "    <title>MonAdmin - Se connecter</title>
";
    }

    // line 9
    public function block_connectionView($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 10
        echo "    <div class=\"primaryContainer__connectionBox\">
            <div class=\"connectionBox__itemsBox connectionBox--backgroundColor connectionBox--size\">
                <form method=\"post\" action=\"/?controller=user&action=log\" name=\"connectionBoxForm\">
                    <div class=\"itemsBox__itemsField itemsBox__itemsField--backgroundColor\">
                        <div class=\"itemsField itemsField__nameField itemsBox__nameField--input\">
                            <input type=\"email\" name=\"mailToPost\" placeholder=\"Votre e-mail\" class=\"field nameField\" required>
                        </div>
                        <div class=\"itemsField itemsField__passwdField itemsBox__passwdField--input\">
                            <input type=\"password\" name=\"pwdToPost\" placeholder=\"Mot de Passe...\" class=\"field passwdField\" required>
                        </div>
                        <div class=\"itemsField itemsField__okButton itemsField__okButton--input\">
                            <button type=\"submit\" name=\"okButton\" class=\"field okButton okButton--color\">OK</button>
                            <!--<input type=\"submit\" name=\"okButton\" value=\"OK\" class=\"field okButton okButton--color\">-->
                        </div>
                    </div>
                    <div class=\"registerLinkBox\">
                        <a class=\"registerLink registerLink__text--color registerLink__text--font\" href=\"/?controller=user&action=registerView\">s'enregistrer</a>
                    </div>
                </form>
            </div>
        </div>
";
    }

    public function getTemplateName()
    {
        return "connectionView\\connectionView.html.twig";
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
    <link rel=\"stylesheet\" type=\"text/css\" href=\"/Assets/css/connectionStylus.css\">
{% endblock %}
{% block title %}
    <title>MonAdmin - Se connecter</title>
{% endblock %}
{% block connectionView %}
    <div class=\"primaryContainer__connectionBox\">
            <div class=\"connectionBox__itemsBox connectionBox--backgroundColor connectionBox--size\">
                <form method=\"post\" action=\"/?controller=user&action=log\" name=\"connectionBoxForm\">
                    <div class=\"itemsBox__itemsField itemsBox__itemsField--backgroundColor\">
                        <div class=\"itemsField itemsField__nameField itemsBox__nameField--input\">
                            <input type=\"email\" name=\"mailToPost\" placeholder=\"Votre e-mail\" class=\"field nameField\" required>
                        </div>
                        <div class=\"itemsField itemsField__passwdField itemsBox__passwdField--input\">
                            <input type=\"password\" name=\"pwdToPost\" placeholder=\"Mot de Passe...\" class=\"field passwdField\" required>
                        </div>
                        <div class=\"itemsField itemsField__okButton itemsField__okButton--input\">
                            <button type=\"submit\" name=\"okButton\" class=\"field okButton okButton--color\">OK</button>
                            <!--<input type=\"submit\" name=\"okButton\" value=\"OK\" class=\"field okButton okButton--color\">-->
                        </div>
                    </div>
                    <div class=\"registerLinkBox\">
                        <a class=\"registerLink registerLink__text--color registerLink__text--font\" href=\"/?controller=user&action=registerView\">s'enregistrer</a>
                    </div>
                </form>
            </div>
        </div>
{% endblock %}", "connectionView\\connectionView.html.twig", "C:\\Users\\2217873\\Documents\\developpementPerso\\trombiCards\\templates\\connectionView\\connectionView.html.twig");
    }
}

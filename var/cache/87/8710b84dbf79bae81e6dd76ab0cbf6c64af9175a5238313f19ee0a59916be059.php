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

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<head>
    ";
        // line 2
        $this->loadTemplate("metaBlock/metaBlock.html.twig", "registerView/registerView.html.twig", 2)->display($context);
        // line 3
        echo "    <title>MonAdmin - S'enregistrer</title>
    <link rel=\"stylesheet\" type=\"text/css\" href=\"/Assets/css/registerStylus.css\">
</head>
<body>
<div class=\"primaryContainer primaryContainer--backgroundImage\">
    <div class=\"primaryContainer__header\">
        <header>
            ";
        // line 10
        $this->loadTemplate("headerView/headerView.html.twig", "registerView/registerView.html.twig", 10)->display($context);
        // line 11
        echo "        </header>
    </div>
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
</div>
</body>";
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
        return array (  53 => 11,  51 => 10,  42 => 3,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<head>
    {% include \"metaBlock/metaBlock.html.twig\" %}
    <title>MonAdmin - S'enregistrer</title>
    <link rel=\"stylesheet\" type=\"text/css\" href=\"/Assets/css/registerStylus.css\">
</head>
<body>
<div class=\"primaryContainer primaryContainer--backgroundImage\">
    <div class=\"primaryContainer__header\">
        <header>
            {% include \"headerView/headerView.html.twig\" %}
        </header>
    </div>
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
</div>
</body>", "registerView/registerView.html.twig", "C:\\Users\\2217873\\Documents\\developpementPerso\\trombiCards\\templates\\registerView\\registerView.html.twig");
    }
}

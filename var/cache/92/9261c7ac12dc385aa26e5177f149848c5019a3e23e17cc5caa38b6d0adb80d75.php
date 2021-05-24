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

/* connectionView.html.twig */
class __TwigTemplate_42c39240771fe274ecdce078f56e83f2ebf89f4d509bb5c1fcd757fe35ed28b7 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'metaBlock' => [$this, 'block_metaBlock'],
            'headerBlock' => [$this, 'block_headerBlock'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<head>
    ";
        // line 2
        $this->displayBlock('metaBlock', $context, $blocks);
        // line 3
        echo "    <link rel=\"stylesheet\" type=\"text/css\" href=\"/Assets/css/connectionStylus.css\">
</head>
<body>
<div class=\"primaryContainer primaryContainer--backgroundImage\">
    <div class=\"primaryContainer__header\">
        <header>
            ";
        // line 9
        $this->displayBlock('headerBlock', $context, $blocks);
        // line 10
        echo "        </header>
    </div>
    <!-- definition about the connection items -->
    <div class=\"primaryContainer__connectionBox\">
        <div class=\"connectionBox__itemsBox connectionBox--backgroundColor connectionBox--size\">
            <form method=\"post\" action=\"\" name=\"connectionBoxForm\">
                <div class=\"itemsBox__itemsField itemsBox__itemsField--backgroundColor\">
                    <div class=\"itemsField itemsField__nameField itemsBox__nameField--input\">
                        <input type=\"text\" name=\"nameField\" placeholder=\"Nom...\" class=\"field nameField\">
                    </div>
                    <div class=\"itemsField itemsField__passwdField itemsBox__passwdField--input\">
                        <input type=\"password\" name=\"pwd\" placeholder=\"Mot de Passe...\" class=\"field passwdField\">
                    </div>
                </div>
                <div class=\"itemsField itemsField__okButton itemsField__okButton--input\">
                    <input type=\"submit\" name=\"okButton\" value=\"OK\" class=\"field okButton okButton--color\">
                </div>
            </form>
        </div>
    </div>
</div>
</body>
</html>
";
    }

    // line 2
    public function block_metaBlock($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 9
    public function block_headerBlock($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    public function getTemplateName()
    {
        return "connectionView.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  87 => 9,  81 => 2,  54 => 10,  52 => 9,  44 => 3,  42 => 2,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<head>
    {%  block metaBlock %}{% endblock %}
    <link rel=\"stylesheet\" type=\"text/css\" href=\"/Assets/css/connectionStylus.css\">
</head>
<body>
<div class=\"primaryContainer primaryContainer--backgroundImage\">
    <div class=\"primaryContainer__header\">
        <header>
            {% block headerBlock %}{% endblock %}
        </header>
    </div>
    <!-- definition about the connection items -->
    <div class=\"primaryContainer__connectionBox\">
        <div class=\"connectionBox__itemsBox connectionBox--backgroundColor connectionBox--size\">
            <form method=\"post\" action=\"\" name=\"connectionBoxForm\">
                <div class=\"itemsBox__itemsField itemsBox__itemsField--backgroundColor\">
                    <div class=\"itemsField itemsField__nameField itemsBox__nameField--input\">
                        <input type=\"text\" name=\"nameField\" placeholder=\"Nom...\" class=\"field nameField\">
                    </div>
                    <div class=\"itemsField itemsField__passwdField itemsBox__passwdField--input\">
                        <input type=\"password\" name=\"pwd\" placeholder=\"Mot de Passe...\" class=\"field passwdField\">
                    </div>
                </div>
                <div class=\"itemsField itemsField__okButton itemsField__okButton--input\">
                    <input type=\"submit\" name=\"okButton\" value=\"OK\" class=\"field okButton okButton--color\">
                </div>
            </form>
        </div>
    </div>
</div>
</body>
</html>
", "connectionView.html.twig", "C:\\Users\\2217873\\Documents\\developpementPerso\\trombiCards\\templates\\connectionView.html.twig");
    }
}

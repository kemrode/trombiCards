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
        echo "<header>
    ";
        // line 2
        $this->displayBlock('metaBlock', $context, $blocks);
        // line 3
        echo "    <link rel=\"stylesheet\" type=\"text/css\" href=\"/Assets/css/connectionStylus.css\">
</header>
<body>
<div class=\"primaryContainer primaryContainer--backgroundImage\">
    <div class=\"primaryContainer__header\">
        ";
        // line 8
        $this->displayBlock('headerBlock', $context, $blocks);
        // line 9
        echo "    </div>
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

    // line 8
    public function block_headerBlock($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    public function getTemplateName()
    {
        return "connectionView\\connectionView.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  85 => 8,  79 => 2,  53 => 9,  51 => 8,  44 => 3,  42 => 2,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<header>
    {%  block metaBlock %}{% endblock %}
    <link rel=\"stylesheet\" type=\"text/css\" href=\"/Assets/css/connectionStylus.css\">
</header>
<body>
<div class=\"primaryContainer primaryContainer--backgroundImage\">
    <div class=\"primaryContainer__header\">
        {%  block headerBlock %}{% endblock %}
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
", "connectionView\\connectionView.html.twig", "C:\\Users\\2217873\\Documents\\developpementPerso\\trombiCards\\templates\\connectionView\\connectionView.html.twig");
    }
}

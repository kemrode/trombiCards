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

/* adminMainView/adminMainView.html.twig */
class __TwigTemplate_48d7a6a92d76893d5f58cd1d34237e2b578830671d112334c0afc1cbc79f96cf extends Template
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
        $this->loadTemplate("metaBlock/metaBlock.html.twig", "adminMainView/adminMainView.html.twig", 1)->display($context);
        // line 2
        echo "<head>
    <title>MonAdmin - accueil</title>
    <link rel=\"stylesheet\" type=\"text/css\" href=\"/Assets/css/adminMainStylus.css\">
</head>
<body>
    <div class=\"primaryContainer primaryContainer--backgroundImage\">
        <div class=\"primaryContainer__header\">
            <?php require 'headerView.php';?>
            ";
        // line 10
        $this->loadTemplate("headerView/headerView.html.twig", "adminMainView/adminMainView.html.twig", 10)->display($context);
        // line 11
        echo "        </div>
        <div class=\"containerFlexBox containerFlexBox__itemsList\">
            <div class=\"listItemsBox listItemsBox__listItemssettings\">
                <div class=\"itemsBox itemsBox__article itemsBox__itemsElement--background\">
                    <div class=\"itemTitle itemTitle__title item__title--font\">
                        <h2>Articles</h2>
                    </div>
                    <div class=\"itemContainer itemContainer__contain\">
                        <div class=\"itemImage\">
                            <a name=\"listMembers\" class=\"imgBox imgBox__img--size\" href=\"/?controller=listMembers&action=listMembersView\"><img src=\"/Ressources/images/icons/article.svg\"></a>
                        </div>
                    </div>
                </div>
                <div class=\"itemsBox itemsBox__parameters itemsBox__itemsElement--background\">
                    <div class=\"itemTitle itemTitle__title item__title--font\">
                        <h2>Paramètres</h2>
                    </div>
                    <div class=\"itemContainer itemContainer__contain\">
                        <div class=\"itemImage itemImage__image\">
                            <a name=\"engineering\" class=\"imgBox imgBox__img--size\" href=\"\"><img src=\"/Ressources/images/icons/engineering.svg\"></a>
                        </div>
                    </div>
                </div>
                <div class=\"itemsBox itemsBox__messages itemsBox__itemsElement--background\">
                    <div class=\"itemTitle itemTitle__title item__title--font\">
                        <h2>Messages</h2>
                    </div>
                    <div class=\"itemContainer itemContainer__contain\">
                        <div class=\"itemImage itemImage__image\">
                            <a name=\"mail\" class=\"imgBox imgBox__img--size\" href=\"\"><img src=\"/Ressources/images/icons/mail.svg\"></a>
                        </div>
                    </div>
                </div>
                <div class=\"itemsBox itemsBox__members itemsBox__itemsElement--background\">
                    <div class=\"itemTitle itemTitle__title item__title--font\">
                        <h2>Membres</h2>
                    </div>
                    <div class=\"itemContainer itemContainer__contain\">
                        <div class=\"itemImage itemImage__image\">
                            <a name=\"peopleDouble\" class=\"imgBox imgBox__img--size\" href=\"\"><img src=\"/Ressources/images/icons/peopleDouble.svg\"></a>
                        </div>
                    </div>
                </div>
                <div class=\"itemsBox itemsBox__analytics itemsBox__itemsElement--background\">
                    <div class=\"itemTitle itemTitle__title item__title--font\">
                        <h2>Analyses</h2>
                    </div>
                    <div class=\"itemContainer itemContainer__contain\">
                        <div class=\"itemImage itemImage__image\">
                            <a name=\"analytics\" class=\"imgBox imgBox__img--size\" href=\"\"><img src=\"/Ressources/images/icons/analytics.svg\"></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>";
    }

    public function getTemplateName()
    {
        return "adminMainView/adminMainView.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  51 => 11,  49 => 10,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% include \"metaBlock/metaBlock.html.twig\" %}
<head>
    <title>MonAdmin - accueil</title>
    <link rel=\"stylesheet\" type=\"text/css\" href=\"/Assets/css/adminMainStylus.css\">
</head>
<body>
    <div class=\"primaryContainer primaryContainer--backgroundImage\">
        <div class=\"primaryContainer__header\">
            <?php require 'headerView.php';?>
            {% include \"headerView/headerView.html.twig\" %}
        </div>
        <div class=\"containerFlexBox containerFlexBox__itemsList\">
            <div class=\"listItemsBox listItemsBox__listItemssettings\">
                <div class=\"itemsBox itemsBox__article itemsBox__itemsElement--background\">
                    <div class=\"itemTitle itemTitle__title item__title--font\">
                        <h2>Articles</h2>
                    </div>
                    <div class=\"itemContainer itemContainer__contain\">
                        <div class=\"itemImage\">
                            <a name=\"listMembers\" class=\"imgBox imgBox__img--size\" href=\"/?controller=listMembers&action=listMembersView\"><img src=\"/Ressources/images/icons/article.svg\"></a>
                        </div>
                    </div>
                </div>
                <div class=\"itemsBox itemsBox__parameters itemsBox__itemsElement--background\">
                    <div class=\"itemTitle itemTitle__title item__title--font\">
                        <h2>Paramètres</h2>
                    </div>
                    <div class=\"itemContainer itemContainer__contain\">
                        <div class=\"itemImage itemImage__image\">
                            <a name=\"engineering\" class=\"imgBox imgBox__img--size\" href=\"\"><img src=\"/Ressources/images/icons/engineering.svg\"></a>
                        </div>
                    </div>
                </div>
                <div class=\"itemsBox itemsBox__messages itemsBox__itemsElement--background\">
                    <div class=\"itemTitle itemTitle__title item__title--font\">
                        <h2>Messages</h2>
                    </div>
                    <div class=\"itemContainer itemContainer__contain\">
                        <div class=\"itemImage itemImage__image\">
                            <a name=\"mail\" class=\"imgBox imgBox__img--size\" href=\"\"><img src=\"/Ressources/images/icons/mail.svg\"></a>
                        </div>
                    </div>
                </div>
                <div class=\"itemsBox itemsBox__members itemsBox__itemsElement--background\">
                    <div class=\"itemTitle itemTitle__title item__title--font\">
                        <h2>Membres</h2>
                    </div>
                    <div class=\"itemContainer itemContainer__contain\">
                        <div class=\"itemImage itemImage__image\">
                            <a name=\"peopleDouble\" class=\"imgBox imgBox__img--size\" href=\"\"><img src=\"/Ressources/images/icons/peopleDouble.svg\"></a>
                        </div>
                    </div>
                </div>
                <div class=\"itemsBox itemsBox__analytics itemsBox__itemsElement--background\">
                    <div class=\"itemTitle itemTitle__title item__title--font\">
                        <h2>Analyses</h2>
                    </div>
                    <div class=\"itemContainer itemContainer__contain\">
                        <div class=\"itemImage itemImage__image\">
                            <a name=\"analytics\" class=\"imgBox imgBox__img--size\" href=\"\"><img src=\"/Ressources/images/icons/analytics.svg\"></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>", "adminMainView/adminMainView.html.twig", "C:\\Users\\2217873\\Documents\\developpementPerso\\trombiCards\\templates\\adminMainView\\adminMainView.html.twig");
    }
}

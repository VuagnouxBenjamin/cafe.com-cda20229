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

/* home/index.html.twig */
class __TwigTemplate_6df8480e155d24754e0c0f3c1bcf3e7e98b0663ad4e2d0be2d0bac8015e327b5 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "home/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Votre expert café fair trade & bio sourcé - café.com";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    ";
        // line 7
        echo "    ";
        // line 8
        echo "    ";
        // line 9
        echo "
    ";
        // line 11
        echo "    <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/hero.css"), "html", null, true);
        echo "\" type=\"text/css\">

    ";
        // line 14
        echo "    <div id=\"hero-banner\">
        <div id=\"hero-text\">
            <h2>Découvrez un nouveau café exotique</h2>
            <p id=\"hero-description\">L'arôme délicat de la noix de coco donne de la douceur au goût riche du café. Le
                duo exotique vous plongera
                dans l'atmosphère de vacances à la plage et vous transportera sur la côte paradisiaque.</p>
            <a href=\"#\" class=\"hero-btn button-shadow\">Voir la promotion</a>
        </div>
    </div>
    <div id=\"hero-banner-mobile\">
        <h2>
            Les cafés du moment...
        </h2>
    </div>

    ";
        // line 30
        echo "    ";
        // line 31
        echo "    ";
        // line 32
        echo "
    ";
        // line 34
        echo "    <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/categories.css"), "html", null, true);
        echo "\" type=\"text/css\">

    ";
        // line 37
        echo "    <div id=\"categorie-container\">
        ";
        // line 38
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["categories"]) || array_key_exists("categories", $context) ? $context["categories"] : (function () { throw new RuntimeError('Variable "categories" does not exist.', 38, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            // line 39
            echo "            <div class=\"category-card\">
                <h2 class=\"cat-title\">
                    ";
            // line 41
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["category"], "categoryName", [], "any", false, false, false, 41), "html", null, true);
            echo "
                </h2>
                <p class=\"cat-description\">
                    ";
            // line 44
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $this->extensions['Twig\Extra\String\StringExtension']->createUnicodeString(twig_get_attribute($this->env, $this->source, $context["category"], "categoryDescription", [], "any", false, false, false, 44)), "truncate", [0 => 80, 1 => "...", 2 => false], "method", false, false, false, 44), "html", null, true);
            echo "
                </p>
                <button class=\"cat-btn button-shadow\">
                    Details
                </button>
                <img src=\"";
            // line 49
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(twig_get_attribute($this->env, $this->source, $context["category"], "categoryImage", [], "any", false, false, false, 49)), "html", null, true);
            echo "\"
                     alt=\"Image de description de la categorie : ";
            // line 50
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["category"], "categoryName", [], "any", false, false, false, 50), "html", null, true);
            echo "\" class=\"cat-img\">
            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 53
        echo "    </div>

    ";
        // line 56
        echo "    ";
        // line 57
        echo "    ";
        // line 58
        echo "    
    ";
        // line 60
        echo "    <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/comments.css"), "html", null, true);
        echo "\" type=\"text/css\">

    <div id=\"comments-container\">
        <div id=\"comments-intro\">
            <h2>Avis des clients</h2>
            <p>Laissez nous votre avis pour aider nos clients à choisir</p>
            <a href=\"#\" class=\"comments-btn button-shadow\">Ecrire un avis</a>
        </div>
        <div id=\"comments-list\">
            <div id=\"comment-block\">
                ";
        // line 70
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["comments"]) || array_key_exists("comments", $context) ? $context["comments"] : (function () { throw new RuntimeError('Variable "comments" does not exist.', 70, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["comment"]) {
            // line 71
            echo "                    <div class=\"comment\">
                        <h3>";
            // line 72
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["comment"], "user", [], "any", false, false, false, 72), "firstName", [], "any", false, false, false, 72), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["comment"], "user", [], "any", false, false, false, 72), "lastName", [], "any", false, false, false, 72), "html", null, true);
            echo "</h3>
                        <div class=\"comment-product\">
                            <img src=\"";
            // line 74
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["comment"], "product", [], "any", false, false, false, 74), "image", [], "any", false, false, false, 74)), "html", null, true);
            echo "\">
                            <div class=\"comment-product-info\">
                                <p class=\"comment-product-info-name\">";
            // line 76
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["comment"], "product", [], "any", false, false, false, 76), "name", [], "any", false, false, false, 76), "html", null, true);
            echo "</p>
                                <p class=\"comment-product-info-category\">";
            // line 77
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["comment"], "product", [], "any", false, false, false, 77), "categorie", [], "any", false, false, false, 77), "categoryName", [], "any", false, false, false, 77), "html", null, true);
            echo "</p>
                            </div>
                        </div>
                        <div class=\"comment-text\">
                            <p>";
            // line 81
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $this->extensions['Twig\Extra\String\StringExtension']->createUnicodeString(twig_get_attribute($this->env, $this->source, $context["comment"], "comment", [], "any", false, false, false, 81)), "truncate", [0 => 300, 1 => "...", 2 => false], "method", false, false, false, 81), "html", null, true);
            echo "</p>
                        </div>
                        <div class=\"comment-stars\">
                            ";
            // line 84
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(1, 5));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 85
                echo "                                ";
                if ((0 >= twig_compare($context["i"], twig_get_attribute($this->env, $this->source, $context["comment"], "rating", [], "any", false, false, false, 85)))) {
                    // line 86
                    echo "                                    <img src=\"";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/comments/comment_star_full.png"), "html", null, true);
                    echo "\" alt=\"étoile pleine\"
                                         class=\"star\">
                                ";
                } else {
                    // line 89
                    echo "                                    <img src=\"";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/comments/comment_star_none.png"), "html", null, true);
                    echo "\" alt=\"étoile pleine\"
                                         class=\"star\">
                                ";
                }
                // line 92
                echo "                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 93
            echo "                        </div>
                    </div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['comment'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 96
        echo "            </div>
            <a href=\"#\" class=\"comments-more button-shadow\">Voir tous les avis</a>
        </div>
    </div>


";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "home/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  267 => 96,  259 => 93,  253 => 92,  246 => 89,  239 => 86,  236 => 85,  232 => 84,  226 => 81,  219 => 77,  215 => 76,  210 => 74,  203 => 72,  200 => 71,  196 => 70,  182 => 60,  179 => 58,  177 => 57,  175 => 56,  171 => 53,  162 => 50,  158 => 49,  150 => 44,  144 => 41,  140 => 39,  136 => 38,  133 => 37,  127 => 34,  124 => 32,  122 => 31,  120 => 30,  103 => 14,  97 => 11,  94 => 9,  92 => 8,  90 => 7,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Votre expert café fair trade & bio sourcé - café.com{% endblock %}

{% block body %}
    {# ----------------------- #}
    {# ---      HERO BANNER #}
    {# ----------------------- #}

    {# Hero Banner Style #}
    <link rel=\"stylesheet\" href=\"{{ asset(\"assets/css/hero.css\") }}\" type=\"text/css\">

    {# Hero Banner HTML #}
    <div id=\"hero-banner\">
        <div id=\"hero-text\">
            <h2>Découvrez un nouveau café exotique</h2>
            <p id=\"hero-description\">L'arôme délicat de la noix de coco donne de la douceur au goût riche du café. Le
                duo exotique vous plongera
                dans l'atmosphère de vacances à la plage et vous transportera sur la côte paradisiaque.</p>
            <a href=\"#\" class=\"hero-btn button-shadow\">Voir la promotion</a>
        </div>
    </div>
    <div id=\"hero-banner-mobile\">
        <h2>
            Les cafés du moment...
        </h2>
    </div>

    {# ----------------------- #}
    {# ---      CATEGORIES #}
    {# ----------------------- #}

    {# Categories Style #}
    <link rel=\"stylesheet\" href=\"{{ asset(\"assets/css/categories.css\") }}\" type=\"text/css\">

    {# Categories HTML #}
    <div id=\"categorie-container\">
        {% for category in categories %}
            <div class=\"category-card\">
                <h2 class=\"cat-title\">
                    {{ category.categoryName }}
                </h2>
                <p class=\"cat-description\">
                    {{ category.categoryDescription | u.truncate(80, '...', false) }}
                </p>
                <button class=\"cat-btn button-shadow\">
                    Details
                </button>
                <img src=\"{{ asset(category.categoryImage) }}\"
                     alt=\"Image de description de la categorie : {{ category.categoryName }}\" class=\"cat-img\">
            </div>
        {% endfor %}
    </div>

    {# ----------------------- #}
    {# ---      Commentaires #}
    {# ----------------------- #}
    
    {# Hero Banner Style #}
    <link rel=\"stylesheet\" href=\"{{ asset(\"assets/css/comments.css\") }}\" type=\"text/css\">

    <div id=\"comments-container\">
        <div id=\"comments-intro\">
            <h2>Avis des clients</h2>
            <p>Laissez nous votre avis pour aider nos clients à choisir</p>
            <a href=\"#\" class=\"comments-btn button-shadow\">Ecrire un avis</a>
        </div>
        <div id=\"comments-list\">
            <div id=\"comment-block\">
                {% for comment in comments %}
                    <div class=\"comment\">
                        <h3>{{ comment.user.firstName }} {{ comment.user.lastName }}</h3>
                        <div class=\"comment-product\">
                            <img src=\"{{ asset(comment.product.image) }}\">
                            <div class=\"comment-product-info\">
                                <p class=\"comment-product-info-name\">{{ comment.product.name }}</p>
                                <p class=\"comment-product-info-category\">{{ comment.product.categorie.categoryName }}</p>
                            </div>
                        </div>
                        <div class=\"comment-text\">
                            <p>{{ comment.comment | u.truncate(300, '...', false) }}</p>
                        </div>
                        <div class=\"comment-stars\">
                            {% for i in 1..5 %}
                                {% if i <= comment.rating %}
                                    <img src=\"{{ asset('images/comments/comment_star_full.png') }}\" alt=\"étoile pleine\"
                                         class=\"star\">
                                {% else %}
                                    <img src=\"{{ asset('images/comments/comment_star_none.png') }}\" alt=\"étoile pleine\"
                                         class=\"star\">
                                {% endif %}
                            {% endfor %}
                        </div>
                    </div>
                {% endfor %}
            </div>
            <a href=\"#\" class=\"comments-more button-shadow\">Voir tous les avis</a>
        </div>
    </div>


{% endblock %}", "home/index.html.twig", "/home/benj/Bureau/Sites/SYMFONY/cafe.com-cda20229/templates/home/index.html.twig");
    }
}

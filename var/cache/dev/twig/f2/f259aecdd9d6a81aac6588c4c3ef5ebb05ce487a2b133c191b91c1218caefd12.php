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
class __TwigTemplate_54f41f93923d8c9259fd29e37b5249b20880c50fdb7688ece2da5dc2ac540e23 extends \Twig\Template
{
    private $source;

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "home/index.html.twig", 1);
        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Le site qui met en relation propriétaires et voyageurs";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "<div class=\"container\">
    <div class=\"jumbotron mt-3\">
        <h1 class=\"display-3\">Bienvenue sur SymBNB</h1>
            <p class=\"lead\">Nous mettons en relations les voyageurs et les propriétaires qui veulent mettent leur bien à la location</p>
        <hr class=\"my-4\">
            <p>Vous êtes voyageur ? Quel sera votre prochain logement pour votre voyage ?</p>
            <p class=\"lead\">
                <a class=\"btn btn-primary btn-lg\" href=\"#\" role=\"button\">Voir les annonces</a>
        </p>
    </div>

        <h2 class=\"h1 mt-3 mb-4\">Nos appartements stars</h2>

        <div class=\"row\">
            <div class=\"col-md-4\">
                <div class=\"card bg-light mb-3\">
                    <div class=\"card-header text-center\">
                        <p>3 chambres, <strong>49&euro</strong><br>
                        <small>Pas encore noté</small></p>
                    </div>

                    <img src=\"http://placehold.it/1000x400\" alt=\"Image de l'appartement\" style=\"height: 200px; width: 100%; display: block\">

                    <div class=\"card-body\">
                        <h4 class=\"card-title\">Bel Appartement</h4>
                        <p class=\"card-text\">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Impedit fugit, delectus suscipit sapiente expedita vero possimus! Hic est numquam sit.</p>
                        <a href=\"#\" class=\"btn btn-secondary\">En savoir plus</a>
                    </div>
                </div>
            </div>
            <div class=\"col-md-4\">
                <div class=\"card bg-light mb-3\">
                    <div class=\"card-header text-center\">
                        <p>3 chambres, <strong>49&euro</strong><br>
                        <small>Pas encore noté</small></p>
                    </div>

                    <img src=\"http://placehold.it/1000x400\" alt=\"Image de l'appartement\" style=\"height: 200px; width: 100%; display: block\">

                    <div class=\"card-body\">
                        <h4 class=\"card-title\">Bel Appartement</h4>
                        <p class=\"card-text\">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Impedit fugit, delectus suscipit sapiente expedita vero possimus! Hic est numquam sit.</p>
                        <a href=\"#\" class=\"btn btn-secondary\">En savoir plus</a>
                    </div>
                </div>
            </div>
            <div class=\"col-md-4\">
                <div class=\"card bg-light mb-3\">
                    <div class=\"card-header text-center\">
                        <p>3 chambres, <strong>49&euro</strong><br>
                        <small>Pas encore noté</small></p>
                    </div>

                    <img src=\"http://placehold.it/1000x400\" alt=\"Image de l'appartement\" style=\"height: 200px; width: 100%; display: block\">

                    <div class=\"card-body\">
                        <h4 class=\"card-title\">Bel Appartement</h4>
                        <p class=\"card-text\">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Impedit fugit, delectus suscipit sapiente expedita vero possimus! Hic est numquam sit.</p>
                        <a href=\"#\" class=\"btn btn-secondary\">En savoir plus</a>
                    </div>
                </div>
            </div>
        </div>

        <h2 class=\"h1 mt-3 mb-4\">Nos propriétaires stars</h2>

        <div class=\"row\">
            <div class=\"col\">
                <div class=\"card border-secondary mb-3\">
                    <div class=\"card-body\">
                        <div class=\"card-title\">Philipe Legros</div>
                        <hr>
                        <div class=\"card-text\">
                            <img src=\"http://placehold.it/64x64\" alt=\"Avatar du propriétaire\" class=\"float-left-mr-3\">
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sunt nobis repellendus placeat est! Similique, magni sapiente. Recusandae exercitationem perferendis consectetur.</p>
                            <a href=\"#\" class=\"btn btn-success float-right\">En savoir plus</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"col\">
                <div class=\"card border-secondary mb-3\">
                    <div class=\"card-body\">
                        <div class=\"card-title\">Louis Lebourg</div>
                        <hr>
                        <div class=\"card-text\">
                            <img src=\"http://placehold.it/64x64\" alt=\"Avatar du propriétaire\" class=\"float-left-mr-3\">
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sunt nobis repellendus placeat est! Similique, magni sapiente. Recusandae exercitationem perferendis consectetur.</p>
                            <a href=\"#\" class=\"btn btn-success float-right\">En savoir plus</a>
                        </div>
                    </div>
                </div>
            </div>
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
        return array (  84 => 6,  75 => 5,  57 => 3,  27 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Le site qui met en relation propriétaires et voyageurs{% endblock %}

{% block body %}
<div class=\"container\">
    <div class=\"jumbotron mt-3\">
        <h1 class=\"display-3\">Bienvenue sur SymBNB</h1>
            <p class=\"lead\">Nous mettons en relations les voyageurs et les propriétaires qui veulent mettent leur bien à la location</p>
        <hr class=\"my-4\">
            <p>Vous êtes voyageur ? Quel sera votre prochain logement pour votre voyage ?</p>
            <p class=\"lead\">
                <a class=\"btn btn-primary btn-lg\" href=\"#\" role=\"button\">Voir les annonces</a>
        </p>
    </div>

        <h2 class=\"h1 mt-3 mb-4\">Nos appartements stars</h2>

        <div class=\"row\">
            <div class=\"col-md-4\">
                <div class=\"card bg-light mb-3\">
                    <div class=\"card-header text-center\">
                        <p>3 chambres, <strong>49&euro</strong><br>
                        <small>Pas encore noté</small></p>
                    </div>

                    <img src=\"http://placehold.it/1000x400\" alt=\"Image de l'appartement\" style=\"height: 200px; width: 100%; display: block\">

                    <div class=\"card-body\">
                        <h4 class=\"card-title\">Bel Appartement</h4>
                        <p class=\"card-text\">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Impedit fugit, delectus suscipit sapiente expedita vero possimus! Hic est numquam sit.</p>
                        <a href=\"#\" class=\"btn btn-secondary\">En savoir plus</a>
                    </div>
                </div>
            </div>
            <div class=\"col-md-4\">
                <div class=\"card bg-light mb-3\">
                    <div class=\"card-header text-center\">
                        <p>3 chambres, <strong>49&euro</strong><br>
                        <small>Pas encore noté</small></p>
                    </div>

                    <img src=\"http://placehold.it/1000x400\" alt=\"Image de l'appartement\" style=\"height: 200px; width: 100%; display: block\">

                    <div class=\"card-body\">
                        <h4 class=\"card-title\">Bel Appartement</h4>
                        <p class=\"card-text\">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Impedit fugit, delectus suscipit sapiente expedita vero possimus! Hic est numquam sit.</p>
                        <a href=\"#\" class=\"btn btn-secondary\">En savoir plus</a>
                    </div>
                </div>
            </div>
            <div class=\"col-md-4\">
                <div class=\"card bg-light mb-3\">
                    <div class=\"card-header text-center\">
                        <p>3 chambres, <strong>49&euro</strong><br>
                        <small>Pas encore noté</small></p>
                    </div>

                    <img src=\"http://placehold.it/1000x400\" alt=\"Image de l'appartement\" style=\"height: 200px; width: 100%; display: block\">

                    <div class=\"card-body\">
                        <h4 class=\"card-title\">Bel Appartement</h4>
                        <p class=\"card-text\">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Impedit fugit, delectus suscipit sapiente expedita vero possimus! Hic est numquam sit.</p>
                        <a href=\"#\" class=\"btn btn-secondary\">En savoir plus</a>
                    </div>
                </div>
            </div>
        </div>

        <h2 class=\"h1 mt-3 mb-4\">Nos propriétaires stars</h2>

        <div class=\"row\">
            <div class=\"col\">
                <div class=\"card border-secondary mb-3\">
                    <div class=\"card-body\">
                        <div class=\"card-title\">Philipe Legros</div>
                        <hr>
                        <div class=\"card-text\">
                            <img src=\"http://placehold.it/64x64\" alt=\"Avatar du propriétaire\" class=\"float-left-mr-3\">
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sunt nobis repellendus placeat est! Similique, magni sapiente. Recusandae exercitationem perferendis consectetur.</p>
                            <a href=\"#\" class=\"btn btn-success float-right\">En savoir plus</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"col\">
                <div class=\"card border-secondary mb-3\">
                    <div class=\"card-body\">
                        <div class=\"card-title\">Louis Lebourg</div>
                        <hr>
                        <div class=\"card-text\">
                            <img src=\"http://placehold.it/64x64\" alt=\"Avatar du propriétaire\" class=\"float-left-mr-3\">
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sunt nobis repellendus placeat est! Similique, magni sapiente. Recusandae exercitationem perferendis consectetur.</p>
                            <a href=\"#\" class=\"btn btn-success float-right\">En savoir plus</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
</div>
    
{% endblock %}
", "home/index.html.twig", "/home/greg/Documents/dev/symbnb/templates/home/index.html.twig");
    }
}

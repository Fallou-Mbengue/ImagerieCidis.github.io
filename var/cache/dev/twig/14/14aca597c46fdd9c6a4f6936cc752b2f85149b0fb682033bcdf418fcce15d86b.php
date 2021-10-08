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

/* admin_patient/index.html.twig */
class __TwigTemplate_c741ea20cc1408d118ba6e35cb1e7db7e53b0f5e698ad9f07ef26eb8a29c696a extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin_patient/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin_patient/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "admin_patient/index.html.twig", 1);
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

        echo "Administration";
        
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
        echo "<section id=\"hero\">
\t\t<div id=\"heroCarousel\" data-bs-interval=\"5000\" class=\"carousel slide carousel-fade\" data-bs-ride=\"carousel\">

\t\t\t<ol class=\"carousel-indicators\" id=\"hero-carousel-indicators\"></ol>

\t\t\t<div
\t\t\t\tclass=\"carousel-inner\" role=\"listbox\">

\t\t\t\t<!-- Slide 1 -->
\t\t\t\t<div class=\"carousel-item active\" style=\"background-image: url(assets/img/slide/.jpg)\">
\t\t\t\t\t<div class=\"container\">
\t\t\t\t\t\t<h1>ADMINISTRATION</h1>
\t\t\t\t\t\t<h3 style=\"color: black;\">Centre D'imagerie Diagnostique et Interventionnelle De Soumbedioune</h3>
\t\t\t\t\t\t<a href=\"#appointment\" class=\"btn-get-started scrollto\">Administration</a>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</section>

    <!--========== section tableaux administration ====  -->
    <div class=\"container-fluid my-5\">
\t\t<div class=\"row\">
\t\t\t";
        // line 29
        if ( !twig_test_empty((isset($context["patients"]) || array_key_exists("patients", $context) ? $context["patients"] : (function () { throw new RuntimeError('Variable "patients" does not exist.', 29, $this->source); })()))) {
            // line 30
            echo "\t\t\t\t<table class=\"table table-striped table-dark\">
\t\t\t\t\t<thead>
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<th>Id</th>
\t\t\t\t\t\t\t<th>Prenom</th>
\t\t\t\t\t\t\t<th>Nom</th>
\t\t\t\t\t\t\t<th>Adresse</th>
\t\t\t\t\t\t\t<th>Email</th>
\t\t\t\t\t\t\t<th>Delete</th>
\t\t\t\t\t\t\t<th>Update</th>
\t\t\t\t\t\t\t<th>View</th>
\t\t\t\t\t\t</tr>
\t\t\t\t\t</thead>
\t\t\t\t\t<tbody>
\t\t\t\t\t\t";
            // line 44
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["patients"]) || array_key_exists("patients", $context) ? $context["patients"] : (function () { throw new RuntimeError('Variable "patients" does not exist.', 44, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["patient"]) {
                // line 45
                echo "\t\t\t\t\t\t\t<tr>

\t\t\t\t\t\t\t\t<td>";
                // line 47
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["patient"], "id", [], "any", false, false, false, 47), "html", null, true);
                echo "</td>
\t\t\t\t\t\t\t\t<td>";
                // line 48
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["patient"], "prenom", [], "any", false, false, false, 48), "html", null, true);
                echo "</td>
\t\t\t\t\t\t\t\t<td>";
                // line 49
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["patient"], "nom", [], "any", false, false, false, 49), "html", null, true);
                echo "</td>
\t\t\t\t\t\t\t\t<td>";
                // line 50
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["patient"], "adresse", [], "any", false, false, false, 50), "html", null, true);
                echo "</td>
                                <td>";
                // line 51
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["patient"], "email", [], "any", false, false, false, 51), "html", null, true);
                echo "</td>
\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t<a href=\"";
                // line 53
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("delete_patient", ["id" => twig_get_attribute($this->env, $this->source, $context["patient"], "id", [], "any", false, false, false, 53)]), "html", null, true);
                echo "\" class=\"btn btn-danger\">
\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-trash\"></i>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t<a href=\"";
                // line 58
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("edit_patient", ["id" => twig_get_attribute($this->env, $this->source, $context["patient"], "id", [], "any", false, false, false, 58)]), "html", null, true);
                echo "\" class=\"btn btn-success\">
\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-edit\"></i>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t<a href=\"";
                // line 63
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("view_patient", ["id" => twig_get_attribute($this->env, $this->source, $context["patient"], "id", [], "any", false, false, false, 63)]), "html", null, true);
                echo "\" class=\"btn btn btn-info\">
\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-info\"></i>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['patient'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 69
            echo "\t\t\t\t\t</tbody>
\t\t\t\t</table>
\t\t\t";
        } else {
            // line 72
            echo "\t\t\t\t<p>No article found.</p>
\t\t\t";
        }
        // line 74
        echo "\t\t</div>
\t</div>
    
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "admin_patient/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  197 => 74,  193 => 72,  188 => 69,  176 => 63,  168 => 58,  160 => 53,  155 => 51,  151 => 50,  147 => 49,  143 => 48,  139 => 47,  135 => 45,  131 => 44,  115 => 30,  113 => 29,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Administration{% endblock %}

{% block body %}
<section id=\"hero\">
\t\t<div id=\"heroCarousel\" data-bs-interval=\"5000\" class=\"carousel slide carousel-fade\" data-bs-ride=\"carousel\">

\t\t\t<ol class=\"carousel-indicators\" id=\"hero-carousel-indicators\"></ol>

\t\t\t<div
\t\t\t\tclass=\"carousel-inner\" role=\"listbox\">

\t\t\t\t<!-- Slide 1 -->
\t\t\t\t<div class=\"carousel-item active\" style=\"background-image: url(assets/img/slide/.jpg)\">
\t\t\t\t\t<div class=\"container\">
\t\t\t\t\t\t<h1>ADMINISTRATION</h1>
\t\t\t\t\t\t<h3 style=\"color: black;\">Centre D'imagerie Diagnostique et Interventionnelle De Soumbedioune</h3>
\t\t\t\t\t\t<a href=\"#appointment\" class=\"btn-get-started scrollto\">Administration</a>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</section>

    <!--========== section tableaux administration ====  -->
    <div class=\"container-fluid my-5\">
\t\t<div class=\"row\">
\t\t\t{% if patients is not empty %}
\t\t\t\t<table class=\"table table-striped table-dark\">
\t\t\t\t\t<thead>
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<th>Id</th>
\t\t\t\t\t\t\t<th>Prenom</th>
\t\t\t\t\t\t\t<th>Nom</th>
\t\t\t\t\t\t\t<th>Adresse</th>
\t\t\t\t\t\t\t<th>Email</th>
\t\t\t\t\t\t\t<th>Delete</th>
\t\t\t\t\t\t\t<th>Update</th>
\t\t\t\t\t\t\t<th>View</th>
\t\t\t\t\t\t</tr>
\t\t\t\t\t</thead>
\t\t\t\t\t<tbody>
\t\t\t\t\t\t{% for patient in patients %}
\t\t\t\t\t\t\t<tr>

\t\t\t\t\t\t\t\t<td>{{ patient.id}}</td>
\t\t\t\t\t\t\t\t<td>{{ patient.prenom}}</td>
\t\t\t\t\t\t\t\t<td>{{ patient.nom}}</td>
\t\t\t\t\t\t\t\t<td>{{ patient.adresse}}</td>
                                <td>{{ patient.email}}</td>
\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t<a href=\"{{path('delete_patient',{'id': patient.id})}}\" class=\"btn btn-danger\">
\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-trash\"></i>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t<a href=\"{{path('edit_patient',{'id': patient.id})}}\" class=\"btn btn-success\">
\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-edit\"></i>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t<a href=\"{{path('view_patient',{'id': patient.id})}}\" class=\"btn btn btn-info\">
\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-info\"></i>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t</tbody>
\t\t\t\t</table>
\t\t\t{% else %}
\t\t\t\t<p>No article found.</p>
\t\t\t{% endif %}
\t\t</div>
\t</div>
    
{% endblock %}
", "admin_patient/index.html.twig", "/Applications/XAMPP/xamppfiles/htdocs/medis/templates/admin_patient/index.html.twig");
    }
}
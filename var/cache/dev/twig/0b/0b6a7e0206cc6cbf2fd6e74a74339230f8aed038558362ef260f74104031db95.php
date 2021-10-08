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

/* home/view.html.twig */
class __TwigTemplate_c2eff9987e826bace2c1f3f441401047fb1f8e5f5a699f61c5f6e85d3daca15b extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/view.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/view.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "home/view.html.twig", 1);
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

        echo "View
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 6
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 7
        echo "
\t<!-- ======= Hero Section ======= -->
\t<section id=\"hero\">
\t\t<div id=\"heroCarousel\" data-bs-interval=\"5000\" class=\"carousel slide carousel-fade\" data-bs-ride=\"carousel\">

\t\t\t<ol class=\"carousel-indicators\" id=\"hero-carousel-indicators\"></ol>

\t\t\t<div
\t\t\t\tclass=\"carousel-inner\" role=\"listbox\">

\t\t\t\t<!-- Slide 1 -->
\t\t\t\t<div class=\"carousel-item active\" style=\"background-image: url(assets/img/slide/irm1.jpg)\">
\t\t\t\t\t<div class=\"container\">
\t\t\t\t\t\t<h1>CIDIS</h1>
\t\t\t\t\t\t<h3 style=\"color: black;\">Centre D'imagerie Diagnostique et Interventionnelle De Soumbedioune</h3>
\t\t\t\t\t\t<a href=\"#\" class=\"btn-get-started scrollto\"><h5>Vos Informations</h5></a>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>

\t\t\t<a class=\"carousel-control-prev\" href=\"#heroCarousel\" role=\"button\" data-bs-slide=\"prev\">
\t\t\t\t<span class=\"carousel-control-prev-icon bi bi-chevron-left\" aria-hidden=\"true\"></span>
\t\t\t</a>

\t\t\t<a class=\"carousel-control-next\" href=\"#heroCarousel\" role=\"button\" data-bs-slide=\"next\">
\t\t\t\t<span class=\"carousel-control-next-icon bi bi-chevron-right\" aria-hidden=\"true\"></span>
\t\t\t</a>

\t\t</div>
\t</section>
\t<!-- End Hero -->

\t<!-- ========= View patient -->
    <section class=\"container\">
    <div class=\"card text-center\">
  <div class=\"card-header\">
    Featured
  </div>
  <div class=\"card-body\">
    <h3 class=\"card-title\">Information Patient</h3>
    <p class=\"card-text\">With supporting text below as a natural lead-in to additional content.</p>
    <ul class=\"list-group list-group-flush\">
\t <li class=\"list-group-item\">Prénom : ";
        // line 49
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["patient"]) || array_key_exists("patient", $context) ? $context["patient"] : (function () { throw new RuntimeError('Variable "patient" does not exist.', 49, $this->source); })()), "prenom", [], "any", false, false, false, 49), "html", null, true);
        echo "</p></li>
\t <li class=\"list-group-item\">Nom : ";
        // line 50
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["patient"]) || array_key_exists("patient", $context) ? $context["patient"] : (function () { throw new RuntimeError('Variable "patient" does not exist.', 50, $this->source); })()), "nom", [], "any", false, false, false, 50), "html", null, true);
        echo "</li>
     <li class=\"list-group-item\">Adresse : ";
        // line 51
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["patient"]) || array_key_exists("patient", $context) ? $context["patient"] : (function () { throw new RuntimeError('Variable "patient" does not exist.', 51, $this->source); })()), "adresse", [], "any", false, false, false, 51), "html", null, true);
        echo "</li>
     <li class=\"list-group-item\">Date de Naissance : ";
        // line 52
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["patient"]) || array_key_exists("patient", $context) ? $context["patient"] : (function () { throw new RuntimeError('Variable "patient" does not exist.', 52, $this->source); })()), "naissance", [], "any", false, false, false, 52), "d-m-Y"), "html", null, true);
        echo "</li>
     <li class=\"list-group-item\">Email : ";
        // line 53
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["patient"]) || array_key_exists("patient", $context) ? $context["patient"] : (function () { throw new RuntimeError('Variable "patient" does not exist.', 53, $this->source); })()), "email", [], "any", false, false, false, 53), "html", null, true);
        echo "</li>
     <li class=\"list-group-item\">Téléphone : ";
        // line 54
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["patient"]) || array_key_exists("patient", $context) ? $context["patient"] : (function () { throw new RuntimeError('Variable "patient" does not exist.', 54, $this->source); })()), "telephone", [], "any", false, false, false, 54), "html", null, true);
        echo "</li>
\t</ul>
  </div>
  <div class=\"card-footer text-muted\">
  </div>
</div>
    </section>
    <h2 class=\"text-center\"> Rendez-vous Effectués </h2>
\t<section class=\"container\">
\t\t<div class=\"row\">
            ";
        // line 64
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["patient"]) || array_key_exists("patient", $context) ? $context["patient"] : (function () { throw new RuntimeError('Variable "patient" does not exist.', 64, $this->source); })()), "appointment", [], "any", false, false, false, 64));
        foreach ($context['_seq'] as $context["_key"] => $context["appointment"]) {
            // line 65
            echo "                
\t\t\t <div class=\"col-sm-6 mb-4\">
\t\t\t\t<div class=\"card\">
\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t<h3 class=\"card-title text-center\">Détail Rendez-vous ";
            // line 69
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["appointment"], "id", [], "any", false, false, false, 69), "html", null, true);
            echo " </h3>
\t\t\t\t\t\t<p class=\"card-text\">With supporting text below as a natural lead-in to additional content.</p>
                        <ul class=\"list-group list-group-flush\">
\t\t\t\t\t\t\t<li class=\"list-group-item\"> Date de Rendez-vous : ";
            // line 72
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["appointment"], "DateRV", [], "any", false, false, false, 72), "d-m-Y"), "html", null, true);
            echo "</p></li>
                            <li class=\"list-group-item\"> Service : ";
            // line 73
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["appointment"], "service", [], "any", false, false, false, 73), "html", null, true);
            echo "</p></li>
\t\t\t\t\t\t\t<li class=\"list-group-item\">Examen : ";
            // line 74
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["appointment"], "examen", [], "any", false, false, false, 74), "html", null, true);
            echo "</li>
                            <li class=\"list-group-item\">Type Examen : ";
            // line 75
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["appointment"], "typeExamen", [], "any", false, false, false, 75), "html", null, true);
            echo "</li>
                            <li class=\"list-group-item\">Presripteur : ";
            // line 76
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["appointment"], "prescripteur", [], "any", false, false, false, 76), "html", null, true);
            echo "</li>
                            <li class=\"list-group-item\">Heure de rendez-vous : ";
            // line 77
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["appointment"], "heure", [], "any", false, false, false, 77), "html", null, true);
            echo "</li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t\t<div class=\"text-center\">
\t\t\t\t\t\t    <a href=\"";
            // line 80
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("edit_appointment", ["id" => twig_get_attribute($this->env, $this->source, $context["appointment"], "id", [], "any", false, false, false, 80)]), "html", null, true);
            echo "\" class=\"btn btn-success\">
\t\t\t\t\t\t\t <i class=\"fas fa-edit\"></i>
\t\t\t\t\t\t    </a>
\t\t\t\t\t\t    <a href=\"";
            // line 83
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("delete_appointment", ["id" => twig_get_attribute($this->env, $this->source, $context["appointment"], "id", [], "any", false, false, false, 83)]), "html", null, true);
            echo "\" class=\"btn btn-danger\">
\t\t\t\t\t\t\t <i class=\"fas fa-trash\"></i>
\t\t\t\t\t\t    </a>\t\t\t
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['appointment'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 91
        echo "\t\t</div>
\t</section>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "home/view.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  228 => 91,  214 => 83,  208 => 80,  202 => 77,  198 => 76,  194 => 75,  190 => 74,  186 => 73,  182 => 72,  176 => 69,  170 => 65,  166 => 64,  153 => 54,  149 => 53,  145 => 52,  141 => 51,  137 => 50,  133 => 49,  89 => 7,  79 => 6,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}View
{% endblock %}

{% block body %}

\t<!-- ======= Hero Section ======= -->
\t<section id=\"hero\">
\t\t<div id=\"heroCarousel\" data-bs-interval=\"5000\" class=\"carousel slide carousel-fade\" data-bs-ride=\"carousel\">

\t\t\t<ol class=\"carousel-indicators\" id=\"hero-carousel-indicators\"></ol>

\t\t\t<div
\t\t\t\tclass=\"carousel-inner\" role=\"listbox\">

\t\t\t\t<!-- Slide 1 -->
\t\t\t\t<div class=\"carousel-item active\" style=\"background-image: url(assets/img/slide/irm1.jpg)\">
\t\t\t\t\t<div class=\"container\">
\t\t\t\t\t\t<h1>CIDIS</h1>
\t\t\t\t\t\t<h3 style=\"color: black;\">Centre D'imagerie Diagnostique et Interventionnelle De Soumbedioune</h3>
\t\t\t\t\t\t<a href=\"#\" class=\"btn-get-started scrollto\"><h5>Vos Informations</h5></a>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>

\t\t\t<a class=\"carousel-control-prev\" href=\"#heroCarousel\" role=\"button\" data-bs-slide=\"prev\">
\t\t\t\t<span class=\"carousel-control-prev-icon bi bi-chevron-left\" aria-hidden=\"true\"></span>
\t\t\t</a>

\t\t\t<a class=\"carousel-control-next\" href=\"#heroCarousel\" role=\"button\" data-bs-slide=\"next\">
\t\t\t\t<span class=\"carousel-control-next-icon bi bi-chevron-right\" aria-hidden=\"true\"></span>
\t\t\t</a>

\t\t</div>
\t</section>
\t<!-- End Hero -->

\t<!-- ========= View patient -->
    <section class=\"container\">
    <div class=\"card text-center\">
  <div class=\"card-header\">
    Featured
  </div>
  <div class=\"card-body\">
    <h3 class=\"card-title\">Information Patient</h3>
    <p class=\"card-text\">With supporting text below as a natural lead-in to additional content.</p>
    <ul class=\"list-group list-group-flush\">
\t <li class=\"list-group-item\">Prénom : {{patient.prenom}}</p></li>
\t <li class=\"list-group-item\">Nom : {{patient.nom}}</li>
     <li class=\"list-group-item\">Adresse : {{patient.adresse}}</li>
     <li class=\"list-group-item\">Date de Naissance : {{patient.naissance|date('d-m-Y')}}</li>
     <li class=\"list-group-item\">Email : {{patient.email}}</li>
     <li class=\"list-group-item\">Téléphone : {{patient.telephone}}</li>
\t</ul>
  </div>
  <div class=\"card-footer text-muted\">
  </div>
</div>
    </section>
    <h2 class=\"text-center\"> Rendez-vous Effectués </h2>
\t<section class=\"container\">
\t\t<div class=\"row\">
            {% for appointment in patient.appointment %}
                
\t\t\t <div class=\"col-sm-6 mb-4\">
\t\t\t\t<div class=\"card\">
\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t<h3 class=\"card-title text-center\">Détail Rendez-vous {{appointment.id}} </h3>
\t\t\t\t\t\t<p class=\"card-text\">With supporting text below as a natural lead-in to additional content.</p>
                        <ul class=\"list-group list-group-flush\">
\t\t\t\t\t\t\t<li class=\"list-group-item\"> Date de Rendez-vous : {{appointment.DateRV|date('d-m-Y')}}</p></li>
                            <li class=\"list-group-item\"> Service : {{appointment.service}}</p></li>
\t\t\t\t\t\t\t<li class=\"list-group-item\">Examen : {{appointment.examen}}</li>
                            <li class=\"list-group-item\">Type Examen : {{appointment.typeExamen}}</li>
                            <li class=\"list-group-item\">Presripteur : {{appointment.prescripteur}}</li>
                            <li class=\"list-group-item\">Heure de rendez-vous : {{appointment.heure}}</li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t\t<div class=\"text-center\">
\t\t\t\t\t\t    <a href=\"{{path('edit_appointment',{'id': appointment.id})}}\" class=\"btn btn-success\">
\t\t\t\t\t\t\t <i class=\"fas fa-edit\"></i>
\t\t\t\t\t\t    </a>
\t\t\t\t\t\t    <a href=\"{{path('delete_appointment',{'id': appointment.id})}}\" class=\"btn btn-danger\">
\t\t\t\t\t\t\t <i class=\"fas fa-trash\"></i>
\t\t\t\t\t\t    </a>\t\t\t
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t </div>
            {% endfor %}
\t\t</div>
\t</section>
{% endblock %}
", "home/view.html.twig", "/Applications/XAMPP/xamppfiles/htdocs/medis/templates/home/view.html.twig");
    }
}

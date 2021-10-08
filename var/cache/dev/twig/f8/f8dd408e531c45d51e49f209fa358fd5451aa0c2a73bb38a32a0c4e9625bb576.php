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

/* admin_patient/view.html.twig */
class __TwigTemplate_3ac6a8a2b5f5f286867c5eb6711b4dd94cad24c2d4d6573ad208166318dafaf3 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin_patient/view.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin_patient/view.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "admin_patient/view.html.twig", 1);
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
<!-- ======= Hero Section ======= -->
<section id=\"hero\">
\t<div id=\"heroCarousel\" data-bs-interval=\"5000\" class=\"carousel slide carousel-fade\" data-bs-ride=\"carousel\">

\t\t<ol class=\"carousel-indicators\" id=\"hero-carousel-indicators\"></ol>

\t\t<div
\t\t\tclass=\"carousel-inner\" role=\"listbox\">

\t\t\t<!-- Slide 1 -->
\t\t\t<div class=\"carousel-item active\" style=\"background-image: url(assets/img/slide/irm1.jpg)\">
\t\t\t\t<div class=\"container\">
\t\t\t\t\t<h1>CIDIS</h1>
\t\t\t\t\t<h3 style=\"color: black;\">Centre D'imagerie Diagnostique et Interventionnelle De Soumbedioune</h3>
\t\t\t\t\t<a href=\"#about\" class=\"btn-get-started scrollto\">Information</a>
\t\t\t\t</div>
\t\t\t</div>

\t\t\t<!-- Slide 2 -->
\t\t\t<div class=\"carousel-item\" style=\"background-image: url(assets/img/slide/slide-2.jpg)\">
\t\t\t\t<div class=\"container\">
\t\t\t\t\t<h1>CIDIS</h1>
\t\t\t\t\t<h3 style=\"color: black;\">Centre D'imagerie Diagnostique et Interventionnelle De Soumbedioune</h3>
\t\t\t\t\t<a href=\"#about\" class=\"btn-get-started scrollto\">Information</a>
\t\t\t\t</div>
\t\t\t</div>

\t\t\t<!-- Slide 3 -->
\t\t\t<div class=\"carousel-item\" style=\"background-image: url(assets/img/slide/slide-3.jpg)\">
\t\t\t\t<div class=\"container\">
\t\t\t\t\t<h1>CIDIS</h1>
\t\t\t\t\t<h3 style=\"color: black;\">Centre D'imagerie Diagnostique et Interventionnelle De Soumbedioune</h3>
\t\t\t\t\t<a href=\"#about\" class=\"btn-get-started scrollto\">Information</a>
\t\t\t\t</div>
\t\t\t</div>

\t\t</div>

\t\t<a class=\"carousel-control-prev\" href=\"#heroCarousel\" role=\"button\" data-bs-slide=\"prev\">
\t\t\t<span class=\"carousel-control-prev-icon bi bi-chevron-left\" aria-hidden=\"true\"></span>
\t\t</a>

\t\t<a class=\"carousel-control-next\" href=\"#heroCarousel\" role=\"button\" data-bs-slide=\"next\">
\t\t\t<span class=\"carousel-control-next-icon bi bi-chevron-right\" aria-hidden=\"true\"></span>
\t\t</a>

\t</div>
</section>
<!-- End Hero -->

<!-- ========= View patient -->
<section class=\"container\">
\t<div class=\"card text-center\">
\t\t<div class=\"card-header\">
\t\t\tFeatured
\t\t</div>
\t\t<div class=\"card-body\">
\t\t\t<h3 class=\"card-title\">Information Patient</h3>
\t\t\t<p class=\"card-text\">With supporting text below as a natural lead-in to additional content.</p>
\t\t\t<ul class=\"list-group list-group-flush\">
\t\t\t\t<li class=\"list-group-item\">Prénom :";
        // line 68
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["patient"]) || array_key_exists("patient", $context) ? $context["patient"] : (function () { throw new RuntimeError('Variable "patient" does not exist.', 68, $this->source); })()), "prenom", [], "any", false, false, false, 68), "html", null, true);
        echo "
\t\t\t\t</li>
\t\t\t</p>
\t\t</li>
\t\t<li class=\"list-group-item\">Nom :
\t\t\t";
        // line 73
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["patient"]) || array_key_exists("patient", $context) ? $context["patient"] : (function () { throw new RuntimeError('Variable "patient" does not exist.', 73, $this->source); })()), "nom", [], "any", false, false, false, 73), "html", null, true);
        echo "</li>
\t\t<li class=\"list-group-item\">Adresse :
\t\t\t";
        // line 75
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["patient"]) || array_key_exists("patient", $context) ? $context["patient"] : (function () { throw new RuntimeError('Variable "patient" does not exist.', 75, $this->source); })()), "adresse", [], "any", false, false, false, 75), "html", null, true);
        echo "</li>
\t\t<li class=\"list-group-item\">Date de Naissance :
\t\t\t";
        // line 77
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["patient"]) || array_key_exists("patient", $context) ? $context["patient"] : (function () { throw new RuntimeError('Variable "patient" does not exist.', 77, $this->source); })()), "naissance", [], "any", false, false, false, 77), "d-m-Y"), "html", null, true);
        echo "</li>
\t\t<li class=\"list-group-item\">Email :
\t\t\t";
        // line 79
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["patient"]) || array_key_exists("patient", $context) ? $context["patient"] : (function () { throw new RuntimeError('Variable "patient" does not exist.', 79, $this->source); })()), "email", [], "any", false, false, false, 79), "html", null, true);
        echo "</li>
\t\t<li class=\"list-group-item\">Téléphone :
\t\t\t";
        // line 81
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["patient"]) || array_key_exists("patient", $context) ? $context["patient"] : (function () { throw new RuntimeError('Variable "patient" does not exist.', 81, $this->source); })()), "telephone", [], "any", false, false, false, 81), "html", null, true);
        echo "</li>
\t</ul>
</div>
<div class=\"card-footer text-muted\"></div></div></section><h2 class=\"text-center\">Rendez-vous Effectués</h2><section class=\"container\"><div class=\"row\">
";
        // line 85
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["patient"]) || array_key_exists("patient", $context) ? $context["patient"] : (function () { throw new RuntimeError('Variable "patient" does not exist.', 85, $this->source); })()), "appointment", [], "any", false, false, false, 85));
        foreach ($context['_seq'] as $context["_key"] => $context["appointment"]) {
            // line 86
            echo "
\t<div class=\"col-sm-6 mb-4\">
\t\t<div class=\"card\">
\t\t\t<div class=\"card-body\">
\t\t\t\t<h3 class=\"card-title text-center\">Détail Rendez-vous
\t\t\t\t\t";
            // line 91
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["appointment"], "id", [], "any", false, false, false, 91), "html", null, true);
            echo "
\t\t\t\t</h3>
\t\t\t\t<p class=\"card-text\">With supporting text below as a natural lead-in to additional content.</p>
\t\t\t\t<ul class=\"list-group list-group-flush\">
\t\t\t\t\t<li class=\"list-group-item\">
\t\t\t\t\t\tDate de Rendez-vous :";
            // line 96
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["appointment"], "DateRV", [], "any", false, false, false, 96), "d-m-Y"), "html", null, true);
            echo "
\t\t\t\t\t</li>
\t\t\t\t</p>
\t\t\t</li>
\t\t\t<li class=\"list-group-item\">
\t\t\t\tService :";
            // line 101
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["appointment"], "service", [], "any", false, false, false, 101), "html", null, true);
            echo "
\t\t\t</li>
\t\t</p>
\t</li>
\t<li class=\"list-group-item\">Examen :
\t\t";
            // line 106
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["appointment"], "examen", [], "any", false, false, false, 106), "html", null, true);
            echo "</li>
\t<li class=\"list-group-item\">Type Examen :
\t\t";
            // line 108
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["appointment"], "typeExamen", [], "any", false, false, false, 108), "html", null, true);
            echo "</li>
\t<li class=\"list-group-item\">Presripteur :
\t\t";
            // line 110
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["appointment"], "prescripteur", [], "any", false, false, false, 110), "html", null, true);
            echo "</li>
\t<li class=\"list-group-item\">Heure de rendez-vous :
\t\t";
            // line 112
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["appointment"], "heure", [], "any", false, false, false, 112), "html", null, true);
            echo "</li>
</ul>
<div class=\"text-center\">
\t<a href=\"";
            // line 115
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("edit_appointment", ["id" => twig_get_attribute($this->env, $this->source, $context["appointment"], "id", [], "any", false, false, false, 115)]), "html", null, true);
            echo "\" class=\"btn btn-success\">
\t\t<i class=\"fas fa-edit\"></i>
\t</a>
\t<a href=\"";
            // line 118
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("delete_appointment", ["id" => twig_get_attribute($this->env, $this->source, $context["appointment"], "id", [], "any", false, false, false, 118)]), "html", null, true);
            echo "\" class=\"btn btn-danger\">
\t\t<i class=\"fas fa-trash\"></i>
\t</a>
</div></div></div></div>";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['appointment'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 121
        echo "</div></section>";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "admin_patient/view.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  259 => 121,  249 => 118,  243 => 115,  237 => 112,  232 => 110,  227 => 108,  222 => 106,  214 => 101,  206 => 96,  198 => 91,  191 => 86,  187 => 85,  180 => 81,  175 => 79,  170 => 77,  165 => 75,  160 => 73,  152 => 68,  89 => 7,  79 => 6,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}View
{% endblock %}

{% block body %}

<!-- ======= Hero Section ======= -->
<section id=\"hero\">
\t<div id=\"heroCarousel\" data-bs-interval=\"5000\" class=\"carousel slide carousel-fade\" data-bs-ride=\"carousel\">

\t\t<ol class=\"carousel-indicators\" id=\"hero-carousel-indicators\"></ol>

\t\t<div
\t\t\tclass=\"carousel-inner\" role=\"listbox\">

\t\t\t<!-- Slide 1 -->
\t\t\t<div class=\"carousel-item active\" style=\"background-image: url(assets/img/slide/irm1.jpg)\">
\t\t\t\t<div class=\"container\">
\t\t\t\t\t<h1>CIDIS</h1>
\t\t\t\t\t<h3 style=\"color: black;\">Centre D'imagerie Diagnostique et Interventionnelle De Soumbedioune</h3>
\t\t\t\t\t<a href=\"#about\" class=\"btn-get-started scrollto\">Information</a>
\t\t\t\t</div>
\t\t\t</div>

\t\t\t<!-- Slide 2 -->
\t\t\t<div class=\"carousel-item\" style=\"background-image: url(assets/img/slide/slide-2.jpg)\">
\t\t\t\t<div class=\"container\">
\t\t\t\t\t<h1>CIDIS</h1>
\t\t\t\t\t<h3 style=\"color: black;\">Centre D'imagerie Diagnostique et Interventionnelle De Soumbedioune</h3>
\t\t\t\t\t<a href=\"#about\" class=\"btn-get-started scrollto\">Information</a>
\t\t\t\t</div>
\t\t\t</div>

\t\t\t<!-- Slide 3 -->
\t\t\t<div class=\"carousel-item\" style=\"background-image: url(assets/img/slide/slide-3.jpg)\">
\t\t\t\t<div class=\"container\">
\t\t\t\t\t<h1>CIDIS</h1>
\t\t\t\t\t<h3 style=\"color: black;\">Centre D'imagerie Diagnostique et Interventionnelle De Soumbedioune</h3>
\t\t\t\t\t<a href=\"#about\" class=\"btn-get-started scrollto\">Information</a>
\t\t\t\t</div>
\t\t\t</div>

\t\t</div>

\t\t<a class=\"carousel-control-prev\" href=\"#heroCarousel\" role=\"button\" data-bs-slide=\"prev\">
\t\t\t<span class=\"carousel-control-prev-icon bi bi-chevron-left\" aria-hidden=\"true\"></span>
\t\t</a>

\t\t<a class=\"carousel-control-next\" href=\"#heroCarousel\" role=\"button\" data-bs-slide=\"next\">
\t\t\t<span class=\"carousel-control-next-icon bi bi-chevron-right\" aria-hidden=\"true\"></span>
\t\t</a>

\t</div>
</section>
<!-- End Hero -->

<!-- ========= View patient -->
<section class=\"container\">
\t<div class=\"card text-center\">
\t\t<div class=\"card-header\">
\t\t\tFeatured
\t\t</div>
\t\t<div class=\"card-body\">
\t\t\t<h3 class=\"card-title\">Information Patient</h3>
\t\t\t<p class=\"card-text\">With supporting text below as a natural lead-in to additional content.</p>
\t\t\t<ul class=\"list-group list-group-flush\">
\t\t\t\t<li class=\"list-group-item\">Prénom :{{patient.prenom}}
\t\t\t\t</li>
\t\t\t</p>
\t\t</li>
\t\t<li class=\"list-group-item\">Nom :
\t\t\t{{patient.nom}}</li>
\t\t<li class=\"list-group-item\">Adresse :
\t\t\t{{patient.adresse}}</li>
\t\t<li class=\"list-group-item\">Date de Naissance :
\t\t\t{{patient.naissance|date('d-m-Y')}}</li>
\t\t<li class=\"list-group-item\">Email :
\t\t\t{{patient.email}}</li>
\t\t<li class=\"list-group-item\">Téléphone :
\t\t\t{{patient.telephone}}</li>
\t</ul>
</div>
<div class=\"card-footer text-muted\"></div></div></section><h2 class=\"text-center\">Rendez-vous Effectués</h2><section class=\"container\"><div class=\"row\">
{% for appointment in patient.appointment %}

\t<div class=\"col-sm-6 mb-4\">
\t\t<div class=\"card\">
\t\t\t<div class=\"card-body\">
\t\t\t\t<h3 class=\"card-title text-center\">Détail Rendez-vous
\t\t\t\t\t{{appointment.id}}
\t\t\t\t</h3>
\t\t\t\t<p class=\"card-text\">With supporting text below as a natural lead-in to additional content.</p>
\t\t\t\t<ul class=\"list-group list-group-flush\">
\t\t\t\t\t<li class=\"list-group-item\">
\t\t\t\t\t\tDate de Rendez-vous :{{appointment.DateRV|date('d-m-Y')}}
\t\t\t\t\t</li>
\t\t\t\t</p>
\t\t\t</li>
\t\t\t<li class=\"list-group-item\">
\t\t\t\tService :{{appointment.service}}
\t\t\t</li>
\t\t</p>
\t</li>
\t<li class=\"list-group-item\">Examen :
\t\t{{appointment.examen}}</li>
\t<li class=\"list-group-item\">Type Examen :
\t\t{{appointment.typeExamen}}</li>
\t<li class=\"list-group-item\">Presripteur :
\t\t{{appointment.prescripteur}}</li>
\t<li class=\"list-group-item\">Heure de rendez-vous :
\t\t{{appointment.heure}}</li>
</ul>
<div class=\"text-center\">
\t<a href=\"{{path('edit_appointment',{'id': appointment.id})}}\" class=\"btn btn-success\">
\t\t<i class=\"fas fa-edit\"></i>
\t</a>
\t<a href=\"{{path('delete_appointment',{'id': appointment.id})}}\" class=\"btn btn-danger\">
\t\t<i class=\"fas fa-trash\"></i>
\t</a>
</div></div></div></div>{% endfor %}</div></section>{% endblock %}
", "admin_patient/view.html.twig", "/Applications/XAMPP/xamppfiles/htdocs/medis/templates/admin_patient/view.html.twig");
    }
}

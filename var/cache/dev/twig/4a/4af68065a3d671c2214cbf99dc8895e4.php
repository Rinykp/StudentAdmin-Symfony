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

/* dashboard/index.html.twig */
class __TwigTemplate_1ed9a8e74c15d7336833d7da26fdfd96 extends Template
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
            'content' => [$this, 'block_content'],
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "dashboard/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "dashboard/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "dashboard/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Hello DashboardController!";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "<style>
    .example-wrapper { margin: 1em auto; max-width: 800px; width: 95%; font: 18px/1.5 sans-serif; }
    .example-wrapper code { background: #F5F5F5; padding: 2px 6px; }
</style>
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css\">
    <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js\"></script>
    <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js\"></script>
    <style>
        /* Set height of the grid so .sidenav can be 100% (adjust as needed) */
        .row.content {height: 550px}

        /* Set gray background color and 100% height */
        .sidenav {
            background-color: #f1f1f1;
            height: 100%;
        }

        /* On small screens, set height to 'auto' for the grid */
        @media screen and (max-width: 767px) {
            .row.content {height: auto;}
        }
    </style>
    <nav class=\"navbar navbar-inverse visible-xs\">
        <div class=\"container-fluid\">
            <div class=\"navbar-header\">
                <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\"#myNavbar\">
                    <span class=\"icon-bar\"></span>
                    <span class=\"icon-bar\"></span>
                    <span class=\"icon-bar\"></span>
                </button>
                <a class=\"navbar-brand\" href=\"#\">Hello</a>
            </div>
            <div class=\"collapse navbar-collapse\" id=\"myNavbar\">
                <ul class=\"nav navbar-nav\">
                    <li class=\"active\"><a href=\"";
        // line 42
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_dashboard");
        echo "\">Dashboard</a></li>
                    <li><a href=\"";
        // line 43
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_school_class_index");
        echo "\">Class</a></li>
                    <li><a href=\"";
        // line 44
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_division_index");
        echo "\">Division</a></li>
                    <li><a href=\"";
        // line 45
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_student_index");
        echo "\">Student</a></li>
                    <li><a href=\"";
        // line 46
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_parents_index");
        echo "\">Parents</a></li>
                    <li><a href=\"";
        // line 47
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_subject_index");
        echo "\">Subject</a></li>
                    <li><a href=\"";
        // line 48
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_teacher_index");
        echo "\">Teacher</a></li>
                    <li><a href=\"";
        // line 49
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_time_table_index");
        echo "\">Time Table</a></li>
                    <li><a href=\"";
        // line 50
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_marks_index");
        echo "\">Marks</a></li>
                    <li><a href=\"";
        // line 51
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
        echo "\">Logout</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <div class=\"container-fluid\">
        <div class=\"row content\">
            <div class=\"col-sm-3 sidenav hidden-xs\">

                <h2>Hello</h2>
                <h4>";
        // line 62
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 62, $this->source); })()), "user", [], "any", false, false, false, 62), "userIdentifier", [], "any", false, false, false, 62), "html", null, true);
        echo "</h4>
                <ul class=\"nav nav-pills nav-stacked\">
                    <li class=\"active\"><a href=\"";
        // line 64
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_dashboard");
        echo "\">Dashboard</a></li>
                    <li><a href=\"";
        // line 65
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_school_class_index");
        echo "\">Class</a></li>
                    <li><a href=\"";
        // line 66
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_division_index");
        echo "\">Division</a></li>
                    <li><a href=\"";
        // line 67
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_student_index");
        echo "\">Student</a></li>
                    <li><a href=\"";
        // line 68
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_parents_index");
        echo "\">Parents</a></li>
                    <li><a href=\"";
        // line 69
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_subject_index");
        echo "\">Subject</a></li>
                    <li><a href=\"";
        // line 70
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_teacher_index");
        echo "\">Teacher</a></li>
                    <li><a href=\"";
        // line 71
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_time_table_index");
        echo "\">Time Table</a></li>
                    <li><a href=\"";
        // line 72
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_marks_index");
        echo "\">Marks</a></li>
                    <li><a href=\"";
        // line 73
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_progress");
        echo "\">Progress Report</a></li>
                    <li><a href=\"";
        // line 74
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
        echo "\">Logout</a></li>
                </ul><br>
            </div>
            <br>

            ";
        // line 79
        $this->displayBlock('content', $context, $blocks);
        // line 81
        echo "
        </div>
    </div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 79
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 80
        echo "            ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "dashboard/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  255 => 80,  245 => 79,  232 => 81,  230 => 79,  222 => 74,  218 => 73,  214 => 72,  210 => 71,  206 => 70,  202 => 69,  198 => 68,  194 => 67,  190 => 66,  186 => 65,  182 => 64,  177 => 62,  163 => 51,  159 => 50,  155 => 49,  151 => 48,  147 => 47,  143 => 46,  139 => 45,  135 => 44,  131 => 43,  127 => 42,  89 => 6,  79 => 5,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Hello DashboardController!{% endblock %}

{% block body %}
<style>
    .example-wrapper { margin: 1em auto; max-width: 800px; width: 95%; font: 18px/1.5 sans-serif; }
    .example-wrapper code { background: #F5F5F5; padding: 2px 6px; }
</style>
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css\">
    <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js\"></script>
    <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js\"></script>
    <style>
        /* Set height of the grid so .sidenav can be 100% (adjust as needed) */
        .row.content {height: 550px}

        /* Set gray background color and 100% height */
        .sidenav {
            background-color: #f1f1f1;
            height: 100%;
        }

        /* On small screens, set height to 'auto' for the grid */
        @media screen and (max-width: 767px) {
            .row.content {height: auto;}
        }
    </style>
    <nav class=\"navbar navbar-inverse visible-xs\">
        <div class=\"container-fluid\">
            <div class=\"navbar-header\">
                <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\"#myNavbar\">
                    <span class=\"icon-bar\"></span>
                    <span class=\"icon-bar\"></span>
                    <span class=\"icon-bar\"></span>
                </button>
                <a class=\"navbar-brand\" href=\"#\">Hello</a>
            </div>
            <div class=\"collapse navbar-collapse\" id=\"myNavbar\">
                <ul class=\"nav navbar-nav\">
                    <li class=\"active\"><a href=\"{{ path('app_dashboard') }}\">Dashboard</a></li>
                    <li><a href=\"{{ path('app_school_class_index') }}\">Class</a></li>
                    <li><a href=\"{{ path('app_division_index') }}\">Division</a></li>
                    <li><a href=\"{{ path('app_student_index') }}\">Student</a></li>
                    <li><a href=\"{{ path('app_parents_index') }}\">Parents</a></li>
                    <li><a href=\"{{ path('app_subject_index') }}\">Subject</a></li>
                    <li><a href=\"{{ path('app_teacher_index') }}\">Teacher</a></li>
                    <li><a href=\"{{ path('app_time_table_index') }}\">Time Table</a></li>
                    <li><a href=\"{{ path('app_marks_index') }}\">Marks</a></li>
                    <li><a href=\"{{ path('app_logout') }}\">Logout</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <div class=\"container-fluid\">
        <div class=\"row content\">
            <div class=\"col-sm-3 sidenav hidden-xs\">

                <h2>Hello</h2>
                <h4>{{ app.user.userIdentifier }}</h4>
                <ul class=\"nav nav-pills nav-stacked\">
                    <li class=\"active\"><a href=\"{{ path('app_dashboard') }}\">Dashboard</a></li>
                    <li><a href=\"{{ path('app_school_class_index') }}\">Class</a></li>
                    <li><a href=\"{{ path('app_division_index') }}\">Division</a></li>
                    <li><a href=\"{{ path('app_student_index') }}\">Student</a></li>
                    <li><a href=\"{{ path('app_parents_index') }}\">Parents</a></li>
                    <li><a href=\"{{ path('app_subject_index') }}\">Subject</a></li>
                    <li><a href=\"{{ path('app_teacher_index') }}\">Teacher</a></li>
                    <li><a href=\"{{ path('app_time_table_index') }}\">Time Table</a></li>
                    <li><a href=\"{{ path('app_marks_index') }}\">Marks</a></li>
                    <li><a href=\"{{ path('app_progress') }}\">Progress Report</a></li>
                    <li><a href=\"{{ path('app_logout') }}\">Logout</a></li>
                </ul><br>
            </div>
            <br>

            {% block content %}
            {% endblock %}

        </div>
    </div>
{% endblock %}
", "dashboard/index.html.twig", "/var/www/symfony_docker/symfony-6-login-register/templates/dashboard/index.html.twig");
    }
}

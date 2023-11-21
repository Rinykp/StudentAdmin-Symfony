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

/* teacher/show.html.twig */
class __TwigTemplate_ea77db1f873d072fc34e75402873f4bb extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "dashboard/index.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "teacher/show.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "teacher/show.html.twig"));

        $this->parent = $this->loadTemplate("dashboard/index.html.twig", "teacher/show.html.twig", 1);
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

        echo "Teacher";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 5
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 6
        echo "
<div class=\"col-sm-9\">    <h1>Teacher</h1>

    <table class=\"table\">
        <tbody>
            <tr>
                <th>Id</th>
                <td>";
        // line 13
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["teacher"]) || array_key_exists("teacher", $context) ? $context["teacher"] : (function () { throw new RuntimeError('Variable "teacher" does not exist.', 13, $this->source); })()), "id", [], "any", false, false, false, 13), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Name</th>
                <td>";
        // line 17
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["teacher"]) || array_key_exists("teacher", $context) ? $context["teacher"] : (function () { throw new RuntimeError('Variable "teacher" does not exist.', 17, $this->source); })()), "name", [], "any", false, false, false, 17), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Email</th>
                <td>";
        // line 21
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["teacher"]) || array_key_exists("teacher", $context) ? $context["teacher"] : (function () { throw new RuntimeError('Variable "teacher" does not exist.', 21, $this->source); })()), "email", [], "any", false, false, false, 21), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Subject</th>
                <td>";
        // line 25
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["teacher"]) || array_key_exists("teacher", $context) ? $context["teacher"] : (function () { throw new RuntimeError('Variable "teacher" does not exist.', 25, $this->source); })()), "subject", [], "any", false, false, false, 25), "html", null, true);
        echo "</td>
            </tr>
        </tbody>
    </table>

    <a class=\"btn btn-success\" href=\"";
        // line 30
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_teacher_index");
        echo "\">back to list</a>

    <a class=\"btn btn-warning\" href=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_teacher_edit", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["teacher"]) || array_key_exists("teacher", $context) ? $context["teacher"] : (function () { throw new RuntimeError('Variable "teacher" does not exist.', 32, $this->source); })()), "id", [], "any", false, false, false, 32)]), "html", null, true);
        echo "\">edit</a>

    ";
        // line 34
        echo twig_include($this->env, $context, "teacher/_delete_form.html.twig");
        echo "
</div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "teacher/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  136 => 34,  131 => 32,  126 => 30,  118 => 25,  111 => 21,  104 => 17,  97 => 13,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'dashboard/index.html.twig' %}

{% block title %}Teacher{% endblock %}

{% block content %}

<div class=\"col-sm-9\">    <h1>Teacher</h1>

    <table class=\"table\">
        <tbody>
            <tr>
                <th>Id</th>
                <td>{{ teacher.id }}</td>
            </tr>
            <tr>
                <th>Name</th>
                <td>{{ teacher.name }}</td>
            </tr>
            <tr>
                <th>Email</th>
                <td>{{ teacher.email }}</td>
            </tr>
            <tr>
                <th>Subject</th>
                <td>{{ teacher.subject }}</td>
            </tr>
        </tbody>
    </table>

    <a class=\"btn btn-success\" href=\"{{ path('app_teacher_index') }}\">back to list</a>

    <a class=\"btn btn-warning\" href=\"{{ path('app_teacher_edit', {'id': teacher.id}) }}\">edit</a>

    {{ include('teacher/_delete_form.html.twig') }}
</div>
{% endblock %}
", "teacher/show.html.twig", "/var/www/symfony_docker/symfony-6-login-register/templates/teacher/show.html.twig");
    }
}

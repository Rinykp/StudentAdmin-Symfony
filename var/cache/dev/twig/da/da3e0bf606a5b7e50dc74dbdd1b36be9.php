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

/* time_table/index.html.twig */
class __TwigTemplate_8363dd640a36374316b4156b30562cb6 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "time_table/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "time_table/index.html.twig"));

        $this->parent = $this->loadTemplate("dashboard/index.html.twig", "time_table/index.html.twig", 1);
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

        echo "TimeTable index";
        
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
<div class=\"col-sm-9\">    <h1>TimeTable index</h1>

    <table class=\"table\">
        <thead>
            <tr>
                <th>Id</th>
                <th>Section</th>
                <th>Week</th>
                <th>Time</th>
                <th>Subject</th>
                <th>Class</th>
                <th>Teacher</th>
                <th>actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 23
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["time_tables"]) || array_key_exists("time_tables", $context) ? $context["time_tables"] : (function () { throw new RuntimeError('Variable "time_tables" does not exist.', 23, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["time_table"]) {
            // line 24
            echo "            <tr>
                <td>";
            // line 25
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["time_table"], "id", [], "any", false, false, false, 25), "html", null, true);
            echo "</td>
                <td>";
            // line 26
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["time_table"], "section", [], "any", false, false, false, 26), "html", null, true);
            echo "</td>
                <td>";
            // line 27
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["time_table"], "week", [], "any", false, false, false, 27), "html", null, true);
            echo "</td>
                <td>";
            // line 28
            ((twig_get_attribute($this->env, $this->source, $context["time_table"], "time", [], "any", false, false, false, 28)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["time_table"], "time", [], "any", false, false, false, 28), "H:i:a"), "html", null, true))) : (print ("")));
            echo "</td>
                <td>";
            // line 29
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["time_table"], "subject", [], "any", false, false, false, 29));
            foreach ($context['_seq'] as $context["_key"] => $context["subject"]) {
                // line 30
                echo "                        <a class=\"btn btn-link\" href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_subject_show", ["id" => twig_get_attribute($this->env, $this->source, $context["subject"], "id", [], "any", false, false, false, 30)]), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["subject"], "name", [], "any", false, false, false, 30), "html", null, true);
                echo "</a>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['subject'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 32
            echo "                </td>
                <td>";
            // line 33
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["time_table"], "class", [], "any", false, false, false, 33));
            foreach ($context['_seq'] as $context["_key"] => $context["class"]) {
                // line 34
                echo "                        <a class=\"btn btn-link\" href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_school_class_show", ["id" => twig_get_attribute($this->env, $this->source, $context["class"], "id", [], "any", false, false, false, 34)]), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["class"], "name", [], "any", false, false, false, 34), "html", null, true);
                echo "</a>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['class'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 36
            echo "                </td>
                <td>
                    ";
            // line 38
            if (twig_get_attribute($this->env, $this->source, $context["time_table"], "assignedBy", [], "any", false, false, false, 38)) {
                // line 39
                echo "                    <a class=\"btn btn-link\" href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_teacher_show", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["time_table"], "assignedBy", [], "any", false, false, false, 39), "id", [], "any", false, false, false, 39)]), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["time_table"], "assignedBy", [], "any", false, false, false, 39), "name", [], "any", false, false, false, 39), "html", null, true);
                echo "</a>
                        <a class=\"\" href=\"";
                // line 40
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_time_table_assign", ["id" => twig_get_attribute($this->env, $this->source, $context["time_table"], "id", [], "any", false, false, false, 40)]), "html", null, true);
                echo "\"><span class=\"badge badge-danger\"> Change teacher</span></a>
                    ";
            } else {
                // line 42
                echo "                        <a class=\"btn btn-info\" href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_time_table_assign", ["id" => twig_get_attribute($this->env, $this->source, $context["time_table"], "id", [], "any", false, false, false, 42)]), "html", null, true);
                echo "\">Assign</a>

                    ";
            }
            // line 45
            echo "
                </td>
                <td>
                    <a class=\"btn btn-success\" href=\"";
            // line 48
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_time_table_show", ["id" => twig_get_attribute($this->env, $this->source, $context["time_table"], "id", [], "any", false, false, false, 48)]), "html", null, true);
            echo "\">show</a>
                    <a class=\"btn btn-warning\" href=\"";
            // line 49
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_time_table_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["time_table"], "id", [], "any", false, false, false, 49)]), "html", null, true);
            echo "\">edit</a>
                </td>
            </tr>
        ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 53
            echo "            <tr>
                <td colspan=\"5\">no records found</td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['time_table'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 57
        echo "        </tbody>
    </table>
    <a class=\"btn btn-primary\" href=\"";
        // line 59
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_time_table_new");
        echo "\">Create new</a>
</div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "time_table/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  220 => 59,  216 => 57,  207 => 53,  198 => 49,  194 => 48,  189 => 45,  182 => 42,  177 => 40,  170 => 39,  168 => 38,  164 => 36,  153 => 34,  149 => 33,  146 => 32,  135 => 30,  131 => 29,  127 => 28,  123 => 27,  119 => 26,  115 => 25,  112 => 24,  107 => 23,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'dashboard/index.html.twig' %}

{% block title %}TimeTable index{% endblock %}

{% block content %}

<div class=\"col-sm-9\">    <h1>TimeTable index</h1>

    <table class=\"table\">
        <thead>
            <tr>
                <th>Id</th>
                <th>Section</th>
                <th>Week</th>
                <th>Time</th>
                <th>Subject</th>
                <th>Class</th>
                <th>Teacher</th>
                <th>actions</th>
            </tr>
        </thead>
        <tbody>
        {% for time_table in time_tables %}
            <tr>
                <td>{{ time_table.id }}</td>
                <td>{{ time_table.section }}</td>
                <td>{{ time_table.week }}</td>
                <td>{{ time_table.time ? time_table.time|date('H:i:a') : '' }}</td>
                <td>{% for subject in time_table.subject %}
                        <a class=\"btn btn-link\" href=\"{{ path('app_subject_show', {'id': subject.id}) }}\">{{  subject.name }}</a>
                    {% endfor %}
                </td>
                <td>{% for class in time_table.class %}
                        <a class=\"btn btn-link\" href=\"{{ path('app_school_class_show', {'id': class.id}) }}\">{{  class.name }}</a>
                    {% endfor %}
                </td>
                <td>
                    {% if(time_table.assignedBy) %}
                    <a class=\"btn btn-link\" href=\"{{ path('app_teacher_show', {'id': time_table.assignedBy.id}) }}\">{{  time_table.assignedBy.name }}</a>
                        <a class=\"\" href=\"{{ path('app_time_table_assign', {'id': time_table.id}) }}\"><span class=\"badge badge-danger\"> Change teacher</span></a>
                    {% else %}
                        <a class=\"btn btn-info\" href=\"{{ path('app_time_table_assign', {'id': time_table.id}) }}\">Assign</a>

                    {% endif %}

                </td>
                <td>
                    <a class=\"btn btn-success\" href=\"{{ path('app_time_table_show', {'id': time_table.id}) }}\">show</a>
                    <a class=\"btn btn-warning\" href=\"{{ path('app_time_table_edit', {'id': time_table.id}) }}\">edit</a>
                </td>
            </tr>
        {% else %}
            <tr>
                <td colspan=\"5\">no records found</td>
            </tr>
        {% endfor %}
        </tbody>
    </table>
    <a class=\"btn btn-primary\" href=\"{{ path('app_time_table_new') }}\">Create new</a>
</div>
{% endblock %}
", "time_table/index.html.twig", "/var/www/symfony_docker/symfony-6-login-register/templates/time_table/index.html.twig");
    }
}

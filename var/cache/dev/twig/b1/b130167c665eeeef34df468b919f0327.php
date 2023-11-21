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

/* time_table/show.html.twig */
class __TwigTemplate_7daa18e33e69b3abc488cc8a86e9c42a extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "time_table/show.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "time_table/show.html.twig"));

        $this->parent = $this->loadTemplate("dashboard/index.html.twig", "time_table/show.html.twig", 1);
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

        echo "TimeTable";
        
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
<div class=\"col-sm-9\">    <h1>TimeTable</h1>


    <table class=\"table\">
        <tbody>
            <tr>
                <th>Id</th>
                <td>";
        // line 14
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["time_table"]) || array_key_exists("time_table", $context) ? $context["time_table"] : (function () { throw new RuntimeError('Variable "time_table" does not exist.', 14, $this->source); })()), "id", [], "any", false, false, false, 14), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Section</th>
                <td>";
        // line 18
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["time_table"]) || array_key_exists("time_table", $context) ? $context["time_table"] : (function () { throw new RuntimeError('Variable "time_table" does not exist.', 18, $this->source); })()), "section", [], "any", false, false, false, 18), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Week</th>
                <td>";
        // line 22
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["time_table"]) || array_key_exists("time_table", $context) ? $context["time_table"] : (function () { throw new RuntimeError('Variable "time_table" does not exist.', 22, $this->source); })()), "week", [], "any", false, false, false, 22), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Time</th>
                <td>";
        // line 26
        ((twig_get_attribute($this->env, $this->source, (isset($context["time_table"]) || array_key_exists("time_table", $context) ? $context["time_table"] : (function () { throw new RuntimeError('Variable "time_table" does not exist.', 26, $this->source); })()), "time", [], "any", false, false, false, 26)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["time_table"]) || array_key_exists("time_table", $context) ? $context["time_table"] : (function () { throw new RuntimeError('Variable "time_table" does not exist.', 26, $this->source); })()), "time", [], "any", false, false, false, 26), "H:i:a"), "html", null, true))) : (print ("")));
        echo "</td>
            </tr>
            <tr>
                <th>AssignedBy</th>
                <td>
                    <a class=\"btn btn-link\" href=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_teacher_show", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["time_table"]) || array_key_exists("time_table", $context) ? $context["time_table"] : (function () { throw new RuntimeError('Variable "time_table" does not exist.', 31, $this->source); })()), "assignedBy", [], "any", false, false, false, 31), "id", [], "any", false, false, false, 31)]), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["time_table"]) || array_key_exists("time_table", $context) ? $context["time_table"] : (function () { throw new RuntimeError('Variable "time_table" does not exist.', 31, $this->source); })()), "assignedBy", [], "any", false, false, false, 31), "name", [], "any", false, false, false, 31), "html", null, true);
        echo "</a>
                </td>
            </tr>
            <tr>
                <th>Subject</th>
                <td>";
        // line 36
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["time_table"]) || array_key_exists("time_table", $context) ? $context["time_table"] : (function () { throw new RuntimeError('Variable "time_table" does not exist.', 36, $this->source); })()), "subject", [], "any", false, false, false, 36));
        foreach ($context['_seq'] as $context["_key"] => $context["subject"]) {
            // line 37
            echo "                        <a class=\"btn btn-link\" href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_subject_show", ["id" => twig_get_attribute($this->env, $this->source, $context["subject"], "id", [], "any", false, false, false, 37)]), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["subject"], "name", [], "any", false, false, false, 37), "html", null, true);
            echo "</a>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['subject'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 39
        echo "                </td>
            </tr>
            <tr>
                <th>Class</th>
                <td>";
        // line 43
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["time_table"]) || array_key_exists("time_table", $context) ? $context["time_table"] : (function () { throw new RuntimeError('Variable "time_table" does not exist.', 43, $this->source); })()), "class", [], "any", false, false, false, 43));
        foreach ($context['_seq'] as $context["_key"] => $context["class"]) {
            // line 44
            echo "                        <a class=\"btn btn-link\" href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_school_class_show", ["id" => twig_get_attribute($this->env, $this->source, $context["class"], "id", [], "any", false, false, false, 44)]), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["class"], "name", [], "any", false, false, false, 44), "html", null, true);
            echo "</a>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['class'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 46
        echo "                </td>
            </tr>
        </tbody>
    </table>

    <a class=\"btn btn-success\" href=\"";
        // line 51
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_time_table_index");
        echo "\">back to list</a>

    <a class=\"btn btn-warning\" href=\"";
        // line 53
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_time_table_edit", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["time_table"]) || array_key_exists("time_table", $context) ? $context["time_table"] : (function () { throw new RuntimeError('Variable "time_table" does not exist.', 53, $this->source); })()), "id", [], "any", false, false, false, 53)]), "html", null, true);
        echo "\">edit</a>

    ";
        // line 55
        echo twig_include($this->env, $context, "time_table/_delete_form.html.twig");
        echo "
</div>
</div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "time_table/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  190 => 55,  185 => 53,  180 => 51,  173 => 46,  162 => 44,  158 => 43,  152 => 39,  141 => 37,  137 => 36,  127 => 31,  119 => 26,  112 => 22,  105 => 18,  98 => 14,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'dashboard/index.html.twig' %}

{% block title %}TimeTable{% endblock %}

{% block content %}

<div class=\"col-sm-9\">    <h1>TimeTable</h1>


    <table class=\"table\">
        <tbody>
            <tr>
                <th>Id</th>
                <td>{{ time_table.id }}</td>
            </tr>
            <tr>
                <th>Section</th>
                <td>{{ time_table.section }}</td>
            </tr>
            <tr>
                <th>Week</th>
                <td>{{ time_table.week }}</td>
            </tr>
            <tr>
                <th>Time</th>
                <td>{{ time_table.time ? time_table.time|date('H:i:a') : '' }}</td>
            </tr>
            <tr>
                <th>AssignedBy</th>
                <td>
                    <a class=\"btn btn-link\" href=\"{{ path('app_teacher_show', {'id': time_table.assignedBy.id}) }}\">{{  time_table.assignedBy.name }}</a>
                </td>
            </tr>
            <tr>
                <th>Subject</th>
                <td>{% for subject in time_table.subject %}
                        <a class=\"btn btn-link\" href=\"{{ path('app_subject_show', {'id': subject.id}) }}\">{{  subject.name }}</a>
                    {% endfor %}
                </td>
            </tr>
            <tr>
                <th>Class</th>
                <td>{% for class in time_table.class %}
                        <a class=\"btn btn-link\" href=\"{{ path('app_school_class_show', {'id': class.id}) }}\">{{  class.name }}</a>
                    {% endfor %}
                </td>
            </tr>
        </tbody>
    </table>

    <a class=\"btn btn-success\" href=\"{{ path('app_time_table_index') }}\">back to list</a>

    <a class=\"btn btn-warning\" href=\"{{ path('app_time_table_edit', {'id': time_table.id}) }}\">edit</a>

    {{ include('time_table/_delete_form.html.twig') }}
</div>
</div>
{% endblock %}
", "time_table/show.html.twig", "/var/www/symfony_docker/symfony-6-login-register/templates/time_table/show.html.twig");
    }
}

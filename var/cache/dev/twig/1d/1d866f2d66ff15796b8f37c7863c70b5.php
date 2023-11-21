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

/* parents/show.html.twig */
class __TwigTemplate_8cc90c23c980a58767f8eb92762e68e2 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "parents/show.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "parents/show.html.twig"));

        $this->parent = $this->loadTemplate("dashboard/index.html.twig", "parents/show.html.twig", 1);
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

        echo "Parents";
        
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
<div class=\"col-sm-9\">
    <h1>Parents</h1>

    <table class=\"table\">
        <tbody>
            <tr>
                <th>Id</th>
                <td>";
        // line 14
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["parent"]) || array_key_exists("parent", $context) ? $context["parent"] : (function () { throw new RuntimeError('Variable "parent" does not exist.', 14, $this->source); })()), "id", [], "any", false, false, false, 14), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Name</th>
                <td>";
        // line 18
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["parent"]) || array_key_exists("parent", $context) ? $context["parent"] : (function () { throw new RuntimeError('Variable "parent" does not exist.', 18, $this->source); })()), "name", [], "any", false, false, false, 18), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Adress</th>
                <td>";
        // line 22
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["parent"]) || array_key_exists("parent", $context) ? $context["parent"] : (function () { throw new RuntimeError('Variable "parent" does not exist.', 22, $this->source); })()), "adress", [], "any", false, false, false, 22), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Email</th>
                <td>";
        // line 26
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["parent"]) || array_key_exists("parent", $context) ? $context["parent"] : (function () { throw new RuntimeError('Variable "parent" does not exist.', 26, $this->source); })()), "email", [], "any", false, false, false, 26), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Phone</th>
                <td>";
        // line 30
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["parent"]) || array_key_exists("parent", $context) ? $context["parent"] : (function () { throw new RuntimeError('Variable "parent" does not exist.', 30, $this->source); })()), "phone", [], "any", false, false, false, 30), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Student</th>
                <td>";
        // line 34
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["parent"]) || array_key_exists("parent", $context) ? $context["parent"] : (function () { throw new RuntimeError('Variable "parent" does not exist.', 34, $this->source); })()), "student", [], "any", false, false, false, 34));
        foreach ($context['_seq'] as $context["_key"] => $context["student"]) {
            // line 35
            echo "                        <a class=\"btn btn-link\" href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_student_show", ["id" => twig_get_attribute($this->env, $this->source, $context["student"], "id", [], "any", false, false, false, 35)]), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["student"], "name", [], "any", false, false, false, 35), "html", null, true);
            echo "</a>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['student'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 37
        echo "                </td>

            </tr>
        </tbody>
    </table>

    <a class=\"btn btn-success\" href=\"";
        // line 43
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_parents_index");
        echo "\">back to list</a>

    <a class=\"btn btn-warning\"  href=\"";
        // line 45
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_parents_edit", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["parent"]) || array_key_exists("parent", $context) ? $context["parent"] : (function () { throw new RuntimeError('Variable "parent" does not exist.', 45, $this->source); })()), "id", [], "any", false, false, false, 45)]), "html", null, true);
        echo "\">edit</a>

    ";
        // line 47
        echo twig_include($this->env, $context, "parents/_delete_form.html.twig");
        echo "
</div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "parents/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  166 => 47,  161 => 45,  156 => 43,  148 => 37,  137 => 35,  133 => 34,  126 => 30,  119 => 26,  112 => 22,  105 => 18,  98 => 14,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'dashboard/index.html.twig' %}

{% block title %}Parents{% endblock %}

{% block content %}

<div class=\"col-sm-9\">
    <h1>Parents</h1>

    <table class=\"table\">
        <tbody>
            <tr>
                <th>Id</th>
                <td>{{ parent.id }}</td>
            </tr>
            <tr>
                <th>Name</th>
                <td>{{ parent.name }}</td>
            </tr>
            <tr>
                <th>Adress</th>
                <td>{{ parent.adress }}</td>
            </tr>
            <tr>
                <th>Email</th>
                <td>{{ parent.email }}</td>
            </tr>
            <tr>
                <th>Phone</th>
                <td>{{ parent.phone }}</td>
            </tr>
            <tr>
                <th>Student</th>
                <td>{% for student in parent.student %}
                        <a class=\"btn btn-link\" href=\"{{ path('app_student_show', {'id': student.id}) }}\">{{  student.name }}</a>
                    {% endfor %}
                </td>

            </tr>
        </tbody>
    </table>

    <a class=\"btn btn-success\" href=\"{{ path('app_parents_index') }}\">back to list</a>

    <a class=\"btn btn-warning\"  href=\"{{ path('app_parents_edit', {'id': parent.id}) }}\">edit</a>

    {{ include('parents/_delete_form.html.twig') }}
</div>
{% endblock %}
", "parents/show.html.twig", "/var/www/symfony_docker/symfony-6-login-register/templates/parents/show.html.twig");
    }
}

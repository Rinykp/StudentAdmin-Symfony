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

/* student/index.html.twig */
class __TwigTemplate_a890e79c86a21509b6130b8a335e50dd extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "student/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "student/index.html.twig"));

        $this->parent = $this->loadTemplate("dashboard/index.html.twig", "student/index.html.twig", 1);
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

        echo "Student index";
        
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
    <h1>Student index</h1>
    <hr>
    <div class=\"row\">
        <div class=\"col-sm-6\">
            ";
        // line 12
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 12, $this->source); })()), 'form_start');
        echo "
            ";
        // line 13
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 13, $this->source); })()), "csvFile", [], "any", false, false, false, 13), 'row');
        echo "
            <button class=\"btn btn-danger\" style=\"margin-top: 10px;\" type=\"submit\"><span class=\"glyphicon glyphicon-upload\"></span> Upload csv</button>
            <a style=\"margin-top: 10px;\" class=\"btn btn-info btn-md\"href=\"";
        // line 15
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("download_sample_csv");
        echo "\"><span class=\"glyphicon glyphicon-download-alt\"></span> Download Sample Csv File</a></a>

            ";
        // line 17
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 17, $this->source); })()), 'form_end');
        echo "
        </div>
        <div class=\"col-sm-3\">
        </div>
    </div>
    <hr>
    <table class=\"table\">
        <thead>
            <tr>
                <th>Id</th>
                <th>Name</th>
                <th>Dob</th>
                <th>Email</th>
                <th>Phone</th>
                <th>Class</th>
                <th>Parent Name</th>
                <th>Image</th>
                <th>actions</th>
            </tr>
        </thead>
        <tbody>
";
        // line 39
        echo "        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["students"]) || array_key_exists("students", $context) ? $context["students"] : (function () { throw new RuntimeError('Variable "students" does not exist.', 39, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["student"]) {
            // line 40
            echo "            <tr>
                <td>";
            // line 41
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["student"], "id", [], "any", false, false, false, 41), "html", null, true);
            echo "</td>
                <td>";
            // line 42
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["student"], "name", [], "any", false, false, false, 42), "html", null, true);
            echo "</td>
                <td>";
            // line 43
            ((twig_get_attribute($this->env, $this->source, $context["student"], "dob", [], "any", false, false, false, 43)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["student"], "dob", [], "any", false, false, false, 43), "Y-m-d"), "html", null, true))) : (print ("")));
            echo "</td>
                <td>";
            // line 44
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["student"], "email", [], "any", false, false, false, 44), "html", null, true);
            echo "</td>
                <td>";
            // line 45
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["student"], "phone", [], "any", false, false, false, 45), "html", null, true);
            echo "</td>
                <td>
                    ";
            // line 47
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["student"], "class", [], "any", false, false, false, 47));
            $context['loop'] = [
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            ];
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["class"]) {
                // line 48
                echo "                        ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["class"], "name", [], "any", false, false, false, 48), "html", null, true);
                if ( !twig_get_attribute($this->env, $this->source, $context["loop"], "last", [], "any", false, false, false, 48)) {
                    echo ", ";
                }
                // line 49
                echo "                    ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['class'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 50
            echo "                    -
                    ";
            // line 51
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["student"], "division", [], "any", false, false, false, 51));
            $context['loop'] = [
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            ];
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["division"]) {
                // line 52
                echo "                        ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["division"], "name", [], "any", false, false, false, 52), "html", null, true);
                if ( !twig_get_attribute($this->env, $this->source, $context["loop"], "last", [], "any", false, false, false, 52)) {
                    echo ", ";
                }
                // line 53
                echo "                    ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['division'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 54
            echo "                </td>
                <td>
                    ";
            // line 56
            if ( !(null === twig_get_attribute($this->env, $this->source, $context["student"], "parents", [], "any", false, false, false, 56))) {
                // line 57
                echo "                        <a class=\"btn btn-link\" href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_parents_show", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["student"], "parents", [], "any", false, false, false, 57), "id", [], "any", false, false, false, 57)]), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["student"], "parents", [], "any", false, false, false, 57), "name", [], "any", false, false, false, 57), "html", null, true);
                echo "</a>
                    ";
            } else {
                // line 59
                echo "                        N/A
                    ";
            }
            // line 61
            echo "                </td>
                <td>
                    ";
            // line 63
            if ( !(null === twig_get_attribute($this->env, $this->source, $context["student"], "photo", [], "any", false, false, false, 63))) {
                // line 64
                echo "                    <img class=\"img-thumbnail\" style=\"height: 70px;width: 70px\" src=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/photos/" . twig_get_attribute($this->env, $this->source, $context["student"], "photo", [], "any", false, false, false, 64))), "html", null, true);
                echo "\" >
                    ";
            } else {
                // line 66
                echo "
                    ";
            }
            // line 68
            echo "                </td>
                <td>
                    <a class=\"btn btn-success\" href=\"";
            // line 70
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_student_show", ["id" => twig_get_attribute($this->env, $this->source, $context["student"], "id", [], "any", false, false, false, 70)]), "html", null, true);
            echo "\">show</a>
                    <a class=\"btn btn-warning\" href=\"";
            // line 71
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_student_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["student"], "id", [], "any", false, false, false, 71)]), "html", null, true);
            echo "\">edit</a>
                </td>
            </tr>
        ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 75
            echo "            <tr>
                <td colspan=\"6\">no records found</td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['student'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 79
        echo "        </tbody>
    </table>

    <a class=\"btn btn-primary\" href=\"";
        // line 82
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_student_new");
        echo "\">Create new</a>
</div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "student/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  306 => 82,  301 => 79,  292 => 75,  283 => 71,  279 => 70,  275 => 68,  271 => 66,  265 => 64,  263 => 63,  259 => 61,  255 => 59,  247 => 57,  245 => 56,  241 => 54,  227 => 53,  221 => 52,  204 => 51,  201 => 50,  187 => 49,  181 => 48,  164 => 47,  159 => 45,  155 => 44,  151 => 43,  147 => 42,  143 => 41,  140 => 40,  134 => 39,  110 => 17,  105 => 15,  100 => 13,  96 => 12,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'dashboard/index.html.twig' %}

{% block title %}Student index{% endblock %}

{% block content %}

<div class=\"col-sm-9\">
    <h1>Student index</h1>
    <hr>
    <div class=\"row\">
        <div class=\"col-sm-6\">
            {{ form_start(form) }}
            {{ form_row(form.csvFile) }}
            <button class=\"btn btn-danger\" style=\"margin-top: 10px;\" type=\"submit\"><span class=\"glyphicon glyphicon-upload\"></span> Upload csv</button>
            <a style=\"margin-top: 10px;\" class=\"btn btn-info btn-md\"href=\"{{ path('download_sample_csv') }}\"><span class=\"glyphicon glyphicon-download-alt\"></span> Download Sample Csv File</a></a>

            {{ form_end(form) }}
        </div>
        <div class=\"col-sm-3\">
        </div>
    </div>
    <hr>
    <table class=\"table\">
        <thead>
            <tr>
                <th>Id</th>
                <th>Name</th>
                <th>Dob</th>
                <th>Email</th>
                <th>Phone</th>
                <th>Class</th>
                <th>Parent Name</th>
                <th>Image</th>
                <th>actions</th>
            </tr>
        </thead>
        <tbody>
{#        {{ dump(students) }}#}
        {% for student in students %}
            <tr>
                <td>{{ student.id }}</td>
                <td>{{ student.name }}</td>
                <td>{{ student.dob ? student.dob|date('Y-m-d') : '' }}</td>
                <td>{{ student.email }}</td>
                <td>{{ student.phone }}</td>
                <td>
                    {% for class in student.class %}
                        {{ class.name }}{% if not loop.last %}, {% endif %}
                    {% endfor %}
                    -
                    {% for division in student.division %}
                        {{ division.name }}{% if not loop.last %}, {% endif %}
                    {% endfor %}
                </td>
                <td>
                    {% if student.parents is not null %}
                        <a class=\"btn btn-link\" href=\"{{ path('app_parents_show', {'id': student.parents.id}) }}\">{{ student.parents.name }}</a>
                    {% else %}
                        N/A
                    {% endif %}
                </td>
                <td>
                    {% if student.photo is not null %}
                    <img class=\"img-thumbnail\" style=\"height: 70px;width: 70px\" src=\"{{ asset('uploads/photos/' ~ student.photo) }}\" >
                    {% else %}

                    {% endif %}
                </td>
                <td>
                    <a class=\"btn btn-success\" href=\"{{ path('app_student_show', {'id': student.id}) }}\">show</a>
                    <a class=\"btn btn-warning\" href=\"{{ path('app_student_edit', {'id': student.id}) }}\">edit</a>
                </td>
            </tr>
        {% else %}
            <tr>
                <td colspan=\"6\">no records found</td>
            </tr>
        {% endfor %}
        </tbody>
    </table>

    <a class=\"btn btn-primary\" href=\"{{ path('app_student_new') }}\">Create new</a>
</div>
{% endblock %}
", "student/index.html.twig", "/var/www/symfony_docker/symfony-6-login-register/templates/student/index.html.twig");
    }
}

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

/* marks/show.html.twig */
class __TwigTemplate_7525669004970d5686235948f0f3a64b extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "marks/show.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "marks/show.html.twig"));

        $this->parent = $this->loadTemplate("dashboard/index.html.twig", "marks/show.html.twig", 1);
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

        echo "Marks";
        
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
    <h1>Marks</h1>

    <table class=\"table\">
        <tbody>
            <tr>
                <th>Id</th>
                <td>";
        // line 14
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["mark"]) || array_key_exists("mark", $context) ? $context["mark"] : (function () { throw new RuntimeError('Variable "mark" does not exist.', 14, $this->source); })()), "id", [], "any", false, false, false, 14), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Marks</th>
                <td>";
        // line 18
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["mark"]) || array_key_exists("mark", $context) ? $context["mark"] : (function () { throw new RuntimeError('Variable "mark" does not exist.', 18, $this->source); })()), "marks", [], "any", false, false, false, 18), "html", null, true);
        echo "</td>
            </tr> <tr>
                <th>Subject</th>
                <td>";
        // line 21
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["mark"]) || array_key_exists("mark", $context) ? $context["mark"] : (function () { throw new RuntimeError('Variable "mark" does not exist.', 21, $this->source); })()), "subject", [], "any", false, false, false, 21));
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
        foreach ($context['_seq'] as $context["_key"] => $context["subject"]) {
            // line 22
            echo "                        ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["subject"], "name", [], "any", false, false, false, 22), "html", null, true);
            if ( !twig_get_attribute($this->env, $this->source, $context["loop"], "last", [], "any", false, false, false, 22)) {
                echo ", ";
            }
            // line 23
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['subject'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        echo "</td>
            </tr>
            <tr>
                <th>Student</th>
                <td>";
        // line 27
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["mark"]) || array_key_exists("mark", $context) ? $context["mark"] : (function () { throw new RuntimeError('Variable "mark" does not exist.', 27, $this->source); })()), "student", [], "any", false, false, false, 27));
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
        foreach ($context['_seq'] as $context["_key"] => $context["student"]) {
            // line 28
            echo "                        ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["student"], "name", [], "any", false, false, false, 28), "html", null, true);
            if ( !twig_get_attribute($this->env, $this->source, $context["loop"], "last", [], "any", false, false, false, 28)) {
                echo ", ";
            }
            // line 29
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['student'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        echo "</td>
            </tr>
        </tbody>
    </table>

    <a  class=\"btn btn-success\"  href=\"";
        // line 34
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_marks_index");
        echo "\">back to list</a>

    <a  class=\"btn btn-warning\"  href=\"";
        // line 36
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_marks_edit", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["mark"]) || array_key_exists("mark", $context) ? $context["mark"] : (function () { throw new RuntimeError('Variable "mark" does not exist.', 36, $this->source); })()), "id", [], "any", false, false, false, 36)]), "html", null, true);
        echo "\">edit</a>

    ";
        // line 38
        echo twig_include($this->env, $context, "marks/_delete_form.html.twig");
        echo "
</div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "marks/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  206 => 38,  201 => 36,  196 => 34,  176 => 29,  170 => 28,  153 => 27,  134 => 23,  128 => 22,  111 => 21,  105 => 18,  98 => 14,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'dashboard/index.html.twig' %}

{% block title %}Marks{% endblock %}

{% block content %}

<div class=\"col-sm-9\">
    <h1>Marks</h1>

    <table class=\"table\">
        <tbody>
            <tr>
                <th>Id</th>
                <td>{{ mark.id }}</td>
            </tr>
            <tr>
                <th>Marks</th>
                <td>{{ mark.marks }}</td>
            </tr> <tr>
                <th>Subject</th>
                <td>{% for subject in mark.subject %}
                        {{ subject.name }}{% if not loop.last %}, {% endif %}
                    {% endfor %}</td>
            </tr>
            <tr>
                <th>Student</th>
                <td>{% for student in mark.student %}
                        {{ student.name }}{% if not loop.last %}, {% endif %}
                    {% endfor %}</td>
            </tr>
        </tbody>
    </table>

    <a  class=\"btn btn-success\"  href=\"{{ path('app_marks_index') }}\">back to list</a>

    <a  class=\"btn btn-warning\"  href=\"{{ path('app_marks_edit', {'id': mark.id}) }}\">edit</a>

    {{ include('marks/_delete_form.html.twig') }}
</div>
{% endblock %}
", "marks/show.html.twig", "/var/www/symfony_docker/symfony-6-login-register/templates/marks/show.html.twig");
    }
}

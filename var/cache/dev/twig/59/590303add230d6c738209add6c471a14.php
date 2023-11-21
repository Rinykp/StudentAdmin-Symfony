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

/* progress/index.html.twig */
class __TwigTemplate_9ab5f044588a26521eda46490e9bc0d0 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "progress/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "progress/index.html.twig"));

        $this->parent = $this->loadTemplate("dashboard/index.html.twig", "progress/index.html.twig", 1);
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

        echo "Marks index";
        
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
        <h1>Progress Report</h1>

            <div class=\"container flex flex-wrap items-center justify-between mx-auto\">
        <div class=\"flex\">
            <div class=\"relative\">
                <div class=\"row\">
                    <div class=\"col-sm-7\">
                        <form action=\"";
        // line 15
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_progress");
        echo "\">
                            <input type=\"text\" class=\"forn-control\"  style=\"width: 100%;  padding: 12px 20px; margin: 8px 0;
                              display: inline-block;
                             border: 1px solid #ccc;  border-radius: 4px;  box-sizing: border-box;\"
                                   id=\"search-navbar\" name=\"q\" value=\"";
        // line 19
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 19, $this->source); })()), "request", [], "any", false, false, false, 19), "query", [], "any", false, false, false, 19), "get", ["q"], "method", false, false, false, 19), "html", null, true);
        echo "\" placeholder=\"Search...\" >
                        </form>
                    </div>
                    <div class=\"col-sm-3\">
                        <p> <a class=\"btn btn-info\"  onclick=\"return confirm('are u sure to download the csv?')\" href=\"";
        // line 23
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_progress_download_csv");
        echo "\" >Download CSV</a>
                        </p><p> <a class=\"btn btn-danger\"  onclick=\"return confirm('are u sure to download Pdf?')\" href=\"";
        // line 24
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_progress_download_pdf");
        echo "\" >Download PDF</a>
                        </p>
                         </div>

                </div>
            </div>
        </div>
    </div>
        ";
        // line 32
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 32, $this->source); })()), "session", [], "any", false, false, false, 32), "flashBag", [], "any", false, false, false, 32), "get", ["success"], "method", false, false, false, 32));
        foreach ($context['_seq'] as $context["_key"] => $context["msg"]) {
            // line 33
            echo "            <div class=\"alert alert-success\">
                ";
            // line 34
            echo twig_escape_filter($this->env, $context["msg"], "html", null, true);
            echo "
            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['msg'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 37
        echo "        <hr>
        ";
        // line 38
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["students"]) || array_key_exists("students", $context) ? $context["students"] : (function () { throw new RuntimeError('Variable "students" does not exist.', 38, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["student"]) {
            // line 39
            echo "            <h4 style=\"color:black;background-color: #5eb5e0; padding: 5px;text-align: center\"><a style=\"font-size: 15px;\" class=\"btn btn-link\" href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_student_show", ["id" => twig_get_attribute($this->env, $this->source, $context["student"], "id", [], "any", false, false, false, 39)]), "html", null, true);
            echo "\">  ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["student"], "name", [], "any", false, false, false, 39), "html", null, true);
            echo "</a></h4>
            <a onclick=\"return confirm('are u sure to send the email?')\" class=\"btn btn-success\"  href=\"";
            // line 40
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_progress_email", ["id" => twig_get_attribute($this->env, $this->source, $context["student"], "id", [], "any", false, false, false, 40)]), "html", null, true);
            echo "\">Send Progress Card</a>
            <ul>
                ";
            // line 42
            if ( !(null === twig_get_attribute($this->env, $this->source, $context["student"], "marks", [], "any", false, false, false, 42))) {
                // line 43
                echo "                <table class=\"table\" style=\"background-color:#f3f3f3\" >
                    <thead style=\"background-color: #fefcfc\">
                    <tr>
                        <th>Subjects</th>
                        <th>Mark</th>
                    </tr>
                    </thead>
                    <tbody>

                    ";
                // line 52
                $context["rowTotal"] = 0;
                // line 53
                echo "                    ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["student"], "marks", [], "any", false, false, false, 53));
                foreach ($context['_seq'] as $context["_key"] => $context["mark"]) {
                    // line 54
                    echo "
                        ";
                    // line 55
                    $context["rowTotal"] = ((isset($context["rowTotal"]) || array_key_exists("rowTotal", $context) ? $context["rowTotal"] : (function () { throw new RuntimeError('Variable "rowTotal" does not exist.', 55, $this->source); })()) + twig_get_attribute($this->env, $this->source, $context["mark"], "marks", [], "any", false, false, false, 55));
                    // line 56
                    echo "
                        <tr>
                            <td>
                                ";
                    // line 59
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["mark"], "subject", [], "any", false, false, false, 59));
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
                        // line 60
                        echo "                                ";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["subject"], "name", [], "any", false, false, false, 60), "html", null, true);
                        if ( !twig_get_attribute($this->env, $this->source, $context["loop"], "last", [], "any", false, false, false, 60)) {
                            echo ", ";
                        }
                        // line 61
                        echo "                                ";
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
                    // line 62
                    echo "                            </td>
                            <td>";
                    // line 63
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["mark"], "marks", [], "any", false, false, false, 63), "html", null, true);
                    echo "</td>
                        </tr>
                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['mark'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 66
                echo "                    </tbody>
                    <tfoot>
                    <tr>
                        <td><b>Total Marks</b></td>
                        <td style=\"color: #B0413E\"><b>";
                // line 70
                echo twig_escape_filter($this->env, (isset($context["rowTotal"]) || array_key_exists("rowTotal", $context) ? $context["rowTotal"] : (function () { throw new RuntimeError('Variable "rowTotal" does not exist.', 70, $this->source); })()), "html", null, true);
                echo "<b></b></td>
                    </tr>
                    </tfoot>
                </table>
                ";
            }
            // line 75
            echo "            </ul>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['student'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 77
        echo "    </div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "progress/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  263 => 77,  256 => 75,  248 => 70,  242 => 66,  233 => 63,  230 => 62,  216 => 61,  210 => 60,  193 => 59,  188 => 56,  186 => 55,  183 => 54,  178 => 53,  176 => 52,  165 => 43,  163 => 42,  158 => 40,  151 => 39,  147 => 38,  144 => 37,  135 => 34,  132 => 33,  128 => 32,  117 => 24,  113 => 23,  106 => 19,  99 => 15,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'dashboard/index.html.twig' %}

{% block title %}Marks index{% endblock %}

{% block content %}

    <div class=\"col-sm-9\">
        <h1>Progress Report</h1>

            <div class=\"container flex flex-wrap items-center justify-between mx-auto\">
        <div class=\"flex\">
            <div class=\"relative\">
                <div class=\"row\">
                    <div class=\"col-sm-7\">
                        <form action=\"{{ path('app_progress') }}\">
                            <input type=\"text\" class=\"forn-control\"  style=\"width: 100%;  padding: 12px 20px; margin: 8px 0;
                              display: inline-block;
                             border: 1px solid #ccc;  border-radius: 4px;  box-sizing: border-box;\"
                                   id=\"search-navbar\" name=\"q\" value=\"{{ app.request.query.get('q') }}\" placeholder=\"Search...\" >
                        </form>
                    </div>
                    <div class=\"col-sm-3\">
                        <p> <a class=\"btn btn-info\"  onclick=\"return confirm('are u sure to download the csv?')\" href=\"{{ path('app_progress_download_csv') }}\" >Download CSV</a>
                        </p><p> <a class=\"btn btn-danger\"  onclick=\"return confirm('are u sure to download Pdf?')\" href=\"{{ path('app_progress_download_pdf') }}\" >Download PDF</a>
                        </p>
                         </div>

                </div>
            </div>
        </div>
    </div>
        {% for msg in app.session.flashBag.get('success') %}
            <div class=\"alert alert-success\">
                {{ msg }}
            </div>
        {% endfor %}
        <hr>
        {% for student in students %}
            <h4 style=\"color:black;background-color: #5eb5e0; padding: 5px;text-align: center\"><a style=\"font-size: 15px;\" class=\"btn btn-link\" href=\"{{ path('app_student_show', {'id': student.id}) }}\">  {{ student.name }}</a></h4>
            <a onclick=\"return confirm('are u sure to send the email?')\" class=\"btn btn-success\"  href=\"{{ path('app_progress_email', {'id': student.id}) }}\">Send Progress Card</a>
            <ul>
                {% if student.marks is not null %}
                <table class=\"table\" style=\"background-color:#f3f3f3\" >
                    <thead style=\"background-color: #fefcfc\">
                    <tr>
                        <th>Subjects</th>
                        <th>Mark</th>
                    </tr>
                    </thead>
                    <tbody>

                    {% set rowTotal = 0 %}
                    {% for mark in student.marks %}

                        {% set rowTotal = rowTotal + mark.marks %}

                        <tr>
                            <td>
                                {% for subject in mark.subject %}
                                {{ subject.name }}{% if not loop.last %}, {% endif %}
                                {% endfor %}
                            </td>
                            <td>{{  mark.marks }}</td>
                        </tr>
                    {% endfor %}
                    </tbody>
                    <tfoot>
                    <tr>
                        <td><b>Total Marks</b></td>
                        <td style=\"color: #B0413E\"><b>{{ rowTotal }}<b></b></td>
                    </tr>
                    </tfoot>
                </table>
                {% endif %}
            </ul>
        {% endfor %}
    </div>
{% endblock %}", "progress/index.html.twig", "/var/www/symfony_docker/symfony-6-login-register/templates/progress/index.html.twig");
    }
}

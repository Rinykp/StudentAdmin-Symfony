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

/* progress/pdf.html.twig */
class __TwigTemplate_917f621b93c4044301b1be389691d6a0 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "progress/pdf.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "progress/pdf.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
<head>
    <meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\"/>
    <title>Progress</title>
</head>
<body>
<div style=\"margin: 0 auto;display: block;width: 500px;\">
    ";
        // line 9
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["students"]) || array_key_exists("students", $context) ? $context["students"] : (function () { throw new RuntimeError('Variable "students" does not exist.', 9, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["student"]) {
            // line 10
            echo "        <h4 style=\"color:black;background-color: #5eb5e0; padding: 5px;text-align: center\"><a style=\"font-size: 15px;\" class=\"btn btn-link\" href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_student_show", ["id" => twig_get_attribute($this->env, $this->source, $context["student"], "id", [], "any", false, false, false, 10)]), "html", null, true);
            echo "\">  ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["student"], "name", [], "any", false, false, false, 10), "html", null, true);
            echo "</a></h4>
        <ul>
            ";
            // line 12
            if ( !(null === twig_get_attribute($this->env, $this->source, $context["student"], "marks", [], "any", false, false, false, 12))) {
                // line 13
                echo "                <table class=\"table\" style=\"background-color:#f3f3f3;width: 100%\" >
                    <thead style=\"background-color: #fefcfc\">
                    <tr>
                        <th>Subjects</th>
                        <th>Mark</th>
                    </tr>
                    </thead>
                    <tbody>

                    ";
                // line 22
                $context["rowTotal"] = 0;
                // line 23
                echo "                    ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["student"], "marks", [], "any", false, false, false, 23));
                foreach ($context['_seq'] as $context["_key"] => $context["mark"]) {
                    // line 24
                    echo "
                        ";
                    // line 25
                    $context["rowTotal"] = ((isset($context["rowTotal"]) || array_key_exists("rowTotal", $context) ? $context["rowTotal"] : (function () { throw new RuntimeError('Variable "rowTotal" does not exist.', 25, $this->source); })()) + twig_get_attribute($this->env, $this->source, $context["mark"], "marks", [], "any", false, false, false, 25));
                    // line 26
                    echo "
                        <tr>
                            <td style=\"align-content: center\">
                                ";
                    // line 29
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["mark"], "subject", [], "any", false, false, false, 29));
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
                        // line 30
                        echo "                                    ";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["subject"], "name", [], "any", false, false, false, 30), "html", null, true);
                        if ( !twig_get_attribute($this->env, $this->source, $context["loop"], "last", [], "any", false, false, false, 30)) {
                            echo ", ";
                        }
                        // line 31
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
                    // line 32
                    echo "                            </td>
                            <td style=\"text-align: right\">";
                    // line 33
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["mark"], "marks", [], "any", false, false, false, 33), "html", null, true);
                    echo "</td>
                        </tr>
                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['mark'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 36
                echo "                    </tbody>
                    <tfoot>
                    <tr>
                        <td><b>Total Marks</b></td>
                        <td style=\"color: #B0413E\"><b>";
                // line 40
                echo twig_escape_filter($this->env, (isset($context["rowTotal"]) || array_key_exists("rowTotal", $context) ? $context["rowTotal"] : (function () { throw new RuntimeError('Variable "rowTotal" does not exist.', 40, $this->source); })()), "html", null, true);
                echo "<b></b></td>
                    </tr>
                    </tfoot>
                </table>
            ";
            }
            // line 45
            echo "        </ul>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['student'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 46
        echo "</div>
</body>
</html>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "progress/pdf.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  165 => 46,  158 => 45,  150 => 40,  144 => 36,  135 => 33,  132 => 32,  118 => 31,  112 => 30,  95 => 29,  90 => 26,  88 => 25,  85 => 24,  80 => 23,  78 => 22,  67 => 13,  65 => 12,  57 => 10,  53 => 9,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html>
<head>
    <meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\"/>
    <title>Progress</title>
</head>
<body>
<div style=\"margin: 0 auto;display: block;width: 500px;\">
    {% for student in students %}
        <h4 style=\"color:black;background-color: #5eb5e0; padding: 5px;text-align: center\"><a style=\"font-size: 15px;\" class=\"btn btn-link\" href=\"{{ path('app_student_show', {'id': student.id}) }}\">  {{ student.name }}</a></h4>
        <ul>
            {% if student.marks is not null %}
                <table class=\"table\" style=\"background-color:#f3f3f3;width: 100%\" >
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
                            <td style=\"align-content: center\">
                                {% for subject in mark.subject %}
                                    {{ subject.name }}{% if not loop.last %}, {% endif %}
                                {% endfor %}
                            </td>
                            <td style=\"text-align: right\">{{  mark.marks }}</td>
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
    {% endfor %}</div>
</body>
</html>", "progress/pdf.html.twig", "/var/www/symfony_docker/symfony-6-login-register/templates/progress/pdf.html.twig");
    }
}

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

/* progress/email.html.twig */
class __TwigTemplate_b8a4fbf93cfb12903680538561179d3f extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "progress/email.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "progress/email.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
<head>
    <title>Progress Report</title>
</head>
<body>
<p>Hey ";
        // line 7
        echo twig_escape_filter($this->env, (isset($context["parentName"]) || array_key_exists("parentName", $context) ? $context["parentName"] : (function () { throw new RuntimeError('Variable "parentName" does not exist.', 7, $this->source); })()), "html", null, true);
        echo ",</p>
<p>
    I am writing to update you on your student's progress.
    I am very pleased to report that ";
        // line 10
        echo twig_escape_filter($this->env, (isset($context["studentName"]) || array_key_exists("studentName", $context) ? $context["studentName"] : (function () { throw new RuntimeError('Variable "studentName" does not exist.', 10, $this->source); })()), "html", null, true);
        echo " is doing well in class and is making good progress.
    ";
        // line 11
        echo twig_escape_filter($this->env, (isset($context["studentName"]) || array_key_exists("studentName", $context) ? $context["studentName"] : (function () { throw new RuntimeError('Variable "studentName" does not exist.', 11, $this->source); })()), "html", null, true);
        echo " is working hard and has shown great effort in all subjects.
    In particular, Maths has been a strength for ";
        // line 12
        echo twig_escape_filter($this->env, (isset($context["studentName"]) || array_key_exists("studentName", $context) ? $context["studentName"] : (function () { throw new RuntimeError('Variable "studentName" does not exist.', 12, $this->source); })()), "html", null, true);
        echo ". Keep up the good work!
</p>
<p>
    Please check the Marks
  <ul>
    ";
        // line 17
        if ( !(null === (isset($context["marks"]) || array_key_exists("marks", $context) ? $context["marks"] : (function () { throw new RuntimeError('Variable "marks" does not exist.', 17, $this->source); })()))) {
            // line 18
            echo "        <table class=\"table\" style=\"background-color:#f3f3f3\" >
            <thead style=\"background-color: #fefcfc\">
            <tr>
                <th>Subjects</th>
                <th>Mark</th>
            </tr>
            </thead>
            <tbody>


            ";
            // line 28
            $context["rowTotal"] = 0;
            // line 29
            echo "            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["marks"]) || array_key_exists("marks", $context) ? $context["marks"] : (function () { throw new RuntimeError('Variable "marks" does not exist.', 29, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["mark"]) {
                // line 30
                echo "
                ";
                // line 31
                $context["rowTotal"] = ((isset($context["rowTotal"]) || array_key_exists("rowTotal", $context) ? $context["rowTotal"] : (function () { throw new RuntimeError('Variable "rowTotal" does not exist.', 31, $this->source); })()) + twig_get_attribute($this->env, $this->source, $context["mark"], "marks", [], "any", false, false, false, 31));
                // line 32
                echo "
                <tr>
                    <td>
                        ";
                // line 35
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["mark"], "subject", [], "any", false, false, false, 35));
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
                    // line 36
                    echo "                            ";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["subject"], "name", [], "any", false, false, false, 36), "html", null, true);
                    if ( !twig_get_attribute($this->env, $this->source, $context["loop"], "last", [], "any", false, false, false, 36)) {
                        echo ", ";
                    }
                    // line 37
                    echo "                        ";
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
                // line 38
                echo "                    </td>
                    <td>";
                // line 39
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["mark"], "marks", [], "any", false, false, false, 39), "html", null, true);
                echo "</td>
                </tr>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['mark'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 42
            echo "            </tbody>
            <tfoot>
            <tr>
                <td><b>Total Marks</b></td>
                <td style=\"color: #B0413E\"><b>";
            // line 46
            echo twig_escape_filter($this->env, (isset($context["rowTotal"]) || array_key_exists("rowTotal", $context) ? $context["rowTotal"] : (function () { throw new RuntimeError('Variable "rowTotal" does not exist.', 46, $this->source); })()), "html", null, true);
            echo "<b></b></td>
            </tr>
            </tfoot>
        </table>
    ";
        }
        // line 51
        echo "</ul>
</p>
<p>If you have any questions or concerns, please do not hesitate to contact me.
    I will be happy to discuss your student's progress further with you. Thank you for your support.
</p>
<p>Sincerely,</p>
<p>Teacher</p>
</body>
</html>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "progress/email.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  167 => 51,  159 => 46,  153 => 42,  144 => 39,  141 => 38,  127 => 37,  121 => 36,  104 => 35,  99 => 32,  97 => 31,  94 => 30,  89 => 29,  87 => 28,  75 => 18,  73 => 17,  65 => 12,  61 => 11,  57 => 10,  51 => 7,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html>
<head>
    <title>Progress Report</title>
</head>
<body>
<p>Hey {{ parentName }},</p>
<p>
    I am writing to update you on your student's progress.
    I am very pleased to report that {{ studentName }} is doing well in class and is making good progress.
    {{ studentName }} is working hard and has shown great effort in all subjects.
    In particular, Maths has been a strength for {{ studentName }}. Keep up the good work!
</p>
<p>
    Please check the Marks
  <ul>
    {% if marks is not null %}
        <table class=\"table\" style=\"background-color:#f3f3f3\" >
            <thead style=\"background-color: #fefcfc\">
            <tr>
                <th>Subjects</th>
                <th>Mark</th>
            </tr>
            </thead>
            <tbody>


            {% set rowTotal = 0 %}
            {% for mark in marks %}

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
</p>
<p>If you have any questions or concerns, please do not hesitate to contact me.
    I will be happy to discuss your student's progress further with you. Thank you for your support.
</p>
<p>Sincerely,</p>
<p>Teacher</p>
</body>
</html>
", "progress/email.html.twig", "/var/www/symfony_docker/symfony-6-login-register/templates/progress/email.html.twig");
    }
}

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

/* security/login.html.twig */
class __TwigTemplate_80b0e4615e246b55c4fb22240c3d4cef extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "security/login.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "security/login.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
<head>
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <style>
        body {font-family: Arial, Helvetica, sans-serif;}
        form {border: 3px solid #f1f1f1;}

        input[type=email], input[type=password] {
            width: 100%;
            padding: 12px 20px;
            margin: 8px 0;
            display: inline-block;
            border: 1px solid #ccc;
            box-sizing: border-box;
        }

        button {
            background-color: #04AA6D;
            color: white;
            padding: 14px 20px;
            margin: 8px 0;
            border: none;
            cursor: pointer;
            width: 100%;
        }

        button:hover {
            opacity: 0.8;
        }

        .cancelbtn {
            width: auto;
            padding: 10px 18px;
            background-color: #f44336;
        }
        .regbtn {
            width: auto;
            padding: 10px 18px;
            background-color: #eea20c;
        }

        .imgcontainer {
            text-align: center;
            margin: 24px 0 12px 0;
        }

        img.avatar {
            width: 40%;
            border-radius: 50%;
        }

        .container {
            padding: 16px;
        }

        span.psw {
            float: right;
            padding-top: 16px;
        }

        /* Change styles for span and cancel button on extra small screens */
        @media screen and (max-width: 300px) {
            span.psw {
                display: block;
                float: none;
            }
            .cancelbtn {
                width: 100%;
            }
        }
    </style>
</head>
<body>
<form method=\"post\">
    ";
        // line 76
        if ((isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 76, $this->source); })())) {
            // line 77
            echo "        <div class=\"alert alert-danger\">";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 77, $this->source); })()), "messageKey", [], "any", false, false, false, 77), twig_get_attribute($this->env, $this->source, (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 77, $this->source); })()), "messageData", [], "any", false, false, false, 77), "security"), "html", null, true);
            echo "</div>
    ";
        }
        // line 79
        echo "
    ";
        // line 80
        if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 80, $this->source); })()), "user", [], "any", false, false, false, 80)) {
            // line 81
            echo "        <div class=\"mb-3\">
            You are logged in as ";
            // line 82
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 82, $this->source); })()), "user", [], "any", false, false, false, 82), "userIdentifier", [], "any", false, false, false, 82), "html", null, true);
            echo ", <a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
            echo "\">Logout</a>
        </div>
    ";
        }
        // line 85
        echo "    <div class=\"imgcontainer\">
        <img src=\"img_avatar2.png\" alt=\"Avatar\" class=\"avatar\">
    </div>

    <div class=\"container\">
        <label for=\"uname\"><b>Username</b></label>
        <input type=\"email\" value=\"";
        // line 91
        echo twig_escape_filter($this->env, (isset($context["last_username"]) || array_key_exists("last_username", $context) ? $context["last_username"] : (function () { throw new RuntimeError('Variable "last_username" does not exist.', 91, $this->source); })()), "html", null, true);
        echo "\" name=\"email\" id=\"inputEmail\"  autocomplete=\"email\" required autofocus>
        <label for=\"psw\"><b>Password</b></label>
        <input type=\"password\" name=\"password\" id=\"inputPassword\" class=\"form-control\" autocomplete=\"current-password\" required>

        <input type=\"hidden\" name=\"_csrf_token\"
               value=\"";
        // line 96
        echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("authenticate"), "html", null, true);
        echo "\"
        >
        <button type=\"submit\">Login</button>
        <label>
            <input type=\"checkbox\" checked=\"checked\" name=\"remember\"> Remember me
        </label>
    </div>

    <div class=\"container\" style=\"background-color:#f1f1f1\">
        <button type=\"button\" class=\"cancelbtn\">Cancel</button>
        <span class=\"psw\">Forgot <a href=\"#\">password?</a></span>
        <span class=\"\"> <a  class=\"regbtn\" href=\"";
        // line 107
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_register");
        echo "\">Register</a></span>
    </div>
</form>

</body>
</html>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "security/login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  174 => 107,  160 => 96,  152 => 91,  144 => 85,  136 => 82,  133 => 81,  131 => 80,  128 => 79,  122 => 77,  120 => 76,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html>
<head>
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <style>
        body {font-family: Arial, Helvetica, sans-serif;}
        form {border: 3px solid #f1f1f1;}

        input[type=email], input[type=password] {
            width: 100%;
            padding: 12px 20px;
            margin: 8px 0;
            display: inline-block;
            border: 1px solid #ccc;
            box-sizing: border-box;
        }

        button {
            background-color: #04AA6D;
            color: white;
            padding: 14px 20px;
            margin: 8px 0;
            border: none;
            cursor: pointer;
            width: 100%;
        }

        button:hover {
            opacity: 0.8;
        }

        .cancelbtn {
            width: auto;
            padding: 10px 18px;
            background-color: #f44336;
        }
        .regbtn {
            width: auto;
            padding: 10px 18px;
            background-color: #eea20c;
        }

        .imgcontainer {
            text-align: center;
            margin: 24px 0 12px 0;
        }

        img.avatar {
            width: 40%;
            border-radius: 50%;
        }

        .container {
            padding: 16px;
        }

        span.psw {
            float: right;
            padding-top: 16px;
        }

        /* Change styles for span and cancel button on extra small screens */
        @media screen and (max-width: 300px) {
            span.psw {
                display: block;
                float: none;
            }
            .cancelbtn {
                width: 100%;
            }
        }
    </style>
</head>
<body>
<form method=\"post\">
    {% if error %}
        <div class=\"alert alert-danger\">{{ error.messageKey|trans(error.messageData, 'security') }}</div>
    {% endif %}

    {% if app.user %}
        <div class=\"mb-3\">
            You are logged in as {{ app.user.userIdentifier }}, <a href=\"{{ path('app_logout') }}\">Logout</a>
        </div>
    {% endif %}
    <div class=\"imgcontainer\">
        <img src=\"img_avatar2.png\" alt=\"Avatar\" class=\"avatar\">
    </div>

    <div class=\"container\">
        <label for=\"uname\"><b>Username</b></label>
        <input type=\"email\" value=\"{{ last_username }}\" name=\"email\" id=\"inputEmail\"  autocomplete=\"email\" required autofocus>
        <label for=\"psw\"><b>Password</b></label>
        <input type=\"password\" name=\"password\" id=\"inputPassword\" class=\"form-control\" autocomplete=\"current-password\" required>

        <input type=\"hidden\" name=\"_csrf_token\"
               value=\"{{ csrf_token('authenticate') }}\"
        >
        <button type=\"submit\">Login</button>
        <label>
            <input type=\"checkbox\" checked=\"checked\" name=\"remember\"> Remember me
        </label>
    </div>

    <div class=\"container\" style=\"background-color:#f1f1f1\">
        <button type=\"button\" class=\"cancelbtn\">Cancel</button>
        <span class=\"psw\">Forgot <a href=\"#\">password?</a></span>
        <span class=\"\"> <a  class=\"regbtn\" href=\"{{ path('app_register')}}\">Register</a></span>
    </div>
</form>

</body>
</html>
", "security/login.html.twig", "/var/www/symfony_docker/symfony-6-login-register/templates/security/login.html.twig");
    }
}

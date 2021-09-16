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

/* default/index.html.twig */
class __TwigTemplate_007c53c94ebfbaa543832589f956e2628b4870a7a5675aa1d37b20003db0e261 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "default/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "default/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "default/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "<style>
    .example-wrapper { margin: 1em auto; max-width: 800px; width: 95%; font: 18px/1.5 sans-serif; }
    .example-wrapper code { background: #F5F5F5; padding: 2px 6px; }
    .Success {background-color: palegreen}
    .In_progress {background-color: darkorange}
    .Failure {background-color: red}
    table, tr, th, td {
        border: 1px solid black;
    }

    button {
    }

</style>

<div class=\"example-wrapper\">
    <h1>Missions :</h1>
    ";
        // line 21
        if (((isset($context["missionsCount"]) || array_key_exists("missionsCount", $context) ? $context["missionsCount"] : (function () { throw new RuntimeError('Variable "missionsCount" does not exist.', 21, $this->source); })()) > 0)) {
            // line 22
            echo "    <table>
        <tr>
            <th>Title</th>
            <th>Codename</th>
            <th>Type</th>
            <th>Status</th>
            <th></th>
        </tr>
        ";
            // line 30
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["missions"]) || array_key_exists("missions", $context) ? $context["missions"] : (function () { throw new RuntimeError('Variable "missions" does not exist.', 30, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["mission"]) {
                // line 31
                echo "        <tr>
            <td>";
                // line 32
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["mission"], "title", [], "any", false, false, false, 32), "html", null, true);
                echo "</td>
            <td>";
                // line 33
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["mission"], "codename", [], "any", false, false, false, 33), "html", null, true);
                echo "</td>
            <td>";
                // line 34
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["mission"], "type", [], "any", false, false, false, 34), "html", null, true);
                echo "</td>
            <td class=\"";
                // line 35
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["mission"], "status", [], "any", false, false, false, 35), "html", null, true);
                echo "\">";
                if ((twig_get_attribute($this->env, $this->source, $context["mission"], "status", [], "any", false, false, false, 35) === "In_progress")) {
                    echo " In progress ";
                } else {
                    echo " ";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["mission"], "status", [], "any", false, false, false, 35), "html", null, true);
                    echo " ";
                }
                echo "</td>
            <td><button onclick=\"window.location.href = 'http://localhost/details/";
                // line 36
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["mission"], "id", [], "any", false, false, false, 36), "html", null, true);
                echo "'\">Details</button></td>
        </tr>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['mission'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 39
            echo "    </table>
    ";
        } else {
            // line 41
            echo "    <h2>Aucune mission à afficher</h2>
    ";
        }
        // line 43
        echo "</div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "default/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  147 => 43,  143 => 41,  139 => 39,  130 => 36,  118 => 35,  114 => 34,  110 => 33,  106 => 32,  103 => 31,  99 => 30,  89 => 22,  87 => 21,  68 => 4,  58 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block body %}
<style>
    .example-wrapper { margin: 1em auto; max-width: 800px; width: 95%; font: 18px/1.5 sans-serif; }
    .example-wrapper code { background: #F5F5F5; padding: 2px 6px; }
    .Success {background-color: palegreen}
    .In_progress {background-color: darkorange}
    .Failure {background-color: red}
    table, tr, th, td {
        border: 1px solid black;
    }

    button {
    }

</style>

<div class=\"example-wrapper\">
    <h1>Missions :</h1>
    {% if missionsCount > 0  %}
    <table>
        <tr>
            <th>Title</th>
            <th>Codename</th>
            <th>Type</th>
            <th>Status</th>
            <th></th>
        </tr>
        {% for mission in missions %}
        <tr>
            <td>{{ mission.title }}</td>
            <td>{{ mission.codename }}</td>
            <td>{{ mission.type }}</td>
            <td class=\"{{ mission.status }}\">{% if mission.status is same as ('In_progress') %} In progress {% else %} {{ mission.status }} {% endif %}</td>
            <td><button onclick=\"window.location.href = 'http://localhost/details/{{ mission.id }}'\">Details</button></td>
        </tr>
        {% endfor %}
    </table>
    {% else %}
    <h2>Aucune mission à afficher</h2>
    {% endif %}
</div>
{% endblock %}
", "default/index.html.twig", "D:\\Program files\\XAMPP\\apps\\spyapp\\templates\\default\\index.html.twig");
    }
}

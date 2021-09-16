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

/* details/index.html.twig */
class __TwigTemplate_833165c3bfd56736905df438c8efb7c7d55ac06fe209e07136a32617dfacfedb extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "details/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "details/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "details/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["mission"]) || array_key_exists("mission", $context) ? $context["mission"] : (function () { throw new RuntimeError('Variable "mission" does not exist.', 3, $this->source); })()), "codename", [], "any", false, false, false, 3), "html", null, true);
        echo "'s details";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "<style>
    .example-wrapper { margin: 1em auto; max-width: 800px; width: 95%; font: 18px/1.5 sans-serif; }
    .example-wrapper code { background: #F5F5F5; padding: 2px 6px; }
    .Success {color: springgreen}
    .In_progress {color: darkorange}
    .Failure {color : red}
</style>

<div class=\"example-wrapper\">
    <h1>";
        // line 15
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["mission"]) || array_key_exists("mission", $context) ? $context["mission"] : (function () { throw new RuntimeError('Variable "mission" does not exist.', 15, $this->source); })()), "title", [], "any", false, false, false, 15), "html", null, true);
        echo "'s details :</h1>
    <ul>
        <li>Title: ";
        // line 17
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["mission"]) || array_key_exists("mission", $context) ? $context["mission"] : (function () { throw new RuntimeError('Variable "mission" does not exist.', 17, $this->source); })()), "title", [], "any", false, false, false, 17), "html", null, true);
        echo "</li>
        <li>Codename: ";
        // line 18
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["mission"]) || array_key_exists("mission", $context) ? $context["mission"] : (function () { throw new RuntimeError('Variable "mission" does not exist.', 18, $this->source); })()), "codename", [], "any", false, false, false, 18), "html", null, true);
        echo "</li>
        <li>Type: ";
        // line 19
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["mission"]) || array_key_exists("mission", $context) ? $context["mission"] : (function () { throw new RuntimeError('Variable "mission" does not exist.', 19, $this->source); })()), "type", [], "any", false, false, false, 19), "html", null, true);
        echo "</li>
        <li>Description: ";
        // line 20
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["mission"]) || array_key_exists("mission", $context) ? $context["mission"] : (function () { throw new RuntimeError('Variable "mission" does not exist.', 20, $this->source); })()), "description", [], "any", false, false, false, 20), "html", null, true);
        echo "</li>
        <li>Country: ";
        // line 21
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["mission"]) || array_key_exists("mission", $context) ? $context["mission"] : (function () { throw new RuntimeError('Variable "mission" does not exist.', 21, $this->source); })()), "country", [], "any", false, false, false, 21), "name", [], "any", false, false, false, 21), "html", null, true);
        echo "</li>
        <li>Hideout(s): <ul>
                ";
        // line 23
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["hideouts"]) || array_key_exists("hideouts", $context) ? $context["hideouts"] : (function () { throw new RuntimeError('Variable "hideouts" does not exist.', 23, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["hideout"]) {
            // line 24
            echo "                    <li>";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["hideout"], "code", [], "any", false, false, false, 24), "html", null, true);
            echo ", ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["hideout"], "address", [], "any", false, false, false, 24), "html", null, true);
            echo "</li>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['hideout'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 26
        echo "            </ul>
        </li>
        <li>Required Specialty: ";
        // line 28
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["mission"]) || array_key_exists("mission", $context) ? $context["mission"] : (function () { throw new RuntimeError('Variable "mission" does not exist.', 28, $this->source); })()), "requiredSpecialty", [], "any", false, false, false, 28), "type", [], "any", false, false, false, 28), "html", null, true);
        echo "</li>
        <li>Agent(s): <ul>
                ";
        // line 30
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["agents"]) || array_key_exists("agents", $context) ? $context["agents"] : (function () { throw new RuntimeError('Variable "agents" does not exist.', 30, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["agent"]) {
            // line 31
            echo "                    <li>";
            if ((twig_get_attribute($this->env, $this->source, $context["agent"], "name", [], "any", false, false, false, 31) === "47")) {
                echo " Agent 47 ";
            } else {
                echo " ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["agent"], "name", [], "any", false, false, false, 31), "html", null, true);
                echo ", ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["agent"], "surname", [], "any", false, false, false, 31), "html", null, true);
                echo " ";
            }
            echo "</li>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['agent'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 33
        echo "            </ul>
        </li>
        <li>Asset(s): <ul>
                ";
        // line 36
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["assets"]) || array_key_exists("assets", $context) ? $context["assets"] : (function () { throw new RuntimeError('Variable "assets" does not exist.', 36, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["asset"]) {
            // line 37
            echo "                    <li>";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["asset"], "name", [], "any", false, false, false, 37), "html", null, true);
            echo ", ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["asset"], "surname", [], "any", false, false, false, 37), "html", null, true);
            echo "</li>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['asset'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 39
        echo "            </ul>
        </li>
        <li>Target(s): <ul>
                ";
        // line 42
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["targets"]) || array_key_exists("targets", $context) ? $context["targets"] : (function () { throw new RuntimeError('Variable "targets" does not exist.', 42, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["target"]) {
            // line 43
            echo "                    <li>";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["target"], "name", [], "any", false, false, false, 43), "html", null, true);
            echo ", ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["target"], "surname", [], "any", false, false, false, 43), "html", null, true);
            echo "</li>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['target'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 45
        echo "            </ul>
        </li>
        <li>Started: ";
        // line 47
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["mission"]) || array_key_exists("mission", $context) ? $context["mission"] : (function () { throw new RuntimeError('Variable "mission" does not exist.', 47, $this->source); })()), "begindate", [], "any", false, false, false, 47), "d/m/Y"), "html", null, true);
        echo "</li>
        ";
        // line 48
        if ((twig_get_attribute($this->env, $this->source, (isset($context["mission"]) || array_key_exists("mission", $context) ? $context["mission"] : (function () { throw new RuntimeError('Variable "mission" does not exist.', 48, $this->source); })()), "status", [], "any", false, false, false, 48) === "In_progress")) {
            echo " ";
        } else {
            echo " <li>Ended: ";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["mission"]) || array_key_exists("mission", $context) ? $context["mission"] : (function () { throw new RuntimeError('Variable "mission" does not exist.', 48, $this->source); })()), "enddate", [], "any", false, false, false, 48), "d/m/Y"), "html", null, true);
            echo "</li>";
        }
        // line 49
        echo "        <li class=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["mission"]) || array_key_exists("mission", $context) ? $context["mission"] : (function () { throw new RuntimeError('Variable "mission" does not exist.', 49, $this->source); })()), "status", [], "any", false, false, false, 49), "html", null, true);
        echo "\">Status: ";
        if ((twig_get_attribute($this->env, $this->source, (isset($context["mission"]) || array_key_exists("mission", $context) ? $context["mission"] : (function () { throw new RuntimeError('Variable "mission" does not exist.', 49, $this->source); })()), "status", [], "any", false, false, false, 49) === "In_progress")) {
            echo " In progress ";
        } else {
            echo " ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["mission"]) || array_key_exists("mission", $context) ? $context["mission"] : (function () { throw new RuntimeError('Variable "mission" does not exist.', 49, $this->source); })()), "status", [], "any", false, false, false, 49), "html", null, true);
            echo " ";
        }
        echo "</li>
    </ul>
</div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "details/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  227 => 49,  219 => 48,  215 => 47,  211 => 45,  200 => 43,  196 => 42,  191 => 39,  180 => 37,  176 => 36,  171 => 33,  154 => 31,  150 => 30,  145 => 28,  141 => 26,  130 => 24,  126 => 23,  121 => 21,  117 => 20,  113 => 19,  109 => 18,  105 => 17,  100 => 15,  89 => 6,  79 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}{{ mission.codename }}'s details{% endblock %}

{% block body %}
<style>
    .example-wrapper { margin: 1em auto; max-width: 800px; width: 95%; font: 18px/1.5 sans-serif; }
    .example-wrapper code { background: #F5F5F5; padding: 2px 6px; }
    .Success {color: springgreen}
    .In_progress {color: darkorange}
    .Failure {color : red}
</style>

<div class=\"example-wrapper\">
    <h1>{{ mission.title }}'s details :</h1>
    <ul>
        <li>Title: {{ mission.title }}</li>
        <li>Codename: {{ mission.codename }}</li>
        <li>Type: {{ mission.type }}</li>
        <li>Description: {{ mission.description }}</li>
        <li>Country: {{ mission.country.name }}</li>
        <li>Hideout(s): <ul>
                {% for hideout in hideouts %}
                    <li>{{ hideout.code }}, {{ hideout.address }}</li>
                {% endfor %}
            </ul>
        </li>
        <li>Required Specialty: {{ mission.requiredSpecialty.type }}</li>
        <li>Agent(s): <ul>
                {% for agent in agents %}
                    <li>{% if agent.name is same as ('47') %} Agent 47 {% else %} {{ agent.name }}, {{ agent.surname }} {% endif %}</li>
                {% endfor %}
            </ul>
        </li>
        <li>Asset(s): <ul>
                {% for asset in assets %}
                    <li>{{ asset.name }}, {{ asset.surname }}</li>
                {% endfor %}
            </ul>
        </li>
        <li>Target(s): <ul>
                {% for target in targets %}
                    <li>{{ target.name }}, {{ target.surname }}</li>
                {% endfor %}
            </ul>
        </li>
        <li>Started: {{ mission.begindate|date(\"d/m/Y\") }}</li>
        {% if mission.status is same as ('In_progress') %} {% else %} <li>Ended: {{ mission.enddate|date(\"d/m/Y\") }}</li>{% endif %}
        <li class=\"{{ mission.status }}\">Status: {% if mission.status is same as ('In_progress') %} In progress {% else %} {{ mission.status }} {% endif %}</li>
    </ul>
</div>
{% endblock %}
", "details/index.html.twig", "C:\\xampp\\apps\\Spyapp\\templates\\details\\index.html.twig");
    }
}

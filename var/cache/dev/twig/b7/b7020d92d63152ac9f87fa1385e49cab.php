<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\CoreExtension;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* @JMSSerializer/Collector/metadata.html.twig */
class __TwigTemplate_285e162447a29725a28888449be537ff extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@JMSSerializer/Collector/metadata.html.twig"));

        // line 1
        yield "<h2>Loaded metadata</h2>";
        // line 3
        if (Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 3, $this->source); })()), "loadedMetadata", [], "any", false, false, false, 3))) {
            // line 4
            yield "<div class=\"empty\">
        <p>No metadata have been loaded.</p>
    </div>";
        } else {
            // line 9
            yield "<table>
        <thead>
        <tr>
            <th>Class</th>
            <th>File</th>
        </tr>
        </thead>";
            // line 16
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 16, $this->source); })()), "loadedMetadata", [], "any", false, false, false, 16));
            foreach ($context['_seq'] as $context["class"] => $context["files"]) {
                // line 17
                yield "<tr>
                <td>";
                // line 18
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["class"], "html", null, true);
                yield "</td>
                <td nowrap=\"nowrap\">";
                // line 20
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable($context["files"]);
                foreach ($context['_seq'] as $context["_key"] => $context["file"]) {
                    // line 21
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["file"], "html", null, true);
                    yield "<br/>
                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['file'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 23
                yield "                </td>
            </tr>";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['class'], $context['files'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 26
            yield "</table>";
        }
        // line 30
        yield "<h3>Attempted files</h3>";
        // line 31
        if (Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 31, $this->source); })()), "metadataFiles", [], "any", false, false, false, 31))) {
            // line 32
            yield "<div class=\"empty\">
        <p>No metadata files attempted (if this list is empty, probably all the data are cached as expected)</p>
    </div>";
        } else {
            // line 36
            yield "<table>
        <thead>
        <tr>
            <th>Class</th>
            <th>Files</th>
        </tr>
        </thead>";
            // line 43
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 43, $this->source); })()), "metadataFiles", [], "any", false, false, false, 43));
            foreach ($context['_seq'] as $context["class"] => $context["files"]) {
                // line 44
                yield "<tr>
                <td>";
                // line 45
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["class"], "html", null, true);
                yield "</td>
                <td nowrap=\"nowrap\">";
                // line 47
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable($context["files"]);
                foreach ($context['_seq'] as $context["file"] => $context["found"]) {
                    // line 48
                    yield "<span style=\"color: ";
                    yield (($context["found"]) ? ("green") : ("red"));
                    yield "\">
                        ";
                    // line 49
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["file"], "html", null, true);
                    yield " (";
                    yield (($context["found"]) ? ("found") : ("not found"));
                    yield ")<br/>
                        </span>
                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['file'], $context['found'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 52
                yield "                </td>
            </tr>";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['class'], $context['files'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 55
            yield "</table>";
        }
        // line 58
        yield "<h3>Configured metadata directories</h3>
<table>
    <thead>
    <tr>
        <th>Prefix</th>
        <th>Path</th>
    </tr>
    </thead>";
        // line 66
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 66, $this->source); })()), "loadedDirs", [], "any", false, false, false, 66));
        foreach ($context['_seq'] as $context["prefix"] => $context["path"]) {
            // line 67
            yield "<tr>
            <td>";
            // line 68
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["prefix"], "html", null, true);
            yield "</td>
            <td>";
            // line 69
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["path"], "html", null, true);
            yield "</td>
        </tr>";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['prefix'], $context['path'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 72
        yield "</table>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@JMSSerializer/Collector/metadata.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable()
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo()
    {
        return array (  177 => 72,  169 => 69,  165 => 68,  162 => 67,  158 => 66,  149 => 58,  146 => 55,  139 => 52,  128 => 49,  123 => 48,  119 => 47,  115 => 45,  112 => 44,  108 => 43,  100 => 36,  95 => 32,  93 => 31,  91 => 30,  88 => 26,  81 => 23,  73 => 21,  69 => 20,  65 => 18,  62 => 17,  58 => 16,  50 => 9,  45 => 4,  43 => 3,  41 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<h2>Loaded metadata</h2>

{%- if collector.loadedMetadata is empty -%}
    <div class=\"empty\">
        <p>No metadata have been loaded.</p>
    </div>
{%- else -%}

    <table>
        <thead>
        <tr>
            <th>Class</th>
            <th>File</th>
        </tr>
        </thead>
        {%- for class, files in collector.loadedMetadata -%}
            <tr>
                <td>{{ class }}</td>
                <td nowrap=\"nowrap\">
                    {%- for file in files -%}
                        {{ file }}<br/>
                    {% endfor %}
                </td>
            </tr>
        {%- endfor -%}
    </table>
{%- endif -%}


<h3>Attempted files</h3>
{%- if collector.metadataFiles is empty -%}
    <div class=\"empty\">
        <p>No metadata files attempted (if this list is empty, probably all the data are cached as expected)</p>
    </div>
{%- else -%}
    <table>
        <thead>
        <tr>
            <th>Class</th>
            <th>Files</th>
        </tr>
        </thead>
        {%- for class, files in collector.metadataFiles -%}
            <tr>
                <td>{{ class }}</td>
                <td nowrap=\"nowrap\">
                    {%- for file, found in files -%}
                        <span style=\"color: {{ found ? 'green': 'red' }}\">
                        {{ file }} ({{ found ? 'found': 'not found' }})<br/>
                        </span>
                    {% endfor %}
                </td>
            </tr>
        {%- endfor -%}
    </table>
{%- endif -%}

<h3>Configured metadata directories</h3>
<table>
    <thead>
    <tr>
        <th>Prefix</th>
        <th>Path</th>
    </tr>
    </thead>
    {%- for prefix, path in collector.loadedDirs -%}
        <tr>
            <td>{{ prefix }}</td>
            <td>{{ path }}</td>
        </tr>
    {%- endfor -%}
</table>
", "@JMSSerializer/Collector/metadata.html.twig", "C:\\wamp64\\www\\Dylan\\Formation-CDA\\Symfony\\APISymfo\\Books\\vendor\\jms\\serializer-bundle\\Resources\\views\\Collector\\metadata.html.twig");
    }
}
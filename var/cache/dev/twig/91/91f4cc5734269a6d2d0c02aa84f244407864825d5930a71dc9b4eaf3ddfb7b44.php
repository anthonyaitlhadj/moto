<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_8a31bbf6d27b61e74fed2c97266af7cf11e8909fb03298bf8178e142ab470eb2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_30332e26ae2da5871f618775f00a7454994ea06ce80c2a17bf28219f0eb97001 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_30332e26ae2da5871f618775f00a7454994ea06ce80c2a17bf28219f0eb97001->enter($__internal_30332e26ae2da5871f618775f00a7454994ea06ce80c2a17bf28219f0eb97001_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_9d41f4703124c21977ddb8c21e96b0b11bc512aaafab07f55cdf98f48e8e4145 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9d41f4703124c21977ddb8c21e96b0b11bc512aaafab07f55cdf98f48e8e4145->enter($__internal_9d41f4703124c21977ddb8c21e96b0b11bc512aaafab07f55cdf98f48e8e4145_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_30332e26ae2da5871f618775f00a7454994ea06ce80c2a17bf28219f0eb97001->leave($__internal_30332e26ae2da5871f618775f00a7454994ea06ce80c2a17bf28219f0eb97001_prof);

        
        $__internal_9d41f4703124c21977ddb8c21e96b0b11bc512aaafab07f55cdf98f48e8e4145->leave($__internal_9d41f4703124c21977ddb8c21e96b0b11bc512aaafab07f55cdf98f48e8e4145_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_18c443d691509a8cb793ba33c973654d455aa5cb4b26e2fcca567156b5852212 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_18c443d691509a8cb793ba33c973654d455aa5cb4b26e2fcca567156b5852212->enter($__internal_18c443d691509a8cb793ba33c973654d455aa5cb4b26e2fcca567156b5852212_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_28dca4f31df4a5a783915f06a302269ec10613b3c3c6ca75ce4a0bf3dbb0fb7e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_28dca4f31df4a5a783915f06a302269ec10613b3c3c6ca75ce4a0bf3dbb0fb7e->enter($__internal_28dca4f31df4a5a783915f06a302269ec10613b3c3c6ca75ce4a0bf3dbb0fb7e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_28dca4f31df4a5a783915f06a302269ec10613b3c3c6ca75ce4a0bf3dbb0fb7e->leave($__internal_28dca4f31df4a5a783915f06a302269ec10613b3c3c6ca75ce4a0bf3dbb0fb7e_prof);

        
        $__internal_18c443d691509a8cb793ba33c973654d455aa5cb4b26e2fcca567156b5852212->leave($__internal_18c443d691509a8cb793ba33c973654d455aa5cb4b26e2fcca567156b5852212_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_ee67f6dc7b89661c7d376e1bbea39884aea279a6829b3f1db5d8313174d6eb0e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ee67f6dc7b89661c7d376e1bbea39884aea279a6829b3f1db5d8313174d6eb0e->enter($__internal_ee67f6dc7b89661c7d376e1bbea39884aea279a6829b3f1db5d8313174d6eb0e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_06b67f0b663b0be43f176ddbe5cc44509ee6547fc2cd4ea44695c0bdc9dc30d3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_06b67f0b663b0be43f176ddbe5cc44509ee6547fc2cd4ea44695c0bdc9dc30d3->enter($__internal_06b67f0b663b0be43f176ddbe5cc44509ee6547fc2cd4ea44695c0bdc9dc30d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_06b67f0b663b0be43f176ddbe5cc44509ee6547fc2cd4ea44695c0bdc9dc30d3->leave($__internal_06b67f0b663b0be43f176ddbe5cc44509ee6547fc2cd4ea44695c0bdc9dc30d3_prof);

        
        $__internal_ee67f6dc7b89661c7d376e1bbea39884aea279a6829b3f1db5d8313174d6eb0e->leave($__internal_ee67f6dc7b89661c7d376e1bbea39884aea279a6829b3f1db5d8313174d6eb0e_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_89c011b98d0563979a22d8509b776dac26d1cb551ff62dc6784d8eafeb88e3b8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_89c011b98d0563979a22d8509b776dac26d1cb551ff62dc6784d8eafeb88e3b8->enter($__internal_89c011b98d0563979a22d8509b776dac26d1cb551ff62dc6784d8eafeb88e3b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_5f9ff0328e8d39acba6f1bffc085441deeb476b1f54773357288d0d3a6149eb2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5f9ff0328e8d39acba6f1bffc085441deeb476b1f54773357288d0d3a6149eb2->enter($__internal_5f9ff0328e8d39acba6f1bffc085441deeb476b1f54773357288d0d3a6149eb2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_5f9ff0328e8d39acba6f1bffc085441deeb476b1f54773357288d0d3a6149eb2->leave($__internal_5f9ff0328e8d39acba6f1bffc085441deeb476b1f54773357288d0d3a6149eb2_prof);

        
        $__internal_89c011b98d0563979a22d8509b776dac26d1cb551ff62dc6784d8eafeb88e3b8->leave($__internal_89c011b98d0563979a22d8509b776dac26d1cb551ff62dc6784d8eafeb88e3b8_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 33,  135 => 32,  129 => 28,  127 => 27,  123 => 25,  114 => 24,  103 => 21,  97 => 17,  95 => 16,  90 => 14,  85 => 13,  76 => 12,  63 => 9,  57 => 6,  54 => 5,  51 => 4,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block head %}
    {% if collector.hasexception %}
        <style>
            {{ render(path('_profiler_exception_css', { token: token })) }}
        </style>
    {% endif %}
    {{ parent() }}
{% endblock %}

{% block menu %}
    <span class=\"label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}\">
        <span class=\"icon\">{{ include('@WebProfiler/Icon/exception.svg') }}</span>
        <strong>Exception</strong>
        {% if collector.hasexception %}
            <span class=\"count\">
                <span>1</span>
            </span>
        {% endif %}
    </span>
{% endblock %}

{% block panel %}
    <h2>Exceptions</h2>

    {% if not collector.hasexception %}
        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    {% else %}
        <div class=\"sf-reset\">
            {{ render(path('_profiler_exception', { token: token })) }}
        </div>
    {% endif %}
{% endblock %}
", "@WebProfiler/Collector/exception.html.twig", "/Users/aaitlhadj/PhpstormProjects/Ydays/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/exception.html.twig");
    }
}

<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_0dae9d69b61000eb625c94d60271a2d75a87c1262c9bc71a62dc8aa260c9fa82 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_1a74317433b12bc0bdf4e2ac6be637925f7a8217e2fc84fc12e02ee8c6abc4d2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1a74317433b12bc0bdf4e2ac6be637925f7a8217e2fc84fc12e02ee8c6abc4d2->enter($__internal_1a74317433b12bc0bdf4e2ac6be637925f7a8217e2fc84fc12e02ee8c6abc4d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $__internal_b662d084dd2fd95a807f3033b08100d1894315723fc23e8eb2d6320f4c7cdefa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b662d084dd2fd95a807f3033b08100d1894315723fc23e8eb2d6320f4c7cdefa->enter($__internal_b662d084dd2fd95a807f3033b08100d1894315723fc23e8eb2d6320f4c7cdefa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1a74317433b12bc0bdf4e2ac6be637925f7a8217e2fc84fc12e02ee8c6abc4d2->leave($__internal_1a74317433b12bc0bdf4e2ac6be637925f7a8217e2fc84fc12e02ee8c6abc4d2_prof);

        
        $__internal_b662d084dd2fd95a807f3033b08100d1894315723fc23e8eb2d6320f4c7cdefa->leave($__internal_b662d084dd2fd95a807f3033b08100d1894315723fc23e8eb2d6320f4c7cdefa_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_38f682ad168f7d0d581e1b7330868e4bdc81a2940e2fea487defa8d6daeafeff = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_38f682ad168f7d0d581e1b7330868e4bdc81a2940e2fea487defa8d6daeafeff->enter($__internal_38f682ad168f7d0d581e1b7330868e4bdc81a2940e2fea487defa8d6daeafeff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_d8e2561a87258506c987aa59c69b62d925d45be3d51959b779a9738a28fb1510 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d8e2561a87258506c987aa59c69b62d925d45be3d51959b779a9738a28fb1510->enter($__internal_d8e2561a87258506c987aa59c69b62d925d45be3d51959b779a9738a28fb1510_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
";
        
        $__internal_d8e2561a87258506c987aa59c69b62d925d45be3d51959b779a9738a28fb1510->leave($__internal_d8e2561a87258506c987aa59c69b62d925d45be3d51959b779a9738a28fb1510_prof);

        
        $__internal_38f682ad168f7d0d581e1b7330868e4bdc81a2940e2fea487defa8d6daeafeff->leave($__internal_38f682ad168f7d0d581e1b7330868e4bdc81a2940e2fea487defa8d6daeafeff_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_a88b6887ffafd9c9c96efbfc1dd6e6d794ad7e127490b5b9794626266851b018 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a88b6887ffafd9c9c96efbfc1dd6e6d794ad7e127490b5b9794626266851b018->enter($__internal_a88b6887ffafd9c9c96efbfc1dd6e6d794ad7e127490b5b9794626266851b018_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_e49a88eba29e62625d4e20e691d5a1b695600fa5ca80b01a855295c0d18f44c9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e49a88eba29e62625d4e20e691d5a1b695600fa5ca80b01a855295c0d18f44c9->enter($__internal_e49a88eba29e62625d4e20e691d5a1b695600fa5ca80b01a855295c0d18f44c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_e49a88eba29e62625d4e20e691d5a1b695600fa5ca80b01a855295c0d18f44c9->leave($__internal_e49a88eba29e62625d4e20e691d5a1b695600fa5ca80b01a855295c0d18f44c9_prof);

        
        $__internal_a88b6887ffafd9c9c96efbfc1dd6e6d794ad7e127490b5b9794626266851b018->leave($__internal_a88b6887ffafd9c9c96efbfc1dd6e6d794ad7e127490b5b9794626266851b018_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_a6992fed195d7f1fdab04a1e79c88ab3e4631c40959a9a6da713d631b239534e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a6992fed195d7f1fdab04a1e79c88ab3e4631c40959a9a6da713d631b239534e->enter($__internal_a6992fed195d7f1fdab04a1e79c88ab3e4631c40959a9a6da713d631b239534e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_379b6f8031253164facca1b3e30468c4a13ec28c15085f88b97f1da2219ef315 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_379b6f8031253164facca1b3e30468c4a13ec28c15085f88b97f1da2219ef315->enter($__internal_379b6f8031253164facca1b3e30468c4a13ec28c15085f88b97f1da2219ef315_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 141)->display($context);
        
        $__internal_379b6f8031253164facca1b3e30468c4a13ec28c15085f88b97f1da2219ef315->leave($__internal_379b6f8031253164facca1b3e30468c4a13ec28c15085f88b97f1da2219ef315_prof);

        
        $__internal_a6992fed195d7f1fdab04a1e79c88ab3e4631c40959a9a6da713d631b239534e->leave($__internal_a6992fed195d7f1fdab04a1e79c88ab3e4631c40959a9a6da713d631b239534e_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  226 => 141,  217 => 140,  200 => 137,  191 => 136,  51 => 4,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block head %}
    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
", "@Twig/Exception/exception_full.html.twig", "/Users/aaitlhadj/PhpstormProjects/Ydays/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception_full.html.twig");
    }
}

<?php

/* base.html.twig */
class __TwigTemplate_5243e67711bac2fc0c14b6ec06976c49537ac5c99c8f4cd130d64480f977da94 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'header' => array($this, 'block_header'),
            'footer' => array($this, 'block_footer'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_76806ace9d30cff5bc6d1e9c30834f1d7fd3ff39e4049b28da35ff784ae995be = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_76806ace9d30cff5bc6d1e9c30834f1d7fd3ff39e4049b28da35ff784ae995be->enter($__internal_76806ace9d30cff5bc6d1e9c30834f1d7fd3ff39e4049b28da35ff784ae995be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_f5570ccbd30631530e27e13672fc018cf1790f9e4b91963008f7c6a5d0a546ef = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f5570ccbd30631530e27e13672fc018cf1790f9e4b91963008f7c6a5d0a546ef->enter($__internal_f5570ccbd30631530e27e13672fc018cf1790f9e4b91963008f7c6a5d0a546ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css\" integrity=\"sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u\" crossorigin=\"anonymous\">

    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('header', $context, $blocks);
        // line 34
        echo "
        ";
        // line 35
        $this->displayBlock('footer', $context, $blocks);
        // line 45
        echo "    </body>
</html>
";
        
        $__internal_76806ace9d30cff5bc6d1e9c30834f1d7fd3ff39e4049b28da35ff784ae995be->leave($__internal_76806ace9d30cff5bc6d1e9c30834f1d7fd3ff39e4049b28da35ff784ae995be_prof);

        
        $__internal_f5570ccbd30631530e27e13672fc018cf1790f9e4b91963008f7c6a5d0a546ef->leave($__internal_f5570ccbd30631530e27e13672fc018cf1790f9e4b91963008f7c6a5d0a546ef_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_f73392432efda95e37e750bcf5e56c6349dbc75615672aa925a323ac845c605c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f73392432efda95e37e750bcf5e56c6349dbc75615672aa925a323ac845c605c->enter($__internal_f73392432efda95e37e750bcf5e56c6349dbc75615672aa925a323ac845c605c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_99dde50ed73528f9975a627d434be6b34c40ae11efd13b3ba25e640f242a205f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_99dde50ed73528f9975a627d434be6b34c40ae11efd13b3ba25e640f242a205f->enter($__internal_99dde50ed73528f9975a627d434be6b34c40ae11efd13b3ba25e640f242a205f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Accueil";
        
        $__internal_99dde50ed73528f9975a627d434be6b34c40ae11efd13b3ba25e640f242a205f->leave($__internal_99dde50ed73528f9975a627d434be6b34c40ae11efd13b3ba25e640f242a205f_prof);

        
        $__internal_f73392432efda95e37e750bcf5e56c6349dbc75615672aa925a323ac845c605c->leave($__internal_f73392432efda95e37e750bcf5e56c6349dbc75615672aa925a323ac845c605c_prof);

    }

    // line 10
    public function block_header($context, array $blocks = array())
    {
        $__internal_cf9300e61c249225f693f942b3e8bb16855fab3032dd8ff1eee05294d80731d6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cf9300e61c249225f693f942b3e8bb16855fab3032dd8ff1eee05294d80731d6->enter($__internal_cf9300e61c249225f693f942b3e8bb16855fab3032dd8ff1eee05294d80731d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        $__internal_f7b9200e3bcd60deb0141ffbd4d7cb80b6837eb45e8d5f3c0ef287e61eeba69e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f7b9200e3bcd60deb0141ffbd4d7cb80b6837eb45e8d5f3c0ef287e61eeba69e->enter($__internal_f7b9200e3bcd60deb0141ffbd4d7cb80b6837eb45e8d5f3c0ef287e61eeba69e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        // line 11
        echo "            <nav class=\"navbar  navbar-inverse  navbar-fixed-top\">
                <div class=\"container\">
                    <button type=\"button\" class=\"navbar-toggle\"
                            data-toggle=\"collapse\"
                            data-target=\".navbar-collapse\"
                    >
                        <span class=\"sr-only\"> Toggle navigation</span>
                        <span class=\"icon-bar\"> </span>
                        <span class=\"icon-bar\"> </span>
                        <span class=\"icon-bar\"> </span>
                    </button>

                    <a class=\"navbar-brand\" href=\"#\"> Ydays Project</a>

                    <div class=\"navbar-collapse collapse\">
                        <ul class=\"nav navbar-nav navbar-right\">
                            <li class=\"\"><a href=\"/inscription\">Inscription</a> </li>
                            <li> <a href=\"/connexion\">Connexion</a> </li>
                        </ul>
                    </div>
                </div>
            </nav>
        ";
        
        $__internal_f7b9200e3bcd60deb0141ffbd4d7cb80b6837eb45e8d5f3c0ef287e61eeba69e->leave($__internal_f7b9200e3bcd60deb0141ffbd4d7cb80b6837eb45e8d5f3c0ef287e61eeba69e_prof);

        
        $__internal_cf9300e61c249225f693f942b3e8bb16855fab3032dd8ff1eee05294d80731d6->leave($__internal_cf9300e61c249225f693f942b3e8bb16855fab3032dd8ff1eee05294d80731d6_prof);

    }

    // line 35
    public function block_footer($context, array $blocks = array())
    {
        $__internal_dfeecf8a4a5a7bc85cee8942e2f88ff845b135134c89e3a55901b443429f7fce = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dfeecf8a4a5a7bc85cee8942e2f88ff845b135134c89e3a55901b443429f7fce->enter($__internal_dfeecf8a4a5a7bc85cee8942e2f88ff845b135134c89e3a55901b443429f7fce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        $__internal_10f6b2795e1f919f4515bc1379f9e1d8005c0b22a959608cb9c6de1229892f68 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_10f6b2795e1f919f4515bc1379f9e1d8005c0b22a959608cb9c6de1229892f68->enter($__internal_10f6b2795e1f919f4515bc1379f9e1d8005c0b22a959608cb9c6de1229892f68_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        // line 36
        echo "            <div class=\"navbar  navbar-inverse navbar-fixed-bottom\">
                <div class=\"container\">
                    <div class=\"navbar-text pull=left\">
                        <p> © YDAYS 2017.</p>
                    </div>

                </div>
            </div>
        ";
        
        $__internal_10f6b2795e1f919f4515bc1379f9e1d8005c0b22a959608cb9c6de1229892f68->leave($__internal_10f6b2795e1f919f4515bc1379f9e1d8005c0b22a959608cb9c6de1229892f68_prof);

        
        $__internal_dfeecf8a4a5a7bc85cee8942e2f88ff845b135134c89e3a55901b443429f7fce->leave($__internal_dfeecf8a4a5a7bc85cee8942e2f88ff845b135134c89e3a55901b443429f7fce_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  129 => 36,  120 => 35,  88 => 11,  79 => 10,  61 => 5,  49 => 45,  47 => 35,  44 => 34,  42 => 10,  34 => 5,  28 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>{% block title %}Accueil{% endblock %}</title>
        <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css\" integrity=\"sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u\" crossorigin=\"anonymous\">

    </head>
    <body>
        {% block header %}
            <nav class=\"navbar  navbar-inverse  navbar-fixed-top\">
                <div class=\"container\">
                    <button type=\"button\" class=\"navbar-toggle\"
                            data-toggle=\"collapse\"
                            data-target=\".navbar-collapse\"
                    >
                        <span class=\"sr-only\"> Toggle navigation</span>
                        <span class=\"icon-bar\"> </span>
                        <span class=\"icon-bar\"> </span>
                        <span class=\"icon-bar\"> </span>
                    </button>

                    <a class=\"navbar-brand\" href=\"#\"> Ydays Project</a>

                    <div class=\"navbar-collapse collapse\">
                        <ul class=\"nav navbar-nav navbar-right\">
                            <li class=\"\"><a href=\"/inscription\">Inscription</a> </li>
                            <li> <a href=\"/connexion\">Connexion</a> </li>
                        </ul>
                    </div>
                </div>
            </nav>
        {% endblock %}

        {% block footer %}
            <div class=\"navbar  navbar-inverse navbar-fixed-bottom\">
                <div class=\"container\">
                    <div class=\"navbar-text pull=left\">
                        <p> © YDAYS 2017.</p>
                    </div>

                </div>
            </div>
        {% endblock %}
    </body>
</html>
", "base.html.twig", "/Users/aaitlhadj/PhpstormProjects/Ydays/app/Resources/views/base.html.twig");
    }
}

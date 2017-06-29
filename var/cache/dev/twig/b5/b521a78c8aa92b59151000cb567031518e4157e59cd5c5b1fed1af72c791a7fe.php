<?php

/* connexion.html.twig */
class __TwigTemplate_a50a3e457c97ed3c98f08daf5be2567fd5fe958ba8d9ea08ddad747f941e64ec extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
            'footer' => array($this, 'block_footer'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_626d585ff7e7ef75cfb899c314c1cdc868a163b67b255ee1e0676db521a8501b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_626d585ff7e7ef75cfb899c314c1cdc868a163b67b255ee1e0676db521a8501b->enter($__internal_626d585ff7e7ef75cfb899c314c1cdc868a163b67b255ee1e0676db521a8501b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "connexion.html.twig"));

        $__internal_32b7ff87293e0de9acf1b8dcde63028bc977978ce56f0eab65bc61ba813d2720 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_32b7ff87293e0de9acf1b8dcde63028bc977978ce56f0eab65bc61ba813d2720->enter($__internal_32b7ff87293e0de9acf1b8dcde63028bc977978ce56f0eab65bc61ba813d2720_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "connexion.html.twig"));

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
        $this->displayBlock('body', $context, $blocks);
        // line 59
        $this->displayBlock('footer', $context, $blocks);
        
        $__internal_626d585ff7e7ef75cfb899c314c1cdc868a163b67b255ee1e0676db521a8501b->leave($__internal_626d585ff7e7ef75cfb899c314c1cdc868a163b67b255ee1e0676db521a8501b_prof);

        
        $__internal_32b7ff87293e0de9acf1b8dcde63028bc977978ce56f0eab65bc61ba813d2720->leave($__internal_32b7ff87293e0de9acf1b8dcde63028bc977978ce56f0eab65bc61ba813d2720_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_b1a1173f129bef647fc5206492e3759ff308dfe4be55a24d2ee364c8ce4a6661 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b1a1173f129bef647fc5206492e3759ff308dfe4be55a24d2ee364c8ce4a6661->enter($__internal_b1a1173f129bef647fc5206492e3759ff308dfe4be55a24d2ee364c8ce4a6661_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_e1876c53f043dece0440b0e446898517f8e577728a7a4bf10dfa56faf5b41662 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e1876c53f043dece0440b0e446898517f8e577728a7a4bf10dfa56faf5b41662->enter($__internal_e1876c53f043dece0440b0e446898517f8e577728a7a4bf10dfa56faf5b41662_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Connexion";
        
        $__internal_e1876c53f043dece0440b0e446898517f8e577728a7a4bf10dfa56faf5b41662->leave($__internal_e1876c53f043dece0440b0e446898517f8e577728a7a4bf10dfa56faf5b41662_prof);

        
        $__internal_b1a1173f129bef647fc5206492e3759ff308dfe4be55a24d2ee364c8ce4a6661->leave($__internal_b1a1173f129bef647fc5206492e3759ff308dfe4be55a24d2ee364c8ce4a6661_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_23d56087586b26e1047a7c3a9450a8ebf44337ad67cc59ad8b4094be41582748 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_23d56087586b26e1047a7c3a9450a8ebf44337ad67cc59ad8b4094be41582748->enter($__internal_23d56087586b26e1047a7c3a9450a8ebf44337ad67cc59ad8b4094be41582748_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_1277265acaa8f1b8937fe1648d290da40a404daeb67ffec7b76245ee46bf5426 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1277265acaa8f1b8937fe1648d290da40a404daeb67ffec7b76245ee46bf5426->enter($__internal_1277265acaa8f1b8937fe1648d290da40a404daeb67ffec7b76245ee46bf5426_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 11
        echo "
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

        <a class=\"navbar-brand\" href=\"/\"> Ydays Project</a>

        <div class=\"navbar-collapse collapse\">
            <ul class=\"nav navbar-nav navbar-right\">
                <li class=\"\"><a href=\"/inscription\">Inscription</a> </li>
                <li> <a href=\"#\">Connexion</a> </li>
            </ul>
        </div>
    </div>
</nav>

<div class=\"panel panel-default\" style=\"margin-left: 180px; margin-top:100px;width: 900px;\">
    <div class=\"panel-heading\">Connexion
    </div>
    <div class=\"panel-body\">
        <div class=\"row\">
            <div class=\"col-md-12\">
                <div class=\"form-group\">
                    <label for=\"email\">Email address</label>
                    <input type=\"email\" class=\"form-control\" id=\"email\">
                </div>
                <div class=\"form-group\">
                    <label for=\"password\">Password</label>
                    <input type=\"text\" class=\"form-control\" id=\"password\">
                </div>
            </div>
        </div>
        <div class=\"pull-right control group\">
            <button type='button' class='btn btn-success'>Connexion</button>
        </div>
    </div>
</div>
</body>

";
        
        $__internal_1277265acaa8f1b8937fe1648d290da40a404daeb67ffec7b76245ee46bf5426->leave($__internal_1277265acaa8f1b8937fe1648d290da40a404daeb67ffec7b76245ee46bf5426_prof);

        
        $__internal_23d56087586b26e1047a7c3a9450a8ebf44337ad67cc59ad8b4094be41582748->leave($__internal_23d56087586b26e1047a7c3a9450a8ebf44337ad67cc59ad8b4094be41582748_prof);

    }

    // line 59
    public function block_footer($context, array $blocks = array())
    {
        $__internal_782063f8ead242de57ee8c7bd3ba60a91f81cd46614a7ec1ece59556e87a1300 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_782063f8ead242de57ee8c7bd3ba60a91f81cd46614a7ec1ece59556e87a1300->enter($__internal_782063f8ead242de57ee8c7bd3ba60a91f81cd46614a7ec1ece59556e87a1300_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        $__internal_40c575544d7a2a50f146acce85e2dd50a348b305e634a9a064d0bfd8492bc7e7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_40c575544d7a2a50f146acce85e2dd50a348b305e634a9a064d0bfd8492bc7e7->enter($__internal_40c575544d7a2a50f146acce85e2dd50a348b305e634a9a064d0bfd8492bc7e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        // line 60
        echo "<div class=\"navbar  navbar-inverse navbar-fixed-bottom\">
    <div class=\"container\">
        <div class=\"navbar-text pull=left\">
            <p> © YDAYS 2017.</p>
        </div>

    </div>
</div>
";
        
        $__internal_40c575544d7a2a50f146acce85e2dd50a348b305e634a9a064d0bfd8492bc7e7->leave($__internal_40c575544d7a2a50f146acce85e2dd50a348b305e634a9a064d0bfd8492bc7e7_prof);

        
        $__internal_782063f8ead242de57ee8c7bd3ba60a91f81cd46614a7ec1ece59556e87a1300->leave($__internal_782063f8ead242de57ee8c7bd3ba60a91f81cd46614a7ec1ece59556e87a1300_prof);

    }

    public function getTemplateName()
    {
        return "connexion.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  147 => 60,  138 => 59,  81 => 11,  72 => 10,  54 => 5,  44 => 59,  42 => 10,  34 => 5,  28 => 1,);
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
    <title>{% block title %}Connexion{% endblock %}</title>
    <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css\" integrity=\"sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u\" crossorigin=\"anonymous\">

</head>
<body>
{% block body %}

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

        <a class=\"navbar-brand\" href=\"/\"> Ydays Project</a>

        <div class=\"navbar-collapse collapse\">
            <ul class=\"nav navbar-nav navbar-right\">
                <li class=\"\"><a href=\"/inscription\">Inscription</a> </li>
                <li> <a href=\"#\">Connexion</a> </li>
            </ul>
        </div>
    </div>
</nav>

<div class=\"panel panel-default\" style=\"margin-left: 180px; margin-top:100px;width: 900px;\">
    <div class=\"panel-heading\">Connexion
    </div>
    <div class=\"panel-body\">
        <div class=\"row\">
            <div class=\"col-md-12\">
                <div class=\"form-group\">
                    <label for=\"email\">Email address</label>
                    <input type=\"email\" class=\"form-control\" id=\"email\">
                </div>
                <div class=\"form-group\">
                    <label for=\"password\">Password</label>
                    <input type=\"text\" class=\"form-control\" id=\"password\">
                </div>
            </div>
        </div>
        <div class=\"pull-right control group\">
            <button type='button' class='btn btn-success'>Connexion</button>
        </div>
    </div>
</div>
</body>

{% endblock %}
{% block footer %}
<div class=\"navbar  navbar-inverse navbar-fixed-bottom\">
    <div class=\"container\">
        <div class=\"navbar-text pull=left\">
            <p> © YDAYS 2017.</p>
        </div>

    </div>
</div>
{% endblock %}", "connexion.html.twig", "/Users/aaitlhadj/PhpstormProjects/Ydays/app/Resources/views/connexion.html.twig");
    }
}

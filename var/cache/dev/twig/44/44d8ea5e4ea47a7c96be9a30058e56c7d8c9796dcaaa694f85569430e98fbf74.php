<?php

/* inscription.html.twig */
class __TwigTemplate_c3c3ebad97fd2791733e50501cdb9b79be6aefd9c5df423b33ab6fd987d87af3 extends Twig_Template
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
        $__internal_1a405f7d26b41ccb319b1193e04cd88cf4d5790af57b606e42aeaeb0705df71d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1a405f7d26b41ccb319b1193e04cd88cf4d5790af57b606e42aeaeb0705df71d->enter($__internal_1a405f7d26b41ccb319b1193e04cd88cf4d5790af57b606e42aeaeb0705df71d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "inscription.html.twig"));

        $__internal_fd9c4e4336c77de0e0a98e3f4411bb6c2de3c6153b2b52db49a2ea4e518d6442 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fd9c4e4336c77de0e0a98e3f4411bb6c2de3c6153b2b52db49a2ea4e518d6442->enter($__internal_fd9c4e4336c77de0e0a98e3f4411bb6c2de3c6153b2b52db49a2ea4e518d6442_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "inscription.html.twig"));

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
        // line 93
        $this->displayBlock('footer', $context, $blocks);
        
        $__internal_1a405f7d26b41ccb319b1193e04cd88cf4d5790af57b606e42aeaeb0705df71d->leave($__internal_1a405f7d26b41ccb319b1193e04cd88cf4d5790af57b606e42aeaeb0705df71d_prof);

        
        $__internal_fd9c4e4336c77de0e0a98e3f4411bb6c2de3c6153b2b52db49a2ea4e518d6442->leave($__internal_fd9c4e4336c77de0e0a98e3f4411bb6c2de3c6153b2b52db49a2ea4e518d6442_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_565dada99415fda7c4f51c8b56a7a5834584c56dad5964b77b01b5a783e56c75 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_565dada99415fda7c4f51c8b56a7a5834584c56dad5964b77b01b5a783e56c75->enter($__internal_565dada99415fda7c4f51c8b56a7a5834584c56dad5964b77b01b5a783e56c75_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_021d91503053ecb9a408a70a02a05501096309c332da8488ecde053ce9b71ae3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_021d91503053ecb9a408a70a02a05501096309c332da8488ecde053ce9b71ae3->enter($__internal_021d91503053ecb9a408a70a02a05501096309c332da8488ecde053ce9b71ae3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Inscription";
        
        $__internal_021d91503053ecb9a408a70a02a05501096309c332da8488ecde053ce9b71ae3->leave($__internal_021d91503053ecb9a408a70a02a05501096309c332da8488ecde053ce9b71ae3_prof);

        
        $__internal_565dada99415fda7c4f51c8b56a7a5834584c56dad5964b77b01b5a783e56c75->leave($__internal_565dada99415fda7c4f51c8b56a7a5834584c56dad5964b77b01b5a783e56c75_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_a99c785c8dcc9e61850e5098c879266d481049aad9d51a52e62efc1d7b07b35f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a99c785c8dcc9e61850e5098c879266d481049aad9d51a52e62efc1d7b07b35f->enter($__internal_a99c785c8dcc9e61850e5098c879266d481049aad9d51a52e62efc1d7b07b35f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_7d440e8160aeb9f13c44aa8927e5785a59563b566a726204b214feacd9c97046 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7d440e8160aeb9f13c44aa8927e5785a59563b566a726204b214feacd9c97046->enter($__internal_7d440e8160aeb9f13c44aa8927e5785a59563b566a726204b214feacd9c97046_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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

            <a class=\"navbar-brand\" href=\"base.html.twig\"> Ydays</a>

            <div class=\"navbar-collapse collapse\">
                <ul class=\"nav navbar-nav navbar-right\">
                    <li class=\"\"><a href=\"#\">Inscription</a> </li>
                    <li> <a href=\"connexion.html.twig\">Connexion</a> </li>
                </ul>
            </div>
        </div>
    </nav>

<body style=\"margin-top: 100px\">
<nav class=\"navbar  navbar-inverse  navbar-fixed-top\">
    <div class=\"container\">
        <button type=\"button\" class=\"navbar-toggle\"
                data-toggle=\"collapse\"
                data-target=\".navbar-collapse\">

            <span class=\"sr-only\"> Toggle navigation</span>
            <span class=\"icon-bar\"> </span>
            <span class=\"icon-bar\"> </span>
            <span class=\"icon-bar\"> </span>
        </button>

        <a class=\"navbar-brand\" href=\"/\"> Ydays Project</a>

        <div class=\"navbar-collapse collapse\">
            <ul class=\"nav navbar-nav navbar-right\">
                <li class=\"\"><a href=#>Inscription</a> </li>
                <li> <a href=\"/connexion\">Connexion</a> </li>
            </ul>
        </div>
    </div>
</nav>
<div class=\"panel panel-default\" style=\"margin-left: 180px; width: 900px;\">
    <div class=\"panel-heading \">Inscription
    </div>
    <div class=\"panel-body\">
        <div class=\"row\">
            <div class=\"col-md-12\">
                <div class=\"form-group\">
                    <label for=\"name\">Nom</label>
                    <input type=\"text\" class=\"form-control\" id=\"username\">
                </div>
                <div class=\"form-group\">
                    <label for=\"firstname\">Prenom</label>
                    <input type=\"text\" class=\"form-control\" id=\"username\">
                </div>
                <div class=\"form-group\">
                    <label for=\"email\">Email address</label>
                    <input type=\"email\" class=\"form-control\" id=\"email\">
                </div>
                <div class=\"form-group\">
                    <label for=\"password\">Mot de passe</label>
                    <input type=\"text\" class=\"form-control\" id=\"password\">
                </div>
                <div class=\"form-group\">
                    <label for=\"Confirm_Password\">Confirmer le mot de passe</label>
                    <input type=\"text\" class=\"form-control\" id=\"Confirm_Password\">
                </div>
            </div>
        </div>
        <div class=\"pull-right control group\">
            <button type='button' class='btn btn-success'>Inscription</button>
        </div>
    </div>
</div>
</body>
";
        
        $__internal_7d440e8160aeb9f13c44aa8927e5785a59563b566a726204b214feacd9c97046->leave($__internal_7d440e8160aeb9f13c44aa8927e5785a59563b566a726204b214feacd9c97046_prof);

        
        $__internal_a99c785c8dcc9e61850e5098c879266d481049aad9d51a52e62efc1d7b07b35f->leave($__internal_a99c785c8dcc9e61850e5098c879266d481049aad9d51a52e62efc1d7b07b35f_prof);

    }

    // line 93
    public function block_footer($context, array $blocks = array())
    {
        $__internal_3ea6eab686eb76e9661e243f9746fa3aa21f794cc885f0b79db38d078f6cbbbc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3ea6eab686eb76e9661e243f9746fa3aa21f794cc885f0b79db38d078f6cbbbc->enter($__internal_3ea6eab686eb76e9661e243f9746fa3aa21f794cc885f0b79db38d078f6cbbbc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        $__internal_79aeaf24167a83d7ec923dded42722707c3f6e71f5598f37e7583c6fcbdd0f14 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_79aeaf24167a83d7ec923dded42722707c3f6e71f5598f37e7583c6fcbdd0f14->enter($__internal_79aeaf24167a83d7ec923dded42722707c3f6e71f5598f37e7583c6fcbdd0f14_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        // line 94
        echo "<div class=\"navbar  navbar-inverse navbar-fixed-bottom\">
    <div class=\"container\">
        <div class=\"navbar-text pull=left\">
            <p> © YDAYS 2017.</p>
        </div>

    </div>
</div>
";
        
        $__internal_79aeaf24167a83d7ec923dded42722707c3f6e71f5598f37e7583c6fcbdd0f14->leave($__internal_79aeaf24167a83d7ec923dded42722707c3f6e71f5598f37e7583c6fcbdd0f14_prof);

        
        $__internal_3ea6eab686eb76e9661e243f9746fa3aa21f794cc885f0b79db38d078f6cbbbc->leave($__internal_3ea6eab686eb76e9661e243f9746fa3aa21f794cc885f0b79db38d078f6cbbbc_prof);

    }

    public function getTemplateName()
    {
        return "inscription.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  181 => 94,  172 => 93,  81 => 11,  72 => 10,  54 => 5,  44 => 93,  42 => 10,  34 => 5,  28 => 1,);
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
    <title>{% block title %}Inscription{% endblock %}</title>
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

            <a class=\"navbar-brand\" href=\"base.html.twig\"> Ydays</a>

            <div class=\"navbar-collapse collapse\">
                <ul class=\"nav navbar-nav navbar-right\">
                    <li class=\"\"><a href=\"#\">Inscription</a> </li>
                    <li> <a href=\"connexion.html.twig\">Connexion</a> </li>
                </ul>
            </div>
        </div>
    </nav>

<body style=\"margin-top: 100px\">
<nav class=\"navbar  navbar-inverse  navbar-fixed-top\">
    <div class=\"container\">
        <button type=\"button\" class=\"navbar-toggle\"
                data-toggle=\"collapse\"
                data-target=\".navbar-collapse\">

            <span class=\"sr-only\"> Toggle navigation</span>
            <span class=\"icon-bar\"> </span>
            <span class=\"icon-bar\"> </span>
            <span class=\"icon-bar\"> </span>
        </button>

        <a class=\"navbar-brand\" href=\"/\"> Ydays Project</a>

        <div class=\"navbar-collapse collapse\">
            <ul class=\"nav navbar-nav navbar-right\">
                <li class=\"\"><a href=#>Inscription</a> </li>
                <li> <a href=\"/connexion\">Connexion</a> </li>
            </ul>
        </div>
    </div>
</nav>
<div class=\"panel panel-default\" style=\"margin-left: 180px; width: 900px;\">
    <div class=\"panel-heading \">Inscription
    </div>
    <div class=\"panel-body\">
        <div class=\"row\">
            <div class=\"col-md-12\">
                <div class=\"form-group\">
                    <label for=\"name\">Nom</label>
                    <input type=\"text\" class=\"form-control\" id=\"username\">
                </div>
                <div class=\"form-group\">
                    <label for=\"firstname\">Prenom</label>
                    <input type=\"text\" class=\"form-control\" id=\"username\">
                </div>
                <div class=\"form-group\">
                    <label for=\"email\">Email address</label>
                    <input type=\"email\" class=\"form-control\" id=\"email\">
                </div>
                <div class=\"form-group\">
                    <label for=\"password\">Mot de passe</label>
                    <input type=\"text\" class=\"form-control\" id=\"password\">
                </div>
                <div class=\"form-group\">
                    <label for=\"Confirm_Password\">Confirmer le mot de passe</label>
                    <input type=\"text\" class=\"form-control\" id=\"Confirm_Password\">
                </div>
            </div>
        </div>
        <div class=\"pull-right control group\">
            <button type='button' class='btn btn-success'>Inscription</button>
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
{% endblock %}", "inscription.html.twig", "/Users/aaitlhadj/PhpstormProjects/Ydays/app/Resources/views/inscription.html.twig");
    }
}

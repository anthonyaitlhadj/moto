<?php

/* base.html.twig */
class __TwigTemplate_37ba6d5de9960f9ee6f694a0fba71c00eaa4c2bf7b056af15d4bc6977afbad42 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'header' => array($this, 'block_header'),
            'body' => array($this, 'block_body'),
            'footer' => array($this, 'block_footer'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
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

    ";
        // line 10
        $this->displayBlock('header', $context, $blocks);
        // line 34
        echo "
    ";
        // line 35
        $this->displayBlock('body', $context, $blocks);
        // line 56
        echo "


    ";
        // line 59
        $this->displayBlock('footer', $context, $blocks);
        // line 69
        echo "</html>
";
    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        echo "Accueil";
    }

    // line 10
    public function block_header($context, array $blocks = array())
    {
        // line 11
        echo "        <nav class=\"navbar  navbar-inverse  navbar-fixed-top\">
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
    }

    // line 35
    public function block_body($context, array $blocks = array())
    {
        // line 36
        echo "        <div class=\"container\" style=\"margin-top: 100px\">
            <div class=\"row\">
                <div class=\"col-md-4\">
                    <div class=\"thumbnail\">
                        <img src=\"";
        // line 40
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/escape.png"), "html", null, true);
        echo "\" alt=\"\">
                        <div class=\"caption\">
                            <h4 class=\"pull-right\">A partir de 16€</h4>
                            <h4><a href=\"#\">Ktm 125</a></h4>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                        </div>
                        <div class=\"space-ten\"></div>
                        <div class=\"btn-ground text-center\">
                            <button type=\"button\" class=\"btn btn-primary\" data-toggle=\"modal\" data-target=\"#product_view\"><i class=\"fa fa-search\"></i>Aperçu</button>
                        </div>
                        <div class=\"space-ten\"></div>
                    </div>
                </div>
            </div>
        </div>
    ";
    }

    // line 59
    public function block_footer($context, array $blocks = array())
    {
        // line 60
        echo "        <div class=\"navbar  navbar-inverse navbar-fixed-bottom\">
            <div class=\"container\">
                <div class=\"navbar-text pull=left\">
                    <p> © YDAYS 2017.</p>
                </div>

            </div>
        </div>
    ";
    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  123 => 60,  120 => 59,  100 => 40,  94 => 36,  91 => 35,  65 => 11,  62 => 10,  56 => 5,  51 => 69,  49 => 59,  44 => 56,  42 => 35,  39 => 34,  37 => 10,  29 => 5,  23 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "base.html.twig", "/Applications/MAMP/htdocs/Ydays/app/Resources/views/base.html.twig");
    }
}

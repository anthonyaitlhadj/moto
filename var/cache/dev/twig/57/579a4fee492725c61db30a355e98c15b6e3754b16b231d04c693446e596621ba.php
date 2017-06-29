<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_a0ab1fb4a0aa09ee5535a80573bc6497da13d5b38022c26061960146fcaea2bd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
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
        $__internal_8effdf2d29a5086f8267b05fee3ab850483e228825cabcbfd19bd353232b617e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8effdf2d29a5086f8267b05fee3ab850483e228825cabcbfd19bd353232b617e->enter($__internal_8effdf2d29a5086f8267b05fee3ab850483e228825cabcbfd19bd353232b617e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_897841c1a5d6b3da3773dad60b33eedec6e9e526bbd868a6d88dd43591759231 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_897841c1a5d6b3da3773dad60b33eedec6e9e526bbd868a6d88dd43591759231->enter($__internal_897841c1a5d6b3da3773dad60b33eedec6e9e526bbd868a6d88dd43591759231_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8effdf2d29a5086f8267b05fee3ab850483e228825cabcbfd19bd353232b617e->leave($__internal_8effdf2d29a5086f8267b05fee3ab850483e228825cabcbfd19bd353232b617e_prof);

        
        $__internal_897841c1a5d6b3da3773dad60b33eedec6e9e526bbd868a6d88dd43591759231->leave($__internal_897841c1a5d6b3da3773dad60b33eedec6e9e526bbd868a6d88dd43591759231_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_a5fa96ab5febdde6ebd0b8bd8e3937ad2c70e5ae3642abdadc84f97ded1e56bc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a5fa96ab5febdde6ebd0b8bd8e3937ad2c70e5ae3642abdadc84f97ded1e56bc->enter($__internal_a5fa96ab5febdde6ebd0b8bd8e3937ad2c70e5ae3642abdadc84f97ded1e56bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_c162fe1c487581d8ea62fd361ab2863adc23b30f843fb17608d69b7dcac5613b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c162fe1c487581d8ea62fd361ab2863adc23b30f843fb17608d69b7dcac5613b->enter($__internal_c162fe1c487581d8ea62fd361ab2863adc23b30f843fb17608d69b7dcac5613b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_c162fe1c487581d8ea62fd361ab2863adc23b30f843fb17608d69b7dcac5613b->leave($__internal_c162fe1c487581d8ea62fd361ab2863adc23b30f843fb17608d69b7dcac5613b_prof);

        
        $__internal_a5fa96ab5febdde6ebd0b8bd8e3937ad2c70e5ae3642abdadc84f97ded1e56bc->leave($__internal_a5fa96ab5febdde6ebd0b8bd8e3937ad2c70e5ae3642abdadc84f97ded1e56bc_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_20d2bde05913de35c6de72c018ed5d7d435744b0c0ba73761591e0c66130831f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_20d2bde05913de35c6de72c018ed5d7d435744b0c0ba73761591e0c66130831f->enter($__internal_20d2bde05913de35c6de72c018ed5d7d435744b0c0ba73761591e0c66130831f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_1fd419e8a2f226e9efb69b2bb222d6ad2d43dfffaa7eda37ccd1e3bdc4987207 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1fd419e8a2f226e9efb69b2bb222d6ad2d43dfffaa7eda37ccd1e3bdc4987207->enter($__internal_1fd419e8a2f226e9efb69b2bb222d6ad2d43dfffaa7eda37ccd1e3bdc4987207_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_1fd419e8a2f226e9efb69b2bb222d6ad2d43dfffaa7eda37ccd1e3bdc4987207->leave($__internal_1fd419e8a2f226e9efb69b2bb222d6ad2d43dfffaa7eda37ccd1e3bdc4987207_prof);

        
        $__internal_20d2bde05913de35c6de72c018ed5d7d435744b0c0ba73761591e0c66130831f->leave($__internal_20d2bde05913de35c6de72c018ed5d7d435744b0c0ba73761591e0c66130831f_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_ba8b7bc44a237394698395b5a05db16da66142a32ec4ef51fb874a1c4f5f2d4c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ba8b7bc44a237394698395b5a05db16da66142a32ec4ef51fb874a1c4f5f2d4c->enter($__internal_ba8b7bc44a237394698395b5a05db16da66142a32ec4ef51fb874a1c4f5f2d4c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_3318ff73110e2ded64d0e94dbd89699269ac32316328a80c9552b68debd9b5e4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3318ff73110e2ded64d0e94dbd89699269ac32316328a80c9552b68debd9b5e4->enter($__internal_3318ff73110e2ded64d0e94dbd89699269ac32316328a80c9552b68debd9b5e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_3318ff73110e2ded64d0e94dbd89699269ac32316328a80c9552b68debd9b5e4->leave($__internal_3318ff73110e2ded64d0e94dbd89699269ac32316328a80c9552b68debd9b5e4_prof);

        
        $__internal_ba8b7bc44a237394698395b5a05db16da66142a32ec4ef51fb874a1c4f5f2d4c->leave($__internal_ba8b7bc44a237394698395b5a05db16da66142a32ec4ef51fb874a1c4f5f2d4c_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 13,  85 => 12,  71 => 7,  68 => 6,  59 => 5,  42 => 3,  11 => 1,);
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

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "@WebProfiler/Collector/router.html.twig", "/Users/aaitlhadj/PhpstormProjects/Ydays/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}

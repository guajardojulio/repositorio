<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_47db9ef4f01a9760f3ace6a459cb9882c6733044bb3c023f77dcd55c165b6480 extends Twig_Template
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
        $__internal_54adeec182fc24bf2418bcdfb4ae3afef9effa0697c6aa075636860c10414c0e = $this->env->getExtension("native_profiler");
        $__internal_54adeec182fc24bf2418bcdfb4ae3afef9effa0697c6aa075636860c10414c0e->enter($__internal_54adeec182fc24bf2418bcdfb4ae3afef9effa0697c6aa075636860c10414c0e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_54adeec182fc24bf2418bcdfb4ae3afef9effa0697c6aa075636860c10414c0e->leave($__internal_54adeec182fc24bf2418bcdfb4ae3afef9effa0697c6aa075636860c10414c0e_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_b21ef2162e3524496225f8a8c7c4f280cf93131649a45e401bedcbcb414be78c = $this->env->getExtension("native_profiler");
        $__internal_b21ef2162e3524496225f8a8c7c4f280cf93131649a45e401bedcbcb414be78c->enter($__internal_b21ef2162e3524496225f8a8c7c4f280cf93131649a45e401bedcbcb414be78c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_b21ef2162e3524496225f8a8c7c4f280cf93131649a45e401bedcbcb414be78c->leave($__internal_b21ef2162e3524496225f8a8c7c4f280cf93131649a45e401bedcbcb414be78c_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_2888cbd7fb5daa0e1bee0b2c9fcf85787faa72e17d62f13748e45d86efc86523 = $this->env->getExtension("native_profiler");
        $__internal_2888cbd7fb5daa0e1bee0b2c9fcf85787faa72e17d62f13748e45d86efc86523->enter($__internal_2888cbd7fb5daa0e1bee0b2c9fcf85787faa72e17d62f13748e45d86efc86523_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_2888cbd7fb5daa0e1bee0b2c9fcf85787faa72e17d62f13748e45d86efc86523->leave($__internal_2888cbd7fb5daa0e1bee0b2c9fcf85787faa72e17d62f13748e45d86efc86523_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_149eb723aa16f3186a615d540e451d846cd99910f794507d79253feef077dd7d = $this->env->getExtension("native_profiler");
        $__internal_149eb723aa16f3186a615d540e451d846cd99910f794507d79253feef077dd7d->enter($__internal_149eb723aa16f3186a615d540e451d846cd99910f794507d79253feef077dd7d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_149eb723aa16f3186a615d540e451d846cd99910f794507d79253feef077dd7d->leave($__internal_149eb723aa16f3186a615d540e451d846cd99910f794507d79253feef077dd7d_prof);

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
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@WebProfiler/Profiler/layout.html.twig' %}*/
/* */
/* {% block toolbar %}{% endblock %}*/
/* */
/* {% block menu %}*/
/* <span class="label">*/
/*     <span class="icon">{{ include('@WebProfiler/Icon/router.svg') }}</span>*/
/*     <strong>Routing</strong>*/
/* </span>*/
/* {% endblock %}*/
/* */
/* {% block panel %}*/
/*     {{ render(path('_profiler_router', { token: token })) }}*/
/* {% endblock %}*/
/* */

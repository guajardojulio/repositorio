<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_7c60aa9cdbdfd6061823e5117c4773201f45013de571bc35cac23038b93d49aa extends Twig_Template
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
        $__internal_fa7c495553fbc7089fd95e450703696f28df06eadf6c417583a040dcbe055bd4 = $this->env->getExtension("native_profiler");
        $__internal_fa7c495553fbc7089fd95e450703696f28df06eadf6c417583a040dcbe055bd4->enter($__internal_fa7c495553fbc7089fd95e450703696f28df06eadf6c417583a040dcbe055bd4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fa7c495553fbc7089fd95e450703696f28df06eadf6c417583a040dcbe055bd4->leave($__internal_fa7c495553fbc7089fd95e450703696f28df06eadf6c417583a040dcbe055bd4_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_f559d9ec06b0f0d67e63cd2ee73567314273eed1682d80297d31a26dd6ecb5f1 = $this->env->getExtension("native_profiler");
        $__internal_f559d9ec06b0f0d67e63cd2ee73567314273eed1682d80297d31a26dd6ecb5f1->enter($__internal_f559d9ec06b0f0d67e63cd2ee73567314273eed1682d80297d31a26dd6ecb5f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_exception_css", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_f559d9ec06b0f0d67e63cd2ee73567314273eed1682d80297d31a26dd6ecb5f1->leave($__internal_f559d9ec06b0f0d67e63cd2ee73567314273eed1682d80297d31a26dd6ecb5f1_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_20f17148c50a950211afb44b9fbec45e3e5ccf47d43696253be4d4ef29545e8b = $this->env->getExtension("native_profiler");
        $__internal_20f17148c50a950211afb44b9fbec45e3e5ccf47d43696253be4d4ef29545e8b->enter($__internal_20f17148c50a950211afb44b9fbec45e3e5ccf47d43696253be4d4ef29545e8b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_20f17148c50a950211afb44b9fbec45e3e5ccf47d43696253be4d4ef29545e8b->leave($__internal_20f17148c50a950211afb44b9fbec45e3e5ccf47d43696253be4d4ef29545e8b_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_67591409ebcd54f6d8b347d2b3dd0936c067292397418e5687e2704c22b4a1b4 = $this->env->getExtension("native_profiler");
        $__internal_67591409ebcd54f6d8b347d2b3dd0936c067292397418e5687e2704c22b4a1b4->enter($__internal_67591409ebcd54f6d8b347d2b3dd0936c067292397418e5687e2704c22b4a1b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
            echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_exception", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_67591409ebcd54f6d8b347d2b3dd0936c067292397418e5687e2704c22b4a1b4->leave($__internal_67591409ebcd54f6d8b347d2b3dd0936c067292397418e5687e2704c22b4a1b4_prof);

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
        return array (  117 => 33,  114 => 32,  108 => 28,  106 => 27,  102 => 25,  96 => 24,  88 => 21,  82 => 17,  80 => 16,  75 => 14,  70 => 13,  64 => 12,  54 => 9,  48 => 6,  45 => 5,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@WebProfiler/Profiler/layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     {% if collector.hasexception %}*/
/*         <style>*/
/*             {{ render(path('_profiler_exception_css', { token: token })) }}*/
/*         </style>*/
/*     {% endif %}*/
/*     {{ parent() }}*/
/* {% endblock %}*/
/* */
/* {% block menu %}*/
/*     <span class="label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}">*/
/*         <span class="icon">{{ include('@WebProfiler/Icon/exception.svg') }}</span>*/
/*         <strong>Exception</strong>*/
/*         {% if collector.hasexception %}*/
/*             <span class="count">*/
/*                 <span>1</span>*/
/*             </span>*/
/*         {% endif %}*/
/*     </span>*/
/* {% endblock %}*/
/* */
/* {% block panel %}*/
/*     <h2>Exceptions</h2>*/
/* */
/*     {% if not collector.hasexception %}*/
/*         <div class="empty">*/
/*             <p>No exception was thrown and caught during the request.</p>*/
/*         </div>*/
/*     {% else %}*/
/*         <div class="sf-reset">*/
/*             {{ render(path('_profiler_exception', { token: token })) }}*/
/*         </div>*/
/*     {% endif %}*/
/* {% endblock %}*/
/* */

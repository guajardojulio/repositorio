<?php

/* base.html.twig */
class __TwigTemplate_5135c8365b196e8202a6069d1b5e417ac3efec16fbc0c13c5d5490b13e514c1d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_2f8dffd02f241c6ad2b9840bdb6f2fc49f306f7d1d63e0cc9422bdfb2b27c695 = $this->env->getExtension("native_profiler");
        $__internal_2f8dffd02f241c6ad2b9840bdb6f2fc49f306f7d1d63e0cc9422bdfb2b27c695->enter($__internal_2f8dffd02f241c6ad2b9840bdb6f2fc49f306f7d1d63e0cc9422bdfb2b27c695_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
        
        $__internal_2f8dffd02f241c6ad2b9840bdb6f2fc49f306f7d1d63e0cc9422bdfb2b27c695->leave($__internal_2f8dffd02f241c6ad2b9840bdb6f2fc49f306f7d1d63e0cc9422bdfb2b27c695_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_09d37ba8c6a304fcca06ab58a2fdd0d79a1b4f6b04d49a71b9fd26eb17dc103f = $this->env->getExtension("native_profiler");
        $__internal_09d37ba8c6a304fcca06ab58a2fdd0d79a1b4f6b04d49a71b9fd26eb17dc103f->enter($__internal_09d37ba8c6a304fcca06ab58a2fdd0d79a1b4f6b04d49a71b9fd26eb17dc103f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_09d37ba8c6a304fcca06ab58a2fdd0d79a1b4f6b04d49a71b9fd26eb17dc103f->leave($__internal_09d37ba8c6a304fcca06ab58a2fdd0d79a1b4f6b04d49a71b9fd26eb17dc103f_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_b8d82338cdf6f9592945b8cf2799ca4ada5766fc9a9df737dad9c1c6439df387 = $this->env->getExtension("native_profiler");
        $__internal_b8d82338cdf6f9592945b8cf2799ca4ada5766fc9a9df737dad9c1c6439df387->enter($__internal_b8d82338cdf6f9592945b8cf2799ca4ada5766fc9a9df737dad9c1c6439df387_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_b8d82338cdf6f9592945b8cf2799ca4ada5766fc9a9df737dad9c1c6439df387->leave($__internal_b8d82338cdf6f9592945b8cf2799ca4ada5766fc9a9df737dad9c1c6439df387_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_1c427edd4ff96755c74e84822734414514490369636ede2911012b340424e9f5 = $this->env->getExtension("native_profiler");
        $__internal_1c427edd4ff96755c74e84822734414514490369636ede2911012b340424e9f5->enter($__internal_1c427edd4ff96755c74e84822734414514490369636ede2911012b340424e9f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_1c427edd4ff96755c74e84822734414514490369636ede2911012b340424e9f5->leave($__internal_1c427edd4ff96755c74e84822734414514490369636ede2911012b340424e9f5_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_33b1caa7b7994e536dc73964ac397d344040207e5a93e3dea385791e9290338d = $this->env->getExtension("native_profiler");
        $__internal_33b1caa7b7994e536dc73964ac397d344040207e5a93e3dea385791e9290338d->enter($__internal_33b1caa7b7994e536dc73964ac397d344040207e5a93e3dea385791e9290338d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_33b1caa7b7994e536dc73964ac397d344040207e5a93e3dea385791e9290338d->leave($__internal_33b1caa7b7994e536dc73964ac397d344040207e5a93e3dea385791e9290338d_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 11,  82 => 10,  71 => 6,  59 => 5,  50 => 12,  47 => 11,  45 => 10,  38 => 7,  36 => 6,  32 => 5,  26 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/*         <meta charset="UTF-8" />*/
/*         <title>{% block title %}Welcome!{% endblock %}</title>*/
/*         {% block stylesheets %}{% endblock %}*/
/*         <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}" />*/
/*     </head>*/
/*     <body>*/
/*         {% block body %}{% endblock %}*/
/*         {% block javascripts %}{% endblock %}*/
/*     </body>*/
/* </html>*/
/* */

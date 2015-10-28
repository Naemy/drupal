<?php

/* core/themes/seven/templates/install-page.html.twig */
class __TwigTemplate_e55f0635b16845387f518285bca8a2665ef2ec37b2638405cb2c842a13745aa7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 12
        echo "<div class=\"layout-container\">

  <header role=\"banner\">
    ";
        // line 15
        if ((isset($context["site_name"]) ? $context["site_name"] : null)) {
            // line 16
            echo "      <h1 class=\"page-title\">
        ";
            // line 17
            echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["site_name"]) ? $context["site_name"] : null), "html", null, true);
            echo "
        ";
            // line 18
            if ((isset($context["site_version"]) ? $context["site_version"] : null)) {
                // line 19
                echo "          <span class=\"site-version\">";
                echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["site_version"]) ? $context["site_version"] : null), "html", null, true);
                echo "</span>
        ";
            }
            // line 21
            echo "      </h1>
    ";
        }
        // line 23
        echo "  </header>

  ";
        // line 25
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "sidebar_first", array())) {
            // line 26
            echo "    <aside class=\"layout-sidebar-first\" role=\"complementary\">
      ";
            // line 27
            echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "sidebar_first", array()), "html", null, true);
            echo "
    </aside>";
            // line 29
            echo "  ";
        }
        // line 30
        echo "
  <main role=\"main\">
    ";
        // line 32
        if ((isset($context["title"]) ? $context["title"] : null)) {
            // line 33
            echo "      <h1>";
            echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["title"]) ? $context["title"] : null), "html", null, true);
            echo "</h1>
    ";
        }
        // line 35
        echo "    ";
        echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "highlighted", array()), "html", null, true);
        echo "
    ";
        // line 36
        echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "content", array()), "html", null, true);
        echo "
  </main>

  ";
        // line 39
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "sidebar_second", array())) {
            // line 40
            echo "    <aside class=\"layout-sidebar-second\" role=\"complementary\">
      ";
            // line 41
            echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "sidebar_second", array()), "html", null, true);
            echo "
    </aside>";
            // line 43
            echo "  ";
        }
        // line 44
        echo "
  ";
        // line 45
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "page_bottom", array())) {
            // line 46
            echo "    <footer role=\"contentinfo\">
      ";
            // line 47
            echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "page_bottom", array()), "html", null, true);
            echo "
    </footer>
  ";
        }
        // line 50
        echo "
</div>";
    }

    public function getTemplateName()
    {
        return "core/themes/seven/templates/install-page.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  110 => 50,  104 => 47,  101 => 46,  99 => 45,  96 => 44,  93 => 43,  89 => 41,  86 => 40,  84 => 39,  78 => 36,  73 => 35,  67 => 33,  65 => 32,  61 => 30,  58 => 29,  54 => 27,  51 => 26,  49 => 25,  45 => 23,  41 => 21,  35 => 19,  33 => 18,  29 => 17,  26 => 16,  24 => 15,  19 => 12,);
    }
}
/* {#*/
/* /***/
/*  * @file*/
/*  * Seven theme implementation to display a Drupal installation page.*/
/*  **/
/*  * All available variables are mirrored in page.html.twig.*/
/*  * Some may be blank but they are provided for consistency.*/
/*  **/
/*  * @see template_preprocess_install_page()*/
/*  *//* */
/* #}*/
/* <div class="layout-container">*/
/* */
/*   <header role="banner">*/
/*     {% if site_name %}*/
/*       <h1 class="page-title">*/
/*         {{ site_name }}*/
/*         {% if site_version %}*/
/*           <span class="site-version">{{ site_version }}</span>*/
/*         {% endif %}*/
/*       </h1>*/
/*     {% endif %}*/
/*   </header>*/
/* */
/*   {% if page.sidebar_first %}*/
/*     <aside class="layout-sidebar-first" role="complementary">*/
/*       {{ page.sidebar_first }}*/
/*     </aside>{# /.layout-sidebar-first #}*/
/*   {% endif %}*/
/* */
/*   <main role="main">*/
/*     {% if title %}*/
/*       <h1>{{ title }}</h1>*/
/*     {% endif %}*/
/*     {{ page.highlighted }}*/
/*     {{ page.content }}*/
/*   </main>*/
/* */
/*   {% if page.sidebar_second %}*/
/*     <aside class="layout-sidebar-second" role="complementary">*/
/*       {{ page.sidebar_second }}*/
/*     </aside>{# /.layout-sidebar-second #}*/
/*   {% endif %}*/
/* */
/*   {% if page.page_bottom %}*/
/*     <footer role="contentinfo">*/
/*       {{ page.page_bottom }}*/
/*     </footer>*/
/*   {% endif %}*/
/* */
/* </div>{# /.layout-container #}*/
/* */

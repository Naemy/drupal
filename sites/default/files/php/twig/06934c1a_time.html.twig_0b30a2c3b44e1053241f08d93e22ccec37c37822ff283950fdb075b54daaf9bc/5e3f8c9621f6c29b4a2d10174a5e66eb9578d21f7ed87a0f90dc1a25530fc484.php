<?php

/* core/themes/classy/templates/field/time.html.twig */
class __TwigTemplate_ec2cf2a53f78a1ca8c0615cc31f8786ba9038ab65eb81dd60dd75fdf01639d4c extends Twig_Template
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
        // line 22
        echo "<time";
        echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["attributes"]) ? $context["attributes"] : null), "addClass", array(0 => "datetime"), "method"), "html", null, true);
        echo ">";
        echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["text"]) ? $context["text"] : null), "html", null, true);
        echo "</time>
";
    }

    public function getTemplateName()
    {
        return "core/themes/classy/templates/field/time.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  19 => 22,);
    }
}
/* {#*/
/* /***/
/*  * @file*/
/*  * Theme override for a date / time element.*/
/*  **/
/*  * Available variables*/
/*  * - timestamp: (optional) A UNIX timestamp for the datetime attribute. If the*/
/*  *   datetime cannot be represented as a UNIX timestamp, use a valid datetime*/
/*  *   attribute value in attributes.datetime.*/
/*  * - text: (optional) The content to display within the <time> element.*/
/*  *   Defaults to a human-readable representation of the timestamp value or the*/
/*  *   datetime attribute value using format_date().*/
/*  * - attributes: (optional) HTML attributes to apply to the <time> element.*/
/*  *   A datetime attribute in 'attributes' overrides the 'timestamp'. To*/
/*  *   create a valid datetime attribute value from a UNIX timestamp, use*/
/*  *   format_date() with one of the predefined 'html_*' formats.*/
/*  **/
/*  * @see template_preprocess_time()*/
/*  * @see http://www.w3.org/TR/html5-author/the-time-element.html#attr-time-datetime*/
/*  *//* */
/* #}*/
/* <time{{ attributes.addClass('datetime') }}>{{ text }}</time>*/
/* */

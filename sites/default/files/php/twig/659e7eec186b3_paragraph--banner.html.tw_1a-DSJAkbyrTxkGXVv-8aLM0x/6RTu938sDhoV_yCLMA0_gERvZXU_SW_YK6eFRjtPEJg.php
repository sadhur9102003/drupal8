<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* themes/custom/cus_boo/templates/paragraphs/paragraph--banner.html.twig */
class __TwigTemplate_d6e9f9ce2b74197a7294fdd507f4ac74884aa95ff9d8180e18ed13236fa0a54e extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["set" => 68, "spaceless" => 71];
        $filters = ["escape" => 59, "striptags" => 72];
        $functions = ["file_url" => 59];

        try {
            $this->sandbox->checkSecurity(
                ['set', 'spaceless'],
                ['escape', 'striptags'],
                ['file_url']
            );
        } catch (SecurityError $e) {
            $e->setSourceContext($this->getSourceContext());

            if ($e instanceof SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 56
        echo "
<section id=\"hero\" class=\"hero\">

      <img src=\"";
        // line 59
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, call_user_func_array($this->env->getFunction('file_url')->getCallable(), [$this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["paragraph"] ?? null), "field_banner_image", []), "entity", []), "uri", []), "value", []))]), "html", null, true);
        echo "\" alt=\"\">

      <div class=\"container\">
        <div class=\"row\">
          <div class=\"col-lg-10\">

           
            <h2 >";
        // line 66
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["paragraph"] ?? null), "field_banner_title", []), "value", [])), "html", null, true);
        echo "</h2>
            <p>
";
        // line 68
        ob_start();
        // line 69
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["paragraph"] ?? null), "field_banner_description", []), "value", [])), "html", null, true);
        echo "
";
        $context["banner_desc"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 71
        ob_start();
        // line 72
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, strip_tags($this->sandbox->ensureToStringAllowed(($context["banner_desc"] ?? null))), "html", null, true);
        echo "
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        // line 74
        echo "</p>
             
          </div>
          <div class=\"col-lg-5\">
            <form action=\"#\" class=\"sign-up-form d-flex\">
              <input type=\"text\" class=\"form-control\" placeholder=\"Enter email address\">
              <input type=\"submit\" class=\"btn btn-primary\" value=\"Sign up\">
            </form>
          </div>
        </div>
      </div>

    </section><!-- End Hero Section -->

";
    }

    public function getTemplateName()
    {
        return "themes/custom/cus_boo/templates/paragraphs/paragraph--banner.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  89 => 74,  84 => 72,  82 => 71,  77 => 69,  75 => 68,  70 => 66,  60 => 59,  55 => 56,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{#
/**
 * @file
 * Default theme implementation to display a paragraph.
 *
 * Available variables:
 * - paragraph: Full paragraph entity.
 *   Only method names starting with \"get\", \"has\", or \"is\" and a few common
 *   methods such as \"id\", \"label\", and \"bundle\" are available. For example:
 *   - paragraph.getCreatedTime() will return the paragraph creation timestamp.
 *   - paragraph.id(): The paragraph ID.
 *   - paragraph.bundle(): The type of the paragraph, for example, \"image\" or \"text\".
 *   - paragraph.getOwnerId(): The user ID of the paragraph author.
 *   See Drupal\\paragraphs\\Entity\\Paragraph for a full list of public properties
 *   and methods for the paragraph object.
 * - content: All paragraph items. Use {{ content }} to print them all,
 *   or print a subset such as {{ content.field_example }}. Use
 *   {{ content|without('field_example') }} to temporarily suppress the printing
 *   of a given child element.
 * - attributes: HTML attributes for the containing element.
 *   The attributes.class element may contain one or more of the following
 *   classes:
 *   - paragraphs: The current template type (also known as a \"theming hook\").
 *   - paragraphs--type-[type]: The current paragraphs type. For example, if the paragraph is an
 *     \"Image\" it would result in \"paragraphs--type--image\". Note that the machine
 *     name will often be in a short form of the human readable label.
 *   - paragraphs--view-mode--[view_mode]: The View Mode of the paragraph; for example, a
 *     preview would result in: \"paragraphs--view-mode--preview\", and
 *     default: \"paragraphs--view-mode--default\".
 * - view_mode: View mode; for example, \"preview\" or \"full\".
 * - logged_in: Flag for authenticated user status. Will be true when the
 *   current user is a logged-in member.
 * - is_admin: Flag for admin user status. Will be true when the current user
 *   is an administrator.
 *
 * @see template_preprocess_paragraph()
 *
 * @ingroup themeable
 */
#}
{# {%
  set classes = [
    'paragraph',
    'paragraph--type--' ~ paragraph.bundle|clean_class,
    view_mode ? 'paragraph--view-mode--' ~ view_mode|clean_class,
    not paragraph.isPublished() ? 'paragraph--unpublished'
  ]
%}
{% block paragraph %}
  <div{{ attributes.addClass(classes) }}>
    {% block content %}
      {{ content }}
    {% endblock %}
  </div>
{% endblock paragraph %} #}

<section id=\"hero\" class=\"hero\">

      <img src=\"{{ file_url(paragraph.field_banner_image.entity.uri.value) }}\" alt=\"\">

      <div class=\"container\">
        <div class=\"row\">
          <div class=\"col-lg-10\">

           
            <h2 >{{ paragraph.field_banner_title.value }}</h2>
            <p>
{% set banner_desc %}
{{ paragraph.field_banner_description.value }}
{% endset %}
{% spaceless %}
{{ banner_desc|striptags }}
{% endspaceless %}
</p>
             
          </div>
          <div class=\"col-lg-5\">
            <form action=\"#\" class=\"sign-up-form d-flex\">
              <input type=\"text\" class=\"form-control\" placeholder=\"Enter email address\">
              <input type=\"submit\" class=\"btn btn-primary\" value=\"Sign up\">
            </form>
          </div>
        </div>
      </div>

    </section><!-- End Hero Section -->

", "themes/custom/cus_boo/templates/paragraphs/paragraph--banner.html.twig", "/var/www/html/drupal/themes/custom/cus_boo/templates/paragraphs/paragraph--banner.html.twig");
    }
}

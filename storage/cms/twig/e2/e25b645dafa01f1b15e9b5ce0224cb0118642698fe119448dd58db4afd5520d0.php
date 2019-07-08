<?php

/* /var/www/vhosts/420.com.vn/httpdocs/plugins/anandpatel/seoextension/components/cmspage/default.htm */
class __TwigTemplate_b4cadbaad28216e0c9894e141617c5a27bb4addf7068d95cacedce549d03b1b7 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 1
        if (($context["hasBlog"] ?? null)) {
            // line 2
            echo "    ";
            $context['__placeholder_meta_default_contents'] = null;            ob_start();            // line 3
            echo "
    ";
            $context['__placeholder_meta_default_contents'] = ob_get_clean();            // line 2
            echo $this->env->getExtension('Cms\Twig\Extension')->displayBlock('meta', $context['__placeholder_meta_default_contents']);
            unset($context['__placeholder_meta_default_contents']);            // line 5
            echo "
";
        } else {
            // line 7
            echo "
    ";
            // line 8
            if (twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "redirect_url", [])) {
                // line 9
                echo "        <meta http-equiv=\"refresh\" content=\"0; url=";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "redirect_url", []), "html", null, true);
                echo "\" />
    ";
            }
            // line 11
            echo "
    ";
            // line 12
            if (twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "seo_title", [])) {
                // line 13
                echo "        <title>";
                echo call_user_func_array($this->env->getFilter('generateTitle')->getCallable(), [twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "seo_title", [])]);
                echo "</title>
    ";
            }
            // line 15
            echo "
    ";
            // line 16
            if (twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "seo_description", [])) {
                // line 17
                echo "        <meta name=\"description\" content=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "seo_description", []), "html", null, true);
                echo "\">

";
            }
            // line 20
            echo "    ";
            if (twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "seo_keywords", [])) {
                // line 21
                echo "        <meta name=\"keywords\" content=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "seo_keywords", []), "html", null, true);
                echo "\">
    ";
            }
            // line 23
            echo "
    ";
            // line 24
            if (twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "canonical_url", [])) {
                // line 25
                echo "        <link rel=\"canonical\" href=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "canonical_url", []), "html", null, true);
                echo "\" />
    ";
            } else {
                // line 27
                echo "        ";
                echo call_user_func_array($this->env->getFilter('generateCanonicalUrl')->getCallable(), [""]);
                echo "
    ";
            }
            // line 29
            echo "
    <meta name=\"robots\" content=\"";
            // line 30
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "robot_index", []), "html", null, true);
            echo ",";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "robot_follow", []), "html", null, true);
            echo "\">

    ";
            // line 32
            echo call_user_func_array($this->env->getFilter('otherMetaTags')->getCallable(), [""]);
            echo "

    ";
            // line 34
            if (twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "ogTitle", [])) {
                // line 35
                echo "        <meta property=\"og:title\" content=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "ogTitle", []), "html", null, true);
                echo "\" />
    ";
            }
            // line 37
            echo "
    ";
            // line 38
            if (twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "ogUrl", [])) {
                // line 39
                echo "        <meta property=\"og:url\" content=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "ogUrl", []), "html", null, true);
                echo "\" />
    ";
            }
            // line 41
            echo "
    ";
            // line 42
            if (twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "ogSiteName", [])) {
                // line 43
                echo "        <meta property=\"og:site_name\" content=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "ogSiteName", []), "html", null, true);
                echo "\" />
    ";
            }
            // line 45
            echo "
    ";
            // line 46
            if (twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "ogDescription", [])) {
                // line 47
                echo "        <meta property=\"og:description\" content=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "ogDescription", []), "html", null, true);
                echo "\" />
    ";
            }
            // line 49
            echo "
    ";
            // line 50
            if (twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "ogFbAppId", [])) {
                // line 51
                echo "        <meta property=\"fb:app_id\" content=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "ogFbAppId", []), "html", null, true);
                echo "\" />
    ";
            }
            // line 53
            echo "
";
        }
    }

    public function getTemplateName()
    {
        return "/var/www/vhosts/420.com.vn/httpdocs/plugins/anandpatel/seoextension/components/cmspage/default.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  163 => 53,  157 => 51,  155 => 50,  152 => 49,  146 => 47,  144 => 46,  141 => 45,  135 => 43,  133 => 42,  130 => 41,  124 => 39,  122 => 38,  119 => 37,  113 => 35,  111 => 34,  106 => 32,  99 => 30,  96 => 29,  90 => 27,  84 => 25,  82 => 24,  79 => 23,  73 => 21,  70 => 20,  63 => 17,  61 => 16,  58 => 15,  52 => 13,  50 => 12,  47 => 11,  41 => 9,  39 => 8,  36 => 7,  32 => 5,  30 => 2,  27 => 3,  25 => 2,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% if hasBlog %}
    {% placeholder meta default %}

    {% endplaceholder %}

{% else %}

    {% if __SELF__.redirect_url %}
        <meta http-equiv=\"refresh\" content=\"0; url={{__SELF__.redirect_url}}\" />
    {% endif %}

    {% if __SELF__.seo_title %}
        <title>{{__SELF__.seo_title | generateTitle}}</title>
    {% endif %}

    {% if __SELF__.seo_description %}
        <meta name=\"description\" content=\"{{__SELF__.seo_description}}\">

{% endif %}
    {% if __SELF__.seo_keywords %}
        <meta name=\"keywords\" content=\"{{__SELF__.seo_keywords}}\">
    {% endif %}

    {% if __SELF__.canonical_url %}
        <link rel=\"canonical\" href=\"{{__SELF__.canonical_url}}\" />
    {% else %}
        {{ '' | generateCanonicalUrl}}
    {% endif %}

    <meta name=\"robots\" content=\"{{__SELF__.robot_index}},{{__SELF__.robot_follow}}\">

    {{ ''|otherMetaTags|raw }}

    {% if __SELF__.ogTitle %}
        <meta property=\"og:title\" content=\"{{ __SELF__.ogTitle }}\" />
    {% endif %}

    {% if __SELF__.ogUrl %}
        <meta property=\"og:url\" content=\"{{ __SELF__.ogUrl }}\" />
    {% endif %}

    {% if __SELF__.ogSiteName %}
        <meta property=\"og:site_name\" content=\"{{ __SELF__.ogSiteName }}\" />
    {% endif %}

    {% if __SELF__.ogDescription %}
        <meta property=\"og:description\" content=\"{{ __SELF__.ogDescription }}\" />
    {% endif %}

    {% if __SELF__.ogFbAppId %}
        <meta property=\"fb:app_id\" content=\"{{ __SELF__.ogFbAppId  }}\" />
    {% endif %}

{% endif %}
", "/var/www/vhosts/420.com.vn/httpdocs/plugins/anandpatel/seoextension/components/cmspage/default.htm", "");
    }
}

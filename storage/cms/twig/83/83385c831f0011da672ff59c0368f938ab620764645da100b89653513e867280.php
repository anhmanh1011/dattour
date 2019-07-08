<?php

/* /var/www/vhosts/420.com.vn/httpdocs/themes/420Hospitality/partials/hotel/hotel.htm */
class __TwigTemplate_5ac37ad5e268084b7cfaa4c19f3f6ba8ff82a6345b5a2127a2cf5606fdd069de extends Twig_Template
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
        if (twig_length_filter($this->env, ($context["hotel"] ?? null))) {
            // line 2
            echo "\t";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["hotel"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["value"]) {
                // line 3
                echo "\t\t<div class=\"col-md-4 col-sm-6\">
\t\t\t<div class=\"product\">
\t\t\t\t";
                // line 5
                if ((twig_get_attribute($this->env, $this->source, $context["value"], "hot", []) == 1)) {
                    // line 6
                    echo "\t\t\t\t\t<div class=\"sale\">
\t\t\t\t\t\t<span>";
                    // line 7
                    echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Hot"]);
                    echo "</span>
\t\t\t\t\t</div>
\t\t\t\t";
                }
                // line 10
                echo "\t\t\t\t<div class=\"images\">
\t\t\t\t\t<a href=\"/hotel/";
                // line 11
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["value"], "slug", []), "html", null, true);
                echo "\">
\t\t\t\t\t\t<img src=\"";
                // line 12
                echo call_user_func_array($this->env->getFilter('resize')->getCallable(), [twig_get_attribute($this->env, $this->source, $context["value"], "image_preview", []), 260, 140, ["mode" => "crop", "quality" => "80", "extension" => "jpg"]]);
                echo "\" title=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["value"], "name", []), "html", null, true);
                echo "\" alt=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["value"], "name", []), "html", null, true);
                echo "\" class=\"img-responsive\">
\t\t\t\t\t</a>
\t\t\t\t</div>
\t\t\t\t<div class=\"caption\">
\t\t\t\t\t<div class=\"title_post\" style=\"text-align: left\">
\t\t\t\t\t\t<h3><a href=\"/hotel/";
                // line 17
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["value"], "slug", []), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["value"], "name", []), "html", null, true);
                echo "</a></h3>
\t\t\t\t\t\t<p style=\"margin-bottom: 12px\"><i class=\"fas fa-map-marker-alt\"></i> <span>";
                // line 18
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["value"], "locationdetail", []), "html", null, true);
                echo "</span></p>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"social_price\">
\t\t\t\t\t\t<ul class=\"list-inline\" style=\"padding-right: 10px\">
\t\t\t\t\t\t\t<li><a href=\"javascript:\"><i class=\"fas fa-briefcase\"></i></a></li>
\t\t\t\t\t\t\t<li><a href=\"javascript:\"><i class=\"fas fa-wifi\"></i></a></li>
\t\t\t\t\t\t\t<li><a href=\"javascript:\"><i class=\"fas fa-bed\"></i></a></li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t\t<span class=\"price\">";
                // line 26
                echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Price from"]);
                echo ": <a href=\"javascript:void(0)\">";
                echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["value"], "price", [])), "html", null, true);
                echo " VNĐ</a></span>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['value'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
    }

    public function getTemplateName()
    {
        return "/var/www/vhosts/420.com.vn/httpdocs/themes/420Hospitality/partials/hotel/hotel.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  81 => 26,  70 => 18,  64 => 17,  52 => 12,  48 => 11,  45 => 10,  39 => 7,  36 => 6,  34 => 5,  30 => 3,  25 => 2,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{%if hotel|length%}
\t{%for value in hotel%}
\t\t<div class=\"col-md-4 col-sm-6\">
\t\t\t<div class=\"product\">
\t\t\t\t{%if value.hot==1%}
\t\t\t\t\t<div class=\"sale\">
\t\t\t\t\t\t<span>{{'Hot'|_}}</span>
\t\t\t\t\t</div>
\t\t\t\t{%endif%}
\t\t\t\t<div class=\"images\">
\t\t\t\t\t<a href=\"/hotel/{{value.slug}}\">
\t\t\t\t\t\t<img src=\"{{value.image_preview|resize(260, 140, { mode: 'crop', quality: '80', extension: 'jpg' })}}\" title=\"{{value.name}}\" alt=\"{{value.name}}\" class=\"img-responsive\">
\t\t\t\t\t</a>
\t\t\t\t</div>
\t\t\t\t<div class=\"caption\">
\t\t\t\t\t<div class=\"title_post\" style=\"text-align: left\">
\t\t\t\t\t\t<h3><a href=\"/hotel/{{value.slug}}\">{{value.name}}</a></h3>
\t\t\t\t\t\t<p style=\"margin-bottom: 12px\"><i class=\"fas fa-map-marker-alt\"></i> <span>{{value.locationdetail}}</span></p>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"social_price\">
\t\t\t\t\t\t<ul class=\"list-inline\" style=\"padding-right: 10px\">
\t\t\t\t\t\t\t<li><a href=\"javascript:\"><i class=\"fas fa-briefcase\"></i></a></li>
\t\t\t\t\t\t\t<li><a href=\"javascript:\"><i class=\"fas fa-wifi\"></i></a></li>
\t\t\t\t\t\t\t<li><a href=\"javascript:\"><i class=\"fas fa-bed\"></i></a></li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t\t<span class=\"price\">{{'Price from'|_}}: <a href=\"javascript:void(0)\">{{value.price|number_format()}} VNĐ</a></span>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t{%endfor%}
{%endif%}", "/var/www/vhosts/420.com.vn/httpdocs/themes/420Hospitality/partials/hotel/hotel.htm", "");
    }
}

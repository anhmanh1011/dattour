<?php

/* /var/www/vhosts/420.com.vn/httpdocs/plugins/web/hotel/components/tour/default.htm */
class __TwigTemplate_ff64928fe06f025f0e44390ca5a870681656751aacaaed8af1d46d44c5337941 extends Twig_Template
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
        $context["data"] = twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "tour", []);
        // line 2
        $context["data2"] = twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "tour2", []);
        // line 3
        $context["data3"] = twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "tour3", []);
        // line 4
        echo "

";
        // line 6
        if (twig_length_filter($this->env, ($context["data"] ?? null))) {
            // line 7
            echo "<div class=\"produc_mid row_produc\">
    <div class=\"row\">

        ";
            // line 10
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["data"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["tour"]) {
                // line 11
                echo "        <div class=\"col-md-4 col-sm-4\">
            <div class=\"product\">
                ";
                // line 13
                if ((twig_get_attribute($this->env, $this->source, $context["tour"], "hot", []) == 1)) {
                    // line 14
                    echo "                <div class=\"sale\">
                    <span>Hot</span>
                </div>
                ";
                }
                // line 18
                echo "                <div class=\"images\">
                    <a href=\"/travel/";
                // line 19
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["tour"], "slug", []), "html", null, true);
                echo "\"><img
                            src=\"";
                // line 20
                echo call_user_func_array($this->env->getFilter('resize')->getCallable(), [twig_get_attribute($this->env, $this->source, $context["tour"], "image_preview", []), 263, 152, ["mode" => "crop", "quality" => "80"]]);
                echo "\"
                            title=\"";
                // line 21
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["tour"], "name", []), "html", null, true);
                echo "\" alt=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["tour"], "name", []), "html", null, true);
                echo "\" class=\"img-responsive\"></a>
                </div>
                <div class=\"caption\">
                    <div class=\"top_caption\">
                        <h3 style=\"height: 60px\"><a href=\"/travel/";
                // line 25
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["tour"], "slug", []), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["tour"], "name", []), "html", null, true);
                echo "</a></h3>
                        <p class=\"rating\">

                        </p>
                    </div>
                    <div class=\"bottom_caption\">
                        <p><i class=\"fas fa-map-marker-alt\"></i> <span>";
                // line 31
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["tour"], "locations", []), "name", []), "html", null, true);
                echo "</span></p>
                        <div class=\"line_2\">
                            <p style=\"padding-right: 0\">
                                <i class=\"fas fa-calendar-alt\"></i> 
                                <span> ";
                // line 35
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["tour"], "date_number", []), "html", null, true);
                echo " </span>
                            </p>
                            <p style=\"padding-right: 0;padding-left: 10px\">
                                ";
                // line 38
                echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Price from"]);
                echo ":
                                <a href=\"/travel/";
                // line 39
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["tour"], "slug", []), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["tour"], "price", [])), "html", null, true);
                echo " VND</a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tour'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 47
            echo "
    </div>
    <div class=\"show_more\" id=\"ShowMore\">
        <a href=\"#0\">
            <label class=\"gloabal_custom\">";
            // line 51
            echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Show more"]);
            echo " <i class=\"fas fa-angle-right\"></i>
                <input type=\"radio\" name=\"Filter[state][]\" value=\"1\">
                <span class=\"checkmark\"></span>
            </label>
        </a>
    </div>
</div>
";
        }
    }

    public function getTemplateName()
    {
        return "/var/www/vhosts/420.com.vn/httpdocs/plugins/web/hotel/components/tour/default.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  126 => 51,  120 => 47,  104 => 39,  100 => 38,  94 => 35,  87 => 31,  76 => 25,  67 => 21,  63 => 20,  59 => 19,  56 => 18,  50 => 14,  48 => 13,  44 => 11,  40 => 10,  35 => 7,  33 => 6,  29 => 4,  27 => 3,  25 => 2,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% set data = __SELF__.tour %}
{% set data2 = __SELF__.tour2 %}
{% set data3 = __SELF__.tour3 %}


{% if data|length %}
<div class=\"produc_mid row_produc\">
    <div class=\"row\">

        {% for tour in data %}
        <div class=\"col-md-4 col-sm-4\">
            <div class=\"product\">
                {% if (tour.hot == 1) %}
                <div class=\"sale\">
                    <span>Hot</span>
                </div>
                {% endif %}
                <div class=\"images\">
                    <a href=\"/travel/{{tour.slug}}\"><img
                            src=\"{{tour.image_preview| resize(263,152, { mode: 'crop', quality: '80' }) }}\"
                            title=\"{{tour.name}}\" alt=\"{{tour.name}}\" class=\"img-responsive\"></a>
                </div>
                <div class=\"caption\">
                    <div class=\"top_caption\">
                        <h3 style=\"height: 60px\"><a href=\"/travel/{{tour.slug}}\">{{tour.name}}</a></h3>
                        <p class=\"rating\">

                        </p>
                    </div>
                    <div class=\"bottom_caption\">
                        <p><i class=\"fas fa-map-marker-alt\"></i> <span>{{tour.locations.name}}</span></p>
                        <div class=\"line_2\">
                            <p style=\"padding-right: 0\">
                                <i class=\"fas fa-calendar-alt\"></i> 
                                <span> {{tour.date_number}} </span>
                            </p>
                            <p style=\"padding-right: 0;padding-left: 10px\">
                                {{'Price from'|_}}:
                                <a href=\"/travel/{{tour.slug}}\">{{ tour.price|number_format() }} VND</a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        {% endfor %}

    </div>
    <div class=\"show_more\" id=\"ShowMore\">
        <a href=\"#0\">
            <label class=\"gloabal_custom\">{{'Show more'|_}} <i class=\"fas fa-angle-right\"></i>
                <input type=\"radio\" name=\"Filter[state][]\" value=\"1\">
                <span class=\"checkmark\"></span>
            </label>
        </a>
    </div>
</div>
{% endif %}", "/var/www/vhosts/420.com.vn/httpdocs/plugins/web/hotel/components/tour/default.htm", "");
    }
}

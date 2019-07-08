<?php

/* /var/www/vhosts/420.com.vn/httpdocs/themes/420Hospitality/pages/hotel.htm */
class __TwigTemplate_0ba8e209e4062090c8cbaf789ea3f31891c706ab2eeebde6e89cf8b61fda1c08 extends Twig_Template
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
        echo "<div class=\"sub_banner_page\">
    <img alt=\"\" src=\"assets/pic/banner_duc5.jpg\" />
    <div class=\"describe_banner\">
        <div class=\"container_duc\">
            <h1>
                <span class=\"title_page\">";
        // line 6
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["HOTEL"]);
        echo "</span>
            </h1>
        </div>
    </div>
    <div class=\"duongdanlink\">
        <div class=\"container_duc\">
            <ul class=\"duongdan_link\">
                <li><a href=\"";
        // line 13
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("home");
        echo "\">";
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["HOME"]);
        echo "</a></li>
                <li class=\"active\"><a href=\"javascript:void(0)\">";
        // line 14
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["HOTEL"]);
        echo "</a></li>
            </ul>
        </div>
    </div>
</div>
<div class=\"content up_here\">
    <div class=\"wrap_main_accommodation\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-md-3 col-sm-12\">
                    ";
        // line 24
        echo call_user_func_array($this->env->getFunction('form_ajax')->getCallable(), ["ajax", "onFilterHotel", ["update" => ["hotel/hotel" => "#listHotel", "hotel/pagination" => "#Pagination"]]]);
        echo "
                    <div class=\"side_bar\" id=\"hotelFilter\">
                        <div class=\"top_sidebar\">
                            <div class=\"info\">
                                <h3 class=\"click_colapse\">";
        // line 28
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Type of hotel"]);
        echo "</h3>
                                <div class=\"open_colapse\">
                                    ";
        // line 30
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["types"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["type"]) {
            // line 31
            echo "                                    <label class=\"gloabal_custom\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["type"], "name", []), "html", null, true);
            echo "
                                        <input type=\"checkbox\" name=\"Filter[type][]\" value=\"";
            // line 32
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["type"], "id", []), "html", null, true);
            echo "\">
                                        <span class=\"checkmark\"></span>
                                    </label>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['type'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 36
        echo "                                </div>
                            </div>
                            <div class=\"info\">
                                <h3 class=\"click_colapse fix9\">";
        // line 39
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Facilities"]);
        echo "</h3>
                                <div class=\"open_colapse\">
                                    ";
        // line 41
        if (($context["amenities"] ?? null)) {
            // line 42
            echo "                                    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["amenities"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["tiennghi"]) {
                // line 43
                echo "                                    <label class=\"gloabal_custom\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["tiennghi"], "name", []), "html", null, true);
                echo "
                                        <input type=\"checkbox\" name=\"Filter[amenities][]\" value=\"";
                // line 44
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["tiennghi"], "id", []), "html", null, true);
                echo "\">
                                        <span class=\"checkmark\"></span>
                                    </label>
                                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tiennghi'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 48
            echo "                                    ";
        }
        // line 49
        echo "                                </div>

                            </div>

                        </div>
                        <div class=\"bottom_sidebar\">
                            <h3 class=\"click_colapse\">";
        // line 55
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Hotel Promotion"]);
        echo "</h3>
                            <div class=\"open_colapse\">
                                ";
        // line 57
        if (($context["sale"] ?? null)) {
            // line 58
            echo "                                ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["sale"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["value"]) {
                // line 59
                echo "                                <div class=\"product\">
                                    <div class=\"images_info\">
                                        <a href=\"";
                // line 61
                echo $this->extensions['Cms\Twig\Extension']->pageFilter("Home");
                echo "/travel/";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["value"], "slug", []), "html", null, true);
                echo "\"  title=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["value"], "name", []), "html", null, true);
                echo "\" ><img
                                                src=\"";
                // line 62
                echo call_user_func_array($this->env->getFilter('resize')->getCallable(), [$this->extensions['System\Twig\Extension']->mediaFilter(twig_get_attribute($this->env, $this->source, $context["value"], "image_preview", [])), 240, 160]);
                echo "\"
                                               alt=\"";
                // line 63
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["value"], "name", []), "html", null, true);
                echo "\" class=\"img-responsive\"></a>
                                        <p class=\"rating\">
                                            <span><i class=\"fas fa-star\"></i></span>
                                            <span><i class=\"fas fa-star\"></i></span>
                                            <span><i class=\"fas fa-star\"></i></span>
                                            <span><i class=\"fas fa-star\"></i></span>
                                            <span><i class=\"fas fa-star\"></i></span>
                                        </p>
                                    </div>
                                    <div class=\"caption_info\">
                                        <h3><a href=\"";
                // line 73
                echo $this->extensions['Cms\Twig\Extension']->pageFilter("Home");
                echo "/travel/";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["value"], "slug", []), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["value"], "name", []), "html", null, true);
                echo "</a></h3>
                                        <p>";
                // line 74
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["value"], "description", []), "html", null, true);
                echo "</p>
                                        <span>";
                // line 75
                echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Price from"]);
                echo " <a href=\"";
                echo $this->extensions['Cms\Twig\Extension']->pageFilter("Home");
                echo "/travel/";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["value"], "slug", []), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["value"], "price", [])), "html", null, true);
                echo " VNĐ</a></span>
                                    </div>
                                </div>
                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['value'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 79
            echo "                                ";
        }
        // line 80
        echo "                            </div>
                        </div>
                    </div>
                </div>

                <div class=\"col-md-9 col-sm-12\">
                    <div class=\"wrap_main_product row_produc\">
                        <div class=\"row\" id=\"listHotel\">

                            ";
        // line 89
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("hotel/hotel"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 90
        echo "                        </div>
                    </div>
                    ";
        // line 92
        echo call_user_func_array($this->env->getFunction('form_close')->getCallable(), ["close"]);
        echo "
                    <div class=\"panigation_categorie_grid\">
                        ";
        // line 94
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("hotel/pagination"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 95
        echo "                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
";
        // line 101
        echo $this->env->getExtension('Cms\Twig\Extension')->startBlock('scripts'        );
        // line 102
        echo "<script>
    // Ajax Tour
    (function (\$) {

        \$('#hotelFilter').on('change', 'input, select', function () {
            var \$form = \$(this).closest('form');
            \$form.request();
            \$('html, body').animate({
                scrollTop: \$('.up_here').offset().top - 80
            }, 1000);
        });
        \$('#Pagination').on('change', 'input, select', function () {
            \$('html, body').animate({
                scrollTop: \$('.up_here').offset().top - 80
            }, 1000);

            var \$form = \$(this).closest('form');
            \$form.request();
        });
    })(jQuery);
</script>
";
        // line 101
        echo $this->env->getExtension('Cms\Twig\Extension')->endBlock(true        );
    }

    public function getTemplateName()
    {
        return "/var/www/vhosts/420.com.vn/httpdocs/themes/420Hospitality/pages/hotel.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  266 => 101,  243 => 102,  241 => 101,  233 => 95,  229 => 94,  224 => 92,  220 => 90,  216 => 89,  205 => 80,  202 => 79,  186 => 75,  182 => 74,  174 => 73,  161 => 63,  157 => 62,  149 => 61,  145 => 59,  140 => 58,  138 => 57,  133 => 55,  125 => 49,  122 => 48,  112 => 44,  107 => 43,  102 => 42,  100 => 41,  95 => 39,  90 => 36,  80 => 32,  75 => 31,  71 => 30,  66 => 28,  59 => 24,  46 => 14,  40 => 13,  30 => 6,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"sub_banner_page\">
    <img alt=\"\" src=\"assets/pic/banner_duc5.jpg\" />
    <div class=\"describe_banner\">
        <div class=\"container_duc\">
            <h1>
                <span class=\"title_page\">{{'HOTEL'|_}}</span>
            </h1>
        </div>
    </div>
    <div class=\"duongdanlink\">
        <div class=\"container_duc\">
            <ul class=\"duongdan_link\">
                <li><a href=\"{{'home'|page}}\">{{'HOME'|_}}</a></li>
                <li class=\"active\"><a href=\"javascript:void(0)\">{{'HOTEL'|_}}</a></li>
            </ul>
        </div>
    </div>
</div>
<div class=\"content up_here\">
    <div class=\"wrap_main_accommodation\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-md-3 col-sm-12\">
                    {{ form_ajax('onFilterHotel', { update: { 'hotel/hotel': '#listHotel', 'hotel/pagination': '#Pagination'} }) }}
                    <div class=\"side_bar\" id=\"hotelFilter\">
                        <div class=\"top_sidebar\">
                            <div class=\"info\">
                                <h3 class=\"click_colapse\">{{'Type of hotel'|_}}</h3>
                                <div class=\"open_colapse\">
                                    {% for type in types %}
                                    <label class=\"gloabal_custom\">{{type.name}}
                                        <input type=\"checkbox\" name=\"Filter[type][]\" value=\"{{type.id}}\">
                                        <span class=\"checkmark\"></span>
                                    </label>
                                    {% endfor %}
                                </div>
                            </div>
                            <div class=\"info\">
                                <h3 class=\"click_colapse fix9\">{{'Facilities'|_}}</h3>
                                <div class=\"open_colapse\">
                                    {%if amenities %}
                                    {%for tiennghi in amenities%}
                                    <label class=\"gloabal_custom\">{{tiennghi.name}}
                                        <input type=\"checkbox\" name=\"Filter[amenities][]\" value=\"{{ tiennghi.id }}\">
                                        <span class=\"checkmark\"></span>
                                    </label>
                                    {%endfor%}
                                    {%endif%}
                                </div>

                            </div>

                        </div>
                        <div class=\"bottom_sidebar\">
                            <h3 class=\"click_colapse\">{{'Hotel Promotion'|_}}</h3>
                            <div class=\"open_colapse\">
                                {%if sale %}
                                {%for value in sale%}
                                <div class=\"product\">
                                    <div class=\"images_info\">
                                        <a href=\"{{'Home'|page}}/travel/{{value.slug}}\"  title=\"{{value.name}}\" ><img
                                                src=\"{{value.image_preview|media|resize(240,160)}}\"
                                               alt=\"{{value.name}}\" class=\"img-responsive\"></a>
                                        <p class=\"rating\">
                                            <span><i class=\"fas fa-star\"></i></span>
                                            <span><i class=\"fas fa-star\"></i></span>
                                            <span><i class=\"fas fa-star\"></i></span>
                                            <span><i class=\"fas fa-star\"></i></span>
                                            <span><i class=\"fas fa-star\"></i></span>
                                        </p>
                                    </div>
                                    <div class=\"caption_info\">
                                        <h3><a href=\"{{'Home'|page}}/travel/{{value.slug}}\">{{value.name}}</a></h3>
                                        <p>{{value.description}}</p>
                                        <span>{{'Price from'|_}} <a href=\"{{'Home'|page}}/travel/{{value.slug}}\">{{value.price|number_format()}} VNĐ</a></span>
                                    </div>
                                </div>
                                {%endfor%}
                                {%endif%}
                            </div>
                        </div>
                    </div>
                </div>

                <div class=\"col-md-9 col-sm-12\">
                    <div class=\"wrap_main_product row_produc\">
                        <div class=\"row\" id=\"listHotel\">

                            {% partial 'hotel/hotel'%}
                        </div>
                    </div>
                    {{ form_close() }}
                    <div class=\"panigation_categorie_grid\">
                        {% partial 'hotel/pagination'%}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
{% put scripts %}
<script>
    // Ajax Tour
    (function (\$) {

        \$('#hotelFilter').on('change', 'input, select', function () {
            var \$form = \$(this).closest('form');
            \$form.request();
            \$('html, body').animate({
                scrollTop: \$('.up_here').offset().top - 80
            }, 1000);
        });
        \$('#Pagination').on('change', 'input, select', function () {
            \$('html, body').animate({
                scrollTop: \$('.up_here').offset().top - 80
            }, 1000);

            var \$form = \$(this).closest('form');
            \$form.request();
        });
    })(jQuery);
</script>
{% endput %}", "/var/www/vhosts/420.com.vn/httpdocs/themes/420Hospitality/pages/hotel.htm", "");
    }
}

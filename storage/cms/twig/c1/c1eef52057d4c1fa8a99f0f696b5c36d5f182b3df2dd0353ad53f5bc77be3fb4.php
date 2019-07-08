<?php

/* /var/www/vhosts/420.com.vn/httpdocs/plugins/web/hotel/components/productlist/default.htm */
class __TwigTemplate_16d563e1fb7d2e34408c1749b6305048d16ceae751db3dca981ea9831ceda0c9 extends Twig_Template
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
        echo "
<div class=\"content up_here\">
    ";
        // line 3
        echo call_user_func_array($this->env->getFunction('form_ajax')->getCallable(), ["ajax", "onFilter", ["update" => ["product/product" => "#listProduct", "product/pagination" => "#Pagination"]]]);
        echo "

    <div class=\"wrap_main_accommodation\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-md-3 col-sm-12\">
                    <div class=\"side_bar\" id=\"Filter\">
                        <div class=\"top_sidebar\">
                            <div class=\"info\">
                                <h3 class=\"click_colapse\">";
        // line 12
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Location"]);
        echo "</h3>

                                <div class=\"open_colapse\">
                                    ";
        // line 15
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["states"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["state"]) {
            // line 16
            echo "                                    <label class=\"gloabal_custom\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["state"], "name", []), "html", null, true);
            echo "
                                        <input type=\"checkbox\" name=\"Filter[state][]\" value=\"";
            // line 17
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["state"], "id", []), "html", null, true);
            echo "\">
                                        <span class=\"checkmark\"></span>
                                    </label>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['state'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 21
        echo "                                </div>
                            </div>
                            <div class=\"info\">
                                <h3 class=\"click_colapse\">";
        // line 24
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Type"]);
        echo " </h3>

                                <div class=\"open_colapse\">
                                    ";
        // line 27
        if (($context["types"] ?? null)) {
            // line 28
            echo "                                    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["types"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["value"]) {
                // line 29
                echo "                                    <label class=\"gloabal_custom\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["value"], "name", []), "html", null, true);
                echo "
                                        <input type=\"checkbox\" name=\"Filter[type][]\" value=\"";
                // line 30
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["value"], "id", []), "html", null, true);
                echo "\">
                                        <span class=\"checkmark\"></span>
                                    </label>
                                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['value'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 34
            echo "                                    ";
        }
        // line 35
        echo "                                </div>
                            </div>
                        </div>
                        <div class=\"bottom_sidebar\">
                            ";
        // line 39
        if (($context["data_percent"] ?? null)) {
            // line 40
            echo "                            <h3 class=\"click_colapse\">";
            echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Promotion"]);
            echo "</h3>
                            <div class=\"open_colapse\">
                                ";
            // line 42
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["data_percent"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["value"]) {
                // line 43
                echo "                                <div class=\"product\">
                                    <div class=\"images_info\">
                                        <a href=\"";
                // line 45
                echo $this->extensions['Cms\Twig\Extension']->pageFilter("home");
                echo "/product/";
                echo twig_escape_filter($this->env, ($context["cate_id"] ?? null), "html", null, true);
                echo "/";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["value"], "slug", []), "html", null, true);
                echo "\"><img
                                                src=\"";
                // line 46
                echo call_user_func_array($this->env->getFilter('resize')->getCallable(), [twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["value"], "image_preview", []), "path", []), 263, 159, ["mode" => "crop", "quality" => "80", "extension" => "jpg"]]);
                echo "\"
                                                alt=\"\" class=\"img-responsive\"></a>
                                        ";
                // line 48
                if ((twig_get_attribute($this->env, $this->source, $context["value"], "star_4", []) > twig_get_attribute($this->env, $this->source, $context["value"], "star_5", []))) {
                    // line 49
                    echo "                                        <p class=\"rating\">
                                            <span><i class=\"fas fa-star\"></i></span>
                                            <span><i class=\"fas fa-star\"></i></span>
                                            <span><i class=\"fas fa-star\"></i></span>
                                            <span><i class=\"fas fa-star\"></i></span>
                                            <span><i class=\"far fa-star\"></i></span>
                                        </p>
                                        ";
                } elseif ((twig_get_attribute($this->env, $this->source,                 // line 56
$context["value"], "star_4", []) < twig_get_attribute($this->env, $this->source, $context["value"], "star_5", []))) {
                    // line 57
                    echo "                                        <p class=\"rating\">
                                            <span><i class=\"fas fa-star\"></i></span>
                                            <span><i class=\"fas fa-star\"></i></span>
                                            <span><i class=\"fas fa-star\"></i></span>
                                            <span><i class=\"fas fa-star\"></i></span>
                                            <span><i class=\"fas fa-star\"></i></span>
                                        </p>
                                        ";
                } elseif (((twig_get_attribute($this->env, $this->source,                 // line 64
$context["value"], "star_4", []) == "") && (twig_get_attribute($this->env, $this->source, $context["value"], "star_5", []) == ""))) {
                    // line 65
                    echo "                                        <p class=\"rating\">
                                            <span><i class=\"far fa-star\"></i></span>
                                            <span><i class=\"far fa-star\"></i></span>
                                            <span><i class=\"far fa-star\"></i></span>
                                            <span><i class=\"far fa-star\"></i></span>
                                            <span><i class=\"far fa-star\"></i></span>
                                        </p>
                                        ";
                } elseif ((twig_get_attribute($this->env, $this->source,                 // line 72
$context["value"], "star_4", []) == twig_get_attribute($this->env, $this->source, $context["value"], "star_5", []))) {
                    // line 73
                    echo "                                        <p class=\"rating\">
                                            <span><i class=\"fas fa-star\"></i></span>
                                            <span><i class=\"fas fa-star\"></i></span>
                                            <span><i class=\"fas fa-star\"></i></span>
                                            <span><i class=\"fas fa-star\"></i></span>
                                            <span><i class=\"fas fa-star\"></i></span>
                                        </p>
                                        ";
                }
                // line 81
                echo "                                    </div>
                                    <div class=\"caption_info\">
                                        <h3>
                                            <a href=\"";
                // line 84
                echo $this->extensions['Cms\Twig\Extension']->pageFilter("home");
                echo "/product/";
                echo twig_escape_filter($this->env, ($context["cate_id"] ?? null), "html", null, true);
                echo "/";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["value"], "slug", []), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["value"], "name", []), "html", null, true);
                echo "</a>
                                        </h3>
                                        <p>
                                            ";
                // line 87
                echo call_user_func_array($this->env->getFunction('html_limit')->getCallable(), ["limit", twig_get_attribute($this->env, $this->source, $context["value"], "description", []), 80]);
                echo "
                                        </p>
                                        <span>";
                // line 89
                echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Price"]);
                echo " <a href=\"";
                echo $this->extensions['Cms\Twig\Extension']->pageFilter("home");
                echo "/product/";
                echo twig_escape_filter($this->env, ($context["cate_id"] ?? null), "html", null, true);
                echo "/";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["value"], "slug", []), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["value"], "price_new", [])), "html", null, true);
                echo "VNĐ</a></span>
                                        <span class=\"sele\">";
                // line 90
                echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Original price"]);
                echo " : <b>";
                echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["value"], "price", [])), "html", null, true);
                echo "
                                                VNĐ</b></span>
                                    </div>
                                </div>
                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['value'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 95
            echo "                            </div>
                            ";
        }
        // line 97
        echo "                        </div>
                    </div>
                </div>
                <div class=\"col-md-9 col-sm-12\">
                    <div class=\"wrap_main_product row_produc\">
                        <div class=\"row\" id=\"listProduct\">
                            ";
        // line 103
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("product/product"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 104
        echo "                        </div>
                    </div>
                    <div class=\"panigation_categorie_grid\" id=\"Pagination\">
                        ";
        // line 107
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("product/pagination"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 108
        echo "                    </div>
                </div>

            </div>
        </div>
    </div>
    ";
        // line 114
        echo call_user_func_array($this->env->getFunction('form_close')->getCallable(), ["close"]);
        echo "
</div>
";
        // line 116
        echo $this->env->getExtension('Cms\Twig\Extension')->startBlock('scripts'        );
        // line 117
        echo "<style type=\"text/css\" media=\"screen\">
    #Pagination {
        text-align: center;
    }

    .gloabal_custom {
        padding: 6px 15px;
        cursor: pointer;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
    }

    /* Hide the browser's default checkbox */
    .gloabal_custom input {
        position: absolute;
        opacity: 0;
        cursor: pointer;
    }
</style>
";
        // line 116
        echo $this->env->getExtension('Cms\Twig\Extension')->endBlock(true        );
        // line 139
        echo $this->env->getExtension('Cms\Twig\Extension')->startBlock('scripts'        );
        // line 140
        echo "<script>
    (function (\$) {

        \$('#Filter').on('change', 'input, select', function () {
            \$('html, body').animate({
                scrollTop: \$('.up_here').offset().top - 80
            }, 1000);
            var \$form = \$(this).closest('form');
            \$form.request();
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
        // line 139
        echo $this->env->getExtension('Cms\Twig\Extension')->endBlock(true        );
    }

    public function getTemplateName()
    {
        return "/var/www/vhosts/420.com.vn/httpdocs/plugins/web/hotel/components/productlist/default.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  315 => 139,  294 => 140,  292 => 139,  290 => 116,  267 => 117,  265 => 116,  260 => 114,  252 => 108,  248 => 107,  243 => 104,  239 => 103,  231 => 97,  227 => 95,  214 => 90,  202 => 89,  197 => 87,  185 => 84,  180 => 81,  170 => 73,  168 => 72,  159 => 65,  157 => 64,  148 => 57,  146 => 56,  137 => 49,  135 => 48,  130 => 46,  122 => 45,  118 => 43,  114 => 42,  108 => 40,  106 => 39,  100 => 35,  97 => 34,  87 => 30,  82 => 29,  77 => 28,  75 => 27,  69 => 24,  64 => 21,  54 => 17,  49 => 16,  45 => 15,  39 => 12,  27 => 3,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("
<div class=\"content up_here\">
    {{ form_ajax('onFilter',{ update: { 'product/product': '#listProduct','product/pagination': '#Pagination'}}) }}

    <div class=\"wrap_main_accommodation\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-md-3 col-sm-12\">
                    <div class=\"side_bar\" id=\"Filter\">
                        <div class=\"top_sidebar\">
                            <div class=\"info\">
                                <h3 class=\"click_colapse\">{{'Location'|_}}</h3>

                                <div class=\"open_colapse\">
                                    {% for state in states %}
                                    <label class=\"gloabal_custom\">{{ state.name }}
                                        <input type=\"checkbox\" name=\"Filter[state][]\" value=\"{{ state.id }}\">
                                        <span class=\"checkmark\"></span>
                                    </label>
                                    {% endfor %}
                                </div>
                            </div>
                            <div class=\"info\">
                                <h3 class=\"click_colapse\">{{'Type'|_}} </h3>

                                <div class=\"open_colapse\">
                                    {%if types%}
                                    {%for value in types%}
                                    <label class=\"gloabal_custom\">{{value.name}}
                                        <input type=\"checkbox\" name=\"Filter[type][]\" value=\"{{value.id}}\">
                                        <span class=\"checkmark\"></span>
                                    </label>
                                    {%endfor%}
                                    {%endif%}
                                </div>
                            </div>
                        </div>
                        <div class=\"bottom_sidebar\">
                            {%if data_percent%}
                            <h3 class=\"click_colapse\">{{'Promotion'|_}}</h3>
                            <div class=\"open_colapse\">
                                {%for value in data_percent%}
                                <div class=\"product\">
                                    <div class=\"images_info\">
                                        <a href=\"{{'home'|page}}/product/{{cate_id}}/{{value.slug}}\"><img
                                                src=\"{{value.image_preview.path|resize(263, 159,{ mode: 'crop', quality: '80', extension: 'jpg' })}}\"
                                                alt=\"\" class=\"img-responsive\"></a>
                                        {% if value.star_4 > value.star_5%}
                                        <p class=\"rating\">
                                            <span><i class=\"fas fa-star\"></i></span>
                                            <span><i class=\"fas fa-star\"></i></span>
                                            <span><i class=\"fas fa-star\"></i></span>
                                            <span><i class=\"fas fa-star\"></i></span>
                                            <span><i class=\"far fa-star\"></i></span>
                                        </p>
                                        {%elseif(value.star_4 < value.star_5)%}
                                        <p class=\"rating\">
                                            <span><i class=\"fas fa-star\"></i></span>
                                            <span><i class=\"fas fa-star\"></i></span>
                                            <span><i class=\"fas fa-star\"></i></span>
                                            <span><i class=\"fas fa-star\"></i></span>
                                            <span><i class=\"fas fa-star\"></i></span>
                                        </p>
                                        {%elseif(value.star_4 ==\"\" and value.star_5 ==\"\")%}
                                        <p class=\"rating\">
                                            <span><i class=\"far fa-star\"></i></span>
                                            <span><i class=\"far fa-star\"></i></span>
                                            <span><i class=\"far fa-star\"></i></span>
                                            <span><i class=\"far fa-star\"></i></span>
                                            <span><i class=\"far fa-star\"></i></span>
                                        </p>
                                        {%elseif(value.star_4 == value.star_5)%}
                                        <p class=\"rating\">
                                            <span><i class=\"fas fa-star\"></i></span>
                                            <span><i class=\"fas fa-star\"></i></span>
                                            <span><i class=\"fas fa-star\"></i></span>
                                            <span><i class=\"fas fa-star\"></i></span>
                                            <span><i class=\"fas fa-star\"></i></span>
                                        </p>
                                        {%endif%}
                                    </div>
                                    <div class=\"caption_info\">
                                        <h3>
                                            <a href=\"{{'home'|page}}/product/{{cate_id}}/{{value.slug}}\">{{value.name}}</a>
                                        </h3>
                                        <p>
                                            {{html_limit(value.description, 80)}}
                                        </p>
                                        <span>{{'Price'|_}} <a href=\"{{'home'|page}}/product/{{cate_id}}/{{value.slug}}\">{{value.price_new|number_format}}VNĐ</a></span>
                                        <span class=\"sele\">{{'Original price'|_}} : <b>{{value.price|number_format}}
                                                VNĐ</b></span>
                                    </div>
                                </div>
                                {%endfor%}
                            </div>
                            {%endif%}
                        </div>
                    </div>
                </div>
                <div class=\"col-md-9 col-sm-12\">
                    <div class=\"wrap_main_product row_produc\">
                        <div class=\"row\" id=\"listProduct\">
                            {% partial 'product/product' %}
                        </div>
                    </div>
                    <div class=\"panigation_categorie_grid\" id=\"Pagination\">
                        {% partial 'product/pagination'%}
                    </div>
                </div>

            </div>
        </div>
    </div>
    {{ form_close() }}
</div>
{%put scripts %}
<style type=\"text/css\" media=\"screen\">
    #Pagination {
        text-align: center;
    }

    .gloabal_custom {
        padding: 6px 15px;
        cursor: pointer;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
    }

    /* Hide the browser's default checkbox */
    .gloabal_custom input {
        position: absolute;
        opacity: 0;
        cursor: pointer;
    }
</style>
{%endput%}
{% put scripts %}
<script>
    (function (\$) {

        \$('#Filter').on('change', 'input, select', function () {
            \$('html, body').animate({
                scrollTop: \$('.up_here').offset().top - 80
            }, 1000);
            var \$form = \$(this).closest('form');
            \$form.request();
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
{% endput %}", "/var/www/vhosts/420.com.vn/httpdocs/plugins/web/hotel/components/productlist/default.htm", "");
    }
}

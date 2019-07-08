<?php

/* /var/www/vhosts/420.com.vn/httpdocs/themes/420Hospitality/pages/tour.htm */
class __TwigTemplate_b3660fa86ecec8288a0ad722064cb8e1ccf516055749293d66937e40e3586be7 extends Twig_Template
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
        <img alt=\"\" src=\"assets/pic/banner_duc4.jpg\" />
        <div class=\"describe_banner\">
            <div class=\"container_duc\">
                <h1>
                    <span class=\"title_page\">";
        // line 6
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["TRAVEL"]);
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
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["TRAVEL"]);
        echo "</a></li>
                </ul>
            </div>
        </div>
</div>
<section id=\"portfolio\" class=\"portfolio margin-top-120\">
    <div class=\"content up_here\" >

        ";
        // line 22
        echo call_user_func_array($this->env->getFunction('form_ajax')->getCallable(), ["ajax", "onFilterTravel", ["update" => ["travel/travel" => "#partialTours", "travel/pagination" => "#Pagination"]]]);
        echo "
         <!-- /wrap_pagination_top -->
        <div class=\"main_content\">
        <!--
        ";
        // line 26
        $context["tours"] = twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "tours", []);
        // line 27
        echo "        ";
        $context["locations"] = twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "locations", []);
        // line 28
        echo "-->
        <div class=\"container\">
            <div class=\"row \">
                <div class=\"col-md-3 col-sm-12\">
                    <div class=\"side_bar\">
                        <div class=\"top_sidebar\">
                            <div class=\"info\" id=\"ToursFilter\">

                                <h3 class=\"click_colapse\" style=\"margin-top: 20px;\">";
        // line 36
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Type of tour"]);
        echo "</h3>

                                <div class=\"open_colapse\">
                                    ";
        // line 39
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["types"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["type"]) {
            // line 40
            echo "                                    <label class=\"gloabal_custom\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["type"], "name", []), "html", null, true);
            echo "
                                        <input type=\"checkbox\" name=\"Filter[type][]\" value=\"";
            // line 41
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["type"], "id", []), "html", null, true);
            echo "\">
                                        <span class=\"checkmark\"></span>
                                    </label>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['type'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 45
        echo "                                </div>


                                <h3 class=\"click_colapse\" style=\"margin-top: 20px;\">";
        // line 48
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Activities"]);
        echo "</h3>
                                <div class=\"open_colapse\">
                                    ";
        // line 50
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["activities"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["activity"]) {
            // line 51
            echo "                                    <label class=\"gloabal_custom\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["activity"], "name", []), "html", null, true);
            echo "
                                        <input type=\"checkbox\" name=\"Filter[activity][]\" value=\"";
            // line 52
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["activity"], "id", []), "html", null, true);
            echo "\">
                                        <span class=\"checkmark\"></span>
                                    </label>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['activity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 56
        echo "                                </div>

                                <h3 class=\"click_colapse\" style=\"margin-top: 20px;\">";
        // line 58
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Value Rate"]);
        echo "</h3>
                                <div class=\"open_colapse\">
                                    <div class=\"fillter\">
                                        <section class=\"range-slider\" id=\"facet-price-range-slider\" data-options='{\"output\":{\"prefix\":\"\"},\"maxSymbol\":\"\"}'>
                                            <input name=\"Filter[pricemin][]\" value=\"200000\" min=\"0\" max=\"30000000\" step=\"1\" type=\"range\">
                                            <input name=\"Filter[pricemax][]\" value=\"25000000\" min=\"0\" max=\"30000000\" step=\"1\" type=\"range\">
                                        </section>
                                        <span class=\"left\">0 VND</span>
                                        <span class=\"right\">30.000.000 VND</span>
                                    </div> <!-- /fillter -->
                                </div> <!-- /info -->
                            </div>
                        <!-- </form> -->

                        </div> <!-- /top_sidebar -->

                        <div class=\"bottom_sidebar\">
                            <h3>";
        // line 75
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Promotion"]);
        echo "</h3>
                           ";
        // line 76
        if (($context["sale"] ?? null)) {
            // line 77
            echo "                                ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["sale"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["value"]) {
                // line 78
                echo "                                    <div class=\"product\">
                                        <div class=\"images_info\">
                                            <a href=\"";
                // line 80
                echo $this->extensions['Cms\Twig\Extension']->pageFilter("Home");
                echo "/tour/";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["value"], "slug", []), "html", null, true);
                echo "\"><img src=\"";
                echo call_user_func_array($this->env->getFilter('resize')->getCallable(), [$this->extensions['System\Twig\Extension']->mediaFilter(twig_get_attribute($this->env, $this->source, $context["value"], "image_preview", [])), 240, 160]);
                echo "\" title=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["value"], "name", []), "html", null, true);
                echo "\" alt=\"\" class=\"img-responsive\"></a>
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
                // line 90
                echo $this->extensions['Cms\Twig\Extension']->pageFilter("Home");
                echo "/tour/";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["value"], "slug", []), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["value"], "name", []), "html", null, true);
                echo "</a></h3>
                                            <p>";
                // line 91
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["value"], "description", []), "html", null, true);
                echo " </p>
                                            <span>Price: <a href=\"/\">";
                // line 92
                echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["value"], "price", [])), "html", null, true);
                echo " VND</a></span>
                                        </div>
                                    </div>
                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['value'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 96
            echo "                            ";
        }
        // line 97
        echo "                        </div> <!-- /bottom_sidebar -->
                    </div> <!-- /side_bar -->
                </div> <!-- /col -->
                <div class=\"col-md-9 col-sm-12\">
                    <div class=\"wrap_product\" id=\"partialTours\">

                        ";
        // line 103
        $context['__cms_component_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->componentFunction("Tour"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
        // line 104
        echo "
                        <style>#Pagination{ display: none; }</style>

                    </div> <!--  /wrap_product -->

                    <style type=\"text/css\" media=\"screen\">
                        #Pagination{
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

                    <div id=\"Pagination\">
                        ";
        // line 130
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("travel/pagination"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 131
        echo "                    </div>

                </div> <!-- /col -->
            </div> <!-- /row -->
        </div> <!-- /container -->

    ";
        // line 137
        echo call_user_func_array($this->env->getFunction('form_close')->getCallable(), ["close"]);
        echo "
    </div> <!-- /main_content -->
</div> <!-- /content -->
</section><!-- End off portfolio section -->

";
        // line 142
        echo $this->env->getExtension('Cms\Twig\Extension')->startBlock('scripts'        );
        // line 143
        echo "<script>
// Ajax Tour
(function(\$){

    \$('#ToursFilter').on('change', 'input, select', function(){
        \$('html, body').animate({
            scrollTop: \$('.up_here').offset().top-80
        }, 1000);
        var \$form = \$(this).closest('form');
        \$form.request();
    });
    \$('#ShowMore').on('change', 'input, select', function(){
        var \$form = \$(this).closest('form');
        \$form.request();
        document.getElementById(\"north\").checked = true;
    });
    \$('#ShowMore2').on('change', 'input, select', function(){
        var \$form = \$(this).closest('form');
        \$form.request();
        document.getElementById(\"central\").checked = true;
    });
    \$('#ShowMore3').on('change', 'input, select', function(){
        var \$form = \$(this).closest('form');
        \$form.request();
        document.getElementById(\"south\").checked = true;
    });
    \$('#Pagination').on('change', 'input, select', function(){
        //Scroll top
        \$('html, body').animate({
            scrollTop: \$('.up_here').offset().top-80
        }, 1000);

        var \$form = \$(this).closest('form');
        \$form.request();
    });


        
    })(jQuery);
// End Ajax Tour
</script>
";
        // line 142
        echo $this->env->getExtension('Cms\Twig\Extension')->endBlock(true        );
    }

    public function getTemplateName()
    {
        return "/var/www/vhosts/420.com.vn/httpdocs/themes/420Hospitality/pages/tour.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  321 => 142,  278 => 143,  276 => 142,  268 => 137,  260 => 131,  256 => 130,  228 => 104,  224 => 103,  216 => 97,  213 => 96,  203 => 92,  199 => 91,  191 => 90,  172 => 80,  168 => 78,  163 => 77,  161 => 76,  157 => 75,  137 => 58,  133 => 56,  123 => 52,  118 => 51,  114 => 50,  109 => 48,  104 => 45,  94 => 41,  89 => 40,  85 => 39,  79 => 36,  69 => 28,  66 => 27,  64 => 26,  57 => 22,  46 => 14,  40 => 13,  30 => 6,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"sub_banner_page\">
        <img alt=\"\" src=\"assets/pic/banner_duc4.jpg\" />
        <div class=\"describe_banner\">
            <div class=\"container_duc\">
                <h1>
                    <span class=\"title_page\">{{'TRAVEL'|_}}</span>
                </h1>
            </div>
        </div>
        <div class=\"duongdanlink\">
            <div class=\"container_duc\">
                <ul class=\"duongdan_link\">
                    <li><a href=\"{{'home'|page}}\">{{'HOME'|_}}</a></li>
                    <li class=\"active\"><a href=\"javascript:void(0)\">{{'TRAVEL'|_}}</a></li>
                </ul>
            </div>
        </div>
</div>
<section id=\"portfolio\" class=\"portfolio margin-top-120\">
    <div class=\"content up_here\" >

        {{ form_ajax('onFilterTravel', { update: { 'travel/travel': '#partialTours', 'travel/pagination': '#Pagination'} }) }}
         <!-- /wrap_pagination_top -->
        <div class=\"main_content\">
        <!--
        {% set tours = __SELF__.tours %}
        {% set locations = __SELF__.locations %}
-->
        <div class=\"container\">
            <div class=\"row \">
                <div class=\"col-md-3 col-sm-12\">
                    <div class=\"side_bar\">
                        <div class=\"top_sidebar\">
                            <div class=\"info\" id=\"ToursFilter\">

                                <h3 class=\"click_colapse\" style=\"margin-top: 20px;\">{{'Type of tour'|_}}</h3>

                                <div class=\"open_colapse\">
                                    {% for type in types %}
                                    <label class=\"gloabal_custom\">{{ type.name }}
                                        <input type=\"checkbox\" name=\"Filter[type][]\" value=\"{{ type.id}}\">
                                        <span class=\"checkmark\"></span>
                                    </label>
                                    {% endfor %}
                                </div>


                                <h3 class=\"click_colapse\" style=\"margin-top: 20px;\">{{'Activities'|_}}</h3>
                                <div class=\"open_colapse\">
                                    {% for activity in activities %}
                                    <label class=\"gloabal_custom\">{{activity.name}}
                                        <input type=\"checkbox\" name=\"Filter[activity][]\" value=\"{{activity.id}}\">
                                        <span class=\"checkmark\"></span>
                                    </label>
                                    {% endfor %}
                                </div>

                                <h3 class=\"click_colapse\" style=\"margin-top: 20px;\">{{'Value Rate'|_}}</h3>
                                <div class=\"open_colapse\">
                                    <div class=\"fillter\">
                                        <section class=\"range-slider\" id=\"facet-price-range-slider\" data-options='{\"output\":{\"prefix\":\"\"},\"maxSymbol\":\"\"}'>
                                            <input name=\"Filter[pricemin][]\" value=\"200000\" min=\"0\" max=\"30000000\" step=\"1\" type=\"range\">
                                            <input name=\"Filter[pricemax][]\" value=\"25000000\" min=\"0\" max=\"30000000\" step=\"1\" type=\"range\">
                                        </section>
                                        <span class=\"left\">0 VND</span>
                                        <span class=\"right\">30.000.000 VND</span>
                                    </div> <!-- /fillter -->
                                </div> <!-- /info -->
                            </div>
                        <!-- </form> -->

                        </div> <!-- /top_sidebar -->

                        <div class=\"bottom_sidebar\">
                            <h3>{{'Promotion'|_}}</h3>
                           {%if sale %}
                                {%for value in sale%}
                                    <div class=\"product\">
                                        <div class=\"images_info\">
                                            <a href=\"{{'Home'|page}}/tour/{{value.slug}}\"><img src=\"{{value.image_preview|media|resize(240,160)}}\" title=\"{{value.name}}\" alt=\"\" class=\"img-responsive\"></a>
                                            <p class=\"rating\">
                                                <span><i class=\"fas fa-star\"></i></span>
                                                <span><i class=\"fas fa-star\"></i></span>
                                                <span><i class=\"fas fa-star\"></i></span>
                                                <span><i class=\"fas fa-star\"></i></span>
                                                <span><i class=\"fas fa-star\"></i></span>
                                            </p>
                                        </div>
                                        <div class=\"caption_info\">
                                            <h3><a href=\"{{'Home'|page}}/tour/{{value.slug}}\">{{value.name}}</a></h3>
                                            <p>{{value.description}} </p>
                                            <span>Price: <a href=\"/\">{{value.price|number_format()}} VND</a></span>
                                        </div>
                                    </div>
                                {%endfor%}
                            {%endif%}
                        </div> <!-- /bottom_sidebar -->
                    </div> <!-- /side_bar -->
                </div> <!-- /col -->
                <div class=\"col-md-9 col-sm-12\">
                    <div class=\"wrap_product\" id=\"partialTours\">

                        {% component 'Tour' %}

                        <style>#Pagination{ display: none; }</style>

                    </div> <!--  /wrap_product -->

                    <style type=\"text/css\" media=\"screen\">
                        #Pagination{
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

                    <div id=\"Pagination\">
                        {% partial 'travel/pagination' %}
                    </div>

                </div> <!-- /col -->
            </div> <!-- /row -->
        </div> <!-- /container -->

    {{ form_close() }}
    </div> <!-- /main_content -->
</div> <!-- /content -->
</section><!-- End off portfolio section -->

{% put scripts %}
<script>
// Ajax Tour
(function(\$){

    \$('#ToursFilter').on('change', 'input, select', function(){
        \$('html, body').animate({
            scrollTop: \$('.up_here').offset().top-80
        }, 1000);
        var \$form = \$(this).closest('form');
        \$form.request();
    });
    \$('#ShowMore').on('change', 'input, select', function(){
        var \$form = \$(this).closest('form');
        \$form.request();
        document.getElementById(\"north\").checked = true;
    });
    \$('#ShowMore2').on('change', 'input, select', function(){
        var \$form = \$(this).closest('form');
        \$form.request();
        document.getElementById(\"central\").checked = true;
    });
    \$('#ShowMore3').on('change', 'input, select', function(){
        var \$form = \$(this).closest('form');
        \$form.request();
        document.getElementById(\"south\").checked = true;
    });
    \$('#Pagination').on('change', 'input, select', function(){
        //Scroll top
        \$('html, body').animate({
            scrollTop: \$('.up_here').offset().top-80
        }, 1000);

        var \$form = \$(this).closest('form');
        \$form.request();
    });


        
    })(jQuery);
// End Ajax Tour
</script>
{% endput %}", "/var/www/vhosts/420.com.vn/httpdocs/themes/420Hospitality/pages/tour.htm", "");
    }
}

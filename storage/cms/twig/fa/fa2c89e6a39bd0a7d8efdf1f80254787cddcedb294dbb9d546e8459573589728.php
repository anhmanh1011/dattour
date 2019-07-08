<?php

/* /var/www/vhosts/420.com.vn/httpdocs/themes/420Hospitality/pages/roomDetail.htm */
class __TwigTemplate_105b9a89ea54590dcdfa48f5e5fcd8d0dee58e1f4bed1a725bc5df57cf47d197 extends Twig_Template
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
\t<img alt=\"\" src=\"assets/pic/banner_duc5.jpg\" />
\t<div class=\"describe_banner\">
\t\t<div class=\"container_duc\">
\t\t\t<h1>
\t\t\t\t<span class=\"title_page\">";
        // line 6
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Room Detail"]);
        echo "</span>
\t\t\t</h1>
\t\t</div>
\t</div>
\t<div class=\"duongdanlink\">
\t\t<div class=\"container_duc\">
\t\t\t<ul class=\"duongdan_link\">
\t\t\t\t<li><a href=\"/\">";
        // line 13
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Home"]);
        echo "</a></li>
\t\t\t\t<li><a href=\"";
        // line 14
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("hotel");
        echo "\">";
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Hotel"]);
        echo "</a></li>
\t\t\t\t<li><a href=\"/hotel/";
        // line 15
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["hotel"] ?? null), "slug", []), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["hotel"] ?? null), "name", []), "html", null, true);
        echo "</a></li>
\t\t\t\t<li class=\"active\"><a href=\"javascript:void(0)\">";
        // line 16
        echo twig_escape_filter($this->env, ($context["meta_title"] ?? null), "html", null, true);
        echo "</a></li>
\t\t\t</ul>
\t\t</div>
\t</div>
</div>
<div class=\"content up_here\">
\t<div class=\"sub_pagedetail_tour\">
\t\t<div class=\"container_duc\">
\t\t\t<div class=\"PageContentLoadControl\">
\t\t\t\t<div class=\"left\">
\t\t\t\t\t<div class=\"slide_image_room\">
\t\t\t\t\t\t";
        // line 27
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["room_detail"] ?? null), "album_images", []));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 28
            echo "\t\t\t\t\t\t<div class=\"item_room_detal\">
\t\t\t\t\t\t\t<div class=\"frame_image\">
\t\t\t\t\t\t\t\t<span class=\"frame_image_Crop\">
\t\t\t\t\t\t\t\t\t<img alt=\"\" class=\"drift-demo-trigger\" src=\"";
            // line 31
            echo call_user_func_array($this->env->getFilter('resize')->getCallable(), [$context["item"], 863, 574, ["mode" => "crop", "quality" => "90"]]);
            echo "\" />
\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 36
        echo "\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"title_price_room\">
\t\t\t\t\t\t<span class=\"title_room\">";
        // line 38
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["room_detail"] ?? null), "name", []), "html", null, true);
        echo "</span>
\t\t\t\t\t\t<span class=\"price_room\">";
        // line 39
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Price from"]);
        echo ": ";
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["room_detail"] ?? null), "price", [])), "html", null, true);
        echo " đ</span>
\t\t\t\t\t\t/ ";
        // line 40
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Night"]);
        echo "
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"slide_icon_room\">
\t\t\t\t\t\t";
        // line 43
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["room_detail"] ?? null), "album_images", []));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 44
            echo "\t\t\t\t\t\t<div class=\"item_room_detal\">
\t\t\t\t\t\t\t<div class=\"frame_image\">
\t\t\t\t\t\t\t\t<a class=\"frame_image_Crop\"><img alt=\"\" src=\"";
            // line 46
            echo call_user_func_array($this->env->getFilter('resize')->getCallable(), [$context["item"], 155, 107, ["mode" => "crop", "quality" => "90"]]);
            echo "\" /></a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 50
        echo "\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"information_detail_sp\">
\t\t\t\t\t\t<ul class=\"tabpick\">
\t\t\t\t\t\t\t<li class=\"active\"><a href=\"#thongtin01\" class=\"bgln\">";
        // line 53
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Room Detail"]);
        echo "</a></li>
\t\t\t\t\t\t\t<li><a href=\"#thongtin02\" class=\"bgln\">";
        // line 54
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Reviews"]);
        echo "</a></li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t\t<div class=\"tabcontent\">
\t\t\t\t\t\t\t<div class=\"tabcon active\" id=\"thongtin01\">
\t\t\t\t\t\t\t\t<div class=\"room_detail_one\">
\t\t\t\t\t\t\t\t\t<div class=\"lst_info_inroom\">
\t\t\t\t\t\t\t\t\t\t<div class=\"item_info_inroom\">
\t\t\t\t\t\t\t\t\t\t\t";
        // line 61
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Room Size"]);
        echo ": <span class=\"number_info\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["room_detail"] ?? null), "acreage", []), "html", null, true);
        echo " m2</span>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"item_info_inroom\">
\t\t\t\t\t\t\t\t\t\t\t";
        // line 64
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Bed Number"]);
        echo ": <span class=\"number_info\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["room_detail"] ?? null), "number_of_bed", []), "html", null, true);
        echo "</span>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"item_info_inroom\">
\t\t\t\t\t\t\t\t\t\t\t";
        // line 67
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Maximum people"]);
        echo ": <span class=\"number_info\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["room_detail"] ?? null), "max_people", []), "html", null, true);
        echo "</span>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"lst_info_inroom_two\">
\t\t\t\t\t\t\t\t\t\t";
        // line 71
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["room_detail"] ?? null), "amenities", []));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 72
            echo "\t\t\t\t\t\t\t\t\t\t<div class=\"item_info_inroom_two\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-check\" aria-hidden=\"true\"></i>
\t\t\t\t\t\t\t\t\t\t\t";
            // line 74
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "name", []), "html", null, true);
            echo "
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 77
        echo "\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"tabcon\" id=\"thongtin02\">
\t\t\t\t\t\t\t\t<div class=\"evaluate_tour_one\">
\t\t\t\t\t\t\t\t\t<div class=\"post_review\">
\t\t\t\t\t\t\t\t\t\t<div class=\"top\">
\t\t\t\t\t\t\t\t\t\t\t<h5 class=\"title\">";
        // line 84
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Reviews"]);
        echo "</h5>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"rate_star\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"rateit\" id=\"rateit\" data-rateit-mode=\"font\" data-rateit-value=\"
\t\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 87
        if ((twig_get_attribute($this->env, $this->source, ($context["room_detail"] ?? null), "star_4", []) + twig_get_attribute($this->env, $this->source, ($context["room_detail"] ?? null), "star_5", []))) {
            // line 88
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (((twig_get_attribute($this->env, $this->source, ($context["room_detail"] ?? null), "star_4", []) * 4) + (twig_get_attribute($this->env, $this->source, ($context["room_detail"] ?? null), "star_5", []) * 5)) / (twig_get_attribute($this->env, $this->source, ($context["room_detail"] ?? null), "star_4", []) + twig_get_attribute($this->env, $this->source, ($context["room_detail"] ?? null), "star_5", []))), 1, ".", ","), "html", null, true);
            echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t";
        } else {
            // line 89
            echo " 0
\t\t\t\t\t\t\t\t\t\t\t\t\t";
        }
        // line 90
        echo "\" data-productid=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["room_detail"] ?? null), "id", []), "html", null, true);
        echo "\" data-num4=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["room_detail"] ?? null), "star_4", []), "html", null, true);
        echo "\" data-num5=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["room_detail"] ?? null), "star_5", []), "html", null, true);
        echo "\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t<span id=\"result\">
\t\t\t\t\t\t\t\t\t\t\t\t\t(";
        // line 92
        if (((twig_get_attribute($this->env, $this->source, ($context["room_detail"] ?? null), "star_4", []) + twig_get_attribute($this->env, $this->source, ($context["room_detail"] ?? null), "star_5", [])) != 0)) {
            // line 93
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t";
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (((twig_get_attribute($this->env, $this->source, ($context["room_detail"] ?? null), "star_4", []) * 4) + (twig_get_attribute($this->env, $this->source, ($context["room_detail"] ?? null), "star_5", []) * 5)) / (twig_get_attribute($this->env, $this->source, ($context["room_detail"] ?? null), "star_4", []) + twig_get_attribute($this->env, $this->source, ($context["room_detail"] ?? null), "star_5", []))), 1, ".", ","), "html", null, true);
            echo "/5 (90%) ";
            echo twig_escape_filter($this->env, (twig_get_attribute($this->env, $this->source, ($context["room_detail"] ?? null), "star_4", []) + twig_get_attribute($this->env, $this->source, ($context["room_detail"] ?? null), "star_5", [])), "html", null, true);
            echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t";
        }
        // line 94
        echo " ";
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["vote"]);
        echo ")
\t\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t</div> 
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"bottom\">
                      <div class=\"line\">
                        <span>";
        // line 100
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Excellent"]);
        echo "</span>
                        <div class=\"rateit\" data-rateit-mode=\"font\" data-rateit-value=\"5\"></div>
                        <div class=\"progress\">
                          <div class=\"progress-bar progress-bar-warning\" role=\"progressbar\" aria-valuenow=\"60\"
                            aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"width:87%\">
                          </div>
                        </div>
                        <span>87% (";
        // line 107
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["room_detail"] ?? null), "star_4", []), "html", null, true);
        echo " ";
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["vote"]);
        echo ")</span>
                      </div>
      
                      <div class=\"line line_2\">
                        <span>";
        // line 111
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Good"]);
        echo "</span>
                        <div class=\"rateit\" data-rateit-mode=\"font\" data-rateit-value=\"4\"></div>
                        <div class=\"progress\">
                          <div class=\"progress-bar progress-bar-warning\" role=\"progressbar\" aria-valuenow=\"60\"
                            aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"width:65%\">
                          </div>
                        </div>
                        <span>65% (";
        // line 118
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["room_detail"] ?? null), "star_5", []), "html", null, true);
        echo " ";
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["vote"]);
        echo ")</span>
                      </div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>

\t\t\t\t</div>
\t\t\t\t<div class=\"right\">
\t\t\t\t\t";
        // line 129
        $context['__cms_component_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->componentFunction("DetailRoom"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
        // line 130
        echo "\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"sub_section_related\">
\t\t\t\t<div class=\"title_related\">";
        // line 133
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Other Rooms"]);
        echo "</div>
\t\t\t\t<div class=\"lst_room_related\">
\t\t\t\t\t";
        // line 135
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["hotel_cate"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 136
            echo "\t\t\t\t\t<div class=\"item_room_related\">
\t\t\t\t\t\t<div class=\"frame_image\">
\t\t\t\t\t\t\t<a class=\"frame_image_Crop\" href=\"/hotel/";
            // line 138
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "slug", []), "html", null, true);
            echo "\">
\t\t\t\t\t\t\t\t<img alt=\"\" src=\"";
            // line 139
            echo call_user_func_array($this->env->getFilter('resize')->getCallable(), [twig_get_attribute($this->env, $this->source, $context["item"], "image_preview", []), 370, 247, ["mode" => "crop", "quality" => "90"]]);
            echo "\" />
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"info_room_related\">
\t\t\t\t\t\t\t<div class=\"ngoaia\">
\t\t\t\t\t\t\t\t<h3>
\t\t\t\t\t\t\t\t\t<a class=\"title\" href=\"/hotel/";
            // line 145
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "slug", []), "html", null, true);
            echo "\">
\t\t\t\t\t\t\t\t\t\t";
            // line 146
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "name", []), "html", null, true);
            echo "
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</h3>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"price_room\">
\t\t\t\t\t\t\t\t";
            // line 151
            echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Price"]);
            echo ": <span class=\"number_price\">";
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "price", [])), "html", null, true);
            echo " đ<span class=\"fotcam\">/";
            echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Night"]);
            echo "</span></span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 156
        echo "\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
</div>
";
        // line 161
        echo $this->env->getExtension('Cms\Twig\Extension')->startBlock('scripts'        );
        // line 162
        echo "<script>
  \$( document ).ready(function() {
      \$('html, body').animate({
          scrollTop: \$('.up_here').offset().top-80
      }, 1000);
  });
\t\$('#rateit').click('rated reset', function (e) {
\t\tvar ri = \$(this);
\t\tvar value = ri.rateit('value');
\t\tvar id = ri.data('productid');
\t\tvar star_4 = ri.data('num4');
\t\tvar star_5 = ri.data('num5');
\t\tvar rated = false
\t\tif (value > 3 && rated == false) {
\t\t\tri.rateit('readonly', true);

\t\t\t\$.request('onGetStarRate', {
\t\t\t\tdata: {
\t\t\t\t\tid,
\t\t\t\t\tvalue,
          star_4,
          star_5
\t\t\t\t},
\t\t\t\tsuccess: function (data) {
\t\t\t\t\tif (value == 4) {
\t\t\t\t\t\t\$('#result').html('(' + (((star_4 + 1) * 4 + star_5 * 5) / (star_4 + star_5 + 1)).toFixed(1) + '/5 ' +
\t\t\t\t\t\t\t(star_4 + star_5 + 1) + ' ";
        // line 188
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["vote"]);
        echo " )' );
\t\t\t\t\t}
\t\t\t\t\tif (value == 5) {
\t\t\t\t\t\t\$('#result').html('(' + ((star_4 * 4 + (star_5 + 1) * 5) / (star_4 + star_5 + 1)).toFixed(1) + '/5 ' +
\t\t\t\t\t\t\t(star_4 + star_5 + 1) + ' ";
        // line 192
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["vote"]);
        echo " )' );
\t\t\t\t\t}
          rated = true;
\t\t\t\t},
\t\t\t});
\t\t}
\t});
</script>
";
        // line 161
        echo $this->env->getExtension('Cms\Twig\Extension')->endBlock(true        );
    }

    public function getTemplateName()
    {
        return "/var/www/vhosts/420.com.vn/httpdocs/themes/420Hospitality/pages/roomDetail.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  408 => 161,  397 => 192,  390 => 188,  362 => 162,  360 => 161,  353 => 156,  338 => 151,  330 => 146,  326 => 145,  317 => 139,  313 => 138,  309 => 136,  305 => 135,  300 => 133,  295 => 130,  291 => 129,  275 => 118,  265 => 111,  256 => 107,  246 => 100,  236 => 94,  228 => 93,  226 => 92,  216 => 90,  212 => 89,  206 => 88,  204 => 87,  198 => 84,  189 => 77,  180 => 74,  176 => 72,  172 => 71,  163 => 67,  155 => 64,  147 => 61,  137 => 54,  133 => 53,  128 => 50,  118 => 46,  114 => 44,  110 => 43,  104 => 40,  98 => 39,  94 => 38,  90 => 36,  79 => 31,  74 => 28,  70 => 27,  56 => 16,  50 => 15,  44 => 14,  40 => 13,  30 => 6,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"sub_banner_page\">
\t<img alt=\"\" src=\"assets/pic/banner_duc5.jpg\" />
\t<div class=\"describe_banner\">
\t\t<div class=\"container_duc\">
\t\t\t<h1>
\t\t\t\t<span class=\"title_page\">{{'Room Detail'|_}}</span>
\t\t\t</h1>
\t\t</div>
\t</div>
\t<div class=\"duongdanlink\">
\t\t<div class=\"container_duc\">
\t\t\t<ul class=\"duongdan_link\">
\t\t\t\t<li><a href=\"/\">{{'Home'|_}}</a></li>
\t\t\t\t<li><a href=\"{{'hotel'|page}}\">{{'Hotel'|_}}</a></li>
\t\t\t\t<li><a href=\"/hotel/{{hotel.slug}}\">{{hotel.name}}</a></li>
\t\t\t\t<li class=\"active\"><a href=\"javascript:void(0)\">{{meta_title}}</a></li>
\t\t\t</ul>
\t\t</div>
\t</div>
</div>
<div class=\"content up_here\">
\t<div class=\"sub_pagedetail_tour\">
\t\t<div class=\"container_duc\">
\t\t\t<div class=\"PageContentLoadControl\">
\t\t\t\t<div class=\"left\">
\t\t\t\t\t<div class=\"slide_image_room\">
\t\t\t\t\t\t{% for item in room_detail.album_images %}
\t\t\t\t\t\t<div class=\"item_room_detal\">
\t\t\t\t\t\t\t<div class=\"frame_image\">
\t\t\t\t\t\t\t\t<span class=\"frame_image_Crop\">
\t\t\t\t\t\t\t\t\t<img alt=\"\" class=\"drift-demo-trigger\" src=\"{{ item | resize(863,574, { mode: 'crop', quality: '90' }) }}\" />
\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"title_price_room\">
\t\t\t\t\t\t<span class=\"title_room\">{{room_detail.name}}</span>
\t\t\t\t\t\t<span class=\"price_room\">{{'Price from'|_}}: {{room_detail.price|number_format()}} đ</span>
\t\t\t\t\t\t/ {{'Night'|_}}
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"slide_icon_room\">
\t\t\t\t\t\t{% for item in room_detail.album_images %}
\t\t\t\t\t\t<div class=\"item_room_detal\">
\t\t\t\t\t\t\t<div class=\"frame_image\">
\t\t\t\t\t\t\t\t<a class=\"frame_image_Crop\"><img alt=\"\" src=\"{{ item | resize(155,107, { mode: 'crop', quality: '90' }) }}\" /></a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"information_detail_sp\">
\t\t\t\t\t\t<ul class=\"tabpick\">
\t\t\t\t\t\t\t<li class=\"active\"><a href=\"#thongtin01\" class=\"bgln\">{{'Room Detail'|_}}</a></li>
\t\t\t\t\t\t\t<li><a href=\"#thongtin02\" class=\"bgln\">{{'Reviews'|_}}</a></li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t\t<div class=\"tabcontent\">
\t\t\t\t\t\t\t<div class=\"tabcon active\" id=\"thongtin01\">
\t\t\t\t\t\t\t\t<div class=\"room_detail_one\">
\t\t\t\t\t\t\t\t\t<div class=\"lst_info_inroom\">
\t\t\t\t\t\t\t\t\t\t<div class=\"item_info_inroom\">
\t\t\t\t\t\t\t\t\t\t\t{{'Room Size'|_}}: <span class=\"number_info\">{{room_detail.acreage}} m2</span>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"item_info_inroom\">
\t\t\t\t\t\t\t\t\t\t\t{{'Bed Number'|_}}: <span class=\"number_info\">{{room_detail.number_of_bed}}</span>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"item_info_inroom\">
\t\t\t\t\t\t\t\t\t\t\t{{'Maximum people'|_}}: <span class=\"number_info\">{{room_detail.max_people}}</span>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"lst_info_inroom_two\">
\t\t\t\t\t\t\t\t\t\t{% for item in room_detail.amenities %}
\t\t\t\t\t\t\t\t\t\t<div class=\"item_info_inroom_two\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-check\" aria-hidden=\"true\"></i>
\t\t\t\t\t\t\t\t\t\t\t{{item.name}}
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"tabcon\" id=\"thongtin02\">
\t\t\t\t\t\t\t\t<div class=\"evaluate_tour_one\">
\t\t\t\t\t\t\t\t\t<div class=\"post_review\">
\t\t\t\t\t\t\t\t\t\t<div class=\"top\">
\t\t\t\t\t\t\t\t\t\t\t<h5 class=\"title\">{{'Reviews'|_}}</h5>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"rate_star\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"rateit\" id=\"rateit\" data-rateit-mode=\"font\" data-rateit-value=\"
\t\t\t\t\t\t\t\t\t\t\t\t\t{% if ((room_detail.star_4 + room_detail.star_5)) %}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t{{ (((room_detail.star_4)*4 + room_detail.star_5*5)/(room_detail.star_4 + room_detail.star_5))|number_format(1, '.', ',') }}
\t\t\t\t\t\t\t\t\t\t\t\t\t{% else %} 0
\t\t\t\t\t\t\t\t\t\t\t\t\t{% endif %}\" data-productid=\"{{ room_detail.id }}\" data-num4=\"{{ room_detail.star_4 }}\" data-num5=\"{{ room_detail.star_5 }}\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t<span id=\"result\">
\t\t\t\t\t\t\t\t\t\t\t\t\t({%if (room_detail.star_4 + room_detail.star_5) != 0 %}
\t\t\t\t\t\t\t\t\t\t\t\t\t{{ (((room_detail.star_4)*4 + room_detail.star_5*5)/(room_detail.star_4 + room_detail.star_5))|number_format(1, '.', ',') }}/5 (90%) {{ room_detail.star_4 + room_detail.star_5 }}
\t\t\t\t\t\t\t\t\t\t\t\t\t{%endif%} {{'vote'|_}})
\t\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t</div> 
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"bottom\">
                      <div class=\"line\">
                        <span>{{'Excellent'|_}}</span>
                        <div class=\"rateit\" data-rateit-mode=\"font\" data-rateit-value=\"5\"></div>
                        <div class=\"progress\">
                          <div class=\"progress-bar progress-bar-warning\" role=\"progressbar\" aria-valuenow=\"60\"
                            aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"width:87%\">
                          </div>
                        </div>
                        <span>87% ({{  room_detail.star_4 }} {{'vote'|_}})</span>
                      </div>
      
                      <div class=\"line line_2\">
                        <span>{{'Good'|_}}</span>
                        <div class=\"rateit\" data-rateit-mode=\"font\" data-rateit-value=\"4\"></div>
                        <div class=\"progress\">
                          <div class=\"progress-bar progress-bar-warning\" role=\"progressbar\" aria-valuenow=\"60\"
                            aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"width:65%\">
                          </div>
                        </div>
                        <span>65% ({{  room_detail.star_5 }} {{'vote'|_}})</span>
                      </div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>

\t\t\t\t</div>
\t\t\t\t<div class=\"right\">
\t\t\t\t\t{% component 'DetailRoom' %}
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"sub_section_related\">
\t\t\t\t<div class=\"title_related\">{{'Other Rooms'|_}}</div>
\t\t\t\t<div class=\"lst_room_related\">
\t\t\t\t\t{% for item in hotel_cate %}
\t\t\t\t\t<div class=\"item_room_related\">
\t\t\t\t\t\t<div class=\"frame_image\">
\t\t\t\t\t\t\t<a class=\"frame_image_Crop\" href=\"/hotel/{{item.slug}}\">
\t\t\t\t\t\t\t\t<img alt=\"\" src=\"{{ item.image_preview | resize(370,247, { mode: 'crop', quality: '90' }) }}\" />
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"info_room_related\">
\t\t\t\t\t\t\t<div class=\"ngoaia\">
\t\t\t\t\t\t\t\t<h3>
\t\t\t\t\t\t\t\t\t<a class=\"title\" href=\"/hotel/{{item.slug}}\">
\t\t\t\t\t\t\t\t\t\t{{item.name}}
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</h3>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"price_room\">
\t\t\t\t\t\t\t\t{{'Price'|_}}: <span class=\"number_price\">{{item.price|number_format()}} đ<span class=\"fotcam\">/{{'Night'|_}}</span></span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t{% endfor %}
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
</div>
{% put scripts %}
<script>
  \$( document ).ready(function() {
      \$('html, body').animate({
          scrollTop: \$('.up_here').offset().top-80
      }, 1000);
  });
\t\$('#rateit').click('rated reset', function (e) {
\t\tvar ri = \$(this);
\t\tvar value = ri.rateit('value');
\t\tvar id = ri.data('productid');
\t\tvar star_4 = ri.data('num4');
\t\tvar star_5 = ri.data('num5');
\t\tvar rated = false
\t\tif (value > 3 && rated == false) {
\t\t\tri.rateit('readonly', true);

\t\t\t\$.request('onGetStarRate', {
\t\t\t\tdata: {
\t\t\t\t\tid,
\t\t\t\t\tvalue,
          star_4,
          star_5
\t\t\t\t},
\t\t\t\tsuccess: function (data) {
\t\t\t\t\tif (value == 4) {
\t\t\t\t\t\t\$('#result').html('(' + (((star_4 + 1) * 4 + star_5 * 5) / (star_4 + star_5 + 1)).toFixed(1) + '/5 ' +
\t\t\t\t\t\t\t(star_4 + star_5 + 1) + ' {{'vote'|_}} )' );
\t\t\t\t\t}
\t\t\t\t\tif (value == 5) {
\t\t\t\t\t\t\$('#result').html('(' + ((star_4 * 4 + (star_5 + 1) * 5) / (star_4 + star_5 + 1)).toFixed(1) + '/5 ' +
\t\t\t\t\t\t\t(star_4 + star_5 + 1) + ' {{'vote'|_}} )' );
\t\t\t\t\t}
          rated = true;
\t\t\t\t},
\t\t\t});
\t\t}
\t});
</script>
{% endput %}", "/var/www/vhosts/420.com.vn/httpdocs/themes/420Hospitality/pages/roomDetail.htm", "");
    }
}

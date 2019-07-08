<?php

/* /var/www/vhosts/420.com.vn/httpdocs/plugins/web/hotel/components/productdetail/default.htm */
class __TwigTemplate_391942da86af88fbae186383fa7f874102f8e30cad955376158095e7d4335e12 extends Twig_Template
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
        $context["products"] = twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "product", []);
        // line 2
        $context["location"] = twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "name", []);
        // line 3
        $context["listproduct"] = twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "listproduct", []);
        // line 4
        echo "
<div class=\"content up_here\">
\t<div class=\"sub_pagedetail_tour\">
\t\t<div class=\"container_duc\">
\t\t\t<div class=\"lst_detail_top\">
\t\t\t\t<div class=\"left\">
\t\t\t\t\t<div class=\"slide_image\">
\t\t\t\t\t\t<div class=\"item_tour_detal\">
\t\t\t\t\t\t\t<div class=\"frame_image\">
\t\t\t\t\t\t\t\t<span class=\"frame_image_Crop\">
\t\t\t\t\t\t\t\t\t<img alt=\"\"
\t\t\t\t\t\t\t\t\t\tsrc=\"";
        // line 15
        echo call_user_func_array($this->env->getFilter('resize')->getCallable(), [twig_get_attribute($this->env, $this->source, ($context["products"] ?? null), "image_preview", []), 667, 467, ["mode" => "crop", "quality" => "90"]]);
        echo "\" />
\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
        // line 19
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["products"] ?? null), "album_images", []));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 20
            echo "\t\t\t\t\t\t<div class=\"item_tour_detal\">
\t\t\t\t\t\t\t<div class=\"frame_image\">
\t\t\t\t\t\t\t\t<span class=\"frame_image_Crop\">
\t\t\t\t\t\t\t\t\t<img alt=\"\" src=\"";
            // line 23
            echo call_user_func_array($this->env->getFilter('resize')->getCallable(), [$context["item"], 667, 467, ["mode" => "crop", "quality" => "90"]]);
            echo "\" />
\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 28
        echo "\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"right\">
\t\t\t\t\t<div class=\"title_detail_tour\">";
        // line 31
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["products"] ?? null), "name", []), "html", null, true);
        echo "</div>
\t\t\t\t\t<div class=\"rate_star display_star\">
\t\t\t\t\t\t<div class=\"rateit\" id=\"rateit\" data-rateit-mode=\"font\" data-rateit-value=\"
\t\t\t\t\t\t\t\t\t\t";
        // line 34
        if ((($context["star4"] ?? null) + ($context["star5"] ?? null))) {
            // line 35
            echo "\t\t\t\t\t\t\t\t\t\t\t";
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (((($context["star4"] ?? null) * 4) + (($context["star5"] ?? null) * 5)) / (($context["star4"] ?? null) + ($context["star5"] ?? null))), 1, ".", ","), "html", null, true);
            echo "
\t\t\t\t\t\t\t\t\t\t";
        } else {
            // line 36
            echo " 0
\t\t\t\t\t\t\t\t\t\t";
        }
        // line 37
        echo "\" data-productid=\"";
        echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
        echo "\" data-num4=\"";
        echo twig_escape_filter($this->env, ($context["star4"] ?? null), "html", null, true);
        echo "\" data-num5=\"";
        echo twig_escape_filter($this->env, ($context["star5"] ?? null), "html", null, true);
        echo "\"></div>
\t\t\t\t\t\t<span id=\"result\">
\t\t\t\t\t\t\t(";
        // line 39
        if (((($context["star4"] ?? null) + ($context["star5"] ?? null)) != 0)) {
            // line 40
            echo "\t\t\t\t\t\t\t";
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (((($context["star4"] ?? null) * 4) + (($context["star5"] ?? null) * 5)) / (($context["star4"] ?? null) + ($context["star5"] ?? null))), 1, ".", ","), "html", null, true);
            echo "/5 (90%)
\t\t\t\t\t\t\t";
            // line 41
            echo twig_escape_filter($this->env, (($context["star4"] ?? null) + ($context["star5"] ?? null)), "html", null, true);
            echo "
\t\t\t\t\t\t\t";
        }
        // line 42
        echo " ";
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["vote"]);
        echo ")
\t\t\t\t\t\t</span>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"price_tour\">
\t\t\t\t\t\t<span class=\"price_promotion\">";
        // line 46
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["products"] ?? null), "price", [])), "html", null, true);
        echo " VNĐ</span>
\t\t\t\t\t\t<!-- <span class=\"price_listed\">7.000.000đ</span> -->
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"lst_dsdetail\">
\t\t\t\t\t\t<div class=\"item_dsdetail\">
\t\t\t\t\t\t\t<span class=\"icon_information\"><i class=\"fa fa-map-marker\" aria-hidden=\"true\"></i></span>
\t\t\t\t\t\t\t<span class=\"information_number\">";
        // line 52
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Destination"]);
        echo ": <span
\t\t\t\t\t\t\t\t\tclass=\"fotxanh\">";
        // line 53
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["products"] ?? null), "address", []), "html", null, true);
        echo "</span></span>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"ngoaiibtn\">
\t\t\t\t\t\t<button type=\"button\" class=\"btn_book_tour\" onclick=\"popupbt()\">";
        // line 57
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Book now"]);
        echo "</button>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"slide_icon\">
\t\t\t\t\t\t<div class=\"item_tour_detal\">
\t\t\t\t\t\t\t<div class=\"frame_image\">
\t\t\t\t\t\t\t\t<a class=\"frame_image_Crop\"><img alt=\"\"
\t\t\t\t\t\t\t\t\t\tsrc=\"";
        // line 63
        echo call_user_func_array($this->env->getFilter('resize')->getCallable(), [twig_get_attribute($this->env, $this->source, ($context["products"] ?? null), "image_preview", []), 111, 69, ["mode" => "crop", "quality" => "90"]]);
        echo "\" /></a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
        // line 66
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["products"] ?? null), "album_images", []));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 67
            echo "\t\t\t\t\t\t<div class=\"item_tour_detal\">
\t\t\t\t\t\t\t<div class=\"frame_image\">
\t\t\t\t\t\t\t\t<a class=\"frame_image_Crop\"><img alt=\"\"
\t\t\t\t\t\t\t\t\t\tsrc=\"";
            // line 70
            echo call_user_func_array($this->env->getFilter('resize')->getCallable(), [$context["item"], 111, 69, ["mode" => "crop", "quality" => "90"]]);
            echo "\" /></a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 74
        echo "\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"information_detail_sp\">
\t\t\t\t<ul class=\"tabpick\">
\t\t\t\t\t<li class=\"active\"><a href=\"#thongtin01\" class=\"bgln\">";
        // line 79
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Detail"]);
        echo "</a></li>
\t\t\t\t\t<li><a href=\"#thongtin02\" class=\"bgln\">";
        // line 80
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Reviews"]);
        echo "</a></li>
\t\t\t\t</ul>
\t\t\t\t<div class=\"tabcontent\">
\t\t\t\t\t<div class=\"tabcon active\" id=\"thongtin01\">
\t\t\t\t\t\t<div class=\"products_one\">
\t\t\t\t\t\t\t<div class=\"left_tour_detail\">
\t\t\t\t\t\t\t\t<div class=\"lst_schedule_tour\">
\t\t\t\t\t\t\t\t\t<div class=\"item_schedule_tour\">
\t\t\t\t\t\t\t\t\t\t<div class=\"title_schedule_tour\">
\t\t\t\t\t\t\t\t\t\t\t<span class=\"name_schedule_tour\" style=\"margin-left: 0;\">About this</span>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"note_schedule_tour\" style=\"text-align:justify;font-size: 18px;\">
\t\t\t\t\t\t\t\t\t\t\t";
        // line 92
        echo twig_get_attribute($this->env, $this->source, ($context["products"] ?? null), "content", []);
        echo "
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"right_products\">
\t\t\t\t\t\t\t\t<h2>
\t\t\t\t\t\t\t\t\t<span class=\"title_right\">";
        // line 99
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Tour Hot"]);
        echo "</span>
\t\t\t\t\t\t\t\t</h2>
\t\t\t\t\t\t\t\t<div class=\"lst_tour_right\">
\t\t\t\t\t\t\t\t\t";
        // line 102
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["tourHot"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 103
            echo "\t\t\t\t\t\t\t\t\t<div class=\"item_tour_right\">
\t\t\t\t\t\t\t\t\t\t<div class=\"frame_image\">
\t\t\t\t\t\t\t\t\t\t\t<a class=\"frame_image_Crop\" href=\"/travel/";
            // line 105
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "slug", []), "html", null, true);
            echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t<img alt=\"\"
\t\t\t\t\t\t\t\t\t\t\t\t\tsrc=\"";
            // line 107
            echo call_user_func_array($this->env->getFilter('resize')->getCallable(), [twig_get_attribute($this->env, $this->source, $context["item"], "image_preview", []), 102, 71, ["mode" => "crop", "quality" => "90"]]);
            echo "\" />
\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"information_tour\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"ngoaia\">
\t\t\t\t\t\t\t\t\t\t\t\t<h3>
\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"title\" href=\"/travel/";
            // line 113
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "slug", []), "html", null, true);
            echo "\" title=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "name", []), "html", null, true);
            echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 114
            echo call_user_func_array($this->env->getFunction('str_limit')->getCallable(), ["limit", twig_get_attribute($this->env, $this->source, $context["item"], "name", []), 20]);
            echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t</h3>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"number_daysaway\">
\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-clock-o\" aria-hidden=\"true\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 120
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "date_number", []), "html", null, true);
            echo "
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"price_tour\">
\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 123
            echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["From"]);
            echo ": <span class=\"number_price\">";
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "price", [])), "html", null, true);
            echo "
\t\t\t\t\t\t\t\t\t\t\t\t\tVNĐ</span>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 129
        echo "\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"tabcon\" id=\"thongtin02\">
\t\t\t\t\t\t<div class=\"evaluate_tour_one\">

\t\t\t\t\t\t\t<div class=\"post_review\">
\t\t\t\t\t\t\t\t<div class=\"top\">
\t\t\t\t\t\t\t\t\t<h5 class=\"title\">";
        // line 138
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Reviews"]);
        echo "</h5>
\t\t\t\t\t\t\t\t\t<div class=\"rate_star\">
\t\t\t\t\t\t\t\t\t\t<div class=\"rateit\" id=\"rateit\" data-rateit-mode=\"font\" data-rateit-value=\"
\t\t\t\t\t\t\t\t\t";
        // line 141
        if ((($context["star4"] ?? null) + ($context["star5"] ?? null))) {
            // line 142
            echo "\t\t\t\t\t\t\t\t\t\t";
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (((($context["star4"] ?? null) * 4) + (($context["star5"] ?? null) * 5)) / (($context["star4"] ?? null) + ($context["star5"] ?? null))), 1, ".", ","), "html", null, true);
            echo "
\t\t\t\t\t\t\t\t\t";
        } else {
            // line 143
            echo " 0
\t\t\t\t\t\t\t\t\t";
        }
        // line 144
        echo "\" data-productid=\"";
        echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
        echo "\" data-num4=\"";
        echo twig_escape_filter($this->env, ($context["star4"] ?? null), "html", null, true);
        echo "\" data-num5=\"";
        echo twig_escape_filter($this->env, ($context["star5"] ?? null), "html", null, true);
        echo "\"></div>
\t\t\t\t\t\t\t\t\t\t<span id=\"result\">
\t\t\t\t\t\t\t\t\t\t\t(";
        // line 146
        if (((($context["star4"] ?? null) + ($context["star5"] ?? null)) != 0)) {
            // line 147
            echo "\t\t\t\t\t\t\t\t\t\t\t";
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (((($context["star4"] ?? null) * 4) + (($context["star5"] ?? null) * 5)) / (($context["star4"] ?? null) + ($context["star5"] ?? null))), 1, ".", ","), "html", null, true);
            echo "/5
\t\t\t\t\t\t\t\t\t\t\t(90%) ";
            // line 148
            echo twig_escape_filter($this->env, (($context["star4"] ?? null) + ($context["star5"] ?? null)), "html", null, true);
            echo "
\t\t\t\t\t\t\t\t\t\t\t";
        }
        // line 149
        echo " ";
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["vote"]);
        echo ")
\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"bottom\">
\t\t\t\t\t\t\t\t\t<div class=\"line\">
\t\t\t\t\t\t\t\t\t\t<span>";
        // line 155
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Excellent"]);
        echo "</span>
\t\t\t\t\t\t\t\t\t\t<div class=\"rateit\" data-rateit-mode=\"font\" data-rateit-value=\"5\"></div>
\t\t\t\t\t\t\t\t\t\t<div class=\"progress\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"progress-bar progress-bar-warning\" role=\"progressbar\"
\t\t\t\t\t\t\t\t\t\t\t\taria-valuenow=\"60\" aria-valuemin=\"0\" aria-valuemax=\"100\"
\t\t\t\t\t\t\t\t\t\t\t\tstyle=\"width:87%\">
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<span>87% (";
        // line 163
        echo twig_escape_filter($this->env, ($context["star4"] ?? null), "html", null, true);
        echo " ";
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["vote"]);
        echo ")</span>
\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t<div class=\"line line_2\">
\t\t\t\t\t\t\t\t\t\t<span>";
        // line 167
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Good"]);
        echo "</span>
\t\t\t\t\t\t\t\t\t\t<div class=\"rateit\" data-rateit-mode=\"font\" data-rateit-value=\"4\"></div>
\t\t\t\t\t\t\t\t\t\t<div class=\"progress\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"progress-bar progress-bar-warning\" role=\"progressbar\"
\t\t\t\t\t\t\t\t\t\t\t\taria-valuenow=\"60\" aria-valuemin=\"0\" aria-valuemax=\"100\"
\t\t\t\t\t\t\t\t\t\t\t\tstyle=\"width:65%\">
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<span>65% (";
        // line 175
        echo twig_escape_filter($this->env, ($context["star5"] ?? null), "html", null, true);
        echo " ";
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["vote"]);
        echo ")</span>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"sub_section_related\">
\t\t\t\t<div class=\"title_related\">";
        // line 184
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Tours Related"]);
        echo "</div>
\t\t\t\t<div class=\"lst_tour_related\">
\t\t\t\t\t";
        // line 186
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["data"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 187
            echo "\t\t\t\t\t<div class=\"item_tour_related\">
\t\t\t\t\t\t<div class=\"frame_image\">
\t\t\t\t\t\t\t<a class=\"frame_image_Crop\" href=\"/travel/";
            // line 189
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "slug", []), "html", null, true);
            echo "\">
\t\t\t\t\t\t\t\t<img alt=\"\"
\t\t\t\t\t\t\t\t\tsrc=\"";
            // line 191
            echo call_user_func_array($this->env->getFilter('resize')->getCallable(), [twig_get_attribute($this->env, $this->source, $context["item"], "image_preview", []), 370, 240, ["mode" => "crop", "quality" => "90"]]);
            echo "\" />
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"ngoaia\">
\t\t\t\t\t\t\t<h3>
\t\t\t\t\t\t\t\t<a class=\"title\" href=\"/travel/";
            // line 196
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "slug", []), "html", null, true);
            echo "\">
\t\t\t\t\t\t\t\t\t";
            // line 197
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "name", []), "html", null, true);
            echo "
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</h3>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"price_tour\">
\t\t\t\t\t\t\t";
            // line 202
            echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["From"]);
            echo " <span class=\"number_price\">";
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "price", [])), "html", null, true);
            echo " VNĐ<span
\t\t\t\t\t\t\t\t\tclass=\"fotcam\">/";
            // line 203
            echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["person"]);
            echo "</span></span>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"lst_duration_address\">
\t\t\t\t\t\t\t<div class=\"duration_tour\">
\t\t\t\t\t\t\t\t<i class=\"fa fa-clock-o\" aria-hidden=\"true\"></i>
\t\t\t\t\t\t\t\t";
            // line 208
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "date_number", []), "html", null, true);
            echo "
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"address_tour\">
\t\t\t\t\t\t\t\t<i class=\"fa fa-map-marker\" aria-hidden=\"true\"></i>
\t\t\t\t\t\t\t\t";
            // line 212
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "address", []), "html", null, true);
            echo "
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 217
        echo "\t\t\t\t</div>
\t\t\t</div>

\t\t\t<div class=\"form_booktour\" id=\"popup_bt\">
\t\t\t\t<a class=\"close\" onclick=\"document.getElementById('popup_bt').style.display = 'none'\"></a>
\t\t\t\t<div class=\"noidungtb\">
\t\t\t\t\t<a class=\"closepopup\" onclick=\"document.getElementById('popup_bt').style.display = 'none'\"></a>
\t\t\t\t\t<form data-request=\"ProductDetail::onAjaxbook\" data-request-validate data-request-flash
\t\t\t\t\t\tclass=\"review_form\">
\t\t\t\t\t\t<div class=\"nenpopup\">
\t\t\t\t\t\t\t<div class=\"title_tour\">
\t\t\t\t\t\t\t\t";
        // line 228
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["products"] ?? null), "name", []), "html", null, true);
        echo "
\t\t\t\t\t\t\t\t<input type=\"hidden\" name=\"detail_product\" value=\"";
        // line 229
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["products"] ?? null), "name", []), "html", null, true);
        echo "\">
\t\t\t\t\t\t\t\t<input type=\"hidden\" name=\"id_product\" value=\"";
        // line 230
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["products"] ?? null), "id", []), "html", null, true);
        echo "\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"lst_info_booktour\">
\t\t\t\t\t\t\t\t<div class=\"item_info_booktour\">
\t\t\t\t\t\t\t\t\t<span class=\"name_info_booktour\">";
        // line 234
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Your Name"]);
        echo " 
\t\t\t\t\t\t\t\t\t\t<span class=\"icon_sao\">*</span>
\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t<input name=\"name\" type=\"text\" required />
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"item_info_booktour\">
\t\t\t\t\t\t\t\t\t<span class=\"name_info_booktour\">";
        // line 240
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Phone"]);
        echo " 
\t\t\t\t\t\t\t\t\t\t<span class=\"icon_sao\">*</span>
\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t<input type=\"tel\" name=\"phone\" required />
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"item_info_booktour\">
\t\t\t\t\t\t\t\t\t<span class=\"name_info_booktour\">";
        // line 246
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Email"]);
        echo " 
\t\t\t\t\t\t\t\t\t\t<span class=\"icon_sao\">*</span>
\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"email\" required />
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"item_info_booktour\">
\t\t\t\t\t\t\t\t\t<span class=\"name_info_booktour\">";
        // line 252
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Content"]);
        echo " 
\t\t\t\t\t\t\t\t\t\t<span class=\"icon_sao\">*</span>
\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t<textarea name=\"content\" rows=\"2\" cols=\"20\"></textarea>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"ngoaibtn\">
\t\t\t\t\t\t\t\t<button type=\"submit\" class=\"btn_book_tour\" data-attach-loading>";
        // line 259
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Book now"]);
        echo "</button>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</form>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
</div>
<!-- Use ajax book event -->
";
        // line 269
        echo $this->env->getExtension('Cms\Twig\Extension')->startBlock('scripts'        );
        // line 270
        echo "<script>
\t\$(document).ready(function () {
\t\t// var id_cate = ";
        // line 272
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "param", []), "id", []), "html", null, true);
        echo ";
\t\t\$('#book').click(function () {
\t\t\tvar name = \$(\"#name\").val();
\t\t\tvar phone = \$(\"#phone\").val();
\t\t\tvar email = \$(\"#email\").val();
\t\t\tvar content = \$(\"#content\").val();
\t\t\tvar detail_product = \$(\"#detail_product\").val();

\t\t\tif (name == '') {
\t\t\t\tdocument.getElementById(\"zname\").innerHTML = \"<p>Please enter your name!</p>\";
\t\t\t\treturn false;
\t\t\t}

\t\t\tif (phone == '') {
\t\t\t\tdocument.getElementById(\"zphone\").innerHTML = \"<p>Please enter your phone!</p>\";
\t\t\t\treturn false;
\t\t\t}

\t\t\tif (email == '') {
\t\t\t\tdocument.getElementById(\"zemail\").innerHTML = \"<p>Please enter your email!</p>\";
\t\t\t\treturn false;
\t\t\t}

\t\t\tif (content == '') {
\t\t\t\tdocument.getElementById(\"zcontent\").innerHTML = \"<p>Please enter your content!</p>\";
\t\t\t\treturn false;
\t\t\t}
\t\t\t\$.request('onAjaxbook', {
\t\t\t\tdata: { name, phone, email, content, detail_product },
\t\t\t\tsuccess: function (data) {
\t\t\t\t\tconsole.log('Finished!');
\t\t\t\t\tdocument.getElementById(\"notification\").innerHTML = \"<span style='color:#f00'>Successful purchase!</span>\";
\t\t\t\t}
\t\t\t});

\t\t});
\t});
</script>
";
        // line 269
        echo $this->env->getExtension('Cms\Twig\Extension')->endBlock(true        );
    }

    public function getTemplateName()
    {
        return "/var/www/vhosts/420.com.vn/httpdocs/plugins/web/hotel/components/productdetail/default.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  576 => 269,  535 => 272,  531 => 270,  529 => 269,  516 => 259,  506 => 252,  497 => 246,  488 => 240,  479 => 234,  472 => 230,  468 => 229,  464 => 228,  451 => 217,  440 => 212,  433 => 208,  425 => 203,  419 => 202,  411 => 197,  407 => 196,  399 => 191,  394 => 189,  390 => 187,  386 => 186,  381 => 184,  367 => 175,  356 => 167,  347 => 163,  336 => 155,  326 => 149,  321 => 148,  316 => 147,  314 => 146,  304 => 144,  300 => 143,  294 => 142,  292 => 141,  286 => 138,  275 => 129,  261 => 123,  255 => 120,  246 => 114,  240 => 113,  231 => 107,  226 => 105,  222 => 103,  218 => 102,  212 => 99,  202 => 92,  187 => 80,  183 => 79,  176 => 74,  166 => 70,  161 => 67,  157 => 66,  151 => 63,  142 => 57,  135 => 53,  131 => 52,  122 => 46,  114 => 42,  109 => 41,  104 => 40,  102 => 39,  92 => 37,  88 => 36,  82 => 35,  80 => 34,  74 => 31,  69 => 28,  58 => 23,  53 => 20,  49 => 19,  42 => 15,  29 => 4,  27 => 3,  25 => 2,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% set products = __SELF__.product %}
{% set location = __SELF__.name %}
{% set listproduct = __SELF__.listproduct %}

<div class=\"content up_here\">
\t<div class=\"sub_pagedetail_tour\">
\t\t<div class=\"container_duc\">
\t\t\t<div class=\"lst_detail_top\">
\t\t\t\t<div class=\"left\">
\t\t\t\t\t<div class=\"slide_image\">
\t\t\t\t\t\t<div class=\"item_tour_detal\">
\t\t\t\t\t\t\t<div class=\"frame_image\">
\t\t\t\t\t\t\t\t<span class=\"frame_image_Crop\">
\t\t\t\t\t\t\t\t\t<img alt=\"\"
\t\t\t\t\t\t\t\t\t\tsrc=\"{{ products.image_preview | resize(667,467, { mode: 'crop', quality: '90' }) }}\" />
\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t{% for item in products.album_images %}
\t\t\t\t\t\t<div class=\"item_tour_detal\">
\t\t\t\t\t\t\t<div class=\"frame_image\">
\t\t\t\t\t\t\t\t<span class=\"frame_image_Crop\">
\t\t\t\t\t\t\t\t\t<img alt=\"\" src=\"{{ item | resize(667,467, { mode: 'crop', quality: '90' }) }}\" />
\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"right\">
\t\t\t\t\t<div class=\"title_detail_tour\">{{products.name}}</div>
\t\t\t\t\t<div class=\"rate_star display_star\">
\t\t\t\t\t\t<div class=\"rateit\" id=\"rateit\" data-rateit-mode=\"font\" data-rateit-value=\"
\t\t\t\t\t\t\t\t\t\t{% if ((star4 + star5)) %}
\t\t\t\t\t\t\t\t\t\t\t{{ (((star4)*4 + star5*5)/(star4 + star5))|number_format(1, '.', ',') }}
\t\t\t\t\t\t\t\t\t\t{% else %} 0
\t\t\t\t\t\t\t\t\t\t{% endif %}\" data-productid=\"{{ id }}\" data-num4=\"{{ star4 }}\" data-num5=\"{{ star5 }}\"></div>
\t\t\t\t\t\t<span id=\"result\">
\t\t\t\t\t\t\t({%if (star4 + star5) != 0 %}
\t\t\t\t\t\t\t{{ (((star4)*4 + star5*5)/(star4 + star5))|number_format(1, '.', ',') }}/5 (90%)
\t\t\t\t\t\t\t{{ star4 + star5 }}
\t\t\t\t\t\t\t{%endif%} {{'vote'|_}})
\t\t\t\t\t\t</span>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"price_tour\">
\t\t\t\t\t\t<span class=\"price_promotion\">{{products.price|number_format()}} VNĐ</span>
\t\t\t\t\t\t<!-- <span class=\"price_listed\">7.000.000đ</span> -->
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"lst_dsdetail\">
\t\t\t\t\t\t<div class=\"item_dsdetail\">
\t\t\t\t\t\t\t<span class=\"icon_information\"><i class=\"fa fa-map-marker\" aria-hidden=\"true\"></i></span>
\t\t\t\t\t\t\t<span class=\"information_number\">{{'Destination'|_}}: <span
\t\t\t\t\t\t\t\t\tclass=\"fotxanh\">{{products.address}}</span></span>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"ngoaiibtn\">
\t\t\t\t\t\t<button type=\"button\" class=\"btn_book_tour\" onclick=\"popupbt()\">{{'Book now'|_}}</button>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"slide_icon\">
\t\t\t\t\t\t<div class=\"item_tour_detal\">
\t\t\t\t\t\t\t<div class=\"frame_image\">
\t\t\t\t\t\t\t\t<a class=\"frame_image_Crop\"><img alt=\"\"
\t\t\t\t\t\t\t\t\t\tsrc=\"{{ products.image_preview | resize(111,69, { mode: 'crop', quality: '90' }) }}\" /></a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t{% for item in products.album_images %}
\t\t\t\t\t\t<div class=\"item_tour_detal\">
\t\t\t\t\t\t\t<div class=\"frame_image\">
\t\t\t\t\t\t\t\t<a class=\"frame_image_Crop\"><img alt=\"\"
\t\t\t\t\t\t\t\t\t\tsrc=\"{{ item | resize(111,69, { mode: 'crop', quality: '90' }) }}\" /></a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"information_detail_sp\">
\t\t\t\t<ul class=\"tabpick\">
\t\t\t\t\t<li class=\"active\"><a href=\"#thongtin01\" class=\"bgln\">{{'Detail'|_}}</a></li>
\t\t\t\t\t<li><a href=\"#thongtin02\" class=\"bgln\">{{'Reviews'|_}}</a></li>
\t\t\t\t</ul>
\t\t\t\t<div class=\"tabcontent\">
\t\t\t\t\t<div class=\"tabcon active\" id=\"thongtin01\">
\t\t\t\t\t\t<div class=\"products_one\">
\t\t\t\t\t\t\t<div class=\"left_tour_detail\">
\t\t\t\t\t\t\t\t<div class=\"lst_schedule_tour\">
\t\t\t\t\t\t\t\t\t<div class=\"item_schedule_tour\">
\t\t\t\t\t\t\t\t\t\t<div class=\"title_schedule_tour\">
\t\t\t\t\t\t\t\t\t\t\t<span class=\"name_schedule_tour\" style=\"margin-left: 0;\">About this</span>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"note_schedule_tour\" style=\"text-align:justify;font-size: 18px;\">
\t\t\t\t\t\t\t\t\t\t\t{{products.content|raw}}
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"right_products\">
\t\t\t\t\t\t\t\t<h2>
\t\t\t\t\t\t\t\t\t<span class=\"title_right\">{{'Tour Hot'|_}}</span>
\t\t\t\t\t\t\t\t</h2>
\t\t\t\t\t\t\t\t<div class=\"lst_tour_right\">
\t\t\t\t\t\t\t\t\t{% for item in tourHot %}
\t\t\t\t\t\t\t\t\t<div class=\"item_tour_right\">
\t\t\t\t\t\t\t\t\t\t<div class=\"frame_image\">
\t\t\t\t\t\t\t\t\t\t\t<a class=\"frame_image_Crop\" href=\"/travel/{{item.slug}}\">
\t\t\t\t\t\t\t\t\t\t\t\t<img alt=\"\"
\t\t\t\t\t\t\t\t\t\t\t\t\tsrc=\"{{ item.image_preview | resize(102,71, { mode: 'crop', quality: '90' }) }}\" />
\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"information_tour\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"ngoaia\">
\t\t\t\t\t\t\t\t\t\t\t\t<h3>
\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"title\" href=\"/travel/{{item.slug}}\" title=\"{{item.name}}\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t{{str_limit(item.name, 20)}}
\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t</h3>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"number_daysaway\">
\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-clock-o\" aria-hidden=\"true\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t{{item.date_number}}
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"price_tour\">
\t\t\t\t\t\t\t\t\t\t\t\t{{'From'|_}}: <span class=\"number_price\">{{item.price|number_format()}}
\t\t\t\t\t\t\t\t\t\t\t\t\tVNĐ</span>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"tabcon\" id=\"thongtin02\">
\t\t\t\t\t\t<div class=\"evaluate_tour_one\">

\t\t\t\t\t\t\t<div class=\"post_review\">
\t\t\t\t\t\t\t\t<div class=\"top\">
\t\t\t\t\t\t\t\t\t<h5 class=\"title\">{{'Reviews'|_}}</h5>
\t\t\t\t\t\t\t\t\t<div class=\"rate_star\">
\t\t\t\t\t\t\t\t\t\t<div class=\"rateit\" id=\"rateit\" data-rateit-mode=\"font\" data-rateit-value=\"
\t\t\t\t\t\t\t\t\t{% if ((star4 + star5)) %}
\t\t\t\t\t\t\t\t\t\t{{ (((star4)*4 + star5*5)/(star4 + star5))|number_format(1, '.', ',') }}
\t\t\t\t\t\t\t\t\t{% else %} 0
\t\t\t\t\t\t\t\t\t{% endif %}\" data-productid=\"{{ id }}\" data-num4=\"{{ star4 }}\" data-num5=\"{{ star5 }}\"></div>
\t\t\t\t\t\t\t\t\t\t<span id=\"result\">
\t\t\t\t\t\t\t\t\t\t\t({%if (star4 + star5) != 0 %}
\t\t\t\t\t\t\t\t\t\t\t{{ (((star4)*4 + star5*5)/(star4 + star5))|number_format(1, '.', ',') }}/5
\t\t\t\t\t\t\t\t\t\t\t(90%) {{ star4 + star5 }}
\t\t\t\t\t\t\t\t\t\t\t{%endif%} {{'vote'|_}})
\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"bottom\">
\t\t\t\t\t\t\t\t\t<div class=\"line\">
\t\t\t\t\t\t\t\t\t\t<span>{{'Excellent'|_}}</span>
\t\t\t\t\t\t\t\t\t\t<div class=\"rateit\" data-rateit-mode=\"font\" data-rateit-value=\"5\"></div>
\t\t\t\t\t\t\t\t\t\t<div class=\"progress\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"progress-bar progress-bar-warning\" role=\"progressbar\"
\t\t\t\t\t\t\t\t\t\t\t\taria-valuenow=\"60\" aria-valuemin=\"0\" aria-valuemax=\"100\"
\t\t\t\t\t\t\t\t\t\t\t\tstyle=\"width:87%\">
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<span>87% ({{ star4 }} {{'vote'|_}})</span>
\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t<div class=\"line line_2\">
\t\t\t\t\t\t\t\t\t\t<span>{{'Good'|_}}</span>
\t\t\t\t\t\t\t\t\t\t<div class=\"rateit\" data-rateit-mode=\"font\" data-rateit-value=\"4\"></div>
\t\t\t\t\t\t\t\t\t\t<div class=\"progress\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"progress-bar progress-bar-warning\" role=\"progressbar\"
\t\t\t\t\t\t\t\t\t\t\t\taria-valuenow=\"60\" aria-valuemin=\"0\" aria-valuemax=\"100\"
\t\t\t\t\t\t\t\t\t\t\t\tstyle=\"width:65%\">
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<span>65% ({{ star5 }} {{'vote'|_}})</span>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"sub_section_related\">
\t\t\t\t<div class=\"title_related\">{{'Tours Related'|_}}</div>
\t\t\t\t<div class=\"lst_tour_related\">
\t\t\t\t\t{% for item in data %}
\t\t\t\t\t<div class=\"item_tour_related\">
\t\t\t\t\t\t<div class=\"frame_image\">
\t\t\t\t\t\t\t<a class=\"frame_image_Crop\" href=\"/travel/{{item.slug}}\">
\t\t\t\t\t\t\t\t<img alt=\"\"
\t\t\t\t\t\t\t\t\tsrc=\"{{ item.image_preview | resize(370,240, { mode: 'crop', quality: '90' }) }}\" />
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"ngoaia\">
\t\t\t\t\t\t\t<h3>
\t\t\t\t\t\t\t\t<a class=\"title\" href=\"/travel/{{item.slug}}\">
\t\t\t\t\t\t\t\t\t{{item.name}}
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</h3>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"price_tour\">
\t\t\t\t\t\t\t{{'From'|_}} <span class=\"number_price\">{{item.price|number_format()}} VNĐ<span
\t\t\t\t\t\t\t\t\tclass=\"fotcam\">/{{'person'|_}}</span></span>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"lst_duration_address\">
\t\t\t\t\t\t\t<div class=\"duration_tour\">
\t\t\t\t\t\t\t\t<i class=\"fa fa-clock-o\" aria-hidden=\"true\"></i>
\t\t\t\t\t\t\t\t{{item.date_number}}
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"address_tour\">
\t\t\t\t\t\t\t\t<i class=\"fa fa-map-marker\" aria-hidden=\"true\"></i>
\t\t\t\t\t\t\t\t{{item.address}}
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t{% endfor %}
\t\t\t\t</div>
\t\t\t</div>

\t\t\t<div class=\"form_booktour\" id=\"popup_bt\">
\t\t\t\t<a class=\"close\" onclick=\"document.getElementById('popup_bt').style.display = 'none'\"></a>
\t\t\t\t<div class=\"noidungtb\">
\t\t\t\t\t<a class=\"closepopup\" onclick=\"document.getElementById('popup_bt').style.display = 'none'\"></a>
\t\t\t\t\t<form data-request=\"ProductDetail::onAjaxbook\" data-request-validate data-request-flash
\t\t\t\t\t\tclass=\"review_form\">
\t\t\t\t\t\t<div class=\"nenpopup\">
\t\t\t\t\t\t\t<div class=\"title_tour\">
\t\t\t\t\t\t\t\t{{products.name}}
\t\t\t\t\t\t\t\t<input type=\"hidden\" name=\"detail_product\" value=\"{{products.name}}\">
\t\t\t\t\t\t\t\t<input type=\"hidden\" name=\"id_product\" value=\"{{products.id}}\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"lst_info_booktour\">
\t\t\t\t\t\t\t\t<div class=\"item_info_booktour\">
\t\t\t\t\t\t\t\t\t<span class=\"name_info_booktour\">{{'Your Name'|_}} 
\t\t\t\t\t\t\t\t\t\t<span class=\"icon_sao\">*</span>
\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t<input name=\"name\" type=\"text\" required />
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"item_info_booktour\">
\t\t\t\t\t\t\t\t\t<span class=\"name_info_booktour\">{{'Phone'|_}} 
\t\t\t\t\t\t\t\t\t\t<span class=\"icon_sao\">*</span>
\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t<input type=\"tel\" name=\"phone\" required />
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"item_info_booktour\">
\t\t\t\t\t\t\t\t\t<span class=\"name_info_booktour\">{{'Email'|_}} 
\t\t\t\t\t\t\t\t\t\t<span class=\"icon_sao\">*</span>
\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"email\" required />
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"item_info_booktour\">
\t\t\t\t\t\t\t\t\t<span class=\"name_info_booktour\">{{'Content'|_}} 
\t\t\t\t\t\t\t\t\t\t<span class=\"icon_sao\">*</span>
\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t<textarea name=\"content\" rows=\"2\" cols=\"20\"></textarea>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"ngoaibtn\">
\t\t\t\t\t\t\t\t<button type=\"submit\" class=\"btn_book_tour\" data-attach-loading>{{'Book now'|_}}</button>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</form>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
</div>
<!-- Use ajax book event -->
{%put scripts%}
<script>
\t\$(document).ready(function () {
\t\t// var id_cate = {{this.param.id}};
\t\t\$('#book').click(function () {
\t\t\tvar name = \$(\"#name\").val();
\t\t\tvar phone = \$(\"#phone\").val();
\t\t\tvar email = \$(\"#email\").val();
\t\t\tvar content = \$(\"#content\").val();
\t\t\tvar detail_product = \$(\"#detail_product\").val();

\t\t\tif (name == '') {
\t\t\t\tdocument.getElementById(\"zname\").innerHTML = \"<p>Please enter your name!</p>\";
\t\t\t\treturn false;
\t\t\t}

\t\t\tif (phone == '') {
\t\t\t\tdocument.getElementById(\"zphone\").innerHTML = \"<p>Please enter your phone!</p>\";
\t\t\t\treturn false;
\t\t\t}

\t\t\tif (email == '') {
\t\t\t\tdocument.getElementById(\"zemail\").innerHTML = \"<p>Please enter your email!</p>\";
\t\t\t\treturn false;
\t\t\t}

\t\t\tif (content == '') {
\t\t\t\tdocument.getElementById(\"zcontent\").innerHTML = \"<p>Please enter your content!</p>\";
\t\t\t\treturn false;
\t\t\t}
\t\t\t\$.request('onAjaxbook', {
\t\t\t\tdata: { name, phone, email, content, detail_product },
\t\t\t\tsuccess: function (data) {
\t\t\t\t\tconsole.log('Finished!');
\t\t\t\t\tdocument.getElementById(\"notification\").innerHTML = \"<span style='color:#f00'>Successful purchase!</span>\";
\t\t\t\t}
\t\t\t});

\t\t});
\t});
</script>
{%endput%}", "/var/www/vhosts/420.com.vn/httpdocs/plugins/web/hotel/components/productdetail/default.htm", "");
    }
}

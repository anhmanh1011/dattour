<?php

/* /var/www/vhosts/420.com.vn/httpdocs/plugins/web/hotel/components/tourdetail/default.htm */
class __TwigTemplate_8af61a9c3775559434e225443dda958e00c948749268d7ab564a391cc82cb633 extends Twig_Template
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
        $context["location_name"] = twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "name", []);
        // line 2
        $context["data"] = twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "tours", []);
        // line 3
        $context["tourHot"] = twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "tourHot", []);
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
\t\t\t\t\t\t\t\t\t<img alt=\"";
        // line 14
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["tour_detail"] ?? null), "name", []), "html", null, true);
        echo "\" src=\"";
        echo call_user_func_array($this->env->getFilter('resize')->getCallable(), [twig_get_attribute($this->env, $this->source, ($context["tour_detail"] ?? null), "image_preview", []), 667, 467, ["mode" => "crop", "quality" => "90"]]);
        echo "\" />
\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
        // line 18
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["tour_detail"] ?? null), "album", []));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 19
            echo "\t\t\t\t\t\t<div class=\"item_tour_detal\">
\t\t\t\t\t\t\t<div class=\"frame_image\">
\t\t\t\t\t\t\t\t<span class=\"frame_image_Crop\">
\t\t\t\t\t\t\t\t\t<img alt=\"\" src=\"";
            // line 22
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
        // line 27
        echo "\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"right\">
\t\t\t\t\t<div class=\"title_detail_tour\">";
        // line 30
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["tour_detail"] ?? null), "name", []), "html", null, true);
        echo "</div>
\t\t\t\t\t<div class=\"rate_star display_star\">
\t\t\t\t\t\t<div class=\"rateit\" id=\"rateit\" data-rateit-mode=\"font\" data-rateit-value=\"
\t\t\t\t\t\t\t\t\t\t";
        // line 33
        if ((($context["star4"] ?? null) + ($context["star5"] ?? null))) {
            // line 34
            echo "\t\t\t\t\t\t\t\t\t\t\t";
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (((($context["star4"] ?? null) * 4) + (($context["star5"] ?? null) * 5)) / (($context["star4"] ?? null) + ($context["star5"] ?? null))), 1, ".", ","), "html", null, true);
            echo "
\t\t\t\t\t\t\t\t\t\t";
        } else {
            // line 35
            echo " 0
\t\t\t\t\t\t\t\t\t\t";
        }
        // line 36
        echo "\" data-productid=\"";
        echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
        echo "\" data-num4=\"";
        echo twig_escape_filter($this->env, ($context["star4"] ?? null), "html", null, true);
        echo "\" data-num5=\"";
        echo twig_escape_filter($this->env, ($context["star5"] ?? null), "html", null, true);
        echo "\"></div>
\t\t\t\t\t\t<span id=\"result\">
\t\t\t\t\t\t\t(";
        // line 38
        if (((($context["star4"] ?? null) + ($context["star5"] ?? null)) != 0)) {
            // line 39
            echo "\t\t\t\t\t\t\t";
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (((($context["star4"] ?? null) * 4) + (($context["star5"] ?? null) * 5)) / (($context["star4"] ?? null) + ($context["star5"] ?? null))), 1, ".", ","), "html", null, true);
            echo "/5 (90%) ";
            echo twig_escape_filter($this->env, (($context["star4"] ?? null) + ($context["star5"] ?? null)), "html", null, true);
            echo "
\t\t\t\t\t\t\t";
        }
        // line 40
        echo " ";
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["vote"]);
        echo ")
\t\t\t\t\t\t</span>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"price_tour\">
\t\t\t\t\t\t<span class=\"price_promotion\">";
        // line 44
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["tour_detail"] ?? null), "price", [])), "html", null, true);
        echo " VNĐ</span>
\t\t\t\t\t\t<!-- <span class=\"price_listed\">7.000.000đ</span> -->
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"lst_dsdetail\">
\t\t\t\t\t\t<div class=\"item_dsdetail\">
\t\t\t\t\t\t\t<span class=\"icon_information\"><i class=\"fa fa-calendar\" aria-hidden=\"true\"></i></span>
\t\t\t\t\t\t\t<span class=\"information_number\">";
        // line 50
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Departure date"]);
        echo ": <span class=\"fotxanh\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["tour_detail"] ?? null), "departure_date", []), "html", null, true);
        echo "</span></span>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"item_dsdetail\">
\t\t\t\t\t\t\t<span class=\"icon_information\"><i class=\"fa fa-map-marker\" aria-hidden=\"true\"></i></span>
\t\t\t\t\t\t\t<span class=\"information_number\">";
        // line 54
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Destination"]);
        echo ": <span class=\"fotxanh\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["tour_detail"] ?? null), "address", []), "html", null, true);
        echo "</span></span>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"item_dsdetail\">
\t\t\t\t\t\t\t<span class=\"icon_information\"><i class=\"fa fa-clock-o\" aria-hidden=\"true\"></i></span>
\t\t\t\t\t\t\t<span class=\"information_number\">";
        // line 58
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Duration"]);
        echo ": <span class=\"fotxanh\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["tour_detail"] ?? null), "date_number", []), "html", null, true);
        echo "</span></span>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"ngoaiibtn\">
\t\t\t\t\t\t<button type=\"button\" class=\"btn_book_tour\" onclick=\"popupbt()\">";
        // line 62
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Book this tour"]);
        echo "</button>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"slide_icon\">
\t\t\t\t\t\t<div class=\"item_tour_detal\">
\t\t\t\t\t\t\t<div class=\"frame_image\">
\t\t\t\t\t\t\t\t<a class=\"frame_image_Crop\">
\t\t\t\t\t\t\t\t<img alt=\"";
        // line 68
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["tour_detail"] ?? null), "name", []), "html", null, true);
        echo "\" src=\"";
        echo call_user_func_array($this->env->getFilter('resize')->getCallable(), [twig_get_attribute($this->env, $this->source, ($context["tour_detail"] ?? null), "image_preview", []), 111, 69, ["mode" => "crop", "quality" => "90"]]);
        echo "\" /></a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
        // line 71
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["tour_detail"] ?? null), "album", []));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 72
            echo "\t\t\t\t\t\t<div class=\"item_tour_detal\">
\t\t\t\t\t\t\t<div class=\"frame_image\">
\t\t\t\t\t\t\t\t<a class=\"frame_image_Crop\">
\t\t\t\t\t\t\t\t<img alt=\"";
            // line 75
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["tour_detail"] ?? null), "name", []), "html", null, true);
            echo "\" src=\"";
            echo call_user_func_array($this->env->getFilter('resize')->getCallable(), [$context["item"], 111, 69, ["mode" => "crop", "quality" => "90"]]);
            echo "\" /></a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 79
        echo "\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"information_detail_sp\">
\t\t\t\t<ul class=\"tabpick\">
\t\t\t\t\t<li class=\"active\"><a href=\"#thongtin01\" class=\"bgln\">";
        // line 84
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Tour Detail"]);
        echo "</a></li>
\t\t\t\t\t<li><a href=\"#thongtin02\" class=\"bgln\">";
        // line 85
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Reviews"]);
        echo "</a></li>
\t\t\t\t</ul>
\t\t\t\t<div class=\"tabcontent\">
\t\t\t\t\t<div class=\"tabcon active\" id=\"thongtin01\">
\t\t\t\t\t\t<div class=\"tour_detail_one\">
\t\t\t\t\t\t\t<div class=\"left_tour_detail\">
\t\t\t\t\t\t\t\t<div class=\"information_trip\">
\t\t\t\t\t\t\t\t\t<div class=\"item_information_trip\">
\t\t\t\t\t\t\t\t\t\t<span class=\"name_top\">";
        // line 93
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Departure Date"]);
        echo "</span>
\t\t\t\t\t\t\t\t\t\t<span class=\"information_bottom\">";
        // line 94
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["tour_detail"] ?? null), "departure_date", []), "html", null, true);
        echo "</span>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"item_information_trip\">
\t\t\t\t\t\t\t\t\t\t<span class=\"name_top\">";
        // line 97
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Duration"]);
        echo "</span>
\t\t\t\t\t\t\t\t\t\t<span class=\"information_bottom\">";
        // line 98
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["tour_detail"] ?? null), "date_number", []), "html", null, true);
        echo " ";
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Day"]);
        echo "</span>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"item_information_trip\">
\t\t\t\t\t\t\t\t\t\t<span class=\"name_top\">";
        // line 101
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Min Age"]);
        echo "</span>
\t\t\t\t\t\t\t\t\t\t<span class=\"information_bottom\">";
        // line 102
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["tour_detail"] ?? null), "min_age", []), "html", null, true);
        echo " ";
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Age"]);
        echo "+</span>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"item_information_trip\">
\t\t\t\t\t\t\t\t\t\t<span class=\"name_top\">";
        // line 105
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Maximum Seat"]);
        echo "</span>
\t\t\t\t\t\t\t\t\t\t<span class=\"information_bottom\">";
        // line 106
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["tour_detail"] ?? null), "maximum_seat", []), "html", null, true);
        echo " ";
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["People"]);
        echo "</span>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"lst_utilities_tour\">
\t\t\t\t\t\t\t\t\t<div class=\"item_utilities_tour\">
\t\t\t\t\t\t\t\t\t\t<span class=\"price_included\">";
        // line 111
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Price Included"]);
        echo "</span>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"lst_dsutilities\">
\t\t\t\t\t\t\t\t\t\t";
        // line 114
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["tour_detail"] ?? null), "include", []));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 115
            echo "\t\t\t\t\t\t\t\t\t\t<div class=\"item_dsutilities\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-check\" aria-hidden=\"true\"></i>
\t\t\t\t\t\t\t\t\t\t\t";
            // line 117
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "name_include", []), "html", null, true);
            echo "
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 120
        echo "\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t";
        // line 122
        if ((($__internal_7cd7461123377b8c9c1b6a01f46c7bbd94bd12e59266005df5e93029ddbc0ec5 = twig_get_attribute($this->env, $this->source, ($context["tour_detail"] ?? null), "hotel", [])) && is_array($__internal_7cd7461123377b8c9c1b6a01f46c7bbd94bd12e59266005df5e93029ddbc0ec5) || $__internal_7cd7461123377b8c9c1b6a01f46c7bbd94bd12e59266005df5e93029ddbc0ec5 instanceof ArrayAccess ? ($__internal_7cd7461123377b8c9c1b6a01f46c7bbd94bd12e59266005df5e93029ddbc0ec5[0] ?? null) : null)) {
            // line 123
            echo "\t\t\t\t\t\t\t\t<div class=\"lst_utilities_tour\">
\t\t\t\t\t\t\t\t\t<div class=\"item_utilities_tour\">
\t\t\t\t\t\t\t\t\t\t<span class=\"price_included\">";
            // line 125
            echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Hotel Relation"]);
            echo "</span>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"lst_dsutilities\">
\t\t\t\t\t\t\t\t\t\t";
            // line 128
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["tour_detail"] ?? null), "hotel", []));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 129
                echo "\t\t\t\t\t\t\t\t\t\t\t<div class=\"item_dsutilities\">
\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-check\" aria-hidden=\"true\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
                // line 132
                echo $this->extensions['Cms\Twig\Extension']->pageFilter("Home");
                echo "/hotels/";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "slug", []), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "name", []), "html", null, true);
                echo " </a>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 135
            echo "\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t";
        }
        // line 138
        echo "\t\t\t\t\t\t\t\t<div class=\"lst_schedule_tour\">
\t\t\t\t\t\t\t\t\t<div class=\"item_schedule_tour\">
\t\t\t\t\t\t\t\t\t\t<div class=\"title_schedule_tour\">
\t\t\t\t\t\t\t\t\t\t\t<span class=\"name_schedule_tour\" style=\"margin-left: 0;\">About tour</span>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"note_schedule_tour\" style=\"text-align:justify;font-size: 18px;\">
\t\t\t\t\t\t\t\t\t\t\t";
        // line 144
        if (twig_get_attribute($this->env, $this->source, ($context["tour_detail"] ?? null), "description", [])) {
            // line 145
            echo "\t\t\t\t\t\t\t\t\t\t\t";
            echo twig_get_attribute($this->env, $this->source, ($context["tour_detail"] ?? null), "description", []);
            echo "
\t\t\t\t\t\t\t\t\t\t\t";
        } else {
            // line 147
            echo "\t\t\t\t\t\t\t\t\t\t\t";
            echo twig_get_attribute($this->env, $this->source, ($context["tour_detail"] ?? null), "description", []);
            echo "
\t\t\t\t\t\t\t\t\t\t\t";
        }
        // line 149
        echo "\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"lst_schedule_tour\">
\t\t\t\t\t\t\t\t\t";
        // line 153
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["tour_detail"] ?? null), "content_day", []));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 154
            echo "\t\t\t\t\t\t\t\t\t<div class=\"item_schedule_tour\">
\t\t\t\t\t\t\t\t\t\t<div class=\"title_schedule_tour\">
\t\t\t\t\t\t\t\t\t\t\t<span class=\"name_schedule_tour\" style=\"margin-left: 0;\">";
            // line 156
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "title_day", []), "html", null, true);
            echo "</span>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"note_schedule_tour\">
\t\t\t\t\t\t\t\t\t\t";
            // line 159
            echo twig_get_attribute($this->env, $this->source, $context["item"], "cont_day", []);
            echo "
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 163
        echo "\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"right_tour_detail\">
\t\t\t\t\t\t\t\t<h2>
\t\t\t\t\t\t\t\t\t<span class=\"title_right\">";
        // line 167
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Tour Hot"]);
        echo "</span>
\t\t\t\t\t\t\t\t</h2>
\t\t\t\t\t\t\t\t<div class=\"lst_tour_right\">
\t\t\t\t\t\t\t\t\t";
        // line 170
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["tourHot"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 171
            echo "\t\t\t\t\t\t\t\t\t<div class=\"item_tour_right\">
\t\t\t\t\t\t\t\t\t\t<div class=\"frame_image\">
\t\t\t\t\t\t\t\t\t\t\t<a class=\"frame_image_Crop\" href=\"/travel/";
            // line 173
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "slug", []), "html", null, true);
            echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t<img alt=\"\" src=\"";
            // line 174
            echo call_user_func_array($this->env->getFilter('resize')->getCallable(), [twig_get_attribute($this->env, $this->source, $context["item"], "image_preview", []), 102, 71, ["mode" => "crop", "quality" => "90"]]);
            echo "\" />
\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"information_tour\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"ngoaia\">
\t\t\t\t\t\t\t\t\t\t\t\t<h3>
\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"title\" href=\"/travel/";
            // line 180
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "slug", []), "html", null, true);
            echo "\" title=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "name", []), "html", null, true);
            echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 181
            echo call_user_func_array($this->env->getFunction('str_limit')->getCallable(), ["limit", twig_get_attribute($this->env, $this->source, $context["item"], "name", []), 20]);
            echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t</h3>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"number_daysaway\">
\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-clock-o\" aria-hidden=\"true\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 187
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "date_number", []), "html", null, true);
            echo "
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"price_tour\">
\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 190
            echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["From"]);
            echo ": <span class=\"number_price\">";
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "price", [])), "html", null, true);
            echo " VNĐ</span>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 195
        echo "\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"tabcon\" id=\"thongtin02\">
\t\t\t\t\t\t<div class=\"evaluate_tour_one\">
\t\t\t\t\t\t\t
\t\t\t\t\t\t<div class=\"post_review\">
\t\t\t\t\t\t\t<div class=\"top\">
\t\t\t\t\t\t\t\t<h5 class=\"title\">";
        // line 204
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Reviews"]);
        echo "</h5>
\t\t\t\t\t\t\t\t<div class=\"rate_star\">
\t\t\t\t\t\t\t\t\t<div class=\"rateit\" id=\"rateit\" data-rateit-mode=\"font\" data-rateit-value=\"
\t\t\t\t\t\t\t\t\t";
        // line 207
        if ((($context["star4"] ?? null) + ($context["star5"] ?? null))) {
            // line 208
            echo "\t\t\t\t\t\t\t\t\t\t";
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (((($context["star4"] ?? null) * 4) + (($context["star5"] ?? null) * 5)) / (($context["star4"] ?? null) + ($context["star5"] ?? null))), 1, ".", ","), "html", null, true);
            echo "
\t\t\t\t\t\t\t\t\t";
        } else {
            // line 209
            echo " 0
\t\t\t\t\t\t\t\t\t";
        }
        // line 210
        echo "\" data-productid=\"";
        echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
        echo "\" data-num4=\"";
        echo twig_escape_filter($this->env, ($context["star4"] ?? null), "html", null, true);
        echo "\" data-num5=\"";
        echo twig_escape_filter($this->env, ($context["star5"] ?? null), "html", null, true);
        echo "\"></div>
\t\t\t\t\t\t\t\t\t<span id=\"result\">
\t\t\t\t\t\t\t\t\t\t(";
        // line 212
        if (((($context["star4"] ?? null) + ($context["star5"] ?? null)) != 0)) {
            // line 213
            echo "\t\t\t\t\t\t\t\t\t\t";
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (((($context["star4"] ?? null) * 4) + (($context["star5"] ?? null) * 5)) / (($context["star4"] ?? null) + ($context["star5"] ?? null))), 1, ".", ","), "html", null, true);
            echo "/5 (90%) ";
            echo twig_escape_filter($this->env, (($context["star4"] ?? null) + ($context["star5"] ?? null)), "html", null, true);
            echo "
\t\t\t\t\t\t\t\t\t\t";
        }
        // line 214
        echo " ";
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["vote"]);
        echo ")
\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"bottom\">
\t\t\t\t\t\t\t\t<div class=\"line\">
\t\t\t\t\t\t\t\t\t<span>";
        // line 220
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Excellent"]);
        echo "</span>
\t\t\t\t\t\t\t\t\t<div class=\"rateit\" data-rateit-mode=\"font\" data-rateit-value=\"5\"></div>
\t\t\t\t\t\t\t\t\t<div class=\"progress\">
\t\t\t\t\t\t\t\t\t\t<div class=\"progress-bar progress-bar-warning\" role=\"progressbar\" aria-valuenow=\"60\"
\t\t\t\t\t\t\t\t\t\t\taria-valuemin=\"0\" aria-valuemax=\"100\" style=\"width:87%\">
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<span>87% (";
        // line 227
        echo twig_escape_filter($this->env, ($context["star4"] ?? null), "html", null, true);
        echo " ";
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["vote"]);
        echo ")</span>
\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t<div class=\"line line_2\">
\t\t\t\t\t\t\t\t\t<span>";
        // line 231
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Good"]);
        echo "</span>
\t\t\t\t\t\t\t\t\t<div class=\"rateit\" data-rateit-mode=\"font\" data-rateit-value=\"4\"></div>
\t\t\t\t\t\t\t\t\t<div class=\"progress\">
\t\t\t\t\t\t\t\t\t\t<div class=\"progress-bar progress-bar-warning\" role=\"progressbar\" aria-valuenow=\"60\"
\t\t\t\t\t\t\t\t\t\t\taria-valuemin=\"0\" aria-valuemax=\"100\" style=\"width:65%\">
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<span>65% (";
        // line 238
        echo twig_escape_filter($this->env, ($context["star5"] ?? null), "html", null, true);
        echo " ";
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["vote"]);
        echo ")</span>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"sub_section_related\">
\t\t\t\t<div class=\"title_related\">";
        // line 247
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Tours Related"]);
        echo "</div>
\t\t\t\t<div class=\"lst_tour_related\">
\t\t\t\t\t";
        // line 249
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["data"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 250
            echo "\t\t\t\t\t<div class=\"item_tour_related\">
\t\t\t\t\t\t<div class=\"frame_image\">
\t\t\t\t\t\t\t<a class=\"frame_image_Crop\" href=\"/travel/";
            // line 252
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "slug", []), "html", null, true);
            echo "\">
\t\t\t\t\t\t\t\t<img alt=\"\" src=\"";
            // line 253
            echo call_user_func_array($this->env->getFilter('resize')->getCallable(), [twig_get_attribute($this->env, $this->source, $context["item"], "image_preview", []), 370, 240, ["mode" => "crop", "quality" => "90"]]);
            echo "\" />
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"ngoaia\">
\t\t\t\t\t\t\t<h3>
\t\t\t\t\t\t\t\t<a class=\"title\" href=\"/travel/";
            // line 258
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "slug", []), "html", null, true);
            echo "\">
\t\t\t\t\t\t\t\t\t";
            // line 259
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "name", []), "html", null, true);
            echo "
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</h3>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"price_tour\">
\t\t\t\t\t\t\t";
            // line 264
            echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["From"]);
            echo " <span class=\"number_price\">";
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "price", [])), "html", null, true);
            echo " VNĐ<span class=\"fotcam\">/";
            echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["person"]);
            echo "</span></span>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"lst_duration_address\">
\t\t\t\t\t\t\t<div class=\"duration_tour\">
\t\t\t\t\t\t\t\t<i class=\"fa fa-clock-o\" aria-hidden=\"true\"></i>
\t\t\t\t\t\t\t\t";
            // line 269
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "date_number", []), "html", null, true);
            echo "
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"address_tour\">
\t\t\t\t\t\t\t\t<i class=\"fa fa-map-marker\" aria-hidden=\"true\"></i>
\t\t\t\t\t\t\t\t";
            // line 273
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
        // line 278
        echo "\t\t\t\t</div>
\t\t\t</div>
\t\t\t
\t\t\t";
        // line 281
        $context['__cms_component_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->componentFunction("Booktour"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
        // line 282
        echo "\t\t</div>
\t</div>
</div>

";
        // line 286
        echo $this->env->getExtension('Cms\Twig\Extension')->startBlock('scripts'        );
        // line 287
        echo "<script type=\"text/javascript\">
\t\$('#rateit').click('rated reset', function (e) {
\t\tvar ri = \$(this);
\t\tvar value = ri.rateit('value');
\t\tvar id = ri.data('productid');
\t\tvar star4 = ri.data('num4');
\t\tvar star5 = ri.data('num5');
\t\tif (value > 3) {
\t\t\tri.rateit('readonly', true);

\t\t\t\$.request('onGetStarRate', {
\t\t\t\tdata: {
\t\t\t\t\tid,
\t\t\t\t\tvalue,
\t\t\t\t\tstar4,
\t\t\t\t\tstar5
\t\t\t\t},
\t\t\t\tsuccess: function (data) {
\t\t\t\t\tif (value == 4) {
\t\t\t\t\t\t\$('#result').html('(' + (((star4 + 1) * 4 + star5 * 5) / (star4 + star5 + 1)).toFixed(1) + '/5 ' +
\t\t\t\t\t\t\t(star4 + star5 + 1) + ' ";
        // line 307
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["vote"]);
        echo " )' );
\t\t\t\t\t}
\t\t\t\t\tif (value == 5) {
\t\t\t\t\t\t\$('#result').html('(' + ((star4 * 4 + (star5 + 1) * 5) / (star4 + star5 + 1)).toFixed(1) + '/5 ' +
\t\t\t\t\t\t\t(star4 + star5 + 1) + ' ";
        // line 311
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["vote"]);
        echo " )' );
\t\t\t\t\t}
\t\t\t\t},
\t\t\t});
\t\t}
\t});
</script>
";
        // line 286
        echo $this->env->getExtension('Cms\Twig\Extension')->endBlock(true        );
    }

    public function getTemplateName()
    {
        return "/var/www/vhosts/420.com.vn/httpdocs/plugins/web/hotel/components/tourdetail/default.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  675 => 286,  665 => 311,  658 => 307,  636 => 287,  634 => 286,  628 => 282,  624 => 281,  619 => 278,  608 => 273,  601 => 269,  589 => 264,  581 => 259,  577 => 258,  569 => 253,  565 => 252,  561 => 250,  557 => 249,  552 => 247,  538 => 238,  528 => 231,  519 => 227,  509 => 220,  499 => 214,  491 => 213,  489 => 212,  479 => 210,  475 => 209,  469 => 208,  467 => 207,  461 => 204,  450 => 195,  437 => 190,  431 => 187,  422 => 181,  416 => 180,  407 => 174,  403 => 173,  399 => 171,  395 => 170,  389 => 167,  383 => 163,  373 => 159,  367 => 156,  363 => 154,  359 => 153,  353 => 149,  347 => 147,  341 => 145,  339 => 144,  331 => 138,  326 => 135,  313 => 132,  308 => 129,  304 => 128,  298 => 125,  294 => 123,  292 => 122,  288 => 120,  279 => 117,  275 => 115,  271 => 114,  265 => 111,  255 => 106,  251 => 105,  243 => 102,  239 => 101,  231 => 98,  227 => 97,  221 => 94,  217 => 93,  206 => 85,  202 => 84,  195 => 79,  183 => 75,  178 => 72,  174 => 71,  166 => 68,  157 => 62,  148 => 58,  139 => 54,  130 => 50,  121 => 44,  113 => 40,  105 => 39,  103 => 38,  93 => 36,  89 => 35,  83 => 34,  81 => 33,  75 => 30,  70 => 27,  59 => 22,  54 => 19,  50 => 18,  41 => 14,  29 => 4,  27 => 3,  25 => 2,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% set location_name = __SELF__.name %}
{% set data = __SELF__.tours %}
{% set tourHot = __SELF__.tourHot %}

<div class=\"content up_here\">
\t<div class=\"sub_pagedetail_tour\">
\t\t<div class=\"container_duc\">
\t\t\t<div class=\"lst_detail_top\">
\t\t\t\t<div class=\"left\">
\t\t\t\t\t<div class=\"slide_image\">
\t\t\t\t\t\t<div class=\"item_tour_detal\">
\t\t\t\t\t\t\t<div class=\"frame_image\">
\t\t\t\t\t\t\t\t<span class=\"frame_image_Crop\">
\t\t\t\t\t\t\t\t\t<img alt=\"{{tour_detail.name}}\" src=\"{{ tour_detail.image_preview | resize(667,467, { mode: 'crop', quality: '90' }) }}\" />
\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t{% for item in tour_detail.album %}
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
\t\t\t\t\t<div class=\"title_detail_tour\">{{tour_detail.name}}</div>
\t\t\t\t\t<div class=\"rate_star display_star\">
\t\t\t\t\t\t<div class=\"rateit\" id=\"rateit\" data-rateit-mode=\"font\" data-rateit-value=\"
\t\t\t\t\t\t\t\t\t\t{% if ((star4 + star5)) %}
\t\t\t\t\t\t\t\t\t\t\t{{ (((star4)*4 + star5*5)/(star4 + star5))|number_format(1, '.', ',') }}
\t\t\t\t\t\t\t\t\t\t{% else %} 0
\t\t\t\t\t\t\t\t\t\t{% endif %}\" data-productid=\"{{ id }}\" data-num4=\"{{ star4 }}\" data-num5=\"{{ star5 }}\"></div>
\t\t\t\t\t\t<span id=\"result\">
\t\t\t\t\t\t\t({%if (star4 + star5) != 0 %}
\t\t\t\t\t\t\t{{ (((star4)*4 + star5*5)/(star4 + star5))|number_format(1, '.', ',') }}/5 (90%) {{ star4 + star5 }}
\t\t\t\t\t\t\t{%endif%} {{'vote'|_}})
\t\t\t\t\t\t</span>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"price_tour\">
\t\t\t\t\t\t<span class=\"price_promotion\">{{tour_detail.price|number_format()}} VNĐ</span>
\t\t\t\t\t\t<!-- <span class=\"price_listed\">7.000.000đ</span> -->
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"lst_dsdetail\">
\t\t\t\t\t\t<div class=\"item_dsdetail\">
\t\t\t\t\t\t\t<span class=\"icon_information\"><i class=\"fa fa-calendar\" aria-hidden=\"true\"></i></span>
\t\t\t\t\t\t\t<span class=\"information_number\">{{'Departure date'|_}}: <span class=\"fotxanh\">{{tour_detail.departure_date}}</span></span>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"item_dsdetail\">
\t\t\t\t\t\t\t<span class=\"icon_information\"><i class=\"fa fa-map-marker\" aria-hidden=\"true\"></i></span>
\t\t\t\t\t\t\t<span class=\"information_number\">{{'Destination'|_}}: <span class=\"fotxanh\">{{tour_detail.address}}</span></span>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"item_dsdetail\">
\t\t\t\t\t\t\t<span class=\"icon_information\"><i class=\"fa fa-clock-o\" aria-hidden=\"true\"></i></span>
\t\t\t\t\t\t\t<span class=\"information_number\">{{'Duration'|_}}: <span class=\"fotxanh\">{{tour_detail.date_number}}</span></span>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"ngoaiibtn\">
\t\t\t\t\t\t<button type=\"button\" class=\"btn_book_tour\" onclick=\"popupbt()\">{{'Book this tour'|_}}</button>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"slide_icon\">
\t\t\t\t\t\t<div class=\"item_tour_detal\">
\t\t\t\t\t\t\t<div class=\"frame_image\">
\t\t\t\t\t\t\t\t<a class=\"frame_image_Crop\">
\t\t\t\t\t\t\t\t<img alt=\"{{tour_detail.name}}\" src=\"{{ tour_detail.image_preview | resize(111,69, { mode: 'crop', quality: '90' }) }}\" /></a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t{% for item in tour_detail.album %}
\t\t\t\t\t\t<div class=\"item_tour_detal\">
\t\t\t\t\t\t\t<div class=\"frame_image\">
\t\t\t\t\t\t\t\t<a class=\"frame_image_Crop\">
\t\t\t\t\t\t\t\t<img alt=\"{{tour_detail.name}}\" src=\"{{ item | resize(111,69, { mode: 'crop', quality: '90' }) }}\" /></a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"information_detail_sp\">
\t\t\t\t<ul class=\"tabpick\">
\t\t\t\t\t<li class=\"active\"><a href=\"#thongtin01\" class=\"bgln\">{{'Tour Detail'|_}}</a></li>
\t\t\t\t\t<li><a href=\"#thongtin02\" class=\"bgln\">{{'Reviews'|_}}</a></li>
\t\t\t\t</ul>
\t\t\t\t<div class=\"tabcontent\">
\t\t\t\t\t<div class=\"tabcon active\" id=\"thongtin01\">
\t\t\t\t\t\t<div class=\"tour_detail_one\">
\t\t\t\t\t\t\t<div class=\"left_tour_detail\">
\t\t\t\t\t\t\t\t<div class=\"information_trip\">
\t\t\t\t\t\t\t\t\t<div class=\"item_information_trip\">
\t\t\t\t\t\t\t\t\t\t<span class=\"name_top\">{{'Departure Date'|_}}</span>
\t\t\t\t\t\t\t\t\t\t<span class=\"information_bottom\">{{tour_detail.departure_date}}</span>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"item_information_trip\">
\t\t\t\t\t\t\t\t\t\t<span class=\"name_top\">{{'Duration'|_}}</span>
\t\t\t\t\t\t\t\t\t\t<span class=\"information_bottom\">{{tour_detail.date_number}} {{'Day'|_}}</span>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"item_information_trip\">
\t\t\t\t\t\t\t\t\t\t<span class=\"name_top\">{{'Min Age'|_}}</span>
\t\t\t\t\t\t\t\t\t\t<span class=\"information_bottom\">{{tour_detail.min_age}} {{'Age'|_}}+</span>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"item_information_trip\">
\t\t\t\t\t\t\t\t\t\t<span class=\"name_top\">{{'Maximum Seat'|_}}</span>
\t\t\t\t\t\t\t\t\t\t<span class=\"information_bottom\">{{tour_detail.maximum_seat}} {{'People'|_}}</span>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"lst_utilities_tour\">
\t\t\t\t\t\t\t\t\t<div class=\"item_utilities_tour\">
\t\t\t\t\t\t\t\t\t\t<span class=\"price_included\">{{'Price Included'|_}}</span>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"lst_dsutilities\">
\t\t\t\t\t\t\t\t\t\t{% for item in tour_detail.include %}
\t\t\t\t\t\t\t\t\t\t<div class=\"item_dsutilities\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-check\" aria-hidden=\"true\"></i>
\t\t\t\t\t\t\t\t\t\t\t{{item.name_include}}
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t{% if tour_detail.hotel[0] %}
\t\t\t\t\t\t\t\t<div class=\"lst_utilities_tour\">
\t\t\t\t\t\t\t\t\t<div class=\"item_utilities_tour\">
\t\t\t\t\t\t\t\t\t\t<span class=\"price_included\">{{'Hotel Relation'|_}}</span>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"lst_dsutilities\">
\t\t\t\t\t\t\t\t\t\t{% for item in tour_detail.hotel %}
\t\t\t\t\t\t\t\t\t\t\t<div class=\"item_dsutilities\">
\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-check\" aria-hidden=\"true\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"{{'Home'|page}}/hotels/{{item.slug}}\">{{item.name}} </a>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t\t<div class=\"lst_schedule_tour\">
\t\t\t\t\t\t\t\t\t<div class=\"item_schedule_tour\">
\t\t\t\t\t\t\t\t\t\t<div class=\"title_schedule_tour\">
\t\t\t\t\t\t\t\t\t\t\t<span class=\"name_schedule_tour\" style=\"margin-left: 0;\">About tour</span>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"note_schedule_tour\" style=\"text-align:justify;font-size: 18px;\">
\t\t\t\t\t\t\t\t\t\t\t{% if (tour_detail.description) %}
\t\t\t\t\t\t\t\t\t\t\t{{tour_detail.description|raw}}
\t\t\t\t\t\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\t\t\t\t\t{{tour_detail.description|raw}}
\t\t\t\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"lst_schedule_tour\">
\t\t\t\t\t\t\t\t\t{% for item in tour_detail.content_day %}
\t\t\t\t\t\t\t\t\t<div class=\"item_schedule_tour\">
\t\t\t\t\t\t\t\t\t\t<div class=\"title_schedule_tour\">
\t\t\t\t\t\t\t\t\t\t\t<span class=\"name_schedule_tour\" style=\"margin-left: 0;\">{{item.title_day}}</span>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"note_schedule_tour\">
\t\t\t\t\t\t\t\t\t\t{{item.cont_day|raw}}
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"right_tour_detail\">
\t\t\t\t\t\t\t\t<h2>
\t\t\t\t\t\t\t\t\t<span class=\"title_right\">{{'Tour Hot'|_}}</span>
\t\t\t\t\t\t\t\t</h2>
\t\t\t\t\t\t\t\t<div class=\"lst_tour_right\">
\t\t\t\t\t\t\t\t\t{% for item in tourHot %}
\t\t\t\t\t\t\t\t\t<div class=\"item_tour_right\">
\t\t\t\t\t\t\t\t\t\t<div class=\"frame_image\">
\t\t\t\t\t\t\t\t\t\t\t<a class=\"frame_image_Crop\" href=\"/travel/{{item.slug}}\">
\t\t\t\t\t\t\t\t\t\t\t\t<img alt=\"\" src=\"{{ item.image_preview | resize(102,71, { mode: 'crop', quality: '90' }) }}\" />
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
\t\t\t\t\t\t\t\t\t\t\t\t{{'From'|_}}: <span class=\"number_price\">{{item.price|number_format()}} VNĐ</span>
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
\t\t\t\t\t\t\t
\t\t\t\t\t\t<div class=\"post_review\">
\t\t\t\t\t\t\t<div class=\"top\">
\t\t\t\t\t\t\t\t<h5 class=\"title\">{{'Reviews'|_}}</h5>
\t\t\t\t\t\t\t\t<div class=\"rate_star\">
\t\t\t\t\t\t\t\t\t<div class=\"rateit\" id=\"rateit\" data-rateit-mode=\"font\" data-rateit-value=\"
\t\t\t\t\t\t\t\t\t{% if ((star4 + star5)) %}
\t\t\t\t\t\t\t\t\t\t{{ (((star4)*4 + star5*5)/(star4 + star5))|number_format(1, '.', ',') }}
\t\t\t\t\t\t\t\t\t{% else %} 0
\t\t\t\t\t\t\t\t\t{% endif %}\" data-productid=\"{{ id }}\" data-num4=\"{{ star4 }}\" data-num5=\"{{ star5 }}\"></div>
\t\t\t\t\t\t\t\t\t<span id=\"result\">
\t\t\t\t\t\t\t\t\t\t({%if (star4 + star5) != 0 %}
\t\t\t\t\t\t\t\t\t\t{{ (((star4)*4 + star5*5)/(star4 + star5))|number_format(1, '.', ',') }}/5 (90%) {{ star4 + star5 }}
\t\t\t\t\t\t\t\t\t\t{%endif%} {{'vote'|_}})
\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"bottom\">
\t\t\t\t\t\t\t\t<div class=\"line\">
\t\t\t\t\t\t\t\t\t<span>{{'Excellent'|_}}</span>
\t\t\t\t\t\t\t\t\t<div class=\"rateit\" data-rateit-mode=\"font\" data-rateit-value=\"5\"></div>
\t\t\t\t\t\t\t\t\t<div class=\"progress\">
\t\t\t\t\t\t\t\t\t\t<div class=\"progress-bar progress-bar-warning\" role=\"progressbar\" aria-valuenow=\"60\"
\t\t\t\t\t\t\t\t\t\t\taria-valuemin=\"0\" aria-valuemax=\"100\" style=\"width:87%\">
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<span>87% ({{ star4 }} {{'vote'|_}})</span>
\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t<div class=\"line line_2\">
\t\t\t\t\t\t\t\t\t<span>{{'Good'|_}}</span>
\t\t\t\t\t\t\t\t\t<div class=\"rateit\" data-rateit-mode=\"font\" data-rateit-value=\"4\"></div>
\t\t\t\t\t\t\t\t\t<div class=\"progress\">
\t\t\t\t\t\t\t\t\t\t<div class=\"progress-bar progress-bar-warning\" role=\"progressbar\" aria-valuenow=\"60\"
\t\t\t\t\t\t\t\t\t\t\taria-valuemin=\"0\" aria-valuemax=\"100\" style=\"width:65%\">
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<span>65% ({{ star5 }} {{'vote'|_}})</span>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
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
\t\t\t\t\t\t\t\t<img alt=\"\" src=\"{{ item.image_preview | resize(370,240, { mode: 'crop', quality: '90' }) }}\" />
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
\t\t\t\t\t\t\t{{'From'|_}} <span class=\"number_price\">{{item.price|number_format()}} VNĐ<span class=\"fotcam\">/{{'person'|_}}</span></span>
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
\t\t\t
\t\t\t{% component 'Booktour' %}
\t\t</div>
\t</div>
</div>

{% put scripts %}
<script type=\"text/javascript\">
\t\$('#rateit').click('rated reset', function (e) {
\t\tvar ri = \$(this);
\t\tvar value = ri.rateit('value');
\t\tvar id = ri.data('productid');
\t\tvar star4 = ri.data('num4');
\t\tvar star5 = ri.data('num5');
\t\tif (value > 3) {
\t\t\tri.rateit('readonly', true);

\t\t\t\$.request('onGetStarRate', {
\t\t\t\tdata: {
\t\t\t\t\tid,
\t\t\t\t\tvalue,
\t\t\t\t\tstar4,
\t\t\t\t\tstar5
\t\t\t\t},
\t\t\t\tsuccess: function (data) {
\t\t\t\t\tif (value == 4) {
\t\t\t\t\t\t\$('#result').html('(' + (((star4 + 1) * 4 + star5 * 5) / (star4 + star5 + 1)).toFixed(1) + '/5 ' +
\t\t\t\t\t\t\t(star4 + star5 + 1) + ' {{'vote'|_}} )' );
\t\t\t\t\t}
\t\t\t\t\tif (value == 5) {
\t\t\t\t\t\t\$('#result').html('(' + ((star4 * 4 + (star5 + 1) * 5) / (star4 + star5 + 1)).toFixed(1) + '/5 ' +
\t\t\t\t\t\t\t(star4 + star5 + 1) + ' {{'vote'|_}} )' );
\t\t\t\t\t}
\t\t\t\t},
\t\t\t});
\t\t}
\t});
</script>
{% endput %}", "/var/www/vhosts/420.com.vn/httpdocs/plugins/web/hotel/components/tourdetail/default.htm", "");
    }
}

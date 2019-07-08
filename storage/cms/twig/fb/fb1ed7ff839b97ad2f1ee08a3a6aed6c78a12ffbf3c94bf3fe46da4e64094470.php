<?php

/* /var/www/vhosts/420.com.vn/httpdocs/themes/420Hospitality/pages/home.htm */
class __TwigTemplate_61b82f24eec327f2a8ffdf37eb8dd4f3a162e949248f17895c62c5bc62fdf16d extends Twig_Template
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
        echo "<!--About Section-->
<div id=\"content\">
  ";
        // line 3
        $context["Tour"] = twig_get_attribute($this->env, $this->source, ($context["getHome"] ?? null), "getTour", []);
        // line 4
        echo "  <div class=\"sub_travel_home up_here\">
    <div class=\"container_duc\">
      <div class=\"listcate\">
        <h2>
          <span class=\"title_listcate\">";
        // line 8
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Travel"]);
        echo "</span>
        </h2>
        <div class=\"note_listcate\">
        \t<p>
        \t\t";
        // line 12
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["With 7 years specialized in this area, we have a lot of experience in organizing open tours and private tours to these places. "]);
        echo "
        \t</p>
        </div>
        <a class=\"btn_showmore\" href=\"/travel\">";
        // line 15
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["SHOW MORE"]);
        echo "</a>
      </div>
      <div class=\"lst_travel_home\">
        ";
        // line 18
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["Tour"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 19
            echo "        <div class=\"item_travel_home\">
          <div class=\"frame_image\">
            <a class=\"frame_image_Crop\" href=\"/travel/";
            // line 21
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "slug", []), "html", null, true);
            echo "\">
              <img alt=\"";
            // line 22
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "name", []), "html", null, true);
            echo "\"
                src=\"";
            // line 23
            echo call_user_func_array($this->env->getFilter('resize')->getCallable(), [twig_get_attribute($this->env, $this->source, $context["item"], "image_preview", []), 370, 606, ["mode" => "crop", "quality" => "90", "extension" => "jpg"]]);
            echo "\" />
            </a>
          </div>
          <div class=\"ngoaia\">
            <a class=\"title\" href=\"/travel/";
            // line 27
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "slug", []), "html", null, true);
            echo "\" title=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "name", []), "html", null, true);
            echo "\">
              ";
            // line 28
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "name", []), "html", null, true);
            echo "
            </a>
          </div>
          <span class=\"price_travel\">";
            // line 31
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "price", [])), "html", null, true);
            echo "</span>
        </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 34
        echo "      </div>
    </div>
  </div>



  <div class=\"sub_secsion_one\">
    <img alt=\"\" src=\"assets/pic/banner_duc1.jpg\" />
    <div class=\"left50\">
      <div class=\"lst_secsion_one\">
        <div class=\"deac_secsion_one\">";
        // line 44
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["20% off"]);
        echo "</div>
        <div class=\"title_secsion_one\">
          ";
        // line 46
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Croatia Cruise Adventure"]);
        echo "
        </div>
        <div class=\"note_secsion_one\">
          ";
        // line 49
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Wild & wonderful Hanoi, world-heritage Halong Bay, alluring Hue & historic Ho Chi Minh: plus Phnom Penh &
          the breathtaking temples of Angkor Wat."]);
        // line 50
        echo "
        </div>
      </div>
    </div>
  </div>

  ";
        // line 56
        $context["Hotel"] = twig_get_attribute($this->env, $this->source, ($context["getHome"] ?? null), "getHotel", []);
        // line 57
        echo "  <div class=\"sub_hotel_home\">
    <div class=\"container_duc \">
      <div class=\"listcate\">
        <h2>
          <span class=\"title_listcate\">";
        // line 61
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Hotel"]);
        echo "</span>
        </h2>
        <div class=\"note_listcate\">
          ";
        // line 64
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["With 7 years specialized in this area, we have a lot of<br>experience in organizing open tours and private tours to these places"]);
        echo "
        </div>
        <a class=\"btn_showmore\" href=\"/hotel\">";
        // line 66
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["SHOW MORE"]);
        echo "</a>
      </div>
      <div class=\"lst_hotel_home\">
        ";
        // line 69
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["Hotel"] ?? null));
        foreach ($context['_seq'] as $context["key"] => $context["value"]) {
            // line 70
            echo "        <div class=\"item_hotel_home\">
          <div class=\"frame_image\">
            <a class=\"frame_image_Crop\" href=\"/hotels/";
            // line 72
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["value"], "slug", []), "html", null, true);
            echo "\">
              <img alt=\"";
            // line 73
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["value"], "name", []), "html", null, true);
            echo "\"
                src=\"";
            // line 74
            echo call_user_func_array($this->env->getFilter('resize')->getCallable(), [twig_get_attribute($this->env, $this->source, $context["value"], "image_preview", []), 565, 423, ["mode" => "crop", "quality" => "80", "extension" => "jpg"]]);
            echo "\" />
            </a>
            <div class=\"lst_describe_hotel\">
              <h3><a class=\"title\" href=\"/hotels/";
            // line 77
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["value"], "slug", []), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["value"], "name", []), "html", null, true);
            echo "</a></h3>
              <div class=\"note_hotel\">";
            // line 78
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["value"], "locationdetail", []), "html", null, true);
            echo "</div>
            </div>
          </div>
        </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['value'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 83
        echo "      </div>
    </div>
  </div>
  ";
        // line 86
        $context["Food"] = twig_get_attribute($this->env, $this->source, ($context["getHome"] ?? null), "getFood", []);
        // line 87
        echo "  <div class=\"sub_cuisine_home\">
    <div class=\"left\">
      <img alt=\"\" src=\"assets/pic/hinhanh07.jpg\" />
    </div>
    <div class=\"right\">
      <span class=\"title_cuisine\">";
        // line 92
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Cuisine"]);
        echo "</span>
      <div class=\"note_cuisine\">
        <p>
        \t";
        // line 95
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Find best local Food and Beverage from our hostel such as Nada draught beer, 666 and Hoan Kiem craft beer, Smoke brandy and local food like Jerky, noodle soup"]);
        echo "
\t\t</p>
      </div>

    </div>
  </div>

  ";
        // line 102
        $context["Event"] = twig_get_attribute($this->env, $this->source, ($context["getHome"] ?? null), "getEvent", []);
        // line 103
        echo "  <div class=\"sub_event_home\">
    <div class=\"container_duc\">
      <div class=\"listcate\">
        <h2>
          <span class=\"title_listcate\">";
        // line 107
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Event"]);
        echo "</span>
        </h2>
        <div class=\"note_listcate\">
          \t<p>
          \t\t";
        // line 111
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["We event create our own events such as Live music, picnic, Vietnamese language teaching,<br>biking in the Old Quarter. Don`t miss the special event everyday"]);
        echo "
\t\t\t</p>
        </div>
        <a class=\"btn_showmore\" href=\"/list/event\">";
        // line 114
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["SHOW MORE"]);
        echo "</a>
      </div>
      <div class=\"lst_event_home\">
        ";
        // line 117
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["Event"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 118
            echo "        <div class=\"item_event_home\">
          <div class=\"frame_image\">
            <a class=\"frame_image_Crop\" href=\"/product/4/";
            // line 120
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "slug", []), "html", null, true);
            echo "\">
              <img alt=\"\"
                src=\"";
            // line 122
            echo call_user_func_array($this->env->getFilter('resize')->getCallable(), [twig_get_attribute($this->env, $this->source, $context["item"], "image_preview", []), 270, 313, ["mode" => "crop", "quality" => "80", "extension" => "jpg"]]);
            echo "\" />
            </a>
          </div>
          <div class=\"ngoaia\">
            <h3>
              <a class=\"title\" href=\"/product/4/";
            // line 127
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "slug", []), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "name", []), "html", null, true);
            echo "</a>
            </h3>
          </div>
        </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 132
        echo "      </div>
    </div>
  </div>

  ";
        // line 136
        $context["Souvenir"] = twig_get_attribute($this->env, $this->source, ($context["getHome"] ?? null), "getSouvenir", []);
        // line 137
        echo "  <div class=\"sub_souvenir_home\">
    <div class=\"container_duc\">
      <div class=\"listcate\">
        <h2>
          <span class=\"title_listcate\">";
        // line 141
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["SERVICE"]);
        echo "</span>
        </h2>
        <div class=\"note_listcate\">
          \t<p>
          \t\t";
        // line 145
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["We event create our own events such as Live music, picnic, Vietnamese language teaching,<br>biking in the Old Quarter. Don`t miss the special event everyday"]);
        echo "
\t\t\t</p>
        </div>
        <a class=\"btn_showmore\" href=\"/product/5\">";
        // line 148
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["SHOW MORE"]);
        echo "</a>
      </div>
      <div class=\"lst_souvenir_home\">
        ";
        // line 151
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["Souvenir"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 152
            echo "        <div class=\"item_souvenir_home\">
          <div class=\"frame_image\">
            <a class=\"frame_image_Crop\" href=\"/product/5/";
            // line 154
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "slug", []), "html", null, true);
            echo "\">
              <img alt=\"";
            // line 155
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "name", []), "html", null, true);
            echo "\"
                src=\"";
            // line 156
            echo call_user_func_array($this->env->getFilter('resize')->getCallable(), [twig_get_attribute($this->env, $this->source, $context["item"], "image_preview", []), 370, 554, ["mode" => "crop", "quality" => "80", "extension" => "jpg"]]);
            echo "\" />
            </a>
          </div>
        </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 161
        echo "      </div>
    </div>
  </div>

  <!--Portfolio Section-->

  ";
        // line 167
        $context["Parner"] = twig_get_attribute($this->env, $this->source, ($context["getHome"] ?? null), "getParner", []);
        // line 168
        echo "  <!--Test section-->
  <div class=\"sub_partner_home\">
    <div class=\"container_duc\">
      <div class=\"lst_partner_home\">
        ";
        // line 172
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["Parner"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 173
            echo "        <div class=\"item_partner_home\">
          <div class=\"frame_image\">
            <a class=\"frame_image_Crop0\" href=\"javascript:\">
              <img alt=\"\"
                src=\"";
            // line 177
            echo call_user_func_array($this->env->getFilter('resize')->getCallable(), [$this->extensions['System\Twig\Extension']->mediaFilter(twig_get_attribute($this->env, $this->source, $context["item"], "image", [])), 88, 30, ["mode" => "portrait", "quality" => "80", "extension" => "png"]]);
            echo "\" />
            </a>
          </div>
        </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 182
        echo "      </div>
    </div>
  </div>

  <div class=\"sub_image_footer\">
    <div class=\"item_image_footer\">
      <div class=\"frame_image\">
        <span class=\"frame_image_Crop\">
          <img alt=\"\" src=\"assets/pic/hinhanh15.jpg\" />
        </span>
      </div>
    </div>
    <div class=\"item_image_footer\">
      <div class=\"frame_image\">
        <span class=\"frame_image_Crop\">
          <img alt=\"\" src=\"assets/pic/hinhanh16.jpg\" />
        </span>
      </div>
    </div>
    <div class=\"item_image_footer\">
      <div class=\"frame_image\">
        <span class=\"frame_image_Crop\">
          <img alt=\"\" src=\"assets/pic/hinhanh17.jpg\" />
        </span>
      </div>
    </div>
    <div class=\"item_image_footer\">
      <div class=\"frame_image\">
        <span class=\"frame_image_Crop\">
          <img alt=\"\" src=\"assets/pic/hinhanh18.jpg\" />
        </span>
      </div>
    </div>
    <div class=\"item_image_footer\">
      <div class=\"frame_image\">
        <span class=\"frame_image_Crop\">
          <img alt=\"\" src=\"assets/pic/hinhanh19.jpg\" />
        </span>
      </div>
    </div>
    <div class=\"item_image_footer\">
      <div class=\"frame_image\">
        <span class=\"frame_image_Crop\">
          <img alt=\"\" src=\"assets/pic/hinhanh20.jpg\" />
        </span>
      </div>
    </div>
  </div>
</div>";
    }

    public function getTemplateName()
    {
        return "/var/www/vhosts/420.com.vn/httpdocs/themes/420Hospitality/pages/home.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  384 => 182,  373 => 177,  367 => 173,  363 => 172,  357 => 168,  355 => 167,  347 => 161,  336 => 156,  332 => 155,  328 => 154,  324 => 152,  320 => 151,  314 => 148,  308 => 145,  301 => 141,  295 => 137,  293 => 136,  287 => 132,  274 => 127,  266 => 122,  261 => 120,  257 => 118,  253 => 117,  247 => 114,  241 => 111,  234 => 107,  228 => 103,  226 => 102,  216 => 95,  210 => 92,  203 => 87,  201 => 86,  196 => 83,  185 => 78,  179 => 77,  173 => 74,  169 => 73,  165 => 72,  161 => 70,  157 => 69,  151 => 66,  146 => 64,  140 => 61,  134 => 57,  132 => 56,  124 => 50,  121 => 49,  115 => 46,  110 => 44,  98 => 34,  89 => 31,  83 => 28,  77 => 27,  70 => 23,  66 => 22,  62 => 21,  58 => 19,  54 => 18,  48 => 15,  42 => 12,  35 => 8,  29 => 4,  27 => 3,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!--About Section-->
<div id=\"content\">
  {% set Tour = getHome.getTour %}
  <div class=\"sub_travel_home up_here\">
    <div class=\"container_duc\">
      <div class=\"listcate\">
        <h2>
          <span class=\"title_listcate\">{{'Travel'|_}}</span>
        </h2>
        <div class=\"note_listcate\">
        \t<p>
        \t\t{{'With 7 years specialized in this area, we have a lot of experience in organizing open tours and private tours to these places. '|_}}
        \t</p>
        </div>
        <a class=\"btn_showmore\" href=\"/travel\">{{'SHOW MORE'|_}}</a>
      </div>
      <div class=\"lst_travel_home\">
        {% for item in Tour %}
        <div class=\"item_travel_home\">
          <div class=\"frame_image\">
            <a class=\"frame_image_Crop\" href=\"/travel/{{item.slug}}\">
              <img alt=\"{{item.name}}\"
                src=\"{{ item.image_preview | resize(370,606, { mode: 'crop', quality: '90', extension: 'jpg' }) }}\" />
            </a>
          </div>
          <div class=\"ngoaia\">
            <a class=\"title\" href=\"/travel/{{item.slug}}\" title=\"{{item.name}}\">
              {{item.name}}
            </a>
          </div>
          <span class=\"price_travel\">{{ item.price|number_format() }}</span>
        </div>
        {% endfor %}
      </div>
    </div>
  </div>



  <div class=\"sub_secsion_one\">
    <img alt=\"\" src=\"assets/pic/banner_duc1.jpg\" />
    <div class=\"left50\">
      <div class=\"lst_secsion_one\">
        <div class=\"deac_secsion_one\">{{'20% off'|_}}</div>
        <div class=\"title_secsion_one\">
          {{'Croatia Cruise Adventure'|_}}
        </div>
        <div class=\"note_secsion_one\">
          {{'Wild & wonderful Hanoi, world-heritage Halong Bay, alluring Hue & historic Ho Chi Minh: plus Phnom Penh &
          the breathtaking temples of Angkor Wat.'|_}}
        </div>
      </div>
    </div>
  </div>

  {% set Hotel = getHome.getHotel %}
  <div class=\"sub_hotel_home\">
    <div class=\"container_duc \">
      <div class=\"listcate\">
        <h2>
          <span class=\"title_listcate\">{{'Hotel'|_}}</span>
        </h2>
        <div class=\"note_listcate\">
          {{'With 7 years specialized in this area, we have a lot of<br>experience in organizing open tours and private tours to these places'|_}}
        </div>
        <a class=\"btn_showmore\" href=\"/hotel\">{{'SHOW MORE'|_}}</a>
      </div>
      <div class=\"lst_hotel_home\">
        {% for key, value in Hotel %}
        <div class=\"item_hotel_home\">
          <div class=\"frame_image\">
            <a class=\"frame_image_Crop\" href=\"/hotels/{{value.slug}}\">
              <img alt=\"{{value.name}}\"
                src=\"{{value.image_preview|resize(565, 423, { mode: 'crop', quality: '80', extension: 'jpg' })}}\" />
            </a>
            <div class=\"lst_describe_hotel\">
              <h3><a class=\"title\" href=\"/hotels/{{value.slug}}\">{{value.name}}</a></h3>
              <div class=\"note_hotel\">{{value.locationdetail}}</div>
            </div>
          </div>
        </div>
        {% endfor %}
      </div>
    </div>
  </div>
  {% set Food = getHome.getFood %}
  <div class=\"sub_cuisine_home\">
    <div class=\"left\">
      <img alt=\"\" src=\"assets/pic/hinhanh07.jpg\" />
    </div>
    <div class=\"right\">
      <span class=\"title_cuisine\">{{'Cuisine'|_}}</span>
      <div class=\"note_cuisine\">
        <p>
        \t{{'Find best local Food and Beverage from our hostel such as Nada draught beer, 666 and Hoan Kiem craft beer, Smoke brandy and local food like Jerky, noodle soup'|_}}
\t\t</p>
      </div>

    </div>
  </div>

  {% set Event = getHome.getEvent %}
  <div class=\"sub_event_home\">
    <div class=\"container_duc\">
      <div class=\"listcate\">
        <h2>
          <span class=\"title_listcate\">{{'Event'|_}}</span>
        </h2>
        <div class=\"note_listcate\">
          \t<p>
          \t\t{{'We event create our own events such as Live music, picnic, Vietnamese language teaching,<br>biking in the Old Quarter. Don`t miss the special event everyday'|_}}
\t\t\t</p>
        </div>
        <a class=\"btn_showmore\" href=\"/list/event\">{{'SHOW MORE'|_}}</a>
      </div>
      <div class=\"lst_event_home\">
        {% for item in Event %}
        <div class=\"item_event_home\">
          <div class=\"frame_image\">
            <a class=\"frame_image_Crop\" href=\"/product/4/{{item.slug}}\">
              <img alt=\"\"
                src=\"{{item.image_preview|resize(270, 313, { mode: 'crop', quality: '80', extension: 'jpg' })}}\" />
            </a>
          </div>
          <div class=\"ngoaia\">
            <h3>
              <a class=\"title\" href=\"/product/4/{{item.slug}}\">{{item.name}}</a>
            </h3>
          </div>
        </div>
        {% endfor %}
      </div>
    </div>
  </div>

  {% set Souvenir = getHome.getSouvenir %}
  <div class=\"sub_souvenir_home\">
    <div class=\"container_duc\">
      <div class=\"listcate\">
        <h2>
          <span class=\"title_listcate\">{{'SERVICE'|_}}</span>
        </h2>
        <div class=\"note_listcate\">
          \t<p>
          \t\t{{'We event create our own events such as Live music, picnic, Vietnamese language teaching,<br>biking in the Old Quarter. Don`t miss the special event everyday'|_}}
\t\t\t</p>
        </div>
        <a class=\"btn_showmore\" href=\"/product/5\">{{'SHOW MORE'|_}}</a>
      </div>
      <div class=\"lst_souvenir_home\">
        {% for item in Souvenir %}
        <div class=\"item_souvenir_home\">
          <div class=\"frame_image\">
            <a class=\"frame_image_Crop\" href=\"/product/5/{{item.slug}}\">
              <img alt=\"{{item.name}}\"
                src=\"{{item.image_preview|resize(370, 554, { mode: 'crop', quality: '80', extension: 'jpg' })}}\" />
            </a>
          </div>
        </div>
        {% endfor %}
      </div>
    </div>
  </div>

  <!--Portfolio Section-->

  {% set Parner = getHome.getParner %}
  <!--Test section-->
  <div class=\"sub_partner_home\">
    <div class=\"container_duc\">
      <div class=\"lst_partner_home\">
        {% for item in Parner %}
        <div class=\"item_partner_home\">
          <div class=\"frame_image\">
            <a class=\"frame_image_Crop0\" href=\"javascript:\">
              <img alt=\"\"
                src=\"{{item.image|media|resize(88, 30, { mode: 'portrait', quality: '80', extension: 'png' })}}\" />
            </a>
          </div>
        </div>
        {% endfor %}
      </div>
    </div>
  </div>

  <div class=\"sub_image_footer\">
    <div class=\"item_image_footer\">
      <div class=\"frame_image\">
        <span class=\"frame_image_Crop\">
          <img alt=\"\" src=\"assets/pic/hinhanh15.jpg\" />
        </span>
      </div>
    </div>
    <div class=\"item_image_footer\">
      <div class=\"frame_image\">
        <span class=\"frame_image_Crop\">
          <img alt=\"\" src=\"assets/pic/hinhanh16.jpg\" />
        </span>
      </div>
    </div>
    <div class=\"item_image_footer\">
      <div class=\"frame_image\">
        <span class=\"frame_image_Crop\">
          <img alt=\"\" src=\"assets/pic/hinhanh17.jpg\" />
        </span>
      </div>
    </div>
    <div class=\"item_image_footer\">
      <div class=\"frame_image\">
        <span class=\"frame_image_Crop\">
          <img alt=\"\" src=\"assets/pic/hinhanh18.jpg\" />
        </span>
      </div>
    </div>
    <div class=\"item_image_footer\">
      <div class=\"frame_image\">
        <span class=\"frame_image_Crop\">
          <img alt=\"\" src=\"assets/pic/hinhanh19.jpg\" />
        </span>
      </div>
    </div>
    <div class=\"item_image_footer\">
      <div class=\"frame_image\">
        <span class=\"frame_image_Crop\">
          <img alt=\"\" src=\"assets/pic/hinhanh20.jpg\" />
        </span>
      </div>
    </div>
  </div>
</div>", "/var/www/vhosts/420.com.vn/httpdocs/themes/420Hospitality/pages/home.htm", "");
    }
}

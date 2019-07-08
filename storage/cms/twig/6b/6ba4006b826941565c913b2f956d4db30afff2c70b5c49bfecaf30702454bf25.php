<?php

/* /var/www/vhosts/420.com.vn/httpdocs/plugins/web/hotel/components/booktour/default.htm */
class __TwigTemplate_dc90497850927894403a42b43b617253fbf24f0270f51c0d62a9c74ffcf42b38 extends Twig_Template
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
        echo "<div class=\"form_booktour\" id=\"popup_bt\">
  <a class=\"close\" onclick=\"document.getElementById('popup_bt').style.display = 'none'\"></a>
  <div class=\"noidungtb\">
    <a class=\"closepopup\" onclick=\"document.getElementById('popup_bt').style.display = 'none'\"></a>
    <form data-request=\"Booktour::onBooktour\" data-request-validate data-request-flash class=\"review_form\">
      <div class=\"nenpopup\">
        <div class=\"title_tour\">
          ";
        // line 8
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["tour_detail"] ?? null), "name", []), "html", null, true);
        echo "
          <input type=\"hidden\"  name=\"tour_title\" value=\"";
        // line 9
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["tour_detail"] ?? null), "name", []), "html", null, true);
        echo "\">
        </div>
        <div class=\"lst_info_booktour\">
          <div class=\"item_info_booktour\">
            <span class=\"name_info_booktour\">";
        // line 13
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Date of Arrival"]);
        echo "<span class=\"icon_sao\">*</span></span>
            <input class=\"date_arrival\" required name=\"datepicker\" autocomplete=\"off\" type=\"text\" id='datetimepicker1' />

          </div>
          <div class=\"lst_age\">
            <div class=\"item_info_booktour_two\">
              <span class=\"name_info_booktour\">";
        // line 19
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Adults"]);
        echo " <span class=\"fotnhat\">(>18 ";
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Age"]);
        echo ")</span></span>
              <select id=\"Select1\" name=\"adults\" required>
                ";
        // line 21
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, 12));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 22
            echo "                <option value=\"";
            echo twig_escape_filter($this->env, $context["i"], "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $context["i"], "html", null, true);
            echo "</option>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 24
        echo "              </select>
            </div>
            <div class=\"item_info_booktour_two\">
              <span class=\"name_info_booktour\">";
        // line 27
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Childrens"]);
        echo " <span class=\"fotnhat\">(12 - 18 ";
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Age"]);
        echo ")</span> </span> 
              <select id=\"Select1\" name=\"children\" required>
                ";
        // line 29
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(0, 12));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 30
            echo "                <option value=\"";
            echo twig_escape_filter($this->env, $context["i"], "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $context["i"], "html", null, true);
            echo "</option>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 31
        echo "?
                </select>
            </div>
            <div class=\"item_info_booktour_two\">
              <span class=\"name_info_booktour\">";
        // line 35
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Baby"]);
        echo " <span class=\"fotnhat\">(< 12 ";
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Age"]);
        echo ")</span></span>
              <select id=\"Select1\" name=\"baby\" required>
                ";
        // line 37
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(0, 12));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 38
            echo "                <option value=\"";
            echo twig_escape_filter($this->env, $context["i"], "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $context["i"], "html", null, true);
            echo "</option>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 39
        echo "?
              </select>
            </div>
          </div>
          <div class=\"item_info_booktour\">
            <span class=\"name_info_booktour\">";
        // line 44
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Name"]);
        echo " <span class=\"icon_sao\">*</span></span>
            <input name=\"name\" type=\"text\" required />
          </div>
          <div class=\"item_info_booktour\">
            <span class=\"name_info_booktour\">";
        // line 48
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Phone"]);
        echo " <span class=\"icon_sao\">*</span></span>
            <input type=\"tel\" name=\"phone\" required />
          </div>
          <div class=\"item_info_booktour\">
            <span class=\"name_info_booktour\">";
        // line 52
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Email"]);
        echo " <span class=\"icon_sao\">*</span></span>
            <input type=\"text\" name=\"email\" required />
          </div>
          <div class=\"item_info_booktour\">
            <span class=\"name_info_booktour\">";
        // line 56
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Content"]);
        echo " <span class=\"icon_sao\">*</span></span>
            <textarea name=\"content\" rows=\"2\" cols=\"20\"></textarea>
                            
            <input type=\"hidden\" name=\"img1\" value=\"";
        // line 59
        echo call_user_func_array($this->env->getFilter('resize')->getCallable(), [(($__internal_7cd7461123377b8c9c1b6a01f46c7bbd94bd12e59266005df5e93029ddbc0ec5 = twig_get_attribute($this->env, $this->source, ($context["tour_detail"] ?? null), "album", [])) && is_array($__internal_7cd7461123377b8c9c1b6a01f46c7bbd94bd12e59266005df5e93029ddbc0ec5) || $__internal_7cd7461123377b8c9c1b6a01f46c7bbd94bd12e59266005df5e93029ddbc0ec5 instanceof ArrayAccess ? ($__internal_7cd7461123377b8c9c1b6a01f46c7bbd94bd12e59266005df5e93029ddbc0ec5[0] ?? null) : null), 305, 222, ["mode" => "crop", "quality" => "80"]]);
        echo "\"\">
            <input type=\"hidden\" name=\"img2\" value=\"";
        // line 60
        echo call_user_func_array($this->env->getFilter('resize')->getCallable(), [(($__internal_3e28b7f596c58d7729642bcf2acc6efc894803703bf5fa7e74cd8d2aa1f8c68a = twig_get_attribute($this->env, $this->source, ($context["tour_detail"] ?? null), "album", [])) && is_array($__internal_3e28b7f596c58d7729642bcf2acc6efc894803703bf5fa7e74cd8d2aa1f8c68a) || $__internal_3e28b7f596c58d7729642bcf2acc6efc894803703bf5fa7e74cd8d2aa1f8c68a instanceof ArrayAccess ? ($__internal_3e28b7f596c58d7729642bcf2acc6efc894803703bf5fa7e74cd8d2aa1f8c68a[1] ?? null) : null), 305, 222, ["mode" => "crop", "quality" => "80"]]);
        echo "\"\">
            <input type=\"hidden\" name=\"tour_name\" value=\"";
        // line 61
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["tour_detail"] ?? null), "name", []), "html", null, true);
        echo "\" >
            <input type=\"hidden\" name=\"tour_location\" value=\"";
        // line 62
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["tour_detail"] ?? null), "location", []), "html", null, true);
        echo "\" >
            <input type=\"hidden\" name=\"tour_include\" value=\"";
        // line 63
        echo twig_escape_filter($this->env, json_encode(twig_get_attribute($this->env, $this->source, ($context["tour_detail"] ?? null), "include", [])), "html", null, true);
        echo "\" >
          </div>
        </div>
        <div class=\"ngoaibtn\">
          <button type=\"submit\" class=\"btn_book_tour\" data-attach-loading>";
        // line 67
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Book tour"]);
        echo "</button>
        </div>
      </div>
    </form>
  </div>
</div>";
    }

    public function getTemplateName()
    {
        return "/var/www/vhosts/420.com.vn/httpdocs/plugins/web/hotel/components/booktour/default.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  186 => 67,  179 => 63,  175 => 62,  171 => 61,  167 => 60,  163 => 59,  157 => 56,  150 => 52,  143 => 48,  136 => 44,  129 => 39,  118 => 38,  114 => 37,  107 => 35,  101 => 31,  90 => 30,  86 => 29,  79 => 27,  74 => 24,  63 => 22,  59 => 21,  52 => 19,  43 => 13,  36 => 9,  32 => 8,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"form_booktour\" id=\"popup_bt\">
  <a class=\"close\" onclick=\"document.getElementById('popup_bt').style.display = 'none'\"></a>
  <div class=\"noidungtb\">
    <a class=\"closepopup\" onclick=\"document.getElementById('popup_bt').style.display = 'none'\"></a>
    <form data-request=\"Booktour::onBooktour\" data-request-validate data-request-flash class=\"review_form\">
      <div class=\"nenpopup\">
        <div class=\"title_tour\">
          {{tour_detail.name}}
          <input type=\"hidden\"  name=\"tour_title\" value=\"{{tour_detail.name}}\">
        </div>
        <div class=\"lst_info_booktour\">
          <div class=\"item_info_booktour\">
            <span class=\"name_info_booktour\">{{'Date of Arrival'|_}}<span class=\"icon_sao\">*</span></span>
            <input class=\"date_arrival\" required name=\"datepicker\" autocomplete=\"off\" type=\"text\" id='datetimepicker1' />

          </div>
          <div class=\"lst_age\">
            <div class=\"item_info_booktour_two\">
              <span class=\"name_info_booktour\">{{'Adults'|_}} <span class=\"fotnhat\">(>18 {{'Age'|_}})</span></span>
              <select id=\"Select1\" name=\"adults\" required>
                {%for i in 1..12 %}
                <option value=\"{{i}}\">{{i}}</option>
                {%endfor%}
              </select>
            </div>
            <div class=\"item_info_booktour_two\">
              <span class=\"name_info_booktour\">{{'Childrens'|_}} <span class=\"fotnhat\">(12 - 18 {{'Age'|_}})</span> </span> 
              <select id=\"Select1\" name=\"children\" required>
                {%for i in 0..12 %}
                <option value=\"{{i}}\">{{i}}</option>
                {%endfor%}?
                </select>
            </div>
            <div class=\"item_info_booktour_two\">
              <span class=\"name_info_booktour\">{{'Baby'|_}} <span class=\"fotnhat\">(< 12 {{'Age'|_}})</span></span>
              <select id=\"Select1\" name=\"baby\" required>
                {%for i in 0..12 %}
                <option value=\"{{i}}\">{{i}}</option>
                {%endfor%}?
              </select>
            </div>
          </div>
          <div class=\"item_info_booktour\">
            <span class=\"name_info_booktour\">{{'Name'|_}} <span class=\"icon_sao\">*</span></span>
            <input name=\"name\" type=\"text\" required />
          </div>
          <div class=\"item_info_booktour\">
            <span class=\"name_info_booktour\">{{'Phone'|_}} <span class=\"icon_sao\">*</span></span>
            <input type=\"tel\" name=\"phone\" required />
          </div>
          <div class=\"item_info_booktour\">
            <span class=\"name_info_booktour\">{{'Email'|_}} <span class=\"icon_sao\">*</span></span>
            <input type=\"text\" name=\"email\" required />
          </div>
          <div class=\"item_info_booktour\">
            <span class=\"name_info_booktour\">{{'Content'|_}} <span class=\"icon_sao\">*</span></span>
            <textarea name=\"content\" rows=\"2\" cols=\"20\"></textarea>
                            
            <input type=\"hidden\" name=\"img1\" value=\"{{tour_detail.album[0]| resize(305,222, { mode: 'crop', quality: '80' }) }}\"\">
            <input type=\"hidden\" name=\"img2\" value=\"{{tour_detail.album[1]| resize(305,222, { mode: 'crop', quality: '80' }) }}\"\">
            <input type=\"hidden\" name=\"tour_name\" value=\"{{tour_detail.name}}\" >
            <input type=\"hidden\" name=\"tour_location\" value=\"{{tour_detail.location}}\" >
            <input type=\"hidden\" name=\"tour_include\" value=\"{{tour_detail.include|json_encode()}}\" >
          </div>
        </div>
        <div class=\"ngoaibtn\">
          <button type=\"submit\" class=\"btn_book_tour\" data-attach-loading>{{'Book tour'|_}}</button>
        </div>
      </div>
    </form>
  </div>
</div>", "/var/www/vhosts/420.com.vn/httpdocs/plugins/web/hotel/components/booktour/default.htm", "");
    }
}

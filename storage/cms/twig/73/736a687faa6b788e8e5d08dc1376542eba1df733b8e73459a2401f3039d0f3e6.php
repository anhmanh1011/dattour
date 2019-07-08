<?php

/* /var/www/vhosts/420.com.vn/httpdocs/plugins/web/hotel/components/roomdetail/default.htm */
class __TwigTemplate_a66fc8ed392390204e2d6c0b3c8f198170fdda3b72eb03b5870129f479de19b4 extends Twig_Template
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
<form data-request=\"DetailRoom::onBookroom\" data-request-validate data-request-flash class=\"review_form\">
  <div class=\"sub_from_bookroom\">
    <div class=\"title\">";
        // line 4
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Your Reveration"]);
        echo "</div>
    <div class=\"lst_from_bookroom\">
      <div class=\"item_info_bookroom\">
        <span class=\"name_info_bookroom\">";
        // line 7
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Check in"]);
        echo "</span>
        <input type=\"hidden\" name=\"title_room\" value=\"";
        // line 8
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["room_detail"] ?? null), "name", []), "html", null, true);
        echo "\" required>
        <input class=\"date_arrival\" name=\"checkin\" autocomplete=\"off\" type=\"text\" id='datetimepicker2' required/>
      </div>
      <div class=\"item_info_bookroom\">
        <span class=\"name_info_bookroom\">";
        // line 12
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Check out"]);
        echo "</span>
        <input class=\"date_arrival\" name=\"checkout\" autocomplete=\"off\" type=\"text\" id='datetimepicker3' required/>
      </div>
      <div class=\"lst_age\">
        <div class=\"item_info_bookroom_two\">
          <span class=\"name_info_bookroom\">";
        // line 17
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Rooms"]);
        echo "</span>
          <select name=\"rooms\" id=\"Select1\" required>
            ";
        // line 19
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, 5));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 20
            echo "            <option value=\"";
            echo twig_escape_filter($this->env, $context["i"], "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $context["i"], "html", null, true);
            echo "</option>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 22
        echo "          </select>
        </div>
        <div class=\"item_info_bookroom_two\">
          <span class=\"name_info_bookroom\">";
        // line 25
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Adults"]);
        echo "</span>
          <select name=\"adults\" id=\"Select2\" required>
            ";
        // line 27
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, twig_get_attribute($this->env, $this->source, ($context["room_detail"] ?? null), "max_people", [])));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 28
            echo "            <option value=\"";
            echo twig_escape_filter($this->env, $context["i"], "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $context["i"], "html", null, true);
            echo "</option>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 30
        echo "          </select>
        </div>
        <div class=\"item_info_bookroom_two\">
          <span class=\"name_info_bookroom\">";
        // line 33
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Children"]);
        echo "</span>
          <select name=\"children\" id=\"Select3\" required>
            ";
        // line 35
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(0, twig_get_attribute($this->env, $this->source, ($context["room_detail"] ?? null), "max_people", [])));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 36
            echo "            <option value=\"";
            echo twig_escape_filter($this->env, $context["i"], "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $context["i"], "html", null, true);
            echo "</option>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 38
        echo "          </select>
        </div>
      </div>
      <div class=\"item_info_bookroom\">
        <span class=\"name_info_bookroom\">";
        // line 42
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Name"]);
        echo "</span>
        <input name=\"name\" type=\"text\"  required/>
      </div>
      <div class=\"item_info_bookroom\">
        <span class=\"name_info_bookroom\">";
        // line 46
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Email"]);
        echo "</span>
        <input name=\"email\" type=\"email\"  required/>
      </div>
      <div class=\"item_info_bookroom\">
        <span class=\"name_info_bookroom\">";
        // line 50
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Phone"]);
        echo "</span>
        <input name=\"phone\" type=\"tel\" required />
      </div>
      <div class=\"item_info_bookroom\">
        <span class=\"name_info_bookroom\">";
        // line 54
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Content"]);
        echo "</span>
        <textarea name=\"content\" rows=\"2\" cols=\"20\"></textarea>
      </div>
      <input type=\"hidden\" name=\"img1\" value=\"";
        // line 57
        echo call_user_func_array($this->env->getFilter('resize')->getCallable(), [(($__internal_7cd7461123377b8c9c1b6a01f46c7bbd94bd12e59266005df5e93029ddbc0ec5 = twig_get_attribute($this->env, $this->source, ($context["room_detail"] ?? null), "album_images", [])) && is_array($__internal_7cd7461123377b8c9c1b6a01f46c7bbd94bd12e59266005df5e93029ddbc0ec5) || $__internal_7cd7461123377b8c9c1b6a01f46c7bbd94bd12e59266005df5e93029ddbc0ec5 instanceof ArrayAccess ? ($__internal_7cd7461123377b8c9c1b6a01f46c7bbd94bd12e59266005df5e93029ddbc0ec5[0] ?? null) : null), 310, 222, ["mode" => "crop", "quality" => "80"]]);
        echo "\"\">
      <input type=\"hidden\" name=\"img2\" value=\"";
        // line 58
        echo call_user_func_array($this->env->getFilter('resize')->getCallable(), [(($__internal_3e28b7f596c58d7729642bcf2acc6efc894803703bf5fa7e74cd8d2aa1f8c68a = twig_get_attribute($this->env, $this->source, ($context["room_detail"] ?? null), "album_images", [])) && is_array($__internal_3e28b7f596c58d7729642bcf2acc6efc894803703bf5fa7e74cd8d2aa1f8c68a) || $__internal_3e28b7f596c58d7729642bcf2acc6efc894803703bf5fa7e74cd8d2aa1f8c68a instanceof ArrayAccess ? ($__internal_3e28b7f596c58d7729642bcf2acc6efc894803703bf5fa7e74cd8d2aa1f8c68a[1] ?? null) : null), 310, 222, ["mode" => "crop", "quality" => "80"]]);
        echo "\"\">
      <input type=\"hidden\" name=\"hotel_name\" value=\"";
        // line 59
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["hotel"] ?? null), "name", []), "html", null, true);
        echo "\">
      <input type=\"hidden\" name=\"hotel_location\" value=\"";
        // line 60
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["hotel"] ?? null), "locationdetail", []), "html", null, true);
        echo "\">
      <input type=\"hidden\" name=\"hotel_phone\" value=\"";
        // line 61
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["hotel"] ?? null), "phone", []), "html", null, true);
        echo "\">
    </div>
    <div class=\"ngoaibtn\">
      <button type=\"submit\" class=\"btn_book_room\"  data-attach-loading>";
        // line 64
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Book room"]);
        echo "</button>
    </div>
  </div>
</form>";
    }

    public function getTemplateName()
    {
        return "/var/www/vhosts/420.com.vn/httpdocs/plugins/web/hotel/components/roomdetail/default.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  178 => 64,  172 => 61,  168 => 60,  164 => 59,  160 => 58,  156 => 57,  150 => 54,  143 => 50,  136 => 46,  129 => 42,  123 => 38,  112 => 36,  108 => 35,  103 => 33,  98 => 30,  87 => 28,  83 => 27,  78 => 25,  73 => 22,  62 => 20,  58 => 19,  53 => 17,  45 => 12,  38 => 8,  34 => 7,  28 => 4,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("
<form data-request=\"DetailRoom::onBookroom\" data-request-validate data-request-flash class=\"review_form\">
  <div class=\"sub_from_bookroom\">
    <div class=\"title\">{{'Your Reveration'|_}}</div>
    <div class=\"lst_from_bookroom\">
      <div class=\"item_info_bookroom\">
        <span class=\"name_info_bookroom\">{{'Check in'|_}}</span>
        <input type=\"hidden\" name=\"title_room\" value=\"{{room_detail.name}}\" required>
        <input class=\"date_arrival\" name=\"checkin\" autocomplete=\"off\" type=\"text\" id='datetimepicker2' required/>
      </div>
      <div class=\"item_info_bookroom\">
        <span class=\"name_info_bookroom\">{{'Check out'|_}}</span>
        <input class=\"date_arrival\" name=\"checkout\" autocomplete=\"off\" type=\"text\" id='datetimepicker3' required/>
      </div>
      <div class=\"lst_age\">
        <div class=\"item_info_bookroom_two\">
          <span class=\"name_info_bookroom\">{{'Rooms'|_}}</span>
          <select name=\"rooms\" id=\"Select1\" required>
            {%for i in 1..5 %}
            <option value=\"{{i}}\">{{i}}</option>
            {%endfor%}
          </select>
        </div>
        <div class=\"item_info_bookroom_two\">
          <span class=\"name_info_bookroom\">{{'Adults'|_}}</span>
          <select name=\"adults\" id=\"Select2\" required>
            {%for i in 1..room_detail.max_people %}
            <option value=\"{{i}}\">{{i}}</option>
            {%endfor%}
          </select>
        </div>
        <div class=\"item_info_bookroom_two\">
          <span class=\"name_info_bookroom\">{{'Children'|_}}</span>
          <select name=\"children\" id=\"Select3\" required>
            {%for i in 0..room_detail.max_people %}
            <option value=\"{{i}}\">{{i}}</option>
            {%endfor%}
          </select>
        </div>
      </div>
      <div class=\"item_info_bookroom\">
        <span class=\"name_info_bookroom\">{{'Name'|_}}</span>
        <input name=\"name\" type=\"text\"  required/>
      </div>
      <div class=\"item_info_bookroom\">
        <span class=\"name_info_bookroom\">{{'Email'|_}}</span>
        <input name=\"email\" type=\"email\"  required/>
      </div>
      <div class=\"item_info_bookroom\">
        <span class=\"name_info_bookroom\">{{'Phone'|_}}</span>
        <input name=\"phone\" type=\"tel\" required />
      </div>
      <div class=\"item_info_bookroom\">
        <span class=\"name_info_bookroom\">{{'Content'|_}}</span>
        <textarea name=\"content\" rows=\"2\" cols=\"20\"></textarea>
      </div>
      <input type=\"hidden\" name=\"img1\" value=\"{{room_detail.album_images[0]| resize(310,222, { mode: 'crop', quality: '80' }) }}\"\">
      <input type=\"hidden\" name=\"img2\" value=\"{{room_detail.album_images[1]| resize(310,222, { mode: 'crop', quality: '80' }) }}\"\">
      <input type=\"hidden\" name=\"hotel_name\" value=\"{{hotel.name}}\">
      <input type=\"hidden\" name=\"hotel_location\" value=\"{{hotel.locationdetail}}\">
      <input type=\"hidden\" name=\"hotel_phone\" value=\"{{hotel.phone}}\">
    </div>
    <div class=\"ngoaibtn\">
      <button type=\"submit\" class=\"btn_book_room\"  data-attach-loading>{{'Book room'|_}}</button>
    </div>
  </div>
</form>", "/var/www/vhosts/420.com.vn/httpdocs/plugins/web/hotel/components/roomdetail/default.htm", "");
    }
}

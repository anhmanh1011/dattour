<?php

/* /var/www/vhosts/420.com.vn/httpdocs/themes/420Hospitality/partials/footer.htm */
class __TwigTemplate_9178cbf176a9885bfbed6436dd3a56a17750d796ee591eed0b3c25bfd91a7cf1 extends Twig_Template
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
        echo "<div id=\"footer\">
  <div class=\"footercontent\">
    <div class=\"container_duc\">
      <div class=\"lst_footercontent\">
        <div class=\"item_footercontent\">
          <a href=\"/\" class=\"logo_footer\">";
        // line 6
        echo twig_escape_filter($this->env, ($context["title_web"] ?? null), "html", null, true);
        echo "</a>
          <div class=\"note_footer\">";
        // line 7
        echo twig_escape_filter($this->env, ($context["description"] ?? null), "html", null, true);
        echo "</div>
          <div class=\"address_footer\">
            <span class=\"icon_contact_ft\">
              <i class=\"fa fa-map-marker\" aria-hidden=\"true\"></i>
            </span>
            <span class=\"number_contact_ft\"> ";
        // line 12
        echo twig_escape_filter($this->env, ($context["address"] ?? null), "html", null, true);
        echo "</span>
          </div>
          <div class=\"hotline_footer\">
            <span class=\"icon_contact_ft\">
              <i class=\"fa fa-phone-square\" aria-hidden=\"true\"></i>
            </span>
            <span class=\"number_contact_ft\"> ";
        // line 18
        echo twig_escape_filter($this->env, ($context["hotline"] ?? null), "html", null, true);
        echo "</span>
          </div>
          <div class=\"email_footer\">
            <span class=\"icon_contact_ft\">
              <i class=\"fa fa-envelope\" aria-hidden=\"true\"></i>
            </span>
            <span class=\"number_contact_ft\">";
        // line 24
        echo twig_escape_filter($this->env, ($context["email"] ?? null), "html", null, true);
        echo "</span>
          </div>
        </div>
        <div class=\"item_footercontent_two\">
          <div class=\"title_footer\">";
        // line 28
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["CATEGORIES"]);
        echo "</div>
          <ul class=\"lst_dsfooter\">
            <li><a href=\"/travels\">";
        // line 30
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Travel"]);
        echo "</a></li>
            <li><a href=\"/hotel\">";
        // line 31
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Hotel"]);
        echo "</a></li>
            <li><a href=\"/list/cuisine\">";
        // line 32
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Cuisine"]);
        echo "</a></li>
            <li><a href=\"/list/event\">";
        // line 33
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Event"]);
        echo "</a></li>
            <li><a href=\"/list/service-store\">";
        // line 34
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Service"]);
        echo "</a></li>
          </ul>
        </div>
        <div class=\"item_footercontent_father\">
          <div class=\"title_footer\">";
        // line 38
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["GET YOU OFFER"]);
        echo "</div>
          <div class=\"signup_receive\">
            <input id=\"Text1\" type=\"text\" placeholder=\"Email...\">
            <button type=\"button\" class=\"btn_signup\">";
        // line 41
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Register"]);
        echo "</button>
          </div>
          <div class=\"note_footer\">";
        // line 43
        echo twig_escape_filter($this->env, ($context["description"] ?? null), "html", null, true);
        echo "</div>
        </div>
      </div>
    </div>
  </div>
  <div class=\"commonfootercontent\">
    <div class=\"container_duc\">
      <div class=\"banquyen\">
        Product with
        <i class=\"fa fa-heart\"></i>
        Powered by
        <a class=\"fotcam\" target=\"_blank\" href=\"https://thienvietjsc.vn/\">ThienVietJSC</a> &
        <a class=\"fotcam\" target=\"_blank\" href=\"javascript:\">QAkita</a>
        - 2018. All Rights Reserved
      </div>
    </div>
  </div>
</div>";
    }

    public function getTemplateName()
    {
        return "/var/www/vhosts/420.com.vn/httpdocs/themes/420Hospitality/partials/footer.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  106 => 43,  101 => 41,  95 => 38,  88 => 34,  84 => 33,  80 => 32,  76 => 31,  72 => 30,  67 => 28,  60 => 24,  51 => 18,  42 => 12,  34 => 7,  30 => 6,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div id=\"footer\">
  <div class=\"footercontent\">
    <div class=\"container_duc\">
      <div class=\"lst_footercontent\">
        <div class=\"item_footercontent\">
          <a href=\"/\" class=\"logo_footer\">{{title_web}}</a>
          <div class=\"note_footer\">{{description}}</div>
          <div class=\"address_footer\">
            <span class=\"icon_contact_ft\">
              <i class=\"fa fa-map-marker\" aria-hidden=\"true\"></i>
            </span>
            <span class=\"number_contact_ft\"> {{address}}</span>
          </div>
          <div class=\"hotline_footer\">
            <span class=\"icon_contact_ft\">
              <i class=\"fa fa-phone-square\" aria-hidden=\"true\"></i>
            </span>
            <span class=\"number_contact_ft\"> {{hotline}}</span>
          </div>
          <div class=\"email_footer\">
            <span class=\"icon_contact_ft\">
              <i class=\"fa fa-envelope\" aria-hidden=\"true\"></i>
            </span>
            <span class=\"number_contact_ft\">{{email}}</span>
          </div>
        </div>
        <div class=\"item_footercontent_two\">
          <div class=\"title_footer\">{{'CATEGORIES'|_}}</div>
          <ul class=\"lst_dsfooter\">
            <li><a href=\"/travels\">{{'Travel'|_}}</a></li>
            <li><a href=\"/hotel\">{{'Hotel'|_}}</a></li>
            <li><a href=\"/list/cuisine\">{{'Cuisine'|_}}</a></li>
            <li><a href=\"/list/event\">{{'Event'|_}}</a></li>
            <li><a href=\"/list/service-store\">{{'Service'|_}}</a></li>
          </ul>
        </div>
        <div class=\"item_footercontent_father\">
          <div class=\"title_footer\">{{'GET YOU OFFER'|_}}</div>
          <div class=\"signup_receive\">
            <input id=\"Text1\" type=\"text\" placeholder=\"Email...\">
            <button type=\"button\" class=\"btn_signup\">{{'Register'|_}}</button>
          </div>
          <div class=\"note_footer\">{{description}}</div>
        </div>
      </div>
    </div>
  </div>
  <div class=\"commonfootercontent\">
    <div class=\"container_duc\">
      <div class=\"banquyen\">
        Product with
        <i class=\"fa fa-heart\"></i>
        Powered by
        <a class=\"fotcam\" target=\"_blank\" href=\"https://thienvietjsc.vn/\">ThienVietJSC</a> &
        <a class=\"fotcam\" target=\"_blank\" href=\"javascript:\">QAkita</a>
        - 2018. All Rights Reserved
      </div>
    </div>
  </div>
</div>", "/var/www/vhosts/420.com.vn/httpdocs/themes/420Hospitality/partials/footer.htm", "");
    }
}

<?php

/* /var/www/vhosts/420.com.vn/httpdocs/themes/420Hospitality/partials/header.htm */
class __TwigTemplate_c66d32b4331d65c800ef0233f5c7b16605c727a950d96981849af7fe41ce8ee9 extends Twig_Template
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
        echo "<div id=\"header\">
  <form data-request=\"onSearch\" data-request-update=\"'search/result': '#searchResult'\">
    <div class=\"top_search\">
      <div class=\"container_duc\">
        <div class=\"hd_input_grup\">
          <span class=\"icon_search\"><i class=\"fa fa-search\"></i></span>
          <input id=\"inputSearch\" type=\"text\" name=\"searchKey\" placeholder=\"";
        // line 7
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["SEARCH"]);
        echo "\">
          <span class=\"icon_close\"><i class=\"fa fa-times\"></i></span>
        </div>
      </div>
    </div>
  </form>
  <div class=\"container\">
    <div class=\"row\">
      <div class=\"col-xs-12\" style=\"position: absolute;z-index: 9\">
        <ul id=\"searchResult\">
        </ul>
      </div>
    </div>
  </div>
  <div class=\"container_duc\">
    <div class=\"menu\">
      <div class=\"logo\">
        <a class=\"image_logo\" href=\"/\">
          <img alt=\"";
        // line 25
        echo twig_escape_filter($this->env, ($context["title_web"] ?? null), "html", null, true);
        echo "\" src=\"assets/pic/logo.png\" />
        </a>
      </div>
      <div class=\"header_right\">
        <div class=\"mainmenu\">
          <ul>
            <li ";
        // line 31
        if ((($context["page"] ?? null) == "home")) {
            echo "class=\"active\" ";
        }
        echo "><a href=\"/\">";
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["HOME"]);
        echo "</a></li>
            <li ";
        // line 32
        if ((($context["page"] ?? null) == "travel")) {
            echo "class=\"active\" ";
        }
        echo "><a href=\"/travel\">";
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["TRAVEL"]);
        echo "</a></li>
            <li ";
        // line 33
        if ((($context["page"] ?? null) == "hotel")) {
            echo "class=\"active\" ";
        }
        echo "><a href=\"/hotel\">";
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["HOTEL"]);
        echo "</a></li>
            <li ";
        // line 34
        if ((($context["page"] ?? null) == "cuisine")) {
            echo "class=\"active\" ";
        }
        echo "><a href=\"/list/cuisine\">";
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["CUISINE"]);
        echo "</a></li>
            <li ";
        // line 35
        if ((($context["page"] ?? null) == "event")) {
            echo "class=\"active\" ";
        }
        echo "><a href=\"/list/event\">";
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["EVENT"]);
        echo "</a></li>
            <li ";
        // line 36
        if ((($context["page"] ?? null) == "store")) {
            echo "class=\"active\" ";
        }
        echo "><a href=\"/list/service-store\">";
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["SERVICE"]);
        echo "</a></li>
          </ul>
        </div>
        <span class=\"icon_clsearch\"><i class=\"fa fa-search\"></i></span>
        <div class=\"wrap_language\">
          <button class=\"btn dropdown-toggle\" type=\"button\" data-toggle=\"dropdown\">
            <img ";
        // line 42
        echo ((("en" == ($context["activeLocale"] ?? null))) ? ("src=\"assets/pic/en.jpg\"") : ("src=\"assets/pic/vn.jpg\""));
        echo "  alt=\"\" />
          </button>
          <ul class=\"menu_language\">
            <li>
              <a href=\"javascript:\" data-request=\"onSwitchLocale\" data-request-data=\"locale: 'en'\">
                <img src=\"assets/pic/en.jpg\" alt=\"\" />
              </a>
            </li>
            <li>
              <a href=\"javascript:\" data-request=\"onSwitchLocale\" data-request-data=\"locale: 'vn'\">
                <img src=\"assets/pic/vn.jpg\" alt=\"\" />
              </a>
            </li>
          </ul>
        </div>
        <div class=\"click_close\"></div>
        <div class=\"chensubmenu\"></div>
      </div>
    </div>
  </div>
</div>";
    }

    public function getTemplateName()
    {
        return "/var/www/vhosts/420.com.vn/httpdocs/themes/420Hospitality/partials/header.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  114 => 42,  101 => 36,  93 => 35,  85 => 34,  77 => 33,  69 => 32,  61 => 31,  52 => 25,  31 => 7,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div id=\"header\">
  <form data-request=\"onSearch\" data-request-update=\"'search/result': '#searchResult'\">
    <div class=\"top_search\">
      <div class=\"container_duc\">
        <div class=\"hd_input_grup\">
          <span class=\"icon_search\"><i class=\"fa fa-search\"></i></span>
          <input id=\"inputSearch\" type=\"text\" name=\"searchKey\" placeholder=\"{{'SEARCH'|_}}\">
          <span class=\"icon_close\"><i class=\"fa fa-times\"></i></span>
        </div>
      </div>
    </div>
  </form>
  <div class=\"container\">
    <div class=\"row\">
      <div class=\"col-xs-12\" style=\"position: absolute;z-index: 9\">
        <ul id=\"searchResult\">
        </ul>
      </div>
    </div>
  </div>
  <div class=\"container_duc\">
    <div class=\"menu\">
      <div class=\"logo\">
        <a class=\"image_logo\" href=\"/\">
          <img alt=\"{{title_web}}\" src=\"assets/pic/logo.png\" />
        </a>
      </div>
      <div class=\"header_right\">
        <div class=\"mainmenu\">
          <ul>
            <li {% if page == 'home' %}class=\"active\" {% endif %}><a href=\"/\">{{'HOME'|_}}</a></li>
            <li {% if page == 'travel' %}class=\"active\" {% endif %}><a href=\"/travel\">{{'TRAVEL'|_}}</a></li>
            <li {% if page == 'hotel' %}class=\"active\" {% endif %}><a href=\"/hotel\">{{'HOTEL'|_}}</a></li>
            <li {% if page == 'cuisine' %}class=\"active\" {% endif %}><a href=\"/list/cuisine\">{{'CUISINE'|_}}</a></li>
            <li {% if page == 'event' %}class=\"active\" {% endif %}><a href=\"/list/event\">{{'EVENT'|_}}</a></li>
            <li {% if page == 'store' %}class=\"active\" {% endif %}><a href=\"/list/service-store\">{{'SERVICE'|_}}</a></li>
          </ul>
        </div>
        <span class=\"icon_clsearch\"><i class=\"fa fa-search\"></i></span>
        <div class=\"wrap_language\">
          <button class=\"btn dropdown-toggle\" type=\"button\" data-toggle=\"dropdown\">
            <img {{ 'en' == activeLocale ? 'src=\"assets/pic/en.jpg\"' : 'src=\"assets/pic/vn.jpg\"' }}  alt=\"\" />
          </button>
          <ul class=\"menu_language\">
            <li>
              <a href=\"javascript:\" data-request=\"onSwitchLocale\" data-request-data=\"locale: 'en'\">
                <img src=\"assets/pic/en.jpg\" alt=\"\" />
              </a>
            </li>
            <li>
              <a href=\"javascript:\" data-request=\"onSwitchLocale\" data-request-data=\"locale: 'vn'\">
                <img src=\"assets/pic/vn.jpg\" alt=\"\" />
              </a>
            </li>
          </ul>
        </div>
        <div class=\"click_close\"></div>
        <div class=\"chensubmenu\"></div>
      </div>
    </div>
  </div>
</div>", "/var/www/vhosts/420.com.vn/httpdocs/themes/420Hospitality/partials/header.htm", "");
    }
}

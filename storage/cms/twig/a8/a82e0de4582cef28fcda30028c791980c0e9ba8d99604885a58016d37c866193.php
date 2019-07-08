<?php

/* /var/www/vhosts/420.com.vn/httpdocs/themes/420Hospitality/partials/product/product.htm */
class __TwigTemplate_ab60fa74784efaf10559f05b75bde3febe9f50a4794c70293fac1e66a80f0019 extends Twig_Template
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
        if (twig_length_filter($this->env, ($context["data_event"] ?? null))) {
            // line 2
            echo " ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["data_event"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["value"]) {
                // line 3
                echo " <div class=\"col-md-4 col-sm-6\">
   <div class=\"product product_event\">
     ";
                // line 5
                if ((twig_get_attribute($this->env, $this->source, $context["value"], "discount", []) > 0)) {
                    // line 6
                    echo "     <div class=\"sale new\">
       <span>'";
                    // line 7
                    echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Sale"]);
                    echo "</span>
     </div>
     ";
                }
                // line 10
                echo "     ";
                if ((twig_get_attribute($this->env, $this->source, $context["value"], "hot", []) == 1)) {
                    // line 11
                    echo "     <div class=\"sale hot\">
       <span style=\"color: #f00\">";
                    // line 12
                    echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Hot"]);
                    echo "</span>
     </div>
     ";
                }
                // line 15
                echo "     <div class=\"images\">
      <a href=\"";
                // line 16
                echo $this->extensions['Cms\Twig\Extension']->pageFilter("home");
                echo "/product/";
                echo twig_escape_filter($this->env, ($context["cate_id"] ?? null), "html", null, true);
                echo "/";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["value"], "slug", []), "html", null, true);
                echo "\">
        <img
           src=\"";
                // line 18
                echo call_user_func_array($this->env->getFilter('resize')->getCallable(), [twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["value"], "image_preview", []), "path", []), 263, 140, ["mode" => "crop", "quality" => "80", "extension" => "jpg"]]);
                echo "\" alt=\"\"
           class=\"img-responsive\">
      </a>
       <div class=\"title_img\">
       </div>
     </div>
     <div class=\"caption\">
       <div class=\"rate_star\">
          ";
                // line 26
                if ((twig_get_attribute($this->env, $this->source, $context["value"], "star_4", []) > twig_get_attribute($this->env, $this->source, $context["value"], "star_5", []))) {
                    // line 27
                    echo "          <p class=\"rating\">
            <span><i class=\"fas fa-star\"></i></span>
            <span><i class=\"fas fa-star\"></i></span>
            <span><i class=\"fas fa-star\"></i></span>
            <span><i class=\"fas fa-star\"></i></span>
            <span><i class=\"far fa-star\"></i></span>
          </p>
          ";
                } elseif ((twig_get_attribute($this->env, $this->source,                 // line 34
$context["value"], "star_4", []) == twig_get_attribute($this->env, $this->source, $context["value"], "star_5", []))) {
                    // line 35
                    echo "          <p class=\"rating\">
            <span><i class=\"fas fa-star\"></i></span>
            <span><i class=\"fas fa-star\"></i></span>
            <span><i class=\"fas fa-star\"></i></span>
            <span><i class=\"fas fa-star\"></i></span>
            <span><i class=\"far fa-star\"></i></span>
          </p>
          ";
                } elseif ((twig_get_attribute($this->env, $this->source,                 // line 42
$context["value"], "star_4", []) < twig_get_attribute($this->env, $this->source, $context["value"], "star_5", []))) {
                    // line 43
                    echo "          <p class=\"rating\">
            <span><i class=\"fas fa-star\"></i></span>
            <span><i class=\"fas fa-star\"></i></span>
            <span><i class=\"fas fa-star\"></i></span>
            <span><i class=\"fas fa-star\"></i></span>
            <span><i class=\"fas fa-star\"></i></span>
          </p>
         ";
                } elseif (((twig_get_attribute($this->env, $this->source,                 // line 50
$context["value"], "star_4", []) == "") && (twig_get_attribute($this->env, $this->source, $context["value"], "star_5", []) == ""))) {
                    // line 51
                    echo "         <p class=\"rating\">
           <span><i class=\"far fa-star\"></i></span>
           <span><i class=\"far fa-star\"></i></span>
           <span><i class=\"far fa-star\"></i></span>
           <span><i class=\"far fa-star\"></i></span>
           <span><i class=\"far fa-star\"></i></span>
         </p>
         ";
                }
                // line 59
                echo "       </div>
       <div class=\"title_post\">
         <h3><a href=\"";
                // line 61
                echo $this->extensions['Cms\Twig\Extension']->pageFilter("home");
                echo "/product/";
                echo twig_escape_filter($this->env, ($context["cate_id"] ?? null), "html", null, true);
                echo "/";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["value"], "slug", []), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["value"], "name", []), "html", null, true);
                echo "</a></h3>
       </div>
       <div class=\"price\">
         ";
                // line 64
                if ((($context["cate_id"] ?? null) == 4)) {
                    // line 65
                    echo "         <div class=\"date_fix\">
           <span class=\"date1\">";
                    // line 66
                    echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Start date"]);
                    echo ":";
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["value"], "start_day", []), "d-m-Y"), "html", null, true);
                    echo " </span>
           <span class=\"date2\">";
                    // line 67
                    echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["End date"]);
                    echo ": ";
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["value"], "end_day", []), "d-m-Y"), "html", null, true);
                    echo "</span>
         </div>
         ";
                }
                // line 70
                echo "         ";
                if ((twig_get_attribute($this->env, $this->source, $context["value"], "discount", []) > 0)) {
                    // line 71
                    echo "         <p style=\"float: left; margin: 0\">";
                    echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Price from"]);
                    echo ":<a href=\"";
                    echo $this->extensions['Cms\Twig\Extension']->pageFilter("home");
                    echo "/product/";
                    echo twig_escape_filter($this->env, ($context["cate_id"] ?? null), "html", null, true);
                    echo "/";
                    echo twig_escape_filter($this->env, ($context["slug"] ?? null), "html", null, true);
                    echo "\">
             ";
                    // line 72
                    echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["value"], "price_new", [])), "html", null, true);
                    echo " VNĐ</a></p>
         <p><span class=\"sele\" style=\" text-decoration: line-through;padding-left: 5px\"> ";
                    // line 73
                    echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["value"], "price", [])), "html", null, true);
                    echo "
             VNĐ</span></p>
         ";
                } else {
                    // line 76
                    echo "         <p>";
                    echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Price from"]);
                    echo ":<a href=\"";
                    echo $this->extensions['Cms\Twig\Extension']->pageFilter("home");
                    echo "/product/";
                    echo twig_escape_filter($this->env, ($context["cate_id"] ?? null), "html", null, true);
                    echo "/";
                    echo twig_escape_filter($this->env, ($context["slug"] ?? null), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["value"], "price", [])), "html", null, true);
                    echo "
             VNĐ</a></p>
         ";
                }
                // line 79
                echo "       </div>
     </div>
   </div>
 </div>
 ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['value'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 84
            echo " ";
        } else {
            // line 85
            echo " <h5>Updating ...</h5>
 ";
        }
    }

    public function getTemplateName()
    {
        return "/var/www/vhosts/420.com.vn/httpdocs/themes/420Hospitality/partials/product/product.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  212 => 85,  209 => 84,  199 => 79,  184 => 76,  178 => 73,  174 => 72,  163 => 71,  160 => 70,  152 => 67,  146 => 66,  143 => 65,  141 => 64,  129 => 61,  125 => 59,  115 => 51,  113 => 50,  104 => 43,  102 => 42,  93 => 35,  91 => 34,  82 => 27,  80 => 26,  69 => 18,  60 => 16,  57 => 15,  51 => 12,  48 => 11,  45 => 10,  39 => 7,  36 => 6,  34 => 5,  30 => 3,  25 => 2,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{%if data_event|length %}
 {%for value in data_event%}
 <div class=\"col-md-4 col-sm-6\">
   <div class=\"product product_event\">
     {%if value.discount > 0 %}
     <div class=\"sale new\">
       <span>'{{'Sale'|_}}</span>
     </div>
     {%endif%}
     {%if value.hot == 1%}
     <div class=\"sale hot\">
       <span style=\"color: #f00\">{{'Hot'|_}}</span>
     </div>
     {%endif%}
     <div class=\"images\">
      <a href=\"{{'home'|page}}/product/{{cate_id}}/{{value.slug}}\">
        <img
           src=\"{{value.image_preview.path|resize(263, 140, { mode: 'crop', quality: '80', extension: 'jpg' })}}\" alt=\"\"
           class=\"img-responsive\">
      </a>
       <div class=\"title_img\">
       </div>
     </div>
     <div class=\"caption\">
       <div class=\"rate_star\">
          {% if value.star_4 > value.star_5%}
          <p class=\"rating\">
            <span><i class=\"fas fa-star\"></i></span>
            <span><i class=\"fas fa-star\"></i></span>
            <span><i class=\"fas fa-star\"></i></span>
            <span><i class=\"fas fa-star\"></i></span>
            <span><i class=\"far fa-star\"></i></span>
          </p>
          {%elseif(value.star_4 == value.star_5)%}
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
         {%endif%}
       </div>
       <div class=\"title_post\">
         <h3><a href=\"{{'home'|page}}/product/{{cate_id}}/{{value.slug}}\">{{value.name}}</a></h3>
       </div>
       <div class=\"price\">
         {%if cate_id == 4 %}
         <div class=\"date_fix\">
           <span class=\"date1\">{{'Start date'|_}}:{{value.start_day |date('d-m-Y') }} </span>
           <span class=\"date2\">{{'End date'|_}}: {{value.end_day |date('d-m-Y') }}</span>
         </div>
         {%endif%}
         {%if value.discount > 0%}
         <p style=\"float: left; margin: 0\">{{'Price from'|_}}:<a href=\"{{'home'|page}}/product/{{cate_id}}/{{slug}}\">
             {{value.price_new|number_format}} VNĐ</a></p>
         <p><span class=\"sele\" style=\" text-decoration: line-through;padding-left: 5px\"> {{value.price|number_format}}
             VNĐ</span></p>
         {%else%}
         <p>{{'Price from'|_}}:<a href=\"{{'home'|page}}/product/{{cate_id}}/{{slug}}\">{{value.price|number_format}}
             VNĐ</a></p>
         {%endif%}
       </div>
     </div>
   </div>
 </div>
 {%endfor%}
 {% else %}
 <h5>Updating ...</h5>
 {%endif%}", "/var/www/vhosts/420.com.vn/httpdocs/themes/420Hospitality/partials/product/product.htm", "");
    }
}

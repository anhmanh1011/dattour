<?php

/* /var/www/vhosts/420.com.vn/httpdocs/themes/420Hospitality/pages/productList.htm */
class __TwigTemplate_d91d77faf233e30913614d00786e621c18c762fed1bad73feca42958811952bb extends Twig_Template
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
  <img alt=\"\" src=\"assets/pic/banner_duc5.jpg\" />
  <div class=\"describe_banner\">
    <div class=\"container_duc\">
      <h1>
        <span class=\"title_page\">";
        // line 6
        echo twig_escape_filter($this->env, ($context["titte_page"] ?? null), "html", null, true);
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
        echo twig_escape_filter($this->env, ($context["titte_page"] ?? null), "html", null, true);
        echo "</a></li>
      </ul>
    </div>
  </div>
</div>
";
        // line 19
        $context['__cms_component_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->componentFunction("ProductList"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
    }

    public function getTemplateName()
    {
        return "/var/www/vhosts/420.com.vn/httpdocs/themes/420Hospitality/pages/productList.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  54 => 19,  46 => 14,  40 => 13,  30 => 6,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"sub_banner_page\">
  <img alt=\"\" src=\"assets/pic/banner_duc5.jpg\" />
  <div class=\"describe_banner\">
    <div class=\"container_duc\">
      <h1>
        <span class=\"title_page\">{{titte_page}}</span>
      </h1>
    </div>
  </div>
  <div class=\"duongdanlink\">
    <div class=\"container_duc\">
      <ul class=\"duongdan_link\">
        <li><a href=\"{{'home'|page}}\">{{'HOME'|_}}</a></li>
        <li class=\"active\"><a href=\"javascript:void(0)\">{{titte_page}}</a></li>
      </ul>
    </div>
  </div>
</div>
{% component 'ProductList' %}", "/var/www/vhosts/420.com.vn/httpdocs/themes/420Hospitality/pages/productList.htm", "");
    }
}

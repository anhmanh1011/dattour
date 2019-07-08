<?php

/* /var/www/vhosts/420.com.vn/httpdocs/themes/420Hospitality/pages/productDetail.htm */
class __TwigTemplate_ddb019b969a701bfb4db4fe0bb0478f148eebdea68e71d2bfaeed6596318505e extends Twig_Template
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
  <img alt=\"\" src=\"assets/pic/banner_duc4.jpg\" />
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
        echo "\">HOME</a></li>
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
        echo $this->env->getExtension('Cms\Twig\Extension')->componentFunction("ProductDetail"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
    }

    public function getTemplateName()
    {
        return "/var/www/vhosts/420.com.vn/httpdocs/themes/420Hospitality/pages/productDetail.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  52 => 19,  44 => 14,  40 => 13,  30 => 6,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"sub_banner_page\">
  <img alt=\"\" src=\"assets/pic/banner_duc4.jpg\" />
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
        <li><a href=\"{{'home'|page}}\">HOME</a></li>
        <li class=\"active\"><a href=\"javascript:void(0)\">{{titte_page}}</a></li>
      </ul>
    </div>
  </div>
</div>
{% component 'ProductDetail' %}", "/var/www/vhosts/420.com.vn/httpdocs/themes/420Hospitality/pages/productDetail.htm", "");
    }
}

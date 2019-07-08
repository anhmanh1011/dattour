<?php

/* /var/www/vhosts/420.com.vn/httpdocs/themes/420Hospitality/pages/tour-detail.htm */
class __TwigTemplate_f7f2c939f82112d88a4ba429437b657474dba7b3e1aa85b85ecf02c4f406015f extends Twig_Template
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
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["tour_detail"] ?? null), "name", []), "html", null, true);
        echo "</span>
      </h1>
    </div>
  </div>
  <div class=\"duongdanlink\">
    <div class=\"container_duc\">
      <ul class=\"duongdan_link\">
        <li><a href=\"/\">Home</a></li>
        <li><a href=\"/travel\">Travel</a></li>
        <li class=\"active\"><a href=\"javascript:\">";
        // line 15
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["tour_detail"] ?? null), "name", []), "html", null, true);
        echo "</a></li>
      </ul>
    </div>
  </div>
</div>
";
        // line 20
        $context['__cms_component_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->componentFunction("TourDetail"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
    }

    public function getTemplateName()
    {
        return "/var/www/vhosts/420.com.vn/httpdocs/themes/420Hospitality/pages/tour-detail.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  50 => 20,  42 => 15,  30 => 6,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"sub_banner_page\">
  <img alt=\"\" src=\"assets/pic/banner_duc4.jpg\" />
  <div class=\"describe_banner\">
    <div class=\"container_duc\">
      <h1>
        <span class=\"title_page\">{{tour_detail.name}}</span>
      </h1>
    </div>
  </div>
  <div class=\"duongdanlink\">
    <div class=\"container_duc\">
      <ul class=\"duongdan_link\">
        <li><a href=\"/\">Home</a></li>
        <li><a href=\"/travel\">Travel</a></li>
        <li class=\"active\"><a href=\"javascript:\">{{tour_detail.name}}</a></li>
      </ul>
    </div>
  </div>
</div>
{% component 'TourDetail' %}", "/var/www/vhosts/420.com.vn/httpdocs/themes/420Hospitality/pages/tour-detail.htm", "");
    }
}

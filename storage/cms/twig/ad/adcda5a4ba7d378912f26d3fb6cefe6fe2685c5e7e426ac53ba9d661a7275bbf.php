<?php

/* /var/www/vhosts/420.com.vn/httpdocs/themes/420Hospitality/partials/hotel/pagination.htm */
class __TwigTemplate_afa41957677ec9f4015d7f4e5bd4f3a0b114bb8a3869e494085252c3bf565cb0 extends Twig_Template
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
        if ((($context["pages"] ?? null) > 1)) {
            // line 2
            echo "    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(1, ($context["pages"] ?? null)));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 3
                echo "    <label class=\"gloabal_custom\"  ";
                if (($context["i"] == ($context["page"] ?? null))) {
                    echo " style=\"color: #aaa;border:1px solid #aaa\" ";
                }
                echo ">";
                echo twig_escape_filter($this->env, $context["i"], "html", null, true);
                echo "
        <input type=\"radio\" name=\"Filter[page]\" value=\"";
                // line 4
                echo twig_escape_filter($this->env, $context["i"], "html", null, true);
                echo "\">
    </label>
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
    }

    public function getTemplateName()
    {
        return "/var/www/vhosts/420.com.vn/httpdocs/themes/420Hospitality/partials/hotel/pagination.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  39 => 4,  30 => 3,  25 => 2,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% if (pages > 1) %}
    {% for i in 1..pages %}
    <label class=\"gloabal_custom\"  {% if ( i == page) %} style=\"color: #aaa;border:1px solid #aaa\" {% endif %}>{{ i }}
        <input type=\"radio\" name=\"Filter[page]\" value=\"{{ i }}\">
    </label>
    {% endfor %}
{% endif %}", "/var/www/vhosts/420.com.vn/httpdocs/themes/420Hospitality/partials/hotel/pagination.htm", "");
    }
}

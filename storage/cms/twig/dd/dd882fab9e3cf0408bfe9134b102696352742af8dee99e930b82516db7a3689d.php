<?php

/* /var/www/vhosts/420.com.vn/httpdocs/themes/420Hospitality/layouts/Travel365.htm */
class __TwigTemplate_d69302449a1e2d5b1bcd91fa503a172e0efed45d5f7078c593b8cd54be8b40d5 extends Twig_Template
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
        echo "<!doctype html>
<html class=\"no-js\" lang=\"en\">

<head>
  <meta charset=\"utf-8\">
  ";
        // line 6
        $context['__cms_component_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->componentFunction("SeoCmsPage"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
        // line 7
        echo "  <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">


  <base href=\"";
        // line 10
        echo $this->extensions['Cms\Twig\Extension']->themeFilter(" ");
        echo "\">
  <base src=\"";
        // line 11
        echo $this->extensions['Cms\Twig\Extension']->themeFilter(" ");
        echo "\">
  <link rel=\"icon\" type=\"image/png\" href=\"";
        // line 12
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["logo_favicon"] ?? null), "path", []), "html", null, true);
        echo "\">



  <!-- <link rel=\"stylesheet\" href=\"assets/lib/animate/animate.min.css\"> -->
  <link rel=\"stylesheet\" href=\"assets/lib/bootstrap/bootstrap.min.css\">
  <link rel=\"stylesheet\" href=\"assets/lib/rateit/rateit.css\">
  <link rel=\"stylesheet\" href=\"assets/css2/style.css\">
  <link rel=\"stylesheet\" href=\"assets/css2/all.min.css\">
  <link rel=\"stylesheet\" href=\"assets/lib/jquery-ui/jquery-ui.min.css\">
  <link rel=\"stylesheet\" href=\"assets/css/font-awesome.min.css\">
  <!-- <link rel=\"stylesheet\" href=\"assets/css/Pattaya.css\"> -->

  ";
        // line 25
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", []), "title", []) == "Chi tiết tour")) {
            // line 26
            echo "  <link rel=\"stylesheet\" href=\"assets/lib/datepicker/jquery-ui.css\" />
  ";
        }
        // line 28
        echo "
  <link rel=\"stylesheet\" href=\"assets/css/khunganh.css\" />


  <link rel=\"stylesheet\" href=\"assets/css/slick.css\">
  <link rel=\"stylesheet\" href=\"assets/css/slick-theme.css\">
  <link rel=\"stylesheet\" href=\"assets/css/ducstyle.css\" />
  <link rel=\"stylesheet\" href=\"assets/css/fix.css\">


  ";
        // line 38
        echo $this->env->getExtension('Cms\Twig\Extension')->assetsFunction('css');
        echo $this->env->getExtension('Cms\Twig\Extension')->displayBlock('styles');
        // line 39
        echo "  <script src=\"assets/js/vendor/modernizr-2.8.3-respond-1.4.2.min.js\"></script>
</head>

<body data-spy=\"scroll\" data-target=\".navbar-collapse\" data-offset=\"100\">


  <div class=\"culmn\">

    ";
        // line 47
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("header"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 48
        echo "
    ";
        // line 49
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", []), "title", []) == "Trang chủ")) {
            // line 50
            echo "    ";
            $context['__cms_partial_params'] = [];
            echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("navbar"            , $context['__cms_partial_params']            , true            );
            unset($context['__cms_partial_params']);
            // line 51
            echo "    ";
        }
        // line 52
        echo "
    ";
        // line 53
        echo $this->env->getExtension('Cms\Twig\Extension')->pageFunction();
        // line 54
        echo "
    ";
        // line 55
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("footer"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 56
        echo "  </div>

  <!-- JS includes -->

  <script src=\"assets/js/vendor/jquery-1.11.2.min.js\"></script>
  <script src=\"assets/js/vendor/bootstrap.min.js\"></script>
  <script src=\"assets/lib/jquery-ui/jquery-ui.js\"></script>
  <script src=\"assets/js/wow.min.js\"></script>

  <!-- <script src=\"assets/js/jquery.magnific-popup.js\"></script> -->
  <!--<script src=\"assets/js/jquery.easypiechart.min.js\"></script>-->
  <!-- <script src=\"assets/js/jquery.easing.1.3.js\"></script> -->
  <!-- <script src=\"assets/js/slick.js\"></script> -->
  <script src=\"assets/js/slick.min.js\"></script>
  <script src=\"assets/js/js.isotope.js\"></script>
  <script src=\"assets/js/jquery.collapse.js\"></script>
  <script src=\"assets/lib/rateit/jquery.rateit.js\"></script>
  <!-- <script src=\"assets/js/bootsnav.js\"></script> -->
  <!-- <script src=\"assets/js/lazyload.min.js\"></script> -->

  <!-- <script src=\"assets/js/plugins.js\"></script> -->
  <!-- <script src=\"assets/js/index.js\"></script> -->
  <script src=\"assets/js/ducjsindex.js\"></script>


  ";
        // line 81
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", []), "title", []) != "Trang chủ")) {
            // line 82
            echo "  <script>
  \$('html, body').animate({
      scrollTop: \$('.up_here').offset().top-80
  }, 1000);
  </script>
  ";
        }
        // line 88
        echo "
  <!-- Load Facebook SDK for JavaScript -->
  <div id=\"fb-root\"></div>
  <script>
    (function (d, s, id) {
      var js, fjs = d.getElementsByTagName(s)[0];
      if (d.getElementById(id)) return;
      js = d.createElement(s);
      js.id = id;
      js.src = 'https://connect.facebook.net/vi_VN/sdk/xfbml.customerchat.js';
      fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));
  </script>

  <!-- Your customer chat code -->
  <div class=\"fb-customerchat\" attribution=setup_tool page_id=\"524052388109467\" theme_color=\"#FDDC57\">
  </div>

  <!--Start of Tawk.to Script-->
  <script type=\"text/javascript\">
    var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
    (function(){
    var s1=document.createElement(\"script\"),s0=document.getElementsByTagName(\"script\")[0];
    s1.async=true;
    s1.src='https://embed.tawk.to/5ba1a8b3c9abba579677ae13/default';
    s1.charset='UTF-8';
    s1.setAttribute('crossorigin','*');
    s0.parentNode.insertBefore(s1,s0);
    })();
  </script>
    <!--End of Tawk.to Script-->


    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src=\"https://www.googletagmanager.com/gtag/js?id=UA-138696380-1\"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());

      gtag('config', 'UA-138696380-1');
    </script>
    <!-- End Global site tag (gtag.js) - Google Analytics -->
  ";
        // line 131
        $_minify = System\Classes\CombineAssets::instance()->useMinify;
        if ($_minify) {
            echo '<script src="'. Request::getBasePath()
                    .'/modules/system/assets/js/framework.combined-min.js"></script>'.PHP_EOL;
        }
        else {
            echo '<script src="'. Request::getBasePath()
                    .'/modules/system/assets/js/framework.js"></script>'.PHP_EOL;
            echo '<script src="'. Request::getBasePath()
                    .'/modules/system/assets/js/framework.extras.js"></script>'.PHP_EOL;
        }
        echo '<link rel="stylesheet" property="stylesheet" href="'. Request::getBasePath()
                    .'/modules/system/assets/css/framework.extras'.($_minify ? '-min' : '').'.css">'.PHP_EOL;
        unset($_minify);
        echo $this->env->getExtension('Cms\Twig\Extension')->assetsFunction('js');
        echo $this->env->getExtension('Cms\Twig\Extension')->displayBlock('scripts');
        // line 132
        echo "
</body>

</html>";
    }

    public function getTemplateName()
    {
        return "/var/www/vhosts/420.com.vn/httpdocs/themes/420Hospitality/layouts/Travel365.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  222 => 132,  205 => 131,  160 => 88,  152 => 82,  150 => 81,  123 => 56,  119 => 55,  116 => 54,  114 => 53,  111 => 52,  108 => 51,  103 => 50,  101 => 49,  98 => 48,  94 => 47,  84 => 39,  81 => 38,  69 => 28,  65 => 26,  63 => 25,  47 => 12,  43 => 11,  39 => 10,  34 => 7,  30 => 6,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!doctype html>
<html class=\"no-js\" lang=\"en\">

<head>
  <meta charset=\"utf-8\">
  {% component 'SeoCmsPage' %}
  <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">


  <base href=\"{{' '|theme}}\">
  <base src=\"{{' '|theme}}\">
  <link rel=\"icon\" type=\"image/png\" href=\"{{logo_favicon.path}}\">



  <!-- <link rel=\"stylesheet\" href=\"assets/lib/animate/animate.min.css\"> -->
  <link rel=\"stylesheet\" href=\"assets/lib/bootstrap/bootstrap.min.css\">
  <link rel=\"stylesheet\" href=\"assets/lib/rateit/rateit.css\">
  <link rel=\"stylesheet\" href=\"assets/css2/style.css\">
  <link rel=\"stylesheet\" href=\"assets/css2/all.min.css\">
  <link rel=\"stylesheet\" href=\"assets/lib/jquery-ui/jquery-ui.min.css\">
  <link rel=\"stylesheet\" href=\"assets/css/font-awesome.min.css\">
  <!-- <link rel=\"stylesheet\" href=\"assets/css/Pattaya.css\"> -->

  {%if this.page.title == \"Chi tiết tour\"%}
  <link rel=\"stylesheet\" href=\"assets/lib/datepicker/jquery-ui.css\" />
  {%endif%}

  <link rel=\"stylesheet\" href=\"assets/css/khunganh.css\" />


  <link rel=\"stylesheet\" href=\"assets/css/slick.css\">
  <link rel=\"stylesheet\" href=\"assets/css/slick-theme.css\">
  <link rel=\"stylesheet\" href=\"assets/css/ducstyle.css\" />
  <link rel=\"stylesheet\" href=\"assets/css/fix.css\">


  {% styles %}
  <script src=\"assets/js/vendor/modernizr-2.8.3-respond-1.4.2.min.js\"></script>
</head>

<body data-spy=\"scroll\" data-target=\".navbar-collapse\" data-offset=\"100\">


  <div class=\"culmn\">

    {% partial 'header' %}

    {%if this.page.title == \"Trang chủ\"%}
    {% partial 'navbar' %}
    {%endif%}

    {% page %}

    {% partial 'footer' %}
  </div>

  <!-- JS includes -->

  <script src=\"assets/js/vendor/jquery-1.11.2.min.js\"></script>
  <script src=\"assets/js/vendor/bootstrap.min.js\"></script>
  <script src=\"assets/lib/jquery-ui/jquery-ui.js\"></script>
  <script src=\"assets/js/wow.min.js\"></script>

  <!-- <script src=\"assets/js/jquery.magnific-popup.js\"></script> -->
  <!--<script src=\"assets/js/jquery.easypiechart.min.js\"></script>-->
  <!-- <script src=\"assets/js/jquery.easing.1.3.js\"></script> -->
  <!-- <script src=\"assets/js/slick.js\"></script> -->
  <script src=\"assets/js/slick.min.js\"></script>
  <script src=\"assets/js/js.isotope.js\"></script>
  <script src=\"assets/js/jquery.collapse.js\"></script>
  <script src=\"assets/lib/rateit/jquery.rateit.js\"></script>
  <!-- <script src=\"assets/js/bootsnav.js\"></script> -->
  <!-- <script src=\"assets/js/lazyload.min.js\"></script> -->

  <!-- <script src=\"assets/js/plugins.js\"></script> -->
  <!-- <script src=\"assets/js/index.js\"></script> -->
  <script src=\"assets/js/ducjsindex.js\"></script>


  {%if this.page.title != \"Trang chủ\"%}
  <script>
  \$('html, body').animate({
      scrollTop: \$('.up_here').offset().top-80
  }, 1000);
  </script>
  {%endif%}

  <!-- Load Facebook SDK for JavaScript -->
  <div id=\"fb-root\"></div>
  <script>
    (function (d, s, id) {
      var js, fjs = d.getElementsByTagName(s)[0];
      if (d.getElementById(id)) return;
      js = d.createElement(s);
      js.id = id;
      js.src = 'https://connect.facebook.net/vi_VN/sdk/xfbml.customerchat.js';
      fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));
  </script>

  <!-- Your customer chat code -->
  <div class=\"fb-customerchat\" attribution=setup_tool page_id=\"524052388109467\" theme_color=\"#FDDC57\">
  </div>

  <!--Start of Tawk.to Script-->
  <script type=\"text/javascript\">
    var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
    (function(){
    var s1=document.createElement(\"script\"),s0=document.getElementsByTagName(\"script\")[0];
    s1.async=true;
    s1.src='https://embed.tawk.to/5ba1a8b3c9abba579677ae13/default';
    s1.charset='UTF-8';
    s1.setAttribute('crossorigin','*');
    s0.parentNode.insertBefore(s1,s0);
    })();
  </script>
    <!--End of Tawk.to Script-->


    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src=\"https://www.googletagmanager.com/gtag/js?id=UA-138696380-1\"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());

      gtag('config', 'UA-138696380-1');
    </script>
    <!-- End Global site tag (gtag.js) - Google Analytics -->
  {% framework extras %}{% scripts %}

</body>

</html>", "/var/www/vhosts/420.com.vn/httpdocs/themes/420Hospitality/layouts/Travel365.htm", "");
    }
}

<?php

/* ::backend.html.twig */
class __TwigTemplate_2f7103067ec0a343cc24c6e0f4b013d3f8bbc90be54a88db33f8f30c3484a9b2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::base.html.twig");

        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'menu_opciones' => array($this, 'block_menu_opciones'),
            'active_inicio' => array($this, 'block_active_inicio'),
            'active_tabla_principal' => array($this, 'block_active_tabla_principal'),
            'active_tabla_categoria' => array($this, 'block_active_tabla_categoria'),
            'active_tabla_seguridad' => array($this, 'block_active_tabla_seguridad'),
            'active_tabla_seg_usuario' => array($this, 'block_active_tabla_seg_usuario'),
            'body' => array($this, 'block_body'),
            'titulo_page' => array($this, 'block_titulo_page'),
            'descrip_opcional' => array($this, 'block_descrip_opcional'),
            'level' => array($this, 'block_level'),
            'here' => array($this, 'block_here'),
            'contenido' => array($this, 'block_contenido'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_stylesheets($context, array $blocks = array())
    {
        echo "   
  <!-- Bootstrap 3.3.2 -->
  <link href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl(($this->getAttribute($this->getContext($context, "global"), "directorio_css_bootstrap") . "bootstrap.min.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />
  
  <!-- Font Awesome Icons -->
  <link href=\"https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css\" rel=\"stylesheet\" type=\"text/css\" />
  <!-- Ionicons -->
  <link href=\"http://code.ionicframework.com/ionicons/2.0.0/css/ionicons.min.css\" rel=\"stylesheet\" type=\"text/css\" />

  <!-- Theme style -->
  <link href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl(($this->getAttribute($this->getContext($context, "global"), "directorio_css") . "AdminLTE.min.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />  
  <!-- AdminLTE Skins. We have chosen the skin-blue for this starter
        page. However, you can choose any other skin. Make sure you
        apply the skin class to the body tag so the changes take effect.
  -->
  <link href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl(($this->getAttribute($this->getContext($context, "global"), "directorio_css") . "skins/skin-blue.min.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />  
";
    }

    // line 21
    public function block_menu_opciones($context, array $blocks = array())
    {
        // line 22
        echo "  <li ";
        $this->displayBlock('active_inicio', $context, $blocks);
        echo "><a href=\"";
        echo $this->env->getExtension('routing')->getPath("backend_homepage");
        echo "\"><span>";
        echo "Inicio";
        echo "</span></a></li>
  
  <!-- Tablas Principales -->
  <li ";
        // line 25
        $this->displayBlock('active_tabla_principal', $context, $blocks);
        echo ">
    <a href=\"#\"><span>Tablas Principales</span> <i class=\"fa fa-angle-left pull-right\"></i></a>
    <ul class=\"treeview-menu\">
      <li ";
        // line 28
        $this->displayBlock('active_tabla_categoria', $context, $blocks);
        echo "><a href=\"";
        echo $this->env->getExtension('routing')->getPath("categoria");
        echo "\">";
        echo "Categorías";
        echo "</a></li>      
    </ul>
  </li>
  <!-- Fin Tablas Principales -->

  <!-- Tablas Seguridad -->
  <li ";
        // line 34
        $this->displayBlock('active_tabla_seguridad', $context, $blocks);
        echo ">
    <a href=\"#\"><span>Tablas de Seguridad</span> <i class=\"fa fa-angle-left pull-right\"></i></a>
    <ul class=\"treeview-menu\">
      <li ";
        // line 37
        $this->displayBlock('active_tabla_seg_usuario', $context, $blocks);
        echo "><a href=\"";
        echo $this->env->getExtension('routing')->getPath("categoria");
        echo "\">";
        echo "Usuarios";
        echo "</a></li>      
    </ul>
  </li>
  <!-- Fin Tablas Principales -->
";
    }

    // line 22
    public function block_active_inicio($context, array $blocks = array())
    {
    }

    // line 25
    public function block_active_tabla_principal($context, array $blocks = array())
    {
    }

    // line 28
    public function block_active_tabla_categoria($context, array $blocks = array())
    {
    }

    // line 34
    public function block_active_tabla_seguridad($context, array $blocks = array())
    {
    }

    // line 37
    public function block_active_tabla_seg_usuario($context, array $blocks = array())
    {
    }

    // line 44
    public function block_body($context, array $blocks = array())
    {
        // line 45
        echo "  <!-- Content Header (Page header) -->
  <section class=\"content-header\">
    <h1>
      ";
        // line 48
        $this->displayBlock('titulo_page', $context, $blocks);
        echo "          
      <small>";
        // line 49
        $this->displayBlock('descrip_opcional', $context, $blocks);
        echo "</small>
    </h1>
    <ol class=\"breadcrumb\">
      <li><a href=\"#\"><i class=\"fa fa-dashboard\"></i>";
        // line 52
        $this->displayBlock('level', $context, $blocks);
        echo "</a></li>
      <li class=\"active\">";
        // line 53
        $this->displayBlock('here', $context, $blocks);
        echo "</li>
    </ol>
  </section>

  <!-- Main content -->
  <section class=\"content\">          
    ";
        // line 59
        $this->displayBlock('contenido', $context, $blocks);
        echo "  
  </section><!-- /.content -->
";
    }

    // line 48
    public function block_titulo_page($context, array $blocks = array())
    {
    }

    // line 49
    public function block_descrip_opcional($context, array $blocks = array())
    {
    }

    // line 52
    public function block_level($context, array $blocks = array())
    {
    }

    // line 53
    public function block_here($context, array $blocks = array())
    {
    }

    // line 59
    public function block_contenido($context, array $blocks = array())
    {
    }

    // line 64
    public function block_javascripts($context, array $blocks = array())
    {
        echo "  
  <!-- REQUIRED JS SCRIPTS -->    
    <!-- jQuery 2.1.3 -->    
    <script src=\"";
        // line 67
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl(($this->getAttribute($this->getContext($context, "global"), "directorio_plugins") . "jQuery/jQuery-2.1.3.min.js")), "html", null, true);
        echo "\"></script>
    <!-- Bootstrap 3.3.2 JS -->    
    <script src=\"";
        // line 69
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl(($this->getAttribute($this->getContext($context, "global"), "directorio_js_bootstrap") . "bootstrap.min.js")), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <!-- AdminLTE App -->    
    <script src=\"";
        // line 71
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl(($this->getAttribute($this->getContext($context, "global"), "directorio_js") . "app.min.js")), "html", null, true);
        echo "\" type=\"text/javascript\"></script>    
    <!-- Optionally, you can add Slimscroll and FastClick plugins. 
          Both of these plugins are recommended to enhance the 
          user experience -->   
";
    }

    public function getTemplateName()
    {
        return "::backend.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  229 => 71,  224 => 69,  219 => 67,  212 => 64,  207 => 59,  202 => 53,  197 => 52,  192 => 49,  187 => 48,  180 => 59,  171 => 53,  167 => 52,  161 => 49,  157 => 48,  152 => 45,  149 => 44,  144 => 37,  139 => 34,  134 => 28,  129 => 25,  124 => 22,  111 => 37,  105 => 34,  92 => 28,  86 => 25,  72 => 21,  66 => 18,  80 => 18,  75 => 22,  69 => 15,  63 => 14,  58 => 13,  52 => 10,  47 => 5,  41 => 3,  36 => 4,);
    }
}

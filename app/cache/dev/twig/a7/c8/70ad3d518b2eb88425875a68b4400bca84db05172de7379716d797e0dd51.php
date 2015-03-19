<?php

/* BackendBundle:Categoria:index.html.twig */
class __TwigTemplate_a7c870ad3d518b2eb88425875a68b4400bca84db05172de7379716d797e0dd51 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::backend.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'titulo_page' => array($this, 'block_titulo_page'),
            'descrip_opcional' => array($this, 'block_descrip_opcional'),
            'level' => array($this, 'block_level'),
            'here' => array($this, 'block_here'),
            'active_inicio' => array($this, 'block_active_inicio'),
            'active_tabla_principal' => array($this, 'block_active_tabla_principal'),
            'active_tabla_categoria' => array($this, 'block_active_tabla_categoria'),
            'contenido' => array($this, 'block_contenido'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::backend.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo "Tabla de Categorías";
    }

    // line 5
    public function block_titulo_page($context, array $blocks = array())
    {
        echo "Categorías";
    }

    // line 7
    public function block_descrip_opcional($context, array $blocks = array())
    {
        echo "Tabla de registro de categorías";
        echo ".";
    }

    // line 9
    public function block_level($context, array $blocks = array())
    {
        echo "Tablas Principales";
    }

    // line 11
    public function block_here($context, array $blocks = array())
    {
        echo "Categorías";
    }

    // line 13
    public function block_active_inicio($context, array $blocks = array())
    {
    }

    // line 14
    public function block_active_tabla_principal($context, array $blocks = array())
    {
        echo "class=\"active treeview\"";
    }

    // line 15
    public function block_active_tabla_categoria($context, array $blocks = array())
    {
        echo "class=\"active\"";
    }

    // line 17
    public function block_contenido($context, array $blocks = array())
    {
        // line 18
        echo "<div class=\"row\">\t
\t<div class=\"col-xs-12\">
    <div class=\"box\">

      <div class=\"box-header\">
        <h3 class=\"box-title\">";
        // line 23
        echo "Listado de Categorías";
        echo "</h3>
      </div><!-- /.box-header -->

      <div class=\"box-body\">
        
        <div class=\"form-group\">
          <a href=\"";
        // line 29
        echo $this->env->getExtension('routing')->getPath("categoria_new");
        echo "\" class=\"btn btn-primary btn-md\">
            <i class=\"fa fa-plus\"></i> ";
        // line 30
        echo "Agregar";
        echo "
          </a>                \t
        </div>
        
        <table id=\"example1\" class=\"table table-bordered table-striped\">
          <thead>
            <tr>
              <th>";
        // line 37
        echo "Id";
        echo "</th>
              <th>";
        // line 38
        echo "Categoría";
        echo "</th>
              <th>";
        // line 39
        echo "Estado";
        echo "</th>  
              <th>";
        // line 40
        echo "Acciones";
        echo "</th>                      
            </tr>
          </thead>
          <tbody>
            ";
        // line 44
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "entities"));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            echo "\t
              <tr>
                <td><a href=\"";
            // line 46
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("categoria_show", array("id" => $this->getAttribute($this->getContext($context, "entity"), "id"))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "id"), "html", null, true);
            echo "</a></td>
                <td>";
            // line 47
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "descripcion"), "html", null, true);
            echo "</td>
                <td>
                  ";
            // line 49
            if ($this->getAttribute($this->getContext($context, "entity"), "activo")) {
                echo "  
                    <span class=\"label label-success\">";
                // line 50
                echo "Activo";
                echo "</span>
                  ";
            } else {
                // line 51
                echo "                 
                    <span class=\"label label-danger\">";
                // line 52
                echo "Inactivo";
                echo "</span>
                  ";
            }
            // line 53
            echo "                 
                </td>  
                <td>                        \t                        \t
                  <a href=\"";
            // line 56
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("categoria_show", array("id" => $this->getAttribute($this->getContext($context, "entity"), "id"))), "html", null, true);
            echo "\" class=\"btn btn-info btn-sm\" title=\"Ver\"><i class=\"fa fa-eye\"></i></a>
                  <a href=\"";
            // line 57
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("categoria_edit", array("id" => $this->getAttribute($this->getContext($context, "entity"), "id"))), "html", null, true);
            echo "\" class=\"btn btn-warning btn-sm\" title=\"Editar\"><i class=\"fa fa-pencil\"></i></a>
                  <a href=\"";
            // line 58
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("categoria_show", array("id" => $this->getAttribute($this->getContext($context, "entity"), "id"))), "html", null, true);
            echo "\" class=\"btn btn-danger btn-sm\" title=\"Eliminar\"><i class=\"fa fa-times\"></i></a>
                </td>                      
              </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 61
        echo "                 
        \t<tbody>
        \t<tfoot>
            <tr>
              <th>";
        // line 65
        echo "Id";
        echo "</th>
              <th>";
        // line 66
        echo "Categoría";
        echo "</th>
              <th>";
        // line 67
        echo "Estado";
        echo "</th>  
              <th>";
        // line 68
        echo "Acciones";
        echo "</th> 
            </tr>
          </tfoot>\t
        </table>\t  \t
        \t  
      </div>\t\t\t  
    \t   
    </div>                  
  </div>
</div>\t
";
    }

    // line 81
    public function block_javascripts($context, array $blocks = array())
    {
        echo "  
  <!-- REQUIRED JS SCRIPTS -->    
    ";
        // line 83
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "

\t<!-- DATA TABES SCRIPT -->
    <script src=\"";
        // line 86
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl(($this->getAttribute($this->getContext($context, "global"), "directorio_plugins") . "datatables/jquery.dataTables.js")), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <script src=\"";
        // line 87
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl(($this->getAttribute($this->getContext($context, "global"), "directorio_plugins") . "datatables/dataTables.bootstrap.js")), "html", null, true);
        echo "\" type=\"text/javascript\"></script>

    <!-- SlimScroll -->
    <script src=\"";
        // line 90
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl(($this->getAttribute($this->getContext($context, "global"), "directorio_plugins") . "slimScroll/jquery.slimscroll.min.js")), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <!-- FastClick -->
    <script src=\"";
        // line 92
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl(($this->getAttribute($this->getContext($context, "global"), "directorio_plugins") . "fastclick/fastclick.min.js")), "html", null, true);
        echo "\"></script>
    <!-- AdminLTE for demo purposes -->
    ";
        // line 95
        echo "    
    <!-- page script -->
    <script type=\"text/javascript\">
      \$(function () {
        \$(\"#example1\").dataTable();
        \$('#example2').dataTable({
          \"bPaginate\": true,
          \"bLengthChange\": false,
          \"bFilter\": false,
          \"bSort\": true,
          \"bInfo\": true,
          \"bAutoWidth\": false
        });
      });
    </script>          
";
    }

    public function getTemplateName()
    {
        return "BackendBundle:Categoria:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  260 => 95,  255 => 92,  250 => 90,  244 => 87,  240 => 86,  234 => 83,  228 => 81,  213 => 68,  209 => 67,  205 => 66,  201 => 65,  195 => 61,  185 => 58,  181 => 57,  177 => 56,  172 => 53,  167 => 52,  164 => 51,  159 => 50,  155 => 49,  150 => 47,  144 => 46,  137 => 44,  130 => 40,  126 => 39,  122 => 38,  118 => 37,  108 => 30,  104 => 29,  95 => 23,  88 => 18,  85 => 17,  79 => 15,  73 => 14,  68 => 13,  62 => 11,  56 => 9,  49 => 7,  43 => 5,  37 => 3,);
    }
}

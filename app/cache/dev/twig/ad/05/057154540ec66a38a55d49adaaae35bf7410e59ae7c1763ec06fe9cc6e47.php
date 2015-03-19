<?php

/* BackendBundle:Categoria:show.html.twig */
class __TwigTemplate_ad05057154540ec66a38a55d49adaaae35bf7410e59ae7c1763ec06fe9cc6e47 extends Twig_Template
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
        echo " - ";
        echo "Detalle";
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
        echo "<div class=\"row\">   
    <!-- left column -->
    <div class=\"col-xs-6 col-sm-6 col-md-6 col-lg-6\">
        <!-- general form elements -->
        <div class=\"box box-primary col-xs-12 col-sm-12 col-md-12 col-lg-12\">
            ";
        // line 23
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "app"), "session"), "flashbag"), "get", array(0 => "info"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 24
            echo "                <div class=\"alert alert-success\">
                    <span class=\"glyphicon glyphicon-ok\"></span> ";
            // line 25
            echo twig_escape_filter($this->env, $this->getContext($context, "flashMessage"), "html", null, true);
            echo "
                </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 28
        echo "            <div class=\"box-header\">
                <h3 class=\"box-title\">";
        // line 29
        echo "Detalle";
        echo "</h3>
            </div><!-- /.box-header -->
            <!-- form start -->
            <form role=\"form\">
                <div class=\"box-body\">
                    <div class=\"form-group\">
                      <label>";
        // line 35
        echo "Id";
        echo "</label>
                      <input class=\"form-control\" value=\"";
        // line 36
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "id"), "html", null, true);
        echo "\" disabled>
                    </div>
                    
                    <div class=\"form-group\">
                      <label>";
        // line 40
        echo "Descripción";
        echo "</label>
                      <input class=\"form-control\" value=\"";
        // line 41
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "descripcion"), "html", null, true);
        echo "\" disabled>
                    </div>

                    <div class=\"form-group\">
                        <label>";
        // line 45
        echo "Estado";
        echo ":</label>
                        ";
        // line 46
        if ($this->getAttribute($this->getContext($context, "entity"), "activo")) {
            echo "  
                            <span class=\"label label-success\">";
            // line 47
            echo "Activo";
            echo "</span>
                        ";
        } else {
            // line 48
            echo "                 
                            <span class=\"label label-danger\">";
            // line 49
            echo "Inactivo";
            echo "</span>
                        ";
        }
        // line 50
        echo "   
                    </div>

                    <div class=\"form-group col-xs-6 col-sm-6 col-md-6 col-lg-6\">
                      <label>";
        // line 54
        echo "Fch.Creado";
        echo "</label>
                      <input class=\"form-control\" value=\"";
        // line 55
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "fchCreate"), "d-m-Y H:i"), "html", null, true);
        echo "\" disabled>
                    </div>

                    <div class=\"form-group col-xs-6 col-sm-6 col-md-6 col-lg-6\">
                      <label>";
        // line 59
        echo "Usr.Creado";
        echo "</label>
                      <input class=\"form-control\" value=\"";
        // line 60
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "usrCreate"), "html", null, true);
        echo "\" disabled>
                    </div>

                    <div class=\"form-group col-xs-6 col-sm-6 col-md-6 col-lg-6\">
                      <label>";
        // line 64
        echo "Fch.Ult.Act";
        echo "</label>
                      <input class=\"form-control\" value=\"";
        // line 65
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "fchUpdate"), "d-m-Y H:i"), "html", null, true);
        echo "\" disabled>
                    </div>

                    <div class=\"form-group col-xs-6 col-sm-6 col-md-6 col-lg-6\">
                      <label>";
        // line 69
        echo "Usr.Ult.Act";
        echo "</label>
                      <input class=\"form-control\" value=\"";
        // line 70
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "usrUpdate"), "html", null, true);
        echo "\" disabled>
                    </div>
                </div><!-- /.box-body -->

                <div class=\"box-footer col-xs-12 col-sm-12 col-md-12 col-lg-12\">

                    <div class=\"form-group col-xs-4 col-sm-3 col-md-4 col-lg-3\">
                        <a href=\"";
        // line 77
        echo $this->env->getExtension('routing')->getPath("categoria");
        echo "\" class=\"btn btn-primary btn-md\" title=\"";
        echo "Listado";
        echo "\"><span class=\"glyphicon glyphicon-th-list\"></span> ";
        echo "Listado";
        echo "</a>
                    </div>

                    <div class=\"form-group col-xs-4 col-sm-3 col-md-4 col-lg-3\">
                        <a href=\"";
        // line 81
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("categoria_edit", array("id" => $this->getAttribute($this->getContext($context, "entity"), "id"))), "html", null, true);
        echo "\" class=\"btn btn-warning btn-md\" title=\"";
        echo "Editar";
        echo "\"><span class=\"glyphicon glyphicon-edit\"></span> ";
        echo "Editar";
        echo "</a>
                    </div>

                    <div class=\"form-group col-xs-4 col-sm-3 col-md-4 col-lg-3\">
                        <button type=\"reset\" class=\"btn btn-danger btn-md\" data-toggle=\"modal\" data-target=\"#myModal\">
                            <span class=\"glyphicon glyphicon-remove\"></span> ";
        // line 86
        echo "Eliminar";
        echo "
                        </button>      
                    </div>

                </div>
            </form>
        </div><!-- /.box -->
    </div>  
</div>  

<!-- Modal -->
<div class=\"modal fade\" id=\"myModal\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\" aria-hidden=\"true\">
  <div class=\"modal-dialog\">
    <div class=\"modal-content\">
      <div class=\"modal-header\">
        <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">&times;</button>
        <h4 class=\"modal-title\" id=\"myModalLabel\"><span class=\"glyphicon glyphicon-list-alt text-info\"></span> ";
        // line 102
        echo "Tabla de Categorías";
        echo " - <span class=\"glyphicon glyphicon-remove\"></span>";
        echo "Eliminar";
        echo "</h4>
      </div>
      <div class=\"modal-body\">
        <p><label>";
        // line 105
        echo "Id";
        echo ":</label> ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "id"), "html", null, true);
        echo "</p>
        <p><label>";
        // line 106
        echo "Categoría";
        echo ":</label> ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "descripcion"), "html", null, true);
        echo "</p>        
      </div>
      <div class=\"modal-footer\">
        ";
        // line 109
        echo         $this->env->getExtension('form')->renderer->renderBlock($this->getContext($context, "delete_form"), 'form_start');
        echo "
        <button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\">";
        // line 110
        echo "Cerrar";
        echo "</button>     
        ";
        // line 111
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "delete_form"), "submit"), 'widget', array("attr" => array("class" => "btn btn-danger")));
        echo "
        ";
        // line 112
        echo         $this->env->getExtension('form')->renderer->renderBlock($this->getContext($context, "delete_form"), 'form_end');
        echo "              
      </div>
    </div>
  </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "BackendBundle:Categoria:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  296 => 112,  292 => 111,  288 => 110,  284 => 109,  276 => 106,  270 => 105,  262 => 102,  243 => 86,  231 => 81,  220 => 77,  210 => 70,  206 => 69,  199 => 65,  195 => 64,  188 => 60,  184 => 59,  177 => 55,  173 => 54,  167 => 50,  162 => 49,  159 => 48,  154 => 47,  150 => 46,  146 => 45,  139 => 41,  135 => 40,  128 => 36,  124 => 35,  115 => 29,  112 => 28,  103 => 25,  100 => 24,  96 => 23,  89 => 18,  86 => 17,  80 => 15,  74 => 14,  69 => 13,  63 => 11,  57 => 9,  50 => 7,  44 => 5,  36 => 3,);
    }
}

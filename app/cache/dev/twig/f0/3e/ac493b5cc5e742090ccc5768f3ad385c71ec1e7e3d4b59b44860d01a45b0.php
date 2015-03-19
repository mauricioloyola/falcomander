<?php

/* BackendBundle:Categoria:new.html.twig */
class __TwigTemplate_f03eac493b5cc5e742090ccc5768f3ad385c71ec1e7e3d4b59b44860d01a45b0 extends Twig_Template
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
        echo "Nuevo";
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
\t<!-- left column -->
  <div class=\"col-md-6\">
    <!-- general form elements -->
    <div class=\"box box-primary\">
      <div class=\"box-header\">
        <h3 class=\"box-title\">";
        // line 24
        echo "Agregar";
        echo "</h3>
      </div><!-- /.box-header -->
      
      ";
        // line 27
        echo         $this->env->getExtension('form')->renderer->renderBlock($this->getContext($context, "form"), 'form_start', array("attr" => array("role" => "form")));
        echo "
      <div class=\"box-body\">
        
     
        ";
        // line 31
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getContext($context, "form"), 'errors');
        echo " 

        <div class=\"form-group\">              
          ";
        // line 34
        if (($this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "descripcion"), 'errors') == "")) {
            // line 35
            echo "          
          ";
        } else {
            // line 36
            echo " 
            <div class=\"alert alert-danger\">";
            // line 37
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "descripcion"), 'errors');
            echo "</div>   
          ";
        }
        // line 38
        echo "                        
          ";
        // line 39
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "descripcion"), 'label');
        echo "
          ";
        // line 40
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "descripcion"), 'widget');
        echo "
          ";
        // line 42
        echo "        </div>

        <div class=\"form-group\">              
          ";
        // line 45
        if (($this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "activo"), 'errors') == "")) {
            // line 46
            echo "          
          ";
        } else {
            // line 47
            echo " 
            <div class=\"alert alert-danger\">";
            // line 48
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "activo"), 'errors');
            echo "</div>   
          ";
        }
        // line 49
        echo "                        
          
          ";
        // line 51
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "activo"), 'widget');
        echo "
          ";
        // line 52
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "activo"), 'label');
        echo "          
        </div>
      </div><!-- /.box-body -->
      
      <div class=\"box-footer col-xs-12 col-sm-12 col-md-12 col-lg-12\">

        <div class=\"form-group col-xs-4 col-sm-3 col-md-4 col-lg-3\">
          <a href=\"";
        // line 59
        echo $this->env->getExtension('routing')->getPath("categoria");
        echo "\" class=\"btn btn-primary btn-md\" title=\"";
        echo "Regresar";
        echo "\"><span class=\"glyphicon glyphicon-th-list\"></span>";
        echo "Listado";
        echo "</a>
        </div>

        <div class=\"form-group col-xs-4 col-sm-3 col-md-4 col-lg-3\">
          <button type=\"submit\" class=\"btn btn-success btn-md\">
            <span class=\"glyphicon glyphicon-ok\"></span> ";
        // line 64
        echo "Agregar";
        echo "
          </button>                    
        </div>        
        
        <div class=\"form-group col-xs-4 col-sm-3 col-md-4 col-lg-3\">
          <button type=\"reset\" class=\"btn btn-danger btn-md\">
            <span class=\"glyphicon glyphicon-refresh\"></span>";
        // line 70
        echo "Cancelar";
        echo "
          </button>      
        </div>

      </div>
      ";
        // line 75
        echo         $this->env->getExtension('form')->renderer->renderBlock($this->getContext($context, "form"), 'form_end');
        echo "
    </div><!-- /.box -->
</div>\t
</div>  
";
    }

    public function getTemplateName()
    {
        return "BackendBundle:Categoria:new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  207 => 75,  199 => 70,  190 => 64,  178 => 59,  168 => 52,  164 => 51,  160 => 49,  155 => 48,  152 => 47,  148 => 46,  146 => 45,  141 => 42,  137 => 40,  133 => 39,  130 => 38,  125 => 37,  122 => 36,  118 => 35,  116 => 34,  110 => 31,  103 => 27,  97 => 24,  89 => 18,  86 => 17,  80 => 15,  74 => 14,  69 => 13,  63 => 11,  57 => 9,  50 => 7,  44 => 5,  36 => 3,);
    }
}

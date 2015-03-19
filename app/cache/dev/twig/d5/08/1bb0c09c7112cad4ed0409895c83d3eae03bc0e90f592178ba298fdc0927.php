<?php

/* BackendBundle:Categoria:edit.html.twig */
class __TwigTemplate_d5081bb0c09c7112cad4ed0409895c83d3eae03bc0e90f592178ba298fdc0927 extends Twig_Template
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
        echo "Editar";
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
        echo "Editar";
        echo "</h3>
      </div><!-- /.box-header -->
      
      ";
        // line 27
        echo         $this->env->getExtension('form')->renderer->renderBlock($this->getContext($context, "edit_form"), 'form_start', array("attr" => array("role" => "form")));
        echo "
      <div class=\"box-body\">
        
        ";
        // line 30
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getContext($context, "edit_form"), 'errors');
        echo " 

        <div class=\"form-group\">              
          ";
        // line 33
        if (($this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "edit_form"), "descripcion"), 'errors') == "")) {
            // line 34
            echo "          
          ";
        } else {
            // line 35
            echo " 
            <div class=\"alert alert-danger\">";
            // line 36
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "edit_form"), "descripcion"), 'errors');
            echo "</div>   
          ";
        }
        // line 37
        echo "                        
          ";
        // line 38
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "edit_form"), "descripcion"), 'label');
        echo "
          ";
        // line 39
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "edit_form"), "descripcion"), 'widget');
        echo "
          ";
        // line 41
        echo "        </div>

        <div class=\"form-group\">              
          ";
        // line 44
        if (($this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "edit_form"), "activo"), 'errors') == "")) {
            // line 45
            echo "          
          ";
        } else {
            // line 46
            echo " 
            <div class=\"alert alert-danger\">";
            // line 47
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "edit_form"), "activo"), 'errors');
            echo "</div>   
          ";
        }
        // line 48
        echo "                        
          
          ";
        // line 50
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "edit_form"), "activo"), 'widget');
        echo "
          ";
        // line 51
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "edit_form"), "activo"), 'label');
        echo "          
        </div>
      </div><!-- /.box-body -->
      
      <div class=\"box-footer col-xs-12 col-sm-12 col-md-12 col-lg-12\">

        <div class=\"form-group col-xs-4 col-sm-3 col-md-4 col-lg-3\">
          <a href=\"";
        // line 58
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
        // line 63
        echo "Guardar";
        echo "
          </button>                    
        </div>        
        
        <div class=\"form-group col-xs-4 col-sm-3 col-md-4 col-lg-3\">
          <button type=\"reset\" class=\"btn btn-danger btn-md\">
            <span class=\"glyphicon glyphicon-refresh\"></span>";
        // line 69
        echo "Cancelar";
        echo "
          </button>      
        </div>

      </div>
      ";
        // line 74
        echo         $this->env->getExtension('form')->renderer->renderBlock($this->getContext($context, "edit_form"), 'form_end');
        echo "
    </div><!-- /.box -->
</div>\t
</div>  
";
    }

    public function getTemplateName()
    {
        return "BackendBundle:Categoria:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  206 => 74,  198 => 69,  189 => 63,  177 => 58,  167 => 51,  163 => 50,  159 => 48,  154 => 47,  151 => 46,  147 => 45,  145 => 44,  140 => 41,  136 => 39,  132 => 38,  129 => 37,  124 => 36,  121 => 35,  117 => 34,  115 => 33,  109 => 30,  103 => 27,  97 => 24,  89 => 18,  86 => 17,  80 => 15,  74 => 14,  69 => 13,  63 => 11,  57 => 9,  50 => 7,  44 => 5,  36 => 3,);
    }
}

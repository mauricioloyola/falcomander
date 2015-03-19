<?php

/* BackendBundle:Default:index.html.twig */
class __TwigTemplate_55089f32993633921dc7cfb4dc03b968a2cf88056dd4b07911141f36c3508a6e extends Twig_Template
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

    // line 4
    public function block_title($context, array $blocks = array())
    {
        echo "Bienvenido";
    }

    // line 6
    public function block_titulo_page($context, array $blocks = array())
    {
        echo "Inicio";
    }

    // line 8
    public function block_descrip_opcional($context, array $blocks = array())
    {
    }

    // line 10
    public function block_level($context, array $blocks = array())
    {
        echo "Inicio";
    }

    // line 12
    public function block_here($context, array $blocks = array())
    {
    }

    // line 14
    public function block_active_inicio($context, array $blocks = array())
    {
        echo "class=\"active\"";
    }

    // line 15
    public function block_active_tabla_principal($context, array $blocks = array())
    {
        echo "class=\"treeview\"";
    }

    // line 16
    public function block_active_tabla_categoria($context, array $blocks = array())
    {
    }

    // line 18
    public function block_contenido($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "BackendBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  81 => 18,  76 => 16,  70 => 15,  64 => 14,  59 => 12,  53 => 10,  48 => 8,  42 => 6,  36 => 4,);
    }
}

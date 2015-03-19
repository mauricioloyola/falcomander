<?php

/* AppBundle:Default:index.html.twig */
class __TwigTemplate_18d205eaea2d3bc0ab9b76e3393cca692429cb6cf3557c3693e7c2424eefeaff extends Twig_Template
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
        return "AppBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  80 => 18,  75 => 16,  69 => 15,  63 => 14,  58 => 12,  52 => 10,  47 => 8,  41 => 6,  36 => 4,);
    }
}

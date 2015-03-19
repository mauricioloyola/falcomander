<?php

/* ::base.html.twig */
class __TwigTemplate_84397aeda14a3664d0b5f2168a6c00b5dd592f089b9fcc9a56059899f8b5ed4c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'metadesc' => array($this, 'block_metadesc'),
            'metaetiq' => array($this, 'block_metaetiq'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'menu_opciones' => array($this, 'block_menu_opciones'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>       
        <title>";
        // line 4
        $this->displayBlock('title', $context, $blocks);
        echo " - ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "global"), "name_web"), "html", null, true);
        echo "</title>        
        <meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\" />        
        <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge,chrome=1\">
        <meta content=\"width=device-width, initial-scale=1.0\" name=\"viewport\">        
        <meta content=\"";
        // line 8
        $this->displayBlock('metadesc', $context, $blocks);
        echo "\" name=\"description\" />
        <meta content=\"";
        // line 9
        $this->displayBlock('metaetiq', $context, $blocks);
        echo "\" name=\"keywords\" />                
        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />        

        ";
        // line 12
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 13
        echo "       
       <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src=\"https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js\"></script>
        <script src=\"https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js\"></script>
        <![endif]-->
       
    </head>

    <body class=\"skin-blue\">
      <div class=\"wrapper\">
        <!-- Main Header -->
        <header class=\"main-header\">
          <!-- Logo -->
          <a href=\"";
        // line 28
        echo $this->env->getExtension('routing')->getPath("backend_homepage");
        echo "\" class=\"logo\"><b>Y tú que estudias?</b></a>

          <!-- Header Navbar -->
          <nav class=\"navbar navbar-static-top\" role=\"navigation\">
            <!-- Sidebar toggle button-->
            <a href=\"#\" class=\"sidebar-toggle\" data-toggle=\"offcanvas\" role=\"button\">
              <span class=\"sr-only\">Toggle navigation</span>
            </a>
            <!-- Navbar Right Menu -->
            <div class=\"navbar-custom-menu\">
              <ul class=\"nav navbar-nav\">
                <!-- Messages: style can be found in dropdown.less-->
                <li class=\"dropdown messages-menu\">
                  <!-- Menu toggle button -->
                  <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">
                    <i class=\"fa fa-envelope-o\"></i>
                    <span class=\"label label-success\">4</span>
                  </a>
                  <ul class=\"dropdown-menu\">
                    <li class=\"header\">You have 4 messages</li>
                    <li>
                      <!-- inner menu: contains the messages -->
                      <ul class=\"menu\">
                        <li><!-- start message -->
                          <a href=\"#\">
                            <div class=\"pull-left\">
                              <!-- User Image -->
                              <img src=\"";
        // line 55
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl(($this->getAttribute($this->getContext($context, "global"), "directorio_dist_img") . "user2-160x160.jpg")), "html", null, true);
        echo "\" class=\"img-circle\" alt=\"User Image\"/>
                            </div>
                            <!-- Message title and timestamp -->
                            <h4>                            
                              Support Team
                              <small><i class=\"fa fa-clock-o\"></i> 5 mins</small>
                            </h4>
                            <!-- The message -->
                            <p>Why not buy a new awesome theme?</p>
                          </a>
                        </li><!-- end message -->                      
                      </ul><!-- /.menu -->
                    </li>
                    <li class=\"footer\"><a href=\"#\">See All Messages</a></li>
                  </ul>
                </li><!-- /.messages-menu -->

                <!-- Notifications Menu -->
                <li class=\"dropdown notifications-menu\">
                  <!-- Menu toggle button -->
                  <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">
                    <i class=\"fa fa-bell-o\"></i>
                    <span class=\"label label-warning\">10</span>
                  </a>
                  <ul class=\"dropdown-menu\">
                    <li class=\"header\">You have 10 notifications</li>
                    <li>
                      <!-- Inner Menu: contains the notifications -->
                      <ul class=\"menu\">
                        <li><!-- start notification -->
                          <a href=\"#\">
                            <i class=\"fa fa-users text-aqua\"></i> 5 new members joined today
                          </a>
                        </li><!-- end notification -->                      
                      </ul>
                    </li>
                    <li class=\"footer\"><a href=\"#\">View all</a></li>
                  </ul>
                </li>
                <!-- Tasks Menu -->
                <li class=\"dropdown tasks-menu\">
                  <!-- Menu Toggle Button -->
                  <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">
                    <i class=\"fa fa-flag-o\"></i>
                    <span class=\"label label-danger\">9</span>
                  </a>
                  <ul class=\"dropdown-menu\">
                    <li class=\"header\">You have 9 tasks</li>
                    <li>
                      <!-- Inner menu: contains the tasks -->
                      <ul class=\"menu\">
                        <li><!-- Task item -->
                          <a href=\"#\">
                            <!-- Task title and progress text -->
                            <h3>
                              Design some buttons
                              <small class=\"pull-right\">20%</small>
                            </h3>
                            <!-- The progress bar -->
                            <div class=\"progress xs\">
                              <!-- Change the css width attribute to simulate progress -->
                              <div class=\"progress-bar progress-bar-aqua\" style=\"width: 20%\" role=\"progressbar\" aria-valuenow=\"20\" aria-valuemin=\"0\" aria-valuemax=\"100\">
                                <span class=\"sr-only\">20% Complete</span>
                              </div>
                            </div>
                          </a>
                        </li><!-- end task item -->                      
                      </ul>
                    </li>
                    <li class=\"footer\">
                      <a href=\"#\">View all tasks</a>
                    </li>
                  </ul>
                </li>
                <!-- User Account Menu -->
                <li class=\"dropdown user user-menu\">
                  <!-- Menu Toggle Button -->
                  <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">
                    <!-- The user image in the navbar-->
                    <img src=\"";
        // line 134
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl(($this->getAttribute($this->getContext($context, "global"), "directorio_dist_img") . "user2-160x160.jpg")), "html", null, true);
        echo "\" class=\"user-image\" alt=\"User Image\"/>
                  <!-- hidden-xs hides the username on small devices so only the image appears. -->
                    <span class=\"hidden-xs\">Mauricio Loyola</span>
                  </a>
                  <ul class=\"dropdown-menu\">
                    <!-- The user image in the menu -->
                    <li class=\"user-header\">
                      <img src=\"bundles/backend/dist/img/user2-160x160.jpg\" class=\"img-circle\" alt=\"User Image\" />
                      <p>
                        Mauricio Loyola - Web Developer
                        <small>Member since Nov. 2012</small>
                      </p>
                    </li>
                    <!-- Menu Body -->
                    <li class=\"user-body\">
                      <div class=\"col-xs-4 text-center\">
                        <a href=\"#\">Followers</a>
                      </div>
                      <div class=\"col-xs-4 text-center\">
                        <a href=\"#\">Sales</a>
                      </div>
                      <div class=\"col-xs-4 text-center\">
                        <a href=\"#\">Friends</a>
                      </div>
                    </li>
                    <!-- Menu Footer-->
                    <li class=\"user-footer\">
                      <div class=\"pull-left\">
                        <a href=\"#\" class=\"btn btn-default btn-flat\">Profile</a>
                      </div>
                      <div class=\"pull-right\">
                        <a href=\"#\" class=\"btn btn-default btn-flat\">Sign out</a>
                      </div>
                    </li>
                  </ul>
                </li>
              </ul>
            </div>
          </nav>
        </header>
        
        <!-- Left side column. contains the logo and sidebar -->
      <aside class=\"main-sidebar\">

        <!-- sidebar: style can be found in sidebar.less -->
        <section class=\"sidebar\">

          <!-- Sidebar user panel (optional) -->
          <div class=\"user-panel\">
            <div class=\"pull-left image\">
              <img src=\"";
        // line 184
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl(($this->getAttribute($this->getContext($context, "global"), "directorio_dist_img") . "user2-160x160.jpg")), "html", null, true);
        echo "\" class=\"img-circle\" alt=\"User Image\" />
            </div>
            <div class=\"pull-left info\">
              <p>Mauricio Loyola</p>
              <!-- Status -->
              <a href=\"#\"><i class=\"fa fa-circle text-success\"></i> Online</a>
            </div>
          </div>

          <!-- Sidebar Menu -->
          <ul class=\"sidebar-menu\">
            <li class=\"header\">PANEL DE ADMINISTRACION</li>
            <!-- Optionally, you can add icons to the links -->
            ";
        // line 197
        $this->displayBlock('menu_opciones', $context, $blocks);
        echo "            
          </ul><!-- /.sidebar-menu -->
        </section>
        <!-- /.sidebar -->
      </aside>
            
      <!-- Content Wrapper. Contains page content -->
      <div class=\"content-wrapper\">
        ";
        // line 205
        $this->displayBlock('body', $context, $blocks);
        echo "          
      </div><!-- /.content-wrapper -->
            
        <!-- Main Footer -->
        <footer class=\"main-footer\">
          <!-- To the right -->
          <div class=\"pull-right hidden-xs\">Version 1.0</div>
          <!-- Default to the left --> 
          <strong>Copyright &copy; 2015 <a href=\"#\">Y tú que estudias?</a>.</strong> All rights reserved.
        </footer>
        
      </div><!-- ./wrapper -->  

      ";
        // line 218
        $this->displayBlock('javascripts', $context, $blocks);
        // line 219
        echo "    </body>

</html>";
    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
    }

    // line 8
    public function block_metadesc($context, array $blocks = array())
    {
        echo " ";
    }

    // line 9
    public function block_metaetiq($context, array $blocks = array())
    {
        echo " ";
    }

    // line 12
    public function block_stylesheets($context, array $blocks = array())
    {
    }

    // line 197
    public function block_menu_opciones($context, array $blocks = array())
    {
    }

    // line 205
    public function block_body($context, array $blocks = array())
    {
    }

    // line 218
    public function block_javascripts($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  320 => 218,  315 => 205,  310 => 197,  305 => 12,  299 => 9,  293 => 8,  288 => 4,  282 => 219,  280 => 218,  264 => 205,  253 => 197,  237 => 184,  102 => 55,  72 => 28,  55 => 13,  44 => 9,  40 => 8,  31 => 4,  26 => 1,  194 => 62,  189 => 60,  184 => 134,  177 => 55,  172 => 50,  167 => 44,  162 => 43,  157 => 40,  152 => 39,  145 => 50,  136 => 44,  132 => 43,  126 => 40,  122 => 39,  117 => 36,  114 => 35,  109 => 27,  104 => 24,  99 => 22,  87 => 27,  73 => 22,  56 => 13,  45 => 5,  39 => 3,  81 => 24,  76 => 16,  70 => 21,  64 => 18,  59 => 12,  53 => 12,  48 => 10,  42 => 6,  36 => 4,);
    }
}

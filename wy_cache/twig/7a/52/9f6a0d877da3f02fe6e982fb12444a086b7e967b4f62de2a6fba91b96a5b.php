<?php

/* index.html */
class __TwigTemplate_7a529f6a0d877da3f02fe6e982fb12444a086b7e967b4f62de2a6fba91b96a5b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<!--
    Copyright 2013 root <root@wayang-cms.org>

    This program is free software; you can redistribute it and/or
    modify it under the terms of the GNU General Public License
    as published by the Free Software Foundation; either version 2
    of the License, or (at your option) any later version.

    This program is distributed in the hope that it will be useful,
    but WITHOUT ANY WARRANTY; without even the implied warranty of
    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
    GNU General Public License for more details.

    You should have received a copy of the GNU General Public License
    along with this program; if not, write to the Free Software
    Foundation, Inc., 59 Temple Place - Suite 330, Boston, MA  02111-1307, USA.
-->
<html>

<head>

    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">

    <title>Wayang CMS | Dashboard</title>

    <!-- Core CSS - Include with every page -->
    <link href=\"";
        // line 29
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "/wy_assets/admin/css/bootstrap.min.css\" rel=\"stylesheet\">
    <link href=\"";
        // line 30
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "/wy_assets/admin/font-awesome/css/font-awesome.css\" rel=\"stylesheet\">

    <!-- Page-Level Plugin CSS - Dashboard -->
    <link href=\"";
        // line 33
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "/wy_assets/admin/css/plugins/morris/morris-0.4.3.min.css\" rel=\"stylesheet\">
    <link href=\"";
        // line 34
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "/wy_assets/admin/css/plugins/timeline/timeline.css\" rel=\"stylesheet\">
    <!-- Page-Level Plugin CSS - Tables -->
    <link href=\"";
        // line 36
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "/wy_assets/admin/css/plugins/dataTables/dataTables.bootstrap.css\" rel=\"stylesheet\">
    <!-- SB Admin CSS - Include with every page -->
    <link href=\"";
        // line 38
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "/wy_assets/admin/css/sb-admin.css\" rel=\"stylesheet\">
    <!-- ckeditor have to load first -->
    <script type=\"text/javascript\" src=\"";
        // line 40
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "/wy_assets/admin/ckeditor/ckeditor.js\"></script>

</head>

<body>

    <div id=\"wrapper\">

        <nav class=\"navbar navbar-default navbar-static-top\" role=\"navigation\" style=\"margin-bottom: 0\">
            <div class=\"navbar-header\">
                <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\".sidebar-collapse\">
                    <span class=\"sr-only\">Toggle navigation</span>
                    <span class=\"icon-bar\"></span>
                    <span class=\"icon-bar\"></span>
                    <span class=\"icon-bar\"></span>
                </button>
                <a class=\"navbar-brand\" href=\"index\">Wayang CMS Administration</a>
            </div>
            <!-- /.navbar-header -->

            <ul class=\"nav navbar-top-links navbar-right\">
                <li class=\"dropdown\">
                    <a class=\"dropdown-toggle\" data-toggle=\"dropdown\" href=\"#\">
                        <i class=\"fa fa-envelope fa-fw\"></i>  <i class=\"fa fa-caret-down\"></i>
                    </a>
                    <ul class=\"dropdown-menu dropdown-messages\">
                        <li>
                            <a href=\"#\">
                                <div>
                                    <strong>John Smith</strong>
                                    <span class=\"pull-right text-muted\">
                                        <em>Yesterday</em>
                                    </span>
                                </div>
                                <div>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque eleifend...</div>
                            </a>
                        </li>
                        <li class=\"divider\"></li>
                        <li>
                            <a href=\"#\">
                                <div>
                                    <strong>John Smith</strong>
                                    <span class=\"pull-right text-muted\">
                                        <em>Yesterday</em>
                                    </span>
                                </div>
                                <div>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque eleifend...</div>
                            </a>
                        </li>
                        <li class=\"divider\"></li>
                        <li>
                            <a href=\"#\">
                                <div>
                                    <strong>John Smith</strong>
                                    <span class=\"pull-right text-muted\">
                                        <em>Yesterday</em>
                                    </span>
                                </div>
                                <div>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque eleifend...</div>
                            </a>
                        </li>
                        <li class=\"divider\"></li>
                        <li>
                            <a class=\"text-center\" href=\"#\">
                                <strong>Read All Messages</strong>
                                <i class=\"fa fa-angle-right\"></i>
                            </a>
                        </li>
                    </ul>
                    <!-- /.dropdown-messages -->
                </li>
                <!-- /.dropdown -->
                <li class=\"dropdown\">
                    <a class=\"dropdown-toggle\" data-toggle=\"dropdown\" href=\"#\">
                        <i class=\"fa fa-tasks fa-fw\"></i>  <i class=\"fa fa-caret-down\"></i>
                    </a>
                    <ul class=\"dropdown-menu dropdown-tasks\">
                        <li>
                            <a href=\"#\">
                                <div>
                                    <p>
                                        <strong>Task 1</strong>
                                        <span class=\"pull-right text-muted\">40% Complete</span>
                                    </p>
                                    <div class=\"progress progress-striped active\">
                                        <div class=\"progress-bar progress-bar-success\" role=\"progressbar\" aria-valuenow=\"40\" aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"width: 40%\">
                                            <span class=\"sr-only\">40% Complete (success)</span>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class=\"divider\"></li>
                        <li>
                            <a href=\"#\">
                                <div>
                                    <p>
                                        <strong>Task 2</strong>
                                        <span class=\"pull-right text-muted\">20% Complete</span>
                                    </p>
                                    <div class=\"progress progress-striped active\">
                                        <div class=\"progress-bar progress-bar-info\" role=\"progressbar\" aria-valuenow=\"20\" aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"width: 20%\">
                                            <span class=\"sr-only\">20% Complete</span>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class=\"divider\"></li>
                        <li>
                            <a href=\"#\">
                                <div>
                                    <p>
                                        <strong>Task 3</strong>
                                        <span class=\"pull-right text-muted\">60% Complete</span>
                                    </p>
                                    <div class=\"progress progress-striped active\">
                                        <div class=\"progress-bar progress-bar-warning\" role=\"progressbar\" aria-valuenow=\"60\" aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"width: 60%\">
                                            <span class=\"sr-only\">60% Complete (warning)</span>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class=\"divider\"></li>
                        <li>
                            <a href=\"#\">
                                <div>
                                    <p>
                                        <strong>Task 4</strong>
                                        <span class=\"pull-right text-muted\">80% Complete</span>
                                    </p>
                                    <div class=\"progress progress-striped active\">
                                        <div class=\"progress-bar progress-bar-danger\" role=\"progressbar\" aria-valuenow=\"80\" aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"width: 80%\">
                                            <span class=\"sr-only\">80% Complete (danger)</span>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class=\"divider\"></li>
                        <li>
                            <a class=\"text-center\" href=\"#\">
                                <strong>See All Tasks</strong>
                                <i class=\"fa fa-angle-right\"></i>
                            </a>
                        </li>
                    </ul>
                    <!-- /.dropdown-tasks -->
                </li>
                <!-- /.dropdown -->
                <li class=\"dropdown\">
                    <a class=\"dropdown-toggle\" data-toggle=\"dropdown\" href=\"#\">
                        <i class=\"fa fa-bell fa-fw\"></i>  <i class=\"fa fa-caret-down\"></i>
                    </a>
                    <ul class=\"dropdown-menu dropdown-alerts\">
                        <li>
                            <a href=\"#\">
                                <div>
                                    <i class=\"fa fa-comment fa-fw\"></i> New Comment
                                    <span class=\"pull-right text-muted small\">4 minutes ago</span>
                                </div>
                            </a>
                        </li>
                        <li class=\"divider\"></li>
                        <li>
                            <a href=\"#\">
                                <div>
                                    <i class=\"fa fa-twitter fa-fw\"></i> 3 New Followers
                                    <span class=\"pull-right text-muted small\">12 minutes ago</span>
                                </div>
                            </a>
                        </li>
                        <li class=\"divider\"></li>
                        <li>
                            <a href=\"#\">
                                <div>
                                    <i class=\"fa fa-envelope fa-fw\"></i> Message Sent
                                    <span class=\"pull-right text-muted small\">4 minutes ago</span>
                                </div>
                            </a>
                        </li>
                        <li class=\"divider\"></li>
                        <li>
                            <a href=\"#\">
                                <div>
                                    <i class=\"fa fa-tasks fa-fw\"></i> New Task
                                    <span class=\"pull-right text-muted small\">4 minutes ago</span>
                                </div>
                            </a>
                        </li>
                        <li class=\"divider\"></li>
                        <li>
                            <a href=\"#\">
                                <div>
                                    <i class=\"fa fa-upload fa-fw\"></i> Server Rebooted
                                    <span class=\"pull-right text-muted small\">4 minutes ago</span>
                                </div>
                            </a>
                        </li>
                        <li class=\"divider\"></li>
                        <li>
                            <a class=\"text-center\" href=\"#\">
                                <strong>See All Alerts</strong>
                                <i class=\"fa fa-angle-right\"></i>
                            </a>
                        </li>
                    </ul>
                    <!-- /.dropdown-alerts -->
                </li>
                <!-- /.dropdown -->
                <li class=\"dropdown\">
                    <a class=\"dropdown-toggle\" data-toggle=\"dropdown\" href=\"#\">
                        <i class=\"fa fa-user fa-fw\"></i>  <i class=\"fa fa-caret-down\"></i>
                    </a>
                    <ul class=\"dropdown-menu dropdown-user\">
                        <li><a href=\"#\"><i class=\"fa fa-user fa-fw\"></i> User Profile</a>
                        </li>
                        <li><a href=\"#\"><i class=\"fa fa-gear fa-fw\"></i> Settings</a>
                        </li>
                        <li class=\"divider\"></li>
                        <li><a href=\"login.php\"><i class=\"fa fa-sign-out fa-fw\"></i> Logout</a>
                        </li>
                    </ul>
                    <!-- /.dropdown-user -->
                </li>
                <!-- /.dropdown -->
            </ul>
            <!-- /.navbar-top-links -->

        </nav>
        <!-- /.navbar-static-top -->

        <nav class=\"navbar-default navbar-static-side\" role=\"navigation\">
            <div class=\"sidebar-collapse\">
                <ul class=\"nav\" id=\"side-menu\">
                    <li class=\"sidebar-search\">
                        <div class=\"input-group custom-search-form\">
                            <input type=\"text\" class=\"form-control\" placeholder=\"Search...\">
                            <span class=\"input-group-btn\">
                                <button class=\"btn btn-default\" type=\"button\">
                                    <i class=\"fa fa-search\"></i>
                                </button>
                            </span>
                        </div>
                        <!-- /input-group -->
                    </li>
                    <li>
                        <a href=\"index\"><i class=\"fa fa-dashboard fa-fw\"></i> Dashboard</a>
                    </li>
                    <li>
                        <a href=\"#\"><i class=\"fa fa-files-o fa-fw\"></i> Pages<span class=\"fa arrow\"></span></a>
                        <ul class=\"nav nav-second-level\">
                            <li>
                                <a href=\"pages/new/\">Add New Page</a>
                            </li>
                            <li>
                                <a href=\"pages/all\">All Pages</a>
                            </li>
                        </ul>
                        <!-- /.nav-second-level -->
                    </li>
                    <li>
                        <a href=\"#\"><i class=\"fa fa-edit fa-fw\"></i> Posts<span class=\"fa arrow\"></span></a>
                        <ul class=\"nav nav-second-level\">
                            <li>
                                <a href=\"posts/new\">Add New Post</a>
                            </li>
                            <li>
                                <a href=\"posts/all\">All Posts</a>
                            </li>
                            <li>
                                <a href=\"categories/all\">Categories</a>
                            </li>
                            <li>
                                <a href=\"comments/all\">Comments</a>
                            </li>
                        </ul>
                        <!-- /.nav-second-level -->
                    </li>
                    
                    <li>
                        <a href=\"#\"><i class=\"fa fa-wrench fa-fw\"></i> Preferences<span class=\"fa arrow\"></span></a>
                        <ul class=\"nav nav-second-level\">
                            <li>
                                <a href=\"#\">Themes<span class=\"fa arrow\"></span></a>
                                <ul class=\"nav nav-third-level\">
                                    <li>
                                        <a href=\"themes/new\">Add New Themes</a>
                                    </li>
                                    <li>
                                        <a href=\"themes/all\">All Themes</a>
                                    </li>
                                </ul>
                                <!-- /.nav-third-level -->
                            </li>
                            <li>
                                <a href=\"#\">Plugins<span class=\"fa arrow\"></span></a>
                                <ul class=\"nav nav-third-level\">
                                    <li>
                                        <a href=\"plugins/new\">Add New Plugin</a>
                                    </li>
                                    <li>
                                        <a href=\"plugins/all\">All Plugins</a>
                                    </li>
                                </ul>
                                <!-- /.nav-third-level -->
                            </li>
                            <li>
                                <a href=\"sites/view\">Site Preferences</a>
                            </li>
                        </ul>
                        <!-- /.nav-second-level -->
                    </li>
                    
                    <li>
                        <a href=\"#\"><i class=\"fa fa-user fa-fw\"></i> Users<span class=\"fa arrow\"></span></a>
                        <ul class=\"nav nav-second-level\">
                            <li>
                                <a href=\"#\">Add New Users</a>
                            </li>
                            <li>
                                <a href=\"#\">All Users</a>
                            </li>
                            <li>
                                <a href=\"#\">Levels</a>
                            </li>
                            <li>
                                <a href=\"#\">Profile</a>
                            </li>
                        </ul>
                        <!-- /.nav-second-level -->
                    </li>
                    
                </ul>
                <!-- /#side-menu -->
            </div>
            <!-- /.sidebar-collapse -->
        </nav>
        <!-- /.navbar-static-side -->

        <div id=\"page-wrapper\">
            
            
            ";
        // line 384
        $this->displayBlock('content', $context, $blocks);
        // line 385
        echo "            
        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- Core Scripts - Include with every page -->
    <script src=\"";
        // line 393
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "/wy_assets/admin/js/jquery-1.10.2.js\"></script>
    <script src=\"";
        // line 394
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "/wy_assets/admin/js/bootstrap.min.js\"></script>
    <script src=\"";
        // line 395
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "/wy_assets/admin/js/plugins/metisMenu/jquery.metisMenu.js\"></script>

    <!-- Page-Level Plugin Scripts - Dashboard -->
    <script src=\"";
        // line 398
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "/wy_assets/admin/js/plugins/morris/raphael-2.1.0.min.js\"></script>
    <script src=\"";
        // line 399
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "/wy_assets/admin/js/plugins/morris/morris.js\"></script>

    <!-- SB Admin Scripts - Include with every page -->
        <!-- Page-Level Plugin Scripts - Tables -->
    <script src=\"";
        // line 403
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "/wy_assets/admin/js/plugins/dataTables/jquery.dataTables.js\"></script>
    <script src=\"";
        // line 404
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "/wy_assets/admin/js/plugins/dataTables/dataTables.bootstrap.js\"></script>

    <!-- SB Admin Scripts - Include with every page -->
    <script src=\"";
        // line 407
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "/wy_assets/admin/js/sb-admin.js\"></script>

    
    <script>
    \$(document).ready(function() {
        \$('#dataTables-example').dataTable();
    });
    </script>

</body>

</html>
";
    }

    // line 384
    public function block_content($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "index.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  490 => 384,  473 => 407,  467 => 404,  463 => 403,  456 => 399,  452 => 398,  446 => 395,  442 => 394,  438 => 393,  428 => 385,  426 => 384,  79 => 40,  74 => 38,  69 => 36,  64 => 34,  60 => 33,  54 => 30,  50 => 29,  20 => 1,  31 => 4,  28 => 3,);
    }
}

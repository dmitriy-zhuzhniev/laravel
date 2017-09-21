<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <link rel="apple-touch-icon" sizes="76x76" href="http://www.urbanui.com/turbo/assets/img/apple-icon.png" />
    <link rel="icon" type="image/png" href="{{ asset("img/favicon.png") }}" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>Turbo - Bootstrap Material Admin Dashboard Template</title>
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />
    <!-- Bootstrap core CSS     -->
    <link href="{{ asset("css/bootstrap.min.css") }}" rel="stylesheet" />
    <!--  Material Dashboard CSS    -->
    <link href="{{ asset("css/turbo.css") }}" rel="stylesheet" />
    <!--  CSS for Demo Purpose, don't include it in your project     -->
    <link href="{{ asset("css/demo.css") }}" rel="stylesheet" />
    <!--     Fonts and icons     -->
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Material+Icons" />
</head>

<body>
<div class="wrapper">
    <div class="sidebar">
        <div class="logo">
            <a href="basic-elements.html#" class="simple-text">
                Turbo Admin
            </a>
        </div>
        <div class="logo logo-mini">
            <a href="basic-elements.html#" class="simple-text">
                T
            </a>
        </div>
        <div class="sidebar-wrapper">
            <ul class="nav">
                <li>
                    <a href="../index.html">
                        <i class="material-icons">dashboard</i>
                        <p>Dashboard</p>
                    </a>
                </li>
                <li>
                    <a data-toggle="collapse" href="basic-elements.html#layouts" class="collapsed" aria-expanded="false">
                        <i class="material-icons">aspect_ratio</i>
                        <p>Layouts
                            <b class="caret"></b>
                        </p>
                    </a>
                    <div class="collapse" id="layouts" aria-expanded="false" style="height: 0px;">
                        <ul class="nav">
                            <li>
                                <a href="../layouts/boxed-layout.html">Box Layout</a>
                            </li>
                            <li>
                                <a href="../layouts/compact-menu.html">Compact Menu</a>
                            </li>
                            <li>
                                <a href="../layouts/horizontal-menu.html">Horizontal Menu</a>
                            </li>
                            <li>
                                <a href="../layouts/rtl-layout.html">RTL</a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li>
                    <a href="../widgets/widgets.html">
                        <i class="material-icons">apps</i>
                        <p>Widgets</p>
                    </a>
                </li>
                <li>
                    <a data-toggle="collapse" href="basic-elements.html#charts" class="collapsed" aria-expanded="false">
                        <i class="material-icons">equalizer</i>
                        <p>Charts
                            <b class="caret"></b>
                        </p>
                    </a>
                    <div class="collapse" id="charts" aria-expanded="false" style="height: 0px;">
                        <ul class="nav">
                            <li>
                                <a href="../charts/chart-js-charts.html">ChartJS</a>
                            </li>
                            <li>
                                <a href="../charts/flot-charts.html">Flot</a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li>
                    <a data-toggle="collapse" href="basic-elements.html#ui-elements" class="collapsed" aria-expanded="false">
                        <i class="material-icons">extension</i>
                        <p>UI Elements
                            <b class="caret"></b>
                        </p>
                    </a>
                    <div class="collapse" id="ui-elements" aria-expanded="false" style="height: 0px;">
                        <ul class="nav">
                            <li><a href="../ui/accordions.html">Accordions</a></li>
                            <li><a href="../ui/alerts.html">Alerts</a></li>
                            <li><a href="../ui/buttons.html">Buttons</a></li>
                            <li><a href="../ui/colors.html">Colors</a></li>
                            <li><a href="../ui/grid.html">Grid System</a></li>
                            <li><a href="../ui/icons.html">Icons</a></li>
                            <li><a href="../ui/modals.html">Modals</a></li>
                            <li><a href="../ui/notifications.html">Notifications</a></li>
                            <li><a href="../ui/tabs.html">Tabs</a></li>
                            <li><a href="../ui/typography.html">Typography</a></li>
                        </ul>
                    </div>
                </li>
                <li class="active">
                    <a data-toggle="collapse" href="basic-elements.html#forms" class="collapsed" aria-expanded="false">
                        <i class="material-icons">border_color</i>
                        <p>Forms
                            <b class="caret"></b>
                        </p>
                    </a>
                    <div class="collapse in" id="forms" aria-expanded="false">
                        <ul class="nav">
                            <li class="active"><a href="basic-elements.html">Basic Elements</a></li>
                            <li><a href="advanced-elements.html">Advanced Elements</a></li>
                            <li><a href="form-validation.html">Form Validation</a></li>
                            <li><a href="form-wizard.html">Form Wizard</a></li>
                            <li><a href="sample-forms.html">Sample Forms</a></li>
                        </ul>
                    </div>
                </li>
                <li>
                    <a data-toggle="collapse" href="basic-elements.html#tables" class="collapsed" aria-expanded="false">
                        <i class="material-icons">grid_on</i>
                        <p>Tables
                            <b class="caret"></b>
                        </p>
                    </a>
                    <div class="collapse" id="tables" aria-expanded="false" style="height: 0px;">
                        <ul class="nav">
                            <li><a href="../tables/tables.html">Simple Tables</a></li>
                            <li><a href="../tables/data-tables.html">Data Tables</a></li>
                        </ul>
                    </div>
                </li>
                <li>
                    <a data-toggle="collapse" href="basic-elements.html#pages" class="collapsed" aria-expanded="false">
                        <i class="material-icons">content_copy</i>
                        <p>Pages
                            <b class="caret"></b>
                        </p>
                    </a>
                    <div class="collapse" id="pages" aria-expanded="false" style="height: 0px;">
                        <ul class="nav">
                            <li><a href="../sample-pages/template.html">Template</a></li>
                            <li><a href="../sample-pages/user-profile.html">User Profile</a></li>
                            <li><a href="../sample-pages/login.html">Login</a></li>
                            <li><a href="../sample-pages/signup.html">Sign Up</a></li>
                            <li><a href="../sample-pages/pricing-table.html">Pricing Table</a></li>
                            <li><a href="../sample-pages/invoice.html">Invoice</a></li>
                            <li><a href="../sample-pages/help-faqs.html">Help & FAQs</a></li>
                            <li><a href="../sample-pages/timeline.html">Timeline</a></li>
                            <li><a href="../sample-pages/404.html">404</a></li>
                            <li><a href="../sample-pages/500.html">500</a></li>
                        </ul>
                    </div>
                </li>
                <li>
                    <a href="../calendar/calendar.html">
                        <i class="material-icons">date_range</i>
                        <p>Calendar
                            <b class="caret"></b>
                        </p>
                    </a>
                </li>
                <li>
                    <a href="../docs/documentation.html">
                        <i class="material-icons">library_books</i>
                        <p>Documentation</p>
                    </a>
                </li>
            </ul>

        </div>
    </div>
    <div class="main-panel">
        <nav class="navbar navbar-default navbar-absolute" data-topbar-color="blue">
            <div class="container-fluid">
                <div class="navbar-minimize">
                    <button id="minimizeSidebar" class="btn btn-round btn-white btn-fill btn-just-icon">
                        <i class="material-icons visible-on-sidebar-regular f-26">keyboard_arrow_left</i>
                        <i class="material-icons visible-on-sidebar-mini f-26">keyboard_arrow_right</i>
                    </button>
                </div>
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="basic-elements.html#"> Basic Form Elements </a>
                </div>
                <div class="collapse navbar-collapse">
                    <ul class="nav navbar-nav navbar-right">
                        <li class="dropdown">
                            <a href="basic-elements.html#" class="dropdown-toggle" data-toggle="dropdown">
                                <i class="material-icons">notifications</i>
                                <span class="notification">6</span>
                                <p class="hidden-lg hidden-md">
                                    Notifications
                                    <b class="caret"></b>
                                </p>
                            </a>
                            <ul class="dropdown-menu">
                                <li>
                                    <a href="basic-elements.html#">You have 5 new messages</a>
                                </li>
                                <li>
                                    <a href="basic-elements.html#">You're now friend with Mike</a>
                                </li>
                                <li>
                                    <a href="basic-elements.html#">Wish Mary on her birthday!</a>
                                </li>
                                <li>
                                    <a href="basic-elements.html#">5 warnings in Server Console</a>
                                </li>
                                <li>
                                    <a href="basic-elements.html#">Jane completed 'Induction Training'</a>
                                </li>
                                <li>
                                    <a href="basic-elements.html#">'Prepare Marketing Report' is overdue</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="basic-elements.html#pablo" class="dropdown-toggle" data-toggle="dropdown">
                                <i class="material-icons">apps</i>
                                <p class="hidden-lg hidden-md">Apps</p>
                            </a>
                        </li>
                        <li>
                            <a href="basic-elements.html#pablo" class="dropdown-toggle" data-toggle="dropdown">
                                <i class="material-icons">person</i>
                                <p class="hidden-lg hidden-md">Profile</p>
                            </a>
                        </li>
                        <li>
                            <a href="basic-elements.html#pablo" class="dropdown-toggle" data-toggle="dropdown">
                                <i class="material-icons">settings</i>
                                <p class="hidden-lg hidden-md">Settings</p>
                            </a>
                        </li>
                        <li class="separator hidden-lg hidden-md"></li>
                    </ul>
                </div>
            </div>
        </nav>
        <div class="content">
            <div class="container-fluid">

                @yield("content")

            </div>
        </div>
        <footer class="footer">
            <div class="container-fluid">
                <nav class="pull-left">
                    <ul>
                        <li>
                            <a href="basic-elements.html#">
                                Home
                            </a>
                        </li>
                        <li>
                            <a href="basic-elements.html#">
                                Documentation
                            </a>
                        </li>
                        <li>
                            <a href="basic-elements.html#">
                                Contact
                            </a>
                        </li>
                        <li>
                            <a href="basic-elements.html#">
                                Support
                            </a>
                        </li>
                    </ul>
                </nav>
                <p class="copyright pull-right">
                    &copy;
                    <script>
                        document.write(new Date().getFullYear())
                    </script>
                    <a href="basic-elements.html#">Turbo Admin</a>
                </p>
            </div>
        </footer>
    </div>
</div>
</body>
<!--   Core JS Files   -->
<script src="{{ asset("vendors/jquery-3.1.1.min.js") }}" type="text/javascript"></script>
<script src="{{ asset("vendors/jquery-ui.min.js") }}" type="text/javascript"></script>
<script src="{{ asset("vendors/bootstrap.min.js") }}" type="text/javascript"></script>
<script src="{{ asset("vendors/material.min.js") }}" type="text/javascript"></script>
<script src="{{ asset("vendors/perfect-scrollbar.jquery.min.js") }}" type="text/javascript"></script>
<!-- Forms Validations Plugin -->
<script src="{{ asset("vendors/jquery.validate.min.js") }}"></script>
<!--  Plugin for Date Time Picker and Full Calendar Plugin-->
<script src="{{ asset("vendors/moment.min.js") }}"></script>
<!--  Charts Plugin -->
<script src="{{ asset("vendors/chartist.min.js") }}"></script>
<!--  Plugin for the Wizard -->
<script src="{{ asset("vendors/jquery.bootstrap-wizard.js") }}"></script>
<!--  Notifications Plugin    -->
<script src="{{ asset("vendors/bootstrap-notify.js") }}"></script>
<!-- DateTimePicker Plugin -->
<script src="{{ asset("vendors/bootstrap-datetimepicker.js") }}"></script>
<!-- Vector Map plugin -->
<script src="{{ asset("vendors/jquery-jvectormap.js") }}"></script>
<!-- Sliders Plugin -->
<script src="{{ asset("vendors/nouislider.min.js") }}"></script>
<!--  Google Maps Plugin    -->
<script src="https://maps.googleapis.com/maps/api/js"></script>
<!-- Select Plugin -->
<script src="{{ asset("vendors/jquery.select-bootstrap.js") }}"></script>
<!--  DataTables.net Plugin    -->
<script src="{{ asset("vendors/jquery.datatables.js") }}"></script>
<!-- Sweet Alert 2 plugin -->
<script src="{{ asset("vendors/sweetalert2.js") }}"></script>
<!--	Plugin for Fileupload, full documentation here: http://www.jasny.net/bootstrap/javascript/#fileinput -->
<script src="{{ asset("vendors/jasny-bootstrap.min.js") }}"></script>
<!--  Full Calendar Plugin    -->
<script src="{{ asset("vendors/fullcalendar.min.js") }}"></script>
<!-- TagsInput Plugin -->
<script src="{{ asset("vendors/jquery.tagsinput.js") }}"></script>
<!-- Material Dashboard javascript methods -->
<script src="{{ asset("js/turbo.js") }}"></script>
<!-- Material Dashboard DEMO methods, don't include it in your project! -->
<script src="{{ asset("js/demo.js") }}"></script>

</html>

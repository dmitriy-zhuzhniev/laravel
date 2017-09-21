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
    <div class="wrapper wrapper-full-page">
        <div class="full-page login-page"  data-color="blue">
            <!--   you can change the color of the filter page using: data-color="blue | purple | green | orange | red | rose " -->
            <div class="content">
                <div class="container">
                    <div class="row">
                        <div class="col-md-4 col-sm-6 col-md-offset-4 col-sm-offset-3">

                            @yield("content")

                        </div>
                    </div>
                </div>
            </div>
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
<script type="text/javascript">
    $().ready(function() {
        demo.checkFullPageBackgroundImage();

        setTimeout(function() {
            // after 1000 ms we add the class animated to the login/register card
            $('.card').removeClass('card-hidden');
        }, 700)
    });
</script>

</html>
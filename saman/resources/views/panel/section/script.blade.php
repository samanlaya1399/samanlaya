
<!-- jQuery -->
<script src="{{asset('/plugins/jquery/jquery.min.js')}}"></script>
<!-- jQuery UI 1.11.4 -->
<script src="{{asset('/plugins/jQueryUI/jquery-ui.min.js')}}"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
    $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="{{asset('/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<!-- Morris.js charts -->
<script src="{{asset('/plugins/raphael/raphael-min.js')}}"></script>
<script src="{{asset('/plugins/morris/morris.min.js')}}"></script>
<!-- Sparkline -->
<script src="{{asset('/plugins/sparkline/jquery.sparkline.min.js')}}"></script>
<!-- jvectormap -->
<script src="{{asset('/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js')}}"></script>
<script src="{{asset('/plugins/jvectormap/jquery-jvectormap-world-mill-en.js')}}"></script>
<!-- jQuery Knob Chart -->
<script src="{{asset('/plugins/knob/jquery.knob.js')}}"></script>
<!-- daterangepicker -->
<script src="{{asset('/plugins/daterangepicker/moment.min.js')}}"></script>
<script src="{{asset('/plugins/daterangepicker/daterangepicker.js')}}"></script>
<!-- datepicker -->
<script src="{{asset('/plugins/datepicker/bootstrap-datepicker.js')}}"></script>
<!-- Bootstrap WYSIHTML5 -->
<script src="{{asset('/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js')}}"></script>
<!-- Slimscroll -->
<script src="{{asset('/plugins/slimScroll/jquery.slimscroll.min.js')}}"></script>
<!-- FastClick -->
<script src="{{asset('/plugins/fastclick/fastclick.js')}}"></script>
<!-- AdminLTE App -->
<script src="{{asset('/dist/js/adminlte.js')}}"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="{{asset('/dist/js/pages/dashboard.js')}}"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
{{--<script src="{{asset('/dist/js/bootstrap-tagsinput.js')}}"></script>--}}
{{--<script src="{{asset('/dist/js/bootstrap-tagsinput-angular.js')}}"></script>--}}
<script src="{{asset('/dist/js/fm.tagator.jquery.js')}}"></script>
<!-- AdminLTE for demo purposes -->
<script src="{{asset('/dist/js/demo.js')}}"></script>

{{--<script>--}}
    {{--$(".tags").tagsinput();--}}
{{--</script>--}}
{{--<script>--}}
    {{--$('form input').keydown(function (e) {--}}
        {{--if (e.keyCode == 13) {--}}
            {{--var inputs = $(this).parents("form").eq(0).find(":input");--}}
            {{--if (inputs[inputs.index(this) + 1] != null) {--}}
                {{--inputs[inputs.index(this) + 1].focus();--}}
            {{--}--}}
            {{--e.preventDefault();--}}
            {{--return false;--}}
        {{--}--}}
    {{--});--}}
{{--</script>--}}

{{--<script>--}}
    {{--$('.tags').tagator();--}}
{{--</script>--}}

<script>
    $(document).ready(function () {
        $(function(){
            var current = window.location.href;

            $('#nav li a').each(function(){
                var $this = $(this);
                // if the current path is like this link, make it active
                if($this.attr('href')== current){
                    $this.addClass('active');
                    $this.parent().parent().parent().addClass('menu-open');
//                $this.parent().addClass('active');
//                    console.log($this.parent().parent().parent());
                }
                $('.menu-open a:first').addClass('active');
            })
        })
    });
</script>

<script src="{{asset('/assets/js/vendor/modernizr-2.8.3.min.js')}}"></script>
<script src="{{asset('/assets/js/vendor/jquery-1.12.0.min.js')}}"></script>
<script src="{{asset('/assets/js/popper.js')}}"></script>
<script src="{{asset('/assets/js/bootstrap.min.js')}}"></script>
<script src="{{asset('/assets/js/jquery.magnific-popup.min.js')}}"></script>
<script src="{{asset('/assets/js/isotope.pkgd.min.js')}}"></script>
<script src="{{asset('/assets/js/imagesloaded.pkgd.min.js')}}"></script>
<script src="{{asset('/assets/js/jquery.counterup.min.js')}}"></script>
<script src="{{asset('/assets/js/waypoints.min.js')}}"></script>
<script src="{{asset('/assets/js/ajax-mail.js')}}"></script>
<script src="{{asset('/assets/js/owl.carousel.min.js')}}"></script>
<script src="{{asset('/assets/js/plugins.js')}}"></script>
<script src="{{asset('/assets/js/main.js')}}"></script>
<script src="{{asset('/assets/js/simpleParallax.min.js')}}"></script>
<script>
    $(document).ready(function () {

        var div = $('#ul-result').parent();

        $('#search').on('keyup', function () {
            $keyword = $(this).val();
            console.log($keyword);
            $.ajax({
                type: 'get',
                url: "{{asset('/search')}}",
                data:{'keyword':$keyword},
                success:function (data) {
                    var op = " ";
                   console.log("ok");


                    for (var i=0; i<data.length;i++){
                        op += '<li><a href="' +
                            window.location.protocol + '//' + window.location.host + '/product/'
                            +
                            data[i].slug +
                            '">' +
                            data[i].title +
                            '</a></li>';
                    }

                    div.find('#ul-result').html(" ");
                    div.find('#ul-result').append(op);

                    $('#search-result').addClass('visi-show');

                },
                error:function (exception) {
                    console.log(exception[0]);
                }
            })
        });
    });
</script>

<script>
    $(window).click(function() {
        $('#search-result').removeClass('visi-show');
    });
</script>

<div style="display: none;">
        <script type="text/javascript" language="javascript" src="http://www.webgozar.ir/c.aspx?Code=3738769&amp;t=counter" ></script>
    </div>
   




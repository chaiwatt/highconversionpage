
<!DOCTYPE html>
<html lang="en">
  
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
	<meta name="keywords" content="Sales page, landing page template, HTML5 template, responsive html5 template, bootstrap landing page, Affiliate marketing, eBook template, product landing page, email marketing, bootstrap template, marketing landing page, campaign monitor, active campaign, startup template, product showcase">
    <meta name="description" content="IMSolutions is a sales page and landing page HTML5 template for affiliate marketing very suitable for internet marketing, product launch, download software eBook landing page, and compaign monitoring">
    <meta name="author" content="nce18cex">
    <link rel="icon" href="ico/favicon.png">

    <title>{{$title}}</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- Bootstrap core CSS -->
    <link href="{{asset('/assets/salepage/css/bootstrap.min.css')}} " rel="stylesheet">

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link href="{{asset('/assets/salepage/css/ie10-viewport-bug-workaround.css')}}" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="{{asset('/assets/salepage/css/style.css')}}" rel="stylesheet">
    <link href="{{asset('/assets/salepage/css/custom.css')}}" rel="stylesheet">
    <!-- Theme skins -->
    <link id="skin" href="{{asset('/assets/salepage/css/skins/default.css')}}" rel="stylesheet">

    {{-- <style>
      html {
        scroll-behavior: smooth;
      }
    </style> --}}
	
    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="js/ie8-responsive-file-warning.js"></script><![endif]-->
    {{-- <script src="{{asset('/assets/salepage/')}}js/ie-emulation-modes-warning.js"></script> --}}

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="js/html5shiv.min.js"></script>
      <script src="js/respond.min.js"></script>
    <![endif]-->
      
    <!--[if IE 9]>  
      <link href="css/ie.css" rel="stylesheet">
    <![endif]-->  
  </head>

  <body>
   @yield('content')
	<!-- End footer -->
	
    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="{{asset('assets/salepage/js/jquery.min.j')}}s"></script>
    <script src="{{asset('assets/salepage/js/bootstrap.min.js')}}"></script>
	<script src="{{asset('assets/salepage/js/jquery.easing-1.3.min.js')}}"></script>
	
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    {{-- <script src="js/ie10-viewport-bug-workaround.js"></script> --}}
	
	<!-- Custom form -->
	<script src="{{asset('assets/salepage/js/form/jcf.js')}}"></script>
	<script src="{{asset('assets/salepage/js/form/jcf.scrollable.js')}}"></script>
	<script src="{{asset('assets/salepage/js/form/jcf.select.js')}}"></script>
	
	<!-- Custom checkbox and radio -->
	<script src="{{asset('assets/salepage/js/checkator/fm.checkator.jquery.js')}}"></script>
	<script src="{{asset('assets/salepage/js/checkator/setting.js')}}"></script>
	
	<!-- parallax -->
	<script src="{{asset('assets/salepage/js/parallax/jquery.parallax-1.1.3.js')}}"></script>
	<script src="{{asset('assets/salepage/js/parallax/setting.js')}}"></script>
	
    <!-- Countdown -->
    <script src="{{asset('assets/salepage/js/countdown/lodash.min.js')}}"></script>  
    <script src="{{asset('assets/salepage/js/countdown/jquery.countdown.min.js')}}"></script>
    <script type="text/template" id="main-example-template">
        <div class="time <%= label %>">
        <span class="count curr top"><%= curr %></span>
        <span class="count next top"><%= next %></span>
        <span class="midle-line"></span>
        <span class="count next bottom"><%= next %></span>
        <span class="count curr bottom"><%= curr %></span>
        <span class="label"><%= label.length < 6 ? label : label.substr(0, 3)  %></span>
        </div>
    </script>
    <script src="{{asset('assets/salepage/js/countdown/setting.js')}}"></script>  
	
    <!-- PrettyPhoto -->
	{{-- <script src="{{asset('assets/salepage/js/prettyPhoto/jquery.prettyPhoto.js')}}"></script>  
	<script src="{{asset('assets/salepage/js/prettyPhoto/setting.js')}}"></script> --}}
	
	<!-- JavaScript totop -->
	<script src="{{asset('assets/salepage/js/totop/jquery.ui.totop.js')}}"></script>	
	<script src="{{asset('assets/salepage/js/totop/setting.js')}}"></script>

    <!-- Custom javaScript for this theme -->
    <script src="{{asset('assets/salepage/js/custom.js')}}"></script>
    {{-- <script src="{{asset('assets/js/custom_extend.js')}}"></script> --}}

	<!-- Theme option-->
	{{-- <script src="js/theme-option/demosetting.html"></script>	 --}}
  </body>

</html>

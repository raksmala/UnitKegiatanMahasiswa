<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="A fully featured admin theme which can be used to build CRM, CMS, etc.">
        <meta name="author" content="Coderthemes">

        <link rel="shortcut icon" href="{{ asset('/assets/images/logo/km.png') }}">
        <title>UKM Politeknik Negeri Madiun</title>

        <link href="{{ asset('/assets/styles/bootstrap.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('/assets/styles/core.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('/assets/styles/components.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('/assets/styles/icons.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('/assets/styles/pages.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('/assets/styles/responsive.css') }}" rel="stylesheet" type="text/css" />

        <!-- HTML5 Shiv and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
        <![endif]-->

        <script src="{{ asset('/assets/js/modernizr.min.js') }}"></script>
        
    </head>
    <body>

        <div class="account-pages"></div>
        <div class="clearfix"></div>
        <div class="wrapper-page">
        	<div class=" card-box">
            <div class="panel-heading"> 
                <h3 class="text-center"><strong class="text-custom">Login Admin UKM</strong></h3>
            </div> 

            <div class="panel-body">
            <form method="POST" action="{{ route('login') }}" class="form-horizontal">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <div class="form-group ">
                    <div class="col-xs-12">
                        <input class="form-control" type="text" id="username" name="username" required="" placeholder="Username">
                    </div>
                </div>

                <div class="form-group">
                    <div class="col-xs-12">
                        <input class="form-control" type="password" id="password" name="password" required="" placeholder="Password">
                    </div>
                </div>
                
                <div class="form-group text-center m-t-40">
                    <div class="col-xs-12">
                        <button type="submit" class="btn btn-pink btn-block text-uppercase waves-effect waves-light"">Masuk</button>
                    </div>
                </div>
            </form>
            
            </div>   
            </div>                              
                <div class="row">
            	    <div class="col-sm-12 text-center">
            		    <p>Tidak memiliki akun? <b>Hubungi admin BEM</b></p>
                    </div>
                </div>
            </div>
        
    	<script>
            var resizefunc = [];
        </script>

        <!-- jQuery  -->
        <script src="{{ asset('/assets/js/jquery.min.js') }}"></script>
        <script src="{{ asset('/assets/js/bootstrap.min.js') }}"></script>
        <script src="{{ asset('/assets/js/detect.js') }}"></script>
        <script src="{{ asset('/assets/js/fastclick.js') }}"></script>
        <script src="{{ asset('/assets/js/jquery.slimscroll.js') }}"></script>
        <script src="{{ asset('/assets/js/jquery.blockUI.js') }}"></script>
        <script src="{{ asset('/assets/js/waves.js') }}"></script>
        <script src="{{ asset('/assets/js/wow.min.js') }}"></script>
        <script src="{{ asset('/assets/js/jquery.nicescroll.js') }}"></script>
        <script src="{{ asset('/assets/js/jquery.scrollTo.min.js') }}"></script>

        <script src="{{ asset('/assets/js/jquery.core.js') }}"></script>
        <script src="{{ asset('/assets/js/jquery.app.js') }}"></script>
	
	</body>
</html>
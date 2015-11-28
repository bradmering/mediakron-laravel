<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>@yeild('htmltitle', 'A Toolkit for Digital Curation and Storytelling')| Mediakron</title>

    <!-- Bootstrap core CSS -->
    <link href="/bundles/mediakron/css/bootstrap.css" rel="stylesheet">
    <link rel="stylesheet" href="//ajax.googleapis.com/ajax/libs/jqueryui/1.11.1/themes/smoothness/jquery-ui.css" />

    <!-- Custom CSS for the 'Full Width Pics' Template -->
    <link href="/bundles/mediakron/css/full-width-pics.css" rel="stylesheet">
    <link href="/bundles/mediakron/css/admin.css" rel="stylesheet">
    <link href="/bundles/mediakron/scripts/chosen/chosen.min.css" rel="stylesheet">
    
    <!-- DataTables CSS -->
    <link rel="stylesheet" type="text/css" href="/bundles/mediakron/scripts/DataTables/media/css/jquery.dataTables.css">
 
    @yeild('css')

</head>

<body>

    <nav  class="navbar navbar-fixed-top navbar-inverse" role="navigation">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="/">MediaKron</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul id="nav" class="nav navbar-nav">
                    <li>
                        <a href="http://www.mediakron.org">About</a>
                    </li>
                     <li>
                        <a href="https://mediakron.bc.edu/help">Support</a>
                    </li>
                    @elseif (Auth::guest())
                    	<li><a href="/login">Login</a></li>
                    @else
	                    <li>
	                        <a href="/profile">My Account</a>
	                    </li>
                    	@if (Auth::user()->hasRole('admin'))
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Administration <span class="caret"></span></a>
                            <ul class="dropdown-menu" role="menu">
                                <li><a href="/admin/sites">Sites</a></li>
                                <li><a href="/admin/groups">Groups</a></li>
                                <li><a href="/admin/people">People</a></li>
                            </ul>
                        </li>
						@endif
                    	<li><a href="/logout">Logout</a></li>
                    @endif
                </ul>
                <a href="http://www.bc.edu" id="bclogo"><img src="/bundles/mediakron/img/bclogo.png" alt="Boston College" /></a>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>
    @if(Session::has('success'))
    	<div class="alert alert-dismissable alert-success">
        	<button type="button" class="close" data-dismiss="alert">×</button>
			{{ Session::get('success') }}
        </div>
    @endif
    @if(Session::has('notice'))
    	<div class="alert alert-dismissable alert-notice">
        	<button type="button" class="close" data-dismiss="alert">×</button>
			{{ Session::get('notice') }}
        </div>
    @endif
    @if(Session::has('warning'))
    	<div class="alert alert-dismissable alert-warning">
        	<button type="button" class="close" data-dismiss="alert">×</button>
			{{ Session::get('warning') }}
        </div>
    @endif
    @if(Session::has('error'))
    	<div class="alert alert-dismissable alert-error">
        	<button type="button" class="close" data-dismiss="alert">×</button>
			{{ Session::get('error') }}
        </div>
    @endif
    
    @yeild('body')

    <!-- JavaScript -->
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="//ajax.googleapis.com/ajax/libs/jqueryui/1.11.1/jquery-ui.min.js"></script>
	
	<!-- bootstrap.js -->
	<script type="text/javascript" src="/bundles/mediakron/js/bootstrap.js"></script>
	
	<!-- Chosen.js -->
	<script type="text/javascript" src="/bundles/mediakron/scripts/chosen/chosen.jquery.min.js"></script>
	 
	<!-- DataTables -->
	<script type="text/javascript" charset="utf8" src="/bundles/mediakron/scripts/DataTables/media/js/jquery.dataTables.js"></script>
	
	<script src="{{ elixir('js/app.js') }}"></script>
	
	<script type="text/javascript">
	$(document).ready(function(){
		$('.dropdown-toggle').dropdown();
		
		$('.datatables-active').dataTable( {
		    paging: false,
		    stateSave: true
		} );
		
		$("#bc_mediakron_sitebundle_siteaccess_user").chosen();
		$("#bc_mediakron_sitebundle_siteaccess_site").chosen();
		$("#bc_mediakron_sitebundle_siteaccess_role").chosen();
		$("#bc_mediakron_sitebundle_site_institution").chosen();
		$("#bc_mediakron_sitebundle_site_creator").chosen();
		$("#bc_mediakron_sitebundle_site_administrator").chosen();
		$("#bc_mediakron_sitebundle_ldapaccess_role").chosen();
		$("#bc_mediakron_sitebundle_ldapaccess_site").chosen();
		
	})
	</script>

</body>

</html>

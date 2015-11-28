@extends('app')

@section('body')
<div class="full-width-image-1" id="about">

    <div class="logo-wrapper">
        <img class="img-responsive" src="/bundles/mediakron/img/logo.png" />
             <h1 class="section-heading">Curate. Narrate. Collaborate.</h1>
    </div>

</div>

<!-- /full-width-image-1 -->

<div class="container">
	
    <div class="row">
        <div class="col-lg-12 section">

            <p class="lead section-lead"><strong> Mediakron is an online toolkit for digital curation and storytelling.</strong> It makes it easy to collect and organize content in flexible ways using slideshows, maps, timelines, narratives, comparisons, annotations, and more.</p>
        </div>
    </div>
</div>

<div class="container main-links">  	
        <div class="row">
			<div class="col-md-12">
				<a href="http://www.mediakron.org" class="btn btn-primary btn-lg">About</a>
				<a href="https://mediakron.bc.edu/help" class="btn btn-primary btn-lg">Support</a>
				@if(Auth::guest())	
					<a href="/auth/login"class="btn btn-primary btn-lg">Login</a>
				@endif
			</div>
        </div>
</div>

<!-- FOOTER -->
<div class="container">
    <footer>
        <div class="row">
            <div class="col-lg-12">
			<p class="lead">MediaKron is a product of <a href="http://www.bc.edu/eteaching" target="_blank">Instructional Design and eTeaching Services</a> at Boston College.</p> 
            </div>
        </div>
    </footer>
</div>

</div>
<!-- /container -->
@endsection
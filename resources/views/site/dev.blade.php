<!DOCTYPE html>
<!--[if lt IE 7]>      
<html class="no-js lt-ie9 lt-ie8 lt-ie7">
   <![endif]-->
   <!--[if IE 7]>         
   <html class="no-js lt-ie9 lt-ie8">
      <![endif]-->
      <!--[if IE 8]>         
      <html class="no-js lt-ie9">
         <![endif]-->
         <!--[if gt IE 8]><!-->
         <html class="no-js">
            <!--<![endif]-->
            <head>
               <meta charset="utf-8">
               <meta http-equiv="X-UA-Compatible" content="IE=edge">
               <title></title>
               <meta name="description" content="">
               <meta name="viewport" content="width=device-width, initial-scale=1">
               <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
               <link rel="stylesheet" href="/mediakron/css/normalize.css" type="text/css">
               <link rel="stylesheet" href="/mediakron/css/bootstrap.css" type="text/css">
               <link rel="stylesheet" href="/mediakron/css/bootstrap-accessibility.css" type="text/css">
               <link rel="stylesheet" href="/mediakron/css/animate.css" type="text/css">
               <link rel="stylesheet" href="/mediakron/css/vendor/ui-lightness/jquery-ui-1.10.4.min.css" type="text/css">
               <link rel="stylesheet" href="/mediakron/js/vendor/spectrum.css" type="text/css">
               <link rel="stylesheet" href="/mediakron/css/vendor/leaflet.css" type="text/css">
               <link rel="stylesheet" href="/mediakron/css/vendor/datatable/jquery.dataTables.css" type="text/css">
               <link rel="stylesheet" href="/mediakron/css/main.css" type="text/css">
               <link rel="stylesheet" href="/mediakron/js/vendor/me/mediaelementplayer.css" type="text/css">
               <link rel="stylesheet" href="/mediakron/css/build/mediakron.complete.css" type="text/css">
               
               <!-- this should be removed from every live site.  Debugging only -->
               <link rel="stylesheet" href="/mediakron/css/debug.css" type="text/css">
               
               <link id="skin" {% if site.skin %} href="/mediakron/css/skins/{{ site.skin }}"{% endif %} rel="stylesheet" type="text/css">
               <script src="/mediakron/js/vendor/modernizr-2.6.2.min.js" type="text/javascript"></script>
          
            </head>
            <body>
               <!--[if lt IE 7]>
               <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
               <![endif]-->
               <!--[if lt IE 9]>
               <p class="chromeframe">You are using an <strong>outdated</strong> browser. Mediakron will not run well on browsers older than IE9.  Please upgrade</p>
               <![endif]-->
               <div id="mediakron">
                   <div id="main-container">
                       
                       <header id="header" role="banner" style="display:none">
                          <div id="navbar">
                                <button type="button" class="mobile-nav-button mobile-nav-close"><span class="mk-icon mk-close"></span></button>
                                <nav id="nav-main" role="navigaton" aria-label="Main Navigation">
                                    <!-- Main Menu will get loaded here -->
                                </nav>
                                <nav id="nav-secondary" role="navigaton" aria-label="Secondary Navigation">                       
                                    <!-- Navbar Right Goes Here -->
                                </nav>
                          </div>
                          <div id="branding">
                                 <button type="button" class="mobile-nav-button"><span class="mk-icon mk-menu"></span></button>
                                <span id="site-logo"></span>
                                <span id="site-name"></span>
                                <h1 class="page-header"><span id="site-name"><a href="home"></a></span></h1>
                                <span id="institution-logo"></span>
                          </div>

                      </header> 
                      
                      <div id="wrapper-main">
                           <main role="main">
                             <div id="main"></div>
                          </main>
                      </div>
                  
                  </div> 
                  
                  <section id="settings-context" class="closed settings-pane overlay"></section>
                 
                  <div id="help-context" class="closed help-pane overlay"><div id="help-contents"></div></div>
                  
                  <div id="linkbrowser-context" class="closed linkbrowser-pane overlay"><div id="linkbrowser-contents"></div></div>
                
                  <button type="button" class="scroll-arrow btn-no-style scroll-top"><span class="mk-icon mk-arrow-up"></span><span class="sr-only">To Top</span></button>
                  <button type="button" class="scroll-arrow btn-no-style scroll-down"><span class="mk-icon mk-arrow-down"></span><span class="sr-only"> Scroll Down</span></button>
                  
                  <button type="button" class="fullscreen-nav-toggle"><span class="mk-icon mk-menu"></span></button>
                  
                  <div id="progress-bar" class="site-loader">
                     <div class="progress active">
                        <div class="progress-bar" style="width: 0%"></div>
                     </div>
                     <div id="progress-text"></div>
                  </div>
                  
                  <div id="messages">
                    <div id="message-top"></div>
                    <div id="message-center"></div>
                    <div id="message-left"></div>
                    <div id="message-right"></div>
                    <div id="message-bottom"></div>
                  </div>
                  
                  <div class="js-screen fade-screen"></div>
                  
                  <div id="debug" class="hide">
                    <h2>Mediakron Debugging</h2>
                  </div>
                  <div id="online-status"></div>

                  {% if presentation %}
                  <div class="lti-site-link">
                  	<div class="lti-site-link--inner">
                  		<a class="btn btn-default btn-lti-site"  target="_blank" href="{{ url('site', { 'uri': site.uri })|raw }}/{{ all }}{{ token }}">View Site</a>
                  	</div>
                  </div> 
                  {% endif %}  

               </div>  
               <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
               <script>window.jQuery || document.write('<script src="/mediakron/js/vendor/jquery-1.10.2.min.js"><\/script>')</script>
               
               <script src="/mediakron/js/vendor/jquery-ui-1.11.1.min.js" type="text/javascript"></script>
               
               <script src="/mediakron/js/vendor/bootstrap.min.js" type="text/javascript"></script>
               <script src="/mediakron/js/vendor/bootstrap-accessibility.min.js" type="text/javascript"></script>
               <script src="/mediakron/js/vendor/json2.min.js" type="text/javascript"></script>
               <script src="/mediakron/js/vendor/hoverIntent.js" type="text/javascript"></script>
               <script src="/mediakron/js/vendor/spectrum.js" type="text/javascript"></script>
               <script src="/mediakron/js/vendor/lodash.js" type="text/javascript"></script>
               <script src="/mediakron/js/vendor/backbone.js" type="text/javascript"></script>
               <script src="/mediakron/js/vendor/leaflet-src.js" type="text/javascript"></script>
               <script src="/mediakron/js/vendor/sparkline.js" type="text/javascript"></script>
               
               <script src="/mediakron/js/src/preview/build/components/compatibility.js"></script>
               <script src="/mediakron/js/src/preview/build/pdf.js"></script>
               <script src="/mediakron/js/src/preview/build/components/pdf_viewer.js"></script>
               
               <script src="/mediakron/js/vendor/me/mediaelement-and-player.min.js" type="text/javascript"></script>
               <script src="/mediakron/js/vendor/chosen/chosen.jquery.min.js" type="text/javascript"></script>
               
               <script id="settings" src="{{ path('settings', { 'uri': site.uri })|raw }}{{ token }}" type="text/javascript"></script>
               <script src="/mediakron/js/vendor/require/require-2.1.15.min.js" type="text/javascript"></script>
               <script src="/mediakron/js/src/fullscreen.js" type="text/javascript"></script>
               <script src="/mediakron/js/src/init.js" type="text/javascript"></script>
               <script src="/mediakron/js/src/access.js" type="text/javascript"></script>
               <script src="/mediakron/js/build/templates.js" type="text/javascript"></script>
               <script src="/mediakron/js/src/messages.js" type="text/javascript"></script>
               <script src="/mediakron/js/src/functions.js" type="text/javascript"></script>
               <script src="/mediakron/js/src/media.js" type="text/javascript"></script>
               <script src="/mediakron/js/src/annotation.js" type="text/javascript"></script>
               <script src="/mediakron/js/src/progression.js" type="text/javascript"></script>
               <script src="/mediakron/js/src/comparison.js" type="text/javascript"></script>
               <script src="/mediakron/js/src/models.js" type="text/javascript"></script>
               <script src="/mediakron/js/src/collections.js" type="text/javascript"></script>
               <script src="/mediakron/js/src/edit.js" type="text/javascript"></script>
               <script src="/mediakron/js/src/views/views.js" type="text/javascript"></script>
               <script src="/mediakron/js/src/views/sidebars.js" type="text/javascript"></script>
               <script src="/mediakron/js/src/views/controller.js" type="text/javascript"></script>
               <script src="/mediakron/js/src/views/item.js" type="text/javascript"></script>
               <script src="/mediakron/js/src/views/story.js" type="text/javascript"></script>
               <script src="/mediakron/js/src/views/slideshow.js" type="text/javascript"></script>
               <script src="/mediakron/js/src/views/narrative.js" type="text/javascript"></script>
               <script src="/mediakron/js/src/views/folder.js" type="text/javascript"></script>
               <script src="/mediakron/js/src/views/progression.js" type="text/javascript"></script>
               <script src="/mediakron/js/src/views/comparison.js" type="text/javascript"></script>
               <script src="/mediakron/js/src/views/map.js" type="text/javascript"></script>
               <script src="/mediakron/js/src/views/timeline.js" type="text/javascript"></script>
               <script src="/mediakron/js/src/views/regions.js" type="text/javascript"></script>
               <script src="/mediakron/js/src/views/popups.js" type="text/javascript"></script>
               <script src="/mediakron/js/src/maps.js" type="text/javascript"></script>
               <script src="/mediakron/js/src/timeline/format.js" type="text/javascript"></script>
               <script src="/mediakron/js/src/timeline/zoom.js" type="text/javascript"></script>
               <script src="/mediakron/js/src/timeline/timeline.js" type="text/javascript"></script>
               <script src="/mediakron/js/src/views/tag.js" type="text/javascript"></script>
               <script src="/mediakron/js/src/events.js" type="text/javascript"></script>
               <script src="/mediakron/js/src/views/help.js" type="text/javascript"></script>
               <script src="/mediakron/js/src/settings/settings.js" type="text/javascript"></script>
               <script src="/mediakron/js/src/settings/content.forms.js" type="text/javascript"></script>
               <script src="/mediakron/js/src/settings/browsers.js" type="text/javascript"></script>
               <script src="/mediakron/js/src/settings/navigation.js" type="text/javascript"></script>
               <script src="/mediakron/js/src/settings/relationships.js" type="text/javascript"></script>
               <script src="/mediakron/js/src/settings/import.js" type="text/javascript"></script>
               <script src="/mediakron/js/src/settings/export.js" type="text/javascript"></script>
               <script src="/mediakron/js/src/settings/canvas.js" type="text/javascript"></script>
               <script src="/mediakron/js/src/views/search.js" type="text/javascript"></script>
               <script src="/mediakron/js/src/settings/search.js" type="text/javascript"></script>
               
               
               
               <script src="/mediakron/js/src/app.js" type="text/javascript"></script>
               
               <!-- this should be removed from every live site.  Debugging only -->
               <script src="/mediakron/js/src/debug.js" type="text/javascript"></script>
               {% if items %}
               <script> 
                  Mediakron.preload = {{ items|raw }};
               </script>
               {% endif %}
               {% if presentation %}
               <script> 
                   $(document).ready(function(){
                    Mediakron.classes.setStatic('lti-view snargle');
        		    Mediakron.Status.lti = true;
        	      });
                  Mediakron.Status.ltiReturnUrl = "{{ presentation }}"; 
                  Mediakron.Status.ltiIntendedUse = "{{ intent }}";
                  Mediakron.Status.ltiValidReturn = "{{ return }}";
               </script>
               {% endif %}
               <script>
                  (function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
                  function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
                  e=o.createElement(i);r=o.getElementsByTagName(i)[0];
                  e.src='//www.google-analytics.com/analytics.js';
                  r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
                  ga('create','{% if site.ga %}{{ site.ga }}{% else %}UA-54753108-1{% endif %}');ga('send','pageview');
               </script>
            </body>
         </html>
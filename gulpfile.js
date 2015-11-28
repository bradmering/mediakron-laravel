var elixir 		= require('laravel-elixir');
var jshint 		= require('gulp-jshint');
var template 	= require('gulp-template-compile');
var concat 		= require('gulp-concat');
var gulp   		= require('gulp');


 
elixir.extend('uglify', function() {
 
  gulp.task('uglify', function() {
 
    gulp.src('resources/js/*.js')
        .pipe(uglify())
        .pipe(ext('-min.js'))
        .pipe(gulp.dest('public/js/min'));
        
  });
 
  return this.queueTask('uglify'); 
});

elixir.extend('template', function() {
   gulp.task('template', function () {
       process.stdout.write('yo');
      gulp.src('resources/assets/templates/*.html')
        .pipe(template())
        .pipe(concat('templates.js'))
        .pipe(gulp.dest('resources/assets/js/'));
    });
    
    return this.queueTask('template'); 
});
/*
 |--------------------------------------------------------------------------
 | Elixir Asset Management
 |--------------------------------------------------------------------------
 |
 | Elixir provides a clean, fluent API for defining some basic Gulp tasks
 | for your Laravel application. By default, we are compiling the Sass
 | file for our application, as well as publishing vendor resources.
 |
 */

elixir(function(mix) {
    mix.sass('build.scss','resources/assets/css/app.css');
    mix.styles([
        '../components/normalize-css/normalize.css',
        'animate.css',
        'app.css'
    ]);
    mix.template();
    mix.scripts([
        //'../components/jquery/dist/jquery.js',
        //'../components/underscore/underscore.js',
        //'../components/backbone/backbone.js',
        
        'templates.js',
        'init.js',
        'views.js',
        'app.js'
        
    ], 'public/js/app.js');
    mix.version(['js/app.js','css/all.css']);
});
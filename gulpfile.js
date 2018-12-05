/**
 * Configuration
 */
var project = {
	devUrl: 'http://gbh.local',
	theme: './wp-content/themes/gbh-theme',
	stylesInput: 'src/styles',
	stylesOutput: 'css',
	scriptsInput: 'src/js',
	scriptsOutput: 'js'
};

var autoprefixerOptions = {
  browsers: ['last 2 versions', '> 5%', 'Firefox ESR']
};



/**
 * Dependencies
 */
var gulp = require('gulp');
var autoprefixer = require('gulp-autoprefixer');
var browserSync = require('browser-sync');
var nano = require('gulp-cssnano');
var notify = require('gulp-notify');
var sass = require('gulp-sass');
var sourcemaps = require('gulp-sourcemaps');
// var order = require("gulp-order");
// var addsrc = require('gulp-add-src');
// var concat = require('gulp-concat');
// var uglify = require('gulp-uglify');
// var jshint = require('gulp-jshint');



/**
 * Uncomment to log start up time of Gulp tasks
 */
// require('gulp-stats')(gulp);



/**
 * BrowserSync
 */
var reload  = browserSync.reload;

gulp.task('browser-sync', function() {
	browserSync({
		proxy: project.devUrl,
		host: 'localhost',
		port: 8888,
		injectChanges: true
	});
});



/**
 * SASS
 */
gulp.task('sass', function () {
	gulp.src(project.theme + '/' + project.stylesInput + '/*.scss')
	.pipe(sourcemaps.init())
	.pipe(sass({style: 'compressed'}))
	.on("error", notify.onError(function (error) { return error.message; }))
	.pipe(autoprefixer(autoprefixerOptions))
	.pipe(sourcemaps.write('maps'))
	.pipe(gulp.dest(project.theme + '/' + project.stylesOutput))
	.pipe(browserSync.reload({ stream: true }));
});



/**
 * Default task
 */
gulp.task('watch', ['sass', 'browser-sync'], function () {
	gulp.watch(project.theme + '/' + project.stylesInput + '/**/*.scss', ['sass']);
	gulp.watch(project.theme + '/**/*.php').on('change', reload);
});



/**
 * Build task
 */
gulp.task('default', function () {
	gulp.src(project.theme + '/' + project.stylesInput + '/*.scss')
	.pipe(sass())
	.pipe(autoprefixer(autoprefixerOptions))
	.pipe(nano())
	.pipe(gulp.dest(project.theme + '/' + project.stylesOutput));
});
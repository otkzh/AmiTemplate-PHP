var gulp = require('gulp');
var path = require('path');
var compass = require('gulp-compass');
var browserSync = require('browser-sync');
var plumber = require('gulp-plumber');
var notify = require('gulp-notify');

var hostName = "base.dev/";

var dir = {
	"base": "./public"
}

var paths = {
	"scss": dir.base + "/**/*.scss",
	"css"	: dir.base + "/**/*.css",
	"php"	: dir.base + "/**/*.php",
	"js"	: dir.base + "/**/*.js",
}

var plumberErrorHandler = {
	errorHandler: notify.onError({
		message: "Error: <%= error.message %>"
	})
};

gulp.task('compass', function () {
	gulp.src(paths.scss)
		.pipe(plumber(plumberErrorHandler))
		.pipe(compass({
			config_file	: dir.base + "/config.rb",
			css			: dir.base + "/css",
			sass			: dir.base + "/sass",
			image			: dir.base + "/img",
//			style			: "compressed",
			time			: true
		}))
});


gulp.task('browser-sync', function () {
	browserSync({
		proxy: hostName
	});
});

gulp.task('bs-reload', function () {
	browserSync.reload();
});

gulp.task('default', ['compass', 'browser-sync'], function () {
	gulp.watch(paths.scss, ['compass']);
	gulp.watch([paths.css, paths.php, paths.js], ['bs-reload']);
});

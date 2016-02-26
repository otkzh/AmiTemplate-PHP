var gulp = require('gulp');
var path = require('path');
var compass = require('gulp-compass');
var browserSync = require('browser-sync');
var plumber = require('gulp-plumber');
var notify = require('gulp-notify');

var hostName = "192.168.33.50";

var dir = {
	"base": "./public"
}

var paths = {
	"scss": dir.base + "/**/*.scss",
	"css"	: dir.base + "/**/*.css",
	"php"	: dir.base + "/**/*.{php,html}",
	"js"	: dir.base + "/**/*.js",
  "img"	: dir.base + "/**/*.{png,jpg,gif,pdf}",
  "font"	: dir.base + "/**/*.{eot,svg,ttf,woff,woff2,otf}",
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
		proxy: hostName,
		port: 4000
	});
});

gulp.task('bs-reload', function () {
	browserSync.reload();
});

gulp.task('default', ['compass', 'browser-sync'], function () {
	gulp.watch(paths.scss, ['compass']);
	gulp.watch([paths.css, paths.php, paths.js], ['bs-reload']);
});

gulp.task('dest', function() {
    gulp.src([ paths.css, paths.php ,paths.js ,paths.img,paths.font])
    .pipe(gulp.dest('./dest/'));
});

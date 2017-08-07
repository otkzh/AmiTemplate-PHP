//ami-Template custom

/*

$ gulp = scssやjavascriptファイルの更新を検知して、自動で更新。
$ gulp dest = 納品用に整形してreleaseフォルダーに書き出し。
$ gulp img-min = 画像ファイルを圧縮※たまに実行しておくと便利。

*/

//--------------------- プラグイン読み込み ---------------------//

var gulp = require('gulp');
var path = require('path');

//base
var browserSync = require('browser-sync');
var plumber = require('gulp-plumber');
var notify = require('gulp-notify');
var rename = require('gulp-rename');

//css/scss
var sass = require('gulp-sass');
var sassImage = require('gulp-sass-image');
var autoprefixer = require('gulp-autoprefixer');
var cssmin = require('gulp-cssmin');

//html php
//var prettify = require('gulp-html-prettify');

//images
var imagemin = require('gulp-imagemin');
var pngquant = require('imagemin-pngquant');


//js/es2015/modernizr
var webpack = require('webpack-stream');
var webpacks = require("webpack");
var modernizr = require('gulp-modernizr');
var uglify = require('gulp-uglify');


//--------------------- セッティング ---------------------//

var hostName = "192.168.99.99"; //browserSyncするローカルIPを記載


//各種パス関連
var paths = {
	"dir": "public/",
	"scss": "public/lib/scss",
	"css": "public/lib/css",
	"js": "public/lib/js",
	"ts": "public/lib/ts",
	"img": "public/lib/img",
	"no": ("!**/_*", "!**/_**"),
}

//各種パス関連(dest)
var dest = {
	"dir": "dest",
	"css": "dest/lib/css",
	"js": "dest/lib/js",
	"img": "dest/lib/img",
}

// browser-sync
gulp.task('browser-sync', function () {
	browserSync.init({
		proxy: hostName,
		port: 4000 //空いているprotを選択
	});
});

gulp.task('bs-reload', function () {
	browserSync.reload();
});

//エラー表記
var plumberErrorHandler = {
	errorHandler: notify.onError({
		message: "Error: <%= error.message %>"
	})
};

//---------------html

//作業用※必要であれば利用
//gulp.task('html', function () {
//	gulp.src([paths.dir + '/**/*.{html,php}', paths.no])
//		.pipe(prettify({
//			indent_char: '	',
//			indent_size: 2
//		}))
//		.pipe(gulp.dest(paths.dir))
//});

//納品用に整形して書き出し
gulp.task('html-dest', function () {
	gulp.src([paths.dir + '/**/*.{html,php}', paths.no])
	//		.pipe(prettify({
	//			indent_char: '	',
	//			indent_size: 2
	//		}))
	.pipe(gulp.dest(dest.dir))
});

//---------------scss・css

//画像サイズを取得しscssに書き出し
gulp.task('scss-img', function () {
	return gulp.src([paths.img + '/**/*.{png,jpg,gif,svg}', paths.no])
	.pipe(sassImage({
		targetFile: '_scss-image.scss',
		images_path: paths.img,
		css_path: paths.css,
		includeData: false,
		createPlaceholder: false
	}))
	.pipe(gulp.dest(paths.scss + '/mixins'));
});

//scssをcssへ変換
gulp.task('css', function () {
	return gulp.src([paths.scss + '/**/*.scss', paths.no])
	.pipe(plumber(plumberErrorHandler))
	.pipe(sass.sync().on('error', sass.logError))
	.pipe(autoprefixer({
		browsers: ['last 2 versions', 'android >= 4.4', 'IE 11'],
		cascade: false,
	}))
	.pipe(gulp.dest(paths.css));
});

//cssを圧縮して納品用に書き出し
gulp.task('css-dest', function () {
	return gulp.src([paths.css + '/**/*.css', paths.no])
	.pipe(cssmin())
	.pipe(gulp.dest(dest.css));
});

//---------------image

//制作中画像の圧縮
gulp.task('img-min', function () {
	return gulp.src([paths.img + '/**/*.{png,jpg,gif}', paths.no])
	.pipe(imagemin(
		[pngquant({
			quality: '40-70',
			speed: 1
		})]
	))
	.pipe(gulp.dest(paths.img));
});

//納品用画像を書き出し
gulp.task('img-dest', function () {
	return gulp.src([paths.img + '/**/*.{png,jpg,gif,svg,pdf,ico}', paths.no])
	.pipe(gulp.dest(dest.img));
});

//---------------js

//webpack設定
gulp.task('webpack', function () {
	return webpack({
		entry: {
			scripts: './' + paths.ts + '/scripts.js',
			ie: './' + paths.ts + '/ie.js'
		},
		output: {
			filename: '[name].js',
		},
		devtool: 'inline-source-map',
		module: {
			loaders: [
				{
					test: /\.css$/,
					loader: "style!css"
				},
				{
					test: /\.js$/,
					exclude: /node_modules/,
					loader: "babel-loader",
					query: {
						presets: ['es2015']
					}
				},
				{
					test: /\.(jpg|gif|png)$/,
					loader: 'url?limit=25000'
				}
			]
		},
		resolve: {
			extenstions: ['', '.js', '.json', '.html'],
			alias: {
				JQuerys: __dirname + '/node_modules/jquery/dist/jquery.js',
				jqueryEasing: __dirname + '/node_modules/jquery.easing/jquery.easing.min.js',
				Swiper: __dirname + '/node_modules/swiper/dist/js/swiper.js',
				SwiperCSS: __dirname + '/node_modules/swiper/dist/css/swiper.css',
				inView: __dirname + '/node_modules/jquery-inview/jquery.inview.js',
				magPopup: __dirname + '/node_modules/magnific-popup/dist/jquery.magnific-popup.js',
				magPopupCSS: __dirname + '/node_modules/magnific-popup/dist/magnific-popup.css',
				Vue: __dirname + '/node_modules/vue/dist/vue.js'
			}
		},
	})
	.pipe(gulp.dest(paths.js));
});

//modernizr
gulp.task('modernizr', ['webpack'], function () {
	gulp.src([paths.js + '/**/*.js', paths.css + '/**/*.css', '!**/modernizr.js'])
	.pipe(modernizr({
		options: [
			'setClasses',
			'addTest',
			'html5printshiv',
			'testProp',
			'fnBind',
		]
	}))
	.pipe(gulp.dest(paths.js));
});

//js処理簡略用
gulp.task('js', ['modernizr']);


//jsファイルを圧縮して納品用に書き出し
gulp.task('js-dest', function () {
	return gulp.src(paths.js + '/**/*.js')
	.pipe(uglify())
	.pipe(gulp.dest(dest.js))
});

//---------------その他

//納品用書き出し
gulp.task('etc-dest', function () {
	return gulp.src(paths.dir + '/**/*.{eot,svg,ttf,woff,woff2,otf,txt,json}')
	.pipe(gulp.dest(dest.dir))
});

//------------納品ファイル書き出し

gulp.task('dest', ['img-dest', 'js-dest', 'css-dest', 'html-dest', 'etc-dest']);

//gulp watchタスク
gulp.task('default', ['browser-sync'], function () {
	gulp.watch(paths.dir + '**/*.{html,php}').on("change", browserSync.reload);
	gulp.watch(paths.css + '/**/*.css').on("change", browserSync.reload);
	gulp.watch(paths.js + '/**/*.js').on("change", browserSync.reload);
	gulp.watch(paths.img + '/**/*.{png,jpg,gif,svg,ico}', ['scss-img']);
	gulp.watch(paths.scss + '/**/*.scss', ['css']);
	gulp.watch([paths.ts + '/**/*.js', '!**/modernizr.js'], ['js']);
});

//ami-Template custom

/*

$ npm run gulp = scssやjavascriptファイルの更新を検知して、自動で更新。
$ npm run gulp dest = 納品用に整形してdestフォルダーへ書き出し。
$ npm run gulp css = scssをcssへ書き出し
$ npm run gulp js = es2015をjsへ書き出し
$ npm run gulp scss-img = 画像のサイズを取得してmixinへ書き出し。
$ npm run gulp img-min = 画像ファイルを圧縮※たまに実行しておくと便利。

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
var sourcemaps = require("gulp-sourcemaps");
var cssmin = require('gulp-cssmin');

//html php
//var prettify = require('gulp-html-prettify');

//images
var imagemin = require('gulp-imagemin');
var pngquant = require('imagemin-pngquant');

//js/es2015/modernizr
var webpacks = require('webpack-stream');
var webpack = require('webpack');
var modernizr = require('gulp-modernizr');
var uglify = require('gulp-uglify');


//--------------------- セッティング ---------------------//

var hostName = "192.168.99.99"; //browserSyncするローカルIPを記載


//各種パス関連
var paths = {
  "dir": "public/",
  "img": "public/lib/img",
  "css": "public/lib/css",
  "js": "public/lib/js",
  "scss": "public/lib/_scss",
  "es2015": "public/lib/_es2015",
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
    targetFile: '__scss-img.scss',
    images_path: paths.img,
    css_path: paths.css,
    includeData: false,
    createPlaceholder: false
  }))
  .pipe(gulp.dest(paths.scss + '/mixin/_output/'));
});

//scssをcssへ変換
gulp.task('css', function () {
  return gulp.src([paths.scss + '/**/*.scss', paths.no])
  .pipe(plumber(plumberErrorHandler))
  .pipe(sourcemaps.init())
  .pipe(sass.sync().on('error', sass.logError))
  .pipe(autoprefixer({
    browsers: ['last 2 versions', 'android >= 4.4', 'IE 11'],
    cascade: false,
  }))
  .pipe(sourcemaps.write('./'))
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
  return plumber(plumberErrorHandler)
  .pipe (webpacks({
    entry: {
      scripts: './' + paths.es2015 + '/scripts.js'
    },
    output: {
      filename: '[name].js',
    },
    devtool: 'inline-source-map',
    module: {
      rules: [
        {
          test: /\.(css|scss)$/,
          use: [
            'style-loader',
            'css-loader',
            "autoprefixer-loader?{browsers: ['last 2 versions', 'android >= 4.4', 'IE 11']}",
            "sass-loader",
          ]
        },
        {
          test: /\.js$/,
          exclude: /(node_modules|bower_components)/,
          use:[
            {
              loader:'babel-loader',
              options: {
                presets:  [
                  ["env", {"targets": {"browsers": ['last 2 versions', 'android >= 4.4', 'IE 11']}}]
                ]
              }
            }
          ],//use_end
        },
        {
          test: /\.(jpg|gif|png)$/,
          use:[
            {loader: 'url-loader?limit=25000'}
          ]
        }
      ]
    },
    resolve: {
      alias: {
        Vue: __dirname + '/node_modules/vue/dist/vue.js'
      }
    },
    plugins: [
      new webpack.optimize.AggressiveMergingPlugin(),　//ファイルを細かく分析し、まとめられるところはできるだけまとめてコードを圧縮する
      new webpack.ProvidePlugin({　//jqueryはグローバルに出す設定。これでrequireせず使えるのでjqueryプラグインもそのまま動く。
        jQuery: "jquery",
        $: "jquery",
        jquery: "jquery",
        IScroll: "fullpage.js/vendors/scrolloverflow.min"
      })
    ]
  }))
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
  gulp.watch([paths.es2015 + '/**/*.{js,scss}', '!**/modernizr.js'], ['js']);
});

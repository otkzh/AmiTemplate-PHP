//ami-Template custom

/*

$ npm run gulp = scssやjavascriptファイルの更新を検知して、自動で更新
$ npm run gulp dest = 納品用に整形してdestフォルダーへ書き出し
$ npm run gulp css = scssをcssへ書き出し
$ npm run gulp js = es2015をjsへ書き出し
$ npm run gulp scss-img = 画像のサイズを取得してmixinへ書き出し
$ npm run gulp img-min = 書き出した画像ファイルを圧縮

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
var aigis = require("gulp-aigis");

//html php
var htmlbeautify = require('gulp-html-beautify');

//images
var imagemin = require('gulp-imagemin');
var pngquant = require('imagemin-pngquant');
var mozjpeg = require('imagemin-mozjpeg');

//js/es2015/modernizr
var webpacks = require('webpack-stream');
var webpack = require('webpack');
var modernizr = require('gulp-modernizr');
var uglify = require('gulp-uglify-es').default;





//--------------------- セッティング ---------------------//

var hostName = "192.168.99.99"; //browserSyncするローカルIPを記載

var basePath = "./";

//各種パス関連
var paths = {
  "dir": "public/",
  "img": "public/lib/img",
  "css": "public/lib/css",
  "js": "public/lib/js",
  "scss": "public/lib/_scss",
  "es2015": "public/lib/_es2015",
  "no": ("!**/_*", "!**/_**","!public/_styleguide/**"),
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

//納品用に整形して書き出し
gulp.task('html-dest', function () {
  gulp.src('./public/**/*.{html,php}')
  .pipe(htmlbeautify({
    indent_char: ' ',
    indent_size: 2
  }))
  .pipe(gulp.dest('./dest'))
});

//---------------scss・css

//画像サイズを取得しscssに書き出し
gulp.task('scss-img', function () {
  return gulp.src('./public/lib/img/**/*.{png,jpg,gif,svg}')
  .pipe(sassImage({
    targetFile: '__scss-img.scss',
    images_path: './public/lib/img/',
    css_path: './public/lib/css/',
    includeData: false,
    createPlaceholder: false
  }))
  .pipe(gulp.dest('./public/lib/_scss/mixin/_output/'));
});

//styleguide書き出し
gulp.task("doc", function() {
  gulp.src("./styleguide-config/aigis_config.yml")
  .pipe(aigis());
});

//scssをcssへ変換
gulp.task('css', function () {
  return gulp.src('./public/lib/_scss/**/*.scss')
  .pipe(plumber(plumberErrorHandler))
  .pipe(sourcemaps.init())
  .pipe(sass.sync().on('error', sass.logError))
  .pipe(autoprefixer({
    browsers: ['last 2 versions', 'android >= 4.4', 'IE 11'],
    cascade: false,
  }))
  .pipe(sourcemaps.write('./'))
  .pipe(gulp.dest('./public/lib/css'));
});

//cssを圧縮して納品用に書き出し
gulp.task('css-dest', function () {
  return gulp.src(['./public/**/*.css','!**/_styleguide/**'])
  .pipe(cssmin())
  .pipe(gulp.dest('./dest'));
});

//---------------image

//納品用画像を書き出し
gulp.task('img-dest', function () {
  return gulp.src([paths.img + '/**/*.{png,jpg,gif,svg,pdf,ico}', paths.no])
  .pipe(gulp.dest(dest.img));
});

//書き出した画像の圧縮
gulp.task('img-min', function () {
  return gulp.src('./dest/**/*.{png,jpg}')
  .pipe(imagemin(
    [
      pngquant({
        quality: '100',
        speed: 1,
        floyd:0
      }),
      mozjpeg({
        quality:85,
        progressive: true
      })
    ]
  ))
  .pipe(gulp.dest('./dest'));
});

//---------------js


//webpack設定
gulp.task('webpack', function () {
  return plumber(plumberErrorHandler)
  .pipe (webpacks({
    entry: {
      scripts: './public/lib/_es2015/scripts.js'
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
  .pipe(gulp.dest('./public/lib/js'));
});

//modernizr
gulp.task('modernizr', ['webpack'], function () {
  gulp.src(['./public/lib/js/**/*.js', './public/lib/css/**/*.css', '!**/modernizr.js'])
  .pipe(modernizr({
    options: [
      'setClasses',
      'addTest',
      'html5printshiv',
      'testProp',
      'fnBind',
    ]
  }))
  .pipe(gulp.dest('./public/lib/js'));
});

//js処理簡略用
gulp.task('js', ['modernizr']);

//jsファイルを圧縮して納品用に書き出し
gulp.task('js-dest', function () {
  return gulp.src('./public/**/*.js')
  .pipe(uglify().on('error', function(e){
      console.log(e);
    }) )
  .pipe(gulp.dest('./dest'))
});

//---------------その他

//納品用書き出し
gulp.task('etc-dest', function () {
  return gulp.src(['./public/**/*.{eot,svg,ttf,woff,woff2,otf,txt,json,pem}','./public/**/.htaccess'])
  .pipe(gulp.dest('./dest'))
});

//------------納品ファイル書き出し

gulp.task('dest', ['img-dest', 'js-dest', 'css-dest', 'html-dest', 'etc-dest']);

//gulp watchタスク
gulp.task('default', ['browser-sync'], function () {
  gulp.watch('./public/**/*.{html,php}').on("change", browserSync.reload);
  gulp.watch('./public/**/*.css').on("change", browserSync.reload);
  gulp.watch('./public/**/*.js').on("change", browserSync.reload);
  gulp.watch('./public/lib/img/**/*.{png,jpg,gif,svg}', ['scss-img']);
  gulp.watch('./public/lib/_scss/**/*.scss', ['css','doc']);
  gulp.watch(['./public/lib/_es2015/**/*.{js,scss}', '!**/modernizr.js'], ['js']);
});

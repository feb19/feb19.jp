var gulp = require('gulp');
var spritesmith = require('gulp.spritesmith');
var coffee = require('gulp-coffee');
var uglify = require('gulp-uglify');
var sass = require('gulp-sass');
var minifyCss = require('gulp-minify-css');
var concat = require('gulp-concat');
var imagemin = require('gulp-imagemin');

// CoffeeScript
gulp.task('compile-coffee', function() {
	gulp.src('coffee/*.coffee')
		.pipe(coffee())
		.pipe(gulp.dest('js'))
});

// Compile JS
gulp.task('compile-js', function() {
	var compileFileName = 'application.js'
	gulp.src(['js/*.js', '!js/'+compileFileName])
		.pipe(concat(compileFileName))
		.pipe(uglify({preserveComments:'some'}))
		.pipe(gulp.dest('../public/js'))
});

// Sass
gulp.task('compile-sass', function() {
	compileFileName = 'application.css'
	gulp.src('scss/*.scss')
		.pipe(sass())
		.pipe(gulp.dest('css'))
    gulp.src(['css/*.css', '!css/' + compileFileName])
        .pipe(concat(compileFileName))
		.pipe(minifyCss())
		.pipe(gulp.dest('../public/css'))
});

// Compile CSS
gulp.task('compile-css', function() {
	compileFileName = 'application.css'
	gulp.src(['css/*.css', '!css/' + compileFileName])
		.pipe(concat(compileFileName))
		.pipe(minifyCss())
		.pipe(gulp.dest('../public/css'))
});

// Compile Sprite
gulp.task('sprite', function () {
    var spriteData = gulp.src('sprites/*.png') //スプライトにする愉快な画像達
                         .pipe(spritesmith({
                             imgName: 'sprite.png', //スプライトの画像
                             cssName: '_sprite.scss', //生成されるscss
                             imgPath: '/images/sprite.png', //生成されるscssに記載されるパス
                             cssFormat: 'scss', //フォーマット
                             cssVarMap: function (sprite) {
                                 sprite.name = 'sprite-' + sprite.name; //VarMap(生成されるScssにいろいろな変数の一覧を生成)
                             }
                         }));
    spriteData.img.pipe(gulp.dest('images/')); //imgNameで指定したスプライト画像の保存先
    spriteData.css.pipe(gulp.dest('scss/')); //cssNameで指定したcssの保存先
});

// Compile Images
gulp.task('imagemin', function() {
  gulp.src( 'images/**/*.+(jpg|jpeg|png|gif|svg)' )
    .pipe(imagemin( {optimizationLevel: 7} ))
    .pipe(gulp.dest( '../public/images' ));
});

// Short cut
gulp.task('compile', ['compile-coffee', 'compile-sass', 'compile-js', 'compile-css']);

// Default 
gulp.task('default', ['sprite', 'compile'], function() {
    gulp.watch(['scss/*.scss'], ['compile']);
    gulp.watch(['js/*.js'], ['compile']);
    gulp.watch(['coffee/*.coffee'], ['compile']);
    gulp.watch(['sprite/*.png'], ['sprite']);
});

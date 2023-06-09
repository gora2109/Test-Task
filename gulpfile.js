var gulp = require('gulp'),
	injectPartials  = require('gulp-inject-partials'),
	autoprefixer 	= require('gulp-autoprefixer'),
	concat          = require('gulp-concat'),
	minify = require('gulp-minify'),
	sass            = require('gulp-sass')(require('sass'));

gulp.task('watch', gulp.series(function (){
	//СОЗДАНИЕ ВИРТУАЛЬНОГО СЕРВЕРА
	/*browserSync({
		server: {
			baseDir: './build',
			index: "index.html",
			directory: true
		},
		watchTask: true
	});*/
	//ПОДКЛЮЧЕНИЕ ВНЕШНИХ СТИЛЕЙ
	/*gulp.src([
		'node_modules/font-awesome/css/font-awesome.css', // подключение font-awesome
		'node_modules/swiper/swiper-bundle.min.css', // Подключаем Swiper
		'node_modules/air-datepicker/air-datepicker.css', // Подключаем air-datepicker
		'node_modules/plyr/dist/plyr.css', // Подключаем plyr-video
		'node_modules/@fancyapps/ui/dist/fancybox.css', // Подключаем fancybox

		'node_modules/choices.js/public/assets/styles/choices.css', // подключение choices
	])
		.pipe(concat('libs.min.css'))
		.pipe(gulp.dest('build/css'));
	//ПОДКЛЮЧЕНИЕ ВНЕШНИХ СКРИПТОВ
	gulp.src([
		// 'node_modules/jquery-validation/dist/jquery.validate.js', // Подключаем jQuery Validation
		'node_modules/just-validate/dist/just-validate.production.min.js', // Подключаем just Validate
		// 'node_modules/jcf/dist/js/jcf.js', // Подключаем JCF
		// 'node_modules/jcf/dist/js/jcf.select.js', // Подключаем JCF-SELECT
		// 'node_modules/jcf/dist/js/jcf.number.js', // Подключаем JCF-NUMBER

		'node_modules/imask/dist/imask.min.js', // подключение Маски
		'node_modules/swiper/swiper-bundle.min.js', // Подключаем Swiper
		'node_modules/plyr/dist/plyr.polyfilled.js', // Подключаем plyr-video

		'node_modules/air-datepicker/air-datepicker.js', // Подключаем air-datepicker

		'node_modules/@googlemaps/markerclusterer/dist/index.min.js', // Подключаем markerclusterer. Програма для google-maps

		'node_modules/chart.js/dist/chart.js', // Подключаем плагин графиков Chart.js

		'node_modules/@fancyapps/ui/dist/fancybox.umd.js', // Подключаем плагин fancybox

		'node_modules/sticky-sidebar/dist/sticky-sidebar.js', // Подключаем плагин липкого sidebar

		'node_modules/choices.js/public/assets/scripts/choices.min.js', // подключение плагина choices для select

	])
		.pipe(concat('libs.js'))
		.pipe(minify({
			ext: {
				min: '.min.js'
			},
			ignoreFiles: ['-min.js']
		}))
		.pipe(gulp.dest('build/js'));*/
	//ОТСЛЕЖИВАНИЕ ИЗМЕНЕНИЙ

	//ИЗМЕНЕНИЕ СТИЛЕЙ
	var css = gulp.watch('./wp-content/themes/test-task/assets/sass/**/*.sass');
	css.on('change', function() {
		gulp.src('./wp-content/themes/test-task/assets/sass/main.sass')
			.pipe(sass())
			.pipe(autoprefixer(['last 2 versions'], {cascade: true}))
			.pipe(gulp.dest('./wp-content/themes/test-task/assets/css'));

		// browserSync.reload();
	});
	//ИЗМЕНЕНИЕ СКРИПТОВ
	var js = gulp.watch('./wp-content/themes/test-task/assets/js/*.js');
	js.on('change', function() {
		gulp.src([
			'./wp-content/themes/test-task/assets/main.js'
		])
			.pipe(gulp.dest('/wp-content/themes/test-task/assets/js'));
	})

}));

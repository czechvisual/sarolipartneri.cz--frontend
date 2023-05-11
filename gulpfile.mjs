import gulp from 'gulp';
import sassLib from 'sass';
import gulpSass from 'gulp-sass';
import sassLint from 'gulp-sass-lint';
import stylelint from 'gulp-stylelint';
import sourcemaps from 'gulp-sourcemaps';
import autoprefixer from 'gulp-autoprefixer';
import cleanCSS from 'gulp-clean-css';
import imagemin from 'gulp-imagemin';
import terser from 'gulp-terser';
import svgmin from 'gulp-svgmin';
import eslint from 'gulp-eslint';
import browserSyncModule from 'browser-sync';

const { create: createBrowserSync } = browserSyncModule;
const browserSync = createBrowserSync();
const sass = gulpSass(sassLib);

// Assets

function assets() {
  return gulp.src('assets/img/*.{jpg,jpeg,png,gif,svg}')
    .pipe(imagemin())
    .pipe(gulp.dest('public/assets/img'));
}

function svg() {
  return gulp.src('assets/img/*.svg')
    .pipe(svgmin())
    .pipe(gulp.dest('public/assets/img'));
}

// Styles

function styles() {
  return gulp.src(['assets/sass/app.scss', 'assets/sass/admin.scss'])
    .pipe(sourcemaps.init())
    .pipe(sass().on('error', sass.logError))
    .pipe(autoprefixer())
    .pipe(cleanCSS({ compatibility: 'ie8' }))
    .pipe(sourcemaps.write())
    .pipe(gulp.dest('public/assets/css'))
    .pipe(browserSync.stream());
}

// Scripts

function scripts() {
  return gulp.src('assets/js/**/*.js')
    .pipe(terser())
    .pipe(gulp.dest('public/assets/js'));
}

// Lint

function lintStyle() {
  return gulp.src('assets/sass/**/*.scss')
    .pipe(sassLint({
      options: {
        formatter: 'stylish',
        'merge-default-rules': false
      },
      rules: {
      }
    }))
    .pipe(sassLint.format())
    .pipe(sassLint.failOnError())
}

function lintScript() {
  return gulp.src(['assets/js/**/*.js'])
    .pipe(eslint())
    .pipe(eslint.format())
    .pipe(eslint.failAfterError());
}

// Watch

function watch() {
  browserSync.init({
    proxy: 'localhost:3000',
    open: false,
  });

  gulp.watch('assets/sass/**/*.scss', styles);
  gulp.watch('**/*.php').on('change', browserSync.reload);
  gulp.watch('**/*.php').on('change', browserSync.reload);
  gulp.watch('assets/sass/**/*.scss', lintStyle);
  // gulp.watch('assets/js/**/*.js', lintScript);
}

export {
  assets,
  svg,
  styles,
  scripts,
  lintStyle,
  lintScript,
  watch,
};

export default gulp.parallel(assets, svg, scripts, styles);

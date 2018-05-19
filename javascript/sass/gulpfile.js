let gulp = require('gulp');//{task(),}
let sass = require('gulp-sass');//fn

gulp.task('compileSass',function(){
    // 先查找sass文件所在目录
    gulp.src('./src/sass/*.scss') // 返回文件流（液体，文件在内存中的状态）

    // scss->css
    .pipe(sass({outputStyle:'expanded'}).on('error', sass.logError))

    // 输出到硬盘
    .pipe(gulp.dest('./src/css/'))
});

// 监听文件修改，自动执行编译任务
gulp.task('jtSass',function(){
    gulp.watch('./src/sass/*.scss',['compileSass'])
})

let uglify = require('gulp-uglify');
// let babel = require('gulp-babel')

gulp.task('uglifyJS',function(){
    gulp.src('./src/js/*.js')
    .pipe(uglify())
    .pipe(gulp.dest('./src/js/dist/js'))
})


// gulp.task('default',function(){
//     gulp.src('./src/js/*.js')
//     .pipe(babel())
//     .pipe(gulp.dest('./src/js/dist.js'))
// })
const gulp = require('gulp');

gulp. task("hello", function(callback) {
    console.log('Hello, from gulp!'); 
    callback();
});

gulp.task("hello_async", async function(callback) {
    console.log('Hello async, from gulp!');
    callback();
});
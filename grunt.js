module.exports = function(grunt) {

  // Public tasks
  grunt.registerTask('default', 'less:development');
  //grunt.registerTask('watch');


  // Project Configuration
  var themePath   = 'src/wp-content/themes/wocketware/';
  var libraryPath = themePath + 'library/';
  var cssPath     = libraryPath + 'css/';
  var lessPath    = libraryPath + 'less/';


  // Dependencies
  grunt.loadNpmTasks('grunt-contrib-less');
  grunt.loadNpmTasks('grunt-contrib-watch');


  grunt.initConfig({
    
    // watch for changes in matching files and execute tasks
    watch: {
      less: {
        files: [ lessPath + '**/*.less' ],
        tasks: ['less:development', 'reload']
      }
    },

    // compile less into css    
    less: {
      development: {
        options: {
          paths: [libraryPath + 'less'],
          yuicompress: false
        },
        files: (function () {
          var files = {};
          files[cssPath + 'ie.css']     = lessPath + 'ie.less';
          files[cssPath + 'login.css']  = lessPath + 'login.less';
          files[cssPath + 'style.css']  = lessPath + 'style.less';
          return files;
        })()
      }
    }
  });
};
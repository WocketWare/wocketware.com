module.exports = function(grunt) {

  // configuration properties
  var themePath   = 'src/wp-content/themes/wocketware/';
  var libraryPath = themePath + 'library/';
  var cssPath     = libraryPath + 'css/';
  var lessPath    = libraryPath + 'less/';


  // Project configuration.
  grunt.initConfig({
    watch: {
      less: {
        files: [ lessPath + '**/*.less' ],
        tasks: ['less:development']
      }
    },
    lint: {
      all: ['grunt.js', libraryPath + 'js/!(vendor)/**/*.js']
    },
    jshint: {
      options: {
        browser: true
      }
    },
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
      },
      production: {
        options: {
          paths: ["assets/css"],
          yuicompress: true
        },
        files: {
          "path/to/result.css": "path/to/source.less"
        }
      }
    }
  });

  // Load tasks from "grunt-sample" grunt plugin installed via Npm.
  // grunt.loadNpmTasks('grunt-sample');
  grunt.loadNpmTasks('grunt-contrib-less');
  grunt.loadNpmTasks('grunt-contrib-watch');


  // Default task.
  grunt.registerTask('default', 'lint less:development');

};
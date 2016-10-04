(function() {

  'use strict';

  module.exports = function(grunt) {
    grunt.initConfig({
      pkg: grunt.file.readJSON('package.json'),
      clean: ['<%= pkg.dest %>'],
      rsync: {
        options: {
          args: ['--verbose'],
          exclude: ['.git*', '*.scss', 'scss', '*.css.map', 'assets', '.DS_Store'],
          recursive: true
        },
        dist: {
          options: {
            src: 'src/',
            dest: "<%= pkg.dest %>"
          }
        }
      }
    });

    require('matchdep').filterDev('grunt-*').forEach(grunt.loadNpmTasks);
    grunt.registerTask('default', []);
    grunt.registerTask('build', ['clean', 'rsync']);
  };

}());
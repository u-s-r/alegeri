module.exports = function (grunt) {
  'use strict';

  require('jit-grunt')(grunt);
  require('time-grunt')(grunt);

  grunt.initConfig({
    pkg: grunt.file.readJSON('package.json'),
    less: {
      core: {
        options: {
          outputSourceFiles: true,
          sourceMap: true,
          sourceMapFilename: 'assets/app/css/style.css.map',
          sourceMapURL: 'style.css.map',
          strictMath: true
        },
        files: {
          'assets/app/css/style.css': 'less/style.less'
        }
      }
    },
    postcss: {
      options: {
        map: true,
        processors: [
          require('autoprefixer')
        ]
      },
      core: {
        src: 'assets/app/css/*.css'
      }
    },
    csscomb: {
      options: {
        config: 'less/.csscomb.json'
      },
      core: {
        src: 'assets/app/css/style.css',
        dest: 'assets/app/css/style.css'
      }
    },
    csslint: {
      options: {
        csslintrc: 'less/.csslintrc'
      },
      core: {
        src: 'assets/app/css/style.css'
      }
    },
    cssmin: {
      options: {
        advanced: false,
        keepSpecialComments: '*',
        sourceMap: true
      },
      core: {
        expand: true,
        cwd: 'assets/app/css',
        src: ['*.css', '!*.min.css'],
        dest: 'assets/app/css',
        ext: '.min.css'
      }
    },
    eslint: {
      options: {
        configFile: 'js/.eslintrc'
      },
      target: 'js/*.js'
    },
    jscs: {
      options: {
        config: 'js/.jscsrc'
      },
      grunt: {
        src: 'Gruntfile.js'
      },
      core: {
        src: 'js/*.js'
      }
    },
    concat: {
      core: {
        src: [
          'js/usr.js',
          'js/map-ro.js',
          'js/map-diaspora.js',
          'js/main.js'
        ],
        dest: 'assets/app/js/application.js'
      }
    },
    uglify: {
      options: {
        compress: {
          warnings: false
        },
        preserveComments: 'some'
      },
      core: {
        src: '<%= concat.core.dest %>',
        dest: 'assets/app/js/application.min.js'
      }
    },
    copy: {
      packages: {
        files: [
          {
            expand: true,
            cwd: 'node_modules/ion-rangeslider',
            src: ['css/*', 'img/*', 'js/*'],
            dest: 'assets/vendor/ion-rangeslider'
          },
          {
            expand: true,
            cwd: 'node_modules/jquery/dist',
            src: '*',
            dest: 'assets/vendor/jquery'
          },
          {
            expand: true,
            cwd: 'node_modules/jquery-validation/dist',
            src: '**',
            dest: 'assets/vendor/jquery-validation'
          },
          {
            expand: true,
            cwd: 'node_modules/jquery.scrollto',
            src: '*.js',
            dest: 'assets/vendor/jquery.scrollto'
          },
          {
            expand: true,
            cwd: 'node_modules/jvectormap',
            src: ['*.css', '*.js'],
            dest: 'assets/vendor/jvectormap'
          }
        ]
      }
    },
    watch: {
      configFiles: {
        options: {
          reload: true
        },
        files: ['Gruntfile.js', 'package.json']
      },
      js: {
        files: 'js/*.js',
        tasks: 'js'
      },
      less: {
        files: 'less/**/*.less',
        tasks: 'css'
      }
    },
    clean: {
      options: {
        force: true
      },
      assets: [
        'assets/vendor/ion-rangeslider',
        'assets/vendor/jquery',
        'assets/vendor/jquery-validation',
        'assets/vendor/jquery.scrollto',
        'assets/vendor/jvectormap'
      ],
      css: 'assets/app/css',
      js: 'assets/app/js'
    }
  });

  grunt.registerTask('assets', 'copy');
  grunt.registerTask('css', ['less', 'postcss', 'csscomb', 'csslint', 'cssmin']);
  grunt.registerTask('js', ['eslint', 'jscs', 'concat', 'uglify']);

  grunt.registerTask('build', ['assets', 'css', 'js']);
  grunt.registerTask('test', ['clean', 'build']);

  grunt.registerTask('default', 'build');
};

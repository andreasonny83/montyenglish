module.exports = function(grunt) {
	'use strict';

	var theme = 'wp-content/themes/Monty/dev/';

	// Project configuration.
	grunt.initConfig({

		pkg: grunt.file.readJSON('package.json'),

		jshint: {
		// when this task is run, lint the Gruntfile and all js files in src
			build: ['Grunfile.js', 'wp-content/themes/Monty/dev/js/*.js']
		},

		uglify: {
			options: {
				banner: '/*! <%= pkg.name %> <%= grunt.template.today("yyyy-mm-dd HH:MM:ss") %> */\n'
			},
			dist: {
				files: {
					'wp-content/themes/Monty/js/<%= pkg.name %>.min.js': 'wp-content/themes/Monty/dev/js/monty.js',
					'wp-content/themes/Monty/js/gmap.min.js': 'wp-content/themes/Monty/dev/js/gmap.js'
				}
			}
		},

		compass: {

			clean: {
				options: {
					sassDir: 'wp-content/themes/Monty/dev/sass',
					cssDir: 'wp-content/themes/Monty/css',
					fontsDir: 'wp-content/themes/Monty/fonts',
					imagesDir: 'wp-content/themes/Monty/images/',
					javascriptsDir: 'wp-content/themes/Monty/dev/js/',
					relativeAssets: true,
					clean: true,
					force: true
				}
			},

			dev: {
				options: {
					sassDir: 'wp-content/themes/Monty/dev/sass',
					cssDir: 'wp-content/themes/Monty/css',
					fontsDir: 'wp-content/themes/Monty/fonts',
					imagesDir: 'wp-content/themes/Monty/images/',
					javascriptsDir: 'wp-content/themes/Monty/dev/js/',
					environment: 'development',
					relativeAssets: true,
					debugInfo: false
				}
			},

			prod: {
				options: {
					sassDir: 'wp-content/themes/Monty/dev/sass',
					cssDir: 'wp-content/themes/Monty/css',
					fontsDir: 'wp-content/themes/Monty/fonts',
					imagesDir: 'wp-content/themes/Monty/images/',
					javascriptsDir: 'wp-content/themes/Monty/dev/js/',
					environment: 'production',
					relativeAssets: true,
					force: true
				}
			}

		},

		cssmin: {
			dist: {
				files: {
					'wp-content/themes/Monty/css/main.<%= grunt.template.today("yyyymmddHHMM") %>.css': ['wp-content/themes/Monty/css/main.css']
				}
			}
		},

		watch: {
			// for stylesheets, watch sass files
			stylesheets: {
				files: 'wp-content/themes/Monty/dev/sass/*.{scss,sass}',
				tasks: ['compass:dev']
			},

			// for scripts, run jshint and uglify
			scripts: {
				files: 'wp-content/themes/Monty/dev/js/*.js',
				tasks: ['jshint', 'uglify']
			}
		}

	});

	// grunt.loadNpmTasks('grunt-contrib-concat');
	grunt.loadNpmTasks('grunt-contrib-uglify');
	grunt.loadNpmTasks('grunt-contrib-jshint');
	grunt.loadNpmTasks('grunt-contrib-compass');
	grunt.loadNpmTasks('grunt-contrib-watch');
	grunt.loadNpmTasks('grunt-contrib-cssmin');
	grunt.log.writeln("");
	grunt.log.writeln("");
	grunt.log.writeln("");
	grunt.log.writeln("         .oooooo..o                           oooooo   oooo  ");
	grunt.log.writeln("        d8P'    `Y8                            `888.   .8'   ");
	grunt.log.writeln("        Y88bo.      .ooooo.  ooo  .oo.  ooo  .oo.888. .8'    ");
	grunt.log.writeln("         `Y8888o.  d88' `88b 888PY888b  888PY888b`888.8'     ");
	grunt.log.writeln("             `Y88b 888   888 888   888  888   888 `888'      ");
	grunt.log.writeln("        oo     .d8P888   888 888   888  888   888  888       ");
	grunt.log.writeln("         888888P'  `Y8bod8P'o888o o888oo888o o888oo888o      ");
	grunt.log.writeln("");
	grunt.log.writeln("                  https://www.sonnywebdesign.net             ");
	grunt.log.writeln("                      andreasonny83@gmail.com                ");
	grunt.log.writeln("");  

	
	// Default task(s) for dev enviroment
	grunt.registerTask('default', ['jshint', 'compass:clean', 'compass:dev']);

	// Production
	grunt.registerTask('build', ['jshint', 'uglify:dist', 'compass:clean', 'compass:prod', 'cssmin:dist']);

};
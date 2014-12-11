'use strict';
module.exports = function(grunt) {

	// load all grunt tasks matching the `grunt-*` pattern
	require('load-grunt-tasks')(grunt);

	var scripts = [
		'assets/vendor/mustache.js/mustache.js',
		'assets/scripts/mustacciuoli.js'
	];

	grunt.initConfig({

		watch: {
			js: {
				files: ['assets/scripts/*.js'],
				tasks: ['jshint', 'uglify']
			}
		},

		jshint: {
			options: {
				jshintrc: '.jshintrc',
				"force": true
			},
			all: [
				'Gruntfile.js',
				'assets/scripts/mustacciuoli.js'
			]
		},

		concat: {
			options: {
				separator: ';'
			},
			dist: {
				src: scripts,
				dest: 'assets/scripts/mustacciuoli.min.js'
			}
		},

		uglify: {
			dist: {
				options: {
					sourceMap: 'assets/scripts/sourcemap.js.map',
					sourceMappingURL: 'sourcemap.js.map',
					sourceMapPrefix: 2
				},
				files: {
					'assets/scripts/mustacciuoli.min.js': scripts
				}
			}
		}


	});

	grunt.registerTask( 'default', ['build'] );
	grunt.registerTask( 'build', ['jshint', 'concat', 'uglify'] );

};
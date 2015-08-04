/* jshint node:true */
module.exports = function( grunt ) {
	'use strict';

	require( 'load-grunt-tasks' )( grunt );

	var testeConfig = {

		// gets the package vars
		pkg: grunt.file.readJSON( 'package.json' ),

		// setting folder templates
		dirs: {
			css: '../assets/css',
			sass: '../assets/sass',
			tmp: 'tmp'
		},

		// compile scss/sass files to CSS
		sass: {
			dist: {
				options: {
					style: 'expanded'
				},
				files: [{
					expand: true,
					cwd: '<%= dirs.sass %>',
					src: ['*.scss'],
					dest: '<%= dirs.css %>',
					ext: '.css'
				}]
			}
		},

		postcss: {
			options: {
				map: true, // inline sourcemaps

				processors: [
					require('autoprefixer-core')({browsers: 'last 2 versions'}) // add vendor prefixes
				]
			},
			dist: {
				src: '<%= dirs.css %>/*.css'
			}
		}
	};

	// Initialize Grunt Config
	// --------------------------
	grunt.initConfig( testeConfig );

	// Register Tasks
	// --------------------------

	// Default Task
	grunt.registerTask( 'default', [
		'sass',
		'postcss'
	] );

	};

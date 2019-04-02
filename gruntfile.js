module.exports = function(grunt) {

  // Project configuration.
  grunt.initConfig({
    pkg: grunt.file.readJSON('package.json'),

	sass: {
	  dist: {
	    options: {
		  	style: 'compressed'
		  },
		  files: {
				'stylesheets/uiuxstyles.css': 'sass/uiuxstyles.scss',
				'stylesheets/jquery-ui-1.9.2.custom.min.css': 'sass/jquery-ui-1.9.2.custom.scss',
				'stylesheets/jquery.lightbox-0.5.css': 'sass/jquery.lightbox-0.5.scss',
				'stylesheets/owl.carousel.css': 'sass/owl.carousel.scss',
				'stylesheets/owl.theme.css': 'sass/owl.theme.scss',
				'stylesheets/gallery.css': 'sass/gallery.scss',
				'stylesheets/skeleton.css': 'sass/skeleton.scss',
				'stylesheets/global.css': 'sass/layout.scss'
		  }
		}	
	},
	
	postcss: {
    options: {
      map: true, // inline sourcemaps

      // or
      map: {
          inline: false, // save all sourcemaps as separate files...
          annotation: 'stylesheets/maps/' // ...to the specified directory
      },

      processors: [
        //require('pixrem')(), // add fallbacks for rem units
        require('autoprefixer')({browsers: 'last 2 versions'}), // add vendor prefixes
        //require('cssnano')() // minify the result
      ]
    },
    dist: {
      src: 'stylesheets/*.css'
    }
  },

	concat: {
    options: {
      separator: ';',
    },
    dist: {
      src: ['js/jquery-ui-1.9.2.custom.min.js', 'js/jquery.lightbox-0.5.min.js', 'js/owl.carousel.js', 'js/jquery.validate.min.js', 'js/scripts.local.js'],
      dest: 'js/scripts.js',
    },
  },

	uglify: {
		options: {
			mangle: false
		},
		js: {
			files: {
				'js/scripts.min.js': ['js/scripts.js'],
			}
		},
	},

  responsive_images: {
    resize: {
			options: {
				engine: 'im',
				sizes: [{
					name: 'sm',
					width: 190
					},{
					name: 'md',
					width: 269
					},{
					name: 'lg',
					width: 424
				}]
			},
			files: [{
				expand: true,
				cwd: 'images/',
				src: ['thumbs/**/*.{jpg,gif,png}'],
				dest: 'images/'
			}]
		},
	},
	
	watch: {
		js: {
			files: ['js/*.js'],
			tasks: ['uglify']
		},
		concat: {
			files: ['js/*.js'],
			tasks: ['concat']
		},
		css: {
			files: ['sass/*.scss'],
			tasks: ['sass']
		},
		postcss: {
			files: ['stylesheets/*.css'],
			tasks: ['postcss']
		},
		svgstore: {
			files:['images/icons/*.svg'],
			tasks: ['svgstore']
		},
	},
	
  });
  //The following line used up top replaces the need for loadNpmTasks
  //require("matchdep").filterDev("grunt-*").forEach(grunt.loadNpmTasks);
	grunt.loadNpmTasks('grunt-contrib-sass');
	grunt.loadNpmTasks('grunt-postcss');
  grunt.loadNpmTasks('grunt-contrib-uglify');
  grunt.loadNpmTasks('grunt-contrib-concat');
  grunt.loadNpmTasks('grunt-responsive-images');
  grunt.loadNpmTasks('grunt-contrib-watch');

  grunt.registerTask('default', ['sass', 'postcss', 'uglify', 'concat', 'responsive_images']);

};
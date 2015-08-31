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
	
	htmlhint: {
		build: {
			options: {
				'tag-pair': true,
				'tagname-lowercase': false,
				'attr-lowercase': false,
				'attr-value-double-quotes': false,
				'doctype-first': true,
				'spec-char-escape': true,
				'id-unique': true,
				'head-script-disabled': false,
				'style-disabled': true
			},
			src: ['*.html']
		}
	},
	
	autoprefixer: {
		single_file: {
			options: {
				browsers: ['last 2 version', 'ie 8', 'ie 9']
			},
	      src: 'stylesheets/global.css',
	      dest: 'stylesheets/global.css'
	  },
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



  svgstore: {
    options: {},
    default : {
      files: {
        'images/icons/icons-sprite.svg': ['images/icons/*.svg'],
      },
    },
  },
	
	watch: {
		html: {
			files: ['*.html'],
			tasks: ['htmlhint']
		},
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
		autoprefixer: {
			files: ['stylesheets/*.css'],
			tasks: ['autoprefixer']
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
	grunt.loadNpmTasks('grunt-autoprefixer');
  grunt.loadNpmTasks('grunt-htmlhint');
  grunt.loadNpmTasks('grunt-contrib-uglify');
  grunt.loadNpmTasks('grunt-contrib-concat');
  grunt.loadNpmTasks('grunt-svgstore');
  grunt.loadNpmTasks('grunt-contrib-watch');

  grunt.registerTask('default', ['sass', 'autoprefixer', 'uglify', 'concat', 'svgstore']);

};
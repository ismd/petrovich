module.exports = function(grunt) {

    /**
     * Окружение
     */
    if (grunt.option('env') !== 'prod') {
        grunt.option('env', 'dev');
    }

    grunt.log.ok('Environment: ' + grunt.option('env'));

    /**
     * Конфигурация проекта
     */
    grunt.initConfig({
        pkg: grunt.file.readJSON('package.json'),
        sprite: {
            all: {
                src: './img/sprite2x/*.png',
                destImg: './img/sprite2x.png',
                imgPath: '../img/sprite2x.png',
                destCSS: './css/sprite.styl',
                cssFormat: 'stylus',
                cssTemplate: './css/sprite.mustache',
                engine: 'pngsmith',
                cssOpts: {
                    smallSpritePath: "../img/sprite.png"
                },
                padding: 2
            }
        },
        stylus: {
            compile: {
                options: {
                    compress: false,
                    urlfunc: 'data-uri'
                },
                files: {
                    './css/style.css': './css/style.styl'
                }
            }
        },
        watch: {
            sprite: {
                files: ['<%= sprite.all.src %>'],
                tasks: ['wait:sprite', 'sprite', 'image_resize'],
                options: {
                    debounceDelay: 500
                }
            },
            stylus: {
                files: [
                    './css/**/*.styl'
                ],
                tasks: ['stylus'],
                options: {
                    livereload: true
                }
            }
        },
        image_resize: {
            resize: {
                options: {
                    width: '50%',
                    height: '50%',
                    overwrite: true
                },
                files:   {
                    './img/sprite.png': './img/sprite2x.png'
                }
            }
        }
    });

    /**
     * Плагины
     */
    // Плагин для работы со спрайтами
    grunt.loadNpmTasks('grunt-spritesmith');

    // Сборщик для Stylus
    grunt.loadNpmTasks('grunt-contrib-stylus');

    // sprite resizer (ImageMagick required)
    grunt.loadNpmTasks('grunt-image-resize');

    // Live reload
    grunt.loadNpmTasks('grunt-contrib-watch');

    /**
     * Задачи
     */
    grunt.registerTask('default', 'Build sprite and stylus. Watch changes in images and *.styl files', function () {
        // Этот пакет задач не отваливается при предупреждениях (критично для gaze)
        grunt.option('force', true);
        grunt.task.run(['sprite', 'image_resize', 'stylus', 'watch']);
    });

    /*grunt.registerTask('build', 'Build project', function() {
        grunt.task.run(['sprite', 'image_resize', 'stylus']);
    });*/
};

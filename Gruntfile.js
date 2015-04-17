module.exports = function(grunt) {
  
  // Project configuration.
  grunt.initConfig({
    phpdocumentor: {
           dist: {
               options: {
                   target : 'doc/php/',
                   directory : "src/"
                   //ignore: ['foowd_theme/', 'vendor/', 'data/generated-*']
               }
           }
       }
   });

  grunt.loadNpmTasks('grunt-phpdocumentor');
  //grunt.registerTasks('phpdc', ['phpdocumentor']);
  
};

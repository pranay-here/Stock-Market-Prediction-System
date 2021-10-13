(function( $ ){
    var pluginName = "counter";
    var defaults = {
        counter_length: 1,
        is_running: false,
        value: 100,
        i: 0
    }
    
    var methods = {
        init : function(options) {
            //"this" is a jquery object on which this plugin has been invoked.
            return this.each(function(index){
                var $this = $(this);
                var data = $this.data(pluginName);
                // If the plugin hasn't been initialized yet
                if (!data){
                    var settings = this.defaults;
                    if(options) { $.extend(true, settings, options); }

                    $this.data(pluginName, {
                        target : $this,
                        settings: settings
                    });
                    
                    console.log('initialized');
                }
            });
        },
        start : function() {
            console.log('starting');
            
            var num = this.children('.numeral');
        
            var value = parseInt(num.html());
            var i = 0;

            var counter = setInterval(function () {
                if (i < value) {
                    num.html(++i);
                }
                else {
                    clearInterval(counter);
                }
            }, this.counter_length * 1000 / value);
        }
    };
    // ***** Fin: Public Methods *****
    // *******************************

    // *****************************
    // ***** Start: Supervisor *****
    $.fn[pluginName] = function( method ) {
        if ( methods[method] ) {
            return methods[method].apply( this, Array.prototype.slice.call( arguments, 1 ));
        } else if ( typeof method === 'object' || !method ) {
            return methods.init.apply( this, arguments );
        } else {
            $.error( 'Method ' + method + ' does not exist in jQuery.' + pluginName );
        }
    };
    // ***** Fin: Supervisor *****
    // ***************************
})( jQuery );

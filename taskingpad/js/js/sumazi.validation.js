// Custom validity output.
(function($) {
    var objects = [];
    
    $.validity.outputs.alertToolTip = {
        errorClass: 'error',
        
        start: function() {
            $(objects).removeClass(this.errorClass).tooltip('destroy');
            objects = [];
        },
        
        end: function(results) { 
            if(!results.valid) {
                $(objects[0]).focus();
            }
        },
        
        raise: function($obj, msg) {
            $obj.tooltip({
                title: $obj.attr('data-title') ? $obj.attr('data-title') : msg,
                placement: $obj.attr('data-placement') ? $obj.attr('data-placement') : 'bottom',
                trigger: $obj.attr('data-trigger') ? $obj.attr('data-trigger') : 'focus',
                delay: {show: 100, hide: 0}
            })
            
            .addClass(this.errorClass);
            
            objects.push($obj.get(0));
        },
        
        raiseAggregate: function($obj, msg) { 
            if($obj.length) {
                this.raise($($obj.get($obj.length - 1)), msg);
            }
        },
    }
})(jQuery);

// Set the custom output mode.
$.validity.setup({outputMode:'alertToolTip'});

// Add custom validators.
$.validity.patterns.hexidecimal = /^#([A-Fa-f0-9]{6}|[A-Fa-f0-9]{3})$/;
$.validity.messages.hexidecimal = '#{field} must be a hexidecimal value.';

$.validity.patterns.domainList = /^\s*(([a-zA-Z0-9][a-zA-Z0-9-]{0,61}[a-zA-Z0-9]?(.[a-zA-Z0-9]{2,6})+)+\s*,\s*)*([a-zA-Z0-9][a-zA-Z0-9-]{0,61}[a-zA-Z0-9]?(.[a-zA-Z0-9]{2,6})+)$/;
$.validity.messages.domainList = '#{field} must contain a comma delimited list of domains.';

$.validity.patterns.ascii = /[ -~]/;
$.validity.messages.ascii = '#{field} must contain only ASCII characters.';

$.validity.patterns.alphaNumPlus = /^[a-zA-Z0-9_-]*$/;
$.validity.messages.alphaNumPlus = '#{field} must only contain alpha numeric characters, underscores or hyphens.';

$.validity.patterns.alphaNum = /^[a-zA-Z0-9]*$/;
$.validity.messages.alphaNum = '#{field} must only contain alpha numeric characters.';
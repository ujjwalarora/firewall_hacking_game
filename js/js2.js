// Charm JS Core 0.5



function charm_unloadTest(uuid) {
    
    window.onbeforeunload = function() { 
        charm_record(uuid,charmunloadtest,'True')
        
    };
};


function charm_record(uuid, slug, value) {
    the_url = '//usecharm.com/'+uuid+'/'+slug+'/'+value
    
    

    $.ajax({ // We may need to re-add a timeout for onload events like visit as well....  ?
      url: the_url,
      type: "GET",
      dataType: "script", // work: script, jsonp, text // dont work: json
      async: true
    });

};


function charm_referrer(uuid) {
    referrer = (window.encodeURI)?window.encodeURI(document.referrer):document.referrer

    if (referrer) {
        referrer = referrer.replace('http://', '').replace('?', '~charm_query:~');
        the_url = '//usecharm.com/'+uuid+'/referrer/'+referrer

        setTimeout(function() { 
            $.ajax({
                  url: the_url,
                  type: "GET",
                  dataType: "script", // work: script, jsonp, text // dont work: json
                  async: true
                });
                
            }, 90);

    } 
};


function charm_link(slug, element, uuid) {
    

    $(element).click(function(event) {

        link = $(this);

        the_url = '//usecharm.com/'+uuid+'/'+slug+'/True'
        the_destination = link.attr('href');
        var redirect_link=false
        if(the_destination !== undefined || the_destination.charAt(0) !== '#') {
            redirect_link = true
        }
        
        //alert(the_destination+' '+the_url)
        
        
            $.ajax({
                  url: the_url,
                  type: "GET",
                  dataType: "script", // work: script, jsonp, text // dont work: json
                  async: false,
                  success: function(data) {
                     
                    if(redirect_link) {
                        window.location = the_destination
                        }
                    }
            });
         //return false; // works (same as e.preventDefault() + e.stopPropagation()
        event.preventDefault(); // similar 
        //return false;
    });
};


function charm_form(slug, element, uuid) { 
    

    // Bind to form;
    $(element).submit(function() { 
        charm_record(uuid, slug, value='True');
    });

};


// Helper function for scroll
function charm_getScrollDepth() {
  var scrOfY = 0;
  if( typeof( window.pageYOffset ) == 'number' ) {
    //Netscape compliant
    scrOfY = window.pageYOffset;
//    scrOfX = window.pageXOffset;
  } else if( document.body && document.body.scrollTop ) {
    //DOM compliant
    scrOfY = document.body.scrollTop;
//    scrOfX = document.body.scrollLeft;
  } else if( document.documentElement && document.documentElement.scrollTop ) {
    //IE6 standards compliant mode
    scrOfY = document.documentElement.scrollTop;
//    scrOfX = document.documentElement.scrollLeft;
  }
  return scrOfY;
}

function charm_getWindowHeight() {
  var myHeight = 0;
  if( typeof( window.innerWidth ) == 'number' ) {
    //Non-IE
//    myWidth = window.innerWidth;
    myHeight = window.innerHeight;
  } else if( document.documentElement && ( document.documentElement.clientWidth || document.documentElement.clientHeight ) ) {
    //IE 6+ in 'standards compliant mode'
//    myWidth = document.documentElement.clientWidth;
    myHeight = document.documentElement.clientHeight;
  } else if( document.body && ( document.body.clientWidth || document.body.clientHeight ) ) {
    //IE 4 compatible
//    myWidth = document.body.clientWidth;
    myHeight = document.body.clientHeight;
  }
  return myHeight;
}

function charm_scroll(slug, uuid) {
    

    var pagelength = $('body').height();
    var windowheight = charm_getWindowHeight();
    var scrolldepth = parseInt((charm_getScrollDepth()+windowheight)*100/pagelength);
    var newscrolldepth = 0

    $(window).scroll(function() { 
        newscrolldepth = parseInt((charm_getScrollDepth()+windowheight)*100/pagelength);
        if(newscrolldepth > scrolldepth) {
            scrolldepth = newscrolldepth;
        }
        if(scrolldepth==100) {
            $(window).unbind('scroll');
            charm_record(uuid, slug, value=scrolldepth);
        }
    })

    window.onbeforeunload = function() {
        charm_record(uuid, slug, value=scrolldepth);
    };

};

function charm_time(slug, uuid) {
    

    var time_spent = 0
    var started = new Date();
    var ended = 0;

    function timeBlur() {
        
        ended = new Date();
		time_spent = time_spent + (ended - started);
        
        };

    function timeFocus(){
        
    	started = new Date();
        };
    
    if ($.browser.ie) { // check for Internet Explorer
    	document.onfocusin = timeFocus;
    	document.onfocusout = timeBlur;
    } else {
    	window.onfocus = timeFocus;
    	window.onblur = timeBlur;
        };

    // We need to make this a separate function that all the others can piggyback onto and bind, may want to have multiple things firing at unload...
    window.onbeforeunload = function() {

        

        ended = new Date();
        //time_spent = time_spent + (ended - started); // this seems to double it, it blurs when unloading
        var final_time_spent = time_spent + (ended - started);
        
        charm_record(uuid, slug, value=final_time_spent);

        };

};


function charm_visit(slug, uuid) {
    

    // Should fire _almost_ instantly. We want to wait for the oven to clear so results can be accepted
    setTimeout(function() { 
        charm_record(uuid, slug, value='1')
    }, 150) // This has to be more than the referrer one, for some reason...... 

};


function charm_explore(slug, uuid) {
    

    // Should fire _almost_ instantly. We want to wait for the oven to clear so results can be accepted
    setTimeout(function() { 
        charm_record(uuid, slug, value='1')
    }, 150) // This has to be more than the referrer one, for some reason...... 

};


function charm_redirect(location) {

	if ($.browser.webkit) {
        if (window.location != location) {
            window.location.replace(location)
        };
    } else {
        window.location.replace(location);
    }

};


function oven(key, uuid) {
    $('body').append('<iframe id="'+key+'_frame" name="'+key+'_frame" src="about:blank" style="display: none !important; position: absolute; top: -9000px; left: -9000px;"></iframe><form id="'+key+'_form" action="//usecharm.com/oven/'+key+'/'+uuid+'/" target="'+key+'_frame" style="display: none !important; position: absolute; top: -5000px; left: -5000px; " method="POST"></form>');
    $('#'+key+'_form').submit();
};






jQuery(document).ready(function($){





































    




});// JavaScript Document
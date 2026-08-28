$(document).ready(function(){
	var opened_left = false;
	var opened_right = false;

	if(typeof showFormSentModal != 'undefined') {
		$('#Modal_FormSent').modal('show');
	}

	function open_form(el, direction) {
		parent = $(el).parent();
		
		switch(direction) {
			case 'left':
				$('#' + parent[0].id).animate({
					left:"0px"
				});
			break;

			case 'right':
				$('#' + parent[0].id).animate({
					right:"0px"
				});
			break;

			default:
		}
		
	}

	function close_form(el, direction) {
		parent = $(el).parent();

		width = $('#' + parent[0].id).width();

		padding = $('#' + parent[0].id).css('padding');
		padding = padding.replace('px','');
		padding *= 2;

		switch (direction) {
			case 'left':
				$('#' + parent[0].id).animate({
					left:"-" + (width + padding) + "px"
				});
			break;

			case 'right':
				$('#' + parent[0].id).animate({
					right:"-" + (width + padding) + "px"
				});
			break;

			default:
		}
	}

	$('.vertical_button_left').on("click",function(){
		opened_left = opened_left ? false : true;
		opened_left ? open_form(this, 'left') : close_form(this, 'left');
	})

	$('.vertical_button_right').on("click",function(){
		opened_right = opened_right ? false : true;
		opened_right ? open_form(this, 'right') : close_form(this, 'right');
	})


	$('#po_internationalization').popover({
		trigger: 'hover',
		placement:"bottom",
		content:"In computing, internationalization and localization (other correct spellings are internationalisation and localisation) are means of adapting computer software to different languages, regional differences and technical requirements of a target market"
	});
	
	$(window).bind('scroll resize', function() {
        if ( $(window).scrollTop() > $('header').height() ) {
            $('nav').addClass('fixed');
            $('header').addClass('margin-bottom-40');

            $('nav').width( $('header').width() );
            $('nav').offset({left: $('header').offset().left});
        }
        else {
            $('nav').removeClass('fixed');
            $('header').removeClass('margin-bottom-40');
        }
    });

	$(document).delegate('*[data-toggle="lightbox"]', 'click', function(event) {
	    event.preventDefault();
	    $(this).ekkoLightbox();
	}); 

	$(document).mouseup(function (e) {
	    var form1 = $("#sliding_form_1");
	    var form2 = $("#sliding_form_2");

	    if (form1.length > 0 && !form1.is(e.target) // if the target of the click isn't the form1...
	        && form1.has(e.target).length === 0) // ... nor a descendant of the form1
	    {
	        close_form($('.vertical_button_left'), 'left');
	    }

	    if (form2.length > 0 && !form2.is(e.target) // if the target of the click isn't the form2...
	        && form2.has(e.target).length === 0) // ... nor a descendant of the form2
	    {
	        close_form($('.vertical_button_right'), 'right');
	    }
	});
});
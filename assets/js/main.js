/*
	Transitive by TEMPLATED
	templated.co @templatedco
	Released for free under the Creative Commons Attribution 3.0 license (templated.co/license)
*/

(function($) {

	skel.breakpoints({
		xlarge:	'(max-width: 1680px)',
		large:	'(max-width: 1280px)',
		medium:	'(max-width: 980px)',
		small:	'(max-width: 736px)',
		xsmall:	'(max-width: 480px)'
	});

	$(function() {

		var	$window = $(window),
			$body = $('body'),
			$header = $('#header'),
			$banner = $('#banner');

		// Disable animations/transitions until the page has loaded.
			$body.addClass('is-loading');

			$window.on('load', function() {
				window.setTimeout(function() {
					$body.removeClass('is-loading');
				}, 100);
			});

		// Prioritize "important" elements on medium.
			skel.on('+medium -medium', function() {
				$.prioritize(
					'.important\\28 medium\\29',
					skel.breakpoint('medium').active
				);
			});

		// Fix: Placeholder polyfill.
			$('form').placeholder();

		// Header.
			if (skel.vars.IEVersion < 9)
				$header.removeClass('alt');

			if ($banner.length > 0
			&&	$header.hasClass('alt')) {

				$window.on('resize', function() { $window.trigger('scroll'); });

				$banner.scrollex({
					bottom:		$header.outerHeight(),
					terminate:	function() { $header.removeClass('alt'); },
					enter:		function() { $header.addClass('alt'); },
					leave:		function() { $header.removeClass('alt'); $header.addClass('reveal'); }
				});

			}

		// Banner.

			if ($banner.length > 0) {

				// IE fix.
					if (skel.vars.IEVersion < 12) {

						$window.on('resize', function() {

							var wh = $window.height() * 0.60,
								bh = $banner.height();

							$banner.css('height', 'auto');

							window.setTimeout(function() {

								if (bh < wh)
									$banner.css('height', wh + 'px');

							}, 0);

						});

						$window.on('load', function() {
							$window.triggerHandler('resize');
						});

					}

				// Video check.
					var video = $banner.data('video');

					if (video)
						$window.on('load.banner', function() {

							// Disable banner load event (so it doesn't fire again).
								$window.off('load.banner');

							// Append video if supported.
								if (!skel.vars.mobile
								&&	!skel.breakpoint('large').active
								&&	skel.vars.IEVersion > 9)
									$banner.append('<video autoplay loop><source src="' + video + '.mp4" type="video/mp4" /><source src="' + video + '.webm" type="video/webm" /></video>');

						});

				// More button.
					$banner.find('.more')
						.addClass('scrolly');

			}

		// Scrolly.
			if ( $( ".scrolly" ).length ) {

				var $height = $('#header').height() * 0.95;

				$('.scrolly').scrolly({
					offset: $height
				});
			}

		// Menu.
			$('#menu')
				.append('<a href="#menu" class="close"></a>')
				.appendTo($body)
				.panel({
					delay: 500,
					hideOnClick: true,
					hideOnSwipe: true,
					resetScroll: true,
					resetForms: true,
					side: 'right'
				});

	});
	zingchart.THEME="classic";

var colors = {
    blue : "rgba(151,187,205,1)",
    gray : "#EBEBEB",
    grayDark : "#3F3F3F"
};


function randomVal(min, max, num){
    var aData = [];
    for(var i = 0 ; i < num; i++){
        var val = ((Math.random() * (max-min)) + min);
        aData.push(parseInt(val));
    }
    return aData;
}

var myConfig = {
    type : 'bar',
    backgroundColor : "#FFF",
    plot : {
        lineColor : "rgba(151,187,205,1)",
        lineWidth : "2px",
        backgroundColor2 : "rgba(151,187,205,1)",
        marker : {
            backgroundColor : "rgba(151,187,205,1)",
            borderColor : "white",
            shadow : false
        }
    },
    plotarea : {
        backgroundColor : "white"
    },
    scaleX : {
      lineColor : colors.gray,
      lineWidth : "1px",
      tick : {
          lineColor : "#C7C7C7",
          lineWidth : "1px"
      },
      guide :{
          lineStyle : 'solid',
          lineColor : colors.gray,
          alpha : 1
      },
      item : {
          color: colors.grayDark
      }
    },
    scaleY : {
      lineColor : colors.gray,
      lineWidth : "1px",
      tick : {
          lineColor : "#C7C7C7",
          lineWidth : "1px"
      },
        guide :{
          lineStyle : 'solid',
          lineColor : colors.gray,
          alpha : 1
      },
      item : {
          color: colors.grayDark
      }
    },
    series : [
        {
            values : randomVal(22,42,8),
            lineColor : "rgba(220,220,220,1)",
            lineWidth : "2px",
            alpha : 0.5,
            borderWidth : "2px",
            borderColor : "#C7C7C7",
            borderTop : "2px solid #C7C7C7",
            borderBottom : "0px",
            backgroundColor1 : "rgba(220,220,220,1)",
            backgroundColor2 : "rgba(220,220,220,1)",
            marker : {
                backgroundColor : "rgba(220,220,220,1)",
            }

        },
        {
            alpha : 0.5,
            values : randomVal(7,32,8),
            backgroundColor1 : colors.blue,
            backgroundColor2 : colors.blue,
            borderWidth : "2px",
            borderColor : colors.blue,
            borderTop : "2px solid " + colors.blue,
            borderBottom : "0px"
        }
    ]
}


zingchart.render({
    id : 'myChart',
    data : myConfig,
    hideprogresslogo : true,
    height : 470,
    width: 680
});
$(document).ready(function(){
  var fileTarget = $('.filebox .upload-hidden');

    fileTarget.on('change', function(){
        if(window.FileReader){
            var filename = $(this)[0].files[0].name;
        } else {
            var filename = $(this).val().split('/').pop().split('\\').pop();
        }

        $(this).siblings('.upload-name').val(filename);
    });
});

})(jQuery);

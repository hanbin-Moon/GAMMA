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
	//zingchart.THEME="classic";

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
// __document.ready
var temp=
[
	0.762376237623762,
	0.930693069306931,
	0.97029702970297,
	0.891089108910891,
	0.95049504950495,
	0.95049504950495,
	1,
	0.900990099009901,
	0.415841584158416,
	0.881188118811881,
	0.762376237623762,
	0.930693069306931,
	0.97029702970297,
	0.891089108910891,
	0.95049504950495,
	0.95049504950495,
	1,
	0.900990099009901,
	0.415841584158416,
	0.881188118811881,
	0.455445544554455,
	0.762376237623762,
	0.930693069306931,
	0.97029702970297,
	0.891089108910891,
	0.95049504950495,
	0.95049504950495,
	1,
	0.900990099009901,
	0.415841584158416,
	0.881188118811881,
	0.455445544554455,
	0.762376237623762,
	0.930693069306931,
	0.97029702970297,
	0.891089108910891,
	0.95049504950495,
	0.95049504950495,
	1,
	0.900990099009901,
	0.415841584158416,
	0.881188118811881,
	0.455445544554455,
	0.762376237623762,
	0.930693069306931,
	0.97029702970297,
	0.891089108910891,
	0.95049504950495,
	0.95049504950495,
	1,
	0.900990099009901,
	0.415841584158416,
	0.881188118811881,
	0.455445544554455,
	0.762376237623762,
	0.930693069306931,
	0.97029702970297,
	0.891089108910891,
	0.95049504950495,
	0.95049504950495,
	1,
	0.900990099009901,
	0.415841584158416,
	0.881188118811881,
	0.455445544554455,
	0.762376237623762,
	0.930693069306931,
	0.97029702970297,
	0.891089108910891,
	0.95049504950495,
	0.95049504950495,
	1,
	0.900990099009901,
	0.415841584158416,
	0.881188118811881,
	0.455445544554455,
	0.762376237623762,
	0.930693069306931,
	0.97029702970297,
	0.891089108910891,
	0.95049504950495,
	0.95049504950495,
	1,
	0.900990099009901,
	0.415841584158416,
	0.881188118811881,
	0.455445544554455,
	0.762376237623762,
	0.930693069306931,
	0.97029702970297,
	0.891089108910891,
	0.95049504950495,
	0.95049504950495,
	1,
	0.900990099009901,
	0.415841584158416,
	0.881188118811881,
	0.455445544554455,
	0.762376237623762,
	0.930693069306931,
	0.97029702970297,
	0.891089108910891,
	0.95049504950495,
	0.95049504950495,
	1,
	0.900990099009901,
	0.415841584158416,
	0.881188118811881,
	0.455445544554455,
]

var myChart = {
  "type": "bar",
  "title": {
    "text": "P Value",
    "fontSize": 11
  },
  "subtitle": {
    "text": ""
  },
  "plot": {
    "animation": {
      "delay": "100",
      "effect": "4",
      "method": "5",
      "sequence": "1"
    }
  },
  "series": [
    {
      "values": temp
    },
  ]
};

var temp2 = [
	0.939013954697,
   0.87820398236,
   0.870324496875,
   0.906791266266,
   0.888625053323,
   0.879010116775,
   0.8393743108,
   0.904422972373,
   1.002132627403,
   0.923023671395,
   1.019822485937,
   1.615464520476,
   0.869238604653,
   0.94951851489,
   0.900204924709,
   0.929149441237,
   1.048851207652,
   0.94987961573,
   0.961621798602,
   0.964133676692,
   0.919008855149,
   0.94634299481,
   0.941746445564,
   3.755622745107,
   0.94226794015,
   0.962128545582,
   0.955483533577,
   0.959585198423,
   0.825045128617,
   3.290440396822,
   0.942387215947,
   0.946820067293,
   1.098883105437,
   1.026885520847,
   0.973795005101,
   0.88527494848,
   1.048267043772,
   0.944999129038,
   0.79710743762,
   0.911188298439,
   0.957870372459,
   0.944672579647,
   0.885828388483,
   0.938647974121,
   0.973868460207,
   0.984400018568,
   0.883229597311,
   0.864378947635,
   0.92474193358,
   0.868790226713,
   0.900029121869,
   0.988122457643,
   0.909999428594,
   0.878935188614,
   1.053245305462,
   2.598124079299,
   0.974227497103,
   0.950157152599,
   0.903837977481,
   0.904422972373,
   0.974612486284,
   0.974079386048,
   0.943663932925,
   0.95310147158,
   1.018918705774,
   0.893318575298,
   0.947001655232,
   0.841546317537,
   0.870324496875,
   0.850253260926,
   0.758210980099,
   0.881232432171,
   0.922140070909,
   1.171703816229,
   0.945308043196,
   0.943523567743,
   0.867455109791,
   1.030388107334,
   0.888625053323,
   0.897555224197,
   0.951931987362,
   0.85134880543,
   0.917321053704,
   0.827628443432,
   0.783657683817,
   0.971461546985,
   1.059888098757,
   0.860657138222,
   0.90953975373,
   0.885342781135,
   0.898051223455,
   0.814488592259,
   0.914693392444,
   0.923586891896,
   0.894038231198,
   1.486216239226,
   0.938114586508,
   0.834718954288,
   1.039309362592,
   0.917221382969
]

var myChart2 = {
  "type": "bar",
  "title": {
    "text": "F Value",
    "fontSize": 11
  },
  "subtitle": {
    "text": ""
  },
  "plot": {
    "animation": {
      "delay": "100",
      "effect": "4",
      "method": "5",
      "sequence": "1"
    }
  },
  "series": [
    {
      "values": temp2
    },
  ]
};
zingchart.render({
  id: "myChart",
  data: myChart,
  height: "40%",
  width: "100%"
});
zingchart.render({
  id: "myChart2",
  data: myChart2,
  height: "40%",
  width: "100%"
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

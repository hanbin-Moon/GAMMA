<!DOCTYPE html>
<html>
	<head>
		<title>Calculate - Transitive by TEMPLATED</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<link rel="stylesheet" href="assets/css/main.css" />
		<script src= "https://cdn.zingchart.com/zingchart.min.js"></script>
		<script> zingchart.MODULESDIR = "https://cdn.zingchart.com/modules/";
		ZC.LICENSE = ["569d52cefae586f634c54f86dc99e6a9","ee6b7db5b51705a13dc2339db3edaf6d"];</script>
		<style>
  	*,*:before,*:after {
      box-sizing: border-box;
    }
	    #myChart{
	        padding:10px;
	    }
	    #myChart-top{
	        border: 1px solid #D9D9D9;
	        box-shadow : 10px 10px 5px -4px rgba(224,224,224,0.6);
	    }
			</style>
	</head>
	<body class="subpage">

		<!-- Header -->
			<header id="header">
				<div class="logo"><a href="index.html">GAMMA <span>by TEAM GAMMA</span></a></div>
				<a href="#menu" class="toggle"><span>Menu</span></a>
			</header>

		<!-- Nav -->
			<nav id="menu">
				<ul class="links">
					<li><a href="index.html">Home</a></li>
					<li><a href="calculate.html">calculate</a></li>
					<li><a href="etc.html">Etc</a></li>
				</ul>
			</nav>

		<!-- One -->
			<section id="one" class="wrapper style2">
				<div class="inner">
					<div class="box">
					<div class="content">

					<!-- Elements -->
						<h2 id="elements">calculate</h2>
						<div class="row 200%">
							<div class="6u 12u$(medium)">

								<!-- input stuff -->
									<h3><i>Input</i></h3>
									<p>Input에 대한 설명</p>
									<div class="row">
										<div class="6u$ 12u$(small)">
										</div>
									</div>
									<h4>Definition</h4>
									<dl>
										<dt>Item 1</dt>
										<dd>
											<p>Lorem ipsum dolor vestibulum ante ipsum primis in faucibus vestibulum. Blandit adipiscing eu felis iaculis volutpat ac adipiscing accumsan eu faucibus. Integer ac pellentesque praesent.</p>
										</dd>
										<dt>Item 2</dt>
										<dd>
											<p>Lorem ipsum dolor vestibulum ante ipsum primis in faucibus vestibulum. Blandit adipiscing eu felis iaculis volutpat ac adipiscing accumsan eu faucibus. Integer ac pellentesque praesent.</p>
										</dd>
									</dl>
									<h4>Choose Category</h4>
									<div class="12u$">
										<div class="select-wrapper">
											<select name="demo-category" id="demo-category">
												<option value="">- Category -</option>
												<option value="1">Category1</option>
												<option value="1">Category2</option>
												<option value="1">Category3</option>
												<option value="1">Category4</option>
											</select>
										</div>
									</div>
									<br>
									<h4>Actions</h4>

                  <div class="file_input">
    								<form action="upload_name.php" method="post" enctype="multipart/form-data">
    									<dd>Value Input</dd>
    									<div class="row">
                      <div class="6u 12u$(xsmall)" syte=style="display: inline">
    										<input type="text" name="value" value="<?php echo $_POST['value']?>" id="demo-name" margin-right="50px"/>
    									</div>
                      <input type="submit" class="button special small" value="Apply">
    								</div>
    							</form>
    								<br>
    								<form action="upload.php" method="post" enctype="multipart/form-data">
    								<dd>File Input</dd>
    									<div class="filebox bs3-primary">
    		              	<input class="upload-name" value="File upload" disabled="disabled" name="name">
    		            		<label for="ex_filename" class="button special small">Upload</label>
    		                <input type="file" id="ex_filename" class="upload-hidden" name="the_file">
    		              </div>
    									<input type="submit" class="button special small" value="submit">
            				</form>
    							</div>
							</div>
							<div class="6u$ 12u$(medium)">

									<h3>Output</h3>
									<div id='myChart'></div>
									<div id='myChart2'></div>

							</div>
						</div>
						</div>
					</div>
				</div>
			</section>
		<!-- Four -->
			<section id="four" class="wrapper style3">
				<div class="inner">

					<header class="align-center">
						<h2>DONGGUK UNIVERSITY COMPUTATIONAL BIOINFORMATICS LAB</h2>
						<p>Engineeringbuilding 5107, Dongguk University ,30, Pildong-ro 1-gil, Jung-gu, Seoul, 04620, Republic of Korea</p>
						<p><font size : "4">Email : jwjoo1204@gmail.com | 2eding@dongguk.edu</font></p>
					</header>

				</div>
			</section>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.scrolly.min.js"></script>
			<script src="assets/js/jquery.scrollex.min.js"></script>
			<script src="assets/js/skel.min.js"></script>
			<script src="assets/js/util.js"></script>
			<?php
			$fp = fopen("/Users/admin/Desktop/P.txt","r"); //  text.txt파일을 한 줄씩 읽습니다.
			//$arr;
			if(!$fp) {  // $fp파일이 없으면 에러 출력
 			echo "error";
			}
			while(!feof($fp)) { //문자의 마지막 행까지 간다
  		$str = fgets($fp,10000); // 10000길이까지 읽어드리지만 중간에 개행문자가 있으면 알아서 멈춘다.
  		$arr[] = $str + 0; // $arr배열에 하나씩 넣는다. $b[1] = "첫번째 줄" 뭐 이런식
			}
			fclose($fp);

			$fp2 = fopen("/Users/admin/Desktop/F.txt","r"); //  text.txt파일을 한 줄씩 읽습니다.
			//$arr;
			if(!$fp2) {  // $fp파일이 없으면 에러 출력
 			echo "error";
			}
			while(!feof($fp2)) { //문자의 마지막 행까지 간다
  		$str2 = fgets($fp2,10000); // 10000길이까지 읽어드리지만 중간에 개행문자가 있으면 알아서 멈춘다.
  		$arr2[] = $str2 + 0; // $arr배열에 하나씩 넣는다. $b[1] = "첫번째 줄" 뭐 이런식
			}
			fclose($fp2);
			?>
			<script>
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
			var arr = <?= json_encode($arr) ?>;
			var arr2 =<?= json_encode($arr2) ?>;

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
			      "values": arr
			    },
			  ]
			};
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
			      "values": arr2
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
			</script>
<?php

$db = mysqli_connect('localhost','root','111111','gamma');

if(mysqli_connect_error()){
	echo '<p>Error: Could not connect to database.<br/>
	Please try again later.</p>';
	exit;
}
if($_FILES['the_file']['error']>0)
{
  echo 'Problem: ';
  switch($_FILES['the_file']['error'])
  {
  case 1:
  echo 'File exceeded upload_max_filesize.' ;
  break;
  case 2:
  echo 'File exceeded max_file_size.';
  break;
  case 3:
  echo 'File only partially uploaded';
  break;
  case 4:
  echo 'No file uploaded';
  break;
  case 6:
  echo 'Cannot upload file: No temp directory specified.';
  break;
  case 7:
  echo 'Upload failed: Cannot write to disk';
  break;
  case 8:
  echo 'A PHP extension blocked the file upload.';
  break;
  }
  exit;
}
mkdir("/Users/admin/Desktop/gammaData/".$_POST['value'],0777);
$uploaded_file='/Users/admin/Desktop/gammaData/'.$_POST['value'].'/'.$_FILES['the_file']['name'];
$uploaded_file_copy='/Users/admin/Desktop/gammaData/'.$_POST['value'];
$a=$_POST['value'];

$query="INSERT INTO txt (id, email, date) VALUES (0,'$a',now())";
$result=mysqli_query($db,$query);

mysqli_close($db);

if(is_uploaded_file($_FILES['the_file']['tmp_name']))
{
  if(!move_uploaded_file($_FILES['the_file']['tmp_name'],$uploaded_file))
  {
    echo 'Problem: Could not move file to destination directory.';
    exit;
  }
}
else
{
  echo 'Problem: Possible file uploaed attack. Filename: ';
  echo $_FILES['the_file']['name'];
  exit;
}
function uploadFTP($server, $username, $password, $local_file, $remote_file)
{
	 // connect to server
	 $connection = ftp_connect($server);
	 // login
	 if (@ftp_login($connection, $username, $password)){
			 // successfully connected
	 }else{
			 return false;
	 }
	 //ftp_mkdir($connection, $_POST['value']);
	 ftp_put($connection, $remote_file, $local_file, FTP_BINARY);
	 ftp_close($connection);
	 return true;
}
//$uploaded_file='/Users/admin/Desktop/gammaData/'.$_POST['value'].'/'.$_FILES['the_file']['name'];
$remote_loca ='/home/GAMMA/'.$_FILES['the_file']['name'];
echo "실패한것인가?";
uploadFTP("210.94.194.55", "GAMMA", "gamma1234", $uploaded_file,$remote_loca);
echo "성공한것인가?";
echo $remote_loca ;
//uploadFTP("210.94.194.55", "GAMMA", "gamma1234", $uploaded_file,$remote_loca);
?>
</body>
</html>

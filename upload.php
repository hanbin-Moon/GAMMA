<!DOCTYPE html>
<!--<html>
<head>
  <title>Uploading...</title>
</head>
<body>
<h1>Uploatding File...</h1>
-->
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

									<dd>Value Input</dd>
									<div class="row">
									<div class="6u 12u$(xsmall)" syte=style="display: inline">
										<input type="text" name="demo-name" id="demo-name" value="" placeholder="Value Input" margin-right="50px"/>
									</div>
									<a href="#" class="button special small" margin-left="50px">Apply</a>
								</div>
								<br>

							<dd>File Input</dd>
							<div class="file_input">
								<form action="upload.php" method="post" enctype="multipart/form-data">
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

									<h4>Output1</h4>
									<div class="table-wrapper">
										<table>
											<thead>
												<tr>
													<th>Name</th>
													<th>Description</th>
													<th>Price</th>
												</tr>
											</thead>
											<tbody>
												<tr>
													<td>Item 1</td>
													<td>Ante turpis integer aliquet porttitor.</td>
													<td>29.99</td>
												</tr>
												<tr>
													<td>Item 2</td>
													<td>Vis ac commodo adipiscing arcu aliquet.</td>
													<td>19.99</td>
												</tr>
												<tr>
													<td>Item 3</td>
													<td> Morbi faucibus arcu accumsan lorem.</td>
													<td>29.99</td>
												</tr>
												<tr>
													<td>Item 4</td>
													<td>Vitae integer tempus condimentum.</td>
													<td>19.99</td>
												</tr>
												<tr>
													<td>Item 5</td>
													<td>Ante turpis integer aliquet porttitor.</td>
													<td>29.99</td>
												</tr>
											</tbody>
											<tfoot>
												<tr>
													<td colspan="2"></td>
													<td>100.00</td>
												</tr>
											</tfoot>
										</table>
									</div>

									<h4>Output2</h4>
									<div class="table-wrapper">
										<table class="alt">
											<thead>
												<tr>
													<th>Name</th>
													<th>Description</th>
													<th>Price</th>
												</tr>
											</thead>
											<tbody>
												<tr>
													<td>Item 1</td>
													<td>Ante turpis integer aliquet porttitor.</td>
													<td>29.99</td>
												</tr>
												<tr>
													<td>Item 2</td>
													<td>Vis ac commodo adipiscing arcu aliquet.</td>
													<td>19.99</td>
												</tr>
												<tr>
													<td>Item 3</td>
													<td> Morbi faucibus arcu accumsan lorem.</td>
													<td>29.99</td>
												</tr>
												<tr>
													<td>Item 4</td>
													<td>Vitae integer tempus condimentum.</td>
													<td>19.99</td>
												</tr>
												<tr>
													<td>Item 5</td>
													<td>Ante turpis integer aliquet porttitor.</td>
													<td>29.99</td>
												</tr>
											</tbody>
											<tfoot>
												<tr>
													<td colspan="2"></td>
													<td>100.00</td>
												</tr>
											</tfoot>
										</table>
									</div>

									<h4>Column Chart</h4>
									<div id='myChart'><a class="zc-ref" href="https://www.zingchart.com/">Charts by ZingChart</a></div>
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
			<script src="assets/js/main.js"></script>



<?php
//$host = "localhost"; /* Host name */
//$user = "root"; /* User */
//$password = "111111"; /* Password */
//$dbname = "gamma"; /* Database name */
//$con = mysqli_connect($host, $user, $password,$dbname);
// Check connection
//if (!$con) {
// die("Connection failed: " . mysqli_connect_error());
//}
//mkdir("/Users/admin/Desktop/gammaData/testing",0777);

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
//zip 파일만 받을 수 있는 부분이 필요함!!
/*if($_FILES['the_file']['type'] !='zip')
{
  echo 'Problem: file is not a zip image.';
  exit;
}
*/

//$uploaded_file='/Users/admin/Desktop/gammaData/'.$_FILES['the_file']['name'];
//$_POST['value'];
$uploaded_file='/Users/admin/Desktop/gammaData/'.$_FILES['the_file']['name'];

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
  echo 'Proble: Possible file uploaed attack. Filename: ';
  echo $_FILES['the_file']['name'];
  exit;
}
echo 'File uploaded successfully.';
?>
</body>
</html>

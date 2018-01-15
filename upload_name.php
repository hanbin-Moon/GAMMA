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
			<script src="assets/js/main.js"></script>

<?php
//include("config.php");
$db = mysqli_connect('localhost','root','111111','gamma');

if(mysqli_connect_error()){
	echo '<p>Error: Could not connect to database.<br/>
	Please try again later.</p>';
	exit;
}
/*
$check="SELECT * from txt WHERE email='$_POST['value']'"

$result=$db->query($check);
if($result->num_rows==1)
{
	echo "중복된 email";
	echo "<a href=calculate.html>back page</a>";
	exit(1);
}(?,$uploaded_file,$_POST['value'])";
*/
//scp 연결 부분!!
$connection2 = ssh2_connect('GAMMA@210.94.194.55', 2222);
ssh2_auth_password($connection2, 'GAMMA', 'gamma1234');
ssh2_scp_send($connection2, '/Users/admin/Desktop/gammaData/wndzlf@gmail.com', '/home/GAMMA/chotest', 0644);

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
mkdir("/Users/admin/Desktop/gammaData/".$_POST['value'],0777);
$uploaded_file='/Users/admin/Desktop/gammaData/'.$_POST['value'].'/'.$_FILES['the_file']['name'];
$a=$_POST['value'];

/*
$find_email = "SELECT id FROM test WHERE email= '$a'";
$find_result_email = mysql_query($db,$query);
if($find_result_email > 0) {
	echo "<script>location.href='calculate.html';</script>";
}
*/
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
  echo 'Proble: Possible file uploaed attack. Filename: ';
  echo $_FILES['the_file']['name'];
  exit;
}
echo 'File uploaded successfully.';
?>
</body>
</html>

<script type="text/javascript">
  //Universal debugging. 1 is enabled.
  const DEBUG = 1;

  if(DEBUG==1){
  	console.log('	Universal Debugging is enabled.');
  } else {
    console.log('	Universal Debugging is disabled.');
  }

</script>

<!--

head tags should be in each file. add the follow in each page head element.

<meta charset="utf-8">
<title>Creative Home \ Progressive — Responsive Multipurpose HTML Template</title>
<meta name="keywords" content="HTML5 Template">
<meta name="description" content="Progressive — Responsive Multipurpose HTML Template"> -->
<?php
//error_reporting(E_ALL);

// TODO: Uncomment prior to DEPLOY
//require_once($_SERVER['DOCUMENT_ROOT'] . "/visitor/log_visitor.php");
//log_visitor($title);
  //or, if you DO want a file to cache, use:
  //header("Cache-Control: max-age=2592000"); //30days (60sec * 60min * 24hours * 30days)

?>


<!-- TITLE -->

<title><?php echo $title ?></title>

<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
<meta name="author" content="Ajmain Naqib">

<!-- FAVICON -->
<link rel="shortcut icon" href="favicon.png" type="image/x-icon">
<link rel="icon" href="favicon.png" type="image/x-icon">

<!-- GOOGLE FONTS -->
<link href="https://fonts.googleapis.com/css?family=Saira+Extra+Condensed:100,200,300,400,500,600,700,800,900" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i" rel="stylesheet">
<!-- STYLESHEETS -->

<link href="assets/style.css" rel="stylesheet"/>


<?php // Google Analytics
// TODO: Uncomment prior to DEPLOY
//include_once($_SERVER['DOCUMENT_ROOT'] . "/visitor/analyticstracking.php"); ?>

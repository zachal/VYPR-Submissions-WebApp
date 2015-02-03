<?php
require_once 'functions.php';
$ismobile = check_user_agent('mobile');
if(!isset($_REQUEST['submit'])){ 
?>
 <!DOCTYPE html> 
<html>
<head>
<meta charset="UTF-8"> 
<meta name="viewport" content="width=device-width; initial-scale=1.0; maximum-scale=1.0;">
<title>The VYPR page!</title>
<link href='http://fonts.googleapis.com/css?family=Slabo+27px' rel='stylesheet' type='text/css'>
<link rel="stylesheet" href="style.css" type="text/css" />
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script src="http://cdn.jsdelivr.net/jquery.validation/1.13.1/jquery.validate.min.js"></script>
<script type="text/javascript">
$("#commentForm").validate();
</script>
</head>
<body width="100%">
<form id="commentForm" method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
<table  style=" <?php if(!$ismobile){ ?>float: right;<?php }else{ ?>float:left;<?php } ?> align-content: space-around; text-align: center; padding: 0px; border: 0px;">
<thead><tr width="100%"><td><img alt="logo" src="logo.jpg"/></td></tr><tr><td ><p style="font-size: 150%;"><strong>Vypr Suggestion Page </strong></p><br/>(Required fields highlighted in red)</td></tr></thead>
<tbody>
<tr><td style="float: left;width: <?php if($ismobile) {echo '100%';}else{echo '48%';} ?>;"><div class="ss-item-required">First name: <input type="text" id="FNM" name="FNM" style="width:100%;" required/></div></td><?php if($ismobile) {echo '</tr><br/><tr>';} ?><td style="float: right; width: <?php if($ismobile) {echo '100%';}else{echo '48%';} ?>;"><div class="ss-item-required">  Last Name: <input type="text" id="LNM" name="LNM" style="width:100%;" required/></div></td></tr>
<tr><td style="float: left;width: <?php if($ismobile) {echo '100%';}else{echo '48%';} ?>;"><div class="ss-item-required">Grade: <input type="text" id="GRD" name="GRD" style="width:100%;" required/></div></td><?php if($ismobile) {echo '</tr><br/><tr>';} ?><td style="float: right; width: <?php if($ismobile) {echo '100%';}else{echo '48%';} ?>;"><div class="ss-item-required">  Email: <input type="email" id="EML" name="EML" style="width:100%;" required/></div></td></tr>
<tr><td style="float: right;width: 100%;"><div class="ss-item-required">Your Idea: <br /> <textarea id="IDA" name="IDA" <?php if(!$ismobile){ ?>rows="20" cols="100"<?php }else{ ?> rows="10" cols="40"<?php } ?> maxlength="2500" required>A brief description of your problem and what you want from the solution... if your idea is chosen we will contact you via the email above.</textarea></div></td></tr>
<tr><td style="float: right;width: 100%;"><input type="submit" value="Submit Idea" id="submit" name="submit" /></td></tr>
</tbody>
</table>
</form>
</body>
</html>
<?php
}else{
$Name = $_REQUEST['FNM'] . " " . $_REQUEST['LNM'];
$Idea = $_REQUEST['IDA'];
?>
 <!DOCTYPE html> 
<html>
<head>
<meta charset="UTF-8"> 
<meta name="viewport" content="width=device-width; initial-scale=1.0; maximum-scale=1.0;">
<title>The VYPR page!</title>
<link href='http://fonts.googleapis.com/css?family=Slabo+27px' rel='stylesheet' type='text/css'>
<link rel="stylesheet" href="style.css" type="text/css" />
<a href="/"><img alt="logo" src="logo.jpg"/></a><br/>
</head><br/>
<?php addsubmission($_REQUEST['FNM'], $_REQUEST['LNM'], $_REQUEST['GRD'], $_REQUEST['EML'], $_REQUEST['IDA']); ?>
<br/><br/>
Hello <?php echo $Name; ?>. Thank you for your submission; it has been recorded and will be reviewed by the VYPR club staff. <br /><br/>Please monitor your e-mail in case we have any questions regarding your submission.<br /><br />
<br/><br/>Here is a copy of your submission for your records:<br />
"<?php echo $Idea; ?>"
<br /><br /><br />
Thanks!!!
</html>
<?php
}
?>
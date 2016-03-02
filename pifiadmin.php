<?php
session_start();
if ($_SESSION['sfpg_access']!==TRUE) {
  header('Location: admin.php');
  exit;
} else {
  if ($_POST['uploaders']!="" or !file_exists("uploaders.txt")) {
    $file = fopen("uploaders.txt", "w") or die("Unable to open uploaders file!");
    if ($_POST['uploaders']!="") { fwrite($file, base64_encode(strtolower(str_replace(" ", "", $_POST['uploaders'])))); }
    fclose($file);
  }
  if ($_POST['users']!="" or !file_exists("users.txt")) {
    $file = fopen("users.txt", "w") or die("Unable to open users file!");
    if ($_POST['users']!="") { fwrite($file, strtolower(str_replace(" ", "", $_POST['users']))); }
    fclose($file);
  }
?>
<!DOCTYPE html><html><head><meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0"><meta charset="utf-8"><title>Uploader & User Administration</title>
<style>
	img
	{
		-ms-interpolation-mode : bicubic;
	}

	body.sfpg
	{
		background : #000000;
		color: #aaaaaa;
		font-family: Arial, Helvetica, sans-serif;
		font-size: 12px;
		font-weight: normal;
		margin:0px;
		padding:0px;
		overflow:hidden;
	}

	body.sfpg a:active, body.sfpg a:link, body.sfpg a:visited, body.sfpg a:focus
	{
		color : #ffffff;
		text-decoration : none;
	}

	body.sfpg a:hover
	{
		color : #aaaaaa;
		text-decoration : none;
	}

	.sfpg_button, .sfpg_button_hover, .sfpg_button_on, .sfpg_button_nav, .sfpg_button_disabled
	{
		".(ROUND_CORNERS?'border-radius: '.ROUND_CORNERS.'px;':'')."
		cursor : pointer;
		background : #000000;
		border : 1px solid #808080;
		color : #aaaaaa;
		padding : 0px 5px 0px 5px;
		margin : 0px 5px 0px 5px;
		white-space: nowrap;
	}

	.sfpg_button:hover, .sfpg_button_nav:hover
	{
		background : #ffffff;
		color : #000000;
	}

	.sfpg_button_hover
	{
		background : #ffffff;
		color : #000000;
	}

	.sfpg_button_on
	{
		background : #aaaaaa;
		color : #000000;
	}

	.sfpg_button_disabled
	{
		cursor : default;
		border : 1px solid #505050;
		background : #000000;
		color : #505050;
	}

	.sfpg_button_nav
	{
		border: 1px solid #404040;
		background: #101010;
		color: #808080;
	}
</style>
</head>
<body class="sfpg">
<div align="center" class="banner"><a href="admin.php"><h3>Back to Pi-Fi Gallery Administration</h3></a></div>
<table border="0" align="center">
  <tr>
    <td align="center">Uploaders</td>
    <td align="center">Users</td>
  </tr>
  <tr>
    <td align="center">
      <form name="form1" method="post" action="pifiadmin.php">
        <textarea name="uploaders" rows="50" cols="25">
<?php
$file = file_get_contents("uploaders.txt", true);
echo base64_decode($file);
?></textarea><br />
        <input class="sfpg_button_on" type="submit" name="submit1" value="Update Uploaders">
      </form>
    </td>
    <td align="center">
      <form name="form2" method="post" action="pifiadmin.php">
        <textarea name="users" rows="50" cols="75">
<?php
$file = file_get_contents("users.txt", true);
echo $file;
?></textarea><br />
        <input class="sfpg_button_on" type="submit" name="submit2" value="Update Users">
      </form>
    </td>
  </tr>
</table>
</html>
<?php } ?>

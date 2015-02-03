<?php include('_header.php'); ?>
<p style="font-size: 125%;float: right;top: 28px;position: absolute;left: 200px;">
<?php
//echo WORDING_PROFILE_PICTURE . '<img src="' . $login->user_gravatar_image_url . '" />;
echo WORDING_PROFILE_PICTURE . '<br/>' . $login->user_gravatar_image_tag . "";
// if you need the user's information, just put them into the $_SESSION variable and output them here
?>
<p style="font-size: 150%; float:none; position:absolute; top:0px;left: 200px; "><?php
echo WORDING_YOU_ARE_LOGGED_IN_AS . $_SESSION['user_name'] . "";
?>
</p>
<div style="float:left;position: absolute;top: 62px; left: 255px;">
    <a href="index.php?logout"><?php echo WORDING_LOGOUT; ?></a>
    <a href="edit.php"><?php echo WORDING_EDIT_USER_DATA; ?></a>
</div></p>

<br />

<p style="float:left;">
<table>
<thead>
<tr><td align="center"><h1>Submissions</h1></td></tr>
</thead>
<tbody>
<tr><td>-Name-</td><td>-Email-</td><td>-Submission-</td><td>-Time-</td></tr>
<?php
$link = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME);
$query = "SELECT * FROM Submissions ORDER by ID";

if ($result = mysqli_query($link, $query)) {

    /* fetch associative array */
    while ($row = mysqli_fetch_assoc($result)) {
        printf ("<tr><td>%s, %s - (Grade %s)</td><td>%s</td><td>%s</td><td>%s</td><td><a href=\"../delete.php?submissionid=%s\">Delete</a></td></tr>\n", $row["LName"], $row["FName"], $row["Grade"], $row["EMail"], $row["Submission"], $row["TME"], $row["ID"]);
    }

    /* free result set */
    mysqli_free_result($result);
}
?>
</tbody>
</table>
</p>
<?php include('_footer.php'); ?>

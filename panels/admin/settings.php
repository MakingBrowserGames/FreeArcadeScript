<?php
if ($email_on == "0") {$emsel = "selected=\"selected\"";}else{$emsel = NULL;};
if ($comments_on == "0") {$cesel = "selected=\"selected\"";}else{$cesel = NULL;};
if ($taf_on == "0") {$tafsel = "selected=\"selected\"";}else{$tafsel = NULL;};
if ($fbcomments_on == "0") {$fbsel = "selected=\"selected\"";}else{$fbsel = NULL;};
if ($autoapprovecomments == "0" ) {$aasel = "selected=\"selected\"";}else{$aasel = NULL;};
if ($seo_on == "0") {$seoosel = "selected=\"selected\"";}else{$seoosel = NULL;};
if ($enabledcode_on == "0") {$ecsel = "selected=\"selected\"";}else{$ecsel = NULL;};
if ($showblog == "0") {$sbsel = "selected=\"selected\"";}else{$sbsel = NULL;};
if ($showpages == "0") {$spsel = "selected=\"selected\"";}else{$spsel = NULL;};
if ($blogcommentpermissions == "0" ) {$aabsel = "selected=\"selected\"";}else{$aabsel = NULL;};
if ($blogfollowtags == "external") {$btsel = "selected=\"selected\"";}else{$btsel = NULL;};
if ($avatar_on == "0") {$avsel = "selected=\"selected\"";}else{$avsel = NULL;};
if ($gender_on == "0") {$gavsel = "selected=\"selected\"";}else{$gavsel = NULL;};


if(isset($_POST['submit'])){

	$ssitename = clean($_POST['sitename']);
	$sdomain = clean($_POST['domain']);
	$directorypath = clean($_POST['directorypath']);
	$tzone = clean($_POST['tzone']);
	$slogan = clean($_POST['slogan']);
	$sgamesfolder = clean($_POST['gamesfolder']);
	$sgamesthumbs = clean($_POST['thumbsfolder']);
	$slimitboxgames = clean($_POST['limitboxgames']);
	$sgamesonpage = clean($_POST['gamesonpage']);
	$semail_on = clean($_POST['email_on']);
	$scomments_on = clean($_POST['comments_on']);
	$staf_on = clean($_POST['taf_on']);
	$sfbcomments_on = clean($_POST['fbcomments_on']);
	$sautoapprovecomments = clean($_POST['autoapprovecomments']);
	$sseo_on = clean($_POST['seo_on']);
	$senabled_code = clean($_POST['enabled_code']);
	$showwebsitelimit = clean($_POST['showwebsitelimit']);
	$supportemail = clean($_POST['supportemail']);
	$showblog = clean($_POST['showblog']);
	$showpages = clean($_POST['showpages']);
	$blogentriesshown = clean($_POST['blogentriesshown']);
	$blogcharactersshown = clean($_POST['blogcharactersshown']);
	$blogcommentpermissions = clean($_POST['blogcommentpermissions']);
	$blogcommentsshown = clean($_POST['blogcommentsshown']);
	$blogfollowtags = clean($_POST['blogfollowtags']);
	$blogcharactersrss = clean($_POST['blogcharactersrss']);
	$metatags = clean($_POST['metatags']);
	$metadescr = clean($_POST['metadescr']);
	$savatar_on = clean($_POST['avatar_on']);
	$saimg = clean($_POST['aimg']);
	$sgender_on = clean($_POST['gender_on']);
	$smimg = clean($_POST['mimg']);
	$sfimg = clean($_POST['fimg']);
	$sseoheading = clean($_POST['seoheading']);
	$sseotext = clean($_POST['seotext']);


	if(!$ssitename || !$domain || !$sgamesfolder || !$sgamesthumbs || !$slimitboxgames || !$sgamesonpage){
		echo 'Not all of the fields where filled!';
		return;
	}
 		mysql_query('UPDATE fas_settings SET
 					domain="'.$sdomain.'",
 					directorypath="'.$directorypath.'",
 					tzone="'.$tzone.'",
 					slogan="'.$slogan.'",
 					gamesfolder="'.$sgamesfolder.'",
 					thumbsfolder="'.$sgamesthumbs.'",
 					limitboxgames="'.$slimitboxgames.'",
 					gamesonpage="'.$sgamesonpage.'",
					email_on="'.$semail_on.'",
 					comments_on="'.$scomments_on.'",
 					taf_on="'.$staf_on.'",
 					fbcomments_on="'.$sfbcomments_on.'",
 					autoapprovecomments="'.$sautoapprovecomments.'",
 					seo_on="'.$sseo_on.'",
 					sitename="'.$ssitename.'",
 					enabledcode_on="'.$senabled_code.'",
  					showwebsitelimit="'.$showwebsitelimit.'",
  					supportemail="'.$supportemail.'",
 					showblog="'.$showblog.'",
 					showpages="'.$showpages.'",
 					blogentriesshown="'.$blogentriesshown.'",
 					blogcharactersshown="'.$blogcharactersshown.'",
 					blogcommentpermissions="'.$blogcommentpermissions.'",
 					blogcommentsshown="'.$blogcommentsshown.'",
 					blogfollowtags="'.$blogfollowtags.'",
  					blogcharactersrss="'.$blogcharactersrss.'",
 					metatags="'.$metatags.'",
 					metadescr="'.$metadescr.'",
					avatar_on="'.$savatar_on.'",
					aimg="'.$saimg.'",
					gender_on="'.$sgender_on.'",
					mimg="'.$smimg.'",
					fimg="'.$sfimg.'",
					seoheading="'.$sseoheading.'",
					seotext="'.$sseotext.'" ') or die(mysql_error());
		echo '<div class="msg">Settings Updated.<br />
		<A href="#" onclick="history.go(-1)">Back</a></div>';
		return;
}
echo '
<div class="heading">
	<h2>Settings</h2>
</div>
<br clear="all">
<form action="'.$domain.'/index.php?action=admin&case=settings" method="post">
	<table id="table">
		<thead>
			<tr>
				<th colspan="2">Manage Settings:</th>
			</tr>
		</thead>
		<tbody>
			<tr>
				<td>Free Arcade Script: version '.$set['version'].'</td>
				<td></td>
			</tr>
			<tr>
				<td>Site Name:</td>
				<td><input type="text" name="sitename" size="40" value="'.$set['sitename'].'" /></td>
			</tr>
			<tr>
				<td>Domain:</td>
				<td><input type="text" name="domain" size="40" value="'.$set['domain'].'" /></td>
			</tr>
			<tr>
				<td>Directory Path:</td>
				<td><input type="text" name="directorypath" size="40" value="'.$set['directorypath'].'" /></td>
			</tr>
			<tr>
				<td>Time Zone:</td>
				<td><select name="tzone">
						<option value="-11"'; if ($tzone == "-11"){echo 'selected="selected"';} echo'>(-11:00) Midway Island, Samoa</option>
						<option value="-10"'; if ($tzone == "-10"){echo 'selected="selected"';} echo'>(-10:00) Hawaii</option>
						<option value="-9"'; if ($tzone == "-9"){echo 'selected="selected"';} echo'>(-9:00) Alaska</option>
						<option value="-8"'; if ($tzone == "-8"){echo 'selected="selected"';} echo'>(-8:00) Pacific Time (US &amp; Canada)</option>
						<option value="-7"'; if ($tzone == "-7"){echo 'selected="selected"';} echo'>(-7:00) Mountain Time (US &amp; Canada)</option>
						<option value="-6"'; if ($tzone == "-6"){echo 'selected="selected"';} echo'>(-6:00) Central Time (US &amp; Canada), Mexico City</option>
						<option value="-5"'; if ($tzone == "-5"){echo 'selected="selected"';} echo'>(-5:00) Eastern Time (US &amp; Canada), Bogota, Lima</option>
						<option value="-4"'; if ($tzone == "-4"){echo 'selected="selected"';} echo'>(-4:00) Atlantic Time (Canada), Caracas, La Paz</option>
						<option value="-3.5"'; if ($tzone == "-3.5"){echo 'selected="selected"';} echo'>(-3:30) Newfoundland</option>
						<option value="-3"'; if ($tzone == "-3"){echo 'selected="selected"';} echo'>(-3:00) Brazil, Buenos Aires, Georgetown</option>
						<option value="-2"'; if ($tzone == "-2"){echo 'selected="selected"';} echo'>(-2:00) Mid-Atlantic</option>
						<option value="-1"'; if ($tzone == "-1"){echo 'selected="selected"';} echo'>(-1:00 hour) Azores, Cape Verde Islands</option>
						<option value="0"'; if ($tzone == "0"){echo 'selected="selected"';} echo'>(GMT) Western Europe Time, London, Lisbon, Casablanca</option>
						<option value="1"'; if ($tzone == "+1"){echo 'selected="selected"';} echo'>(+1:00 hour) Brussels, Copenhagen, Madrid, Paris</option>
						<option value="2"'; if ($tzone == "+2"){echo 'selected="selected"';} echo'>(+2:00) Kaliningrad, South Africa</option>
						<option value="3"'; if ($tzone == "+3"){echo 'selected="selected"';} echo'>(+3:00) Baghdad, Riyadh, Moscow, St. Petersburg</option>
						<option value="3.5"'; if ($tzone == "+3.5"){echo 'selected="selected"';} echo'>(+3:30) Tehran</option>
						<option value="4"'; if ($tzone == "+4"){echo 'selected="selected"';} echo'>(+4:00) Abu Dhabi, Muscat, Baku, Tbilisi</option>
						<option value="4.5"'; if ($tzone == "+4.5"){echo 'selected="selected"';} echo'>(+4:30) Kabul</option>
						<option value="5"'; if ($tzone == "+5"){echo 'selected="selected"';} echo'>(+5:00) Ekaterinburg, Islamabad, Karachi, Tashkent</option>
						<option value="5.5"'; if ($tzone == "+5.5"){echo 'selected="selected"';} echo'>(+5:30) Bombay, Calcutta, Madras, New Delhi</option>
						<option value="6"'; if ($tzone == "+6"){echo 'selected="selected"';} echo'>(+6:00) Almaty, Dhaka, Colombo</option>
						<option value="7"'; if ($tzone == "+7"){echo 'selected="selected"';} echo'>(+7:00) Bangkok, Hanoi, Jakarta</option>
						<option value="8"'; if ($tzone == "+8"){echo 'selected="selected"';} echo'>(+8:00) Beijing, Perth, Singapore, Hong Kong</option>
						<option value="9"'; if ($tzone == "+9"){echo 'selected="selected"';} echo'>(+9:00) Tokyo, Seoul, Osaka, Sapporo, Yakutsk</option>
						<option value="9.5"'; if ($tzone == "+9.5"){echo 'selected="selected"';} echo'>(+9:30) Adelaide, Darwin</option>
						<option value="10"'; if ($tzone == "+10"){echo 'selected="selected"';} echo'>(+10:00) Eastern Australia, Guam, Vladivostok</option>
						<option value="11"'; if ($tzone == "+11"){echo 'selected="selected"';} echo'>(+11:00) Magadan, Solomon Islands, New Caledonia</option>
						<option value="12"'; if ($tzone == "+12"){echo 'selected="selected"';} echo'>(+12:00) Auckland, Wellington, Fiji, Kamchatka</option>
							</select></td>
			</tr>
			<tr>
				<td>Slogan:</td>
				<td><input type="text" name="slogan" size="40" value="'.$set['slogan'].'" /></td>
			</tr>
			<tr>
				<td>Support E-mail:</td>
				<td><input type="text" name="supportemail" size="40" value="'.$set['supportemail'].'" /></td>
			</tr>
			<tr>
				<td>Games Folder:<br /><small>Make sure you chmod the folder to 0777</small></td>
				<td><input type="text" name="gamesfolder" size="40" value="'.$set['gamesfolder'].'" /></td>
			</tr>
			<tr>
				<td>Thumbs Folder:<br /><small>Make sure you chmod the folder to 0777</small></td>
				<td><input type="text" name="thumbsfolder" size="40" value="'.$set['thumbsfolder'].'" /></td>
			</tr>
			<tr>
				<td>Games On Home:<br /><small>
					How many games in each category do you want to be displayed in each box on the homepage?
					</small></td>
				<td><input type="text" name="limitboxgames" size="40" value="'.$set['limitboxgames'].'" /></td>
			</tr>
			<tr>
				<td>Games in category per page:</td>
				<td><input type="text" name="gamesonpage" size="40" value="'.$set['gamesonpage'].'" /></td>
			</tr>
			<tr>
				<td>Require email activation:</td>
				<td><select name="email_on">
								<option value="1">Yes</option>
								<option value="0" '.$emsel.'>No</option>
							</select></td>
			</tr>
			<tr>
				<td>Comments Enabled:</td>
				<td><select name="comments_on">
								<option value="1">Yes</option>
								<option value="0" '.$cesel.'>No</option>
							</select></td>
			</tr>
			<tr>
				<td>Tell a Friend Enabled:</td>
				<td><select name="taf_on">
								<option value="1">Yes</option>
								<option value="0" '.$tafsel.'>No</option>
							</select></td>
			</tr>
			<tr>
				<td>Facebook Comments Enabled:</td>
				<td><select name="fbcomments_on">
								<option value="1">Yes</option>
								<option value="0" '.$fbsel.'>No</option>
							</select></td>
			</tr>
			<tr>
				<td>Auto Approve Comments:</td>
				<td><select name="autoapprovecomments">
								<option value="1">Yes</option>
								<option value="0" '.$aasel.'>No</option>
							</select></td>
			</tr>
			<tr>
				<td>SEO On:</td>
				<td><select name="seo_on">
								<option value="1">Yes</option>
								<option value="0" '.$seoosel.'>No</option>
							</select></td>
			</tr>
			<tr>
				<td>Allow Enabled Code:</td>
				<td><select name="enabled_code">
								<option value="1">Yes</option>
								<option value="0" '.$ecsel.'>No</option>
							</select></td>
			</tr>
			<tr>
				<td>Show website after:<br /><small>
					How many games must a member play before their website is displayed on their profile?
					</small></td>
				<td><input type="text" name="showwebsitelimit" size="40" value="'.$set['showwebsitelimit'].'" /></td>
			</tr>
			<tr>
				<td>Default Meta Keywords:</td>
				<td><textarea name=\'metatags\' rows=\'5\' cols=\'50\' >'.$set['metatags'].'</textarea></td>
			</tr>
			<tr>
				<td>Default Meta Description:</td>
				<td><textarea name=\'metadescr\' rows=\'5\' cols=\'50\' >'.$set['metadescr'].'</textarea></td>
			</tr>
			<tr>
				<td>Show Blog?:</td>
				<td><select name="showblog">
								<option value="1">Yes</option>
								<option value="0" '.$sbsel.'>No</option>
							</select></td>
			</tr>
			<tr>
				<td>Show Pages?:</td>
				<td><select name="showpages">
								<option value="1">Yes</option>
								<option value="0" '.$spsel.'>No</option>
							</select></td>
			</tr>
			<tr>
				<td>Number of Blog Entries to show:</td>
				<td><input type="text" name="blogentriesshown" size="2" value="'.$set['blogentriesshown'].'" /></td>
			</tr>
			<tr>
				<td>Number of Blog Entries Characters to Show:</td>
				<td><input type="text" name="blogcharactersshown" size="4" value="'.$set['blogcharactersshown'].'" /></td>
			</tr>
			<tr>
				<td>Auto Approve Blog Comment:</td>
				<td><select name="blogcommentpermissions">
								<option value="1">Yes</option>
								<option value="0" '.$aabsel.'>No</option>
							</select></td>
			</tr>
			<tr>
				<td>Number of Blog Comments to Show:</td>
				<td><input type="text" name="blogcommentsshown" size="2" value="'.$set['blogcommentsshown'].'" /></td>
			</tr>
			<tr>
				<td>Follow Tags on Blog Comments:</td>
				<td><select name="blogfollowtags">
								<option value="nofollow">nofollow</option>
								<option value="external" '.$btsel.'>external</option>
							</select></td>
			</tr>
			<tr>
				<td>Blog Entry Characters in RSS:</td>
				<td><input type="text" name="blogcharactersrss" size="40" value="'.$set['blogcharactersrss'].'" /></td>
			</tr>
			<tr>
				<td>Default Avatar Enabled:</td>
				<td><select name="avatar_on">
								<option value="1">Yes</option>
								<option value="0" '.$avsel.'>No</option>
							</select></td>
			</tr>
			<tr>
				<td>Generic Avatar File:</td>
				<td><input type="text" name="aimg" size="40" value="'.$set['aimg'].'" /></td>
			</tr>
			<tr>
				<td>Gender Avatar Enabled:</td>
				<td><select name="gender_on">
								<option value="1">Yes</option>
								<option value="0" '.$gavsel.'>No</option>
							</select></td>
			</tr>
			<tr>
				<td>Male Avatar File:</td>
				<td><input type="text" name="mimg" size="40" value="'.$set['mimg'].'" /></td>
			</tr>
			<tr>
				<td>Female Avatar File:</td>
				<td><input type="text" name="fimg" size="40" value="'.$set['fimg'].'" /></td>
			</tr>
		        </tr>
			        <td>SEO Text Heading:</td>
			        <td><input type=\'text\' name=\'seoheading\' size=\'40\' value=\''.$set['seoheading'].'\'></td>
		       </tr>
		       <tr>
			        <td>SEO Text Description:</td>
			        <td ><textarea name=\'seotext\' rows=\'5\' cols=\'50\' >'.$set['seotext'].'</textarea></td>
		        </tr>
			<tr>
				<td colspan="2"><input type="submit" name="submit" value="Change" /></td>
			</tr>
		</tbody>
	</table>
</form>';
?>
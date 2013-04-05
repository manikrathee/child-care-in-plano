<?php ini_set("include_path", $_SERVER["DOCUMENT_ROOT"]); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Child Care In Plano, Texas : Little Angels Home Day Care</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php require_once("assets/html/header.html"); ?>
</head>
<body>
<div class="Wrapper">
	<?php require_once("assets/html/title.html"); ?>
	<div class="Content">
		<?php require_once("assets/html/menu.php"); ?>
		<div class="ContentWrapper">
			<div class="LeftColumn"><img src="assets/images/ChildCare-ShoulderRide.jpg" alt="Child Care on the beach" width="254" height="168" align="left"/></div>
			<div class="MainContent">
				<h2>Contact Us</h2>
				<form action="/gdform.php" method="post">
					<input type="hidden" id="MailRequestSubject" name="MailRequestSubject" value="Request from Child Care in Plano Texas - Contact Us page." />
					<input type="hidden" id="MailRequestAddress" name="MailRequestAddress" value="Provider@childcareinplano.com" />
					<input type="hidden" id="MailRequestName" name="MailRequestName" value="Little Angels Home Daycare" />
					<input type="hidden" id="Redirect_URL" name="Redirect_URL" value="http://www.childcareinplano.com/ContactSent.php" />
					<p><strong>Address</strong>:<br />
						Little Angels Home Daycare<br />
						Plano, TX 75023</p>
					<p><strong>Phone</strong>:<br />
						972-519-0201</p>
					<p><strong>Email</strong>:<br />
						<a href="mailto:Provider@childcareinplano.com">Provider@childcareinplano.com</a></p>
					<table cellspacing="0" cellpadding="2" align="center" border="0">
						<tbody>
							<tr>
								<td valign="top" align="left" colspan="2">&nbsp;</td>
							</tr>
							<tr>
								<td valign="top" align="right">Name:</td>
								<td valign="top" align="left"><input id="MailFromName" maxlength="50" size="25" name="MailFromName" /></td>
							</tr>
							<tr>
								<td valign="top" align="right">Address 1:</td>
								<td valign="top" align="left"><input id="Address" maxlength="50" size="25" name="Address" /></td>
							</tr>
							<tr>
								<td valign="top" align="right">Address 2:</td>
								<td valign="top" align="left"><input id="Address 2" maxlength="50" size="25" name="Address (cont)" /></td>
							</tr>
							<tr>
								<td valign="top" align="right">City:</td>
								<td valign="top" align="left"><input id="City" maxlength="50" size="25" name="City" /></td>
							</tr>
							<tr>
								<td valign="top" align="right">State:</td>
								<td valign="top" align="left"><input id="State" maxlength="50" size="25" name="State" /></td>
							</tr>
							<tr>
								<td valign="top" align="right">Zip / Postal Code:</td>
								<td valign="top" align="left"><input id="Zip / Postal Code" maxlength="15" size="25" name="Zip / Postal Code" /></td>
							</tr>
							<tr>
								<td valign="top" align="right">Country:</td>
								<td valign="top" align="left"><input id="Country" maxlength="50" size="25" name="Country" /></td>
							</tr>
							<tr>
								<td valign="top" align="right">Phone Number:</td>
								<td valign="top" align="left"><input id="Phone" maxlength="15" size="25" name="Phone" /></td>
							</tr>
							<tr>
								<td valign="top" align="right">Email Address:</td>
								<td valign="top" align="left"><input id="MailFromAddress" maxlength="50" size="25" name="MailFromAddress" /></td>
							</tr>
							<tr>
								<td valign="top" align="right">Web Address/URL:</td>
								<td valign="top" align="left"><input id="WebAddress" maxlength="50" size="25" name="WebAddress" /></td>
							</tr>
							<tr>
								<td valign="top" align="right">Comments/Questions:</td>
								<td valign="top" align="left"><textarea id="Comments" name="Comments" rows="4" cols="25"></textarea></td>
							</tr>
							<tr>
								<td valign="top"></td>
								<td><input id="submitForm" type="submit" value="Submit" name="submitForm" />
								</td>
							</tr>
						</tbody>
					</table>
					 
				</form>
				<div class="Cleanup"></div>
			</div>
			<div class="Cleanup"></div>
		</div>
	</div>
	<?php require_once("assets/html/copyright.html"); ?>
</div>
</td>
</tr>
</body>
</html>

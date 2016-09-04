<?php 
	if ($_POST['ebay_user_id']) {
			$ebay_user_id = $_POST['ebay_user_id'];
			$ebay_user_password = $_POST['ebay_user_password'];
			$cookie_file_path = 'Documents/cookie/cook';
			$LOGINURL = "http://signin.ebay.com/ws/eBayISAPI.dll?SignIn";
			$agent = "Mozilla/5.0 (Windows; U; Windows NT 5.0; en-US; rv:1.4) Gecko/20030624Netscape/7.1 (ax)";
			$ch = curl_init();
			curl_setopt($ch, CURLOPT_URL, $LOGINURL);
			curl_setopt($ch, CURLOPT_USERAGENT, $agent);
			curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
			curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
			curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
			curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
			curl_setopt($ch, CURLOPT_COOKIEFILE, $cookie_file_path);
			curl_setopt($ch, CURLOPT_COOKIEJAR, $cookie_file_path);
			$result = curl_exec($ch);
			curl_close($ch);
			$LOGINURL = "https://signin.ebay.com/ws/eBayISAPI.dll?co_partnerId=2&siteid=0&UsingSSL=1";
			$POSTFIELDS = ""
		}	

	function login_form()
	{
?>
	<form method="post" name="SignInForm" action="ebay_account.php">
		<table border="0" cellpadding="0" cellspacing="0" width="100%">
			<tr>
				<td><img src="https://securepics.ebaystatic.com/aw/pics/spacer.gif" width="1" height="10" alt=" " title=""></td>
			</tr>
			<tr>
				<td valign="top"> <font color="#ff0000" size="4">&nbsp;</font><font size="4">eBaymembers, sign in to save time for bidding, selling, and other activities.
			</font><br></td>
			</tr>
		</table>
		<table border="0" cellpadding="0" cellspacing="0" width="100%">
			<tr>
				<td><img src="https://securepics.ebaystatic.com/aw/pics/spacer.gif" width="1" height="10" alt=" " title=""></td>
			</tr>
			<tr>
				<td valign="top"><b>eBay User ID</b><br><input type="text" name="ebay_user_id" maxlength="64" tabindex="1" value="" size="27"><br>
				</td>
			</tr>
		</table>
	<table border="0" cellpadding="0" cellspacing="0" width="100%">
		<tr>
			<td><img src="https://securepics.ebaystatic.com/aw/pics/spacer.gif" width="1" height="10" alt=" " title=""></td>
		</tr>
		<tr>
			<td valign="top"><b>Password</b><br><input type="password" name="ebay_user_password" maxlength="64" value="" tabindex="2" size="27"><br>
		</td>
		</tr>
	</table>
	<table border="0" cellpadding="0" cellspacing="0" width="350">
		<tr>
			<td colspan="2"><img src="https://securepics.ebaystatic.com/aw/pics/spacer.gif" width="1" height="10" alt=" " title=""></td>
		</tr>
		<tr>
			<td width="35%"><input type="submit" tabindex="3" value="Sign In Securely >"></td>
		</tr>
	</table>
	</form>
<?
	}
?>
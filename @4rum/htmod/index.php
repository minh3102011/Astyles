<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" dir="ltr" lang="vn">
<head>
<base href="/@4rum/htmod/">
	<title>Ð&#259;ng nh&#7853;p - Astyles.Org | New Style For You - vBulletin Moderator Control Panel</title>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<link rel="stylesheet" type="text/css" href="../cpstyles/vBulletin_yvista/controlpanel.css" />
	<style type="text/css">
		.page { background-color:white; color:black; }
		.time { color:silver; }
	</style>
	<script type="text/javascript">
	<!--
	var SESSIONHASH = "67d9a009910d07cb4074b804a1d2d8c2";
	var IMGDIR_MISC = "../cpstyles/vBulletin_yvista";
	var CLEARGIFURL = "./clear.gif";
	function set_cp_title()
	{
		if (typeof(parent.document) != 'undefined' && typeof(parent.document) != 'unknown' && typeof(parent.document.title) == 'string')
		{
			parent.document.title = (document.title != '' ? document.title : 'vBulletin');
		}
	}
	//-->
	</script>
	<script type="text/javascript" src="../clientscript/yui/yahoo-dom-event/yahoo-dom-event.js"></script>
	<script type="text/javascript" src="../clientscript/yui/connection/connection-min.js"></script>
	<script type="text/javascript" src="../clientscript/vbulletin_global.js"></script>

</head>
<body style="margin:0px" onload="set_cp_title(); document.forms.loginform.vb_login_username.focus()">
<!-- END CONTROL PANEL HEADER -->

	<script type="text/javascript" src="../clientscript/vbulletin_md5.js"></script>
	<script type="text/javascript">
	<!--
	function js_show_options(objectid, clickedelm)
	{
		fetch_object(objectid).style.display = "";
		clickedelm.disabled = true;
	}
	function js_fetch_url_append(origbit,addbit)
	{
		if (origbit.search(/\?/) != -1)
		{
			return origbit + '&' + addbit;
		}
		else
		{
			return origbit + '?' + addbit;
		}
	}
	function js_do_options(formobj)
	{
		if (typeof(formobj.nojs) != "undefined" && formobj.nojs.checked == true)
		{
			formobj.url.value = js_fetch_url_append(formobj.url.value, 'nojs=1');
		}
		return true;
	}
	//-->
	</script>
	<form action="../login.php?do=login" method="post" name="loginform" onsubmit="md5hash(vb_login_password, vb_login_md5password, vb_login_md5password_utf); js_do_options(this)">
	<input type="hidden" name="url" value="/@4rum/htmod/index.php?" />
	<input type="hidden" name="s" value="67d9a009910d07cb4074b804a1d2d8c2" />
	<input type="hidden" name="securitytoken" value="guest" />
	<input type="hidden" name="logintype" value="modcplogin" />
	<input type="hidden" name="do" value="login" />
	<input type="hidden" name="vb_login_md5password" value="" />
	<input type="hidden" name="vb_login_md5password_utf" value="" />
		<p>&nbsp;</p><p>&nbsp;</p>
	<table class="tborder" cellpadding="0" cellspacing="0" border="0" width="450" align="center"><tr><td>

		<!-- header -->
		<div class="tcat" style="padding:4px; text-align:center"><b>Ð&#259;ng nh&#7853;p</b></div>
		<!-- /header -->

		<!-- logo and version -->
		<table cellpadding="4" cellspacing="0" border="0" width="100%" class="navbody">
		<tr valign="bottom">
			<td><img src="/pics/fallback.jpg" alt="" title="vBulletin&reg; v3.8.4, Copyright &copy;2000-2012, Jelsoft Enterprises Ltd." border="0" /></td>
			<td>
				<b><a href="../index.php">Astyles.Org | New Style For You</a></b><br />
				vBulletin 3.8.4 Moderator Control Panel<br />
				&nbsp;
			</td>
		</tr>
				</table>
		<!-- /logo and version -->

		<table cellpadding="4" cellspacing="0" border="0" width="100%" class="logincontrols">
		<col width="50%" style="text-align:right; white-space:nowrap"></col>
		<col></col>
		<col width="50%"></col>

		<!-- login fields -->
		<tbody>
		<tr>
			<td>Tên tài kho&#7843;n</td>
			<td><input type="text" style="padding-left:5px; font-weight:bold; width:250px" name="vb_login_username" value="" accesskey="u" tabindex="1" id="vb_login_username" /></td>
			<td>&nbsp;</td>
		</tr>
		<tr>
			<td>M&#7853;t kh&#7849;u</td>
			<td><input type="password" style="padding-left:5px; font-weight:bold; width:250px" name="vb_login_password" accesskey="p" tabindex="2" id="vb_login_password" /></td>
			<td>&nbsp;</td>
		</tr>
		<tr style="display: none" id="cap_lock_alert">
			<td>&nbsp;</td>
			<td class="tborder"><strong>Caps Lock &#273;ang b&#7853;t</strong><br />
<br />
B&#7853;t Caps Lock có th&#7875; làm b&#7841;n nh&#7853;p sai m&#7853;t kh&#7849;u. B&#7841;n nên t&#7855;t Caps Lock!</td>
			<td>&nbsp;</td>
		</tr>
		</tbody>
		<!-- /login fields -->

		
		<!-- submit row -->
		<tbody>
		<tr>
			<td colspan="3" align="center">
				<input type="submit" class="button" value="  Ð&#259;ng nh&#7853;p  " accesskey="s" tabindex="3" />
							</td>
		</tr>
		</tbody>
		<!-- /submit row -->
		</table>

	</td></tr></table>
	</form>
	<script type="text/javascript">
	<!--
	function caps_check(e)
	{
		var detected_on = detect_caps_lock(e);
		var alert_box = fetch_object('cap_lock_alert');

		if (alert_box.style.display == '')
		{
			// box showing already, hide if caps lock turns off
			if (!detected_on)
			{
				alert_box.style.display = 'none';
			}
		}
		else
		{
			if (detected_on)
			{
				alert_box.style.display = '';
			}
		}
	}
	fetch_object('vb_login_password').onkeypress = caps_check;
	//-->
	</script>
	

<!-- START CONTROL PANEL FOOTER -->
<p align="center">vBulletin&reg; v3.8.4, Copyright &copy;2000-12, Jelsoft Enterprises Ltd.</p>
</body>
</html>
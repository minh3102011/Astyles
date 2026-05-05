<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<!-- BEGIN TEMPLATE: SHOWTHREAD -->

<html class="Public" xmlns="http://www.w3.org/1999/xhtml" xmlns:fb="http://www.facebook.com/2008/fbml" dir="ltr" lang="vi-VN" id="vbulletin_html">
<head>
<base href="/@4rum/threads/4945-Win-XP-Theme-Rewrite/">
	<!-- BEGIN TEMPLATE: headinclude -->
<!-- BEGIN TEMPLATE: fr_redirect -->
<!-- Forum Runner Begin -->
<script type="text/javascript" src="../../forumrunner/detect.js"></script>
<!-- Forum Runner End -->
<!-- END TEMPLATE: fr_redirect --><style>

.blur {
    text-shadow: 0px 0px 10px #000000;
}

#_panel {
    display: none;
    background: transparent ; 
    color: #ffffff;
    font-family: litios;
    fontze: 20px;
    margin--sibottom: 0px;
    
   
}

._Scanu_container {
    margin:auto auto;
    padding: 20px;
    width: 600px;
}
#_panel a:link, #_panel a:visited, #_panel a:hover, #_panel a:active {

    color: #ec2281;
    text-decoration: none;

}

._input_text {
    background: #000000;
    -moz-border-radius: 5px;
    -webkit-border-radius: 5px;
    color: #ffffff;
    box-shadow: inset 1px 1px 1px #f2f2f2, 1px 1px 1px #8a8a8a;
    border: none;
    height: 28px;
    width: 230px;
    padding-left: 8px;
    font-size:8pt;
}

._input_text:focus{
    outline: none;
}

._scanu_button {
    background: #000000;
    -moz-border-radius: 5px;
    -webkit-border-radius: 5px;
    color: #ffffff;
    box-shadow: 1px 1px 1px #efefef, inset 1px 1px 1px #efefef;
    border: none;
    padding: 5px;
    margin-right: 10px;
    cursor: pointer;
    font-size:8pt;
}

._scanu_button:active {
    box-shadow: inset 3px 3px 6px #1f1f1f,  1px 1px 1px #000000;
}

#_open_close_button{
    background-color: #000000;
    border-bottom: 1px solid #f5f7f6;
    position: relative;
    z-index: 1;
    height: 1px;
    margin-bottom: 0px;
}

#_open_close_button ._toggle {
    font-size: 16px;
    font-family: litios;
    color: #65a5d1;
    background-color: #000000;
    text-decoration: none;
    padding: 0 5px;
    margin-right: 20px;
    border-bottom-right-radius: 10px; 
    -webkit-border-bottom-right-radius: 10px; 
    -moz-border-radius-bottomright: 10px; 
    -khtmlborder-bottom-right-radius: 10px;
    border-bottom-left-radius: 10px; 
    -webkit-border-bottom-left-radius: 10px; 
    -moz-border-radius-bottomleft: 10px; 
    -khtml-border-bottom-left-radius: 10px;
    position: absolute;
    right: 0px;
    bottom: -25px;
    text-align: center;
    z-index: 1;
    line-height: 20px;
    box-shadow: 0px 2px 5px #032A46; 
    -webkit-box-shadow: 0px 2px 5px #032A46; 
    -moz-box-shadow: 0px 2px 5px #032A46; 
    -khtml-box-shadow: 0px 2px 5px #032A46;
    width: 130px;
}

#_open_close_button ._toggle a {
    font-size: 16px;
    font-family: litios;
    color: #65a5d1;
    text-decoration: none;
}
</style>
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.js" type="text/javascript"></script>
<script>
$(document).ready(function() {
    
    // Expand Panel
    $("#_open").click(function(){
        $("div#_panel").slideDown("fast");

        $("#_panel").animate({"height": "+=10px"}, "fast");
        $("#_panel").animate({"height": "-=10px"}, "fast");

        $(".everything").animate({opacity: 0.17}, "fast");
        $(".everything").addClass( "blur" );
    });    
    
    // Collapse Panel
    $("#_close").click(function(){

        $("div#_panel").slideUp("fast");
        $(".everything").removeClass( "blur" );
        $(".everything").animate({opacity: 1}, "fast"); 
  });
     
        // Switch buttons from "Log in or Sign up" to "Close Panel" on click
    $("._toggle a").click(function () {
        $("._toggle a").toggle();
    });

    
     // Hide log in options
        $("._hide").change(function(){
            $("#_scanu_password,._lostPassword").slideUp("fast");
            $("._stay_logged").fadeOut("fast");
            $("#_panel").animate({"height": "-=52px"}, "fast");
            $("#_register_button").show();
            $("#_login_button").hide();
            document.reg_log.action = "../../register.php";
            $("#1").attr("name", "");
            $("#2").attr("name", "");
            $("#3").attr("name", "");
            $("#4").attr("name", "");
    });
    
      // Show log in options
    $("._show").change(function(){
        $("#_scanu_password,._lostPassword").slideDown("fast");
        $("._stay_logged").fadeIn("fast");
        $("#_panel").animate({"height": "+=52px"}, "fast");
        $("#_register_button").hide();
        $("#_login_button").show();
        document.reg_log.action = "login.php?do=login";
        $("#1").attr("name", "s");
        $("#2").attr("name", "do");
        $("#3").attr("name", "vb_login_md5password");
        $("#4").attr("name", "vb_login_md5password_utf");
  });       
});
if (navigator.userAgent.toLowerCase().indexOf("chrome") >= 0) {
	$(window).load(function(){
		$('input:-webkit-autofill').each(function(){
			var text = $(this).val();
			var name = $(this).attr('name');
			$(this).after(this.outerHTML).remove();
			$('input[name=' + name + ']').val(text);
		});
	});
}
</script>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<meta id="e_vb_meta_bburl" name="vb_meta_bburl" content="../../../@4rum" />

<meta name="generator" content="vBulletin 4.2.0" />

	<link rel="Shortcut Icon" href="../../images/xenfovb/favi/tt.ico" type="image/x-icon" />






	<!-- BEGIN TEMPLATE: facebook_opengraph -->
<meta property="fb:app_id" content="151662344993731" />
<meta property="og:site_name" content="Astyles.Org | New Style For You" />
<meta property="og:description" content="Astyles.Org | New Style For You , Astyles.Org | Diễn Đàn Giao Diện Máy Tính, Mang Lại Những Phong Cách Đầy Chất Anime-Manga Cho Máy Tính Của Bạn Và Nhiều Những Thứ Khác Cho Bạn Chọn" />
<meta property="og:url" content="../../threads/4945-Win-XP-Theme-Rewrite" />
<meta property="og:type" content="article" />

<!-- END TEMPLATE: facebook_opengraph -->



<script type="text/javascript">
<!--
	if (typeof YAHOO === 'undefined') // Load ALL YUI Local
	{
		document.write('<script type="text/javascript" src="../../clientscript/yui/yuiloader-dom-event/yuiloader-dom-event.js?v=420"><\/script>');
		document.write('<script type="text/javascript" src="../../clientscript/yui/connection/connection-min.js?v=420"><\/script>');
		var yuipath = '../../clientscript/yui';
		var yuicombopath = '';
		var remoteyui = false;
	}
	else	// Load Rest of YUI remotely (where possible)
	{
		var yuipath = '../../clientscript/yui';
		var yuicombopath = '';
		var remoteyui = true;
		if (!yuicombopath)
		{
			document.write('<script type="text/javascript" src="../../clientscript/yui/connection/connection-min.js"><\/script>');
		}
	}
	var SESSIONURL = "";
	var SECURITYTOKEN = "guest";
	var IMGDIR_MISC = "../../images/xenfovb/misc";
	var IMGDIR_BUTTON = "../../images/xenfovb/buttons";
	var vb_disable_ajax = parseInt("0", 10);
	var SIMPLEVERSION = "420";
	var BBURL = "../../../@4rum";
	var LOGGEDIN = 0 > 0 ? true : false;
	var THIS_SCRIPT = "showthread";
	var RELPATH = "../../threads/4945-Win-XP-Theme-Rewrite/login.php?do=login";
	var PATHS = {
		forum : "",
		cms   : "",
		blog  : ""
	};
	var AJAXBASEURL = "../../";
// -->
</script>
<script type="text/javascript" src="../../clientscript/vbulletin-core.js?v=420"></script>



	<link rel="alternate" type="application/rss+xml" title="Astyles.Org | New Style For You RSS Feed" href="../../external.php?type=RSS2" />
	
		<link rel="alternate" type="application/rss+xml" title="Astyles.Org | New Style For You - Theme Manga - Anime - RSS Feed" href="../../external.php?type=RSS2&amp;forumids=163" />
	



	<link rel="stylesheet" type="text/css" href="../../clientscript/vbulletin_css/style00020l/main-rollup.css?d=1371091586" />
        

	<!--[if lt IE 8]>
	<link rel="stylesheet" type="text/css" href="../../clientscript/vbulletin_css/style00020l/popupmenu-ie.css?d=1371091586" />
	<link rel="stylesheet" type="text/css" href="../../clientscript/vbulletin_css/style00020l/vbulletin-ie.css?d=1371091586" />
	<link rel="stylesheet" type="text/css" href="../../clientscript/vbulletin_css/style00020l/vbulletin-chrome-ie.css?d=1371091586" />
	<link rel="stylesheet" type="text/css" href="../../clientscript/vbulletin_css/style00020l/vbulletin-formcontrols-ie.css?d=1371091586" />
	<link rel="stylesheet" type="text/css" href="../../clientscript/vbulletin_css/style00020l/editor-ie.css?d=1371091586" />
	<![endif]-->
<!-- BEGIN TEMPLATE: vfc_hide_hack_css -->
<style>
.hiddencontent, .unhiddencontent {
    border: 1px solid;
    margin: 10px 0px;
    padding:15px 10px 15px 50px;
    background-repeat: no-repeat;
    background-position: 10px center;
    -webkit-border-radius: 10px; /* Safari prototype */
    -moz-border-radius: 10px; /* Gecko browsers */
    border-radius: 10px; /* Everything else - limited support at the moment */
}

.hiddencontent {
     color: #00529B;
     background-color: #BDE5F8;
     background-image: url('../../images/xenfovb/misc/info.png');
}

.unhiddencontent {
    color: #4F8A10;
    background-color: #DFF2BF;
    background-image:url('../../images/xenfovb/misc/unhidden.png');
}

.unhiddencontentbox {
    border: 1px solid;
    padding:5px 10px 5px 10px;
}


</style>
<!-- END TEMPLATE: vfc_hide_hack_css -->








<script type="text/javascript" src="../../tai.js"></script>

<script type="text/javascript">
function initSpoilers(context)
{
    var context = context || 'body';
    $('div.spoiler-head', $(context))
        .click(function(){
            $(this).toggleClass('unfolded');
            $(this).next('div.spoiler-body').slideToggle('fast');
        })
    ;
}

$(document).ready(function(){
    initSpoilers('body');
});
</script>
<link rel="stylesheet" type="text/css" href="../../tai.css" />




<link rel="stylesheet" href="../../highslide/resize.css" /> <script async type="text/javascript" src="../../highslide/resize.js">
</script>
<!-- END TEMPLATE: headinclude --><!-- BEGIN TEMPLATE: post_thanks_javascript -->
<script type="text/javascript" src="../../clientscript/post_thanks.js"></script>

<style type="text/css">
.postbitlegacy .postfoot .textcontrols a.post_thanks_button, .postbit .postfoot .textcontrols a.post_thanks_button  {
    background: url(../../images/xenfovb/buttons/post_thanks.png) no-repeat transparent left;
    padding-left: 20px;
}
.postbitlegacy .postfoot .textcontrols a.post_thanks_button:hover, .postbit .postfoot .textcontrols a.post_thanks_button:hover  {
    background: url(../../images/xenfovb/buttons/post_thanks-hover.png) no-repeat transparent left;
}
</style>

<!-- END TEMPLATE: post_thanks_javascript -->
	<meta name="keywords" content="rewrite, theme, theme cho win xp, theme win xp, http://i.imgur.com/4cjqx.jpg, http://www.mediafire.com/?2izqd0i35ej6q22, http://i.imgur.com/b4aso.jpg, http://modvisc.blogspot.com, nguồn, cwindowsresourcesthemes, rewirte, theme], nhưng, chẳng, tungtungtungtung" />
	<meta name="description" content="Rewirte win 7 thì có tới v5 rồi nhưng XP thì 1 ver cũng chẳng có nên up wa đây luôn cho ai xài XP :tungtung::tungtung: 
 
Nguồn: http://modvisc.blogspot.com 
 
 
 
http://i.imgur.com/b4aSO.jpg 
 
http://i.imgur.com/4Cjqx.jpg" />

	<title> [Win XP Theme] Rewrite</title>
	<link rel="canonical" href="../../threads/4945-Win-XP-Theme-Rewrite/" />
	
	
	
	
	
	
	
	
	

	
		<link rel="stylesheet" type="text/css" href="../../clientscript/vbulletin_css/style00020l/showthread-rollup.css?d=1371091586" />
	
	<!--[if lt IE 8]><link rel="stylesheet" type="text/css" href="../../clientscript/vbulletin_css/style00020l/toolsmenu-ie.css?d=1371091586" />
	<link rel="stylesheet" type="text/css" href="../../clientscript/vbulletin_css/style00020l/postlist-ie.css?d=1371091586" />
	<link rel="stylesheet" type="text/css" href="../../clientscript/vbulletin_css/style00020l/showthread-ie.css?d=1371091586" />
	<link rel="stylesheet" type="text/css" href="../../clientscript/vbulletin_css/style00020l/postbit-ie.css?d=1371091586" />
	<link rel="stylesheet" type="text/css" href="../../clientscript/vbulletin_css/style00020l/poll-ie.css?d=1371091586" /><![endif]-->
<!-- BEGIN TEMPLATE: headinclude_bottom -->
<link rel="stylesheet" type="text/css" href="../../clientscript/vbulletin_css/style00020l/additional.css?d=1371091586" />


<script type="text/javascript" src="../../images/xenfovb/js/jquery-1.5.2.min.js"></script>
<script type="text/javascript" src="../../images/xenfovb/js/xenforo.js"></script>
<script type="text/javascript" src="../../images/xenfovb/js/xenfocookie.js"></script>
<script type="text/javascript" src="../../images/xenfovb/js/xenforohover.js"></script>
<!-- END TEMPLATE: headinclude_bottom -->
</head>

<body>

<!-- BEGIN TEMPLATE: header -->
<div id="_panel">
<form action="login.php?do=login" method="post" name="reg_log" onsubmit="md5hash(vb_login_password, vb_login_md5password, vb_login_md5password_utf, 0)">
    <div class="_Scanu_container">
      
<table>
<tr>
<td style="padding: 5px;">
           Your name or email adress:
</td>
<td style="padding: 5px;">
            <input name="vb_login_username" type="text" class="_input_text">
</td>
<td style="padding: 8px;">





</td>
</tr>
<tr>
<td valign="top" width="300" style="padding: 5px;">
            Do you already have an account?
</td>
<td  style="padding: 5px;">
            <label><input class="_hide" name="registered" type="radio" value="1">
            No, create an account now.</label></br>
            <label><input type="radio" name="registered" value="0" class="_show" checked="checked"> Yes, my password is:</label>
</td>
<tr>
<td  style="padding: 5px;"><a class="_lostPassword" href="login.php?do=lostpw">Forgot your password?</a></td>
<td  style="padding: 5px;">
                    <li><input name="vb_login_password" type="password" style="margin-top: 5px;" class="_input_text" id="_scanu_password"></li>
</td>
</tr>
<tr>
<td  style="padding: 5px;"></td>
<td  style="padding: 5px;">
 
            <input type="submit" id="_register_button" style="display:none;" class="_scanu_button" value="Sign up">
            <input type="submit" id="_login_button" class="_scanu_button" value="Đăng nhập">
           <label class="_stay_logged"><input type="checkbox" name="cookieuser" > Stay logged in
            </label>
</td>
</tr>
</table>
<input id="1" type="hidden" name="s" value="" /><input type="hidden" name="do" id="2" value="login" /><input type="hidden" id="3" name="vb_login_md5password" /><input type="hidden" id="4" name="vb_login_md5password_utf" />
<input type="hidden" name="securitytoken" value="guest" />
</div></form></div>
            <div id="_open_close_button">
                <h3 class="_toggle">
                    <a id="_open" href="javascript:void(0)">Log in or Sign up</a>
                    <a id="_close" style="display: none;" href="javascript:void(0)">Close Panel</a>
                </h3>
            </div>
<div class="everything">
<div class="above_body"> <!-- closing tag is in template navbar -->


<style type='text/css'>#bttop{border:1px solid #4adcff;background:#24bde2;text-align:center;padding:5px;position:fixed;bottom:35px;right:10px;cursor:pointer;display:none;color:#fff;font-size:11px;font-weight:900;}#bttop:hover{border:1px solid #ffa789;background:#ff6734;}</style><div id='bttop'>BACK TO TOP</div><script src='http://ajax.googleapis.com/ajax/libs/jquery/1.3.2/jquery.min.js' type='text/javascript'></script><script type='text/javascript'>$(function(){$(window).scroll(function(){if($(this).scrollTop()!=0){$('#bttop').fadeIn();}else{$('#bttop').fadeOut();}});$('#bttop').click(function(){$('body,html').animate({scrollTop:0},800);});});</script>



<div id="header" class="floatcontainer doc_header">

<div id="plus_menu">
<ul>
<li><a href="http://astyles.org">Trang Chủ</a></li>
<li><a href="../../">Diễn Đàn</a></li>
<li><a href="../../forums/108-WIN-7/">Win 7 Theme</a></li>
<li><a href="../../forums/109-WIN-XP/">Win XP Theme</a></li>
<li><a href="../../forums/223-Miku-Fans-Club/">Miku Fans</a></li>
<li><a href="../../forums/73-Box-IT/">Box-IT</a></li>
<li><a href="../../forums/6-Box-Game/">Game</a></li>
</ul>
</div>




<!-- Mod User panel-->
<div id="toplinks" class="toplinks">
		
	</div>
<!-- End User panel -->






	<div><a name="top" href="index.php" class="logo-image"><img src="../../images/xenfovb/logo.png" alt="     Astyles.Org | New Style For You" /></a></div>
<div class="clock"></div>
	<div class="ad_global_header">
		<!-- BEGIN TEMPLATE: ad_global_header1 -->

<!-- END TEMPLATE: ad_global_header1 -->
		<!-- BEGIN TEMPLATE: ad_global_header2 -->

<!-- END TEMPLATE: ad_global_header2 -->
	</div>
	<hr />
</div>
<!-- END TEMPLATE: header -->
<!-- BEGIN TEMPLATE: navbar -->

		<!-- BEGIN TEMPLATE: navbar_tabs -->

<!-- END TEMPLATE: navbar_tabs -->
			
	</div>


















<div class="body_wrapper">


<!-- Mod breadcom panel like xenforo by traitimphutho.net -->

<div class="breadBoxTop">	
<fieldset class="breadcrumb">
<a href="../../faq.php" class="OverlayTrigger jumpMenuTrigger" data-cacheoverlay="true" title="Open quick navigation"><!FAQ--></a>
<span class="crumbs">
<span class="crust" itemscope="itemscope" itemtype="http://data-vocabulary.org/Breadcrumb">
</span>
<!-- BEGIN TEMPLATE: navbar_link -->

<div itemscope="itemscope" itemtype="http://data-vocabulary.org/Breadcrumb">
<li class="navbit"><a href="index.php" itemprop="url"><span itemprop="title">Diễn đàn</span></a></li>
</div>
 
<!-- END TEMPLATE: navbar_link --><!-- BEGIN TEMPLATE: navbar_link -->

<div itemscope="itemscope" itemtype="http://data-vocabulary.org/Breadcrumb">
<li class="navbit"><a href="../../forums/107-Box-Theme-May-Tinh/" itemprop="url"><span itemprop="title">Box Theme Máy Tính</span></a></li>
</div>
 
<!-- END TEMPLATE: navbar_link --><!-- BEGIN TEMPLATE: navbar_link -->

<div itemscope="itemscope" itemtype="http://data-vocabulary.org/Breadcrumb">
<li class="navbit"><a href="../../forums/109-WIN-XP/" itemprop="url"><span itemprop="title"><b>WIN XP</b></span></a></li>
</div>
 
<!-- END TEMPLATE: navbar_link --><!-- BEGIN TEMPLATE: navbar_link -->

<div itemscope="itemscope" itemtype="http://data-vocabulary.org/Breadcrumb">
<li class="navbit"><a href="../../forums/163-Theme-Manga-Anime/" itemprop="url"><span itemprop="title">Theme Manga - Anime</span></a></li>
</div>
 
<!-- END TEMPLATE: navbar_link -->
<!-- BEGIN TEMPLATE: navbar_link -->

<div itemscope="itemscope" itemtype="http://data-vocabulary.org/Breadcrumb">
<li class="navbit lastnavbit"><span><span itemprop="title"> [Win XP Theme] Rewrite</span></span></li>
</div>
 
<!-- END TEMPLATE: navbar_link -->
</span>
</fieldset>
</div>
<!-- End Mod breadcom panel like xenforo by traitimphutho.net -->

<!-- BEGIN TEMPLATE: ad_navbar_below -->

<!-- END TEMPLATE: ad_navbar_below -->
<!-- BEGIN TEMPLATE: ad_global_below_navbar -->

<!-- END TEMPLATE: ad_global_below_navbar -->


<!-- END TEMPLATE: navbar -->



	<div id="above_postlist" class="above_postlist">
		
		<div id="pagination_top" class="pagination_top">
		
			<!-- BEGIN TEMPLATE: pagenav -->
<form action="../../threads/4945-Win-XP-Theme-Rewrite/page2" method="get" class="pagination popupmenu nohovermenu">
<input type="hidden" name="t" value="4945" />
	
		<span><a href="javascript://" class="popupctrl">Trang 1 của 2</a></span>
		
		
		
		<!-- BEGIN TEMPLATE: pagenav_curpage -->
<span class="selected"><a href="javascript://" title="Kết quả 1 đến 10 của 14">1</a></span>
<!-- END TEMPLATE: pagenav_curpage --><!-- BEGIN TEMPLATE: pagenav_pagelink -->
<span><a href="../../threads/4945-Win-XP-Theme-Rewrite/page2" title="Hiển thị kết quả 11 đến 14 của 14">2</a></span>
<!-- END TEMPLATE: pagenav_pagelink -->
		
		
		<span class="prev_next"><a rel="next" href="../../threads/4945-Win-XP-Theme-Rewrite/page2" title="Trang kế - Kết quả của 11 từ 14 của 14"><img src="../../images/xenfovb/pagination/next-right.png" alt="Sau" /></a></span>
		
		
		<span class="first_last"><a href="../../threads/4945-Win-XP-Theme-Rewrite/page2" title="Trang cuối - Kết quả của 11 từ 14 của 14">Cuối<img src="../../images/xenfovb/pagination/last-right.png" alt="Cuối" /></a></span>
		
	
	<ul class="popupbody popuphover">
		<li class="formsubmit jumptopage"><label>Chuyển đến trang <input type="text" name="page" size="4" /></label> <input type="submit" class="button" value="Đến" /></li>
	</ul>
</form>
<!-- END TEMPLATE: pagenav -->
		
			<div id="postpagestats_above" class="postpagestats">
				Kết quả 1 đến 10 của 14
			</div>
		</div>
	</div>
	<div id="pagetitle" class="pagetitle">
		<h1>
			Chủ đề: <span class="threadtitle"><a href="../../threads/4945-Win-XP-Theme-Rewrite/" title="Nạp lại trang này">[Win XP Theme] Rewrite</a></span>
		</h1>
		
	</div>
	<div id="thread_controls" class="thread_controls toolsmenu">
		<div>
		<ul id="postlist_popups" class="postlist_popups popupgroup">
			
			
			<li class="popupmenu" id="threadtools">
				<h6><a class="popupctrl" href="javascript://">Công cụ </a></h6>
				<ul class="popupbody popuphover">
					<li><a href="printthread.php?t=4945&amp;pp=10&amp;page=1" accesskey="3" rel="nofollow">Hiển thị Trang có thể in</a></li>
					
						<li><a href="../../sendmessage.php?do=sendtofriend&amp;t=4945" rel="nofollow">Gửi email trang này&hellip;</a></li>
					
					<li>
						
							<a href="../../subscription.php?do=addsubscription&amp;t=4945" rel="nofollow">Theo dõi chủ đề này&hellip;</a>
						
					</li>
					
				</ul>
			</li>

			

			

			

			
				<li class="popupmenu" id="displaymodes">
					<h6><a class="popupctrl" href="javascript://">Hiển thị</a></h6>
					<ul class="popupbody popuphover">
						<li><label>Dạng hẹp</label></li>
						<li><a href="../../threads/4945-Win-XP-Theme-Rewrite?mode=hybrid"> Dạng ghép</a></li>
						<li><a href="../../threads/4945-Win-XP-Theme-Rewrite?p=28990&amp;mode=threaded#post28990"> Dạng luồng</a></li>
					</ul>
				</li>
			

			
			</ul>
		</div>
	</div>

<div id="postlist" class="postlist restrain">
	

	
		<ol id="posts" class="posts" start="1">
			<!-- BEGIN TEMPLATE: postbit_wrapper -->
<!-- BEGIN TEMPLATE: postbit -->
<li class="postbit postbitim postcontainer old" id="post_28990">    <div class="postdetails_noavatar">      
  <div class="posthead">                                                        <span class="postdate old">                                                                                        <span class="date">13-09-2011,&nbsp;<span class="time">06:36 PM</span></span>                                                                        </span>                                <span class="nodecontrols">                                                                                        <a name="post28990" href="../../threads/4945-Win-XP-Theme-Rewrite?p=28990#post28990" class="postcounter">#1</a><a id="postcount28990" name="1"></a>                                                                                                                                                        </span>                                </div>      


 <div class="userinfo" style="background: #e9e9e9 url()" >          


 <div class="contact">                <div class="avatarbox">                    <a class="postuseravatarlink" href="../../members/879-Primo-Giotto/" title="đã rời mạng">                                                    <img width="150px" height="150px" src="../../image.php?u=879&amp;dateline=1333268641" alt="Primo Giotto's Avatar" />                                            </a></div>                <div class="nicknamebox">                <div class="username_container">                                            <!-- BEGIN TEMPLATE: memberaction_dropdown -->
<div class="popupmenu memberaction">
	<a class="username offline popupctrl" href="../../members/879-Primo-Giotto/" title="đã rời mạng"><strong>&nbsp;<font color="green"><b>Primo Giotto</font></b></strong></a>
	<ul class="popupbody popuphover memberaction_body">
		<li class="left">
			<a href="../../members/879-Primo-Giotto/" class="siteicon_profile">
				Xem lý lịch
			</a>
		</li>
		
		<li class="right">
			<a href="../../search.php?do=finduser&amp;userid=879&amp;contenttype=vBForum_Post&amp;showposts=1" class="siteicon_forum" rel="nofollow">
				Xem bài viết diễn đàn
			</a>
		</li>
		
		
		<li class="left">
			<a href="../../private.php?do=newpm&amp;u=879" class="siteicon_message" rel="nofollow">
				Tin nhắn riêng
			</a>
		</li>
		
		
		
		
		
		<li class="left">
			<a href="http://www.youtube.com/user/AnimeMusicFS?feature=mhee" class="siteicon_homepage">
				Vào trang chủ
			</a>
		</li>
		
		
		

		

		
		
	</ul>
</div>
<!-- END TEMPLATE: memberaction_dropdown -->                        <!-- BEGIN TEMPLATE: postbit_onlinestatus -->
<img class="inlineimg onlinestatus" src="../../images/xenfovb/statusicon/user-offline.png" alt="đã rời mạng" border="0" />

<!-- END TEMPLATE: postbit_onlinestatus -->                                        <span class="usertitle">                        Life Not A Dream                    </span>                    



             

                                            <div class="imlinks">                               <!-- BEGIN TEMPLATE: im_yahoo -->
<a href="javascript://" onclick="imwindow('yahoo', '879', 400, 200); return false;"><img src="../../images/xenfovb/misc/im_yahoo.gif" alt="Gửi tin nhắn qua Yahoo! đến Primo Giotto" /></a>
<!-- END TEMPLATE: im_yahoo -->                         </div>                                    </div></div>            </div>


            

            <div class="thongtin"> 
         
  <div class="post_field"><font size="1"color="#000000"><b>Tham Gia: &nbsp;Dec 2010</b></font></div>
 <div class="post_field"><font size="1" color="#000000"><b>Tên:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Tra google để biết</b></font></div> 
 <div class="post_field"><font size="1" color="#000000"><b>Giới tính :&nbsp;&nbsp;Nam</b></font></div>    
 
  <div class="post_field"><font size="1" color="#000000"><b>HĐH :&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Win 7</b></font></div>


</div>
 
                    <div class="thongtin1">    
		                   
		<div class="post_field"><font size="1"color="#000000"><b>Bài Viết :&nbsp;1,604</b></font></div>  
<!-- BEGIN TEMPLATE: credits_display_postbit_row -->
   <div class="thongtin1"><div class="post_field"><font size="1"color="#000000"><b>

Xu: 
<a href="credits.php" rel="credits-1-879;Primo Giotto">158,138</a>


</b></font></div>  
<!-- END TEMPLATE: credits_display_postbit_row --><!-- BEGIN TEMPLATE: post_thanks_postbit_info -->

    <div class="thongtin1">    
		                   
		<div class="post_field"><font size="1"color="#000000"><b> Thanks:58</b></font></div>  </div>
  

    
		                   
		<font size="1"color="#000000"><b>

        <dd style="white-space:nowrap; display:inline; float: left;"> <div class="thongtin1">  <div class="post_field"><font size="1" color="#000000"><b>Thanked 1,745 Times in 201 Posts</b></font></div></div></dd>
    </b></font>

<!-- END TEMPLATE: post_thanks_postbit_info -->

 </div>  
<div class="thongtin2">       .. </div>                          
             


</div> 

                                                                              
</div>    </div>    <div class="postbody">        
        <div class="postrow">                <h2 class="posttitle icon">            [Win XP Theme] Rewrite        </h2>                                                                                                        <div class="content">            <div id="post_message_28990">                <blockquote class="postcontent restore">                    Rewirte win 7 thì có tới v5 rồi nhưng XP thì 1 ver cũng chẳng có nên up wa đây luôn cho ai xài XP <img  onerror="this.src='../../images/errorloading.jpg';"  src="../../images/smilies/tungtung.gif" border="0" alt="" title="Tungtung" class="inlineimg" /><img  onerror="this.src='../../images/errorloading.jpg';"  src="../../images/smilies/tungtung.gif" border="0" alt="" title="Tungtung" class="inlineimg" /><br />
<br />
<b>Nguồn:</b> <a href="http://modvisc.blogspot.com" target="_blank">http://modvisc.blogspot.com</a><br />
<br />
<br />
<br />
<img  onerror="this.src='../../images/errorloading.jpg';"  src="/pics/b4aSO.jpg" border="0" alt="" /><br />
<br />
<img  onerror="this.src='../../images/errorloading.jpg';"  src="/pics/4Cjqx.jpg" border="0" alt="" /><br />
<br />
Link Down:<br />
<br />
<div class="spoiler-wrap">
<div class="spoiler-head folded clickable" align="center"><img  onerror="this.src='../../images/errorloading.jpg';"  src="/pics/fallback.jpg" border="0"></div>
<div class="spoiler-body" align="center" ><!-- BEGIN TEMPLATE: vfc_hide_hack_bbcode_thanks -->
<div id="vfc_hide_thanks_post_28990" >


<div class="hiddencontent">

**Hidden Content: Thanks to see the content**

</div>


</div>
<!-- END TEMPLATE: vfc_hide_hack_bbcode_thanks --></div>
</div><br />
<br />
<b>Giải Nén Vào</b>: &quot;C:\Windows\Resources\Themes&quot;<br />
<br />
ko có xài XP nên chưa test. Ai test rồi cho ý kiến <img  onerror="this.src='../../images/errorloading.jpg';"  src="../../images/smilies/JFBQ00224070614A.gif" border="0" alt="" title="g47" class="inlineimg" />                </blockquote>            </div>            
        </div>                        <!-- edit note -->            <blockquote class="postcontent lastedited">                                    Sửa lần cuối bởi Phovang; 01-09-2012 lúc <span class="time">04:53 PM</span>.                                            </blockquote>            <!-- / edit note -->  


                                                      <!-- BEGIN TEMPLATE: ad_showthread_firstpost_sig -->

<!-- END TEMPLATE: ad_showthread_firstpost_sig -->                                        <blockquote class="signature restore">

<div style="overflow: auto; height: 150px;">
<div class="signaturecontainer"><b><marquee scrollamount="3"><font size="4"><span style="font-family: Times New Roman"><font color="Red"><img src="../../images/smilies/thobua/029.gif" border="0" alt="" title="029" class="inlineimg" /> Life's not as a dream. But why everyone still want to life like a dream? <img src="../../images/smilies/thobua/029.gif" border="0" alt="" title="029" class="inlineimg" /></font></span></font></marquee></b><br />
<div style="text-align: center;"><a href="http://www.youtube.com/user/AnimeMusicFS?feature=mhee" target="_blank"><img src="/pics/card2.jpg" border="0" alt="" /></a></div></div>
</div>


</blockquote>                                </div>    </div>    <div class="postfoot">        <div class="textcontrols floatcontainer">            <span class="postcontrols">                <img style="display:none" id="progress_28990" src="../../images/xenfovb/misc/progress.gif" alt="" />                                                                    <a id="qrwq_28990" class="newreply" href="../../newreply.php?do=newreply&amp;p=28990" rel="nofollow" title="Trả lời kèm trích dẫn"><img id="quoteimg_28990" src="/pics/fallback.jpg" alt="Trả lời kèm trích dẫn" />  Trả lời kèm trích dẫn</a>                                                             </span>            <span class="postlinking">                                                                                                                                                                                                                                                                                  </span>        </div><div class="forumhead_footer_shadow"></div>    </div>    <hr /></li><!-- BEGIN TEMPLATE: post_thanks_box -->
<li class="postbit postbitim" id="post_thanks_box_28990">
	<!-- BEGIN TEMPLATE: post_thanks_postbit -->
<div class="postbody">
	<div class="postrow">
	
	<h2 class="posttitle">
		
			The Following 5 Users Say Thank You to Primo Giotto For This Useful Post:
		
	</h2>
	<div class="content">
		<div id="post_thanks_bit_28990">
			<blockquote class="postcontent restore">
				<!-- BEGIN TEMPLATE: post_thanks_box_bit -->
<a href="member.php?u=44533" rel="nofollow">&nbsp;<font color="black"><b>Go Lest</font></b></a>&nbsp;(29-03-2013),
<!-- END TEMPLATE: post_thanks_box_bit --><!-- BEGIN TEMPLATE: post_thanks_box_bit -->
<a href="member.php?u=44227" rel="nofollow">&nbsp;<font color="black"><b>nganvyqn</font></b></a>&nbsp;(27-04-2013),
<!-- END TEMPLATE: post_thanks_box_bit --><!-- BEGIN TEMPLATE: post_thanks_box_bit -->
<a href="member.php?u=46014" rel="nofollow">&nbsp;<font color="black"><b>saza</font></b></a>&nbsp;(15-05-2013),
<!-- END TEMPLATE: post_thanks_box_bit --><!-- BEGIN TEMPLATE: post_thanks_box_bit -->
<a href="member.php?u=44918" rel="nofollow">&nbsp;<font color="black"><b>shukun1102</font></b></a>&nbsp;(17-04-2013),
<!-- END TEMPLATE: post_thanks_box_bit --><!-- BEGIN TEMPLATE: post_thanks_box_bit -->
<a href="member.php?u=45475" rel="nofollow">&nbsp;<font color="black"><b>vanninh446</font></b></a>&nbsp;(27-04-2013)
<!-- END TEMPLATE: post_thanks_box_bit -->
			</blockquote>
		</div>
	</div>
	</div>
</div>
<hr />
<!-- END TEMPLATE: post_thanks_postbit -->
</li>
<!-- END TEMPLATE: post_thanks_box -->  
<!-- END TEMPLATE: postbit -->
<!-- END TEMPLATE: postbit_wrapper --><!-- BEGIN TEMPLATE: postbit_wrapper -->
<!-- BEGIN TEMPLATE: postbit -->
<li class="postbit postbitim postcontainer old" id="post_28992">    <div class="postdetails_noavatar">      
  <div class="posthead">                                                        <span class="postdate old">                                                                                        <span class="date">13-09-2011,&nbsp;<span class="time">06:39 PM</span></span>                                                                        </span>                                <span class="nodecontrols">                                                                                        <a name="post28992" href="../../threads/4945-Win-XP-Theme-Rewrite?p=28992#post28992" class="postcounter">#2</a><a id="postcount28992" name="2"></a>                                                                                                                                                        </span>                                </div>      


 <div class="userinfo" style="background: #e9e9e9 url()" >          


 <div class="contact">                <div class="avatarbox">                    <a class="postuseravatarlink" href="../../members/1908-ngtantai1992/" title="đã rời mạng">                                                    <img width="150px" height="150px" src="../../image.php?u=1908&amp;dateline=1338723845" alt="ngtantai1992's Avatar" />                                            </a></div>                <div class="nicknamebox">                <div class="username_container">                                            <!-- BEGIN TEMPLATE: memberaction_dropdown -->
<div class="popupmenu memberaction">
	<a class="username offline popupctrl" href="../../members/1908-ngtantai1992/" title="đã rời mạng"><strong>&nbsp;<font color="black"><b>ngtantai1992</font></b></strong></a>
	<ul class="popupbody popuphover memberaction_body">
		<li class="left">
			<a href="../../members/1908-ngtantai1992/" class="siteicon_profile">
				Xem lý lịch
			</a>
		</li>
		
		<li class="right">
			<a href="../../search.php?do=finduser&amp;userid=1908&amp;contenttype=vBForum_Post&amp;showposts=1" class="siteicon_forum" rel="nofollow">
				Xem bài viết diễn đàn
			</a>
		</li>
		
		
		<li class="left">
			<a href="../../private.php?do=newpm&amp;u=1908" class="siteicon_message" rel="nofollow">
				Tin nhắn riêng
			</a>
		</li>
		
		
		
		
		
		
		

		

		
		
	</ul>
</div>
<!-- END TEMPLATE: memberaction_dropdown -->                        <!-- BEGIN TEMPLATE: postbit_onlinestatus -->
<img class="inlineimg onlinestatus" src="../../images/xenfovb/statusicon/user-offline.png" alt="đã rời mạng" border="0" />

<!-- END TEMPLATE: postbit_onlinestatus -->                                        <span class="usertitle">                        Member                    </span>                    



             

                                            <div class="imlinks">                                                        </div>                                    </div></div>            </div>


            

            <div class="thongtin"> 
         
  <div class="post_field"><font size="1"color="#000000"><b>Tham Gia: &nbsp;Feb 2011</b></font></div>
 <div class="post_field"><font size="1" color="#000000"><b>Tên:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;tai</b></font></div> 
 <div class="post_field"><font size="1" color="#000000"><b>Giới tính :&nbsp;&nbsp;Nam</b></font></div>    
 
  <div class="post_field"><font size="1" color="#000000"><b>HĐH :&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</b></font></div>


</div>
 
                    <div class="thongtin1">    
		                   
		<div class="post_field"><font size="1"color="#000000"><b>Bài Viết :&nbsp;226</b></font></div>  
<!-- BEGIN TEMPLATE: credits_display_postbit_row -->
   <div class="thongtin1"><div class="post_field"><font size="1"color="#000000"><b>

Xu: 
<a href="credits.php" rel="credits-1-1908;ngtantai1992">54,820</a>


</b></font></div>  
<!-- END TEMPLATE: credits_display_postbit_row --><!-- BEGIN TEMPLATE: post_thanks_postbit_info -->

    <div class="thongtin1">    
		                   
		<div class="post_field"><font size="1"color="#000000"><b> Thanks:3</b></font></div>  </div>
  

    
		                   
		<font size="1"color="#000000"><b>

        <dd style="white-space:nowrap; display:inline; float: left;"> <div class="thongtin1">  <div class="post_field"><font size="1" color="#000000"><b>Thanked 113 Times in 17 Posts</b></font></div></div></dd>
    </b></font>

<!-- END TEMPLATE: post_thanks_postbit_info -->

 </div>  
<div class="thongtin2">       .. </div>                          
             


</div> 

                                                                              
</div>    </div>    <div class="postbody">        
        <div class="postrow">                <h2 class="posttitle icon">            <img src="../../images/icons/icon1.png" alt="Mặc định" /> Re: [Win XP Theme] Rewrite        </h2>                                                <div class="content">            <div id="post_message_28992">                <blockquote class="postcontent restore">                    Theme XP sao để demo Win 7 thế <img  onerror="this.src='../../images/errorloading.jpg';"  src="../../images/smilies/06.gif" border="0" alt="" title="06" class="inlineimg" />                </blockquote>            </div>            
        </div>                                                                    <blockquote class="signature restore">

<div style="overflow: auto; height: 150px;">
<div class="signaturecontainer"><a href="http://www.manga16.com" target="_blank">đọc truyện tranh</a>, <a href="http://saigonflowersandgifts.com" target="_blank">hoa vietnam</a>,<a href="http://phannhathuy.com" target="_blank">chụp hình cưới</a></div>
</div>


</blockquote>                                </div>    </div>    <div class="postfoot">        <div class="textcontrols floatcontainer">            <span class="postcontrols">                <img style="display:none" id="progress_28992" src="../../images/xenfovb/misc/progress.gif" alt="" />                                                                    <a id="qrwq_28992" class="newreply" href="../../newreply.php?do=newreply&amp;p=28992" rel="nofollow" title="Trả lời kèm trích dẫn"><img id="quoteimg_28992" src="/pics/fallback.jpg" alt="Trả lời kèm trích dẫn" />  Trả lời kèm trích dẫn</a>                                                             </span>            <span class="postlinking">                                                                                                                                                                                                                                                                                  </span>        </div><div class="forumhead_footer_shadow"></div>    </div>    <hr /></li><!-- BEGIN TEMPLATE: post_thanks_box -->
<li class="postbit postbitim" id="post_thanks_box_28992" style="display:none">
	
</li>
<!-- END TEMPLATE: post_thanks_box -->  
<!-- END TEMPLATE: postbit -->
<!-- END TEMPLATE: postbit_wrapper --><!-- BEGIN TEMPLATE: postbit_wrapper -->
<!-- BEGIN TEMPLATE: postbit -->
<li class="postbit postbitim postcontainer old" id="post_28993">    <div class="postdetails_noavatar">      
  <div class="posthead">                                                        <span class="postdate old">                                                                                        <span class="date">13-09-2011,&nbsp;<span class="time">06:41 PM</span></span>                                                                        </span>                                <span class="nodecontrols">                                                                                        <a name="post28993" href="../../threads/4945-Win-XP-Theme-Rewrite?p=28993#post28993" class="postcounter">#3</a><a id="postcount28993" name="3"></a>                                                                                                                                                        </span>                                </div>      


 <div class="userinfo" style="background: #e9e9e9 url()" >          


 <div class="contact">                <div class="avatarbox">                    <a class="postuseravatarlink" href="../../members/879-Primo-Giotto/" title="đã rời mạng">                                                    <img width="150px" height="150px" src="../../image.php?u=879&amp;dateline=1333268641" alt="Primo Giotto's Avatar" />                                            </a></div>                <div class="nicknamebox">                <div class="username_container">                                            <!-- BEGIN TEMPLATE: memberaction_dropdown -->
<div class="popupmenu memberaction">
	<a class="username offline popupctrl" href="../../members/879-Primo-Giotto/" title="đã rời mạng"><strong>&nbsp;<font color="green"><b>Primo Giotto</font></b></strong></a>
	<ul class="popupbody popuphover memberaction_body">
		<li class="left">
			<a href="../../members/879-Primo-Giotto/" class="siteicon_profile">
				Xem lý lịch
			</a>
		</li>
		
		<li class="right">
			<a href="../../search.php?do=finduser&amp;userid=879&amp;contenttype=vBForum_Post&amp;showposts=1" class="siteicon_forum" rel="nofollow">
				Xem bài viết diễn đàn
			</a>
		</li>
		
		
		<li class="left">
			<a href="../../private.php?do=newpm&amp;u=879" class="siteicon_message" rel="nofollow">
				Tin nhắn riêng
			</a>
		</li>
		
		
		
		
		
		<li class="left">
			<a href="http://www.youtube.com/user/AnimeMusicFS?feature=mhee" class="siteicon_homepage">
				Vào trang chủ
			</a>
		</li>
		
		
		

		

		
		
	</ul>
</div>
<!-- END TEMPLATE: memberaction_dropdown -->                        <!-- BEGIN TEMPLATE: postbit_onlinestatus -->
<img class="inlineimg onlinestatus" src="../../images/xenfovb/statusicon/user-offline.png" alt="đã rời mạng" border="0" />

<!-- END TEMPLATE: postbit_onlinestatus -->                                        <span class="usertitle">                        Life Not A Dream                    </span>                    



             

                                            <div class="imlinks">                               <!-- BEGIN TEMPLATE: im_yahoo -->
<a href="javascript://" onclick="imwindow('yahoo', '879', 400, 200); return false;"><img src="../../images/xenfovb/misc/im_yahoo.gif" alt="Gửi tin nhắn qua Yahoo! đến Primo Giotto" /></a>
<!-- END TEMPLATE: im_yahoo -->                         </div>                                    </div></div>            </div>


            

            <div class="thongtin"> 
         
  <div class="post_field"><font size="1"color="#000000"><b>Tham Gia: &nbsp;Dec 2010</b></font></div>
 <div class="post_field"><font size="1" color="#000000"><b>Tên:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Tra google để biết</b></font></div> 
 <div class="post_field"><font size="1" color="#000000"><b>Giới tính :&nbsp;&nbsp;Nam</b></font></div>    
 
  <div class="post_field"><font size="1" color="#000000"><b>HĐH :&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Win 7</b></font></div>


</div>
 
                    <div class="thongtin1">    
		                   
		<div class="post_field"><font size="1"color="#000000"><b>Bài Viết :&nbsp;1,604</b></font></div>  
<!-- BEGIN TEMPLATE: credits_display_postbit_row -->
   <div class="thongtin1"><div class="post_field"><font size="1"color="#000000"><b>

Xu: 
<a href="credits.php" rel="credits-1-879;Primo Giotto">158,138</a>


</b></font></div>  
<!-- END TEMPLATE: credits_display_postbit_row --><!-- BEGIN TEMPLATE: post_thanks_postbit_info -->

    <div class="thongtin1">    
		                   
		<div class="post_field"><font size="1"color="#000000"><b> Thanks:58</b></font></div>  </div>
  

    
		                   
		<font size="1"color="#000000"><b>

        <dd style="white-space:nowrap; display:inline; float: left;"> <div class="thongtin1">  <div class="post_field"><font size="1" color="#000000"><b>Thanked 1,745 Times in 201 Posts</b></font></div></div></dd>
    </b></font>

<!-- END TEMPLATE: post_thanks_postbit_info -->

 </div>  
<div class="thongtin2">       .. </div>                          
             


</div> 

                                                                              
</div>    </div>    <div class="postbody">        
        <div class="postrow">                <h2 class="posttitle icon">            <img src="../../images/icons/icon1.png" alt="Mặc định" /> Re: [Win XP Theme] Rewrite        </h2>                                                <div class="content">            <div id="post_message_28993">                <blockquote class="postcontent restore">                    <!-- BEGIN TEMPLATE: bbcode_quote -->
<div class="bbcode_container">
	<div class="bbcode_quote">
		<div class="quote_container">
			<div class="bbcode_quote_container"></div>
			
				<div class="bbcode_postedby">
					Gửi bởi <strong>ngtantai1992</strong>
					<a href="../../showthread.php?p=28992#post28992" rel="nofollow"><img  onerror="this.src='../../images/errorloading.jpg';"  class="inlineimg" src="../../images/xenfovb/buttons/viewpost-right.png" alt="Xem bài viết" /></a>
				</div>
				<div class="message">Theme XP sao để demo Win 7 thế <img  onerror="this.src='../../images/errorloading.jpg';"  src="../../images/smilies/06.gif" border="0" alt="" title="06" class="inlineimg" /></div>
			
		</div>
	</div>
</div>
<!-- END TEMPLATE: bbcode_quote -->win 7 đâu :?: XP mà <img  onerror="this.src='../../images/errorloading.jpg';"  src="../../images/smilies/180.gif" border="0" alt="" title="180" class="inlineimg" />                </blockquote>            </div>            
        </div>                                                                    <blockquote class="signature restore">

<div style="overflow: auto; height: 150px;">
<div class="signaturecontainer"><b><marquee scrollamount="3"><font size="4"><span style="font-family: Times New Roman"><font color="Red"><img src="../../images/smilies/thobua/029.gif" border="0" alt="" title="029" class="inlineimg" /> Life's not as a dream. But why everyone still want to life like a dream? <img src="../../images/smilies/thobua/029.gif" border="0" alt="" title="029" class="inlineimg" /></font></span></font></marquee></b><br />
<div style="text-align: center;"><a href="http://www.youtube.com/user/AnimeMusicFS?feature=mhee" target="_blank"><img src="/pics/card2.jpg" border="0" alt="" /></a></div></div>
</div>


</blockquote>                                </div>    </div>    <div class="postfoot">        <div class="textcontrols floatcontainer">            <span class="postcontrols">                <img style="display:none" id="progress_28993" src="../../images/xenfovb/misc/progress.gif" alt="" />                                                                    <a id="qrwq_28993" class="newreply" href="../../newreply.php?do=newreply&amp;p=28993" rel="nofollow" title="Trả lời kèm trích dẫn"><img id="quoteimg_28993" src="/pics/fallback.jpg" alt="Trả lời kèm trích dẫn" />  Trả lời kèm trích dẫn</a>                                                             </span>            <span class="postlinking">                                                                                                                                                                                                                                                                                  </span>        </div><div class="forumhead_footer_shadow"></div>    </div>    <hr /></li><!-- BEGIN TEMPLATE: post_thanks_box -->
<li class="postbit postbitim" id="post_thanks_box_28993" style="display:none">
	
</li>
<!-- END TEMPLATE: post_thanks_box -->  
<!-- END TEMPLATE: postbit -->
<!-- END TEMPLATE: postbit_wrapper --><!-- BEGIN TEMPLATE: postbit_wrapper -->
<!-- BEGIN TEMPLATE: postbit -->
<li class="postbit postbitim postcontainer old" id="post_28994">    <div class="postdetails_noavatar">      
  <div class="posthead">                                                        <span class="postdate old">                                                                                        <span class="date">13-09-2011,&nbsp;<span class="time">06:43 PM</span></span>                                                                        </span>                                <span class="nodecontrols">                                                                                        <a name="post28994" href="../../threads/4945-Win-XP-Theme-Rewrite?p=28994#post28994" class="postcounter">#4</a><a id="postcount28994" name="4"></a>                                                                                                                                                        </span>                                </div>      


 <div class="userinfo" style="background: #e9e9e9 url()" >          


 <div class="contact">                <div class="avatarbox">                    <a class="postuseravatarlink" href="../../members/6737-Lon-Cai-Ban/" title="đã rời mạng">                                                    <img width="150px" height="150px" src="../../images/xenfovb/LogoAS.png" alt="Lộn Cái Bàn's Avatar" />                                            </a></div>                <div class="nicknamebox">                <div class="username_container">                                            <!-- BEGIN TEMPLATE: memberaction_dropdown -->
<div class="popupmenu memberaction">
	<a class="username offline popupctrl" href="../../members/6737-Lon-Cai-Ban/" title="đã rời mạng"><strong>&nbsp;<font color="blue"><b>Lộn Cái Bàn</font></b></font></strong></a>
	<ul class="popupbody popuphover memberaction_body">
		<li class="left">
			<a href="../../members/6737-Lon-Cai-Ban/" class="siteicon_profile">
				Xem lý lịch
			</a>
		</li>
		
		<li class="right">
			<a href="../../search.php?do=finduser&amp;userid=6737&amp;contenttype=vBForum_Post&amp;showposts=1" class="siteicon_forum" rel="nofollow">
				Xem bài viết diễn đàn
			</a>
		</li>
		
		
		<li class="left">
			<a href="../../private.php?do=newpm&amp;u=6737" class="siteicon_message" rel="nofollow">
				Tin nhắn riêng
			</a>
		</li>
		
		
		
		
		
		
		

		

		
		
	</ul>
</div>
<!-- END TEMPLATE: memberaction_dropdown -->                        <!-- BEGIN TEMPLATE: postbit_onlinestatus -->
<img class="inlineimg onlinestatus" src="../../images/xenfovb/statusicon/user-offline.png" alt="đã rời mạng" border="0" />

<!-- END TEMPLATE: postbit_onlinestatus -->                                        <span class="usertitle">                        Điều Hành Viên                    </span>                    



             

                                            <div class="imlinks">                               <!-- BEGIN TEMPLATE: im_yahoo -->
<a href="javascript://" onclick="imwindow('yahoo', '6737', 400, 200); return false;"><img src="../../images/xenfovb/misc/im_yahoo.gif" alt="Gửi tin nhắn qua Yahoo! đến Lộn Cái Bàn" /></a>
<!-- END TEMPLATE: im_yahoo -->                         </div>                                    </div></div>            </div>


            

            <div class="thongtin"> 
         
  <div class="post_field"><font size="1"color="#000000"><b>Tham Gia: &nbsp;Aug 2011</b></font></div>
 <div class="post_field"><font size="1" color="#000000"><b>Tên:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;trung</b></font></div> 
 <div class="post_field"><font size="1" color="#000000"><b>Giới tính :&nbsp;&nbsp;Nam</b></font></div>    
 
  <div class="post_field"><font size="1" color="#000000"><b>HĐH :&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Win 7</b></font></div>


</div>
 
                    <div class="thongtin1">    
		                   
		<div class="post_field"><font size="1"color="#000000"><b>Bài Viết :&nbsp;519</b></font></div>  
<!-- BEGIN TEMPLATE: credits_display_postbit_row -->
   <div class="thongtin1"><div class="post_field"><font size="1"color="#000000"><b>

Xu: 
<a href="credits.php" rel="credits-1-6737;Lộn Cái Bàn">171</a>


</b></font></div>  
<!-- END TEMPLATE: credits_display_postbit_row --><!-- BEGIN TEMPLATE: post_thanks_postbit_info -->

    <div class="thongtin1">    
		                   
		<div class="post_field"><font size="1"color="#000000"><b> Thanks:0</b></font></div>  </div>
  

    
		                   
		<font size="1"color="#000000"><b>

        <dd style="white-space:nowrap; display:inline; float: left;"> <div class="thongtin1">  <div class="post_field"><font size="1" color="#000000"><b>Thanked 13 Times in 10 Posts</b></font></div></div></dd>
    </b></font>

<!-- END TEMPLATE: post_thanks_postbit_info -->

 </div>  
<div class="thongtin2">       .. </div>                          
             


</div> 

                                                                              
</div>    </div>    <div class="postbody">        
        <div class="postrow">                <h2 class="posttitle icon">            <img src="../../images/icons/icon1.png" alt="Mặc định" /> Re: [Win XP Theme] Rewrite        </h2>                                                <div class="content">            <div id="post_message_28994">                <blockquote class="postcontent restore">                    <!-- BEGIN TEMPLATE: bbcode_quote -->
<div class="bbcode_container">
	<div class="bbcode_quote">
		<div class="quote_container">
			<div class="bbcode_quote_container"></div>
			
				<div class="bbcode_postedby">
					Gửi bởi <strong>jacklong168</strong>
					<a href="../../showthread.php?p=28993#post28993" rel="nofollow"><img  onerror="this.src='../../images/errorloading.jpg';"  class="inlineimg" src="../../images/xenfovb/buttons/viewpost-right.png" alt="Xem bài viết" /></a>
				</div>
				<div class="message">win 7 đâu :?: XP mà <img  onerror="this.src='../../images/errorloading.jpg';"  src="../../images/smilies/180.gif" border="0" alt="" title="180" class="inlineimg" /></div>
			
		</div>
	</div>
</div>
<!-- END TEMPLATE: bbcode_quote -->WinXp đâu , Theme này Win7 mà <img  onerror="this.src='../../images/errorloading.jpg';"  src="../../images/smilies/157.gif" border="0" alt="" title="157" class="inlineimg" />                </blockquote>            </div>            
        </div>                                                                    <blockquote class="signature restore">

<div style="overflow: auto; height: 150px;">
<div class="signaturecontainer"><div style="text-align: center;"><b><font size="3"><br />
 </font></b></div></div>
</div>


</blockquote>                                </div>    </div>    <div class="postfoot">        <div class="textcontrols floatcontainer">            <span class="postcontrols">                <img style="display:none" id="progress_28994" src="../../images/xenfovb/misc/progress.gif" alt="" />                                                                    <a id="qrwq_28994" class="newreply" href="../../newreply.php?do=newreply&amp;p=28994" rel="nofollow" title="Trả lời kèm trích dẫn"><img id="quoteimg_28994" src="/pics/fallback.jpg" alt="Trả lời kèm trích dẫn" />  Trả lời kèm trích dẫn</a>                                                             </span>            <span class="postlinking">                                                                                                                                                                                                                                                                                  </span>        </div><div class="forumhead_footer_shadow"></div>    </div>    <hr /></li><!-- BEGIN TEMPLATE: post_thanks_box -->
<li class="postbit postbitim" id="post_thanks_box_28994" style="display:none">
	
</li>
<!-- END TEMPLATE: post_thanks_box -->  
<!-- END TEMPLATE: postbit -->
<!-- END TEMPLATE: postbit_wrapper --><!-- BEGIN TEMPLATE: postbit_wrapper -->
<!-- BEGIN TEMPLATE: postbit -->
<li class="postbit postbitim postcontainer old" id="post_28995">    <div class="postdetails_noavatar">      
  <div class="posthead">                                                        <span class="postdate old">                                                                                        <span class="date">13-09-2011,&nbsp;<span class="time">06:46 PM</span></span>                                                                        </span>                                <span class="nodecontrols">                                                                                        <a name="post28995" href="../../threads/4945-Win-XP-Theme-Rewrite?p=28995#post28995" class="postcounter">#5</a><a id="postcount28995" name="5"></a>                                                                                                                                                        </span>                                </div>      


 <div class="userinfo" style="background: #e9e9e9 url()" >          


 <div class="contact">                <div class="avatarbox">                    <a class="postuseravatarlink" href="../../members/879-Primo-Giotto/" title="đã rời mạng">                                                    <img width="150px" height="150px" src="../../image.php?u=879&amp;dateline=1333268641" alt="Primo Giotto's Avatar" />                                            </a></div>                <div class="nicknamebox">                <div class="username_container">                                            <!-- BEGIN TEMPLATE: memberaction_dropdown -->
<div class="popupmenu memberaction">
	<a class="username offline popupctrl" href="../../members/879-Primo-Giotto/" title="đã rời mạng"><strong>&nbsp;<font color="green"><b>Primo Giotto</font></b></strong></a>
	<ul class="popupbody popuphover memberaction_body">
		<li class="left">
			<a href="../../members/879-Primo-Giotto/" class="siteicon_profile">
				Xem lý lịch
			</a>
		</li>
		
		<li class="right">
			<a href="../../search.php?do=finduser&amp;userid=879&amp;contenttype=vBForum_Post&amp;showposts=1" class="siteicon_forum" rel="nofollow">
				Xem bài viết diễn đàn
			</a>
		</li>
		
		
		<li class="left">
			<a href="../../private.php?do=newpm&amp;u=879" class="siteicon_message" rel="nofollow">
				Tin nhắn riêng
			</a>
		</li>
		
		
		
		
		
		<li class="left">
			<a href="http://www.youtube.com/user/AnimeMusicFS?feature=mhee" class="siteicon_homepage">
				Vào trang chủ
			</a>
		</li>
		
		
		

		

		
		
	</ul>
</div>
<!-- END TEMPLATE: memberaction_dropdown -->                        <!-- BEGIN TEMPLATE: postbit_onlinestatus -->
<img class="inlineimg onlinestatus" src="../../images/xenfovb/statusicon/user-offline.png" alt="đã rời mạng" border="0" />

<!-- END TEMPLATE: postbit_onlinestatus -->                                        <span class="usertitle">                        Life Not A Dream                    </span>                    



             

                                            <div class="imlinks">                               <!-- BEGIN TEMPLATE: im_yahoo -->
<a href="javascript://" onclick="imwindow('yahoo', '879', 400, 200); return false;"><img src="../../images/xenfovb/misc/im_yahoo.gif" alt="Gửi tin nhắn qua Yahoo! đến Primo Giotto" /></a>
<!-- END TEMPLATE: im_yahoo -->                         </div>                                    </div></div>            </div>


            

            <div class="thongtin"> 
         
  <div class="post_field"><font size="1"color="#000000"><b>Tham Gia: &nbsp;Dec 2010</b></font></div>
 <div class="post_field"><font size="1" color="#000000"><b>Tên:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Tra google để biết</b></font></div> 
 <div class="post_field"><font size="1" color="#000000"><b>Giới tính :&nbsp;&nbsp;Nam</b></font></div>    
 
  <div class="post_field"><font size="1" color="#000000"><b>HĐH :&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Win 7</b></font></div>


</div>
 
                    <div class="thongtin1">    
		                   
		<div class="post_field"><font size="1"color="#000000"><b>Bài Viết :&nbsp;1,604</b></font></div>  
<!-- BEGIN TEMPLATE: credits_display_postbit_row -->
   <div class="thongtin1"><div class="post_field"><font size="1"color="#000000"><b>

Xu: 
<a href="credits.php" rel="credits-1-879;Primo Giotto">158,138</a>


</b></font></div>  
<!-- END TEMPLATE: credits_display_postbit_row --><!-- BEGIN TEMPLATE: post_thanks_postbit_info -->

    <div class="thongtin1">    
		                   
		<div class="post_field"><font size="1"color="#000000"><b> Thanks:58</b></font></div>  </div>
  

    
		                   
		<font size="1"color="#000000"><b>

        <dd style="white-space:nowrap; display:inline; float: left;"> <div class="thongtin1">  <div class="post_field"><font size="1" color="#000000"><b>Thanked 1,745 Times in 201 Posts</b></font></div></div></dd>
    </b></font>

<!-- END TEMPLATE: post_thanks_postbit_info -->

 </div>  
<div class="thongtin2">       .. </div>                          
             


</div> 

                                                                              
</div>    </div>    <div class="postbody">        
        <div class="postrow">                <h2 class="posttitle icon">            <img src="../../images/icons/icon1.png" alt="Mặc định" /> Re: [Win XP Theme] Rewrite        </h2>                                                <div class="content">            <div id="post_message_28995">                <blockquote class="postcontent restore">                    thì mình đã nói ở trên rồi mình xài win 7 nên ko test dc ai xài XP test thử <img  onerror="this.src='../../images/errorloading.jpg';"  src="../../images/smilies/onion3-20.gif" border="0" alt="" title="fsdf56" class="inlineimg" />                </blockquote>            </div>            
        </div>                                                                    <blockquote class="signature restore">

<div style="overflow: auto; height: 150px;">
<div class="signaturecontainer"><b><marquee scrollamount="3"><font size="4"><span style="font-family: Times New Roman"><font color="Red"><img src="../../images/smilies/thobua/029.gif" border="0" alt="" title="029" class="inlineimg" /> Life's not as a dream. But why everyone still want to life like a dream? <img src="../../images/smilies/thobua/029.gif" border="0" alt="" title="029" class="inlineimg" /></font></span></font></marquee></b><br />
<div style="text-align: center;"><a href="http://www.youtube.com/user/AnimeMusicFS?feature=mhee" target="_blank"><img src="/pics/card2.jpg" border="0" alt="" /></a></div></div>
</div>


</blockquote>                                </div>    </div>    <div class="postfoot">        <div class="textcontrols floatcontainer">            <span class="postcontrols">                <img style="display:none" id="progress_28995" src="../../images/xenfovb/misc/progress.gif" alt="" />                                                                    <a id="qrwq_28995" class="newreply" href="../../newreply.php?do=newreply&amp;p=28995" rel="nofollow" title="Trả lời kèm trích dẫn"><img id="quoteimg_28995" src="/pics/fallback.jpg" alt="Trả lời kèm trích dẫn" />  Trả lời kèm trích dẫn</a>                                                             </span>            <span class="postlinking">                                                                                                                                                                                                                                                                                  </span>        </div><div class="forumhead_footer_shadow"></div>    </div>    <hr /></li><!-- BEGIN TEMPLATE: post_thanks_box -->
<li class="postbit postbitim" id="post_thanks_box_28995" style="display:none">
	
</li>
<!-- END TEMPLATE: post_thanks_box -->  
<!-- END TEMPLATE: postbit -->
<!-- END TEMPLATE: postbit_wrapper --><!-- BEGIN TEMPLATE: postbit_wrapper -->
<!-- BEGIN TEMPLATE: postbit -->
<li class="postbit postbitim postcontainer old" id="post_28998">    <div class="postdetails_noavatar">      
  <div class="posthead">                                                        <span class="postdate old">                                                                                        <span class="date">13-09-2011,&nbsp;<span class="time">06:50 PM</span></span>                                                                        </span>                                <span class="nodecontrols">                                                                                        <a name="post28998" href="../../threads/4945-Win-XP-Theme-Rewrite?p=28998#post28998" class="postcounter">#6</a><a id="postcount28998" name="6"></a>                                                                                                                                                        </span>                                </div>      


 <div class="userinfo" style="background: #e9e9e9 url()" >          


 <div class="contact">                <div class="avatarbox">                    <a class="postuseravatarlink" href="../../members/6737-Lon-Cai-Ban/" title="đã rời mạng">                                                    <img width="150px" height="150px" src="../../images/xenfovb/LogoAS.png" alt="Lộn Cái Bàn's Avatar" />                                            </a></div>                <div class="nicknamebox">                <div class="username_container">                                            <!-- BEGIN TEMPLATE: memberaction_dropdown -->
<div class="popupmenu memberaction">
	<a class="username offline popupctrl" href="../../members/6737-Lon-Cai-Ban/" title="đã rời mạng"><strong>&nbsp;<font color="blue"><b>Lộn Cái Bàn</font></b></font></strong></a>
	<ul class="popupbody popuphover memberaction_body">
		<li class="left">
			<a href="../../members/6737-Lon-Cai-Ban/" class="siteicon_profile">
				Xem lý lịch
			</a>
		</li>
		
		<li class="right">
			<a href="../../search.php?do=finduser&amp;userid=6737&amp;contenttype=vBForum_Post&amp;showposts=1" class="siteicon_forum" rel="nofollow">
				Xem bài viết diễn đàn
			</a>
		</li>
		
		
		<li class="left">
			<a href="../../private.php?do=newpm&amp;u=6737" class="siteicon_message" rel="nofollow">
				Tin nhắn riêng
			</a>
		</li>
		
		
		
		
		
		
		

		

		
		
	</ul>
</div>
<!-- END TEMPLATE: memberaction_dropdown -->                        <!-- BEGIN TEMPLATE: postbit_onlinestatus -->
<img class="inlineimg onlinestatus" src="../../images/xenfovb/statusicon/user-offline.png" alt="đã rời mạng" border="0" />

<!-- END TEMPLATE: postbit_onlinestatus -->                                        <span class="usertitle">                        Điều Hành Viên                    </span>                    



             

                                            <div class="imlinks">                               <!-- BEGIN TEMPLATE: im_yahoo -->
<a href="javascript://" onclick="imwindow('yahoo', '6737', 400, 200); return false;"><img src="../../images/xenfovb/misc/im_yahoo.gif" alt="Gửi tin nhắn qua Yahoo! đến Lộn Cái Bàn" /></a>
<!-- END TEMPLATE: im_yahoo -->                         </div>                                    </div></div>            </div>


            

            <div class="thongtin"> 
         
  <div class="post_field"><font size="1"color="#000000"><b>Tham Gia: &nbsp;Aug 2011</b></font></div>
 <div class="post_field"><font size="1" color="#000000"><b>Tên:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;trung</b></font></div> 
 <div class="post_field"><font size="1" color="#000000"><b>Giới tính :&nbsp;&nbsp;Nam</b></font></div>    
 
  <div class="post_field"><font size="1" color="#000000"><b>HĐH :&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Win 7</b></font></div>


</div>
 
                    <div class="thongtin1">    
		                   
		<div class="post_field"><font size="1"color="#000000"><b>Bài Viết :&nbsp;519</b></font></div>  
<!-- BEGIN TEMPLATE: credits_display_postbit_row -->
   <div class="thongtin1"><div class="post_field"><font size="1"color="#000000"><b>

Xu: 
<a href="credits.php" rel="credits-1-6737;Lộn Cái Bàn">171</a>


</b></font></div>  
<!-- END TEMPLATE: credits_display_postbit_row --><!-- BEGIN TEMPLATE: post_thanks_postbit_info -->

    <div class="thongtin1">    
		                   
		<div class="post_field"><font size="1"color="#000000"><b> Thanks:0</b></font></div>  </div>
  

    
		                   
		<font size="1"color="#000000"><b>

        <dd style="white-space:nowrap; display:inline; float: left;"> <div class="thongtin1">  <div class="post_field"><font size="1" color="#000000"><b>Thanked 13 Times in 10 Posts</b></font></div></div></dd>
    </b></font>

<!-- END TEMPLATE: post_thanks_postbit_info -->

 </div>  
<div class="thongtin2">       .. </div>                          
             


</div> 

                                                                              
</div>    </div>    <div class="postbody">        
        <div class="postrow">                <h2 class="posttitle icon">            <img src="../../images/icons/icon1.png" alt="Mặc định" /> Re: [Win XP Theme] Rewrite        </h2>                                                <div class="content">            <div id="post_message_28998">                <blockquote class="postcontent restore">                    thế hóa ra Screenshot từ máy của bạn à . <a href="http://eemoticons.net/D/Kanade-Avatar/Kanade 019" target="_blank"><img  onerror="this.src='../../images/errorloading.jpg';"  src="/pics/Kanade 019.jpg" border="0" alt="" /></a> Sorry                </blockquote>            </div>            
        </div>                                                                    <blockquote class="signature restore">

<div style="overflow: auto; height: 150px;">
<div class="signaturecontainer"><div style="text-align: center;"><b><font size="3"><br />
 </font></b></div></div>
</div>


</blockquote>                                </div>    </div>    <div class="postfoot">        <div class="textcontrols floatcontainer">            <span class="postcontrols">                <img style="display:none" id="progress_28998" src="../../images/xenfovb/misc/progress.gif" alt="" />                                                                    <a id="qrwq_28998" class="newreply" href="../../newreply.php?do=newreply&amp;p=28998" rel="nofollow" title="Trả lời kèm trích dẫn"><img id="quoteimg_28998" src="/pics/fallback.jpg" alt="Trả lời kèm trích dẫn" />  Trả lời kèm trích dẫn</a>                                                             </span>            <span class="postlinking">                                                                                                                                                                                                                                                                                  </span>        </div><div class="forumhead_footer_shadow"></div>    </div>    <hr /></li><!-- BEGIN TEMPLATE: post_thanks_box -->
<li class="postbit postbitim" id="post_thanks_box_28998" style="display:none">
	
</li>
<!-- END TEMPLATE: post_thanks_box -->  
<!-- END TEMPLATE: postbit -->
<!-- END TEMPLATE: postbit_wrapper --><!-- BEGIN TEMPLATE: postbit_wrapper -->
<!-- BEGIN TEMPLATE: postbit -->
<li class="postbit postbitim postcontainer old" id="post_76000">    <div class="postdetails_noavatar">      
  <div class="posthead">                                                        <span class="postdate old">                                                                                        <span class="date">01-09-2012,&nbsp;<span class="time">12:02 PM</span></span>                                                                        </span>                                <span class="nodecontrols">                                                                                        <a name="post76000" href="../../threads/4945-Win-XP-Theme-Rewrite?p=76000#post76000" class="postcounter">#7</a><a id="postcount76000" name="7"></a>                                                                                                                                                        </span>                                </div>      


 <div class="userinfo" style="background: #e9e9e9 url()" >          


 <div class="contact">                <div class="avatarbox">                    <a class="postuseravatarlink" href="../../members/14781-hakusama/" title="đã rời mạng">                                                    <img width="150px" height="150px" src="../../image.php?u=14781&amp;dateline=1362759407" alt="hakusama's Avatar" />                                            </a></div>                <div class="nicknamebox">                <div class="username_container">                                            <!-- BEGIN TEMPLATE: memberaction_dropdown -->
<div class="popupmenu memberaction">
	<a class="username offline popupctrl" href="../../members/14781-hakusama/" title="đã rời mạng"><strong>&nbsp;<font color="black"><b>hakusama</font></b></strong></a>
	<ul class="popupbody popuphover memberaction_body">
		<li class="left">
			<a href="../../members/14781-hakusama/" class="siteicon_profile">
				Xem lý lịch
			</a>
		</li>
		
		<li class="right">
			<a href="../../search.php?do=finduser&amp;userid=14781&amp;contenttype=vBForum_Post&amp;showposts=1" class="siteicon_forum" rel="nofollow">
				Xem bài viết diễn đàn
			</a>
		</li>
		
		
		<li class="left">
			<a href="../../private.php?do=newpm&amp;u=14781" class="siteicon_message" rel="nofollow">
				Tin nhắn riêng
			</a>
		</li>
		
		
		
		
		
		
		

		

		
		
	</ul>
</div>
<!-- END TEMPLATE: memberaction_dropdown -->                        <!-- BEGIN TEMPLATE: postbit_onlinestatus -->
<img class="inlineimg onlinestatus" src="../../images/xenfovb/statusicon/user-offline.png" alt="đã rời mạng" border="0" />

<!-- END TEMPLATE: postbit_onlinestatus -->                                        <span class="usertitle">                        New Mem                    </span>                    



             

                                            <div class="imlinks">                                                        </div>                                    </div></div>            </div>


            

            <div class="thongtin"> 
         
  <div class="post_field"><font size="1"color="#000000"><b>Tham Gia: &nbsp;Jul 2012</b></font></div>
 <div class="post_field"><font size="1" color="#000000"><b>Tên:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Lê Hiếu</b></font></div> 
 <div class="post_field"><font size="1" color="#000000"><b>Giới tính :&nbsp;&nbsp;Nam</b></font></div>    
 
  <div class="post_field"><font size="1" color="#000000"><b>HĐH :&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Win XP</b></font></div>


</div>
 
                    <div class="thongtin1">    
		                   
		<div class="post_field"><font size="1"color="#000000"><b>Bài Viết :&nbsp;22</b></font></div>  
<!-- BEGIN TEMPLATE: credits_display_postbit_row -->
   <div class="thongtin1"><div class="post_field"><font size="1"color="#000000"><b>

Xu: 
<a href="credits.php" rel="credits-1-14781;hakusama">600</a>


</b></font></div>  
<!-- END TEMPLATE: credits_display_postbit_row --><!-- BEGIN TEMPLATE: post_thanks_postbit_info -->

    <div class="thongtin1">    
		                   
		<div class="post_field"><font size="1"color="#000000"><b> Thanks:4</b></font></div>  </div>
  

    
		                   
		<font size="1"color="#000000"><b>

        <dd style="white-space:nowrap; display:inline; float: left;"><div class="thongtin1"> <div class="post_field"><font size="1" color="#000000"><b>Thanked 1 Time in 1 Post</b></font></div></div></dd>
    </b></font>

<!-- END TEMPLATE: post_thanks_postbit_info -->

 </div>  
<div class="thongtin2">       .. </div>                          
             


</div> 

                                                                              
</div>    </div>    <div class="postbody">        
        <div class="postrow">                <h2 class="posttitle icon">            <img src="../../images/icons/icon1.png" alt="Mặc định" /> Re: [Win XP Theme] Rewrite        </h2>                                                <div class="content">            <div id="post_message_76000">                <blockquote class="postcontent restore">                    <img  onerror="this.src='../../images/errorloading.jpg';"  src="../../images/smilies/thobua/077.gif" border="0" alt="" title="077" class="inlineimg" /> cứ tưởng win xp                </blockquote>            </div>            
        </div>                                                                        </div>    </div>    <div class="postfoot">        <div class="textcontrols floatcontainer">            <span class="postcontrols">                <img style="display:none" id="progress_76000" src="../../images/xenfovb/misc/progress.gif" alt="" />                                                                    <a id="qrwq_76000" class="newreply" href="../../newreply.php?do=newreply&amp;p=76000" rel="nofollow" title="Trả lời kèm trích dẫn"><img id="quoteimg_76000" src="/pics/fallback.jpg" alt="Trả lời kèm trích dẫn" />  Trả lời kèm trích dẫn</a>                                                             </span>            <span class="postlinking">                                                                                                                                                                                                                                                                                  </span>        </div><div class="forumhead_footer_shadow"></div>    </div>    <hr /></li><!-- BEGIN TEMPLATE: post_thanks_box -->
<li class="postbit postbitim" id="post_thanks_box_76000" style="display:none">
	
</li>
<!-- END TEMPLATE: post_thanks_box -->  
<!-- END TEMPLATE: postbit -->
<!-- END TEMPLATE: postbit_wrapper --><!-- BEGIN TEMPLATE: postbit_wrapper -->
<!-- BEGIN TEMPLATE: postbit -->
<li class="postbit postbitim postcontainer old" id="post_76006">    <div class="postdetails_noavatar">      
  <div class="posthead">                                                        <span class="postdate old">                                                                                        <span class="date">01-09-2012,&nbsp;<span class="time">12:13 PM</span></span>                                                                        </span>                                <span class="nodecontrols">                                                                                        <a name="post76006" href="../../threads/4945-Win-XP-Theme-Rewrite?p=76006#post76006" class="postcounter">#8</a><a id="postcount76006" name="8"></a>                                                                                                                                                        </span>                                </div>      


 <div class="userinfo" style="background: #e9e9e9 url()" >          


 <div class="contact">                <div class="avatarbox">                    <a class="postuseravatarlink" href="../../members/11114-otoshigami/" title="đã rời mạng">                                                    <img width="150px" height="150px" src="../../image.php?u=11114&amp;dateline=1372860329" alt="otoshigami's Avatar" />                                            </a></div>                <div class="nicknamebox">                <div class="username_container">                                            <!-- BEGIN TEMPLATE: memberaction_dropdown -->
<div class="popupmenu memberaction">
	<a class="username offline popupctrl" href="../../members/11114-otoshigami/" title="đã rời mạng"><strong>&nbsp;<font color="black"><b>otoshigami</font></b></strong></a>
	<ul class="popupbody popuphover memberaction_body">
		<li class="left">
			<a href="../../members/11114-otoshigami/" class="siteicon_profile">
				Xem lý lịch
			</a>
		</li>
		
		<li class="right">
			<a href="../../search.php?do=finduser&amp;userid=11114&amp;contenttype=vBForum_Post&amp;showposts=1" class="siteicon_forum" rel="nofollow">
				Xem bài viết diễn đàn
			</a>
		</li>
		
		
		<li class="left">
			<a href="../../private.php?do=newpm&amp;u=11114" class="siteicon_message" rel="nofollow">
				Tin nhắn riêng
			</a>
		</li>
		
		
		
		
		
		
		

		

		
		
	</ul>
</div>
<!-- END TEMPLATE: memberaction_dropdown -->                        <!-- BEGIN TEMPLATE: postbit_onlinestatus -->
<img class="inlineimg onlinestatus" src="../../images/xenfovb/statusicon/user-offline.png" alt="đã rời mạng" border="0" />

<!-- END TEMPLATE: postbit_onlinestatus -->                                        <span class="usertitle">                        Member                    </span>                    



             

                                            <div class="imlinks">                                                        </div>                                    </div></div>            </div>


            

            <div class="thongtin"> 
         
  <div class="post_field"><font size="1"color="#000000"><b>Tham Gia: &nbsp;Mar 2012</b></font></div>
 <div class="post_field"><font size="1" color="#000000"><b>Tên:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Quang Vinh</b></font></div> 
 <div class="post_field"><font size="1" color="#000000"><b>Giới tính :&nbsp;&nbsp;Nam</b></font></div>    
 
  <div class="post_field"><font size="1" color="#000000"><b>HĐH :&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Win 7</b></font></div>


</div>
 
                    <div class="thongtin1">    
		                   
		<div class="post_field"><font size="1"color="#000000"><b>Bài Viết :&nbsp;563</b></font></div>  
<!-- BEGIN TEMPLATE: credits_display_postbit_row -->
   <div class="thongtin1"><div class="post_field"><font size="1"color="#000000"><b>

Xu: 
<a href="credits.php" rel="credits-1-11114;otoshigami">113,079</a>


</b></font></div>  
<!-- END TEMPLATE: credits_display_postbit_row --><!-- BEGIN TEMPLATE: post_thanks_postbit_info -->

    <div class="thongtin1">    
		                   
		<div class="post_field"><font size="1"color="#000000"><b> Thanks:103</b></font></div>  </div>
  

    
		                   
		<font size="1"color="#000000"><b>

        <dd style="white-space:nowrap; display:inline; float: left;"> <div class="thongtin1">  <div class="post_field"><font size="1" color="#000000"><b>Thanked 122 Times in 24 Posts</b></font></div></div></dd>
    </b></font>

<!-- END TEMPLATE: post_thanks_postbit_info -->

 </div>  
<div class="thongtin2">       .. </div>                          
             


</div> 

                                                                              
</div>    </div>    <div class="postbody">        
        <div class="postrow">                <h2 class="posttitle icon">            <img src="../../images/icons/icon1.png" alt="Mặc định" /> Re: [Win XP Theme] Rewrite        </h2>                                                <div class="content">            <div id="post_message_76006">                <blockquote class="postcontent restore">                    <!-- BEGIN TEMPLATE: bbcode_quote -->
<div class="bbcode_container">
	<div class="bbcode_quote">
		<div class="quote_container">
			<div class="bbcode_quote_container"></div>
			
				<div class="bbcode_postedby">
					Gửi bởi <strong>hakusama</strong>
					<a href="../../showthread.php?p=76000#post76000" rel="nofollow"><img  onerror="this.src='../../images/errorloading.jpg';"  class="inlineimg" src="../../images/xenfovb/buttons/viewpost-right.png" alt="Xem bài viết" /></a>
				</div>
				<div class="message"><img  onerror="this.src='../../images/errorloading.jpg';"  src="../../images/smilies/thobua/077.gif" border="0" alt="" title="077" class="inlineimg" /> cứ tưởng win xp</div>
			
		</div>
	</div>
</div>
<!-- END TEMPLATE: bbcode_quote -->xin đính chính lại, theo những thông ti ở bên trên thì đây là theme winxp, do chủ thớt ko có hình theme winxp nên lấy tạm hình trên win7 làm demo <img  onerror="this.src='../../images/errorloading.jpg';"  src="../../images/smilies/thobua/036.gif" border="0" alt="" title="036" class="inlineimg" />                </blockquote>            </div>            
        </div>                                                                    <blockquote class="signature restore">

<div style="overflow: auto; height: 150px;">
<div class="signaturecontainer"><img src="/pics/nkoyac3blqtd469m_20111203163057_0500_0500.gif" border="0" alt="" /><img src="/pics/mJIQy.gif" border="0" alt="" /></div>
</div>


</blockquote>                                </div>    </div>    <div class="postfoot">        <div class="textcontrols floatcontainer">            <span class="postcontrols">                <img style="display:none" id="progress_76006" src="../../images/xenfovb/misc/progress.gif" alt="" />                                                                    <a id="qrwq_76006" class="newreply" href="../../newreply.php?do=newreply&amp;p=76006" rel="nofollow" title="Trả lời kèm trích dẫn"><img id="quoteimg_76006" src="/pics/fallback.jpg" alt="Trả lời kèm trích dẫn" />  Trả lời kèm trích dẫn</a>                                                             </span>            <span class="postlinking">                                                                                                                                                                                                                                                                                  </span>        </div><div class="forumhead_footer_shadow"></div>    </div>    <hr /></li><!-- BEGIN TEMPLATE: post_thanks_box -->
<li class="postbit postbitim" id="post_thanks_box_76006" style="display:none">
	
</li>
<!-- END TEMPLATE: post_thanks_box -->  
<!-- END TEMPLATE: postbit -->
<!-- END TEMPLATE: postbit_wrapper --><!-- BEGIN TEMPLATE: postbit_wrapper -->
<!-- BEGIN TEMPLATE: postbit -->
<li class="postbit postbitim postcontainer old" id="post_76038">    <div class="postdetails_noavatar">      
  <div class="posthead">                                                        <span class="postdate old">                                                                                        <span class="date">01-09-2012,&nbsp;<span class="time">01:30 PM</span></span>                                                                        </span>                                <span class="nodecontrols">                                                                                        <a name="post76038" href="../../threads/4945-Win-XP-Theme-Rewrite?p=76038#post76038" class="postcounter">#9</a><a id="postcount76038" name="9"></a>                                                                                                                                                        </span>                                </div>      


 <div class="userinfo" style="background: #e9e9e9 url()" >          


 <div class="contact">                <div class="avatarbox">                    <a class="postuseravatarlink" href="../../members/15260-zendocoro/" title="đã rời mạng">                                                    <img width="150px" height="150px" src="../../image.php?u=15260&amp;dateline=1344441866" alt="zendocoro's Avatar" />                                            </a></div>                <div class="nicknamebox">                <div class="username_container">                                            <!-- BEGIN TEMPLATE: memberaction_dropdown -->
<div class="popupmenu memberaction">
	<a class="username offline popupctrl" href="../../members/15260-zendocoro/" title="đã rời mạng"><strong>&nbsp;<font color="black"><b>zendocoro</font></b></strong></a>
	<ul class="popupbody popuphover memberaction_body">
		<li class="left">
			<a href="../../members/15260-zendocoro/" class="siteicon_profile">
				Xem lý lịch
			</a>
		</li>
		
		<li class="right">
			<a href="../../search.php?do=finduser&amp;userid=15260&amp;contenttype=vBForum_Post&amp;showposts=1" class="siteicon_forum" rel="nofollow">
				Xem bài viết diễn đàn
			</a>
		</li>
		
		
		<li class="left">
			<a href="../../private.php?do=newpm&amp;u=15260" class="siteicon_message" rel="nofollow">
				Tin nhắn riêng
			</a>
		</li>
		
		
		
		
		
		<li class="left">
			<a href="http://www.uncle-zen.co.cc" class="siteicon_homepage">
				Vào trang chủ
			</a>
		</li>
		
		
		

		

		
		
	</ul>
</div>
<!-- END TEMPLATE: memberaction_dropdown -->                        <!-- BEGIN TEMPLATE: postbit_onlinestatus -->
<img class="inlineimg onlinestatus" src="../../images/xenfovb/statusicon/user-offline.png" alt="đã rời mạng" border="0" />

<!-- END TEMPLATE: postbit_onlinestatus -->                                        <span class="usertitle">                        Member                    </span>                    



             

                                            <div class="imlinks">                               <!-- BEGIN TEMPLATE: im_yahoo -->
<a href="javascript://" onclick="imwindow('yahoo', '15260', 400, 200); return false;"><img src="../../images/xenfovb/misc/im_yahoo.gif" alt="Gửi tin nhắn qua Yahoo! đến zendocoro" /></a>
<!-- END TEMPLATE: im_yahoo -->                         </div>                                    </div></div>            </div>


            

            <div class="thongtin"> 
         
  <div class="post_field"><font size="1"color="#000000"><b>Tham Gia: &nbsp;Aug 2012</b></font></div>
 <div class="post_field"><font size="1" color="#000000"><b>Tên:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;zendocoro</b></font></div> 
 <div class="post_field"><font size="1" color="#000000"><b>Giới tính :&nbsp;&nbsp;Nam</b></font></div>    
 
  <div class="post_field"><font size="1" color="#000000"><b>HĐH :&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Win 7</b></font></div>


</div>
 
                    <div class="thongtin1">    
		                   
		<div class="post_field"><font size="1"color="#000000"><b>Bài Viết :&nbsp;232</b></font></div>  
<!-- BEGIN TEMPLATE: credits_display_postbit_row -->
   <div class="thongtin1"><div class="post_field"><font size="1"color="#000000"><b>

Xu: 
<a href="credits.php" rel="credits-1-15260;zendocoro">14,441</a>


</b></font></div>  
<!-- END TEMPLATE: credits_display_postbit_row --><!-- BEGIN TEMPLATE: post_thanks_postbit_info -->

    <div class="thongtin1">    
		                   
		<div class="post_field"><font size="1"color="#000000"><b> Thanks:15</b></font></div>  </div>
  

    
		                   
		<font size="1"color="#000000"><b>

        <dd style="white-space:nowrap; display:inline; float: left;"> <div class="thongtin1">  <div class="post_field"><font size="1" color="#000000"><b>Thanked 148 Times in 28 Posts</b></font></div></div></dd>
    </b></font>

<!-- END TEMPLATE: post_thanks_postbit_info -->

 </div>  
<div class="thongtin2">       .. </div>                          
             


</div> 

                                                                              
</div>    </div>    <div class="postbody">        
        <div class="postrow">                <h2 class="posttitle icon">            <img src="../../images/icons/icon1.png" alt="Mặc định" /> Re: [Win XP Theme] Rewrite        </h2>                                                <div class="content">            <div id="post_message_76038">                <blockquote class="postcontent restore">                    theme này cho cả 2 loại xp và win7 <br />
win thì mình post rùi ^^                </blockquote>            </div>            
        </div>                                                                    <blockquote class="signature restore">

<div style="overflow: auto; height: 150px;">
<div class="signaturecontainer"><div class="Xem"><script>
function showHide(what){
a=what.getElementsByTagName("div")[0];
if(a.style.display=='none'){
a.style.display='block';
}else{
a.style.display='none';
}}
</script>
<input type="button" onclick="showHide(this.parentNode)" value="Xem"><b><small></small></b><div class="alt2" style="margin-top:5px;border: 1px inset; padding: 2px 2px 2px 2px;display: none;"><marquee scrollamount="3"><img src="/pics/b5bf989dcf74b1e815e98dc35422d882_48493384.042.png" border="0" alt="" /><br />
<img src="/pics/990176bb771dcc0980c13086b94518b6_48492942.0042.png" border="0" alt="" /></marquee></div></div></div>
</div>


</blockquote>                                </div>    </div>    <div class="postfoot">        <div class="textcontrols floatcontainer">            <span class="postcontrols">                <img style="display:none" id="progress_76038" src="../../images/xenfovb/misc/progress.gif" alt="" />                                                                    <a id="qrwq_76038" class="newreply" href="../../newreply.php?do=newreply&amp;p=76038" rel="nofollow" title="Trả lời kèm trích dẫn"><img id="quoteimg_76038" src="/pics/fallback.jpg" alt="Trả lời kèm trích dẫn" />  Trả lời kèm trích dẫn</a>                                                             </span>            <span class="postlinking">                                                                                                                                                                                                                                                                                  </span>        </div><div class="forumhead_footer_shadow"></div>    </div>    <hr /></li><!-- BEGIN TEMPLATE: post_thanks_box -->
<li class="postbit postbitim" id="post_thanks_box_76038" style="display:none">
	
</li>
<!-- END TEMPLATE: post_thanks_box -->  
<!-- END TEMPLATE: postbit -->
<!-- END TEMPLATE: postbit_wrapper --><!-- BEGIN TEMPLATE: postbit_wrapper -->
<!-- BEGIN TEMPLATE: postbit -->
<li class="postbit postbitim postcontainer old" id="post_76073">    <div class="postdetails_noavatar">      
  <div class="posthead">                                                        <span class="postdate old">                                                                                        <span class="date">01-09-2012,&nbsp;<span class="time">04:52 PM</span></span>                                                                        </span>                                <span class="nodecontrols">                                                                                        <a name="post76073" href="../../threads/4945-Win-XP-Theme-Rewrite?p=76073#post76073" class="postcounter">#10</a><a id="postcount76073" name="10"></a>                                                                                                                                                        </span>                                </div>      


 <div class="userinfo" style="background: #e9e9e9 url()" >          


 <div class="contact">                <div class="avatarbox">                    <a class="postuseravatarlink" href="../../members/2245-sensirou/" title="đã rời mạng">                                                    <img width="150px" height="150px" src="../../image.php?u=2245&amp;dateline=1345646236" alt="sensirou's Avatar" />                                            </a></div>                <div class="nicknamebox">                <div class="username_container">                                            <!-- BEGIN TEMPLATE: memberaction_dropdown -->
<div class="popupmenu memberaction">
	<a class="username offline popupctrl" href="../../members/2245-sensirou/" title="đã rời mạng"><strong>&nbsp;<font color="black"><b>sensirou</font></b></strong></a>
	<ul class="popupbody popuphover memberaction_body">
		<li class="left">
			<a href="../../members/2245-sensirou/" class="siteicon_profile">
				Xem lý lịch
			</a>
		</li>
		
		<li class="right">
			<a href="../../search.php?do=finduser&amp;userid=2245&amp;contenttype=vBForum_Post&amp;showposts=1" class="siteicon_forum" rel="nofollow">
				Xem bài viết diễn đàn
			</a>
		</li>
		
		
		<li class="left">
			<a href="../../private.php?do=newpm&amp;u=2245" class="siteicon_message" rel="nofollow">
				Tin nhắn riêng
			</a>
		</li>
		
		
		
		
		
		
		

		

		
		
	</ul>
</div>
<!-- END TEMPLATE: memberaction_dropdown -->                        <!-- BEGIN TEMPLATE: postbit_onlinestatus -->
<img class="inlineimg onlinestatus" src="../../images/xenfovb/statusicon/user-offline.png" alt="đã rời mạng" border="0" />

<!-- END TEMPLATE: postbit_onlinestatus -->                                        <span class="usertitle">                        Member                    </span>                    



             

                                            <div class="imlinks">                                                        </div>                                    </div></div>            </div>


            

            <div class="thongtin"> 
         
  <div class="post_field"><font size="1"color="#000000"><b>Tham Gia: &nbsp;Mar 2011</b></font></div>
 <div class="post_field"><font size="1" color="#000000"><b>Tên:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;hieu</b></font></div> 
 <div class="post_field"><font size="1" color="#000000"><b>Giới tính :&nbsp;&nbsp;Nam</b></font></div>    
 
  <div class="post_field"><font size="1" color="#000000"><b>HĐH :&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Win 7</b></font></div>


</div>
 
                    <div class="thongtin1">    
		                   
		<div class="post_field"><font size="1"color="#000000"><b>Bài Viết :&nbsp;151</b></font></div>  
<!-- BEGIN TEMPLATE: credits_display_postbit_row -->
   <div class="thongtin1"><div class="post_field"><font size="1"color="#000000"><b>

Xu: 
<a href="credits.php" rel="credits-1-2245;sensirou">1,881</a>


</b></font></div>  
<!-- END TEMPLATE: credits_display_postbit_row --><!-- BEGIN TEMPLATE: post_thanks_postbit_info -->

    <div class="thongtin1">    
		                   
		<div class="post_field"><font size="1"color="#000000"><b> Thanks:31</b></font></div>  </div>
  

    
		                   
		<font size="1"color="#000000"><b>

        <dd style="white-space:nowrap; display:inline; float: left;"> <div class="thongtin1">  <div class="post_field"><font size="1" color="#000000"><b>Thanked 9 Times in 7 Posts</b></font></div></div></dd>
    </b></font>

<!-- END TEMPLATE: post_thanks_postbit_info -->

 </div>  
<div class="thongtin2">       .. </div>                          
             


</div> 

                                                                              
</div>    </div>    <div class="postbody">        
        <div class="postrow">                <h2 class="posttitle icon">            <img src="../../images/icons/icon1.png" alt="Mặc định" /> Re: [Win XP Theme] Rewrite        </h2>                                                                                    <div class="content">            <div id="post_message_76073">                <blockquote class="postcontent restore">                    thế xp có đẹp = win7 k                </blockquote>            </div>            
        </div>                                                                        </div>    </div>    <div class="postfoot">        <div class="textcontrols floatcontainer">            <span class="postcontrols">                <img style="display:none" id="progress_76073" src="../../images/xenfovb/misc/progress.gif" alt="" />                                                                    <a id="qrwq_76073" class="newreply" href="../../newreply.php?do=newreply&amp;p=76073" rel="nofollow" title="Trả lời kèm trích dẫn"><img id="quoteimg_76073" src="/pics/fallback.jpg" alt="Trả lời kèm trích dẫn" />  Trả lời kèm trích dẫn</a>                                                             </span>            <span class="postlinking">                                                                                                                                                                                                                                                                                  </span>        </div><div class="forumhead_footer_shadow"></div>    </div>    <hr /></li><!-- BEGIN TEMPLATE: post_thanks_box -->
<li class="postbit postbitim" id="post_thanks_box_76073" style="display:none">
	
</li>
<!-- END TEMPLATE: post_thanks_box -->  
<!-- END TEMPLATE: postbit -->
<!-- END TEMPLATE: postbit_wrapper -->
		</ol>
		<div class="separator"></div>
		<div class="postlistfoot">
			
		</div>

	

</div>

<div id="below_postlist" class="noinlinemod below_postlist">
	
	<div id="pagination_bottom" class="pagination_bottom">
	
		<!-- BEGIN TEMPLATE: pagenav -->
<form action="../../threads/4945-Win-XP-Theme-Rewrite/page2" method="get" class="pagination popupmenu nohovermenu">
<input type="hidden" name="t" value="4945" />
	
		<span><a href="javascript://" class="popupctrl">Trang 1 của 2</a></span>
		
		
		
		<!-- BEGIN TEMPLATE: pagenav_curpage -->
<span class="selected"><a href="javascript://" title="Kết quả 1 đến 10 của 14">1</a></span>
<!-- END TEMPLATE: pagenav_curpage --><!-- BEGIN TEMPLATE: pagenav_pagelink -->
<span><a href="../../threads/4945-Win-XP-Theme-Rewrite/page2" title="Hiển thị kết quả 11 đến 14 của 14">2</a></span>
<!-- END TEMPLATE: pagenav_pagelink -->
		
		
		<span class="prev_next"><a rel="next" href="../../threads/4945-Win-XP-Theme-Rewrite/page2" title="Trang kế - Kết quả của 11 từ 14 của 14"><img src="../../images/xenfovb/pagination/next-right.png" alt="Sau" /></a></span>
		
		
		<span class="first_last"><a href="../../threads/4945-Win-XP-Theme-Rewrite/page2" title="Trang cuối - Kết quả của 11 từ 14 của 14">Cuối<img src="../../images/xenfovb/pagination/last-right.png" alt="Cuối" /></a></span>
		
	
	<ul class="popupbody popuphover">
		<li class="formsubmit jumptopage"><label>Chuyển đến trang <input type="text" name="page" size="4" /></label> <input type="submit" class="button" value="Đến" /></li>
	</ul>
</form>
<!-- END TEMPLATE: pagenav -->
	
		
	</div>
</div>








	<!-- next / previous links -->
	<div class="navlinks">
		
			<strong>&laquo;</strong>
			<a href="../../threads/4945-Win-XP-Theme-Rewrite?goto=nextoldest" rel="nofollow">Chủ đề trước</a>
			|
			<a href="../../threads/4945-Win-XP-Theme-Rewrite?goto=nextnewest" rel="nofollow">Chủ đề kế tiếp</a>
			<strong>&raquo;</strong>
		
	</div>
	<!-- / next / previous links -->

<div id="thread_info" class="thread_info block">
	
	<!-- BEGIN TEMPLATE: showthread_similarthreads -->

	<div id="similar_threads">
		<h4 class="threadinfohead blockhead">Các Chủ đề tương tự</h4>
		<div id="similar_threads_list" class="thread_info_block blockbody formcontrols">
			<ol class="similar_threads">
			<!-- BEGIN TEMPLATE: showthread_similarthreadbit -->
<li class="floatcontainer">
  <div class="titleblock">
    <h6><a href="../../threads/3924-WIN7-THEME-Rewrite-v2/" title="http://img825.imageshack.us/img825/2637/1copytf.jpg 
 
http://img607.imageshack.us/img607/2495/2copyzm.jpg 
 
Một bộ khá là romance khác hẳn so với...">[WIN7 THEME] Rewrite v2</a></h6>
    <div class="starter_forum">
      Bởi HT trong diễn đàn Theme Manga - Anime
    </div>
  </div>
  <div class="dateblock">
    <span class="shade">Trả lời:</span> 12
      <div class="starter_forum">
        <span class="shade">Bài cuối:</span> 04-03-2013, <span class="time">06:49 PM</span>
      </div>
  </div>
</li>
<!-- END TEMPLATE: showthread_similarthreadbit --><!-- BEGIN TEMPLATE: showthread_similarthreadbit -->
<li class="floatcontainer">
  <div class="titleblock">
    <h6><a href="../../threads/4000-WIN7-THEME-Rewrite-v3/" title="http://i1045.photobucket.com/albums/b453/hoangtush/1copy-8.jpg 
 
http://i1045.photobucket.com/albums/b453/hoangtush/2copy-8.jpg 
...">[WIN7 THEME] Rewrite v3</a></h6>
    <div class="starter_forum">
      Bởi HT trong diễn đàn Theme Manga - Anime
    </div>
  </div>
  <div class="dateblock">
    <span class="shade">Trả lời:</span> 25
      <div class="starter_forum">
        <span class="shade">Bài cuối:</span> 04-03-2013, <span class="time">03:00 AM</span>
      </div>
  </div>
</li>
<!-- END TEMPLATE: showthread_similarthreadbit --><!-- BEGIN TEMPLATE: showthread_similarthreadbit -->
<li class="floatcontainer">
  <div class="titleblock">
    <h6><a href="../../threads/4663-Win-7-Theme-Rewrite-v5/" title="http://v1.iimmgg.com/images/is8gr/b76d65f2238973f0310627a617163b0f.jpg 
http://v1.iimmgg.com/images/is8gr/896cb2e8d7d8659c4a70d651c5a2d3f9.jpg 
Phải...">[Win 7 Theme] Rewrite v5</a></h6>
    <div class="starter_forum">
      Bởi Yuki trong diễn đàn Theme Manga - Anime
    </div>
  </div>
  <div class="dateblock">
    <span class="shade">Trả lời:</span> 16
      <div class="starter_forum">
        <span class="shade">Bài cuối:</span> 18-02-2013, <span class="time">09:52 PM</span>
      </div>
  </div>
</li>
<!-- END TEMPLATE: showthread_similarthreadbit --><!-- BEGIN TEMPLATE: showthread_similarthreadbit -->
<li class="floatcontainer">
  <div class="titleblock">
    <h6><a href="../../threads/3874-WIN7-THEME-Rewrite/" title="http://i1045.photobucket.com/albums/b453/hoangtush/1copy-5.jpg 
http://i1045.photobucket.com/albums/b453/hoangtush/2copy-5.jpg 
 
Pj tiếp tiếp theo...">[WIN7 THEME] Rewrite</a></h6>
    <div class="starter_forum">
      Bởi HT trong diễn đàn Theme Manga - Anime
    </div>
  </div>
  <div class="dateblock">
    <span class="shade">Trả lời:</span> 14
      <div class="starter_forum">
        <span class="shade">Bài cuối:</span> 19-01-2013, <span class="time">12:00 PM</span>
      </div>
  </div>
</li>
<!-- END TEMPLATE: showthread_similarthreadbit --><!-- BEGIN TEMPLATE: showthread_similarthreadbit -->
<li class="floatcontainer">
  <div class="titleblock">
    <h6><a href="../../threads/5627-WIN-7-THEME-Rewrite-by-andrea_37/" title="http://i1227.photobucket.com/albums/ee434/jacklong168/R.jpg 
 
http://i1227.photobucket.com/albums/ee434/jacklong168/R2.jpg...">[WIN 7 THEME] Rewrite by andrea_37</a></h6>
    <div class="starter_forum">
      Bởi Primo Giotto trong diễn đàn Theme Manga - Anime
    </div>
  </div>
  <div class="dateblock">
    <span class="shade">Trả lời:</span> 0
      <div class="starter_forum">
        <span class="shade">Bài cuối:</span> 19-10-2011, <span class="time">07:32 PM</span>
      </div>
  </div>
</li>
<!-- END TEMPLATE: showthread_similarthreadbit -->
			</ol>
		</div>
	</div>


<!-- END TEMPLATE: showthread_similarthreads -->
	
	
	
	
	<h4 class="threadinfohead blockhead">Tag của Chủ đề này</h4>
	<div id="thread_tags_list" class="thread_info_block blockbody formcontrols">
		<div class="inner_block">
			
			<div id='tag_list_cell'>
				<!-- BEGIN TEMPLATE: tagbit_wrapper -->

		
			<a href="../../tags.php?tag=rewrite">rewrite</a>, 
		
			<a href="../../tags.php?tag=theme">theme</a>, 
		
			<a href="../../tags.php?tag=theme+cho+win+xp">theme cho win xp</a>, 
		
			<a href="../../tags.php?tag=theme+win+xp">theme win xp</a>
		

<img src="../../images/xenfovb/misc/11x11progress.gif" id="tag_form_progress" class="inlineimg hidden" alt="" />
<!-- END TEMPLATE: tagbit_wrapper -->
			</div>
			<p>
				<a href="../../tags.php">Xem Nhóm Tag</a>
			</p>
		</div>
	</div>
	
	<div class="options_block_container">
		
	
	</div>
</div>












<!-- BEGIN TEMPLATE: footer -->

<div style="clear: left">
  <!-- BEGIN TEMPLATE: ad_footer_start -->

<!-- END TEMPLATE: ad_footer_start -->
  <!-- BEGIN TEMPLATE: ad_global_above_footer -->

<!-- END TEMPLATE: ad_global_above_footer -->
</div>

<div id="footer" class="floatcontainer footer">

	

	
	
	
	
	
	<script type="text/javascript">
	<!--
		// Main vBulletin Javascript Initialization
		vBulletin_init();
	//-->
	</script>
        <!-- BEGIN TEMPLATE: vfc_hide_hack_ajax -->
<script type="text/javascript" src="../../includes/vfchh/js/qr_hide.js"></script>
<script type="text/javascript" src="../../includes/vfchh/js/thanks_hide.js"></script>
<script type="text/javascript">
       
               var ptb = YAHOO.util.Dom.getElementsByClassName("post_thanks_button", "a", "posts");
               for (var i = 0; i < ptb.length; i++)
	       {
                  var hidepostid = ptb[i].id.substring(ptb[i].id.indexOf('post_thanks_button_')+19);
                  if (hidepostid > 0)
                  {
                      YAHOO.util.Event.addListener(ptb[i].id, "click", vFC_HT_JS, hidepostid);
                  }
               }
       

</script>
<!-- END TEMPLATE: vfc_hide_hack_ajax -->
</div>
</div> <!-- closing div for body_wrapper -->

<div class="below_body">



<div id="footer_morecopyright" class="shade footer_morecopyright">
	<!-- Do not remove cronimage or your scheduled tasks will cease to function -->
	
	<!-- Do not remove cronimage or your scheduled tasks will cease to function -->
	
	
</div>
<!-- BEGIN TEMPLATE: ad_footer_end -->

<!-- END TEMPLATE: ad_footer_end --> 

	<!-- BEGIN TEMPLATE: facebook_footer -->
<div id="fb-root"></div>
<script type="text/javascript" src="../../clientscript/vbulletin_facebook.js?v=420"></script>

<script type="text/javascript">
<!--
	loadFacebookAPI('en_US');
	function fbAsyncInit()
	{
		vBfb = new vB_Facebook({
			appid : "151662344993731",
			connected : 0,
			active : 0,
			autoreg : 0,
			feed_newthread : 1,
			feed_postreply : 1,
			feed_blogentry : 0,
			feed_blogcomment : 0,
			feed_newarticle : 1,
			feed_articlecomment : 1
		});
	}
// -->
</script>
<!-- END TEMPLATE: facebook_footer -->

</div>





<!-- Mod skin -->















<br><br>


<div class="footerLegal">
<div class="footerLegalContent">
	<div class="pageWidth">
		<div class="pageContent">



	<!-- Do not remove this copyright notice -->

<div id="copyright">
Astyles.Org New Style For You - Find Your Own Anime Style
</div>
<br>
<div id="copyright">
Coppyright © 2012-2013 - Xây Dựng Và Phát Triển Bởi Các Thành Viên Của Astyles
</div>
<br>
<div id="copyright">
Email Contact : Phuongstar008@gmail.com
</div>



<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-26773206-1']);
  _gaq.push(['_setDomainName', 'astyles.org']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>


<!-- Do not remove this copyright notice -->	
</div>





<div class="forumstatic">
			<ul id="legal">
			
			
	</ul>	
			




			<span class="helper"></span>
		</div>
	</div>	
</div>
</div>






<link href="http://vjs.zencdn.net/c/video-js.css" rel="stylesheet">
<script src="http://vjs.zencdn.net/c/video.js"></script>




<script src="http://api.html5media.info/1.1.5/html5media.min.js"></script>


<link rel="stylesheet" type="text/css" href="../../tab/tabber.css" />
<script type="text/javascript" src="../../tab/tabber.js"></script>




<style type='text/css'>#bttop{border:1px solid #4adcff;background:#24bde2;text-align:center;padding:5px;position:fixed;bottom:35px;right:10px;cursor:pointer;display:none;color:#fff;font-size:11px;font-weight:900;}#bttop:hover{border:1px solid #ffa789;background:#ff6734;}</style><div id='bttop'>BACK TO TOP</div><script src='http://ajax.googleapis.com/ajax/libs/jquery/1.3.2/jquery.min.js' type='text/javascript'></script><script type='text/javascript'>$(function(){$(window).scroll(function(){if($(this).scrollTop()!=0){$('#bttop').fadeIn();}else{$('#bttop').fadeOut();}});$('#bttop').click(function(){$('body,html').animate({scrollTop:0},800);});});</script>
<!-- END TEMPLATE: footer -->








<div id="AS_Share" style="left: 20px; top: 76px;">	
<div class="inner">		
<div class="container">	
	
  <div class="item">
  
   <p class="recentCount1"> <span class="countNumber">1009</span><br>
	
  Viev</p>
  </div>			
	
	
	
	
	<div id="AS_Share_fb" class="item">
	
	
<iframe src="//www.facebook.com/plugins/like.php?href=../../threads/4945-Win-XP-Theme-Rewrite/login.php?do=login&amp;send=false&amp;layout=box_count&amp;width=52&amp;show_faces=false&amp;font&amp;colorscheme=light&amp;action=like&amp;height=70&amp;appId=297675126991676" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:52px; height:70px;" allowTransparency="true"></iframe>

	
	
	</div>			
	<div class="item last">	
			



<script type="text/javascript" src="https://apis.google.com/js/plusone.js"></script>

<div class="g-plusone" data-size="tall" data-href="../../threads/4945-Win-XP-Theme-Rewrite/login.php?do=login"></div>


	</div>	
	


	<div id="AS_Share_fb" class="item">




<div class="share-FB" onclick="window.open('http://www.facebook.com/sharer/sharer.php?u=../../threads/4945-Win-XP-Theme-Rewrite/login.php?do=login','sharer','width=580,height=325');">

</div>	</div>


</div>	</div></div>
















</html>
<!-- END TEMPLATE: SHOWTHREAD -->
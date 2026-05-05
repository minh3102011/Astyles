function vFC_HR_JS()
{this.hidepost=new Array();var index=0;var postids=null;var posts=YAHOO.util.Dom.getElementsByClassName("postcontainer","li","posts");for(var i=0;i<posts.length;i++)
{if(posts[i].innerHTML.indexOf('vfc_hide_reply_post_')!=-1||posts[i].innerHTML.indexOf('vfc_hide_replythanks_post')!=-1)
{var postmatch=posts[i].id.indexOf('post_');if(postmatch!=null)
{this.hidepost[index]=posts[i].id.substr(postmatch+5);index++;}}}
if(this.hidepost.length>0)
{var postids=this.hidepost.join(",");this.timer=setTimeout(function(){vFC_HR_JS.prototype.qr_reply_unhide(postids);},1000);}}
vFC_HR_JS.prototype.qr_reply_unhide_handleSuccess=function(o)
{if(o.responseXML!==undefined)
{var posts=fetch_tags(o.responseXML,'post');for(var i=0;i<posts.length;i++)
{var postid=fetch_tags(posts[i],'postid')[0].firstChild.nodeValue;var message=fetch_tags(posts[i],'message')[0].firstChild.nodeValue;document.getElementById('post_message_'+ postid).innerHTML=message;}}}
vFC_HR_JS.prototype.handle_ajax_error=function(ajax)
{vBulletin_AJAX_Error_Handler(ajax);};vFC_HR_JS.prototype.qr_reply_unhide=function(poststr)
{if(typeof vb_disable_ajax!='undefined'&&vb_disable_ajax==2)
{return false;}
var sUrl='ajax.php';var postData='&do=vfc_unhide_post&postids='+ poststr;YAHOO.util.Connect.asyncRequest("POST",sUrl,{success:this.qr_reply_unhide_handleSuccess,failure:this.handle_ajax_error,timeout:vB_Default_Timeout,scope:this},SESSIONURL+"securitytoken="+ SECURITYTOKEN+ postData);return true;}
YAHOO.util.Event.addListener("qr_submit","click",vFC_HR_JS);
function vFC_HT_JS(e,postid)
{if(postid>0)
{if(YAHOO.util.Dom.inDocument('vfc_hide_thanks_post_'+ postid)||YAHOO.util.Dom.inDocument('vfc_hide_replythanks_post_'+ postid))
{this.timer=setTimeout(function(){vFC_HT_JS.prototype.thanks_unhide(postid);},1000);}}}
vFC_HT_JS.prototype.thanks_unhide_handleSuccess=function(o)
{if(o.responseXML!==undefined)
{var message=fetch_tags(o.responseXML,'html')[0].firstChild.nodeValue;fetch_object(o.argument.postmsgid).innerHTML=message;}}
vFC_HT_JS.prototype.thanks_unhide=function(postid)
{if(typeof vb_disable_ajax!='undefined'&&vb_disable_ajax==2)
{return false;}
var sUrl='ajax.php';var postData='&do=hthanks&postid='+ postid;YAHOO.util.Connect.asyncRequest("POST",sUrl,{success:this.thanks_unhide_handleSuccess,failure:vBulletin_AJAX_Error_Handler,timeout:vB_Default_Timeout,scope:this,argument:{"postmsgid":'post_message_'+ postid}},SESSIONURL+"securitytoken="+ SECURITYTOKEN+ postData);return false;}
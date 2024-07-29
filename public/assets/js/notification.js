(()=>{"use strict";var i=0;window.getNotificationMsgTime=function(i){var t=arguments.length>1&&void 0!==arguments[1]?arguments[1]:"h:mma";return moment.utc(i).local().format(t)},window.hideNoNotification=function(){$("#noNewNotification").hide()},window.showNoNotification=function(){$("#noNewNotification").show()},window.setTotalNotificationCount=function(i){$(".totalNotificationCount").text(i).attr("data-total_count",i).show(),i>0?($(".read-all-notification").show(),$(".totalNotificationCount").show(),hideNoNotification()):($(".read-all-notification").hide(),$(".totalNotificationCount").hide(),showNoNotification())},window.getMessageByItsTypeForNotificationList=function(i,t){var o=arguments.length>2&&void 0!==arguments[2]?arguments[2]:"";return 1===t?'<i class="fa fa-camera mx-0 text-left" aria-hidden="true"></i> Photo':2===t?'<i class="fa fa-file-pdf-o mx-0 text-left" aria-hidden="true"></i> '+o:3===t?'<i class="fa fa-file-word-o mx-0 text-left" aria-hidden="true"></i> '+o:4===t?'<i class="fa fa-file-audio-o mx-0 text-left" aria-hidden="true"></i> '+o:5===t?'<i class="fa fa-file-video-o mx-0 text-left" aria-hidden="true"></i> '+o:7===t?'<i class="fa fa-file-text-o mx-0 text-left" aria-hidden="true"></i> '+o:8===t?'<i class="fa fa-file-excel-o mx-0 text-left" aria-hidden="true"></i> '+o:i},window.renderNotifications=function(){var t=$.templates("#tmplNotification"),o={getNotificationMsgTime,getMessageByItsTypeForNotificationList},e=t.render(notifications,o);i=notifications.length,setTotalNotificationCount(i),$(".notification__popup").append(e)},renderNotifications(),window.Echo.private("user.".concat(loggedInUserId)).listen("UserEvent",(function(t){if(6!==t.type)return!1;if(-1!=window.location.href.indexOf(conversationsURL)&&getCurrentUserId()===t.owner_id)return!1;hideNoNotification();var o=$(".notification__popup").find("#owner-"+t.owner_id).length,e={getNotificationMsgTime,getMessageByItsTypeForNotificationList};if(o){var n=$.templates("#tmplOldNotification").render(t,e);$("#owner-"+t.owner_id).html(n)}else{i+=1,setTotalNotificationCount(i);var a=$.templates("#tmplNotification").render(t,e);$(".notification__popup").append(a)}notificationSound()})),$(document).on("click",".notification-item",(function(i){i.preventDefault();var t=$(this).data("notification_id"),o=$(this).attr("id");readNotification(t,"#"+o)})),window.readNotification=function(t,o){$.ajax({type:"get",url:route("notification.read-notification",t),success:function(t){i-=1,setTotalNotificationCount(i);var e=t.data.owner_id;($(o).remove(),displayToastr(Lang.get("messages.new_keys.success"),"success",t.message),-1!=window.location.href.indexOf(conversationsURL))?$(document).find("#user-"+e).trigger("click"):window.location.replace(conversationsURL+"?conversationId="+e)},error:function(i){displayToastr(Lang.get("messages.new_keys.error"),"error",i.responseJSON.message)}})},window.readNotificationWhenChatWindowOpen=function(t,o){$.ajax({type:"get",url:route("notification.read-notification",t),success:function(){$(o).remove();var t=$(".notification__popup").find(".notification-item").length;i=t,setTotalNotificationCount(i)},error:function(i){displayToastr("Error","error",i.responseJSON.message)}})},window.getCurrentUserId=function(){return $(".chat__person-box--active").data("id")},window.readNotificationWhenOpenChatWindow=function(t){$("#owner-"+t).remove();var o=$(".notification__popup").find(".notification-item").length;i=o,setTotalNotificationCount(i)},$(document).on("click",".read-all-notification",(function(t){if(t.preventDefault(),!i>0)return!1;readAllNotification()})),window.readAllNotification=function(t,o){$.ajax({type:"get",url:route("read-all-notification",t),success:function(t){var o=t.data.sender_ids;$.each(o,(function(i,t){$("#user-"+t).find(".chat__person-box-count").text(0).hide()})),i=0,setTotalNotificationCount(i),$(".notification__popup").find(".notification-item").remove(),displayToastr(Lang.get("messages.new_keys.success"),"success",t.message)},error:function(i){displayToastr(Lang.get("messages.new_keys.error"),"error",i.responseJSON.message)}})}})();
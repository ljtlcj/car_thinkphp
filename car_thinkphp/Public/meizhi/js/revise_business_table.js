//function Change_text_color()
//{
//	document.getElementById(this).style.background='lightblue';
//	$(document).ready(function(){
//		$(this).css("background-color","lightblue");
//	});
//	
//}

$(function() {
  $(":text").focus(function() {
    $(this).css('background', 'lightblue');
  }).blur(function() {
    $(this).css('background', 'white');
  })
});




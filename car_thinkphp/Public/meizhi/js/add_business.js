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



function calculate()
{
	//var price1=document.getElementById("price1").value;
	//alert(price1);
	//var number1=document.getElementById("number1").value;
	document.getElementById("total_price1").value="12";
});
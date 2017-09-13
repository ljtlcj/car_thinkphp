$(document).ready(function(){
	$(".business_management").click(function(){
		$(".search_business").toggle(100);
	});
});
$(document).ready(function(){
	$(".business_management").click(function(){
		$(".add_client").toggle(100);
	});
});
$(document).ready(function(){
	$(".business_management").click(function(){
		$(".business_management_find").toggle(100);
	});
});
$(document).ready(function(){
	$(".business_management").click(function(){
		$(".business_management_revise").toggle(100);
	});
});
$(document).ready(function(){
	$(".business_management").click(function(){
		$(".business_management_delete").toggle(100);
	});
});
function go_search_business(){
	window.location.href='search_business_html.php';
}
function go_add_client(){
	window.location.href='add_client_html.php';
}
function go_business_management_find(){
	window.location.href='business_management_find_html.php';
}
function go_business_management_revise(){
	window.location.href='business_management_revise_html.php';
}
function go_business_management_delete(){
	window.location.href='business_management_delete_html.php';
}

/*上面是业务管理 下面是SIM卡库*/
$(document).ready(function(){
	$(".SIM_database").click(function(){
		$(".SIM_find").toggle(100);
	});
});
$(document).ready(function(){
	$(".SIM_database").click(function(){
		$(".SIM_find_unspent").toggle(100);
	});
});
$(document).ready(function(){
	$(".SIM_database").click(function(){
		$(".SIM_leading_in").toggle(100);
	});
});
$(document).ready(function(){
	$(".SIM_database").click(function(){
		$(".SIM_delete").toggle(100);
	});
});
$(document).ready(function(){
	$(".SIM_database").click(function(){
		$(".SIM_revise").toggle(100);
	});
});
function go_SIM_revise(){
	window.location.href='SIM_revise_html.php';
}
function go_SIM_find_used(){
	window.location.href='SIM_find_used_html.php';
}
function go_SIM_find_unspent(){
	window.location.href='SIM_find_unspent_html.php';
}
function go_SIM_leading_in(){
	window.location.href='SIM_leading_in_html.php';
}
function go_SIM_delete(){
	window.location.href='SIM_delete_html.php';
}
/*上面是SIM卡库 下面是设备库*/
$(document).ready(function(){
	$(".equipment_database").click(function(){
		$(".equipment_find_unspent").toggle(100);
	});
});
$(document).ready(function(){
	$(".equipment_database").click(function(){
		$(".equipment_find_used").toggle(100);
	});
});
$(document).ready(function(){
	$(".equipment_database").click(function(){
		$(".equipment_add").toggle(100);
	});
});
$(document).ready(function(){
	$(".equipment_database").click(function(){
		$(".equipment_revise").toggle(100);
	});
});
$(document).ready(function(){
	$(".equipment_database").click(function(){
		$(".equipment_delete").toggle(100);
	});
});
function go_equipment_delete(){
	window.location.href='equipment_delete_html.php';
}
function go_equipment_revise(){
	window.location.href='equipment_revise_html.php';
}
function go_add_equipment(){
	window.location.href='add_equipment_html.php';
}
function go_equipment_find_unspent(){
	window.location.href='equipment_find_unspent_html.php';
}
function go_equipment_find_used(){
	window.location.href='equipment_find_used_html.php';
}
function go_add_equipments(){
	window.location.href='add_equipment3_html.php';
}
/*上面是设备库 下面是员工管理*/
$(document).ready(function(){
	$(".staff_manages").click(function(){
		$(".find_staff").toggle(100);
	});
});
$(document).ready(function(){
	$(".staff_manages").click(function(){
		$(".delete_staff").toggle(100);
	});
});
$(document).ready(function(){
	$(".staff_manages").click(function(){
		$(".add_salesman").toggle(100);
	});
});
$(document).ready(function(){
	$(".staff_manages").click(function(){
		$(".add_treasure").toggle(100);
	});
});
function go_find_staff(){
	window.location.href='find_staff_html.php';
}
function go_delete_staff(){
	window.location.href='delete_staff_html.php';
}
function go_add_salesman(){
	window.location.href='add_salesman_html.php';
}
function go_add_treasure(){
	window.location.href='add_treasure_html.php';
}
//-------------------------------下面是 页面加载完 模拟点击事件
function open(){
	$(document).ready(function(){
		$(".business_management").trigger("click");
	});
}
//---------------下拉菜单条-----------------------------//
$(document).ready(function(){
	$(".equipment_add").click(function(){
		$(".equipment_add1").toggle(100);
	});
});
$(document).ready(function(){
	$(".equipment_add").click(function(){
		$(".equipment_add2").toggle(100);
	});
});

$(document).ready(function(){
	$(".staff_manages").click(function(){
		$(".equipment_add1").slideUp(100);
		$(".equipment_add2").slideUp(100);
	})
	$(".equipment_database").click(function(){
		$(".equipment_add1").slideUp(100);
		$(".equipment_add2").slideUp(100);
	})
	$(".SIM_database").click(function(){
		$(".equipment_add1").slideUp(100);
		$(".equipment_add2").slideUp(100);
	})
	$(".business_management").click(function(){
		$(".equipment_add1").slideUp(100);
		$(".equipment_add2").slideUp(100);
	})
})

//-------------------------日历--------//
$(document).ready(function(){
	
	var today=new Date();
			var h=today.getFullYear();
			var m=today.getMonth()+1;
		    var d=today.getDate();
		    if(d<=9){
		    	d="0"+d;
		    }
		    if(m<9)
		    {
		    	m="0"+m;
		    }
		    document.getElementById("time").value = h+"-"+m+"-"+d;
});

$(document).ready(function(){
	
	var today=new Date();
			var h=today.getFullYear();
			var m=today.getMonth()+1;
		    var d=today.getDate();
		    if(d<=9){
		    	d="0"+d;
		    }
		    if(m<9)
		    {
		    	m="0"+m;
		    }
		    document.getElementById("time2").value = h+"-"+m+"-"+d;
});


//-----------------------------------------------------//
function calendar(obj){
    if (!document.getElementById('_calendar')){
        var el = document.createElement('div');
        el.id = '_calendar';
        el.className = 'calendar';
      document.body.appendChild(el);   
    }else{
        var el = document.getElementById('_calendar');
        el.style.display = 'block';
    }
}
function createYear(){
    var el = document.createElement('select');
    el.size = 1;
    var o = document.createElement('option');
    var nt = new Date();
    for (i = nt.getFullYear() + 5 ; i > 1899 ; i -- )// 日历中的年份从当前年份之后的五年开始，一直到 1900 年结束
    { 
        el.appendChild(o.cloneNode(true));
        el.options[nt.getFullYear() + 5 - i].value = i;
        el.options[nt.getFullYear() + 5 - i].text = i + ' 年';
    }
    return el;
}
function createMonth(){
    var mn = ['一月','二月','三月','四月','五月','六月','七月','八月','九月','十月','十一月','十二月'];
    var el = document.createElement('select');
    var o = document.createElement('option');
    for (i = 0 ; i < mn.length ; i ++ ){
        el.appendChild(o.cloneNode(true));
        el.options[i].value = i + 1; // 因为 js 中 0 表示的是一月，但是我们的习惯不是这样的，所以先把这个值进行加 1，来符合我们的习惯
        el.options[i].text = mn[i];
    }
    return el;
}
function calendar(obj){
    var nt = new Date(); // 取得当前机器时间
    var d = obj.value?obj.value:(nt.getFullYear() + '-' + (nt.getMonth() + 1) + '-' + nt.getDate()); // 如果触发日历的控件包含日期信息，则取出这个日期，否则，根据机器时间生成一个 yyyy-m-d 格式的日期
    var s = d.split('-'); // 将 yyyy-m-d 格式的日期切割成数组
    if (!document.getElementById('_calendar')){  // 判断页面是否已经存在 ID 为 _calendar 元素，如果不存在则
        var el = document.createElement('div'); // 使用 Dom 方法建立一个 div 层
        el.appendChild(el.cloneNode(true)); // 在这个层中复制一个没有内容的层
        el.id = '_calendar'; // 定义层的 ID
        el.className = 'calendar'; // 定义层引用的样式
        el.childNodes[0].appendChild(createYear()); // 在刚才复制的层中添加年份控件
        el.childNodes[0].appendChild(createMonth()); // 在刚才复制的层中添加月份控件
        el.childNodes[0].style.textAlign = 'center'; // 定义刚才复制的层为居中显示方式
        var v = document.createElement('input'); // 定义一个中转控件，用来存放原始日期数据
        el.appendChild(v); // 将控件添加到日历层中
        v.style.display = 'none'; // 将中转控件显示方式定义为隐藏
        document.body.appendChild(el); // 将日历控件添加到页面内
    }else{ // 如果存在则
        var el = document.getElementById('_calendar');
        el.style.display = 'block'; // 将日历控件显示方式定义为显示
    }
    el.childNodes[0].childNodes[0].onchange = el.childNodes[0].childNodes[1].onchange = function(){getDayList(obj);} // 定义年份、月份控件的触发事件 onchange，当控件选择的内容变动时引用 getDayList 函数
                                                                                                   // 这里使用闭包将我们点击的对象作为参数传递给 getDayList 函数
    el.childNodes[1].value = d; // 将原始日期存放到中转控件内
    el.style.left = obj.offsetLeft + 'px'; // 定义日历左边的位置为点击对象的位置
    el.style.top = (obj.offsetTop + obj.offsetHeight - 3) + 'px';  // 定义日历顶端的位置为点击对象底边向上3像素的位置
    el.childNodes[0].childNodes[0].selectedIndex = nt.getFullYear() + 5 - s[0]; // 初始化年份控件的当前选项
    el.childNodes[0].childNodes[1].selectedIndex = s[1] - 1; // 初始化月份控件的当前选项
    getDayList(obj); // 生成日期信息
}
function getDayList(obj){
    if (!document.getElementById('_calendar')) return; // 检测页面内是否存在 ID 为 _calendar 的元素
    var el = document.getElementById('_calendar');
    if (el.childNodes.length > 2) el.removeChild(el.childNodes[el.childNodes.length - 1]); // 如果元素内的子节点超过两个，则删除第三个节点
    var n = el.childNodes[1].value; // 取得原始日期信息
    var y = el.childNodes[0].childNodes[0]; // 取得年份控件
    var m = el.childNodes[0].childNodes[1]; // 取得月份控件
    createDay(el,n.split('-'),[y.options[y.selectedIndex].value,m.options[m.selectedIndex].value],obj); // 将日历控件、原始日期、控件对应日期、点击对象传递给日期生成函数
}
function createDay(obj,s,n,result){
    var el = document.createElement('div');
    var d = el.cloneNode(true);
    var w = ['日','一','二','三','四','五','六'];
    d.className = 'week';
    for (var i = 0 ; i < 7 ; i ++ ){ // 生成星期排列
        var e = d.cloneNode(true);
        e.innerHTML = w[i];
        el.appendChild(e);
    }
    var ms = new Date(n[0],n[1] - 1,1); // 取得需要显示的月份的第一天日期
    var me = new Date(n[0],n[1],0); // 取得需要显示的月份的最后一天日期
    for (var i = 0 ; i < ms.getDay() ; i ++ ){ // 根据第一天的星期数补空
        var e = d.cloneNode(true);
        el.appendChild(e);
    }
    d.className = 'day';
    for (var i = 0 ; i < me.getDate() ; i ++ ){ // 根据最后一天的日期，生成相应数量的日期元素
        var e = d.cloneNode(true);
        e.innerHTML = i + 1;
        if ((s[2] == i + 1)&&(s[0]==n[0])&&(s[1]==n[1])) e.style.background = '#CCDDFF';
        el.appendChild(e);
        e.onmouseover = function(){ // 定义日期元素鼠标经过的动作
            this.className = 'act';
        }
        e.onmouseout = function(){ // 定义日期元素鼠标离开的动作
            this.className = 'day';
        }
        e.onclick = function(){ // 定义日期元素点击的动作
            var y = obj.childNodes[0].childNodes[0];
            var m = obj.childNodes[0].childNodes[1];
            result.value = y.options[y.selectedIndex].value + '-' + m.options[m.selectedIndex].value + '-' + this.innerHTML; // 生成选中的日期
            obj.style.display = 'none'; // 隐藏日历控件
        }
        e.ondblclick=function(){
        	 window.onbeforeunload();
        }
    }
    el.className = 'dayArea';
    obj.appendChild(el);
}

//------------------------------------------------//

/*---------------修改密码--------------------*/
function go_revise_password(){
	window.location.href='revise_password_html.php';
}			 
//----------------------计算总价钱------------------------//
$(document).ready(function(){
	  
	$(".input3").click(function(){
	   var a;
	   var b;
	   var c;
	   a=$(".input2").val();
	   b=$(".input1").val();
	   
	   var e = parseInt(a);
	   var f = parseInt(b);
	   c=e*f;
	   if(e>=0&&f>=0)
       {
       	 $(".input2").val(e+" 个月    ");
	     $(".input1").val(f+" 元/月     ");
	     $(".input3").val(c+" 元     ");
       }
       else{
         e=0;
	 	 f=0;
	 	 c=0;
	 	 $(".input2").val(e+" 个月    ");
	     $(".input1").val(f+" 元/月     ");
	     $(".input3").val(c+" 元     ");
       }
	})
})

//function mult()
//{
//	   var a;
//	   var b;
//	   var c;
//	   a=$(".input2").val();
//	   b=$(".input1").val();
//	   
//	   var e = parseInt(a);
//	   var f = parseInt(b);
//	   c=e*f;
//	if(!(isNaN(document.getElementById("input1").value)||isNaN(document.getElementById("input2").value)))
//	{
//		 $(".input2").val(e+" 个月    ");
//	     $(".input1").val(f+" 元/月     ");
//	     $(".input3").val(c+" 元     ");
//		document.getElementById("input3").value=
//		(document.getElementById("input1").value*document.getElementById("input2").value+"元")
//	}
//	else
//	{
//		document.getElementById("input3").value="错误输入"
//	}
//}
//-----------------------------------//
function slideup1(){
		$(document).ready(function(){
				$(".SIM_find ").slideUp("fast");
					$(".SIM_leading_in").slideUp("fast");
					$(".SIM_find_unspent").slideUp("fast");
					$(".SIM_delete").slideUp("fast");
					$(".SIM_revise").slideUp("fast");
					
					$(".equipment_find_unspent").slideUp("fast");
					$(".equipment_add").slideUp("fast");
					$(".equipment_find_used").slideUp("fast");
					$(".equipment_revise").slideUp("fast");
					$(".equipment_delete").slideUp("fast");
					
					$(".find_staff").slideUp("fast");
					$(".delete_staff").slideUp("fast");
					$(".add_salesman").slideUp("fast");
					
		});
	}
function slideup2(){
	   $(document).ready(function(){
				    $(".search_business ").slideUp("fast");
					$(".add_client").slideUp("fast");
					$(".business_management_delete").slideUp("fast");
					$(".business_management_find").slideUp("fast");
					$(".business_management_revise").slideUp("fast");
					
					$(".equipment_find_unspent").slideUp("fast");
					$(".equipment_add").slideUp("fast");
					$(".equipment_find_used").slideUp("fast");
					$(".equipment_revise").slideUp("fast");
					$(".equipment_delete").slideUp("fast");
					
					$(".find_staff").slideUp("fast");
					$(".delete_staff").slideUp("fast");
					$(".add_salesman").slideUp("fast");
					
		});
}
function slideup3(){
	   $(document).ready(function(){
				    $(".search_business ").slideUp("fast");
					$(".add_client").slideUp("fast");
					$(".business_management_delete").slideUp("fast");
					$(".business_management_find").slideUp("fast");
					$(".business_management_revise").slideUp("fast");
					
					$(".SIM_find ").slideUp("fast");
					$(".SIM_leading_in").slideUp("fast");
					$(".SIM_find_unspent").slideUp("fast");
					$(".SIM_delete").slideUp("fast");
					$(".SIM_revise").slideUp("fast");
					
					$(".find_staff").slideUp("fast");
					$(".delete_staff").slideUp("fast");
					$(".add_salesman").slideUp("fast");
					
		});
}
function slideup1(){
		$(document).ready(function(){
				$(".SIM_find ").slideUp("fast");
					$(".SIM_leading_in").slideUp("fast");
					$(".SIM_find_unspent").slideUp("fast");
					$(".SIM_delete").slideUp("fast");
					$(".SIM_revise").slideUp("fast");
					
					$(".equipment_find_unspent").slideUp("fast");
					$(".equipment_add").slideUp("fast");
					$(".equipment_find_used").slideUp("fast");
					$(".equipment_revise").slideUp("fast");
					$(".equipment_delete").slideUp("fast");
					
					$(".find_staff").slideUp("fast");
					$(".delete_staff").slideUp("fast");
					$(".add_salesman").slideUp("fast");
					
		});
	}
function slideup2(){
	   $(document).ready(function(){
				    $(".search_business ").slideUp("fast");
					$(".add_client").slideUp("fast");
					$(".business_management_delete").slideUp("fast");
					$(".business_management_find").slideUp("fast");
					$(".business_management_revise").slideUp("fast");
					
					$(".equipment_find_unspent").slideUp("fast");
					$(".equipment_add").slideUp("fast");
					$(".equipment_find_used").slideUp("fast");
					$(".equipment_revise").slideUp("fast");
					$(".equipment_delete").slideUp("fast");
					
					$(".find_staff").slideUp("fast");
					$(".delete_staff").slideUp("fast");
					$(".add_salesman").slideUp("fast");
					
		});
}
function slideup3(){
	   $(document).ready(function(){
				    $(".search_business ").slideUp("fast");
					$(".add_client").slideUp("fast");
					$(".business_management_delete").slideUp("fast");
					$(".business_management_find").slideUp("fast");
					$(".business_management_revise").slideUp("fast");
					
					$(".SIM_find ").slideUp("fast");
					$(".SIM_leading_in").slideUp("fast");
					$(".SIM_find_unspent").slideUp("fast");
					$(".SIM_delete").slideUp("fast");
					$(".SIM_revise").slideUp("fast");
					
					$(".find_staff").slideUp("fast");
					$(".delete_staff").slideUp("fast");
					$(".add_salesman").slideUp("fast");
					
		});
}
function slideup4(){
	   $(document).ready(function(){
				    $(".search_business ").slideUp("fast");
					$(".add_client").slideUp("fast");
					$(".business_management_delete").slideUp("fast");
					$(".business_management_find").slideUp("fast");
					$(".business_management_revise").slideUp("fast");
					
					$(".SIM_find ").slideUp("fast");
					$(".SIM_leading_in").slideUp("fast");
					$(".SIM_find_unspent").slideUp("fast");
					$(".SIM_delete").slideUp("fast");
					$(".SIM_revise").slideUp("fast");
					
					$(".equipment_find_unspent").slideUp("fast");
					$(".equipment_add").slideUp("fast");
					$(".equipment_find_used").slideUp("fast");
					$(".equipment_revise").slideUp("fast");
					$(".equipment_delete").slideUp("fast");
					
		});
}


 function delcfm() {
        if (!confirm("确认提交？")) {
            window.event.returnValue = false;
        }
   }
 

            $(function(){
                $("#select").click(function(){
                  var txt=$("#select").val();
               $.post("add_client_html.php",{zhi:txt});
  });
});

					$(function(){         
					$("#submit").change(function(){ 
					var ar=$("#submit").val();   
					 $.post("php/temp_jie.php", {cla:ar},function(data){											  	
					$("#span").val($.trim(data));
					          }
					                            );
					                                                 });               
					            });
			
function addcheck(){
	if(myform.car_number.value==""){
		alert("车牌号码不为空");
		myform.car_number.focus();
		return false;
	}
	if(myform.contact.value==""){
		alert("填写联系人名称");
		myform.contact.focus();
		return false;
	}
	if(myform.SIM.value==""){
		alert("请填写SIM卡号");
		myform.SIM.focus();
		return false;
	}
	if(myform.equipment_number.value==""){
		alert("设备号不为空");
		myform.equipment_number.focus();
		return false;
	}
	if(myform.install_people.value==""){
		alert("安装人不为空");
		myform.install_people.focus();
		return false;
	}
	if(myform.input3.value==""){
		alert("总费用不为空");
		myform.input3.focus();
		return false;
	}
	if(myform.input2.value==""){
		alert("租用月数不为空");
		myform.input2.focus();
		return false;
	}
	if(myform.input1.value==""){
		alert("价格费用不为空");
		myform.input1.focus();
		return false;
	}
	if(myform.organization.value==""){
		alert("单位不为空");
		myform.organization.focus();
		return false;
	}
	if(myform.phone_number.value==""){
		alert("请填写联系方式");
		myform.phone_number.focus();
		return false;
	}
	if(myform.equipment_type.value==""){
		alert("请选择设备类型");
		myform.equipment_type.focus();
		return false;
	}
	if(myform.install_date.value==""){
		alert("请选择安装日期");
		myform.install_date.focus();
		return false;
	}
	if(myform.service_charge2.value==""){
		alert("请填写设备费");
		myform.service_charge2.focus();
		return false;
	}
	if(myform.charge_people.value==""){
		alert("收费人不为空");
		myform.charge_people.focus();
		return false;
	}
	if(myform.car_number.value.length!=6){
		alert("车牌号码长度为六");
		myform.car_number.focus();
		return false;
	}
	if(myform.phone_number.value.length!=11){
		alert("联系人号码错误");
		myform.phone_number.focus();
		return false;
	}
}
			
$(document).ready(function(){
	 $(".input3").click(function(){
	   var a;
	   var b;
	   var c;
	   a=$(".input2").val();
	   b=$(".input1").val();
	   
	   var e = parseInt(a);
	   var f = parseInt(b);
	   c=e*f;
	   if(e>=0&&f>=0)
       {
       	 $(".input2").val(e+" 个月    ");
	     $(".input1").val(f+" 元/月     ");
	     $(".input3").val(c+" 元     ");
       }
       else{
         e=0;
	 	 f=0;
	 	 c=0;
	 	 $(".input2").val(e+" 个月    ");
	     $(".input1").val(f+" 元/月     ");
	     $(".input3").val(c+" 元     ");
       }
	})
})
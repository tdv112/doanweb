function refrClock()
				{
				var d=new Date();
				var s=d.getSeconds();
				var m=d.getMinutes();
				var h=d.getHours();
				var day=d.getDay();
				var date=d.getDate();
				var month=d.getMonth();
				var year=d.getFullYear();
				var days=new Array("Chủ nhật,","Thứ 2,","Thứ 3,","Thứ 4,","Thứ 5,","Thứ 6,","Thứ 7,");
				var months=new Array("tháng 1,","tháng 2,","tháng 3,","tháng 4,","tháng 5,","tháng 6,","tháng 7,","tháng 8,","tháng 9,","tháng 10,","tháng 11,","tháng 12,");
				var am_pm;
				if (s<10) {s="0" + s}
				if (m<10) {m="0" + m}
				if (h>12) {h-=12;am_pm = "Chiều"}
				else {am_pm="Sáng"}
				if (h<10) {h="0" + h}
				document.getElementById("clock").innerHTML=days[day] + " ngày " + date + " " + months[month] + " " + year + ", " + h + ":" + m + ":" + s + " " + am_pm;
				setTimeout("refrClock()",1000);
				}
				refrClock();
				
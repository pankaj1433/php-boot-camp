<!DOCTYPE html>
<html>
<head>
	<title>My App</title>
	<script type="text/javascript" src="https://code.jquery.com/jquery-3.1.1.js"></script>
	<style type="text/css">
		.input_notedit{
			border:none;
			background: transparent;
			color: black;
		}
		.input_edit{
			border: 1;
		}
	</style>
</head>
<body>
<input type="button" name="getdata" value="getdata" id="get_data">
<table border="1" cellpadding="5" cellspacing="0">	
</table>
<p></p>
</body>
<script type="text/javascript">
$(document).ready(function(){

$.fn.init_table=function(){
	$('table').html('<thead><th>Id</th><th>Name</th><th>Salary</th><th>Mobile</th><th>Email</th><th colspan="2">Action</th></thead>');
}
//to get data and display in table	
$.fn.getmydata=function(){
		$.ajax({
			url:'get_data.php',
			data:"",
			dataType: 'json',
			success:function(data){
				for(key in data){
					var delete_button=$('<input>');
					delete_button.attr({'value':'Delete','type':'button','class':'del'});
					delete_button.attr("name",data[key].id);
					delete_button.attr("id",data[key].id+"d");
					var update_button=$('<input>');
					update_button.attr({'value':'Update','type':'button','class':'up'});
					update_button.attr("name",data[key].id);
					update_button.attr("id",data[key].id+"u");
					update_button.css("width","60px")

					$('table').append("<tr id='"+data[key].id+"'><td>"+data[key].id+"</td><td><input disabled='true' class='input_notedit' type='text' value='"+data[key].name+"'></td><td><input disabled='true' class='input_notedit' type='text' value='"+data[key].salary+"'></td><td><input disabled='true' class='input_notedit' type='text' value='"+data[key].phone+"'></td><td><input class='input_notedit' disabled='true' type='text' value='"+data[key].email+"'></td><td id='"+data[key].id+"a'></td><td id='"+data[key].id+"b'></td></tr>");
					$('#'+data[key].id+'a').append(delete_button);
					$('#'+data[key].id+'b').append(update_button);
				}},
			error:function(){
				}
			
		});//end of ajax
	}

	$('#get_data').on("click",function(){
		$.fn.init_table();
		$.fn.getmydata();
		$('#get_data').css("display","none");
	});

	$('body').on('click','.del',function(){
			var dataString = 'id='+this.name;
			var myid=this.name;
			$.ajax({
				url:'delete_api.php',
				data:dataString,
				type:'POST',
				success: function(data) {
					/*$.fn.init_table();
					$.fn.getmydata();*/
					$('tr[id='+myid+']')[0].remove();
					
				}
			});
	});

	$('body').on('click','.up',function(){
	var selector=this.id;
			var name1=$($("#"+selector).parent().siblings(':eq(1)').children()[0]);
			var salary1=$($("#"+selector).parent().siblings(':eq(2)').children()[0]);
			var mobile1=$($("#"+selector).parent().siblings(':eq(3)').children()[0]);
			var email1=$($("#"+selector).parent().siblings(':eq(4)').children()[0]);
		if(this.value=="Update"){
			this.value="Edit";
			

			//console.log(name);console.log(salary);console.log(mobile);console.log(email);
			name1.attr({'class':'input_edit','disabled':false});
			salary1.attr({"class":"input_edit","disabled":false});
			mobile1.attr({"class":"input_edit","disabled":false});
			email1.attr({"class":"input_edit","disabled":false});
		}
		else if(this.value=="Edit"){
			var id_for_update=$("#"+selector).parent().siblings(':first').html();
			//console.log(id_for_update);
			var name=$("#"+selector).parent().siblings(':eq(1)').children()[0].value;
			var salary=$("#"+selector).parent().siblings(':eq(2)').children()[0].value;
			var mobile=$("#"+selector).parent().siblings(':eq(3)').children()[0].value;
			var email=$("#"+selector).parent().siblings(':eq(4)').children()[0].value;
			//console.log(name);console.log(salary);console.log(mobile);console.log(email);
			var dataString='id='+id_for_update+'&name='+name+'&salary='+salary+'&phone='+mobile+'&email='+email;
			console.log(dataString);
			$.ajax({
				url:'update_api.php',
				data: dataString,
				type:'POST',
				success:function(data){
					alert(data);
					name1.attr({'class':'input_notedit','disabled':true});
					salary1.attr({"class":"input_notedit","disabled":true});
					mobile1.attr({"class":"input_notedit","disabled":true});
					email1.attr({"class":"input_notedit","disabled":true});
					/*$.fn.init_table();
					$.fn.getmydata();*/

				}

			})
		}
	});

});

	
</script>
</html>
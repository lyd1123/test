<div align='center'id='list'>
<input type="text" name="l_name" id='l_name'>
<input type="button" value='留言' id='liuyan'><br>

    @foreach ($arr as $user)
        <a id='aa'><span class='update' value="{{$user['l_id']}}" >{{ $user['l_name'] }} </span></a><a href="JavaScript:void(0)" onclick="del({{$user['l_id']}})">删除</a><br> 
    @endforeach

{!! $arr->render() !!}
</div>
<script src='jquery-1.8.2.min.js'></script>
<script type="text/javascript">
	$('#liuyan').click(function(){
		l_name=$('#l_name').attr('value');
		$.get('liuyan_add',{l_name:l_name},function(data){
			$('#list').html(data);
		})
	});

		function del(id){
			$.get('liuyan_del',{id:id},function(data){
				$('#list').html(data);
			})
		}

		/*function update(id){
			$('#update').html('<input type="text" name="l_name" id="name">');
			$('#name').blur(function(){
				name=$('#name').attr('value');
				$('#update').html(name);
				$.get('update',{id:id,name:name});
			});
		}*/

		$(document).on('click',".update",function(){
			 id= $(this).attr('value');

			$(this).parent().html('<input type="text" name="l_name" class="name" >');
			
		});
		$(document).on('blur',".name",function(){
				name=$(this).attr('value');
				$(this).parent().html("<span class='update'>"+name+"</span>");
				$.get('update',{id:id,name:name});
		});
		
</script>
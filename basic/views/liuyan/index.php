<?php
use yii\widgets\LinkPager;
?>
<div align='center'id='list'>
<input type="text" name="l_name" id='l_name'>
<input type="button" value='留言' id='liuyan'><br>

    <?php 
		foreach($list  as $k=>$v){
	?>
        <a id='aa'><span class='update' value="<?php echo $v['l_id']?>" ><?php echo $v['l_name']?> </span></a><button onclick="del(<?php echo $v['l_id']?>)">删除</button><button onclick="update(<?php echo $v['l_id']?>)"> 修改</button><br> 
	<?php }?>
<?php
echo LinkPager::widget([
    'pagination' => $pages,
]);
?>
</div>


<script src='jquery-1.8.2.min.js'></script>
<script type="text/javascript">
	$('#liuyan').click(function(){
		l_name=$('#l_name').val();
		$.get('index.php?r=liuyan/add',{l_name:l_name},function(data){
			$('#list').html(data);
		})
	});

		function del(id){
			$.get('index.php?r=liuyan/del',{id:id},function(data){
				$('#list').html(data);
			})
		}

		/*function update(id){
			$('#update').html('<input type="text" name="l_name" id="name">');
			$('#name').blur(function(){
				name=$('#name').val();
				$('#update').html(name);
				$.get('index.php?r=liuyan/update',{id:id,name:name});
			});
		}*/

		$(document).on('click',".update",function(){
			 id= $(this).attr('value');

			$(this).parent().html('<input type="text" name="l_name" class="name" >');
			
		});
		$(document).on('blur',".name",function(){
				name=$(this).val();
				$(this).parent().html("<span class='update'>"+name+"</span>");
				$.get('index.php?r=liuyan/update',{id:id,name:name});
		});
		
</script>
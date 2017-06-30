@extends('admin.index')
@section('main-content')
    <div class="main-content">
      <h2>添加分类</h2>
      <form action="" method='post' enctype='multipart/form-data'>
        {{csrf_field()}}
      
		<div style="position:absolute;border:1pt solid #c1c1c1;overflow:hidden;width:188px;height:19px;clip:rect(-1px 190px 190px 170px);top: 50px"> 
			<select name="foo" id="foo1" style="width:190px;height:20px;margin:-2px;" onChange="javascript:document.getElementById('goo1').value=document.getElementById('foo1').options[document.getElementById('foo1').selectedIndex].value;">
				<option value="" style="color:#c2c2c2;">---请选择---</option>
				<option value="">1</option> 
				<option value="">2</option> 
				<option value="">3</option> 
				<option value="">4</option> 
			</select> 
		</div> 
		<div style="position:absolute;border-top:1pt solid #c1c1c1;border-left:1pt solid #c1c1c1;border-bottom:1pt solid #c1c1c1;width:170px;height:19px;top: 50px"> 
			<input type="text" name="goo" id="goo1" value="" style="width:170px;height:15px;border:0pt;"> 
		</div> 	

		
<div style="position:absolute;border:1pt solid #c1c1c1;overflow:hidden;width:188px;height:19px;clip:rect(-1px 190px 190px 170px);top: 100px"> 
			<select name="foo" id="foo2" style="width:190px;height:20px;margin:-2px;" onChange="javascript:document.getElementById('goo2').value=document.getElementById('foo2').options[document.getElementById('foo2').selectedIndex].value;">
				<option value="" style="color:#c2c2c2;">---请选择---</option>
				<option value="">1</option> 
				<option value="">2</option> 
				<option value="">3</option> 
				<option value="">4</option> 
			</select> 
		</div> 
		<div style="position:absolute;border-top:1pt solid #c1c1c1;border-left:1pt solid #c1c1c1;border-bottom:1pt solid #c1c1c1;width:170px;height:19px;top: 100px"> 
			<input type="text" name="goo" id="goo2" value="" style="width:170px;height:15px;border:0pt;"> 
		</div> 		



		


<div style="position:absolute;border:1pt solid #c1c1c1;overflow:hidden;width:188px;height:19px;clip:rect(-1px 190px 190px 170px);top: 150px"> 
			<select name="foo" id="foo3" style="width:190px;height:20px;margin:-2px;" onChange="javascript:document.getElementById('goo3').value=document.getElementById('foo3').options[document.getElementById('foo3').selectedIndex].value;">
				<option value="" style="color:#c2c2c2;">---请选择---</option>
				<option value="">1</option> 
				<option value="">2</option> 
				<option value="">3</option> 
				<option value="">4</option> 
			</select> 
		</div> 
		<div style="position:absolute;border-top:1pt solid #c1c1c1;border-left:1pt solid #c1c1c1;border-bottom:1pt solid #c1c1c1;width:170px;height:19px;top: 150px"> 
			<input type="text" name="goo" id="goo3" value="" style="width:170px;height:15px;border:0pt;"> 
		</div> 		





		<input type="submit" value="添加" style="position: absolute;top: 200px">	
	</form>	
@stop

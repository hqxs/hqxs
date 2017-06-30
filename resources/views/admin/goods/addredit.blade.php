@extends('admin.index')
@section('main-content')
  <div class="main-content">
    <form action="{{url('admin/addredit')}}">
		<h2>修改信息</h2>
		    RECEIVER
      	<input type="text" name="receiver" placeholder="{{ $res['receiver'] }}" value=""><br>
		    PHONE
      	<input type="text" name="phone" placeholder="{{ $res['phone'] }}" value=""><br>
		    ADDRESS
      	<input type="text" name="address" placeholder="{{ $res['address'] }}" value=""><br>  
        <input type="hidden" name="id" value="{{ $res['id'] }}">
      	<input type="submit" value="修改"><br>
    </form>
  </div>
@stop

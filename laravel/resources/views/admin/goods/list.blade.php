@extends('admin.index')
@section('main-content')
	<div class="main-content">
	    <table class="table table-hover"">
	      <thead>
	        <tr>
		      	<th>商品ID</th>
		        <th>商品名</th>
		        <th>商品价格</th>
		        <th>商品描述</th>
		        <th>是否可预定</th>
		        <th>操作</th>
	        </tr>
	      </thead>
	      <tbody>
	        @foreach($goods as $good)
	            <tr class="active">
	                <th scope="row">{{$good->id}}</th>
	                <td>{{$good->name}}</td>
	                <td>{{$good->price}}</td>
	                <td>{{$good->desc}}</td>
	                <td>{{$good->isReserve == 1 ? '接受预定' : '拒绝预定' }}</td>
	                <td><a href="{{url('admin/goods/edit')}}/{{$good->id}}" class="btn btn-info">编辑</a><a href="" class="btn btn-warning">删除</a></td>
	            </tr>
	        @endforeach
	      </tbody>
	    </table>
	</div>
@stop
@extends('admin.index')
@section('main-content')
    <div class="main-content">
            <form action='{{url('/admin/goods/update')}}/{{$goods[0]->id}}' method="post">
                {{csrf_field()}}
                商品ID<input type="text" name="id" value="{{$goods[0]->id}}" disabled>
                商品名<input type="text" name="name" placeholder="{{$goods[0]->name}}" value="">
                商品价格<input type="text" name="price" placeholder="{{$goods[0]->price}}" value="">
                商品描述<input type="text" name="desc" placeholder="{{$goods[0]->desc}}" value="">
                是否可预定<label><input type="radio" name="isReserve" value="1" checked>是</label>
                         <label><input type="radio" name="isReserve" value="2">否</label>
                <input type="submit" value="修改">
            </form>
    </div>
@stop
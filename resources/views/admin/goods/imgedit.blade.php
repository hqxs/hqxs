@extends('admin.index')
@section('main-content')
    <div class="main-content">
        <table class="table table-bordered" style="text-align: center">
            <caption> <h1>商品图片管理</h1> </caption>
            <tr>
                <th width="200px" > ID </th>
                <th width="200px"> GOODSID </th>
                <th width="200px"> ICON </th>
                <th width="200px"> Face </th>
                <th width="200px"> Action </th>
            </tr>
            @foreach($result as $val)
                <tr>
                    <td>{{$val['id']}}</td>
                    <td>{{$val['goodsId']}}</td>
                    <td> <img src="{{url($val['icon'])}}"> </td>
                    <td><a href="#">{{$val['face']}}</a></td>
                    <td>
                        <form action="{{url('/admin/goods/upload')}}/{{$val['id']}}" method="post" enctype="multipart/form-data">
                            {{csrf_field()}}
                            <input type="file" name="img">
                            <input type="submit" name="icon" value="上传">
                        </form>
                        <a href="">删除</a>
                    </td>
                </tr>
            @endforeach
        </table>
    </div>
@stop
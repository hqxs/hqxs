@extends('admin.index')
@section('main-content')
    <div class="main-content">
        <table class="table table-bordered" style="text-align: center">
            <caption> <h1>商品管理</h1> </caption>
                <tr>
                    <th width="200px" > ID </th>
                    <th width="200px"> Icon </th>
                    <th width="200px"> Face </th>
                    <th width="200px"> Action </th>
                </tr>
                @foreach($result as $val)
                <tr>
                    <td>{{$val['id']}}</td>
                    <td> <img src="{{$val['icon']}}" alt=""> </td>
                    <td><a href="#">{{$val['face']}}</a></td>
                    <td>
                        <a href="{{url('admin/goods/imgedit')}}/{{$val['id']}}">图片管理</a>
                    </td>
                </tr>
                @endforeach
        </table>
    </div>
@stop
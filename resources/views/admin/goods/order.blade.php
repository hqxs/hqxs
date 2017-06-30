@extends('admin.index')
@section('main-content')
  <div class="main-content">
    <table id="sample-table-1" class="table table-striped table-bordered table-hover">
      <caption><h2>订单详情</h2></caption>
      <thead>
        <tr>
          <th class="center">
            <label>
              <input type="checkbox" class="ace">
              <span class="lbl"></span>
            </label>
          </th>
          <th>ID</th>
          <th class="hidden-480">UID</th>

          <th>
            <!-- <i class="icon-time bigger-110 hidden-480"></i> -->
            AMOUT
          </th>
          <th class="hidden-480">ORDERCOUNT</th>
          <th>ORDERWAY</th>
          <th>STATUS</th>
          <th>ISPAY</th>
          <th>CANCEL</th>
          <th></th>
        </tr>
      </thead>

      <tbody>
        @foreach ($res as $r)
          <tr>
            <td class="center">
              <label>
                <input type="checkbox" class="ace">
                <span class="lbl"></span>
              </label>
            </td>

            <td>
              <a href="#">{{$r['id']}}</a>
            </td>
            <td>{{$r['uid']}}</td>
            <td class="hidden-480">{{$r['amount']}}</td>
            <td>{{$r['orderCount']}}</td>
            <td>{{$r['orderWay'] == 1 ? '货到付款' : '在线支付'}}</td>
            <td>{{$r['status'] == 1 ? '待发货' : $r['status'] == 2 ? '待收货' : '已收货' }}</td>
            <td>{{$r['isPay'] == 1 ? '已支付' : '未支付'}}</td>
            <td class="hidden-480">
              <span class="label label-sm label-warning">{{$r['cancel'] == 1 ? '订单已取消' : '订单未取消' }}</span>
            </td>
            <td>
              <div class="visible-md visible-lg hidden-sm hidden-xs btn-group">
                <button class="btn btn-xs btn-info">
                  <i class="icon-edit bigger-120"></i>
                </button>                
                <a href="{{ url('admin/order/delete') }}/{{$r['id']}}" class="btn btn-xs btn-danger">
                  <i class="icon-trash bigger-120"></i>
                </a>
              </div>
              <div class="visible-xs visible-sm hidden-md hidden-lg">
                <div class="inline position-relative">
                  <button class="btn btn-minier btn-primary dropdown-toggle" data-toggle="dropdown">
                    <i class="icon-cog icon-only bigger-110"></i>
                  </button>

                  <ul class="dropdown-menu dropdown-only-icon dropdown-yellow pull-right dropdown-caret dropdown-close">
                    <li>
                      <a href="#" class="tooltip-info" data-rel="tooltip" title="" data-original-title="View">
                        <span class="blue">
                          <i class="icon-zoom-in bigger-120"></i>
                        </span>
                      </a>
                    </li>

                    <li>
                      <a href="#" class="tooltip-success" data-rel="tooltip" title="" data-original-title="Edit">
                        <span class="green">
                          <i class="icon-edit bigger-120"></i>
                        </span>
                      </a>
                    </li>

                    <li>
                      <a href="#" class="tooltip-error" data-rel="tooltip" title="" data-original-title="Delete">
                        <span class="red">
                          <i class="icon-trash bigger-120"></i>
                        </span>
                      </a>
                    </li>
                  </ul>
                </div>
              </div>
            </td>
          </tr>
        @endforeach
      </tbody>
    </table>
  </div>
@stop

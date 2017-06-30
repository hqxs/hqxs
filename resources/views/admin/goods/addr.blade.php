@extends('admin.index')
@section('main-content')
  <div class="main-content">
    <table id="sample-table-1" class="table table-striped table-bordered table-hover">
      <caption><h2>地址信息</h2></caption>
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
          <th class="hidden-480">RECEIVER</th>
          <th>PHONE</th>
          <th>ADDRESS</th>
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
            <td class="hidden-480">{{$r['receiver']}}</td>
            <td>{{$r['phone']}}</td>
            <td>{{$r['address']}}</td>
            <td>
              <div class="visible-md visible-lg hidden-sm hidden-xs btn-group">
               <a  href="{{ url('admin/addr/edit') }}/{{ $r['id'] }}" class="btn btn-xs btn-info">
                  <i class="icon-edit bigger-120"></i>
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

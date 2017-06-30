@extends('admin.index')
@section('main-content')
  <div class="main-content">
    <div class="table-responsive">
      <div id="sample-table-2_wrapper" class="dataTables_wrapper" role="grid">
        <div class="row" style="height: 54px">
          <div class="col-sm-6">
            <div id="sample-table-2_length" class="dataTables_length">
              <label>Display 
                <select size="1" name="sample-table-2_length" aria-controls="sample-table-2">
                  <option value="10" selected="selected">10</option><option value="25">25</option><option value="50">50</option><option value="100">100</option>
                </select> 
                records
              </label>
            </div>
          </div>
          <div class="col-sm-6">
            <div class="dataTables_filter" id="sample-table-2_filter">
              <label>Search: <input type="text" aria-controls="sample-table-2">
              </label>
            </div>
          </div>
        </div>
        <table id="sample-table-2" class="table table-striped table-bordered table-hover dataTable" aria-describedby="sample-table-2_info">
          <thead>
            <tr role="row">
              <th class="center sorting_disabled" role="columnheader" rowspan="1" colspan="1" aria-label="
              " style="width: 53px;">
                <label>
                  <input type="checkbox" class="ace">
                  <span class="lbl"></span>
                </label>
              </th>
              <th class="sorting" role="columnheader" tabindex="0" aria-controls="sample-table-2" rowspan="1" colspan="1" aria-label="Domain: activate to sort column ascending" style="width: 154px;">ID</th><th class="sorting" role="columnheader" tabindex="0" aria-controls="sample-table-2" rowspan="1" colspan="1" aria-label="Price: activate to sort column ascending" style="width: 107px;">Name</th><th class="hidden-480 sorting" role="columnheader" tabindex="0" aria-controls="sample-table-2" rowspan="1" colspan="1" aria-label="Clicks: activate to sort column ascending" style="width: 115px;">Pid</th><th class="sorting" role="columnheader" tabindex="0" aria-controls="sample-table-2" rowspan="1" colspan="1" aria-label="Update: activate to sort column ascending" style="width: 170px;"><i class="icon-time bigger-110 hidden-480"></i>Path</th><th class="hidden-480 sorting" role="columnheader" tabindex="0" aria-controls="sample-table-2" rowspan="1" colspan="1" aria-label="Status: activate to sort column ascending" style="width: 160px;">Display</th><th class="sorting_disabled" role="columnheader" rowspan="1" colspan="1" aria-label="" style="width: 147px;">
              </th>
            </tr>
          </thead>
          <tbody role="alert" aria-live="polite" aria-relevant="all" class="nav nav-list">
          <!-- 点击一级分类  二级子分类展开  点击二级分类  三级子分类展开 -->
            @foreach ($result1 as $value)
              <tr class="odd">
                <td class="center  sorting_1">
                  <label>
                    <input type="checkbox" class="ace">
                    <span class="lbl"></span>
                  </label>
                </td>
                <td class=" ">
                  <a href="#">{{$value['id']}}</a>
                </td>
                <td class=" ">{{$value['name']}}</td>
                <td class="hidden-480 ">{{$value['pid']}}</td>
                <td class=" ">{{$value['path']}}</td>
                <td class="hidden-480 ">
                  <span class="label label-sm label-warning">{{$value['display']}}</span>
                </td>
                <td class=" ">
                  <div class="visible-md visible-lg hidden-sm hidden-xs action-buttons">
                    <a class="blue" href="#">
                      <i class="icon-zoom-in bigger-130"></i>
                    </a>

                    <a class="green" href="#">
                      <i class="icon-pencil bigger-130"></i>
                    </a>

                    <a class="red" href="#">
                      <i class="icon-trash bigger-130"></i>
                    </a>
                  </div>

                  <div class="visible-xs visible-sm hidden-md hidden-lg">
                    <div class="inline position-relative">
                      <button class="btn btn-minier btn-yellow dropdown-toggle" data-toggle="dropdown">
                        <i class="icon-caret-down icon-only bigger-120"></i>
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
              @foreach ($result2 as $val)
                @if($value['id'] == $val['pid'])
                  <tr class="odd">
                    <td class="center  sorting_1">
                      <label>
                        <input type="checkbox" class="ace">
                        <span class="lbl"></span>
                      </label>
                    </td>
                    <td class=" ">
                      <a href="#">{{$val['id']}}</a>
                    </td>
                    <td class=" ">{{$val['name']}}</td>
                    <td class="hidden-480 ">{{$val['pid']}}</td>
                    <td class=" ">{{$val['path']}}</td>
                    <td class="hidden-480 ">
                      <span class="label label-sm label-warning">{{$val['display']}}</span>
                    </td>
                    <td class=" ">
                      <div class="visible-md visible-lg hidden-sm hidden-xs action-buttons">
                        <a class="blue" href="#">
                          <i class="icon-zoom-in bigger-130"></i>
                        </a>

                        <a class="green" href="#">
                          <i class="icon-pencil bigger-130"></i>
                        </a>

                        <a class="red" href="#">
                          <i class="icon-trash bigger-130"></i>
                        </a>
                      </div>

                      <div class="visible-xs visible-sm hidden-md hidden-lg">
                        <div class="inline position-relative">
                          <button class="btn btn-minier btn-yellow dropdown-toggle" data-toggle="dropdown">
                            <i class="icon-caret-down icon-only bigger-120"></i>
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
                @endif
                @foreach ($result3 as $v)
                  @if($val['id'] == $v['pid'])
                    <tr class="odd">
                      <td class="center  sorting_1">
                        <label>
                          <input type="checkbox" class="ace">
                          <span class="lbl"></span>
                        </label>
                      </td>
                      <td class=" ">
                        <a href="#">{{$v['id']}}</a>
                      </td>
                      <td class=" ">{{$v['name']}}</td>
                      <td class="hidden-480 ">{{$v['pid']}}</td>
                      <td class=" ">{{$v['path']}}</td>
                      <td class="hidden-480 ">
                        <span class="label label-sm label-warning">{{$v['display']}}</span>
                      </td>
                      <td class=" ">
                        <div class="visible-md visible-lg hidden-sm hidden-xs action-buttons">
                          <a class="blue" href="#">
                            <i class="icon-zoom-in bigger-130"></i>
                          </a>

                          <a class="green" href="#">
                            <i class="icon-pencil bigger-130"></i>
                          </a>

                          <a class="red" href="#">
                            <i class="icon-trash bigger-130"></i>
                          </a>
                        </div>

                        <div class="visible-xs visible-sm hidden-md hidden-lg">
                          <div class="inline position-relative">
                            <button class="btn btn-minier btn-yellow dropdown-toggle" data-toggle="dropdown">
                              <i class="icon-caret-down icon-only bigger-120"></i>
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
                  @endif
                @endforeach
              @endforeach
            @endforeach
          </tbody>
      </table>
      <div class="row">
        <!-- <div class="col-sm-6">
          <div class="dataTables_info" id="sample-table-2_info">
          Showing 1 to 10 of 23 entries</div>
        </div> -->
          <div class="col-sm-12">
            <div class="dataTables_paginate paging_bootstrap">
              <ul class="pagination"><li class="prev disabled"><a href="#"><i class="icon-double-angle-left"></i></a></li><li class="active"><a href="#">1</a></li><li><a href="#">2</a></li><li><a href="#">3</a></li><li class="next"><a href="#"><i class="icon-double-angle-right"></i></a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
@stop

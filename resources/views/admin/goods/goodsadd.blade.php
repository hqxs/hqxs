@extends('admin.index')
@section('main-content')
    <div class="main-content">
      <h2>添加商品</h2>
      <form action="action.php?bz=add" method='post' enctype='multipart/form-data'>
        {{csrf_field()}}
        <p>Name: <input type="text" name='name' placeholder='goods name'></p>
        Cid: 
            <select name="cid" id="province" style="width: 100px">
            </select>
            <select name="cid" id="city" style="width: 100px">
            </select>
            <select name="cid" id="piecearea" style="width: 100px">
            </select>
        <p>Price: <input type="text" name='price' placeholder='price'></p>
        <p>Store: <input type='text' name='store'></p>
        <p>Sold: <input type='text' name='sold'></p>
        <p>Up: 
            <label><input type='radio' name='up' value='1' checked>上架</label>
            <label><input type='radio' name='up' value='2'>下架</label>
        </p>
        <p>Hot: 
            <label><input type='radio' name='hot' value='1' >热销</label>
            <label><input type='radio' name='hot' value='2' checked>滞销</label>
        </p>
        <p><input type="submit" value="添加"></p>
    </form>
    <script src="{{url('/js/jquery-2.0.3.min.js')}}" type="text/javascript" charset="utf-8"></script>
    <script>
        $(function () {
            $.ajax({
                url:'/admin/cateSelect',
                type:'get',
                async:false,
                success:function ($data) {
                   // console.log($data);  
                   
                    for (var i = 0; i < $data.length; i++) {
                        // console.log($data[i]);
                        // console.log($data[i].pid);
                        // console.log($data[i].id);
                        // console.log($data[i].name);
                        $arr = '';
                        if ($data[i].pid == 0) {
                            $arr[0] = $data[i].name;
                            console.log($arr)
                        }
                    }

                },
                dataType:'json',
            });

        }); 







        // for (var i = 0; i < $data.length; i++) {
                    //     // console.log($data[i]);
                    //     // console.log($data[i].pid);
                    //     // console.log($data[i].id);
                    //     // console.log($data[i].name); 
                    //     pid = $data[i].pid;
                    //     id = $data[i].id;
                    //     name = $data[i].name;
                    //     // console.log(pid);
                    //     if (pid == 0) {
                    //         var pros = $("#province");
                    //         pros.each(function () {
                    //             // var proId = $data[i].id;
                    //             // var proName = $data[i].name;
                    //             // console.log(proId);
                    //             // console.log(proName);
                    //             $("#province").append("<option value="+id+">"+name+"</option>");
                    //         });
                    //     }
                    //     // if ($data[i].pid == 0) {
                    //     //     var pros = $("#province");
                    //     //     pros.each(function () {
                    //     //         var proId = $data[i].id;
                    //     //         var proName = $data[i].name;
                    //     //         // console.log(proId);
                    //     //         // console.log(proName);
                    //     //         $("#province").append("<option value="+proId+">"+proName+"</option>");
                    //     //     });
                    //     // }

                    //     $("#province").change(function () {
                    //         var citys = $("#city");
                    //         // $("#city").show();
                    //         // $("#piecearea").show();
                    //         // $("#city").empty();
                    //         $index = $(this).val();
                    //         console.log($index);
                            
                    //         if (pid == $index) {
                    //             citys.each(function () {
                    //                 // var cityId = $data[i].id;
                    //                 // var cityName = $data[i].name;
                    //                 $("#city").append("<option value="+id+">"+name+"</option>");
                    //             });
                    //         // $("#city").trigger('change');
                    //        }
                    //     });

                    // }

    </script>
@stop

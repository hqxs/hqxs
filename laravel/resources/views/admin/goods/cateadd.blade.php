@extends('admin.index')
@section('main-content')
    <div class="main-content">
      <form action="action.php?bz=add" method='post' enctype='multipart/form-data'>
        {{csrf_field()}}
        <p>Name: <input type="text" name='name' placeholder='goods name'></p>
        <p>Cid: 
            <select name="cid">
                <?php foreach ($list as $k => $v): ?>
                    <?php 
                        $count = substr_count($v['px'], ',');
                        $nbsp = str_repeat('&nbsp;', ($count-2)*4);
                     ?>
                    <option value="<?= $v['id']?>"><?= $nbsp.$v['name']?></option>
                <?php endforeach ?>
            </select>
        </p>
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
    <script src="/js/jquery-2.0.3.min.js" type="text/javascript" charset="utf-8"></script>
    <script>
        $(function () {
            var xml = ''
            $.ajax({
                url:'/admin/cateSelect',
                type:'get',
                async:false,
                success:function (data) {
                    console.log(data);
                    xml = data;
                    var pros = $(data).find('pid');
                    //console.log(pros);
                    pros.each(function () {
                        var proId = $(this).attr('id');
                        var proName = $(this).attr('name');
                        //console.log(proName);
                        $("#province").append("<option value="+proId+">"+proName+"</option>");
                    });
                },
            })
            // $("#province").change(function () {
            //     $("#city").show();
            //     $("#piecearea").show();
            //     $("#city").empty();
            //     var index = $(this).val().substr(0,2);
            //     //console.log(index);
            //     var citys = $(xml).find('City[CityID^='+index+']');
            //     if (citys.length == 0)
            //     {
            //         $("#city").hide();
            //         $("#piecearea").hide();
            //         return;
            //     }
            //     citys.each(function () {
            //         var cityId = $(this).attr('CityID');
            //         var cityName = $(this).attr('City');
            //         $("#city").append("<option value="+cityId+">"+cityName+"</option>");
            //     });
            //     $("#city").trigger('change');
            // });

            // $("#city").change(function () {
            //     $("#piecearea").show();
            //     $("#piecearea").empty();
            //     var index = $(this).val().substr(0,4);
            //     //console.log(index);
            //     var pies = $(xml).find('Piecearea[PieceareaID^='+index+']');
            //     console.log(pies);
            //     if (pies.length == 0)
            //     {
            //         $("#piecearea").hide();
            //         return;
            //     }
            //     pies.each(function () {
            //         var pieId = $(this).attr('PieceareaID');
            //         var pieName = $(this).attr('Piecearea');
            //         $("#piecearea").append("<option value="+pieId+">"+pieName+"</option>");
            //     });
            // });

            // $("#province").trigger('change');
            // $("#city").trigger('change');
        })
    </script>
@stop
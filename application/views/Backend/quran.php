<!DOCTYPE html>
<!-- View { baca juga yang bagian bawah } -->
<html>
  <head>
    <meta charset="UTF-8">
    <title>P3M PENS</title>
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
    <!-- favicon -->
    <link rel="shortcut icon" href="<?=base_url();?>public/dist/img/favicon.ico" />
    <!-- Bootstrap 3.3.2 -->
    <link href="<?=base_url('public/bootstrap/css/bootstrap.min.css')?>" rel="stylesheet" type="text/css" />
    <!-- Font Awesome Icons -->
    <link href="<?=base_url('public/plugins/font-awesome-4.3.0/css/font-awesome.min.css')?>" rel="stylesheet" type="text/css" />
    <!-- jQueryUI -->
    <link href="<?=base_url('public/plugins/jQueryUI/jquery-ui.min.css');?>" rel="stylesheet" type="text/css" />
    <link href="<?=base_url('public/plugins/jQueryUI/jquery-ui.structure.min.css');?>" rel="stylesheet" type="text/css" />
    <link href="<?=base_url('public/plugins/jQueryUI/jquery-ui.theme.min.css');?>" rel="stylesheet" type="text/css" />
    <!-- Theme style -->
    <link href="<?=base_url('public/dist/css/AdminLTE.min.css')?>" rel="stylesheet" type="text/css" />
    <!-- AdminLTE Skins. Choose a skin from the css/skins 
         folder instead of downloading all of them to reduce the load. -->
    <link href="<?=base_url('public/dist/css/skins/_all-skins.min.css')?>" rel="stylesheet" type="text/css" />
    <!-- Custom CSS -->
    <link href="<?=base_url('public/dist/css/custom.css');?>" rel="stylesheet" type="text/css" />

    <!-- Javascript -->
    <!-- jQuery -->
    <script src="<?=base_url('public/plugins/jQuery/jQuery-2.1.4.min.js');?>"></script>
    <!-- jQueryUI -->
    <script src="<?=base_url('public/plugins/jQueryUI/jquery-ui.min.js');?>" type="text/javascript"></script>
    <!-- Bootstrap -->
    <script src="<?=base_url('public/bootstrap/js/bootstrap.min.js');?>" type="text/javascript"></script>
    <!-- Misc -->
    <script src="<?=base_url('public/dist/js/misc.js');?>" type="text/javascript"></script>

    <style type="text/css">
    .boox {
        background-color: #ccc;
        padding: 5px;
        border: 1px solid #ccc;
        border-radius: 2px;
        margin: 2px;
    }
    </style>


    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
    <button class="btn btn-sm btn-info" id="btn-user" data-id="71" data-toggle="modal" data-target="#modal-user"><i class="fa fa-user"></i> Pilih User</button>
    

    <!-- Modal User -->
    <div class="modal modal-primary fade" id="modal-user" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            <h4 class="modal-title"><i class="fa fa-user"></i> Daftar User </h4>
          </div>
          <div class="modal-body">
            <div class="container-fluid">
              <span id="form-pesan-user"></span>
                <div class="row" id="here">
                  
                </div>
            </div><!-- /.box-body -->
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-danger" data-dismiss="modal"><i class="fa fa-times"></i> Tutup</button>
            <button id="btn-simpan-laporan" type="button" class="btn btn-primary"><i class="fa fa-save"></i> Simpan</button>
          </div>
        </div>
      </div>
    </div>
    <!-- Modal User -->

    <!-- Script custom -->
    <script type="text/javascript">
        $(document).ready(function() {
            var csrf_token = '<?=$this->security->get_csrf_hash();?>';

            $('#modal-user').on('show.bs.modal', function (e) {
                var button = $(e.relatedTarget);
                var id = button.data('id'); // id ini berisi id role atau nanti bisa id topik, ngaturnya di data-id="x" di button btn-user
                var modal = $(this);
                alert(id);

                $.ajax({
                    type: "GET",
                    url: "<?=site_url('user/getuserwith');?>/" + id + "", // 
                    //data: { csrf_test_name: csrf_token, role: id },
                    cache: false,
                    success: function (data) {
                        var obj = $.parseJSON(data);
                        //alert(obj);
                        //console.log(data);
                        //modal.find('.here').html(obj.user_login);

                        // buat reset div
                        var el = document.getElementById('here');
                        while ( el.firstChild ) el.removeChild( el.firstChild );
                        for(var i=0;i<obj.length;i++){
                            //if(i===0) {
                                // ini membuat div tiap iterasi
                                $('#here').append("<div class='col-xl-2 col-md-4 col-xs-12 boox i-" + i + "'></div>");
                            //}
                            //else {
                            //    $( ".boox" ).clone().addClass('i-' + i + '').appendTo( ".here" );
                            //}
                            var arr = obj[i];
                            $(".i-" + i + "").append(document.createTextNode(arr['user_login']));
                            // for(var key in arr){
                            //     var attrName = key;
                            //     var attrValue = arr[key];

                            //     console.log(attrName + "-" + attrValue);
                            // }
                            //$( ".boox" ).clone().appendTo( ".here" );
                        }
                        /*jQuery.each(obj, function(i, val) {
                          //$(".boox").append(document.createTextNode(val.user_login + " - "));
                          $( ".boox" ).clone().appendTo( ".here" );
                        });*/
                    },
                    error: function(err) {
                        console.log(err);
                    }
                });
            });
        });
    </script>
  </body>
</html>

<!-- Controller -->
<!-- kamu buat fungsi seperti ini
public function getuserwith($id) {
    // isinya $this->user_model->selectBasic($parameter)
    // function selectBasic($data, $no = 0) {
    //     $this->db->select('*')
    //         ->from('tb_user u')
    //         ->join('tb_role r', 'u.role_id = r.role_id')
    //         ->where($data)
    //         ->limit($no);
    //     $query = $this->db->get();
    //     return ($query->num_rows() > 0 ? $query : NULL);
    // }
    
    // akses ke model dengan kondisi id role, nanti bisa pakai id topik
    $data = $this->user_model->selectBasic(array('u.role_id' => $id));
    // looping data array 2 dimensi
    foreach ($data->result() as $key => $value) {
        $result[] = $value;
    }
    // return dalam bentuk json biar bisa dibaca si-ajax
    echo json_encode($result);
} 

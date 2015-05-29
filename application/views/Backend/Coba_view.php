<!DOCTYPE html>
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
    <!-- Ionicons -->
    <link href="<?=base_url('public/plugins/ionicons-2.0.1/css/ionicons.min.css')?>" rel="stylesheet" type="text/css" />
    <!-- iCheck for checkboxes and radio inputs -->
    <link href="<?=base_url('public/plugins/iCheck/all.css');?>" rel="stylesheet" type="text/css" />
    <!-- Bootstrap time Picker -->
    <link href="<?=base_url('public/plugins/timepicker/bootstrap-timepicker.min.css');?>" rel="stylesheet"/>
    <!-- DATA TABLES -->
    <link href="<?=base_url('public/plugins/datatables/dataTables.bootstrap.css');?>" rel="stylesheet" type="text/css" />
    <link href="<?=base_url('public/plugins/datatables/dataTables.responsive.css');?>" rel="stylesheet" type="text/css" />
    <!-- bootstrap wysihtml5 - text editor -->
    <link href="<?=base_url('public/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css');?>" rel="stylesheet" type="text/css" />
    <!-- Theme style -->
    <link href="<?=base_url('public/dist/css/AdminLTE.min.css')?>" rel="stylesheet" type="text/css" />
    <!-- AdminLTE Skins. Choose a skin from the css/skins 
         folder instead of downloading all of them to reduce the load. -->
    <link href="<?=base_url('public/dist/css/skins/_all-skins.min.css')?>" rel="stylesheet" type="text/css" />
    <!-- jQueryUI -->
    <!-- <link href="<?=base_url('public/plugins/jQueryUI/jquery-ui.min.css');?>" rel="stylesheet" type="text/css" />
    <link href="<?=base_url('public/plugins/jQueryUI/jquery-ui.structure.min.css');?>" rel="stylesheet" type="text/css" />
    <link href="<?=base_url('public/plugins/jQueryUI/jquery-ui.theme.min.css');?>" rel="stylesheet" type="text/css" /> -->
    <!-- Select2 -->
    <link href="<?=base_url('public/plugins/select2/dist/css/select2.min.css');?>" rel="stylesheet" type="text/css" />
    <!-- Custom CSS -->
    <link href="<?=base_url('public/dist/css/select2v4-bootstrap.css');?>" rel="stylesheet" type="text/css" />
    <link href="<?=base_url('public/dist/css/custom.css');?>" rel="stylesheet" type="text/css" />

    <!-- Javascript -->
    <!-- jQuery -->
    <script src="<?=base_url('public/plugins/jQuery/jQuery-2.1.4.min.js');?>"></script>
    <!-- jQueryUI -->
    <script src="<?=base_url('public/plugins/jQueryUI/jquery-ui.min.js');?>" type="text/javascript"></script>
    <!-- Bootstrap -->
    <script src="<?=base_url('public/bootstrap/js/bootstrap.min.js');?>" type="text/javascript"></script>
    <!-- FastClick -->
    <script src="<?=base_url('public/plugins/fastclick/fastclick.min.js');?>" type="text/javascript"></script>
    <!-- Datatables -->
    <script src="<?=base_url('public/plugins/datatables/jquery.dataTables.js');?>" type="text/javascript"></script>
    <script src="<?=base_url('public/plugins/datatables/dataTables.tableTools.js');?>" type="text/javascript"></script>
    <script src="<?=base_url('public/plugins/datatables/dataTables.bootstrap.js');?>" type="text/javascript"></script>
    <script src="<?=base_url('public/plugins/datatables/dataTables.responsive.min.js');?>" type="text/javascript"></script>
    <!-- InputMask -->
    <script src="<?=base_url('public/plugins/input-mask/jquery.inputmask.js');?>" type="text/javascript"></script>
    <script src="<?=base_url('public/plugins/input-mask/jquery.inputmask.date.extensions.js');?>" type="text/javascript"></script>
    <script src="<?=base_url('public/plugins/input-mask/jquery.inputmask.extensions.js');?>" type="text/javascript"></script>
    <!-- daterangepicker -->
    <script src="<?=base_url('public/plugins/daterangepicker/daterangepicker.js');?>" type="text/javascript"></script>
    <!-- datepicker -->
    <script src="<?=base_url('public/plugins/datepicker/bootstrap-datepicker.js');?>" type="text/javascript"></script>
    <!-- bootstrap time picker -->
    <script src="<?=base_url('public/plugins/timepicker/bootstrap-timepicker.min.js');?>" type="text/javascript"></script>
    <!-- iCheck -->
    <script src="<?=base_url('public/plugins/iCheck/icheck.min.js');?>" type="text/javascript"></script>
    <!-- SlimScroll 1.3.0 -->
    <script src="<?=base_url('public/plugins/slimScroll/jquery.slimscroll.min.js');?>" type="text/javascript"></script>
    <!-- ChartJS 1.0.1 -->
    <script src="<?=base_url('public/plugins/chartjs/Chart.min.js');?>" type="text/javascript"></script>
    <!-- select2 -->
    <script src="<?=base_url('public/plugins/select2/dist/js/select2.full.min.js');?>" type="text/javascript"></script>
    <script src="<?=base_url('public/plugins/select2/dist/js/i18n/id.js');?>" type="text/javascript"></script>
    <!-- Misc -->
    <script src="<?=base_url('public/dist/js/misc.js');?>" type="text/javascript"></script>


    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
    <button class="btn btn-sm btn-info" id="btn-refresh" data-toggle="modal" data-target="#modal-tambah-laporan"><i class="fa fa-refresh"></i> Modal</button>
    

    <!-- Modal Tambah Laporan -->
    <div class="modal modal-primary fade" id="modal-tambah-laporan" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            <h4 class="modal-title"><i class="fa fa-book"></i> Tambah Laporan Baru </h4>
          </div>
          <div class="modal-body">
            <div class="container-fluid">
              <span id="form-pesan-tambah-laporan"></span>
              <?php echo form_open_multipart('laporan/tambah', 'id="form-tambah-laporan" class="eventInsForm"') ?>
                <div class="row">
                  <div class="col-xs-12">
                    <div class="form-group">
                      <div class="input-group">
                        <span class="input-group-addon">Pesan:</span>
                        <input type="text" class="form-control" id="tambah-pesan" name="tambah-pesan" placeholder="Laporan Kemajuan/Anggaran/Akhir" />
                      </div><!-- /.input group -->
                    </div>
                    <div class="form-group">
                      <div class="input-group here">
                        <span class="input-group-addon">Penelitian:</span>
                        <input type="hidden" id="tambah-pen-id" name="tambah-pen-id" readonly="" required >
                        <select class="form-control" id="tambah-pen" name="tambah-pen">
      <option value="3620194" selected="selected">Pilih Judul Penelitian</option>
    </select>
                      </div><!-- /.input group -->
                    </div>
                    <div class="form-group">
                      <div class="input-group">
                        <span class="input-group-addon">Tipe Laporan:</span>
                        <select class="form-control" id="tambah-tipe" name="tambah-tipe">
                            <?php if(!empty($daftartipe)) { foreach ($daftartipe->result() as $key) { ?>
                            <option value="<?=$key->tipelaporan_id?>"><?=$key->tipelaporan_teks?></option>
                            <?php } } ?>
                        </select>
                      </div><!-- /.input group -->
                    </div>
                    <div class="form-group">
                        <input type="file" name="tambah-file" id="tambah-file"/>  
                        <p class="help-block">Ukuran Maks. 50MB</p>
                    </div>
                  </div>
                </div>
              <?php echo form_close(); ?>
            </div><!-- /.box-body -->
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-danger" data-dismiss="modal"><i class="fa fa-times"></i> Batal</button>
            <button id="btn-simpan-laporan" type="button" class="btn btn-primary"><i class="fa fa-save"></i> Simpan</button>
          </div>
        </div>
      </div>
    </div>
    <!-- Modal Tambah Laporan -->

    
    <script type="text/javascript">
        $(document).ready(function() {
            var csrf_token = '<?=$this->security->get_csrf_hash();?>';
            $.fn.select2.defaults.set( "theme", "bootstrap" );

            $("#tambah-pen").select2({
                minimumInputLength: 2,
                width : "off",
                placeholder: "Pilih Judul Penelitian",
                ajax: {
                    url: "<?=site_url('penelitian/get_penlist')?>",
                    dataType: 'json',
                    delay: 250,
                    type: 'GET',
                    data: function (params) {
                        return {
                            q: params.term, // search term
                            page: params.page
                        };
                    },
                    processResults: function (data, params) {
                        params.page = params.page || 1;
                        return {
                            results: data.items,
                            pagination: {
                                more: (params.page * 30) < data.total_count
                            }
                        };
                    },
                },
                escapeMarkup: function (markup) { return markup; },
                language: "id",
                dropdownParent: ".here",
                // formatNoMatches: function(term) {
                //   return "Data tidak ditemukan. . . . ";
                // }
            });

            $('#modal-tambah-laporan').on('show.bs.modal', function (e) {
                var button = $(e.relatedTarget);
                var id = button.data('id');
                var modal = $(this);

                /*$.ajax({
                    type: "POST",
                    url: "<?=site_url('laporan/getlaporanwith');?>",
                    data: { csrf_test_name: csrf_token, id: id },
                    cache: false,
                    success: function (data) {
                        var obj = $.parseJSON(data);
                        //console.log(data);
                        modal.find('.hapus-isi').html(obj.berkas_pesan);
                        modal.find('.hapus-tanggal').html(obj.berkas_waktu);
                        modal.find('.hapus-judul').html(obj.pen_judul);
                        modal.find('#hapus-id').val(obj.ID);
                    },
                    error: function(err) {
                        console.log(err);
                    }
                });*/
            });
        });
    </script>
  </body>
</html>
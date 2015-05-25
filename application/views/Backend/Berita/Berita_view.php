        <!-- Main content -->
        <section class="content">
          
          <!-- Info boxes -->
          <div class="row">
            <div class="col-md-3 col-sm-6 col-xs-12">
              <div class="info-box">
                <span class="info-box-icon bg-aqua"><i class="fa fa-rss"></i></span>
                <div class="info-box-content">
                  <span class="info-box-text">Total</span>
                  <span class="info-box-number" id="boxlogbook">0</span>
                </div><!-- /.info-box-content -->
              </div><!-- /.info-box -->
            </div><!-- /.col -->
            <div class="col-md-3 col-sm-6 col-xs-12">
              <div class="info-box">
                <span class="info-box-icon bg-red"><i class="fa fa-check-square"></i></span>
                <div class="info-box-content">
                  <span class="info-box-text">Rilis</span>
                  <span class="info-box-number" id="boxkemajuan">0</span>
                </div><!-- /.info-box-content -->
              </div><!-- /.info-box -->
            </div><!-- /.col -->

            <!-- fix for small devices only -->
            <div class="clearfix visible-sm-block"></div>

            <div class="col-md-3 col-sm-6 col-xs-12">
              <div class="info-box">
                <span class="info-box-icon bg-green"><i class="icon ion-android-drafts"></i></span>
                <div class="info-box-content">
                  <span class="info-box-text">Draft</span>
                  <span class="info-box-number" id="boxanggaran">0</span>
                </div><!-- /.info-box-content -->
              </div><!-- /.info-box -->
            </div><!-- /.col -->
            <div class="col-md-3 col-sm-6 col-xs-12">
              <div class="info-box">
                <span class="info-box-icon bg-orange"><i class="fa fa-tags"></i></span>
                <div class="info-box-content">
                  <span class="info-box-text">Tipe</span>
                  <span class="info-box-number" id="boxakhir">0</span>
                </div><!-- /.info-box-content -->
              </div><!-- /.info-box -->
            </div><!-- /.col -->
          </div><!-- /.row -->

          <div class="row">
            <div class="col-md-8 col-sm-8 col-xs-8">

              <div class="box box-solid">
                <div class="box-header with-border">
                  <h3 class="box-title">Berita</h3>
                  <div class="box-tools pull-right">
                    <button class="btn btn-box-tool" data-toggle="tooltip" data-original-title="Tambah"><i class="fa fa-plus"></i> Tambah Berita</button>
                  </div>
                </div><!-- /.box-header -->
                <div class="box-body">
                  <table id="tberita" class="table table-bordered table-striped table-hover dt-responsive" cellspacing="0" width="100%">
                      <thead>
                        <tr>
                          <th>Judul</th>
                          <th>Penulis</th>
                          <th>Tanggal</th>
                          <th>Dilihat</th>
                          <th>Status</th>
                          <th>Opsi</th>
                        </tr>
                      </thead>
                      <tbody></tbody>
                      <tfoot>
                        <tr>
                          <th>Judul</th>
                          <th>Penulis</th>
                          <th>Tanggal</th>
                          <th>Dilihat</th>
                          <th>Status</th>
                          <th>Opsi</th>
                        </tr>
                      </tfoot>
                    </table>
                </div>
              </div>

            </div><!-- /.col -->

            <div class="col-md-4 col-sm-4 col-xs-4">

              <div class="box box-solid">
                <div class="box-header with-border">
                  <h3 class="box-title">Tipe Berita</h3>
                  <div class="box-tools pull-right">
                    <button class="btn btn-box-tool" data-toggle="tooltip" data-original-title="Tambah"><i class="fa fa-plus"></i> Tambah Tipe</button>
                  </div>
                </div><!-- /.box-header -->
                <div class="box-body">

                </div>
              </div>

            </div>

          </div><!-- /.row -->

        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->

      <footer class="main-footer">
        <div class="pull-right hidden-xs">
          <b>Versi</b> Beta 0.2
        </div>
        <strong><?=$web->web_footer;?>.</strong> All rights reserved. <i>{elapsed_time} detik</i>
      </footer>

    </div><!-- ./wrapper -->

    <!-- Modal Baca Laporan -->
    <div class="modal modal-primary fade" id="modal-baca" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            <h4 class="modal-title"><i class="fa fa-book"></i> Baca Laporan </h4>
          </div>
          <div class="modal-body">
            <div class="container-fluid">
              <span id="form-pesan-baca"></span>
              <?php echo form_open('laporan/baca', 'id="form-baca"') ?>
                <div class="row">
                  <div class="col-xs-12">
                    <input type="hidden" id="baca-id" name="baca-id" readonly="" />
                    <p><b>Informasi Laporan:</b></p>
                    <div class="callout callout-primary">
                      <p>Isi : <span class="baca-isi"> </span></p>
                      <p>Tanggal : <span class="baca-tanggal"> </span></p>
                      <p>Jenis : <span class="baca-tipeteks"> </span></p>
                      <p>Uploader : <span class="baca-uploader"> </span></p>
                      <p>Status : <span class="baca-status"> </span></p>
                    </div>
                    <p><b>Terkait dengan penelitian:</b></p>
                    <div class="callout callout-primary">
                      <p>Judul : <span class="baca-judul"> </span></p>
                      <p>Topik : <span class="baca-topik"> </span></p>
                      <p>Ketua Tim : <span class="baca-ketua"> </span></p>
                      <p>Tingkat : <span class="baca-tingkat"> </span></p>
                    </div>
                  </div>
                </div>
              <?php echo form_close(); ?>
            </div><!-- /.box-body -->
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-danger" data-dismiss="modal"><i class="fa fa-times"></i> Tutup</button>
            <button id="btn-download" type="button" data-toggle="modal" data-target="#modal-download" data-id="" class="btn btn-primary"><i class="fa fa-cloud-download"></i> Download</button>
          </div>
        </div>
      </div>
    </div>
    <!-- Modal Baca Laporan -->

    <!-- Modal Tambah Laporan -->
    <div class="modal modal-primary fade" id="modal-tambah" tabindex="-1" role="dialog" data-backdrop="static" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            <h4 class="modal-title"><i class="fa fa-book"></i> Tambah Laporan Baru </h4>
          </div>
          <div class="modal-body">
            <div class="container-fluid">
              <span id="form-pesan-tambah"></span>
              <?php echo form_open_multipart('laporan/tambah', 'id="form-tambah" class="eventInsForm"') ?>
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
                        <!-- <input type="text" class="form-control" id="tambah-pen" name="tambah-pen" placeholder="Judul Penelitian" /> -->
                        <select class="form-control" id="tambah-pen" name="tambah-pen">
                          <option value="">Pilih Judul Penelitian</option>
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
            <button id="btn-simpan" type="button" class="btn btn-primary"><i class="fa fa-save"></i> Simpan</button>
          </div>
        </div>
      </div>
    </div>
    <!-- Modal Tambah Laporan -->

    <!-- Modal Baca Semua Laporan -->
    <div class="modal modal-primary fade" id="modal-bacasemua-notifikasi" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            <h4 class="modal-title"><i class="fa fa-book"></i> Baca Semua Laporan </h4>
          </div>
          <div class="modal-body">
            <div class="container-fluid">
              <span id="form-pesan-bacasemua-notifikasi"></span>
              <?php echo form_open('notifikasi/bacasemua', 'id="form-bacasemua-notifikasi"') ?>
                <div class="row">
                  <div class="col-xs-12">
                    <p>Apakah Anda yakin ingin menandai semua notifikasi ini telah dibaca ?</p>
                  </div>
                </div>
              <?php echo form_close(); ?>
            </div><!-- /.box-body -->
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-danger" data-dismiss="modal"><i class="fa fa-times"></i> Batal</button>
            <button id="btn-bacasemua-notifikasi" type="button" class="btn btn-primary"><i class="fa fa-check"></i> Ya, Tandai Semua</button>
          </div>
        </div>
      </div>
    </div>
    <!-- Modal Baca Semua Laporan -->

    <!-- Modal Hapus Laporan -->
    <div class="modal modal-danger fade" id="modal-hapus" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            <h4 class="modal-title"><i class="fa fa-warning"></i> Hapus Data Laporan </h4>
          </div>
          <div class="modal-body">
            <span id="form-pesan-hapus"></span>
            <?php echo form_open('laporan/hapus', 'id="form-hapus"') ?>
            <div class="box-body">
              <div class="row">
                <div class="col-md-12">
                  <input type="hidden" id="hapus-id" name="hapus-id" readonly="" />
                  <p>Apakah Anda yakin ingin menghapus Data laporan berikut ?</p>
                  <div class="callout callout-danger">
                    <p>Judul Penelitian : <span class="hapus-judul"> </span></p>
                    <p>Isi : <span class="hapus-isi"> </span></p>
                    <p>Tanggal : <span class="hapus-tanggal"> </span></p>
                  </div>
                </div>
              </div>
            </div>
            <?php echo form_close(); ?>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-danger" data-dismiss="modal"><i class="fa fa-times"></i> Batal</button>
            <button id="btn-hapus" type="button" class="btn btn-primary"><i class="fa fa-check"></i> Ya, Hapus</button>
          </div>
        </div>
      </div>
    </div>
    <!-- Modal Hapus Laporan -->

    <!-- Modal Download Koran -->
    <div class="modal modal-primary fade" id="modal-download" tabindex="-1" role="dialog" data-backdrop="static" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            <h4 class="modal-title"><i class="fa fa-book"></i> Download Berkas Laporan </h4>
          </div>
          <div class="modal-body">
            <div class="box-body">
              <div class="row">
                <div class="col-md-12">
                  <p>Men-download Berkas Laporan   &nbsp;<i class="fa fa-refresh fa-spin"></i></p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Modal Download Koran -->

    <!-- Modal Hapus Semua Laporan -->
    <div class="modal modal-danger fade" id="modal-hapusemua" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            <h4 class="modal-title"><i class="fa fa-warning"></i> Hapus Semua Data Laporan </h4>
          </div>
          <div class="modal-body">
            <span id="form-pesan-hapusemua"></span>
            <?php echo form_open('laporan/hapusemua', 'id="form-hapusemua"') ?>
            <div class="box-body">
              <div class="row">
                <div class="col-md-12">
                  <p>Apakah Anda yakin ingin menghapus Semua Data Laporan ?</p>
                </div>
              </div>
            </div>
            <?php echo form_close(); ?>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-danger" data-dismiss="modal"><i class="fa fa-times"></i> Batal</button>
            <button id="btn-hapusemua" type="button" class="btn btn-primary"><i class="fa fa-check"></i> Ya, Hapus Semua</button>
          </div>
        </div>
      </div>
    </div>
    <button class="btn btn-default pull-right btn-tanggal-k" style="margin:0 10px;" data-toggle="tooltip" data-original-title="Tahun"><i class="fa fa-calendar"></i> <span class="btn-tanggal-text-k">Tahun</span></button>
    <!-- Modal Hapus Semua Laporan -->
    
    <!-- date-picker -->
    <link href="<?=base_url('public/plugins/datepicker/datepicker3.css');?>" rel="stylesheet" type="text/css" />
    <script src="<?=base_url('public/plugins/datepicker/bootstrap-datepicker.js');?>" type="text/javascript"></script>
    <!-- Perpus App -->
    <script src="<?=base_url('public/dist/js/app.min.js');?>" type="text/javascript"></script>
    <!-- page script -->
    <script type="text/javascript">
      function refresh_jumlah(){
        $.getJSON("<?=site_url('laporan/get_databox')?>", function(obj) {
            $("#boxlogbook").html(obj.boxlogbook);
            $("#boxkemajuan").html(obj.boxkemajuan);
            $("#boxanggaran").html(obj.boxanggaran);
            $("#boxakhir").html(obj.boxakhir);
        });
      }


      $(document).ready(function() {
        refresh_jumlah();
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
        });

        $('#btn-hapus-semua').click(function(){
            $('#modal-hapusemua').modal('show');
            return false;
        });

        $('#btn-tambah').click(function(){
            $('#modal-tambah').modal('show');
            return false;
        });

        $('#modal-download').on('show.bs.modal', function (e) {
            var button = $(e.relatedTarget);
            var id = button.data('id');
            var modal = $(this);

            //e.preventDefault();  //stop the browser from following
            setTimeout(function(){ 
              window.location.href = "<?=site_url('laporan/download/" + id + "')?>";
            }, 2500);
            setTimeout(function(){ modal.modal('hide'); }, 2500);
        });

        $('#modal-hapus').on('show.bs.modal', function (e) {
            var button = $(e.relatedTarget);
            var id = button.data('id');
            var modal = $(this);

            $.ajax({
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
            });
        });

        $('#modal-baca').on('show.bs.modal', function (e) {
            var button = $(e.relatedTarget);
            var id = button.data('id');
            var modal = $(this);

            $.ajax({
                type: "POST",
                url: "<?=site_url('laporan/getlaporanwith');?>",
                data: { csrf_test_name: csrf_token, id: id },
                cache: false,
                success: function (data) {
                    var obj = $.parseJSON(data);
                    //console.log(data);
                    modal.find('.baca-isi').html(obj.berkas_pesan);
                    modal.find('.baca-tanggal').html(obj.berkas_waktu);
                    modal.find('.baca-tipenama').html(obj.tipelaporan_nama);
                    modal.find('.baca-tipeteks').html(obj.tipelaporan_teks);
                    modal.find('.baca-uploader').html(obj.user_login);
                    modal.find('.baca-status').html(obj.Lstatus);
                    modal.find('.baca-judul').html(obj.pen_judul);
                    modal.find('.baca-topik').html(obj.topik_nama);
                    modal.find('.baca-ketua').html(obj.dosen_nama);
                    modal.find('.baca-tingkat').html(obj.Tingkat);
                    modal.find('#baca-id').val(obj.ID);
                    var btn = $('#btn-download');
                    btn.data("id",obj.ID);
                },
                error: function(err) {
                    console.log(err);
                }
            });
        });

        $.fn.dataTable.TableTools.defaults.aButtons = [ 
          "xls", 
          {
              "sExtends": "pdf",
              "sPdfOrientation": "landscape",
              "sPdfMessage": "data di-generate pada <?=date('d-m-Y H:i:s',now());?>"
          }, 
          "print" 
        ];

        var tberita = $("#tberita").DataTable({
            "processing": true,
            "ajax": {
              "url" : "<?=site_url('berita/getberita');?>",
              "type" : "POST",
              "data": { csrf_test_name : csrf_token }
            },
            "deferRender": true,
            "autoWidth": false,
            "order": [[ 3, "desc" ]],
            "columns": [
              { "data": "dosen_nama", "width": "15%" },
              { "data": "isi" },
              { "data": "pen_judul" },
              { "data": "berkas_waktu", "width": "10%" },
              { "data": "Lstatus" },
              { "data": "Lopsi", "searchable": false, "sortable": false, "width": "10%" },
            ],

        });

        var tbtipe = $("#tbtipe").DataTable({
            "processing": true,
            "ajax": {
              "url" : "<?=site_url('laporan/getlaporan');?>",
              "type" : "POST",
              "data": { csrf_test_name : csrf_token, tipe : '<?=base64_encode(4)?>' }
            },
            "deferRender": true,
            "autoWidth": false,
            "order": [[ 3, "desc" ]],
            "columns": [
              { "data": "dosen_nama", "width": "15%" },
              { "data": "isi" },
              { "data": "pen_judul" },
              { "data": "berkas_waktu", "width": "10%" },
              { "data": "Lstatus" },
              { "data": "Lopsi", "searchable": false, "sortable": false, "width": "10%" },
            ],

        });

        var k = new $.fn.dataTable.TableTools( tblaporanK );

        $( k.fnContainer() ).insertBefore('#tblaporanK_wrapper');

        $( '.btn-tanggal-k' ).insertBefore('#tblaporanK_wrapper');
        //$( '#btn-tanggal-text' ).insertBefore('#tblaporanK_wrapper');

        $(".btn-tanggal-k").datepicker({
            format: "yyyy",
            autoclose: true,
            todayHighlight: true,
            startView:1,
            minViewMode:2,
        }).on('changeDate', function(ev){
            $(".btn-tanggal-text-k").html("Tahun " + ev.format());
            tblaporanK
              .columns(3).search( ev.format() )
              .draw();

            
            //tblaporanK.fnFilterAll( ev.format() );
            //alert( "Anda memilih tahun " + ev.format() );
        });

        // simpan laporan
        $('#btn-simpan').click(function(){
            $('#form-tambah').submit();
            $('#btn-simpan').addClass('disabled');
        });

        // baca semua laporan
        $('#btn-bacasemua').click(function(){
            $('#form-bacasemua').submit();
            $('#btn-bacasemua').addClass('disabled');
        });

        // hapus laporan
        $('#btn-hapus').click(function(){
            $('#form-hapus').submit();
            $('#btn-hapus').addClass('disabled');
        });

        // hapus semua laporan
        $('#btn-hapusemua').click(function(){
            $('#form-hapusemua').submit();
            $('#btn-hapusemua').addClass('disabled');
        });

        $('#form-tambah').submit(function(){
            // create a FormData Object using your form dom element
            var form = new FormData(document.getElementById('form-tambah'));
            //append files
            var file = document.getElementById('tambah-file').files[0];
            if (file) {   
              form.append('tambah-file', file);
            }
            //alert(form);
            $.ajax({
                url:"<?=site_url('laporan/tambah')?>",
                type:"POST",
                data:form,
                cache: false,
                contentType: false, //must, tell jQuery not to process the data
                processData: false, //must, tell jQuery not to set contentType
                success:function(respon){
                    var obj = $.parseJSON(respon);
                    if(obj.status==1){
                        $('#form-pesan-tambah').html(pesan_succ(obj.pesan));
                        setTimeout(function(){$('#form-pesan-tambah').html('')}, 5000);
                        setTimeout(function(){$('#modal-tambah').modal('hide')}, 2500);
                        setTimeout(function(){ $('#btn-refresh').trigger('click'); }, 2500);
                    }else{
                        $('#form-pesan-tambah').html(pesan_err(obj.pesan));
                        setTimeout(function(){$('#form-pesan-tambah').html('')}, 7000);
                    }
                    
                    $('#btn-simpan').removeClass('disabled');
                }
            });
            return false;
        });

        $('#form-bacasemua').submit(function(){
            $.ajax({
                url:"<?=site_url('laporan/bacasemua')?>",
                type:"POST",
                data:$('#form-bacasemua').serialize(),
                cache: false,
                success:function(respon){
                    var obj = $.parseJSON(respon);
                    if(obj.status==1){
                        $('#form-pesan-bacasemua').html(pesan_succ(obj.pesan));
                        setTimeout(function(){$('#form-pesan-bacasemua').html('')}, 5000);
                        setTimeout(function(){$('#modal-bacasemua').modal('hide')}, 2500);
                        setTimeout(function(){ location.reload(); }, 2500);
                    }else{
                        $('#form-pesan-bacasemua').html(pesan_err(obj.pesan));
                        setTimeout(function(){$('#form-pesan-bacasemua').html('')}, 7000);
                    }
                    
                    $('#btn-bacasemua').removeClass('disabled');
                }
            });
            return false;
        });

        $('#form-hapus').submit(function(){
            $.ajax({
                url:"<?=site_url('laporan/hapus')?>",
                type:"POST",
                data:$('#form-hapus').serialize(),
                cache: false,
                success:function(respon){
                    var obj = $.parseJSON(respon);
                    if(obj.status==1){
                        $('#form-pesan-hapus').html(pesan_succ(obj.pesan));
                        setTimeout(function(){$('#form-pesan-hapus').html('')}, 5000);
                        setTimeout(function(){$('#modal-hapus').modal('hide')}, 2500);
                        setTimeout(function(){ $('#btn-refresh').trigger('click'); }, 2500);
                    }else{
                        $('#form-pesan-hapus').html(pesan_err(obj.pesan));
                        setTimeout(function(){$('#form-pesan-hapus').html('')}, 7000);
                    }
                    
                    $('#btn-hapus').removeClass('disabled');
                }
            });
            return false;
        });

        $('#form-hapusemua').submit(function(){
            $.ajax({
                url:"<?=site_url('laporan/hapusemua')?>",
                type:"POST",
                data:$('#form-hapusemua').serialize(),
                cache: false,
                success:function(respon){
                    var obj = $.parseJSON(respon);
                    if(obj.status==1){
                        $('#form-pesan-hapusemua').html(pesan_succ(obj.pesan));
                        setTimeout(function(){$('#form-pesan-hapusemua').html('')}, 5000);
                        setTimeout(function(){$('#modal-hapusemua').modal('hide')}, 2500);
                        setTimeout(function(){ location.reload(); }, 2500);
                    }else{
                        $('#form-pesan-hapusemua').html(pesan_err(obj.pesan));
                        setTimeout(function(){$('#form-pesan-hapusemua').html('')}, 7000);
                    }
                    
                    $('#btn-hapusemua').removeClass('disabled');
                }
            });
            return false;
        });

        $('#btn-refresh').click(function(){
            refresh_jumlah();
            tblaporanK.ajax.reload();
            tblaporanAn.ajax.reload();
            tblaporanAk.ajax.reload();
            tblaporanLg.ajax.reload();
            return false;
        });

      });
    </script>
    
  </body>
</html>
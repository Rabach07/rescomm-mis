        <!-- Main content -->
        <section class="content">
          <!-- Info boxes -->
          <div class="row">
            <div class="col-md-8 col-sm-6 col-xs-12">

              <div class="nav-tabs-custom danger">
                <ul class="nav nav-tabs">
                  <li class="active"><a href="#tab_1" data-toggle="tab"><b>Baru</b></a></li>
                  <li><a href="#tab_2" data-toggle="tab"><b>Lama</b></a></li>
                  <li class="dropdown pull-right">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#"><i class="fa fa-gear"></i>
                      Opsi <span class="caret"></span>
                    </a>
                    <ul class="dropdown-menu">
                      <?php if($adanotif) { ?> 
                      <li role="presentation"><a role="menuitem" tabindex="-1" href="#" id="btn-refresh" class="text-blue"><i class="fa fa-refresh"></i>Refresh</a></li>
                      <?php } else { ?>
                      <li role="presentation"><a role="menuitem" tabindex="-1" href="" id="btn-refresh" class="text-blue"><i class="fa fa-refresh"></i>Refresh</a></li>
                      <?php } ?>    
                      <?php if($adaunread) { ?><li role="presentation"><a role="menuitem" tabindex="-1" href="#" id="btn-baca-semua" class="text-green"><i class="fa fa-check-circle"></i>Tandai Sudah Dibaca</a></li><?php } ?>
                      <?php if($adanotif) { ?><li role="presentation"><a role="menuitem" tabindex="-1" href="#" id="btn-hapus-semua" class="text-red"><i class="fa fa-close"></i>Hapus Semua</a></li><?php } ?>
                      <li role="presentation" class="divider"></li>
                      <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Arsipkan</a></li>
                    </ul>
                  </li>
                </ul>
                <div class="tab-content">
                  <div class="tab-pane active" id="tab_1">

                    <table id="tblnotifikasi" class="table table-bordered table-striped table-hover dt-responsive" cellspacing="0" width="100%">
                      <thead>
                        <tr>
                          <th>Notifikasi</th>
                          <th>Tanggal</th>
                          <th>Opsi</th>
                        </tr>
                      </thead>
                      <tbody></tbody>
                      <tfoot>
                        <tr>
                          <th>Menu</th>
                          <th>Tanggal</th>
                          <th>Opsi</th>
                        </tr>
                      </tfoot>
                    </table>

                  </div><!-- /.tab-pane -->
                  <div class="tab-pane" id="tab_2">
                    
                    <table id="tblnotifikasilama" class="table table-bordered table-striped table-hover dt-responsive" cellspacing="0" width="100%">
                      <thead>
                        <tr>
                          <th>Notifikasi</th>
                          <th>Tanggal</th>
                          <th>Status</th>
                          <th>Opsi</th>
                        </tr>
                      </thead>
                      <tbody></tbody>
                      <tfoot>
                        <tr>
                          <th>Menu</th>
                          <th>Tanggal</th>
                          <th>Status</th>
                          <th>Opsi</th>
                        </tr>
                      </tfoot>
                    </table>

                  </div><!-- /.tab-pane -->
                </div><!-- /.tab-content -->
              </div>

            </div><!-- /.col -->

            <div class="col-md-4 col-sm-6 col-xs-12">


              <div class="info-box bg-aqua">
                <span class="info-box-icon"><i class="fa fa-bell-o"></i></span>
                <div class="info-box-content">
                  <span class="info-box-text">Total Notifikasi</span>
                  <span class="info-box-number" id="boxnotifikasi">0</span>
                  <div class="progress">
                    <div class="progress-bar" style="width: 100%"></div>
                  </div>
                </div><!-- /.info-box-content -->
              </div><!-- /.info-box -->

              <div class="info-box bg-green">
                <span class="info-box-icon"><i class="icon ion-checkmark-circled"></i></span>
                <div class="info-box-content">
                  <span class="info-box-text">Sudah Dibaca</span>
                  <span class="info-box-number" id="boxbaca">0</span>
                  <div class="progress">
                    <div class="progress-bar" style="width: 100%"></div>
                  </div>
                </div><!-- /.info-box-content -->
              </div><!-- /.info-box -->

              <div class="info-box bg-red">
                <span class="info-box-icon"><i class="icon ion-information-circled"></i></span>
                <div class="info-box-content">
                  <span class="info-box-text">Belum Dibaca</span>
                  <span class="info-box-number" id="boxbelum">0</span>
                  <div class="progress">
                    <div class="progress-bar" style="width: 100%"></div>
                  </div>
                </div><!-- /.info-box-content -->
              </div><!-- /.info-box -->



            </div><!-- /.col -->

            <!-- fix for small devices only -->
            <div class="clearfix visible-sm-block"></div>
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

    <!-- Modal Baca Notifikasi -->
    <div class="modal modal-primary fade" id="modal-baca-notifikasi" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            <h4 class="modal-title"><i class="fa fa-bell-o"></i> Baca Notifikasi </h4>
          </div>
          <div class="modal-body">
            <div class="container-fluid">
              <span id="form-pesan-baca-notifikasi"></span>
              <?php echo form_open('notifikasi/baca', 'id="form-baca-notifikasi"') ?>
                <div class="row">
                  <div class="col-xs-12">
                    <input type="hidden" id="baca-id" name="baca-id" readonly="" />
                    <p><b>Isi notifikasi</b></p>
                    <div class="callout callout-primary">
                      <p>Isi : <span class="baca-isi"> </span></p>
                      <p>Tanggal : <span class="baca-tanggal"> </span></p>
                      <p>Tipe : <span class="baca-tipe"> </span></p>
                    </div>
                    <p>Apakah Anda ingin menandai pesan notifikasi ini telah dibaca ?</p>
                  </div>
                </div>
              <?php echo form_close(); ?>
            </div><!-- /.box-body -->
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-danger" data-dismiss="modal"><i class="fa fa-times"></i> Tutup</button>
            <button id="btn-baca-notifikasi" type="button" class="btn btn-primary"><i class="fa fa-check"></i> Ya, Tandai</button>
          </div>
        </div>
      </div>
    </div>
    <!-- Modal Baca Notifikasi -->

    <!-- Modal Baca Semua Notifikasi -->
    <div class="modal modal-primary fade" id="modal-bacasemua-notifikasi" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            <h4 class="modal-title"><i class="fa fa-bell-o"></i> Baca Semua Notifikasi </h4>
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
    <!-- Modal Baca Semua Notifikasi -->

    <!-- Modal Hapus Notifikasi -->
    <div class="modal modal-danger fade" id="modal-hapus-notifikasi" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            <h4 class="modal-title"><i class="fa fa-warning"></i> Hapus Data Notifikasi </h4>
          </div>
          <div class="modal-body">
            <span id="form-pesan-hapus-notifikasi"></span>
            <?php echo form_open('notifikasi/hapus', 'id="form-hapus-notifikasi"') ?>
            <div class="box-body">
              <div class="row">
                <div class="col-md-12">
                  <input type="hidden" id="hapus-id" name="hapus-id" readonly="" />
                  <p>Apakah Anda yakin ingin menghapus Data notifikasi berikut ?</p>
                  <div class="callout callout-danger">
                    <p>Isi : <span class="hapus-isi"> </span></p>
                    <p>Tanggal : <span class="hapus-tanggal"> </span></p>
                    <p>Tipe : <span class="hapus-tipe"> </span></p>
                    <p>Status : <span class="hapus-status"> </span></p>
                  </div>
                </div>
              </div>
            </div>
            <?php echo form_close(); ?>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-danger" data-dismiss="modal"><i class="fa fa-times"></i> Batal</button>
            <button id="btn-hapus-notifikasi" type="button" class="btn btn-primary"><i class="fa fa-check"></i> Ya, Hapus</button>
          </div>
        </div>
      </div>
    </div>
    <!-- Modal Hapus Notifikasi -->

    <!-- Modal Hapus Semua Notifikasi -->
    <div class="modal modal-danger fade" id="modal-hapusemua-notifikasi" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            <h4 class="modal-title"><i class="fa fa-warning"></i> Hapus Semua Data Notifikasi </h4>
          </div>
          <div class="modal-body">
            <span id="form-pesan-hapusemua-notifikasi"></span>
            <?php echo form_open('notifikasi/hapusemua', 'id="form-hapusemua-notifikasi"') ?>
            <div class="box-body">
              <div class="row">
                <div class="col-md-12">
                  <p>Apakah Anda yakin ingin menghapus Semua Data notifikasi ?</p>
                </div>
              </div>
            </div>
            <?php echo form_close(); ?>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-danger" data-dismiss="modal"><i class="fa fa-times"></i> Batal</button>
            <button id="btn-hapusemua-notifikasi" type="button" class="btn btn-primary"><i class="fa fa-check"></i> Ya, Hapus Semua</button>
          </div>
        </div>
      </div>
    </div>
    <!-- Modal Hapus Semua Notifikasi -->

    <!-- Perpus App -->
    <script src="<?=base_url('public/dist/js/app.min.js');?>" type="text/javascript"></script>
    <!-- page script -->
    <script type="text/javascript">
      function refresh_jumlah(){
        $.getJSON("<?=site_url('notifikasi/get_databox')?>", function(obj) {
            $("#boxnotifikasi").html(obj.boxnotifikasi);
            $("#boxbaca").html(obj.boxbaca);
            $("#boxbelum").html(obj.boxbelum);
        });
      }

      $(document).ready(function() {
        refresh_jumlah();
        var csrf_token = '<?=$this->security->get_csrf_hash();?>';

        $('#btn-baca-semua').click(function(){
            $('#modal-bacasemua-notifikasi').modal('show');
            return false;
        });

        $('#btn-hapus-semua').click(function(){
            $('#modal-hapusemua-notifikasi').modal('show');
            return false;
        });

        $('#modal-hapus-notifikasi').on('show.bs.modal', function (e) {
            var button = $(e.relatedTarget);
            var id = button.data('id');
            var modal = $(this);

            $.ajax({
                type: "POST",
                url: "<?=site_url('notifikasi/getnotifwith');?>",
                data: { csrf_test_name: csrf_token, id: id },
                cache: false,
                success: function (data) {
                    var obj = $.parseJSON(data);
                    
                    modal.find('.hapus-isi').html(obj.notif_isi);
                    modal.find('.hapus-tanggal').html(obj.notif_tanggal);
                    modal.find('.hapus-tipe').html(obj.tipenotif_teks);
                    modal.find('.hapus-status').html(obj.Nstatus);
                    modal.find('#hapus-id').val(obj.ID);
                },
                error: function(err) {
                    console.log(err);
                }
            });
        });

        $('#modal-baca-notifikasi').on('show.bs.modal', function (e) {
            var button = $(e.relatedTarget);
            var id = button.data('id');
            var modal = $(this);

            $.ajax({
                type: "POST",
                url: "<?=site_url('notifikasi/getnotifwith');?>",
                data: { csrf_test_name: csrf_token, id: id },
                cache: false,
                success: function (data) {
                    var obj = $.parseJSON(data);
                    
                    modal.find('.baca-isi').html(obj.notif_isi);
                    modal.find('.baca-tanggal').html(obj.notif_tanggal);
                    modal.find('.baca-tipe').html(obj.tipenotif_teks);
                    modal.find('#baca-id').val(obj.ID);
                },
                error: function(err) {
                    console.log(err);
                }
            });
        });

        var tblnotifikasi = $("#tblnotifikasi").DataTable({
            "processing": true,
            "ajax": {
              "url" : "<?=site_url('notifikasi/getnotifikasi');?>",
              "type" : "POST",
              "data": function ( d ) { d.csrf_test_name = csrf_token; }
            },
            "deferRender": true,
            "autoWidth": false,
            "order": [[ 0, "desc" ]],
            "columns": [
              { "data": "Nisi" },
              { "data": "notif_tanggal" },
              { "data": "Nopsi", "searchable": false, "sortable": false, "width": "8%" },
            ],

        });

        var tblnotifikasilama = $("#tblnotifikasilama").DataTable({
            "processing": true,
            "ajax": {
              "url" : "<?=site_url('notifikasi/getnotifikasilama');?>",
              "type" : "POST",
              "data": function ( d ) { d.csrf_test_name = csrf_token; }
            },
            "deferRender": true,
            "autoWidth": false,
            "order": [[ 0, "desc" ]],
            "columns": [
              { "data": "Nisi" },
              { "data": "notif_tanggal" },
              { "data": "Nstatus" },
              { "data": "Nopsi", "searchable": false, "sortable": false, "width": "8%" },
            ],

        });

        /*baca notifikasi*/
        $('#btn-baca-notifikasi').click(function(){
            $('#form-baca-notifikasi').submit();
            $('#btn-baca-notifikasi').addClass('disabled');
        });

        /*baca semua notifikasi*/
        $('#btn-bacasemua-notifikasi').click(function(){
            $('#form-bacasemua-notifikasi').submit();
            $('#btn-bacasemua-notifikasi').addClass('disabled');
        });

        /*hapus notifikasi*/
        $('#btn-hapus-notifikasi').click(function(){
            $('#form-hapus-notifikasi').submit();
            $('#btn-hapus-notifikasi').addClass('disabled');
        });

        /*hapus semua notifikasi*/
        $('#btn-hapusemua-notifikasi').click(function(){
            $('#form-hapusemua-notifikasi').submit();
            $('#btn-hapusemua-notifikasi').addClass('disabled');
        });

        $('#form-baca-notifikasi').submit(function(){
            $.ajax({
                url:"<?=site_url('notifikasi/baca')?>",
                type:"POST",
                data:$('#form-baca-notifikasi').serialize(),
                cache: false,
                success:function(respon){
                    var obj = $.parseJSON(respon);
                    if(obj.status==1){
                        $('#form-pesan-baca-notifikasi').html(pesan_succ(obj.pesan));
                        setTimeout(function(){$('#form-pesan-baca-notifikasi').html('')}, 5000);
                        setTimeout(function(){$('#modal-baca-notifikasi').modal('hide')}, 2500);
                        setTimeout(function(){ refresh_jumlah(); tblnotifikasi.ajax.reload( null, false ); tblnotifikasilama.ajax.reload( null, false ); }, 2500);
                    }else{
                        $('#form-pesan-baca-notifikasi').html(pesan_err(obj.pesan));
                        setTimeout(function(){$('#form-pesan-baca-notifikasi').html('')}, 7000);
                    }
                    
                    $('#btn-baca-notifikasi').removeClass('disabled');
                }
            });
            return false;
        });

        $('#form-bacasemua-notifikasi').submit(function(){
            $.ajax({
                url:"<?=site_url('notifikasi/bacasemua')?>",
                type:"POST",
                data:$('#form-bacasemua-notifikasi').serialize(),
                cache: false,
                success:function(respon){
                    var obj = $.parseJSON(respon);
                    if(obj.status==1){
                        $('#form-pesan-bacasemua-notifikasi').html(pesan_succ(obj.pesan));
                        setTimeout(function(){$('#form-pesan-bacasemua-notifikasi').html('')}, 5000);
                        setTimeout(function(){$('#modal-bacasemua-notifikasi').modal('hide')}, 2500);
                        setTimeout(function(){ location.reload(); }, 2500);
                    }else{
                        $('#form-pesan-bacasemua-notifikasi').html(pesan_err(obj.pesan));
                        setTimeout(function(){$('#form-pesan-bacasemua-notifikasi').html('')}, 7000);
                    }
                    
                    $('#btn-bacasemua-notifikasi').removeClass('disabled');
                }
            });
            return false;
        });

        $('#form-hapus-notifikasi').submit(function(){
            $.ajax({
                url:"<?=site_url('notifikasi/hapus')?>",
                type:"POST",
                data:$('#form-hapus-notifikasi').serialize(),
                cache: false,
                success:function(respon){
                    var obj = $.parseJSON(respon);
                    if(obj.status==1){
                        $('#form-pesan-hapus-notifikasi').html(pesan_succ(obj.pesan));
                        setTimeout(function(){$('#form-pesan-hapus-notifikasi').html('')}, 5000);
                        setTimeout(function(){$('#modal-hapus-notifikasi').modal('hide')}, 2500);
                        setTimeout(function(){ refresh_jumlah(); tblnotifikasi.ajax.reload( null, false ); tblnotifikasilama.ajax.reload( null, false ); }, 2500);
                    }else{
                        $('#form-pesan-hapus-notifikasi').html(pesan_err(obj.pesan));
                        setTimeout(function(){$('#form-pesan-hapus-notifikasi').html('')}, 7000);
                    }
                    
                    $('#btn-hapus-notifikasi').removeClass('disabled');
                }
            });
            return false;
        });

        $('#form-hapusemua-notifikasi').submit(function(){
            $.ajax({
                url:"<?=site_url('notifikasi/hapusemua')?>",
                type:"POST",
                data:$('#form-hapusemua-notifikasi').serialize(),
                cache: false,
                success:function(respon){
                    var obj = $.parseJSON(respon);
                    if(obj.status==1){
                        $('#form-pesan-hapusemua-notifikasi').html(pesan_succ(obj.pesan));
                        setTimeout(function(){$('#form-pesan-hapusemua-notifikasi').html('')}, 5000);
                        setTimeout(function(){$('#modal-hapusemua-notifikasi').modal('hide')}, 2500);
                        setTimeout(function(){ location.reload(); }, 2500);
                    }else{
                        $('#form-pesan-hapusemua-notifikasi').html(pesan_err(obj.pesan));
                        setTimeout(function(){$('#form-pesan-hapusemua-notifikasi').html('')}, 7000);
                    }
                    
                    $('#btn-hapusemua-notifikasi').removeClass('disabled');
                }
            });
            return false;
        });

        $('#btn-refresh').click(function(){
            refresh_jumlah();
            tblnotifikasi.ajax.reload();
            tblnotifikasilama.ajax.reload();
        });

      });
    </script>
    
  </body>
</html>
        <!-- Main content -->
        <section class="content">
          
          <!-- Info boxes -->
          <div class="row">
            <div class="col-md-3 col-sm-6 col-xs-12">
              <div class="info-box">
                <span class="info-box-icon bg-aqua"><i class="fa fa-inbox"></i></span>
                <div class="info-box-content">
                  <span class="info-box-text">Laporan Masuk</span>
                  <span class="info-box-number" id="boxlaporan">0</span>
                </div><!-- /.info-box-content -->
              </div><!-- /.info-box -->
            </div><!-- /.col -->
            <div class="col-md-3 col-sm-6 col-xs-12">
              <div class="info-box">
                <span class="info-box-icon bg-red"><i class="fa fa-tasks"></i></span>
                <div class="info-box-content">
                  <span class="info-box-text">Kemajuan</span>
                  <span class="info-box-number" id="boxkemajuan">0</span>
                </div><!-- /.info-box-content -->
              </div><!-- /.info-box -->
            </div><!-- /.col -->

            <!-- fix for small devices only -->
            <div class="clearfix visible-sm-block"></div>

            <div class="col-md-3 col-sm-6 col-xs-12">
              <div class="info-box">
                <span class="info-box-icon bg-green"><i class="fa fa-usd"></i></span>
                <div class="info-box-content">
                  <span class="info-box-text">Anggaran</span>
                  <span class="info-box-number" id="boxanggaran">0</span>
                </div><!-- /.info-box-content -->
              </div><!-- /.info-box -->
            </div><!-- /.col -->
            <div class="col-md-3 col-sm-6 col-xs-12">
              <div class="info-box">
                <span class="info-box-icon bg-orange"><i class="fa fa-book"></i></span>
                <div class="info-box-content">
                  <span class="info-box-text">Akhir</span>
                  <span class="info-box-number" id="boxakhir">0</span>
                </div><!-- /.info-box-content -->
              </div><!-- /.info-box -->
            </div><!-- /.col -->
          </div><!-- /.row -->

          <div class="row">
            <div class="col-lg-12 col-md-12">
              <div class="box box-solid">
                <div class="box-header with-border">
                  <h3 class="box-title">Rekap Per Bulan</h3>
                  <div class="box-tools pull-right">
                    <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                    <button class="btn btn-box-tool daterange pull-right" data-toggle="tooltip" title="" data-original-title="Date range"><i class="fa fa-calendar"></i></button>
                    <div class="btn-group">
                      <button class="btn btn-box-tool dropdown-toggle" data-toggle="dropdown"><i class="fa fa-wrench"></i></button>
                      <ul class="dropdown-menu" role="menu">
                        <li><a href="#">Action</a></li>
                        <li><a href="#">Another action</a></li>
                        <li><a href="#">Something else here</a></li>
                        <li class="divider"></li>
                        <li><a href="#">Separated link</a></li>
                      </ul>
                    </div>
                  </div>
                </div><!-- /.box-header -->
                <div class="box-body">
                  <div class="row">
                    <div class="col-md-8">
                      <p class="text-center">
                        <strong>Rekap Tahun 2015</strong>
                      </p>
                      <div class="chart">
                        <!-- Sales Chart Canvas -->
                        <canvas id="salesChart" height="210" width="702" style="width: 702px; height: 210px;"></canvas>
                      </div><!-- /.chart-responsive -->
                    </div><!-- /.col -->
                    <div class="col-md-4">
                      <p class="text-center">
                        <strong>Keterangan</strong>
                      </p>
                      <div class="progress-group">
                        <span class="progress-text">Laporan Masuk</span>
                        <span class="progress-number"><b>50</b>/150</span>
                        <div class="progress sm">
                          <div class="progress-bar progress-bar-aqua" style="width: 40%"></div>
                        </div>
                      </div><!-- /.progress-group -->
                      <div class="progress-group">
                        <span class="progress-text">Laporan Kemajuan</span>
                        <span class="progress-number"><b>20</b>/50</span>
                        <div class="progress sm">
                          <div class="progress-bar progress-bar-red" style="width: 30%"></div>
                        </div>
                      </div><!-- /.progress-group -->
                      <div class="progress-group">
                        <span class="progress-text">Laporan Anggaran</span>
                        <span class="progress-number"><b>10</b>/50</span>
                        <div class="progress sm">
                          <div class="progress-bar progress-bar-green" style="width: 80%"></div>
                        </div>
                      </div><!-- /.progress-group -->
                      <div class="progress-group">
                        <span class="progress-text">Laporan Akhir</span>
                        <span class="progress-number"><b>0</b>/50</span>
                        <div class="progress sm">
                          <div class="progress-bar progress-bar-yellow" style="width: 0%"></div>
                        </div>
                      </div><!-- /.progress-group -->
                    </div><!-- /.col -->
                  </div><!-- /.row -->
                </div><!-- ./box-body -->
              </div><!-- /.box -->
            </div><!-- /.col -->
          </div>

          <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">

              <div class="nav-tabs-custom danger">
                <ul class="nav nav-tabs">
                  <li class="active"><a href="#tab_1" data-toggle="tab"><b>Kemajuan</b></a></li>
                  <li><a href="#tab_2" data-toggle="tab"><b>Anggaran</b></a></li>
                  <li><a href="#tab_3" data-toggle="tab"><b>Akhir</b></a></li>
                  <li class="dropdown pull-right">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#"><i class="fa fa-gear"></i>
                      Opsi <span class="caret"></span>
                    </a>
                    <ul class="dropdown-menu">
                      <?php if($adalaporan) { ?> 
                      <li role="presentation"><a role="menuitem" tabindex="-1" href="#" id="btn-refresh" class="text-blue"><i class="fa fa-refresh"></i>Refresh</a></li>
                      <?php } else { ?>
                      <li role="presentation"><a role="menuitem" tabindex="-1" href="" id="btn-refresh" class="text-blue"><i class="fa fa-refresh"></i>Refresh</a></li>
                      <?php } ?>    
                      <?php if($adalaporan) { ?><li role="presentation"><a role="menuitem" tabindex="-1" href="#" id="btn-hapus-semua" class="text-red"><i class="fa fa-close"></i>Hapus Semua</a></li><?php } ?>
                      <li role="presentation" class="divider"></li>
                      <li role="presentation"><a role="menuitem" tabindex="-1" href="#" id="btn-tambah" class="text-green"><i class="fa fa-plus"></i>Tambah Data</a></li>
                      <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Arsipkan</a></li>
                    </ul>
                  </li>
                </ul>
                <div class="tab-content">
                  <div class="tab-pane active" id="tab_1">

                    <table id="tblaporanK" class="table table-bordered table-striped table-hover dt-responsive" cellspacing="0" width="100%">
                      <thead>
                        <tr>
                          <th>Nama</th>
                          <th>Pesan</th>
                          <th>Penelitian</th>
                          <th>Waktu</th>
                          <th>Status</th>
                          <th>Opsi</th>
                        </tr>
                      </thead>
                      <tbody></tbody>
                      <tfoot>
                        <tr>
                          <th>Nama</th>
                          <th>Pesan</th>
                          <th>Penelitian</th>
                          <th>Waktu</th>
                          <th>Status</th>
                          <th>Opsi</th>
                        </tr>
                      </tfoot>
                    </table>

                  </div><!-- /.tab-pane -->
                  <div class="tab-pane" id="tab_2">
                    
                    <table id="tblaporanAn" class="table table-bordered table-striped table-hover dt-responsive" cellspacing="0" width="100%">
                      <thead>
                        <tr>
                          <th>Nama</th>
                          <th>Pesan</th>
                          <th>Penelitian</th>
                          <th>Waktu</th>
                          <th>Status</th>
                          <th>Opsi</th>
                        </tr>
                      </thead>
                      <tbody></tbody>
                      <tfoot>
                        <tr>
                          <th>Nama</th>
                          <th>Pesan</th>
                          <th>Penelitian</th>
                          <th>Waktu</th>
                          <th>Status</th>
                          <th>Opsi</th>
                        </tr>
                      </tfoot>
                    </table>

                  </div><!-- /.tab-pane -->
                  <div class="tab-pane" id="tab_3">
                    
                    <table id="tblaporanAk" class="table table-bordered table-striped table-hover dt-responsive" cellspacing="0" width="100%">
                      <thead>
                        <tr>
                          <th>Nama</th>
                          <th>Pesan</th>
                          <th>Penelitian</th>
                          <th>Waktu</th>
                          <th>Status</th>
                          <th>Opsi</th>
                        </tr>
                      </thead>
                      <tbody></tbody>
                      <tfoot>
                        <tr>
                          <th>Nama</th>
                          <th>Pesan</th>
                          <th>Penelitian</th>
                          <th>Waktu</th>
                          <th>Status</th>
                          <th>Opsi</th>
                        </tr>
                      </tfoot>
                    </table>

                  </div><!-- /.tab-pane -->
                </div><!-- /.tab-content -->
              </div>

            </div><!-- /.col -->

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
    <div class="modal modal-primary fade" id="modal-baca-laporan" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            <h4 class="modal-title"><i class="fa fa-book"></i> Baca Laporan </h4>
          </div>
          <div class="modal-body">
            <div class="container-fluid">
              <span id="form-pesan-baca-laporan"></span>
              <?php echo form_open('laporan/baca', 'id="form-baca-laporan"') ?>
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
            <button id="btn-download-laporan" type="button" class="btn btn-primary"><i class="fa fa-cloud-download"></i> Download</button>
          </div>
        </div>
      </div>
    </div>
    <!-- Modal Baca Laporan -->

    <!-- Modal Tambah Laporan -->
    <div class="modal modal-primary fade" id="modal-tambah-laporan" tabindex="-1" role="dialog" data-backdrop="static" aria-hidden="true">
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
                      <div class="input-group">
                        <span class="input-group-addon">Penelitian:</span>
                        <input type="hidden" id="tambah-pen-id" name="tambah-pen-id" readonly="" required >
                        <input type="text" class="form-control" id="tambah-pen" name="tambah-pen" placeholder="Judul Penelitian" />
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
    <div class="modal modal-danger fade" id="modal-hapus-laporan" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            <h4 class="modal-title"><i class="fa fa-warning"></i> Hapus Data Laporan </h4>
          </div>
          <div class="modal-body">
            <span id="form-pesan-hapus-laporan"></span>
            <?php echo form_open('laporan/hapus', 'id="form-hapus-laporan"') ?>
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
            <button id="btn-hapus-laporan" type="button" class="btn btn-primary"><i class="fa fa-check"></i> Ya, Hapus</button>
          </div>
        </div>
      </div>
    </div>
    <!-- Modal Hapus Laporan -->

    <!-- Modal Hapus Semua Laporan -->
    <div class="modal modal-danger fade" id="modal-hapusemua-laporan" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            <h4 class="modal-title"><i class="fa fa-warning"></i> Hapus Semua Data Laporan </h4>
          </div>
          <div class="modal-body">
            <span id="form-pesan-hapusemua-laporan"></span>
            <?php echo form_open('laporan/hapusemua', 'id="form-hapusemua-laporan"') ?>
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
            <button id="btn-hapusemua-laporan" type="button" class="btn btn-primary"><i class="fa fa-check"></i> Ya, Hapus Semua</button>
          </div>
        </div>
      </div>
    </div>
    <!-- Modal Hapus Semua Laporan -->
    
    <!-- Perpus App -->
    <script src="<?=base_url('public/dist/js/app.min.js');?>" type="text/javascript"></script>
    <!-- page script -->
    <script type="text/javascript">
      'use strict';
      $(function () {

        /* ChartJS
         * -------
         * Here we will create a few charts using ChartJS
         */

        //-----------------------
        //- MONTHLY SALES CHART -
        //-----------------------

        // Get context with jQuery - using jQuery's .get() method.
        var salesChartCanvas = $("#salesChart").get(0).getContext("2d");
        // This will get the first returned node in the jQuery collection.
        var salesChart = new Chart(salesChartCanvas);

        var salesChartData = {
          labels: ["January", "February", "March", "April", "May", "June", "July"],
          datasets: [
            {
              label: "Electronics",
              fillColor: "rgb(210, 214, 222)",
              strokeColor: "rgb(210, 214, 222)",
              pointColor: "rgb(210, 214, 222)",
              pointStrokeColor: "#c1c7d1",
              pointHighlightFill: "#fff",
              pointHighlightStroke: "rgb(220,220,220)",
              data: [65, 59, 80, 81, 56, 55, 40]
            },
            {
              label: "Digital Goods",
              fillColor: "rgba(60,141,188,0.9)",
              strokeColor: "rgba(60,141,188,0.8)",
              pointColor: "#3b8bba",
              pointStrokeColor: "rgba(60,141,188,1)",
              pointHighlightFill: "#fff",
              pointHighlightStroke: "rgba(60,141,188,1)",
              data: [28, 48, 40, 19, 86, 27, 90]
            }
          ]
        };

        var salesChartOptions = {
          //Boolean - If we should show the scale at all
          showScale: true,
          //Boolean - Whether grid lines are shown across the chart
          scaleShowGridLines: false,
          //String - Colour of the grid lines
          scaleGridLineColor: "rgba(0,0,0,.05)",
          //Number - Width of the grid lines
          scaleGridLineWidth: 1,
          //Boolean - Whether to show horizontal lines (except X axis)
          scaleShowHorizontalLines: true,
          //Boolean - Whether to show vertical lines (except Y axis)
          scaleShowVerticalLines: true,
          //Boolean - Whether the line is curved between points
          bezierCurve: true,
          //Number - Tension of the bezier curve between points
          bezierCurveTension: 0.3,
          //Boolean - Whether to show a dot for each point
          pointDot: false,
          //Number - Radius of each point dot in pixels
          pointDotRadius: 4,
          //Number - Pixel width of point dot stroke
          pointDotStrokeWidth: 1,
          //Number - amount extra to add to the radius to cater for hit detection outside the drawn point
          pointHitDetectionRadius: 20,
          //Boolean - Whether to show a stroke for datasets
          datasetStroke: true,
          //Number - Pixel width of dataset stroke
          datasetStrokeWidth: 2,
          //Boolean - Whether to fill the dataset with a color
          datasetFill: true,
          //String - A legend template
          legendTemplate: "<ul class=\"<%=name.toLowerCase()%>-legend\"><% for (var i=0; i<datasets.length; i++){%><li><span style=\"background-color:<%=datasets[i].lineColor%>\"></span><%=datasets[i].label%></li><%}%></ul>",
          //Boolean - whether to maintain the starting aspect ratio or not when responsive, if set to false, will take up entire container
          maintainAspectRatio: false,
          //Boolean - whether to make the chart responsive to window resizing
          responsive: true
        };

        //Create the line chart
        salesChart.Line(salesChartData, salesChartOptions);

        //---------------------------
        //- END MONTHLY SALES CHART -
        //---------------------------
        // datepicker
        $('.daterange').daterangepicker(
          {
            ranges: {
              'Today': [moment(), moment()],
              'Yesterday': [moment().subtract('days', 1), moment().subtract('days', 1)],
              'Last 7 Days': [moment().subtract('days', 6), moment()],
              'Last 30 Days': [moment().subtract('days', 29), moment()],
              'This Month': [moment().startOf('month'), moment().endOf('month')],
              'Last Month': [moment().subtract('month', 1).startOf('month'), moment().subtract('month', 1).endOf('month')]
            },
            startDate: moment().subtract('days', 29),
            endDate: moment()
          },
        function (start, end) {
          alert("You chose: " + start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'));
        });

      });
    </script>
    <script type="text/javascript">
      function refresh_jumlah(){
        $.getJSON("<?=site_url('laporan/get_databox')?>", function(obj) {
            $("#boxlaporan").html(obj.boxlaporan);
            $("#boxkemajuan").html(obj.boxkemajuan);
            $("#boxanggaran").html(obj.boxanggaran);
            $("#boxakhir").html(obj.boxakhir);
        });
      }

      // $(function(){

      //   $("#tambah-pen").autocomplete({
      //     source: "<?=site_url('penelitian/getlist')?>" // path to the get_birds method
      //   });
      // });

      $(document).ready(function() {
        refresh_jumlah();
        var csrf_token = '<?=$this->security->get_csrf_hash();?>';

        $("#tambah-pen").autocomplete({
            source: function(request, response) {
                $.ajax({
                    url: "<?=site_url('penelitian/getlist')?>",
                    data: { term: $("#tambah-pen").val(), csrf_test_name: csrf_token },
                    dataType: "json",
                    type: "POST",
                    success: function(data){
                      //if(data.response === 'true'){
                        // var resp = $.map(data,function(obj){
                        //   return obj.tag;
                        // });

                        response(data);
                      //}
                    }
                });
            },
            select: function (event, ui) {
              // Set autocomplete element to display the label
              this.value = ui.item.label;

              // Store value in hidden field
              $('#tambah-pen-id').val(ui.item.value);

              // Prevent default behaviour
              return false;
            },
            //source: "<?=site_url('penelitian/getlist')?>",
            minLength: 2,
            autofocus: true
        });
        $( "#tambah-pen" ).autocomplete( "option", "appendTo", ".eventInsForm" );

        $('#btn-hapus-semua').click(function(){
            $('#modal-hapusemua-laporan').modal('show');
        });

        $('#btn-tambah').click(function(){
            $('#modal-tambah-laporan').modal('show');
        });

        $('#modal-hapus-laporan').on('show.bs.modal', function (e) {
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

        $('#modal-baca-laporan').on('show.bs.modal', function (e) {
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
                },
                error: function(err) {
                    console.log(err);
                }
            });
        });

        var tblaporanK = $("#tblaporanK").DataTable({
            "processing": true,
            "ajax": {
              "url" : "<?=site_url('laporan/getlaporan');?>",
              "type" : "POST",
              "data": { csrf_test_name : csrf_token, tipe : '<?=base64_encode(1)?>' }
            },
            "deferRender": true,
            "autoWidth": false,
            "order": [[ 3, "desc" ]],
            "columns": [
              { "data": "berkas_nama" },
              { "data": "isi" },
              { "data": "pen_judul" },
              { "data": "berkas_waktu" },
              { "data": "Lstatus" },
              { "data": "Lopsi", "searchable": false, "sortable": false, "width": "8%" },
            ],

        });

        var tblaporanAn = $("#tblaporanAn").DataTable({
            "processing": true,
            "ajax": {
              "url" : "<?=site_url('laporan/getlaporan');?>",
              "type" : "POST",
              "data": { csrf_test_name : csrf_token, tipe : '<?=base64_encode(3)?>' }
            },
            "deferRender": true,
            "autoWidth": false,
            "order": [[ 3, "desc" ]],
            "columns": [
              { "data": "berkas_nama" },
              { "data": "isi" },
              { "data": "pen_judul" },
              { "data": "berkas_waktu" },
              { "data": "Lstatus" },
              { "data": "Lopsi", "searchable": false, "sortable": false, "width": "8%" },
            ],

        });

        var tblaporanAk = $("#tblaporanAk").DataTable({
            "processing": true,
            "ajax": {
              "url" : "<?=site_url('laporan/getlaporan');?>",
              "type" : "POST",
              "data": { csrf_test_name : csrf_token, tipe : '<?=base64_encode(2)?>' }
            },
            "deferRender": true,
            "autoWidth": false,
            "order": [[ 3, "desc" ]],
            "columns": [
              { "data": "berkas_nama" },
              { "data": "isi" },
              { "data": "pen_judul" },
              { "data": "berkas_waktu" },
              { "data": "Lstatus" },
              { "data": "Lopsi", "searchable": false, "sortable": false, "width": "8%" },
            ],

        });

        // simpan laporan
        $('#btn-simpan-laporan').click(function(){
            $('#form-tambah-laporan').submit();
            $('#btn-simpan-laporan').addClass('disabled');
        });

        // baca semua laporan
        $('#btn-bacasemua-laporan').click(function(){
            $('#form-bacasemua-laporan').submit();
            $('#btn-bacasemua-laporan').addClass('disabled');
        });

        // hapus laporan
        $('#btn-hapus-laporan').click(function(){
            $('#form-hapus-laporan').submit();
            $('#btn-hapus-laporan').addClass('disabled');
        });

        // hapus semua laporan
        $('#btn-hapusemua-laporan').click(function(){
            $('#form-hapusemua-laporan').submit();
            $('#btn-hapusemua-laporan').addClass('disabled');
        });

        $('#form-tambah-laporan').submit(function(){
            $.ajax({
                url:"<?=site_url('laporan/tambah')?>",
                type:"POST",
                data:$('#form-tambah-laporan').serialize(),
                cache: false,
                success:function(respon){
                    var obj = $.parseJSON(respon);
                    if(obj.status==1){
                        $('#form-pesan-tambah-laporan').html(pesan_succ(obj.pesan));
                        setTimeout(function(){$('#form-pesan-tambah-laporan').html('')}, 5000);
                        setTimeout(function(){$('#modal-tambah-laporan').modal('hide')}, 2500);
                        setTimeout(function(){ $('#btn-refresh').trigger('click'); }, 2500);
                    }else{
                        $('#form-pesan-tambah-laporan').html(pesan_err(obj.pesan));
                        setTimeout(function(){$('#form-pesan-tambah-laporan').html('')}, 7000);
                    }
                    
                    $('#btn-tambah-laporan').removeClass('disabled');
                }
            });
            return false;
        });

        $('#form-bacasemua-laporan').submit(function(){
            $.ajax({
                url:"<?=site_url('laporan/bacasemua')?>",
                type:"POST",
                data:$('#form-bacasemua-laporan').serialize(),
                cache: false,
                success:function(respon){
                    var obj = $.parseJSON(respon);
                    if(obj.status==1){
                        $('#form-pesan-bacasemua-laporan').html(pesan_succ(obj.pesan));
                        setTimeout(function(){$('#form-pesan-bacasemua-laporan').html('')}, 5000);
                        setTimeout(function(){$('#modal-bacasemua-laporan').modal('hide')}, 2500);
                        setTimeout(function(){ location.reload(); }, 2500);
                    }else{
                        $('#form-pesan-bacasemua-laporan').html(pesan_err(obj.pesan));
                        setTimeout(function(){$('#form-pesan-bacasemua-laporan').html('')}, 7000);
                    }
                    
                    $('#btn-bacasemua-laporan').removeClass('disabled');
                }
            });
            return false;
        });

        $('#form-hapus-laporan').submit(function(){
            $.ajax({
                url:"<?=site_url('laporan/hapus')?>",
                type:"POST",
                data:$('#form-hapus-laporan').serialize(),
                cache: false,
                success:function(respon){
                    var obj = $.parseJSON(respon);
                    if(obj.status==1){
                        $('#form-pesan-hapus-laporan').html(pesan_succ(obj.pesan));
                        setTimeout(function(){$('#form-pesan-hapus-laporan').html('')}, 5000);
                        setTimeout(function(){$('#modal-hapus-laporan').modal('hide')}, 2500);
                        setTimeout(function(){ $('#btn-refresh').trigger('click'); }, 2500);
                    }else{
                        $('#form-pesan-hapus-laporan').html(pesan_err(obj.pesan));
                        setTimeout(function(){$('#form-pesan-hapus-laporan').html('')}, 7000);
                    }
                    
                    $('#btn-hapus-laporan').removeClass('disabled');
                }
            });
            return false;
        });

        $('#form-hapusemua-laporan').submit(function(){
            $.ajax({
                url:"<?=site_url('laporan/hapusemua')?>",
                type:"POST",
                data:$('#form-hapusemua-laporan').serialize(),
                cache: false,
                success:function(respon){
                    var obj = $.parseJSON(respon);
                    if(obj.status==1){
                        $('#form-pesan-hapusemua-laporan').html(pesan_succ(obj.pesan));
                        setTimeout(function(){$('#form-pesan-hapusemua-laporan').html('')}, 5000);
                        setTimeout(function(){$('#modal-hapusemua-laporan').modal('hide')}, 2500);
                        setTimeout(function(){ location.reload(); }, 2500);
                    }else{
                        $('#form-pesan-hapusemua-laporan').html(pesan_err(obj.pesan));
                        setTimeout(function(){$('#form-pesan-hapusemua-laporan').html('')}, 7000);
                    }
                    
                    $('#btn-hapusemua-laporan').removeClass('disabled');
                }
            });
            return false;
        });

        $('#btn-refresh').click(function(){
            refresh_jumlah();
            tblaporanK.ajax.reload();
            tblaporanAn.ajax.reload();
            tblaporanAk.ajax.reload();
        });

      });
    </script>
    
  </body>
</html>
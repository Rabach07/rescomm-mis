        <!-- Main content -->
        <section class="content">
          
          <!-- Info boxes -->
          <div class="row">
            <div class="col-lg-3 col-xs-6">
              <!-- small box -->
              <div class="small-box bg-teal">
                <div class="inner">
                  <h3 id="boxberita">0</h3>
                  <p>Penelitian</p>
                </div>
                <div class="icon">
                  <i class="fa fa-flask"></i>
                </div>
                
              </div>
            </div>
            <div class="col-lg-3 col-xs-6">
              <!-- small box -->
              <div class="small-box bg-maroon">
                <div class="inner">
                  <h3 id="boxdraft">0</h3>
                  <p>Usulan</p>
                </div>
                <div class="icon">
                  <i class="ion ion-android-bulb"></i>
                </div>
                
              </div>
            </div>
            <div class="col-lg-3 col-xs-6">
              <!-- small box -->
              <div class="small-box bg-orange">
                <div class="inner">
                  <h3 id="boxtipe">0</h3>
                  <p>Dikerjakan</p>
                </div>
                <div class="icon">
                  <i class="ion ion-ios-compose"></i>
                </div>
                
              </div>
            </div>
            <div class="col-lg-3 col-xs-6">
              <!-- small box -->
              <div class="small-box bg-green">
                <div class="inner">
                  <h3 id="boxrilis">0</h3>
                  <p>Selesai</p>
                </div>
                <div class="icon">
                  <i class="ion ion-android-done-all"></i>
                </div>
                
              </div>
            </div>
            
          </div><!-- /.row -->

          

          <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">

              <div class="box box-solid">
                <div class="box-header with-border">
                  <h3 class="box-title">Berita</h3>
                  <div class="box-tools pull-right">
                    <?php if($adaberita) { ?>
                    <div class="btn-group btn-opsi" style="display:none">
                      <button class="btn btn-box-tool text-black dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-wrench"></i> Opsi Seleksi</button>
                      <ul class="dropdown-menu" role="menu">
                        <li class="btn-rilisberita"><a class="text-green" data-toggle="modal" data-target="#modal-rilisberita" href="#"><i class="fa fa-check-square"></i> Rilis Berita</a></li>
                        <li class="btn-draftberita"><a class="text-yellow" data-toggle="modal" data-target="#modal-draftberita" href="#"><i class="icon ion-android-drafts" style="margin-right:10px;"></i> Jadikan Draft</a></li>
                        <li class="btn-hapusberita"><a class="text-red" data-toggle="modal" data-target="#modal-hapusberita" href="#"><i class="fa fa-close"></i> Hapus Berita</a></li>
                        <li role="presentation" class="divider"></li>
                        <li class="btn-hapuseleksi"><a class="text-black" href="#"><i class="fa fa-check-square-o"></i> Hapus Seleksi</a></li>
                      </ul>
                    </div>
                    <?php } ?>
                    <button class="btn btn-box-tool text-green btn-tambahberita" data-toggle="tooltip" data-original-title="Tambah Berita"><i class="fa fa-plus"></i> Tambah Berita</button>
                    <button class="btn btn-box-tool text-blue btn-refresh" data-toggle="tooltip" data-original-title="Refresh"><i class="fa fa-refresh"></i> Refresh</button>
                  </div>
                </div><!-- /.box-header -->
                <div class="box-body">
                  <table id="tberita" class="table table-bordered table-striped table-hover dt-responsive" cellspacing="0" width="100%">
                      <thead>
                        <tr>
                          <th>Judul</th>
                          <th>Tipe</th>
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
                          <th>Tipe</th>
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

          </div><!-- /.row -->

          <div class="row">
            <div class="col-md-8 col-sm-12 col-xs-12">
              <div class="box box-solid">
                <div class="box-header">
                  <h3 class="box-title">Pageview</h3>
                </div><!-- /.box-header -->
                <div class="box-body">
                  <div class="chart">
                    <!-- Sales Chart Canvas -->
                    <canvas id="pageviewChart" height="210" width="702" style="width: 702px; height: 210px;"></canvas>
                  </div><!-- /.chart-responsive -->
                </div>
              </div>     
            </div>
            <div class="col-md-4 col-sm-12 col-xs-12">
              <div class="box box-solid">
                <div class="box-header with-border">
                  <h3 class="box-title">Tipe Berita</h3>
                  <div class="box-tools pull-right">
                    <button class="btn btn-box-tool btn-tambahtipe" data-toggle="tooltip" data-original-title="Tambah Tipe"><i class="fa fa-plus"></i> Tambah Tipe</button>
                  </div>
                </div><!-- /.box-header -->
                <div class="box-body">
                  <table id="tbtipe" class="table table-bordered table-striped table-hover dt-responsive" cellspacing="0" width="100%">
                    <thead>
                      <tr>
                        <th>Nama</th>
                        <th>Opsi</th>
                      </tr>
                    </thead>
                    <tbody></tbody>
                    <tfoot>
                      <tr>
                        <th>Nama</th>
                        <th>Opsi</th>
                      </tr>
                    </tfoot>
                  </table>
                </div>
              </div>

            </div>
          </div>

        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->

      <footer class="main-footer">
        <div class="pull-right hidden-xs">
          <b>Versi</b> Beta 0.2
        </div>
        <strong><?=$web->web_footer;?>.</strong> All rights reserved. <i>{elapsed_time} detik</i>
      </footer>

    </div><!-- ./wrapper -->

    <!-- Modal Tambah -->
    <div class="modal modal-primary fade" id="modal-tambahberita" tabindex="-1" role="dialog" data-backdrop="static" aria-hidden="true">
      <div class="modal-dialog modal-lg">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            <h4 class="modal-title"><i class="fa fa-rss"></i> Tambah Berita Baru </h4>
          </div>
          <div class="modal-body">
            <div class="container-fluid">
              <span class="form-pesan"></span>
              <?php echo form_open('berita/tambah', 'id="form-tambahberita" class="eventInsForm"') ?>
                <div class="row">
                  <div class="col-xs-12">
                    <div class="form-group">
                      <div class="input-group">
                        <span class="input-group-addon">Judul:</span>
                        <input type="text" class="form-control" id="berita-judul" name="berita-judul" placeholder="Judul Berita" />
                      </div><!-- /.input group -->
                    </div>
                    <div class="form-group">
                      <div class="input-group">
                        <span class="input-group-addon">Tanggal:</span>
                        <input type="text" class="form-control tanggal" id="berita-tanggal" name="berita-tanggal" placeholder="Tanggal" />
                      </div><!-- /.input group -->
                    </div>
                    <div class="form-group">
                        <textarea class="form-control textarea" id="berita-isi" name="berita-isi" placeholder="Isi berita di sini" style="width: 100%; height: 150px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"></textarea>
                    </div>
                    <div class="row">
                      <div class="col-xs-6">
                        <div class="form-group">
                          <div class="input-group">
                            <span class="input-group-addon">Status:</span>
                            <select class="form-control" id="berita-status" name="berita-status">
                                <option value="1" selected="">Rilis</option>
                                <option value="0">Draft</option>
                            </select>
                          </div><!-- /.input group -->
                        </div>
                      </div>
                      <div class="col-xs-6">
                        <div class="form-group">
                          <div class="input-group">
                            <span class="input-group-addon">Tipe:</span>
                            <select class="form-control" id="berita-tipe" name="berita-tipe">
                                <?php if(!empty($daftartipe)) { foreach ($daftartipe->result() as $key) { ?>
                                <option value="<?=$key->tipeberita_id?>"><?=$key->tipeberita_nama?></option>
                                <?php } } ?>
                            </select>
                          </div><!-- /.input group -->
                        </div>
                      </div>
                    </div>
            
                  </div>
                </div>
              <?php echo form_close(); ?>
            </div><!-- /.box-body -->
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-danger" data-dismiss="modal"><i class="fa fa-times"></i> Batal</button>
            <button id="btn-simpanberita" type="button" class="btn btn-primary"><i class="fa fa-save"></i> Simpan</button>
          </div>
        </div>
      </div>
    </div>
    <!-- Modal Tambah -->

    <!-- Modal Edit -->
    <div class="modal modal-primary fade" id="modal-editberita" tabindex="-1" role="dialog" data-backdrop="static" aria-hidden="true">
      <div class="modal-dialog modal-lg">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            <h4 class="modal-title"><i class="fa fa-rss"></i> Edit Berita</h4>
          </div>
          <div class="modal-body">
            <div class="container-fluid">
              <span class="form-pesan"></span>
              <?php echo form_open('berita/edit', 'id="form-editberita"') ?>
                <div class="row">
                  <div class="col-xs-12">
                    <div class="form-group">
                      <div class="input-group">
                        <span class="input-group-addon">Judul:</span>
                        <input type="text" class="form-control" id="berita-judul" name="berita-judul" placeholder="Judul Berita" />
                      </div><!-- /.input group -->
                    </div>
                    <div class="row">
                      <div class="col-xs-6">
                        <div class="form-group">
                          <div class="input-group">
                            <span class="input-group-addon">Tanggal:</span>
                            <input type="text" class="form-control tanggal" id="berita-tanggal" name="berita-tanggal" placeholder="Tanggal" />
                          </div><!-- /.input group -->
                        </div>
                      </div>
                      <div class="col-xs-6">
                        <div class="form-group">
                          <div class="input-group">
                            <span class="input-group-addon">URL:</span>
                            <input type="text" class="form-control" id="berita-url" name="berita-url" placeholder="URL" readonly="" />
                          </div><!-- /.input group -->
                        </div>
                      </div>
                    </div>
                    
                    <div class="form-group">
                        <input type="hidden" id="berita-id" name="berita-id" readonly="" />
                        <textarea class="form-control textarea" id="berita-isi" name="berita-isi" placeholder="Isi berita di sini" style="width: 100%; height: 150px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"></textarea>
                    </div>
                    <div class="row">
                      <div class="col-xs-6">
                        <div class="form-group">
                          <div class="input-group">
                            <span class="input-group-addon">Status:</span>
                            <select class="form-control" id="berita-status" name="berita-status">
                                <option value="1">Rilis</option>
                                <option value="0">Draft</option>
                            </select>
                          </div><!-- /.input group -->
                        </div>
                      </div>
                      <div class="col-xs-6">
                        <div class="form-group">
                          <div class="input-group">
                            <span class="input-group-addon">Tipe:</span>
                            <select class="form-control" id="berita-tipe" name="berita-tipe">
                                <?php if(!empty($daftartipe)) { foreach ($daftartipe->result() as $key) { ?>
                                <option value="<?=$key->tipeberita_id?>"><?=$key->tipeberita_nama?></option>
                                <?php } } ?>
                            </select>
                          </div><!-- /.input group -->
                        </div>
                      </div>
                    </div>
            
                  </div>
                </div>
              <?php echo form_close(); ?>
            </div><!-- /.box-body -->
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-danger" data-dismiss="modal"><i class="fa fa-times"></i> Batal</button>
            <button id="btn-editberita" type="button" class="btn btn-primary"><i class="fa fa-save"></i> Simpan</button>
          </div>
        </div>
      </div>
    </div>
    <!-- Modal Edit -->

    <!-- Modal Tambah -->
    <div class="modal modal-primary fade" id="modal-tambahtipe" tabindex="-1" role="dialog" data-backdrop="static" aria-hidden="true">
      <div class="modal-dialog modal-sm">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            <h4 class="modal-title"><i class="fa fa-tags"></i> Tambah Tipe Baru </h4>
          </div>
          <div class="modal-body">
            <div class="container-fluid">
              <span class="form-pesan"></span>
              <?php echo form_open('berita/tambahtipe', 'id="form-tambahtipe"') ?>
                <div class="row">
                  <div class="col-xs-12">
                    <div class="form-group">
                      <div class="input-group">
                        <span class="input-group-addon">Nama:</span>
                        <input type="text" class="form-control" id="tipe-nama" name="tipe-nama" placeholder="Nama Tipe" />
                      </div><!-- /.input group -->
                    </div>
                    <div class="form-group">
                      <div class="input-group">
                        <span class="input-group-addon">Icon:</span>
                        <input type="text" class="form-control" id="tipe-icon" name="tipe-icon" placeholder="Class Icon" value="fa fa-tags" />
                      </div><!-- /.input group -->
                    </div>
            
                  </div>
                </div>
              <?php echo form_close(); ?>
            </div><!-- /.box-body -->
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-danger" data-dismiss="modal"><i class="fa fa-times"></i> Batal</button>
            <button id="btn-simpantipe" type="button" class="btn btn-primary"><i class="fa fa-save"></i> Simpan</button>
          </div>
        </div>
      </div>
    </div>
    <!-- Modal Tambah -->

    <!-- Modal Edit -->
    <div class="modal modal-primary fade" id="modal-editipe" tabindex="-1" role="dialog" data-backdrop="static" aria-hidden="true">
      <div class="modal-dialog modal-sm">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            <h4 class="modal-title"><i class="fa fa-tags"></i> Edit Tipe</h4>
          </div>
          <div class="modal-body">
            <div class="container-fluid">
              <span class="form-pesan"></span>
              <?php echo form_open('berita/editipe', 'id="form-editipe"') ?>
              <input type="hidden" id="tipe-lama" name="tipe-lama" readonly="" />
              <input type="hidden" id="tipe-id" name="tipe-id" readonly="" />
                <div class="row">
                  <div class="col-xs-12">
                    <div class="form-group">
                      <div class="input-group">
                        <span class="input-group-addon">Nama:</span>
                        <input type="text" class="form-control" id="tipe-nama" name="tipe-nama" placeholder="Nama Tipe" />
                      </div><!-- /.input group -->
                    </div>
                    <div class="form-group">
                      <div class="input-group">
                        <span class="input-group-addon">Icon:</span>
                        <input type="text" class="form-control" id="tipe-icon" name="tipe-icon" placeholder="Class Icon" value="fa fa-tags" />
                      </div><!-- /.input group -->
                    </div>
            
                  </div>
                </div>
              <?php echo form_close(); ?>
            </div><!-- /.box-body -->
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-danger" data-dismiss="modal"><i class="fa fa-times"></i> Batal</button>
            <button id="btn-editipe" type="button" class="btn btn-primary"><i class="fa fa-save"></i> Simpan</button>
          </div>
        </div>
      </div>
    </div>
    <!-- Modal Edit -->

    <!-- Modal Rilis -->
    <div class="modal modal-primary fade" id="modal-rilisberita" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            <h4 class="modal-title"><i class="fa fa-rss"></i> Rilis Kumpulan Berita </h4>
          </div>
          <div class="modal-body">
            <div class="container-fluid">
              <span class="form-pesan"></span>
              <?php echo form_open('berita/rilis', 'id="form-rilisberita"') ?>
              <input type="hidden" id="berita-id" name="berita-id" readonly="" />
                <div class="row">
                  <div class="col-xs-12">
                    <p>Apakah Anda yakin ingin mengubah beberapa status berita yang Anda pilih menjadi 'Rilis' ?</p>
                    <div class="row" id="here">
                    
                    </div>
                  </div>
                </div>
              <?php echo form_close(); ?>
            </div><!-- /.box-body -->
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-danger" data-dismiss="modal"><i class="fa fa-times"></i> Batal</button>
            <button id="btn-rilisberita" type="button" class="btn btn-primary"><i class="fa fa-check"></i> Ya, Ganti Status</button>
          </div>
        </div>
      </div>
    </div>
    <!-- Modal Rilis -->

    <!-- Modal Draft -->
    <div class="modal modal-primary fade" id="modal-draftberita" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            <h4 class="modal-title"><i class="fa fa-rss"></i> Draft Kumpulan Berita </h4>
          </div>
          <div class="modal-body">
            <div class="container-fluid">
              <span class="form-pesan"></span>
              <?php echo form_open('berita/draft', 'id="form-draftberita"') ?>
              <input type="hidden" id="berita-id" name="berita-id" readonly="" />
                <div class="row">
                  <div class="col-xs-12">
                    <p>Apakah Anda yakin ingin mengubah beberapa status berita yang Anda pilih menjadi 'Draft' ?</p>
                    <div class="row" id="here">
                    
                    </div>
                  </div>
                </div>
              <?php echo form_close(); ?>
            </div><!-- /.box-body -->
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-danger" data-dismiss="modal"><i class="fa fa-times"></i> Batal</button>
            <button id="btn-draftberita" type="button" class="btn btn-primary"><i class="fa fa-check"></i> Ya, Ganti Status</button>
          </div>
        </div>
      </div>
    </div>
    <!-- Modal Draft -->

    <!-- Modal Hapus -->
    <div class="modal modal-danger fade" id="modal-hapusberita" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            <h4 class="modal-title"><i class="fa fa-warning"></i> Hapus Berita </h4>
          </div>
          <div class="modal-body">
            <span class="form-pesan"></span>
            <?php echo form_open('berita/hapus', 'id="form-hapusberita"') ?>
            <div class="box-body">
              <div class="row">
                <div class="col-md-12">
                  <input type="hidden" id="berita-id" name="berita-id" readonly="" />
                  <input type="hidden" id="berita-judul" name="berita-judul" readonly="" />
                  <p>Apakah Anda yakin ingin menghapus Berita berikut ?</p>
                  <div class="callout callout-danger">
                    <p>Judul : <span class="berita-judul"> </span></p>
                    <p>Penulis : <span class="berita-penulis"> </span></p>
                    <p>Tipe : <span class="berita-tipe"> </span></p>
                    <p>Tanggal : <span class="berita-tanggal"> </span></p>
                  </div>
                </div>
              </div>
            </div>
            <?php echo form_close(); ?>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-danger" data-dismiss="modal"><i class="fa fa-times"></i> Batal</button>
            <button id="btn-hapusberita" type="button" class="btn btn-primary"><i class="fa fa-check"></i> Ya, Hapus</button>
          </div>
        </div>
      </div>
    </div>
    <!-- Modal Hapus -->

    <!-- Modal Hapus -->
    <div class="modal modal-danger fade" id="modal-hapustipe" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            <h4 class="modal-title"><i class="fa fa-warning"></i> Hapus Tipe </h4>
          </div>
          <div class="modal-body">
            <span class="form-pesan"></span>
            <?php echo form_open('berita/hapustipe', 'id="form-hapustipe"') ?>
            <div class="box-body">
              <div class="row">
                <div class="col-md-12">
                  <input type="hidden" id="tipe-id" name="tipe-id" readonly="" />
                  <input type="hidden" id="tipe-nama" name="tipe-nama" readonly="" />
                  <p>Apakah Anda yakin ingin menghapus Tipe berikut ?</p>
                  <div class="callout callout-danger">
                    <p>Nama : <span class="tipe-nama"> </span></p>
                    <p>Icon : <span class="tipe-icon"></span></p>
                  </div>
                </div>
              </div>
            </div>
            <?php echo form_close(); ?>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-danger" data-dismiss="modal"><i class="fa fa-times"></i> Batal</button>
            <button id="btn-hapustipe" type="button" class="btn btn-primary"><i class="fa fa-check"></i> Ya, Hapus</button>
          </div>
        </div>
      </div>
    </div>
    <!-- Modal Hapus -->

    <!-- Modal Hapus -->
    <div class="modal modal-danger fade" id="modal-hapustipe" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            <h4 class="modal-title"><i class="fa fa-warning"></i> Hapus Tipe </h4>
          </div>
          <div class="modal-body">
            <span class="form-pesan"></span>
            <?php echo form_open('berita/hapustipe', 'id="form-hapustipe"') ?>
            <div class="box-body">
              <div class="row">
                <div class="col-md-12">
                  <input type="hidden" id="tipe-id" name="tipe-id" readonly="" />
                  <p>Apakah Anda yakin ingin menghapus Berita berikut ?</p>
                  <div class="callout callout-danger">
                    <p>Nama : <span class="tipe-nama"> </span></p>
                  </div>
                </div>
              </div>
            </div>
            <?php echo form_close(); ?>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-danger" data-dismiss="modal"><i class="fa fa-times"></i> Batal</button>
            <button id="btn-hapustipe" type="button" class="btn btn-primary"><i class="fa fa-check"></i> Ya, Hapus</button>
          </div>
        </div>
      </div>
    </div>
    <!-- Modal Hapus -->

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
            <span class="form-pesan"></span>
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
    <style type="text/css">
    .boox {
        background-color:lavender;
        padding: 5px;
        border: 1px solid #ccc;
        border-radius: 2px;
        margin: 2px;
    }
    </style>
    <!-- date-picker -->
    <link href="<?=base_url('public/plugins/datepicker/datepicker3.css');?>" rel="stylesheet" type="text/css" />
    <script src="<?=base_url('public/plugins/datepicker/bootstrap-datepicker.js');?>" type="text/javascript"></script>
    <!-- bootstrap wysihtml5 - text editor -->
    <link href="<?=base_url('public/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css');?>" rel="stylesheet" type="text/css" />
    <!-- wysiwyg bootstrap -->
    <script src="<?=base_url('public/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js');?>" type="text/javascript"></script>
    <!-- P3M App -->
    <script src="<?=base_url('public/dist/js/app.min.js');?>" type="text/javascript"></script>
    <!-- page script -->
    <script type="text/javascript">
      'use strict';
      $(function () {

        /* ChartJS
         * -------
         * Here we will create a few charts using ChartJS
         */
        // Get context with jQuery - using jQuery's .get() method.
        var pageviewChartCanvas = $("#pageviewChart").get(0).getContext("2d");
        // This will get the first returned node in the jQuery collection.
        var pageviewChart = new Chart(pageviewChartCanvas);

        var pageviewChartOptions = {
          //Boolean - If we should show the scale at all
          showScale: true,
          //Boolean - Whether grid lines are shown across the chart
          scaleShowGridLines: true,
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
          bezierCurveTension: 0.4,
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

        $.ajax("<?=site_url('berita/get_pgchart')?>", {
          dataType: 'json',
          success: function(response) {
            pageviewChart.Line(response, pageviewChartOptions);
          }
        });
        //Create the line chart
        //salesChart.Line(salesChartData, salesChartOptions);

        //---------------------------
        //- END MONTHLY SALES CHART -
        //---------------------------

        

      });
    </script>
    <script type="text/javascript">
      function refresh_jumlah(){
        $.getJSON("<?=site_url('berita/get_databox')?>", function(obj) {
            $("#boxberita").html(obj.boxberita);
            $("#boxrilis").html(obj.boxrilis);
            $("#boxdraft").html(obj.boxdraft);
            $("#boxtipe").html(obj.boxtipe);
        });
      }


      $(document).ready(function() {
        refresh_jumlah();
        var csrf_token = '<?=$this->security->get_csrf_hash();?>';

        $(".tanggal").daterangepicker({
            singleDatePicker: true,
            showDropdowns: true,
            startDate: moment(),
            format: 'YYYY-MM-DD H:mm:ss',
            timePicker: true,
            timePickerIncrement: 1,
            timePicker12Hour: false,
            timePickerSeconds: true
        });

        $('#btn-hapus-semuaberita').click(function(){
            $('#modal-hapusemuaberita').modal('show');
            return false;
        });

        $(".textarea").wysihtml5();

        $('.btn-tambahberita').click(function(){
            $('.tanggal').val(moment().format('YYYY-MM-DD H:mm:ss'));
            $('#modal-tambahberita').modal('show');
            return false;
        });

        $('.btn-tambahtipe').click(function(){
            $('#modal-tambahtipe').modal('show');
            return false;
        });

        $('#modal-hapusberita').on('show.bs.modal', function (e) {
            var button = $(e.relatedTarget);
            var id = button.data('id');
            var modal = $(this);

            $.ajax({
                type: "POST",
                url: "<?=site_url('berita/getwith');?>",
                data: { csrf_test_name: csrf_token, id: id },
                cache: false,
                success: function (data) {
                    var obj = $.parseJSON(data);
                    $('.btn-hapuseleksi').trigger('click');
                    //console.log(data);
                    modal.find('.berita-judul').html(obj.judul);
                    modal.find('.berita-tanggal').html(obj.tanggal);
                    modal.find('.berita-tipe').html(obj.tipe);
                    modal.find('.berita-penulis').html(obj.penulis);
                    modal.find('#berita-id').val(obj.ori);
                    modal.find('#berita-judul').val(obj.judul);
                },
                error: function(err) {
                    console.log(err);
                }
            });
        });

        $('#modal-hapustipe').on('show.bs.modal', function (e) {
            var button = $(e.relatedTarget);
            var id = button.data('id');
            var modal = $(this);

            $.ajax({
                type: "POST",
                url: "<?=site_url('berita/getipewith');?>",
                data: { csrf_test_name: csrf_token, id: id },
                cache: false,
                success: function (data) {
                    var obj = $.parseJSON(data);
                    $('.btn-hapuseleksi').trigger('click');
                    //console.log(data);
                    modal.find('.tipe-nama').html(obj.tipeberita_nama);
                    modal.find('.tipe-icon').html(obj.tipeberita_icon);
                    modal.find('#tipe-id').val(obj.ID);
                    modal.find('#tipe-nama').val(obj.tipeberita_nama);
                },
                error: function(err) {
                    console.log(err);
                }
            });
        });

        $('#modal-editberita').on('show.bs.modal', function (e) {
            var button = $(e.relatedTarget);
            var id = button.data('id');
            var modal = $(this);

            $.ajax({
                type: "POST",
                url: "<?=site_url('berita/getwith');?>",
                data: { csrf_test_name: csrf_token, id: id },
                cache: false,
                success: function (data) {
                    var obj = $.parseJSON(data);
                    $('.btn-hapuseleksi').trigger('click');
                    //console.log(data);
                    modal.find('#berita-isi').data("wysihtml5").editor.setValue(obj.isi);
                    modal.find('#berita-tanggal').val(obj.tanggal);
                    modal.find('#berita-url').val(obj.url);
                    modal.find('#berita-tipe option').filter(function(){
                        return ( ($(this).val() == obj.tipeberita_id) || ($(this).text() == obj.tipeberita_id) );
                    }).prop('selected', true);
                    modal.find('#berita-status option').filter(function(){
                        return ( ($(this).val() == obj.berita_status) || ($(this).text() == obj.berita_status) );
                    }).prop('selected', true);
                    modal.find('#berita-judul').val(obj.judul);
                    modal.find('#berita-id').val(obj.ori);
                },
                error: function(err) {
                    console.log(err);
                }
            });
        });

        $('#modal-editipe').on('show.bs.modal', function (e) {
            var button = $(e.relatedTarget);
            var id = button.data('id');
            var modal = $(this);

            $.ajax({
                type: "POST",
                url: "<?=site_url('berita/getipewith');?>",
                data: { csrf_test_name: csrf_token, id: id },
                cache: false,
                success: function (data) {
                    var obj = $.parseJSON(data);
                    $('.btn-hapuseleksi').trigger('click');
                    //console.log(data);
                    modal.find('#tipe-id').val(obj.tipeberita_id);
                    modal.find('#tipe-nama').val(obj.tipeberita_nama);
                    modal.find('#tipe-lama').val(obj.tipeberita_nama);
                    modal.find('#tipe-icon').val(obj.tipeberita_icon);
                },
                error: function(err) {
                    console.log(err);
                }
            });
        });

        var tberita = $("#tberita").DataTable({
            "processing": true,
            "ajax": {
              "url" : "<?=site_url('berita/getberita');?>",
              "type" : "POST",
              "data": { csrf_test_name : csrf_token }
            },
            "deferRender": true,
            "autoWidth": false,
            "order": [[ 2, "desc" ]],
            "columns": [
              { "data": "judul" },
              { "data": "tipe" },
              { "data": "tanggal" },
              { "data": "dilihat", "width": "5%" },
              { "data": "status", "width": "5%" },
              { "data": "opsi", "searchable": false, "sortable": false, "width": "10%", "class": "no-print"},
            ],

        });

        $.fn.dataTable.TableTools.defaults.aButtons = [
          {
              "sExtends": "xls",
              "mColumns": [0, 1, 2, 3, 4]
          }, 
          {
              "sExtends": "pdf",
              "sPdfOrientation": "landscape",
              "mColumns": [0, 1, 2, 3, 4],
              "sPdfMessage": "data di-generate pada <?=date('d-m-Y H:i:s',now());?>"
          }, 
          "print"
        ];

        $('#tberita tbody').on( 'click', 'tr', function () {
            $(this).toggleClass('selected');
            if ( $('#tberita tbody tr').hasClass('selected') ) {
                $('.btn-opsi').fadeIn('normal');
            }
            else {
                $('.btn-opsi').fadeOut('normal');
            }
            
        } );

        $('#modal-rilisberita').on('show.bs.modal', function (e) {
            var button = $(e.relatedTarget);
            var modal = $(this);

            var arr = [];
            tberita.rows('.selected').every( function() {
              var d = this.data();
              arr.push(d.ID);
            });

            //alert( arr );
            modal.find('#berita-id').val(arr);
            $.ajax({
                type: "POST",
                url: "<?=site_url('berita/getSelected');?>",
                data: { csrf_test_name: csrf_token, id: arr },
                cache: false,
                success: function (data) {
                    var obj = $.parseJSON(data);
                    $('.btn-hapuseleksi').trigger('click');
                    //console.log(data);
                    //alert(obj);
                    var el = modal.find('#here');
                    el.empty();
                    for(var i=0;i<obj.length;i++){
                        // ini membuat div tiap iterasi
                        modal.find('#here').append("<div class='col-xs-12 boox i-" + i + "'></div>");
                        var arr = obj[i];
                        modal.find(".i-" + i + "").append(document.createTextNode(arr['berita_judul']));
                    }
                    // modal.find('#tipe-id').val(obj.tipeberita_id);
                    // modal.find('#tipe-nama').val(obj.tipeberita_nama);
                    // modal.find('#tipe-lama').val(obj.tipeberita_nama);
                    // modal.find('#tipe-icon').val(obj.tipeberita_icon);
                },
                error: function(err) {
                    console.log(err);
                }
            });

        });

        $('#modal-draftberita').on('show.bs.modal', function (e) {
            var button = $(e.relatedTarget);
            var modal = $(this);

            var arr = [];
            tberita.rows('.selected').every( function() {
              var d = this.data();
              arr.push(d.ID);
            });

            //alert( arr );
            modal.find('#berita-id').val(arr);
            $.ajax({
                type: "POST",
                url: "<?=site_url('berita/getSelected');?>",
                data: { csrf_test_name: csrf_token, id: arr },
                cache: false,
                success: function (data) {
                    var obj = $.parseJSON(data);
                    $('.btn-hapuseleksi').trigger('click');
                    //console.log(data);
                    //alert(obj);
                    var el = modal.find('#here');
                    //while ( el.firstChild ) el.removeChild( el.firstChild );
                    el.empty();
                    for(var i=0;i<obj.length;i++){
                        // ini membuat div tiap iterasi
                        modal.find('#here').append("<div class='col-xs-12 boox i-" + i + "'></div>");
                        var arr = obj[i];
                        modal.find(".i-" + i + "").append(document.createTextNode(arr['berita_judul']));
                    }
                    // modal.find('#tipe-id').val(obj.tipeberita_id);
                    // modal.find('#tipe-nama').val(obj.tipeberita_nama);
                    // modal.find('#tipe-lama').val(obj.tipeberita_nama);
                    // modal.find('#tipe-icon').val(obj.tipeberita_icon);
                },
                error: function(err) {
                    console.log(err);
                }
            });

        });

        $('.btn-hapuseleksi').click( function () {
              $( "#tberita tbody tr" ).removeClass( "selected" );
              $('.btn-opsi').fadeOut('normal');

              return false;
        } );

        var tbtipe = $("#tbtipe").DataTable({
            "processing": true,
            "ajax": {
              "url" : "<?=site_url('berita/getipe');?>",
              "type" : "POST",
              "data": { csrf_test_name : csrf_token }
            },
            "deferRender": true,
            "autoWidth": false,
            "lengthChange": false,
            "pagingType": "simple",
            "searching": false,
            "info": false,
            "columns": [
              { "data": "tipe" },
              { "data": "opsi", "searchable": false, "sortable": false, "width": "10%" },
            ],

        });

        var b = new $.fn.dataTable.TableTools( tberita );

        $( b.fnContainer() ).insertBefore('#tberita_wrapper');

        $( '.btn-tanggal-k' ).insertBefore('#tberita_wrapper');
        //$( '#btn-tanggal-text' ).insertBefore('#tblaporanK_wrapper');

        $(".btn-tanggal-k").datepicker({
            format: "yyyy",
            autoclose: true,
            todayHighlight: true,
            startView:1,
            minViewMode:2,
        }).on('changeDate', function(ev){
            $(".btn-tanggal-text-k").html("Tahun " + ev.format());
            tberita
              .columns(2).search( ev.format() )
              .draw();

            
            //tblaporanK.fnFilterAll( ev.format() );
            //alert( "Anda memilih tahun " + ev.format() );
        });

        // tambah tipe
        $('#btn-simpanberita').click(function(){
            $('#btn-simpanberita').html('<i class="fa fa-refresh fa-spin"></i> Menyimpan ...');
            $('#btn-simpanberita').addClass('disabled');
            $('#form-tambahberita').submit();
        });

        // tambah tipe
        $('#btn-simpantipe').click(function(){
            $('#btn-simpantipe').html('<i class="fa fa-refresh fa-spin"></i> Menyimpan ...');
            $('#btn-simpantipe').addClass('disabled');
            $('#form-tambahtipe').submit();
        });

        // edit berita
        $('#btn-editberita').click(function(){
            $('#btn-editberita').html('<i class="fa fa-refresh fa-spin"></i> Menyimpan ...');
            $('#btn-editberita').addClass('disabled');
            $('#form-editberita').submit();
        });

        // edit tipe
        $('#btn-editipe').click(function(){
            $('#btn-editipe').html('<i class="fa fa-refresh fa-spin"></i> Menyimpan ...');
            $('#btn-editipe').addClass('disabled');
            $('#form-editipe').submit();
        });

        // hapus berita
        $('#btn-hapusberita').click(function(){
            $('#btn-hapusberita').html('<i class="fa fa-refresh fa-spin"></i> Menghapus...');
            $('#btn-hapusberita').addClass('disabled');
            $('#form-hapusberita').submit();
        });

        // hapus tipe
        $('#btn-hapustipe').click(function(){
            $('#btn-hapustipe').html('<i class="fa fa-refresh fa-spin"></i> Menghapus ...');
            $('#btn-hapustipe').addClass('disabled');
            $('#form-hapustipe').submit();
        });

        // baca rilis semua
        $('#btn-rilisberita').click(function(){
            $('#btn-rilisberita').html('<i class="fa fa-refresh fa-spin"></i> Menyimpan ...');
            $('#btn-rilisberita').addClass('disabled');
            $('#form-rilisberita').submit();
        });

        // baca draft semua
        $('#btn-draftberita').click(function(){
            $('#btn-draftberita').html('<i class="fa fa-refresh fa-spin"></i> Menyimpan ...');
            $('#btn-draftberita').addClass('disabled');
            $('#form-draftberita').submit();
        });

        // hapus semua laporan
        $('#btn-hapusemua').click(function(){
            $('#form-hapusemua').submit();
            $('#btn-hapusemua').addClass('disabled');
        });

        $('#form-rilisberita').submit(function(){
            var modal = $('#modal-rilisberita');
            $.ajax({
                url:"<?=site_url('berita/rilis')?>",
                type:"POST",
                data:$('#form-rilisberita').serialize(),
                cache: false,
                success:function(respon){
                    var obj = $.parseJSON(respon);
                    if(obj.status==1){
                        modal.find('.form-pesan').html(pesan_succ(obj.pesan));
                        setTimeout(function(){ modal.find('.form-pesan').html('') }, 5000);
                        setTimeout(function(){ modal.modal('hide') }, 2500);
                        setTimeout(function(){ $('.btn-refresh').trigger('click'); }, 2500);
                        setTimeout(function(){ $('#form-rilisberita').trigger("reset"); }, 2500);
                    }else{
                        modal.find('.form-pesan').html(pesan_err(obj.pesan));
                        setTimeout(function(){modal.find('.form-pesan').html('')}, 7000);
                    }
                    
                    $('#btn-rilisberita').html('<i class="fa fa-check"></i> Ya, Ganti Status');
                    $('#btn-rilisberita').removeClass('disabled');
                }
            });
            return false;
        });

        $('#form-draftberita').submit(function(){
            var modal = $('#modal-draftberita');
            $.ajax({
                url:"<?=site_url('berita/draft')?>",
                type:"POST",
                data:$('#form-draftberita').serialize(),
                cache: false,
                success:function(respon){
                    var obj = $.parseJSON(respon);
                    if(obj.status==1){
                        modal.find('.form-pesan').html(pesan_succ(obj.pesan));
                        setTimeout(function(){ modal.find('.form-pesan').html('') }, 5000);
                        setTimeout(function(){ modal.modal('hide') }, 2500);
                        setTimeout(function(){ $('.btn-refresh').trigger('click'); }, 2500);
                        setTimeout(function(){ $('#form-draftberita').trigger("reset"); }, 2500);
                    }else{
                        modal.find('.form-pesan').html(pesan_err(obj.pesan));
                        setTimeout(function(){modal.find('.form-pesan').html('')}, 7000);
                    }
                    
                    $('#btn-draftberita').html('<i class="fa fa-check"></i> Ya, Ganti Status');
                    $('#btn-draftberita').removeClass('disabled');
                }
            });
            return false;
        });

        $('#form-tambahberita').submit(function(){
            var modal = $('#modal-tambahberita');
            $.ajax({
                url:"<?=site_url('berita/tambah')?>",
                type:"POST",
                data:$('#form-tambahberita').serialize(),
                cache: false,
                success:function(respon){
                    var obj = $.parseJSON(respon);
                    if(obj.status==1){
                        modal.find('.form-pesan').html(pesan_succ(obj.pesan));
                        setTimeout(function(){ modal.find('.form-pesan').html('') }, 5000);
                        setTimeout(function(){ modal.modal('hide') }, 2500);
                        setTimeout(function(){ $('.btn-refresh').trigger('click'); }, 2500);
                        setTimeout(function(){ $('#form-tambahberita').trigger("reset"); }, 2500);
                    }else{
                        modal.find('.form-pesan').html(pesan_err(obj.pesan));
                        setTimeout(function(){modal.find('.form-pesan').html('')}, 7000);
                    }
                    
                    $('#btn-simpanberita').html('<i class="fa fa-save"></i> Simpan');
                    $('#btn-simpanberita').removeClass('disabled');
                }
            });
            return false;
        });

        $('#form-tambahtipe').submit(function(){
            var modal = $('#modal-tambahtipe');
            $.ajax({
                url:"<?=site_url('berita/tambahtipe')?>",
                type:"POST",
                data:$('#form-tambahtipe').serialize(),
                cache: false,
                success:function(respon){
                    var obj = $.parseJSON(respon);
                    if(obj.status==1){
                        modal.find('.form-pesan').html(pesan_succ(obj.pesan));
                        setTimeout(function(){ modal.find('.form-pesan').html('') }, 5000);
                        setTimeout(function(){ modal.modal('hide') }, 2500);
                        setTimeout(function(){ $('.btn-refresh').trigger('click'); }, 2500);
                        setTimeout(function(){ $('#form-tambahtipe').trigger("reset"); }, 2500);
                    }else{
                        modal.find('.form-pesan').html(pesan_err(obj.pesan));
                        setTimeout(function(){modal.find('.form-pesan').html('')}, 7000);
                    }
                    
                    $('#btn-simpantipe').html('<i class="fa fa-save"></i> Simpan');
                    $('#btn-simpantipe').removeClass('disabled');
                }
            });
            return false;
        });

        $('#form-editberita').submit(function(){
            var modal = $('#modal-editberita');
            $.ajax({
                url:"<?=site_url('berita/edit')?>",
                type:"POST",
                data:$('#form-editberita').serialize(),
                cache: false,
                success:function(respon){
                    var obj = $.parseJSON(respon);
                    if(obj.status==1){
                        modal.find('.form-pesan').html(pesan_succ(obj.pesan));
                        setTimeout(function(){modal.find('.form-pesan').html('')}, 5000);
                        setTimeout(function(){modal.modal('hide')}, 2500);
                        setTimeout(function(){ $('.btn-refresh').trigger('click'); }, 2500);
                        setTimeout(function(){ $('#form-editberita').trigger("reset"); }, 2500);
                    }else{
                        modal.find('.form-pesan').html(pesan_err(obj.pesan));
                        setTimeout(function(){modal.find('.form-pesan').html('')}, 7000);
                    }
                    
                    $('#btn-editberita').html('<i class="fa fa-save"></i> Simpan');
                    $('#btn-editberita').removeClass('disabled');
                }
            });
            return false;
        });

        $('#form-editipe').submit(function(){
            var modal = $('#modal-editipe');
            $.ajax({
                url:"<?=site_url('berita/editipe')?>",
                type:"POST",
                data:$('#form-editipe').serialize(),
                cache: false,
                success:function(respon){
                    var obj = $.parseJSON(respon);
                    if(obj.status==1){
                        modal.find('.form-pesan').html(pesan_succ(obj.pesan));
                        setTimeout(function(){modal.find('.form-pesan').html('')}, 5000);
                        setTimeout(function(){modal.modal('hide')}, 2500);
                        setTimeout(function(){ $('.btn-refresh').trigger('click'); }, 2500);
                        setTimeout(function(){ $('#form-editipe').trigger("reset"); }, 2500);
                    }else{
                        modal.find('.form-pesan').html(pesan_err(obj.pesan));
                        setTimeout(function(){modal.find('.form-pesan').html('')}, 7000);
                    }
                    
                    $('#btn-editipe').html('<i class="fa fa-save"></i> Simpan');
                    $('#btn-editipe').removeClass('disabled');
                }
            });
            return false;
        });

        $('#form-bacasemua').submit(function(){
            var modal = $('#modal-bacasemua');
            $.ajax({
                url:"<?=site_url('laporan/bacasemua')?>",
                type:"POST",
                data:$('#form-bacasemua').serialize(),
                cache: false,
                success:function(respon){
                    var obj = $.parseJSON(respon);
                    if(obj.status==1){
                        modal.find('.form-pesan').html(pesan_succ(obj.pesan));
                        setTimeout(function(){modal.find('.form-pesan').html('')}, 5000);
                        setTimeout(function(){modal.modal('hide')}, 2500);
                        setTimeout(function(){ location.reload(); }, 2500);
                    }else{
                        modal.find('.form-pesan').html(pesan_err(obj.pesan));
                        setTimeout(function(){modal.find('.form-pesan').html('')}, 7000);
                    }
                    
                    $('#btn-bacasemua').removeClass('disabled');
                }
            });
            return false;
        });

        $('#form-hapusberita').submit(function(){
            var modal = $('#modal-hapusberita');
            $.ajax({
                url:"<?=site_url('berita/hapus')?>",
                type:"POST",
                data:$('#form-hapusberita').serialize(),
                cache: false,
                success:function(respon){
                    var obj = $.parseJSON(respon);
                    if(obj.status==1){
                        modal.find('.form-pesan').html(pesan_succ(obj.pesan));
                        setTimeout(function(){modal.find('.form-pesan').html('')}, 5000);
                        setTimeout(function(){modal.modal('hide')}, 2500);
                        setTimeout(function(){ $('.btn-refresh').trigger('click'); }, 2500);
                    }else{
                        modal.find('.form-pesan').html(pesan_err(obj.pesan));
                        setTimeout(function(){modal.find('.form-pesan').html('')}, 7000);
                    }
                    
                    $('#btn-hapusberita').html('<i class="fa fa-check"></i> Ya, Hapus');
                    $('#btn-hapusberita').removeClass('disabled');
                }
            });
            return false;
        });

        $('#form-hapustipe').submit(function(){
            var modal = $('#modal-hapustipe');
            $.ajax({
                url:"<?=site_url('berita/hapustipe')?>",
                type:"POST",
                data:$('#form-hapustipe').serialize(),
                cache: false,
                success:function(respon){
                    var obj = $.parseJSON(respon);
                    if(obj.status==1){
                        modal.find('.form-pesan').html(pesan_succ(obj.pesan));
                        setTimeout(function(){modal.find('.form-pesan').html('')}, 5000);
                        setTimeout(function(){modal.modal('hide')}, 2500);
                        setTimeout(function(){ $('.btn-refresh').trigger('click'); }, 2500);
                    }else{
                        modal.find('.form-pesan').html(pesan_err(obj.pesan));
                        setTimeout(function(){modal.find('.form-pesan').html('')}, 7000);
                    }
                    
                    $('#btn-hapustipe').html('<i class="fa fa-check"></i> Ya, Hapus');
                    $('#btn-hapustipe').removeClass('disabled');
                }
            });
            return false;
        });

        $('#form-hapusemua').submit(function(){
            var modal = $('#modal-hapusemua');
            $.ajax({
                url:"<?=site_url('laporan/hapusemua')?>",
                type:"POST",
                data:$('#form-hapusemua').serialize(),
                cache: false,
                success:function(respon){
                    var obj = $.parseJSON(respon);
                    if(obj.status==1){
                        modal.find('.form-pesan').html(pesan_succ(obj.pesan));
                        setTimeout(function(){modal.find('.form-pesan').html('')}, 5000);
                        setTimeout(function(){modal.modal('hide')}, 2500);
                        setTimeout(function(){ location.reload(); }, 2500);
                    }else{
                        modal.find('.form-pesan').html(pesan_err(obj.pesan));
                        setTimeout(function(){modal.find('.form-pesan').html('')}, 7000);
                    }
                    
                    $('#btn-hapusemua').removeClass('disabled');
                }
            });
            return false;
        });

        $('.btn-refresh').click(function(){
            refresh_jumlah();
            tberita.ajax.reload();
            tbtipe.ajax.reload();
            return false;
        });

      });
    </script>
    
  </body>
</html>
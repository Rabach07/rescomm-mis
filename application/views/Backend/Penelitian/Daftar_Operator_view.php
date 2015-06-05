        <!-- Main content -->
        <section class="content">
          
          <!-- Info boxes -->
          <div class="row">
            <div class="col-lg-3 col-xs-6">
              <!-- small box -->
              <div class="small-box bg-teal">
                <div class="inner">
                  <h3 id="boxpenelitian">0</h3>
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
                  <h3 id="boxusulan">0</h3>
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
                  <h3 id="boxdikerjakan">0</h3>
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
                  <h3 id="boxselesai">0</h3>
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
                <div class="box-header">
                  <h3 class="box-title">Grafik Penelitian Per Tahun</h3>
                </div><!-- /.box-header -->
                <div class="box-body">
                  <div class="chart">
                    <!-- Sales Chart Canvas -->
                    <canvas id="pentahun" height="210" width="702" style="width: 702px; height: 210px;"></canvas>
                  </div><!-- /.chart-responsive -->
                </div>
              </div>     
            </div>
          </div12

          <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">

              <div class="box box-solid">
                <div class="box-header with-border">
                  <h3 class="box-title">Penelitian</h3>
                  <div class="box-tools pull-right">
                    <?php if($adapenelitian) { ?>
                    <div class="btn-group btn-opsi" style="display:none">
                      <button class="btn btn-box-tool text-black dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-wrench"></i> Opsi Seleksi</button>
                      <ul class="dropdown-menu" role="menu">
                        <li class="btn-terimapen"><a class="text-green" data-toggle="modal" data-target="#modal-terimapen" href="#"><i class="fa fa-check-square"></i> Terima Penelitian</a></li>
                        <li class="btn-tolakpen"><a class="text-yellow" data-toggle="modal" data-target="#modal-tolakpen" href="#"><i class="fa fa-close"></i> Tolak Penelitian</a></li>
                        <li class="btn-hapuspen"><a class="text-red" data-toggle="modal" data-target="#modal-hapuspen" href="#"><i class="fa fa-close"></i> Hapus Penelitian</a></li>
                        <li role="presentation" class="divider"></li>
                        <li class="btn-hapuseleksi"><a class="text-black" href="#"><i class="fa fa-check-square-o"></i> Hapus Seleksi</a></li>
                      </ul>
                    </div>
                    <?php } ?>
                    <?php if($bukapenelitian) { ?>
                      <span data-toggle="modal" data-target="#modal-tutupusul"><button class="btn btn-box-tool text-red" data-toggle="tooltip" title="Tutup Usulan Penelitian"><i class="fa fa-close"></i> Tutup Usulan Penelitan</button></span>
                      <span data-toggle="modal" data-target="#modal-tambahpen"><button class="btn btn-box-tool text-green" data-toggle="tooltip" title="Tambah Penelitian"><i class="fa fa-plus"></i> Tambah Penelitian</button></span>
                      <button class="btn btn-box-tool text-blue btn-refresh" data-toggle="tooltip" title="Refresh"><i class="fa fa-refresh"></i> Refresh</button>
                    <?php } else { ?>
                      <span data-toggle="modal" data-target="#modal-bukausul"><button class="btn btn-box-tool text-green" data-toggle="tooltip" title="Buka Usulan Penelitian"><i class="fa fa-plus"></i> Buka Usulan Penelitan</button></span>
                    <?php } ?>
                    
                  </div>
                </div><!-- /.box-header -->
                <div class="box-body">
                  <table id="tbpen" class="table table-bordered table-striped table-hover dt-responsive" cellspacing="0" width="100%">
                      <thead>
                        <tr>
                          <th>Judul</th>
                          <th>Ketua</th>
                          <th>Topik</th>
                          <th>Mulai</th>
                          <th>Tingkat</th>
                          <th>Status</th>
                          <th>Opsi</th>
                        </tr>
                      </thead>
                      <tbody></tbody>
                      <tfoot>
                        <tr>
                          <th>Judul</th>
                          <th>Ketua</th>
                          <th>Topik</th>
                          <th>Mulai</th>
                          <th>Tingkat</th>
                          <th>Status</th>
                          <th>Opsi</th>
                        </tr>
                      </tfoot>
                    </table>
                </div>
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

    <!-- Modal Tambah -->
    <div class="modal modal-success fade" id="modal-tambahpen" tabindex="-1" role="dialog" data-backdrop="static" aria-hidden="true">
      <div class="modal-dialog modal-lg">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            <h4 class="modal-title"><i class="fa fa-flask"></i> Tambah Usulan Penelitan Baru </h4>
          </div>
          <div class="modal-body">
            <div class="container-fluid">
              <span class="form-pesan"></span>
              <?php echo form_open('penelitian/tambah', 'id="form-tambahpen"') ?>
                <div class="row">
                  <div class="col-xs-12">

                    <div class="nav-tabs-custom">
                      <ul class="nav nav-tabs">
                        <li class="active"><a href="#tab_1" data-toggle="tab" aria-expanded="true">Informasi Umum</a></li>
                        <li class=""><a href="#tab_2" data-toggle="tab" aria-expanded="false">Informasi Khusus</a></li>
                        <li class=""><a href="#tab_3" data-toggle="tab" aria-expanded="false">Ketua</a></li>
                        <li class=""><a href="#tab_4" data-toggle="tab" aria-expanded="false">Anggota</a></li>
                      </ul>
                      <div class="tab-content">
                        <div class="tab-pane active fade in" id="tab_1"> <!-- tab -->

                          <div class="form-group">
                            <div class="input-group">
                              <span class="input-group-addon">Judul:</span>
                              <input type="text" class="form-control" id="judul" name="judul" placeholder="Judul Penelitian" />
                            </div><!-- /.input group -->
                          </div>
                          
                          <div class="row">
                            <div class="col-lg-4 col-md-4 col-xs-12"> <!-- col -->
                              <div class="form-group">
                                <div class="input-group">
                                  <span class="input-group-addon">Skim:</span>
                                  <select class="form-control" id="skim" name="skim">
                                      <option value="1" selected="">Tingkat 1</option>
                                      <option value="2">Tingkat 2</option>
                                      <option value="3">Tingkat 3</option>
                                  </select>
                                </div><!-- /.input group -->
                              </div>
                            </div> <!-- col -->

                            <div class="col-lg-8 col-md-8 col-xs-12"> <!-- col -->
                              <div class="form-group">
                                <div class="input-group">
                                  <span class="input-group-addon">Topik:</span>
                                  <select class="form-control" id="topik" name="topik">
                                      <?php if(!empty($daftartopik)) { foreach ($daftartopik->result() as $key) { ?>
                                      <option value="<?=$key->topik_id?>"><?=$key->topik_nama?></option>
                                      <?php } } ?>
                                  </select>
                                </div><!-- /.input group -->
                              </div>
                            </div> <!-- col -->
                          </div>


                          <div class="form-group">
                              <textarea class="form-control textarea" id="isi" name="isi" placeholder="Deskripsi / Abstrak Penelitian" style="width: 100%; height: 150px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"></textarea>
                          </div>
                          <div class="row">
                            <div class="col-md-12 col-xs-12">
                              <div class="form-group">
                                <div class="input-group">
                                  <span class="input-group-addon">Kata Kunci:</span>
                                  <select multiple data-role="tagsinput" class="form-control" id="katakunci" name="katakunci">
                                  </select>
                                </div><!-- /.input group -->
                              </div>
                            </div>
                          </div>

                        </div><!-- /.tab-pane -->
                        <div class="tab-pane fade" id="tab_2"> <!-- tab -->

                          <div class="row">
                            <div class="col-md-12 col-xs-12"> <!-- col -->
                              <div class="form-group">
                                <div class="input-group">
                                  <span class="input-group-addon">RG/RC:</span>
                                  <select class="form-control" id="pilriset" name="pilriset">
                                      <option value="grupriset" selected="">Grup Riset</option>
                                      <option value="pusatriset">Pusat Riset</option>
                                  </select>
                                  <span class="input-group-addon memilih">Pilih:</span>
                                  <select class="form-control pilriset" id="grupriset" name="grupriset">
                                    <option value="" selected="">Pilih Grup Riset</option>
                                    <?php if(!empty($daftargrup)) { foreach ($daftargrup->result() as $key) { ?>
                                      <option value="<?=$key->grupriset_id?>"><?=$key->grupriset_nama?></option>
                                    <?php } } ?>
                                  </select>
                                  <select class="form-control pilriset" id="pusatriset" name="pusatriset">
                                    <option value="" selected="">Pilih Pusat Riset</option>
                                    <?php if(!empty($daftarpusat)) { foreach ($daftarpusat->result() as $key) { ?>
                                      <option value="<?=$key->pusatriset_id?>"><?=$key->pusatriset_nama?></option>
                                    <?php } } ?>
                                  </select>
                                </div><!-- /.input group -->
                              </div>
                              
                            </div> <!-- col -->
                          </div>
                          <div class="row">
                            <div class="col-md-6 col-xs-12"> <!-- col -->
                              <div class="form-group">
                                <div class="input-group">
                                  <span class="input-group-addon">Lama Penelitian:</span>
                                  <select class="form-control" id="lamapen" name="lamapen">
                                      <option value="1" selected="">1 Tahun</option>
                                      <option value="2">2 Tahun</option>
                                  </select>
                                </div><!-- /.input group -->
                              </div>
                              
                            </div> <!-- col -->
                            <div class="col-md-6 col-xs-12">
                              <div class="form-group">
                                <div class="input-group">
                                  <span class="input-group-addon">Tahun Pengerjaan ke-:</span>
                                  <input type="text" class="form-control" id="lamapen" name="lamapen" placeholder="Lama Penelitian" />
                                </div><!-- /.input group -->
                              </div>
                            </div>
                            <div class="col-xs-12"><h4 style="text-align: center;">Dana</h4><h5 style="text-align: center;">Masukkan hanya dalam bentuk angka</h5></div>
                            <div class="col-md-12 col-xs-12">
                              <div id="daftardana">
                                <div class="form-group">
                                  <div class="input-group">
                                    <span class="input-group-addon">Rp.</span>
                                    <input type="text" class="form-control dana" name="dana[]" placeholder="Dana Tahun ke-1">
                                    <span class="input-group-addon">.00</span>
                                  </div><!-- /.input group -->
                                </div>
                              </div>
                            </div>
                          </div>

                        </div>
                        <div class="tab-pane fade" id="tab_3"> <!-- tab -->
                          <div class="row">
                            <div class="col-md-6 col-xs-12"> <!-- col -->
                              <div class="form-group">
                                <div class="input-group">
                                  <span class="input-group-addon">Nama Lengkap:</span>
                                  <input type="text" class="form-control" id="nama" name="nama" placeholder="Nama Lengkap" />
                                </div><!-- /.input group -->
                              </div>
                            </div> <!-- col -->
                            <div class="col-md-6 col-xs-12"> <!-- col -->
                              <div class="form-group">
                                <div class="input-group">
                                  <span class="input-group-addon">NIP:</span>
                                  <input type="text" class="form-control" id="nip" name="nip" placeholder="NIP" />
                                </div><!-- /.input group -->
                              </div>
                            </div> <!-- col -->
                            <div class="col-md-4 col-xs-12"> <!-- col -->
                              <div class="form-group">
                                <div class="input-group">
                                  <span class="input-group-addon">Pangkat:</span>
                                  <select class="form-control" id="pangkat" name="pangkat">
                                      <?php if(!empty($daftarpangkat)) { foreach ($daftarpangkat->result() as $key) { ?>
                                      <option value="<?=$key->pangkat_id?>"><?=$key->pangkat_nama?></option>
                                      <?php } } ?>
                                  </select>
                                </div><!-- /.input group -->
                              </div>
                            </div> <!-- col -->
                            <div class="col-md-4 col-xs-12"> <!-- col -->
                              <div class="form-group">
                                <div class="input-group">
                                  <span class="input-group-addon">Golongan:</span>
                                  <select class="form-control" id="golongan" name="golongan">
                                      <?php if(!empty($daftargol)) { foreach ($daftargol->result() as $key) { ?>
                                      <option value="<?=$key->gol_id?>"><?=$key->gol_nama?></option>
                                      <?php } } ?>
                                  </select>
                                </div><!-- /.input group -->
                              </div>
                            </div> <!-- col -->
                            <div class="col-md-4 col-xs-12"> <!-- col -->
                              <div class="form-group">
                                <div class="input-group">
                                  <span class="input-group-addon">Jabatan:</span>
                                  <select class="form-control" id="jabatan" name="jabatan">
                                      <?php if(!empty($daftarjabatan)) { foreach ($daftarjabatan->result() as $key) { ?>
                                      <option value="<?=$key->jabatan_id?>"><?=$key->jabatan_nama?></option>
                                      <?php } } ?>
                                  </select>
                                </div><!-- /.input group -->
                              </div>
                            </div> <!-- col -->
                            <div class="col-xs-12"><h4 style="text-align: center;">Departemen</h4><h5 style="text-align: center;">Posisi yang dimiliki</h5></div>

                            <div class="col-md-6 col-xs-12"> <!-- col -->
                              <div class="form-group">
                                <div class="input-group">
                                  <span class="input-group-addon">Departemen:</span>
                                  <select class="form-control" id="departemen" name="departemen">
                                      <?php if(!empty($daftardepartemen)) { foreach ($daftardepartemen->result() as $key) { ?>
                                      <option value="<?=$key->departemen_id?>"><?=$key->departemen_nama?></option>
                                      <?php } } ?>
                                  </select>
                                </div><!-- /.input group -->
                              </div>
                            </div> <!-- col -->
                            <div class="col-md-6 col-xs-12"> <!-- col -->
                              <div class="form-group">
                                <div class="input-group">
                                  <span class="input-group-addon">Program Studi:</span>
                                  <select class="form-control" id="prodi" name="prodi">
                                  </select>
                                </div><!-- /.input group -->
                              </div>
                            </div> <!-- col -->
                            <div class="col-xs-12"><h4 style="text-align: center;">Kontak</h4><h5 style="text-align: center;">Kontak yang dapat dihubungi</h5></div>
                            <div class="col-md-6 col-xs-12"> <!-- col -->
                              <div class="form-group">
                                <div class="input-group">
                                  <span class="input-group-addon">Telp:</span>
                                  <input type="text" class="form-control" id="telp" name="telp" placeholder="Nomor Telepon" />
                                </div><!-- /.input group -->
                              </div>
                            </div> <!-- col -->
                            <div class="col-md-6 col-xs-12"> <!-- col -->
                              <div class="form-group">
                                <div class="input-group">
                                  <span class="input-group-addon">Email:</span>
                                  <input type="email" class="form-control" id="email" name="email" placeholder="Alamat Email" />
                                </div><!-- /.input group -->
                              </div>
                            </div> <!-- col -->
                            


                          </div>
                        </div><!-- /.tab-pane -->
                        <div class="tab-pane fade" id="tab_4"> <!-- tab -->
                          <div class="row">
                            <div class="col-md-6 col-xs-12"> <!-- col -->
                              <div class="form-group">
                                <div class="input-group">
                                  <span class="input-group-addon">Anggota:</span>
                                  <input type="text" class="form-control" id="nama" name="nama" placeholder="Nama Lengkap" />
                                </div><!-- /.input group -->
                              </div>
                            </div> <!-- col -->
                            <div class="col-md-6 col-xs-12"> <!-- col -->
                              <div class="form-group">
                                <div class="input-group">
                                  <span class="input-group-addon">NIP:</span>
                                  <input type="text" class="form-control" id="nip" name="nip" placeholder="NIP" />
                                </div><!-- /.input group -->
                              </div>
                            </div> <!-- col -->
                            <div class="col-md-4 col-xs-12"> <!-- col -->
                              <div class="form-group">
                                <div class="input-group">
                                  <span class="input-group-addon">Pangkat:</span>
                                  <select class="form-control" id="pangkat" name="pangkat">
                                      <?php if(!empty($daftarpangkat)) { foreach ($daftarpangkat->result() as $key) { ?>
                                      <option value="<?=$key->pangkat_id?>"><?=$key->pangkat_nama?></option>
                                      <?php } } ?>
                                  </select>
                                </div><!-- /.input group -->
                              </div>
                            </div> <!-- col -->
                            <div class="col-md-4 col-xs-12"> <!-- col -->
                              <div class="form-group">
                                <div class="input-group">
                                  <span class="input-group-addon">Golongan:</span>
                                  <select class="form-control" id="golongan" name="golongan">
                                      <?php if(!empty($daftargol)) { foreach ($daftargol->result() as $key) { ?>
                                      <option value="<?=$key->gol_id?>"><?=$key->gol_nama?></option>
                                      <?php } } ?>
                                  </select>
                                </div><!-- /.input group -->
                              </div>
                            </div> <!-- col -->
                            <div class="col-md-4 col-xs-12"> <!-- col -->
                              <div class="form-group">
                                <div class="input-group">
                                  <span class="input-group-addon">Jabatan:</span>
                                  <select class="form-control" id="jabatan" name="jabatan">
                                      <?php if(!empty($daftarjabatan)) { foreach ($daftarjabatan->result() as $key) { ?>
                                      <option value="<?=$key->jabatan_id?>"><?=$key->jabatan_nama?></option>
                                      <?php } } ?>
                                  </select>
                                </div><!-- /.input group -->
                              </div>
                            </div> <!-- col -->
                            <div class="col-xs-12"><h4 style="text-align: center;">Departemen</h4><h5 style="text-align: center;">Posisi yang dimiliki</h5></div>

                            <div class="col-md-6 col-xs-12"> <!-- col -->
                              <div class="form-group">
                                <div class="input-group">
                                  <span class="input-group-addon">Departemen:</span>
                                  <select class="form-control" id="departemen" name="departemen">
                                      <?php if(!empty($daftardepartemen)) { foreach ($daftardepartemen->result() as $key) { ?>
                                      <option value="<?=$key->departemen_id?>"><?=$key->departemen_nama?></option>
                                      <?php } } ?>
                                  </select>
                                </div><!-- /.input group -->
                              </div>
                            </div> <!-- col -->
                            <div class="col-md-6 col-xs-12"> <!-- col -->
                              <div class="form-group">
                                <div class="input-group">
                                  <span class="input-group-addon">Program Studi:</span>
                                  <select class="form-control" id="prodi" name="prodi">
                                  </select>
                                </div><!-- /.input group -->
                              </div>
                            </div> <!-- col -->
                            <div class="col-xs-12"><h4 style="text-align: center;">Kontak</h4><h5 style="text-align: center;">Kontak yang dapat dihubungi</h5></div>
                            <div class="col-md-6 col-xs-12"> <!-- col -->
                              <div class="form-group">
                                <div class="input-group">
                                  <span class="input-group-addon">Telp:</span>
                                  <input type="text" class="form-control" id="telp" name="telp" placeholder="Nomor Telepon" />
                                </div><!-- /.input group -->
                              </div>
                            </div> <!-- col -->
                            <div class="col-md-6 col-xs-12"> <!-- col -->
                              <div class="form-group">
                                <div class="input-group">
                                  <span class="input-group-addon">Email:</span>
                                  <input type="email" class="form-control" id="email" name="email" placeholder="Alamat Email" />
                                </div><!-- /.input group -->
                              </div>
                            </div> <!-- col -->
                        </div><!-- /.tab-pane -->
                      </div><!-- /.tab-content -->
                    </div>

            
                  </div>
                </div>
              <?php echo form_close(); ?>
            </div><!-- /.box-body -->
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-danger" data-dismiss="modal"><i class="fa fa-times"></i> Batal</button>
            <button id="btn-tambahpen" data-loading-text="<i class='fa fa-refresh fa-spin'></i> Menyimpan..." type="button" class="btn btn-primary" autocomplete="off"><i class="fa fa-save"></i> Simpan</button>
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

    <!-- Modal Tutup Usul -->
    <div class="modal modal-danger fade" id="modal-tutupusul" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            <h4 class="modal-title"><i class="fa fa-close"></i> Tutup Usulan Penelitian </h4>
          </div>
          <div class="modal-body">
            <span class="form-pesan"></span>
            <?php echo form_open('penelitian/statususul', 'id="form-tutupusul"') ?>
            <input type="hidden" id="status" name="status" value="0" readonly="" />
            <div class="box-body">
              <div class="row">
                <div class="col-md-12">
                  <p>Apakah Anda yakin ingin menutup penerimaan usulan Penelitian ?</p>
                </div>
              </div>
            </div>
            <?php echo form_close(); ?>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-danger" data-dismiss="modal"><i class="fa fa-times"></i> Batal</button>
            <button id="btn-tutupusul" type="button" class="btn btn-primary"><i class="fa fa-check"></i> Ya, Tutup</button>
          </div>
        </div>
      </div>
    </div>
    <!-- Modal Tutup Usul -->

    <!-- Modal Buka Usul -->
    <div class="modal modal-primary fade" id="modal-bukausul" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            <h4 class="modal-title"><i class="fa fa-close"></i> Buka Usulan Penelitian </h4>
          </div>
          <div class="modal-body">
            <span class="form-pesan"></span>
            <?php echo form_open('penelitian/statususul', 'id="form-bukausul"') ?>
            <input type="hidden" id="status" name="status" value="1" readonly="" />
            <div class="box-body">
              <div class="row">
                <div class="col-md-12">
                  <p>Apakah Anda yakin ingin membuka penerimaan usulan Penelitian ?</p>
                </div>
              </div>
            </div>
            <?php echo form_close(); ?>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-danger" data-dismiss="modal"><i class="fa fa-times"></i> Batal</button>
            <button id="btn-bukausul" type="button" class="btn btn-primary"><i class="fa fa-check"></i> Ya, Buka</button>
          </div>
        </div>
      </div>
    </div>
    <!-- Modal Buka Usul -->

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
    <!-- InputMask -->
    <script src="<?=base_url('public/plugins/input-mask/jquery.inputmask.js');?>" type="text/javascript"></script>
    <script src="<?=base_url('public/plugins/input-mask/jquery.inputmask.numeric.extensions.js');?>" type="text/javascript"></script>
    <!-- <script src="<?=base_url('public/plugins/input-mask/jquery.inputmask.extensions.js');?>" type="text/javascript"></script> -->
    <!-- bootstrap tags input -->
    <link href="<?=base_url('public/plugins/bootstrap-tagsinput/bootstrap-tagsinput.css');?>" rel="stylesheet" type="text/css" />
    <script src="<?=base_url('public/plugins/bootstrap-tagsinput/bootstrap-tagsinput.min.js');?>" type="text/javascript"></script>
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
        /*Get context with jQuery - using jQuery's .get() method. */
        var pentahunCanvas = $("#pentahun").get(0).getContext("2d");
        /*This will get the first returned node in the jQuery collection.*/
        var pentahun = new Chart(pentahunCanvas);

        var pentahunOptions = {
          /*Boolean - If we should show the scale at all*/
          showScale: true,
          /*Boolean - Whether grid lines are shown across the chart*/
          scaleShowGridLines: true,
          /*String - Colour of the grid lines*/
          scaleGridLineColor: "rgba(0,0,0,.05)",
          /*Number - Width of the grid lines*/
          scaleGridLineWidth: 1,
          /*Boolean - Whether to show horizontal lines (except X axis)*/
          scaleShowHorizontalLines: true,
          /*Boolean - Whether to show vertical lines (except Y axis)*/
          scaleShowVerticalLines: true,
          /*Boolean - Whether the line is curved between points*/
          bezierCurve: true,
          /*Number - Tension of the bezier curve between points*/
          bezierCurveTension: 0.4,
          /*Boolean - Whether to show a dot for each point*/
          pointDot: false,
          /*Number - Radius of each point dot in pixels*/
          pointDotRadius: 4,
          /*Number - Pixel width of point dot stroke*/
          pointDotStrokeWidth: 1,
          /*Number - amount extra to add to the radius to cater for hit detection outside the drawn point*/
          pointHitDetectionRadius: 20,
          /*Boolean - Whether to show a stroke for datasets*/
          datasetStroke: true,
          /*Number - Pixel width of dataset stroke*/
          datasetStrokeWidth: 2,
          /*Boolean - Whether to fill the dataset with a color*/
          datasetFill: true,
          /*Label*/
          multiTooltipTemplate: "<%= datasetLabel %> - <%= value %>",
          /*String - A legend template*/
          legendTemplate: "<ul class=\"<%=name.toLowerCase()%>-legend\"><% for (var i=0; i<datasets.length; i++){%><li><span style=\"background-color:<%=datasets[i].lineColor%>\"></span><%=datasets[i].label%></li><%}%></ul>",
          /*Boolean - whether to maintain the starting aspect ratio or not when responsive, if set to false, will take up entire container*/
          maintainAspectRatio: false,
          /*Boolean - whether to make the chart responsive to window resizing*/
          responsive: true
        };

        $.ajax("<?=site_url('penelitian/get_tahunchart')?>", {
          dataType: 'json',
          success: function(response) {
            pentahun.Line(response, pentahunOptions);
          }
        });

        //Flat red color scheme for iCheck
        $('input[type="checkbox"].flat-red, input[type="radio"].flat-red').iCheck({
          checkboxClass: 'icheckbox_flat-green',
          radioClass: 'iradio_flat-green'
        });
        

      });
    </script>
    <script type="text/javascript">
      function refresh_jumlah(){
        $.getJSON("<?=site_url('penelitian/get_databox')?>", function(obj) {
            $("#boxpenelitian").html(obj.boxpenelitian);
            $("#boxusulan").html(obj.boxusulan);
            $("#boxdikerjakan").html(obj.boxdikerjakan);
            $("#boxselesai").html(obj.boxselesai);
        });
      }


      $(document).ready(function() {
        refresh_jumlah();
        var csrf_token = '<?=$this->security->get_csrf_hash();?>';

        $('.pilriset').hide();
        $('#grupriset').show();
        //$('.memilih').hide();
        $('#pilriset').change(function () {
            $('.pilriset').hide()
            $('.memilih').show();
            $('#' + this.value).show();
        });

        $('.dana').inputmask("decimal", { allowMinus: false, allowPlus: false, min: 5000000, max: 10000000, rightAlign: false });
        $('#nip').inputmask("decimal", { allowMinus: false, allowPlus: false, min: 0, integerDigits:18, rightAlign: false });

        $('#skim').change(function () {
            var opsi, minDana, maxDana;
            var lamapen = $('#lamapen');
            var daftar = $('#daftardana');

            if(this.value == 1) {
              opsi = { 1:'1 Tahun', 2:'2 Tahun' };
              minDana = 5000000;
              maxDana = 10000000;
            } else if(this.value == 2) {
              opsi = { 2:'2 Tahun', 3:'3 Tahun' };
              minDana = 10000000;
              maxDana = 20000000;
            } else if(this.value == 3) {
              opsi = { 2:'2 Tahun', 3:'3 Tahun', 4:'4 Tahun' };
              minDana = 20000000;
              maxDana = 30000000;
            }
            lamapen.empty();
            daftar.empty();

            $.each(opsi, function(val, text) {
                lamapen.append(new Option(text,val));
            });

            $('#lamapen option:first-child').attr("selected", "selected");

            for(var i=1;i<=lamapen.val();i++){
                /*ini membuat div tiap iterasi*/
                var isi = '<div class="form-group"><div class="input-group">' +
                              '<span class="input-group-addon">Rp.</span>' +
                              '<input type="text" class="form-control dana" name="dana[]" placeholder="Dana Tahun ke-' + i + '">' +
                              '<span class="input-group-addon">.00</span>' +
                          '</div></div>';
                daftar.append(isi);
            }

            $('.dana').inputmask("decimal", { allowMinus: false, allowPlus: false, min: minDana, max: maxDana, rightAlign: false });
        });

        $('#lamapen').change(function () {
            var minDana, maxDana;
            var skim = $('#skim');
            var daftar = $('#daftardana');

            if(skim.val() == 1) {
              minDana = 5000000;
              maxDana = 10000000;
            } else if(skim.val() == 2) {
              minDana = 10000000;
              maxDana = 20000000;
            } else if(skim.val() == 3) {
              minDana = 20000000;
              maxDana = 30000000;
            }

            daftar.empty();
            for(var i=1;i<=this.value;i++){
                /*ini membuat div tiap iterasi*/
                var isi = '<div class="form-group"><div class="input-group">' +
                              '<span class="input-group-addon">Rp.</span>' +
                              '<input type="text" class="form-control dana" name="dana[]" placeholder="Dana Tahun ke-' + i + '">' +
                              '<span class="input-group-addon">.00</span>' +
                          '</div></div>';
                daftar.append(isi);
            }
            $('.dana').inputmask("decimal", { allowMinus: false, allowPlus: false, min: minDana, max: maxDana, rightAlign: false });

        });

        $.fn.dataTable.TableTools.defaults.aButtons = [
          {
              "sExtends": "copy",
              "mColumns": [0, 1, 2, 3, 4, 5]
          },
          {
              "sExtends": "xls",
              "mColumns": [0, 1, 2, 3, 4, 5]
          }, 
          {
              "sExtends": "pdf",
              "sPdfOrientation": "landscape",
              "mColumns": [0, 1, 2, 3, 4, 5],
              "sPdfMessage": "data di-generate pada <?=date('d-m-Y H:i:s',now());?>"
          }, 
          "print"
        ];

        var tbpen = $("#tbpen").DataTable({
            "processing": true,
            "ajax": {
              "url" : "<?=site_url('penelitian/getpenelitian');?>",
              "type" : "POST",
              "data": { csrf_test_name : csrf_token }
            },
            "deferRender": true,
            "autoWidth": false,
            "order": [[ 0, "desc" ]],
            "columns": [
              { "data": "judul" },
              { "data": "ketua", "width": "15%"  },
              { "data": "topik" },
              { "data": "mulai", "width": "10%" },
              { "data": "tingkat" },
              { "data": "status", "width": "5%" },
              { "data": "opsi", "searchable": false, "sortable": false, "width": "10%", "class": "no-print"},
            ],

        });

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

        var b = new $.fn.dataTable.TableTools( tbpen );

        $( b.fnContainer() ).insertBefore('#tbpen_wrapper');
        $( '.btn-tanggal-k' ).insertBefore('#tbpen_wrapper');
        $(".btn-tanggal-k").datepicker({
            format: "yyyy",
            autoclose: true,
            todayHighlight: true,
            startView:1,
            minViewMode:2,
        }).on('changeDate', function(ev){
            $(".btn-tanggal-text-k").html("Tahun " + ev.format());
            tbpen
              .columns(3).search( ev.format() )
              .draw();

        });

        $('#tbpen tbody').on( 'click', 'tr', function () {
            $(this).toggleClass('selected');
            if ( $('#tbpen tbody tr').hasClass('selected') ) {
                $('.btn-opsi').fadeIn('normal');
            }
            else {
                $('.btn-opsi').fadeOut('normal');
            }
            
        } );

        $(".tanggal").daterangepicker({
            singleDatePicker: true,
            showDropdowns: true,
            startDate: moment(),
            format: 'YYYY-MM-DD H:mm:ss',
            timePicker: true,
            timePickerIncrement: 1,
            timePicker12Hour: false,
            timePickerSeconds: true,
            drops: 'up'
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

        

        $('#modal-rilisberita').on('show.bs.modal', function (e) {
            var button = $(e.relatedTarget);
            var modal = $(this);

            var arr = [];
            tberita.rows('.selected').every( function() {
              var d = this.data();
              arr.push(d.ID);
            });

            modal.find('#berita-id').val(arr);
            $.ajax({
                type: "POST",
                url: "<?=site_url('berita/getSelected');?>",
                data: { csrf_test_name: csrf_token, id: arr },
                cache: false,
                success: function (data) {
                    var obj = $.parseJSON(data);
                    $('.btn-hapuseleksi').trigger('click');

                    var el = modal.find('#here');
                    el.empty();
                    for(var i=0;i<obj.length;i++){
                        /*ini membuat div tiap iterasi*/
                        modal.find('#here').append("<div class='col-xs-12 boox i-" + i + "'></div>");
                        var arr = obj[i];
                        modal.find(".i-" + i + "").append(document.createTextNode(arr['berita_judul']));
                    }
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

            modal.find('#berita-id').val(arr);
            $.ajax({
                type: "POST",
                url: "<?=site_url('berita/getSelected');?>",
                data: { csrf_test_name: csrf_token, id: arr },
                cache: false,
                success: function (data) {
                    var obj = $.parseJSON(data);
                    $('.btn-hapuseleksi').trigger('click');

                    var el = modal.find('#here');
                    /*while ( el.firstChild ) el.removeChild( el.firstChild );*/
                    el.empty();
                    for(var i=0;i<obj.length;i++){
                        /*ini membuat div tiap iterasi*/
                        modal.find('#here').append("<div class='col-xs-12 boox i-" + i + "'></div>");
                        var arr = obj[i];
                        modal.find(".i-" + i + "").append(document.createTextNode(arr['berita_judul']));
                    }
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

        /*tambah usul penelitian */
        $('#btn-tambahpen').on('click', function () {
            /*$('#btn-simpanberita').html('<i class="fa fa-refresh fa-spin"></i> Menyimpan ...');
            $('#btn-simpanberita').addClass('disabled');*/
            var btn = $(this).button('loading')
            setTimeout(function () {
                btn.button('reset');
            }, 2000);
            /*$('#form-tambahberita').submit();*/
        });

        /*tambah tipe*/
        $('#btn-simpantipe').click(function(){
            $('#btn-simpantipe').html('<i class="fa fa-refresh fa-spin"></i> Menyimpan ...');
            $('#btn-simpantipe').addClass('disabled');
            $('#form-tambahtipe').submit();
        });

        /*edit berita*/
        $('#btn-editberita').click(function(){
            $('#btn-editberita').html('<i class="fa fa-refresh fa-spin"></i> Menyimpan ...');
            $('#btn-editberita').addClass('disabled');
            $('#form-editberita').submit();
        });

        /*edit tipe*/
        $('#btn-editipe').click(function(){
            $('#btn-editipe').html('<i class="fa fa-refresh fa-spin"></i> Menyimpan ...');
            $('#btn-editipe').addClass('disabled');
            $('#form-editipe').submit();
        });

        /*hapus berita*/
        $('#btn-hapusberita').click(function(){
            $('#btn-hapusberita').html('<i class="fa fa-refresh fa-spin"></i> Menghapus...');
            $('#btn-hapusberita').addClass('disabled');
            $('#form-hapusberita').submit();
        });

        /*hapus tipe*/
        $('#btn-hapustipe').click(function(){
            $('#btn-hapustipe').html('<i class="fa fa-refresh fa-spin"></i> Menghapus ...');
            $('#btn-hapustipe').addClass('disabled');
            $('#form-hapustipe').submit();
        });

        /*baca rilis semua*/
        $('#btn-rilisberita').click(function(){
            $('#btn-rilisberita').html('<i class="fa fa-refresh fa-spin"></i> Menyimpan ...');
            $('#btn-rilisberita').addClass('disabled');
            $('#form-rilisberita').submit();
        });

        /*baca draft semua*/
        $('#btn-draftberita').click(function(){
            $('#btn-draftberita').html('<i class="fa fa-refresh fa-spin"></i> Menyimpan ...');
            $('#btn-draftberita').addClass('disabled');
            $('#form-draftberita').submit();
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
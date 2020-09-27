<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <!-- <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon"> -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="fontawesome/css/all.min.css">
    <link rel="stylesheet" href="bootstrap/css/adminlte.min.css">
    <link rel="stylesheet" href="bootstrap/datatables-bs4/css/dataTables.bootstrap4.css">
    <title>Survei Ekraf</title>
  </head>
  <body>
    <div class="container-fluid p-3">
      <div class="row">
        <div class="col-sm-12">
          <div class="card mt-2">
            <div class="card-header bg-danger">
              <b>Angket Penghitungan Angka PDB Ekonomi Kreatif</b>
            </div>
            <div class="card-body border border-danger">
              <div class="container-fluid p-2">
                <div class="card mt-2">
                  <div class="card-header bg-success my-0">
                    <b>Identitas Responden</b>
                  </div>
                  <div class="card-body border border-success">
                    <div class="container-fluid bg-light">
                      <div class="row my-3">
                        <div class="col-sm-6 my-1">
                          <div class="input-group">
                            <div class="input-group-prepend">
                              <label class="input-group-text bg-primary text-dark"><b>Nama Responden</b></label>
                            </div>
                            <input class="form-control" type="text" id="NamaResponden">
                          </div>
                        </div> 
                        <div class="col-sm-3 my-1">
                          <div class="input-group">
                            <div class="input-group-prepend">
                              <label class="input-group-text bg-primary text-dark"><b>Jenis Kelamin</b></label>
                            </div>
                            <select class="custom-select" id="Gender">                    
                              <option value="1">Laki-Laki</option>
                              <option value="2">Perempuan</option>
                            </select>
                          </div>
                        </div>
                        <div class="col-sm-3 my-1">
                          <div class="input-group">
                            <div class="input-group-prepend">
                              <label class="input-group-text bg-primary text-dark"><b>Pendidikan</b></label>
                            </div>
                            <select class="custom-select" id="JenisUsahaKreatif">  
                              <option value="1">SD</option>
                              <option value="2">SMP</option>
                              <option value="3">SMA</option>
                              <option value="4">D1</option>
                              <option value="5">S1</option>
                              <option value="6">S2</option>
                              <option value="7">S3</option>
                            </select>
                          </div>
                        </div>
                        <div class="col-sm-6 my-1">
                          <div class="input-group">
                            <div class="input-group-prepend">
                              <label class="input-group-text bg-primary text-dark"><b>Jenis Usaha Kreatif</b></label>
                            </div>
                            <select class="custom-select" id="JenisUsahaKreatif">  
                              <?php 
                                $JenisUsahaKreatif = array('Fashion','Kriya','Kuliner','Film,Animasi,Video','Desain Produk','Desain Komunikasi visual','Desain Interior','Arsitektur','Aplikasi Game Developer','TV dan Radio','Seni Rupa','Seni Pertunjukan','Periklanan','Penerbitan','Musik','Fotografi');
                                foreach ($JenisUsahaKreatif as $key => $value) { ?>
                                <option value="<?=$key?>"><?=$value?></option>
                              <?php } ?>                  
                            </select>
                          </div>
                        </div>
                        <div class="col-sm-6 my-1">
                          <div class="input-group">
                            <div class="input-group-prepend">
                              <label class="input-group-text bg-primary text-dark"><b>Lama Usaha</b></label>
                            </div>
                            <input class="form-control" type="text" id="LamaUsaha">
                          </div>
                        </div>
                        <div class="col-sm-6 my-1">
                          <div class="input-group">
                            <div class="input-group-prepend">
                              <label class="input-group-text bg-primary text-dark"><b>Provinsi</b></label>
                            </div>
                            <select class="custom-select" id="Provinsi">  
                              <?php foreach ($Provinsi as $key) { ?>
                                <option value="<?=$key['Kode']?>"><?=$key['Nama']?></option>
                              <?php } ?>                  
                            </select>
                          </div>
                        </div>
                        <div class="col-sm-6 my-1">
                          <div class="input-group">
                            <div class="input-group-prepend">
                              <label class="input-group-text bg-primary text-dark"><b>Kabupaten</b></label>
                            </div>
                            <select class="custom-select" id="Kabupaten">                    
                              <?php foreach ($Kabupaten as $key) { ?>
                                <option value="<?=$key['Kode']?>"><?=$key['Nama']?></option>
                              <?php } ?>                  
                            </select>
                          </div>
                        </div>
                        <div class="col-sm-6 my-1">
                          <div class="input-group">
                            <div class="input-group-prepend">
                              <label class="input-group-text bg-primary text-dark"><b>Kecamatan</b></label>
                            </div>
                            <select class="custom-select" id="Kecamatan">  
                              <?php foreach ($Kecamatan as $key) { ?>
                                <option value="<?=$key['Kode']?>"><?=$key['Nama']?></option>
                              <?php } ?>                  
                            </select>
                          </div>
                        </div>
                        <div class="col-sm-6 my-1">
                          <div class="input-group">
                            <div class="input-group-prepend">
                              <label class="input-group-text bg-primary text-dark"><b>Desa/Kelurahan</b></label>
                            </div>
                            <select class="custom-select" id="Desa">                    
                              <?php foreach ($Desa as $key) { ?>
                                <option value="<?=$key['Kode']?>"><?=$key['Nama']?></option>
                              <?php } ?>                  
                            </select>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
								</div>
								<div class="card">
									<div class="card-header bg-success my-0">
										<b>Produksi Tahun 2018</b>
									</div>
									<div class="card-body border border-success">
										<div class="container-fluid bg-light">
											<div class="row my-3">
												<div class="col-sm-12 my-1">
													<div class="table-responsive">
														<table class="table table-bordered">
															<thead>
																<tr>
																	<th class="align-middle text-center" rowspan="2">No</th>
																	<th class="align-middle text-center" rowspan="2">Jenis Produk</th>
																	<th class="align-middle text-center" colspan="3">Produksi</th>
																	<th class="align-middle text-center" colspan="2">Penerimaan</th>
																</tr>
																<tr>
																	<th class="align-middle text-center" >Kapasitas Produksi</th>
																	<th class="align-middle text-center">Satuan (Kg/Lainnya)</th>
																	<th class="align-middle text-center" >Rentang Produksi</th>
																	<th class="align-middle text-center">Harga Jual (Rp)</th>
																	<th class="align-middle text-center">Omzet (Rp)</th>
																</tr>
															</thead>
															<tbody>
																<tr>
																	<td class="align-middle text-center">1</td>
																	<td class="align-middle text-center"><input class="form-control" type="text" id="Produk12018"></td>
																	<td class="align-middle text-center"><input class="form-control" type="text" id="KapasitasProduk12018" placeholder="0"></td>
																	<td class="align-middle text-center"><input class="form-control" type="text" id="SatuanProduk12018"></td>
																	<td class="align-middle text-center">
																		<select class="custom-select" id="RentangProduk12018">  
																			<option value="Harian">Harian</option>
																			<option value="Mingguan">Mingguan</option>
																			<option value="Bulanan">Bulanan</option>
																			<option value="Tahunan">Tahunan</option>
																		</select>
																	</td>
																	<td class="align-middle text-center"><input class="form-control" type="text" id="HargaJualProduk12018" placeholder="0"></td>
																	<td class="align-middle text-center"><input class="form-control" type="text" id="OmzetProduk12018" placeholder="0"></td>
																</tr>
																<tr>
																	<td class="align-middle text-center">2</td>
																	<td class="align-middle text-center"><input class="form-control" type="text" id="Produk22018"></td>
																	<td class="align-middle text-center"><input class="form-control" type="text" id="KapasitasProduk22018" placeholder="0"></td>
																	<td class="align-middle text-center"><input class="form-control" type="text" id="SatuanProduk22018"></td>
																	<td class="align-middle text-center">
																		<select class="custom-select" id="RentangProduk22018">  
																			<option value="Harian">Harian</option>
																			<option value="Mingguan">Mingguan</option>
																			<option value="Bulanan">Bulanan</option>
																			<option value="Tahunan">Tahunan</option>
																		</select>
																	</td>
																	<td class="align-middle text-center"><input class="form-control" type="text" id="HargaJualProduk22018" placeholder="0"></td>
																	<td class="align-middle text-center"><input class="form-control" type="text" id="OmzetProduk22018" placeholder="0"></td>
																</tr>
																<tr>
																	<td class="align-middle text-center">3</td>
																	<td class="align-middle text-center"><input class="form-control" type="text" id="Produk32018"></td>
																	<td class="align-middle text-center"><input class="form-control" type="text" id="KapasitasProduk32018" placeholder="0"></td>
																	<td class="align-middle text-center"><input class="form-control" type="text" id="SatuanProduk32018"></td>
																	<td class="align-middle text-center">
																		<select class="custom-select" id="RentangProduk32018">  
																			<option value="Harian">Harian</option>
																			<option value="Mingguan">Mingguan</option>
																			<option value="Bulanan">Bulanan</option>
																			<option value="Tahunan">Tahunan</option>
																		</select>
																	</td>
																	<td class="align-middle text-center"><input class="form-control" type="text" id="HargaJualProduk32018" placeholder="0"></td>
																	<td class="align-middle text-center"><input class="form-control" type="text" id="OmzetProduk32018" placeholder="0"></td>
																</tr>
																<tr>
																	<td class="align-middle text-center">4</td>
																	<td class="align-middle text-center"><input class="form-control" type="text" id="Produk42018"></td>
																	<td class="align-middle text-center"><input class="form-control" type="text" id="KapasitasProduk42018" placeholder="0"></td>
																	<td class="align-middle text-center"><input class="form-control" type="text" id="SatuanProduk42018"></td>
																	<td class="align-middle text-center">
																		<select class="custom-select" id="RentangProduk42018">  
																			<option value="Harian">Harian</option>
																			<option value="Mingguan">Mingguan</option>
																			<option value="Bulanan">Bulanan</option>
																			<option value="Tahunan">Tahunan</option>
																		</select>
																	</td>
																	<td class="align-middle text-center"><input class="form-control" type="text" id="HargaJualProduk42018" placeholder="0"></td>
																	<td class="align-middle text-center"><input class="form-control" type="text" id="OmzetProduk42018" placeholder="0"></td>
																</tr>
															</tbody>
														</table>
													</div>
													<div class="container-fluid">
														<div class="row">
															<div class="col-sm-12">
																<div class="card">
																	<div class="card-header bg-primary my-0">
																		<b>Bahan Baku Produk 1</b>
																	</div>
																	<div class="card-body border border-primary">
																		<div class="container-fluid bg-light">
																			<div class="row my-3">
																				<div class="col-sm-12 my-1">
																					<div class="table-responsive">
																						<table class="table table-bordered">
																							<thead>
																								<tr>
																									<th class="align-middle text-center" rowspan="2">No</th>
																									<th class="align-middle text-center" rowspan="2">Bahan Baku</th>
																									<th class="align-middle text-center" colspan="3">Input</th>
																									<th class="align-middle text-center" colspan="2">Pembelian</th>
																								</tr>
																								<tr>
																									<th class="align-middle text-center" >Kapasitas Input</th>
																									<th class="align-middle text-center">Rentang Input</th>
																									<th class="align-middle text-center" >Satuan (Kg/Lainnya)</th>
																									<th class="align-middle text-center">Satuan (Kg/Lainnya)</th>
																									<th class="align-middle text-center">Harga Beli (Rp)</th>
																								</tr>
																							</thead>
																							<tbody>
																								<tr>
																									<td class="align-middle text-center">1</td>
																									<td class="align-middle text-center"><input class="form-control" type="text" id="BahanBaku1Produk12018"></td>
																									<td class="align-middle text-center"><input class="form-control" type="text" id="KapasitasInputBahanBaku1Produk12018" placeholder="0"></td>
																									<td class="align-middle text-center">
																										<select class="custom-select" id="RentangInputBahanBaku1Produk12018">  
																											<option value="Harian">Harian</option>
																											<option value="Mingguan">Mingguan</option>
																											<option value="Bulanan">Bulanan</option>
																											<option value="Tahunan">Tahunan</option>
																										</select>
																									</td>
																									<td class="align-middle text-center"><input class="form-control" type="text" id="SatuanInputBahanBaku1Produk12018"></td>
																									<td class="align-middle text-center"><input class="form-control" type="text" id="SatuanPembelianBahanBaku1Produk12018"></td>
																									<td class="align-middle text-center"><input class="form-control" type="text" id="HargaBeliBahanBaku1Produk12018" placeholder="0"></td>
																								</tr>
																								<tr>
																									<td class="align-middle text-center">2</td>
																									<td class="align-middle text-center"><input class="form-control" type="text" id="BahanBaku2Produk12018"></td>
																									<td class="align-middle text-center"><input class="form-control" type="text" id="KapasitasInputBahanBaku2Produk12018" placeholder="0"></td>
																									<td class="align-middle text-center">
																										<select class="custom-select" id="RentangInputBahanBaku2Produk12018">  
																											<option value="Harian">Harian</option>
																											<option value="Mingguan">Mingguan</option>
																											<option value="Bulanan">Bulanan</option>
																											<option value="Tahunan">Tahunan</option>
																										</select>
																									</td>
																									<td class="align-middle text-center"><input class="form-control" type="text" id="SatuanInputBahanBaku2Produk12018"></td>
																									<td class="align-middle text-center"><input class="form-control" type="text" id="SatuanPembelianBahanBaku2Produk12018"></td>
																									<td class="align-middle text-center"><input class="form-control" type="text" id="HargaBeliBahanBaku2Produk12018" placeholder="0"></td>
																								</tr>
																								<tr>
																									<td class="align-middle text-center">3</td>
																									<td class="align-middle text-center"><input class="form-control" type="text" id="BahanBaku3Produk12018"></td>
																									<td class="align-middle text-center"><input class="form-control" type="text" id="KapasitasInputBahanBaku3Produk12018" placeholder="0"></td>
																									<td class="align-middle text-center">
																										<select class="custom-select" id="RentangInputBahanBaku3Produk12018">  
																											<option value="Harian">Harian</option>
																											<option value="Mingguan">Mingguan</option>
																											<option value="Bulanan">Bulanan</option>
																											<option value="Tahunan">Tahunan</option>
																										</select>
																									</td>
																									<td class="align-middle text-center"><input class="form-control" type="text" id="SatuanInputBahanBaku3Produk12018"></td>
																									<td class="align-middle text-center"><input class="form-control" type="text" id="SatuanPembelianBahanBaku3Produk12018"></td>
																									<td class="align-middle text-center"><input class="form-control" type="text" id="HargaBeliBahanBaku3Produk12018" placeholder="0"></td>
																								</tr>
																								<tr>
																									<td class="align-middle text-center">4</td>
																									<td class="align-middle text-center"><input class="form-control" type="text" id="BahanBaku4Produk12018"></td>
																									<td class="align-middle text-center"><input class="form-control" type="text" id="KapasitasInputBahanBaku4Produk12018" placeholder="0"></td>
																									<td class="align-middle text-center">
																										<select class="custom-select" id="RentangInputBahanBaku4Produk12018">  
																											<option value="Harian">Harian</option>
																											<option value="Mingguan">Mingguan</option>
																											<option value="Bulanan">Bulanan</option>
																											<option value="Tahunan">Tahunan</option>
																										</select>
																									</td>
																									<td class="align-middle text-center"><input class="form-control" type="text" id="SatuanInputBahanBaku4Produk12018"></td>
																									<td class="align-middle text-center"><input class="form-control" type="text" id="SatuanPembelianBahanBaku4Produk12018"></td>
																									<td class="align-middle text-center"><input class="form-control" type="text" id="HargaBeliBahanBaku4Produk12018" placeholder="0"></td>
																								</tr>
																							</tbody>
																						</table>
																					</div>
																				</div> 
																			</div>
																		</div>
																	</div>
																</div>
															</div>
															<div class="col-sm-12">
																<div class="card">
																	<div class="card-header bg-primary my-0">
																		<b>Bahan Baku Produk 2</b>
																	</div>
																	<div class="card-body border border-primary">
																		<div class="container-fluid bg-light">
																			<div class="row my-3">
																				<div class="col-sm-12 my-1">
																					<div class="table-responsive">
																						<table class="table table-bordered">
																							<thead>
																								<tr>
																									<th class="align-middle text-center" rowspan="2">No</th>
																									<th class="align-middle text-center" rowspan="2">Bahan Baku</th>
																									<th class="align-middle text-center" colspan="3">Input</th>
																									<th class="align-middle text-center" colspan="2">Pembelian</th>
																								</tr>
																								<tr>
																									<th class="align-middle text-center" >Kapasitas Input</th>
																									<th class="align-middle text-center">Rentang Input</th>
																									<th class="align-middle text-center" >Satuan (Kg/Lainnya)</th>
																									<th class="align-middle text-center">Satuan (Kg/Lainnya)</th>
																									<th class="align-middle text-center">Harga Beli (Rp)</th>
																								</tr>
																							</thead>
																							<tbody>
																								<tr>
																									<td class="align-middle text-center">1</td>
																									<td class="align-middle text-center"><input class="form-control" type="text" id="BahanBaku1Produk22018"></td>
																									<td class="align-middle text-center"><input class="form-control" type="text" id="KapasitasInputBahanBaku1Produk22018" placeholder="0"></td>
																									<td class="align-middle text-center">
																										<select class="custom-select" id="RentangInputBahanBaku1Produk22018">  
																											<option value="Harian">Harian</option>
																											<option value="Mingguan">Mingguan</option>
																											<option value="Bulanan">Bulanan</option>
																											<option value="Tahunan">Tahunan</option>
																										</select>
																									</td>
																									<td class="align-middle text-center"><input class="form-control" type="text" id="SatuanInputBahanBaku1Produk22018"></td>
																									<td class="align-middle text-center"><input class="form-control" type="text" id="SatuanPembelianBahanBaku1Produk22018"></td>
																									<td class="align-middle text-center"><input class="form-control" type="text" id="HargaBeliBahanBaku1Produk22018" placeholder="0"></td>
																								</tr>
																								<tr>
																									<td class="align-middle text-center">2</td>
																									<td class="align-middle text-center"><input class="form-control" type="text" id="BahanBaku2Produk22018"></td>
																									<td class="align-middle text-center"><input class="form-control" type="text" id="KapasitasInputBahanBaku2Produk22018" placeholder="0"></td>
																									<td class="align-middle text-center">
																										<select class="custom-select" id="RentangInputBahanBaku2Produk22018">  
																											<option value="Harian">Harian</option>
																											<option value="Mingguan">Mingguan</option>
																											<option value="Bulanan">Bulanan</option>
																											<option value="Tahunan">Tahunan</option>
																										</select>
																									</td>
																									<td class="align-middle text-center"><input class="form-control" type="text" id="SatuanInputBahanBaku2Produk22018"></td>
																									<td class="align-middle text-center"><input class="form-control" type="text" id="SatuanPembelianBahanBaku2Produk22018"></td>
																									<td class="align-middle text-center"><input class="form-control" type="text" id="HargaBeliBahanBaku2Produk22018" placeholder="0"></td>
																								</tr>
																								<tr>
																									<td class="align-middle text-center">3</td>
																									<td class="align-middle text-center"><input class="form-control" type="text" id="BahanBaku3Produk22018"></td>
																									<td class="align-middle text-center"><input class="form-control" type="text" id="KapasitasInputBahanBaku3Produk22018" placeholder="0"></td>
																									<td class="align-middle text-center">
																										<select class="custom-select" id="RentangInputBahanBaku3Produk22018">  
																											<option value="Harian">Harian</option>
																											<option value="Mingguan">Mingguan</option>
																											<option value="Bulanan">Bulanan</option>
																											<option value="Tahunan">Tahunan</option>
																										</select>
																									</td>
																									<td class="align-middle text-center"><input class="form-control" type="text" id="SatuanInputBahanBaku3Produk22018"></td>
																									<td class="align-middle text-center"><input class="form-control" type="text" id="SatuanPembelianBahanBaku3Produk22018"></td>
																									<td class="align-middle text-center"><input class="form-control" type="text" id="HargaBeliBahanBaku3Produk22018" placeholder="0"></td>
																								</tr>
																								<tr>
																									<td class="align-middle text-center">4</td>
																									<td class="align-middle text-center"><input class="form-control" type="text" id="BahanBaku4Produk22018"></td>
																									<td class="align-middle text-center"><input class="form-control" type="text" id="KapasitasInputBahanBaku4Produk22018" placeholder="0"></td>
																									<td class="align-middle text-center">
																										<select class="custom-select" id="RentangInputBahanBaku4Produk22018">  
																											<option value="Harian">Harian</option>
																											<option value="Mingguan">Mingguan</option>
																											<option value="Bulanan">Bulanan</option>
																											<option value="Tahunan">Tahunan</option>
																										</select>
																									</td>
																									<td class="align-middle text-center"><input class="form-control" type="text" id="SatuanInputBahanBaku4Produk22018"></td>
																									<td class="align-middle text-center"><input class="form-control" type="text" id="SatuanPembelianBahanBaku4Produk22018"></td>
																									<td class="align-middle text-center"><input class="form-control" type="text" id="HargaBeliBahanBaku4Produk22018" placeholder="0"></td>
																								</tr>
																							</tbody>
																						</table>
																					</div>
																				</div> 
																			</div>
																		</div>
																	</div>
																</div>
															</div>
															<div class="col-sm-12">
																<div class="card">
																	<div class="card-header bg-primary my-0">
																		<b>Bahan Baku Produk 3</b>
																	</div>
																	<div class="card-body border border-primary">
																		<div class="container-fluid bg-light">
																			<div class="row my-3">
																				<div class="col-sm-12 my-1">
																					<div class="table-responsive">
																						<table class="table table-bordered">
																							<thead>
																								<tr>
																									<th class="align-middle text-center" rowspan="2">No</th>
																									<th class="align-middle text-center" rowspan="2">Bahan Baku</th>
																									<th class="align-middle text-center" colspan="3">Input</th>
																									<th class="align-middle text-center" colspan="2">Pembelian</th>
																								</tr>
																								<tr>
																									<th class="align-middle text-center" >Kapasitas Input</th>
																									<th class="align-middle text-center">Rentang Input</th>
																									<th class="align-middle text-center" >Satuan (Kg/Lainnya)</th>
																									<th class="align-middle text-center">Satuan (Kg/Lainnya)</th>
																									<th class="align-middle text-center">Harga Beli (Rp)</th>
																								</tr>
																							</thead>
																							<tbody>
																								<tr>
																									<td class="align-middle text-center">1</td>
																									<td class="align-middle text-center"><input class="form-control" type="text" id="BahanBaku1Produk32018"></td>
																									<td class="align-middle text-center"><input class="form-control" type="text" id="KapasitasInputBahanBaku1Produk32018" placeholder="0"></td>
																									<td class="align-middle text-center">
																										<select class="custom-select" id="RentangInputBahanBaku1Produk32018">  
																											<option value="Harian">Harian</option>
																											<option value="Mingguan">Mingguan</option>
																											<option value="Bulanan">Bulanan</option>
																											<option value="Tahunan">Tahunan</option>
																										</select>
																									</td>
																									<td class="align-middle text-center"><input class="form-control" type="text" id="SatuanInputBahanBaku1Produk32018"></td>
																									<td class="align-middle text-center"><input class="form-control" type="text" id="SatuanPembelianBahanBaku1Produk32018"></td>
																									<td class="align-middle text-center"><input class="form-control" type="text" id="HargaBeliBahanBaku1Produk32018" placeholder="0"></td>
																								</tr>
																								<tr>
																									<td class="align-middle text-center">2</td>
																									<td class="align-middle text-center"><input class="form-control" type="text" id="BahanBaku2Produk32018"></td>
																									<td class="align-middle text-center"><input class="form-control" type="text" id="KapasitasInputBahanBaku2Produk32018" placeholder="0"></td>
																									<td class="align-middle text-center">
																										<select class="custom-select" id="RentangInputBahanBaku2Produk32018">  
																											<option value="Harian">Harian</option>
																											<option value="Mingguan">Mingguan</option>
																											<option value="Bulanan">Bulanan</option>
																											<option value="Tahunan">Tahunan</option>
																										</select>
																									</td>
																									<td class="align-middle text-center"><input class="form-control" type="text" id="SatuanInputBahanBaku2Produk32018"></td>
																									<td class="align-middle text-center"><input class="form-control" type="text" id="SatuanPembelianBahanBaku2Produk32018"></td>
																									<td class="align-middle text-center"><input class="form-control" type="text" id="HargaBeliBahanBaku2Produk32018" placeholder="0"></td>
																								</tr>
																								<tr>
																									<td class="align-middle text-center">3</td>
																									<td class="align-middle text-center"><input class="form-control" type="text" id="BahanBaku3Produk32018"></td>
																									<td class="align-middle text-center"><input class="form-control" type="text" id="KapasitasInputBahanBaku3Produk32018" placeholder="0"></td>
																									<td class="align-middle text-center">
																										<select class="custom-select" id="RentangInputBahanBaku3Produk32018">  
																											<option value="Harian">Harian</option>
																											<option value="Mingguan">Mingguan</option>
																											<option value="Bulanan">Bulanan</option>
																											<option value="Tahunan">Tahunan</option>
																										</select>
																									</td>
																									<td class="align-middle text-center"><input class="form-control" type="text" id="SatuanInputBahanBaku3Produk32018"></td>
																									<td class="align-middle text-center"><input class="form-control" type="text" id="SatuanPembelianBahanBaku3Produk32018"></td>
																									<td class="align-middle text-center"><input class="form-control" type="text" id="HargaBeliBahanBaku3Produk32018" placeholder="0"></td>
																								</tr>
																								<tr>
																									<td class="align-middle text-center">4</td>
																									<td class="align-middle text-center"><input class="form-control" type="text" id="BahanBaku4Produk32018"></td>
																									<td class="align-middle text-center"><input class="form-control" type="text" id="KapasitasInputBahanBaku4Produk32018" placeholder="0"></td>
																									<td class="align-middle text-center">
																										<select class="custom-select" id="RentangInputBahanBaku4Produk32018">  
																											<option value="Harian">Harian</option>
																											<option value="Mingguan">Mingguan</option>
																											<option value="Bulanan">Bulanan</option>
																											<option value="Tahunan">Tahunan</option>
																										</select>
																									</td>
																									<td class="align-middle text-center"><input class="form-control" type="text" id="SatuanInputBahanBaku4Produk32018"></td>
																									<td class="align-middle text-center"><input class="form-control" type="text" id="SatuanPembelianBahanBaku4Produk32018"></td>
																									<td class="align-middle text-center"><input class="form-control" type="text" id="HargaBeliBahanBaku4Produk32018" placeholder="0"></td>
																								</tr>
																							</tbody>
																						</table>
																					</div>
																				</div> 
																			</div>
																		</div>
																	</div>
																</div>
															</div>
															<div class="col-sm-12">
																<div class="card">
																	<div class="card-header bg-primary my-0">
																		<b>Bahan Baku Produk 4</b>
																	</div>
																	<div class="card-body border border-primary">
																		<div class="container-fluid bg-light">
																			<div class="row my-3">
																				<div class="col-sm-12 my-1">
																					<div class="table-responsive">
																						<table class="table table-bordered">
																							<thead>
																								<tr>
																									<th class="align-middle text-center" rowspan="2">No</th>
																									<th class="align-middle text-center" rowspan="2">Bahan Baku</th>
																									<th class="align-middle text-center" colspan="3">Input</th>
																									<th class="align-middle text-center" colspan="2">Pembelian</th>
																								</tr>
																								<tr>
																									<th class="align-middle text-center" >Kapasitas Input</th>
																									<th class="align-middle text-center">Rentang Input</th>
																									<th class="align-middle text-center" >Satuan (Kg/Lainnya)</th>
																									<th class="align-middle text-center">Satuan (Kg/Lainnya)</th>
																									<th class="align-middle text-center">Harga Beli (Rp)</th>
																								</tr>
																							</thead>
																							<tbody>
																								<tr>
																									<td class="align-middle text-center">1</td>
																									<td class="align-middle text-center"><input class="form-control" type="text" id="BahanBaku1Produk42018"></td>
																									<td class="align-middle text-center"><input class="form-control" type="text" id="KapasitasInputBahanBaku1Produk42018" placeholder="0"></td>
																									<td class="align-middle text-center">
																										<select class="custom-select" id="RentangInputBahanBaku1Produk42018">  
																											<option value="Harian">Harian</option>
																											<option value="Mingguan">Mingguan</option>
																											<option value="Bulanan">Bulanan</option>
																											<option value="Tahunan">Tahunan</option>
																										</select>
																									</td>
																									<td class="align-middle text-center"><input class="form-control" type="text" id="SatuanInputBahanBaku1Produk42018"></td>
																									<td class="align-middle text-center"><input class="form-control" type="text" id="SatuanPembelianBahanBaku1Produk42018"></td>
																									<td class="align-middle text-center"><input class="form-control" type="text" id="HargaBeliBahanBaku1Produk42018" placeholder="0"></td>
																								</tr>
																								<tr>
																									<td class="align-middle text-center">2</td>
																									<td class="align-middle text-center"><input class="form-control" type="text" id="BahanBaku2Produk42018"></td>
																									<td class="align-middle text-center"><input class="form-control" type="text" id="KapasitasInputBahanBaku2Produk42018" placeholder="0"></td>
																									<td class="align-middle text-center">
																										<select class="custom-select" id="RentangInputBahanBaku2Produk42018">  
																											<option value="Harian">Harian</option>
																											<option value="Mingguan">Mingguan</option>
																											<option value="Bulanan">Bulanan</option>
																											<option value="Tahunan">Tahunan</option>
																										</select>
																									</td>
																									<td class="align-middle text-center"><input class="form-control" type="text" id="SatuanInputBahanBaku2Produk42018"></td>
																									<td class="align-middle text-center"><input class="form-control" type="text" id="SatuanPembelianBahanBaku2Produk42018"></td>
																									<td class="align-middle text-center"><input class="form-control" type="text" id="HargaBeliBahanBaku2Produk42018" placeholder="0"></td>
																								</tr>
																								<tr>
																									<td class="align-middle text-center">3</td>
																									<td class="align-middle text-center"><input class="form-control" type="text" id="BahanBaku3Produk42018"></td>
																									<td class="align-middle text-center"><input class="form-control" type="text" id="KapasitasInputBahanBaku3Produk42018" placeholder="0"></td>
																									<td class="align-middle text-center">
																										<select class="custom-select" id="RentangInputBahanBaku3Produk42018">  
																											<option value="Harian">Harian</option>
																											<option value="Mingguan">Mingguan</option>
																											<option value="Bulanan">Bulanan</option>
																											<option value="Tahunan">Tahunan</option>
																										</select>
																									</td>
																									<td class="align-middle text-center"><input class="form-control" type="text" id="SatuanInputBahanBaku3Produk42018"></td>
																									<td class="align-middle text-center"><input class="form-control" type="text" id="SatuanPembelianBahanBaku3Produk42018"></td>
																									<td class="align-middle text-center"><input class="form-control" type="text" id="HargaBeliBahanBaku3Produk42018" placeholder="0"></td>
																								</tr>
																								<tr>
																									<td class="align-middle text-center">4</td>
																									<td class="align-middle text-center"><input class="form-control" type="text" id="BahanBaku4Produk42018"></td>
																									<td class="align-middle text-center"><input class="form-control" type="text" id="KapasitasInputBahanBaku4Produk42018" placeholder="0"></td>
																									<td class="align-middle text-center">
																										<select class="custom-select" id="RentangInputBahanBaku4Produk42018">  
																											<option value="Harian">Harian</option>
																											<option value="Mingguan">Mingguan</option>
																											<option value="Bulanan">Bulanan</option>
																											<option value="Tahunan">Tahunan</option>
																										</select>
																									</td>
																									<td class="align-middle text-center"><input class="form-control" type="text" id="SatuanInputBahanBaku4Produk42018"></td>
																									<td class="align-middle text-center"><input class="form-control" type="text" id="SatuanPembelianBahanBaku4Produk42018"></td>
																									<td class="align-middle text-center"><input class="form-control" type="text" id="HargaBeliBahanBaku4Produk42018" placeholder="0"></td>
																								</tr>
																							</tbody>
																						</table>
																					</div>
																				</div> 
																			</div>
																		</div>
																	</div>
																</div>
															</div>
														</div>
													</div>
												</div> 
											</div>
										</div>
									</div>
								</div>
								<div class="card">
									<div class="card-header bg-success my-0">
										<b>Produksi Tahun 2019</b>
									</div>
									<div class="card-body border border-success">
										<div class="container-fluid bg-light">
											<div class="row my-3">
												<div class="col-sm-12 my-1">
													<div class="table-responsive">
														<table class="table table-bordered">
															<thead>
																<tr>
																	<th class="align-middle text-center" rowspan="2">No</th>
																	<th class="align-middle text-center" rowspan="2">Jenis Produk</th>
																	<th class="align-middle text-center" colspan="3">Produksi</th>
																	<th class="align-middle text-center" colspan="2">Penerimaan</th>
																</tr>
																<tr>
																	<th class="align-middle text-center" >Kapasitas Produksi</th>
																	<th class="align-middle text-center">Satuan (Kg/Lainnya)</th>
																	<th class="align-middle text-center" >Rentang Produksi</th>
																	<th class="align-middle text-center">Harga Jual (Rp)</th>
																	<th class="align-middle text-center">Omzet (Rp)</th>
																</tr>
															</thead>
															<tbody>
																<tr>
																	<td class="align-middle text-center">1</td>
																	<td class="align-middle text-center"><input class="form-control" type="text" id="Produk12019"></td>
																	<td class="align-middle text-center"><input class="form-control" type="text" id="KapasitasProduk12019" placeholder="0"></td>
																	<td class="align-middle text-center"><input class="form-control" type="text" id="SatuanProduk12019"></td>
																	<td class="align-middle text-center">
																		<select class="custom-select" id="RentangProduk12019">  
																			<option value="Harian">Harian</option>
																			<option value="Mingguan">Mingguan</option>
																			<option value="Bulanan">Bulanan</option>
																			<option value="Tahunan">Tahunan</option>
																		</select>
																	</td>
																	<td class="align-middle text-center"><input class="form-control" type="text" id="HargaJualProduk12019" placeholder="0"></td>
																	<td class="align-middle text-center"><input class="form-control" type="text" id="OmzetProduk12019" placeholder="0"></td>
																</tr>
																<tr>
																	<td class="align-middle text-center">2</td>
																	<td class="align-middle text-center"><input class="form-control" type="text" id="Produk22019"></td>
																	<td class="align-middle text-center"><input class="form-control" type="text" id="KapasitasProduk22019" placeholder="0"></td>
																	<td class="align-middle text-center"><input class="form-control" type="text" id="SatuanProduk22019"></td>
																	<td class="align-middle text-center">
																		<select class="custom-select" id="RentangProduk22019">  
																			<option value="Harian">Harian</option>
																			<option value="Mingguan">Mingguan</option>
																			<option value="Bulanan">Bulanan</option>
																			<option value="Tahunan">Tahunan</option>
																		</select>
																	</td>
																	<td class="align-middle text-center"><input class="form-control" type="text" id="HargaJualProduk22019" placeholder="0"></td>
																	<td class="align-middle text-center"><input class="form-control" type="text" id="OmzetProduk22019" placeholder="0"></td>
																</tr>
																<tr>
																	<td class="align-middle text-center">3</td>
																	<td class="align-middle text-center"><input class="form-control" type="text" id="Produk32019"></td>
																	<td class="align-middle text-center"><input class="form-control" type="text" id="KapasitasProduk32019" placeholder="0"></td>
																	<td class="align-middle text-center"><input class="form-control" type="text" id="SatuanProduk32019"></td>
																	<td class="align-middle text-center">
																		<select class="custom-select" id="RentangProduk32019">  
																			<option value="Harian">Harian</option>
																			<option value="Mingguan">Mingguan</option>
																			<option value="Bulanan">Bulanan</option>
																			<option value="Tahunan">Tahunan</option>
																		</select>
																	</td>
																	<td class="align-middle text-center"><input class="form-control" type="text" id="HargaJualProduk32019" placeholder="0"></td>
																	<td class="align-middle text-center"><input class="form-control" type="text" id="OmzetProduk32019" placeholder="0"></td>
																</tr>
																<tr>
																	<td class="align-middle text-center">4</td>
																	<td class="align-middle text-center"><input class="form-control" type="text" id="Produk42019"></td>
																	<td class="align-middle text-center"><input class="form-control" type="text" id="KapasitasProduk42019" placeholder="0"></td>
																	<td class="align-middle text-center"><input class="form-control" type="text" id="SatuanProduk42019"></td>
																	<td class="align-middle text-center">
																		<select class="custom-select" id="RentangProduk42019">  
																			<option value="Harian">Harian</option>
																			<option value="Mingguan">Mingguan</option>
																			<option value="Bulanan">Bulanan</option>
																			<option value="Tahunan">Tahunan</option>
																		</select>
																	</td>
																	<td class="align-middle text-center"><input class="form-control" type="text" id="HargaJualProduk42019" placeholder="0"></td>
																	<td class="align-middle text-center"><input class="form-control" type="text" id="OmzetProduk42019" placeholder="0"></td>
																</tr>
															</tbody>
														</table>
													</div>
													<div class="container-fluid">
														<div class="row">
															<div class="col-sm-12">
																<div class="card">
																	<div class="card-header bg-primary my-0">
																		<b>Bahan Baku Produk 1</b>
																	</div>
																	<div class="card-body border border-primary">
																		<div class="container-fluid bg-light">
																			<div class="row my-3">
																				<div class="col-sm-12 my-1">
																					<div class="table-responsive">
																						<table class="table table-bordered">
																							<thead>
																								<tr>
																									<th class="align-middle text-center" rowspan="2">No</th>
																									<th class="align-middle text-center" rowspan="2">Bahan Baku</th>
																									<th class="align-middle text-center" colspan="3">Input</th>
																									<th class="align-middle text-center" colspan="2">Pembelian</th>
																								</tr>
																								<tr>
																									<th class="align-middle text-center" >Kapasitas Input</th>
																									<th class="align-middle text-center">Rentang Input</th>
																									<th class="align-middle text-center" >Satuan (Kg/Lainnya)</th>
																									<th class="align-middle text-center">Satuan (Kg/Lainnya)</th>
																									<th class="align-middle text-center">Harga Beli (Rp)</th>
																								</tr>
																							</thead>
																							<tbody>
																								<tr>
																									<td class="align-middle text-center">1</td>
																									<td class="align-middle text-center"><input class="form-control" type="text" id="BahanBaku1Produk12019"></td>
																									<td class="align-middle text-center"><input class="form-control" type="text" id="KapasitasInputBahanBaku1Produk12019" placeholder="0"></td>
																									<td class="align-middle text-center">
																										<select class="custom-select" id="RentangInputBahanBaku1Produk12019">  
																											<option value="Harian">Harian</option>
																											<option value="Mingguan">Mingguan</option>
																											<option value="Bulanan">Bulanan</option>
																											<option value="Tahunan">Tahunan</option>
																										</select>
																									</td>
																									<td class="align-middle text-center"><input class="form-control" type="text" id="SatuanInputBahanBaku1Produk12019"></td>
																									<td class="align-middle text-center"><input class="form-control" type="text" id="SatuanPembelianBahanBaku1Produk12019"></td>
																									<td class="align-middle text-center"><input class="form-control" type="text" id="HargaBeliBahanBaku1Produk12019" placeholder="0"></td>
																								</tr>
																								<tr>
																									<td class="align-middle text-center">2</td>
																									<td class="align-middle text-center"><input class="form-control" type="text" id="BahanBaku2Produk12019"></td>
																									<td class="align-middle text-center"><input class="form-control" type="text" id="KapasitasInputBahanBaku2Produk12019" placeholder="0"></td>
																									<td class="align-middle text-center">
																										<select class="custom-select" id="RentangInputBahanBaku2Produk12019">  
																											<option value="Harian">Harian</option>
																											<option value="Mingguan">Mingguan</option>
																											<option value="Bulanan">Bulanan</option>
																											<option value="Tahunan">Tahunan</option>
																										</select>
																									</td>
																									<td class="align-middle text-center"><input class="form-control" type="text" id="SatuanInputBahanBaku2Produk12019"></td>
																									<td class="align-middle text-center"><input class="form-control" type="text" id="SatuanPembelianBahanBaku2Produk12019"></td>
																									<td class="align-middle text-center"><input class="form-control" type="text" id="HargaBeliBahanBaku2Produk12019" placeholder="0"></td>
																								</tr>
																								<tr>
																									<td class="align-middle text-center">3</td>
																									<td class="align-middle text-center"><input class="form-control" type="text" id="BahanBaku3Produk12019"></td>
																									<td class="align-middle text-center"><input class="form-control" type="text" id="KapasitasInputBahanBaku3Produk12019" placeholder="0"></td>
																									<td class="align-middle text-center">
																										<select class="custom-select" id="RentangInputBahanBaku3Produk12019">  
																											<option value="Harian">Harian</option>
																											<option value="Mingguan">Mingguan</option>
																											<option value="Bulanan">Bulanan</option>
																											<option value="Tahunan">Tahunan</option>
																										</select>
																									</td>
																									<td class="align-middle text-center"><input class="form-control" type="text" id="SatuanInputBahanBaku3Produk12019"></td>
																									<td class="align-middle text-center"><input class="form-control" type="text" id="SatuanPembelianBahanBaku3Produk12019"></td>
																									<td class="align-middle text-center"><input class="form-control" type="text" id="HargaBeliBahanBaku3Produk12019" placeholder="0"></td>
																								</tr>
																								<tr>
																									<td class="align-middle text-center">4</td>
																									<td class="align-middle text-center"><input class="form-control" type="text" id="BahanBaku4Produk12019"></td>
																									<td class="align-middle text-center"><input class="form-control" type="text" id="KapasitasInputBahanBaku4Produk12019" placeholder="0"></td>
																									<td class="align-middle text-center">
																										<select class="custom-select" id="RentangInputBahanBaku4Produk12019">  
																											<option value="Harian">Harian</option>
																											<option value="Mingguan">Mingguan</option>
																											<option value="Bulanan">Bulanan</option>
																											<option value="Tahunan">Tahunan</option>
																										</select>
																									</td>
																									<td class="align-middle text-center"><input class="form-control" type="text" id="SatuanInputBahanBaku4Produk12019"></td>
																									<td class="align-middle text-center"><input class="form-control" type="text" id="SatuanPembelianBahanBaku4Produk12019"></td>
																									<td class="align-middle text-center"><input class="form-control" type="text" id="HargaBeliBahanBaku4Produk12019" placeholder="0"></td>
																								</tr>
																							</tbody>
																						</table>
																					</div>
																				</div> 
																			</div>
																		</div>
																	</div>
																</div>
															</div>
															<div class="col-sm-12">
																<div class="card">
																	<div class="card-header bg-primary my-0">
																		<b>Bahan Baku Produk 2</b>
																	</div>
																	<div class="card-body border border-primary">
																		<div class="container-fluid bg-light">
																			<div class="row my-3">
																				<div class="col-sm-12 my-1">
																					<div class="table-responsive">
																						<table class="table table-bordered">
																							<thead>
																								<tr>
																									<th class="align-middle text-center" rowspan="2">No</th>
																									<th class="align-middle text-center" rowspan="2">Bahan Baku</th>
																									<th class="align-middle text-center" colspan="3">Input</th>
																									<th class="align-middle text-center" colspan="2">Pembelian</th>
																								</tr>
																								<tr>
																									<th class="align-middle text-center" >Kapasitas Input</th>
																									<th class="align-middle text-center">Rentang Input</th>
																									<th class="align-middle text-center" >Satuan (Kg/Lainnya)</th>
																									<th class="align-middle text-center">Satuan (Kg/Lainnya)</th>
																									<th class="align-middle text-center">Harga Beli (Rp)</th>
																								</tr>
																							</thead>
																							<tbody>
																								<tr>
																									<td class="align-middle text-center">1</td>
																									<td class="align-middle text-center"><input class="form-control" type="text" id="BahanBaku1Produk22019"></td>
																									<td class="align-middle text-center"><input class="form-control" type="text" id="KapasitasInputBahanBaku1Produk22019" placeholder="0"></td>
																									<td class="align-middle text-center">
																										<select class="custom-select" id="RentangInputBahanBaku1Produk22019">  
																											<option value="Harian">Harian</option>
																											<option value="Mingguan">Mingguan</option>
																											<option value="Bulanan">Bulanan</option>
																											<option value="Tahunan">Tahunan</option>
																										</select>
																									</td>
																									<td class="align-middle text-center"><input class="form-control" type="text" id="SatuanInputBahanBaku1Produk22019"></td>
																									<td class="align-middle text-center"><input class="form-control" type="text" id="SatuanPembelianBahanBaku1Produk22019"></td>
																									<td class="align-middle text-center"><input class="form-control" type="text" id="HargaBeliBahanBaku1Produk22019" placeholder="0"></td>
																								</tr>
																								<tr>
																									<td class="align-middle text-center">2</td>
																									<td class="align-middle text-center"><input class="form-control" type="text" id="BahanBaku2Produk22019"></td>
																									<td class="align-middle text-center"><input class="form-control" type="text" id="KapasitasInputBahanBaku2Produk22019" placeholder="0"></td>
																									<td class="align-middle text-center">
																										<select class="custom-select" id="RentangInputBahanBaku2Produk22019">  
																											<option value="Harian">Harian</option>
																											<option value="Mingguan">Mingguan</option>
																											<option value="Bulanan">Bulanan</option>
																											<option value="Tahunan">Tahunan</option>
																										</select>
																									</td>
																									<td class="align-middle text-center"><input class="form-control" type="text" id="SatuanInputBahanBaku2Produk22019"></td>
																									<td class="align-middle text-center"><input class="form-control" type="text" id="SatuanPembelianBahanBaku2Produk22019"></td>
																									<td class="align-middle text-center"><input class="form-control" type="text" id="HargaBeliBahanBaku2Produk22019" placeholder="0"></td>
																								</tr>
																								<tr>
																									<td class="align-middle text-center">3</td>
																									<td class="align-middle text-center"><input class="form-control" type="text" id="BahanBaku3Produk22019"></td>
																									<td class="align-middle text-center"><input class="form-control" type="text" id="KapasitasInputBahanBaku3Produk22019" placeholder="0"></td>
																									<td class="align-middle text-center">
																										<select class="custom-select" id="RentangInputBahanBaku3Produk22019">  
																											<option value="Harian">Harian</option>
																											<option value="Mingguan">Mingguan</option>
																											<option value="Bulanan">Bulanan</option>
																											<option value="Tahunan">Tahunan</option>
																										</select>
																									</td>
																									<td class="align-middle text-center"><input class="form-control" type="text" id="SatuanInputBahanBaku3Produk22019"></td>
																									<td class="align-middle text-center"><input class="form-control" type="text" id="SatuanPembelianBahanBaku3Produk22019"></td>
																									<td class="align-middle text-center"><input class="form-control" type="text" id="HargaBeliBahanBaku3Produk22019" placeholder="0"></td>
																								</tr>
																								<tr>
																									<td class="align-middle text-center">4</td>
																									<td class="align-middle text-center"><input class="form-control" type="text" id="BahanBaku4Produk22019"></td>
																									<td class="align-middle text-center"><input class="form-control" type="text" id="KapasitasInputBahanBaku4Produk22019" placeholder="0"></td>
																									<td class="align-middle text-center">
																										<select class="custom-select" id="RentangInputBahanBaku4Produk22019">  
																											<option value="Harian">Harian</option>
																											<option value="Mingguan">Mingguan</option>
																											<option value="Bulanan">Bulanan</option>
																											<option value="Tahunan">Tahunan</option>
																										</select>
																									</td>
																									<td class="align-middle text-center"><input class="form-control" type="text" id="SatuanInputBahanBaku4Produk22019"></td>
																									<td class="align-middle text-center"><input class="form-control" type="text" id="SatuanPembelianBahanBaku4Produk22019"></td>
																									<td class="align-middle text-center"><input class="form-control" type="text" id="HargaBeliBahanBaku4Produk22019" placeholder="0"></td>
																								</tr>
																							</tbody>
																						</table>
																					</div>
																				</div> 
																			</div>
																		</div>
																	</div>
																</div>
															</div>
															<div class="col-sm-12">
																<div class="card">
																	<div class="card-header bg-primary my-0">
																		<b>Bahan Baku Produk 3</b>
																	</div>
																	<div class="card-body border border-primary">
																		<div class="container-fluid bg-light">
																			<div class="row my-3">
																				<div class="col-sm-12 my-1">
																					<div class="table-responsive">
																						<table class="table table-bordered">
																							<thead>
																								<tr>
																									<th class="align-middle text-center" rowspan="2">No</th>
																									<th class="align-middle text-center" rowspan="2">Bahan Baku</th>
																									<th class="align-middle text-center" colspan="3">Input</th>
																									<th class="align-middle text-center" colspan="2">Pembelian</th>
																								</tr>
																								<tr>
																									<th class="align-middle text-center" >Kapasitas Input</th>
																									<th class="align-middle text-center">Rentang Input</th>
																									<th class="align-middle text-center" >Satuan (Kg/Lainnya)</th>
																									<th class="align-middle text-center">Satuan (Kg/Lainnya)</th>
																									<th class="align-middle text-center">Harga Beli (Rp)</th>
																								</tr>
																							</thead>
																							<tbody>
																								<tr>
																									<td class="align-middle text-center">1</td>
																									<td class="align-middle text-center"><input class="form-control" type="text" id="BahanBaku1Produk32019"></td>
																									<td class="align-middle text-center"><input class="form-control" type="text" id="KapasitasInputBahanBaku1Produk32019" placeholder="0"></td>
																									<td class="align-middle text-center">
																										<select class="custom-select" id="RentangInputBahanBaku1Produk32019">  
																											<option value="Harian">Harian</option>
																											<option value="Mingguan">Mingguan</option>
																											<option value="Bulanan">Bulanan</option>
																											<option value="Tahunan">Tahunan</option>
																										</select>
																									</td>
																									<td class="align-middle text-center"><input class="form-control" type="text" id="SatuanInputBahanBaku1Produk32019"></td>
																									<td class="align-middle text-center"><input class="form-control" type="text" id="SatuanPembelianBahanBaku1Produk32019"></td>
																									<td class="align-middle text-center"><input class="form-control" type="text" id="HargaBeliBahanBaku1Produk32019" placeholder="0"></td>
																								</tr>
																								<tr>
																									<td class="align-middle text-center">2</td>
																									<td class="align-middle text-center"><input class="form-control" type="text" id="BahanBaku2Produk32019"></td>
																									<td class="align-middle text-center"><input class="form-control" type="text" id="KapasitasInputBahanBaku2Produk32019" placeholder="0"></td>
																									<td class="align-middle text-center">
																										<select class="custom-select" id="RentangInputBahanBaku2Produk32019">  
																											<option value="Harian">Harian</option>
																											<option value="Mingguan">Mingguan</option>
																											<option value="Bulanan">Bulanan</option>
																											<option value="Tahunan">Tahunan</option>
																										</select>
																									</td>
																									<td class="align-middle text-center"><input class="form-control" type="text" id="SatuanInputBahanBaku2Produk32019"></td>
																									<td class="align-middle text-center"><input class="form-control" type="text" id="SatuanPembelianBahanBaku2Produk32019"></td>
																									<td class="align-middle text-center"><input class="form-control" type="text" id="HargaBeliBahanBaku2Produk32019" placeholder="0"></td>
																								</tr>
																								<tr>
																									<td class="align-middle text-center">3</td>
																									<td class="align-middle text-center"><input class="form-control" type="text" id="BahanBaku3Produk32019"></td>
																									<td class="align-middle text-center"><input class="form-control" type="text" id="KapasitasInputBahanBaku3Produk32019" placeholder="0"></td>
																									<td class="align-middle text-center">
																										<select class="custom-select" id="RentangInputBahanBaku3Produk32019">  
																											<option value="Harian">Harian</option>
																											<option value="Mingguan">Mingguan</option>
																											<option value="Bulanan">Bulanan</option>
																											<option value="Tahunan">Tahunan</option>
																										</select>
																									</td>
																									<td class="align-middle text-center"><input class="form-control" type="text" id="SatuanInputBahanBaku3Produk32019"></td>
																									<td class="align-middle text-center"><input class="form-control" type="text" id="SatuanPembelianBahanBaku3Produk32019"></td>
																									<td class="align-middle text-center"><input class="form-control" type="text" id="HargaBeliBahanBaku3Produk32019" placeholder="0"></td>
																								</tr>
																								<tr>
																									<td class="align-middle text-center">4</td>
																									<td class="align-middle text-center"><input class="form-control" type="text" id="BahanBaku4Produk32019"></td>
																									<td class="align-middle text-center"><input class="form-control" type="text" id="KapasitasInputBahanBaku4Produk32019" placeholder="0"></td>
																									<td class="align-middle text-center">
																										<select class="custom-select" id="RentangInputBahanBaku4Produk32019">  
																											<option value="Harian">Harian</option>
																											<option value="Mingguan">Mingguan</option>
																											<option value="Bulanan">Bulanan</option>
																											<option value="Tahunan">Tahunan</option>
																										</select>
																									</td>
																									<td class="align-middle text-center"><input class="form-control" type="text" id="SatuanInputBahanBaku4Produk32019"></td>
																									<td class="align-middle text-center"><input class="form-control" type="text" id="SatuanPembelianBahanBaku4Produk32019"></td>
																									<td class="align-middle text-center"><input class="form-control" type="text" id="HargaBeliBahanBaku4Produk32019" placeholder="0"></td>
																								</tr>
																							</tbody>
																						</table>
																					</div>
																				</div> 
																			</div>
																		</div>
																	</div>
																</div>
															</div>
															<div class="col-sm-12">
																<div class="card">
																	<div class="card-header bg-primary my-0">
																		<b>Bahan Baku Produk 4</b>
																	</div>
																	<div class="card-body border border-primary">
																		<div class="container-fluid bg-light">
																			<div class="row my-3">
																				<div class="col-sm-12 my-1">
																					<div class="table-responsive">
																						<table class="table table-bordered">
																							<thead>
																								<tr>
																									<th class="align-middle text-center" rowspan="2">No</th>
																									<th class="align-middle text-center" rowspan="2">Bahan Baku</th>
																									<th class="align-middle text-center" colspan="3">Input</th>
																									<th class="align-middle text-center" colspan="2">Pembelian</th>
																								</tr>
																								<tr>
																									<th class="align-middle text-center" >Kapasitas Input</th>
																									<th class="align-middle text-center">Rentang Input</th>
																									<th class="align-middle text-center" >Satuan (Kg/Lainnya)</th>
																									<th class="align-middle text-center">Satuan (Kg/Lainnya)</th>
																									<th class="align-middle text-center">Harga Beli (Rp)</th>
																								</tr>
																							</thead>
																							<tbody>
																								<tr>
																									<td class="align-middle text-center">1</td>
																									<td class="align-middle text-center"><input class="form-control" type="text" id="BahanBaku1Produk42019"></td>
																									<td class="align-middle text-center"><input class="form-control" type="text" id="KapasitasInputBahanBaku1Produk42019" placeholder="0"></td>
																									<td class="align-middle text-center">
																										<select class="custom-select" id="RentangInputBahanBaku1Produk42019">  
																											<option value="Harian">Harian</option>
																											<option value="Mingguan">Mingguan</option>
																											<option value="Bulanan">Bulanan</option>
																											<option value="Tahunan">Tahunan</option>
																										</select>
																									</td>
																									<td class="align-middle text-center"><input class="form-control" type="text" id="SatuanInputBahanBaku1Produk42019"></td>
																									<td class="align-middle text-center"><input class="form-control" type="text" id="SatuanPembelianBahanBaku1Produk42019"></td>
																									<td class="align-middle text-center"><input class="form-control" type="text" id="HargaBeliBahanBaku1Produk42019" placeholder="0"></td>
																								</tr>
																								<tr>
																									<td class="align-middle text-center">2</td>
																									<td class="align-middle text-center"><input class="form-control" type="text" id="BahanBaku2Produk42019"></td>
																									<td class="align-middle text-center"><input class="form-control" type="text" id="KapasitasInputBahanBaku2Produk42019" placeholder="0"></td>
																									<td class="align-middle text-center">
																										<select class="custom-select" id="RentangInputBahanBaku2Produk42019">  
																											<option value="Harian">Harian</option>
																											<option value="Mingguan">Mingguan</option>
																											<option value="Bulanan">Bulanan</option>
																											<option value="Tahunan">Tahunan</option>
																										</select>
																									</td>
																									<td class="align-middle text-center"><input class="form-control" type="text" id="SatuanInputBahanBaku2Produk42019"></td>
																									<td class="align-middle text-center"><input class="form-control" type="text" id="SatuanPembelianBahanBaku2Produk42019"></td>
																									<td class="align-middle text-center"><input class="form-control" type="text" id="HargaBeliBahanBaku2Produk42019" placeholder="0"></td>
																								</tr>
																								<tr>
																									<td class="align-middle text-center">3</td>
																									<td class="align-middle text-center"><input class="form-control" type="text" id="BahanBaku3Produk42019"></td>
																									<td class="align-middle text-center"><input class="form-control" type="text" id="KapasitasInputBahanBaku3Produk42019" placeholder="0"></td>
																									<td class="align-middle text-center">
																										<select class="custom-select" id="RentangInputBahanBaku3Produk42019">  
																											<option value="Harian">Harian</option>
																											<option value="Mingguan">Mingguan</option>
																											<option value="Bulanan">Bulanan</option>
																											<option value="Tahunan">Tahunan</option>
																										</select>
																									</td>
																									<td class="align-middle text-center"><input class="form-control" type="text" id="SatuanInputBahanBaku3Produk42019"></td>
																									<td class="align-middle text-center"><input class="form-control" type="text" id="SatuanPembelianBahanBaku3Produk42019"></td>
																									<td class="align-middle text-center"><input class="form-control" type="text" id="HargaBeliBahanBaku3Produk42019" placeholder="0"></td>
																								</tr>
																								<tr>
																									<td class="align-middle text-center">4</td>
																									<td class="align-middle text-center"><input class="form-control" type="text" id="BahanBaku4Produk42019"></td>
																									<td class="align-middle text-center"><input class="form-control" type="text" id="KapasitasInputBahanBaku4Produk42019" placeholder="0"></td>
																									<td class="align-middle text-center">
																										<select class="custom-select" id="RentangInputBahanBaku4Produk42019">  
																											<option value="Harian">Harian</option>
																											<option value="Mingguan">Mingguan</option>
																											<option value="Bulanan">Bulanan</option>
																											<option value="Tahunan">Tahunan</option>
																										</select>
																									</td>
																									<td class="align-middle text-center"><input class="form-control" type="text" id="SatuanInputBahanBaku4Produk42019"></td>
																									<td class="align-middle text-center"><input class="form-control" type="text" id="SatuanPembelianBahanBaku4Produk42019"></td>
																									<td class="align-middle text-center"><input class="form-control" type="text" id="HargaBeliBahanBaku4Produk42019" placeholder="0"></td>
																								</tr>
																							</tbody>
																						</table>
																					</div>
																				</div> 
																			</div>
																		</div>
																	</div>
																</div>
															</div>
														</div>
													</div>
												</div> 
											</div>
										</div>
									</div>
								</div>
								<div class="card">
									<div class="card-header bg-success my-0">
										<b>Input Primer</b>
									</div>
									<div class="card-body border border-success">
										<div class="container-fluid bg-light">
											<div class="row my-3">
												<div class="col-sm-12 my-1">
													<div class="table-responsive">
														<table class="table table-bordered">
															<thead>
																<tr>
																	<th class="align-middle text-center" rowspan="2">Jenis Pengeluaran</th>
																	<th class="align-middle text-center" rowspan="2">Rentang Waktu</th>
																	<th class="align-middle text-center" colspan="2">Nilai (Rp)</th>
																</tr>
																<tr>
																	<th class="align-middle text-center" >Tahun 2018</th>
																	<th class="align-middle text-center">Tahun 2019</th>
																</tr>
															</thead>
															<tbody>
																<tr>
																	<th class="align-middle text-center">Upah Gaji (Termasuk lembur, bonus, tunjangan, asuransi dll)</th>
																	<td class="align-middle text-center">
																		<select class="custom-select" id="RentangGaji2019">  
																			<option value="Harian">Harian</option>
																			<option value="Mingguan">Mingguan</option>
																			<option value="Bulanan">Bulanan</option>
																			<option value="Tahunan">Tahunan</option>
																		</select>
																	</td>
																	<td class="align-middle text-center"><input class="form-control" type="text" id="Gaji2018" placeholder="0"></td>
																	<td class="align-middle text-center"><input class="form-control" type="text" id="Gaji2019" placeholder="0"></td>
																</tr>
																<tr>
																	<th class="align-middle text-center">Surplus Usaha bruto</th>
																	<td class="align-middle text-center">
																		<select class="custom-select" id="RentangSurplus2019">  
																			<option value="Harian">Harian</option>
																			<option value="Mingguan">Mingguan</option>
																			<option value="Bulanan">Bulanan</option>
																			<option value="Tahunan">Tahunan</option>
																		</select>
																	</td>
																	<td class="align-middle text-center"><input class="form-control" type="text" id="Surplus2018" placeholder="0"></td>
																	<td class="align-middle text-center"><input class="form-control" type="text" id="Surplus2019" placeholder="0"></td>
																</tr>
																<tr>
																	<th class="align-middle text-center">Sewa (Gedung / tanah)</th>
																	<td class="align-middle text-center">
																		<select class="custom-select" id="RentangSewa2019">  
																			<option value="Harian">Harian</option>
																			<option value="Mingguan">Mingguan</option>
																			<option value="Bulanan">Bulanan</option>
																			<option value="Tahunan">Tahunan</option>
																		</select>
																	</td>
																	<td class="align-middle text-center"><input class="form-control" type="text" id="Sewa2018" placeholder="0"></td>
																	<td class="align-middle text-center"><input class="form-control" type="text" id="Sewa2019" placeholder="0"></td>
																</tr>
																<tr>
																	<th class="align-middle text-center">Bunga Atas pinjaman</th>
																	<td class="align-middle text-center">
																		<select class="custom-select" id="RentangBunga2019">  
																			<option value="Harian">Harian</option>
																			<option value="Mingguan">Mingguan</option>
																			<option value="Bulanan">Bulanan</option>
																			<option value="Tahunan">Tahunan</option>
																		</select>
																	</td>
																	<td class="align-middle text-center"><input class="form-control" type="text" id="Bunga2018" placeholder="0"></td>
																	<td class="align-middle text-center"><input class="form-control" type="text" id="Bunga2019" placeholder="0"></td>
																</tr>
															</tbody>
														</table>
													</div>
												</div> 
											</div>
										</div>
									</div>
								</div>
								<div class="card">
									<div class="card-header bg-success my-0">
										<b>Tenaga Kerja</b>
									</div>
									<div class="card-body border border-success">
										<div class="container-fluid bg-light">
											<div class="row my-3">
												<div class="col-sm-12 my-1">
													<div class="table-responsive">
														<table class="table table-bordered">
															<thead>
																<tr>
																	<th class="align-middle text-center" rowspan="2">Jenis Kelamin</th>
																	<th class="align-middle text-center" colspan="2">Jumlah (Orang)</th>
																</tr>
																<tr>
																	<th class="align-middle text-center" >Tahun 2018</th>
																	<th class="align-middle text-center">Tahun 2019</th>
																</tr>
															</thead>
															<tbody>
																<tr>
																	<th class="align-middle text-center">Laki-Laki</th>
																	<td class="align-middle text-center"><input class="form-control" type="text" id="Pria2018" placeholder="0"></td>
																	<td class="align-middle text-center"><input class="form-control" type="text" id="Perempuan2019" placeholder="0"></td>
																</tr>
																<tr>
																	<th class="align-middle text-center">Perempuan</th>
																	<td class="align-middle text-center"><input class="form-control" type="text" id="Pria2018" placeholder="0"></td>
																	<td class="align-middle text-center"><input class="form-control" type="text" id="Perempuan2019" placeholder="0"></td>
																</tr>
															</tbody>
														</table>
													</div>
													<div class="table-responsive">
														<table class="table table-bordered">
															<thead>
																<tr>
																	<th class="align-middle text-center" rowspan="2">Tingkat Pendidikan</th>
																	<th class="align-middle text-center" colspan="2">Jumlah (Orang)</th>
																</tr>
																<tr>
																	<th class="align-middle text-center" >Tahun 2018</th>
																	<th class="align-middle text-center">Tahun 2019</th>
																</tr>
															</thead>
															<tbody>
																<tr>
																	<th class="align-middle text-center">Tidak Sekolah</th>
																	<td class="align-middle text-center"><input class="form-control" type="text" id="TidakSekolah2018" placeholder="0"></td>
																	<td class="align-middle text-center"><input class="form-control" type="text" id="TidakSekolah2019" placeholder="0"></td>
																</tr>
																<tr>
																	<th class="align-middle text-center">SD</th>
																	<td class="align-middle text-center"><input class="form-control" type="text" id="SD2018" placeholder="0"></td>
																	<td class="align-middle text-center"><input class="form-control" type="text" id="SD2019" placeholder="0"></td>
																</tr>
																<tr>
																	<th class="align-middle text-center">SMP</th>
																	<td class="align-middle text-center"><input class="form-control" type="text" id="SMP2018" placeholder="0"></td>
																	<td class="align-middle text-center"><input class="form-control" type="text" id="SMP2019" placeholder="0"></td>
																</tr>
																<tr>
																	<th class="align-middle text-center">SMA</th>
																	<td class="align-middle text-center"><input class="form-control" type="text" id="SMA2018" placeholder="0"></td>
																	<td class="align-middle text-center"><input class="form-control" type="text" id="SMA2019" placeholder="0"></td>
																</tr>
																<tr>
																	<th class="align-middle text-center">Perguruan Tinggi</th>
																	<td class="align-middle text-center"><input class="form-control" type="text" id="Kuliah2018" placeholder="0"></td>
																	<td class="align-middle text-center"><input class="form-control" type="text" id="Kuliah2019" placeholder="0"></td>
																</tr>
															</tbody>
														</table>
													</div>
												</div> 
											</div>
										</div>
									</div>
								</div>
								<div class="card">
									<div class="card-header bg-success my-0">
										<b>Total Aset (Rp)</b>
									</div>
									<div class="card-body border border-success">
										<div class="container-fluid bg-light">
											<div class="row my-3">
												<div class="col-sm-12 my-1">
													<div class="table-responsive">
														<table class="table table-bordered">
															<thead>
																<tr>
																	<th class="align-middle text-center" rowspan="2">Jenis Aset</th>
																	<th class="align-middle text-center" colspan="2">Jumlah (Rp)</th>
																</tr>
																<tr>
																	<th class="align-middle text-center" >Tahun 2018</th>
																	<th class="align-middle text-center">Tahun 2019</th>
																</tr>
															</thead>
															<tbody>
																<tr>
																	<th class="align-middle text-center">Tanah</th>
																	<td class="align-middle text-center"><input class="form-control" type="text" id="Tanah2018" placeholder="0"></td>
																	<td class="align-middle text-center"><input class="form-control" type="text" id="Tanah2019" placeholder="0"></td>
																</tr>
																<tr>
																	<th class="align-middle text-center">Gedung</th>
																	<td class="align-middle text-center"><input class="form-control" type="text" id="Gedung2018" placeholder="0"></td>
																	<td class="align-middle text-center"><input class="form-control" type="text" id="Gedung2019" placeholder="0"></td>
																</tr>
																<tr>
																	<th class="align-middle text-center">Peralatan</th>
																	<td class="align-middle text-center"><input class="form-control" type="text" id="Peralatan2018" placeholder="0"></td>
																	<td class="align-middle text-center"><input class="form-control" type="text" id="Peralatan2019" placeholder="0"></td>
																</tr>
																<tr>
																	<th class="align-middle text-center">Mobil</th>
																	<td class="align-middle text-center"><input class="form-control" type="text" id="Mobil2018" placeholder="0"></td>
																	<td class="align-middle text-center"><input class="form-control" type="text" id="Mobil2019" placeholder="0"></td>
																</tr>
															</tbody>
														</table>
													</div>
												</div> 
											</div>
										</div>
									</div>
								</div>
								<div class="card">
									<div class="card-header bg-success my-0">
										<b>Informasi Dampak Pandemi</b>
									</div>
									<div class="card-body border border-success">
										<div class="container-fluid bg-light">
											<div class="row my-3">
												<div class="col-sm-12 my-1">
													<div class="input-group">
														<div class="input-group-prepend">
															<label class="input-group-text bg-primary text-dark"><b>Apakah usaha Anda terkena dampak pandemic Covid-19</b></label>
														</div>
														<select class="custom-select" id="DampakCovid">  
															<option value="1">Ya terdampak negatif/menurun</option>
															<option value="2">Ya terdampak positif/meningkat</option>
															<option value="3">Tidak terdampak</option>
														</select>
													</div>
												</div> 
												<div class="col-sm-12 my-1">
													<div class="input-group">
														<div class="input-group-prepend">
															<label class="input-group-text bg-primary text-dark"><b>Jika Iya, berapa persen dampak pandemic Covid-19 terhadap output / omzet usaha yang dirintis dibandingkan saat keadaan normal</b></label>
														</div>
														<input class="form-control" type="text" id="PersentaseDampakCovid">                    
														<div class="input-group-prepend">
															<label class="input-group-text bg-primary text-dark"><b>%</b></label>
														</div>
													</div>
												</div> 
												<div class="col-sm-12 my-1">
													<div class="input-group">
														<div class="input-group-prepend">
															<label class="input-group-text bg-primary text-dark"><b>Bagaimana optimisme pemulihan kondisi usaha di tahun depan</b></label>
														</div>
														<select class="custom-select" id="Optimisme">  
															<option value="1">Pesimis dan Kemungkinan akan tetap turun ditahun depan</option>
															<option value="2">Kemungkinan akan Stagnan seperti saat sekarang ditahun depan</option>
															<option value="3">Optimis meningkat namun sedikit ditahun depan</option>
															<option value="4">Optimis meningkat cepat dan pulih seperti semula ditahun depan</option>
														</select>
													</div>
												</div> 
											</div>
										</div>
									</div>
								</div>
								<div class="card">
									<div class="card-header bg-success my-0">
										<b>Informasi Lainnya</b>
									</div>
									<div class="card-body border border-success">
										<div class="container-fluid bg-light">
											<div class="row my-3">
												<div class="col-sm-6 my-1">
													<div class="input-group">
														<div class="input-group-prepend">
															<label class="input-group-text bg-primary text-dark"><b>Daerah pemasaran Produk</b></label>
														</div>
														<select class="custom-select" id="DaerahPemasaran">  
															<option value="1">Dalam Kota</option>
															<option value="2">Luar Kota</option>
															<option value="3">Luar Negeri</option>
														</select>
													</div>
												</div> 
												<div class="col-sm-6 my-1">
													<div class="input-group">
														<div class="input-group-prepend">
															<label class="input-group-text bg-primary text-dark"><b>Jenis Media Promosi</b></label>
														</div>
														<select class="custom-select" id="MediaPromosi">  
															<option value="1">Televisi</option>
															<option value="2">Radio</option>
															<option value="3">Surat Kabar</option>
															<option value="4">Pameran</option>
															<option value="5">Medsos</option>
															<option value="6">Website </option>
															<option value="7">Brosur</option>
															<option value="8">Media Luar</option>
															<option value="9">Lainnya</option>                      
														</select>
														<input class="form-control" type="text" id="MediaPromosiLainnya">    
													</div>
												</div> 
												<div class="col-sm-6 my-1">
													<div class="input-group">
														<div class="input-group-prepend">
															<label class="input-group-text bg-primary text-dark"><b>Apakah usaha anda memiliki HKI</b></label>
														</div>
														<select class="custom-select" id="HKI">  
															<option value="1">Ya</option>
															<option value="2">Tidak</option>
														</select>
													</div>
												</div> 
												<div class="col-sm-6 my-1">
													<div class="input-group">
														<div class="input-group-prepend">
															<label class="input-group-text bg-primary text-dark"><b>Apakah Usaha Ini Memiliki Badan Hukum</b></label>
														</div>
														<select class="custom-select" id="BadanHukum">  
															<option value="1">Ya</option>
															<option value="2">Tidak</option>
														</select>
													</div>
												</div> 
												<div class="col-sm-6 my-1">
													<div class="input-group">
														<div class="input-group-prepend">
															<label class="input-group-text bg-primary text-dark"><b>Jenis Badan Hukum Usaha</b></label>
														</div>
														<select class="custom-select" id="JenisBadanHukum">  
															<option value="1">PT</option>
															<option value="2">CV</option>
															<option value="3">UD</option>
															<option value="4">Firma</option>
															<option value="5">Perseorangan</option>
															<option value="6">Lainnya </option>
														</select>
														<input class="form-control" type="text" id="BadanHukumLainnya">      
													</div>
												</div> 
											</div>
										</div>
									</div>
								</div>
							</div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <script src="bootstrap/js/jquery.min.js"></script>
    <script src="bootstrap/js/popper.min.js" ></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <script src="bootstrap/js/adminlte.min.js"></script>
    <script type="text/javascript">
      $(document).ready(function(){
        
        var BaseURL = '<?=base_url()?>'

        $("#Provinsi").change(function (){
          var Provinsi = { Kode: $("#Provinsi").val() }
          $.post(BaseURL+"Ekraf/Kabupaten", Provinsi).done(function(Respon) {
            $('#Kabupaten').html(Respon)
            var Kabupaten = { Kode: $("#Kabupaten").val() }
            $.post(BaseURL+"Ekraf/Kecamatan", Kabupaten).done(function(Respon) {
              $('#Kecamatan').html(Respon)
              var Desa = { Kode: $("#Kecamatan").val() }
              $.post(BaseURL+"Ekraf/Desa", Desa).done(function(Respon) {
                $('#Desa').html(Respon)
              })  
            })  
          })    
        })

        $("#Kabupaten").change(function (){
          var Kabupaten = { Kode: $("#Kabupaten").val() }
          $.post(BaseURL+"Ekraf/Kecamatan", Kabupaten).done(function(Respon) {
            $('#Kecamatan').html(Respon)
            var Desa = { Kode: $("#Kecamatan").val() }
            $.post(BaseURL+"Ekraf/Desa", Desa).done(function(Respon) {
              $('#Desa').html(Respon)
            })  
          })    
        })
        
        $("#Kecamatan").change(function (){
          var Desa = { Kode: $("#Kecamatan").val() }
          $.post(BaseURL+"Ekraf/Desa", Desa).done(function(Respon) {
            $('#Desa').html(Respon)
          })    
        })
        
      })
    </script>
  </body>
</html>
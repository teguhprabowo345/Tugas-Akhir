<?php 

header("Content-type: application/octet-stream");

header("Content-Disposition: attachment; filename=TABEL DATA BUTIR 4.3.2 : DOSEN TETAP YANG BIDANG KEAHLIANNYA DI LUAR PS.xls");

header("Pragma: no-cache");

header("Expires: 0");

?>
<p> TABEL DATA BUTIR 4.3.2 : DOSEN TETAP YANG BIDANG KEAHLIANNYA DI LUAR PS    </p>
<table border="1" width="50%">
		<thead>
								<tr>
									 <th rowspan="2">No</th>
									 <th rowspan="2">Nama Dosen Tetap</th>
									 <th rowspan="2">NIDN (Nomor Induk Dosen Nasional)</th>
									 <th rowspan="2">Tanggal Lahir<br> (dd/mm/yyyy)</th>
									 <th rowspan="2">Jabatan Akademik</th>
									 <th rowspan="2">Sertifikasi**<br>(Ya/Tidak)</th>
									 <th colspan="3"><center>S1</center></th>
									 <th colspan="3"><center>S2</center></th>
									 <th colspan="3"><center>S3</center></th>
								 </tr>
								 <tr>
								 	<th>PT Asal</th>
								 	<th>Bidang Keahlian</th>
								 	<th>Gelar</th>
								 	<th>PT Asal</th>
								 	<th>Bidang Keahlian</th>
								 	<th>Gelar</th>
								 	<th>PT Asal</th>
								 	<th>Bidang Keahlian</th>
								 	<th>Gelar</th>
								 </tr>
							</thead>
							<tbody>
							
							<tr>
								<?php 
									$no=1; 
									foreach ($data as $d ) { 
								?>
								 	<td><?php echo $no++; ?></td>
								 	<td><?php echo $d['nama_dosen']; ?></td>
								 	<td><?php echo $d['nidn']; ?></td>
								 	<td><?php echo $d['tgl_lhr']; ?></td>
								 	<td><?php echo $d['NM_JAB_AKD']; ?></td>
								 	<td><?php echo $d['sertifikasi']; ?></td>
								 	<td><?php echo $d['GELAR_S1']; ?></td>
								 	<td><?php echo $d['ASAL_PT_S1']; ?></td>
								 	<td><?php echo $d['BID_KEAHLIAN_S1']; ?></td>
								 	<td><?php echo $d['GELAR_S2']; ?></td>
								 	<td><?php echo $d['ASAL_PT_S2']; ?></td>
								 	<td><?php echo $d['BID_KEAHLIAN_S2']; ?></td>
								 	<td><?php echo $d['GELAR_S3']; ?></td>
								 	<td><?php echo $d['ASAL_PT_S3']; ?></td>
								 	<td><?php echo $d['BID_KEAHLIAN_S3']; ?></td>
								 </tr>
								 <?php } ?>
							</tbody>
	</table>
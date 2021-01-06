<div class="artikel" id="<?php echo 'artikel-'.$single_artikel['judul']?>">
	<h2 style="margin-top: 15px">Produk UMKM</h2>
	<hr>
	<div class="teks">
		<p>
			Daftar Produk Umkm <?php echo ucwords($this->setting->sebutan_desa)." "?>
			<?php echo ucwords($desa['nama_desa'])?> adalah sebagai berikut : 
		</p>
		
		<div class="table-responsive">
			<table id="example1" class="table table-bordered table-striped">
			<thead>
			    <tr>
			        <th width="1%">No</th>
			        <th>Nama</th>
			        <th>Nama Umkm</th>
			        <th>Berat</th>
			        <th>Harga</th>
			        <th>Keterangan</th>
			        <th>Kategori</th>
			        <th>Website</th>
			        <th>Telepon</th>
			        <th>Gambar</th>
			        <th>Detail Order</th>
			    </tr>
			</thead>
			<tbody>
			    <?php 
					$no = 1;
		            foreach ($datalist as $result) {
		            	$nama = $result['nama'];
		            	$nama_umkm = $result['nama_umkm'];
		            	$berat = $result['berat'];
		            	$harga = $result['harga'];
		            	$ket = $result['ket'];
		            	$kategori = $result['kategori'];
		            	$website = $result['website'];
		            	$telp = $result['telp'];
		            	$gambar_produk = $result['gambar_produk'];
		            	$detail_order = $result['detail_order'];
		                // $j = json_decode($result['attr']);
		                // $keterangan = $j->uraian;
		                // $no_ditetapkan = $j->no_ditetapkan;
		                // $tahun_ditetapkan = $j->tahun_ditetapkan;
		                // $status = $j->status;
				?>
			    <tr>
			        <td><?php echo $no++; ?></td>
					<td><?php echo $nama; ?></td>
					<td><?php echo $nama_umkm; ?></td>
					<td><?php echo $berat; ?></td>
					<td><?php echo number_format($harga); ?></td>
					<td><?php echo $ket; ?></td>
					<td><?php echo $kategori; ?></td>
					<td><?php echo $website; ?></td>
					<td><?php echo $telp; ?></td>
					<td><img src="<?php echo $gambar_produk; ?>" style="width: 100px; height: auto;"></td>
					<td><a href="<?php echo $detail_order; ?>">Order</a></td>

			    </tr>
			    <?php } ?> 
			</tbody>
			</table>
		</div>

		<!-- <?php foreach ($datalist as $result) {
		            	$nama = $result['nama'];
		            	$nama_umkm = $result['nama_umkm'];
		            	$berat = $result['berat'];
		            	$harga = $result['harga'];
		            	$ket = $result['ket'];
		            	$kategori = $result['kategori'];
		            	$website = $result['website'];
		            	$telp = $result['telp'];
		            	$gambar_produk = $result['gambar_produk'];
		            	$detail_order = $result['detail_order']; ?>
	    <div class="row" style="margin-left: 40px; margin-right: 40px; margin-bottom: 20px;">
	        <div class="col-sm-6">
	        <p style="text-align: center; font-weight: bold; background-color: #01cfb0; color: white; font-size: 30px;"><?php echo $nama;?></p>
	        <center><img src="<?php echo $gambar_produk; ?>" style="width: 70%; box-shadow: 3px 3px 10px #01cfb0;"></center>
	        <br>
	        <p style="text-align: center; font-weight: bold; font-size: 30px;">Satuan <?php echo $value->jumlah;?> <?php echo $value->nm_satuan;?></p>
	        </div>
	       
	        <div class="col-sm-6">
	        <p style="text-align: center; font-weight: bold; background-color: #01cfb0; color: white; font-size: 30px;">Harga Pasar</p>
	        <div class="row">
	            <div class="col-sm-6">
	            <p style="font-size: 30px;">Wates</p>
	            <p style="font-size: 30px;">Sentolo</p>
	            <p style="font-size: 30px;">Bendungan</p>
	            <p style="font-size: 30px;">Temon</p>
	            <p style="font-size: 30px;">Galur</p>
	            <p style="font-weight: bold; font-size: 30px;">Rata-Rata</p>
	            </div>
	            <div class="col-sm-6">
	            <p style="text-align: right; font-size: 30px;"><?php echo number_format($value->harga_wates);?></p>
	            <p style="text-align: right; font-size: 30px;"><?php echo number_format($value->harga_sentolo);?></p>
	            <p style="text-align: right; font-size: 30px;"><?php echo number_format($value->harga_bendungan);?></p>
	            <p style="text-align: right; font-size: 30px;"><?php echo number_format($value->harga_temon);?></p>
	            <p style="text-align: right; font-size: 30px;"><?php echo number_format($value->harga_galur);?></p>
	            <p style="text-align: right; font-weight: bold; font-size: 30px;">Rp <?php echo number_format($value->rata_rata);?></p>
	            </div>
	        </div>
	        </div>
	    </div>
	    <?php } ?> -->

		<div class="form-group" style="clear:both;">
			<ul id="pageshare" title="Bagikan ke teman anda" class="pagination">
				<li class="sbutton" id="fb"><a name="fb_share" href="http://www.facebook.com/sharer.php?u=<?php echo site_url().'first/artikel/'.$single_artikel['id']?>"><i class="fa fa-facebook-square"></i>&nbsp;Share</a></li>
				<li class="sbutton" id="rt"><a href="http://twitter.com/share" class="twitter-share-button"><i class="fa fa-twitter"></i>&nbsp;Tweet</a></li>
				<li class="sbutton" id="gpshare"><a href="https://plus.google.com/share?url=<?php echo site_url().'first/artikel/'.$single_artikel['id'].'&hl=id'?>"><i class="fa fa-google-plus" style="color:red"></i>&nbsp;Bagikan</a></li>
				<li class="sbutton" id="wa_share"><a href="whatsapp://send?text=<?php echo site_url().'first/artikel/'.$single_artikel['id']?>"><i class="fa fa-whatsapp" style="color:green"></i>&nbsp;WhatsApp</a></li>
			</ul>
			<!--
			<script src=\"http://static.ak.fbcdn.net/connect.php/js/FB.Share\" type=\"text/javascript\"></script>
			<script src=\"http://platform.twitter.com/widgets.js\" type=\"text/javascript\"></script>
			-->
		</div>

	</div>
</div>
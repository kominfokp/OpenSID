<script src='https://kit.fontawesome.com/a076d05399.js'></script>
<div class="artikel" id="<?php echo 'artikel-'.$single_artikel['judul']?>">
	<h2 style="margin-top: 15px">Produk UMKM</h2>
	<hr>
	<div class="teks">
		<p>
			Daftar Produk Umkm <?php echo ucwords($this->setting->sebutan_desa)." "?>
			<?php echo ucwords($desa['nama_desa'])?> adalah sebagai berikut : 
		</p>
		
		<!-- <div class="table-responsive">
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
		</div> -->

		<?php foreach ($datalist as $result) {
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
	    <div class="row" style="margin-left: 40px; margin-right: 40px; margin-bottom: 20px; box-shadow: 3px 3px 1px 3px #888888;">
	        <div class="col-sm-6">
		        <p style="text-align: center; font-weight: bold; background-color: #01cfb0; color: white; font-size: 15px; margin-top: 10px;"><?php echo $nama;?></p>
		        <center><img src="<?php echo $gambar_produk; ?>" style="width: 70%;"></center>
		        <?php if(!empty($berat)){?>
	        	<p style="text-align: center; font-weight: bold; font-size: 15px;">Berat <?php echo $berat;?> gram</p>
		        <?php }else{?>
		        <p style="text-align: center; font-weight: bold; font-size: 15px;">Berat -</p>
		        <?php } ?>
		        <p style="text-align: center; font-weight: bold; font-size: 15px;">Harga Rp <?php echo number_format($harga);?></p>
	        </div>
	        <div class="col-sm-6">
	        	<p style="text-align: center; font-weight: bold; font-size: 15px; text-decoration: underline; padding-bottom: 10px; color: orange; margin-top: 10px;"><?php echo $nama_umkm;?></p>
	        	<p style="text-align: center; font-weight: bold; font-size: 15px;">Kategori <i class='fas fa-arrow-right' style='font-size:20px; color: #01cfb0;'></i> <?php echo $kategori;?></p>
	        	<p style="text-align: center; font-weight: bold; font-size: 15px;"><a href="http://<?php echo $website;?>"><?php echo $website;?></a></p>
		        <?php if(!empty($telp)){?>
	        	<p style="text-align: center; font-weight: bold; font-size: 15px;">Telp. <?php echo $telp;?></p>
		        <?php }else{?>
		        <p style="text-align: center; font-weight: bold; font-size: 15px;">Telp. -</p>
		        <?php } ?>
	        	<p style="text-align: center; padding-top: 10px;"><a class="btn btn-info" href="<?php echo $detail_order;?>" style="font-weight: bold; font-size: 15px;">Order >>></a></p>
	        </div>
	    </div>
	    <?php } ?>

	    <?php if ($datalist AND $paging->num_rows > $paging->per_page): ?>
		<div class="box-footer">
			<div>Halaman <?= $p ?> dari <?= $paging->end_link ?></div>
			<ul class="pagination pagination-sm no-margin">
				<?php if ($paging->start_link): ?>
					<li><a href="<?= site_url("first/".$paging_page."/$paging->start_link" . $paging->suffix) ?>" title="Halaman Pertama"><i class="fa fa-fast-backward"></i>&nbsp;</a></li>
				<?php endif; ?>
				<?php if ($paging->prev): ?>
					<li><a href="<?= site_url("first/".$paging_page."/$paging->prev" . $paging->suffix) ?>" title="Halaman Sebelumnya"><i class="fa fa-backward"></i>&nbsp;</a></li>
				<?php endif; ?>

				<?php foreach ($pages as $i): ?>
					<li <?= ($p == $i) ? 'class="active"' : "" ?>>
						<a href="<?= site_url("first/".$paging_page."/$i" . $paging->suffix) ?>" title="Halaman <?= $i ?>"><?= $i ?></a>
					</li>
				<?php endforeach; ?>

				<?php if ($paging->next): ?>
					<li><a href="<?= site_url("first/".$paging_page."/$paging->next" . $paging->suffix) ?>" title="Halaman Selanjutnya"><i class="fa fa-forward"></i>&nbsp;</a></li>
				<?php endif; ?>
				<?php if ($paging->end_link): ?>
					<li><a href="<?= site_url("first/".$paging_page."/$paging->end_link" . $paging->suffix) ?>" title="Halaman Terakhir"><i class="fa fa-fast-forward"></i>&nbsp;</a></li>
				<?php endif; ?>
			</ul>
		</div>
		<?php endif; ?>

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
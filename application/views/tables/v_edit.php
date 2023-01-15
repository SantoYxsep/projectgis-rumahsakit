<div class="col-lg-7">
	<div class="panel panel-primary">
		<div class="panel-heading">
			Lokasi Rumah Sakit
		</div>
		<div class="panel-body">
			<div id="map" style="width: 100%; height: 650px;"></div>
			<script>
				const map = L.map('map').setView([0.5129758556597295, 101.4396355516193], 10);

				const tiles = L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
					maxZoom: 19,
					attribution: '&copy; <a href="http://www.openstreetmap.org/copyright">OpenStreetMap</a>'
				}).addTo(map);

			</script>
		</div>
	</div>
</div>


<div class="col-lg-5">
	<div class="panel panel-primary">
		<div class="panel-heading">
			Input Data Rumah Sakit
		</div>
		<div class="panel-body">
			<!--Form Input Data-->
			<?php foreach($edit as $key=> $value){?>
            <form action="<?=base_url('Tablers/update/')?><?=$value->idrs?>" method="post">
            
            <div class="form-group">
				<label>ID Rumah Sakit</label>
				<input class="form-control" type="number" name="idrs"    value="<?=$value->idrs?>"  disabled>
			</div>
			<div class="form-group">
				<label>Nama Rumah Sakit</label>
				<input class="form-control" name="nama" placeholder="Nama Rumah Sakit" value="<?=$value->nama?>" REQUIRED>
			</div>
			<div class="form-group">
				<label>Jenis Rumah Sakit</label>
				<input class="form-control" name="jenis" placeholder="Jenis Rumah Sakit" value="<?=$value->jenis?>" REQUIRED>
			</div>
			<div class="form-group">
				<label>Kelas Rumah Sakit</label>
				<input class="form-control" name="kelas" placeholder="Kelas Rumah Sakit" value="<?=$value->kelas?>" REQUIRED>
			</div>
			<div class="form-group">
				<label>Pemilik Rumah Sakit</label>
				<input class="form-control" name="pemilik" placeholder="Pemilik Rumah Sakit" value="<?=$value->pemilik?>" REQUIRED>
			</div>
			<div class="form-group">
				<label>Ranjang Rumah Sakit</label>
				<input class="form-control" name="ranjang" placeholder="Ranjang Rumah Sakit" value="<?=$value->ranjang?>" REQUIRED>
			</div>
			<div class="form-group">
				<label>Koordinat X</label>
				<input class="form-control" name="koory" placeholder="Koordinat Y" value="<?=$value->koory?>" REQUIRED>
			</div>
			<div class="form-group">
				<label>Koordinat X</label>
				<input class="form-control" name="koorx" placeholder="Koordinat X" value="<?=$value->koorx?>" REQUIRED>
			</div>
			<div class="form-group">
				<label>Alamat Rumah Sakit</label>
				<input class="form-control" name="alamat" placeholder="Alamat Rumah Sakit" value="<?=$value->alamat?>" REQUIRED>
			</div>
            <div class="form-group">
				<label>gambar Rumah Sakit</label>
				<input class="form-control" name="gambar" placeholder="Gambar Rumah Sakit" value="<?=$value->gambar?>" REQUIRED>
			</div>
			<div class="form-group">
				<button class="btn btn-primary btn-sm" type="submit">Update</button>
				<button class="btn btn-success btn-sm" type="reset">Reset</button>
			</div>
            <?php }?>
            </form>
			
			<!--END Form Input Data-->
		</div>
	</div>
</div>

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
			
            <form action="<?=base_url('Tablers/input_data')?>" method="post">
            <div class="form-group">
				<label>ID Rumah Sakit</label>
				<input class="form-control" type="number" name="idrs" placeholder="Id Rumah Sakit" REQUIRED>
			</div>
			<div class="form-group">
				<label>Nama Rumah Sakit</label>
				<input class="form-control" name="nama" placeholder="Nama Rumah Sakit" REQUIRED>
			</div>
			<div class="form-group">
				<label>Jenis Rumah Sakit</label>
				<input class="form-control" name="jenis" placeholder="Jenis Rumah Sakit" REQUIRED>
			</div>
			<div class="form-group">
				<label>Kelas Rumah Sakit</label>
				<input class="form-control" name="kelas" placeholder="Kelas Rumah Sakit" REQUIRED>
			</div>
			<div class="form-group">
				<label>Pemilik Rumah Sakit</label>
				<input class="form-control" name="pemilik" placeholder="Pemilik Rumah Sakit" REQUIRED>
			</div>
			<div class="form-group">
				<label>Ranjang Rumah Sakit</label>
				<input class="form-control" name="ranjang" placeholder="Ranjang Rumah Sakit" REQUIRED>
			</div>
			<div class="form-group">
				<label>Koordinat X</label>
				<input class="form-control" name="koory" placeholder="Koordinat Y" REQUIRED>
			</div>
			<div class="form-group">
				<label>Koordinat X</label>
				<input class="form-control" name="koorx" placeholder="Koordinat X" REQUIRED>
			</div>
			<div class="form-group">
				<label>Alamat Rumah Sakit</label>
				<input class="form-control" name="alamat" placeholder="Alamat Rumah Sakit" REQUIRED>
			</div>
            <div class="form-group">
				<label>gambar Rumah Sakit</label>
				<input class="form-control" name="gambar" placeholder="Alamat Rumah Sakit" REQUIRED>
			</div>
			<div class="form-group">
				<button class="btn btn-primary btn-sm" type="submit">Simpan</button>
				<button class="btn btn-success btn-sm" type="reset">Reset</button>
			</div>
            </form>
			
			<!--END Form Input Data-->
		</div>
	</div>
</div>

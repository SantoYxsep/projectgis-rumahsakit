<div id="map" style="width: 100%; height: 650px;"></div>
<script>
const map = L.map('map').setView([0.5129758556597295, 101.4396355516193], 8);
var layerGroupRsB = L.layerGroup();
var layerGroupRsc = L.layerGroup();
var layerGroupRsd = L.layerGroup();
var layerGroupRsall = L.layerGroup();
<?php foreach($data_table as $key=> $value){?>
<?php if($value->kelas == "B"){ ?>
var areab=L.marker([<?=$value->koory?>, <?=$value->koorx?>]).bindPopup("<img src='<?=$value->gambar?>' width='200px'/></br><h5>Nama Rumah Sakit :<?=$value->nama?> </h5><h5>Jenis Rumah Sakit :<?=$value->jenis?> </h5><h5>Pemilik Rumah Sakit :<?=$value->pemilik?></h5><h5>Ranjang Rumah Sakit :<?=$value->ranjang?> </h5><h5>Alamat Rumah Sakit :<?=$value->alamat?> </h5>").openPopup().addTo(map);
areab.addTo(layerGroupRsB);
<?php }?>
<?php if($value->kelas == "C"){ ?>
var areab=L.marker([<?=$value->koory?>, <?=$value->koorx?>]).bindPopup("<img src='<?=$value->gambar?>' width='200px'/></br><h5>Nama Rumah Sakit :<?=$value->nama?> </h5><h5>Jenis Rumah Sakit :<?=$value->jenis?> </h5><h5>Pemilik Rumah Sakit :<?=$value->pemilik?></h5><h5>Ranjang Rumah Sakit :<?=$value->ranjang?> </h5><h5>Alamat Rumah Sakit :<?=$value->alamat?> </h5>").openPopup().addTo(map);
areab.addTo(layerGroupRsc);
<?php }?>
<?php if($value->kelas == "D"){ ?>
var areab=L.marker([<?=$value->koory?>, <?=$value->koorx?>]).bindPopup("<img src='<?=$value->gambar?>' width='200px'/></br><h5>Nama Rumah Sakit :<?=$value->nama?> </h5><h5>Jenis Rumah Sakit :<?=$value->jenis?> </h5><h5>Pemilik Rumah Sakit :<?=$value->pemilik?></h5><h5>Ranjang Rumah Sakit :<?=$value->ranjang?> </h5><h5>Alamat Rumah Sakit :<?=$value->alamat?> </h5>").openPopup().addTo(map);
areab.addTo(layerGroupRsd);
<?php }?>

var areab=L.marker([<?=$value->koory?>, <?=$value->koorx?>]).bindPopup("<img src='<?=$value->gambar?>' width='200px'/></br><h5>Nama Rumah Sakit :<?=$value->nama?> </h5><h5>Jenis Rumah Sakit :<?=$value->jenis?> </h5><h5>Pemilik Rumah Sakit :<?=$value->pemilik?></h5><h5>Ranjang Rumah Sakit :<?=$value->ranjang?> </h5><h5>Alamat Rumah Sakit :<?=$value->alamat?> </h5>").openPopup().addTo(map);
areab.addTo(layerGroupRsall);

 <?php }?>
 var baseLayers = {
    "Rumah sakit class B":layerGroupRsB,
    "Rumah sakit class C":layerGroupRsc,
    "Rumah sakit class D":layerGroupRsd,
    "Semua Rumah sakit":layerGroupRsall,
};
L.control.layers(baseLayers).addTo(map);
const tiles = L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
    maxZoom: 19,
    attribution: '&copy; <a href="http://www.openstreetmap.org/copyright">OpenStreetMap</a>'
}).addTo(map);
</script>
<div class="col-lg-12">
	<div class="panel panel-primary">
		<div class="panel-heading">
				<?=$title?>
		</div>
			<!-- /.panel-heading -->
		<div class="panel-body">
            <a href="<?=base_url('Tablers/input')?>" class="btn btn-primary btn-sm"> <i class="fa fa-plus"></i> Input Data</a>
            <div><br></div>
			<div class="table-responsive">
                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>nama Rumah Sakit</th>
                            <th>Jenis</th>
                            <th>Kelas</th>
                            <th>Pemilik</th>
                            <th>Ranjang</th>
                            <th>Koory</th>
                            <th>Koorx</th>
                            <th>Alamat</th>
                            <th>Gambar</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php  $idrs=1; foreach ($tables as $key=> $value){?>
                        <tr>
                        <td><?=$idrs++; ?></td>                    
                        <td><?=$value->nama?></td>
                        <td><?=$value->jenis?></td>
                        <td><?=$value->kelas?></td>
                        <td><?=$value->pemilik?></td>
                        <td><?=$value->ranjang?></td>
                        <td><?=$value->koory?></td>
                        <td><?=$value->koorx?></td>
                        <td><?=$value->alamat?></td>
                        <td><img src="<?=$value->gambar?>" width="70"/></td>
                        <td>
                            <a href="<?=base_url("Tablers/edit/").$value->idrs?>" class="btn btn-success btn-sm">Edit</a>
                            <a href="<?=base_url("Tablers/hapus/").$value->idrs?>" class="btn btn-danger btn-sm">Delete</a>
                        </td>
                        </tr>   
                        <?php }?>                   
                    </tbody>
                </table>
			</div>
		</div>
	</div>
</div>

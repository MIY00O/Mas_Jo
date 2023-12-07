<div class="pd-20 card-box mb-30">
	<div id="hilang">
		<?= $this->session->flashdata('alert'); ?>
	</div>
	<div class="pull">
		<a class="btn btn-primary" class="btn-block" data-toggle="modal" data-target="#User_tambah" type="button"><i
				class="icon-copy fa fa-user-o" aria-hidden="true"></i> Tambah Konten </a>
	</div><br>
	<div class="clearfix mb-20">
		<div class="pull-left">
			<h4 class="text-blue h4">Konten JejoAPP</h4>
		</div>
	</div>
	<table class="table table-striped">
		<thead>
			<tr>
				<th scope="col">#</th>
				<th scope="col">Judul</th>
				<th scope="col">Kategori Konten</th>
				<th scope="col">Tanggal</th>
				<th scope="col">Kreator</th>
				<th scope="col">Foto</th>
				<th scope="col">Aksi</th>
			</tr>
		</thead>
		<tbody>
			<?php $no = 1;
			foreach ($konten as $jj) { ?>
			<tr>
				<th scope="row"><?= $no; ?></th>
				<td><?= $jj['judul'] ?></td>
				<td><?= $jj['nama_kategori'] ?></td>
				<td><?= $jj['tanggal'] ?></td>
				<td><?= $jj['nama'] ?></td>
				<td>
					<button type="button" data-toggle="modal" data-target="#foto<?= $jj['id_kategori'] ?>" class="btn"
						data-bgcolor="#3d464d" data-color="#ffffff"
						style="color: rgb(255, 255, 255); background-color: rgb(61, 70, 77);">
						<i class="icon-copy fa fa-camera" aria-hidden="true"></i>
					</button>
				</td>
				<td>
					<a class="btn btn-outline-danger" onClick="return confirm('apakah nii chan yakin!!')"
						href=" <?php echo site_url('admin/konten/hapus_data/' . $jj['foto']); ?>"><i
							class="icon-copy dw dw-trash1"></i></a>
					<a class="btn btn-outline-success" class="btn-block" data-toggle="modal"
						data-target="#edit<?= $no; ?>" type="button"><i class="icon-copy dw dw-search"></i></a>
					<!-- Modal Edit -->
					<div class="modal fade" id="edit<?= $no; ?>" tabindex="-1" role="dialog"
						aria-labelledby="myLargeModalLabel" style="display: none;" aria-hidden="true">
						<div class="modal-dialog modal-dialog-centered">
							<div class="modal-content">
								<div class="modal-header">
									<h4 class="modal-title" id="myLargeModalLabel"><?= $jj['judul'] ?></h4>
									<button type="button" class="close" data-dismiss="modal"
										aria-hidden="true">×</button>
								</div>
								<div class="modal-body">
									<form action="<?= base_url('admin/konten/update') ?>" method="post"
										enctype="multipart/form-data">
										<input type="hidden" name="nama_foto" value="<?= $jj['foto'] ?>">
										<div class="form-group row">
											<label class="col-sm-12 col-md-2 col-form-label">Judul Konten</label>
											<div class="col-sm-12 col-md-10">
												<input class="form-control" type="text" value="<?= $jj['judul'] ?>"
													name="judul">
											</div>
										</div>
										<div class="form-group row">
											<label class="col-sm-12 col-md-2 col-form-label">Kategori</label>
											<div class="col-sm-12 col-md-10">
												<select name="id_kategori" class="form-control">
													<?php foreach ($kategori as $ayam) { ?>
													<option
														<?php if($ayam['id_kategori']==$jj['id_kategori']){echo"selected";} ?>
														value="<?= $ayam['id_kategori'] ?>">
														<?= $ayam['nama_kategori'] ?></option>
													<?php  } ?>
												</select>
											</div>
										</div>
										<div class="form-group row">
											<label class="col-sm-12 col-md-2 col-form-label">Keterangan</label>
											<div class="col-sm-12 col-md-10">
												<textarea name="keterangan" class="form-control" ><?= $jj['keterangan'] ?></textarea>
											</div>
										</div>
										<div class="form-group row">
											<label class="col-sm-12 col-md-2 col-form-label">Foto</label>
											<div class="col-sm-12 col-md-10">
												<input type="file" name="foto" class="form-control">
											</div>
										</div>
								</div>
								<div class="modal-footer">
									<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
									<button type="submit" class="btn btn-primary">Simpan</button>
								</div>
								</form>
							</div>
						</div>
					</div>
					<!-- End Modal Edit -->
				</td>
			</tr>
			<?php $no++;
			} ?>
		</tbody>
	</table>
</div>




<!-- Modal Tambah -->
<div class="modal fade" id="User_tambah" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel"
	style="display: none;" aria-hidden="true">
	<div class="modal-dialog modal-dialog-centered">
		<div class="modal-content">
			<div class="modal-header">
				<h4 class="modal-title" id="myLargeModalLabel">Tambah Konten</h4>
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
			</div>
			<div class="modal-body">
				<form action="<?= base_url('admin/konten/simpan') ?>" method="post" enctype="multipart/form-data">
					<div class="form-group row">
						<label class="col-sm-12 col-md-2 col-form-label">Judul Konten</label>
						<div class="col-sm-12 col-md-10">
							<input class="form-control" type="text" placeholder="......." name="judul" require>
						</div>
					</div>
					<div class="form-group row">
						<label class="col-sm-12 col-md-2 col-form-label">Kategori</label>
						<div class="col-sm-12 col-md-10">
							<select name="id_kategori" class="form-control">
								<?php foreach ($kategori as $jj) { ?>
								<option value="<?= $jj['id_kategori'] ?>"><?= $jj['nama_kategori'] ?></option>
								<?php  } ?>
							</select>
						</div>
					</div>
					<div class="form-group row">
						<label class="col-sm-12 col-md-2 col-form-label">Keterangan</label>
						<div class="col-sm-12 col-md-10">
							<textarea name="keterangan" class="form-control"></textarea>
						</div>
					</div>
					<div class="form-group row">
						<label class="col-sm-12 col-md-2 col-form-label">Foto</label>
						<div class="col-sm-12 col-md-10">
							<input type="file" name="foto" class="form-control">
						</div>
					</div>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
				<button type="submit" class="btn btn-primary">Simpan</button>
			</div>
			</form>
		</div>
	</div>
</div>


<!-- Mdoal Foto -->
<?php foreach ($konten as $jj) { ?>
<div class="modal fade" id="foto<?= $jj['id_kategori'] ?>" data-backdrop="static" data-keyboard="false" tabindex="-1"
	aria-labelledby="staticBackdropLabel" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="staticBackdropLabel">Foto Nyaaaa</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body d-flex justify-content-center">
				<div class="card " style="width: 18rem;">
					<img src="<?= base_url('assets/upload/konten/'.$jj['foto']) ?>" class="card-img-top">
				</div>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
			</div>
		</div>
	</div>
</div>
<?php } ?>

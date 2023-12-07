<div class="pd-20 card-box mb-30">
	<div id="hilang">
		<?= $this->session->flashdata('alert'); ?>
	</div>
	<div class="pull">
		<a class="btn btn-primary" class="btn-block" data-toggle="modal" data-target="#User_tambah" type="button"><i
				class="icon-copy fa fa-user-o" aria-hidden="true"></i> Tambah Kategori </a>
	</div><br>
	<div class="clearfix mb-20">
		<div class="pull-left">
			<h4 class="text-blue h4">Konten Kategori JejoAPP</h4>
		</div>
	</div>
	<table class="table table-striped">
		<thead>
			<tr>
				<th scope="col">#</th>
				<th scope="col">Nama Kategori</th>
				<th scope="col">Aksi</th>
			</tr>
		</thead>
		<tbody>
			<?php $no = 1;
			foreach ($kategori as $jj) { ?>
			<tr>
				<th scope="row"><?= $no; ?></th>
				<td><?= $jj['nama_kategori'] ?></td>
				<td>
					<a class="btn btn-outline-danger" onClick="return confirm('apakah nii chan yakin!!')"
						href=" <?php echo site_url('admin/kategori/hapus_data/' . $jj['id_kategori']); ?>"><i
							class="icon-copy dw dw-trash1"></i></a>
					<a class="btn btn-outline-success" class="btn-block" data-toggle="modal"
						data-target="#edit<?= $jj['id_kategori'] ?>" type="button"><i
							class="icon-copy dw dw-search"></i></a>
					<!-- Modal Edit -->
					<div class="modal fade" id="edit<?= $jj['id_kategori'] ?>" tabindex="-1" role="dialog"
						aria-labelledby="myLargeModalLabel" style="display: none;" aria-hidden="true">
						<div class="modal-dialog modal-dialog-centered">
							<div class="modal-content">
								<div class="modal-header">
									<h4 class="modal-title" id="myLargeModalLabel">Update Kategori</h4>
									<button type="button" class="close" data-dismiss="modal"
										aria-hidden="true">×</button>
								</div>
								<div class="modal-body">
									<form action="<?= base_url('admin/kategori/update') ?>" method="post">
										<input type="hidden" name="id_kategori" value="<?= $jj['id_kategori'] ?>">
										<div class="form-group row">
											<label class="col-sm-12 col-md-2 col-form-label">Nama kategori</label>
											<div class="col-sm-12 col-md-10">
												<input class="form-control" type="text" placeholder="......."
													name="nama_kategori" value="<?= $jj['nama_kategori'] ?>">
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
				<h4 class="modal-title" id="myLargeModalLabel">Tambah Kategori</h4>
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
			</div>
			<div class="modal-body">
				<form action="<?= base_url('admin/kategori/simpan') ?>" method="post">
					<div class="form-group row">
						<label class="col-sm-12 col-md-2 col-form-label">Nama Kategori</label>
						<div class="col-sm-12 col-md-10">
							<input class="form-control" type="text" placeholder="......." name="nama_kategori" require>
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

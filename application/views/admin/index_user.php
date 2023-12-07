<div class="pd-20 card-box mb-30">
	<div id="hilang">
		<?= $this->session->flashdata('alert'); ?>
	</div>
	<div class="pull">
		<a class="btn btn-primary" class="btn-block" data-toggle="modal" data-target="#User_tambah" type="button"><i class="icon-copy fa fa-user-o" aria-hidden="true"></i> Tambah User</a>
	</div><br>
	<div class="clearfix mb-20">
		<div class="pull-left">
			<h4 class="text-blue h4">Data Pengunjung JejoAPP</h4>
		</div>
	</div>
	<table class="table table-striped">
		<thead>
			<tr>
				<th scope="col">#</th>
				<th scope="col">Nama</th>
				<th scope="col">Username</th>
				<th scope="col">Level</th>
				<th scope="col">Aksi</th>
			</tr>
		</thead>
		<tbody>
			<?php $no = 1;
			foreach ($user as $jj) { ?>
				<tr>
					<th scope="row"><?= $no; ?></th>
					<td><?= $jj['nama'] ?></td>
					<td><?= $jj['username'] ?></td>
					<td><?= $jj['level'] ?></td>
					<td>
						<a class="btn btn-outline-danger" onClick="return confirm('apakah nii chan yakin!!')" href=" <?php echo site_url('admin/user/hapus_data/' . $jj['id_user']); ?>"><i class="icon-copy dw dw-trash1"></i></a>
						<a class="btn btn-outline-success" class="btn-block" data-toggle="modal" data-target="#edit<?= $jj['id_user'] ?>" type="button"><i class="icon-copy dw dw-search"></i></a>
						<!-- Modal Edit -->
						<div class="modal fade" id="edit<?= $jj['id_user'] ?>" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" style="display: none;" aria-hidden="true">
							<div class="modal-dialog modal-dialog-centered">
								<div class="modal-content">
									<div class="modal-header">
										<h4 class="modal-title" id="myLargeModalLabel">Update User</h4>
										<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
									</div>
									<div class="modal-body">
										<form action="<?= base_url('admin/user/update') ?>" method="post">
											<input type="hidden" name="id_user" value="<?= $jj['id_user'] ?>">
											<div class="form-group row">
												<label class="col-sm-12 col-md-2 col-form-label">Nama</label>
												<div class="col-sm-12 col-md-10">
													<input class="form-control" type="text" placeholder="......." name="nama" value="<?= $jj['nama'] ?>">
												</div>
											</div>
											<div class="form-group row">
												<label class="col-sm-12 col-md-2 col-form-label">Username</label>
												<div class="col-sm-12 col-md-10">
													<input class="form-control" type="text" placeholder="......." name="username" value="<?= $jj['username'] ?>" readonly>
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
<div class="modal fade" id="User_tambah" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" style="display: none;" aria-hidden="true">
	<div class="modal-dialog modal-dialog-centered">
		<div class="modal-content">
			<div class="modal-header">
				<h4 class="modal-title" id="myLargeModalLabel">Tambah User</h4>
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
			</div>
			<div class="modal-body">
				<form action="<?= base_url('admin/user/simpan') ?>" method="post">
					<div class="form-group row">
						<label class="col-sm-12 col-md-2 col-form-label">Nama</label>
						<div class="col-sm-12 col-md-10">
							<input class="form-control" type="text" placeholder="......." name="nama" require>
						</div>
					</div>
					<div class="form-group row">
						<label class="col-sm-12 col-md-2 col-form-label">Username</label>
						<div class="col-sm-12 col-md-10">
							<input class="form-control" type="text" placeholder="......." name="username" require>
						</div>
					</div>
					<div class="form-group row">
						<label class="col-sm-12 col-md-2 col-form-label">Password</label>
						<div class="col-sm-12 col-md-10">
							<input class="form-control" type="password" placeholder="......." name="password" require>
						</div>
					</div>
					<div class="form-group row">
						<label class="col-sm-12 col-md-2 col-form-label">Level</label>
						<div class="col-sm-12 col-md-10">
							<select name="level" class="form-control">
								<option value="admin">Admin</option>
								<option value="kontributor">Kontributor</option>
							</select>
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
<div id="hilang">
	<?= $this->session->flashdata('alert') ?>
</div>
<div class="pd-20 card-box mb-30">
	<div class="clearfix">
		<div class="pull-left">
			<h4 class="text-blue h4">UPLOAD FOTO</h4>
		</div>

	</div>
	<form action="<?= base_url('admin/caraousel/simpan') ?>" method="post" enctype="multipart/form-data">
		<div class="form-group">
			<label>JUDUL</label>
			<input class="form-control" type="text" placeholder="Judul Foto" name="judul">
		</div>


		<div class="form-group">
			<label>MASUKAN FOTO</label>
			<input type="file" name="foto" class="form-control-file form-control height-auto">
		</div>
		<div class="modal-footer">
			<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
			<button type="submit" class="btn btn-primary">Simpan</button>
		</div>
	</form>
	<div class="collapse collapse-box" id="horizontal-basic-form1">
		<div class="code-box">
			<div class="clearfix">
				<a href="javascript:;" class="btn btn-primary btn-sm code-copy pull-left"
					data-clipboard-target="#horizontal-basic"><i class="fa fa-clipboard"></i> Copy Code</a>
				<a href="#horizontal-basic-form1" class="btn btn-primary btn-sm pull-right" rel="content-y"
					data-toggle="collapse" role="button"><i class="fa fa-eye-slash"></i> Hide Code</a>
			</div>
			<pre><code class="xml copy-pre hljs" id="horizontal-basic">
<span class="hljs-tag">&lt;<span class="hljs-name">form</span>&gt;</span>
	<span class="hljs-tag">&lt;<span class="hljs-name">div</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"form-group"</span>&gt;</span>
		<span class="hljs-tag">&lt;<span class="hljs-name">label</span>&gt;</span>Text<span class="hljs-tag">&lt;/<span class="hljs-name">label</span>&gt;</span>
		<span class="hljs-tag">&lt;<span class="hljs-name">input</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"form-control"</span> <span class="hljs-attr">type</span>=<span class="hljs-string">"text"</span> <span class="hljs-attr">placeholder</span>=<span class="hljs-string">"Johnny Brown"</span>&gt;</span>
	<span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span>
	<span class="hljs-tag">&lt;<span class="hljs-name">div</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"form-group"</span>&gt;</span>
		<span class="hljs-tag">&lt;<span class="hljs-name">label</span>&gt;</span>Email<span class="hljs-tag">&lt;/<span class="hljs-name">label</span>&gt;</span>
		<span class="hljs-tag">&lt;<span class="hljs-name">input</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"form-control"</span> <span class="hljs-attr">value</span>=<span class="hljs-string">"bootstrap@example.com"</span> <span class="hljs-attr">type</span>=<span class="hljs-string">"email"</span>&gt;</span>
	<span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span>
	<span class="hljs-tag">&lt;<span class="hljs-name">div</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"form-group"</span>&gt;</span>
		<span class="hljs-tag">&lt;<span class="hljs-name">label</span>&gt;</span>URL<span class="hljs-tag">&lt;/<span class="hljs-name">label</span>&gt;</span>
		<span class="hljs-tag">&lt;<span class="hljs-name">input</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"form-control"</span> <span class="hljs-attr">value</span>=<span class="hljs-string">"https://getbootstrap.com"</span> <span class="hljs-attr">type</span>=<span class="hljs-string">"url"</span>&gt;</span>
	<span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span>
	<span class="hljs-tag">&lt;<span class="hljs-name">div</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"form-group"</span>&gt;</span>
		<span class="hljs-tag">&lt;<span class="hljs-name">label</span>&gt;</span>Telephone<span class="hljs-tag">&lt;/<span class="hljs-name">label</span>&gt;</span>
		<span class="hljs-tag">&lt;<span class="hljs-name">input</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"form-control"</span> <span class="hljs-attr">value</span>=<span class="hljs-string">"1-(111)-111-1111"</span> <span class="hljs-attr">type</span>=<span class="hljs-string">"tel"</span>&gt;</span>
	<span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span>
	<span class="hljs-tag">&lt;<span class="hljs-name">div</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"form-group"</span>&gt;</span>
		<span class="hljs-tag">&lt;<span class="hljs-name">label</span>&gt;</span>Password<span class="hljs-tag">&lt;/<span class="hljs-name">label</span>&gt;</span>
		<span class="hljs-tag">&lt;<span class="hljs-name">input</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"form-control"</span> <span class="hljs-attr">value</span>=<span class="hljs-string">"password"</span> <span class="hljs-attr">type</span>=<span class="hljs-string">"password"</span>&gt;</span>
	<span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span>
	<span class="hljs-tag">&lt;<span class="hljs-name">div</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"form-group"</span>&gt;</span>
		<span class="hljs-tag">&lt;<span class="hljs-name">label</span>&gt;</span>Readonly input<span class="hljs-tag">&lt;/<span class="hljs-name">label</span>&gt;</span>
		<span class="hljs-tag">&lt;<span class="hljs-name">input</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"form-control"</span> <span class="hljs-attr">type</span>=<span class="hljs-string">"text"</span> <span class="hljs-attr">placeholder</span>=<span class="hljs-string">"Readonly input here…"</span> <span class="hljs-attr">readonly</span>=<span class="hljs-string">""</span>&gt;</span>
	<span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span>
	<span class="hljs-tag">&lt;<span class="hljs-name">div</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"form-group"</span>&gt;</span>
		<span class="hljs-tag">&lt;<span class="hljs-name">label</span>&gt;</span>Disabled input<span class="hljs-tag">&lt;/<span class="hljs-name">label</span>&gt;</span>
		<span class="hljs-tag">&lt;<span class="hljs-name">input</span> <span class="hljs-attr">type</span>=<span class="hljs-string">"text"</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"form-control"</span> <span class="hljs-attr">placeholder</span>=<span class="hljs-string">"Disabled input"</span> <span class="hljs-attr">disabled</span>=<span class="hljs-string">""</span>&gt;</span>
	<span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span>
	<span class="hljs-tag">&lt;<span class="hljs-name">div</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"form-group"</span>&gt;</span>
		<span class="hljs-tag">&lt;<span class="hljs-name">div</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"row"</span>&gt;</span>
			<span class="hljs-tag">&lt;<span class="hljs-name">div</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"col-md-6 col-sm-12"</span>&gt;</span>
				<span class="hljs-tag">&lt;<span class="hljs-name">label</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"weight-600"</span>&gt;</span>Custom Checkbox<span class="hljs-tag">&lt;/<span class="hljs-name">label</span>&gt;</span>
				<span class="hljs-tag">&lt;<span class="hljs-name">div</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"custom-control custom-checkbox mb-5"</span>&gt;</span>
					<span class="hljs-tag">&lt;<span class="hljs-name">input</span> <span class="hljs-attr">type</span>=<span class="hljs-string">"checkbox"</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"custom-control-input"</span> <span class="hljs-attr">id</span>=<span class="hljs-string">"customCheck1-1"</span>&gt;</span>
					<span class="hljs-tag">&lt;<span class="hljs-name">label</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"custom-control-label"</span> <span class="hljs-attr">for</span>=<span class="hljs-string">"customCheck1-1"</span>&gt;</span>Check this custom checkbox<span class="hljs-tag">&lt;/<span class="hljs-name">label</span>&gt;</span>
				<span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span>
				<span class="hljs-tag">&lt;<span class="hljs-name">div</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"custom-control custom-checkbox mb-5"</span>&gt;</span>
					<span class="hljs-tag">&lt;<span class="hljs-name">input</span> <span class="hljs-attr">type</span>=<span class="hljs-string">"checkbox"</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"custom-control-input"</span> <span class="hljs-attr">id</span>=<span class="hljs-string">"customCheck2-1"</span>&gt;</span>
					<span class="hljs-tag">&lt;<span class="hljs-name">label</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"custom-control-label"</span> <span class="hljs-attr">for</span>=<span class="hljs-string">"customCheck2-1"</span>&gt;</span>Check this custom checkbox<span class="hljs-tag">&lt;/<span class="hljs-name">label</span>&gt;</span>
				<span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span>
				<span class="hljs-tag">&lt;<span class="hljs-name">div</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"custom-control custom-checkbox mb-5"</span>&gt;</span>
					<span class="hljs-tag">&lt;<span class="hljs-name">input</span> <span class="hljs-attr">type</span>=<span class="hljs-string">"checkbox"</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"custom-control-input"</span> <span class="hljs-attr">id</span>=<span class="hljs-string">"customCheck3-1"</span>&gt;</span>
					<span class="hljs-tag">&lt;<span class="hljs-name">label</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"custom-control-label"</span> <span class="hljs-attr">for</span>=<span class="hljs-string">"customCheck3-1"</span>&gt;</span>Check this custom checkbox<span class="hljs-tag">&lt;/<span class="hljs-name">label</span>&gt;</span>
				<span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span>
				<span class="hljs-tag">&lt;<span class="hljs-name">div</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"custom-control custom-checkbox mb-5"</span>&gt;</span>
					<span class="hljs-tag">&lt;<span class="hljs-name">input</span> <span class="hljs-attr">type</span>=<span class="hljs-string">"checkbox"</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"custom-control-input"</span> <span class="hljs-attr">id</span>=<span class="hljs-string">"customCheck4-1"</span>&gt;</span>
					<span class="hljs-tag">&lt;<span class="hljs-name">label</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"custom-control-label"</span> <span class="hljs-attr">for</span>=<span class="hljs-string">"customCheck4-1"</span>&gt;</span>Check this custom checkbox<span class="hljs-tag">&lt;/<span class="hljs-name">label</span>&gt;</span>
				<span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span>
			<span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span>
			<span class="hljs-tag">&lt;<span class="hljs-name">div</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"col-md-6 col-sm-12"</span>&gt;</span>
				<span class="hljs-tag">&lt;<span class="hljs-name">label</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"weight-600"</span>&gt;</span>Custom Radio<span class="hljs-tag">&lt;/<span class="hljs-name">label</span>&gt;</span>
				<span class="hljs-tag">&lt;<span class="hljs-name">div</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"custom-control custom-radio mb-5"</span>&gt;</span>
					<span class="hljs-tag">&lt;<span class="hljs-name">input</span> <span class="hljs-attr">type</span>=<span class="hljs-string">"radio"</span> <span class="hljs-attr">id</span>=<span class="hljs-string">"customRadio4"</span> <span class="hljs-attr">name</span>=<span class="hljs-string">"customRadio"</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"custom-control-input"</span>&gt;</span>
					<span class="hljs-tag">&lt;<span class="hljs-name">label</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"custom-control-label"</span> <span class="hljs-attr">for</span>=<span class="hljs-string">"customRadio4"</span>&gt;</span>Toggle this custom radio<span class="hljs-tag">&lt;/<span class="hljs-name">label</span>&gt;</span>
				<span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span>
				<span class="hljs-tag">&lt;<span class="hljs-name">div</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"custom-control custom-radio mb-5"</span>&gt;</span>
					<span class="hljs-tag">&lt;<span class="hljs-name">input</span> <span class="hljs-attr">type</span>=<span class="hljs-string">"radio"</span> <span class="hljs-attr">id</span>=<span class="hljs-string">"customRadio5"</span> <span class="hljs-attr">name</span>=<span class="hljs-string">"customRadio"</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"custom-control-input"</span>&gt;</span>
					<span class="hljs-tag">&lt;<span class="hljs-name">label</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"custom-control-label"</span> <span class="hljs-attr">for</span>=<span class="hljs-string">"customRadio5"</span>&gt;</span>Or toggle this other custom radio<span class="hljs-tag">&lt;/<span class="hljs-name">label</span>&gt;</span>
				<span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span>
				<span class="hljs-tag">&lt;<span class="hljs-name">div</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"custom-control custom-radio mb-5"</span>&gt;</span>
					<span class="hljs-tag">&lt;<span class="hljs-name">input</span> <span class="hljs-attr">type</span>=<span class="hljs-string">"radio"</span> <span class="hljs-attr">id</span>=<span class="hljs-string">"customRadio6"</span> <span class="hljs-attr">name</span>=<span class="hljs-string">"customRadio"</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"custom-control-input"</span>&gt;</span>
					<span class="hljs-tag">&lt;<span class="hljs-name">label</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"custom-control-label"</span> <span class="hljs-attr">for</span>=<span class="hljs-string">"customRadio6"</span>&gt;</span>Or toggle this other custom radio<span class="hljs-tag">&lt;/<span class="hljs-name">label</span>&gt;</span>
				<span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span>
			<span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span>
		<span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span>
	<span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span>
	<span class="hljs-tag">&lt;<span class="hljs-name">div</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"form-group"</span>&gt;</span>
		<span class="hljs-tag">&lt;<span class="hljs-name">label</span>&gt;</span>Disabled select menu<span class="hljs-tag">&lt;/<span class="hljs-name">label</span>&gt;</span>
		<span class="hljs-tag">&lt;<span class="hljs-name">select</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"form-control"</span> <span class="hljs-attr">disabled</span>=<span class="hljs-string">""</span>&gt;</span>
			<span class="hljs-tag">&lt;<span class="hljs-name">option</span>&gt;</span>Disabled select<span class="hljs-tag">&lt;/<span class="hljs-name">option</span>&gt;</span>
		<span class="hljs-tag">&lt;/<span class="hljs-name">select</span>&gt;</span>
	<span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span>
	<span class="hljs-tag">&lt;<span class="hljs-name">div</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"form-group"</span>&gt;</span>
		<span class="hljs-tag">&lt;<span class="hljs-name">label</span>&gt;</span>input plaintext<span class="hljs-tag">&lt;/<span class="hljs-name">label</span>&gt;</span>
		<span class="hljs-tag">&lt;<span class="hljs-name">input</span> <span class="hljs-attr">type</span>=<span class="hljs-string">"text"</span> <span class="hljs-attr">readonly</span>=<span class="hljs-string">""</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"form-control-plaintext"</span> <span class="hljs-attr">value</span>=<span class="hljs-string">"email@example.com"</span>&gt;</span>
	<span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span>
	<span class="hljs-tag">&lt;<span class="hljs-name">div</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"form-group"</span>&gt;</span>
		<span class="hljs-tag">&lt;<span class="hljs-name">label</span>&gt;</span>Textarea<span class="hljs-tag">&lt;/<span class="hljs-name">label</span>&gt;</span>
		<span class="hljs-tag">&lt;<span class="hljs-name">textarea</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"form-control"</span>&gt;</span><span class="hljs-tag">&lt;/<span class="hljs-name">textarea</span>&gt;</span>
	<span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span>
	<span class="hljs-tag">&lt;<span class="hljs-name">div</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"form-group"</span>&gt;</span>
		<span class="hljs-tag">&lt;<span class="hljs-name">label</span>&gt;</span>Help text<span class="hljs-tag">&lt;/<span class="hljs-name">label</span>&gt;</span>
		<span class="hljs-tag">&lt;<span class="hljs-name">input</span> <span class="hljs-attr">type</span>=<span class="hljs-string">"text"</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"form-control"</span>&gt;</span>
		<span class="hljs-tag">&lt;<span class="hljs-name">small</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"form-text text-muted"</span>&gt;</span>
		  Your password must be 8-20 characters long, contain letters and numbers, and must not contain spaces, special characters, or emoji.
		<span class="hljs-tag">&lt;/<span class="hljs-name">small</span>&gt;</span>
	<span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span>
	<span class="hljs-tag">&lt;<span class="hljs-name">div</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"form-group"</span>&gt;</span>
		<span class="hljs-tag">&lt;<span class="hljs-name">label</span>&gt;</span>Example file input<span class="hljs-tag">&lt;/<span class="hljs-name">label</span>&gt;</span>
		<span class="hljs-tag">&lt;<span class="hljs-name">input</span> <span class="hljs-attr">type</span>=<span class="hljs-string">"file"</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"form-control-file form-control height-auto"</span>&gt;</span>
	<span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span>
	<span class="hljs-tag">&lt;<span class="hljs-name">div</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"form-group"</span>&gt;</span>
		<span class="hljs-tag">&lt;<span class="hljs-name">label</span>&gt;</span>Custom file input<span class="hljs-tag">&lt;/<span class="hljs-name">label</span>&gt;</span>
		<span class="hljs-tag">&lt;<span class="hljs-name">div</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"custom-file"</span>&gt;</span>
			<span class="hljs-tag">&lt;<span class="hljs-name">input</span> <span class="hljs-attr">type</span>=<span class="hljs-string">"file"</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"custom-file-input"</span>&gt;</span>
			<span class="hljs-tag">&lt;<span class="hljs-name">label</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"custom-file-label"</span>&gt;</span>Choose file<span class="hljs-tag">&lt;/<span class="hljs-name">label</span>&gt;</span>
		<span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span>
	<span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span>
<span class="hljs-tag">&lt;/<span class="hljs-name">form</span>&gt;</span>

</code></pre>
		</div>
	</div>
</div>

<div class="d-flex row">
	<?php foreach ($caraousel as $jejo) { ?>
	<div class="mt-3 col-lg-4">
		<div class="card bg-light" style="width: 50vh; height: 42vh;">
			<img style="width: 50vh; height: 25vh; object-fit: cover;"
				src="<?= base_url('assets/upload/caraousel/' . $jejo['foto']); ?>" class="card-img-top">
			<div class="card-body">
				<h5 class="card-title"><?= $jejo['judul'] ?></h5>
				<a class="btn btn-primary" onclick="return confirm('Yakin ingin menghapus data ini?')"
					href="<?= base_url('admin/caraousel/hapus_data/'. $jejo['foto']); ?>">
					<i class="fa fa-trash"></i>
				</a>
			</div>
		</div>
	</div>
	<?php } ?>
</div>

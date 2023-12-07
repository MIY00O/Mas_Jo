<div id="hilang">
		<?= $this->session->flashdata('alert'); ?>
	</div>
<div class="pd-20 card-box mb-30">
	<div class="clearfix">
		<div class="pull-left">
			<h4 class="text-blue h4">Konfigurasi</h4>
		</div>

	</div>
	<form action="<?= base_url('admin/konfigurasi/update') ?>" method="post">
		<div class="form-group row">
			<label class="col-sm-12 col-md-2 col-form-label">Judul Website</label>
			<div class="col-sm-12 col-md-10">
				<input class="form-control" type="text" placeholder="......." name="judul"
					value="<?= $konfig->judul_website; ?>">
			</div>
		</div>
		<div class="form-group row">
			<label class="col-sm-12 col-md-2 col-form-label">Profile</label>
			<div class="col-sm-12 col-md-10">
				<textarea name="profil_website" class="form-control" <?= $konfig->profil_website; ?>></textarea>
			</div>
		</div>
		<div class="form-group row">
			<label class="col-sm-12 col-md-2 col-form-label">Facebook</label>
			<div class="col-sm-12 col-md-10">
				<input class="form-control" type="text" placeholder="......." name="facebook"
					value="<?= $konfig->facebook; ?>">
			</div>
		</div>
		<div class="form-group row">
			<label class="col-sm-12 col-md-2 col-form-label">Instagram</label>
			<div class="col-sm-12 col-md-10">
				<input class="form-control" type="text" placeholder="......." name="instagram"
					value="<?= $konfig->instagram; ?>">
			</div>
		</div>
		<div class="form-group row">
			<label class="col-sm-12 col-md-2 col-form-label">Email</label>
			<div class="col-sm-12 col-md-10">
				<input class="form-control" type="email" placeholder="......." name="email"
					value="<?= $konfig->email; ?>">
			</div>
		</div>
		<div class="form-group row">
			<label class="col-sm-12 col-md-2 col-form-label">Alamat</label>
			<div class="col-sm-12 col-md-10">
				<input class="form-control" type="text" placeholder="......." name="alamat"
					value="<?= $konfig->alamat; ?>">
			</div>
		</div>
		<div class="form-group row">
			<label class="col-sm-12 col-md-2 col-form-label">Whatsapp</label>
			<div class="col-sm-12 col-md-10">
				<input class="form-control" type="text" placeholder="......." name="no_wa"
					value="<?= $konfig->no_wa; ?>">
			</div>
		</div>
		<button type="submit" class="btn btn-primary">Simpan</button>
</div>
</form>
<div class="collapse collapse-box" id="basic-form1">
	<div class="code-box">
		<div class="clearfix">
			<a href="javascript:;" class="btn btn-primary btn-sm code-copy pull-left"
				data-clipboard-target="#copy-pre"><i class="fa fa-clipboard"></i> Copy Code</a>
			<a href="#basic-form1" class="btn btn-primary btn-sm pull-right" rel="content-y" data-toggle="collapse"
				role="button"><i class="fa fa-eye-slash"></i> Hide Code</a>
		</div>
		<pre><code class="xml copy-pre hljs" id="copy-pre">
<span class="hljs-tag">&lt;<span class="hljs-name">form</span>&gt;</span>
	<span class="hljs-tag">&lt;<span class="hljs-name">div</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"form-group row"</span>&gt;</span>
		<span class="hljs-tag">&lt;<span class="hljs-name">label</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"col-sm-12 col-md-2 col-form-label"</span>&gt;</span>Text<span class="hljs-tag">&lt;/<span class="hljs-name">label</span>&gt;</span>
		<span class="hljs-tag">&lt;<span class="hljs-name">div</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"col-sm-12 col-md-10"</span>&gt;</span>
			<span class="hljs-tag">&lt;<span class="hljs-name">input</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"form-control"</span> <span class="hljs-attr">type</span>=<span class="hljs-string">"text"</span> <span class="hljs-attr">placeholder</span>=<span class="hljs-string">"Johnny Brown"</span>&gt;</span>
		<span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span>
	<span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span>
	<span class="hljs-tag">&lt;<span class="hljs-name">div</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"form-group row"</span>&gt;</span>
		<span class="hljs-tag">&lt;<span class="hljs-name">label</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"col-sm-12 col-md-2 col-form-label"</span>&gt;</span>Search<span class="hljs-tag">&lt;/<span class="hljs-name">label</span>&gt;</span>
		<span class="hljs-tag">&lt;<span class="hljs-name">div</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"col-sm-12 col-md-10"</span>&gt;</span>
			<span class="hljs-tag">&lt;<span class="hljs-name">input</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"form-control"</span> <span class="hljs-attr">placeholder</span>=<span class="hljs-string">"Search Here"</span> <span class="hljs-attr">type</span>=<span class="hljs-string">"search"</span>&gt;</span>
		<span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span>
	<span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span>
	<span class="hljs-tag">&lt;<span class="hljs-name">div</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"form-group row"</span>&gt;</span>
		<span class="hljs-tag">&lt;<span class="hljs-name">label</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"col-sm-12 col-md-2 col-form-label"</span>&gt;</span>Email<span class="hljs-tag">&lt;/<span class="hljs-name">label</span>&gt;</span>
		<span class="hljs-tag">&lt;<span class="hljs-name">div</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"col-sm-12 col-md-10"</span>&gt;</span>
			<span class="hljs-tag">&lt;<span class="hljs-name">input</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"form-control"</span> <span class="hljs-attr">value</span>=<span class="hljs-string">"bootstrap@example.com"</span> <span class="hljs-attr">type</span>=<span class="hljs-string">"email"</span>&gt;</span>
		<span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span>
	<span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span>
	<span class="hljs-tag">&lt;<span class="hljs-name">div</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"form-group row"</span>&gt;</span>
		<span class="hljs-tag">&lt;<span class="hljs-name">label</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"col-sm-12 col-md-2 col-form-label"</span>&gt;</span>URL<span class="hljs-tag">&lt;/<span class="hljs-name">label</span>&gt;</span>
		<span class="hljs-tag">&lt;<span class="hljs-name">div</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"col-sm-12 col-md-10"</span>&gt;</span>
			<span class="hljs-tag">&lt;<span class="hljs-name">input</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"form-control"</span> <span class="hljs-attr">value</span>=<span class="hljs-string">"https://getbootstrap.com"</span> <span class="hljs-attr">type</span>=<span class="hljs-string">"url"</span>&gt;</span>
		<span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span>
	<span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span>
	<span class="hljs-tag">&lt;<span class="hljs-name">div</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"form-group row"</span>&gt;</span>
		<span class="hljs-tag">&lt;<span class="hljs-name">label</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"col-sm-12 col-md-2 col-form-label"</span>&gt;</span>Telephone<span class="hljs-tag">&lt;/<span class="hljs-name">label</span>&gt;</span>
		<span class="hljs-tag">&lt;<span class="hljs-name">div</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"col-sm-12 col-md-10"</span>&gt;</span>
			<span class="hljs-tag">&lt;<span class="hljs-name">input</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"form-control"</span> <span class="hljs-attr">value</span>=<span class="hljs-string">"1-(111)-111-1111"</span> <span class="hljs-attr">type</span>=<span class="hljs-string">"tel"</span>&gt;</span>
		<span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span>
	<span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span>
	<span class="hljs-tag">&lt;<span class="hljs-name">div</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"form-group row"</span>&gt;</span>
		<span class="hljs-tag">&lt;<span class="hljs-name">label</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"col-sm-12 col-md-2 col-form-label"</span>&gt;</span>Password<span class="hljs-tag">&lt;/<span class="hljs-name">label</span>&gt;</span>
		<span class="hljs-tag">&lt;<span class="hljs-name">div</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"col-sm-12 col-md-10"</span>&gt;</span>
			<span class="hljs-tag">&lt;<span class="hljs-name">input</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"form-control"</span> <span class="hljs-attr">value</span>=<span class="hljs-string">"password"</span> <span class="hljs-attr">type</span>=<span class="hljs-string">"password"</span>&gt;</span>
		<span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span>
	<span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span>
	<span class="hljs-tag">&lt;<span class="hljs-name">div</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"form-group row"</span>&gt;</span>
		<span class="hljs-tag">&lt;<span class="hljs-name">label</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"col-sm-12 col-md-2 col-form-label"</span>&gt;</span>Number<span class="hljs-tag">&lt;/<span class="hljs-name">label</span>&gt;</span>
		<span class="hljs-tag">&lt;<span class="hljs-name">div</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"col-sm-12 col-md-10"</span>&gt;</span>
			<span class="hljs-tag">&lt;<span class="hljs-name">input</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"form-control"</span> <span class="hljs-attr">value</span>=<span class="hljs-string">"100"</span> <span class="hljs-attr">type</span>=<span class="hljs-string">"number"</span>&gt;</span>
		<span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span>
	<span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span>
	<span class="hljs-tag">&lt;<span class="hljs-name">div</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"form-group row"</span>&gt;</span>
		<span class="hljs-tag">&lt;<span class="hljs-name">label</span> <span class="hljs-attr">for</span>=<span class="hljs-string">"example-datetime-local-input"</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"col-sm-12 col-md-2 col-form-label"</span>&gt;</span>Date and time<span class="hljs-tag">&lt;/<span class="hljs-name">label</span>&gt;</span>
		<span class="hljs-tag">&lt;<span class="hljs-name">div</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"col-sm-12 col-md-10"</span>&gt;</span>
			<span class="hljs-tag">&lt;<span class="hljs-name">input</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"form-control datetimepicker"</span> <span class="hljs-attr">placeholder</span>=<span class="hljs-string">"Choose Date anf time"</span> <span class="hljs-attr">type</span>=<span class="hljs-string">"text"</span>&gt;</span>
		<span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span>
	<span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span>
	<span class="hljs-tag">&lt;<span class="hljs-name">div</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"form-group row"</span>&gt;</span>
		<span class="hljs-tag">&lt;<span class="hljs-name">label</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"col-sm-12 col-md-2 col-form-label"</span>&gt;</span>Date<span class="hljs-tag">&lt;/<span class="hljs-name">label</span>&gt;</span>
		<span class="hljs-tag">&lt;<span class="hljs-name">div</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"col-sm-12 col-md-10"</span>&gt;</span>
			<span class="hljs-tag">&lt;<span class="hljs-name">input</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"form-control date-picker"</span> <span class="hljs-attr">placeholder</span>=<span class="hljs-string">"Select Date"</span> <span class="hljs-attr">type</span>=<span class="hljs-string">"text"</span>&gt;</span>
		<span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span>
	<span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span>
	<span class="hljs-tag">&lt;<span class="hljs-name">div</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"form-group row"</span>&gt;</span>
		<span class="hljs-tag">&lt;<span class="hljs-name">label</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"col-sm-12 col-md-2 col-form-label"</span>&gt;</span>Month<span class="hljs-tag">&lt;/<span class="hljs-name">label</span>&gt;</span>
		<span class="hljs-tag">&lt;<span class="hljs-name">div</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"col-sm-12 col-md-10"</span>&gt;</span>
			<span class="hljs-tag">&lt;<span class="hljs-name">input</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"form-control month-picker"</span> <span class="hljs-attr">placeholder</span>=<span class="hljs-string">"Select Month"</span> <span class="hljs-attr">type</span>=<span class="hljs-string">"text"</span>&gt;</span>
		<span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span>
	<span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span>
	<span class="hljs-tag">&lt;<span class="hljs-name">div</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"form-group row"</span>&gt;</span>
		<span class="hljs-tag">&lt;<span class="hljs-name">label</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"col-sm-12 col-md-2 col-form-label"</span>&gt;</span>Time<span class="hljs-tag">&lt;/<span class="hljs-name">label</span>&gt;</span>
		<span class="hljs-tag">&lt;<span class="hljs-name">div</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"col-sm-12 col-md-10"</span>&gt;</span>
			<span class="hljs-tag">&lt;<span class="hljs-name">input</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"form-control time-picker td-input"</span> <span class="hljs-attr">placeholder</span>=<span class="hljs-string">"Select time"</span> <span class="hljs-attr">type</span>=<span class="hljs-string">"text"</span> <span class="hljs-attr">readonly</span>=<span class="hljs-string">""</span>&gt;</span>
		<span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span>
	<span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span>
	<span class="hljs-tag">&lt;<span class="hljs-name">div</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"form-group row"</span>&gt;</span>
		<span class="hljs-tag">&lt;<span class="hljs-name">label</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"col-sm-12 col-md-2 col-form-label"</span>&gt;</span>Select<span class="hljs-tag">&lt;/<span class="hljs-name">label</span>&gt;</span>
		<span class="hljs-tag">&lt;<span class="hljs-name">div</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"col-sm-12 col-md-10"</span>&gt;</span>
			<span class="hljs-tag">&lt;<span class="hljs-name">select</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"custom-select col-12"</span>&gt;</span>
				<span class="hljs-tag">&lt;<span class="hljs-name">option</span> <span class="hljs-attr">selected</span>=<span class="hljs-string">""</span>&gt;</span>Choose...<span class="hljs-tag">&lt;/<span class="hljs-name">option</span>&gt;</span>
				<span class="hljs-tag">&lt;<span class="hljs-name">option</span> <span class="hljs-attr">value</span>=<span class="hljs-string">"1"</span>&gt;</span>One<span class="hljs-tag">&lt;/<span class="hljs-name">option</span>&gt;</span>
				<span class="hljs-tag">&lt;<span class="hljs-name">option</span> <span class="hljs-attr">value</span>=<span class="hljs-string">"2"</span>&gt;</span>Two<span class="hljs-tag">&lt;/<span class="hljs-name">option</span>&gt;</span>
				<span class="hljs-tag">&lt;<span class="hljs-name">option</span> <span class="hljs-attr">value</span>=<span class="hljs-string">"3"</span>&gt;</span>Three<span class="hljs-tag">&lt;/<span class="hljs-name">option</span>&gt;</span>
			<span class="hljs-tag">&lt;/<span class="hljs-name">select</span>&gt;</span>
		<span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span>
	<span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span>
	<span class="hljs-tag">&lt;<span class="hljs-name">div</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"form-group row"</span>&gt;</span>
		<span class="hljs-tag">&lt;<span class="hljs-name">label</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"col-sm-12 col-md-2 col-form-label"</span>&gt;</span>Color<span class="hljs-tag">&lt;/<span class="hljs-name">label</span>&gt;</span>
		<span class="hljs-tag">&lt;<span class="hljs-name">div</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"col-sm-12 col-md-10"</span>&gt;</span>
			<span class="hljs-tag">&lt;<span class="hljs-name">input</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"form-control"</span> <span class="hljs-attr">value</span>=<span class="hljs-string">"#563d7c"</span> <span class="hljs-attr">type</span>=<span class="hljs-string">"color"</span>&gt;</span>
		<span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span>
	<span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span>
	<span class="hljs-tag">&lt;<span class="hljs-name">div</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"form-group row"</span>&gt;</span>
		<span class="hljs-tag">&lt;<span class="hljs-name">label</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"col-sm-12 col-md-2 col-form-label"</span>&gt;</span>Input Range<span class="hljs-tag">&lt;/<span class="hljs-name">label</span>&gt;</span>
		<span class="hljs-tag">&lt;<span class="hljs-name">div</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"col-sm-12 col-md-10"</span>&gt;</span>
			<span class="hljs-tag">&lt;<span class="hljs-name">input</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"form-control"</span> <span class="hljs-attr">value</span>=<span class="hljs-string">"50"</span> <span class="hljs-attr">type</span>=<span class="hljs-string">"range"</span>&gt;</span>
		<span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span>
	<span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span>
<span class="hljs-tag">&lt;/<span class="hljs-name">form</span>&gt;</span>
							</code></pre>
	</div>
</div>
</div>

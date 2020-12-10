<div class="col-10 shadow m-3 p-3">
	<h3>Tambah Data</h3>
	<form action="{{url('/data')}}" method="post">
		@csrf
		<div class="form-group">
			<label for="nama">Nama</label>
			<input type="text" name="nama" class="form-control bg-transparent @error('nama') is-invalid @enderror" id="nama" required>
			@error('nama')
			<div class="invalid-feedback">
				<strong>{{$message}}</strong>
			</div>
			@enderror
		</div>
		<div class="form-group">
			<label for="telepon">Telepon</label>
			<input type="text" name="telepon" class="form-control bg-transparent @error('telepon') is-invalid @enderror" id="telepon" required>
			@error('telepon')
			<div class="invalid-feedback">
				<strong>{{$message}}</strong>
			</div>
			@enderror
		</div>
		<div class="form-group">
			<label for="alamat">Alamat</label>
			<input type="text" name="alamat" class="form-control bg-transparent @error('alamat') is-invalid @enderror" id="alamat" required>
			@error('alamat')
			<div class="invalid-feedback">
				<strong>{{$message}}</strong>
			</div>
			@enderror
		</div>
		<button type="submit" class="btn btn-success">Tambah</button>
	</form>
</div>
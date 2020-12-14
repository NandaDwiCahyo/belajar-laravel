<div class="col-10 shadow m-3 p-3">
	<h3>Perbarui Data</h3>
	<form action="/data/{{$data[0]['id']}}" method="post">
		@csrf
		@method('patch')
		<div class="form-group">
			<label for="nama">Nama</label>
			<input type="text" name="nama" class="form-control bg-transparent @error('nama') is-invalid @enderror" id="nama" required value="{{$data[0]['nama']}}">
			@error('nama')
			<div class="invalid-feedback">
				<strong>{{$message}}</strong>
			</div>
			@enderror
		</div>
		<div class="form-group">
			<label for="telepon">Telepon</label>
			<input type="text" name="telepon" class="form-control bg-transparent @error('telepon') is-invalid @enderror" id="telepon" required value="{{$data[0]['telepon']}}">
			@error('telepon')
			<div class="invalid-feedback">
				<strong>{{$message}}</strong>
			</div>
			@enderror
		</div>
		<div class="form-group">
			<label for="alamat">Alamat</label>
			<input type="text" name="alamat" class="form-control bg-transparent @error('alamat') is-invalid @enderror" id="alamat" required value="{{$data[0]['alamat']}}">
			@error('alamat')
			<div class="invalid-feedback">
				<strong>{{$message}}</strong>
			</div>
			@enderror
		</div>
		<button type="submit" class="btn btn-warning">Perbarui</button>
	</form>
</div>
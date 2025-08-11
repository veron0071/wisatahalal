<div class="mb-3">
    <label for="nama_fasilitas" class="form-label">Nama Fasilitas</label>
    <input type="text" class="form-control @error('nama_fasilitas') is-invalid @enderror" 
       id="nama_fasilitas" name="nama_fasilitas" 
       value="{{ old('nama_fasilitas', $fasilitas->nama_fasilitas ?? '') }}" required>
@error('nama_fasilitas')
    <div class="invalid-feedback">{{ $message }}</div>
@enderror

</div>

<div class="mb-3">
    <label for="deskripsi" class="form-label">Deskripsi</label>
    <textarea class="form-control @error('deskripsi') is-invalid @enderror" id="deskripsi" name="deskripsi" rows="5" required>{{ old('deskripsi', $fasilitas->deskripsi?? '') }}</textarea>
    @error('deskripsi')
        <div class="invalid-feedback">{{ $message }}</div>
    @enderror
</div>
<div class="mb-3">
    <label for="lokasi" class="form-label">Lokasi</label>
    <textarea class="form-control @error('lokasi') is-invalid @enderror" id="lokasi" name="lokasi" rows="5" required>{{ old('lokasi', $fasilitas->lokasi?? '') }}</textarea>
    @error('lokasi')
        <div class="invalid-feedback">{{ $message }}</div>
    @enderror
</div>
<div class="mb-3">
    <label for="foto" class="form-label">Foto</label>
    <input class="form-control @error('foto') is-invalid @enderror" type="file" id="foto" name="foto">
    @error('foto')
        <div class="invalid-feedback">{{ $message }}</div>
    @enderror
    @if(isset($fasilitas) && $fasilitas->foto)
        <div class="mt-2">
            <img src="{{ asset('storage/'. $fasilitas->foto) }}" alt="{{ $fasilitas->nama_fasilitas }}" width="150">
        </div>
    @endif
</div>

<button type="submit" class="btn btn-primary">Simpan</button>
<a href="{{ route('admin.fasilitas.index') }}" class="btn btn-secondary">Batal</a>

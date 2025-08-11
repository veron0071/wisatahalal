<div class="mb-3">
    <label for="nama" class="form-label">Nama Ulama</label>
    <input type="text" class="form-control @error('nama') is-invalid @enderror" id="nama" name="nama" value="{{ old('nama', $ulama->nama?? '') }}" required>
    @error('nama')
        <div class="invalid-feedback">{{ $message }}</div>
    @enderror
</div>

<div class="mb-3">
    <label for="sejarah" class="form-label">Sejarah</label>
    <textarea class="form-control @error('sejarah') is-invalid @enderror" id="sejarah" name="sejarah" rows="5" required>{{ old('sejarah', $ulama->sejarah?? '') }}</textarea>
    @error('sejarah')
        <div class="invalid-feedback">{{ $message }}</div>
    @enderror
</div>

<div class="mb-3">
    <label for="foto" class="form-label">Foto</label>
    <input class="form-control @error('foto') is-invalid @enderror" type="file" id="foto" name="foto">
    @error('foto')
        <div class="invalid-feedback">{{ $message }}</div>
    @enderror
    @if(isset($ulama) && $ulama->foto)
        <div class="mt-2">
            <img src="{{ asset('storage/'. $ulama->foto) }}" alt="{{ $ulama->nama }}" width="150">
        </div>
    @endif
</div>

<button type="submit" class="btn btn-primary">Simpan</button>
<a href="{{ route('admin.ulama.index') }}" class="btn btn-secondary">Batal</a>

<div class="mb-3">
    <label for="judul" class="form-label">Judul Ceramah</label>
    <input type="text" name="judul" class="form-control" value="{{ old('judul', $ceramah->judul ?? '') }}">
</div>

<div class="mb-3">
    <label for="pemateri" class="form-label">Pemateri</label>
    <input type="text" name="pemateri" class="form-control" value="{{ old('pemateri', $ceramah->pemateri ?? '') }}">
</div>

<div class="mb-3">
    <label for="tanggal" class="form-label">Tanggal</label>
    <input type="date" name="tanggal" class="form-control" value="{{ old('tanggal', $ceramah->tanggal ?? '') }}">
</div>

<div class="mb-3">
    <label for="deskripsi" class="form-label">Deskripsi</label>
    <textarea name="deskripsi" class="form-control">{{ old('deskripsi', $ceramah->deskripsi ?? '') }}</textarea>
</div>

<button class="btn btn-primary">Simpan</button>

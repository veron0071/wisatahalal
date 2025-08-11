<div class="mb-3">
    <label for="nama" class="form-label text-capitalize">nama</label>
    <input type="text" class="form-control" id="nama" name="nama" value="{{ old('nama', $fasilitas->nama ?? '') }}">
</div>
<div class="mb-3">
    <label for="lokasi" class="form-label text-capitalize">lokasi</label>
    <input type="text" class="form-control" id="lokasi" name="lokasi" value="{{ old('lokasi', $fasilitas->lokasi ?? '') }}">
</div>
<div class="mb-3">
    <label for="deskripsi" class="form-label text-capitalize">deskripsi</label>
    <textarea class="form-control" id="deskripsi" name="deskripsi" rows="4">{{ old('deskripsi', $fasilitas->deskripsi ?? '') }}</textarea>
</div>
<div class="mb-3">
    <label for="foto" class="form-label text-capitalize">foto</label>
    <input type="file" class="form-control" id="foto" name="foto">
</div>
<div class="mb-3">
    <label for="nama" class="form-label text-capitalize">nama</label>
    <input type="text" class="form-control" id="nama" name="nama" value="{{ old('nama', $umkm->nama ?? '') }}">
</div>
<div class="mb-3">
    <label for="kategori" class="form-label text-capitalize">kategori</label>
    <input type="text" class="form-control" id="kategori" name="kategori" value="{{ old('kategori', $umkm->kategori ?? '') }}">
</div>
<div class="mb-3">
    <label for="kontak" class="form-label text-capitalize">kontak</label>
    <input type="text" class="form-control" id="kontak" name="kontak" value="{{ old('kontak', $umkm->kontak ?? '') }}">
</div>
<div class="mb-3">
    <label for="deskripsi" class="form-label text-capitalize">deskripsi</label>
    <textarea class="form-control" id="deskripsi" name="deskripsi" rows="4">{{ old('deskripsi', $umkm->deskripsi ?? '') }}</textarea>
</div>
<div class="mb-3">
    <label for="foto" class="form-label text-capitalize">foto</label>
    <input type="file" class="form-control" id="foto" name="foto">
</div>
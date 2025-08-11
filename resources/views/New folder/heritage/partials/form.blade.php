<div class="mb-3">
    <label for="nama" class="form-label text-capitalize">nama</label>
    <input type="text" class="form-control" id="nama" name="nama" value="{{ old('nama', $heritage->nama ?? '') }}">
</div>
<div class="mb-3">
    <label for="lokasi" class="form-label text-capitalize">lokasi</label>
    <input type="text" class="form-control" id="lokasi" name="lokasi" value="{{ old('lokasi', $heritage->lokasi ?? '') }}">
</div>
<div class="mb-3">
    <label for="sejarah" class="form-label text-capitalize">sejarah</label>
    <textarea class="form-control" id="sejarah" name="sejarah" rows="4">{{ old('sejarah', $heritage->sejarah ?? '') }}</textarea>
</div>
<div class="mb-3">
    <label for="foto" class="form-label text-capitalize">foto</label>
    <input type="file" class="form-control" id="foto" name="foto">
</div>
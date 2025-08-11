<div class="mb-3">
    <label for="nama" class="form-label text-capitalize">nama</label>
    <input type="text" class="form-control" id="nama" name="nama" value="{{ old('nama', $ulama->nama ?? '') }}">
</div>
<div class="mb-3">
    <label for="bio" class="form-label text-capitalize">bio</label>
    <input type="text" class="form-control" id="bio" name="bio" value="{{ old('bio', $ulama->bio ?? '') }}">
</div>

<div class="mb-3">
    <label for="foto" class="form-label text-capitalize">foto</label>
    <input type="file" class="form-control" id="foto" name="foto">
</div>
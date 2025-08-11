<div class="mb-3">
    <label for="nama" class="form-label text-capitalize">nama</label>
    <input type="text" class="form-control" id="nama" name="nama" value="{{ old('nama', $pelatihan->nama ?? '') }}">
</div>
<div class="mb-3">
    <label for="pemateri" class="form-label text-capitalize">pemateri</label>
    <input type="text" class="form-control" id="pemateri" name="pemateri" value="{{ old('pemateri', $pelatihan->pemateri ?? '') }}">
</div>
<div class="mb-3">
    <label for="tanggal" class="form-label text-capitalize">tanggal</label>
    <input type="text" class="form-control" id="tanggal" name="tanggal" value="{{ old('tanggal', $pelatihan->tanggal ?? '') }}">
</div>
<div class="mb-3">
    <label for="lokasi" class="form-label text-capitalize">lokasi</label>
    <input type="text" class="form-control" id="lokasi" name="lokasi" value="{{ old('lokasi', $pelatihan->lokasi ?? '') }}">
</div>


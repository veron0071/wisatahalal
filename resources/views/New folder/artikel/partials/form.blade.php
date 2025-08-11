<div class="mb-3">
    <label for="judul" class="form-label text-capitalize">judul</label>
    <input type="text" class="form-control" id="judul" name="judul" value="{{ old('judul', $artikel->judul ?? '') }}">
</div>
<div class="mb-3">
    <label for="penulis" class="form-label text-capitalize">penulis</label>
    <input type="text" class="form-control" id="penulis" name="penulis" value="{{ old('penulis', $artikel->penulis ?? '') }}">
</div>
<div class="mb-3">
    <label for="tanggal" class="form-label text-capitalize">tanggal</label>
    <input type="text" class="form-control" id="tanggal" name="tanggal" value="{{ old('tanggal', $artikel->tanggal ?? '') }}">
</div>
<div class="mb-3">
    <label for="konten" class="form-label text-capitalize">konten</label>
    <textarea class="form-control" id="konten" name="konten" rows="4">{{ old('konten', $artikel->konten ?? '') }}</textarea>
</div>

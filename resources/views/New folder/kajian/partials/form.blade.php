<div class="mb-3">
    <label for="judul" class="form-label text-capitalize">judul</label>
    <input type="text" class="form-control" id="judul" name="judul" value="{{ old('judul', $kajian->judul ?? '') }}">
</div>
<div class="mb-3">
    <label for="pemateri" class="form-label text-capitalize">pemateri</label>
    <input type="text" class="form-control" id="pemateri" name="pemateri" value="{{ old('pemateri', $kajian->pemateri ?? '') }}">
</div>
<div class="mb-3">
    <label for="tanggal" class="form-label text-capitalize">tanggal</label>
    <input type="text" class="form-control" id="tanggal" name="tanggal" value="{{ old('tanggal', $kajian->tanggal ?? '') }}">
</div>
<div class="mb-3">
    <label for="deskripsi" class="form-label text-capitalize">deskripsi</label>
    <textarea class="form-control" id="deskripsi" name="deskripsi" rows="4">{{ old('deskripsi', $kajian->deskripsi ?? '') }}</textarea>
</div>

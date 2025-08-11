<div class="mb-3">
    <label for="judul" class="form-label text-capitalize">judul</label>
    <input type="text" class="form-control" id="judul" name="judul" value="{{ old('judul', $ceramah->judul ?? '') }}">
</div>
<div class="mb-3">
    <label for="pemateri" class="form-label text-capitalize">pemateri</label>
    <input type="text" class="form-control" id="pemateri" name="pemateri" value="{{ old('pemateri', $ceramah->pemateri ?? '') }}">
</div>
<div class="mb-3">
    <label for="tanggal" class="form-label text-capitalize">tanggal</label>
    <input type="text" class="form-control" id="tanggal" name="tanggal" value="{{ old('tanggal', $ceramah->tanggal ?? '') }}">
</div>
<div class="mb-3">
    <label for="video_url" class="form-label text-capitalize">video url</label>
    <input type="text" class="form-control" id="video_url" name="video_url" value="{{ old('video_url', $ceramah->video_url ?? '') }}">
</div>


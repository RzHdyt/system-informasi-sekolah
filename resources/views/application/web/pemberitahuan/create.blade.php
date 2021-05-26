<div class="form-group">
    <label for="title">Title</label>
    <input type="text" class="form-control" name="title" id="title" placeholder="Enter title"
        value="{{ old('title') }}">

    @error('title')
    <div class="invalid-feedback" style="display: block !important;">{{ $message }}
    </div>
    @enderror
</div>

<div class="form-group">
    <label for="photo_id">Photos</label>
    <input type="file" name="photo_id" id="photo_id" class="form-control" value="{{ old('photo_id') }}">

    @error('photo')
    <div class="invalid-feedback" style="display: block !important;">{{ $message }}
    </div>
    @enderror
</div>

<div class="form-group">
    <label for="body">Body</label>
    <textarea class="form-control" name="body" id="body" placeholder="Enter Text" value="{{ old('name') }}" cols="30"
        rows="10"></textarea>

    @error('body')
    <div class="invalid-feedback" style="display: block !important;">{{ $message }}
    </div>
    @enderror
</div>
    @csrf
    <div class="form-group">
        <label for="title">عنوان المقاله</label>
        <input type="text" name="title" id="title" class="form-control" value="{{ $post->name ?? "" }}">
    </div>
    @error('title')
        <div class="alert alert-danger">{{ $message }}</div>
    @enderror
    <div class="form-group">
        <label for="body">نص المقاله</label>
        <textarea name="body" id="body" cols="30" rows="10" class="form-control">{{ $post->body ?? "" }}</textarea>
    </div>
    @error('body')
    <div class="alert alert-danger">{{ $message }}</div>
    @enderror   
    <div class="form-group">
        <label for="author">كاتب المقاله</label>
        <input type="text" name="author" id="author" class="form-control" value="{{ $post->author ?? "" }}">
    </div>
    @error('author')
    <div class="alert alert-danger">{{ $message }}</div>
    @enderror


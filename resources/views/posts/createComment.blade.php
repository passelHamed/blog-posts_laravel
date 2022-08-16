<form method="POST" action="/posts/{{ $post->id }}/comments">
    @csrf
    <div class="mb-3">
        <label for="name" class="form-label">الاسم</label>
        <input name="name" id="name" type="text" class="form-control">
    </div>
    @error('name')
        <div class="alert alert-danger">{{ $message }}</div>
    @enderror
    <div class="mb-3">
        <label for="body" class="form-label">التعليق</label>
        <input name="body" id="body" type="text" class="form-control">
    </div>
    @error('body')
        <div class="alert alert-danger">{{ $message }}</div>
    @enderror
    <button type="submit" class="btn btn-primary mb-3">ارسال</button>
</form>
@csrf

  <div class="form-group">
  <label>名前</label>
  <input type="text" name="title" class="form-control" required value="{{ old('title') }}"
  style="width: 200px; height: 40px;">
</div>

<div class="form-group"
style="width: 600px; height: 70px;"
>
<article-tags-input
    :initial-tags='@json($tagNames ?? [])'
    :autocomplete-items='@json($allTagNames ?? [])'
  >
  </article-tags-input>
</div>
<div class="form-group">
  <label></label>
  <textarea name="body" required class="form-control" rows="16" placeholder="本文">{{ $article->body ?? old('body') }}</textarea>
</div>
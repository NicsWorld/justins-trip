<form action="{{ url('/posts')}}" method="post" enctype="multipart/form-data">
  @csrf
  <div class="form-group">

  <div class="form-group">
    <input class="form-control" type="text" name="post_title" placeholder="Post title"/>
    <small class="form-text text-muted">The title of the post</small>
  </div>
  <div class="form-group">
    <textarea class="form-control" name="post_body" placeholder="Post body"></textarea>
    <small class="form-text text-muted">The description of the post</small>
  </div>
  <div class="form-group">
    <input type="file" name="photo"/>
    <small class="form-text text-muted">Add photo</small>
  </div>
  </div>
  <button class="btn btn-primary" type="submit">Submit</button>
</form>

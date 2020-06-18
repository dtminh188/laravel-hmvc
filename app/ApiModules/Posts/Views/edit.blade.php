<!DOCTYPE html>
<html>
<head>
  <title>HMVC</title>
  <link rel="stylesheet" type="text/css" href="/assets/css/style.css">
</head>
<body>
	<form method="post" action="" >
		<div class="input-group">
			<label>Title</label>
    <input type="text" name="title" value="{{ $post->title }}">
		</div>
		<div class="input-group">
			<label>Description</label>
      <input type="text" name="description" value="{{ $post->description }}">
		</div>
		<div class="input-group">
			<button class="btn" type="submit" name="save" >{{ trans('Posts::post.save') }}</button>
		</div>
	</form>
</body>
</html>

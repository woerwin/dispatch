<?php if ($file): ?>
<pre>
<?php var_dump($file) ?>
</pre>
<?php endif; ?>
<form method="POST" action="/single" enctype="multipart/form-data">
  <input type="file" name="file" id="file">
  <button type="submit">Upload</button>
</form>

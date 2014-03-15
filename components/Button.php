<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Eddie L Martinez | Tabs</title>
  <link rel="stylesheet" href="//code.jquery.com/ui/1.10.4/themes/smoothness/jquery-ui.css">
  <script src="//code.jquery.com/jquery-1.10.2.js"></script>
  <script src="//code.jquery.com/ui/1.10.4/jquery-ui.js"></script>
</head>
<body>
 
<form>
  <fieldset>
    <legend>Project Name</legend>
    <div id="radio">
      <input type="radio" id="sizzle" name="project">
      <label for="sizzle">Project</label>
 
      <input type="radio" id="qunit" name="project" checked="checked">
      <label for="qunit">Active Demo</label>
 
      <input type="radio" id="color" name="project">
      <label for="color">Live Source Code</label>
    </div>
  </fieldset>
</form>
 
<script>
$( "#radio" ).buttonset();
</script>
 
</body>
</html>
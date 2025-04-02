<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="global.css">
</head>

<body>
  <h1>Form using GET</h1>
  <!-- Submit the form to `get_welcome.php` using `get` method -->
  <form>
    <div>
      <label for="name">Fullname</label>
      <input type="text" name="fullname" id="name" autocomplete="off" required>
    </div>
    <div>
      <label for="name">Email</label>
      <input type="email" name="email" id="email" autocomplete="off" required>
    </div>
    <button type="submit">Submit</button>
  </form>
</body>

</html>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Sign Up - RumahMengaji</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <div class="wrapper">
    <h2>Sign Up</h2>
    <form action="proses_signup.php" method="post">
      <label for="name">Nama Lengkap:</label><br/>
      <input type="text" id="name" name="name" required><br/><br/>

      <label for="email">Email:</label><br/>
      <input type="email" id="email" name="email" required><br/><br/>

      <label for="password">Password:</label><br/>
      <input type="password" id="password" name="password" required><br/><br/>

      <button type="submit" class="tbl-biru">Daftar</button>
    </form>
  </div>
</body>
</html>

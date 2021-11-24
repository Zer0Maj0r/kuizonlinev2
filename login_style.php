<style>
  html {
    scroll-behavior: smooth;
  }

  input[type=text],
  select {
    font-family: poppins;
    width: 80%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 25px;
    box-sizing: border-box;
  }

  input[type=password],
  select {
    font-family: poppins;
    width: 80%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 25px;
    box-sizing: border-box;
  }

  .masuk {
    font-family: poppins;
    width: 80%;
    background-color: #5A5954;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    border-radius: 25px;
    cursor: pointer;
    transition: 0.5s;
  }

  div login {
    border-radius: 5px;
    background-color: #f2f2f2;
    padding: 20px;
  }

  .masuk:hover {
    background-color: #252522;
  }
</style>

<div class="login" style="background-color: #DCD9CD; border: 25px solid #DCD9CD; border-radius: 25px; padding: 20px;">
  <form action="proseslogin.php" method="post">
    <label style="font-family: poppins;" for="fname">KAD PENGENALAN:<br></label>
    <input type="text" id="fname" name="idpengguna" placeholder="No. Kad Pengenalan anda" maxlength='12' size="25" onkeypress='return event.charCode >= 8 && event.charCode <= 57' required autofocus />
    <br>
    <label style="font-family: poppins;" for="lname">KATALALUAN:<br></label>
    <input type="password" id="lname" name="password" placeholder="Letakkan password anda" maxlength='4' onkeypress='return event.charCode >= 8 &&
    event.charCode <= 57' required>
    <button class="masuk" type="submit">Log Masuk</button><br>
    <font style="font-family: poppins;">*Jika belum mendaftar,
      <a href="daftar_baru.php">Daftar di sini</a>
    </font>
  </form>
</div>
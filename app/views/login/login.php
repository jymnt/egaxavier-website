
	<style>

.form-signin {
  width: 100%;
  max-width: 30%;
  padding: 15px;
  margin: auto;
  /* background-color:#9B0000; */

}

.form-signin .checkbox {
  font-weight: 400;
}

.form-signin .form-floating:focus-within {
  z-index: 2;
}

.form-signin input[type="email"] {
  margin-bottom: -1px;
  border-bottom-right-radius: 0;
  border-bottom-left-radius: 0;
}

.form-signin input[type="password"] {
  margin-bottom: 10px;
  border-top-left-radius: 0;
  border-top-right-radius: 0;
}
</style>
<main class="form-signin">
        <div class="card">
            <div style="background-color:black;">
                <center>
                    <font size="5" color="WHITE"><b>HALAMAN</b></font><br>
                    <center>
                        <center>
                            <font size="10" color="white"><b>ADMIN</b></font><br>
                            <center>
            </div>
            <div class="card-body">
                <form method="post" action="<?= BASEURL; ?>/login/tambah">
                    <h1 class="h3 mb-3 fw-normal" style="color:white">Login</h1>
                    <?php if (isset($data['pesan'])) : ?>
                        <div class='alert alert-danger'><?= $data['pesan']  ?></div>
                    <?php endif;  ?>
                    <div class="form-floating mt-2">
                        <input name="username" type="text" class="form-control" id="floatingInput" placeholder="akun">
                      <label for="floatingInput">Nama Pengguna</label>
                    </div>
                    <div class="form-floating mt-2">
                        <input name="password" type="password" class="form-control" id="floatingPassword" placeholder="Password">
                        <label for="floatingPassword">Password</label>
                    </div>
                    <button class="w-100 btn btn-outline-danger" type="submit">Log in</button>
                    <p class="mt-5 mb-3 text-muted">&copy; LALA <?= date('Y') ?></p>
                </form>
            </div>
        </div>
    </main>
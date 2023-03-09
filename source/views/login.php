<?php
ob_start();
?>

<div class="hero min-h-screen bg-base-200">
  <div class="hero-content flex-col lg:flex-row-reverse">
    <div class="card flex-shrink-0 w-full max-w-sm shadow-2xl bg-base-100">
      <div class="card-body">
        <h1 class="text-3xl text-center font-bold">Bienvenue</h1>
        <?php if (isset($_SESSION['error'])) : ?>
          <div class="alert alert-error shadow-lg">
            <div>
              <svg xmlns="http://www.w3.org/2000/svg" class="stroke-current flex-shrink-0 h-6 w-6" fill="none" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 14l2-2m0 0l2-2m-2 2l-2-2m2 2l2 2m7-2a9 9 0 11-18 0 9 9 0 0118 0z" />
              </svg>
              <span><?= $_SESSION['error'] ?></span>
            </div>
          </div>
          <?php unset($_SESSION['error']); ?>
        <?php endif; ?>
        <form action="/authenticate" method="post">
          <div class="form-control">
            <label class="label">
              <span class="label-text">E-mail</span>
            </label>
            <input required id="email" name="email" type="email" class="input input-bordered" />
          </div>
          <div class="form-control">
            <label class="label">
              <span class="label-text">Mot de passe</span>
            </label>
            <input required id="password" name="password" type="password" class="input input-bordered" />
          </div>
          <div class="form-control mt-6">
            <button type="submit" class="btn btn-primary">Login</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>

<?php
$content = ob_get_clean();
require "gabarit.php";
?>
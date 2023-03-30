<?php
ob_start();
?>

<div class="hero min-h-screen bg-base-200">
    <div class="hero-content flex-col lg:flex-row-reverse">
        <div class="card flex-shrink-0 w-full max-w-sm shadow-2xl bg-base-100">
            <div class="card-body">
                <h1 class="text-3xl text-center font-bold">Ajouter une activité</h1>
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
                <?php if (isset($_SESSION['success'])) : ?>
                    <div class="alert alert-success shadow-lg">
                        <div>
                            <svg xmlns="http://www.w3.org/2000/svg" class="stroke-current flex-shrink-0 h-6 w-6" fill="none" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                            <span><?= $_SESSION['success'] ?></span>
                        </div>
                    </div>
                    <?php unset($_SESSION['success']); ?>
                <?php endif; ?>
                <form action="/createNewActivitie" method="post">
                    <div class="form-control">
                        <label class="label">
                            <span class="label-text">Addresse de l'activité</span>
                        </label>
                        <input required id="address" name="address" type="text" class="input input-bordered" />
                        <label class="label">
                            <span class="label-text">Nom de l'activité</span>
                        </label>
                        <input required id="name" name="name" type="text" class="input input-bordered" />
                        <label class="label">
                            <span class="label-text">Date</span>
                        </label>
                        <input required id="date" name="date" type="date" class="input input-bordered" />
                        <div class="form-control mt-6">
                            <button type="submit" class="btn btn-primary">Ajouter l'activité</button>
                        </div>
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
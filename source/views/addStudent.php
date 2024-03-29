<?php
ob_start();
?>

<div class="hero min-h-screen bg-base-200">
    <div class="hero-content flex-col lg:flex-row-reverse">
        <div class="card flex-shrink-0 w-full max-w-sm shadow-2xl bg-base-100">
            <div class="card-body">
                <h1 class="text-3xl text-center font-bold">Importer des élèves</h1>
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
                <form class="form-control py-3" action="/importNewStudents" method="post" enctype="multipart/form-data">
                    <input id="file" name="file" accept=".csv" type="file" class="file-input file-input-bordered w-full max-w-xs" />
                    <label class="label">
                        <span class="label-text-alt">Fichiers CSV</span>
                    </label>
                    <div class="form-control mt-6">
                        <button type="submit" class="btn btn-primary">Importer</button>
                    </div>
                </form>
                <div class="alert shadow-lg mt-6">
                        <div>
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" class="stroke-info flex-shrink-0 w-6 h-6">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                            </svg>
                            <div>
                                <h3 class="font-bold">Comment faire le CSV ?</h3>
                                <div class="text-xs">Téléchargez le template !</div>
                            </div>
                        </div>
                        <div class="flex-none">
                        <a href="views/content/template.csv"><button class="btn btn-sm">Télécharger</button></a>
                        </div>
                    </div>
            </div>
        </div>
    </div>
</div>

<?php
$content = ob_get_clean();
require "gabarit.php";
?>
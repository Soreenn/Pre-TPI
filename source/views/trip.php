<?php
ob_start();
?>

<div class="hero min-h-screen bg-base-200">
    <div class="hero-content flex-col lg:flex-row-reverse">
        <div class="card flex-shrink-0 w-full max-w-sm shadow-2xl bg-base-100">
            <div class="card-body">
                <h1 class="text-3xl text-center font-bold">Plannifier un voyage</h1>
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
                <form action="/createNewTrip" method="post">
                    <div class="form-control">
                        <label class="label">
                            <span class="label-text">Destination</span>
                        </label>
                        <input required id="destination" name="destination" type="text" class="input input-bordered" />
                        <label class="label">
                            <span class="label-text">Date de début</span>
                        </label>
                        <input required id="startDate" name="startDate" type="date" class="input input-bordered" />
                        <label class="label">
                            <span class="label-text">Date de fin</span>
                        </label>
                        <input required id="endDate" name="endDate" type="date" class="input input-bordered" />
                        <label class="label">
                            <span class="label-text">Description</span>
                        </label>
                        <textarea required id="description" name="description" class="textarea textarea-bordered h-24" placeholder="75 caractères max."></textarea>
                        <div class="form-control mt-6">
                            <button type="submit" class="btn btn-primary">Plannifier le voyage</button>
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
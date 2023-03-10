<?php
ob_start();
?>

<div class="hero min-h-screen bg-base-200">
    <div class="hero-content flex-col lg:flex-row-reverse">
        <div class="card flex-shrink-0 w-full max-w-sm shadow-2xl bg-base-100">
            <div class="card-body">
                <h1 class="text-3xl text-center font-bold">Plannifier un voyage</h1>
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
<?php
ob_start();
?>

<head>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.1/moment.min.js"></script>
    <script type="module" src="/views/content/js/countdown.js"></script>

</head>

<div class="hero min-h-screen">
    <div class="hero-content text-center">
        <div class="max-w-md">
            <h1 class="text-5xl font-bold">Prochain voyage</h1>
            <h1 class="text-5xl font-bold">dans...</h1>
            <div class="grid grid-flow-col gap-5 py-6">
                <div class="flex flex-col">
                    <span class="countdown font-mono text-5xl">
                        <span id="months" style="--value:<?= $months ?>;"></span>
                    </span>
                    months
                </div>
                <div class="flex flex-col">
                    <span class="countdown font-mono text-5xl">
                        <span id="days" style="--value:<?= $days ?>;"></span>
                    </span>
                    days
                </div>
                <div class="flex flex-col">
                    <span class="countdown font-mono text-5xl">
                        <span id="hours" style="--value:<?= $hours ?>;"></span>
                    </span>
                    hours
                </div>
                <div class="flex flex-col">
                    <span class="countdown font-mono text-5xl">
                        <span id="minutes" style="--value:<?= $minutes ?>;"></span>
                    </span>
                    min
                </div>
                <div class="flex flex-col">
                    <span class="countdown font-mono text-5xl">
                        <span id="seconds" style="--value:<?= $seconds ?>;"></span>
                    </span>
                    sec
                </div>
            </div>
            <div class="indicator">
                <?php if (count($raw) >= 1) : ?>
                    <div class="indicator-item indicator-bottom">
                        <a href="/activitiesList"><button class="btn btn-primary">Voir les activités</button></a>
                    </div>
                    <div class="indicator-item indicator-bottom indicator-start">
                        <a href="/studentList"><button class="btn btn-primary">Voir les élèves</button></a>
                    </div>
                <?php endif; ?>

                <div class="card border content-center text-center">
                    <div class="card-body">
                        <?php if (count($raw) >= 1) : ?>
                            <h2 class="card-title">Destination :</h2>
                            <p><?= $raw[0]['destination'] ?></p>
                            <h2 class="card-title">Date de départ :</h2>
                            <p id="startDate"></p>
                            <h2 class="card-title">Description</h2>
                            <p><?= $raw[0]['description'] ?></p>
                        <?php else : ?>
                            <tr>
                                <h2 class="card-title">Pas de voyage planifié pour le moment !</h2>
                            </tr>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    var unsplittedDate = "<?= $startDate ?>";
    const splittedDate = unsplittedDate.split("-");
</script>

<?php
$content = ob_get_clean();
require "gabarit.php";
?>
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
            <button class="btn btn-primary">Get Started</button>
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
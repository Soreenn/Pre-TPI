<?php
ob_start();
?>

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
/*     var seconds = <?= $seconds ?>;
    var minutes = <?= $minutes ?>;
    var hours = <?= $hours ?>;
    var months = <?= $months ?>; */
    var unsplittedDate = "<?= $startDate?>";
    const splittedDate = unsplittedDate.split("-");
    var date = new Date(splittedDate[0], splittedDate[1] -1, splittedDate[2], "08", "00", "00");
    console.log(date);
    setInterval(() => {
        date
        document.getElementById('seconds').style.setProperty('--value', date.getMinutes());
        document.getElementById('minutes').style.setProperty('--value', minutes);
        document.getElementById('hours').style.setProperty('--value', hours);
        document.getElementById('months').style.setProperty('--value', months);
    }, 1000)
</script>

<?php
$content = ob_get_clean();
require "gabarit.php";
?>
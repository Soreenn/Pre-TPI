<?php
ob_start();
?>

<div class="hero min-h-screen bg-base-200">
    <div class="hero-content flex-col lg:flex-row-reverse">
        <div class="card flex-shrink-0 w-full max-w-sm shadow-2xl bg-base-100">
            <div class="card-body">
                <div class="overflow-x-auto">
                    <table class="table table-normal w-full">
                        <!-- head -->
                        <thead>
                            <tr>
                                <th>Nom</th>
                                <th>Prénom</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php if (count($raw) >= 1) : ?>
                                <?php foreach ($raw as $student) : ?>
                                    <tr>
                                        <td><?= $student['lastname'] ?></td>
                                        <td><?= $student['firstname'] ?></td>
                                    </tr>
                                <?php endforeach; ?>
                            <?php else : ?>
                                <tr>
                                    <td>Pas d'élèves !</td>
                                </tr>
                            <?php endif; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

<?php
$content = ob_get_clean();
require "gabarit.php";
?>
<div class="missing-fields">
    <p>Please complete these missing fields marked with an asterisk:</p>
    <ul>
        <?php foreach ($missingFields as $field => $description) : ?>
            <li><?= $description ?></li>
        <?php endforeach; ?>
    </ul>
</div>
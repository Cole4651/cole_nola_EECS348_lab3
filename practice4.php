<?php
$number = filter_input(INPUT_GET, 'number', FILTER_VALIDATE_INT);
if ($number === false || $number === null || $number < 1 || $number > 50) {
    $number = 10;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Multiplication Table | EECS 348</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main class="shell">
        <a class="back" href="index.html">&larr; Back to lab index</a>
        <section class="content panel">
            <span class="tag">Practice 4 / PHP</span>
            <h1>Multiplication table</h1>
            <form method="get">
                <label for="number">Table size (1-50)</label>
                <input id="number" name="number" type="number" min="1" max="50" value="<?= htmlspecialchars((string) $number, ENT_QUOTES, 'UTF-8') ?>" required>
                <button type="submit">Generate table</button>
            </form>
            <div class="table-wrap">
                <table>
                    <caption>Multiplication table from 1 to <?= $number ?></caption>
                    <thead>
                        <tr><th scope="col">x</th><?php for ($column = 1; $column <= $number; $column++): ?><th scope="col"><?= $column ?></th><?php endfor; ?></tr>
                    </thead>
                    <tbody>
                        <?php for ($row = 1; $row <= $number; $row++): ?>
                            <tr><th scope="row"><?= $row ?></th><?php for ($column = 1; $column <= $number; $column++): ?><td><?= $row * $column ?></td><?php endfor; ?></tr>
                        <?php endfor; ?>
                    </tbody>
                </table>
            </div>
        </section>
    </main>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cetak Bilangan</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            display: flex;
            flex-direction: column;
            align-items: center;
            background-color: #f4f4f4;
        }
        .container {
            margin-top: 20px;
            text-align: center;
            width: 50%;
        }
        .output {
            padding: 10px;
            margin-top: 20px;
            font-size: 18px;
            background-color: #e0f7fa;
            border-radius: 10px;
            color: #00695c;
            display: flex;
            flex-direction: column;
            align-items: center;
        }
        .output div {
            margin: 5px 0;
        }
        input[type="number"] {
            padding: 5px;
            width: 50%;
            border-radius: 5px;
            border: 1px solid #ddd;
        }
        button {
            padding: 8px 16px;
            background-color: #00796b;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            margin-top: 10px;
        }
        button:hover {
            background-color: #004d40;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Cetak Bilangan</h1>
        <form method="post">
            <label for="number">Masukkan angka:</label>
            <br>
            <input type="number" id="number" name="number" min="1" required>
            <br>
            <button type="submit">Cetak</button>
        </form>

        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $n = (int) $_POST["number"];
            echo '<div class="output">';
            cetakBilangan($n);
            echo '</div>';
        }

        function cetakBilangan($n) {
            for ($i = 1; $i <= $n; $i++) {
                if ($i % 4 == 0 && $i % 6 == 0) {
                    echo "<div>Pemrograman Website 2024</div>";
                }
                elseif ($i % 5 == 0) {
                    echo "<div>2024</div>";
                }
                elseif ($i % 4 == 0) {
                    echo "<div>Pemrograman</div>";
                }
                elseif ($i % 6 == 0) {
                    echo "<div>Website</div>";
                }
                else {
                    echo "<div>$i</div>";
                }
            }
        }
        ?>
    </div>
</body>
</html>

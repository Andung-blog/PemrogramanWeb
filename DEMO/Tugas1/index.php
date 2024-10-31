<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Car Rental Fleet</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            flex-direction: column;
        }
        .container {
            max-width: 800px;
            width: 100%;
            background-color: #fff;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            border-radius: 10px;
            padding: 20px;
            margin-top: 30px;
        }
        h1 {
            text-align: center;
            color: #333;
            margin-bottom: 20px;
        }
        form {
            display: flex;
            flex-direction: column;
            margin-bottom: 20px;
        }
        label {
            margin-top: 10px;
            font-weight: bold;
        }
        input, select, button {
            padding: 10px;
            margin-top: 5px;
            border: 1px solid #ddd;
            border-radius: 5px;
            width: 100%;
            max-width: 400px;
        }
        button {
            background-color: #4CAF50;
            color: white;
            border: none;
            cursor: pointer;
            font-weight: bold;
        }
        button:hover {
            background-color: #45a049;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }
        table, th, td {
            border: 1px solid #ddd;
        }
        th, td {
            padding: 12px;
            text-align: left;
        }
        th {
            background-color: #4CAF50;
            color: white;
        }
        tr:nth-child(even) {
            background-color: #f9f9f9;
        }
        tr:hover {
            background-color: #f1f1f1;
        }
        .footer {
            text-align: center;
            margin-top: 20px;
            font-size: 12px;
            color: #888;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Car Rental Fleet</h1>

        <form method="post">
            <label for="type">Select Car Type:</label>
            <select name="type" id="type" required>
                <option value="Sedan">Sedan</option>
                <option value="SUV">SUV</option>
            </select>
            
            <label for="merk">merk:</label>
            <input type="text" id="merk" name="merk" placeholder="Enter car merk" required>
            
            <label for="model">Model:</label>
            <input type="text" id="model" name="model" placeholder="Enter car model" required>
            
            <label for="details">Details (Passenger Capacity for Sedan / Offroad Capability for SUV):</label>
            <input type="text" id="details" name="details" placeholder="Enter details" required>
            
            <button type="submit">Add Car to Fleet</button>
        </form>

        <?php
        require_once 'Car.php';
        require_once 'CarRental.php';
        require_once 'Sedan.php';
        require_once 'SUV.php';

        use CarRentalSystem\CarRental;
        use CarRentalSystem\Sedan;
        use CarRentalSystem\SUV;

        $carRental = new CarRental();

        // Check if form is submitted and add car to the fleet
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $type = $_POST["type"];
            $merk = $_POST["merk"];
            $model = $_POST["model"];
            $details = $_POST["details"];

            if ($type === "Sedan") {
                $carRental->addCar(new Sedan($merk, $model, $details));
            } elseif ($type === "SUV") {
                $carRental->addCar(new SUV($merk, $model, $details));
            }
        }

        // Display car fleet
        echo '<table>';
        echo '<tr><th>Type</th><th>merk</th><th>Model</th><th>Details</th></tr>';
        
        foreach ($carRental->listCars() as $carInfo) {
            echo "<tr>
                    <td>{$carInfo['type']}</td>
                    <td>{$carInfo['merk']}</td>
                    <td>{$carInfo['model']}</td>
                    <td>{$carInfo['details']}</td>
                  </tr>";
        }

        echo '</table>';
        ?>

        <div class="footer">© 2024 Car Rental System</div>
    </div>
</body>
</html>

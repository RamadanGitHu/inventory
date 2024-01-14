<?php
require_once('includes/load.php');

// Retrieve delivery information from the database
$delivery_info = find_all('deliveries');
?>
<!DOCTYPE html>
<html>
<head>
    <title>Delivery Information</title>
    <?php include_once('layouts/header.php'); ?>
    <style>
        body {
            font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif;
            font-weight: 400;
            overflow-x: hidden;
            overflow-y: auto;
            background: #f1f2f7;
            height: 100%;
            width: 100%;
            margin: 0;
            padding: 0;
        }
        h1 {
            text-align: center;
            margin-top: 50px;
            color: #3498DB;
            text-transform: uppercase;
        }
        table {
            width: 80%;
            margin: 20px auto;
            border-collapse: collapse;
        }
        th, td {
            padding: 10px;
            text-align: center;
            border: 1px solid #ccc;
        }
        th {
            background-color: #f2f2f2;
        }
         .delivered {
        color: green;
    }
    </style>
</head>
<body>
<script>
        function updateCountdown(elementId, targetTime) {
            const now = new Date();
            const target = new Date(targetTime);
            const timeDifference = target - now;

            if (timeDifference <= 0) {
                
                document.getElementById(elementId).textContent = 'Delivered';
                
            } else {
                const hours = Math.floor(timeDifference / (1000 * 60 * 60));
                const minutes = Math.floor((timeDifference % (1000 * 60 * 60)) / (1000 * 60));
                const seconds = Math.floor((timeDifference % (1000 * 60)) / 1000);

                const countdown = `${hours}:${minutes}:${seconds}`;
                document.getElementById(elementId).textContent = countdown;
            }
        }

        // Update countdown every second
        function updateAllCountdowns() {
            <?php foreach ($delivery_info as $index => $delivery) : ?>
                updateCountdown('countdown-<?php echo $index; ?>', '<?php echo $delivery['estimated_delivery_time']; ?>');
            <?php endforeach; ?>
            setTimeout(updateAllCountdowns, 1000); // Update every second
        }

        window.onload = function() {
            updateAllCountdowns();
        };
    </script>
</head>
<body>
    <h1>Delivery Information</h1>
    <table>
        <tr>
            <th>Truck Number</th>
            <th>Delivery Time</th>
            <th>Estimated Time</th>
            <th>Time Remaining</th>
        </tr>
        <?php foreach ($delivery_info as $index => $delivery) : ?>
            <tr>
                <td><?php echo $delivery['truck_number']; ?></td>
                <td><?php echo $delivery['delivery_time']; ?></td>
                <td><?php echo $delivery['estimated_delivery_time']; ?></td>
                <td id="countdown-<?php echo $index; ?>"></td>
            </tr>
        <?php endforeach; ?>
    </table>
    <?php include_once('layouts/footer.php'); ?>
</body>
</html>
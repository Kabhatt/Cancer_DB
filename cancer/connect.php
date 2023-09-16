<?php
if ($_SERVER['REQUEST_METHOD'] == "POST" && isset($_POST['submit'])) {
    $conn = mysqli_connect("localhost", 'root', '', 'cancer') or die("Connection Failed: " . mysqli_connect_error());

    if (isset($_POST['Pt_ID'])) {
        $Pt_ID = $_POST["Pt_ID"];

        $sql = "SELECT * FROM `patients` WHERE `Pt_ID`='$Pt_ID'";
        $result = mysqli_query($conn, $sql);

        if ($result && mysqli_num_rows($result) > 0) {
            echo "<!DOCTYPE html>";
            echo "<html lang='en'>";
            echo "<head>";
            echo "<meta charset='UTF-8'>";
            echo "<meta name='viewport' content='width=device-width, initial-scale=1.0'>";
            echo "<title>Patient Data</title>";
            echo "<style>";
            echo "/* Add your CSS styles here */";
            echo "body { font-family: Arial, sans-serif; background-color: #E8F8F5; }";
            echo "h2 { color: #333; }";
            echo "table { border-collapse: collapse; width: 100%; }";
            echo "table, th, td { border: 1px solid #333; }";
            echo "th, td { padding: 8px; text-align: left; }";
            echo "th { background-color: #333; color: #fff; }";
            echo "</style>";
            echo "</head>";
            echo "<body>";

            echo "<h2>Patient Data for Patient ID: $Pt_ID</h2>";
            echo "<table>";
            echo "<tr><th>Field</th><th>Value</th></tr>";

            while ($row = mysqli_fetch_assoc($result)) {
                foreach ($row as $field => $value) {
                    echo "<tr>";
                    echo "<td>$field</td>";
                    echo "<td>$value</td>";
                    echo "</tr>";
                }
            }

            echo "</table>";
            echo "</body>";
            echo "</html>";
        } else {
            echo "No data found in the database for Patient ID: $Pt_ID";
        }
    } else {
        echo "Patient ID not provided.";
    }

    mysqli_close($conn);
}
?>

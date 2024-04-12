<?php
require_once 'articulo.php';
require_once 'sql.php';

$articulo = new articulo();
$data = $articulo->exportCSV();
// echo $data;

// // File path to save the CSV file
// $filepath = "/path/to/save/file.csv";

// // Open the file in write mode
// $file = fopen($filepath, 'w');

// // Write the column headers to the CSV file
// $headers = array("ID", "Nombre", "Precio"); // Replace with your actual column names
// fputcsv($file, $headers);

// // Write data rows to the CSV file
// if ($result->num_rows > 0) {
//   while ($row = $result->fetch_assoc()) {
//     $data = array($row["column1"], $row["column2"], $row["column3"]); // Replace with your actual column names
//     fputcsv($file, $data);
//   }
// }

// // Close the file
// fclose($file);

// // Close the database connection
// $conn->close();

function download_csv($csv_data) {
    // Your CSV data as a string
    // $csv_data = "name,age,city\nAlice,30,New York\nBob,25,Los Angeles";
    
    // Set the appropriate headers for CSV download
    header('Content-Type: text/csv');
    header('Content-Disposition: attachment; filename="data.csv"');
    
    // Output the CSV data
    echo $csv_data;
    // Redirect to another page after a short delay (adjust as needed)
}
download_csv($data);
<?php
require '../vendor/autoload.php'; // Include Firestore SDK

use Google\Cloud\Firestore\FirestoreClient;
use Google\Auth\Credentials\ServiceAccountCredentials;

// Path to your service account key JSON file
$serviceAccountKeyFilePath = '3mkey.json';

// Initialize Firestore with service account credentials
$firestore = new FirestoreClient([
    'keyFilePath' => $serviceAccountKeyFilePath,
]);

// Reference to your Firestore collection
$collectionReference = $firestore->collection('users');

// Query documents from Firestore
$query = $collectionReference->documents();

// Array to store retrieved data
$data = [];

foreach ($query as $document) {
    // Extract document data
    $docData = $document->data();

    // Store data in the array
    $data[] = $docData;
}

// HTML rendering
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Firestore Data</title>
    <style>
        table {
            border-collapse: collapse;
            width: 100%;
        }

        th,
        td {
            border: 1px solid #dddddd;
            text-align: left;
            padding: 8px;
        }

        th {
            background-color: #f2f2f2;
        }
    </style>
</head>

<body>
    <h1>Firestore Data</h1>
    <table>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <!-- Add more headers as needed based on your data structure -->
        </tr>
        <?php foreach ($data as $item) : ?>
            <tr>
                <td><?= $item['employee_id'] ?></td>
                <td><?= $item['full name'] ?></td>
                <!-- Add more cells as needed based on your data structure -->
            </tr>
        <?php endforeach; ?>
    </table>
</body>

</html>
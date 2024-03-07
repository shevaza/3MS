<?php
require '../vendor/autoload.php'; // Include Firestore SDK
use Google\Cloud\Firestore\FirestoreClient;
use Google\Auth\Credentials\ServiceAccountCredentials;

$serviceAccountKeyFilePath = '../firebase/3mkey.json';
$firestore = new FirestoreClient([
    'keyFilePath' => $serviceAccountKeyFilePath,
]);
if (isset($_POST['id'])) {
    // Reference to your Firestore collection
    $collectionReference = $firestore->collection('users')->where('employee_id', '=', $_POST['id']);

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
    $div1 = '';
    $div2 = '';
    foreach ($data as $user) {
        $div1 .= '<img src="' . $user['profile_picture_url'] . '" width="100" height="100" style="border-radius:50%">';
        $div1 .= '<h3 class="card-title">' . $user['full name'] . '</h3>';
        $div1 .= '<div class="row"><div class="col">' . $user['email'] . '</div></div>';
        $div1 .= '<div class="row"><div class="col">' . $user['department'] . '</div></div>';



        $div2 .= '<table class="w-100" id="table">
                                <thead>
                                    <tr>
                                        <th>Date</th>
                                        <th>Check In</th>
                                        <th>Check Out</th>
                                        <th>Working Hrs</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    ';
        foreach ($data as $day) {
            $totalhrs = 0;
            $datetimeFormat = 'h:i:s A';
            $dateFormat = 'Y-m-d';
            for ($i = 0; $i < count($day['CHECK_IN']); $i++) {
                $hrs = 0;

                if (isset($day['CHECK_IN'][$i])) {
                    $in = $day['CHECK_IN'][$i];
                    $in = new \DateTime($in);
                    $in->add(new \DateInterval('PT2H'));
                    $thisday = $in;
                    $ins = $in->format($datetimeFormat);
                } else {
                    $ins = 'NA';
                }
                if (isset($day['CHECK_OUT'][$i])) {
                    $out = $day['CHECK_OUT'][$i];
                    $out = new \DateTime($out);
                    $out->add(new \DateInterval('PT2H'));
                    $outs = $out->format($datetimeFormat);
                } else {
                    $outs = 'NA';
                }
                $div2 .= '<tr>';
                $div2 .= '<td>' . $thisday->format($dateFormat) . '</td>';
                $div2 .= '<td>' . $ins . '</td>';
                $div2 .= '<td>' . $outs . '</td>';
                $div2 .= '<td>' . ($in->diff($out))->h . ':' . ($in->diff($out))->i . '</td>';
                $div2 .= '</tr>';
                $hrs += (($in->diff($out))->h) * 60;
                $hrs += (($in->diff($out))->m);
                $totalhrs += $hrs / 60;
            }
        }
        $div2 .= '
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <th colspan="3">
                                            Total
                                        </th>
                                        <th>
                                            ' . $totalhrs . ' hour
                                        </th>
                                    </tr>
                                </tfoot>
                            </table>';
    }
    $data = [$div1, $div2];
} else {
    $data = [];
}


print_r(json_encode($data));
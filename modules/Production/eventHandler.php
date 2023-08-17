<?php 
   
// Include database configuration file  
require_once '../../config.php'; 
 
// Retrieve JSON from POST body 
$jsonStr = file_get_contents('php://input'); 
$jsonObj = json_decode($jsonStr); 
 
if($jsonObj->request_type == 'addEvent'){ 
    $start = $jsonObj->start; 
    $end = $jsonObj->end; 
 
    $event_data = $jsonObj->event_data; 
    $eventTitle = !empty($event_data[0])?$event_data[0]:''; 
    $eventDesc = !empty($event_data[1])?$event_data[1]:''; 
    $eventURL = !empty($event_data[2])?$event_data[2]:''; 
     
    if(!empty($eventTitle)){ 
        // Insert event data into the database 
        $sqlQ = "INSERT INTO events (title,description,url,start,end) VALUES (?,?,?,?,?)"; 
        $stmt = $db->prepare($sqlQ); 
        $stmt->bind_param("sssss", $eventTitle, $eventDesc, $eventURL, $start, $end); 
        $insert = $stmt->execute(); 
 
        if($insert){ 
            $output = [ 
                'status' => 1 
            ]; 
            echo json_encode($output); 
        }else{ 
            echo json_encode(['error' => 'Event Add request failed!']); 
        } 
    } 
}elseif($jsonObj->request_type == 'editEvent'){ 
    $start = $jsonObj->start; 
    $end = $jsonObj->end; 
    $event_id = $jsonObj->event_id; 
 
    $event_data = $jsonObj->event_data; 
    $eventTitle = !empty($event_data[0])?$event_data[0]:''; 
    $eventDesc = !empty($event_data[1])?$event_data[1]:''; 
    $eventURL = !empty($event_data[2])?$event_data[2]:''; 
     
    if(!empty($eventTitle)){ 
        // Update event data into the database 
        $sqlQ = "UPDATE events SET title=?,description=?,url=?,start=?,end=? WHERE id=?"; 
        $stmt = $db->prepare($sqlQ); 
        $stmt->bind_param("sssssi", $eventTitle, $eventDesc, $eventURL, $start, $end, $event_id); 
        $update = $stmt->execute(); 
 
        if($update){ 
            $output = [ 
                'status' => 1 
            ]; 
            echo json_encode($output); 
        }else{ 
            echo json_encode(['error' => 'Event Update request failed!']); 
        } 
    } 
}elseif($jsonObj->request_type == 'deleteEvent'){ 
    $id = $jsonObj->event_id; 
 
    $sql = "DELETE FROM `mold_change` WHERE `id`=$id"; 
    $delete = mysqli_query($mysqli,$sql); 
    if($delete){ 
        $output = [ 
            'status' => 1 
        ]; 
        echo json_encode($output); 
    }else{ 
        echo json_encode(['error' => 'Event Delete request failed!']); 
    } 
}

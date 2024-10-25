<?php
/* Include Logs Class File */
include '../class/class.logs.php';

$action = $_GET['action'] ?? null; 

$log = new Log();

switch ($action) {
    case 'add':
        $log_action = "Added Schedule"; 
        $log_description = "Added a new schedule for nurse ID $nurse_id"; 
        $nurse_id = $_POST['nurse_id'] ?? null; 

        if ($log->add_log($log_action, $log_description, $nurse_id)) {
            // Handle success
            echo "Log added successfully.";
        } else {
            // Handle failure
            echo "Failed to add log.";
        }
        break;

    case 'update':
        // Implement update logic and logging
        break;

    case 'delete':
        // Implement delete logic and logging
        break;

    default:
        echo "Invalid action.";
        break;
}
?>

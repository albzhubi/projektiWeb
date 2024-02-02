<?php
include("db.php");

header('Content-Type: application/json');

if ($_SERVER["REQUEST_METHOD"] == "DELETE" && isset($_GET['id'])) {
    $itemId = $_GET['id'];
  
    $deleteQuery = "DELETE FROM products WHERE id = $itemId";

    if ($con->query($deleteQuery) === TRUE) {
        
        http_response_code(204);
        echo json_encode(['message' => 'Item deleted successfully']);
    } else {
        
        http_response_code(500);
        echo json_encode(['error' => 'Error deleting item']);
    }

    $con->close();
    exit();
} else {
    
    http_response_code(400);
    echo json_encode(['error' => 'Bad request']);
}
?>

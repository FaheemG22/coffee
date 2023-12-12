<?php
header("Content-Type: application/json");


// Simulate a database or data storage
$data = [
    1 => ['id' => 1, 'name' => 'Item 1'],
    2 => ['id' => 2, 'name' => 'Item 2'],
    3 => ['id' => 3, 'name' => 'Item 3'],
];


// Handle GET request
if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    if (isset($_GET['id'])) {
        $id = $_GET['id'];
        if (isset($data[$id])) {
            echo json_encode($data[$id]);
        } else {
            echo json_encode(['error' => 'Item not found']);
        }
    } else {
        echo json_encode($data);
    }
}


// Handle POST request
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $input = json_decode(file_get_contents('php://input'), true);
    
    // Validate input
    if (isset($input['name'])) {
        $newId = max(array_keys($data)) + 1;
        $data[$newId] = ['id' => $newId, 'name' => $input['name']];
        echo json_encode(['message' => 'Item added successfully', 'id' => $newId]);
    } else {
        echo json_encode(['error' => 'Invalid input']);
    }
}


// Handle DELETE request
if ($_SERVER['REQUEST_METHOD'] === 'DELETE') {
    parse_str(file_get_contents('php://input'), $deleteParams);
    $id = $deleteParams['id'] ?? null;
    
    if ($id && isset($data[$id])) {
        unset($data[$id]);
        echo json_encode(['message' => 'Item deleted successfully']);
    } else {
        echo json_encode(['error' => 'Item not found']);
    }
}
?>
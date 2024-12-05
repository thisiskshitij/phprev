<?php
$items = ["Apple", "Banana", "Orange"];

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $newItem = $_POST["newItem"] ?? '';
    if (!empty($newItem)) {
        $items[] = $newItem;
    }
}

?>

<h2>Search Items</h2>
<form method="get">
    Search: <input type="text" name="search">
    <button type="submit">Search</button>
</form>

<?php
if (!empty($_GET["search"])) {
    $search = $_GET["search"];
    foreach ($items as $item) {
        if (stripos($item, $search) !== false) {
            echo "Found: " . $item . "<br>";
        }
    }
}
?>

<h2>Add New Item</h2>
<form method="post">
    Item: <input type="text" name="newItem">
    <button type="submit">Add</button>
</form>

<h2>All Items</h2>
<ul>
    <?php foreach ($items as $item) { echo "<li>" . htmlspecialchars($item) . "</li>"; } ?>
</ul>

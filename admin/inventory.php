<?php include '../includes/header.php'; ?>
<?php include '../includes/db.php'; ?>
<div class="container">
    <h1>Manage Inventory</h1>
    <form method="post" action="add_item.php">
        <input type="text" name="name" placeholder="Item Name" required />
        <input type="text" name="description" placeholder="Description" required />
        <input type="number" name="price" placeholder="Price" required />
        <input type="file" name="image" required />
        <button type="submit" class="btn btn-primary">Add Item</button>
    </form>
    <hr />
    <h2>Current Inventory</h2>
    <ul>
        <?php
        $stmt = $pdo->query("SELECT * FROM menu_items");
        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
            echo "<li>{$row['name']} - \${$row['price']}</li>";
        }
        ?>
    </ul>
</div>
<?php include '../includes/footer.php'; ?>

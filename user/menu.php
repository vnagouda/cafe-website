<?php include '../includes/header.php'; ?>
<?php include '../includes/db.php'; ?>
<div class="container mx-auto py-8">
    <h1 class="text-3xl font-bold mb-6">Our Menu</h1>
    <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
        <?php
        $stmt = $pdo->query("SELECT * FROM menu_items");
        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
            echo "
            <div class='p-4 bg-white shadow rounded'>
                <img src='../assets/images/{$row['image']}' alt='{$row['name']}' class='w-full h-48 object-cover mb-4'>
                <h3 class='text-xl font-bold'>{$row['name']}</h3>
                <p class='text-gray-600'>{$row['description']}</p>
                <p class='text-blue-500 font-bold'>\${$row['price']}</p>
                <button class='mt-2 px-4 py-2 bg-green-500 text-white rounded'>Add to Cart</button>
            </div>";
        }
        ?>
    </div>
</div>
<?php include '../includes/footer.php'; ?>

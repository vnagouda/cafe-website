<?php include '../includes/header.php'; ?>
<div class="container mx-auto py-8">
    <h1 class="text-3xl font-bold mb-6">Your Cart</h1>
    <table class="table-auto w-full text-left bg-white shadow rounded">
        <thead>
            <tr>
                <th class="px-4 py-2">Item</th>
                <th class="px-4 py-2">Quantity</th>
                <th class="px-4 py-2">Price</th>
                <th class="px-4 py-2">Actions</th>
            </tr>
        </thead>
        <tbody>
            <?php
            // Example of cart logic (static items for now)
            echo "
            <tr>
                <td class='border px-4 py-2'>Cappuccino</td>
                <td class='border px-4 py-2'>2</td>
                <td class='border px-4 py-2'>\$8.00</td>
                <td class='border px-4 py-2'>
                    <button class='px-4 py-2 bg-red-500 text-white rounded'>Remove</button>
                </td>
            </tr>";
            ?>
        </tbody>
    </table>
    <div class="mt-4">
        <button class="px-6 py-3 bg-blue-500 text-white rounded">Checkout</button>
    </div>
</div>
<?php include '../includes/footer.php'; ?>

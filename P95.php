<?php 
session_start(); 
$products = [ 
    1 => "Laptop", 
    2 => "Smartphone", 
    3 => "Headphones" 
]; 
if (isset($_GET['add'])) { 
    $id = $_GET['add']; 
    $_SESSION['cart'][] = $products[$id]; 
    echo "<p style='color:green;'>Item added to cart!</p>"; 
} 
?> 
<h2>Product List</h2> 
<ul> 
<?php foreach ($products as $id => $name): ?> 
    <li> 
        <?php echo $name; ?>  
        <a href="?add=<?php echo $id; ?>">Add to Cart</a> 
    </li> 
<?php endforeach; ?> 
</ul> 
<p><a href="cart.php">View Cart</a></p> 

//CART.PHP    
<?php 
session_start(); 
?> 
<h2>Your Shopping Cart</h2> 
<?php 
if (!empty($_SESSION['cart'])) { 
    foreach ($_SESSION['cart'] as $item) { 
        echo $item . "<br>"; 
    } 
} else { 
    echo "<p>Your cart is empty.</p>"; 
} 
?> 
<p><a href="products.php">Back to Products</a></p> 
<form method="post"> 
<input type="submit" name="clear" value="Clear Cart"> 
</form> 
<?php 
if (isset($_POST['clear'])) { 
unset($_SESSION['cart']); 
header("Location: cart.php"); 
} 
?> 
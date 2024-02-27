<?php
$pageName = "Home";
require_once "header.php";
?>

<div class="container">
    <h2>Welcome to your Order</h2>
    <p>This tool allows you to order a sandwich.</p>
    <p>Simply choose your bread type and select toppings.</p>

    <form action="processOrder.php" method="post">
        <label for="breadType">Bread Type:</label>
        <select name="breadType" id="breadType">
            <option value="white">White</option>
            <option value="whole_grain">Whole Grain</option>
            <option value="flatbread">Flatbread</option>
        </select>

        <fieldset>
            <legend>Toppings:</legend>

            <!-- Meats -->
            <h3>Meats</h3>
            <input type="checkbox" id="ham" name="toppings[]" value="ham">
            <label for="ham">Ham</label><br>
            <input type="checkbox" id="turkey" name="toppings[]" value="turkey">
            <label for="turkey">Turkey</label><br>
            <input type="checkbox" id="roast_beef" name="toppings[]" value="roast_beef">
            <label for="roast_beef">Roast Beef</label><br>

            <!-- Cheese -->
            <h3>Cheese</h3>
            <input type="checkbox" id="cheddar" name="toppings[]" value="cheddar">
            <label for="cheddar">Cheddar</label><br>
            <input type="checkbox" id="swiss" name="toppings[]" value="swiss">
            <label for="swiss">Swiss</label><br>
            <input type="checkbox" id="american" name="toppings[]" value="american">
            <label for="american">Pepper Jack</label><br>

            <!-- Vegetables -->
            <h3>Vegetables</h3>
            <input type="checkbox" id="lettuce" name="toppings[]" value="lettuce">
            <label for="lettuce">Lettuce</label><br>
            <input type="checkbox" id="tomato" name="toppings[]" value="tomato">
            <label for="tomato">Tomato</label><br>
            <input type="checkbox" id="onion" name="toppings[]" value="onion">
            <label for="onion">Onion</label><br>

            <!-- Sauces -->
            <h3>Sauces</h3>
            <input type="checkbox" id="mayo" name="toppings[]" value="mayo">
            <label for="mayo">Mayo</label><br>
            <input type="checkbox" id="mustard" name="toppings[]" value="mustard">
            <label for="mustard">Mustard</label><br>
            <input type="checkbox" id="ranch" name="toppings[]" value="italian">
            <label for="ranch">Ranch</label><br>
        </fieldset>

        <button type="submit">Place Order</button>
    </form>
</div>

<?php
require_once "footer.php";
?>

<?php
session_start();
include "navbar.php" ?>

<div class="bg-light">
    <div class="container-md my-5">
        <div class="fs-2 mb-3">Add Menu</div>
        <div class="col">
            <div class="container">
                <div class="row bg-white border rounded p-4">
                    <form method="post" action="add-menu-check.php" enctype="multipart/form-data">
                        <div class="mb-3">
                            <label for="item_name" class="form-label">Item Name:</label>
                            <input type="text" class="form-control" id="item_name" name="item_name" required>
                        </div>

                        <div class="mb-3">
                            <label for="description" class="form-label">Description:</label>
                            <textarea class="form-control" id="description" name="description" rows="3" required></textarea>
                        </div>

                        <div class="mb-3">
                            <label for="price" class="form-label">Price:</label>
                            <div class="input-group">
                                <span class="input-group-text">₱</span>
                                <input type="number" class="form-control" id="price" name="price" step="10" min="0" required>
                            </div>
                        </div>

                        <div class="mb-3">
                            <label for="formFile" class="form-label">Product Picture:</label>
                            <input type="file" class="form-control" id="product_pic" name="product_pic">
                        </div>

                        <div class="mb-3">
                            <label for="category" class="form-label">Category:</label>
                            <select class="form-select" id="category" name="category" required>
                                <option value="main dish">Main Dish</option>
                                <option value="sides">Sides</option>
                                <option value="snacks">Snacks</option>
                                <option value="drinks">Drinks</option>
                                <option value="other">Other</option>
                            </select>
                        </div>

                        <button type="submit" class="btn btn-maroon">Add Menu Item</button>
                    </form>
                </div>

            </div>
        </div>

    </div>
</div>

<?php include "../footer.php" ?>
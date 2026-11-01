<?php
ob_start();
?>
 
<div class="card shadow border-0 border-start border-5 border-primary mb-4">
    <div class="card-body">
        <h2 class="mb-1">Products</h2>
        <p class="text-muted mb-0">Manage and track all plushie products</p>
    </div>
</div>
 
<div class="card shadow-sm mb-4">
    <div class="card-body">
        <!-- Form Header -->
        <div class="row g-0 align-items-center mb-3">
            <div class="col">
                <h5 class="mb-0">
                    <i class="bi bi-pencil-square text-primary me-2"></i>
                    Product Form
                </h5>
                <small class="text-muted">Fill in the details of a plush product</small>
            </div>
            <div class="col-auto">
                <span class="badge bg-primary">* Required fields</span>
            </div>
        </div>
 
        <hr>
 
        <form action="" method="post" class="needs-validation" novalidate>
            <div class="row g-3">
                <div class="col-md-3">
                    <label for="pid" class="form-label">Product ID <span class="text-danger" aria-hidden="true">*</span></label>
                    <input name="product_num" id="pid" type="text" class="form-control" placeholder="Enter Product ID" value="" required>
                </div>
                <div class="col-md-3">
                    <label for="name" class="form-label">Name <span class="text-danger" aria-hidden="true">*</span></label>
                    <input name="product_name" id="name" type="text" class="form-control" placeholder="Enter Product Name" value="" required>
                </div>
                <div class="col-md-3">
                    <label for="price" class="form-label">Price (RM) <span class="text-danger" aria-hidden="true">*</span></label>
                    <input name="product_price" id="price" type="number" class="form-control" placeholder="Enter Price in RM" value="" required min="0" step="0.01">
                </div>
                <div class="col-md-3">
                    <label for="brand" class="form-label">Brand / Series <span class="text-danger" aria-hidden="true">*</span></label>
                    <select name="product_brand" id="brand" class="form-select" required>
                        <option value="">Select Brand</option>
                        <option value="Lumiere Paws">Lumiere Paws</option>
                        <option value="Phainon Plush">Phainon Plush</option>
                        <option value="Celestial Cuddles">Celestial Cuddles</option>
                        <option value="Starrail Pals">Starrail Pals</option>
                    </select>
                </div>
 
                <div class="col-md-3">
                    <label for="size" class="form-label">Size <span class="text-danger" aria-hidden="true">*</span></label>
                    <select name="product_size" id="size" class="form-select" required>
                        <option value="">Select Size</option>
                        <option value="Small">Small (15 cm)</option>
                        <option value="Medium">Medium (30 cm)</option>
                        <option value="Large">Large (50 cm)</option>
                        <option value="Jumbo">Jumbo (100 cm+)</option>
                    </select>
                </div>
 
                <div class="col-md-3">
                    <label for="material" class="form-label">Filling Material <span class="text-danger" aria-hidden="true">*</span></label>
                    <select name="product_material" id="material" class="form-select" required>
                        <option value="">Select Material</option>
                        <option value="PP Cotton">PP Cotton</option>
                        <option value="Memory Foam">Memory Foam</option>
                        <option value="Microbeads">Microbeads</option>
                        <option value="Recycled Fiber">Recycled Polyester</option>
                    </select>
                </div>
                 
                <div class="col-md-3">
                    <label for="quantity" class="form-label">Quantity <span class="text-danger" aria-hidden="true">*</span></label>
                    <input name="product_quantity" id="quantity" type="number" class="form-control" placeholder="Enter Quantity" value="" required min="0">
                </div>
                <div class="col-md-3">
                    <label for="product_image" class="form-label">Image</label>
                    <input name="product_image" id="product_image" type="text" class="form-control" placeholder="Enter image filename" value="">
                </div>
            </div>
             
            <hr class="mt-4 mb-3">
             
            <div>
                <button type="submit" name="create" class="btn btn-primary">
                    <i class="bi bi-save me-1"></i>Create
                </button>
                <button type="reset" class="btn btn-secondary">
                    <i class="bi bi-arrow-counterclockwise me-1"></i>Clear
                </button>
            </div>
        </form>
    </div>
</div>
 
<div class="card shadow-sm">
    <div class="card-body">
  
        <div class="row align-items-center mb-3">
            <div class="col">
                <h5 class="mb-0">
                    <i class="bi bi-table text-primary me-2"></i>
                    Product List
                </h5>
                <small class="text-muted">View and manage all products in the inventory</small>
            </div>
            <div class="col-auto">
                <span class="badge bg-success">Total: 20 items</span>
            </div>
        </div>
 
        <hr>
 
        <div class="table-responsive">
            <table class="table table-striped table-hover align-middle">
                <thead class="table-dark">
                    <tr>
                        <th>Product ID</th>
                        <th>Name</th>
                        <th>Price</th>
                        <th>Brand</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>P001</td>
                        <td>Bear Plush (Chairoikoguma)</td>
                        <td>RM 45.00</td>
                        <td>Lumiere Paws</td>
                        <td>
                            <a href="#" class="btn btn-sm btn-warning"><i class="bi bi-pencil"></i></a>
                            <button type="button" class="btn btn-sm btn-info text-white"><i class="bi bi-image"></i></button>
                            <a href="#" class="btn btn-sm btn-danger"><i class="bi bi-trash"></i></a>
                        </td>
                    </tr>
                    <tr>
                        <td>P002</td>
                        <td>Bunny Plush (Miffy)</td>
                        <td>RM 38.00</td>
                        <td>Lumiere Paws</td>
                        <td>
                            <a href="#" class="btn btn-sm btn-warning"><i class="bi bi-pencil"></i></a>
                            <button type="button" class="btn btn-sm btn-info text-white"><i class="bi bi-image"></i></button>
                            <a href="#" class="btn btn-sm btn-danger"><i class="bi bi-trash"></i></a>
                        </td>
                    </tr>
                    <tr>
                        <td>P003</td>
                        <td>Capybara Plush</td>
                        <td>RM 52.00</td>
                        <td>Celestial Cuddles</td>
                        <td>
                            <a href="#" class="btn btn-sm btn-warning"><i class="bi bi-pencil"></i></a>
                            <button type="button" class="btn btn-sm btn-info text-white"><i class="bi bi-image"></i></button>
                            <a href="#" class="btn btn-sm btn-danger"><i class="bi bi-trash"></i></a>
                        </td>
                    </tr>
                    <tr>
                        <td>P004</td>
                        <td>Cat Plush (Mofusand)</td>
                        <td>RM 42.00</td>
                        <td>Phainon Plush</td>
                        <td>
                            <a href="#" class="btn btn-sm btn-warning"><i class="bi bi-pencil"></i></a>
                            <button type="button" class="btn btn-sm btn-info text-white"><i class="bi bi-image"></i></button>
                            <a href="#" class="btn btn-sm btn-danger"><i class="bi bi-trash"></i></a>
                        </td>
                    </tr>
                    <tr>
                        <td>P005</td>
                        <td>Dino Plush</td>
                        <td>RM 35.00</td>
                        <td>Starrail Pals</td>
                        <td>
                            <a href="#" class="btn btn-sm btn-warning"><i class="bi bi-pencil"></i></a>
                            <button type="button" class="btn btn-sm btn-info text-white"><i class="bi bi-image"></i></button>
                            <a href="#" class="btn btn-sm btn-danger"><i class="bi bi-trash"></i></a>
                        </td>
                    </tr>
                    <tr>
                        <td>P006</td>
                        <td>Duck Plush</td>
                        <td>RM 29.00</td>
                        <td>Lumiere Paws</td>
                        <td>
                            <a href="#" class="btn btn-sm btn-warning"><i class="bi bi-pencil"></i></a>
                            <button type="button" class="btn btn-sm btn-info text-white"><i class="bi bi-image"></i></button>
                            <a href="#" class="btn btn-sm btn-danger"><i class="bi bi-trash"></i></a>
                        </td>
                    </tr>
                    <tr>
                        <td>P007</td>
                        <td>Fox Plush</td>
                        <td>RM 48.00</td>
                        <td>Phainon Plush</td>
                        <td>
                            <a href="#" class="btn btn-sm btn-warning"><i class="bi bi-pencil"></i></a>
                            <button type="button" class="btn btn-sm btn-info text-white"><i class="bi bi-image"></i></button>
                            <a href="#" class="btn btn-sm btn-danger"><i class="bi bi-trash"></i></a>
                        </td>
                    </tr>
                    <tr>
                        <td>P008</td>
                        <td>Frog Plush (Keroppi)</td>
                        <td>RM 36.00</td>
                        <td>Starrail Pals</td>
                        <td>
                            <a href="#" class="btn btn-sm btn-warning"><i class="bi bi-pencil"></i></a>
                            <button type="button" class="btn btn-sm btn-info text-white"><i class="bi bi-image"></i></button>
                            <a href="#" class="btn btn-sm btn-danger"><i class="bi bi-trash"></i></a>
                        </td>
                    </tr>
                    <tr>
                        <td>P009</td>
                        <td>Hamster Plush</td>
                        <td>RM 32.00</td>
                        <td>Celestial Cuddles</td>
                        <td>
                            <a href="#" class="btn btn-sm btn-warning"><i class="bi bi-pencil"></i></a>
                            <button type="button" class="btn btn-sm btn-info text-white"><i class="bi bi-image"></i></button>
                            <a href="#" class="btn btn-sm btn-danger"><i class="bi bi-trash"></i></a>
                        </td>
                    </tr>
                    <tr>
                        <td>P010</td>
                        <td>Koala Plush</td>
                        <td>RM 49.00</td>
                        <td>Lumiere Paws</td>
                        <td>
                            <a href="#" class="btn btn-sm btn-warning"><i class="bi bi-pencil"></i></a>
                            <button type="button" class="btn btn-sm btn-info text-white"><i class="bi bi-image"></i></button>
                            <a href="#" class="btn btn-sm btn-danger"><i class="bi bi-trash"></i></a>
                        </td>
                    </tr>
                    <tr>
                        <td>P011</td>
                        <td>Lion Plush</td>
                        <td>RM 55.00</td>
                        <td>Phainon Plush</td>
                        <td>
                            <a href="#" class="btn btn-sm btn-warning"><i class="bi bi-pencil"></i></a>
                            <button type="button" class="btn btn-sm btn-info text-white"><i class="bi bi-image"></i></button>
                            <a href="#" class="btn btn-sm btn-danger"><i class="bi bi-trash"></i></a>
                        </td>
                    </tr>
                    <tr>
                        <td>P012</td>
                        <td>Octopus Plush</td>
                        <td>RM 28.00</td>
                        <td>Starrail Pals</td>
                        <td>
                            <a href="#" class="btn btn-sm btn-warning"><i class="bi bi-pencil"></i></a>
                            <button type="button" class="btn btn-sm btn-info text-white"><i class="bi bi-image"></i></button>
                            <a href="#" class="btn btn-sm btn-danger"><i class="bi bi-trash"></i></a>
                        </td>
                    </tr>
                    <tr>
                        <td>P013</td>
                        <td>Otter Plush</td>
                        <td>RM 46.00</td>
                        <td>Celestial Cuddles</td>
                        <td>
                            <a href="#" class="btn btn-sm btn-warning"><i class="bi bi-pencil"></i></a>
                            <button type="button" class="btn btn-sm btn-info text-white"><i class="bi bi-image"></i></button>
                            <a href="#" class="btn btn-sm btn-danger"><i class="bi bi-trash"></i></a>
                        </td>
                    </tr>
                    <tr>
                        <td>P014</td>
                        <td>Panda Plush</td>
                        <td>RM 40.00</td>
                        <td>Lumiere Paws</td>
                        <td>
                            <a href="#" class="btn btn-sm btn-warning"><i class="bi bi-pencil"></i></a>
                            <button type="button" class="btn btn-sm btn-info text-white"><i class="bi bi-image"></i></button>
                            <a href="#" class="btn btn-sm btn-danger"><i class="bi bi-trash"></i></a>
                        </td>
                    </tr>
                    <tr>
                        <td>P015</td>
                        <td>Penguin Plush</td>
                        <td>RM 39.00</td>
                        <td>Starrail Pals</td>
                        <td>
                            <a href="#" class="btn btn-sm btn-warning"><i class="bi bi-pencil"></i></a>
                            <button type="button" class="btn btn-sm btn-info text-white"><i class="bi bi-image"></i></button>
                            <a href="#" class="btn btn-sm btn-danger"><i class="bi bi-trash"></i></a>
                        </td>
                    </tr>
                    <tr>
                        <td>P016</td>
                        <td>Puppy Plush (Pochacco)</td>
                        <td>RM 44.00</td>
                        <td>Lumiere Paws</td>
                        <td>
                            <a href="#" class="btn btn-sm btn-warning"><i class="bi bi-pencil"></i></a>
                            <button type="button" class="btn btn-sm btn-info text-white"><i class="bi bi-image"></i></button>
                            <a href="#" class="btn btn-sm btn-danger"><i class="bi bi-trash"></i></a>
                        </td>
                    </tr>
                    <tr>
                        <td>P017</td>
                        <td>Seal Plush</td>
                        <td>RM 37.00</td>
                        <td>Celestial Cuddles</td>
                        <td>
                            <a href="#" class="btn btn-sm btn-warning"><i class="bi bi-pencil"></i></a>
                            <button type="button" class="btn btn-sm btn-info text-white"><i class="bi bi-image"></i></button>
                            <a href="#" class="btn btn-sm btn-danger"><i class="bi bi-trash"></i></a>
                        </td>
                    </tr>
                    <tr>
                        <td>P018</td>
                        <td>Shark Plush</td>
                        <td>RM 50.00</td>
                        <td>Phainon Plush</td>
                        <td>
                            <a href="#" class="btn btn-sm btn-warning"><i class="bi bi-pencil"></i></a>
                            <button type="button" class="btn btn-sm btn-info text-white"><i class="bi bi-image"></i></button>
                            <a href="#" class="btn btn-sm btn-danger"><i class="bi bi-trash"></i></a>
                        </td>
                    </tr>
                    <tr>
                        <td>P019</td>
                        <td>Sheep Plush</td>
                        <td>RM 43.00</td>
                        <td>Celestial Cuddles</td>
                        <td>
                            <a href="#" class="btn btn-sm btn-warning"><i class="bi bi-pencil"></i></a>
                            <button type="button" class="btn btn-sm btn-info text-white"><i class="bi bi-image"></i></button>
                            <a href="#" class="btn btn-sm btn-danger"><i class="bi bi-trash"></i></a>
                        </td>
                    </tr>
                    <tr>
                        <td>P020</td>
                        <td>Unicorn Plush</td>
                        <td>RM 58.00</td>
                        <td>Lumiere Paws</td>
                        <td>
                            <a href="#" class="btn btn-sm btn-warning"><i class="bi bi-pencil"></i></a>
                            <button type="button" class="btn btn-sm btn-info text-white"><i class="bi bi-image"></i></button>
                            <a href="#" class="btn btn-sm btn-danger"><i class="bi bi-trash"></i></a>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
 
<?php
$content = ob_get_clean();
require_once 'layout.php';
?>
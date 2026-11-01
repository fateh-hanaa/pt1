<?php
ob_start();
?>
 
<!-- Page Title Header Card -->
<div class="card shadow border-0 border-start border-5 border-primary mb-4">
    <div class="card-body">
        <h2 class="mb-1">Order Details</h2>
        <p class="text-muted mb-0">View itemized details and products for customer orders</p>
    </div>
</div>
 
<!-- Add Product Form Card -->
<div class="card shadow-sm mb-4">
    <div class="card-body">
        <h5 class="mb-3"><i class="bi bi-cart-plus text-primary me-2"></i>Add Product to Order</h5>
        <hr>
        <form action="" method="post" class="needs-validation" novalidate>
            <div class="row g-3">
                <div class="col-md-4">
                    <label for="order_num" class="form-label">Select Order <span class="text-danger">*</span></label>
                    <select name="order_num" id="order_num" class="form-select" required>
                        <option value="">Select Order</option>
                        <option value="O001">O001 - Nadiah Husna binti Hasan</option>
                        <option value="O002">O002 - Nur Sarah Binti Ahmad</option>
                        <option value="O003">O003 - Aishah Binti Ramli</option>
                        <option value="O004">O004 - Siti Maryam Binti Zainal</option>
                    </select>
                </div>
                <div class="col-md-5">
                    <label for="product_num" class="form-label">Product <span class="text-danger">*</span></label>
                    <select name="product_num" id="product_num" class="form-select" required>
                        <option value="">Select Product</option>
                        <option value="P001">Bear Plush (Chairoikoguma) (Stock = 10)</option>
                        <option value="P002">Bunny Plush (Miffy) (Stock = 15)</option>
                        <option value="P003">Capybara Plush (Stock = 8)</option>
                        <option value="P004">Cat Plush (Mofusand) (Stock = 12)</option>
                        <option value="P005">Dino Plush (Stock = 20)</option>
                    </select>
                </div>
                <div class="col-md-3">
                    <label for="quantity" class="form-label">Quantity <span class="text-danger">*</span></label>
                    <input name="quantity" id="quantity" type="number" class="form-control" min="1" value="1" required>
                </div>
            </div>
            <hr class="mt-4 mb-3">
            <button type="submit" class="btn btn-primary"><i class="bi bi-save me-1"></i>Add Product</button>
            <a href="orders.php" class="btn btn-secondary">Cancel</a>
        </form>
    </div>
</div>

<!-- ORDER O001 DETAILS CARD -->
<div class="card shadow-sm mb-4">
    <div class="card-header bg-dark text-white d-flex justify-content-between align-items-center">
        <h5 class="mb-0">Order #O001 Details</h5>
        <a href="invoice.php" class="btn btn-sm btn-success"><i class="bi bi-receipt me-1"></i>View Invoice</a>
    </div>
    <div class="card-body">
        <div class="row g-3 mb-3">
            <div class="col-md-4"><strong>Order Date:</strong><br>2026-10-03</div>
            <div class="col-md-4"><strong>Staff:</strong><br>Masyitah Nadhirah binti Mahamad Noor</div>
            <div class="col-md-4"><strong>Customer:</strong><br>Nadiah Husna binti Hasan</div>
        </div>
        <div class="table-responsive">
            <table class="table table-striped table-hover align-middle mb-0">
                <thead class="table-light">
                    <tr>
                        <th>Product</th>
                        <th>Unit Price</th>
                        <th>Quantity</th>
                        <th>Total</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Bear Plush (Chairoikoguma)</td>
                        <td>RM 45.00</td>
                        <td>1</td>
                        <td>RM 45.00</td>
                        <td>
                            <a href="#" class="btn btn-sm btn-warning"><i class="bi bi-pencil"></i></a>
                            <a href="#" class="btn btn-sm btn-danger"><i class="bi bi-trash"></i></a>
                        </td>
                    </tr>
                    <tr>
                        <td>Bunny Plush (Miffy)</td>
                        <td>RM 38.00</td>
                        <td>2</td>
                        <td>RM 76.00</td>
                        <td>
                            <a href="#" class="btn btn-sm btn-warning"><i class="bi bi-pencil"></i></a>
                            <a href="#" class="btn btn-sm btn-danger"><i class="bi bi-trash"></i></a>
                        </td>
                    </tr>
                </tbody>
                <tfoot>
                    <tr>
                        <th colspan="3" class="text-end">Grand Total</th>
                        <th>RM 121.00</th>
                        <th></th>
                    </tr>
                </tfoot>
            </table>
        </div>
    </div>
</div>

<!-- ORDER O002 DETAILS CARD -->
<div class="card shadow-sm mb-4">
    <div class="card-header bg-dark text-white d-flex justify-content-between align-items-center">
        <h5 class="mb-0">Order #O002 Details</h5>
        <a href="invoice.php" class="btn btn-sm btn-success"><i class="bi bi-receipt me-1"></i>View Invoice</a>
    </div>
    <div class="card-body">
        <div class="row g-3 mb-3">
            <div class="col-md-4"><strong>Order Date:</strong><br>2026-10-15</div>
            <div class="col-md-4"><strong>Staff:</strong><br>Nurul Huda Binti Hassan</div>
            <div class="col-md-4"><strong>Customer:</strong><br>Nur Sarah Binti Ahmad</div>
        </div>
        <div class="table-responsive">
            <table class="table table-striped table-hover align-middle mb-0">
                <thead class="table-light">
                    <tr>
                        <th>Product</th>
                        <th>Unit Price</th>
                        <th>Quantity</th>
                        <th>Total</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Capybara Plush</td>
                        <td>RM 52.00</td>
                        <td>1</td>
                        <td>RM 52.00</td>
                        <td>
                            <a href="#" class="btn btn-sm btn-warning"><i class="bi bi-pencil"></i></a>
                            <a href="#" class="btn btn-sm btn-danger"><i class="bi bi-trash"></i></a>
                        </td>
                    </tr>
                </tbody>
                <tfoot>
                    <tr>
                        <th colspan="3" class="text-end">Grand Total</th>
                        <th>RM 52.00</th>
                        <th></th>
                    </tr>
                </tfoot>
            </table>
        </div>
    </div>
</div>

<!-- ORDER O003 DETAILS CARD -->
<div class="card shadow-sm mb-4">
    <div class="card-header bg-dark text-white d-flex justify-content-between align-items-center">
        <h5 class="mb-0">Order #O003 Details</h5>
        <a href="invoice.php" class="btn btn-sm btn-success"><i class="bi bi-receipt me-1"></i>View Invoice</a>
    </div>
    <div class="card-body">
        <div class="row g-3 mb-3">
            <div class="col-md-4"><strong>Order Date:</strong><br>2026-10-22</div>
            <div class="col-md-4"><strong>Staff:</strong><br>Farah Anisa Binti Azman</div>
            <div class="col-md-4"><strong>Customer:</strong><br>Aishah Binti Ramli</div>
        </div>
        <div class="table-responsive">
            <table class="table table-striped table-hover align-middle mb-0">
                <thead class="table-light">
                    <tr>
                        <th>Product</th>
                        <th>Unit Price</th>
                        <th>Quantity</th>
                        <th>Total</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Cat Plush (Mofusand)</td>
                        <td>RM 42.00</td>
                        <td>2</td>
                        <td>RM 84.00</td>
                        <td>
                            <a href="#" class="btn btn-sm btn-warning"><i class="bi bi-pencil"></i></a>
                            <a href="#" class="btn btn-sm btn-danger"><i class="bi bi-trash"></i></a>
                        </td>
                    </tr>
                </tbody>
                <tfoot>
                    <tr>
                        <th colspan="3" class="text-end">Grand Total</th>
                        <th>RM 84.00</th>
                        <th></th>
                    </tr>
                </tfoot>
            </table>
        </div>
    </div>
</div>

<!-- ORDER O004 DETAILS CARD -->
<div class="card shadow-sm mb-4">
    <div class="card-header bg-dark text-white d-flex justify-content-between align-items-center">
        <h5 class="mb-0">Order #O004 Details</h5>
        <a href="invoice.php" class="btn btn-sm btn-success"><i class="bi bi-receipt me-1"></i>View Invoice</a>
    </div>
    <div class="card-body">
        <div class="row g-3 mb-3">
            <div class="col-md-4"><strong>Order Date:</strong><br>2026-11-01</div>
            <div class="col-md-4"><strong>Staff:</strong><br>Masyitah Nadhirah binti Mahamad Noor</div>
            <div class="col-md-4"><strong>Customer:</strong><br>Siti Maryam Binti Zainal</div>
        </div>
        <div class="table-responsive">
            <table class="table table-striped table-hover align-middle mb-0">
                <thead class="table-light">
                    <tr>
                        <th>Product</th>
                        <th>Unit Price</th>
                        <th>Quantity</th>
                        <th>Total</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Dino Plush</td>
                        <td>RM 35.00</td>
                        <td>3</td>
                        <td>RM 105.00</td>
                        <td>
                            <a href="#" class="btn btn-sm btn-warning"><i class="bi bi-pencil"></i></a>
                            <a href="#" class="btn btn-sm btn-danger"><i class="bi bi-trash"></i></a>
                        </td>
                    </tr>
                </tbody>
                <tfoot>
                    <tr>
                        <th colspan="3" class="text-end">Grand Total</th>
                        <th>RM 105.00</th>
                        <th></th>
                    </tr>
                </tfoot>
            </table>
        </div>
    </div>
</div>

<a href="orders.php" class="btn btn-secondary mb-4"><i class="bi bi-arrow-left me-1"></i>Back to Orders</a>
 
<?php
$content = ob_get_clean();
require_once 'layout.php';
?>
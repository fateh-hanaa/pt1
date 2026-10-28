<?php
ob_start();
?>

<!-- Welcome Banner / Header Card -->
<div class="card shadow border-0 border-start border-5 border-primary mb-4">
    <div class="card-body p-4">
        <h2 class="mb-1 fw-bold text-primary">Welcome to My Company Management System</h2>
        <p class="text-muted mb-0">Manage products, customers, staff members, and orders efficiently in one place.</p>
    </div>
</div>

<!-- Hero Carousel Section -->
<div class="card shadow-sm mb-4">
    <div class="card-body p-0">
        <div id="homeCarousel" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#homeCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#homeCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#homeCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner rounded">
                <div class="carousel-item active bg-dark text-white p-5 text-center" style="min-height: 250px;">
                    <div class="d-flex flex-column justify-content-center align-items-center h-100 py-4">
                        <i class="bi bi-box-seam display-3 mb-3 text-warning"></i>
                        <h3 class="fw-bold">Inventory Management</h3>
                        <p class="lead">Track stock levels, add new inventory, and manage product listings seamlessly.</p>
                    </div>
                </div>
                <div class="carousel-item bg-secondary text-white p-5 text-center" style="min-height: 250px;">
                    <div class="d-flex flex-column justify-content-center align-items-center h-100 py-4">
                        <i class="bi bi-people-fill display-3 mb-3 text-info"></i>
                        <h3 class="fw-bold">Customer & Staff Directory</h3>
                        <p class="lead">Maintain complete records for your clients and team members.</p>
                    </div>
                </div>
                <div class="carousel-item bg-primary text-white p-5 text-center" style="min-height: 250px;">
                    <div class="d-flex flex-column justify-content-center align-items-center h-100 py-4">
                        <i class="bi bi-cart-check-fill display-3 mb-3 text-light"></i>
                        <h3 class="fw-bold">Order & Invoice Processing</h3>
                        <p class="lead">Create customer orders, review detailed line items, and generate printable invoices.</p>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#homeCarousel" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#homeCarousel" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>
</div>

<!-- Navigation / Module Cards -->
<div class="row g-4 mb-4">
    <div class="col-md-3">
        <div class="card shadow-sm h-100 text-center">
            <div class="card-body d-flex flex-column align-items-center justify-content-center">
                <i class="bi bi-box-seam text-primary display-5 mb-3"></i>
                <h5 class="card-title fw-bold">Products</h5>
                <p class="card-text text-muted small">Manage product details, pricing, and stock levels.</p>
                <a href="products.php" class="btn btn-outline-primary btn-sm mt-auto">Go to Products</a>
            </div>
        </div>
    </div>
    <div class="col-md-3">
        <div class="card shadow-sm h-100 text-center">
            <div class="card-body d-flex flex-column align-items-center justify-content-center">
                <i class="bi bi-people text-success display-5 mb-3"></i>
                <h5 class="card-title fw-bold">Customers</h5>
                <p class="card-text text-muted small">View customer profiles and registration history.</p>
                <a href="customers.php" class="btn btn-outline-success btn-sm mt-auto">Go to Customers</a>
            </div>
        </div>
    </div>
    <div class="col-md-3">
        <div class="card shadow-sm h-100 text-center">
            <div class="card-body d-flex flex-column align-items-center justify-content-center">
                <i class="bi bi-person-badge text-warning display-5 mb-3"></i>
                <h5 class="card-title fw-bold">Staffs</h5>
                <p class="card-text text-muted small">Track employee contact info and staff IDs.</p>
                <a href="staffs.php" class="btn btn-outline-warning btn-sm mt-auto">Go to Staffs</a>
            </div>
        </div>
    </div>
    <div class="col-md-3">
        <div class="card shadow-sm h-100 text-center">
            <div class="card-body d-flex flex-column align-items-center justify-content-center">
                <i class="bi bi-cart-check text-danger display-5 mb-3"></i>
                <h5 class="card-title fw-bold">Orders</h5>
                <p class="card-text text-muted small">Process sales transactions and view invoices.</p>
                <a href="orders.php" class="btn btn-outline-danger btn-sm mt-auto">Go to Orders</a>
            </div>
        </div>
    </div>
</div>

<?php
$content = ob_get_clean();
require_once 'layout.php';
?>
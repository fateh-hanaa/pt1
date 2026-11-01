<?php
ob_start();
?>

<!-- Invoice Header Card with Print Button -->
<div class="card shadow border-0 border-start border-5 border-primary mb-4">
    <div class="card-body">
        <div class="row align-items-center">
            <div class="col">
                <h2 class="mb-1">Invoices Overview</h2>
                <p class="text-muted mb-0">Manage and print all customer sales invoices</p>
            </div>
            <div class="col-auto">
                <button type="button" class="btn btn-primary" onclick="window.print()">
                    <i class="bi bi-printer me-1"></i>Print All Invoices
                </button>
            </div>
        </div>
    </div>
</div>

<!-- INVOICE O001 -->
<div class="card shadow-sm mb-4 printable-invoice">
    <div class="card-body p-4">
        <div class="row mb-4">
            <div class="col-md-6">
                <h4>Khaslana Lumière Paws</h4>
                <p class="text-muted mb-0">Sales Invoice</p>
            </div>
            <div class="col-md-6 text-md-end">
                <strong>Invoice No.: </strong>O001<br>
                <strong>Date: </strong>2026-10-03
            </div>
        </div>
        <hr>
        <div class="row mb-4">
            <div class="col-md-6">
                <strong>Customer:</strong><br>
                Nadiah Husna binti Hasan<br>
                012-3456789
            </div>
            <div class="col-md-6 text-md-end">
                <strong>Staff:</strong><br>
                Masyitah Nadhirah binti Mahamad Noor<br>
                masyitah@khaslanapaws.com
            </div>
        </div>
        <div class="table-responsive">
            <table class="table table-striped">
                <thead class="table-dark">
                    <tr>
                        <th>#</th>
                        <th>Product</th>
                        <th>Unit Price</th>
                        <th>Quantity</th>
                        <th class="text-end">Amount</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>Bear Plush (Chairoikoguma)</td>
                        <td>RM 45.00</td>
                        <td>1</td>
                        <td class="text-end">RM 45.00</td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>Bunny Plush (Miffy)</td>
                        <td>RM 38.00</td>
                        <td>2</td>
                        <td class="text-end">RM 76.00</td>
                    </tr>
                </tbody>
                <tfoot>
                    <tr>
                        <th colspan="4" class="text-end">Grand Total</th>
                        <th class="text-end">RM 121.00</th>
                    </tr>
                </tfoot>
            </table>
        </div>
    </div>
</div>

<!-- INVOICE O002 -->
<div class="card shadow-sm mb-4 printable-invoice">
    <div class="card-body p-4">
        <div class="row mb-4">
            <div class="col-md-6">
                <h4>Khaslana Lumière Paws</h4>
                <p class="text-muted mb-0">Sales Invoice</p>
            </div>
            <div class="col-md-6 text-md-end">
                <strong>Invoice No.: </strong>O002<br>
                <strong>Date: </strong>2026-10-15
            </div>
        </div>
        <hr>
        <div class="row mb-4">
            <div class="col-md-6">
                <strong>Customer:</strong><br>
                Nur Sarah Binti Ahmad<br>
                013-8294011
            </div>
            <div class="col-md-6 text-md-end">
                <strong>Staff:</strong><br>
                Nurul Huda Binti Hassan<br>
                nurulhuda@khaslanapaws.com
            </div>
        </div>
        <div class="table-responsive">
            <table class="table table-striped">
                <thead class="table-dark">
                    <tr>
                        <th>#</th>
                        <th>Product</th>
                        <th>Unit Price</th>
                        <th>Quantity</th>
                        <th class="text-end">Amount</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>Capybara Plush</td>
                        <td>RM 52.00</td>
                        <td>1</td>
                        <td class="text-end">RM 52.00</td>
                    </tr>
                </tbody>
                <tfoot>
                    <tr>
                        <th colspan="4" class="text-end">Grand Total</th>
                        <th class="text-end">RM 52.00</th>
                    </tr>
                </tfoot>
            </table>
        </div>
    </div>
</div>

<!-- INVOICE O003 -->
<div class="card shadow-sm mb-4 printable-invoice">
    <div class="card-body p-4">
        <div class="row mb-4">
            <div class="col-md-6">
                <h4>Khaslana Lumière Paws</h4>
                <p class="text-muted mb-0">Sales Invoice</p>
            </div>
            <div class="col-md-6 text-md-end">
                <strong>Invoice No.: </strong>O003<br>
                <strong>Date: </strong>2026-10-22
            </div>
        </div>
        <hr>
        <div class="row mb-4">
            <div class="col-md-6">
                <strong>Customer:</strong><br>
                Aishah Binti Ramli<br>
                017-9123845
            </div>
            <div class="col-md-6 text-md-end">
                <strong>Staff:</strong><br>
                Farah Anisa Binti Azman<br>
                farahanisa@khaslanapaws.com
            </div>
        </div>
        <div class="table-responsive">
            <table class="table table-striped">
                <thead class="table-dark">
                    <tr>
                        <th>#</th>
                        <th>Product</th>
                        <th>Unit Price</th>
                        <th>Quantity</th>
                        <th class="text-end">Amount</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>Cat Plush (Mofusand)</td>
                        <td>RM 42.00</td>
                        <td>2</td>
                        <td class="text-end">RM 84.00</td>
                    </tr>
                </tbody>
                <tfoot>
                    <tr>
                        <th colspan="4" class="text-end">Grand Total</th>
                        <th class="text-end">RM 84.00</th>
                    </tr>
                </tfoot>
            </table>
        </div>
    </div>
</div>

<!-- INVOICE O004 -->
<div class="card shadow-sm mb-4 printable-invoice">
    <div class="card-body p-4">
        <div class="row mb-4">
            <div class="col-md-6">
                <h4>Khaslana Lumière Paws</h4>
                <p class="text-muted mb-0">Sales Invoice</p>
            </div>
            <div class="col-md-6 text-md-end">
                <strong>Invoice No.: </strong>O004<br>
                <strong>Date: </strong>2026-11-01
            </div>
        </div>
        <hr>
        <div class="row mb-4">
            <div class="col-md-6">
                <strong>Customer:</strong><br>
                Siti Maryam Binti Zainal<br>
                019-4567123
            </div>
            <div class="col-md-6 text-md-end">
                <strong>Staff:</strong><br>
                Masyitah Nadhirah binti Mahamad Noor<br>
                masyitah@khaslanapaws.com
            </div>
        </div>
        <div class="table-responsive">
            <table class="table table-striped">
                <thead class="table-dark">
                    <tr>
                        <th>#</th>
                        <th>Product</th>
                        <th>Unit Price</th>
                        <th>Quantity</th>
                        <th class="text-end">Amount</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>Dino Plush</td>
                        <td>RM 35.00</td>
                        <td>3</td>
                        <td class="text-end">RM 105.00</td>
                    </tr>
                </tbody>
                <tfoot>
                    <tr>
                        <th colspan="4" class="text-end">Grand Total</th>
                        <th class="text-end">RM 105.00</th>
                    </tr>
                </tfoot>
            </table>
        </div>
    </div>
</div>

<a href="orderdetails.php" class="btn btn-secondary mb-4">
    <i class="bi bi-arrow-left me-1"></i>Back to Details
</a>

<style>
@media print {
    #mySidebar,
    #myBurger,
    .btn-primary,
    .btn-secondary,
    .card-header {
        display: none !important;
    }

    .printable-invoice {
        border: none !important;
        box-shadow: none !important;
        page-break-after: always;
    }
}
</style>

<?php
$content = ob_get_clean();
require_once 'layout.php';
?>
<?php include_once 'template/header.php'?>
<?php include_once 'template/sidebar.php'?>

<div class="container mt-5">
    <div class="row">
        <div class="col-12">

            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Profile Datatable</h4>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table id="example3" class="display" style="min-width: 845px">
                            <thead>
                            <tr>
                                <th>Ürün Adı</th>
                                <th>Ürün Açıklaması</th>
                                <th>Fiyatı</th>
                                <th>İndirim</th>
                                <th>Satış Durumu</th>
                            </tr>
                            </thead>
                            <tbody id="table-body">
                            <style>.product-warn{display: none}</style>
                            <div class="product-warn alert alert-info"></div>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php include_once 'template/footer.php'?>


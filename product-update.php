<?php require_once 'config/system.php'?>
<?php include_once 'template/header.php'?>
<?php include_once 'template/sidebar.php'?>


<?php
if (!sessionSystem::control()){ header('Location: ./login.php'); }
$id = intval($_GET['id']);
?>
<?php

$getJson = file_get_contents('http://localhost/api/product/single/'.$id);
$jsonDecode = json_decode($getJson, true);
$data = $jsonDecode['data'];

?>

    <div class="content-body">
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-xl-10 col-lg-10">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title"><?php echo $data['product_name']; ?></h4>
                        </div>
                        <div class="card-body">
                            <div class="basic-form">
                                <style>.product-warn{display: none}</style>
                                <div class="product-warn alert alert-info"></div>
                                <form>
                                    <input name="id" type="hidden" value="<?php echo $id?>">
                                    <div class="form-group">
                                        <label>ÜRÜN ADI</label>
                                        <input name="product_name" type="text" class="form-control" placeholder="Ürün Adı Giriniz" value="<?php echo $data['product_name']; ?>">
                                    </div>
                                    <div class="form-group">
                                        <label>ÜRÜN AÇIKLAMASI</label>
                                        <textarea name="product_description" class="form-control" rows="4" placeholder="Ürün Açıklaması Giriniz"><?php echo $data['product_description']; ?></textarea>
                                    </div>
                                    <div class="form-group">
                                        <label>ÜRÜN FİYATI</label>
                                        <input name="product_price" type="text" class="form-control" placeholder="Ürün Fiyatı Giriniz" value="<?php echo $data['product_price']; ?>">
                                    </div>
                                    <div class="form-group">
                                        <label>ÜRÜN İNDİRİM DURUMU</label>
                                        <select name="product_discount" class="form-control" id="sel1">
                                            <option value="VAR" <?php echo ($data['product_discount']==='VAR') ? 'selected' : '';?>>VAR</option>
                                            <option value="YOK" <?php echo ($data['product_discount']==='YOK') ? 'selected' : '';?>>YOK</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label>SATIŞ DURUMU</label>
                                        <select name="sales_status" class="form-control" id="sel1">
                                            <option value="SATIŞTA" <?php echo ($data['sales_status']==='SATIŞTA') ? 'selected' : '';?>>SATIŞTA</option>
                                            <option value="SATIŞTA DEĞİL" <?php echo ($data['sales_status']==='SATIŞTA DEĞİL') ? 'selected' : '';?>>SATIŞTA DEĞİL</option>
                                        </select>
                                    </div>
                                    <div class="text-center">
                                        <button id="product-update" type="button" class="btn btn-primary btn-block">Ürün Düzenle</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </div>

<?php include_once 'template/footer.php'?>

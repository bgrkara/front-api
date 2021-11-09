<?php require_once 'config/system.php'?>
<?php include_once 'template/header.php'?>
<?php include_once 'template/sidebar.php'?>


<?php
if (!sessionSystem::control()){ header('Location: ./login.php'); }
$id = intval($_GET['id']);
?>

    <div class="content-body">
        <div class="container-fluid">
            <div class="row justify-content-center">
                <!--                --><?php //echo '<pre>';
                //                echo
                //                print_r($jsonDecode);
                //                echo '</pre>';
                //                echo '</pre>';
//                echo $token = md5(sha1('kara1453*'));
                ?>
                <div class="col-xl-10 col-lg-10">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Ürün Ekle</h4>
                        </div>
                        <div class="card-body">
                            <div class="basic-form">
                                <style>.product-warn{display: none}</style>
                                <div class="product-warn alert alert-info"></div>
                                <form>
                                    <input name="id" type="hidden" value="<?php echo $id?>">
                                    <div class="form-group">
                                        <label>ÜRÜN ADI</label>
                                        <input name="product_name" type="text" class="form-control" placeholder="Ürün Adı Giriniz">
                                    </div>
                                    <div class="form-group">
                                        <label>ÜRÜN AÇIKLAMASI</label>
                                        <textarea name="product_description" class="form-control" rows="4" placeholder="Ürün Açıklaması Giriniz"></textarea>
                                    </div>
                                    <div class="form-group">
                                        <label>ÜRÜN FİYATI</label>
                                        <input name="product_price" type="text" class="form-control" placeholder="Ürün Fiyatı Giriniz">
                                    </div>
                                    <div class="form-group">
                                        <label>ÜRÜN İNDİRİM DURUMU</label>
                                        <select name="product_discount" class="form-control" id="sel1">
                                            <option value="VAR">VAR</option>
                                            <option value="YOK">YOK</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label>SATIŞ DURUMU</label>
                                        <select name="sales_status" class="form-control" id="sel1">
                                            <option value="SATIŞTA">SATIŞTA</option>
                                            <option value="SATIŞTA DEĞİL">SATIŞTA DEĞİL</option>
                                        </select>
                                    </div>
                                    <div class="text-center">
                                        <button id="product-add" type="button" class="btn btn-primary btn-block">Ürün Ekle</button>
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
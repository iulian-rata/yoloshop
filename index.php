        <?php include 'layouts/header.php';
    
         ?>

        <section>
            <div class="container">
                <div class="row">
                    <div class="col-sm-3">
                        <div class="left-sidebar">
                            <h2>Catalog</h2>
                            <div class="panel-group category-products">
                           <?php
                                include ("conexiune.php");
                                $categorii=mysqli_query($conexiune, "SELECT * FROM categorii");
                                 while ($row=mysqli_fetch_row($categorii)) {
                                    ?>
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h4 class="panel-title"><a href="#"><?=$row[1]?></a></h4>
                                    </div>
                                </div>

                                <?php
                            }
                                ?>
                                
                                
                                
                            </div>

                        </div>
                    </div>

                    <div class="col-sm-9 padding-right">
                        <div class="features_items">
                            <h2 class="title text-center">Ultimele produse</h2>
                            <?php
                                include ("conexiune.php");
                                $produse=mysqli_query($conexiune, "SELECT * FROM produse");
                                 while ($row=mysqli_fetch_row($produse)) {
                                    ?>
                            <div class="col-sm-4">
                                <div class="product-image-wrapper">
                                    <div class="single-products">
                                        <div class="productinfo text-center">
                                            <img src="template/images/home/iphone12.jpg" alt="" />
                                            <h2><?=$row[3]?></h2>
                                            <p><?=$row[2]?></p>
                                            <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>La coș</a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                               <?php
                           }
                           ?>
            </section>
          
<?php include'layouts/footer.php' ?>
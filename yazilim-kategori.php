<?php include 'header.php'; 



?>
        <div class="page-title wb">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
                        <h2><i class="fa fa-leaf bg-green"></i> kategori: yazilim</h2>
                    </div><!-- end col -->
                    <div class="col-lg-4 col-md-4 col-sm-12 hidden-xs-down hidden-sm-down">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item"><a href="#">Blog</a></li>
                            <li class="breadcrumb-item active">Gardening</li>
                        </ol>
                    </div><!-- end col -->                    
                </div><!-- end row -->
            </div><!-- end container -->
        </div><!-- end page-title -->

        <section class="section wb">
            <div class="container">
                <div class="row">
                    <div class="col-lg-9 col-md-12 col-sm-12 col-xs-12">
                        <div class="page-wrapper">
                            <div class="blog-list clearfix">

<?php 


    

    $postsor=mysqli_query($vt, 'select * from post');


    while ($postcek=mysqli_fetch_assoc($postsor)) {

        ?>



  


 



                                <div class="blog-box row">
                                    <div class="col-md-4">
                                        <div class="post-media">
                                            <a href="post-detay.php?post_id=<?php echo $postcek['post_id'];?>" title="">
                                                <img src="<?php echo $postcek['post_img']; ?>" alt="" class="img-fluid">
                                                <div class="hovereffect"></div>
                                            </a>
                                        </div><!-- end media -->
                                    </div><!-- end col -->

                                    <div class="blog-meta big-meta col-md-8">
                                 <span class="bg-aqua"><a href="post-detay.php?post_id=<?php echo $postcek['post_id'];?>" title=""><?php echo $postcek['post_aktif']; ?></a></span>
                                        <h4><a href="post-detay.php?post_id=<?php echo $postcek['post_id'];?>" title=""><?php echo $postcek[post_title]; ?></a></h4>
                                        <p><?php echo substr($postcek['post_aciklama'],0,250);?></p>
                                        <small><a href="post-detay.php?post_id=<?php echo $postcek['post_id'];?>" title=""><i class="fa fa-eye"></i> 1887</a></small>
                                        <small><a href="post-detay.php?post_id=<?php echo $postcek['post_id'];?>" title=""><?php echo $postcek['post_date']; ?></a></small>
                                        <small><a href="#" title=""><?php echo $postcek['yazar_name']; ?></a></small>
                                    </div><!-- end meta -->
                                </div><!-- end blog-box -->

                            <?php } ?>

                                <hr class="invis">

                               

                                

                                <hr class="invis">

                                
                                
                                
                                

                            </div><!-- end blog-list -->
                        </div><!-- end page-wrapper -->

                        <hr class="invis">

                        <div class="row">
                            <div class="col-md-12">
                                <nav aria-label="Page navigation">
                                    <ul class="pagination justify-content-start">
                                       
                                        <li class="page-item"><a class="page-link" href="#">1</a></li>
                                        <li class="page-item">
                                            <a class="page-link" href="#">Next</a>
                                        </li>
                                    </ul>
                                </nav>
                            </div><!-- end col -->
                        </div><!-- end row -->
                    </div><!-- end col -->

                    <div class="col-lg-3 col-md-12 col-sm-12 col-xs-12">
                        <div class="sidebar">
                            <div class="widget">
                                <h2 class="widget-title">Search</h2>
                                <form class="form-inline search-form">
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="Search on the site">
                                    </div>
                                    <button type="submit" class="btn btn-primary"><i class="fa fa-search"></i></button>
                                </form>
                            </div><!-- end widget -->

                           <div class="widget">
                                <h2 class="widget-title">son gönderiler</h2>
                                <div class="blog-list-widget">
                                    <div class="list-group">
                                        
               
                     

  <?php

       $güncelsor1=mysqli_query($vt, "select * from post order by post_id DESC limit 5");


       while ($güncelcek1=mysqli_fetch_assoc($güncelsor1)) {?>
                                  

                                        <a href="post-detay.php?post_id=<?php echo $güncelcek1['post_id'];?>" class="list-group-item list-group-item-action flex-column align-items-start">
                                            <div class="w-100 justify-content-between">
                                                <img src="<?php echo $güncelcek1['post_img']; ?>" alt="" class="img-fluid float-left">
                                                <h5 class="mb-1"><?php echo $güncelcek1['post_title']; ?></h5>
                                                <small><?php echo $güncelcek1['post_date']; ?></small>
                                            </div>
                                        </a>

                               <?php } ?>
                                       
                                    </div>
                                </div><!-- end blog-list -->
                            </div><!-- end widget -->

                            
                            
                            <div class="widget">
                                <h2 class="widget-title">Popular Categories</h2>
                                <div class="link-widget">
                                    <ul>
                                        <li><a href="#">yazılım <span></span></a></li>
                                    </ul>
                                </div><!-- end link-widget -->
                            </div><!-- end widget -->



                        </div><!-- end sidebar -->
                    </div><!-- end col -->
                </div><!-- end row -->
            </div><!-- end container -->
        </section>

        <?php include 'footer.php'; ?>
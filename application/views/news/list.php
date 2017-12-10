
<?php foreach ($news as $x):  ?>
    
 <div class="col-lg-4 col-md-4 col-sm-6 pm-column-spacing">
                    <div class="pm-menu-item-container">
                    	<div class="pm-menu-item-img-container" style="background-image:url(img/menu/item1.jpg);">
                        	<div class="pm-menu-item-price"><p>$14.99</p></div>
                        </div>
                        
                        <div class="pm-menu-item-desc">
                        	<p class="pm-menu-item-title"><?php echo anchor('news/show/'.$x['id'],$x['title']);?></p>
                            <p class="pm-menu-item-excerpt"><?php echo substr(strip_tags($x['text']),0,200);?></p>
                        </div>
                    </div>
                    
                </div><!-- /.col-lg-4 -->
<?php endforeach; ?>
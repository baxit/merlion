<?php foreach ($menu as $x):  ?>
  
 <div class="col-lg-6 col-md-6 col-sm-6 pm-column-spacing">
                    <div class="pm-menu-item-container">
                    	<div class="pm-menu-item-img-container" style="background-image:url(img/menu/item1.jpg);">
                        	<div class="pm-menu-item-price"><p><?php echo $x['price'];?> сум</p></div>
                        </div>
                        
                        <div class="pm-menu-item-desc">
                        	<p class="pm-menu-item-title"><?php echo anchor('menu/show/'.$x['id'],$x['title']);?></p>
                            <p class="pm-menu-item-excerpt"><?php echo substr(strip_tags($x['text']),0,200);?></p>
                        </div>
                    </div>
                    
                </div><!-- /.col-lg-4 -->
<?php endforeach; ?> 
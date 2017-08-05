<nav id="mainnav-container">
    <div id="mainnav">
        <!--Menu-->
        <div id="mainnav-menu-wrap">
            <div class="nano">
                <div class="nano-content">
                    <ul id="mainnav-menu" class="list-group">
                        <!--Category name-->
                        <li class="list-header"></li>
            
                        <!--Menu list item-->
                        <li <?php if($page_name=="dashboard"){?> class="active-link" <?php } ?> 
                        	style="border-top:1px solid rgba(69, 74, 84, 0.7);">
                            <a href="<?php echo base_url(); ?>index.php/vendor/">
                                <i class="fa fa-dashboard"></i>
                                
                            </a>
                        </li>
                        
            			<?php
                        	if( $this->crud_model->vendor_permission('product') || 
									$this->crud_model->vendor_permission('stock') ){
						?>
                        <!--Menu list item-->
                        <li <?php if( $page_name=="product" || 
                                            $page_name=="stock" ){?>
                                                 class="active-sub" 
                                                    <?php } ?> >
                            <a href="#">
                                <i class="fa fa-shopping-cart"></i>
                                    <span class="menu-title">
                                        <?php echo translate('my_products');?>
                                    </span>
                                	<i class="fa arrow"></i>
                            </a>
            
                            <!--PRODUCT------------------>
                            <ul class="collapse <?php if( $page_name=="product" || 
                                                            $page_name=="stock" ){?>
                                                                 in
                                                                    <?php } ?> >" >
                                
                                <?php
                                 if($this->crud_model->vendor_permission('product')){
                                ?>
                                    <li <?php if($page_name=="product"){?> class="active-link" <?php } ?> >
                                        <a href="<?php echo base_url(); ?>index.php/vendor/product">
                                        	<i class="fa fa-circle fs_i"></i>
                                            	<?php echo translate('product_list');?>
                                        </a>
                                    </li>
								<?php
									} if($this->crud_model->vendor_permission('stock')){
                                ?>
                                    
								<?php
									}
                                ?>
                            </ul>
                        </li>
                      
            			<?php
							}
						?>  
                        
                        <!--SALE-------------------->

                        
                       
                        
                        <li <?php if($page_name=="manage_vendor"){?> class="active-link" <?php } ?> >
                            <a href="<?php echo base_url(); ?>index.php/vendor/manage_vendor/">
                                <i class="fa fa-lock"></i>
                                <span class="menu-title">
                                	<?php echo translate('manage_vendor_profile');?>
                                </span>
                            </a>
                        </li>
                </div>
            </div>
        </div>
    </div>
</nav>
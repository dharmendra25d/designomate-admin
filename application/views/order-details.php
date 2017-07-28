<!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>Orders</h3>
              </div>

              <div class="title_right">
                <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
                  <div class="input-group">
                    <input type="text" class="form-control" placeholder="Search for...">
                    <span class="input-group-btn">
                      <button class="btn btn-default" type="button">Go!</button>
                    </span>
                  </div>
                </div>
              </div>
            </div>

            <div class="clearfix"></div>
			   <div class="col-md-12">
              <div class="x_panel">
                <div class="x_title">
                  <h2>Customer Info</h2>
               
                  <div class="clearfix"></div>
                </div>
                <div class="x_content">
                  <ul class="list-unstyled msg_list">
                    <li>
                  <span>Name: <?php echo $details->first_name.' '.$details->last_name;?></span>  </li>
                         <li>  <span>Email: <?php echo $details->email;?></span>  </li>
						  <li>  <span>Phone: <?php echo $details->phone;?></span>  </li>
						   <li>  <span>Address line 1: <?php echo $details->address;?></span>  </li>
						    <li>  <span>Address line 2: <?php echo $details->street_address;?></span>  </li>
							 <li>  <span>City: <?php echo $details->city;?></span>  </li>
							  <li>  <span>Country: <?php echo $details->country;?></span>  </li>
							  <li>  <span>Zipcode: <?php echo $details->zip_code;?></span>  </li>
                    
                  </ul>
				   <div class="x_title">
                  <h2>Orders Details</h2>
               
                  <div class="clearfix"></div></div>
				    <ul class="list-unstyled msg_list">
                    <li>
                  <span>Date: <?php echo $details->order_date;?></span>  </li>
                         <li>  <span>Order Id: <?php echo $details->id;?></span>  </li>
						  <?php if($details->plan_id!=0) { ?>
						   <li>  <span>Plans name: <?php $plans=plansDetail($details->plan_id); echo $plans->plan_name;?></span>  </li>
						  <?php } ?>
						  <?php if($details->theme_id!=0) { ?>
						   <li>  <span>Theme name: <?php $theme=themesDetail($details->theme_id); echo $theme->theme_name;?></span>  </li>
						  <?php } ?>
						   <?php if($details->addons_id!=0) {  ?>
						   <li>  <span>Addons: </span> 
						   <?php $ids = explode(',', $details->addons_id); 
							foreach($ids as $id) {
								if(!empty($id)) :
								 $addons=addonsDetail($id); echo '<br>'.$addons->addon_name;
								endif;	
							 
							 }?>
						  <?php } ?>
						    
							 <li>  <span>Customer Note: <?php echo $details->customer_note;?></span>  </li>
                    
                  </ul>
                </div>
                </div>
              </div>
            </div>
           
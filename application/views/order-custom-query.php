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
				  <?php $user = usersDetail($details->user_id); ?>
                    <li>
                  <span>Name: <?php echo $user->fname.' '.$user->lname;?></span>  </li>
                         <li>  <span>Email: <?php echo $user->email;?></span>  </li>
						  <li>  <span>Phone: <?php echo $user->phone;?></span>  </li>
						   <li>  <span>Address line 1: <?php echo $user->address;?></span>  </li>
						    <li>  <span>Address line 2: <?php echo $user->street_address;?></span>  </li>
							 <li>  <span>City: <?php echo $user->city;?></span>  </li>
							  <li>  <span>Country: <?php echo $user->country;?></span>  </li>
							  <li>  <span>Zipcode: <?php echo $user->zip_code;?></span>  </li>
                    
                  </ul>
				   <div class="x_title">
                  <h2>Custom Orders Details</h2>
               
                  <div class="clearfix"></div></div>
				    <ul class="list-unstyled msg_list">
                    <li>
                  <span>Date: <?php echo $details->order_date;?></span>  </li>
				  <li>  <span>Order Id:  <?php echo $details->id;?></span>  </li>
						<li>  <span>Do you have domain? <br> <?php echo $details->question1;?></span> 
						</li>
						<li>  <span>Do you have any preferred color scheme?  <br><?php echo $details->question2;?></span>  </li>
						<li>  <span>Have professional product pictures or need our help? <br><?php echo $details->question3;?></span>  </li>
						<li>  <span>How would you ship your products - UPS, USPS or through any other Fulfillment company? <br> <?php echo $details->question4;?></span>  </li>
						<li>  <span>Will there be any subscription content? <br><?php echo $details->question5;?></span>  </li>

                  </ul>
                </div>
                </div>
              </div>
            </div>
           
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
			   <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Custom Orders List</h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                      <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                        <ul class="dropdown-menu" role="menu">
                          <li><a href="#">Settings 1</a>
                          </li>
                          <li><a href="#">Settings 2</a>
                          </li>
                        </ul>
                      </li>
                      <li><a class="close-link"><i class="fa fa-close"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>

                  <div class="x_content">


                    <div class="table-responsive">
                      <table class="table table-striped jambo_table bulk_action">
                        <thead>
                          <tr class="headings">
                            <th class="column-title">Order ID </th>
							<th class="column-title">Order Date </th>
                            <th class="column-title">Customer Name </th>
                            <th class="column-title">Email </th>
							<th class="column-title">Phone</th>
                            <th class="column-title no-link last"><span class="nobr">Action</span>
                            </th>
                            <th class="bulk-actions" colspan="7">
                              <a class="antoo" style="color:#fff; font-weight:500;">Bulk Actions ( <span class="action-cnt"> </span> ) <i class="fa fa-chevron-down"></i></a>
                            </th>
                          </tr>
                        </thead>

                        <tbody>
                         
							<?php
							foreach($list as $order) { 
							 $user = usersDetail($order->user_id);  ?>
							 <tr class="even pointer">
                            <td class=" "><?php echo $order->id;?></td>
							<td class=" "><?php echo $order->order_date;?></td>
							
							<td class=" "><?php echo $user->fname;?> <?php echo $user->lname;?></td>
						
							<td class=" "><?php echo $user->email;?></td>
							<td class=" "><?php echo $user->phone;?></td>
                           <td class="last"><a href="<?php echo base_url();?>orders/queriesDetails?id=<?php echo $order->id; ?>">View order</a>
							    </tr>
							<?php }?>
                           
                           
                         
                        </tbody>
                      </table>
                    </div>
							
						
                  </div>
                </div>
              </div>
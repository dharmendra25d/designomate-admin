<!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>themes</h3>
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
                    <h2>Themes List</h2>
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
                           
                            <th class="column-title">Theme </th>
                            <th class="column-title">Description </th>
                            <th class="column-title">Price </th>
                            <th class="column-title">Screenshot</th>
							<th class="column-title">Theme Link</th>
                            <th class="column-title no-link last"><span class="nobr">Action</span>
                            </th>
                            <th class="bulk-actions" colspan="7">
                              <a class="antoo" style="color:#fff; font-weight:500;">Bulk Actions ( <span class="action-cnt"> </span> ) <i class="fa fa-chevron-down"></i></a>
                            </th>
                          </tr>
                        </thead>

                        <tbody>
                         
							<?php
							foreach($list as $theme) { ?>
							 <tr class="even pointer">
                            <td class=" "><?php echo $theme->theme_name;?></td>
							<td class=" "><?php echo $theme->theme_desc;?></td>
							<td class=" "><?php echo $theme->theme_price;?></td>
							<td class=" "><?php echo $theme->theme_link;?></td>
							<td class=" "><?php echo $theme->theme_screenshot_link;?></td>
                            <td class="last"><a href="edit?id=<?php echo $theme->id; ?>">Edit / </a><a href="del?id=<?php echo $theme->id; ?>">Delete</a>
							    </tr>
							<?php }?>
                           
                           
                         
                        </tbody>
                      </table>
                    </div>
							
						
                  </div>
                </div>
              </div>
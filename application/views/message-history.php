 <!-- page content -->
        <div class="right_col" role="main">
          <div class="">

            <div class="page-title">
              <div class="title_left">
                <h3>Alerts</h3>
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

            <div class="row">
              <div class="col-md-12">
                <div class="x_panel">
                  <div class="x_title">
                    
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <div class="row">
                      <div class="col-sm-3 mail_list_column">
						<?php	foreach($messages as $msg) { ?>
                        <a href="<?php echo site_url();?>messages/history/?msg=<?php echo $msg->id; ?>">
                          <div class="mail_list open">
                            <div class="left">
                              <i class="fa fa-circle"></i> 
                            </div>
                            <div class="right">
                              <h3><?php $user = usersDetailbyemail($msg->user); if(!empty($user->fname)) echo $user->fname.' '.$user->lname ;?><small><?php echo $msg->date;?></small></h3>
                              <p><?php echo word_limiter($msg->message, 15);?></p>
                            </div>
                          </div>
                        </a>
						<?php } ?>
                       
                      </div>
                      <!-- /MAIL LIST -->

                      <!-- CONTENT MAIL -->
					  <?php if(isset($_GET['msg'])) {
						$msgs = $single_message;
					 ?>
                      <div class="col-sm-9 mail_view">
                        <div class="inbox-body">
                          <div class="mail_heading row">
                            <div class="col-md-8">
                             
                            </div>
                            <div class="col-md-4 text-right">
                              <p class="date"><?php echo $msgs->date;?></p>
                            </div>
                            <div class="col-md-12">
                              <h4><?php $user = usersDetailbyemail($msg->user); if(!empty($user->fname)) echo $user->fname.' '.$user->lname ;?></h4>
                            </div>
                          </div>
                         
                          <div class="view-mail">
                            <p><?php echo $msgs->message;?> </p>
                             </div>
                         
                          
                        </div>

                      </div>
                      <!-- /CONTENT MAIL -->
					  <?php } else {
					  ?>
					    <div class="col-sm-9 mail_view">
                        <div class="inbox-body">
                          <div class="mail_heading row">
                            <div class="col-md-8">
                             
                            </div>
                          
                            <div class="col-md-12">
                            
                            </div>
                          </div>
                         
                          <div class="view-mail center">
						    <h1 style="padding: 20%;">You Sent <?php echo count($messages);?> Messages!</h4>
                           </div>
                         
                          
                        </div>

                      </div>
					  <?php }?>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- /page content -->
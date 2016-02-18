<?php 
	$read_comments_number = 1;
	$mailbox_controls = '<!-- Check all button -->
		                <button type="button" class="btn btn-default btn-sm checkbox-toggle"><i class="fa fa-square-o"></i>
		                </button>
		                <div class="btn-group">
		                  <button type="button" class="btn btn-default btn-sm"><i class="fa fa-trash-o"></i></button>
		                  <button type="button" class="btn btn-default btn-sm"><i class="fa fa-reply"></i></button>
		                  <button type="button" class="btn btn-default btn-sm"><i class="fa fa-share"></i></button>
		                </div>
		                <!-- /.btn-group -->
		                <button type="button" class="btn btn-default btn-sm"><i class="fa fa-refresh"></i></button>
		                <div class="pull-right">
		                  1-50/200
		                  <div class="btn-group">
		                    <button type="button" class="btn btn-default btn-sm"><i class="fa fa-chevron-left"></i></button>
		                    <button type="button" class="btn btn-default btn-sm"><i class="fa fa-chevron-right"></i></button>';
 ?>
<!-- TEMPORARY MAILBOX FILE -->
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
	<div class="container">
	  <section class="content-header">  
	    <h1>WebMail</h1>
	    <ol class="breadcrumb">
	        <li><a href="/"><i class="fa fa-dashboard"></i> Top</a></li>
	        <li class="active">Mailbox</li>
	    </ol>
	  </section>
	  <!-- Main content -->

	  <section class="content">
		  <div class="row">
		    <div class="col-md-12">
		          <div class="box box-success">
		            <div class="box-header with-border">
		              <h3 class="box-title">Inbox</h3>
		              <div class="box-tools pull-right">
		                <div class="has-feedback">
		                  <input type="text" class="form-control input-sm" placeholder="Search Mail">
		                  <span class="glyphicon glyphicon-search form-control-feedback"></span>
		                </div>
		              </div>
		              <!-- /.box-tools -->
		            </div>
		            <!-- /.box-header -->
		            <div class="box-body no-padding">
		              <div class="mailbox-controls">
		              <?php echo $mailbox_controls; ?>
		                  </div>
		                  <!-- /.btn-group -->
		                </div>
		                <!-- /.pull-right -->
		              </div>
		              <div class="table-responsive mailbox-messages">
		                <table class="table table-hover table-striped">
		                  <tbody>
		                  <tr data-href="?page=Mailbox&mb=<?= $read_comments_number++; ?>">
		                    <td><?= $read_comments_number - 1; ?></td>
		                    <td class="mailbox-name">Alexander Pierce</td>
		                    <td class="mailbox-subject"><strong>Computer Issue</strong> - Trying to find a solution to this problem...
		                    </td>
		                    <td class="mailbox-attachment"></td>
		                    <td class="mailbox-date">5 mins ago</td>
		                  </tr>
		                  <tr data-href="?page=Mailbox&mb=<?= $read_comments_number++; ?>">
		                    <td><?= $read_comments_number - 1; ?></td>		                    
		                    <td class="mailbox-name">Alexander Pierce</td>
		                    <td class="mailbox-subject"><strong>Computer Issue</strong> - Trying to find a solution to this problem...
		                    </td>
		                    <td class="mailbox-attachment"><i class="fa fa-paperclip"></i></td>
		                    <td class="mailbox-date">28 mins ago</td>
		                  </tr>
		                  <tr data-href="?page=Mailbox&mb=<?= $read_comments_number++; ?>">
		                    <td><?= $read_comments_number - 1; ?></td>
		                    <td class="mailbox-name">Alexander Pierce</td>
		                    <td class="mailbox-subject"><strong>Computer Issue</strong> - Trying to find a solution to this problem...
		                    </td>
		                    <td class="mailbox-attachment"><i class="fa fa-paperclip"></i></td>
		                    <td class="mailbox-date">11 hours ago</td>
		                  </tr>
		                  <tr data-href="?page=Mailbox&mb=<?= $read_comments_number++; ?>">
		                    <td><?= $read_comments_number - 1; ?></td>
		                    <td class="mailbox-name">Alexander Pierce</td>
		                    <td class="mailbox-subject"><strong>Computer Issue</strong> - Trying to find a solution to this problem...
		                    </td>
		                    <td class="mailbox-attachment"></td>
		                    <td class="mailbox-date">15 hours ago</td>
		                  </tr>
		                  <tr data-href="?page=Mailbox&mb=<?= $read_comments_number++; ?>">
		                    <td><?= $read_comments_number - 1; ?></td>
		                    <td class="mailbox-name">Alexander Pierce</td>
		                    <td class="mailbox-subject"><strong>Computer Issue</strong> - Trying to find a solution to this problem...
		                    </td>
		                    <td class="mailbox-attachment"><i class="fa fa-paperclip"></i></td>
		                    <td class="mailbox-date">Yesterday</td>
		                  </tr>
		                  <tr data-href="?page=Mailbox&mb=<?= $read_comments_number++; ?>">
		                    <td><?= $read_comments_number - 1; ?></td>		                    
		                    <td class="mailbox-name">Alexander Pierce</td>
		                    <td class="mailbox-subject"><strong>Computer Issue</strong> - Trying to find a solution to this problem...
		                    </td>
		                    <td class="mailbox-attachment"><i class="fa fa-paperclip"></i></td>
		                    <td class="mailbox-date">2 days ago</td>
		                  </tr>
		                  <tr data-href="?page=Mailbox&mb=<?= $read_comments_number++; ?>">
		                    <td><?= $read_comments_number - 1; ?></td>		                  
		                    <td class="mailbox-name">Alexander Pierce</td>
		                    <td class="mailbox-subject"><strong>Computer Issue</strong> - Trying to find a solution to this problem...
		                    </td>
		                    <td class="mailbox-attachment"><i class="fa fa-paperclip"></i></td>
		                    <td class="mailbox-date">2 days ago</td>
		                  </tr>
		                  <tr data-href="?page=Mailbox&mb=<?= $read_comments_number++; ?>">
		                    <td><?= $read_comments_number - 1; ?></td>
		                    <td class="mailbox-name">Alexander Pierce</td>
		                    <td class="mailbox-subject"><strong>Computer Issue</strong> - Trying to find a solution to this problem...
		                    </td>
		                    <td class="mailbox-attachment"></td>
		                    <td class="mailbox-date">2 days ago</td>
		                  </tr>
		                  <tr data-href="?page=Mailbox&mb=<?= $read_comments_number++; ?>">
		                    <td><?= $read_comments_number - 1; ?></td>
		                    <td class="mailbox-name">Alexander Pierce</td>
		                    <td class="mailbox-subject"><strong>Computer Issue</strong> - Trying to find a solution to this problem...
		                    </td>
		                    <td class="mailbox-attachment"></td>
		                    <td class="mailbox-date">2 days ago</td>
		                  </tr>
		                  <tr data-href="?page=Mailbox&mb=<?= $read_comments_number++; ?>">
		                    <td><?= $read_comments_number - 1; ?></td>		                    
		                    <td class="mailbox-name">Alexander Pierce</td>
		                    <td class="mailbox-subject"><strong>Computer Issue</strong> - Trying to find a solution to this problem...
		                    </td>
		                    <td class="mailbox-attachment"></td>
		                    <td class="mailbox-date">2 days ago</td>
		                  </tr>
		                  <tr data-href="?page=Mailbox&mb=<?= $read_comments_number++; ?>">
		                    <td><?= $read_comments_number - 1; ?></td>		                  
		                    <td class="mailbox-name">Alexander Pierce</td>
		                    <td class="mailbox-subject"><strong>Computer Issue</strong> - Trying to find a solution to this problem...
		                    </td>
		                    <td class="mailbox-attachment"><i class="fa fa-paperclip"></i></td>
		                    <td class="mailbox-date">4 days ago</td>
		                  </tr>
		                  <tr data-href="?page=Mailbox&mb=<?= $read_comments_number++; ?>">
		                    <td><?= $read_comments_number - 1; ?></td>
		                    <td class="mailbox-name">Alexander Pierce</td>
		                    <td class="mailbox-subject"><strong>Computer Issue</strong> - Trying to find a solution to this problem...
		                    </td>
		                    <td class="mailbox-attachment"></td>
		                    <td class="mailbox-date">12 days ago</td>
		                  </tr>
		                  <tr data-href="?page=Mailbox&mb=<?= $read_comments_number++; ?>">
		                    <td><?= $read_comments_number - 1; ?></td>
		                    
		                    <td class="mailbox-name">Alexander Pierce</td>
		                    <td class="mailbox-subject"><strong>Computer Issue</strong> - Trying to find a solution to this problem...
		                    </td>
		                    <td class="mailbox-attachment"><i class="fa fa-paperclip"></i></td>
		                    <td class="mailbox-date">12 days ago</td>
		                  </tr>
		                  <tr data-href="?page=Mailbox&mb=<?= $read_comments_number++; ?>">
		                    <td><?= $read_comments_number - 1; ?></td>
		                    <td class="mailbox-name">Alexander Pierce</td>
		                    <td class="mailbox-subject"><strong>Computer Issue</strong> - Trying to find a solution to this problem...
		                    </td>
		                    <td class="mailbox-attachment"><i class="fa fa-paperclip"></i></td>
		                    <td class="mailbox-date">14 days ago</td>
		                  </tr>
		                  <tr data-href="?page=Mailbox&mb=<?= $read_comments_number++; ?>">
		                    <td><?= $read_comments_number - 1; ?></td>
		                    <td class="mailbox-name">Alexander Pierce</td>
		                    <td class="mailbox-subject"><strong>Computer Issue</strong> - Trying to find a solution to this problem...
		                    </td>
		                    <td class="mailbox-attachment"><i class="fa fa-paperclip"></i></td>
		                    <td class="mailbox-date">15 days ago</td>
		                  </tr>
		                  </tbody>
		                </table>
		                <!-- /.table -->
		              </div>
		              <!-- /.mail-box-messages -->
		            </div>
		            <!-- /.box-body -->
		        <div class="box-footer no-padding">
	              <div class="mailbox-controls">
	                <?php echo $mailbox_controls; ?>
	              </div>
	                  <!-- /.btn-group -->
	           </div>
	                <!-- /.pull-right -->
	          </div>
	        </div>
	       </div>
	          <!-- /. box -->
	      </div>
	        <!-- /.col -->
	     </div>
	      <!-- /.row -->
	  </section>
	   <!-- /.content -->
	</div><!-- /.content-wrapper -->
</div>
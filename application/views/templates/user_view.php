<?php $this->load->view('templates/headersidebar_view'); ?>
                </div>
                </div>
                <div class="static-content-wrapper">
                    <div class="static-content">
                        <div class="page-content">
                            <ol class="breadcrumb">
                                
							<li><a href="index.html">Home</a></li>
							<li><a href="#">Devices</a></li>
							<li class="active"><a href="tables-data.html">Our Devices</a></li>

                            </ol>
                            <div class="container-fluid">
                                
    <div class="row">
        <div class="col-md-12">
            <div class="alert alert-info">
                Create a new entry or simply select a row to edit the data.
                <button type="button" class="close" data-dismiss="alert">&times;</button>
            </div>
            <div class="panel panel-default" id="panel-editable">
                <div class="panel-heading">
                    <h2>Form Tables Editing</h2>
                    <div class="panel-ctrls"></div>
                </div>
                <div class="panel-body no-padding">
                
                    <table cellpadding="0" cellspacing="0" border="0" class="table table-striped table-bordered datatables" id="usertable">
                        <thead>
                            <tr>
                                <th width="5%">ID</th>
                                <th width="10%">Server</th>
                                <th width="20%">Name</th>
                                <th width="18%">Address</th>
                                <th width="20%">MAC Address</th>
                                <th width="12%">Profile</th>
                                <th width="15%">Uptime</th>
                            </tr>
                        </thead>
                    </table>
                    <!--end table-->
                    
                </div>
                <div class="panel-footer"></div>
            </div>
        </div>
    </div>

                            </div> <!-- .container-fluid -->
                        </div> <!-- #page-content -->
                    </div>
                    <footer role="contentinfo">
    <div class="clearfix">
        <ul class="list-unstyled list-inline pull-left">
            <li><h6 style="margin: 0;">&copy; 2015 Avenxo</h6></li>
        </ul>
        <button class="pull-right btn btn-link btn-xs hidden-print" id="back-to-top"><i class="ti ti-arrow-up"></i></button>
    </div>
</footer>

                </div>
            </div>
        </div>

    
    

<!-- Modal -->
<!-- Modal Add Device-->
     <!--  <form id="add-row-form" action="<?php echo site_url('discover/addDevice')?>" method="post">
         <div class="modal fade" id="ModalAddDevice" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog">
               <div class="modal-content">
                   <div class="modal-header">
                       <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                       <h4 class="modal-title" id="myModalLabel">Add Device</h4>
                   </div>
                   <div class="modal-body">
                                                 <strong>Anda yakin mau menambahkan device ini?</strong><br>
                                                 <strong>Device ID</strong><br>
                                                 <input type="input" name="device_id" class="form-control" readonly>
                                                 <strong>Identity</strong><br>
                                                 <input type="input" name="device_identity" class="form-control" readonly>
                                                 <strong>Mac-Address</strong><br>
                                                 <input type="input" name="device_MAC" class="form-control" readonly>
                                                 <strong>IP-Address</strong><br>
                                                 <input type="input" name="device_IPv4" class="form-control" readonly>
                                                 <strong>OS Version</strong><br>
                                                 <input type="input" name="device_OSVersion" class="form-control" readonly>
                   </div>
                   <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        <button type="submit" id="add-row" class="btn btn-success">Add</button>
                   </div>
                    </div>
            </div>
         </div>
     </form> -->

<!-- /Switcher -->
    <!-- Load site level scripts -->

<!-- <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<script src="//ajax.googleapis.com/ajax/libs/jqueryui/1.9.2/jquery-ui.min.js"></script> -->

<?php $this->load->view('templates/footer_view'); ?>


<!-- End loading site level scripts -->
    
    <!-- Load page level scripts-->
    
 <!-- Load page level scripts-->
    
<script type="text/javascript" src="<?php echo base_url('')?>assets/plugins/datatables/jquery.dataTables.js"></script>                            <!-- Data Tables -->
<script type="text/javascript" src="<?php echo base_url('')?>assets/plugins/datatables/TableTools.js"></script>                                   <!-- TableTools -->
<script type="text/javascript" src="<?php echo base_url('')?>assets/plugins/jquery-editable/jquery.editable.js"></script>                         <!-- jQuery Editable -->
<script type="text/javascript" src="<?php echo base_url('')?>assets/plugins/datatables/dataTables.editor.js"></script>                            <!-- Data Tables Editor-->
<script type="text/javascript" src="<?php echo base_url('')?>assets/plugins/datatables/dataTables.editor.bootstrap.js"></script>                  <!-- Data Tables Editor for Bootstrap-->
<script type="text/javascript" src="<?php echo base_url('')?>assets/plugins/datatables/dataTables.bootstrap.js"></script>                         <!-- Bootstrap Support for Datatables -->

<script type="text/javascript" src="<?php echo base_url('')?>assets/demo/demo-tableeditable.js"></script> 

    <!-- End loading page level scripts-->
<script type="text/javascript">
		 $('#usertable').dataTable({
				"processing" : true,
				"severSide"  : true,
				"order" : [],
				"ajax" : {
					"url" : "<?php echo site_url('hotspot/usersJSON') ?>",
					"type" : "POST",   
					"dataType" : "JSON"
				},
				// "columnDefs": [
		  //       { 
		  //           "targets": [ 0 ], //first column / numbering column
		  //           "orderable": false, //set not orderable
		  //       },
		  //       ],
		  		"columns" : [
                {"data" : "data_id"},
		  		// {"data" : "data_server"},
		  		{"data" : "data_name"},
		  		// {"data" : "data_address"},
		  		// {"data" : "data_mac"},
      //           {"data" : "data_profile"},
                {"data" : "data_uptime"},
		  		],

			});

		 	// $('#findDevices').on('click','.add_device',function(){
		 	// var device_id=$(this).data('id');
		 	// var device_identity=$(this).data('identity');
		 	// var device_MAC=$(this).data('mac');
		 	// var device_IPv4=$(this).data('ip');
		 	// var device_OSVersion=$(this).data('version');
    //         $('#ModalAddDevice').modal('show');
	   //          $('[name="device_id"]').val(device_id);
	   //          $('[name="device_identity"]').val(device_identity);
	   //          $('[name="device_MAC"]').val(device_MAC);
	   //          $('[name="device_IPv4"]').val(device_IPv4);
	   //          $('[name="device_OSVersion"]').val(device_OSVersion);
    //   		});
			
			// table: var table = $('#findDevices').DataTable();
   //          $('#findDevices tbody').on('click', ' tr', function() {
   //              var data = table.row(this).data();
   //            console.log('API row values : ', data );
   //          })

		// function modal(){
			
		// 	$('#modal_form').modal('show');
			
		// }

	</script>
    <!-- End loading page level scripts-->

    </body>
</html>
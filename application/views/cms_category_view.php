<!DOCTYPE html>
<html lang="en">
  
<head>
    <?= $cms_header; ?>
  </head>

  <body>

    <!-- ########## START: LEFT PANEL ########## -->
    <?= $cms_left_panel; ?>
    <!-- ########## END: LEFT PANEL ########## -->

    <!-- ########## START: HEAD PANEL ########## -->
    <?= $cms_top_bar; ?>
    <!-- ########## END: HEAD PANEL ########## -->

    <!-- ########## START: RIGHT PANEL ########## -->
    <?= $cms_right_panel; ?>
    <!-- ########## END: RIGHT PANEL ########## -->

    <!-- ########## START: MAIN PANEL ########## -->
    <div class="sl-mainpanel">
      <nav class="breadcrumb sl-breadcrumb">
        <a class="breadcrumb-item" href="index.html">Starlight</a>
        <a class="breadcrumb-item" href="index.html">Tables</a>
        <span class="breadcrumb-item active">Data Table</span>
      </nav>

      <div class="sl-pagebody">
        <div class="sl-page-title">
          <h5>Establishment Category</h5>
        </div><!-- sl-page-title -->

        <div class="card pd-20 pd-sm-40">
        <div class="col-md-3 pd-0 pd-b-20 pd-sm-b-20">
            <button class="btn btn-primary btn-block" id="add_category"><i class="fa fa-plus mg-r-10"></i> Add New Category</button>
        </div>
          <div class="table-wrapper">
            <table id="tbl_main_category" class="table display table-responsive wrap">
              <thead>
                <tr>
                  <th class="wd-80p">Category</th>
                  <th class="wd-20p text-center">Action</th>
                </tr>
              </thead>
              <tbody>
                
              </tbody>
            </table>
          </div><!-- table-wrapper -->
        </div><!-- card -->
      </div><!-- sl-pagebody -->

      <!-- START: FOOTER -->
        <?= $cms_footer; ?>
      <!-- END: FOOTER -->

      <!-- LARGE MODAL -->
        <div id="modal_new_category" class="modal fade">
          <div class="modal-dialog modal-lg" role="dialog">
            <div class="modal-content tx-size-sm">
              <div class="modal-header pd-y-20 pd-x-25">
                <div class="col-md-12">
                  <h6 class="tx-14 mg-b-0 tx-uppercase tx-inverse tx-bold">Create Establishment Category</h6>
                </div>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body pd-25">
                <form id="frm_category" role="form">
                  <div class="row">
                    <div class="col-md-12">
                      <div class="form-group">
                        <label>* Category Name :</label>
                          <div class="input-group">
                            <span class="input-group-addon">
                              <i class="fa fa-user"></i>
                            </span>
                            <input type="text" name="est_category_name" class="form-control" placeholder="Establishment Category">
                          </div>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-12">
                      <div class="form-group">
                        <label>* Category Description :</label>
                          <div class="input-group">
                            <span class="input-group-addon">
                              <i class="fa fa-user"></i>
                            </span>
                            <input type="text" name="est_category_desc" class="form-control" placeholder="Category Description">
                          </div>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-12">
                      <div class="form-group">
                        <label>* Category Link :</label>
                          <div class="input-group">
                            <span class="input-group-addon">
                              <i class="fa fa-user"></i>
                            </span>
                            <input type="text" name="est_category_link" class="form-control" placeholder="Category Link">
                          </div>
                      </div>
                    </div>
                  </div>
                </form>
              </div>
              <div class="modal-footer">
                <button type="button" id="btn_save" class="btn btn-info pd-x-20"><span></span> Save changes</button>
                <button type="button" id="btn_close" class="btn btn-secondary pd-x-20" data-dismiss="modal">Close</button>
              </div>
            </div>
          </div><!-- modal-dialog -->
        </div><!-- modal -->

        <!-- Delete Modal -->
        <div id="modal_confirmation" class="modal fade" tabindex="-1" role="dialog"><!--modal-->
          <div class="modal-dialog modal-lg">
            <div class="modal-content">
              <div class="modal-header pd-y-20 pd-x-25">
                <div class="col-md-12">
                  <h6 class="tx-14 mg-b-0 tx-uppercase tx-inverse tx-bold">Confirm Deletion</h6>
                </div>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                  <p id="modal-body-message">Are you sure ?</p>
              </div>
              <div class="modal-footer">
                  <button id="btn_yes" type="button" class="btn btn-danger" data-dismiss="modal">Yes</button>
                  <button id="btn_close" type="button" class="btn btn-default" data-dismiss="modal">No</button>
              </div>
            </div>
          </div>
        </div><!---modal-->




    </div><!-- sl-mainpanel -->
    <!-- ########## END: MAIN PANEL ########## -->
      
    <!-- <?= $cms_js; ?> -->
    <script src="assets/frontend-assets/lib/jquery/jquery.js"></script>
    <script src="assets/frontend-assets/lib/popper.js/popper.js"></script>
    <script src="assets/frontend-assets/lib/bootstrap/bootstrap.js"></script>
    <script src="assets/frontend-assets/lib/perfect-scrollbar/js/perfect-scrollbar.jquery.js"></script>
    <script src="assets/frontend-assets/lib/highlightjs/highlight.pack.js"></script>
    <script src="assets/frontend-assets/lib/datatables/jquery.dataTables.js"></script>
    <script src="assets/frontend-assets/lib/datatables-responsive/dataTables.responsive.js"></script>
    <script src="assets/frontend-assets/lib/select2/js/select2.min.js"></script>


    <script src="assets/frontend-assets/lib/jquery-ui/jquery-ui.js"></script>
    <script src="assets/frontend-assets/lib/perfect-scrollbar/js/perfect-scrollbar.jquery.js"></script>
    <script src="assets/frontend-assets/lib/d3/d3.js"></script>
    

    <script src="assets/frontend-assets/js/starlight.js"></script>
    <script>
      $(function(){
        //'use strict';

        /*$('#tbl_main_category').DataTable({
          responsive: true,
          language: {
            searchPlaceholder: 'Search...',
            sSearch: '',
            lengthMenu: '_MENU_ items/page',
          }
        });*/

        // Select2
        /*$('.dataTables_length select').select2({ minimumResultsForSearch: Infinity });*/

      });
    </script>

    <script type="text/javascript">   
        $(document).ready(function(){
          var dt; var _txnMode; var _selectedID; var _selectRowObj;


// @@@@@@@@@@@@@@@@    DATATABLE   @@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@
          var initializeControls=function() {
            dt=$('#tbl_main_category').DataTable({
                //"dom": '<"toolbar">frtip',
                "bLengthChange":true,
                //"pageLength":15,
                "language": {
                     searchPlaceholder: "Search Category",
                     sSearch: '',
                     lengthMenu: '_MENU_ items/page'
                 },
                "ajax" : "Admin_Category/process/list",
                "columns": [
                    /*{
                        "targets": [0],
                        "class":          "details-control",
                        "orderable":      false,
                        "data":           null,
                        "defaultContent": ""
                    },*/
                    { targets:[0],data: "est_category_name" },
                    {
                        targets:[1],
                        render: function (data, type, full, meta){
                            var btn_edit='<button class="btn btn-primary btn-circle btn-sm" name="edit_info" data-toggle="tooltip" data-placement="top" title="Edit" style="margin-left:-5px;"><i class="fa fa-pencil"></i> </button>';
                            var btn_trash='<button class="btn btn-danger btn-circle btn-sm" id="remove_info" name="remove_info" data-toggle="tooltip" data-placement="top" title="Move to trash" style="margin-right:-5px;"><i class="fa fa-trash-o"></i></button>';

                            return '<center>'+btn_edit+'&nbsp;'+btn_trash+'</center>';
                        }
                    }
                ]
            });              
          }();

// @@@@@@@@@@@@@@@@    END OF DATATABLE   @@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@

// ####################################################################################
// ####################################################################################

// @@@@@@@@@@@@@@@@    ACTIONS   @@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@

          // Add New Category
          $('#add_category').click(function(){
            _txnMode="new";
            $('#modal_new_category').modal('show');
          });
          // End

          // Edit Category
          $('#tbl_main_category tbody').on('click','button[name="edit_info"]',function(){
            _txnMode="edit";

            $('#modal_new_category').modal('show');
            _selectRowObj=$(this).closest('tr');
            var data=dt.row(_selectRowObj).data();
            _selectedID=data.est_category_id;

            $('input,textarea').each(function(){
              var _elem=$(this);
              $.each(data,function(name,value){
                if(_elem.attr('name')==name){
                    _elem.val(value);
                }
              });
            });
          });
          // End

          // Submit Category
          $('#btn_save').click(function(){
            if(validateRequiredFields($('#frm_category'))){
              if(_txnMode=="new"){
                //alert('new');
                createCategory().done(function(response){
                    //showNotification(response);
                    dt.row.add(response.row_added[0]).draw();
                    
                }).always(function(){
                    showSpinningProgress($('#btn_save'));
                    $('#modal_new_category').modal('hide');
                    clearFields($('#frm_category'));
                });
              }else{
                //alert('edit');
                updateCategory().done(function(response){
                    //showNotification(response);
                    dt.row(_selectRowObj).data(response.row_updated[0]).draw();
                }).always(function(){
                    showSpinningProgress($('#btn_save'));
                    $('#modal_new_category').modal('hide');
                    clearFields($('#frm_category'));
                });
              }
            }
          });
          // End

          // Delete Category
          $('#tbl_main_category tbody').on('click','button[name="remove_info"]',function(){
            $('#modal_confirmation').modal('show');
            _selectRowObj=$(this).closest('tr');
            var data=dt.row(_selectRowObj).data();
            _selectedID=data.est_category_id;
          });

          $('#btn_yes').click(function(){
            removeCategory().done(function(response){
              //showNotification(response);
              if(response.stat == 'success') {
                  dt.row(_selectRowObj).remove().draw();
              }
            });
          });
          // End

          // Close Modal
          $('#btn_close_new_department').click(function() {
            $('#modal_new_category').modal('hide');
          });
          
          $('#btn_cancel').click(function(){
            //showList(true);
          });
          // End

// @@@@@@@@@@@@@@@@    END OF ACTIONS   @@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@

// ####################################################################################
// ####################################################################################

// @@@@@@@@@@@@@@@@    USER DEFINE   @@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@

          // Create Category
          var createCategory=function(){
            var _data=$('#frm_category').serializeArray();

            return $.ajax({
              "dataType":"json",
              "type":"POST",
              "url":"Admin_Category/process/insert",
              "data":_data,
              "beforeSend": showSpinningProgress($('#btn_save'))
            });
          };
          // End

          // Update Category
          var updateCategory=function(){
            var _data=$('#frm_category').serializeArray();
            _data.push({name : "est_category_id" ,value : _selectedID});

            return $.ajax({
              "dataType":"json",
              "type":"POST",
              "url":"Admin_Category/process/update",
              "data":_data,
              "beforeSend": showSpinningProgress($('#btn_save'))
            });
          };
          // End

          // Remove Category
          var removeCategory=function() {
            return $.ajax({
                "dataType":"json",
                "type":"POST",
                "url":"Admin_Category/process/delete",
                "data":{est_category_id : _selectedID}
            });
          };
          // End

          // Validate Form
          var validateRequiredFields=function(){
            var stat=true;

            $('div.form-group').removeClass('has-error');
              $('input[required],textarea','#frm_category').each(function(){
                if($(this).val()==""){
                  showNotification({title:"Error!",stat:"error",msg:$(this).data('error-msg')});
                  $(this).closest('div.form-group').addClass('has-error');
                  stat=false;
                  return false;
                }
              });
            return stat;
          };
          // End

          // Clear Textboxes
          var clearFields=function(){
            $('input,textarea').val('');
            $(f).find('input:first').focus();
          };
          // End

          // Spinning Progress
          var showSpinningProgress=function(e){
            $(e).find('span').toggleClass('fa fa-spinner fa-spin');
          };
          // End

          // Show Notification
          var showNotification=function(obj){
            PNotify.removeAll();
            new PNotify({
                title:  obj.title,
                text:  obj.msg,
                type:  obj.stat
            });
          };
          // End

          var showList=function(b){
            if(b){
              /*$('#div_card_list').show();
              $('#div_card_fields').hide();*/
            }else{
              /*$('#div_card_list').hide();
              $('#div_card_fields').show();*/
            }
          };

// @@@@@@@@@@@@@@@@    END OF USER DEFINE   @@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@







        });
    </script>
  </body>

</html>


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

</html>

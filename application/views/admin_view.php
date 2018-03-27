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
        <a class="breadcrumb-item" href="index.html">Admin</a>
        <span class="breadcrumb-item active">Dashboard</span>
      </nav>

      <div class="sl-pagebody">
        <div class="sl-page-title">
          <h5>Test</h5>
          <p>Lorem Ipsum</p>
        </div><!-- sl-page-title -->

        <div class="card pd-20 pd-sm-40">
          <h6 class="card-body-title">Basic Responsive DataTable</h6>
          <p class="mg-b-20 mg-sm-b-30">Searching, ordering and paging goodness will be immediately added to the table, as shown in this example.</p>
        </div><!-- card -->
      </div><!-- sl-pagebody -->
      <!-- START: FOOTER -->
        <?= $cms_footer; ?>
      <!-- END: -->
    </div><!-- sl-mainpanel -->
    <?= $cms_js; ?>
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
    

    <script src="assets/frontend-assets/js/cms/starlight.js"></script>
  </body>

</html>

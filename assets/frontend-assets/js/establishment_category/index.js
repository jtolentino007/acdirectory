(function(){
  $('#tbl_establishment_category').DataTable({
    "language": { search: "", searchPlaceholder: "Search..." },
    "ajax": "Establishment_category/view",
    "columns": [
      { "data": "est_category_name" },
      { "data": "est_category_desc" },
      {
        sClass: 'text-center',
        render:function(data,type,full,meta) {
          return '<button class="btn btn-info"><i class="fa fa-pencil"></i></button>' + '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;' + '<button class="btn btn-danger"><i class="fa fa-trash"></i></button>';
        }
      }
    ]
  });
})();

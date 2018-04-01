(function(){
  $('.log-submit-btn').on('click', function(){
    $.ajax({
      url : "Administration/authenticate",
      type: "POST",
      dataType : "json",
      data : $('#frm_login').serializeArray(),
      success: function (response) {
        $('.message').html('');

        $('.message').append(
          '<div class="alert alert-'+response.status+'">' +
            response.message +
          '</div>'
        );

        if (response.status == "success") {
          window.location = 'Dashboard';
        }

      }
    });
  });
})();

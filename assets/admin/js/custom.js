$(function () {
  $(".delete-member").click(function () {

    var myform = $(this).parent();
    swal({
      title: "Are you sure?",
      text: "You will not be able to recover the data!",
      type: "warning",
      showCancelButton: true,
      confirmButtonClass: "btn-danger",
      confirmButtonText: "Yes, delete it!",
      cancelButtonText: "No, cancel plx!",
      closeOnConfirm: false,
      closeOnCancel: false
    },
    function(isConfirm) {
      if (isConfirm) {
        setTimeout(function () {
          redr();
          swal("Deleted!", "User has been deleted.", "success");
        }, 1000);
      } else {
        swal("Cancelled", "user is safe :)", "error");
      }
    });

    function redr() {
      myform.submit();
    }
  });
});

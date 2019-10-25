$(document).ready(function() {
  //load customer to select box

  $.ajax({
    type: "get",
    url: "resources/api/customers.php",

    success: function(result) {
      // $(".toast").toast("show");
      $("#client_id").html(result);
      console.log(result);
    }
  });

  $("#new_customer").submit(function(e) {
    e.preventDefault();
    $.ajax({
      type: "post",
      url: "resources/api/new_customer.php",
      data: $("#new_customer").serialize(),
      dataType: "json",
      success: function(result) {
        $(".toast").toast("show");
        $("#toast-body").html(`client name ${result.name}  added successfully`);
        console.log(result);
      }
    });
  });

  $("#payment").submit(function(e) {
    e.preventDefault();
    $.ajax({
      type: "post",
      url: "resources/api/payment.php",
      data: $("#payment").serialize(),
      dataType: "json",
      success: function(result) {
        $(".toast").toast("show");
        $("#toast-body").html(`the client has a balance ${result.balance}`);
        console.log(result);
      }
    });
  });
});

//load the customer data into the table

//$("#client_table").load(function() {
$.ajax({
  type: "get",
  url: "resources/api/customer_table.php",
  success: function(result) {
    $(".toast").toast("show");
    $("#client_table").html(`${result}`);
    console.log(result);
  }
});

//alert("hi");
//});

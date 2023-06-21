// HIDE UPDATE BUTTON 
$("#update_btn").hide();
// DISPLAY FUNCTION 
function display() {
  $.ajax({
    type: "POST",
    url: "/display_todo.php",
    dataType: "text",
  }).done(function (result) {
    $("#incomplete-tasks").html(result);
  });
  $.ajax({
    type: "POST",
    url: "/display_complete.php",
    dataType: "text",
  }).done(function (res) {
    $("#completed-tasks").html(res);
  });
}
display();
// ADD PRODUCT FUNCTION 
$("document").ready(function () {
  $("#add_cart").click(function () {
    var id = $("#new-task").val();
    $.ajax({
      type: "POST",
      url: "/add_product.php",
      data: "Input=" + id,
      dataType: "text",
    }).done(function (result) {
      display();
    });
  });
});
// CHECKED FUNCTION 
function check(val) {
  $.ajax({
    type: "POST",
    url: "/checked.php",
    data: "id=" + val,
    dataType: "text",
  }).done(function (result) {
    display();
  });
}
// UNCHECKED FUNCTION 
function uncheck(val) {
  $.ajax({
    type: "POST",
    url: "/unchecked.php",
    data: "id=" + val,
    dataType: "text",
  }).done(function (result) {
    display();
  });
}
// DELETE TODO FUNCTION 
function delete_todo(val) {
  $.ajax({
    type: "POST",
    url: "/delete_todo.php",
    data: "id=" + val,
    dataType: "text",
  }).done(function (result) {
    display();
  });
}
// DELETE COMPLETE FUNCTION 
function delete_complete(val) {
  $.ajax({
    type: "POST",
    url: "/delete_complete.php",
    data: "id=" + val,
    dataType: "text",
  }).done(function (result) {
    display();
  });
}
// EDIT FUNCTION 
let global_val = 0;
function edit_todo(val) {
  $.ajax({
    type: "POST",
    url: "/edit_todo.php",
    data: "id=" + val,
    dataType: "text",
  }).done(function (result) {
    console.log(result);
    document.getElementById("new-task").value = result;
    $("#update_btn").show();
    $("#add_cart").hide();
    global_val = val;
  });
}
// UPDATE FUNCTION 
function update() {
  $.ajax({
    type: "POST",
    url: "/update_todo.php",
    data: {id: $('#new-task').val(),values: global_val},
    dataType: "text",
  }).done(function (result) {
    console.log(result);
    display();
    $("#update_btn").hide();
    $("#add_cart").show();
  });
}

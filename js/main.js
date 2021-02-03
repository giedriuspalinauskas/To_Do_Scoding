//--------------------LOGIN-----------------------
$('#login').on('click', function() {
  let nickname = $('#nickname').val();
  let password = $('#password').val();

  $.ajax({
  type: "POST",
  url: "controler/login.php",
  data:{nickname: nickname, password: password},
  success: function(massage) {
      if (massage === "True") {
        alert('Login successfully');
        window.location.replace("todo.php");
      } else if (massage === "False") {
        alert('Data entered incorrectly');
        location.reload();
      }
  }
});
});


// --------------------REGISTER--------------------------------
$('#register').on("click", function(e) {
  let nickname =            $('#nickname').val();
  let password =            $('#password').val();
  let confirm_password =    $('#confirm_password').val();
  let inspection =          "False";

if (password !== confirm_password) {
  $('#alertmessage').html("<li class='bg-warning mt-1'>* Passwords do not match!</li>");
  inspection = "True";
}
if (nickname === "") {
  $('#alertmessage').html("<li class='bg-warning mt-1'>* Insert nickname!</li>");
  inspection = "True";
}

if (inspection === "True") {
  e.preventDefault();
} else {
  $.ajax({
    url: "controler/createUser.php",
    type: "POST",
    data: {
          nickname: nickname,
          password: password,
          confirm_password: confirm_password,
        },
  success: function() {
    alert("Prisiregistravote !");
  }
});
}
});


// --------------------------CREATE TODO------------------------------
$('#todo').on("click", function(e) {
  let name = $('#name').val();
  let description = $('#description').val();

  if ((name === "") || (description === "")) {
    $('#alertmessage').html("<li class='bg-warning mt-1'>* Fill all fields</li>");
    e.preventDefault();
  }  else {
    $.ajax({
      url: "controler/createTodo.php",
      type: "POST",
      data: {
            name: name,
            description: description,
          },
    success: function() {
    }
  });
}


});

//----------------------------CHANGE TODO STATUS----------------------
$('#Edit').on("click", function(e) {
  let name = $('#status').val();
  alert(name);

//   if ((name === "") || (description === "")) {
//     $('#alertmessage').html("<li class='bg-warning mt-1'>* Fill all fields</li>");
//     e.preventDefault();
//   }  else {
//     $.ajax({
//       url: "controler/createTodo.php",
//       type: "POST",
//       data: {
//             name: name,
//             description: description,
//           },
//     success: function() {
//     }
//   });
// }


});

$('#Prisijungti').on('click', function() {
  let email = $('#prisijungimas').val();
  let password = $('#password').val();

  $.ajax({
  type: "POST",
  url: "controler/prisijungimas.php",
  data:{email: email, password: password},
  success: function(massage) {
      if (massage === "True") {
        alert('Pavyko prisijungti !');
        window.location.replace("index.php");
      } else if (massage === "False") {
        alert('Netiko El.pastas arba slaptazodis');
        location.reload();
      }
  }
});
});

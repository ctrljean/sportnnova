$("#btnlogin").click(function () {
  event.preventDefault();
  $.ajax({
    data: $('#frmlogin-start').serialize(),
    type: "POST",
    url: 'http://localhost/sportnnova/login/validation',
    success: function (d) {
      if (d == true) {
        alert('Insertó');
      } else {
        alert('Error !');
      }
    }
  });
});
$("#btnregister").click(function () {
  event.preventDefault();
  $.ajax({
    data: $('#frmlogin-register').serialize(),
    type: "POST",
    url: 'http://localhost/sportnnova/login/user_registration',
    success: function (d) {
      if (d == true) {
        alert('Se registro correctamente');
        document.getElementById('nombre').value = '';
        document.getElementById('documento').value = '';
        document.getElementById('password').value = '';
        document.getElementById('birth_date').value = '';
        document.getElementById('sports').value = '1';
        document.getElementById('position').value = '1';
      } else {
        alert('Alguno de los campos se encuentra vacio');
        // $('#mensaje').html('No es posible relizar la insercion !');    
      }
    }
  });
});


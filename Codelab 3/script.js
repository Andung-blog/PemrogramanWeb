function validateForm() {
  var name = document.getElementById("name").value;
  var email = document.getElementById("email").value;
  var address = document.getElementById("address").value;

  if (name == "") {
    alert("Nama tidak boleh kosong!");
    return false;
  }
  if (email == "") {
    alert("Email tidak boleh kosong!");
    return false;
  }
  if (address == "") {
    alert("Alamat tidak boleh kosong!");
    return false;
  }

  alert("Semua data form valid!");
  return true;
}

function kolla()
{
  var namn = document.form.Namn.value;
  var email = document.form.Email.value;

  if(namn.trim() == "")
  {
    alert("Skriv in ditt användarnamn.");
    return false;
  }
  if(email.trim() == "")
  {
    alert("Skriv in ditt lösenord.");
    return false;
  }
}

function kolla()
{
  var n = document.form.Namn.value;
  var e = document.form.Email.value;

  if(n == "")
  {
    alert("Skriv in ditt användarnamn.");
    return false;
  }
  if(e == "")
  {
    alert("Skriv in ditt lösenord.");
    return false;
  }
}


var namefield = document.getElementById('name');
var emailfield = document.getElementById('email');
var passwordfield = document.getElementById('password');
var phonefield = document.getElementById('phone');
var addressfield = document.getElementById('address');
var cityfield = document.getElementById('city');
var zipfield = document.getElementById('zip');
var statefield = document.getElementById('state');



function populateStorage() {
  localStorage.setItem('tempname', document.getElementById('name').value);
  localStorage.setItem('tempemail', document.getElementById('email').value);
  localStorage.setItem('temppassword', document.getElementById('password').value);
    localStorage.setItem('tempphone', document.getElementById('phone').value);
    localStorage.setItem('tempaddress', document.getElementById('address').value);
    localStorage.setItem('tempcity', document.getElementById('city').value);
    localStorage.setItem('tempzip', document.getElementById('zip').value);
    localStorage.setItem('tempstate', document.getElementById('state').value);


}

namefield.onchange = populateStorage;
emailfield.onchange = populateStorage;
passwordfield.onchange = populateStorage;
phonefield.onchange = populateStorage;
addressfield.onchange = populateStorage;
cityfield.onchange = populateStorage;
zipfield.onchange = populateStorage;
statefield.onchange = populateStorage;



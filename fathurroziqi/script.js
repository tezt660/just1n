// membuat theme dark
let themeSwitch = document.querySelector('.themeSwitch');
let body = document.querySelector('body');
let navbar = document.querySelector('.navbar');
themeSwitch.onclick = function(){
  themeSwitch.classList.toggle('active');
  body.classList.toggle('dark');
  navbar.classList.toggle('navbar-dark');
}

// disable klik kanan pada gambar
$('img').bind('contextmenu', function(e){
    return false;
});

// elmen pada saat link di klik
$('.page-scroll').on('click', function(e){
  // ambil isi href
  var tujuan = $(this).attr('href');

  var elemenTujuan = $(tujuan);

  // pindahkan scroll
  $('html,body').animate({
    scrollTop: elemenTujuan.offset().top - 70
  },'swing');

  e.preventDefault();
});

// form contact
const scriptURL = 'https://script.google.com/macros/s/AKfycbwct8XS85l_RXi0YegL47FoMjCufeqvYdX6-omrvz5if5su1u2s7uqh6PNGonEv_-t8/exec';
const form = document.forms['portfolio-contact'];

const btnKirim = document.querySelector('.btn-kirim');
const btnLoading = document.querySelector('.btn-loading');
const myAlert = document.querySelector('.my-alert');

form.addEventListener('submit', e => {
  e.preventDefault();
  // ketika tombol submit di klik
  // tampilkan tombol loading, hilangkan tommbol kirim
  btnLoading.classList.toggle('d-none');
  btnKirim.classList.toggle('d-none');

  fetch(scriptURL, { method: 'POST', body: new FormData(form)})
    .then(response => {
      // tampilkan tombol kirim, hilangkan tombol kirim
      btnLoading.classList.toggle('d-none');
      btnKirim.classList.toggle('d-none');
      // tampilkan alert
      myAlert.classList.toggle('d-none');
      // reset form
      form.reset();
      console.log('Success!', response)
    })
    .catch(error => console.error('Error!', error.message))
});

// memindahkan input user ke modal dialog input
function otheremail() {
  var input = document.getElementById("userInput").value;
  var tampil = document.getElementById("email");
  tampil.value = input;
}
function otheremail2() {
  var input = document.getElementById("userInput2").value;
  var tampil = document.getElementById("email");
  tampil.value = input;
}

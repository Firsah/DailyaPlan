//JS Navbar
let  menu = document.querySelector('#menu-icon');
let  navbar = document.querySelector('.navbar'); 

menu.onclick = () => {
    menu.classList.toggle('bx-x');
    navbar.classList.toggle('open');
}

//notifikasi open or close
$(document).ready(function(){
     $('#bell').click(function(){
        $('.notif-modal').slideToggle(300);
     });
});


//menu-card open or close
$(document).ready(function () {
    $('.menu-card').click(function () {
        $('.isi-menu-card').fadeToggle(800)     
    });
});


//modal tambah ruangan  open or close
$(document).ready(function(){
   $('.btn-tambah-ruangan').click(function(){
    $('.bg-modal-tambah-ruangan,.modal-tambah-ruangan').fadeIn('slow',function(){
        $('body').css('overflow','hidden');
    });
   });

   $('.close-btn-mtr,.bg-modal-tambah-ruangan').click(function(){
    $('.bg-modal-tambah-ruangan, .modal-tambah-ruangan').fadeOut('slow',function(){
        $('body').css('overflow','auto'); 
    });
   });
});



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


//modal open  or close daftar anggota in isi Index
$(document).ready(function () {
    $('#anggota').click(function () {
        $('#daf-anggota').slideToggle(300)
    })
})

//menu-perencanaan open or close
$(document).ready(function () {
    $('.menu-perencanaan').click(function () {
        $('.isi-menu-perencanaan').fadeToggle(800)     
    });
});


//modal tambah perencanaan open or close  
$(document).ready(function () {
   $('.btn-tambah-perencanaan').click(function () {
        $('.bg-modal-tambah-perencanaan,.modal-tambah-perencanaan').fadeIn('slow',function(){
            $('body').css('overflow','hidden');
        })        
   })
   
   
   $('.close-btn-prcn,.bg-modal-tambah-perencanaan').click(function(){
    $('.bg-modal-tambah-perencanaan, .modal-tambah-perencanaan').fadeOut('slow',function(){
        $('body').css('overflow','auto'); 
        });
    });
 
});


//toggle show/hide Toolbar  detail  rencana
$(document).ready(function(){
   $('.btn-showTolbar').click(function(){
        $('.cke_toolbox').slideToggle(500);
   }); 
});

//modal detail  rencana  open or close
$(document).ready(function(){
    $('.body-rencana').click(function(){
        $('.bg-modal-detail-rencana, .modal-detail-rencana').fadeIn( 'slow',function(){
            $('body').css('overflow','hidden');
        });
    });
    
    $('.close-btn-rcna,.bg-modal-detail-rencana').click(function(){
        $('.bg-modal-detail-rencana, .modal-detail-rencana').fadeOut(function(){
            $('body').css('overflow','auto');
        });
    }); 
});


//modal edit profile open or close  
$(document).ready(function () {
    $('.btn-editProfile').click(function () {
        $('.bg-modal-edit-profile,.modal-edit-profile').fadeIn('slow',function(){
            $('body').css('overflow','hidden');
        })        
    })
    
    $('.close-btn-ep,.bg-modal-edit-profile').click(function(){
        $('.bg-modal-edit-profile, .modal-edit-profile').fadeOut('slow',function(){
            $('body').css('overflow','auto'); 
        });
    });

});


//modal edit password open or close  
$(document).ready(function () {
    $('.btn-editPassword').click(function () {
        $('.bg-modal-edit-password,.modal-edit-password').fadeIn('slow',function(){
            $('body').css('overflow','hidden');
        })        
    })
    
    $('.close-btn-epswd,.bg-modal-edit-password').click(function(){
        $('.bg-modal-edit-password, .modal-edit-password').fadeOut('slow',function(){
            $('body').css('overflow','auto'); 
        });
    });

});


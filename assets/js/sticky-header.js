$(function() {
  $(window).on( 'scroll', function(){
    let header = $('#main-header');
    let size = header.outerHeight( true );
    //let sticky = header.offsetTop;
    if (this.scrollY > 150 ) {
      header.addClass( 'sticky animate__animated animate__fadeInDown' );
    } else {
      header.removeClass( 'sticky animate__fadeInDown' );
    }
  });
});
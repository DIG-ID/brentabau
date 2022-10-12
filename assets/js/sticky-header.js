$(function() {

  let header = $('#main-header');
  let lastScroll = 0;

  $(window).on( 'scroll', function() {
    const currentScroll = window.pageYOffset;
    if ( currentScroll <= 0 ) {
      //console.log('current scroll is ' + currentScroll);
      header.removeClass( 'sticky animate__animated animate__fadeInDown animate__faster' );
      return;
    } 
    if ( currentScroll > lastScroll && currentScroll > 200 && ! header.hasClass('sticky') ) {
      //down
      //console.log('current scroll (' + currentScroll + '), is higher then the lastscroll (' + lastScroll + ') and doenst have scroll-down class ');
      header.removeClass( 'sticky animate__animated animate__fadeInDown animate__faster' );
      header.addClass( 'sticky animate__animated animate__fadeInDown animate__faster' );
    } 
    lastScroll = currentScroll;
  });

});
/*
SimpleYouTubePlayer
by John E Maddox
*/

$(document).ready(function(){

  // display video player
  $('#mList A').on('click',function(e){

    e.preventDefault();

    // get video url
    var u = $(this).attr('href');

    // display video or go to youtube depending on window size
    // this is an attempt to load videos on mobile devices in the youtube app
    if($(window).width() > 800){

      // get video id
      var i = u.substring(u.search('=')+1,u.length);

      // build player
      $('#mPlayer DIV').html('<iframe width="560" height="315" src="https://www.youtube.com/embed/' + i + '" frameborder="0" allowfullscreen></iframe>');

      // display player
      $('#mPlayer').fadeIn(500);

    }else{
      window.location.href = u;
    }
  }); // eof display player

  // hide video player
  $('#mPlayer').on('click',function(e){

    // hide player
    $('#mPlayer').fadeOut(500);

    // destroy player
    $('#mPlayer DIV').empty();

  }); // eof hide player
});

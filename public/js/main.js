var main = {

      move: function(to) {
        console.log('Moving to: '+to);
        $('body').fadeOut(700, function(){
          window.location.href= "/mix";
        });
      }

}

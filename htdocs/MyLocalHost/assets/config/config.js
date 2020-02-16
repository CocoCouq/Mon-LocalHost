$(document).ready(function(){
    $('h1').addClass('center-align');
    $('h3').addClass('center-align');
    $('h3').addClass('z-depth-3');
    $('h6').addClass('center-align');
    $('h6').addClass('card');
    $('h5').addClass('card');
    $('h5').addClass('center-align');
    $('pre').addClass('container');
    $('pre').addClass('z-depth-3');
    $('main').addClass('section');
    $('<div class="codeClick center-align row"><i class="card  material-icons col s2 offset-s5">code</i></div>').insertBefore($('pre'));
    $('#return').click(function(){
        window.history.back();
    });
    $('pre > br').replaceWith('&lt;br&gt;');
    
});
document.addEventListener('DOMContentLoaded', function() {
    var elems = document.querySelectorAll('.fixed-action-btn');
    var instances = M.FloatingActionButton.init(elems, {
        hoverEnabled: false
    });
  });
  
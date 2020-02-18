$(document).ready(function(){
    $('h1').addClass('center-align');
    $('h3').addClass('center-align');
    $('h3').addClass('z-depth-3');
    $('p.cod').addClass('center-align');
    $('p.cod').addClass('card');
    $('p.txt').addClass('card');
    $('p.txt').addClass('center-align');
    $('pre').addClass('z-depth-3');
    $('main').addClass('section');
    $('pre').addClass('row');
    $('code').addClass('col s12');
    $('<div class="codeClick center-align row"><i class="card  material-icons col s2 offset-s5">code</i></div>').insertBefore($('pre'));
    $('.return').click(function(){
        window.history.back();
    });
    
    // Filytres balises 
    $('code > br').replaceWith('&lt;br&gt;');
    
    
    // Navigation
    var i = -1;
    var len = $('h3').length;
    var value = $('h3').contents();
    var tab = [];
    
    while(++i < len)
    {
        tab[i] = value[i]['data'];
    }
    
    i = -1;
    while(--len > -1)
    {
        $(`h3:contains('${tab[len]}')`).attr('id', `${tab[len]}`);
        $(`<a class="elements col s12 collection-item" href="#${tab[len]}">${tab[len]}</a>`).insertAfter('#Menu');
//        $(`<a class="col s12" href="#EXERCICE3">${tab[len]}</a>`).insertAfter('#Menu');
    }
    
    
    });
    
    
    
document.addEventListener('DOMContentLoaded', function() {
    var elems = document.querySelectorAll('.fixed-action-btn');
    var instances = M.FloatingActionButton.init(elems, {
        hoverEnabled: false
    });
  });
  
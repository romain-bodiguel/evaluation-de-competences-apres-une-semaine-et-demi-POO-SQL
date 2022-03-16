var exos = [
  {nav: '#1', title: 'Exo #1', file: 'exo1.php'},
  {nav: '#2', title: 'Exo #2', file: 'exo2.php'},
  {nav: '#3', title: 'Exo #3', file: 'exo3.php'},
  {nav: '#4', title: 'Exo #4', file: 'exo4.php'},
  {nav: '#5', title: 'Exo Bonus #5', file: 'exo5.php'},
  {nav: '#6', title: 'Quiz #6', file: 'https://forms.gle/bcFP9wC98bcfDYNP7'},
  {nav: '#7', title: 'Exo Bonus #7', file: 'exo7.php'}
];

var app = {
  init: function () {
    var target = $('#nav');
    $('<a href="index.php">Home</a>').appendTo(target);

    $.each(exos, function(index) {
      var uri = 'exo'+(index+1)+'.php';
      $('<a>', {
        href: exos[index].file || uri,
        text: exos[index].nav || 'Exo'+(index+1),
      }).appendTo(target);
      if ($('.exo').length) {
        var link = $('<a>', {
          href: exos[index].file || uri,
          class: 'lien-epreuve',
          text: exos[index].title || 'Lancer le test',
        });
        $('.exo').eq(index).append(link);
      }
    });

    //active
    var url = window.location.pathname;
    var filename = url.substring(url.lastIndexOf('/')+1);
    $('#nav a').each(function(i,e) {
      var cur = $(e);
      var href = cur.attr('href').replace(/\?.*/,'');
      if (href === filename) cur.addClass('active');
    });

    // exo6
    if ($('#form-exo6').length > 0) {
      var $childrenOptions = $('#child-select').find('option');
      if ($childrenOptions.length == 0) {
        check.display(false);
      }
      else {
        app.exo6();
      }
    }
  },
  exo6: function() {
    $('.lien-epreuve').hide();
    $('<style>.exo::after{content:"# 6"}</style>').appendTo('head');
    if (!isPost) {
      $('#test').removeClass('error');
      $('.exo').css('width', '100%').css('text-align', 'left');
      var $options = $('#child-select').find('option');
      var random = Math.floor(Math.random() * $options.length);
      $options.eq(random).prop('selected', true);
      // console.log('select ' + random);
      window.setTimeout(app.submitExo6Form, 2000);
    }
    else {
      $('#form-exo6').hide();
      
      if (typeof messages != 'undefined') {
        $messagesSection = $('<div>', {
          class : 'exo'
        }).css('width', '100%').css('text-align', 'left');
        $messagesSection.append('<div class="category">Mamie PHP</div><h2>Aide mémoire sur mes petits - enfants</h2><br>');

        $.each(messages, function (key, value) {
          $('<h3>', {
            html : value
          }).appendTo($messagesSection);
        });
      }

      $messagesSection.appendTo($('#test'));
    }
  },
  submitExo6Form: function() {
    // console.log('submitExo6Form');
    $('#form-exo6').submit();
  }
};

var check = {
  default: function() {
    var success = false;

    check.display(success);
  },
  display: function(success) {
    $('#test').removeClass().addClass(success ? 'success' : 'error');
  }
};

$(app.init);

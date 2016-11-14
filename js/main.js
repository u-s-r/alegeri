(function ($) {
  'use strict';

  $('[data-trigger="scroll"]').click(function (event) {
    if (this.pathname !== window.location.pathname) {
      return;
    }

    event.preventDefault();

    var target = this.hash || 'body';

    $(window).stop(true).scrollTo(target, {
      duration: 1000,
      offset: -30
    });
  });

  $.get('alegeri.php', function (data) {
    $.extend(true, USR.data, data);

    $('#progres-inscrieri').ionRangeSlider({
      force_edges: true,
      from: data.inscrieriValidate,
      from_fixed: true,
      grid: true,
      hide_min_max: true,
      max: USR.data.intervalInscrieri[1],
      min: USR.data.intervalInscrieri[0],
      postfix: ' înscrieri validate',
      prettify_separator: '.'
    });

    $('#map-ro').vectorMap({
      backgroundColor: 'transparent',
      bindTouchEvents: false,
      map: 'ro_merc',
      onRegionTipShow: function (event, element, code) {
        var contacte = '';
        var html = '<strong>' + element.html() + '</strong><br>Secții de votare: ' +
          USR.data.alegeri[code] + '<br>Înscrieri validate: 0';

        for (var i = 0; i < USR.data.contacte[code].length; i++) {
          contacte += '<dt>' + USR.data.contacte[code][i].locatie + '</dt><dd><ul class="list-unstyled">';

          for (var j = 0; j < USR.data.contacte[code][i].persoane.length; j++) {
            contacte += '<li>' + USR.data.contacte[code][i].persoane[j].join(', ') + '</li>';
          }

          contacte += '</ul></dd>';
        }

        html += '<br>Contact: ';

        if ('' !== contacte) {
          html += '<dl>' + contacte + '</dl>';
        } else {
          html += USR.data.contact;
        }

        element.html(html);
      },
      panOnDrag: false,
      series: {
        regions: [{
          max: USR.data.max,
          min: USR.data.min,
          normalizeFunction: 'polynomial',
          scale: ['#7fc1ff', '#ffffff'],
          values: USR.data.alegeri
        }]
      },
      zoomButtons: false,
      zoomOnScroll: false
    });

    $('#map-diaspora').vectorMap({
      backgroundColor: 'transparent',
      bindTouchEvents: false,
      map: 'diaspora',
      onRegionTipShow: function (event, element, code) {
        var contacte = '';
        var html = '<strong>' + element.html() + '</strong><br>Secții de votare: ' +
          USR.data.diaspora.alegeri[code] + '<br>Înscrieri validate: 0';

        for (var i = 0; i < USR.data.diaspora.contacte.length; i++) {
          contacte += '<dl><dt>' + USR.data.diaspora.contacte[i].locatie + '</dt><dd><ul class="list-unstyled">';

          for (var j = 0; j < USR.data.diaspora.contacte[i].persoane.length; j++) {
            contacte += '<li>' + USR.data.diaspora.contacte[i].persoane[j].join(', ') + '</li>';
          }

          contacte += '</ul></dd></dl>';
        }

        html += '<br>Contact: ' + USR.data.diaspora.contact;

        if ('' !== contacte) {
          html += '<div class="dl-two-columns">' + contacte + '</div>';
        }

        element.html(html);
      },
      panOnDrag: false,
      series: {
        regions: [{
          max: USR.data.max,
          min: USR.data.min,
          normalizeFunction: 'polynomial',
          scale: ['#7fc1ff', '#ffffff'],
          values: USR.data.diaspora.alegeri
        }]
      },
      zoomButtons: false,
      zoomOnScroll: false
    });
  });

  $.validator.setDefaults({
    errorClass: 'help-block',
    errorElement: 'span',
    errorPlacement: function (error, element) {
      if (element.parent('.control-label').length) {
        error.insertAfter(element.parent());
      } else {
        error.insertAfter(element);
      }
    },
    highlight: function (element) {
      $(element).closest('.form-group, .checkbox').addClass('has-error');
    },
    ignore: [],
    unhighlight: function (element) {
      $(element).closest('.form-group, .checkbox').removeClass('has-error');
    }
  });

  var onFormError = function () {
    $('.alert').addClass('hidden');
  };

  var onFormSubmit = function (form) {
    var $form = $(form);
    var $recaptcha = $form.find('.g-recaptcha');
    var $spinner = $form.find('.spinner');
    var data = $form.serialize();

    $('.alert').addClass('hidden');

    $spinner.addClass('active');

    $.post('inscriere.php', data, function (response) {
      grecaptcha.reset($recaptcha.data('id'));

      $spinner.removeClass('active');

      if (response) {
        $form[0].reset();

        $('.alert-success').removeClass('hidden');
      } else {
        $('.alert-danger').removeClass('hidden');
      }
    });
  };

  $('.form-reprezentant').validate({
    invalidHandler: onFormError,
    rules: {
      confirmare: {
        required: true
      },
      prenume: {
        required: true
      },
      nume: {
        required: true
      },
      email: {
        email: true,
        required: true
      },
      telefon: {
        required: true
      },
      cnp: {
        digits: true,
        maxlength: 13,
        minlength: 13,
        required: true
      },
      serie: {
        maxlength: 2,
        minlength: 2,
        required: true
      },
      numar: {
        digits: true,
        maxlength: 6,
        minlength: 6,
        required: true
      },
      adresa: {
        required: true
      },
      regiune: {
        required: true
      },
      tara: {
        required: true
      },
      acord: {
        required: true
      },
      recaptcha: {
        required: function () {
          return '' === grecaptcha.getResponse(0);
        }
      }
    },
    submitHandler: onFormSubmit
  });

  $('.form-delegat').validate({
    invalidHandler: onFormError,
    rules: {
      prenume: {
        required: true
      },
      nume: {
        required: true
      },
      email: {
        email: true,
        required: true
      },
      telefon: {
        required: true
      },
      cnp: {
        digits: true,
        maxlength: 13,
        minlength: 13,
        required: true
      },
      serie: {
        maxlength: 2,
        minlength: 2,
        required: true
      },
      numar: {
        digits: true,
        maxlength: 6,
        minlength: 6,
        required: true
      },
      adresa: {
        required: true
      },
      regiune: {
        required: true
      },
      tara: {
        required: true
      },
      acord: {
        required: true
      },
      recaptcha: {
        required: function () {
          return '' === grecaptcha.getResponse(1);
        }
      }
    },
    submitHandler: onFormSubmit
  });

  window.recaptchaInit = function () {
    $('.g-recaptcha').each(function () {
      var $this = $(this);
      var id = grecaptcha.render(this, {
        'sitekey': $this.data('sitekey')
      });

      $this.data('id', id);
    });
  };
})(jQuery);

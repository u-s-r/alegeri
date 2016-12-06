(function ($) {
  'use strict';

  $('[href="#"]').click(function (event) {
    event.preventDefault();
  });

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

  $.extend(true, USR.data, remoteData);

  $('#progres-sectii').ionRangeSlider({
    force_edges: true,
    from: USR.data.sectiiAcoperite,
    from_fixed: true,
    grid: true,
    hide_min_max: true,
    max: USR.data.intervalSectii[1],
    min: USR.data.intervalSectii[0],
    postfix: ' secții acoperite',
    prettify_separator: '.'
  });

  $('#map-ro').vectorMap({
    backgroundColor: 'transparent',
    bindTouchEvents: false,
    map: 'ro_merc',
    onRegionTipShow: function (event, element, code) {
      var contacte = '';
      var sectii = USR.data.alegeri[code].reprezentanti + USR.data.alegeri[code].delegati;
      var html = '<strong>' + element.html() + '</strong><br>Secții de votare: ' +
        USR.data.alegeri[code].sectii + '<br>Secții acoperite: ' + sectii;

      for (var i = 0; i < USR.data.contacte[code].length; i++) {
        contacte += '<dt>' + USR.data.contacte[code][i].locatie + '</dt><dd><ul class="list-unstyled">';

        for (var j = 0; j < USR.data.contacte[code][i].persoane.length; j++) {
          contacte += '<li>' + USR.data.contacte[code][i].persoane[j].join(', ') + '</li>';
        }

        contacte += '</ul></dd>';
      }

      if ('' !== contacte) {
        html += '<br>Contact: ';
        html += '<dl>' + contacte + '</dl>';
      }

      element.html(html);
    },
    panOnDrag: false,
    series: {
      regions: [{
        max: USR.data.max,
        min: USR.data.min,
        normalizeFunction: 'polynomial',
        scale: ['#99d9f4', '#ffffff'],
        values: (function () {
          var values = [];

          for (var code in USR.data.alegeri) {
            values[code] = USR.data.alegeri[code].reprezentanti + USR.data.alegeri[code].delegati;

            if (values[code] > USR.data.alegeri[code].sectii) {
              values[code] = 100;
            } else if (0 !== values[code]) {
              values[code] = values[code] / USR.data.alegeri[code].sectii * 100;
            }
          }

          return values;
        })()
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
      var sectii = USR.data.diaspora.alegeri[code].reprezentanti + USR.data.diaspora.alegeri[code].delegati;
      var html = '<strong>' + element.html() + '</strong><br>Secții de votare: ' +
        USR.data.diaspora.alegeri[code].sectii + '<br>Secții acoperite: ' + sectii;

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
        scale: ['#99d9f4', '#ffffff'],
        values: (function () {
          var values = [];

          for (var code in USR.data.diaspora.alegeri) {
            values[code] = USR.data.diaspora.alegeri[code].reprezentanti + USR.data.diaspora.alegeri[code].delegati;

            if (values[code] > USR.data.diaspora.alegeri[code].sectii) {
              values[code] = 100;
            } else if (0 !== values[code]) {
              values[code] = values[code] / USR.data.diaspora.alegeri[code].sectii * 100;
            }
          }

          return values;
        })()
      }]
    },
    zoomButtons: false,
    zoomOnScroll: false
  });
})(jQuery);

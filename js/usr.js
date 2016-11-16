if ('undefined' === typeof window.USR) {
  window.USR = {};
}

(function (USR) {
  'use strict';

  USR.data = {};

  USR.data.sectiiAcoperite = 0;
  USR.data.intervalSectii = [0, 20000];

  USR.data.alegeri = {
    'AB': {'sectii': 440, 'reprezentanti': 0, 'delegati': 0},
    'AR': {'sectii': 437, 'reprezentanti': 0, 'delegati': 0},
    'AG': {'sectii': 520, 'reprezentanti': 0, 'delegati': 0},
    'BC': {'sectii': 634, 'reprezentanti': 0, 'delegati': 0},
    'BH': {'sectii': 652, 'reprezentanti': 0, 'delegati': 0},
    'BN': {'sectii': 313, 'reprezentanti': 0, 'delegati': 0},
    'BT': {'sectii': 422, 'reprezentanti': 0, 'delegati': 0},
    'BR': {'sectii': 281, 'reprezentanti': 0, 'delegati': 0},
    'BV': {'sectii': 447, 'reprezentanti': 0, 'delegati': 0},
    'BZ': {'sectii': 427, 'reprezentanti': 0, 'delegati': 0},
    'CL': {'sectii': 235, 'reprezentanti': 0, 'delegati': 0},
    'CS': {'sectii': 365, 'reprezentanti': 0, 'delegati': 0},
    'CJ': {'sectii': 656, 'reprezentanti': 0, 'delegati': 0},
    'CT': {'sectii': 556, 'reprezentanti': 0, 'delegati': 0},
    'CV': {'sectii': 214, 'reprezentanti': 0, 'delegati': 0},
    'DB': {'sectii': 432, 'reprezentanti': 0, 'delegati': 0},
    'DJ': {'sectii': 530, 'reprezentanti': 0, 'delegati': 0},
    'GL': {'sectii': 436, 'reprezentanti': 0, 'delegati': 0},
    'GR': {'sectii': 245, 'reprezentanti': 0, 'delegati': 0},
    'GJ': {'sectii': 332, 'reprezentanti': 0, 'delegati': 0},
    'HR': {'sectii': 290, 'reprezentanti': 0, 'delegati': 0},
    'HD': {'sectii': 524, 'reprezentanti': 0, 'delegati': 0},
    'IL': {'sectii': 220, 'reprezentanti': 0, 'delegati': 0},
    'IS': {'sectii': 730, 'reprezentanti': 0, 'delegati': 0},
    'IF': {'sectii': 238, 'reprezentanti': 0, 'delegati': 0},
    'MM': {'sectii': 435, 'reprezentanti': 0, 'delegati': 0},
    'MH': {'sectii': 286, 'reprezentanti': 0, 'delegati': 0},
    'MS': {'sectii': 568, 'reprezentanti': 0, 'delegati': 0},
    'NT': {'sectii': 486, 'reprezentanti': 0, 'delegati': 0},
    'OT': {'sectii': 379, 'reprezentanti': 0, 'delegati': 0},
    'PH': {'sectii': 623, 'reprezentanti': 0, 'delegati': 0},
    'SM': {'sectii': 334, 'reprezentanti': 0, 'delegati': 0},
    'SJ': {'sectii': 312, 'reprezentanti': 0, 'delegati': 0},
    'SB': {'sectii': 370, 'reprezentanti': 0, 'delegati': 0},
    'SV': {'sectii': 555, 'reprezentanti': 0, 'delegati': 0},
    'TR': {'sectii': 334, 'reprezentanti': 0, 'delegati': 0},
    'TM': {'sectii': 595, 'reprezentanti': 0, 'delegati': 0},
    'TL': {'sectii': 204, 'reprezentanti': 0, 'delegati': 0},
    'VS': {'sectii': 527, 'reprezentanti': 0, 'delegati': 0},
    'VL': {'sectii': 430, 'reprezentanti': 0, 'delegati': 0},
    'VN': {'sectii': 358, 'reprezentanti': 0, 'delegati': 0},
    'B': {'sectii': 1254, 'reprezentanti': 0, 'delegati': 0}
  };

  USR.data.contact = '0726701994';

  USR.data.contacte = {
    'AB': [],
    'AR': [],
    'AG': [],
    'BC': [],
    'BH': [],
    'BN': [],
    'BT': [],
    'BV': [],
    'BR': [],
    'BZ': [],
    'CL': [],
    'CS': [],
    'CJ': [],
    'CT': [],
    'CV': [],
    'DB': [],
    'DJ': [],
    'GL': [],
    'GR': [],
    'GJ': [],
    'HR': [],
    'HD': [],
    'IS': [],
    'IL': [],
    'IF': [],
    'MM': [],
    'MH': [],
    'MS': [],
    'NT': [],
    'OT': [],
    'PH': [],
    'SJ': [],
    'SM': [],
    'SB': [],
    'SV': [],
    'TR': [],
    'TM': [],
    'TL': [],
    'VL': [],
    'VS': [],
    'VN': [],
    'B': []
  };

  USR.data.diaspora = {
    'alegeri': {
      'DIASPORA': {'sectii': 417, 'reprezentanti': 0, 'delegati': 0}
    },
    'contact': 'diaspora@usr.ro',
    'contacte': []
  };

  USR.data.min = 0;
  USR.data.max = 100;
})(USR);

if ('undefined' === typeof window.USR) {
  window.USR = {};
}

(function (USR) {
  'use strict';

  USR.data = {};

  USR.data.inscrieriValidate = 0;
  USR.data.intervalInscrieri = [0, 20000];

  USR.data.alegeri = {
    'AB': 440,
    'AR': 437,
    'AG': 520,
    'BC': 634,
    'BH': 652,
    'BN': 313,
    'BT': 422,
    'BR': 281,
    'BV': 447,
    'BZ': 427,
    'CL': 235,
    'CS': 365,
    'CJ': 656,
    'CT': 556,
    'CV': 214,
    'DB': 432,
    'DJ': 530,
    'GL': 436,
    'GR': 245,
    'GJ': 332,
    'HR': 290,
    'HD': 524,
    'IL': 220,
    'IS': 730,
    'IF': 238,
    'MM': 435,
    'MH': 286,
    'MS': 568,
    'NT': 486,
    'OT': 379,
    'PH': 623,
    'SM': 334,
    'SJ': 312,
    'SB': 370,
    'SV': 555,
    'TR': 334,
    'TM': 595,
    'TL': 204,
    'VS': 527,
    'VL': 430,
    'VN': 358,
    'B': 1254
  };

  USR.data.contact = '0726701994';

  USR.data.contacte = {
    'AB': [{'locatie': 'Alba Iulia', 'persoane': [['Emil Comşa', '0724078129']]}],
    'AR': [{'locatie': 'Arad', 'persoane': [['Vlad Cherchezan', '0728280286'], ['Botoș Vlad', '0745339339']]}],
    'AG': [{'locatie': 'Pitești', 'persoane': [['Cosmin Mihăescu', '0723256244'], ['Ion Mircescu', '0729426682']]}],
    'BC': [{'locatie': 'Bacău', 'persoane': [['Liviu Rusu', '0744123914'], ['Mihai Gârba', '0744498055']]}],
    'BH': [{'locatie': 'Oradea', 'persoane': [['Alexandru Flora', '0723582129'], ['Silviu Dehelean', '0744225391']]}],
    'BN': [{'locatie': 'Bistrița', 'persoane': [['Lorand Toth', '0744579499']]}],
    'BT': [{'locatie': 'Botoşani', 'persoane': [['Marcel Gheorghiţă', '0745824469']]}],
    'BV': [
      {'locatie': 'Brașov', 'persoane': [['Cornel Sculean', '0741171780']]},
      {'locatie': 'Făgăraș', 'persoane': [['Alexandru Ţarczali', '0765138353']]}
    ],
    'BR': [{'locatie': 'Brăila', 'persoane': [['Radu-Octavian Englezu', '0746834419']]}],
    'BZ': [{'locatie': 'Buzău', 'persoane': [['Valeriu Mocanu', '0733517127']]}],
    'CL': [{'locatie': 'Călărași', 'persoane': [['Verman Daniela', '0766678626']]}],
    'CS': [{'locatie': 'Reșița', 'persoane': [['Ionuț Voinea', '0771550615']]}],
    'CJ': [{'locatie': 'Cluj-Napoca', 'persoane': [['Radu Boloveschi', '0723324617'], ['Ovidiu Nistor', '0757988180']]}],
    'CT': [{'locatie': 'Constanţa', 'persoane': [['Răzvan Andrei', '0770475808']]}],
    'CV': [],
    'DB': [{'locatie': 'Târgovişte', 'persoane': [['Adrian Iordănescu', '0728003259']]}],
    'DJ': [{'locatie': 'Craiova', 'persoane': [['Adrian Prisnel', '0723250885'], ['Cosmin Stăicuţ', '0740279090']]}],
    'GL': [{'locatie': 'Galați', 'persoane': [['Radu Oprea', '0723342410']]}],
    'GR': [{'locatie': 'Giurgiu', 'persoane': [['Raluca Duţu', '0734969744']]}],
    'GJ': [
      {'locatie': 'Târgu Jiu', 'persoane': [['Marius Stroie', '0741156512'], ['Nicolae Chilea', '0744696328']]},
      {'locatie': 'Motru', 'persoane': [['George Vintilescu', '0722275005']]},
      {'locatie': 'Bumbești-Jiu', 'persoane': [['Ioan Bucălae', '0761951986']]}
    ],
    'HR': [],
    'HD': [{'locatie': 'Hunedoara', 'persoane': [['Camelia Măhălean', '0733317010']]}],
    'IS': [{'locatie': 'Iași', 'persoane': [['Mihai Lupu', '0742056155']]}],
    'IL': [{'locatie': 'Slobozia', 'persoane': [['Cristina Iosif', '0730701141']]}],
    'IF': [
      {'locatie': 'Bragadiru', 'persoane': [['Marius Călinescu', '0723762921']]},
      {'locatie': 'Chiajna', 'persoane': [['Cornel Zainea', '0740022873']]},
      {'locatie': 'Corbeanca', 'persoane': [['Jan Cardon', '0722437937']]},
      {'locatie': 'Pantelimon', 'persoane': [['Lucian Zelincă', '0747070970']]},
      {'locatie': 'Popești-Leordeni', 'persoane': [['Ciprian Necula', '0749123413']]}
    ],
    'MM': [{'locatie': 'Baia Mare', 'persoane': [['Dan Ivan', '0745398368'], ['Iulian Mariş', '0722984841'], ['Simona Petruț', '0744643348']]}],
    'MH': [{'locatie': 'Drobeta-Turnu Severin', 'persoane': [['Ştefania Ramona Homeag', '0753192547'], ['Ilie Scarlat', '0754674783']]}],
    'MS': [{'locatie': 'Târgu-Mureş', 'persoane': [['Alex Ciobotar', '+40757329889']]}],
    'NT': [
      {'locatie': 'Piatra Neamț', 'persoane': [['Ioan Ploşcaru', '0747437300']]},
      {'locatie': 'Roman', 'persoane': [['Iulian Bulai', '0721389605']]}
    ],
    'OT': [{'locatie': 'Slatina', 'persoane': [['Silviu Anton', '0765558019']]}],
    'PH': [{'locatie': 'Ploiești', 'persoane': [['Dan Rădulescu', '0743323448']]}],
    'SJ': [{'locatie': 'Zalău', 'persoane': [['Cosmin-Vasile Ardelean', '0747696764']]}],
    'SM': [{'locatie': 'Satu Mare', 'persoane': [['Anca Sabou', '0745350977']]}],
    'SB': [{'locatie': 'Sibiu', 'persoane': [['Dan Adrian Ghiță', '0752177272'], ['Raluca Amariei', '0721554693']]}],
    'SV': [
      {'locatie': 'Suceava', 'persoane': [['Radu Ciornei', '0732914661'], ['Mihai Maierean', '0745823960'], ['Teodora Munteanu', '0744799646']]},
      {'locatie': 'Rădăuţi', 'persoane': [['Dan Vatra', '0745140276']]}],
    'TR': [
      {'locatie': 'Alexandria', 'persoane': [['Constanţa Duminică', '0769410020'], ['Nicuşor Lina', '0768334501']]},
      {'locatie': 'Turnu Măgurele', 'persoane': [['Sergiu Iordan', '0723211595']]}
    ],
    'TM': [{'locatie': 'Timișoara', 'persoane': [['Luminița Dolângă', '0754097620'], ['Sorin Şipoş', '0722469508']]}],
    'TL': [{'locatie': 'Tulcea', 'persoane': [['Marian Zamfir', '0749075888']]}],
    'VL': [{'locatie': 'Râmnicu Vâlcea', 'persoane': [['Lucian Constantin Mîrzoiu', '0771441467'], ['Eduard Rădulescu', '0752310000']]}],
    'VS': [{'locatie': 'Bârlad ', 'persoane': [['Mihai Bolea', '0741933502']]}],
    'VN': [{'locatie': 'Focșani', 'persoane': [['Cristian Ionascu', '0741157931']]}],
    'B': [
      {'locatie': 'Sectorul 1', 'persoane': [['Manuel Vieru', '0722233867']]},
      {'locatie': 'Sectorul 2', 'persoane': [['Alin Arsu', '0727046890'], ['Cristina Neagu', '0722286142']]},
      {'locatie': 'Sectorul 3', 'persoane': [['Alexandru Vesa', '0756312238']]},
      {'locatie': 'Sectorul 4', 'persoane': [['Cristian Matache', '0785810915'], ['Sorin Ceacar', '0766751943']]},
      {'locatie': 'Sectorul 5', 'persoane': [['Dragos Geamană', '0722609530']]},
      {'locatie': 'Sectorul 6', 'persoane': [['Mihai Botez', '0763829093']]}
    ]
  };

  USR.data.diaspora = {
    'alegeri': {
      'DIASPORA': 417
    },
    'contact': 'diaspora@usr.ro',
    'contacte': [
      {'locatie': 'Republica Moldova', 'persoane': [['Alexandru Gâdiuţă', '+37368792566']]},
      {'locatie': 'Italia', 'persoane': [['Cerasella Ponta (Roma)', '+393280947327'], ['Corina Cristina Velniciuc (Roma)', '+393285521723']]},
      {'locatie': 'Spania', 'persoane': [['Iulian Lorincz', '34605363124'], ['Anca Boldeanu (Barcelona)', '+34689070453', 'ancaboldeanu@yahoo.com']]},
      {'locatie': 'Marea Britanie', 'persoane': [['Radu Mircea', '+447860162346'], ['Carmel Ciurdas', '+447538776519']]},
      {'locatie': 'Scoţia', 'persoane': [['Adela Miron', '+447796990302']]},
      {'locatie': 'Germania', 'persoane': [['Eliza Marin', '+4915201363721'], ['Crina Petec Călin', '+4901724005476']]},
      {'locatie': 'Franța', 'persoane': [['Emanuel Stoica (Paris)', '+33782746399'], ['Andrei Corbu (Paris)', '+33675335422'], ['Iulian Rotaru (Lyon)', '+33612922890']]},
      {'locatie': 'S.U.A', 'persoane': [['Camil Golub (NY)', '+13472396714'], ['Mircea Alex (NY)', '+19149604179'], ['Matei Ioniță (Philadephia)', '+12154597574'], ['Ioana Slăniceanu (LA)', '+13109277195']]},
      {'locatie': 'Canada', 'persoane': [['Doina Simion (Montreal)', '+15148569114']]},
      {'locatie': 'Belgia', 'persoane': [['Mardale Cintzia-Angelina', '+33652675438'], ['Luana Bidașcă', '+32498785021']]},
      {'locatie': 'Austria', 'persoane': [['Leonard Stoica', '+436764938714']]},
      {'locatie': 'Elveția', 'persoane': [['Annamaria Kozma (Zürich)', '+41762174816'], ['Codrin Alexandru (Zürich)', '+41795304999', 'grcodal@gmail.com'], ['Dan Enache (Geneva)', '+33670177504']]},
      {'locatie': 'Luxemburg', 'persoane': [['Adrian Bardan', '+352661223183', 'bardan.adrian@yahoo.com']]},
      {'locatie': 'Olanda', 'persoane': [['Virgil Petre', '+31628217749']]},
    ]
  };

  USR.data.min = 0;
  USR.data.max = 19133;
})(USR);

<!DOCTYPE html>
<html>
  <head>
    <meta name="viewport" content="width=device-width">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>Alegeri USR: Mulțumim pentru înscriere!</title>
    <style media="all" type="text/css">
      @media all {
        .btn-primary table td:hover {
          background-color: #34495e !important;
        }

        .btn-primary a:hover {
          background-color: #34495e !important;
          border-color: #34495e !important;
        }
      }

      @media only screen and (max-width: 620px) {
        table[class=body] h1 {
          font-size: 28px !important;
          margin-bottom: 10px !important;
        }

        table[class=body] h2 {
          font-size: 22px !important;
          margin-bottom: 10px !important;
        }

        table[class=body] h3 {
          font-size: 16px !important;
          margin-bottom: 10px !important;
        }

        table[class=body] p,
        table[class=body] ul,
        table[class=body] ol,
        table[class=body] td,
        table[class=body] span,
        table[class=body] a {
          font-size: 16px !important;
        }

        table[class=body] .wrapper {
          padding: 10px !important;
        }

        table[class=body] .content {
          padding: 0 !important;
        }

        table[class=body] .container {
          padding: 0 !important;
          width: 100% !important;
        }

        table[class=body] .main {
          border-left-width: 0 !important;
          border-radius: 0 !important;
          border-right-width: 0 !important;
        }

        table[class=body] .btn table {
          width: 100% !important;
        }

        table[class=body] .btn a {
          width: 100% !important;
        }

        table[class=body] .alert td {
          border-radius: 0 !important;
          padding: 10px !important;
        }
      }

      @media all {
        .ExternalClass {
          width: 100%;
        }

        .ExternalClass,
        .ExternalClass p,
        .ExternalClass span,
        .ExternalClass font,
        .ExternalClass td,
        .ExternalClass div {
          line-height: 100%;
        }
      }
    </style>
  </head>
  <body style="font-family: sans-serif; -webkit-font-smoothing: antialiased; font-size: 14px; line-height: 1.4; -ms-text-size-adjust: 100%; -webkit-text-size-adjust: 100%; background-color: #f6f6f6; margin: 0; padding: 0;">
    <table border="0" cellpadding="0" cellspacing="0" class="body" style="border-collapse: separate; mso-table-lspace: 0pt; mso-table-rspace: 0pt; width: 100%; background-color: #f6f6f6;" width="100%" bgcolor="#f6f6f6">
      <tr>
        <td style="font-family: sans-serif; font-size: 14px; vertical-align: top;" valign="top">&nbsp;</td>
        <td class="container" style="font-family: sans-serif; font-size: 14px; vertical-align: top; display: block; Margin: 0 auto !important; max-width: 580px; padding: 10px; width: 580px;" width="580" valign="top">
          <!-- START CENTERED WHITE CONTAINER -->
          <div class="content" style="box-sizing: border-box; display: block; Margin: 0 auto; max-width: 580px; padding: 10px;">
            <span style="color: transparent; display: none; height: 0; max-height: 0; max-width: 0; opacity: 0; overflow: hidden; mso-hide: all; visibility: hidden; width: 0;">Înscrie-te ca să asigurăm corectitudinea procesului electoral din ziua votului!</span>
            <!-- START MAIN CONTENT AREA -->
            <table class="main" style="border-collapse: separate; mso-table-lspace: 0pt; mso-table-rspace: 0pt; width: 100%; background: #fff; border-radius: 3px;" width="100%">
              <tr>
                <td class="wrapper" style="font-family: sans-serif; font-size: 14px; vertical-align: top; box-sizing: border-box; padding: 20px;" valign="top">
                  <table border="0" cellpadding="0" cellspacing="0" style="border-collapse: separate; mso-table-lspace: 0pt; mso-table-rspace: 0pt; width: 100%;" width="100%">
                    <tr>
                      <td style="font-family: sans-serif; font-size: 14px; vertical-align: top;" valign="top">
                        <p style="font-family: sans-serif; font-size: 14px; font-weight: normal; margin: 0; Margin-bottom: 15px;">Bună <?php echo $this->e($prenume); ?>,</p>
                        <p style="font-family: sans-serif; font-size: 14px; font-weight: normal; margin: 0; Margin-bottom: 15px;">Felicitări! Solicitarea de înscriere a fost trimisă cu succes.</p>
                        <p style="font-family: sans-serif; font-size: 14px; font-weight: normal; margin: 0; Margin-bottom: 15px;">În scurt timp vei fi contactat de echipa noastră pentru a stabili exact în ce secție de votare vei fi reprezentant/delegat al USR.</p>
                        <p style="font-family: sans-serif; font-size: 14px; font-weight: normal; margin: 0; Margin-bottom: 15px;"><b>Vreau să fiu:</b><br><?php echo $this->e($tip); ?><?php if (isset($delegat)): ?><br>Dacă nu sunt atribuit ca reprezentant, sunt de acord să fiu și delegat<?php endif; ?><?php if (isset($confirmare)): ?><br>Confirm pe propria răspundere că nu sunt candidat sau rudă de până la gradul 2 a unui candidat<?php endif; ?></p>
                        <p style="font-family: sans-serif; font-size: 14px; font-weight: normal; margin: 0; Margin-bottom: 15px;"><b>Prenume:</b><br><?php echo $this->e($prenume); ?></p>
                        <p style="font-family: sans-serif; font-size: 14px; font-weight: normal; margin: 0; Margin-bottom: 15px;"><b>Nume de familie:</b><br><?php echo $this->e($nume); ?></p>
                        <p style="font-family: sans-serif; font-size: 14px; font-weight: normal; margin: 0; Margin-bottom: 15px;"><b>Email:</b><br><?php echo $this->e($email); ?></p>
                        <p style="font-family: sans-serif; font-size: 14px; font-weight: normal; margin: 0; Margin-bottom: 15px;"><b>Număr de telefon:</b><br><?php echo $this->e($telefon); ?></p>
                        <p style="font-family: sans-serif; font-size: 14px; font-weight: normal; margin: 0; Margin-bottom: 15px;"><b>CNP:</b><br><?php echo $this->e($cnp); ?></p>
                        <p style="font-family: sans-serif; font-size: 14px; font-weight: normal; margin: 0; Margin-bottom: 15px;"><b>Serie CI:</b><br><?php echo $this->e($serie); ?></p>
                        <p style="font-family: sans-serif; font-size: 14px; font-weight: normal; margin: 0; Margin-bottom: 15px;"><b>Număr CI:</b><br><?php echo $this->e($numar); ?></p>
                        <p style="font-family: sans-serif; font-size: 14px; font-weight: normal; margin: 0; Margin-bottom: 15px;"><b>Adresa din buletin:</b><br><?php echo $this->e($adresa); ?></p>
                        <p style="font-family: sans-serif; font-size: 14px; font-weight: normal; margin: 0; Margin-bottom: 15px;"><b>Județ repartizare:</b><br><?php echo $this->e($regiune); ?></p>
                        <p style="font-family: sans-serif; font-size: 14px; font-weight: normal; margin: 0; Margin-bottom: 15px;"><b>Localitatea unde doresc să activez:</b><br><?php echo $this->e($localitate); ?></p>
                        <p style="font-family: sans-serif; font-size: 14px; font-weight: normal; margin: 0; Margin-bottom: 15px;"><b>Țara:</b><br><?php echo $this->e($tara); ?></p>
                        <p style="font-family: sans-serif; font-size: 14px; font-weight: normal; margin: 0; Margin-bottom: 15px;"><b>Observații:</b><br><?php echo empty($observatii) ? '&mdash;' : $this->e($observatii); ?></p>
                        <p style="font-family: sans-serif; font-size: 14px; font-weight: normal; margin: 0; Margin-bottom: 15px;"><b>Sunt de acord să intru în baza de date USR</b></p>
                        <p style="font-family: sans-serif; font-size: 14px; font-weight: normal; margin: 0; Margin-bottom: 15px;">Ne trebuie cât mai mulți reprezentanți și delegați care să supravegheze procesul de votare, așa că te rugăm să vorbești cu prietenii, familia și vecinii tăi să completeze și ei formularul.</p>
                        <table border="0" cellpadding="0" cellspacing="0" class="btn btn-primary" style="border-collapse: separate; mso-table-lspace: 0pt; mso-table-rspace: 0pt; width: 100%; box-sizing: border-box;" width="100%">
                          <tbody>
                            <tr>
                              <td align="left" style="font-family: sans-serif; font-size: 14px; vertical-align: top; padding-bottom: 15px;" valign="top">
                                <table border="0" cellpadding="0" cellspacing="0" style="border-collapse: separate; mso-table-lspace: 0pt; mso-table-rspace: 0pt; width: auto;">
                                  <tbody>
                                    <tr>
                                      <td style="font-family: sans-serif; font-size: 14px; vertical-align: top; background-color: #3498db; border-radius: 5px; text-align: center;" valign="top" bgcolor="#3498db" align="center"><a href="https://www.facebook.com/sharer.php?u=https://alegeri.usr.ro/" target="_blank" style="display: inline-block; color: #ffffff; background-color: #3498db; border: solid 1px #3498db; border-radius: 5px; box-sizing: border-box; cursor: pointer; text-decoration: none; font-size: 14px; font-weight: bold; margin: 0; padding: 12px 25px; border-color: #3498db;">Distribuie pe Facebook</a></td>
                                    </tr>
                                  </tbody>
                                </table>
                              </td>
                            </tr>
                          </tbody>
                        </table>
                        <p style="font-family: sans-serif; font-size: 14px; font-weight: normal; margin: 0; Margin-bottom: 15px;">Termenul limită de înscriere a reprezenților este pe 25 noiembrie, iar al delegaților pe 4 decembrie.</p>
                        <p style="font-family: sans-serif; font-size: 14px; font-weight: normal; margin: 0; Margin-bottom: 15px;">Îți mulțumim pentru înscriere!</p>
                      </td>
                    </tr>
                  </table>
                </td>
              </tr>
            </table>
            <!-- END MAIN CONTENT AREA -->
            <!-- START FOOTER -->
            <div style="clear: both; padding-top: 10px; width: 100%;">
              <table border="0" cellpadding="0" cellspacing="0" style="border-collapse: separate; mso-table-lspace: 0pt; mso-table-rspace: 0pt; width: 100%;" width="100%">
                <tr>
                  <td style="font-family: sans-serif; vertical-align: top; padding-top: 10px; padding-bottom: 10px; font-size: 12px; color: #999999;" valign="top">
                    Prin completarea prezentului formular, persoana vizată își exprimă consimțământul pentru prelucrarea datelor sale cu caracter personal de către Uniunea Salvați România, în scopul desemnării de reprezentanți si delegați în secțiile de votare organizate pentru alegerile parlamentare din data de 11 decembrie 2016, și pentru comunicarea acestor date cu caracter personal către birourile și oficiile electorale competente, în conformitate cu dispozițiile art. 15 alin. (5), art. 89 alin. (11) din Legea nr. 208/2015 privind alegerea Senatului și a Camerei Deputaților, și art. 5 din Decizia Biroului Electoral Central nr. 73D/21.10.2016 privind unele măsuri pentru buna organizare și desfășurare a alegerilor pentru Senat și Camera Deputaților din data de 11 decembrie 2016. Nefurnizarea datelor cu caracter personal cerute prin prezentul formular atrage imposibilitatea desemnării persoanei vizate ca reprezentant sau delegat al Uniunii Salvați România în secțiile de votare organizate pentru alegerile parlamentare din data de 11 decembrie 2016. În conformitate cu dispozițiile Legii nr. 677/2001 pentru protecția persoanelor cu privire la prelucrarea datelor cu caracter personal și libera circulație a acestor date, persoana vizată își poate exercita dreptul de acces la date, dreptul de intervenție asupra datelor sau dreptul de opoziție justificată, prin transmiterea unei cereri scrise, datate și semnate către Uniunea Salvați România, la adresa de email <a href="mailto:alegeri@usr.ro" style="text-decoration: underline; color: #999999; font-size: 12px;">alegeri@usr.ro</a>.
                  </td>
                </tr>
              </table>
            </div>
            <!-- END FOOTER -->
          </div>
          <!-- END CENTERED WHITE CONTAINER -->
        </td>
        <td style="font-family: sans-serif; font-size: 14px; vertical-align: top;" valign="top">&nbsp;</td>
      </tr>
    </table>
  </body>
</html>
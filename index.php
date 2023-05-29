<?php
session_start();
  include 'config/config.php';
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>K E L U L U S A N | SMPN 4 BANJAR</title>
    <link href="img/nepatba_ico.ico" rel="icon">
    <link href="assets/dist/css/bootstrap.css" rel="stylesheet">
    <!-- <script src="assets/dist/js/jquery.min.js" charset="utf-8"></script> -->
    <script type="text/javascript" src="assets/dist/js/jquery.1.7.2.js"></script>
    <script src="assets/dist/js/jquery.mask.min.js" charset="utf-8"></script>
    <script type="text/javascript" src="assets/dist/js/jquery.syotimer.js"></script>
    <script type="text/javascript">
      $(document).ready(function(){
        // $('#no_peserta').mask("00-00-0000-0000-0");
          $('#simple-timer').syotimer({
            year: 2021,
            month: 6,
            day: 4,
            hour: 15,
            minute: 0,
            layout: 'dhms',
            // headTitle: '<h3>' +
            //         'Periodic Timer. ' +
            //         'The countdown begins first through each 10 days' +
            //     '</h3>' +
            //     '<p style="font-size:.8em;color:#666;">' +
            //         'The date equal 20:00 2015.01.01' +
            //     '</p>',
            effectType: 'opacity',
            periodic: true,
            periodInterval: 10,
            periodUnit: 'd'
        });
      });
    </script>
    <style media="screen">
      body{
        background: url(img/bg.png) repeat-x;
        background-color:#0e549c;
      }

      #login{
        -moz-border-radius: 25px;
        -webkit-border-radius: 15px;
        background-color:#fff;
        width:380px;
        height:470px;
        margin-top:100px;
        /* -moz-box-shadow: 0px 0px 10px;
        -webkit-box-shadow: 0px 0px 10px; */
        padding: 40px 20px 10px 20px;
        text-align: center;
      }

      .form-control{
        height: 60px;
        margin-bottom: 10px;
      }

      h2{
        font-weight: bold;
        margin-bottom: 20px;
      }

      button{
        width: 100%;
      }

      input[type="text"],  input[type="date"]{
        background-color: #f1f1f1;
        text-align: center;
      }


      .smp{
        color:#fff;
        font-weight:bold;
        font-size:32pt;
      }

      .waktu{
        text-align:center;
        /* padding-top:280px; */
        padding-top:150px;
      }

      .pengumuman{
        color:#fff;
        font-size:20pt;
      }
      @media (max-width: 768px) {
        .smp{
          font-size:20pt;
        }

        .waktu{
          padding-top:30px;
        }

        #login{
          width:320px;
          margin-top:30px;
        }

        .pengumuman{
          font-size:12pt;
        }
      }
    </style>
    <style type="text/css">
        /* Customization Style of SyoTimer */
        .syotimer{
            text-align: center;
            margin: 30px auto 0;
            padding: 0 0 10px;
        }
        .syotimer-cell{
            display: inline-block;
            margin: 0 5px;

            width: 79px;
            background: url(img/timer.png) no-repeat 0 0;
        }
        .syotimer-cell__value{
            font-size: 35px;
            color: #80a3ca;

            height: 81px;
            line-height: 81px;

            margin: 0 0 5px;
        }
        .syotimer-cell__unit{
            font-family: Arial, serif;
            font-size: 12px;
            text-transform: uppercase;
            color: #fff;
        }

        #simple-timer .syotimer-cell_type_day,
        #periodic-timer_period_days .syotimer-cell_type_hour,
        #layout-timer_only-seconds .syotimer-cell_type_second,
        #layout-timer_mixed-units .syotimer-cell_type_minute{
            width: 120px;
            background-image: url(img/timer_long.png);
        }

        .option{
            font-weight: 700;
        }



    </style>
    <script>
       function hanyaAngka(evt) {
         var charCode = (evt.which) ? evt.which : event.keyCode
          if (charCode > 31 && (charCode < 48 || charCode > 57))

           return false;
         return true;
       }
       </script>
  </head>
  <body>
    <?php
      // $tgl = new DateTime('2020-06-18 00:00:00');
      // $skr = new DateTime(date('Y-m-d H:i:s'));
      // if($skr > $tgl){
      //   echo "Siap";
      // }
    ?>
    <main role="main">
      <div class="container">
        <div class="row">
          <div class="col-md-7 text-right">
            <div class="waktu">
              <span class="pengumuman">PENGUMUMAN KELULUSAN</span><br>
              <span class="smp">DIBUKA DALAM</span><br>
              <div id="simple-timer"></div>
              <h1 class="smp">UPTD SMP NEGERI 4 BANJAR</h1>
            </div>

          </div>
        <div class="col-md-5">
          <div id="login" style="margin-left:auto;margin-right:auto;background-color:rgba(255,255,255,0.3)">
            <img src="img/logo_nepatba.png" height="90px"><br><br>
            <h2 style="color:#fff">LOGIN SISWA</h2>
            <form class="form" action="proses.php" method="post">
              <div class="form-group">
                <input onkeypress="return hanyaAngka(event)" type="text" id="nisn" name="nisn" class="form-control" placeholder="Masukan NISN" >
                <!-- <input type="text" name="tgl_lahir" class="form-control" placeholder="Masukan Tanggal Lahir" onfocus="(this.type='date')" onblur="(this.type='text')"> -->
              </div>
              <?php
                      require_once 'captcha.php';
                    ?>
              <div class="form-group">
                  <label style="color:#fff;font-weight:bold" for="captcha"><?php echo "$_SESSION[angka1] + $_SESSION[angka2] = ?"; ?></label>
                  <input onkeypress="return hanyaAngka(event)" type="text" name="captcha" id="captcha" class="form-control" placeholder="Masukan hasil penjumlahan di atas"  required>
              </div>
              <div class="form-group">
              <button type="submit" class="btn btn-primary btn-lg">LOGIN</button>
              </div>
            </form>
          </div>
        </div>
        </div>
        <div class="row">
          <div class="col-sm-12 text-center">
            <div style="color:#fff;font-size:10pt;padding-top:20px;height:80px;width:100%;">
                Copyright &copy; 2020. UPTD SMP Negeri 4 Banjar.<br>
                Created by Yoga Rizki Prayoga.<br>
				Modified by TIM IT SMPN 4 Banjar.
            </div>
          </div>
        </div>
      </div>
    </main>
  </body>
</html>

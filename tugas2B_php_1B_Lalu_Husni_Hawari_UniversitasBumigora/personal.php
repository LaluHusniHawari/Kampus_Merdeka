<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Colorlib Templates">
    <meta name="author" content="Colorlib">
    <meta name="keywords" content="Colorlib Templates">

    <!-- Title Page-->
    <title>Website Personal</title>

    <!-- Icons font CSS-->
    <link href="vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <!-- Font special for pages-->
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i" rel="stylesheet">

    <!-- Vendor CSS-->
    <link href="vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="vendor/datepicker/daterangepicker.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="css/main.css" rel="stylesheet" media="all">
</head>

<body>
    <div class="page-wrapper bg-blue p-t-100 p-b-100 font-robo">
        <div class="wrapper wrapper--w680">
            <div class="card card-1">
                <div class="card-heading"></div>
                <div class="card-body">
                    <h2 class="title">Website Personal</h2>
                    <form method="POST" action="proses.php">
                        <div class="input-group">
                            <input class="input--style-1" type="text" placeholder="Nama" name="nama">
                        </div>
                        <div class="input-group">
                            <div class="rs-select2 js-select-simple select--no-search">
                                <select name="pekerjaan">
                                    <option disabled="disabled" selected="selected">Pekerjaan</option>
                                        <!-- perulangan php -->
                                        <?php
                                            for($i = 1; $i <= 10; $i++) {
                                                ?>
                                                <option value="pekerjaan <?= $i ?>">Pekerjaan<?= $i ?></option>
                                        <?php
                                            }
                                        ?>
                                           
                                </select>
                                <div class="select-dropdown"></div>
                            </div>
                        </div>

                        <div class="form-check">
                               <?php
                               $hobby = 1;
                                    while($hobby <= 10) {
                                  
                                    ?>
                                    <input class="form-check-input" type="radio" name="hobby" id="hobby" value="hobby <?= $hobby ?>">
                                    <label class="form-check-label" for="flexRadioDefault1">
                                            Hobby <?= $hobby ?>
                                    </label>
                               <?php
                                $hobby++;
                                      }
                               ?>
                          </div>
    
                        <div class="p-t-20">
                            <button class="btn btn--radius btn--green" type="submit">KIRIM</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Jquery JS-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <!-- Vendor JS-->
    <script src="vendor/select2/select2.min.js"></script>
    <script src="vendor/datepicker/moment.min.js"></script>
    <script src="vendor/datepicker/daterangepicker.js"></script>

    <!-- Main JS-->
    <script src="js/global.js"></script>

</body>

</html>
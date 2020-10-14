<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/960.css">
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/text.css">
    <link rel="stylesheet" href="css/style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>tugas</title>
</head>
<body>
    <?php
        $logo = "Welcome";
        $name = "Mochammad Andika Putra Mubarok";
        $about="Aku adalaha mahasiswa di UPN Veteran Jawa Timur, aku mempunyai hobby main game.Aku merupakan anak ke 1 dari 2 bersaudara, berikut data diriku ";
        $tanggal_lahir ="13-05-2000";
        $tempat_lahir="Surabaya";
        $status="Mahasiswa";
        $sd="SDN Rangkah VI Surabaya";
        $smp="SMPN 8 Surabaya";
        $sma="SMA Trimurtri Surabaya";
        $universitas="Universitas Pembangunan Nasional 'Veteran' Jawa Timur";
        $card1="Paham dengan fungsi-fungsi yang ada dalam HTML5";
        $card2="Menguasai CSS3";
        $skill1="HTML";
        $skill2="CSS";

    ?>

    <div class="background">
        <div class="container_12">
            <div class="header">
                <div class="grid_7"><?php echo $logo ?></div>
                <div class="grid_5">
                    <div class="nav">
                        <button onclick="window.scrollTo(0, 0)">Home</button>
                        <button onclick="window.scrollTo(0, 780)">profil</button>
                        <button onclick="window.scrollTo(0, 1340)">pendidikan</button>
                        <button onclick="window.scrollTo(0, 1940)">Work</button>
                        <button onclick="window.scrollTo(0, 2100)">Contact</button>
                    </div>
                </div>
                <div class="grid_12">
                    <p>Hello </p>
                    <p><?php echo $name ?></p>
                </div>
            </div>

            <div class="profil">
                <div class="grid_6">
                    <img src="siamik.jpg"/>
                </div>
                <div class="grid_6">
                    <h1>profil</h1>
                    <p><?php echo $about ?> :</p>
                    <p>Tanggal Lahir : <?php echo $tanggal_lahir ?></p>
                    <p>Tempat Lahir  : <?php echo $tempat_lahir ?></p>
                    <p>Status        : <?php echo $status ?></p>
                </div>
            </div>


      <div class="grid_12 education">
                <h1>pendidikan</h1>
            </div>
            <div class="grid_1">
                <div class="item"></div>
            </div>
            <div class="grid_11 school">
                <p>Sekolah Dasar</p>
                <p><?php echo $sd ?></p>
            </div>
            <div class="grid_1">
                <div class="item2"></div>
            </div>
            <div class="grid_11 school">
                <p>Sekolah Menengah Pertama</p>
                <p><?php echo $smp ?></p>
            </div>
            <div class="grid_1">
                <div class="item3"></div>
            </div>
            <div class="grid_11 school">
                <p>Sekolah Menengah Atas</p>
                <p><?php echo $sma ?></p>
            </div>
            <div class="grid_1">
                <div class="item4"></div>
            </div>
            <div class="grid_11 school">
                <p>Univesitas</p>
                <p><?php echo $universitas ?></p>
            </div>


    <div class="grid_12 portofolio">
                <h1>My Portofolio</h1>
            </div>
            <div class="grid_4">
                <div class="card">
                    <img src="html.png">
                    <p><?php echo $card1 ?></p>
                </div>
            </div>
            <div class="grid_4">
                <div class="card">
                    <img src="css.jpg">
                    <p><?php echo $card2 ?></p>
                </div>
            </div>


      <div class="footer grid_7">
                <h1>SKILL</h1>
            </div>

            <div class="grid_7 skill">
                <div class="bar">
                    <div class="box1_1">
                        <p><?php echo $skill1 ?></p>
                    </div>
                    <div class="box1_2">
                        <div class="box1_3"></div>
                    </div>
                </div>
                <div class="bar">
                    <div class="box2_1">
                        <p><?php echo $skill2 ?></p>
                    </div>
                    <div class="box2_2">
                        <div class="box2_3"></div>
                    </div>
                </div>
            </div>

      <div class="footer grid_5">
                      <h1>Contact</h1>
                  </div>
            <div class="grid_5 contact">
                <img src="wa.jpg"/>
                <br>
                <img src="email.jpg"/>
            </div>
        </div>
    </div>
</body>
</html>

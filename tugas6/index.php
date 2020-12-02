<?php
  include 'conn.php';
  $skill1 = "Pemrograman";
  $skill2 = "Office";
?>

<!DOCTYPE html>
<html>
<head>
	<title>Profile</title>
	<link rel="stylesheet" href="./style.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  	<script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
  	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
</head>
<body>
	<div id="wrapper">

	<div id="header">
	<?php
      $query = "SELECT * FROM profil";
      $result = mysqli_query(connection(),$query);
      $data = mysqli_fetch_array($result);
  	?>
 
      <h1><?php echo $data['nama'] ?></h1>
      <i><?php echo $data['pekerjaan'] ?></i>
      <img src="./siamik.jng" alt="">
    </div>
	
		
	<div id="content">
		
		<div class="grid_6 aboutmecontact">
    		<div class="grid_6 aboutme">
      			<h2>About Me</h2>
      			<p><?php echo $data['about_me'] ?></p>
    		</div>
    
    		<div class="grid_6 contact">
      			<?php
        		$query = "SELECT * FROM contact";
       			$result = mysqli_query(connection(),$query);
      			?>

      			<h2>Contact</h2>
      			<ul class="text">
        		<?php while ($data = mysqli_fetch_array($result)): ?>
          		<li><a href="<?php echo $data['link'] ?>" target="_blank"><img src="img/<?php echo $data['gambar'] ?>" alt=""></a> : <?php echo $data['nama_contact'] ?></li>
        		<?php endwhile ?>
      			</ul>
    			</div>
  		</div>s
    
   	 	<br>

   	 	<div class="grid_6 goal">
    	<h2>Goals</h2>
    	 <div class="grid_6">
      		<ul class="text">
        <?php
          $query = "SELECT * FROM goals";
          $result = mysqli_query(connection(),$query);
          while ($data = mysqli_fetch_array($result)):
        ?>
          <li><?php echo $data['goal'] ?></li>
        <?php endwhile ?>
      	</ul>
    	 </div>
  		</div>
  </div>

  	<div id="inner">
	
    	<h2>Education</h2>
    	<?php
      require 'function.php';
      $pendidikan =query ("SELECT * FROM pendidikan");

    	?>
      <a href="tambah.php">Tambah Data Pendidikan</a>
      <br><br>
      
      <form action= "" method="post">

      <input type="text" name="keyword" size= "30" 
      placeholder="Masukan keyword pencarian" autocomplete="off">
      <button type="submit" name="cari">Cari</button>
  
      </form>
      <br><br>
      
      	<table border="1" cellpandding="40" cellspacing="0">
        <tr>
          <th>Jenjang</th>
          <th>Nama sekolah</th>
          <th>Alamat</th>
          <th>Aksi</th>
        </tr>

        <?php foreach ($pendidikan as $data ):?>
        
        <tr>
          <td><?= $data["jenjang"]; ?></td>
          <td><?= $data["nama_sekolah"]; ?></td>
          <td><?= $data["alamat"]; ?></td>
          <td>
              <a href="hapus.php?username=<?= $row["username"];?>">hapus</a>
        </tr>

      <?php endforeach; ?>
      </table>

    	<br>

    	<div class="grid_6 skill">
    			<div class="grid_6">
      			<h2>Skills</h2>
    			</div>
    		<div class="grid_2">
      			<ul>
        			<li><?php echo $skill1 ?></li>
        			<li><?php echo $skill2 ?></li>
      			</ul>
    		</div>
  		</div>
  	</div>

</body>
</html>
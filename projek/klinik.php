<?php 
$conn = mysqli_connect("localhost","root","","db_data");
$judul = $_GET["page"];
$hasil = mysqli_query($conn,"SELECT * FROM tb_arc WHERE judul_file = '$judul'");
$data = mysqli_fetch_assoc($hasil);
 ?>
    <!--================ Start Banner Area =================-->
    <section class="banner_area">
        <div class="banner_inner d-flex align-items-center">
            <div class="container">
                <div class="banner_content text-center">
                    <h2><?php echo $_GET["page"]; ?></h2>
                    <div class="page_link">
                        <a href="index.php">Home</a>
                        <a href="?page=klinik"><?php echo $_GET["page"]; ?></a>
                        <a href="?about">About</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--================ End Banner Area =================-->
    
    <!--================Contact Area =================-->
    <section class="section_gap">
        <div class="container">
        	<div class="text-center">
				<h2><?php echo $data["desc_arc"] ?></h2><br>
			</div>
			<div>
				<img src="projek/asset/<?php echo $data["gambar_1"] ?>.png" class="img-fluid" alt="Responsive image" style="margin-bottom: 20px;">
	            <img src="projek/asset/<?php echo $data["gambar_2"] ?>.png" class="img-fluid" alt="Responsive image" style="margin-bottom: 20px;">
	            <img src="projek/asset/<?php echo $data["gambar_3"] ?>.png" class="img-fluid" alt="Responsive image" style="margin-bottom: 20px;">
	            <img src="projek/asset/<?php echo $data["gambar_4"] ?>.png" class="img-fluid" alt="Responsive image" style="margin-bottom: 20px;">
			</div>
        </div>

    </section>
    <!--================Contact Area =================-->

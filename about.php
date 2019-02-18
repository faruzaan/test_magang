<?php 
$conn = mysqli_connect("localhost","root","","db_data");
$hasil = mysqli_query($conn,"SELECT * FROM tb_arc");
 ?>
   <!--================ Start About Us Area =================-->
	<section class="about_area section_gap">
        <div class="container">
            <div class="row justify-content-start align-items-center">
                <div class="col-lg-5">
                    <div class="about_img">
                        <img class="" src="img/about-us.png" alt="">
                    </div>
                </div>

                <div class="offset-lg-1 col-lg-5">
                    <div class="main_title text-left">
                        <h2>let’s <br>
                            Introduce about <br>
                            myself</h2>
                        <p>
                            Nama Muhammad Farhan Fauzaan, tempat tanggal lahir Cianjur 27 September 2001 
                            Tinggal di Jl Kapten Musa, Cianjur. Bahasa pemograman yang sudah pernah dipelajari <br>
                            <ul>
                                <li>
                                    C#
                                </li>
                                <li>
                                    Python
                                </li>
                                <li>
                                    Pascal
                                </li>
                                <li>
                                    C++
                                </li>
                                <li>
                                    Java
                                </li>
                                <li>
                                    Javascript
                                </li>
                                <li>
                                    HTML
                                </li>
                                <li>
                                    CSS
                                </li>
                                <li>
                                    PHP
                                </li>
                            </ul>
                        </p>
                        <p>
                            Motivasi dan Hal yang ingin dipelajari selama magang adalah <br>
                            untuk bisa menggali lebih dalam ilmu programming dan dapat <br>
                            mengaplikasikanya untuk membantu masyarakat baik dalam <br>
                            membagi ilmu dan pengerjaan sesuatu dengan memakai hasil <br>
                            dari pembuatan aplikasi/web itu tersendiri
                        </p>
                        <p>
                            Nomor HP : +62 822 1833 4321 <br>
                            Email    : farhan.ff.fauzaan@gmail.com
                            
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--================ End About Us Area =================-->
	<!--================ Start Slide Area =================-->
	<div class="testimonial_area section_gap_bottom">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8 text-center">
                    <div class="main_title">
                        <h2>Tugas / Projek</h2>
                        <p>Tugas / Projek yang pernah dikerjakan<br>
                                Selama belajar di SMKN 1 Cianjur</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="testi_slider owl-carousel">
                    <?php 
                        while ($data = mysqli_fetch_assoc($hasil)) :
                     ?>
                    <a href="?page=<?php echo $data["judul_file"]; ?>">
                    <div class="testi_item">
                        <div class="row">
                            <div class="col-lg-4">
                                <img src="img/<?php echo $data["gambar_logo"]; ?>.png" width="130px" height="130px" alt="">
                            </div>
                            <div class="col-lg-8">
                                <div class="testi_text">
                                    <h4><?php echo $data["judul"]; ?></h4>
                                    <p><?php echo $data["desc1"]; ?></p><br>
                                    <p><?php echo $data["desc2"]; ?></p>
                                </div>
                            </div>
                        </div>
                    </div>
                    </a>
                    <?php 
                    endwhile; ?>
                </div>
            </div>
        </div>
    </div>
    <!--================ End Testimonial Area =================-->

<?php

$conn = mysqli_connect('localhost', 'root', '', 'contact_db') or die('Oops! Connection Failed');

if (isset($_POST['send'])) {
    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $number = mysqli_real_escape_string($conn, $_POST['number']);
    $msg = mysqli_real_escape_string($conn, $_POST['message']);

    $select_message = mysqli_query($conn, "SELECT * FROM `contact_form` WHERE name = '$name' AND email = '$email' AND number = '$number' AND message = '$msg' ") or die('Oops! Message Selection Failed');

    if (mysqli_num_rows($select_message) > 0) {
        $message[] = 'Message Already Sent! <i class="fa fa-exclamation-triangle" style="font-size:20px;color:red"></i>';
    } else {
        mysqli_query($conn, "INSERT INTO `contact_form` (name, email, number, message) VALUES ('$name', '$email', '$number', '$msg')") or die('Oops! Query Failed');
        $message[] = 'Message Sent Successfully! <i class="fa fa-check" style="font-size:20px;color:green"></i>';
    }
}

?>


<!DOCTYPE html>
<html lang="en-US">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfolio Website</title>

    <!--== Font Awesome CDN Lnk ==-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css">

    <!--== Aos CSS Custom File Link ==-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css">

    <!--== Custom CSS File Lnk ==-->
    <link rel="stylesheet" href="style.css">
</head>

<body>

    <?php

    if (isset($message)) {
        foreach ($message as $message) {
            echo '<div class="message" data-aos="fade-out">
                            <span>' . $message . '</span>
                            <i class="fas fa-times" onclick="this.parentElement.remove();"></i>
                        </div>';
        }
    }

    ?>

    <!--== Header Section Starts ==-->

    <header class="header">

        <div id="menu-btn" class="fas fa-bars"></div>

        <a href="#home" class="logo">Portfolio Website</a>

        <nav class="navbar">
            <a href="#home" class="active">HOME</a>
            <a href="#about">ABOUT US</a>
            <a href="#skills">SKILLS</a>
            <a href="#services">SERVICES</a>
            <a href="#portfolio">PORTFOLIO</a>
            <a href="#contact">CONTACT</a>
        </nav>

        <div class="follow">
            <a href="https://www.facebook.com/" class="fab fa-facebook-f"></a>
            <a href="https://twitter.com/?lang=en" class="fab fa-twitter"></a>
            <a href="https://www.instagram.com/" class="fab fa-instagram"></a>
            <a href="https://www.linkedin.com/" class="fab fa-linkedin"></a>
            <a href="https://github.com/" class="fab fa-github"></a>
        </div>

    </header>

    <!--== Header Section Ends ==-->

    <!--== Home Section Starts ==-->

    <section class="home" id="home">

        <div class="image" data-aos="fade-right">
            <img src="images/programmer.jpg" alt="Oops-Fasogbon Olamide-img">
        </div>

        <div class="content">
            <h3 data-aos="fade-up">Hey! We are Shohaira Mughal, Duaa Zehra, Kainat Khowaja</h3>
            <span data-aos="fade-up">A SOFTWARE ENGINEER</span>
            <p data-aos="fade-up">Explore our projects, expertise, and achievements in coding. From web development to mobile apps, discover how we bring innovation to life through clean code and creative solutions. Let's connect and collaborate on your next tech endeavor.</p>
            <a data-aos="zoom-out" href="#about" class="btn">ABOUT US <i class="fa fa-info-circle" style="font-size:20px;color:#b0b4f3"></i></a>
        </div>

    </section>

    <!--== Home Section Ends ==-->

    <!--== About Section Starts ==-->

    <section class="about" id="about">

        <h1 class="heading" data-aos="fade-up"><span> BIOGRAPHY </span></h1>

        <div class="biography">

            <p data-aos="fade-up">Passionate software engineer with a knack for problem-solving and innovation. Experienced in various programming languages and technologies, with a focus on creating efficient and user-friendly solutions. Constantly seeking new challenges and opportunities to contribute to the world of technology.</p>

            <div class="bio">
                <h3 data-aos="zoom-in"><span>Name :</span>Shohaira Mughal</h3>
                <h3 data-aos="zoom-in"><span>Email :</span> shohairamughal@gmail.com </h3>
                <h3 data-aos="zoom-in"><span>Address :</span> Hyderabad, Pakistan </h3>
                <h3 data-aos="zoom-in"><span>Phone :</span> +92 3003287245 </h3>
                <h3 data-aos="zoom-in"><span>Experience :</span> 3 Years </h3>
            </div>

            <a href="cvvvv.pdf" target="_blank" type="application/pdf" class="btn" data-aos="zoom-out"> Download Shohaira's Resume. <i class="fa fa-external-link .btn-i" style="font-size:24px; color:#0000CD"></i></a>

            <div class="bio">
                <h3 data-aos="zoom-in"><span>Name :</span>Duaa Zehra</h3>
                <h3 data-aos="zoom-in"><span>Email :</span> duaazehra@gmail.com </h3>
                <h3 data-aos="zoom-in"><span>Address :</span> Hyderabad, Pakistan </h3>
                <h3 data-aos="zoom-in"><span>Phone :</span> +92 3003387345 </h3>
                <h3 data-aos="zoom-in"><span>Experience :</span> 3 Years </h3>
            </div>

            <a href="Duaa.pdf" target="_blank" type="application/pdf" class="btn" data-aos="zoom-out"> Download Duaa Zehra's Resume. <i class="fa fa-external-link .btn-i" style="font-size:24px; color:#0000CD"></i></a>

            <div class="bio">
                <h3 data-aos="zoom-in"><span>Name :</span>Kainat Khowaja</h3>
                <h3 data-aos="zoom-in"><span>Email :</span> Kainatkhowaja@gmail.com </h3>
                <h3 data-aos="zoom-in"><span>Address :</span> Hyderabad, Pakistan </h3>
                <h3 data-aos="zoom-in"><span>Phone :</span> +92 3013287349 </h3>
                <h3 data-aos="zoom-in"><span>Experience :</span> 3 Years </h3>
            </div>

            <a href="kainat.pdf" target="_blank" type="application/pdf" class="btn" data-aos="zoom-out"> Download Kainat Khowaja's Resume. <i class="fa fa-external-link .btn-i" style="font-size:24px; color:#0000CD"></i></a>

        </div>

        <div class="edu-exp">

            <h1 class="heading" data-aos="fade-up"> <span> EDUCATION & EXPERIENCE </span> </h1>

            <div class="row">

                <div class="box-container box">

                    <h3 class="title" data-aos="fade-up">Education</h3>

                    <div class="box baby" data-aos="fade-left">
                        <span>( Nov 2020 - Nov 2024 )</span>
                        <h3>BE. SOFTWARE ENGINEERING</h3>
                        <p>We gained a solid foundation in software engineering principles, algorithms, and data structures. Continuously expanding my knowledge through self-directed learning and hands-on experience in the field.</p>
                    </div>

                    <div class="box baby" data-aos="fade-right">
                        <span>( Feb 2022 - May 2022 )</span>
                        <h3>WORDPRESS</h3>
                        <p>We have pursued specialized courses and certifications in wordpress web development to further enhancing our skills and expertise in the ever-evolving field of technology. Committed to lifelong learning and staying abreast of the latest advancements in software engineering.</p>
                    </div>

                    <div class="box baby" data-aos="fade-left">
                        <span>( May 2022 - Oct 2022 )</span>
                        <h3>WEB DESIGNER</h3>
                        <p>We have pursued specialized courses and certifications in web development to further enhancing our skills and expertise in the ever-evolving field of technology. Committed to lifelong learning and staying abreast of the latest advancements in software engineering.</p>
                    </div>

                    <div class="box baby" data-aos="fade-right">
                        <span>( Nov 2022 - April 2023 )</span>
                        <h3>MOBILE APPLICATION DEVELOPER</h3>
                        <p>We have pursued specialized courses and certifications in mobile app development to further enhancing our skills and expertise in the ever-evolving field of technology. Committed to lifelong learning and staying abreast of the latest advancements in software engineering.</p>
                    </div>

                </div>

                <div class="box-container box">

                    <h3 class="title" data-aos="fade-up">Experience</h3>

                    <div class="box baby" data-aos="fade-right">
                        <span>( 2021 - 2022 )</span>
                        <h3>WEB DEVELOPER</h3>
                        <p>Proficient in creating responsive and dynamic websites using modern frameworks such as React and Angular. Experienced in front-end technologies like HTML, CSS, and JavaScript to deliver engaging user interfaces.</p>
                    </div>

                    <div class="box baby" data-aos="fade-left">
                        <span>( 2022 - Till Date. )</span>
                        <h3>FRONT-END DEVELOPER</h3>
                        <p> Specialized in crafting visually appealing and intuitive user interfaces using HTML, CSS, and JavaScript. Proficient in translating design mockups into responsive web layouts and ensuring seamless user experiences.</p>
                    </div>

                    <div class="box baby" data-aos="fade-right">
                        <span>( 2022 - Till Date. )</span>
                        <h3>FULL-STACK WEB DEVELOPER</h3>
                        <p>Skilled in both front-end and back-end development, with expertise in building scalable and robust web applications. Proficient in utilizing tools like Node.js, Express, and MongoDB for server-side development.</p>
                    </div>

                    <div class="box baby" data-aos="fade-left">
                        <span>( 2022 - Till Date. )</span>
                        <h3>MOBILE APPLICATION DEVELOPER</h3>
                        <p>Experienced in developing cross-platform mobile applications using frameworks such as React Native and Flutter. Proficient in building user-friendly interfaces and integrating complex functionalities.</p>
                    </div>

                </div>

            </div>

        </div>

        <section class="skills" id="skills" data-aos="fade-up">

            <h1 class="heading"> <span> SKILLS </span> </h1>

            <div class="progress">

                <div class="bar" data-aos="fade-left">
                    <h3> <span>HTML</span> <span>96%</span> </h3>
                </div>

                <div class="bar" data-aos="fade-right">
                    <h3> <span>CSS</span> <span>87%</span> </h3>
                </div>

                <div class="bar" data-aos="fade-left">
                    <h3> <span>JAVASCRIPT</span> <span>70%</span> </h3>
                </div>

                <div class="bar" data-aos="fade-right">
                    <h3> <span>PHP</span> <span>60%</span> </h3>
                </div>

                <div class="bar" data-aos="fade-left">
                    <h3> <span>PYTHON</span> <span>65%</span> </h3>
                </div>

                <div class="bar" data-aos="fade-right">
                    <h3> <span>SQL</span> <span>50%</span> </h3>
                </div>

                <div class="bar" data-aos="fade-right">
                    <h3> <span>C++</span> <span>50%</span> </h3>
                </div>

                <div class="bar" data-aos="fade-left">
                    <h3> <span>FLUTTER</span> <span>80%</span> </h3>
                </div>

                <div class="bar" data-aos="fade-left">
                    <h3> <span>JAVA</span> <span>89%</span> </h3>
                </div>

                

            </div>

        </section>



    </section>

    <!--== About Section Ends ==-->

    <!--== Services Section Starts ==-->

    <section class="services" id="services">

        <h1 class="heading" data-aos="fade-up"> <span>SERVICES</span> </h1>

        <div class="box-container">

        <div class="box" data-aos="zoom-in">
            <i class="fas fa-code"></i>
            <h3>WEB DEVELOPMENT</h3>
            <p>Expert in crafting dynamic and responsive websites using cutting-edge technologies like HTML, CSS, JavaScript, and modern frameworks such as React and Angular.</p>
        </div>
        
        <div class="box" data-aos="zoom-in">
            <i class="fas fa-paint-brush"></i>
            <h3>USER INTERFACE DESIGN</h3>
            <p>Proficient in designing visually stunning user interfaces that enhance user experience and engagement, utilizing principles of UX/UI design.</p>
        </div>
        
        <div class="box" data-aos="zoom-in">
            <i class="fab fa-bootstrap"></i>
            <h3>FRONT-END DEVELOPMENT</h3>
            <p>Skilled in front-end development, adept at translating design concepts into functional and intuitive web interfaces using HTML, CSS, and JavaScript.</p>
        </div>
        
        <div class="box" data-aos="zoom-in">
            <i class="fas fa-mobile-alt"></i>
            <h3>MOBILE APP DEVELOPMENT</h3>
            <p>Experienced in building cross-platform mobile applications using frameworks like React Native and Flutter, ensuring seamless performance and user experience.</p>
        </div>
        
        <div class="box" data-aos="zoom-in">
            <i class="fas fa-chart-line"></i>
            <h3>BACK-END DEVELOPMENT</h3>
            <p>Proficient in server-side development, utilizing tools such as Node.js, Express, and MongoDB to create scalable and efficient back-end solutions for web applications.</p>
        </div>
        
        <div class="box" data-aos="zoom-in">
            <i class="fas fa-bullhorn"></i>
             <h3>API INTEGRATION</h3>
             <p>Skilled in integrating APIs to enhance functionality and connectivity of web and mobile applications, ensuring seamless data exchange and communication.</p>
        </div>


    </div>

    </section>

    <!--== Services Section Ends ==-->

    <!--== Portfolio Section Starts ==-->

    <section class="portfolio" id="portfolio">

        <h1 class="heading" data-aos="fade-up"> <span>PORTFOLIO</span> </h1>

        <div class="box-container">
            <div class="box" data-aos="zoom-out">
                <img src="images/web-development.png" alt="Oops! Img-1">
                <h3>WEB DEVELOPMENT</h3>
                <span>(2022 - Present)</span>
            </div>
            
            <div class="box" data-aos="zoom-out">
                <img src="images/web-design.png" alt="Oops! Img-2">
                <h3>WEB DESIGN</h3>
                <span>(2022 - Present)</span>
            </div>
            
            <div class="box" data-aos="zoom-out">
                <img src="images/app.png" alt="Oops! Img-3">
                <h3>MOBILE APP DEVELOPMENT</h3>
                <span>(2022 - Present)</span>
            </div>
            
            <div class="box" data-aos="zoom-out">
                <img src="images/backend.png" alt="Oops! Img-4">
                <h3>BACK-END DEVELOPMENT</h3>
                <span>(2022 - Present)</span>
            </div>
            
            <div class="box" data-aos="zoom-out">
                 <img src="images/software.png" alt="Oops! Img-5">
                 <h3>API INTEGRATION</h3>
                  <span>(2022 - Present)</span>
            </div>
            
            <div class="box" data-aos="zoom-out">
                <img src="images/user-experience.png" alt="Oops! Img-6">
                <h3>FRONT-END DEVELOPMENT</h3>
                <span>(2022 - Present)</span>
            </div>


        </div>


    </section>

    <!--== Portfolio Section Ends ==-->

    <!--== Contact Section Starts ==-->

    <section class="contact" id="contact">

        <h1 class="heading" data-aos="fade-up"> <span>CONTACT ME</span> </h1>

        <form action="" method="post">

            <div class="flex">
                <input data-aos="fade-right" type="text" name="name" id="name" placeholder="Enter Your Name..." class="box" required>
                <input data-aos="fade-left" type="email" name="email" id="email" placeholder="Enter Your Email..." class="box" required>
            </div>

            <input data-aos="fade-up" type="number" min="0" name="number" id="number" placeholder="Enter Your Phone Number..." class="box" required>

            <textarea data-aos="fade-up" name="message" class="box" cols="30" rows="10" placeholder="Leave A Message..." required></textarea>

            <input data-aos="zoom-out" type="submit" value="Send Message Now!" name="send" id="home" class="btn">
        </form>

        <div class="box-container">

            <div class="box" data-aos="zoom-in">
                <i class="fas fa-phone"></i>
                <h3>Phone No:</h3>
                <p>+92 3003287245</p>
            </div>

            <div class="box" data-aos="zoom-in">
                <i class="fas fa-envelope"></i>
                <h3>Email:</h3>
                <p>duaashohairakainat@gmail.com</p>
            </div>

            <div class="box" data-aos="zoom-in">
                <i class="fas fa-map-marker-alt"></i>
                <h3>Address:</h3>
                <p>Hyderabad, Pakistan</p>
            </div>

        </div>

    </section>

    <!--== Contact Section Ends ==-->

    <!--== Credit Section ==-->

    <div class="credit">
        &copy; Copyright @ Certified. <?php echo date('Y'); ?> By Shohaira, Duaa, and Kainat 
    </div>

    <!--== Credit Section Ends ==-->


    <!--== Custom JS File Lnk ==-->
    <script src="js/script.js"></script>

    <!--== Aos JS Custom File Link ==-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>

    <script>
        AOS.init({
            duration: 800,
            delay: 300,
        });
    </script>
</body>

</html>
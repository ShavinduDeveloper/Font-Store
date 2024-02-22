<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <meta name="description" content="Shavindu Thushara Sampath">
        <meta name="keywords" content="Font, font, Font Download, fontdownload, FONT, FontDownload, Best Fonts, Fonts, fonts,">
        <title>Font Store | Free to Download</title>

        <!--Title bar icon-->
        <link rel ="icon" href ="src/Icon.png" type ="image/x-icon">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.2/font/bootstrap-icons.min.css">

        <link href="Style.css" rel="stylesheet" type="text/css"/>
    </head>
    <body id="ho">
        <?php
        require_once 'include/config.php';
        include 'include/functions.php';
        $fontArray = GetFontTable($conn);
        ?>
        <a href="src/vendor/font-awesome/fonts/Amelia-Normal.ttf"></a>
        <nav class="navbar navbar-expand-lg bg-body-tertiary" data-bs-theme="dark">
            <div class="container-fluid">
                <a id="navbar-brand" class="navbar-brand" href="index.php">STS Developement</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link" aria-current="page" href="#ho">Homepage</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#About">About Us</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" aria-current="page" href="#features">Features</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#fonts">Fonts</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasTop" aria-controls="offcanvasTop">Contact Us</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="admin.php"><i class="bi bi-gear"></i></a>
                        </li>
                    </ul>
                    <form class="d-flex" role="search">
                        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                        <button class="btn btn-outline-success" type="submit">Search</button>
                    </form>
                </div>
            </div>
        </nav>

        <!-- Body Content -->
        <!-- COVER -->
        <div id="Cover" class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div>
                <p>Font Store</p>
                <h1>Download the All Fonts You Need.</h1>
                <br>
                <a class="bi bi-arrow-down-circle-fill" href="#About"></a>
            </div>
        </div>

        <!-- ABOUT -->
        <div id="About" class="top col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div>
                <h1>About Us</h1>
                <h1 class="und">_&nbsp;&nbsp;&nbsp;&nbsp;_</h1>
                <br>
                <div>
                    <p id="about-p">Hi, My Name is Shavindu Thushara Sampath. 
                        This is a Web Application to Download the Font to help for your Day to Day Computer based Activies. 
                        Here is Collection of populer fonts I ever Used. Credits of the this Fonts are goes to there Real Owners and Makers. 
                        We are a team of font enthusiasts who believe that every design deserves a unique typeface. 
                        <br><br>Our mission is to make it easy for designers to find and download high-quality, free fonts. 
                        With a constantly growing collection of over [number] fonts, we strive to provide a diverse range of styles for every design project. 
                        Whether you're working on a professional project or just having fun with typography, we have a font for you. 
                        <br><br>Our website is user-friendly, with a simple interface that makes it easy to search for the perfect font. 
                        We carefully curate our collection, ensuring that every font is of the highest quality and free for personal and commercial use. 
                        With regular updates and new font releases, you're sure to find the right font for your project every time you visit. 
                        <br><br>Thank you for choosing us as your font destination. We're excited to be a part of your design journey and can't wait to see what you create.
                    </p>
                </div>
                <a class="bi bi-arrow-down-circle-fill" href="#features"></a>
            </div>
        </div>

        <!-- features -->
        <div id="features" class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div>
                <h1 class="top">Features</h1>
                <h1 class="und">_&nbsp;&nbsp;&nbsp;&nbsp;_</h1>
                <br>
                <div>
                    <div id="carouselExampleIndicators" class="carousel slide">
                        <div class="carousel-indicators">
                            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                        </div>
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <center><img src="src/original.png" class="d-block " width="300px" alt="..."></center>
                            </div> 
                            <div class="carousel-item">
                                <center><img src="src/Fast download.png" class="d-block" width="300px" alt="..."></center>
                            </div>
                            <div class="carousel-item">
                                <center><img src="src/Totally Free.png" class="d-block" width="300px" alt="..."></center>
                            </div>
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>

                    <ul id="features-p">
                        <div class="resume-item">
                            <h5>Wide Selection : </h5>
                            <li>Choose from a constantly growing collection of over [number] fonts, in a range of styles to suit every design project.</li>
                        </div>
                        <div class="resume-item">
                            <h5>Easy Search : </h5>
                            <li>Find the perfect font with our user-friendly interface and advanced search filters.</li>
                        </div>
                        <div class="resume-item">
                            <h5>High Quality : </h5>
                            <li>We carefully curate our collection, ensuring that every font is of the highest quality and free for personal and commercial use.</li>
                        </div>
                        <div class="resume-item">
                            <h5>Regular Updates : </h5>
                            <li>With new font releases and updates, you'll always have access to the latest and greatest font styles.</li>
                        </div>
                        <div class="resume-item">
                            <h5>User Friendly : </h5>
                            <li>Our simple, intuitive interface makes it easy to download and use the fonts you need.</li>
                        </div>
                        <div class="resume-item">
                            <h5>Commercial Use : </h5>
                            <li>All of our fonts are free for personal and commercial use, so you can use them in your projects without any restrictions.</li>
                        </div>
                        <div class="resume-item">
                            <h5>No Sign Up Required : </h5>
                            <li>Browse and download fonts without the hassle of creating an account.</li>
                        </div>
                    </ul>
                </div>
                <a class="bi bi-arrow-down-circle-fill" href="#fonts"></a>
            </div>
        </div>

        <!-- font -->
        <div id="fonts" class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div>
                <h1 class="top">Fonts</h1>
                <h1 class="und">_&nbsp;&nbsp;&nbsp;&nbsp;_</h1>
                <br>

                <?php
                if (!empty($fontArray)) {
                    foreach ($fontArray as $selectedArray) {
                        ?>
                        <style>
                            @font-face {
                                font-family: "<?= $selectedArray['font_name'] ?>";
                                src: url(Font/<?= $selectedArray['file_name'] ?>);
                            }
                        </style>
                        <div class="container">
                            <div class="col-lg-12">
                                <div class="card">
                                    <a>
                                        <button id="fno" class="btn btn-outline-danger"><?= $selectedArray['font_id'] ?></button>
                                    </a>
                                    <h2 class="font-title"><?= $selectedArray['font_name'] ?></h2>
                                    <hr>
                                    <p  class="preview" style="font-family: '<?= $selectedArray['font_name'] ?>'">
                                        Typography is the art and technique of arranging type to make written language legible, readable and appealing when displayed.
                                    </p>
                                    <div>
                                        <a href="Font/<?= $selectedArray['file_name'] ?>" data-bs-toggle="modal" data-bs-target="#downloadSuccessModal">
                                            <button class="btn btn-success" onclick="downloadFont('<?= $selectedArray['file_name'] ?>')">Download</button>
                                        </a>
                                        <a type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasView" aria-controls="offcanvasView">
                                            <button class="btn btn-light">View</button>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php
                    }
                }
                ?>
            </div>
        </div>

        <!-- contact -->
        <div id="contact" class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div>
                <div class="offcanvas offcanvas-top" tabindex="-1" id="offcanvasTop" aria-labelledby="offcanvasTopLabel">
                    <div class="offcanvas-header">
                        <h5 class="offcanvas-title" id="offcanvasTopLabel">Contact Us</h5>
                        <a type="button" class="bi bi-x-circle-fill" data-bs-dismiss="offcanvas" aria-label="Close"></a>
                    </div>
                    <div class="offcanvas-body">
                        <section id="contact" class="contact">
                            <div class="row con">
                                <div class="col-lg-5 d-flex align-items-stretch">
                                    <div class="info">
                                        <div class="col-lg-12 col-md-5 col-sm-5 col-xs-12">
                                            <div class="address">
                                                <i class="bi bi-geo-alt"></i>
                                                <h4>Location:</h4>
                                                <p>73 / A / 4,<br>Badanagodagama,<br>Beruwala,<br>Sri Lanka.</p>
                                            </div>
                                            <div class="email">
                                                <i class="bi bi-envelope"></i>
                                                <h4>Email:</h4>
                                                <p>shavindusampath@gmail.com</p>
                                            </div>

                                            <div class="phone">
                                                <i class="bi bi-phone"></i>
                                                <h4>Call:</h4>
                                                <p>+94 76 129 6058</p>
                                            </div>
                                        </div>
                                        <div class="col-lg-12 col-md-7 col-sm-7 col-xs-12">
                                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d855.5837209547004!2d80.02032682916433!3d6.4793623322458185!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zNsKwMjgnNDUuNyJOIDgwwrAwMScxNS4yIkU!5e1!3m2!1sen!2slk!4v1629371321296!5m2!1sen!2slk" style="border:0; width: 100%; height: 290px;" allowfullscreen="" loading="lazy"></iframe>                        
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-7 col-md-12 col-sm-12 col-xs-12 mt-lg-0 d-flex  align-items-stretch">
                                    <form action="https://formspree.io/f/xvonzyrg" method="POST" class="php-email-form">
                                        <div class="headding">
                                            <h4>Your Message</h4>
                                        </div>
                                        <div class="row">
                                            <div class="form-group col-md-6">
                                                <label for="name">Your Name</label>
                                                <input type="text" name="Name" class="form-control" id="name" required>
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="name">Your Email</label>
                                                <input type="email" class="form-control" name="Email" id="email" required>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="name">Subject</label>
                                            <input type="text" class="form-control" name="Subject" id="subject" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="name">Message</label>
                                            <textarea class="form-control" name="Message" rows="10" required></textarea>
                                        </div>
                                        <div class="text-center">
                                            <button type="submit">Send Message</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </section>
                    </div>
                </div>
            </div>
        </div>


        <!-- view -->
        <div id="view" class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div>
                <div class="offcanvas offcanvas-top" tabindex="-1" id="offcanvasView" aria-labelledby="offcanvasTopLabel">
                    <div class="offcanvas-header">
                        <h5 class="offcanvas-title" id="offcanvasTopLabel">Overview Panel.</h5>
                        <a type="button" class="bi bi-x-circle-fill" data-bs-dismiss="offcanvas" aria-label="Close"></a>
                    </div>
                    <div class="offcanvas-body">
                        <section id="view" class="view">
                            <div class="row con">
                                <div class="tb">
                                    <div class="container text-center">
                                        <div class="row row-cols-auto">
                                            <div class="col">a</div>
                                            <div class="col">b</div>
                                            <div class="col">c</div>
                                            <div class="col">d</div>
                                            <div class="col">e</div>
                                            <div class="col">f</div>
                                            <div class="col">g</div>
                                            <div class="col">h</div>
                                            <div class="col">i</div>
                                            <div class="col">j</div>
                                            <div class="col">k</div>
                                            <div class="col">l</div>
                                            <div class="col">m</div>
                                            <div class="col">n</div>
                                            <div class="col">o</div>
                                            <div class="col">p</div>
                                            <div class="col">q</div>
                                            <div class="col">r</div>
                                            <div class="col">s</div>
                                            <div class="col">t</div>
                                            <div class="col">u</div>
                                            <div class="col">v</div>
                                            <div class="col">w</div>
                                            <div class="col">x</div>
                                            <div class="col">y</div>
                                            <div class="col">z</div>
                                        </div>
                                        <hr>
                                        <div class="row row-cols-auto">
                                            <div class="col">A</div>
                                            <div class="col">B</div>
                                            <div class="col">C</div>
                                            <div class="col">D</div>
                                            <div class="col">E</div>
                                            <div class="col">F</div>
                                            <div class="col">G</div>
                                            <div class="col">H</div>
                                            <div class="col">I</div>
                                            <div class="col">J</div>
                                            <div class="col">K</div>
                                            <div class="col">L</div>
                                            <div class="col">M</div>
                                            <div class="col">N</div>
                                            <div class="col">O</div>
                                            <div class="col">P</div>
                                            <div class="col">Q</div>
                                            <div class="col">R</div>
                                            <div class="col">S</div>
                                            <div class="col">T</div>
                                            <div class="col">U</div>
                                            <div class="col">V</div>
                                            <div class="col">W</div>
                                            <div class="col">X</div>
                                            <div class="col">Y</div>
                                            <div class="col">Z</div>
                                        </div>
                                        <hr>
                                        <div class="row row-cols-auto">
                                            <div class="col">0</div>
                                            <div class="col">1</div>
                                            <div class="col">2</div>
                                            <div class="col">3</div>
                                            <div class="col">4</div>
                                            <div class="col">5</div>
                                            <div class="col">6</div>
                                            <div class="col">7</div>
                                            <div class="col">8</div>
                                            <div class="col">9</div>
                                        </div>
                                        <hr>
                                        <div class="row row-cols-auto">
                                            <div class="col">.</div>
                                            <div class="col">,</div>
                                            <div class="col">+</div>
                                            <div class="col">-</div>
                                            <div class="col">!</div>
                                            <div class="col">@</div>
                                            <div class="col">#</div>
                                            <div class="col">%</div>
                                            <div class="col">?</div>
                                            <div class="col">&</div>
                                            <div class="col">_</div>
                                            <div class="col">( )</div>
                                            <div class="col">{ }</div>
                                            <div class="col">[ ]</div>
                                            <div class="col">' '</div>
                                            <div class="col">" "</div>
                                            <div class="col">:</div>
                                            <div class="col">;</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                    </div>
                </div>
            </div>
        </div>


        <!-- Thanks -->
        <div class="modal fade" id="downloadSuccessModal" tabindex="-1" aria-labelledby="downloadSuccessModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="downloadSuccessModalLabel">Font face Download Successful...</h5>
                        <a type="button" class="bi bi-x-circle-fill" data-bs-dismiss="modal" aria-label="Close"></a>
                    </div>
                    <div class="modal-body">
                        <section id="than" class="thank">
                            <div class="row">
                                <div id="thank-text" class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                    <img id="im" src="src/undraw_a_whole_year_vnfm.png" width="300px" alt="alt"/>
                                    <h6>Thank You For Downloading Your Fonts.</h6>
                                </div>
                            </div>
                        </section>
                    </div>
                </div>
            </div>
        </div>

        <div id="footers">
            <div>
                <a class="bi bi-arrow-up-circle-fill" href="#ho"></a>
            </div>
        </div>
        <footer class="footer">
            <div class="container-fluid">
                <p>&copy; 2023 <i class="company"> STS Development.</i> All rights reserved.</p>
            </div>
        </footer>
    </body>
    <script>
        function downloadFont(fileName) {
            // Replace the download link with the actual path to your fonts
            const downloadLink = `Font/${fileName}`;

            // Create an invisible anchor element to trigger the download
            const anchor = document.createElement('a');
            anchor.href = downloadLink;
            anchor.target = '_blank'; // Open in a new tab
            anchor.download = fileName;
            document.body.appendChild(anchor);
            anchor.click();
            document.body.removeChild(anchor);

            // Trigger the modal
            $('#downloadSuccessModal').modal('show');
        }
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>
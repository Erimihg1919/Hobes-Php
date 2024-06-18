<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Job openings</title>
    <link rel="icon" href="./assets/images/hobes_tech_logo.jpeg" type="image/icon type">
    <link rel="stylesheet" href="./style/main.css">
    <link rel="stylesheet" href="./style/header/header.css">
    <link rel="stylesheet" href="./style/career/jobs/jobs.css">


</head>

<body>
    <div class="navigator">
        <h1>Career</h1>
        <span>
            <a href="home">Home</a>
            <span>></span>
            <a href="career">Career</a>
        </span>
    </div>
    <header>
        <div class="logo" id="logofirst">
            <img src="./assets/images/hobes_tech_logo.jpeg" alt="">
        </div>
        <nav class="front">
            <ul>
                <li><a href="home">Home</a></li>
                <li><a href="about">About Us</a></li>
                <li><a href="products">Products</a></li>
                <li><a href="career" style="text-decoration: underline;text-underline-offset: 8px;">Career</a></li>
                <li><a href="contact">Contact</a></li>
            </ul>
            <a id="hamburgermenu"><img src="./assets/images/hamburger.svg" alt=""></a>
        </nav>
        <nav class="side">
            <div class="sidenav" id="sidenav">
                <div id="closesidenav">
                    <img src="./assets/images/cross.svg" class="cross" alt="">
                </div>
                <div class="sidenavlogo">
                    <img src="./assets/images/hobes_tech_logo.jpeg" alt="">
                </div>
                <ul>
                    <li><a href="home">Home</a></li>
                    <li><a href="about">About Us</a></li>
                    <li><a href="products">Products</a></li>
                    <li><a href="career" style="text-decoration: underline;text-underline-offset: 8px;">Career</a>
                    </li>
                    <li><a href="contact">Contact</a></li>
                </ul>
                <div class="socials">
                    <ul>
                        <li><a href="https://www.facebook.com/hobestech" target="_blank"><img src="./assets/images/facebook.svg" alt=""></a></li>
                        <li><a href="https://www.instagram.com/hobes.tech/" target="_blank"><img src="./assets/images/instagram.svg" alt=""></a></li>
                        <li><a href="https://www.linkedin.com/company/hobes-tech/" target="_blank"><img src="./assets/images/linkdeln.svg" alt=""></a></li>
                    </ul>
                </div>
            </div>
        </nav>
        <div class="bluraftersidenav"></div>
    </header>
    <script src="script/header/header.js"></script>


    <div class="joblisting">
        <div class="left" id="joblistingleft">
            <div class="heading">
                <h2>Job Listing</h2>
                <span>There are many different jobs available in our capital. Find one that suits you.</span>
            </div>
            <div class="jobcards">
                <?php
                // Step 1: Read the JSON file
                $jsonString = @file_get_contents('jsons/jobs.json');
                if ($jsonString === false) {
                    // Handle the error
                    die('Error reading JSON file');
                }

                // Step 2: Parse the JSON string into a PHP array
                $dataArray = json_decode($jsonString, true);

                // Check if the JSON was correctly parsed
                if (json_last_error() !== JSON_ERROR_NONE) {
                    // Handle JSON parse error
                    die('JSON decoding error: ' . json_last_error_msg());
                }

                foreach ($dataArray as $key) {
                    // str_replace(' ', '', $key['jobTitle'])
                    // $hello=$key['jobTitle'].strip();
                   echo "<div class='jobcard'>
                    <div class='jobcardleft'>
                    <div class='orangerectangle'>
                    <img src='./assets/images/orangerectangle.svg' alt=''> </div>
                    <div class='jobcardleftcontent'>
                    <h3>".$key['jobTitle']."</h3>
                    <span>Valid till:". $key['validTill'] ." • ". $key['level'] ."</span></div>
                    </div> 
                    <div class='jobcardright'>
                        <button datakey=".str_replace(' ', '', $key['jobTitle']).">View Details -></button>
                    </div>
                </div>";
                }

                ?>
            </div>
            <div class="pagination" id="pagination">
                <!-- <a href="#" id="prev">Previous</a> 
                <a href="#" class="page-link" data-page="1">1</a> 
                <a href="#" class="page-link" data-page="2">2</a> 
                <a href="#" class="page-link" data-page="3">3</a> 
                <a href="#" id="next">Next</a>  -->
            </div>
            <span id="page-numbers"> </span>
        </div>
        <div class="right">
            <div class="formcontent">
                <h2>Didn’t Find Job Openings?</h2>
                <span>No worries, send us your CV, we will prioritize your application once there are job openings in your field of interest</span>
            </div>
            <div class="form">
                <form action="">
                    <input type="text" name="" id="" placeholder="First Name">
                    <input type="email" name="" id="" placeholder="Email Address">
                    <select name="" id="">
                          <option value="Select Catagory" default hidden>Select Catagory... </option>
                        <option value="System Analyst">System Analyst</option>
                        <option value="Web Developer">Web Developer</option>
                    </select>
                    <input type="file" name="uploadcv" id="uploadcv" hidden>
                    <label for="uploadcv">
                        <img src="./assets/career/Jobs/upload.svg" alt="">
                        <span>Upload Your CV</span>
                    </label>
                    <input type="file" name="uploadcoverletter" id="uploadcoverletter" hidden>
                    <label for="uploadcoverletter">
                        <img src="./assets/career/Jobs/upload.svg" alt="">
                        <span>Upload Cover Letter</span>
                    </label>
                    <span class="positionButton">
                        <span></span>
                        <button type="submit">Submit -></button>
                    </span>


                </form>
            </div>
        </div>
    </div>

    <script src="./script/career/pageintation.js"></script>
    <script src="./script/career/form.js"></script>
</body>

</html>
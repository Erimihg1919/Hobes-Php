<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Job openings</title>
    <link rel="icon" href=".././assets/images/hobes_tech_logo.jpeg" type="image/icon type">
    <link rel="stylesheet" href=".././style/main.css">
    <link rel="stylesheet" href=".././style/header/header.css">
    <link rel="stylesheet" href="../style/career/jobs/jobinside.css">


</head>

<body>
    <div class="navigator">
        <h1>Details</h1>
        <span>
            <a href="../home">Home</a>
            <span>></span>
            <a href="../jobs">Career List</a>
        </span>
    </div>
    <header>
        <div class="logo" id="logofirst">
            <img src=".././assets/images/hobes_tech_logo.jpeg" alt="">
        </div>
        <nav class="front">
            <ul>
                <li><a href="home">Home</a></li>
                <li><a href="about">About Us</a></li>
                <li><a href="products">Products</a></li>
                <li><a href="career" style="text-decoration: underline;text-underline-offset: 8px;">Career</a></li>
                <li><a href="contact">Contact</a></li>
            </ul>
            <a id="hamburgermenu"><img src=".././assets/images/hamburger.svg" alt=""></a>
        </nav>
        <nav class="side">
            <div class="sidenav" id="sidenav">
                <div id="closesidenav">
                    <img src=".././assets/images/cross.svg" class="cross" alt="">
                </div>
                <div class="sidenavlogo">
                    <img src=".././assets/images/hobes_tech_logo.jpeg" alt="">
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
                        <li><a href="https://www.facebook.com/hobestech" target="_blank"><img src=".././assets/images/facebook.svg" alt=""></a></li>
                        <li><a href="https://www.instagram.com/hobes.tech/" target="_blank"><img src=".././assets/images/instagram.svg" alt=""></a></li>
                        <li><a href="https://www.linkedin.com/company/hobes-tech/" target="_blank"><img src=".././assets/images/linkdeln.svg" alt=""></a></li>
                    </ul>
                </div>
            </div>
        </nav>
        <div class="bluraftersidenav"></div>
    </header>
    <script src="../script/header/header.js"></script>


    <div class="jobBody">

        <?php
        $existstatus = false;
        $url = $_SERVER['REQUEST_URI'];
        $url = substr($url, strpos($url, 'description') + 12);
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
            if (str_replace(' ', '', $key['jobTitle']) == $url) {
                $existstatus = true;
                echo "<div class='left'>
                <h1>" . $key['jobTitle'] . "</h1>
                <div class='jobBodysocials'>
                    <ul>
                        <li><a href='https://www.facebook.com/hobestech' target='_blank'><img src='.././assets/images/facebook.svg' alt=''></a></li>
                        <li><a href='https://www.instagram.com/hobes.tech/' target='_blank'><img src='.././assets/images/instagram.svg' alt=''></a></li>
                        <li><a href='https://www.linkedin.com/company/hobes-tech/' target='_blank'><img src='.././assets/images/linkdeln.svg' alt=''></a></li>
                    </ul>
                </div>";

                // For job description
                echo "<div class='descListings'>
                <div class='heading'>Job Description :
                </div>
                <ul>";
                foreach ($key['JobDescription'] as $desc) {
                    echo "<li><img src='../assets/career/Jobs/diamondbullet.svg' alt=''> <span>$desc</span></li>";
                }
                echo "</ul></div>";

                // For Qualification & Experience
                echo "<div class='descListings'>
                <div class='heading'>Qualification & Experience :
                </div>
                <ul>";
                foreach ($key['Qualification_Experience'] as $desc) {
                    echo "<li><img src='../assets/career/Jobs/diamondbullet.svg' alt=''> <span>$desc</span></li>";
                }
                echo "</ul></div>";
                // For Salaries and Benefits
                echo "<div class='descListings'>
                <div class='heading'>Salaries and Benefits:
                </div>
                <ul>";
                foreach ($key['Salaries_Benefits'] as $desc) {
                    echo "<li><img src='../assets/career/Jobs/diamondbullet.svg' alt=''> <span>$desc</span></li>";
                }
                echo "</ul></div>";

                // other static components
                echo "<!-- FORM -->
        <div class='Applyjob'>
            <h2>Apply For the Job</h2>
        </div>
        <form action=''>
            <input type='text' name='' id='' placeholder='First Name'>
            <input type='email' name='' id='' placeholder='Email Address'>
            <select name='' id=''>
                <option value='Select Catagory' default hidden>Select Catagory... </option>
                <option value='System Analyst'>System Analyst</option>
                <option value='Web Developer'>Web Developer</option>
            </select>
            <input type='file' name='uploadcv' id='uploadcv' hidden>
            <label for='uploadcv'>
                <img src='.././assets/career/Jobs/upload.svg' alt=''>
                <span>Upload Your CV</span>
            </label>
            <input type='file' name='uploadcoverletter' id='uploadcoverletter' hidden>
            <label for='uploadcoverletter'>
                <img src='.././assets/career/Jobs/upload.svg' alt=''>
                <span>Upload Cover Letter</span>
            </label>
            <span class='positionButton'>
                <span></span>
                <button type='submit'>Submit -></button>
            </span>


        </form>
    </div>
    <div class='right'>
        <div class='applycard'>
            <div class='reqno'>
                <img src='../assets/career/Jobs/peoplelogo.svg' alt=''>
                <span>Required No. : ".$key['requireNo']." </span>
            </div>
            <div class='post'>
                <img src='../assets/career/Jobs/suitcaselogo.svg' alt=''>
                <span>".$key['level']."</span>
            </div>
            <div class='validity'>
                <img src='../assets/career/Jobs/suitcaselogo.svg' alt=''>
                <span>Valid Until : ".$key['validTill']."</span>
            </div>
            <button class='Applyjob' id='Applyjob'>Apply</button>
        </div>


        <div class='ContactUsCard'>
            <div class='mail'>
                <img src='../assets/career/Jobs/peoplelogo.svg' alt=''>
                <span>info@hobes.tech</span>
            </div>
            <div class='contactText'>
                Did not find the job that you are looking for ?
            </div>
            <button class='ContactUs' id='ContactUs'>Contact Us</button>
        </div>
    </div>
    </div>";
            }
        }
        ?>




        <script src='.././script/career/pageintation.js'></script>
        <script src='.././script/career/form.js'></script>
</body>

</html>
<?php
// MoiSite by Jacob Sammon
// jacobsammon.com/moisite/

if(isset($_POST['makeconfig'])){
    $cf_file = fopen("config.php", "w");
    $content = "<?php
// MoiSite Configuration File
// Credits to Jacob Sammon (jacobsammon.com)
// Docs and More: jacobsammon.com/moisite/
unlink('makemoisite.php');
\$site_title = \"$_POST[name]\";
\$site_short_disc =  \"$_POST[tagline]\";
\$site_profile_img = \"$_POST[img]\";
\$main_disc = \"$_POST[bio]\";
\$email = \"$_POST[eml]\";
\$twitter_username = \"$_POST[twitter]\";
\$instagram_username = \"$_POST[instagram]\";
\$twitter = $_POST[entwi];
\$instagram = $_POST[enins];
\$contact_section = $_POST[encon];
?>";
    fwrite($cf_file, $content);
    fclose($cf_file);
}
?>
<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
        <style>
        @import url('https://fonts.googleapis.com/css2?family=Open+Sans&display=swap');
        @import url('https://fonts.googleapis.com/css2?family=Open+Sans&family=Poppins:wght@700&display=swap');
        body{
            padding-top:20px;
            padding-bottom:20px;
            font-family: 'Open Sans', sans-serif;
        }
        .ty-2{
            width: auto;
            max-width: 680px;
            padding: 0 15px;
        }
        .hr-1{
            border-width:3px;
            background-color:darkblue;
        }
        .title-x{
            color:darkblue;
        }
        .profile-img{
            height:220px;
        }
        h1{
            font-family: 'Poppins', sans-serif;
        }
        h3{
            font-family: 'Poppins', sans-serif;
        }
        .dist-form{
            background-color:#f1f1f1;
            padding:15px;
        }
        </style>
        <title>Make your MoiSite website!</title>
    </head>
    <body>
        <!--
            Website built using MoiSite
        ----------------------------------
                   MoiSite Credits:
        Dev: Jacob Sammon (jacobsammon.com)
        -->
        <div class="container ty-2">
            <h1 class="text-center title-x">MoiSite</h1>
            <p class="text-center lead">BETA, Version 0.0.3</p>
            <hr class="hr-1">
        </div>
        <div class="container ty-2">
            <h3>Info</h3>
            <p>This page will ask you to fill in a few boxes which will generate your <samp>config.php</samp> file. MoiSite is developed by <a href="https://jacobsammon.com">Jacob Sammon</a>, who has a passion for free, and open-source software, and wishes that everyone had a personal webpage.</p><p>The website for this project can be found at <a href="https://jacobsammon.com">jacobsammon.com/moisite/</a>; the site contains further documentation and support.</p>
            <hr>
            <h3>Begin</h3>
            <form method="post" action="" class="dist-form rounded">
                <h5><strong>Basics</strong></h5>
                <div class="mb-3">
                    <label class="form-label">Your Name</label>
                    <input type="text" class="form-control" name="name" placeholder="EG: John Doe">
                </div>
                <div class="mb-3">
                    <label class="form-label">Your Tagline</label>
                    <input type="text" class="form-control" name="tagline" placeholder="EG: A developer from London">
                </div>
                <div class="mb-3">
                    <label class="form-label">Introductory Paragraph/Bio</label>
                    <textarea class="form-control" name="bio"></textarea>
                </div>
                <div class="mb-3">
                    <label class="form-label">URL to Image <span class="text-muted">(currently default image)</span></label>
                    <input type="text" name="img" class="form-control" value="https://cdn.080820.xyz/img/default_profile.png">
                </div>
                <h5><strong>Options</strong></h5>
                <div class="mb-3">
                    <label class="form-label">Enable the contact section?</label>
                    <select name="encon" class="form-select">
                        <option value="TRUE">Yes</option>
                        <option value="FALSE">No</option>
                    </select>
                </div>
                <div class="mb-3">
                    <label class="form-label">Display your Twitter handle?</label>
                    <select name="entwi" class="form-select">
                        <option value="TRUE">Yes</option>
                        <option value="FALSE">No</option>
                    </select>
                </div>
                <div class="mb-3">
                    <label class="form-label">Display your Instagram handle?</label>
                    <select name="enins" class="form-select">
                        <option value="TRUE">Yes</option>
                        <option value="FALSE">No</option>
                    </select>
                </div>
                <h5><strong>Details</strong></h5>
                <div class="mb-3">
                    <label class="form-label">Your Email Address</label>
                    <input type="email" class="form-control" name="eml" placeholder="EG: jd@eml.pm">
                </div>
                <label for="formGroupExampleInput" class="form-label">Twitter Username</label>
                <div class="input-group mb-3">
                    <span class="input-group-text" id="basic-addon1">@</span>
                    <input type="text" class="form-control" placeholder="EG: joedoe123" aria-label="Username" name="twitter" aria-describedby="basic-addon1">
                </div>
                <label for="formGroupExampleInput" class="form-label">Instagram Username</label>
                <div class="input-group mb-3">
                    <span class="input-group-text" id="basic-addon1">@</span>
                    <input type="text" class="form-control" placeholder="EG: jdoe82" aria-label="Username" name="instagram" aria-describedby="basic-addon1">
                </div>
                <div class="input-group mb-3">
                    <button name="makeconfig" type="submit" class="btn btn-primary">Generate Config!</button>
                </div>
            </form>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
    </body>
</html>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us</title>

    <script src="contact.js"></script>

    <!-- Internal CSS -->
    <style>
body {
    margin: 0;
    font-family: Arial, sans-serif;
    background-image: url("../images/contactUs.jpg");
    background-repeat: no-repeat;
    background-size: cover;
    background-position: center;
}


        /* Main container */
        .contact-container {
            display: flex;
            justify-content: center;
            align-items: flex-start;
            gap: 40px;
            padding: 60px 80px;
            min-height: 70vh;
        }

        /* Form section (LEFT) */
fieldset {
    width: 55%;
background: rgba(238, 238, 238, 0.65);
    border: none;
    padding: 30px 40px;
    border-radius: 10px;
    box-shadow: 0 6px 20px rgba(0,0,0,0.4);
    color: #ffffff;
}
        fieldset h1 {
            margin-bottom: 25px;
            color: #1F3A5F;
        }

        input[type=text],
        input[type=phone],
        input[type=email],
        textarea {
            width: 100%;
            padding: 12px;
            margin-bottom: 15px;
            border-radius: 6px;
            border: 1px solid #ccc;
            font-size: 14px;
            font-family: Arial, sans-serif;
        }

        textarea {
            resize: none;
        }

        button {
            padding: 10px 22px;
            border: none;
            border-radius: 6px;
            cursor: pointer;
            font-size: 14px;
        }

        button[type=submit] {
            background-color: #1F3A5F;
            color: white;
            margin-right: 10px;
        }

        button[type=reset] {
            color: #1F3A5F;
            background-color: #efefefff;
            border: 2px solid #1F3A5F;
        }

        button:hover {
            opacity: 0.9;
        }

        /* Contact details section (RIGHT) */
aside {
    width: 35%;
    background: rgba(238, 238, 238, 0.65); /* dark transparent */
    padding: 30px;
    border-radius: 10px;
    box-shadow: 0 6px 20px rgba(0,0,0,0.4);
    color: #1F3A5F;
}
        aside h2 {
            color: #1F3A5F;
            margin-bottom: 20px;
        }

        aside b {
            color: #333;
        }

        aside a {
            text-decoration: none;
            color: #1F3A5F;
        }

        /* Social icons */
        .img1 {
            width: 35px;
            margin-right: 10px;
            transition: transform 0.3s;
        }

        .img2 {
            width: 75px;
            margin-right: 10px;
            transition: transform 0.3s;
        }

        .img1:hover, .img2:hover {
            transform: scale(1.1);
        }

        /* Responsive */
        @media (max-width: 900px) {
            .contact-container {
                flex-direction: column;
                padding: 30px;
            }

            fieldset, aside {
                width: 100%;
            }
        }
    </style>

    <!-- Header -->
    <?php require("Header.php"); ?>
</head>

<body>

    <!-- Main content -->
    <div class="contact-container">

        <!-- LEFT: Contact Form -->
        <fieldset>
            <h1>Contact Us</h1>

            <form method="POST" action="insertInquiry.php">
                <input type="text" placeholder="Inquiry Id" name="inqid" required>
                <input type="text" placeholder="Name" name="name" required>
                <input type="phone" placeholder="Phone" name="phone" required>
                <input type="email" placeholder="Email" name="email" required>
                <textarea placeholder="Message" name="message" rows="4" required></textarea>

                <button type="submit" onclick="successalert()">Submit</button>
                <button type="reset">Reset</button>
            </form>
        </fieldset>

        <!-- RIGHT: Contact Details -->
        <aside>
            <h2>Contact Details</h2>

            <b>Telephone</b><br><br>
            +947627272828<br>
            +947426309330<br><br><br>

            <b>Email</b><br><br>
            <a href="https://mail.google.com/mail/">insureme@gmail.com</a><br><br><br>

            <b>Social Media</b><br><br>
            <a href="https://www.facebook.com/">
                <img class="img1" src="../images/facebook.png" alt="Facebook">
            </a>
            <a href="https://twitter.com/">
                <img class="img2" src="../images/twitter.png" alt="Twitter">
            </a>
            <a href="https://www.instagram.com/">
                <img class="img1" src="../images/insta.png" alt="Instagram">
            </a>
            <a href="https://www.whatsapp.com/">
                <img class="img2" src="../images/whatsapp.png" alt="Whatsapp">
            </a>
        </aside>

    </div>

    <!-- Footer -->
    <?php require("Footer.php"); ?>

</body>
</html>

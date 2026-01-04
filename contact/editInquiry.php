<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Inquiry</title>

    <!-- Internal CSS -->
    <style>
        /* Page background */
        body {
            margin: 0;
            font-family: Arial, sans-serif;
            background-image: url("../images/editInq.jpg");
            background-repeat: no-repeat;
            background-size: cover;
            background-position: center;
            min-height: 100vh;
        }

        /* Form container */
        fieldset {
            width: 55%;
            margin: 80px auto;
            background: rgba(238, 238, 238, 0.65); /* transparent card */
            border: none;
            padding: 30px 40px;
            border-radius: 10px;
            box-shadow: 0 6px 20px rgba(0,0,0,0.4);
        }

        /* Heading */
        fieldset h1 {
            margin-bottom: 25px;
            color: #1F3A5F;
            text-align: center;
        }

        /* Inputs */
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

        /* Buttons */
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
            background-color: #efefef;
            border: 2px solid #1F3A5F;
        }

        button:hover {
            opacity: 0.9;
        }

        /* Responsive */
        @media (max-width: 900px) {
            fieldset {
                width: 90%;
                margin: 40px auto;
            }
        }
    </style>

    <!-- Header -->
    <?php require("Header.php"); ?>
</head>

<body>

    <!-- Edit Inquiry Form -->
    <fieldset>
        <h1>Edit Inquiry</h1>

        <form method="POST" action="updateInquiry.php">
            <input type="text" placeholder="Inquiry Id" name="inqid" required>
            <input type="text" placeholder="Name" name="name" required>
            <input type="phone" placeholder="Phone" name="phone" required>
            <input type="email" placeholder="Email" name="email" required>
            <textarea placeholder="Message" name="message" rows="4" required></textarea>

            <button type="submit">Edit</button>
            <button type="reset">Reset</button>
        </form>
    </fieldset>

    <!-- Footer -->
    <?php require("Footer.php"); ?>

</body>
</html>

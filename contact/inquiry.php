<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inquiry</title>

    <!-- Internal CSS -->
    <style>
        @charset "utf-8";

        /* Page base */
        html, body {
            height: 100%;
            margin: 0;
            font-family: Arial, sans-serif;
            background: #f4f6f8;
        }

        /* Page title */
        h1 {
            text-align: center;
            margin-top: 30px;
            color: #1F3A5F;
        }

        /* Table container (card style) */
        .part1 {
            width: 95%;
            margin: 30px auto;
            background: rgba(255, 255, 255, 0.85);
            border-radius: 12px;
            box-shadow: 0 8px 25px rgba(0,0,0,0.15);
            padding: 20px;
            overflow-x: auto;
        }

        /* Table */
        table {
            width: 100%;
            border-collapse: collapse;
            border-radius: 10px;
            overflow: hidden;
        }

        /* Table header */
        th {
            background-color: #1F3A5F;
            color: #ffffff;
            padding: 14px;
            font-size: 14px;
            text-align: left;
            letter-spacing: 0.5px;
        }

        /* Table cells */
        td {
            padding: 12px 14px;
            font-size: 14px;
            color: #333;
            border-bottom: 1px solid #e0e0e0;
            vertical-align: top;
        }

        /* Row hover effect */
        tr:hover {
            background-color: #f1f6fb;
        }

        /* Action buttons */
        button {
            border-radius: 6px;
            color: white;
            padding: 8px 14px;
            font-size: 13px;
            cursor: pointer;
            border: none;
            transition: all 0.3s ease;
        }

        /* Edit button */
        #btn1 {
            background-color: #1e74ca;
        }

        #btn1:hover {
            background-color: #155ca3;
            transform: translateY(-2px);
        }

        /* Delete button */
        #btn2 {
            background-color: #e63946;
        }

        #btn2:hover {
            background-color: #c62828;
            transform: translateY(-2px);
        }

        /* Footer alignment */
        .part2 {
            margin-top: auto;
        }

        /* Responsive table */
        @media (max-width: 768px) {

            table, thead, tbody, th, td, tr {
                display: block;
            }

            th {
                display: none;
            }

            tr {
                background: #ffffff;
                margin-bottom: 15px;
                border-radius: 10px;
                box-shadow: 0 4px 12px rgba(0,0,0,0.1);
                padding: 10px;
            }

            td {
                border: none;
                padding: 8px 10px;
                position: relative;
            }

            td::before {
                content: attr(data-label);
                font-weight: bold;
                color: #1F3A5F;
                display: block;
                margin-bottom: 4px;
            }
        }
    </style>

    <!-- configuration file -->
    <?php require 'config.php'; ?>

    <!-- header file -->
    <?php require("Header.php"); ?>
</head>

<body>

    <h1>Inquiries</h1>

    <div class="part1">
        <table>
            <tr>
                <th>InqID</th>
                <th>Name</th>
                <th>Phone</th>
                <th>Email</th>
                <th>Message</th>
                <th>Action</th>
            </tr>

            <!-- read data -->
            <?php
                $sql = "SELECT InqID, Name, Phone, Email, Message FROM contact";
                $result = $con->query($sql);

                if ($result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {
                        echo "<tr>";
                        echo "<td>".$row['InqID']."</td>";
                        echo "<td>".$row['Name']."</td>";
                        echo "<td>".$row['Phone']."</td>";
                        echo "<td>".$row['Email']."</td>";
                        echo "<td>".$row['Message']."</td>";
                        echo "<td>
                                <a href='editInquiry.php'><button id='btn1'>EDIT</button></a>
                                <a href='deleteInquiry.php?inqid={$row['InqID']}'><button id='btn2'>DELETE</button></a>
                              </td>";
                        echo "</tr>";
                    }
                } else {
                    echo "<tr><td colspan='6'>No results found</td></tr>";
                }

                $con->close();
            ?>
        </table>
    </div>

    <div class="part2">
        <?php require("Footer.php"); ?>
    </div>

</body>
</html>

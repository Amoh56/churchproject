
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Adding members</title>
    <style>
        .adding-members {
            max-width: 965px;
            margin-left: 15%;
            margin-top: 10%;
            background-image: url(../images/church_3.jpeg);
        }

        /* full width inputs */
        input[type=text],
        input[type=password],
        button {
            width: 100%;
            padding: 12px 20px;
            margin: 8px 0;
            display: inline-block;
            border: 1px solid #ccc;
            box-sizing: border-box;

        }

        button {
            background-color: green;
        }

        button:hover {
            opacity: 0.8;
            cursor: pointer;
        }

        @media only screen and (max-width:768px) {
            .adding-members {
                max-width: auto;
                margin-left: 0px;
                margin-top: 2%;
                background-image: url(../images/church_2.jpeg);
            }

            /* full width inputs */
            input[type=text],
            input[type=password] {
                width: 100%;
                padding: 12px 20px;
                margin: 8px 0;
                display: inline-block;
                border: 1px solid #ccc;
                box-sizing: border-box;

            }
            .member-edit-btns{
                width: auto;
                float: right;
                text-decoration: none;
            }
        }
    </style>
</head>

<body>
    <!-- a div to add members to their respective jumuiya -->
    <div class="adding-members">
        <h3 style="text-align: center;">ADD MEMBERS</h3>
        <a href="../index.php" style="text-decoration: none; color:black; background: #ccc;">Home</a>
        <a href="./databasetowebpage.php" style="text-decoration: none; color:black; background: #ccc;">Back to Admin</a>
        <h4>NB: <mark>Use lower case in jumuiya and do not include (st). e.g. joseph not st.joseph</mark></h4>
        <form action="insertmembers.php" method="POST">
            <label for="jumuiya">Jumuiya</label>
            <input type="text" placeholder="Enter jumuiya name" name="jumuiya" required>
            <label for="firstame">First Name</label>
            <input type="text" placeholder="Enter first name" name="firstname" required>
            <label for="lastname">Middle Name</label>
            <input type="text" placeholder="Enter middle name" name="lastname" required>
            <label for="surname">Surname</label>
            <input type="text" placeholder="Enter surname" name="surname">
            <!-- member editing buttons -->
            <div class="member-edit-btns">
                <button type="submit" name="add-members-btn" class="btn btn-primary">ADD</button>
                <button type="submit" name="delete-members-btn" class="btn btn-danger">DELETE</button>

            </div>

        </form>

    </div>

</body>

</html>
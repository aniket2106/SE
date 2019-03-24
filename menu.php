
<!DOCTYPE html>
<html>
<head>
    <title>MENU</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet"> -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="menu.css">
</head>
<body>
    <!-- Nav bar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="index.html">Scan-N-Order</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active"><a class="nav-link" href="menu.php">Menu</a></li>
                <li class="nav-item"><a class="nav-link" href="contact_us.html">Contact Us</a></li>
            </ul>
            <button id="login" class="btn btn-outline-success my-2 my-sm-0" type="submit" style="width: 200px; background: #2ecc71;color: white;" onclick="location.href ='login.html'">Login</button>
        </div>
    </nav>

    <!-- Heading -->
    <center>
        <h2>MENU</h2>
        <!-- <table class="table"> -->
            <!-- <php while($rows=mysqli_fetch_assoc($result)) { ?>
                    <tr>
                        <td class="number"><php echo $rows['Number']; echo ".";?></td>
                        <td class="name"><php echo $rows['Name'];?></td>
                        <td class="price"><input type='hidden'><php echo value="" "₹"; echo $rows['Price'];?></td>
                        <td><button id="addbtn">ADD</button></td>
                    </tr>
            <php } ?> -->
        <!-- </table> -->
        <form action="server.php" method='post'>
        <table class="table">
            <tr>
                <th>Sr No.</th>
                <th>Name</th>
                <th>Price</th>
                <th>Quantity</th>
                <th>.</th>
            </tr>
            <tr>
                <td>1</td>
                <td><input type='hidden' name='n1' value="Tomato Soup">Tomato Soup</td>
                <td class="price"><input type='hidden' name='p1' value="50">50</td>
                <td><input type="number" name="q1" value="0"></td>
                <td><button class="btns" type="button" name="b1">Add</button></td>
            </tr>
            <tr>
                <td>2</td>
                <td><input type='hidden' name='n2' value="Manchow Soup">Manchow Soup</td>
                <td class="price"><input type='hidden' name='p2' value="60">60</td>
                <td><input type="number" name="q2" value="0"></td>
                <td><button class="btns" type="button" name="b2">Add</button></td>
            </tr>
            <tr>
                <td>3</td>
                <td><input type='hidden' name='n3' value="Paneer Chilly">Paneer Chilly</td>
                <td class="price"><input type='hidden' name='p3' value="110">110</td>
                <td><input type="number" name="q3" value="0"></td>
                <td><button class="btns" type="button" name="b3">Add</button></td>
            </tr>
            <tr>
                <td>4</td>
                <td><input type='hidden' name='n4' value="Machurian">Machurian</td>
                <td class="price"><input type='hidden' name='p4' value="90">90</td>
                <td><input type="number" name="q4" value="0"></td>
                <td><button class="btns" type="button" name="b4">Add</button></td>
            </tr>
            <tr>
                <td>5</td>
                <td><input type='hidden' name='n5' value="Veg Crispy">Veg Crispy</td>
                <td class="price"><input type='hidden' name='p5' value="120">120</td>
                <td><input type="number" name="q5" value="0"></td>
                <td><button class="btns" type="button" name="b5">Add</button></td>
            </tr>
            <tr>
                <td>6</td>
                <td><input type='hidden' name='n6' value="Chinese Bhel">Chinese Bhel</td>
                <td class="price"><input type='hidden' name='p6' value="90">90</td>
                <td><input type="number" name="q6" value="0"></td>
                <td><button class="btns" type="button" name="b6">Add</button></td>
            </tr>
            <tr>
                <td>7</td>
                <td><input type='hidden' name='n7' value="Paneer Tikka Masala">Paneer Tikka Masala</td>
                <td class="price"><input type='hidden' name='p7' value="120">120</td>
                <td><input type="number" name="q7" value="0"></td>
                <td><button class="btns" type="button" name="b7">Add</button></td>
            </tr>
            <tr>
                <td>8</td>
                <td><input type='hidden' name='n8' value="Panner Bhurji">Panner Bhurji</td>
                <td class="price"><input type='hidden' name='p8' value="120">120</td>
                <td><input type="number" name="q8" value="0"></td>
                <td><button class="btns" type="button" name="b8">Add</button></td>
            </tr>
            <tr>
                <td>9</td>
                <td><input type='hidden' name='n9' value="Tandoori Roti">Tandoori Roti</td>
                <td class="price"><input type='hidden' name='p9' value="20">20</td>
                <td><input type="number" name="q9" value="0"></td>
                <td><button class="btns" type="button" name="b9">Add</button></td>
            </tr>
            <tr>
                <td>10</td>
                <td><input type='hidden' name='n10' value="Jeera Rice">Jeera Rice</td>
                <td class="price"><input type='hidden' name='p10' value="70">70</td>
                <td><input type="number" name="q10" value="0"></td>
                <td><button class="btns" type="button" name="b10">Add</button></td>
            </tr>
        </table>
        <h1>Price: <span id='total'></span></h1>
            <button type="submit" class="btn btn-primary btn-block my-5 col-6" name="submit">Place Order</button>
        </form>
    </center>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="menu.js"></script>
</body>
</html>

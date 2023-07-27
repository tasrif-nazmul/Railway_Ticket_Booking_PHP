<!DOCTYPE html>
<html lang="en">
<head>
    <title>Railway E-Ticket</title>
    <link rel="stylesheet" href="assects/css/guest/style.css">
    <script src="https://kit.fontawesome.com/551a91791c.js" crossorigin="anonymous"></script>
</head>
<body>

<section class="main-part">
    <div class="main">
        <div class="navbar">
            <div class="icon">
                <h2 class="logo">Railway E-Ticket</h2>
            </div>

            <div class="menu">
                <ul>
                    <li><a href="#">HOME</a></li>
                    <li><a href="#">ABOUT</a></li>
                    <li><a href="views/trainInfo.php">Train Information</a></li>
                    <li><a href="views/reg.php">Signup</a></li>
                    <li><a href="views/login.php">Login</a></li>
                </ul>
            </div>

        </div> 
        <div class="content">

            
            <div class="form-container">
                <form>
                <h2 class="search-train">Search your Train</h2>
                <div class="form-group">
                <label for="fromStation">From:</label>
                <input type="text" id="fromStation" name="fromStation" placeholder="Enter From station" required>
                </div>

                <div class="form-group">
                <label for="toStation">To:</label>
                <input type="text" id="toStation" name="toStation" placeholder="Enter To station" required>
                </div>

                <div class="form-group">
                <label for="travelDate">Date:</label>
                <input type="date" id="travelDate" name="travelDate" placeholder="Pick your date" required>
                </div>

                <div class="form-search">
                <button type="submit"><i class="fa-solid fa-magnifying-glass"></i>Search Train</button>
                </div>
                </form>
            </div>
               
        </div>
    </div>
</section>

<section class="buying-instruction">
    <div class="bi-header">
        <h1>Follow this steps to buy ticket</h1>
        <span class="line-sep">__________________</span>
    </div>

    <div class="bi-steps">
        <div class="bi-steps1">
            <div class="bis-icon">
                <i class="fa-solid fa-magnifying-glass"></i>
            </div>

            <div class="bis-text">
                <h1 class="bist-main">Search</h1>
                <h5 class="bist-info">Choose your origin, destination, journey dates and search for train</h5>
            </div>
        </div>


        <div class="bi-steps2">
            <div class="bis-icon">
            <i class="fa-solid fa-train"></i>
            </div>

            <div class="bis-text">
                <h1 class="bist-main">Select</h1>
                <h5 class="bist-info">Select your desired trip and choose your seats</h5>
            </div>
        </div>


        <div class="bi-steps3">
            <div class="bis-icon">
            <i class="fa-solid fa-money-bills"></i>
            </div>

            <div class="bis-text">
                <h1 class="bist-main">Payment</h1>
                <h5 class="bist-info">Pay by bank cards, mobile banking, or cash</h5>
            </div>
        </div>
    </div>
</section>
</body>
</html>
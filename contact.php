<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/utils.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/contact.css">
    <link rel="stylesheet" href="css/mobile.css">
    <title>iBlog - Heaven for bloggers</title>
</head>
<body>
    <nav class="navigation max-width-1 m-auto">
        <div class="nav-left">
            <a href="/">
                <span><img src="img/logo.png" width="94px" alt=""></span>
            </a>
            <ul>
                <li><a href="/">Home</a></li>
                <li><a href="#">About</a></li>
                <li><a href="/contact.html">Contact</a></li>
            </ul>
        </div>
        <div class="nav-right">
            <form action="/search.html" method="get">
                <input class="form-input" type="text" name="query" placeholder="Article Search">
                <button class="btn">Search</button>
            </form>

        </div>

    </nav>
    <div class="max-width-1 m-auto">
        <hr>
    </div>
    <form class="contact-content font1 max-width-1 m-auto" action="user.php" method="post">
        <div class="max-width-1 m-auto mx-1">
            <h2>Feel Free to Contact Us</h2>
            <div class="contact-form">
                <div class="form-box">
                    <input type="text" name="user" placeholder="Enter Your Name" required>
                </div>
                <div class="form-box">
                    <input type="text" name="mobile" placeholder="Enter Your Phone Number" required>
                </div>
                <div class="form-box">
                    <input type="email" name="email" placeholder="Enter Your Email Id" required>
                </div>
                <div class="form-box">
                    <textarea name="comments" cols="30" rows="10" placeholder="How may we help you?" required></textarea>
                </div>
                <div class="form-box">
                    <button class="btn mt-2 mb-2" type="submit">Submit</button>
                </div>

            </div>
        </div>

    </form>
 

   

    <div class="footer">
        <p>Copyright &copy; iBlog.com </p>
         
    </div>
</body>
</html>
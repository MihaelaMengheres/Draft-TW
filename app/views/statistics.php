<!DOCTYPE html>
<html>
    <header>
    <link rel="stylesheet" type="text/css" href="http://localhost:1234/gasm/public/css/index.css">
        
        <h1 class="logo">GaSM</h1>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <input type="checkbox" id="nav-toggle" class="nav-toggle">
        <nav>
            <ul>
                <li><a href="http://localhost:1234/gasm/public/"><strong>🏡Home</strong></a></li>
                <li><a href="http://localhost:1234/gasm/public/campaigns"><strong>Campaigns</strong></a></li>
               
                <li><a href="http://localhost:1234/gasm/public/map"><strong>Map</strong></a></li>
                <li><a href="http://localhost:1234/gasm/public/statistics"><strong>Statistics</strong></a></li>
                <?php if(!isset( $_SESSION['username']))
        {
               echo '<li><a href="http://localhost:1234/gasm/public/loginForm/index"><strong>Login</strong></a></li>' ;}?>
            </ul>
        </nav>
        <label for="nav-toggle" class="nav-toggle-label">
            <span></span>
        </label>
        <?php if(isset( $_SESSION['username']))
        {
       echo '<form class="logout" action="http://localhost:1234/gasm/public/loginForm/logout" method="POST">
    <input type="image"  src="https://image.flaticon.com/icons/svg/589/589061.svg" width="50" height="50">
</form>';} ?>
            
        </nav>
        <label for="nav-toggle" class="nav-toggle-label">
            <span></span>
        </label>
    </header>
    
<head>
<link rel="stylesheet" type="text/css" href="http://localhost:1234/gasm/public/css/statistics.css">
</head>
<body>
    <div class="statistic">
        <form class="button-area" action="http://localhost:1234/gasm/public/statistics/redirectPage/">
            <div class="formular">
          <button class="form-button" type="submit">Show Statistics</button>
          </div>
          <div class="formular">
          <button class="form-button" type="submit" formaction="http://localhost:1234/gasm/public/form/index">Report</button>
          </div>
          </form>
    </div>
</body>


<footer>
    <div class="first-footer-part">
        <h3>👨‍👨‍👧‍👧Contact details:</h3>
        <ul>
        <li>Email: gasm@recycle.com</li>
        <li> Tel: 0040748820151</li> 
        <li><Address> Flowers Street, 9</Address>
         <li>Contact us!💬</li>
        </li>   
     </ul>   
    </div>
    <span class='border'></span>   
  
    <div class="second-footer-part">
            <h2>🌻Recycle the present🌻</h2>
            <h3>🌻Save the future🌻</h3>

    </div>
    <span class='border'></span>   
    <div class="third-footer-part">
        <h3>You can also find us on:</h3>
    
        <a href="https://www.facebook.com/" class="fa fa-facebook" target="_blank"></a>
        <a href="https://www.twitter.com" class="fa fa-twitter" target="_blank"></a>
        <a href="https://www.instagram.com" class="fa fa-instagram" target="_blank"></a>
    
 
    </div>
</footer>
</html>
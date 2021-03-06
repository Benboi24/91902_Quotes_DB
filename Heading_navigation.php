<!DOCTYPE HTML>

<?php

session_start();
include("config.php");
include("functions.php");

// Connect to database...
$dbconnect=mysqli_connect(DB_HOST, DB_USERNAME, DB_PASSWORD_ DB_NAME);

if(mysqli_connect_errno()) {
    echo "Connection failed:".mysqli_connect_error();
    exit;
}

?>


<html lang="en">

<?php include("contnent/head.php"); ?>

<body>

    <div class="wrapper">

            <?php include("content/heading_navigation.php");?>

        <div class="box main">

        <?php>

        if(!isset($_REQUEST['page'])) {
            include("content/home.php");
        } // end of if that includes home page

        else {
            // prevents users from navigation through file system
            $page=preg_replace('/[^0-9a-zA-Z]-/', '', $_REQUEST['page']);
            include("content/$page.php");

        } // End of else but that includes requested content

        ?>

        </div> <!-- / main -->


<head>
    <meta charset="UTF-8">
    <meta name="description" content="Site featuring short quotes by both famous 
    and not so famous people">
    <meta name="keywords" content="quotes, famous, author, writer, sportsman, 
    political activist, sayings">
    <meta name="author" content="Ben Arthur">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>Quick Quotes</title>
    
    <!-- Edit the link below / replace with your chosen google font -->
    <link href="https://fonts.googleapis.com/css?family=Lato%7cUbuntu" rel="stylesheet"> 
    
    <!-- Edit the name of your style sheet - 'foo' is not a valid name!! -->
    <link rel="stylesheet" href="theme/quick_quotes.css"> 
        <link rel="stylesheet" href="theme/font-awesome.min.css">
    
</head>
    
<body>
    
    <div class="wrapper">
    

        
        <div class="box banner">
            
    
            <h1>Quick Quotes</h1>
        </div>    <!-- / banner -->

        <!-- Navigation goes here.  Edit BOTH the file name and the link name -->
        <div class="box nav">
            
            <div class="linkwrapper">
                <div class="commonsearches">
                    <a href="index.php?page=showall">All</a> | 
                    <a href="#">Recent</a> | 
                    <a href="#">Random</a> 
                </div>  <!-- / common searches -->
            
                <div class="topsearch">
                    
                    <!-- Quick Search -->           
                    <form method="post" action="quick_search.php" enctype="multipart/form-data">

                        <input class="search quicksearch" type="text" name="quick_search" size="40" value="" required placeholder="Quick Search..." />

                        <input class="submit" type="submit" name="find_quick" value="&#xf002;" />

                    </form>     <!-- / quick search -->
                    
                </div>  <!-- / top search -->
                
                <div class="topadmin">
                    <a href="#">Log In</a>
                    
                </div>  <!-- / top admin -->
                
            </div>  <!--- / link wrapper -->
            
        </div>    <!-- / nav -->        
        
        <div class="box main">
            <h2>First Page heading</h2>
            
            <p>
                Sugar plum powder dessert bonbon powder lollipop lollipop muffin I love. Tiramisu dessert I love sugar plum apple pie marzipan chocolate bar brownie. Pudding tiramisu caramels biscuit tiramisu. I love gummies gummies pie sweet pudding I love I love. Donut halvah candy oat cake donut. Caramels wafer danish jelly-o.
            </p>
            
            <p>
                Jelly beans gingerbread jelly tootsie roll. Lemon drops bear claw I love tiramisu candy canes cake. Jelly-o apple pie powder tart I    love candy tiramisu. Topping liquorice cake sesame snaps brownie. Lemon drops jelly beans brownie danish I love fruitcake cotton candy danish. Drag??e pastry halvah macaroon I love chocolate bar caramels liquorice. Halvah cupcake muffin fruitcake pastry I love bear claw I love jelly. Tart chocolate bar croissant danish jelly. Sugar plum powder cupcake muffin gingerbread I love sweet.
            </p>
            
            <p>
                Biscuit jelly I love jelly-o candy canes chupa chups topping lemon drops I love. Sesame snaps macaroon lemon drops carrot cake I love. Chocolate bar gingerbread chupa chups. Dessert chocolate pastry liquorice tootsie roll lemon drops sweet macaroon liquorice. I love muffin bonbon. Cupcake apple pie chocolate cake bonbon topping. Macaroon gummi bears drag??e caramels donut chocolate.
            </p>
            
        </div>    <!-- / main -->
        

        <div class="box footer">
            CC yourname 20XX
        </div>    <!-- / footer -->
    
    </div>  <!-- / wrapper  -->
    
</body>        

<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title><?php echo $title; ?></title>
    </head>
    <body>
      
        <div id="wrapper">
            
            <div id="banner">
                
            </div>
            
            <nav id="navigation">
                <ul id="nav">
                    <li><a href="#">Home</a></li>
                    <li><a href="#">My Page</a></li>
                    <li><a href="#">Logout</a></li>
                </ul>
            </nav>
            
            <div id="content_area">
                <?php echo $content; ?>
            </div>
            
            <div id="sidebar">
                
            </div>
                
            <footer>
                <p>CIS 400 Final</p>
            </footer>    
              
        </div>
        
    </body>
</html>

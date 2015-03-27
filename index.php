<! Doctype html >
<html>
<head>
<title>Maritza Hung</title>
    
    <?php include "include/head.php" ?>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
        <script>
        
    $(document).ready(function(){
        
        $("#computer").animate({
           //right:'250px'
        });
    });

    </script>
</head>
<body>
    <div class="container">
        <div class="flagGreen">
            <img src="images/GreenFlag.png"/>
        </div>
        <br/>
        
        <label class="name"><strong>MARITZA HUNG</strong></label>
        <label class="name">Web Developer - Software Developer</label>
        <br/>
        <div class="poleImage"></div>
       
        
        <!--menu block-->
         <ul>
            <li ><a href="index.php" class="text-where">HOME</a></li>
            <li><a href="#">RESUME</a></li>
            <li><a href="#">PORTFOLIO</a></li>
            <li><a href="#">EXTRA</a></li>
        </ul>
        <!--end menu block-->
        
        
        <div class="banner"></div>
        
        <div class="main">
            <section class="page1">
                 <div class="container2">
                    <br/>
                     <div class="right">
                     
                     <div class="tb-header">
                        <label class="title-White"><strong>About me</strong></label> </label>
                    </div>
                    <div class="tb-body">
                        <p class="tb-content">My names is Maritza Hung. I am from
Venezuela but I am currently living in NYC.
I graduated as a Computer Engineer and
working as <strong>Web Developer</strong> </p>
                        
                    </div>
                     
                     </div>
                     <div class="left">
                         <div style="position:absolute;">
                            <img src="images/circle-one.png"/>
                        </div>
                        <div>
                         <img src="images/me.png"/>
                        </div>
                     </div>
                
                
                    <div style="text-align:center; display:block;">
                        <img src="images/down-img.png"/>
                    </div>
                </div>
            </section>
             <section class="page2">
                 <div class="container3">
                     <div class="right">
                        <div class="tb-header">
                            <label class="title-White"><strong>Education</strong></label> </label>
                        </div>
                        <div class="tb-body-small">
                            <div class="tb-row">
                                <p>2004-2010</p>
                            </div>
                            <div class="tb-row-2">   
                                <p class="tb-content">Universidad Catolica Andres Bello </p>
                            </div>
                         </div>
                    </div>
                 
                    <div class="left">
                    
                         <div class="tb-header">
                            <label class="title-White"><strong>Skills</strong></label> </label>
                        </div>
                        <div class="tb-body-small">
                            <div class="tb-row">
                                <p>Languages</p>
                            </div>
                            <div class="tb-row-2">   
                                <p class="tb-content">C++ C# PHP JAVA </p>
                            </div>
                     
                     </div>
                 
                    
                    </div>
                 </div>
            </section>
            
             <section class="page3">
                 <div class="container2">

                      <div class="left">
                            <img src="images/circle-three.png" />                
                            <h1>Portfolio</h1>
                            <br/>
                            
                          
                     </div>
                     <div class="right">
                        <img src="images/computer-portfolio.png" id="computer"/>
                         <!--<img src="images/computer-portfolio.png" id="computer" style="right:-100px; position:absolute;"/>-->
                     </div>
                      
                </div>
            </section>
        </div>
        
    </div>
    

   

</body>
</head>
</html>
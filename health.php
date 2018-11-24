<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Document</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="css/nav.css" rel="stylesheet" type="text/css">
    <link href="css/main.css" rel="stylesheet" type="text/css">
    <link href="css/health.css" rel="stylesheet" type="text/css">
</head>
<body>
    
    <div class="container">
        
        
        <div class="welcome">
        <header>
           <img class="logo" src="Images/banner_1.png"/>
            <nav>
                <ul>
                    <li><a href="index.php">Home</a></li>
                    <li><a href="index.php">About us</a>
                        <ul>
                            <li><a href="#"> WORKPLACE HEALTH AND SAFETY </a></li>
                            <li><a href="#"> THE GENDER COMPONENT </a></li>
                        </ul>
                    </li>
                    <li><a href="index.php">Services</a>
                        <ul><li><a href="#"> HEALTH THROUGH SPORT </a></li>
                            <li><a href="#"> WORKPLACE HEALTH AND SAFETY </a></li>
                            <li><a href="#"> THE GENDER COMPONENT </a></li>
                            <li><a href="#"> ROAD SAFETY COMPONENT  </a></li>
                            <li><a href="#"> THE LABOUR RELATIONSHIP </a></li>
                            <li><a href="#"> ENVIRONMENTAL PROTECTION  </a></li>
                            <li><a href="#"> THE MAIN COMPONENTS  </a></li>
                            <li><a href="#"> PROVISION OF PPE   </a></li>
                        </ul>
                    </li>
                    <li><a href="index.php">Contact us</a></li>
                    <li class="lastlink"><a href="index.php">Projects</a></li>
                </ul>
            </nav>
            
            <div id="health-head">HEALTH THROUGH SPORT</div>
        </header> 
   
    
    <!--image slider!-->
    <div class="cycle-slideshow">
			<span class="cycle-prev">&#9001;</span>
			<span class="cycle-next">&#9002;</span>
			<span class="cycle-pager"></span>
			<img src="Images/3.png"/>
			<img src="Images/4.png"/>
    </div>
    <!-- end of slider !-->
    </div>
        
    </div>
    
    
    <script src="jquery/jquery-3.3.1.min.js"></script>
<script type="text/javascript" src="jquery/jquery.cycle2.min.js"></script>
 
<script type="text/javascript">
    
    $(function(){
        
    $('#play').click(function(){$('#slider').cycle('resume'); return false;});
    
     $('#pause').click(function(){$('#slider').cycle('pause'); return false;});
        
    $('#slider').cycle({
        fx: 'scrollHorz',
        next: '#next',
        prev: '#prev',
        pager: '#pager',
        timeout: 3000,
        speed: 900
    });
    });
</script>
</body>
</html>
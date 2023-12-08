<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>STUDY NEST</title>
    <style>
     body{
            background-image:url('wave (2).png');
            background-size:cover;
            background-repeat:no-repeat;
            bottom:0;
            
        }
        #ip1{
 text-align: center;
 width:500px;
 height:50px;
 border: none;
 color: aliceblue;
 border-radius: 10px;
 background-color:#263850;
 
}
::placeholder{color:aliceblue;
opacity:0.7;}

#ip1:hover{
    box-shadow:10px 10px 20px 3px #ccc;
}

#smpl {
    position: absolute;
    top: 60%;
    left: 50%;
    transform: translate(-50%, -50%);
    border:none;
    display: flex;
    justify-content: center;
    align-items: center;
}
.navbtns {
    font-size: 15px;
    width: 110px;
    height: 30px;
    border: none;
    border-radius: 5px;
    background-color:#263851;
    color: aliceblue;
    border-color: l;
    ;
}


.navbtns:hover {
    filter:drop-shadow(0px 0px 6px  aliceblue);
}

ul {
    list-style-type: none;
}

li {
    display: flex;
    font-size: 20px;
    color: white;
    float: left;
    justify-content: space-between;
    padding: 2px;
    margin: 5px 15px 5px 5px;
}

a {

    color: rgb(255, 31, 31);
    text-decoration: none;
    font-weight: 100;

}

a:hover {
    color: rgb(72, 167, 69);
    transform: scale(1.09);

}

.btns {
    background-color: #00f7ff;
}


h4 {

    color: aliceblue;
    font-size: 20px;
    border: none;

}
#text {
    align-items: center;
}

.btns {
    border: none;
    border-radius: 10px;
    width: fit-content;
    height: 20px;

}
h5{
    position:absolute;
    top:65%;
    left:48%;
    transform:translate(-50%,-50%);
    text-align:center;
    font-family:Arial, sans-serif;
    
    
}
@keyframes guy {
  0%{transform:scale(1);
    
    
}
  55%{transform:scale(1.05);
 }
}

#guy1 {
    width: 387px;
    height: 426px;
    position: absolute;
    top: 35%;
    left: 65%;
    animation: guy 3s infinite ease-in-out;
    transform-origin: center; 
    filter:drop-shadow(4px 2px 8px #ffd02d)
            contrast(100%) saturate(3);
}

    </style>
</head>

<body>


    <script>
        function call() {
         var a = document.getElementById('ip1').value;
            if (!a) {
                window.alert("please enter department name");
            }
            else {
                if (a.toLowerCase() === "csbs") {
                    window.open("csbs.php", "_self");
                }else if(a.toLowerCase() === "cse")
                {window.open("cse.php", "_self");}
                else if(a.toLowerCase() === "csd")
                {window.open("csd.php", "_self");}
                else if(a.toLowerCase() === "csm")
                {window.open("csm.php", "_self");}
                else if(a.toLowerCase() === "cso")
                {window.open("cso.php", "_self");}
                else if(a.toLowerCase() === "ece")
                {window.open("ece.php", "_self");}
                else if(a.toLowerCase() === "civil")
                {window.open("civil.php", "_self");}
                else if(a.toLowerCase() === "mech")
                {window.open("mech.php", "_self");}
                else if(a.toLowerCase() === "eee")
                {window.open("eee.php", "_self");}
                else if(a.toLowerCase() === "chem")
                {window.open("chem.php", "_self");}
                
            }
        }
        function checkEnter(event) {
            if (event.keyCode === 13) {
                event.preventDefault();
                call();
            }
            }
    </script>
    
    <nav>
        <div class="container">
            <ul>
            <li><a href="index.php"><input type="button" value="Home" class="navbtns"></a></li>
            <li><a href="stat.php"><input type="button" value="Stats" class="navbtns"></a></li>
            <li><a href="index1.php"><input type="button" value="Contribute" class="navbtns"></a></li>
           <li><a href="about.php"><input type="button" value="About" class="navbtns"></a></li>
          
           
               
               
               
            </ul>
        </div>
    </nav>

   
    <div id="smpl">

        
    <input type="text" name="ip1" placeholder="Enter Dept name" id="ip1" onkeydown="checkEnter(event)" />
        <input type="image" id="myimage" style="width: 40px;padding-left: 7px; ;" src="search1.png" onclick="call()" />
       

    </div>
    <h5 >  <b>Department Names</b>: csbs,csd,csm,cso,cse,it,ece,eee,mech,chem,civil</h5>

<img src="guy.png" alt="guyimage" id="guy1">

</body>

</html>
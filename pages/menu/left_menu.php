<style>
 .left_side_menu{
    
    width: 230px;
    height: 100vh;
    }
.left_side_menu ul {
    text-transform:uppercase;
    list-style: none;
    position: relative;
    left: -50px;
    display: flex;
    flex-direction:column;
    justify-content: center;
    height: 90vh;
    font-weight:bold;
}
.left_side_menu  ul li{
   display: flex;
}
.left_side_menu .bar{
    width: 50px;
    height: 1px;
    background: black;
    position: relative;
    top:20px;
    margin-right: 15px;
}
.left_side_menu .menu_item{
    margin: 10px 0px 10px 0px ;
    
}
.left_side_menu .menu_item:hover{
    color:red;
    cursor: pointer;
    transition: 0.2s;
  
    
}
.left_side_menu .left_side_footer{
        left:20px;
        position:relative; 
        font-size:12px;
        top:172px;
        text-align:center;
}
.left_side_menu .footerbox{
    display:flex;
    justify-content:space-around;
    padding:10px;

}
.left_side_menu .footerone:hover{
    color:white;
}

</style>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<div class="left_side_menu alert-secondary nav nav-pills flex-column">
    
    <ul>
        <li><div class="bar"></div><div class="menu_item">Home</div></li>
        <li><div class="bar"></div><div class="menu_item">Features</div></li>
        <li><div class="bar"></div><div class="menu_item">How It Works</div></li>
        <li><div class="bar"></div><div class="menu_item">Community</div></li>
        <li><div class="bar"></div><div class="menu_item">Settings</div></li>
        <li><div class="bar"></div><div class="menu_item">Support Us</div></li>
    
    <div class="left_side_footer">
    <span class="footerbox">
    <li class=" footerone fa fa-facebook fa-2x"></li>
     <li class=" footerone fa fa-twitter fa-2x"></li>
     <li class="footerone fa fa-google fa-2x"></li>
     </span>
        <span style="font-weight:normal;font-size:10px;">
        <p>&copy; Copyright 2019 <br> Developers: Neps-geeks<p>   
        </span>
    </div>
     </ul>
    
</div>

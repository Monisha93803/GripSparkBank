<style>
  /* css for footer */
 
.footer {
    padding-top: 50px;
    padding-bottom: 50px;
    background-color:rgba(16, 128, 234, 0.7);
    display: flex;
    justify-content: center;
}
.footer_container{
  width:100%;
  /* background-color: blue; */
  display: flex;
  justify-content:space-evenly;
  
}
.footer_child {
    height: 300px;
    width: 33%;
    padding-right: 100px;
    font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    display: flex;
    justify-content: center;
    align-items: center;
    /* background-color: red; */
}

.footer_child_1 {
    color: white;
    font-size: 20px;
    /* background-color: blue; */
   

}
ul {
    margin-top: 40px;
}

li {
    list-style-type: none;
    margin-bottom: 10px;
    color: white;
}

.first {
    font: 30px;

}

.footer_child_4 {
    display: flex;
    align-items: center;
    justify-content: center;
    
}


.social_container {
  width: 50%;
    justify-content: space-between;
    display: flex;
    padding-bottom:100px;
 
    
}

.social_items {
    height: 40px;
    width: 40px;

}

.si1 {
    background-image: url("img/images/facebook.png");
    background-size: cover;
    cursor: pointer;
}

.si2 {
    background-image: url("img/images/google.png");
    background-size: cover;
    cursor: pointer;
}

.si3 {
    background-image: url("img/images/instagram.png");
    background-size: cover;
    cursor: pointer;
}

.si4 {
    background-image: url("img/images/linkedin.png");
    background-size: cover;
    cursor: pointer;
}
a{
  display: flex;
  padding-right: 30px;
}
.child{
    width:400px;
}
  </style>
<footer class="foot" id="footer">
<div>
          <!-- css for footer -->
    <div class="footer">
        <div class="footer_container">
            <div class="footer_child_1">
                <h1 class="footer_logo"></h1>
            </div>
            <div class="footer_child child" style="width:600px;">
                <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d1635489.9805394872!2d104.11632489964838!3d2.398959553465708!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xff68dba930304ddb!2sWattah%20Pte%20Ltd!5e0!3m2!1sen!2ssg!4v1626596866922!5m2!1sen!2ssg"  height="300px" width="600px"  style="border:0;padding-left:30px;" allowfullscreen="" loading="lazy"></iframe>
            </div>
            <div class="footer_child">
                <ul>
                    <li class="first">Quick Links</li>
                    <li><a href="#home" style="color:white;"s><u>Home</u></a></li>
                    <li><a href="#about" style="color:white;"><u>Aboutus</u></a></li>
                    <li><a href="#tansactions" style="color:white;"><u>Transactions</u></a></li>
                    <li><a href="contactme.php" style="color:white;"><u>Feedback</u></a></li>
                    <li><a href="#footer" style="color:white;"><u>Contact</u></a></li>
                </ul>
            </div>
            
            <div class="footer_child">
                <div class="social_container" style="padding-left:110px;">


                    <a href="https://www.facebook.com/">
                        <div class="social_items si1"></div>
                        <br> </a>

                    <a href="https://www.google.com/">
                        <div class="social_items si2"></div>
                        <br>
                    </a>

                    <a href="https://www.instagram.com/">
                        <div class="social_items si3"></div>
                        <br>
                    </a>
                    <a href="https://www.linkedin.com/">
                        <div class="social_items si4"></div>
                        <br>
                    </a>
                </div>
                <div class="first" style="color:white;padding-top:140px;">Contact Us: THE HANGAR, NUS ENTERPRISE,21 HENG MUI KENG TERRACE, SINGAPORE, 119613
                    info@gripspark.com
                 </div>
            </div>
            
        </div>
</div>
</footer>

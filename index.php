<?php include('nav.php') ?>

<div style="height:500px;">
<?php include('slide.php')?>
</div>
<br/>
  <div id="about">  <?php include('about.php')?></div>


<div>
  <div style="background: -webkit-linear-gradient(left, white, #00c6ff);">
  <p style="font-size:30px;font-weight: bold;padding:15px;" id="tansactions"><u>Transactions</u></p>
    <div style="display:flex;justify-content:space-around;">
   
      <ul>
        <li class="operations"><a href="transfer_money.php"><button class="btn" id="blue">View All Users</button></a></li>
        <li class="operations"><a href="transfer_money.php"><button class="btn" id="blue">Trasnfer Money</button></a></li>
        <li class="operations"><a href="transactionhistory.php"><button class="btn" id="blue">View Transfer History</button></a></li>
      </ul>
    </div>
  </div>
</div>
  <?php include('footer.php') ?>
</body>
</html>
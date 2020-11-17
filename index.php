<?php 
include("header.php");
?>
  <div class = "main">
  <p>Welcome to the Southport Salvation Army Lockdown Silent Auction.</p>
  <p>These are the lots available in the auction. Please click on the photo for more information.</p>
  <p>Closing date for bids is 2nd December 12pm.</p>
  <div class="lots">
      <?php
      foreach ($auctionItems as $lot => $item) {
        ?>
        <div class="singleItem">
          <p><?php echo $item[name]; ?></p>
        <a href="item.php?item=<?php echo $lot; ?>"><img class="singleImage" src="/images/<?php echo $item[image]; ?>.png"></a>
      </div>
      <?php 
      }
      ?>
  </div>
</div>
<?php
include("footer.php");
?>
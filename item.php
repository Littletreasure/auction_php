<?php 
include("header.php");

if (isset($_GET['item'])) {
  $lotItem = $_GET['item'];
  $item = $auctionItems[$lotItem];
}
?>
<div class="itemMain">
  <h2><?php echo $item[name]; ?></h2>
  <img class="mainImage" src="/images/<?php echo $item[image]; ?>.jpg">
  <p>Lot No: <?php echo $item[lotNo]; ?></p>
  <p><?php echo $item[description]; ?></p>
  <p>Current bid: <?php echo $item[bid]; ?></p>
  <a class="back" href="index.php">Back</a>
</div>
<?php
include("footer.php");
?>
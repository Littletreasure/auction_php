<?php 
include("header.php");

if (isset($_GET['item'])) {
  $lotItem = $_GET['item'];
  $item = $auctionItems[$lotItem];
}
?>
<div class="itemMain">
  <h1><?php echo $item[name]; ?></h1>
  <img class="mainImage" src="/images/<?php echo $item[image]; ?>.jpg">
  <p>Lot No: <?php echo $item[lotNo]; ?></p>
  <p><?php echo $item[description]; ?></p>
  <a href="index.php">Back</a>
</div>
<?php
include("footer.php");
?>
<?php
$nav = ['back', 'forword', 'Go to parent folder', 'New folder', 'New file'];
    echo '<div class="flex gap ui-navbar">';
    foreach ($nav as $value) {
      echo "<div title='$value'></div>";
    }
    echo "</div>";
?>

<style media="screen">
  /* .ui-navbar{
      display: flex;
  } */
  .ui-navbar>div{
    height: 25px;
    width: 25px;
    border: var(--border);
  }
  .ui-navbar>div:first-child{
    background-image: url("toolbar.png");
    background-position: center;
  }
</style>

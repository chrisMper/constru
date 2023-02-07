<link rel="stylesheet" href="<?php echo URLROOT; ?>/css/search.css">
<body>
<!------------------------------ navbar ------------------------------------>
<div class='navbar' >
<?php include APPROOT . '/views/inc/navBar.php'; ?>
</div>

<!-- -----------------------------list-container------------------------------- -->
<main>
<div class="searchContainer">
  <form class="searchBar" action="#">
    <input type="text" placeholder="Search products, suppliers and more...">
    <button type="submit">Search</button>
  </form>
</div>

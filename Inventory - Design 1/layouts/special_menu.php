<ul>
  <li>
    <a href="home.php">
      <i class="glyphicon glyphicon-home"></i>
      <span>Dashboard</span>
    </a>
  </li>
  <li>
    <a href="categorie.php" >
      <i class="glyphicon glyphicon-indent-left"></i>
      <span>Categorie</span>
      <?php $all_categories = find_all('categories'); ?>
      <?php foreach ($all_categories as $cat):?>
        <li><a href="sales.php"><?php echo remove_junk(ucfirst($cat['name'])); ?></a> </li>
      
    </a>
  </li>
  <li>
    <a href="#" class="submenu-toggle">
      <i class="glyphicon glyphicon-th-large"></i>
      <span>Product</span>
    </a>
    <ul class="nav submenu">
       <li><a href="product.php">Manage product</a> </li>
       <li><a href="add_product.php">Add product</a> </li>
   </ul>
  </li>
  <li>
    <a href="media.php" >
      <i class="glyphicon glyphicon-picture"></i>
      <span>Media</span>
    </a>
  </li>
</ul>

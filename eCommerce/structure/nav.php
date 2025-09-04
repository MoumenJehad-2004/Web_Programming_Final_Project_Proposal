
<aside class="mdc-drawer mdc-drawer--dismissible mdc-drawer--open">
      <div class="mdc-drawer__header">
        <a href="index.php" class="brand-logo">
          <img src="assets/images/logo.png" alt="logo">
        </a>
      </div>
      <div class="mdc-drawer__content">
        <div class="mdc-list-group">
          <nav class="mdc-list mdc-drawer-menu">
            <div class="mdc-list-item mdc-drawer-item">
              <a class="mdc-drawer-link" href="eCommerce/index.php">
                <i class="material-icons mdc-list-item__start-detail mdc-drawer-item-icon" aria-hidden="true">home</i>
                Dashboard
              </a>
            </div>
            <?php if($_SESSION['type'] == 1){ ?>
            <div class="mdc-list-item mdc-drawer-item">
              <a class="mdc-drawer-link" href="eCommerce/categories/categories.php">
                <i class="material-icons mdc-list-item__start-detail mdc-drawer-item-icon" aria-hidden="true">track_changes</i>
                Categories 
              </a>
            </div>
            <?php }else if($_SESSION['type'] == 0 && $_SESSION['category'] == 1 ){?>
              <div class="mdc-list-item mdc-drawer-item">
              <a class="mdc-drawer-link" href="eCommerce/categories/categories.php">
                <i class="material-icons mdc-list-item__start-detail mdc-drawer-item-icon" aria-hidden="true">track_changes</i>
                Categories 
              </a>
              </div>
            <?php }?>
            <?php if($_SESSION['type'] == 1){ ?>
            <div class="mdc-list-item mdc-drawer-item">
              <a class="mdc-drawer-link" href="eCommerce/products/products.php">
                <i class="material-icons mdc-list-item__start-detail mdc-drawer-item-icon" aria-hidden="true">track_changes</i>
                Products 
              </a>
            </div>
            <?php }else if($_SESSION['type'] == 0 && $_SESSION['product'] == 1 ){?>
               <div class="mdc-list-item mdc-drawer-item">
               <a class="mdc-drawer-link" href="eCommerce/products/products.php">
                <i class="material-icons mdc-list-item__start-detail mdc-drawer-item-icon" aria-hidden="true">track_changes</i>
                Products 
               </a>
            </div>
            <?php }?>
            <!--<div class="mdc-list-item mdc-drawer-item">
              <a class="mdc-drawer-link" href="eCommerce/orders/orders.php">
                <i class="material-icons mdc-list-item__start-detail mdc-drawer-item-icon" aria-hidden="true">track_changes</i>
                Orders 
              </a>
            </div>-->
            <?php if($_SESSION['type'] == 1){ ?>
            <div class="mdc-list-item mdc-drawer-item">
              <a class="mdc-drawer-link" href="eCommerce/users/users.php">
                <i class="material-icons mdc-list-item__start-detail fa-solid fa-users fa-lg mr-2" ></i>
                Users 
              </a>
            </div>
            <?php }else if($_SESSION['type'] == 0 && $_SESSION['privilege'] == 1 ){?>
              <div class="mdc-list-item mdc-drawer-item">
              <a class="mdc-drawer-link" href="eCommerce/users/users.php">
                <i class="material-icons mdc-list-item__start-detail fa-solid fa-users fa-lg mr-2" ></i>
                Users 
              </a>
            </div>
            <?php }?>
            <?php if($_SESSION['type'] == 1){ ?>
            <div class="mdc-list-item mdc-drawer-item">
              <a class="mdc-drawer-link" href="eCommerce/users/users_archive.php">
                <i class="material-icons mdc-list-item__start-detail fa-solid fa-users fa-lg mr-2" ></i>
                Users-Archive
              </a>
            </div>
            <?php }?>
          </nav>
        </div>
        <div class="profile-actions">
          <a href="javascript:;">Settings</a>
          <span class="divider"></span>
          <a href="eCommerce/logout.php">Logout</a>
        </div>
       
      </div>
    </aside>
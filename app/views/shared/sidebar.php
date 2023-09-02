<!--
<a class="<?= $THIS == "articles" ? 'active-option' : '' ?> option d-flex align-items-center p-2 text-decoration-none" href="<?= $BASE_URL ?>articles">
</a>
-->
<div class="br-logo"><a href=""><img src="../img/logo-horizontal-.png" alt="" width="100%"></div>
<div class="br-sideleft overflow-y-auto">
  <label class="sidebar-label pd-x-15 mg-t-20">General</label>
  <div class="br-sideleft-menu">

    <a href="<?= TO($THIS, 'index') ?>" class="br-menu-link">
      <div class="br-menu-item">
        <i class="menu-item-icon icon ion-document-text tx-22"></i>
        <span class="menu-item-label">Solicitud de vacaciones</span>
      </div>
    </a>
    <a href="mailbox.html" class="br-menu-link">
    </a>
    <a href="<?= TO($THIS, 'employees') ?>" class="br-menu-link">
      <div class="br-menu-item">
        <i class="menu-item-icon icon ion-person-stalker  tx-20"></i>
        <span class="menu-item-label">Personal a cargo</span>
      </div>
    </a>
    <label class="sidebar-label pd-x-15 mg-t-20">Administración</label>
    <a href="" class="br-menu-link">
      <div class="br-menu-item">
        <i class="menu-item-icon ion-person-add tx-24"></i>
        <span class="menu-item-label">Administrar usuarios</span>
        <i class="menu-item-arrow fa fa-angle-down"></i>
      </div>
    </a>
    <ul class="br-menu-sub nav flex-column">
      <li class="nav-item"><a href="<?= TO($THIS, 'employees_admin') ?>" class="nav-link active">Usuarios</a></li>
    </ul>
    <a href="<?= TO($THIS, 'history') ?>" class="br-menu-link">
      <div class="br-menu-item">
        <i class="menu-item-icon icon ion-folder  tx-20"></i>
        <span class="menu-item-label">Historial vacaciones</span>
      </div>
    </a>
  </div>
  <br>
</div>
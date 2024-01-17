
<script src="<?=adminUrl?>assets/vendor/libs/jquery/jquery.js"></script>
<script src="<?=adminUrl?>assets/vendor/libs/popper/popper.js"></script>
<script src="<?=adminUrl?>assets/vendor/js/bootstrap.js"></script>
<script src="<?=adminUrl?>assets/vendor/libs/node-waves/node-waves.js"></script>
<script src="<?=adminUrl?>assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js"></script>
<script src="<?=adminUrl?>assets/vendor/libs/hammer/hammer.js"></script>
<script src="<?=adminUrl?>assets/vendor/libs/i18n/i18n.js"></script>
<script src="<?=adminUrl?>assets/vendor/libs/typeahead-js/typeahead.js"></script>
<script src="<?=adminUrl?>assets/vendor/js/menu.js"></script>

<!-- endbuild -->

<!-- Vendors JS -->
<script src="<?=adminUrl?>assets/vendor/libs/datatables-bs5/datatables-bootstrap5.js"></script>
<script src="<?=adminUrl?>assets/vendor/libs/apex-charts/apexcharts.js"></script>
<script src="<?=adminUrl?>assets/vendor/libs/swiper/swiper.js"></script>

<!-- Main JS -->
<script src="<?=adminUrl?>assets/js/main.js"></script>

<!-- Page JS -->
<script src="<?=adminUrl?>assets/js/dashboards-crm.js"></script>

<?php if (isset($pageName) && $pageName == 'Edit User' || isset($pageName) && $pageName == 'All Users') { ?>
<!-- Page JS -->
<script src="<?=adminUrl?>assets/js/modal-edit-user.js"></script>
<script src="<?=adminUrl?>assets/js/app-user-view.js"></script>
<script src="<?=adminUrl?>assets/js/app-user-view-account.js"></script>
<?php }?>

<?php
if (isset($_GET['user_delete_success'])) { ?>
<!-- Page JS -->
<script src="<?=adminUrl?>assets/js/ui-toasts.js"></script>
<?php } ?>
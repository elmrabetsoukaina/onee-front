 <!--**********************************
        Appel de l'API
    ***********************************-->

<script>
    //var globalFormData = [],
     var   globalAPIURL = 'http://localhost/onee-api/v1/'

    const _i_cookieDeConnexion = "is_co_DASSI",
        _i_storageMenu = "_menuDASSI",
        _i_cookieUtilisateur = "_cookieUserDASSI",
        _i_cookieDroits = "_cookieDroitsDASSI",
        _i_homePage = "home",
        _i_loginPage = "login"
</script>
 
 <!--**********************************
        Scripts
    ***********************************-->
    <!-- Required vendors -->
	<script src="assets/vendor/bootstrap-select/dist/js/bootstrap-select.min.js"></script>
	
	<!-- Apex Chart -->
	<script src="assets/js/dashboard/cms.js"></script>
	
	<!-- Ck-editor -->
	<script src="assets/vendor/ckeditor/ckeditor.js"></script>
	
	<!--select plugins-file-->
	<script src="assets/vendor/select2/js/select2.full.min.js"></script>
	<script src="assets/js/plugins-init/select2-init.js"></script>
	
	<!-- Dashboard 1 -->
    <script src="assets/js/custom.js"></script>
	<script src="assets/js/deznav-init.js"></script>
	<!-- <script src="assets/js/demo.js"></script> -->
    <!--script src="assets/js/styleSwitcher.js"></script -->
    <script src="assets/vendor/global/global.min.js" type="text/javascript"></script>
    <script src="assets/vendor/bootstrap-select/dist/js/bootstrap-select.min.js" type="text/javascript"></script>
    <script src="assets/vendor/chart.js/Chart.bundle.min.js" type="text/javascript"></script>
    <script src="assets/vendor/apexchart/apexchart.js" type="text/javascript"></script>
    <script src="assets/js/dashboard/dashboard-1.js" type="text/javascript"></script>
    <script src="assets/vendor/draggable/draggable.js" type="text/javascript"></script>
    <script src="assets/vendor/tagify/dist/tagify.js" type="text/javascript"></script>
    <script src="assets/vendor/datatables/js/jquery.dataTables.min.js" type="text/javascript"></script>
    <script src="assets/vendor/datatables/js/dataTables.buttons.min.js" type="text/javascript"></script>
    <script src="assets/vendor/datatables/js/buttons.html5.min.js" type="text/javascript"></script>
    <script src="assets/vendor/datatables/js/jszip.min.js" type="text/javascript"></script>
    <script src="assets/js/plugins-init/datatables.init.js" type="text/javascript"></script>
    <script src="assets/vendor/bootstrap-datetimepicker/js/moment.js" type="text/javascript"></script>
    <script src="assets/vendor/bootstrap-datetimepicker/js/bootstrap-datetimepicker.min.js" type="text/javascript"></script>
    <script src="assets/vendor/jqvmap/js/jquery.vmap.min.js" type="text/javascript"></script>
    <script src="assets/vendor/jqvmap/js/jquery.vmap.world.js" type="text/javascript"></script>
    <script src="assets/vendor/jqvmap/js/jquery.vmap.usa.js" type="text/javascript"></script>
    <script src="assets/js/custom.js" type="text/javascript"></script>
    <script src="assets/js/deznav-init.js" type="text/javascript"></script>
    <script src="assets/js/demo.js" type="text/javascript"></script>
    <script src="assets/js/styleSwitcher.js" type="text/javascript"></script>


<?php
$dossier = "./assets/js/fonctions";
$scandir = scandir($dossier);
foreach ($scandir as $fichier) {
    $ext__ = explode(".", $fichier);
    if ($fichier != '.' && $fichier != '..' && end($ext__) == "js")
        //  echo "$dossier/$fichier <br>";
        echo '<script src="assets/js/fonctions/' . $fichier . '"></script>';
}
?>
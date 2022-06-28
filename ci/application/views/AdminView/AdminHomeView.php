
<?php 
if(!isset($_SESSION['admin_mail']) && $_SESSION['admin_role']!='admin')
{ ?>
<script>
	alert('Unauthorized Login!');
	window.location.href = '<?=base_url('AdminController/AdminLogin')?>'
</script>
<?php }

?>
<?php
/* header */
$this->load->view('AdminView/AdminReqFiles/AdminHeader');
/* sidebar */
$this->load->view('AdminView/AdminReqFiles/AdminSideBar');
?>
<title>Admin Panel - Homepage</title>

<div class="content-wrapper">

</div>

<?php 
$this->load->view('AdminView/AdminReqFiles/AdminFooter');
/* footer */

?>

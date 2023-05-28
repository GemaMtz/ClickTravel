<?php 
    session_start();
    session_destroy();
?>
<!DOCTYPE html>
<html>
<head>
	<title>Logout</title>
	<!-- JQuery Validate library -->
	<script src="https://code.jquery.com/jquery-3.5.1.min.js"> </script>

	<!-- Libreria de sweetalert 2-->
	<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>

	<meta charset="utf-8">
	<style type="text/css">
		*
		{
			text-align: center;
		}
	</style>
</head>
<body>
	<script type="text/javascript">Swal.fire({
        icon: 'success',
        title: 'Se cerró sesión correctamente',
        showConfirmButton: true, })
        .then(function(){
            window.location="index.php"
    });
</script>
</body>
</html>
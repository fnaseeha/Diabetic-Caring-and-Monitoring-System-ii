<!DOCTYPE html>
<html>
<head>
	<title>Sweetalert</title>
	
		<script src="sweetalert/sweetalert2-master/dist/sweetalert2.min.js"></script>
		<link rel="stylesheet" type="text/css" href="sweetalert/sweetalert2-master/dist/sweetalert2.css">
	
</head>
<body>

<input type="submit" name="abc" onclick="ab();">
<script type="text/javascript">
/*	swal({
  title: 'Error!',
  text: 'Do you want to continue',
  type: 'error',
  confirmButtonText: 'Cool'
});
*/
function ab(){
swal.queue([{
  title: 'Your public IP',
  confirmButtonText: 'Show my public IP',
  text:
    'Your public IP will be received ' +
    'via AJAX request',
  showLoaderOnConfirm: true,
  preConfirm: function () {
    return new Promise(function (resolve) {
      $.get('https://api.ipify.org?format=json')
        .done(function (data) {
          swal.insertQueueStep(data.ip)
          resolve()
        })
    })
  }
}])
}
swal({
  title: 'Error!',
  text: 'Do you want to continue',
  type: 'error',
  confirmButtonText: 'Cool'
});
</script>

</body>
</html>
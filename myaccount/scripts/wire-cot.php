<?php
include("functions.php");
usserAccessCheck();
include("userdata.php");
if(isset($_POST)){
  sleep(3);
  $cotCode = filterString($_POST['cot']);
  if (empty($cotCode)) {
    echo "<script>    
              toastr.error('$code_2 is required!', 'Empty field', {\"progressBar\": true});
              document.getElementById('cot').style.borderColor='red';
             </script>";
             die();
  }
    if($_SESSION['wireCotCounter'] <= 1){
       echo "<script>
               Swal.fire('Maximum $code_2 attempts exceeded!', '$code_2', 'error');
                  document.getElementById('cot').style.borderColor='red';
                  document.getElementById('cot').style.color='red';
                  </script>";
                  $query = $conn->query("UPDATE users SET status = 'blocked' WHERE id = '$userid'");
                    session_destroy();
                  ?>
                  <meta http-equiv="refresh" content="5; url=../">
                  <?php
                  
         die();
  }
    
    if ($usercot != $cotCode) {
            $count = $_SESSION['wireCotCounter'];
            $newcount = $count - 1;
              echo "<script>
               Swal.fire('Invalid $code_2 code!!', 'For security purpose, Your account will be suspended once you exceed the maximum trial limit. You  have $newcount attempts left.', 'error');
                  document.getElementById('cot').style.borderColor='red';
                  document.getElementById('cot').style.color='red';
                  </script>";
              $_SESSION['wireCotCounter'] = $newcount;    
             die();
    }
    
    if ($usercot == $cotCode) {
      echo "<script>
               Swal.fire('Valid $code_2 code supplied!', 'Your transaction will be continued. Redirecting...', 'success');
                document.getElementById('cot').style.borderColor='green';
                  document.getElementById('cot').style.color='green';
                  </script>";   
       ?>
      <meta http-equiv="refresh" content="3; url=../email/wire-otp-mail.php">
       <?php
       
    }
 
}
?>
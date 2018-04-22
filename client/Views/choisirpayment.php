<?php
if ($_POST['checkbox3-2']=="paypal" && isset($_POST['checkbox3-3']))
    header("Location:paypal.php");
else {
    ?>
    <script>
        alert('accepter les termes et choisissez une methode de payment');
        history.back();
    </script>
    <?php
}
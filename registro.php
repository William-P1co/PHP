    <?php 
    echo '<h1>Gracias por su registro</h1>';
    echo '<h2>Los datos que registraste fueron los siguientes</h2>';
    echo '<br>cedula</br>';
        isset($_POST["cedula"]) ? print $_POST["cedula"]: "";
    echo '<br>Nombre</br>';
        isset($_POST["nombre"]) ? print $_POST["nombre"]: "";
    echo '<br>email</br>';
        isset($_POST["email"]) ? print $_POST["email"]:"";
    echo '<br>movil:</br>';
        isset($_POST["movil"]) ? print $_POST["movil"]:""; 
    ?>
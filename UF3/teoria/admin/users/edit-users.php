<?php
require_once '/workspaces/2425-M7-DavidHenrique/UF3/MasterWebs(CRUD)/theme/config.php';

//  if (!isset($_GET['id'])) {
//      header('Location:../admin.php');
//      exit();
//  }   

$id =(int) $_GET['id'];
$result = $mysqli->query("SELECT * FROM Users WHERE id = $id");

$user = $result->fetch_assoc();

if($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = $mysqli->$_POST['name'];
    $surname = $mysqli->$_POST['surname'];
    $email = $mysqli->$_POST['email'];
    $avatar = $mysqli->$_POST['avatar'];
    $rol = $mysqli->$_POST['rol'];
    $age = $mysqli->$_POST['age'];

}	
//iMPORTANTE SIEMPRE PREPARAR LA QUERY
$query = "UPDATE Users SET name = ?, surname = ?, email = ?, avatar = ?, rol = ?, age = ? WHERE id = ?";
$stmt = $mysqli->prepare($query); 
$stmt->bind_param('ssssssi', $name, $surname, $email, $avatar, $rol, $age, $id);
$stmt->execute();

header('Location:');
exit();
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Usarios</title>
</head>
<body>
    <h1>editar Usuarios</h1>
    <form action="" method="POST">
        <label for="name">Nombre</label><br>
        <input type="text" name="name" id="name" value="<?= $user['name'] ?>" required><br>

        <label for="surname">Apellido</label><br>
        <input type="text" name="surname" id="surname" value="<?= $user['surname'] ?>" required><br>

        <label for="email">Correo electrónico</label><br>
        <input type="email" name="email" id="email" value="<?= $user['email'] ?>" required><br>

        <label for="avatar">Avatar</label><br>
        <input type="text" name="avatar" id="avatar" value="<?= $user['avatar'] ?>" required><br>

        <label for="rol">Rol</label><br>
        <input type="text" name="rol" id="rol" value="<?= $user['rol'] ?>" required><br>

        <label for="age">Edad</label><br>
        <input type="number" name="age" id="age" value="<?= $user['age'] ?>" required><br>

        <input type="submit" value="Submit">

    </form>


    
</body>
</html>
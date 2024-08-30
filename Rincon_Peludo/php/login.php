<?php
include 'config.php';
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $usuario = $_POST['usuario'];
    $password = $_POST['password'];
    $stmt = $conn->prepare("SELECT * FROM usuarios WHERE email = ?");
    $stmt->bind_param("s", $usuario);
    $stmt->execute();
    $result = $stmt->get_result();
    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        if (password_verify($password, $row['password'])) {
            $_SESSION['usuario'] = $row['email'];
            header("location: ../dashboard.php");
            exit();
        } else {
            echo "<script>alert('Contraseña incorrecta'); window.location.href='../index.html';</script>";
        }
    } else {
        echo "<script>alert('Usuario no encontrado'); window.location.href='../index.html';</script>";
    }
    $stmt->close();
    $conn->close();
}
?>
<?php
    header('Content-Type: text/html; charset=UTF-8');
    //Iniciar una nueva sesión o reanudar la existente.
    session_start();
    //Si existe la sesión "cliente"..., la guardamos en una variable.
    if (isset($_SESSION['cliente'])){
        $cliente = $_SESSION['cliente'];
    }else{
        alert('');
        header('Location: ../index.html');//Aqui lo redireccionas al lugar que quieras.
     die() ;
    }
?>  
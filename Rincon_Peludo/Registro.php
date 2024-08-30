<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Rincon Peludo - Registro de Usuario</title>
    <link rel="stylesheet" href="./css/styles.css" />
    <link rel="icon" href="assets/img/Logo.jpeg" />
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
    />
  </head>
  <body>
    <div class="fondo">
      <section class="d-flex justify-content-end">
      <a href="index.html">
         <button type="submit" class="btn-primary fs-5 mt-5 p-4 bg-caja">Volver al Inicio</button>
        </a>
        <form
          action=""
          method="POST"
          class="caja border p-4 bg-caja rounded d-flex flex-column mt-5 pt-4"
        >
          <h4 class="text-center mb-3">Registrar Usuario</h4>
          <hr class="mt-3" style="margin-bottom: 50px" />

          <div class="row mb-3">
            <div class="col">
              <label class="form-label">Primer Nombre</label>
              <input
                type="text"
                class="form-control"
                placeholder="First name"
                name="primer_nombre"
                required
              />
            </div>
            <div class="col mb-3">
              <label class="form-label">Segundo Nombre</label>
              <input
                type="text"
                class="form-control"
                placeholder="Second name"
                name="segundo_nombre"
              />
            </div>
          </div>

          <div class="row mb-3">
            <div class="col">
              <label class="form-label">Primer Apellido</label>
              <input
                type="text"
                class="form-control"
                placeholder="First surname"
                name="primer_apellido"
                required
              />
            </div>
            <div class="col mb-3">
              <label class="form-label">Segundo Apellido</label>
              <input
                type="text"
                class="form-control"
                placeholder="Second last name"
                name="segundo_apellido"
                required
              />
            </div>
          </div>
          <label class="mb-3 form-label">Fecha de Nacimiento:</label>
          <div class="row mb-3">
            <div class="col mb-3">
              <input
                type="number"
                class="form-control"
                name="dia"
                placeholder="Day"
                required
              />
            </div>

            <div class="col mb-3">
              <input
                type="number"
                class="form-control"
                name="mes"
                placeholder="Month"
                required
              />
            </div>

            <div class="col mb-3">
              <input
                type="number"
                class="form-control"
                name="year"
                placeholder="Year"
                required
              />
            </div>
          </div>
          <div class="form-group mb-3">
            <label for="email">Email address</label>
            <input
              type="email"
              class="form-control"
              placeholder="Email"
              name="email"
              required
            />
          </div>
          <div class="form-group mb-3">
            <label for="password">Password</label>
            <input
              type="password"
              class="form-control"
              placeholder="Password"
              name="password"
              required
            />
          </div>

          <div
            class="d-flex justify-content-center align-items-center"
            style="height: 70px"
          >
            <button type="submit" class="btn btn-primary fs-5">Guardar</button>
          </div>
        </form>
      </section>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>

    
<!-- Registro Base de Datos-->
<?php
include 'php/config.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $primer_nombre = $conn->real_escape_string($_POST['primer_nombre']);
    $segundo_nombre = $conn->real_escape_string($_POST['segundo_nombre']);
    $primer_apellido = $conn->real_escape_string($_POST['primer_apellido']);
    $segundo_apellido = $conn->real_escape_string($_POST['segundo_apellido']);
    $fecha_nacimiento = $_POST['year'] . '-' . $_POST['mes'] . '-' . $_POST['dia'];
    $email = $conn->real_escape_string($_POST['email']);
    $password = password_hash($_POST['password'], PASSWORD_BCRYPT);

    // Usar prepared statements para evitar inyección SQL
    $stmt = $conn->prepare("INSERT INTO usuarios (primer_nombre, segundo_nombre, primer_apellido, segundo_apellido, fecha_nacimiento, email, password) VALUES (?, ?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("sssssss", $primer_nombre, $segundo_nombre, $primer_apellido, $segundo_apellido, $fecha_nacimiento, $email, $password);

    if ($stmt->execute()) {
      header('location: index.html');
      exit(); // Detiene la ejecución del script después de la redirección
  } else {
      echo "Error: " . $stmt->error;
  }

    $stmt->close();
    $conn->close();
}
?>


  </body>
</html>

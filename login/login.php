<!DOCTYPE html>
<html lang="ca">
<head>
  <meta charset="UTF-8">
  <title>Login - Part privada - QuantumSoft Technologies</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-SgOJa3DmI69IUzQ2PVdRZhwQ+dy64/BUtbMJw1MZ8t5HZApcHrRKUc4W0kG879m7" crossorigin="anonymous">
</head>
<body>
  <div class="container">
    <div class="row" style="margin-top: 100px;">
      <div class="col-md-4 col-md-offset-4">
        <h2 class="text-center">Inici de sessió</h2>
        <form action="login_process.php" method="POST">
          <div class="form-group">
            <label for="username">Usuari</label>
            <input type="text" class="form-control" id="username" name="username" required>
          </div>
          <div class="form-group">
            <label for="password">Contrasenya</label>
            <input type="password" class="form-control" id="password" name="password" required>
          </div>
          <button type="submit" class="btn btn-primary btn-block">Entrar</button>
        </form>
      </div>
    </div>
  </div>

  <!-- Dependèndencia Bootstrap 5 -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/js/bootstrap.bundle.min.js" integrity="sha384-k6d4wzSIapyDyv1kpU366/PK5hCdSbCRGRCMv+eplOQJWyd1fbcAu9OCUj5zNLiq" crossorigin="anonymous"></script>
</body>
</html>
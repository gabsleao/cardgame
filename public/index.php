<!DOCTYPE html>
<?php
include_once __DIR__ . '/config/head.php';
?>

<body>
  <div class="container">
    <div class="image-container">
      <img src="assets/logo.png" alt="Logo">
    </div>

    <div class="card">
      <div class="card-body">
        <h5 class="card-title">Jogar sem registro</h5>
        <a href="jogo.php" class="btn btn-primary btn-block">Começar a Jogar</a>
      </div>
    </div>

    <div class="card disabled">
      <div class="card-body" disabled>
        <h5 class="card-title">Salve o seu progresso!</h5>
        <a href="registro.php" class="btn btn-success btn-block">Registrar</a>
        <a href="entrar.php" class="btn btn-success btn-block">Entrar</a>
      </div>
    </div>

    <div class="leaderboard disabled">
      <h5>Leaderboard</h5>
      <table class="table table-bordered">
        <thead>
          <tr>
            <th>Posição</th>
            <th>Jogador</th>
            <th>Pontuação</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>1</td>
            <td>-</td>
            <td>-</td>
          </tr>
          <tr>
            <td>2</td>
            <td>-</td>
            <td>-</td>
          </tr>
          <tr>
            <td>3</td>
            <td>-</td>
            <td>-</td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>
</body>
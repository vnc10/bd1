<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Editar Curso</title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="../node_modules/mdi/css/materialdesignicons.min.css">
  <!-- endinject -->
  <!-- plugin css for this page -->
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="../css/style.css">
  <!-- endinject -->
  <link rel="shortcut icon" href="../images/favicon.png" />
</head>
<body>
  <div class="body-wrapper">
    <!-- partial:../../partials/_sidebar.html -->
    <aside class="mdc-persistent-drawer mdc-persistent-drawer--open">
      <nav class="mdc-persistent-drawer__drawer">
        <div class="mdc-persistent-drawer__toolbar-spacer">
          	<a href="../index.html" class="brand-logo">
				<img src="../images/logo.svg" alt="logo">
			</a>
        </div>
        <div class="mdc-list-group">
					<nav class="mdc-list mdc-drawer-menu">
						<div class="mdc-list-item mdc-drawer-item">
							<a class="mdc-drawer-link" href="../index.html">
                				<i class="material-icons mdc-list-item__start-detail mdc-drawer-item-icon" aria-hidden="true">desktop_mac</i>
                				Dashboard
              				</a>
						</div>
						<div class="mdc-list-item mdc-drawer-item">
							<a class="mdc-drawer-link" href="../cadastrar/CadastrarCurso.php">
                				<i class="material-icons mdc-list-item__start-detail mdc-drawer-item-icon" aria-hidden="true">track_changes</i>
                				Cadastrar Curso
              					</a>
						</div>
						<div class="mdc-list-item mdc-drawer-item">
							<a class="mdc-drawer-link" href="../cadastrar/CadastrarUniversidade.php">
                				<i class="material-icons mdc-list-item__start-detail mdc-drawer-item-icon" aria-hidden="true">track_changes</i>
                				Cadastrar Universidade
              					</a>
						</div>
						<div class="mdc-list-item mdc-drawer-item">
							<a class="mdc-drawer-link" href="../cadastrar/CadastrarCandidato.php">
                				<i class="material-icons mdc-list-item__start-detail mdc-drawer-item-icon" aria-hidden="true">track_changes</i>
                				Cadastrar Candidato
              					</a>
						</div>
						<div class="mdc-list-item mdc-drawer-item">
							<a class="mdc-drawer-link" href="../cadastrar/CadastrarEmpresa.php">
                				<i class="material-icons mdc-list-item__start-detail mdc-drawer-item-icon" aria-hidden="true">track_changes</i>
                				Cadastrar Empresa
              					</a>
						</div>
						<div class="mdc-list-item mdc-drawer-item">
							<a class="mdc-drawer-link" href="../cadastrar/CadastrarVaga.php">
                				<i class="material-icons mdc-list-item__start-detail mdc-drawer-item-icon" aria-hidden="true">track_changes</i>
                				Cadastrar Vaga
              					</a>
						</div>
						<div class="mdc-list-item mdc-drawer-item">
							<a class="mdc-drawer-link" href="../cadastrar/CadastrarArea.php">
                				<i class="material-icons mdc-list-item__start-detail mdc-drawer-item-icon" aria-hidden="true">track_changes</i>
                				Cadastrar Area
              					</a>
						</div>
      </nav>
    </aside>
    <!-- partial -->
    <!-- partial:../../partials/_navbar.html -->
    <header class="mdc-toolbar mdc-elevation--z4 mdc-toolbar--fixed">
      <div class="mdc-toolbar__row">
        <section class="mdc-toolbar__section mdc-toolbar__section--align-start">
          <a href="#" class="menu-toggler material-icons mdc-toolbar__menu-icon">menu</a>
        </section>
      </div>
    </header>

    <!-- partial -->
    <div class="page-wrapper mdc-toolbar-fixed-adjust">
      <main class="content-wrapper">
        <!doctype html>
        <html lang="br">

        <head>
          <?php

        include '..\conexao.php';
        $algo = $_REQUEST['curso'];
        $sql = "SELECT * FROM curso WHERE idCurso = '$algo'";
        $result = $db->query($sql);
        $dadosCurso = $result->fetch_row();

?>
          <!-- Required meta tags -->
          <meta charset="utf-8">
          <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

          <!-- Bootstrap CSS -->
          <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB"
           crossorigin="anonymous">
        </head>
        <h1 style="font-family: sans-serif; font-weight: bold; color: dimgray; padding-left: 380px;">Editar Curso</h1>
            <form action="..\update\UpdateCurso.php" method="post">
            <div class="container">
              <div style="padding-left: 100px" class="col-6">
                <div class="form-group">
  					           <label style="color: dimgray; font-family: sans-serif; font-size: large; font-weight: bold;" for="inputCurso"></label>
  					           <input type="hidden" class="form-control" name="idCurso" value="<?php echo $dadosCurso[0]; ?>">
  				     </div>
                <div class="form-group">
                  <label style="color: dimgray; font-family: sans-serif; font-size: large; font-weight: bold;" for="inputNome">Nome</label>
                  <input type="text" required="" class="form-control" name="Nome" value="<?php echo $dadosCurso[1]; ?>">
                </div>
                <div class="form-group">
                  <label style="color: dimgray; font-family: sans-serif; font-size: large; font-weight: bold;" for="inputPeriodo">Periodo</label>
                  <select class="form-control" name="Periodo" required="" value="<?php echo $dadosCurso[2]; ?>">
                    <option>Manha</option>
                    <option>Tarde</option>
                    <option>Noite</option>
                    <option>Integral</option>
                  </select>
                </div>
                <button type="submit" class="btn btn-primary">Alterar</button>
              </div>
            </div>
            </div>
            </form>
        </body>
        </html>
    </div>
  </section>
</div>
</div>

      </main>
    </div>
  </div>

  <script src="../../node_modules/material-components-web/dist/material-components-web.min.js"></script>
  <script src="../../node_modules/jquery/dist/jquery.min.js"></script>
  <script src="../../js/misc.js"></script>
  <script src="../../js/material.js"></script>
</body>
</html>

<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Cadastrar Candidato</title>
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
							<a class="mdc-drawer-link" href="../cadastrar/Dashboard.html">
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

?>
          <!-- Required meta tags -->
          <meta charset="utf-8">
          <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

          <!-- Bootstrap CSS -->
          <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB"
           crossorigin="anonymous">
        </head>
        <h1 style="font-family: sans-serif; font-weight: bold; color: dimgray; padding-left: 380px;">Cadastrar Candidato</h1>
            <form action="..\insert\insertCandidato.php" method="post">
            <div class="container">
              <div style="padding-left: 100px" class="col-6">
                <div class="form-group">
                  <label style="color: dimgray; font-family: sans-serif; font-size: large; font-weight: bold;" for="inputNome">Nome</label>
                  <input type="text" required="" class="form-control" name="Nome">
                </div>
                <div class="form-group">
                  <label style="color: dimgray; font-family: sans-serif; font-size: large; font-weight: bold;" for="inputcpf">CPF</label>
                  <input type="number" required="" class="form-control" name="cpf">
                </div>
                <div class="form-group">
                  <label style="color: dimgray; font-family: sans-serif; font-size: large; font-weight: bold;" for="inputemail">E-mail</label>
                  <input type="email" required="" class="form-control" name="email">
                </div>
                <div class="form-group">
                  <label style="color: dimgray; font-family: sans-serif; font-size: large; font-weight: bold;" for="inputCurso">Curso:</label>
                        <select class="form-control" name="Curso" required="">
                            <option> </option>
                                <?php
                                    $sql = 'SELECT * FROM curso';
                                    $result = $db->query($sql,MYSQLI_ASSOC);
                                    while($dados = $result->fetch_assoc()){ ?>
                                    <option value ="<?php echo $dados ['idCurso']; ?>"><?php echo $dados ['Nome']; ?>
                                    </option> <?php
                                    }
                                ?>
                        </select>
                      </div>
                      <div class="form-group">
                        <label style="color: dimgray; font-family: sans-serif; font-size: large; font-weight: bold;" for="inputUniversidade">Universidade:</label>
                              <select class="form-control" name="Universidade" required="">
                                  <option> </option>
                                      <?php
                                          $sql = 'SELECT * FROM universidade';
                                          $result = $db->query($sql,MYSQLI_ASSOC);
                                          while($dados = $result->fetch_assoc()){ ?>
                                          <option value ="<?php echo $dados ['idUniversidade']; ?>"><?php echo $dados ['Nome']; ?>
                                          </option> <?php
                                          }
                                      ?>
                              </select>
                            </div>
                            <div class="form-group">
                              <label style="color: dimgray; font-family: sans-serif; font-size: large; font-weight: bold;" for="inputVaga">Vaga:</label>
                                    <select class="form-control" name="Vaga" required="">
                                        <option> </option>
                                            <?php
                                                $sql = 'SELECT * FROM vaga';
                                                $result = $db->query($sql,MYSQLI_ASSOC);
                                                while($dados = $result->fetch_assoc()){ ?>
                                                <option value ="<?php echo $dados ['idVaga']; ?>"><?php echo $dados ['Nome']; ?>
                                                </option> <?php
                                                }
                                            ?>
                                    </select>
                                  </div>
                <div class="form-group">
                  <label style="color: dimgray; font-family: sans-serif; font-size: large; font-weight: bold;" for="inputcep">CEP</label>
                  <input type="number" required="" class="form-control" name="cep">
                </div>
                <div class="form-group">
                  <label style="color: dimgray; font-family: sans-serif; font-size: large; font-weight: bold;" for="inputRua">Rua</label>
                  <input type="text" required="" class="form-control" name="Rua">
                </div>
                <div class="form-group">
                  <label style="color: dimgray; font-family: sans-serif; font-size: large; font-weight: bold;" for="inputCidade">Cidade</label>
                  <input type="text" required="" class="form-control" name="Cidade">
                </div>
                <div class="form-group">
                  <label style="color: dimgray; font-family: sans-serif; font-size: large; font-weight: bold;" for="inputEstado">Estado</label>
                  <input type="text" required="" class="form-control" name="Estado">
                </div>
                <div class="form-group">
                  <label style="color: dimgray; font-family: sans-serif; font-size: large; font-weight: bold;" for="inputPais">Pais</label>
                  <input type="text" required="" class="form-control" name="Pais">
                </div>
                <div class="form-group">
                  <label style="color: dimgray; font-family: sans-serif; font-size: large; font-weight: bold;" for="inputNumero">Numero</label>
                  <input type="number" required="" class="form-control" name="Numero">
                </div>
                <button type="submit" class="btn btn-primary">Cadastrar</button>
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

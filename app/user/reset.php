<<<<<<< HEAD
<?php
   include("share/login-secure.php");

   $username = $_SESSION['ulogin'];
   $password = $_SESSION['upaswd'];
   $user_id = $_SESSION['user_id'];
   $profile_id = $_SESSION['profile_id'];
   $email = $_SESSION['email'];

   $linkHome = $menu->getPageNumber('home/welcome.php');

   $acesso = User::getInstance();
   $acesso->setSaveId($user_id);

   $lista = $acesso->select("id={$user_id}");
   $lista = (object) $lista[0];
   $acesso->setId($lista->id);


?>
<!-- Breadcrumb-->
<div class="breadcrumb-holder mb-2">
   <div class="container-fluid">
      <ul class="breadcrumb">
         <li class="breadcrumb-item"><a href="index.php">Usuário > Senha</a></li>
      </ul>
   </div>
</div>

<section>
   <div class="container-fluid " id="div_view">
      <form class="form form-validate"  method="post" action="">

         <div class="row " style="width: 100%;">   
            <div class="col-md-6">
               <div class="card">
                  <div class="card-header">
                     <?php
                        if(isset($_POST['update'])) {

                            if( strlen($_POST['uPwd1']) > 5 ){

                                if( $_POST['uPwd1'] == $_POST['uPwd2'] ){

                                    $acesso->setPassword($_POST['uPwd1']);
                                    $acesso->setLogin($lista->login);
                                    $resultado = $acesso->passwordUpdate();
                                    $_SESSION['upaswd'] = $_POST['uPwd1'];
                                    if($resultado){
                                       echo "<div class='alert alert-info alert-dismissible fade show text-left' role='alert'>";
                                       echo "<button type='button' class='close' data-dismiss='alert'>&times;</button>";
                                       echo "<p>Senha alterada com sucesso!.</p>";
                                       echo "</div>";                                
                                    }

                                } else {
                                    echo "<div class='alert alert-danger alert-dismissible fade show text-left' role='alert'>";
                                    echo "<button type='button' class='close' data-dismiss='alert'>&times;</button>";
                                    echo "<p>Erro na senha de confirmação! Tente novamente.</p>";
                                    echo "</div>";                                
                                }
                            } else {
                                echo "<div class='alert alert-danger alert-dismissible fade show text-left' role='alert'>";
                                echo "<button type='button' class='close' data-dismiss='alert'>&times;</button>";
                                echo "<p>A nova senha tem que ter pelo menos 6 caracteres! Tente novamente.</p>";
                                echo "</div>";                                
                            }
                            unset($_POST['update']);
                            unset($_POST['uPwd1']);
                            unset($_POST['uPwd2']);
                        }
                     ?>
                     <div class="row">
                        <div class="col-sm-12">
                           <h4 class="card-title "><i class="fas fa-key"></i> &nbsp; SENHA</h4>
                        </div>
                     </div>
                  </div>
                  <div class="card-body">

                     <div class="row">

                        <div class="form-group col-sm-12">
                           <label class="form-control-label">Login</label>
                           <input name="ulogin" type="text" readonly data-msg="" class="form-control form-control-sm" value="<?php echo $lista->login;?>" readonly >
                        </div>

                        <div class="form-group col-sm-12">
                           <label class="form-control-label" >Nova Senha</label>
                           <input name="uPwd1" type="password" data-msg="Por favor entre com a Nova Senha" class="form-control form-control-sm" value="" autocomplete="off" required >
                        </div>

                        <div class="form-group col-sm-12 mb-3">
                           <label class="form-control-label" >Confirme Nova Senha</label>
                           <input name="uPwd2" type="password" data-msg="Por favor confirme a Nova Senha" class="form-control form-control-sm" value="" autocomplete="off" required >
                        </div>

                        <div class="col-12 mt-1">
                           <small><strong>Observação:</strong> senha com no mínimo 6 caracteres</small>
                        </div>


                        <div class="col-12 text-center mt-0">
                           <hr class="my-4">
                           <button name="update" type="submit" class="btn btn-success " data-toggle="tooltip" data-placement="top" title="Alterar senha" value="create"><i class="fa fa-check" aria-hidden="true"></i> Alterar</button>
                        </div>


                     </div>
                  </div>
               </div>
            </div>
         </div>

      </form>
   </div>
</section>
=======
<?php
   include("share/login-secure.php");

   $username = $_SESSION['ulogin'];
   $password = $_SESSION['upaswd'];
   $user_id = $_SESSION['user_id'];
   $profile_id = $_SESSION['profile_id'];
   $email = $_SESSION['email'];

   $linkHome = $menu->getPageNumber('home/welcome.php');

   $acesso = User::getInstance();
   $acesso->setSaveId($user_id);

   $lista = $acesso->select("id={$user_id}");
   $lista = (object) $lista[0];
   $acesso->setId($lista->id);


?>
<!-- Breadcrumb-->
<div class="breadcrumb-holder mb-2">
   <div class="container-fluid">
      <ul class="breadcrumb">
         <li class="breadcrumb-item"><a href="index.php">Usuário > Senha</a></li>
      </ul>
   </div>
</div>

<section>
   <div class="container-fluid " id="div_view">
      <form class="form form-validate"  method="post" action="">

         <div class="row " style="width: 100%;">   
            <div class="col-md-6">
               <div class="card">
                  <div class="card-header">
                     <?php
                        if(isset($_POST['update'])) {

                            if( strlen($_POST['uPwd1']) > 5 ){

                                if( $_POST['uPwd1'] == $_POST['uPwd2'] ){

                                    $acesso->setPassword($_POST['uPwd1']);
                                    $acesso->setLogin($lista->login);
                                    $resultado = $acesso->passwordUpdate();
                                    $_SESSION['upaswd'] = $_POST['uPwd1'];
                                    if($resultado){
                                       echo "<div class='alert alert-info alert-dismissible fade show text-left' role='alert'>";
                                       echo "<button type='button' class='close' data-dismiss='alert'>&times;</button>";
                                       echo "<p>Senha alterada com sucesso!.</p>";
                                       echo "</div>";                                
                                    }

                                } else {
                                    echo "<div class='alert alert-danger alert-dismissible fade show text-left' role='alert'>";
                                    echo "<button type='button' class='close' data-dismiss='alert'>&times;</button>";
                                    echo "<p>Erro na senha de confirmação! Tente novamente.</p>";
                                    echo "</div>";                                
                                }
                            } else {
                                echo "<div class='alert alert-danger alert-dismissible fade show text-left' role='alert'>";
                                echo "<button type='button' class='close' data-dismiss='alert'>&times;</button>";
                                echo "<p>A nova senha tem que ter pelo menos 6 caracteres! Tente novamente.</p>";
                                echo "</div>";                                
                            }
                            unset($_POST['update']);
                            unset($_POST['uPwd1']);
                            unset($_POST['uPwd2']);
                        }
                     ?>
                     <div class="row">
                        <div class="col-sm-12">
                           <h4 class="card-title "><i class="fas fa-key"></i> &nbsp; SENHA</h4>
                        </div>
                     </div>
                  </div>
                  <div class="card-body">

                     <div class="row">

                        <div class="form-group col-sm-12">
                           <label class="form-control-label">Login</label>
                           <input name="ulogin" type="text" readonly data-msg="" class="form-control form-control-sm" value="<?php echo $lista->login;?>" readonly >
                        </div>

                        <div class="form-group col-sm-12">
                           <label class="form-control-label" >Nova Senha</label>
                           <input name="uPwd1" type="password" data-msg="Por favor entre com a Nova Senha" class="form-control form-control-sm" value="" autocomplete="off" required >
                        </div>

                        <div class="form-group col-sm-12 mb-3">
                           <label class="form-control-label" >Confirme Nova Senha</label>
                           <input name="uPwd2" type="password" data-msg="Por favor confirme a Nova Senha" class="form-control form-control-sm" value="" autocomplete="off" required >
                        </div>

                        <div class="col-12 mt-1">
                           <small><strong>Observação:</strong> senha com no mínimo 6 caracteres</small>
                        </div>


                        <div class="col-12 text-center mt-0">
                           <hr class="my-4">
                           <button name="update" type="submit" class="btn btn-success " data-toggle="tooltip" data-placement="top" title="Alterar senha" value="create"><i class="fa fa-check" aria-hidden="true"></i> Alterar</button>
                        </div>


                     </div>
                  </div>
               </div>
            </div>
         </div>

      </form>
   </div>
</section>
>>>>>>> 995a413fe02243a944cf9a7d8afe66a35c535c7f

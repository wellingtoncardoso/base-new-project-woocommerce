<?php
/* 
*Template name: Delete user 
*/

    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "retina_blackcat";
    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    } 

    global $current_user;
    $user = get_current_user_id();
    if ($user != '1'){
       $sql = 
        "   DELETE FROM wp_users 
            WHERE id = $user";
       $conn->query($sql);	
    }else {echo "Cannot Delete the Primary Admin.";}

get_header('pages'); ?>

<section id="delete-user">
    <div class="container">  
        <div class="row">
            <div class="col-12 col-md-6">
                <h1>Usuário foi excluído com sucesso!</h1>
            </div>
            <div class="col-12 col-md-6">
                <h3>Para obter acesso novamente efetue seu cadastro clicando no botão abaixo.</h3>
                <a href="<?php echo esc_url( home_url(''));?>/minha-conta" class="btn btn-primary">Cadastrar-se</a>
                <div style="margin-top: 30px;">
                    <h5>Ou volte para página principal</h5>
                    <a href="<?php echo esc_url(home_url('/')); ?>" class="btn btn-primary">Voltar</a>
                </div>
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>
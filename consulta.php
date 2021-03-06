<?php
function __autoload($classe) {
	require_once 'classes/'.$classe.'.php';
}

$lista = new Estagio();

if(isset($_GET['excluir'])){
	$id = $_GET['excluir'];
	$lista->delete($id);
}



$lista->findAll();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Controle de Estagio</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script type="text/javascript">
        $(document).ready(function() {
        	$('#modalAlterar').on('show.bs.modal', function (event) {
                    
                    var button = $(event.relatedTarget) // Button that triggered the modal
                    var recipient = button.data('alu_nome') // Extract info from data-* attributes
                    var alu_id = button.data('alu_id')
                    var alu_ra = button.data('alu_ra')
                    var alu_celular = button.data('alu_celular')
                    var alu_email = button.data('alu_email')
                    var alu_anoturma = button.data('alu_anoturma')
                    var alu_trabalha = button.data('alu_trabalha')
                    var alu_empresa = button.data('alu_empresa')
                    var alu_dt_trabalha = button.data('alu_dt_trabalha')
                    var alu_carteira = button.data('alu_carteira')
                    var alu_dt_carteira = button.data('alu_dt_carteira')
                    var alu_declaracao_empresa = button.data('alu_declaracao_empresa')
                    var alu_dt_declaracao_empresa = button.data('alu_dt_declaracao_empresa')
                    var alu_convenio = button.data('alu_convenio')
                    var alu_dt_convenio = button.data('alu_dt_convenio')
                    var alu_compromisso = button.data('alu_compromisso')
                    var alu_dt_compromisso = button.data('alu_dt_compromisso')
                    var alu_relatorio = button.data('alu_relatorio')
                    var alu_dt_relatorio = button.data('alu_dt_relatorio')
                    var alu_declaracao_fib_impressa = button.data('alu_declaracao_fib_impressa')
                    var alu_declaracao_fib_dataalu_pendencia = button.data('alu_declaracao_fib_dataalu_pendencia')
                    var alu_pendencia = button.data('alu_pendencia')


                     // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
                     // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
                     var modal = $(this)
                     
                     modal.find('.modal-body input[id=alu_nome]').val(recipient)
                     modal.find('#alu_id').val(alu_id)
                     modal.find('#alu_ra').val(alu_ra)
                     modal.find('#alu_celular').val(alu_celular)
                     modal.find('#alu_email').val(alu_email)
                     modal.find('#alu_anoturma').val(alu_anoturma)
                     modal.find('#alu_trabalha').val(alu_trabalha)
                     modal.find('#alu_empresa').val(alu_empresa)
                     modal.find('#alu_dt_trabalha').val(alu_dt_trabalha)
                     modal.find('#alu_carteira').val(alu_carteira)
                     modal.find('#alu_dt_carteira').val(alu_dt_carteira)
                     modal.find('#alu_declaracao_empresa').val(alu_declaracao_empresa)
                     modal.find('#alu_dt_declaracao_empresa').val(alu_dt_declaracao_empresa)
                     modal.find('#alu_convenio').val(alu_convenio)
                     modal.find('#alu_dt_convenio').val(alu_dt_convenio)
                     modal.find('#alu_compromisso').val(alu_compromisso)
                     modal.find('#alu_dt_compromisso').val(alu_dt_compromisso)
                     modal.find('#alu_relatorio').val(alu_relatorio)
                     modal.find('#alu_dt_relatorio').val(alu_dt_relatorio)
                     modal.find('#alu_declaracao_fib_impressa').val(alu_declaracao_fib_impressa)
                     modal.find('#alu_declaracao_fib_dataalu_pendencia').val(alu_declaracao_fib_dataalu_pendencia)
                     modal.find('#alu_pendencia').val(alu_pendencia)
                     modal.find('.modal-title').text('Alterando Estagiario: ' + alu_relatorio)
                    });
            $("#btn").click(function(e) {
                alert("clicou");
            });
        });

    </script>
</head>

<body>
    <nav class="navbar navbar-default">
        <div class="container-fluid">
            <!-- Menu para navegacao mobile -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs1" aria-expanded="false">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
                <a class="navbar-brand" href="#">Controle de Estágio</a>
            </div>
            <!-- Fim Menu para navegacao mobile -->

            <div class="collapse navbar-collapse" id="bs1">
                <ul class="nav navbar-nav">
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Cadastro <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="incluir.php">Incluir</a></li>
                            <li><a href="consulta.php">Consulta</a></li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Relatórios <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="pendencia.php">Declaração Fib</a></li>
                            <li><a href="teste.php">Pendência</a></li>
                        </ul>
                    </li>
                </ul>
            </div>

        </div>
        <!--Fim da <div class="container-fluid">-->
    </nav>
    <!--Fim da navbar-->
    <div class="container-fluid" id="content">
    	<div id="listar" class="col-md-5 col-md-offset-3">
    		<table class="table table-striped table-responsive table-condensed">
    			<thead>
    				<th>Id</th>
    				<th>Nome</th>
    				<th>Ra</th>
    				<th>Email</th>
    				<th colspan="2">Acoes</th>
    			</thead>
    			<tbody>
    				<?php foreach ( $lista->findAll() as $key => $value) { ?>
    				<tr>
    					<td><?php echo $value->alu_id; ?></td>
    					<td><?php echo $value->alu_nome; ?></td>
    					<td><?php echo $value->alu_ra; ?></td>
    					<td><?php echo $value->alu_email; ?></td>
    					<td>
    						<button type="button" class="btn btn-warning btn-xs" data-toggle="modal" data-target="#modalAlterar" data-alu_id="<?php echo $value->alu_id; ?>"
                            data-alu_nome="<?php echo $value->alu_nome; ?>"
                            data-alu_ra="<?php echo $value->alu_ra; ?>"
                            data-alu_celular="<?php echo $value->alu_celular; ?>"
                            data-alu_email="<?php echo $value->alu_email; ?>"
                            data-alu_anoturma="<?php echo $value->alu_anoturma; ?>"
                            data-alu_trabalha="<?php echo $value->alu_trabalha; ?>"
                            data-alu_empresa="<?php echo $value->alu_empresa; ?>"
                            data-alu_dt_trabalha="<?php echo $value->alu_dt_trabalha; ?>"
                            data-alu_carteira="<?php echo $value->alu_carteira; ?>"
                            data-alu_dt_carteira="<?php echo $value->alu_dt_carteira; ?>"
                            data-alu_declaracao_empresa="<?php echo $value->alu_declaracao_empresa; ?>"
                            data-alu_dt_declaracao_empresa="<?php echo $value->alu_dt_declaracao_empresa; ?>"
                            data-alu_convenio="<?php echo $value->alu_convenio; ?>"
                            data-alu_dt_convenio="<?php echo $value->alu_dt_convenio; ?>"
                            data-alu_compromisso="<?php echo $value->alu_compromisso; ?>"
                            data-alu_dt_compromisso="<?php echo $value->alu_dt_compromisso; ?>"
                            data-alu_relatorio="<?php echo $value->alu_relatorio; ?>"
                            data-alu_dt_relatorio="<?php echo $value->alu_dt_relatorio; ?>"
                            data-alu_declaracao_fib_impressa="<?php echo $value->alu_declaracao_fib_impressa; ?>"
                            data-alu_declaracao_fib_data="<?php echo $value->alu_declaracao_fib_data; ?>"
                            data-alu_pendencia="<?php echo $value->alu_pendencia; ?>"
                            >
    						    <span class="glyphicon glyphicon-pencil"></span>
    						</button>
    					</td>
    					<td>
    						<a href="?excluir=<?php echo $value->alu_id; ?>" type="button" class="btn btn-danger btn-xs">
    						    <span class="glyphicon glyphicon-trash"></span>
    						</a>
    					</td>
    				</tr>
    				<?php } ?>
    			</tbody>
    		</table>
    	</div>
    </div>
    <div class="modal fade" id="modalAlterar" tabindex="-1" role="dialog">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title">Modal title</h4>
          </div>
          <div class="modal-body">
            <?php require_once('formIncluir.php') ?>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Fechar</button>
            
          </div>
        </div><!-- /.modal-content -->
      </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->

    <!-- Include all compiled plugins (below), or include individual files as needed -->

</body>

</html>



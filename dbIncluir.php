<?php
function __autoload($classe) {
	require_once 'classes/'.$classe.'.php';
}

$alu_nome                    = if(isset($REQUEST['alu_nome'])) ? $REQUEST['alu_nome']): NULL;
$alu_ra                      = if(isset($REQUEST['alu_ra'])) ? $REQUEST['alu_ra']): NULL;
$alu_celular                 = if(isset($REQUEST['alu_celular'])) ? $REQUEST['alu_celular']): NULL;
$alu_email                   = if(isset($REQUEST['alu_email'])) ? $REQUEST['alu_email']): NULL;
$alu_anoturma                = if(isset($REQUEST['alu_anoturma'])) ? $REQUEST['alu_anoturma']): NULL;
$alu_trabalha                = if(isset($REQUEST['alu_trabalha'])) ? $REQUEST['alu_trabalha']): NULL;
$alu_empresa                 = if(isset($REQUEST['alu_empresa'])) ? $REQUEST['alu_empresa']): NULL;
$alu_dt_trabalha             = if(isset($REQUEST['alu_dt_trabalha'])) ? $REQUEST['alu_dt_trabalha']): NULL;
$alu_carteira                = if(isset($REQUEST['alu_carteira'])) ? $REQUEST['alu_carteira']): NULL;
$alu_dt_carteira             = if(isset($REQUEST['alu_dt_carteira'])) ? $REQUEST['alu_dt_carteira']): NULL;
$alu_declaracao_empresa      = if(isset($REQUEST['alu_declaracao'])) ? $REQUEST['alu_declaracao']): NULL;
$alu_dt_declaracao_empresa   = if(isset($REQUEST['alu_declaracao_empresa'])) ? $REQUEST['alu_declaracao_empresa']): NULL;
$alu_convenio                = if(isset($REQUEST['alu_convenio'])) ? $REQUEST['alu_convenio']): NULL;
$alu_dt_convenio             = if(isset($REQUEST['alu_dt_convenio'])) ? $REQUEST['alu_dt_convenio']): NULL;
$alu_compromisso             = if(isset($REQUEST['alu_compromisso'])) ? $REQUEST['alu_compromisso']): NULL;
$alu_dt_compromisso          = if(isset($REQUEST['alu_dt_compromisso'])) ? $REQUEST['alu_dt_compromisso']): NULL;
$alu_relatorio               = if(isset($REQUEST['alu_relatorio'])) ? $REQUEST['alu_relatorio']): NULL;
$alu_dt_relatorio            = if(isset($REQUEST['alu_dt_relatorio'])) ? $REQUEST['alu_dt_relatorio']): NULL;
$alu_declaracao_fib_impressa = if(isset($REQUEST['alu_declaracao_fib_impressa'])) ? $REQUEST['alu_declaracao_fib_impressa']): NULL;
$alu_declaracao_fib_data     = if(isset($REQUEST['alu_declaracao_fib_data'])) ? $REQUEST['alu_declaracao_fib_data']): NULL;
$alu_pendencia               = if(isset($REQUEST['alu_pendencia'])) ? $REQUEST['alu_pendencia']): NULL;

$novoAluno = new Estagio();

$estagio->setAlu_Nome($alu_nome);
$estagio->setAlu_Ra($alu_ra);
$estagio->setAlu_Celular($alu_celular);
$estagio->setAlu_Email($alu_email);
$estagio->setAlu_AnoTurma($alu_anoturma);
$estagio->setAlu_Trabalha($alu_trabalha);
$estagio->setAlu_Empresa($alu_empresa);
$estagio->setAlu_Dt_Trabalha($alu_dt_trabalha);
$estagio->setAlu_Carteira($alu_carteira);
$estagio->setAlu_Dt_Carteira($alu_dt_carteira);
$estagio->setAlu_Declaracao_Empresa($alu_declaracao_empresa);
$estagio->setAlu_Dt_Declaracao_Empresa($alu_dt_declaracao_empresa);
$estagio->setAlu_Convenio($alu_convenio);
$estagio->setAlu_Dt_Convenio($alu_dt_convenio);
$estagio->setAlu_Compromisso($alu_compromisso);
$estagio->setAlu_Dt_Compromisso($alu_dt_compromisso);
$estagio->setAlu_Relatorio($alu_relatorio);
$estagio->setAlu_Dt_relatorio($alu_dt_relatorio);
$estagio->setAlu_Declaracao_Fib_Impressa($alu_declaracao_fib_impressa);
$estagio->setAlu_Declaracao_Fib_Data($alu_declaracao_fib_data);
$estagio->setAlu_Pendencia($alu_pendencia);
$estagio->insere();
?>
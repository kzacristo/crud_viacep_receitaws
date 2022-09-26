@extends('adminlte::page')

@section('title', 'Cadastro Fornecedor')

@section('content_header')
<h1>Cadastro Fornecedor</h1>
@stop

@section('content')
<div class="card card-default">
    <div class="card-header">
        <h3 class="card-title">Dados do Fornecedor</h3>
        <div class="card-tools">
            <button type="button pull-right" class="btn btn-tool" data-card-widget="collapse">
                <i class="fas fa-minus"></i>
            </button>
        </div>
    </div>
    <form action="{{route('salvar_cnpj')}}" method="POST" class="card-body">
        <div class="card-body" style="display: block;">
            <div class="row">
                <div class="col-md-12">
                    <div class="form-group" data-step="1"><label class="radio-inline">
                            <input type="radio" name="type" class="client-type" value="pj" checked="">Pessoa Jurídica</label><label class="radio-inline"> &nbsp;&nbsp;
                            <input type="radio" name="type" class="client-type" value="pf">Pessoa Física</label>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="form-group">
                        <label class="control-label">CNPJ<span style="color: red;"><sup>•</sup></span></label>
                        <input type="text" id="cnpj" onblur="getCNPJ(this)" name="cnpj" class="form-control not-required-cnpj not-value rounded-form" data-step="2" maxlength="18" required="" value="">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label class="control-label">Razão Social<span style="color: red;"><sup>•</sup></span></label>
                        <input type="text" id="razao_social" name="razao_social" class="form-control not-required-cpf not-value" data-step="2" required="">
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="form-group">
                        <label class="control-label">Nome Fantasia<span style="color: red;"><sup>•</sup></span></label>
                        <input type="text" id="nome_fantasia" name="nome_fantasia" class="form-control not-required-cpf not-value" data-step="2" required="">
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="form-group">
                        <label class="control-label">Indicador de Inscrição Estadual<span style="color: red;"><sup>•</sup></span></label>
                        <div class="select2-purple">
                            <select class="form-control select2 select2-hidden-accessible" style="width: 100%;" data-select2-id="1" tabindex="-1" aria-hidden="true">
                                <option value="">Selecione</option>
                                <option value="1">Contribuinte</option>
                                <option value="2">Contribuinte Isento</option>
                                <option value="3">Não Contribuinte</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="form-group">
                        <label class="control-label">Inscrição Estadual<span style="color: red;"><sup>•</sup></span></label>
                        <input type="text" name="inscricao_estadual" id="incricao_estadual" class="form-control not-value" required="">
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="form-group">
                        <label class="control-label">Inscrição Municipal<span style="color: red;"><sup>•</sup></span></label>
                        <input type="text" name="inscricao_municipal" id="incricao_municipal" class="form-control not-value" required="">
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="form-group">
                        <label class="control-label">Situação CPNJ<span style="color: red;"><sup>•</sup></span></label>
                        <input type="text" name="inscricao_municipal" id="incricao_municipal" class="form-control not-value" required="">
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="form-group">
                        <label class="control-label">Indicador de Inscrição Estadual<span style="color: red;"><sup>•</sup></span></label>
                        <div class="select2-purple">
                            <select class="form-control select2 select2-hidden-accessible" style="width: 100%;" data-select2-id="1" tabindex="-1" aria-hidden="true">
                                <option value="">Selecione</option>
                                <option value="recolher">A Recolher pelo Prestador</option>
                                <option value="retido">Retido pelo Tomador</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="form-group">
                        <label class="control-label">Indicador de Inscrição Estadual<span style="color: red;"><sup>•</sup></span></label>
                        <div class="select2-purple">
                            <select class="form-control select2 select2-hidden-accessible" style="width: 100%;" data-select2-id="1" tabindex="-1" aria-hidden="true">
                                <option value="">Selecione</option>
                                <option value="0">Não</option>
                                <option value="1">Sim</option>
                            </select>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
</div>

@stop

@section('css')
<link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
<script src="<?php echo asset('js/desafio.js') ?>" type="text/javascript">
</script>
@stop
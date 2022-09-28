@extends('adminlte::page')

@section('title', 'Cadastro Fornecedor')

@section('content_header')
<h1>Cadastro Fornecedor</h1>
@stop

@section('content')
<!-- SEARCH FORM -->
<form class="form-inline ml-3">
    <div class="wrapper"><input type="hidden" id="collapse-menu-route">
        <div class="content-wrapper" style="min-height: 561px;">
            <section class="content-header" style="margin-bottom: 10px;">
                <h1>Fornecedores <small>Painel de Controle</small></h1>
                <div class="breadcrumb col-md-2">
                    <div class="row">
                        <div class="col-xs-6 ">
                            <a href="{{route('buscar')}}" class="btn btn-block btn-outline-success btn-lg"><i class="fa fa-plus fa-fw"></i>Cadastrar
                            </a>
                        </div>
                    </div>
                </div>
            </section>
            <section class="content">
                <div id="div-main" class="row">
                    <div class="col-xs-12">
                        <div class="box box-default">
                            <div class="box-body div-scroll-x">
                                <div id="tbAll_wrapper" class="dataTables_wrapper form-inline dt-bootstrap">
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <div class="dataTables_length" id="tbAll_length"><label>Mostrando <select name="tbAll_length" aria-controls="tbAll" class="form-control input-sm">
                                                        <option value="100">100</option>
                                                        <option value="250">250</option>
                                                        <option value="500">500</option>
                                                        <option value="1000">1000</option>
                                                        <option value="2000">2000</option>
                                                        <option value="3000">3000</option>
                                                        <option value="4000">4000</option>
                                                        <option value="5000">5000</option>
                                                        <option value="10000">10000</option>
                                                    </select> resultados</label></div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div id="tbAll_filter" class="dataTables_filter"><label>Filtro:<input type="search" class="form-control input-sm" placeholder="" aria-controls="tbAll"></label></div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <table id="tbAll" class="table table-bordered table-striped dataTable" role="grid" aria-describedby="tbAll_info">
                                                <thead>
                                                    <tr role="row">
                                                        <th class="sorting" tabindex="0" aria-controls="tbAll" rowspan="1" colspan="1" aria-label="Razão Social/Nome: activate to sort column ascending" style="width: 267.641px;">Razão Social/Nome</th>
                                                        <th class="sorting" tabindex="0" aria-controls="tbAll" rowspan="1" colspan="1" aria-label="Nome Fantasia/Apelido: activate to sort column ascending" style="width: 314.422px;">Nome Fantasia/Apelido</th>
                                                        <th class="sorting" tabindex="0" aria-controls="tbAll" rowspan="1" colspan="1" aria-label="CNPJ/CPF: activate to sort column ascending" style="width: 158.359px;">CNPJ/CPF</th>
                                                        <th class="sorting" tabindex="0" aria-controls="tbAll" rowspan="1" colspan="1" aria-label="Ativo: activate to sort column ascending" style="width: 95.9375px;">Ativo</th>
                                                        <th class="text-center sorting_disabled" rowspan="1" colspan="1" aria-label="Ação" style="width: 91.6406px;">Ação</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr class="odd">
                                                        <td valign="top" colspan="5" class="dataTables_empty">
                                                            <div align="center">Sem dados no momento</div>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                                <tfoot>
                                                    <tr>
                                                        <th rowspan="1" colspan="1">Razão Social/Nome</th>
                                                        <th rowspan="1" colspan="1">Nome Fantasia/Apelido</th>
                                                        <th rowspan="1" colspan="1">CNPJ/CPF</th>
                                                        <th rowspan="1" colspan="1">Ativo</th>
                                                        <th class="text-center" rowspan="1" colspan="1">Ação</th>
                                                    </tr>
                                                </tfoot>
                                            </table>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-5">
                                            <div class="dataTables_info" id="tbAll_info" role="status" aria-live="polite">Mostrando 0 a 0 de 0 resultados</div>
                                        </div>
                                        <div class="col-sm-7">
                                            <div class="dataTables_paginate paging_simple_numbers" id="tbAll_paginate">
                                                <ul class="pagination">
                                                    <li class="paginate_button previous disabled" id="tbAll_previous"><a href="#" aria-controls="tbAll" data-dt-idx="0" tabindex="0">Anterior</a></li>
                                                    <li class="paginate_button next disabled" id="tbAll_next"><a href="#" aria-controls="tbAll" data-dt-idx="1" tabindex="0">Próximo</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>
    <script src="https://teste.laravelnapratica.com.br/js/general.js" type="text/javascript"></script>
    <div id="lightboxOverlay" class="lightboxOverlay" style="display: none;"></div>
    <div id="lightbox" class="lightbox" style="display: none;">
        <div class="lb-outerContainer">
            <div class="lb-container"><img class="lb-image" src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw==">
                <div class="lb-nav"><a class="lb-prev" href=""></a><a class="lb-next" href=""></a></div>
                <div class="lb-loader"><a class="lb-cancel"></a></div>
            </div>
        </div>
        <div class="lb-dataContainer">
            <div class="lb-data">
                <div class="lb-details"><span class="lb-caption"></span><span class="lb-number"></span></div>
                <div class="lb-closeContainer"><a class="lb-close"></a></div>
            </div>
        </div>
    </div>
</form>
@if(session('sucesso'))
<div class="alert alert-success" role="alert">
    {{session('sucesso')}}
</div>
@endif
@if(session('erro'))
<div class="alert alert-danger" role="alert">
    {{session('erro')}}
</div>
@endif
@endsection
@extends('app')

@section('content')
    <h1></h1>
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <body class="skin-black sidebar-mini sidebar-collapse wysihtml5-supported">
  <div class="wrapper"><input type="hidden" id="collapse-menu-route">
    <div class="content-wrapper" style="min-height: 561px;">
      <section class="content-header" style="margin-bottom: 10px;">
        <h1>Fornecedor<small>Cadastrar</small></h1>
      </section>
      <section class="content">
        <div class="box box-default">
          <div class="box-header with-border">
            <h3 class="box-title">Dados do Fornecedor</h3>
            <div class="box-tools pull-right"><button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus bt-plus"></i></button></div>
          </div>
          <div class="box-body">
            <div class="row">
              <div class="col-md-12">
                <div class="form-group" data-step="1"><label class="radio-inline"><input type="radio" name="type" class="client-type" value="pj" checked="">Pessoa Jurídica</label><label class="radio-inline"><input type="radio" name="type" class="client-type" value="pf">Pessoa Física</label></div>
              </div>
              <div id="div-cpf" style="display: none;">
                <div class="col-md-3">
                  <div class="form-group"><label class="control-label">CPF<span style="color: red;"><sup>•</sup></span></label><input type="tel" id="cpf" name="cpf" class="form-control not-required-cpf not-value" data-step="" maxlength="14"></div>
                </div>
                <div class="col-md-6">
                  <div class="form-group"><label class="control-label">Nome<span style="color: red;"><sup>•</sup></span></label><input type="text" name="name" class="form-control not-required-cpf not-value"></div>
                </div>
                <div class="col-md-3">
                  <div class="form-group"><label class="control-label">Apelido</label><input type="text" name="nickname" class="form-control not-value"></div>
                </div>
                <div class="col-md-3">
                  <div class="form-group"><label class="control-label">RG<span style="color: red;"><sup>•</sup></span></label><input type="text" name="rg" class="form-control not-required-cpf not-value"></div>
                </div>
              </div>
              <div id="div-cnpj" style="">
                <div class="col-md-3">
                  <div class="form-group"><label class="control-label">CNPJ<span style="color: red;"><sup>•</sup></span></label><input type="tel" id="cnpj" name="cnpj" class="form-control not-required-cnpj not-value" data-step="2" maxlength="18" required=""></div>
                </div>
                <div class="col-md-6">
                  <div class="form-group"><label class="control-label">Razão Social<span style="color: red;"><sup>•</sup></span></label><input type="text" name="legal_name" id="legal-name" class="form-control not-required-cnpj not-value" required=""></div>
                </div>
                <div class="col-md-3">
                  <div class="form-group"><label class="control-label">Nome Fantasia<span style="color: red;"><sup>•</sup></span></label><input type="text" name="trade_name" id="trade-name" class="form-control not-required-cnpj not-value" required=""></div>
                </div>
                <div class="col-md-3">
                  <div class="form-group"><label class="control-label">Indicador de Inscrição Estadual<span style="color: red;"><sup>•</sup></span></label><select id="ie-indicator" name="ie_indicator" class="form-control not-required-cnpj" required="">
                      <option value="">Selecione</option>
                      <option value="contribuinte">Contribuinte</option>
                      <option value="contribuinte_isento">Contribuinte Isento</option>
                      <option value="nao_contribuinte">Não Contribuinte</option>
                    </select></div>
                </div>
                <div class="col-md-3">
                  <div class="form-group"><label class="control-label">Inscrição Estadual</label><input type="tel" name="ie" id="ie-value" class="form-control not-value" readonly=""></div>
                </div>
                <div class="col-md-3">
                  <div class="form-group"><label class="control-label">Inscrição Municipal</label><input type="tel" id="im" name="im" class="form-control not-required-cnpj not-value" required=""></div>
                </div>
                <div class="col-md-3">
                  <div class="form-group"><label class="control-label">Situação CNPJ</label><input type="text" name="status" id="status" class="form-control" readonly=""></div>
                </div>
                <div class="col-md-3">
                  <div class="form-group"><label class="control-label">Recolhimento<span style="color: red;"><sup>•</sup></span></label><select name="gathering" class="form-control not-required-cnpj" style="width: 100%" required="">
                      <option value="">Selecione</option>
                      <option value="recolher">A Recolher pelo Prestador</option>
                      <option value="retido">Retido pelo Tomador</option>
                    </select></div>
                </div>
              </div>
              <div class="col-md-3">
                <div class="form-group"><label class="control-label">Ativo<span style="color: red;"><sup>•</sup></span></label><select name="active" class="form-control" style="width: 100%" required="">
                    <option value="">Selecione</option>
                    <option value="0">Não</option>
                    <option value="1" selected="">Sim</option>
                  </select></div>
              </div>
            </div>
          </div>
        </div>
      </section>
    </div>
    <footer class="main-footer">
      <div class="pull-right hidden-xs"></div> <strong>Bruno Chrisostomo 2022</strong>
    </footer>
  </div>
  <script src="" type="text/javascript"></script>
  <div id="lightboxOverlay" class="lightboxOverlay" style="display: none;"></div>
  <div id="lightbox" class="lightbox" style="display: none;">
    <div class="lb-outerContainer">
      <div class="lb-container"><img class="lb-image" src="">
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
</body>
@endsection
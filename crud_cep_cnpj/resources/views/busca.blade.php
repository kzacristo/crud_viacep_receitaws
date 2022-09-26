@extends('app')

@section('content')

<body class="skin-black sidebar-mini sidebar-collapse wysihtml5-supported">
  <form id="form" method="post" action="{{route('salvar')}}" enctype="multipart/form-data">
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
                  <div id="div-cpf" style="display: none;">
                    <div class="col-md-3">
                      <div class="form-group"><label class="control-label">CPF<span style="color: red;"><sup>•</sup></span></label><input type="tel" id="cpf" name="cpf" class="form-control not-required-cpf not-value" data-step="2" maxlength="14" required=""></div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group"><label class="control-label">Nome<span style="color: red;"><sup>•</sup></span></label><input type="text" name="name" class="form-control not-required-cpf not-value" required=""></div>
                    </div>
                    <div class="col-md-3">
                      <div class="form-group"><label class="control-label">Apelido</label><input type="text" name="nickname" class="form-control not-value"></div>
                    </div>
                    <div class="col-md-3">
                      <div class="form-group"><label class="control-label">RG<span style="color: red;"><sup>•</sup></span></label><input type="text" name="rg" class="form-control not-required-cpf not-value" required=""></div>
                    </div>
                  </div>
                  <div class="box box-default">
                    <div class="box-header with-border">
                      <h3 class="box-title" data-step="6">Contato Principal</h3>
                      <div class="box-tools pull-right"><button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus bt-plus"></i></button></div>
                    </div>
                    <div class="box-body">
                      <div style="min-height: 10px;">
                        <div class="row-contact row"><input type="hidden" class="index" value="0">
                          <div class="col-md-6">
                            <div class="contact-phone">
                              <div class="row-contact-phone row"><input type="hidden" class="index" value="0">
                                <div class="col-md-6">
                                  <div class="form-group"><label class="control-label">Telefone<span style="color: red;"><sup>•</sup></span></label><input type="tel" name="contacts[0][phone][0][number]" class="form-control phone" required="" maxlength="15"></div>
                                </div>
                                <div class="col-md-6">
                                  <div class="form-group"><label class="control-label">Tipo<span style="color: red;"><sup>•</sup></span></label><select name="contacts[0][phone][0][type]" class="form-control" style="width: 100% !important" required="">
                                      <option value="">Selecione</option>
                                      <option value="residential">Residencial</option>
                                      <option value="commercial">Comercial</option>
                                      <option value="cellphone">Celular</option>
                                    </select></div>
                                </div>
                                <div class="col-md-12" style="margin-top: -12px; margin-bottom: -5px;">
                                  <div class="form-group">
                                    <div class="btn-float"> <a href="javascript:void(0)" class="link add_contact_phone" data-step="7" data-intro="O campo Telefone deve ser adicionado/removido dinamicamente.">Adicionar</a> </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="col-md-6">
                            <div class="contact-email">
                              <div class="row-contact-email row"><input type="hidden" class="index" value="0">
                                <div class="col-md-6">
                                  <div class="form-group"><label class="control-label">E-mail</label><input type="email" name="contacts[0][email][0][email]" class="form-control email"></div>
                                </div>
                                <div class="col-md-6">
                                  <div class="form-group"> <label class="control-label">Tipo</label><select name="contacts[0][email][0][type]" class="form-control type-email" style="width: 100% !important">
                                      <option value="">Selecione</option>
                                      <option value="personal">Pessoal</option>
                                      <option value="commercial">Comercial</option>
                                      <option value="other">Outro</option>
                                    </select></div>
                                </div>
                                <div class="box box-default">
                                  <div class="box-header with-border">
                                    <h3 class="box-title">Contatos Adicionais</h3>
                                    <div class="box-tools pull-right"> <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa bt-plus fa-minus"></i></button> </div>
                                  </div>
                                  <div class="box-body" style="display: block;">
                                    <div class="row" id="div-not-contact" style="">
                                      <div class="col-md-12 text-center"> <span style="color: #999;">NÃO HÁ CONTATOS ADICIONAIS.</span> </div>
                                    </div>
                                    <div id="div-contact" style="min-height: 10px;"> </div>
                                  </div>
                                </div>
                                <div class="box box-default" style="margin-top: 10px;">
                                  <div class="box-header with-border">
                                    <h3 class="box-title">Dados de Endereço</h3>
                                    <div class="box-tools pull-right"><button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus bt-plus"></i></button></div>
                                  </div>
                                  <div class="box-body">
                                    <div class="row-address">
                                      <div class="row">
                                        <div class="col-md-3">
                                          <div class="form-group"><label class="control-label">CEP<span style="color: red;"><sup>•</sup></span></label><input type="tel" name="cep" class="form-control zipcode" required="" minlength="9" data-step="3" maxlength="9"></div>
                                        </div>
                                        <div class="col-md-3">
                                          <div class="form-group"><label class="control-label">Logradouro<span style="color: red;"><sup>•</sup></span></label><input type="text" name="logradouro" class="form-control street" required=""></div>
                                        </div>
                                        <div class="col-md-3">
                                          <div class="form-group"><label class="control-label">Número<span style="color: red;"><sup>•</sup></span></label><input type="text" name="numero" class="form-control number" required=""></div>
                                        </div>
                                        <div class="col-md-3">
                                          <div class="form-group"><label class="control-label">Complemento</label><input type="text" name="complemento" class="form-control comp"></div>
                                        </div>
                                        <div class="col-md-3">
                                          <div class="form-group"><label class="control-label">Bairro<span style="color: red;"><sup>•</sup></span></label><input type="text" name="Bairro" class="form-control district" required=""></div>
                                        </div>
                                        <div class="col-md-3">
                                          <div class="form-group"><label class="control-label">Ponto de Referência</label><input type="text" name="pt_referencia" class="form-control info"></div>
                                        </div>
                                        <div class="col-md-3">
                                          <div class="form-group"><label class="control-label">UF<span style="color: red;"><sup>•</sup></span></label><select class="form-control select2 state select2-hidden-accessible" required="" style="width: 100%" data-step="4" tabindex="-1" aria-hidden="true">
                                              <option value="">Selecione</option>
                                              <option value="1">AC</option>
                                              <option value="2">AL</option>
                                              <option value="4">AM</option>
                                              <option value="3">AP</option>
                                              <option value="5">BA</option>
                                              <option value="6">CE</option>
                                              <option value="7">DF</option>
                                              <option value="8">ES</option>
                                              <option value="9">GO</option>
                                              <option value="10">MA</option>
                                              <option value="13">MG</option>
                                              <option value="12">MS</option>
                                              <option value="11">MT</option>
                                              <option value="14">PA</option>
                                              <option value="15">PB</option>
                                              <option value="17">PE</option>
                                              <option value="18">PI</option>
                                              <option value="16">PR</option>
                                              <option value="19">RJ</option>
                                              <option value="20">RN</option>
                                              <option value="22">RO</option>
                                              <option value="23">RR</option>
                                              <option value="21">RS</option>
                                              <option value="24">SC</option>
                                              <option value="26">SE</option>
                                              <option value="25">SP</option>
                                              <option value="27">TO</option>
                                            </select><span class="select2 select2-container select2-container--default" dir="ltr" style="width: 100%;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-labelledby="select2-wi8l-container"><span class="select2-selection__rendered" id="select2-wi8l-container" title="Selecione">Selecione</span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span></div>
                                        </div>
                                        <div class="col-md-3">
                                          <div class="form-group"><label class="control-label">Cidade<span style="color: red;"><sup>•</sup></span></label><select name="cidade" class="form-control select2 city select2-hidden-accessible" required="" disabled="" style="width: 100%" data-step="5" data-intro="Este campo não deve conter dados caso não seja escolhido um estado e não deve conter em sua lista cidades que não sejam relativas ao estado escolhido." tabindex="-1" aria-hidden="true">
                                              <option value="">Selecione</option>
                                            </select><span class="select2 select2-container select2-container--default select2-container--disabled" dir="ltr" style="width: 100%;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="-1" aria-labelledby="select2-addresscity-dk-container"><span class="select2-selection__rendered" id="select2-addresscity-dk-container" title="Selecione">Selecione</span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span></div>
                                        </div>
                                        <div class="col-md-3 div_cond">
                                          <div class="form-group"><label class="control-label">Condomínio?<span style="color: red;"><sup>•</sup></span></label><select class="form-control select_cond" name="address[condominium]" style="width: 100%" required="">
                                              <option value="" selected="">Selecione</option>
                                              <option value="0">Não</option>
                                              <option value="1">Sim</option>
                                            </select></div>
                                        </div>
                                        <div class="col-md-3 div-address-cond" style="display: none;">
                                          <div class="form-group"><label class="control-label">Endereço<span style="color: red;"><sup>•</sup></span></label><input type="text" name="endereco" class="form-control cond-required address_cond"></div>
                                        </div>
                                        <div class="col-md-3 div-address-cond" style="display: none;">
                                          <div class="form-group"><label class="control-label">Número<span style="color: red;"><sup>•</sup></span></label><input type="text" name="numero" class="form-control cond-required number_cond"></div>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                                <div class="col-md-12" style="margin-top: -12px; margin-bottom: -5px;">
                                  <div class="form-group"><a href="javascript:void(0)" class="link add_contact_email" data-step="8">Adicionar</a></div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
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
          <div class="box box-default">
            <div class="box-header with-border">
              <div class="row">
                <div class="col-md-2 col-xs-12 col-sm-12">
                  <h4 class="box-title ">Observação</h4>
                </div>
              </div>
              <div class="box-tools pull-right"><button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus bt-plus"></i></button></div>
            </div>
            <div class="box-body" style="display: block;">
              <div class="row">
                <div class="col-md-12">
                  <div class="form-group">
                    <ul class="wysihtml5-toolbar" style="">
                      <li>
                        <div class="btn-group">
                          <a class="btn  btn-default" data-wysihtml5-command="bold" title="CTRL+B" tabindex="-1" href="javascript:;" unselectable="on">Negrito</a>
                          <a class="btn  btn-default" data-wysihtml5-command="italic" title="CTRL+I" tabindex="-1" href="javascript:;" unselectable="on">Itálico</a>
                          <a class="btn  btn-default" data-wysihtml5-command="underline" title="CTRL+U" tabindex="-1" href="javascript:;" unselectable="on">Sublinhado</a>

                        </div>
                      </li>
                      <li>
                      </li>
                      <li>
                        <div class="btn-group">
                          <a class="btn  btn-default" data-wysihtml5-command="insertUnorderedList" title="Lista" tabindex="-1" href="javascript:;" unselectable="on">

                            <span class="glyphicon glyphicon-list"></span>

                          </a>
                          <a class="btn  btn-default" data-wysihtml5-command="insertOrderedList" title="Lista numerada" tabindex="-1" href="javascript:;" unselectable="on">

                            <span class="glyphicon glyphicon-th-list"></span>

                          </a>
                          <a class="btn  btn-default" data-wysihtml5-command="Outdent" title="Remover indentação" tabindex="-1" href="javascript:;" unselectable="on">

                            <span class="glyphicon glyphicon-indent-right"></span>

                          </a>
                          <a class="btn  btn-default" data-wysihtml5-command="Indent" title="Indentar" tabindex="-1" href="javascript:;" unselectable="on">

                            <span class="glyphicon glyphicon-indent-left"></span>

                          </a>
                        </div>
                      </li>
                      <li>
                        <div class="bootstrap-wysihtml5-insert-link-modal modal fade" data-wysihtml5-dialog="createLink">
                          <div class="modal-dialog ">
                            <div class="modal-content">
                              <div class="modal-header">
                                <a class="close" data-dismiss="modal">×</a>
                                <h3>Inserir link</h3>
                              </div>
                              <div class="modal-body">
                                <div class="form-group">
                                  <input value="http://" class="bootstrap-wysihtml5-insert-link-url form-control" data-wysihtml5-dialog-field="href">
                                </div>
                                <div class="checkbox">
                                  <label>
                                    <input type="checkbox" class="bootstrap-wysihtml5-insert-link-target" checked="">Abrir em uma nova aba
                                  </label>
                                </div>
                              </div>
                              <div class="modal-footer">
                                <a class="btn btn-default" data-dismiss="modal" data-wysihtml5-dialog-action="cancel" href="#">Cancelar</a>
                                <a href="#" class="btn btn-primary" data-dismiss="modal" data-wysihtml5-dialog-action="save">Inserir link</a>
                              </div>
                            </div>
                          </div>
                        </div>
                        <a class="btn  btn-default" data-wysihtml5-command="createLink" title="Inserir link" tabindex="-1" href="javascript:;" unselectable="on">

                          <span class="glyphicon glyphicon-share"></span>

                        </a>
                      </li>
                      <li>
                        <div class="bootstrap-wysihtml5-insert-image-modal modal fade" data-wysihtml5-dialog="insertImage">
                          <div class="modal-dialog ">
                            <div class="modal-content">
                              <div class="modal-header">
                                <a class="close" data-dismiss="modal">×</a>
                                <h3>Inserir imagem</h3>
                              </div>
                              <div class="modal-body">
                                <div class="form-group">
                                  <input value="http://" class="bootstrap-wysihtml5-insert-image-url form-control" data-wysihtml5-dialog-field="src">
                                </div>
                              </div>
                              <div class="modal-footer">
                                <a class="btn btn-default" data-dismiss="modal" data-wysihtml5-dialog-action="cancel" href="#">Cancelar</a>
                                <a class="btn btn-primary" data-dismiss="modal" data-wysihtml5-dialog-action="save" href="#">Inserir imagem</a>
                              </div>
                            </div>
                          </div>
                        </div>
                        <a class="btn"
                        <span class=" glyphicon="" glyphicon-picture"="">
                      </a>
                      </li>
                    </ul><textarea class="text-style" name="description" rows="10" cols="80" style="width: 100%; display: none;"></textarea><input type="hidden" name="_wysihtml5_mode" value="1"><iframe class="wysihtml5-sandbox" security="restricted" allowtransparency="true" frameborder="0" width="0" height="0" marginwidth="0" marginheight="0" style="display: inline-block; background-color: rgb(255, 255, 255); border-collapse: separate; border-color: rgb(118, 118, 118); border-style: solid; border-width: 1px; clear: none; float: none; margin: 0px; outline: rgb(51, 51, 51) none 0px; outline-offset: 0px; padding: 2px; position: static; inset: auto; z-index: auto; vertical-align: baseline; text-align: start; box-shadow: none; border-radius: 0px; width: 100%; height: 206px;"></iframe>
                  </div>
                </div>
              </div>
            </div>
          </div>I
        </section>
      </div>
  </form>
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
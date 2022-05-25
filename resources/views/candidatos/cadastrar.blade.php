@extends('layout.app')

@section('title', 'Cadastro de Candidato')


@section('content')

<div class="container">
    <div class="row">
        <div class="col-lg-12">
            <h2>Cadastro de Candidato </h2>
            <h3>Etapa <span id="passo"></span></h3>
            <form action="{{ route('cadastrar.candidato') }}" method="post">

                <div id="step_1" class="step">
                        <div class="form-group">
                            <label for="nome">Nome:</label>
                            <input type="text" name="nome" id="nome" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="email">Email:</label>
                            <input type="email" name="email" id="email" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="telefone">Telefone:</label>
                            <input type="telefone" name="telefone" id="telefone" class="form-control">
                        </div>
                </div>
                <div id="step_2" class="step">
                    <div class="mb-3">
                        <label for="exampleFormControlTextarea1" class="form-label">Informe suas experiências profissionais</label>
                        <textarea class="form-control" name="expepro" id="expepro" rows="3"></textarea>
                      </div>
                      <div class="mb-3">
                        <label for="exampleFormControlTextarea1" class="form-label">Informe suas informações acadêmicas</label>
                        <textarea class="form-control" name="expeaca" id="expeaca" rows="3"></textarea>
                      </div>
                </div>
                <div id="step_3" class="step">
                        <div class="form-group">
                            <label for="usuario">Usuário:</label>
                            <input type="text" name="usuario" id="usuario" class="form-control">
                        </div>
                        {{--  <div class="form-group">
                            <label for="senha">Senha:</label>
                            <input type="text" name="senha" id="senha" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="confirmasenha">Confirme a Senha:</label>
                            <input type="text" name="confirmasenha" id="confirmasenha" class="form-control">
                        </div>  --}}
                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>


                        <div class="form-group">
                            <input type="submit" name="submit" value="enviar">Enviar</button>
                        </div>
                </div>
                @csrf
            </form>
        </div>
    </div>
    <div class="row">
            <div class="col-lg-6">
                    <button class="btn btn-block btn-secondary" id="prev">Anterior</button>
            </div>
            <div class="col-lg-6">
                    <button class="btn btn-block btn-secondary" id="next" onclick="return valida_form(this)">Próximo</button>
            </div>
    </div>
</div>



                    @endsection

                    @section('scripts')



                    <script>
                        $(document).ready(function(){


                           $('.step').hide();
                           $('.step').first().show();


                           var passoexibido = function(){
                               var index = parseInt($(".step:visible").index());
                               if(index == 0){

                                   $("#prev").prop('disabled',true);
                               }else if(index == (parseInt($(".step").length)-1)){

                                   $("#next").prop('disabled',true);
                               }else{

                                   $("#next").prop('disabled',false);
                                   $("#prev").prop('disabled',false);
                               }
                               $("#passo").html(index + 1);

                           };


                           passoexibido();


                           $("#next").click(function(){

                               $(".step:visible").hide().next().show();
                               passoexibido();
                           });


                           $("#prev").click(function(){
                               $(".step:visible").hide().prev().show();
                               passoexibido();
                           });

                        });
                       </script>


                       <script type="text/javascript" language="javascript">

                        function valida_form(){
                            var mail = document.getElementById("email").value;
                            var tel = document.getElementById("telefone").value;

                            if(mail == null || mail == ''){
                              document.getElementById("telefone").required = true;
                              document.getElementById("telefone").focus();
                              return false;
                            }

                            if(tel == null || tel == ''){
                              document.getElementById("email").required = true;
                              document.getElementById("email").focus();
                              return false;
                            }

                            if(tel !== '' || mail == ''){
                              return True;
                            }
                            if(tel == '' || mail !== ''){
                              return True;
                            }
                          }

                        </script>


                    @endsection




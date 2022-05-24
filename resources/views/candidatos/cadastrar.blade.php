@extends('layout.app')

@section('title', 'Cadastro de Candidato')


@section('content')

<div class="container">
    <div class="row">
        <div class="col-lg-12">
            <h2>Cadastro de Candidato </h2>
            <h3>Etapa <span id="passo"></span></h3>
            <form action="processa.php" method="post">
                <div id="step_1" class="step">
                        <div class="form-group">
                            <label for="nome">Nome:</label>
                            <input type="text" name="nome" id="nome" class="form-control">
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
                        <div class="form-group">
                            <label for="bairro">Senha:</label>
                            <input type="text" name="senha" id="senha" class="form-control">
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-sm btn-primary">Enviar</button>
                        </div>
                </div>
            </form>
        </div>
    </div>
    <div class="row">
            <div class="col-lg-6">
                    <button class="btn btn-block btn-secondary" id="prev">Anterior</button>
            </div>
            <div class="col-lg-6">
                    <button class="btn btn-block btn-secondary" id="next">Próximo</button>
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




                    @endsection




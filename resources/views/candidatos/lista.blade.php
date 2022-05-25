@extends('layout.app')
@section('title', 'Lista de Candidatos')
@section('content')


<div class="card-border">
    <div class="card-body">

        <h5 class="card-title">Lista Candidatos</h5>

            <div class="row">
           <td>
              {!! csrf_field() !!}



            </td>
            </div>



        </div>
        </form>

        {{--  ##############  --}}



        @if(count($can) > 0)


        <table class="table table-ordered table-hover">


            <thead>

                <tr>


                    <th>Nome</th>
                    <th>E-mail</th>
                    <th>Telefone</th>
                    <th>Experiências Profissionais</th>
                    <th>Experiências Acadêmicas</th>
                    <th>Usuário</th>
                    <th>Ações</th>


                </tr>

            </thead>

            <tbody>

                @foreach($can as $ca)
                <tr>
                    <td>{{$ca->name}}</td>
                    <td>{{$ca->email}}</td>
                    <td>{{$ca->telephone}}</td>
                    <td>{{$ca->expe_pro}}</td>
                    <td>{{$ca->expe_aca}}</td>
                    <td>{{$ca->user}}</td>


                    <td>

                        <a href="/editar/{{$ca->id}}" class="btn btn-sm btn-primary">Editar</a>
                        <button class="btn-modal btn btn-sm btn-danger"  data-id="{{$ca->id}}">Excluir</button>

                    </td>

                </tr>
                @endforeach
            </tbody>
        </table>

        @endif
    </div>

    <div class="card-footer">

        <a href="/cadastro" class="btn btn-sm btn-primary" role="button">Nova Candidato</a>
        <a href="/" class="btn btn-sm btn-danger role=" button">Voltar</a>
    </div>

    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Excluir</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>

          <!-- Modal Excluir -->
          <form id="deleteForm" method="POST"  action="">

            @csrf
            @method('DELETE')

            <input type="hidden" name="pessoa_id" id="pessoa_id" value"">

          <div class="modal-body">
          Deseja realmente excluir ?
          </div>

          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
            <button type="submit" class="btn btn-danger">Deletar</button>
          </div>
        </form>

        </div>
      </div>
    </div>

    @endsection
    <!-- Encerra a seção -->


    @section('scripts')

    <script type="text/javascript">

        $(document).ready(function() {

            $(document).on('click', '.btn-modal', function(e) {
                $('#exampleModal').modal('show');

                var id = $(this).data('id');

                var url = '{{ url('/excluir') }}/' + id;

                $('#deleteForm').attr('action', url);

                $('#pessoa_id').val(id);

            })
        });


    </script>

    @endsection

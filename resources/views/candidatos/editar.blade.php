@extends('layout.app')


@section('title', ' Editar Pessoa')

@section('content')

<div class="card border">
    <div class="card-body">
        <form action="/editado/{{$ca->id}}" method="POST">
            @csrf
            <div class="form-group">
                <label for="nome">Nome</label>
                <input type="text" class="form-control
                    name="nome" value="{{$ca->name}}" id="nome">

            </div>

            <div class="form-group">
                <label for="email">Email</label>
                <input type="text" class="form-control
                    name="cpfPessoa" value="{{$ca->email}}" id="email">
            </div>

            <div class="form-group">
                <label for="telefone">Telefone</label>
                <input type="text" class="form-control
                    name="telefonePessoa" value="{{$ca->telephone}}" id="telefonePessoa">
            </div>


            <div class="form-group">
                <label for="expepro">Experiências Profissionais</label>
                <input type="text" class="form-control
                    name="expepro" value="{{$ca->expe_pro}}" id="expepro">


            </div>


            <div class="form-group">
                <label for="expepro">Experiências Profissionais</label>
                <input type="text" class="form-control
                    name="expeaca" value="{{$ca->expe_pro}}" id="expeaca">


            </div>


            <div class="form-group">
                <label for="expeaca">Experiências Acadêmicas</label>
                <input type="text" class="form-control
                    name="user" value="{{$ca->user}}" id="user">


            </div>

            <button type="submit" class="btn btn-primary btn-sm">Salvar</button>

            <button type="reset" class="btn btn-danger btn-sm"> Limpar</button>
    </div>
    <div class="form-group">

    </div>
    @endsection


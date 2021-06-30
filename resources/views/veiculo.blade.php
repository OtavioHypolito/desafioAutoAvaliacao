@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Cadastro de Veiculos</div>

                <form class="" action="/veiculo" method="POST">
                    <div class="row">
                        <div class="form-group col-8">

                        </div>
                        <div class="form-group col-8">
                            <div class="form-group col-10">
                                <label for="tipo">Tipo de Veiculo: </label>
                                <input type="text" id="tipo" name="tipo" class="form-control" value="{{ $veiculo->tipo }}" placeholder="Ex.: (Carro, Caminhão ou Moto)" />
                            </div>
                        </div>


                        <div class="form-group col-8">
                            <div class="form-group col-10">
                                <label for="marca">Marca do Veiculo: </label>
                                <input type="text" id="marca" name="marca" class="form-control" value="{{ $veiculo->marca }}" />
                            </div>
                        </div>

                        <div class="form-group col-8">
                            <div class="form-group col-10">
                                <label for="modelo">Modelo do Veiculo: </label>
                                <input type="text" id="modelo" name="modelo" class="form-control" value="{{ $veiculo->modelo }}" />
                            </div>
                        </div>

                        <div class="form-group col-8">
                            <div class="form-group col-10">
                                <label for="versao">Versão do Veiculo: </label>
                                <input type="text" id="versao" name="versao" class="form-control" value="{{ $veiculo->versao }}" />
                            </div>
                        </div>

                        <div class="form-group col-8">
                            <div class="form-group col-10">
                                <label for="dica">Dica do Veiculo: </label>
                                <textarea class="form-control" id="dica" name="dica" rows="3" value="{{ $veiculo->dica }}"></textarea>
                            </div>
                        </div>

                        <div class="form-group col-4">
                            @csrf
                            </br> </br> </br>
                            <input type="hidden" id="id" name="id" value="{{ $veiculo->id }}" />

                            <a href="/home" class="btn btn-outline-warning">Voltar</a>
                            <a href="/veiculo" class="btn btn-outline-primary">Limpar</a>
                            <button type="submit" class="btn btn-outline-success">Salvar</button>

                        </div>

                </form>

            </div>
        </div>
    </div>
</div>
@endsection
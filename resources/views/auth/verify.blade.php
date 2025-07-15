@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Falta pouco agora, valide seu e-mail!</div>

                <div class="card-body">
                    @if (session('resent'))
                        <div class="alert alert-success" role="alert">
                            Reenviamos um e-mail pra você com o link de validação!
                        </div>
                    @endif

                    Antes de utilizar os recursos da aplicação, por favor ative seu cadastro atravez do link de validação que mandamos para o seu e-mail.
                    <br>
                    Não recebeu o e-mail? click no link para enviar novamente,
                    <form class="d-inline" method="POST" action="{{ route('verification.resend') }}">
                        @csrf
                        <button type="submit" class="btn btn-link p-0 m-0 align-baseline">Reenviar validação para o e-mail</button>.
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

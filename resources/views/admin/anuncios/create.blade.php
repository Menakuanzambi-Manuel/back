@extends('admin.home')
@section('conteudo')
<main class="ttr-wrapper">
    <div class="container-fluid">
        <div class="db-breadcrumb">
            <h4 class="breadcrumb-title">Dashboard</h4>
            <ul class="db-breadcrumb-list">
                <li><a href="#"><i class="fa fa-home"></i>Home</a></li>
                <li>Dashboard</li>
            </ul>
        </div>	
        <div class="row">
            <!-- Your Profile Views Chart -->
            <div class="col-lg-12 m-b30">
                <div class="widget-box">
                    <div class="wc-title">
                        <h4>Registar Anuncio </h4>
                    </div>
                    <form method="POST" action="{{route('anuncios.store')}}" class="edit-profile m-b30">
                        {{ csrf_field() }}
                        @include('admin.anuncios.form')
                    </form>
                </div>
            </div>
            <!-- Your Profile Views Chart END-->
        </div>
    </div>
</main>
@endsection



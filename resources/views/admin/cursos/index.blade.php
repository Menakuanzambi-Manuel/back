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
                        <h4>Listar Curso </h4>
                    </div>
                    <div class="widget-inner">
                        <table class="table">
                            <thead>
                              <tr>
                                <th scope="col">Descrição</th>
                                <th scope="col">sigla</th>
                                <th scope="col">...</th>
                              </tr>
                            </thead>
                            <tbody>
                              @forelse($cursos as $curso)
                            <tr>
                              <td><a href="">{{$curso->nome}}</a></td>
                              <td><a href="">{{$curso->sigla}}</a></td>
                              <td class="d-flex">
                                
                                <form action="{{route('cursos.destroy', $curso->id)}}" method="post">
                                {{ csrf_field() }}
                                {{method_field('DELETE')}}
                                <a href="{{route('cursos.edit', $curso->id)}}" type="submit" class="btn">editar</a>
                                  <button type="submit" class="btn">apagar</button>
                                </form>
                                 </td>
                               </tr>
                               @empty
                             <p style="color:red">Nenhum Anuncio cadastro no sistema</p>
                             @endforelse
                                          
                            </tbody>
                          </table>
                          <a href="/" class="btn btn-secondary">Voltar</a>
                          <a href="{{route('cursos.create')}}" class="btn btn-success float-end">Adicionar</a>
                    </div>
                </div>
            </div>
            <!-- Your Profile Views Chart END-->
        </div>
  </div>
</main>
@endsection
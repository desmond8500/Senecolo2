@extends('layouts.app')

@section('content')
    <ol class="breadcrumb">
          <li class="breadcrumb-item">
             <a href="{!! route('ecommercePaniers.index') !!}">Ecommerce Panier</a>
          </li>
          <li class="breadcrumb-item active">Edit</li>
        </ol>
    <div class="container-fluid">
         <div class="animated fadeIn">
             @include('coreui-templates::common.errors')
             <div class="row">
                 <div class="col-lg-12">
                      <div class="card">
                          <div class="card-header">
                              <i class="fa fa-edit fa-lg"></i>
                              <strong>Edit Ecommerce Panier</strong>
                          </div>
                          <div class="card-body">
                              {!! Form::model($ecommercePanier, ['route' => ['ecommercePaniers.update', $ecommercePanier->id], 'method' => 'patch']) !!}

                              @include('ecommerce_paniers.fields')

                              {!! Form::close() !!}
                            </div>
                        </div>
                    </div>
                </div>
         </div>
    </div>
@endsection
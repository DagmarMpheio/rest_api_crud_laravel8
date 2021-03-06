<?php
/**
 * Created by PhpStorm.
 * User: Dagmar Mpheio
 * Date: 12/7/2020
 * Time: 11:34 PM
 */
?>
@extends('base')

@section('main')
    <div class="row">
        <div class="col-sm-8 offset-sm-2">
            <h1 class="display-3">Editar um contacto</h1>

            <div>
                <a style="margin: 10px;" href="{{route('contacts.index')}}" class="btn btn-sm btn-primary">Voltar</a>
            </div>

        </div>
        @if($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach($errors->all() as $error)
                        <li>{{$error}}</li>
                    @endforeach
                </ul>
            </div><br/>
        @endif
        <form method="post" action="{{route('contacts.update',$contact->id)}}">
            @method('PATCH')
            @csrf
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <label for="first_name">Primeiro Nome:</label>
                        <input type="text" name="first_name" id="first_name" class="form-control"
                               value="{{$contact->first_name}}"/>
                    </div>
                </div>

                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <label for="last_name">Último Nome:</label>
                        <input type="text" name="last_name" id="last_name" class="form-control"
                               value="{{$contact->last_name}}"/>
                    </div>
                </div>

                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <label for="email">Email:</label>
                        <input type="email" name="email" id="email" class="form-control" value="{{$contact->email}}"/>
                    </div>
                </div>

                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <label for="city">Cidade:</label>
                        <input type="text" name="city" id="city" class="form-control" value="{{$contact->city}}"/>
                    </div>
                </div>

                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <label for="country">País:</label>
                        <input type="text" name="country" id="country" class="form-control"
                               value="{{$contact->country}}"/>
                    </div>
                </div>

                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <label for="job_title">Cargo no Trabalho:</label>
                        <input type="text" name="job_title" id="job_title" class="form-control"
                               value="{{$contact->job_title}}"/>
                    </div>
                </div>

                <div class="col-xs-12 col-sm-12 col-md-12">
                    <button type="submit" class="btn btn-outline-primary">Actalizar contacto</button>
                </div>
            </div>
        </form>
    </div>
@endsection
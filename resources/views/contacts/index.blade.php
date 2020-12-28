<?php
/**
 * Created by PhpStorm.
 * User: Dagmar Mpheio
 * Date: 12/7/2020
 * Time: 11:14 PM
 */ ?>
 
 @extends('base')


@section('main')
    <div class="row">
        <div class="col-sm-12">
            @if(session()->get('success'))
                <div class="alert alert-success">
                    <p class="font-weight-bolder">{{session()->get('success')}}</p>
                </div>
            @endif
            <h1 class="display-3">Contactos</h1>

            <div>
                <a style="margin: 19px;" href="{{route('contacts.create')}}" class="btn btn-sm btn-primary">Novo
                    Contacto</a>
            </div>

            <table class="table table-striped table-responsive-xl">
                <thead>
                <tr>
                    <td>#</td>
                    <td>Nome</td>
                    <td>Email</td>
                    <td>Cargo no Trabalho</td>
                    <td>Cidade</td>
                    <td>País</td>
                    <td colspan="2">Acções</td>
                </tr>
                </thead>
                <tbody>
                @foreach($contacts as $contact)
                    <tr>
                        <td>{{$contact->id}}</td>
                        <td>{{$contact->first_name}} {{$contact->last_name}}</td>
                        <td>{{$contact->email}}</td>
                        <td>{{$contact->job_title}}</td>
                        <td>{{$contact->city}}</td>
                        <td>{{$contact->country}}</td>
                        <td>
                            <a href="{{route('contacts.edit',$contact->id)}}" class="btn btn-sm btn-primary">Editar</a>
                        </td>
                        <td>
                            <form action="{{route('contacts.destroy',$contact->id)}}">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-sm btn-danger">Excluir</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
            {{$contacts->links()}}
        </div>
    </div>
@endsection

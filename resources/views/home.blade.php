@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Task list</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!

                    <div class="links"><br>
                    <a href="/tasks">Dodaj zadatak</a>
                    </div>

                    <div class="links"><br>
                    <a href="/roles">Odaberi ulogu</a>
                    </div>

                    <?php
                    $tasks = DB::table('tasks')->pluck('naziv_rada');
                    $size = sizeof($tasks);
                    if($tasks != ""){
                        for($i=0; $i<$size; $i++){
                            print($tasks[$i]);
                            print("<br>");
                        }

                    }
                    else{
                        print("Nema zadataka");
                    }

                    ?>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

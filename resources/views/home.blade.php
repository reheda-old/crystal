@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Dashboard</div>

                    <div class="panel-body">
                        You are logged in!

                        <?php
                        echo '<br><br><p>Has role "admin": ';
                        echo Auth::user()->hasRole('admin') ? 'true' : 'false';
                        echo '</p>';

                        $role = Auth::user()->role;
                        echo '<p>Current role: ', $role->display_name, '</p>';

                        $users = App\Models\Role::find($role->id)->users;
                        echo '<p>Users with current role (', count($users), '): ';
                        foreach ($users as $user) {
                            echo $user->fullName();
                        }
                        echo '</p>';
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

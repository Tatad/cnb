@extends('admin.layouts.app')
@section('content')
    <div class="row">
        <div class="col s12">
            <h4 class="pageTitleText mt-2">Team</h4>
        </div>
        <div class="col s12">
            <div class="card">
                <div class="card-content">
                    <div class="row">
                        <div class="col s12">
                            <table id="team_table" class="responsive-table">
                                <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Position</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                            </table>
                        </div>
                    </div>
                    <div class="fixed-action-btn direction-top active">
                        <a class="btn-floating btn-large blue accent-2 gradient-shadow"
                           href="{{ url('admin/team/create') }}">
                            <i class="material-icons">add</i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

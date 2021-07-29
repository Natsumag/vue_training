@extends('layout.header')

<nav class="navbar-dark sticky-top bg-dark flex-md-nowrap p-0 shadow">
    <a class="navbar-brand col-md-3 col-lg-2 mr-0 px-3" href="#">aaa</a>
    <nav class="my-2 my-md-0 mr-md-3">
        <a href="#" class="p-2 text-white text-decoration-none"></a>
        <a href="/login" class="p-2 text-white text-decoration-none">logout</a>
    </nav>
</nav>

<div class="container-fluid">
    <div class="row">
        <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
            <div class="position-sticky pt-3">
                <ul class="nav flex-column">
                    <li class="nav-item" >
                        <a href="/" class="active nav-link"> Dashboard </a>
                    </li>
                    <li class="nav-item">
                        <a aria-current="page" href='{{ route("users.add") }}' class="active router-link-exact-active nav-link"> Users </a>
                    </li>
                    <li class="nav-item">
                        <a href="/roles" class="nav-link"> Roles </a>
                    </li>
                    <li class="nav-item" data-v-9bcc0be2="">
                        <a href="/products" class="nav-link"> Products </a>
                    </li>
                    <li class="nav-item" data-v-9bcc0be2="">
                        <a href="/orders" class="nav-link"> Orders </a>
                    </li>
                </ul>
            </div>
        </nav>
        <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
            <div class="pt-3 pb-2 mb-3 border-bottom">
                <a href='{{ route("users.add") }}' class="btn btn-sm btn-outline-secondary">Add</a>
            </div>
            <div class="table-responsive">
                <table class="table table-striped table-sm">
                    <thead>
                    <tr>
                        <th>#</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Role</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($users as $user)
                        <tr>
                            <td>{{ $user->id }}</td>
                            <td>{{ $user->first_name }} {{ $user->last_name }}</td>
                            <td>{{ $user->email }}</td>
                            <td>{{ config('const.ROLE_TYPE_LIST')[$user->role_id] }}</td>
                            <td>
                                <div class="btn-group mr-2">
                                    <a href='{{ route("users.edit", ["id" => $user->id]) }}' class="btn btn-sm btn-outline-secondary">Edit</a>
                                    <a href="javascript:void(0)" class="btn btn-sm btn-outline-secondary" @click="del(user.id)">Delete</a>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
            {{ $users->links() }}
        </main>
    </div>
</div>

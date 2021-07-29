@extends('layout.header')

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
            <form action="" method="post">
                @csrf
                <div class="mb-3">
                    <label>First Name</label>
                    <input class="form-control" name="first_name">
                </div>
                <div class="mb-3">
                    <label>Last Name</label>
                    <input  class="form-control" name="last_name">
                </div>
                <div class="mb-3">
                    <label>Email</label>
                    <input class="form-control" name="email">
                </div>
                <div class="mb-3">
                    <label>Role</label>
                    <select  class="form-control" name="role_id">
                        @for ($i = 1; $i < 4 ; $i++)
                            <option key="role.id" value="{{ $i }}">{{ config('const.ROLE_TYPE_LIST')[ $i ] }}</option>
                        @endfor
                    </select>
                </div>
                <button class="btn btn-outline-secondary">Save</button>
            </form>


        </main>
    </div>
</div>














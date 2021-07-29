@extends('layout.header')
{{--@section('title', 'edit')--}}

{{--@section('content')--}}
<form action="" method="post">
    @csrf
    <div class="mb-3">
        <label>First Name</label>
        <input value="{{ old('first_name') }}" class="form-control" name="first_name">
    </div>
    <div class="mb-3">
        <label>Last Name</label>
        <input value="{{ old('last_name') }}" class="form-control" name="last_name">
    </div>
    <div class="mb-3">
        <label>Email</label>
        <input value="{{ old('email') }}" class="form-control" name="email">
    </div>
{{--    <div class="mb-3">--}}
{{--        <label>Role</label>--}}
{{--        <select v-model="data.role_id" class="form-control" name="role_id">--}}
{{--            <option v-for="role of roles" :key="role.id" :value="role.id">{{ role.name }}</option>--}}
{{--        </select>--}}
{{--    </div>--}}
    {{ config('const.ROLE_TYPE_LIST')[$user->role_id] }}

    <button class="btn btn-outline-secondary">Save</button>
</form>
{{--@endsection--}}

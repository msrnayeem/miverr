@extends('layouts.master')

@section('title', 'Miverr - Home')


@section('content')
    <h1>Welcome to the Category Page</h1>
    <script>
  window.addEventListener('load', function() {
    var headerSearch = document.getElementById('header-search');
    var headerBottomMenu = document.querySelector('.header-bottom-menu');
    
    headerBottomMenu.classList.add('show');
    headerSearch.classList.add('show');
  });
</script>
@endsection

@push('scripts')
    <script src="{{ asset('') }}"></script>
    

@endpush
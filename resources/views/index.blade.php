<!DOCTYPE html>
<html lang="en">
<head>
    @include('LAYOUT.head')
</head>
<body>
    <main>
        @include('LAYOUT.sidebar')
        <div class="main-content">
            @include('LAYOUT.navbar')
            @include('CONTENT.greeting')
            @include('CONTENT.schedule')
            {{-- @include('CONTENT.timeline') --}}
            @include('CONTENT.contact')
        </div>
    </main>
    @include('LAYOUT.footer')
</body>
</html>

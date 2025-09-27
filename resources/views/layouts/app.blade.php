<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Great Places to Explore')</title>
    
    {{-- External CSS Dependencies --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    
    {{-- Application CSS --}}
    <link rel="stylesheet" href="{{ asset('assets/css/welcome.css') }}">
</head>
<body>
    @yield('content')
    
    {{-- External JS Dependencies --}}
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    
    {{-- Heart Button Functionality --}}
    
    <script>
        document.querySelectorAll('.heart-btn').forEach(button => {
            button.addEventListener('click', function() {
                const icon = this.querySelector('i');
                
                if (this.classList.contains('liked')) {
                    this.classList.remove('liked');
                    icon.classList.remove('fas');
                    icon.classList.add('far');
                } else {
                    this.classList.add('liked');
                    icon.classList.remove('far');
                    icon.classList.add('fas');
                }
            });
        });
    </script>
</body>
</html>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Great Places to Explore</title>
    
    {{-- External CSS Dependencies --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    
    {{-- Application CSS --}}
    <link rel="stylesheet" href="{{ asset('css/welcome.css') }}">
</head>

<body>
    {{-- Hero Section --}}
    <div class="hero-section">
        <h1 class="hero-title">
            Great places to Explore
        </h1>

        <p class="hero-subtitle">
            Book your hotel with us and don't forget to grab an awesome hotel deal to save massive on your stay.
        </p>
    </div>
    
    {{-- Cards Grid Section --}}
    <div class="cards-container">
        <div class="row g-4">
            {{-- Load Places Data --}}
            @php
                $places = json_decode(file_get_contents(resource_path('data/places.json')), true)['places'];
            @endphp

            {{-- Render Place Cards --}}
            @foreach($places as $place)
                <div class="col-lg-3 col-sm-6">
                    <x-card 
                        :title="$place['title']"
                        :image="$place['image']"
                        :category="$place['category']"
                        :category-icon="$place['categoryIcon']"
                        :status="$place['status']"
                        :price="$place['price'] ?? null"
                        :address="$place['address'] ?? null"
                        :phone="$place['phone'] ?? null"
                        :is-recommended="$place['isRecommended']"
                        :is-liked="$place['isLiked']"
                    />
                </div>
            @endforeach
        </div>
    </div>
    
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
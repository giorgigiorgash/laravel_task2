@extends('layouts.app')

@section('content')
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
            {{-- Card 1: Portland New Art Museum --}}
            <div class="col-lg-3 col-sm-6">
                <div class="place-card">
                    <div class="card-image" style="background-image: url('https://images.unsplash.com/photo-1544735716-392fe2489ffa?ixlib=rb-4.0.3&auto=format&fit=crop&w=1000&q=80');">
                        <div style="display: flex; align-items: center;" class="card-image-header">
                            <div class="category-badge">
                                <i class="fas fa-university"></i> 
                                Museum
                            </div>
                            <div class="status-badge status-open">
                                Open
                            </div>
                        </div>
                    </div>
                    <div class="card-content">
                        <div class="card-info">
                            <h3 class="card-title">
                                Portland New Art Museum
                            </h3>
                            <div class="info-item">
                                <i class="fas fa-map-marker-alt"></i>
                                <span>W Century Blvd, Los Angeles</span>
                            </div>
                            <div class="info-item">
                                <i class="fas fa-phone"></i>
                                <span>+(125) 548 996</span>
                            </div>
                        </div>
                        <div class="card-separator"></div>
                        <div class="card-footer">
                            <a href="#" class="view-detail">
                                View detail →
                            </a>
                            <button class="heart-btn">
                                <i class="far fa-heart"></i>
                            </button>
                        </div>
                    </div>
                </div>
            </div>

            {{-- Card 2: JP Shopping Mall --}}
            <div class="col-lg-3 col-sm-6">
                <div class="place-card">
                    <div class="card-image" style="background-image: url('https://images.unsplash.com/photo-1441986300917-64674bd600d8?ixlib=rb-4.0.3&auto=format&fit=crop&w=1000&q=80');">
                        <div style="display: flex; align-items: center;" class="card-image-header">
                            <div class="category-badge">
                                <i class="fas fa-shopping-bag"></i> 
                                Shopping
                            </div>
                            <div class="status-badge status-open">
                                Open
                            </div>
                        </div>
                    </div>
                    <div class="card-content">
                        <div class="card-info">
                            <div class="recommended-badge">
                                Recommended
                            </div>
                            <h3 class="card-title">
                                JP Shopping Mall in California
                            </h3>
                            <div class="price-info">
                                <span class="price-text">Starts at </span>
                                <span class="price-amount">$449</span>
                                <span class="price-text"> for 1 person</span>
                            </div>
                        </div>
                        <div class="card-separator"></div>
                        <div class="card-footer">
                            <a href="#" class="view-detail">
                                View detail →
                            </a>
                            <button class="heart-btn liked">
                                <i class="fas fa-heart"></i>
                            </button>
                        </div>
                    </div>
                </div>
            </div>

            {{-- Card 3: Courtyard by Marriott --}}
            <div class="col-lg-3 col-sm-6">
                <div class="place-card">
                    <div class="card-image" style="background-image: url('https://images.unsplash.com/photo-1566073771259-6a8506099945?ixlib=rb-4.0.3&auto=format&fit=crop&w=1000&q=80');">
                        <div style="display: flex; align-items: center;" class="card-image-header">
                            <div class="category-badge">
                                <i class="fas fa-bed"></i> 
                                Hotel
                            </div>
                            <div class="status-badge status-open">
                                Open
                            </div>
                        </div>
                    </div>
                    <div class="card-content">
                        <div class="card-info">
                            <h3 class="card-title">
                                Courtyard by Marriott New York
                            </h3>
                            <div class="info-item">
                                <i class="fas fa-map-marker-alt"></i>
                                <span>W Century Blvd, Los Angeles</span>
                            </div>
                            <div class="info-item">
                                <i class="fas fa-phone"></i>
                                <span>+(125) 548 996</span>
                            </div>
                        </div>
                        <div class="card-separator"></div>
                        <div class="card-footer">
                            <a href="#" class="view-detail">
                                View detail →
                            </a>
                            <button class="heart-btn">
                                <i class="far fa-heart"></i>
                            </button>
                        </div>
                    </div>
                </div>
            </div>

            {{-- Card 4: Emperor Resort & Spa --}}
            <div class="col-lg-3 col-sm-6">
                <div class="place-card">
                    <div class="card-image" style="background-image: url('https://images.unsplash.com/photo-1571902943202-507ec2618e8f?ixlib=rb-4.0.3&auto=format&fit=crop&w=1000&q=80');">
                        <div style="display: flex; align-items: center;" class="card-image-header">
                            <div class="category-badge">
                                <i class="fas fa-spa"></i> 
                                Spa
                            </div>
                            <div class="status-badge status-closed">
                                Closed
                            </div>
                        </div>
                    </div>

                    <div class="card-content">
                        <div class="card-info">
                            <div class="recommended-badge">
                                Recommended
                            </div>
                            <h3 class="card-title">
                                Emperor Resort & Spa
                            </h3>
                            <div class="price-info">
                                <span class="price-text">Starts at </span>
                                <span class="price-amount">$350</span>
                                <span class="price-text"> for 1 person</span>
                            </div>
                        </div>
                        <div class="card-separator"></div>
                        <div class="card-footer">
                            <a href="#" class="view-detail">
                                View detail →
                            </a>
                            <button class="heart-btn">
                                <i class="far fa-heart"></i>
                            </button>
                        </div>
                    </div>
                </div>
            </div>

            {{-- Card 5: Phoenix Power Gym --}}
            <div class="col-lg-3 col-sm-6">
                <div class="place-card">
                    <div class="card-image" style="background-image: url('https://images.unsplash.com/photo-1534438327276-14e5300c3a48?ixlib=rb-4.0.3&auto=format&fit=crop&w=1000&q=80');">
                        <div style="display: flex; align-items: center;" class="card-image-header">
                            <div class="category-badge">
                                <i class="fas fa-dumbbell"></i> 
                                Gym
                            </div>
                            <div class="status-badge status-open">
                                Open
                            </div>
                        </div>
                    </div>
                    <div class="card-content">
                        <div class="card-info">
                            <h3 class="card-title">
                                Phoenix Power Gym
                            </h3>
                            <div class="info-item">
                                <i class="fas fa-map-marker-alt"></i>
                                <span>W Century Blvd, Los Angeles</span>
                            </div>
                            <div class="info-item">
                                <i class="fas fa-phone"></i>
                                <span>+(125) 548 996</span>
                            </div>
                        </div>
                        <div class="card-separator"></div>
                        <div class="card-footer">
                            <a href="#" class="view-detail">
                                View detail →
                            </a>
                            <button class="heart-btn liked">
                                <i class="fas fa-heart"></i>
                            </button>
                        </div>
                    </div>
                </div>
            </div>

            {{-- Card 6: Park Plaza Lodge Hotel --}}
            <div class="col-lg-3 col-sm-6">
                <div class="place-card">
                    <div class="card-image" style="background-image: url('https://images.unsplash.com/photo-1582719478250-c89cae4dc85b?ixlib=rb-4.0.3&auto=format&fit=crop&w=1000&q=80');">
                        <div style="display: flex; align-items: center;" class="card-image-header">
                            <div class="category-badge">
                                <i class="fas fa-bed"></i> 
                                Hotel
                            </div>
                            <div class="status-badge status-open">
                                Open
                            </div>
                        </div>
                    </div>
                    <div class="card-content">
                        <div class="card-info">
                            <h3 class="card-title">
                                Park Plaza Lodge Hotel
                            </h3>
                            <div class="info-item">
                                <i class="fas fa-map-marker-alt"></i>
                                <span>W Century Blvd, Los Angeles</span>
                            </div>
                            <div class="info-item">
                                <i class="fas fa-phone"></i>
                                <span>+(125) 548 996</span>
                            </div>
                        </div>
                        <div class="card-separator"></div>
                        <div class="card-footer">
                            <a href="#" class="view-detail">
                                View detail →
                            </a>
                            <button class="heart-btn">
                                <i class="far fa-heart"></i>
                            </button>
                        </div>
                    </div>
                </div>
            </div>

            {{-- Card 7: Car Service & Repair --}}
            <div class="col-lg-3 col-sm-6">
                <div class="place-card">
                    <div class="card-image" style="background-image: url('https://images.unsplash.com/photo-1486262715619-67b85e0b08d3?ixlib=rb-4.0.3&auto=format&fit=crop&w=1000&q=80');">
                        <div style="display: flex; align-items: center;" class="card-image-header">
                            <div class="category-badge">
                                <i class="fas fa-car"></i> 
                                Automotive
                            </div>
                            <div class="status-badge status-open">
                                Open
                            </div>
                        </div>
                    </div>
                    <div class="card-content">
                        <div class="card-info">
                            <div class="recommended-badge">
                                Recommended
                            </div>
                            <h3 class="card-title">
                                Car Service & Repair
                            </h3>
                            <div class="price-info">
                                <span class="price-text">Starts at </span>
                                <span class="price-amount">$599</span>
                                <span class="price-text"> for 1 person</span>
                            </div>
                        </div>
                        <div class="card-separator"></div>
                        <div class="card-footer">
                            <a href="#" class="view-detail">
                                View detail →
                            </a>
                            <button class="heart-btn">
                                <i class="far fa-heart"></i>
                            </button>
                        </div>
                    </div>
                </div>
            </div>

            {{-- Card 8: El Torero Restaurant & Bar --}}
            <div class="col-lg-3 col-sm-6">
                <div class="place-card">
                    <div class="card-image" style="background-image: url('https://images.unsplash.com/photo-1517248135467-4c7edcad34c4?ixlib=rb-4.0.3&auto=format&fit=crop&w=1000&q=80');">
                        <div style="display: flex; align-items: center;" class="card-image-header">
                            <div class="category-badge">
                                <i class="fas fa-utensils"></i> 
                                Restaurant
                            </div>
                            <div class="status-badge status-closed">
                                Closed
                            </div>
                        </div>
                    </div>
                    <div class="card-content">
                        <div class="card-info">
                            <h3 class="card-title">
                                El Torero Restaurant & Bar
                            </h3>
                            <div class="info-item">
                                <i class="fas fa-map-marker-alt"></i>
                                <span>W Century Blvd, Los Angeles</span>
                            </div>
                            <div class="info-item">
                                <i class="fas fa-phone"></i>
                                <span>+(125) 548 996</span>
                            </div>
                        </div>
                        <div class="card-separator"></div>
                        <div class="card-footer">
                            <a href="#" class="view-detail">
                                View detail →
                            </a>
                            <button class="heart-btn">
                                <i class="far fa-heart"></i>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
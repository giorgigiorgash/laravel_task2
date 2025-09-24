{{-- Define Component Props --}}
@props([
    'title',
    'image',
    'category',
    'categoryIcon',
    'status',
    'price' => null,
    'address' => null,
    'phone' => null,
    'isRecommended' => false,
    'isLiked' => false
])

{{-- Card Component --}}
<div class="place-card">
    {{-- Card Image Section --}}
    <div class="card-image" style="background-image: url('{{ $image }}');">
        <div style="display: flex; align-items: center;" class="card-image-header">
            {{-- Category Badge --}}
            <div class="category-badge">
                <i class="fas fa-{{ $categoryIcon }}"></i> 
                {{ $category }}
            </div>

            {{-- Status Badge --}}
            <div class="status-badge status-{{ strtolower($status) }}">
                {{ $status }}
            </div>
        </div>
    </div>

    {{-- Card Content Section --}}
    <div class="card-content">
        <div class="card-info">
            {{-- Recommended Badge --}}
            @if($isRecommended)
                <div class="recommended-badge">
                    Recommended
                </div>
            @endif

            {{-- Title --}}
            <h3 class="card-title">
                {{ $title }}
            </h3>
            
            {{-- Address Info --}}
            @if($address)
                <div class="info-item">
                    <i class="fas fa-map-marker-alt"></i>
                    <span>{{ $address }}</span>
                </div>
            @endif
            
            {{-- Phone Info --}}
            @if($phone)
                <div class="info-item">
                    <i class="fas fa-phone"></i>
                    <span>{{ $phone }}</span>
                </div>
            @endif
            
            {{-- Price Info --}}
            @if($price)
                <div class="price-info">
                    <span class="price-text">Starts at </span>
                    <span class="price-amount">${{ $price }}</span>
                    <span class="price-text"> for 1 person</span>
                </div>
            @endif

        </div>

        {{-- Card Footer Section --}}
        <div class="card-separator"></div>
        <div class="card-footer">
            <a href="#" class="view-detail">
                View detail →
            </a>
            <button class="heart-btn {{ $isLiked ? 'liked' : '' }}">
                <i class="fa{{ $isLiked ? 's' : 'r' }} fa-heart"></i>
            </button>
        </div>
    </div>
</div>
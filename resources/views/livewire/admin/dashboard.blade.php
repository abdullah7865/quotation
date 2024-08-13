<div>
    <div class="row mb-4 d-flex justify-content-around text-center">
        <!-- Quotes Card -->
        <div class="col-12 col-md-4 col-lg-3">
            <div class="app-card app-card-stat shadow-sm h-100">
                <div class="app-card-body p-4">
                    <i class="fa-solid fa-list fa-3x text-primary mb-3"></i>
                    <h4 class="stats-type mb-2 text-uppercase text-muted">Quotes</h4>
                    <div class="stats-figure display-4 font-weight-bold">{{$totalQuotes}}</div>
                </div>
            </div>
        </div>

        <!-- Background Images Card -->
        <div class="col-12 col-md-4 col-lg-3">
            <div class="app-card app-card-stat shadow-sm h-100">
                <div class="app-card-body p-4">
                    <i class="fas fa-image fa-3x text-success mb-3"></i>
                    <h4 class="stats-type mb-2 text-uppercase text-muted">Background Images</h4>
                    <div class="stats-figure display-4 font-weight-bold">{{$totalBackgroundImages}}</div>
                </div>
            </div>
        </div>

        <!-- Cards Card -->
        <div class="col-12 col-md-4 col-lg-3">
            <div class="app-card app-card-stat shadow-sm h-100">
                <div class="app-card-body p-4">
                    <i class="fa-brands fa-cc-diners-club fa-3x text-warning mb-3"></i>
                    <h4 class="stats-type mb-2 text-uppercase text-muted">Cards</h4>
                    <div class="stats-figure display-4 font-weight-bold">{{$totalCards}}</div>
                </div>
            </div>
        </div>
    </div>

</div>

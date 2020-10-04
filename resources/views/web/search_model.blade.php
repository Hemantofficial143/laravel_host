<!--? Search model Begin -->
<div class="search-model-box">
    <div class="h-100 d-flex align-items-center justify-content-center">
        <div class="search-close-btn">+</div>
        <form action="/search" method="POST"  class="search-model-form">
            @csrf
            <input type="text" id="search-input" name="keyword" placeholder="Searching key.....">
            <button class="btn">Search</button>
        </form>
    </div>
</div>
<!-- Search model end -->
@extends('Layout.master')

@section('content')
    <div class="product-section mt-150 mb-150">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2 text-center">
                    <div class="section-title">
                        <h3><span class="orange-text">اقسام</span> المنتجات</h3>
                        <p>مجموعة ضخمة من المنتجات تستطيعون تصفحها فى اى وقت ومن اي مكان .</p>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-12">
                    <div class="product-filters">
                        <ul>
                            <li class="active" data-filter="*">All</li>
                            <li data-filter=".strawberry">Strawberry</li>
                            <li data-filter=".berry">Berry</li>
                            <li data-filter=".lemon">Lemon</li>

                        </ul>
                    </div>
                </div>
            </div>

            <div class="row product-lists" style="position: relative; height: 1147.38px;">
                @foreach ($categories as $item)
                    <div class="col-lg-4 col-md-6 text-center strawberry" style="position: absolute; left: 0px; top: 0px;">
                        <div class="single-product-item">
                            <div class="product-image">
                                <a href="single-product.html"><img
                                        style="min-height: 300px !important;max-height:300px !important;"
                                        src="assets/img/cat/{{ $item->image_path }}" alt=""></a>
                            </div>
                            <h3> {{ $item->cat_name }}</h3>
                            <p> {{ $item->cat_desc }}</p>
                        </div>
                    </div>
                @endforeach
            </div>

            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="pagination-wrap">
                        <ul>
                            <li><a href="#">Prev</a></li>
                            <li><a href="#">1</a></li>
                            <li><a class="active" href="#">2</a></li>
                            <li><a href="#">3</a></li>
                            <li><a href="#">Next</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

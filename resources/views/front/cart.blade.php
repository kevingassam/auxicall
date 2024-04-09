@extends('front.fixe')
@section('titre', 'Cart')
@section('body')

    <header class="header-page-bg overlay-shape">
        <div class="header-bottom-shape"></div>
        <div class="container">
            <div class="header-page-content">
                <small class="line-shape-bg color-white">
                    {{ config('app.name') }}
                </small>
                <h1 class="color-white">Cart</h1>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item">
                            <a href="{{ route('home') }}">Home</a>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page">Cart</li>
                    </ol>
                </nav>
            </div>
        </div>
    </header>

    <section class="cart-section pt-100 pb-70">
        <div class="container">
            <div class="cart-table">
                <table>
                    <thead>
                        <tr>
                            <th>Product</th>
                            <th>Id</th>
                            <th>Unit Price</th>
                            <th>Quantity</th>
                            <th>Total</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>
                                <div class="product-table-info">
                                    <div class="product-table-thumb">
                                        <img src="/assets-front/images/product-2.png" alt="product" />
                                    </div>
                                    <span>Magnite Camera</span>
                                </div>
                            </td>
                            <td class="weight-500">CY-001-002</td>
                            <td>$144.79</td>
                            <td>
                                <div class="cart-quantity">
                                    <button class="qu-btn dec">-</button>
                                    <input type="text" class="qu-input" value="1" />
                                    <button class="qu-btn inc">+</button>
                                </div>
                            </td>
                            <td>$144.79</td>
                            <td class="cancel">
                                <a href="#"><i class="flaticon-cross-sign"></i></a>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div class="product-table-info">
                                    <div class="product-table-thumb">
                                        <img src="/assets-front/images/product-3.png" alt="product" />
                                    </div>
                                    <span>Spy Camera</span>
                                </div>
                            </td>
                            <td class="weight-500">CY-001-003</td>
                            <td>$130.89</td>
                            <td>
                                <div class="cart-quantity">
                                    <button class="qu-btn dec">-</button>
                                    <input type="text" class="qu-input" value="2" />
                                    <button class="qu-btn inc">+</button>
                                </div>
                            </td>
                            <td>$261.78</td>
                            <td class="cancel">
                                <a href="#"><i class="flaticon-cross-sign"></i></a>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div class="product-table-info">
                                    <div class="product-table-thumb">
                                        <img src="/assets-front/images/product-4.png" alt="product" />
                                    </div>
                                    <span>Security Camera</span>
                                </div>
                            </td>
                            <td class="weight-500">CY-001-004</td>
                            <td>$108.59</td>
                            <td>
                                <div class="cart-quantity">
                                    <button class="qu-btn dec">-</button>
                                    <input type="text" class="qu-input" value="2" />
                                    <button class="qu-btn inc">+</button>
                                </div>
                            </td>
                            <td>$217.18</td>
                            <td class="cancel">
                                <a href="#"><i class="flaticon-cross-sign"></i></a>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div class="product-table-info">
                                    <div class="product-table-thumb">
                                        <img src="/assets-front/images/product-5.png" alt="product" />
                                    </div>
                                    <span>Smart Camera</span>
                                </div>
                            </td>
                            <td class="weight-500">CY-001-005</td>
                            <td>$105.59</td>
                            <td>
                                <div class="cart-quantity">
                                    <button class="qu-btn dec">-</button>
                                    <input type="text" class="qu-input" value="3" />
                                    <button class="qu-btn inc">+</button>
                                </div>
                            </td>
                            <td>$316.77</td>
                            <td class="cancel">
                                <a href="#"><i class="flaticon-cross-sign"></i></a>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div class="product-table-info">
                                    <div class="product-table-thumb">
                                        <img src="/assets-front/images/product-6.png" alt="product" />
                                    </div>
                                    <span>CCTV Hidden</span>
                                </div>
                            </td>
                            <td class="weight-500">CY-001-006</td>
                            <td>$115.14</td>
                            <td>
                                <div class="cart-quantity">
                                    <button class="qu-btn dec">-</button>
                                    <input type="text" class="qu-input" value="1" />
                                    <button class="qu-btn inc">+</button>
                                </div>
                            </td>
                            <td>$115.14</td>
                            <td class="cancel">
                                <a href="#"><i class="flaticon-cross-sign"></i></a>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="d-flex justify-content-end">
                <a href="{{ route('checkout') }}" class="btn">
                    Make Payment
                </a>
            </div>
        </div>
    </section>


@endsection

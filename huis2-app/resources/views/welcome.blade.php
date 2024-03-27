@extends('layouts.base')


@section('content')
<main>
<div class="container">
    <div class="row">
        <div class="col-12">
            <h1>Home Page</h1>
        </div>
    </div>

    <div class="product__filter">
        <ul class="product__filter__list">
            <li>
                <select name="stad" id="">
                    <option value="">-- gemeente -- </option>
                    <option value="1">Zele</option>
                    <option value="2">Lokeren</option>
                    <option value="3">Dendermonde</option>
                    <option value="4">Berlare</option>
                </select>
            </li>
            <li>
                <select name="type" id="">
                    <option value=""> -- type -- </option>
                    <option value="1">Huis</option>
                    <option value="2">Appartement</option>
                    <option value="3">Grond</option>
                </select>
            </li>
            <li>
                <div class="product__flex--input">
                    <input type="text" placeholder="min-kamers" name="minrooms">
                    <input type="text" placeholder="max-prijs" name="maxprice">
                    
                </div>
            </li>
            <li>
                <button class="product__mini__list__btn " type="submit">Wis zoeklijsten</button>
            </li>
        </ul>
    </div>

    <ul class="products">
        <li class="product">
            <div class="product__foto">
                <img src="pexels-luis-yanez-206172.jpg" alt="Woning 1">
                <div class="product__button">
                    <button>
                        <i class="fas fa-heart" aria-hidden="true"></i>
                    </button>
                </div>
            </div>
            <div class="product__price">
                <span>
                    Zele, Rinkhout 159
                </span>
                <span>€ 450.000</span>
            </div>
            <div class="product__info">
                <h3>
                    WONING TE KOOP
                </h3>
                <p>Ruime instapklare woning 3 slaapkamers en tuin op 599m²!</p>
            </div>

            <ul class="product__mini__list">
                <li>
                    <i class="fas fa-bed" aria-hidden="true"></i>
                    <span>3</span>
                </li>
                <li>
                    <i class="fas fa-bath" aria-hidden="true"></i>
                    <span>1</span>
                </li>
            </ul>
        </li>
        <li class="product">
            <div class="product__foto">
                <img src="pexels-luis-yanez-206172.jpg" alt="Woning 1">
                <div class="product__button">
                    <button>
                        <i class="fas fa-heart" aria-hidden="true"></i>
                    </button>
                </div>
            </div>
            <div class="product__price">
                <span>
                    Zele, Rinkhout 159
                </span>
                <span>€ 450.000</span>
            </div>
            <div class="product__info">
                <h3>
                    WONING TE KOOP
                </h3>
                <p>Ruime instapklare woning 3 slaapkamers en tuin op 599m²!</p>
            </div>

            <ul class="product__mini__list">
                <li>
                    <i class="fas fa-bed" aria-hidden="true"></i>
                    <span>3</span>
                </li>
                <li>
                    <i class="fas fa-bath" aria-hidden="true"></i>
                    <span>1</span>
                </li>
            </ul>
        </li>
        <li class="product">
            <div class="product__foto">
                <img src="pexels-luis-yanez-206172.jpg" alt="Woning 1">
                <div class="product__button">
                    <button>
                        <i class="fas fa-heart" aria-hidden="true"></i>
                    </button>
                </div>
            </div>
            <div class="product__price">
                <span>
                    Zele, Rinkhout 159
                </span>
                <span>€ 450.000</span>
            </div>
            <div class="product__info">
                <h3>
                    WONING TE KOOP
                </h3>
                <p>Ruime instapklare woning 3 slaapkamers en tuin op 599m²!</p>
            </div>

            <ul class="product__mini__list">
                <li>
                    <i class="fas fa-bed" aria-hidden="true"></i>
                    <span>3</span>
                </li>
                <li>
                    <i class="fas fa-bath" aria-hidden="true"></i>
                    <span>1</span>
                </li>
            </ul>
        </li>
</div>
</main>

@endsection
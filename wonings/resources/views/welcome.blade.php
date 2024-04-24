@extends('layouts.base')

@section('content')

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
            <form method="get" action="/woning">
            </form>
            <select name="filter" id="">
                <option value=""> -- type -- </option>
                <option value="Huis">Huis</option>
                <option value="Appartement">Appartement</option>
                <option value="Grond">Grond</option>
            </select>
        </li>
        <li>
            <div class="product__flex--input">
                <form method="get" action="/">
                </form>
                <input type="text" placeholder="min-prijs" name="minprice"">
                    <input type=" text" placeholder="max-prijs" name="maxprice"">
                </div>
            </li>
            <li>
                <button class=" product__mini__list__btn " type=" submit">Wis zoeklijsten</button>
        </li>
    </ul>
</div>

<ul class="products">
    <?php foreach ($woningHuis as $product) : ?>
        <li class="product">
            <a href="/woning/{{$product->id }}">
                <div class="product__foto">
                    <img src="{{ $product->image }}">
                    <div class="product__button">
                        <button>
                            <i class="fas fa-heart" aria-hidden="true"></i>
                        </button>
                    </div>
                </div>
                <div class="product__price">
                    <span>
                        <?php echo $product->city; ?> <?php echo $product->address; ?>
                    </span>
                    <span>€ <?php echo $product->price; ?></span>
                </div>
                <div class="product__info">
                    <h3>
                        <?php echo $product->title; ?>
                    </h3>
                    <p>
                        <?php echo $product->subtitle; ?>
                    </p>
                </div>


                <ul class="product__mini__list">
                    <li>
                        <i class="fas fa-bed" aria-hidden="true"></i>
                        <span>
                            <?php echo $product->rooms; ?> kamers
                        </span>

                    </li>
                    <li>
                        <span>
                            <?php echo $product->refnummer; ?> ref
                        </span>
                    </li>
                    <li>
                        <i class="fas fa-bath" aria-hidden="true"></i>
                        <span>
                            <?php echo $product->size; ?> m²
                        </span>
                    </li>
                </ul>
            </a>
        </li>

    <?php endforeach;
    ?>

    <a href="/"></a>
</ul>
</div>

@endsection
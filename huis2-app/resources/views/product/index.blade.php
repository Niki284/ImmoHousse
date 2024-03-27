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
        <?php foreach ($productHuis as $product) : ?>
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
                        <?php echo $product->location; ?>
                    </span>
                    <span>€ <?php echo $product->price; ?></span>
                </div>
                <div class="product__info">
                <h3>
                    <?php echo $product->name; ?>
                </h3>
                <p>
                    <?php echo $product->description; ?>
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
                    <i class="fas fa-bath" aria-hidden="true"></i>
                     <span>
                        <?php echo $product->size; ?> m²
                    </span>
                </li>
            </ul>
            </li>
        <?php endforeach; 
        ?>
        
    </ul>
</div>
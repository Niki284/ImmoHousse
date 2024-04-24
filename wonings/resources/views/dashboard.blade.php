<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>
    <div class="sitebare">
        <div class="sitebare__content">
            <ul class="list__render">
                <li>
                    <h2 class="text-2xl font-semibold">Woning</h2>
                    <!-- <a href="/dashboard/woning/create">woeg woning</a> 
                    -->
                    <dialog id="woningDialog">
                        <div class="btn-close">
                            <button autofocus>Close</button>
                        </div>

                        <div class="forms">
                            <div class="formmini">
                                <h1>Voeg hier jouw product toe</h1>

                                <form action="/dashboard/woning/store" enctype="multipart/form-data" method="POST" class="form__categorie">
                                    @csrf
                                    <div class="form-group">
                                        <label for="title">Title</label>
                                        <input type="text" class="form-control" id="title" name="title" placeholder="Title">
                                    </div>
                                    <div class="form-group">
                                        <label for="subtitle">Subtitle</label>
                                        <input type="text" class="form-control" id="subtitle" name="subtitle" placeholder="Subtitle">
                                    </div>
                                    <div class="form-group">
                                        <label for="price">Prijs</label>
                                        <input type="text" class="form-control" id="price" name="price" placeholder="price">
                                    </div>
                                    <div class="form-group">
                                        <label for="beschrijving">Beschrijving</label>
                                        <input type="text" class="form-control" id="beschrijving" name="description" placeholder="Beschrijving">
                                    </div>
                                    <div class="form-group">
                                        <label for="city">Gemente</label>
                                        <input type="text" class="form-control" id="city" name="city" placeholder="Gemente">
                                    </div>
                                    <div class="form-group">
                                        <label for="address">Straat</label>
                                        <input type="text" class="form-control" id="address" name="address" placeholder="Straat">
                                    </div>
                                    <div class="form-group">
                                        <label for="rooms">Rooms</label>
                                        <input type="text" class="form-control" id="rooms" name="rooms" placeholder="Rooms">
                                    </div>
                                    <div class="form-group">
                                        <label for="image">Image</label>
                                        <input type="file" class="form-control" id="image" name="image" placeholder="Image">
                                    </div>
                                    <div class="form-group">
                                        <label for="grootte">Grootte</label>
                                        <input type="text" class="form-control" id="size" name="size" placeholder="Grootte">
                                    </div>
                                    <div class="form-group">
                                        <label for="grootte">Refnummer</label>
                                        <input type="text" class="form-control" id="refnummer" name="refnummer" placeholder="refnummer">
                                    </div>

                                    <select name="woning_type_id" id="">
                                        @foreach($woning_types as $woning_type)
                                        <option value="{{$woning_type->id}}">{{$woning_type->name}}</option>
                                        @endforeach
                                    </select>

                                    <select name="bouwtype_id" id="">
                                        @foreach($bouwtypes as $bouwtype)
                                        <option value="{{$bouwtype->id}}">{{$bouwtype->name}}</option>
                                        @endforeach
                                    </select>

                                    <select name="nieuwtype_id" id="">
                                        @foreach($nieuwTypes as $categorie)
                                        <option value="{{$categorie->id}}">{{$categorie->name}}</option>
                                        @endforeach
                                    </select>
                                    <button type="submit" class="form__categorie__btn">Add</button>

                                </form>
                            </div>
                        </div>
                    </dialog>
                    <button id="showWoningDialog">
                        Voeg Woning
                    </button>
                </li>
                <li>
                    <h2 class="text-2xl font-semibold flex-1 flex-col">Woning Type</h2>
                    <dialog id="woningTypeDialog">
                        <div class="btn-close">
                            <button autofocus>Close</button>
                        </div>
                        <div class="forms">
                            <div class="formmini">
                                <h1>Voeg hier woningtype toe</h1>

                                <form action="/dashboard/woningType/store" enctype="multipart/form-data" method="POST" class="form__categorie">
                                    @csrf
                                    <div class="form-group">
                                        <label for="WoningType">WoningType</label>
                                        <input type="text" class="form-control" id="name" name="name" placeholder="WoningType">
                                    </div>
                                    <button type="submit" class="form__categorie__btn">Add</button>

                                </form>
                            </div>
                        </div>
                        <div class="alltype">
                            <a href="/dashboard/woningType">all woning</a>
                        </div>
                    </dialog>
                    <button id="showWoningTypeDialog">
                        Voeg woningType
                    </button>
                </li>
                <li>
                    <h2 class="text-2xl font-semibold">Bouw Type</h2>
                    <dialog id="bouwTypeDialog">
                        <div class="btn-close">
                            <button autofocus>Close</button>
                        </div>
                        <div class="forms">
                            <div class="formmini">
                                <h1>Voeg hier jouw bouwtype toe</h1>

                                <form action="/dashboard/bouwtype/store" method="POST" class="form__categorie">
                                    @csrf
                                    <div class="form-group">
                                        <label for="name">Bouw type</label>
                                        <input type="text" class="form-control" id="name" name="name" placeholder="Bouw Type">
                                    </div>
                                    <button type="submit" class="form__categorie__btn">Add</button>

                                </form>

                            </div>
                        </div>
                    </dialog>
                    <button id="showBouwTypeDialog">
                        Voeg BouwType
                    </button>
                </li>
                
            </ul>
            <!-- Modal -->


        </div>
        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 text-gray-900 dark:text-gray-100">
                        <div class="p-6 text-gray-900 dark:text-gray-100">
                            <h2 class="text-2xl font-semibold">Woningen</h2>
                            <ul class="products">
                                <?php foreach ($woningHuis as $product) : ?>
                                    <li class="product">
                                        <a href="/dashboard/woning/{{$product->id }}">
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
                                        <a href="/dashboard/woning/edit/{{$product->id}}"> Edit Woning</a>
                                        <form method="post" action="/dashboard/{{$product->id}}">
                                            @csrf
                                            @method('delete')
                                            <input type="hidden" name="_method" value="delete">
                                            <button type="submit">Delete</button>
                                        </form>
                                    </li>
                                <?php endforeach;
                                ?>


                            </ul>
                        </div>
                    </div>
                </div>
            </div>
</x-app-layout>
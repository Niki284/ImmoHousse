@extends('layouts.base')

@section('content')

<main>
    <div class="contaner">
        <div class="detail__grid">
            <div class="detail__info">
                <div class="detail__info__block">
                    <h2>{{ $woningHuis->title }}</h2>
                    <p>{{ $woningHuis->subtitle }}</p>
                    <p>{{ $woningHuis->city }}</p>
                    <p>{{ $woningHuis->address }}</p>

                    <ul class="detail__mini__list">
                        <li>Vraagprijs: € {{ $woningHuis->price }}</li>
                        <li>Totale opp. grond: {{ $woningHuis->size }} m²</li>
                    </ul>
                </div>
                <div class="detail__knop">
                    <button class="detail__btn" type="submit">Vraag nu uw bezoek aan.</button>
                    <a href="#">Of voeg toe aan favorieten </a>
                </div>

                <div class="detail__user">
                    <img src="https://wac-cdn.atlassian.com/dam/jcr:ba03a215-2f45-40f5-8540-b2015223c918/Max-R_Headshot%20(1).jpg?cdnVersion=1510" alt="Profielfoto">
                    <div class="detail__user__info">
                        <p>Gunther Impens</p>
                        <a href="+32 487 18 44 22">+32 487 18 44 22</a>
                        <p>
                            <span>
                                (Ref. LS44)
                            </span>
                        </p>
                    </div>
                </div>
            </div>
            <div class="detail__foto">
                <img src="{{ $woningHuis->image }}" alt="Woning 1">
            </div>
        </div>
    </div>
    <div class="gegevens">
        <div class="gegevens--flex">
            <a href="/woning/{{$woningHuis->id}}/addvoorziningen">add voorzing</a>
            <a href="/woning/{{$woningHuis->id}}/editvoorzingen" class="gegevens--richt">edit voorzing</a>
        </div>

        <h2 class="gegevens__title">
            <span class="gegevens__title--svg"><svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 9a3 3 0 0 1 3-3m-2 15h4m0-3c0-4.1 4-4.9 4-9A6 6 0 1 0 6 9c0 4 4 5 4 9h4Z" />
                </svg></span>
            <span>
                Voorzieningen
            </span>
        </h2>
        <ul class="gegevens__list">
            @foreach($woningHuis->voorziningen as $voorzinings)
            <li>
                <span>
                    <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 11.917 9.724 16.5 19 7.5" />
                    </svg>

                </span>
                <span>
                    {{ $voorzinings->voorzining }}
                </span>
            </li>
            @endforeach
        </ul>
    </div>



    <div class="gegevens">
        <div class="gegevens--flex">
            <a href="/woning/{{$woningHuis->id}}/addtechnisch">Voeg technisches</a>
            <a href="/woning/{{$woningHuis->id}}/edittechnisch" class="gegevens--richt">edit technisches</a>
        </div>

        <h2 class="gegevens__title">
            <span class="gegevens__title--svg"><svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
  <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 13v-2a1 1 0 0 0-1-1h-.757l-.707-1.707.535-.536a1 1 0 0 0 0-1.414l-1.414-1.414a1 1 0 0 0-1.414 0l-.536.535L14 4.757V4a1 1 0 0 0-1-1h-2a1 1 0 0 0-1 1v.757l-1.707.707-.536-.535a1 1 0 0 0-1.414 0L4.929 6.343a1 1 0 0 0 0 1.414l.536.536L4.757 10H4a1 1 0 0 0-1 1v2a1 1 0 0 0 1 1h.757l.707 1.707-.535.536a1 1 0 0 0 0 1.414l1.414 1.414a1 1 0 0 0 1.414 0l.536-.535 1.707.707V20a1 1 0 0 0 1 1h2a1 1 0 0 0 1-1v-.757l1.707-.708.536.536a1 1 0 0 0 1.414 0l1.414-1.414a1 1 0 0 0 0-1.414l-.535-.536.707-1.707H20a1 1 0 0 0 1-1Z"/>
  <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15a3 3 0 1 0 0-6 3 3 0 0 0 0 6Z"/>
</svg>
</span>
            <span>
                Technisch
            </span>
        </h2>
        <ul class="gegevens__list--tech">
            <li>
                <span>
                    Bouwjaar:
                </span>
                <span>
                    {{ $woningHuis->technisches->bouwjaar }}
                </span>
            </li>
            <li>
                <span>
                    Algemene staat:
                </span>
                <span>
                    {{ $woningHuis->technisches->algemene_staat }}
                </span>
            </li>
            <li>
                <span>
                Renovatieverplichting:
                </span>
                <span>
                    {{ $woningHuis->technisches->renovatieverplichting }}
                </span>
            </li>
            <li>
                <span>
                Overstromingsgevoeligheid:
                </span>
                <span>
                    {{ $woningHuis->technisches->overstromingsgevoeligheid }}
                </span>
            </li>
            <li>
                <span>
                Afgebakende zone:
                </span>
                <span>
                    {{ $woningHuis->technisches->afgebakende_zone }}
                </span>
            </li>
            <li>
                <span>
                G(ebouw) score:
                </span>
                <span>
                    {{ $woningHuis->technisches->G_ebouw_score }}
                </span>
            </li>
            <li>
                <span>
                P(ebouw) score:
                </span>
                <span>
                    {{ $woningHuis->technisches->P_erceel_score }}
                </span>
            </li>
            <li>
                <span>
                Certificaat elektriciteit:
                </span>
                <span>
                    {{ $woningHuis->technisches->certificaat_elektriciteit }}
                </span>
            </li>
            <li>
                <span>
                Lift:
                </span>
                <span>
                    {{ $woningHuis->technisches->lift }}
                </span>
            </li>
            <ul>


            <h2 class="gegevens__title">
                Energie
        </h2>
            <ul class="gegevens__list--tech">
                <li>
                    <span>
                        EPC:
                    </span>
                    <span>
                        {{ $woningHuis->technisches->EPC }}
                    </span>
                </li>
            </ul>
                <h2 class="gegevens__title">
                Oppervlaktes en afmetingen
            </h2>
                <ul class="gegevens__list--tech">
                <li>
                    <span>
                    Totale opp. grond:
                    </span>
                    <span>
                        {{ $woningHuis->technisches->totale_opp_grond }}
                    </span>
                </li>
                <li>
                    <span>
                    Bewoonbare opp. (ca.):
                    </span>
                    <span>
                        {{ $woningHuis->technisches->bouw_opp_grond }}
                    </span>
                </li>
            </ul>
                
        </div>

</main>
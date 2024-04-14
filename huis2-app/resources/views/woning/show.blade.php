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

    <a href="/woning/{{$woningHuis->id}}/addvoorziningen">add voorzing</a>
    <h2>
        Voorzieningen
    </h2>
   
    <a href="/woning/{{$woningHuis->id}}/addtechnisch">Voeg technisches</a>
    

    <h2>
        Technisch
    </h2>
    <ul>
        @foreach ($woningHuis->technisches as $technisch)
            <li>
                <p>Bouwjaar: {{ $technisch->bouwjaar }}</p>
                <p>Algemene staat: {{ $technisch->algemene_staat }}</p>
                <p>Renovatieverplichting: {{ $technisch->renovatieverplichting }}</p>
                <p>Overstromingsgevoeligheid: {{ $technisch->overstromingsgevoeligheid }}</p>
                <p>Afgebakende zone: {{ $technisch->afgebakende_zone }}</p>
                <p>G(ebouw)-score: {{ $technisch->G_ebouw_score }}</p>
                <p>P(erceel)-score: {{ $technisch->P_erceel_score }}</p>
                <p>Certificaat elektriciteit: {{ $technisch->certificaat_elektriciteit }}</p>
                <p>Lift: {{ $technisch->lift }}</p>
                <p>EPC: {{ $technisch->EPC }}</p>
            </li>
        @endforeach
    </ul>


    


    
</main>


@extends('layouts.backend')
@section('content')
   <div class="d-flex flex-row  justify-content-around" style="min-height: 300px">
    <div class="card typers-scores-last">

        <div class="card-body">
            
            <h5 class="card-title">Kolejka 26 - punktacja</h5>
            <table class="table">
               
                <thead>
                    <tr>
                        <th scope="col">Poz.</th>
                        <th scope="col"></th>
                        <th scope="col">Typer</th>
                        <th scope="col">Meczy</th>
                        <th scope="col">Wynik</th>
                        <th scope="col">Suma</th>
                    </tr>
                </thead>
                <tbody>
                   
                    <tr id="dd">
                        <th scope="row">1</td>
                        <td><img class="img typer-avatar" src="{{ asset('images/admin/chlopek.jpg') }}"></td>
                        <td class="td-typer">Głowa</td>
                        <td>10</td>
                        <td>13+4</td>
                        <td class="text-center">17</td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td><img class="img typer-avatar" src="{{ asset('images/admin/chlopek.jpg') }}"></td>
                        <td>Aro</td>
                        <td>10</td>
                        <td>10+4</td>
                        <td class="text-center">14</td>
                    </tr>
                    <tr>
                        <td>3</td>
                        <td><img class="img typer-avatar" src="{{ asset('images/admin/chlopek.jpg') }}"></td>
                        <td>Kłaku</td>
                        <td>10</td>
                        <td>11+4</td>
                        <td class="text-center">15</td>
                    </tr>
                    <tr>
                        <td>4</td>
                        <td><img class="img typer-avatar" src="{{ asset('images/admin/chlopek.jpg') }}"></td>
                        <td>Piekorz</td>
                        <td>10</td>
                        <td>10+0</td>
                        <td class="text-center">10</td>
                    </tr>
                    <tr>
                        <td>5</td>
                        <td><img class="img typer-avatar" src="{{ asset('images/admin/chlopek.jpg') }}"></td>
                        <td>Franek</td>
                        <td>10</td>
                        <td>18+4</td>
                        <td class="text-center">22</td>
                    </tr>
                    <tr>
                        <td>6</td>
                        <td><img class="img typer-avatar" src="{{ asset('images/admin/chlopek.jpg') }}"></td>
                        <td>Janek</td>
                        <td>10</td>
                        <td>13+4</td>
                        <td class="text-center">17</td>
                    </tr>
                    <tr>
                        <td>7</td>
                        <td><img class="img typer-avatar" src="{{ asset('images/admin/chlopek.jpg') }}"></td>
                        <td>Tuumek</td>
                        <td>10</td>
                        <td>19+4</td>
                        <td class="text-center">23</td>
                    </tr>
                    <tr>
                        <td>8</td>
                        <td><img class="img typer-avatar" src="{{ asset('images/admin/chlopek.jpg') }}"></td>
                        <td>Achim</td>
                        <td>10</td>
                        <td>11+4</td>
                        <td class="text-center">15</td>
                    </tr>
                    <tr>
                        <td>9</td>
                        <td><img class="img typer-avatar" src="{{ asset('images/admin/chlopek.jpg') }}"></td>
                        <td>Robson</td>
                        <td>10</td>
                        <td>13+4</td>
                        <td class="text-center">17</td>
                    </tr>
                    <tr>
                        <td>10</td>
                        <td><img class="img typer-avatar" src="{{ asset('images/admin/chlopek.jpg') }}"></td>
                        <td>Kaligula234</td>
                        <td>10</td>
                        <td>13+6</td>
                        <td class="text-center">19</td>
                    </tr>
                    <tr>
                        <td>11</td>
                        <td><img class="img typer-avatar" src="{{ asset('images/admin/chlopek.jpg') }}"></td>
                        <td>ZenekToChuj</td>
                        <td>10</td>
                        <td>13+4</td>
                        <td class="text-center">17</td>
                    </tr>
                    <tr>
                        <td>12</td>
                        <td><img class="img typer-avatar" src="{{ asset('images/admin/chlopek.jpg') }}"></td>
                        <td>Zielonooki</td>
                        <td>10</td>
                        <td>21+4</td>
                        <td class="text-center">25</td>
                    </tr>
                    <tr>
                        <td>13</td>
                        <td><img class="img typer-avatar" src="{{ asset('images/admin/chlopek.jpg') }}"></td>
                        <td>Jolanta33</td>
                        <td>8</td>
                        <td>1+2</td>
                        <td class="text-center">3</td>
                    </tr>
                    <tr>
                        <td>14</td>
                        <td><img class="img typer-avatar" src="{{ asset('images/admin/chlopek.jpg') }}"></td>
                        <td>Pawełek</td>
                        <td>10</td>
                        <td>13+4</td>
                        <td class="text-center">17</td>
                    </tr>
                    <tr>
                        <td>15</td>
                        <td><img class="img typer-avatar" src="{{ asset('images/admin/chlopek.jpg') }}"></td>
                        <td>Sebastian234</td>
                        <td>10</td>
                        <td>13+4</td>
                        <td class="text-center">17</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    <div class="card games-scores">

        <div class="card-body games-scores-body">

            <h5 class="card-title">Kolejka 26 - wyniki</h5>
            <div class=" bg-primary ligue-name">PKO Ekstraklasa</div>
            <div  class="game_item d-flex justify-content-between align-items-center">
                <p class="d-flex justify-content-left align-items-center home_team">
                    <span class="club-crest">
                        <img class="img" src="images/admin//Clubs/poland/Cracovia Kraków.png">
                    </span>
                    <span class="club-name">Cracovia</span>
                </p>
                <p class="result">
                    <span class="result-score">1 - 0</span>
                </p>
                <p class="d-flex justify-content-right align-items-center away_team ">
                    <span class="club-name">Lech Poznań</span>
                    <span class="club-crest">
                        <img class="img" src="images/admin//Clubs/poland/Lecz Poznań.png">
                    </span>
                </p>
            </div>
            <div id="game_item1" class="game_item d-flex justify-content-between align-items-center">
                <p class="d-flex justify-content-left align-items-center home_team">
                    <span class="club-crest">
                        <img class="img" src="images/admin//Clubs/poland/Legia Warszwa.png">
                    </span>
                    <span class="club-name">Legia Warszwa</span>
                </p>
                <p class="result">
                    <span class="result-score">4 - 2</span>
                </p>
                <p class="d-flex justify-content-right align-items-center away_team ">
                    <span class="club-name">Wisła Kraków</span>
                    <span class="club-crest">
                        <img class="img" src="images/admin//Clubs/poland/Wisła Kraków.png">
                    </span>
                </p>
            </div>
            <div class="game_item d-flex justify-content-between align-items-center">
                <p class="d-flex justify-content-left align-items-center home_team">
                    <span class="club-crest">
                        <img class="img" src="images/admin//Clubs/poland/Gornik Łęczna.png">
                    </span>
                    <span class="club-name">Gornik Łęczna</span>
                </p>
                <p class="result">
                    <span class="result-score">2 - 3</span>
                </p>
                <p class="d-flex justify-content-right align-items-center away_team ">
                    <span class="club-name">Piast Gliwice</span>
                    <span class="club-crest">
                        <img class="img" src="images/admin//Clubs/poland/Piast Gliwice.png">
                    </span>
                </p>
            </div>
            <button class="btn btn-primary align-items-center justify-content-center" id="btnclick">
                <p>Click</p>
         </button>
                    
        </div>
        
    </div>
   
</div>
<div id="kwadrat" style="border: 1px solid black; width: 300px; height: 500px; padding: 20px"></div> 
@endsection

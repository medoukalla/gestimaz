<div>


    @guest
        <div class="alert alert-info text-center">
            <p class=" pt-2">Veuillez d'abord vous connecter pour vendre vos kamas.</p>  
        </div> 
    @endguest


    @auth    
      <form action="{{ route('frontend.sell.store') }}" method="post" >
              @csrf
          <div id="vendre-system">
              <div class="row">
                  <div class="col-md-6">
                      <h1>Serveur: </h1>
                      <select name="server_id" id="server" wire:model="server" >
                          <optgroup label="Classique">
                              <option value="0">Select server</option>
                              @foreach ($classique_servers as $server)
                                  <option  @if( $server->active == true ) value="{{ $server->id }}" @else disabled @endif >{{ $server->name }}</option>
                              @endforeach

                              <optgroup label="Retro">
                                  @foreach ($retro_servers as $server)
                                      <option @if( $server->active == true ) value="{{ $server->id }}" @else disabled @endif >{{ $server->name }}</option>
                                  @endforeach

                                  <optgroup label="Touch">
                                      @foreach ($touch_servers as $server)
                                          <option @if( $server->active == true ) value="{{ $server->id }}" @else disabled @endif >{{ $server->name }}</option>
                                      @endforeach
                          </optgroup>
                      </select>
                  </div>
                  <div class="col-md-6">
                      <h1>Email du contact: </h1>
                      <input type="url" wire:model="email" value="{{ $email }}"  />
                      @error('email')
                          <div class="alert alert-danger">{{ $message }}</div>
                      @enderror
                  </div>
              </div>
              <div class="row">
                  <div class="col-md-6">
                      <h1>Nom en jeu:</h1>
                      <input type="url" wire:model="game_id" value="{{ $game_id }}" />
                      @error('game_id')
                          <div class="alert alert-danger">{{ $message }}</div>
                      @enderror
                  </div>
                  <div class="col-md-6">
                      <h1>Nom et prenoms</h1>
                      <input type="url" wire:model="name" value="{{ $name }}" />
                      @error('name')
                          <div class="alert alert-danger">{{ $message }}</div>
                      @enderror
                  </div>
              </div>
              <div class="row">
                  <div class="col-md-6">
                      <h1>Methodes de paiement:</h1>
                      <select name="payment" wire:model="payment">
                          <optgroup label="Methodes de paiement">
                              <option value="paypal">PAYPAL</option>
                              <option value="skrill">SKRILL</option>
                              <option value="cih">CIH</option>
                          </optgroup>
                      </select>
                  </div>

                  @if ( $payment == 'paypal' )    
                      <div class="col-md-6">
                          <h1>Adresse e-mail Paypal : </h1>
                          <input type="email" placeholder="Paypal e-mail" wire:model="payment_info" value="{{ $paypal_email }}" required />
                          @error('payment_info')
                              <div class="alert alert-danger">{{ $message }}</div>
                          @enderror
                      </div>
                  @elseif ( $payment == 'skrill' )
                      <div class="col-md-6">
                          <h1>Adresse e-mail Skrill : </h1>
                          <input type="email" placeholder="Skrill e-mail" wire:model="payment_info" value="{{ $skrill_email }}" required />
                          @error('payment_info')
                              <div class="alert alert-danger">{{ $message }}</div>
                          @enderror
                      </div>
                  @elseif ( $payment == 'cih' )
                      <div class="col-md-6">
                          <h1>Numéro de compte CIH : </h1>
                          <input type="email" placeholder="CIH uméro" wire:model="payment_info" value="{{ $cih_number }}" required />
                          @error('payment_info')
                              <div class="alert alert-danger">{{ $message }}</div>
                          @enderror
                      </div>
                  @endif

              </div>
              <div class="row">
                  <div class="col-md-6">
                      <h1>Quantité de kamas | (million, ps:10.3=10,300,000) :</h1>
                      <input type="number" name="quantity" wire:model="quantity" value="1" min="1" autocomplete="off" >
                      
                  </div>
                  <div class="col-md-6">
                      <h1>Discord : (username#id)</h1>
                      <input type="text" wire:model="discord" value="{{ $discord }}" />
                      @error('discord')
                          <div class="alert alert-danger">{{ $message }}</div>
                      @enderror
                  </div>
              </div>
              <div class="row vendre-resultat">
                  <div class="col">
                      <h1>Prix par million:{{ $unite_price }} {{ $currency }}</h1>
                      <h1>Montant total:{{ $total_amount }} {{ $currency }}</h1>
                  </div>
              </div>

              @if( $error_message != null || $success_message != null)
                <div class="row">
                  <div class="col-12">
                    @if ( $error_message != null )
                        <div class="alert alert-danger">{{ $error_message }}</div>
                    @elseif( $success_message != null )
                        <div class="alert alert-success">{{ $success_message }}</div>
                    @endif
                  </div>
                </div>
              @endif
              <button wire:click.prevent="send_order" class="btn btn-primary v-btn" style="background-color: aqua !important;" type="suivant">Suivant</button>
          </div>
      </form>
    @endauth

    
  <div class="info-table">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="main-box">
            <div class="main-header-area">
              <ul class="nav" role="tablist">
                <li class="nav-item">
                  <a class="nav-link active" id="dofus-classic-tab" data-toggle="pill" href="#pills-all-player"
                    role="tab" aria-controls="pills-all-player" aria-selected="true">DOFUS CLASSIC</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" id="dofus-retro-tab" data-toggle="pill" href="#pills-vip-only" role="tab"
                    aria-controls="pills-vip-only" aria-selected="false">DOFUS RETRO</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" id="dofus-touch-tab" data-toggle="pill" href="#pills-vip-only" role="tab"
                    aria-controls="pills-vip-only" aria-selected="false">DOFUS TOUCH</a>
                </li>
              </ul>
            </div>
            <!-- Tabels -->

            <div class="tab-content">

              <div class="tab-pane fade show active" id="pills-all-player" role="tabpanel"
                aria-labelledby="dofus-classic-tab">
                <div class="inner-table-content">
                  <div class="header-area">
                    <ul class="nav" role="tablist">
                      <li class="nav-item">
                        <a class="nav-link active" id="pills-leaderboardr-tab" data-toggle="pill"
                          href="#pills-leaderboardr" role="tab" aria-controls="pills-leaderboardr"
                          aria-selected="true">SERVERS</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" id="pills-more-info-tab" data-toggle="pill" href="#pills-more-info"
                          role="tab" aria-controls="pills-more-info" aria-selected="false">More Info</a>
                      </li>
                    </ul>
                  </div>
                  <div class="tab-content">
                    <div class="tab-pane fade show active" id="pills-leaderboardr" role="tabpanel"
                      aria-labelledby="pills-leaderboardr-tab">
                      <div class="inner-table">
                        <div class="responsive-table">
                          <table class="table">
                            <thead>
                              <tr>
                                <th scope="col">SERVER</th>
                                <th scope="col">PAYPAL</th>
                                <th scope="col">SKRILL</th>
                                <th scope="col">MAD</th>
                                <th scope="col">STATUS</th>
                              </tr>
                            </thead>
                            <tbody>

                              @foreach ($classique_servers as $server)
                                <tr>
                                    <td>{{ $server->name }}
                                    </td>
                                    <td>{{ $server->price }}€/M</td>
                                    <td>{{ $server->price_skrill }}€/M</td>
                                    <td>{{ $server->price_mad }} DH/M</td>
                                    @if ( $server->active == true )
                                        <td class="disponible">Disponible</td>
                                    @else
                                        <td class="indisponible">Indisponible</td>
                                    @endif
                                </tr>
                              @endforeach

                            </tbody>
                          </table>
                        </div>
                      </div>
                    </div>
                    <div class="tab-pane fade" id="pills-more-info" role="tabpanel"
                      aria-labelledby="pills-more-info-tab">
                      <div class="info-content">
                        <div class="info-box">
                          <h4 class="title">Tournament Duration</h4>
                          <p class="text">
                            7 Days (Monday 00:01 UTC - Sunday 23:59 UTC)
                          </p>
                        </div>
                        <div class="info-box two">
                          <h4 class="title">Applicable Games</h4>
                          <p class="text">
                            All Games Under 'Slots' Category
                          </p>
                        </div>
                        <div class="info-box three">
                          <h4 class="title">Free Spin Reward Games</h4>
                          <p class="text">
                            Book Of Pyramids, Brave Viking, Desert Treasure,
                            Hawaii Cocktails, Lucky Blue, Lucky Lady Clover,
                            Lucky Sweets, Princess Of Sky, Princess Royal,
                            Scroll Of Adventure, Slotomon Go, West Town Any
                            Softswiss Slots Game | Wager x 40 times
                          </p>
                        </div>
                        <a href="#" class="mybtn1 server-btn-terms">Terms and Conditions</a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <div class="tab-pane fade" id="pills-vip-only" role="tabpanel" aria-labelledby="dofus-retro-tab">
                <div class="inner-table-content">
                  <div class="header-area">
                    <ul class="nav" role="tablist">
                      <li class="nav-item">
                        <a class="nav-link active" id="pills-leaderboardr-vip-tab" data-toggle="pill"
                          href="#pills-leaderboardr-vip" role="tab" aria-controls="pills-leaderboardr-vip"
                          aria-selected="true">SERVERS</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" id="pills-more-info-vip-tab" data-toggle="pill" href="#pills-more-info-vip"
                          role="tab" aria-controls="pills-more-info-vip" aria-selected="false">More Info</a>
                      </li>
                    </ul>
                  </div>
                  <div class="tab-content" id="pills-tabContent">
                    <div class="tab-pane fade show active" id="pills-leaderboardr-vip" role="tabpanel"
                      aria-labelledby="pills-leaderboardr-vip-tab">
                      <div class="inner-table">
                        <div class="responsive-table">
                          <table class="table">
                            <thead>
                              <tr>
                                <th scope="col">SERVER</th>
                                <th scope="col">PAYPAL</th>
                                <th scope="col">SKRILL</th>
                                <th scope="col">MAD</th>
                                <th scope="col">STATUS</th>
                              </tr>
                            </thead>
                            <tbody>
                                
                                @foreach ($retro_servers as $server)
                                    <tr>
                                        <td>{{ $server->name }} </td>
                                        <td>{{ $server->price }}€/M</td>
                                        <td>{{ $server->price_skrill }}€/M</td>
                                        <td>{{ $server->price_mad }} DH/M</td>
                                        
                                        @if ( $server->active == true )
                                            <td class="disponible">Disponible</td>
                                        @else
                                            <td class="indisponible">Indisponible</td>
                                        @endif
                                        
                                    </tr>
                                @endforeach


                            </tbody>
                          </table>
                        </div>
                      </div>
                    </div>
                    <div class="tab-pane fade" id="pills-more-info-vip" role="tabpanel"
                      aria-labelledby="pills-more-info-vip-tab">
                      <div class="info-content">
                        <div class="info-box">
                          <h4 class="title">Tournament Duration</h4>
                          <p class="text">
                            7 Days (Monday 00:01 UTC - Sunday 23:59 UTC)
                          </p>
                        </div>
                        <div class="info-box two">
                          <h4 class="title">Applicable Games</h4>
                          <p class="text">
                            All Games Under 'Slots' Category
                          </p>
                        </div>
                        <div class="info-box three">
                          <h4 class="title">Free Spin Reward Games</h4>
                          <p class="text">
                            Book Of Pyramids, Brave Viking, Desert Treasure,
                            Hawaii Cocktails, Lucky Blue, Lucky Lady Clover,
                            Lucky Sweets, Princess Of Sky, Princess Royal,
                            Scroll Of Adventure, Slotomon Go, West Town Any
                            Softswiss Slots Game | Wager x 40 times
                          </p>
                        </div>
                        <a href="#" class="mybtn1">Terms and Conditions</a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <div class="tab-pane fade" id="pills-vip-only" role="tabpanel" aria-labelledby="dofus-retro-tab">
                <div class="inner-table-content">
                  <div class="header-area">
                    <ul class="nav" role="tablist">
                      <li class="nav-item">
                        <a class="nav-link active" id="pills-leaderboardr-vip-tab" data-toggle="pill"
                          href="#pills-leaderboardr-vip" role="tab" aria-controls="pills-leaderboardr-vip"
                          aria-selected="true">SERVERS</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" id="pills-more-info-vip-tab" data-toggle="pill" href="#pills-more-info-vip"
                          role="tab" aria-controls="pills-more-info-vip" aria-selected="false">More Info</a>
                      </li>
                    </ul>
                  </div>
                  <div class="tab-content" id="pills-tabContent">
                    <div class="tab-pane fade show active" id="pills-leaderboardr-vip" role="tabpanel"
                      aria-labelledby="pills-leaderboardr-vip-tab">
                      <div class="inner-table">
                        <div class="responsive-table">
                          <table class="table">
                            <thead>
                              <tr>
                                <th scope="col">SERVER</th>
                                <th scope="col">PAYPAL</th>
                                <th scope="col">SKRILL</th>
                                <th scope="col">MAD</th>
                                <th scope="col">STATUS</th>
                              </tr>
                            </thead>
                            <tbody>
                                @foreach ($touch_servers as $server)
                                    
                                    <tr>
                                        <td>{{ $server->name }}</td>
                                        <td>{{ $server->price }}€/M</td>
                                        <td>{{ $server->price_skrill }}€/M</td>
                                        <td>{{ $server->price_mad }} DH/M</td>
                                        
                                        @if ( $server->active == true )
                                              <td class="disponible">Disponible</td>
                                        @else
                                              <td class="indisponible">Indisponible</td>
                                        @endif
                                    </tr>
                                @endforeach

                            </tbody>
                          </table>
                        </div>
                      </div>
                    </div>
                    <div class="tab-pane fade" id="pills-more-info-vip" role="tabpanel"
                      aria-labelledby="pills-more-info-vip-tab">
                      <div class="info-content">
                        <div class="info-box">
                          <h4 class="title">Tournament Duration</h4>
                          <p class="text">
                            7 Days (Monday 00:01 UTC - Sunday 23:59 UTC)
                          </p>
                        </div>
                        <div class="info-box two">
                          <h4 class="title">Applicable Games</h4>
                          <p class="text">
                            All Games Under 'Slots' Category
                          </p>
                        </div>
                        <div class="info-box three">
                          <h4 class="title">Free Spin Reward Games</h4>
                          <p class="text">
                            Book Of Pyramids, Brave Viking, Desert Treasure,
                            Hawaii Cocktails, Lucky Blue, Lucky Lady Clover,
                            Lucky Sweets, Princess Of Sky, Princess Royal,
                            Scroll Of Adventure, Slotomon Go, West Town Any
                            Softswiss Slots Game | Wager x 40 times
                          </p>
                        </div>
                        <a href="#" class="mybtn1">Terms and Conditions</a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>


</div>

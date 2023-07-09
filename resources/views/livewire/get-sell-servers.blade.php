<div style="width: 100%;">

    <div class="col-lg-12">
        <div class="tab-menu-area">
            <ul class="nav nav-lend mb-3" id="pills-tab" role="tablist">
                <li class="nav-item">
                    <a class="nav-link active" id="pills-all-bets-tab" data-toggle="pill" href="#pills-all-bets"
                        role="tab" aria-controls="pills-all-bets" aria-selected="true">Classic</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="pills-my-bets-tab" data-toggle="pill" href="#pills-my-bets" role="tab"
                        aria-controls="pills-my-bets" aria-selected="false">Retro</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="pills-my-jackpots-tab" data-toggle="pill" href="#pills-my-jackpots"
                        role="tab" aria-controls="pills-my-jackpots" aria-selected="false">Touch</a>
                </li>
            </ul>
        </div>
        <div class="tab-content" id="pills-tabContent">


            <div class="tab-pane fade show active" id="pills-all-bets" role="tabpanel"
                aria-labelledby="pills-all-bets-tab">
                <div class="responsive-table">
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">Server</th>
                                <th scope="col">Paypal</th>
                                <th scope="col">Skrill</th>
                                <th scope="col">Mad</th>
                                <th scope="col">Status</th>

                            </tr>
                        </thead>
                        <tbody>

                            @foreach ( $classic_servers as $classic_server)
                            
                                <tr>
                                    <td>{{ $classic_server->name }}</td>
                                    <td>{{ $classic_server->price }}€/M</td>
                                    <td>{{ $classic_server->price_skrill }}€/M</td>
                                    <td>{{ $classic_server->price_mad }} DH/M</td>
                                    @if ( $classic_server->active == true)
                                        <td class="indisponible">Disponible</td>
                                    @else
                                        <td class="disponible">Indisponible</td>
                                    @endif
                                </tr>

                            @endforeach

                   
                        </tbody>
                    </table>
                </div>
            </div>

            <div class="tab-pane fade" id="pills-my-bets" role="tabpanel" aria-labelledby="pills-my-bets-tab">
                <div class="responsive-table">
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">Server</th>
                                <th scope="col">Paypal</th>
                                <th scope="col">Skrill</th>
                                <th scope="col">Mad</th>
                                <th scope="col">Status</th>

                            </tr>
                        </thead>
                        <tbody>
                            @foreach ( $retro_servers as $retro_server)
                            
                                <tr>
                                    <td>{{ $retro_server->name }}</td>
                                    <td>{{ $retro_server->price }}€/M</td>
                                    <td>{{ $retro_server->price_skrill }}€/M</td>
                                    <td>{{ $retro_server->price_mad }} DH/M</td>
                                    @if ( $retro_server->active == true)
                                        <td class="indisponible">Disponible</td>
                                    @else
                                        <td class="disponible">Indisponible</td>
                                    @endif
                                </tr>

                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>

            <div class="tab-pane fade" id="pills-my-jackpots" role="tabpanel" aria-labelledby="pills-my-jackpots-tab">
                <div class="responsive-table">
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">Server</th>
                                <th scope="col">Paypal</th>
                                <th scope="col">Skrill</th>
                                <th scope="col">Mad</th>
                                <th scope="col">Status</th>

                            </tr>
                        </thead>
                        <tbody>
                            @foreach ( $touch_servers as $touch_server)
                            
                                <tr>
                                    <td>{{ $touch_server->name }}</td>
                                    <td>{{ $touch_server->price }}€/M</td>
                                    <td>{{ $touch_server->price_skrill }}€/M</td>
                                    <td>{{ $touch_server->price_mad }} DH/M</td>
                                    @if ( $touch_server->active == true)
                                        <td class="indisponible">Disponible</td>
                                    @else
                                        <td class="disponible">Indisponible</td>
                                    @endif
                                </tr>

                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>


        </div>
    </div>
</div>
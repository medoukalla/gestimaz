<x-head title="{{ setting('titles.buy') }}" />
<x-header />

<link rel="stylesheet" href="{{ asset('assets/css/kamas-traking.css') }}">


<!-- Breadcrumb Area Start -->
<section class="breadcrumb-area not-m-hero play">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h4 class="title">Achat</h4>
                <ul class="breadcrumb-list">
                    <li>
                        <a> STEP 4 </a>
                    </li>
                    <li>
                        <span><i class="fas fa-chevron-right"></i> </span>
                    </li>
                    <li>
                        <a>Terminer la commande</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</section>
<!-- Breadcrumb Area End -->

<!-- Play Games Area Start -->
<section class="featured-game packs">
    <!-- Servers card Area Start -->
    <div class="container">
        <div class="row">
            <div class="user-hint">
                <p>
                    Bonjour @auth <span>{{ Auth::user()->name }}</span> @endauth, veuillez remplir vos coordonnées de contact. Cela
                    facilitera le travail de notre équipe pour vous contacter lorsque vous passerez votre commande.
                    Commencez ici.
                </p>
            </div>
        </div>
        <div class="row">
            <div class="col mt-3">
                @if (Session::has('success'))
                    <div class="alert alert-success">{{ Session::get('success') }}</div>
                @elseif (Session::has('error'))
                    <div class="alert alert-danger h5">{{ Session::get('error') }} </div>
                @endif
            </div>
        </div>
    </div>
    <!-- Recent Winners Area End -->
</section>

<div class="popup" id="popup">
    <div class="top">
        <img src="{{ asset('img/icon/active.png') }}" alt="popup">
    </div>
    <h2>Merci!</h2>
    <p>vérifier votre e-mail!</p>
    <button type="button" onclick="closePopup()">Je vais le vérifier</button>
</div>
<section class="kamas-tracking mt-5">
    <div class="container">
        <div class="progress-container">
            <div class="progress" id="progress"></div>

            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.0/css/font-awesome.css"
                integrity="sha512-CB+XYxRC7cXZqO/8cP3V+ve2+6g6ynOnvJD6p4E4y3+wwkScH9qEOla+BTHzcwB4xKgvWn816Iv0io5l3rAOBA=="
                crossorigin="anonymous" referrerpolicy="no-referrer" />

            <div class="circle @if ($order->payed == true) active @endif">
                <i class="fa fa-credit-card-alt icon"></i>
                <div class="caption">En Attente de paiement</div>
            </div>

            <div class="circle @if ($order->payment_verified == true) active @endif ">
                <i class="icon fa fa-solid fa-clock"></i>
                <div class="caption">Vérification du paiement</div>
            </div>

            <div class="circle @if ($order->facturer == true) active @endif">
                <i class="icon fa fa-solid fa-gear"></i>
                <div class="caption">Information de facturation</div>
            </div>

            <div class="circle @if ($order->liviser == true) active @endif">
                <i class="icon fa fa-solid fa-truck"></i>
                <div class="caption">Informations de livraison</div>
            </div>

            <div class="circle @if ($order->delivered == true) active @endif">
                <i class="fa fa-check-circle icon" aria-hidden="true"></i>
                <div class="caption">En cours de livraison</div>
            </div>

            <div class="circle @if ($order->delivered == true) active @endif">
                <i class="fa fa-check-circle icon" aria-hidden="true"></i>
                <div class="caption">Livré</div>
            </div>

        </div>



        <!-- Step 1 -->
        @if ($order->payed == true && $order->payment_verified == false)
            <div class="payment_notif">
                <img src="{{ asset('assets/images/fluent_person-question-mark-16-filled.svg') }}" alt="notif" />
                <p>
                    Vous avez marqué cette commande comme payée. Un de nos employés vérifie votre paiement, nous
                    commencerons à traiter votre commande dans un instant. S'il y a des problèmes, notre agent de
                    support vous contactera.
                </p>
            </div>
        @endif



        <!-- Step 2 -->
        @if ($order->payment_verified == true && $order->facturer == false)
            <div class="payment_notif">
                <img src="{{ asset('assets/images/fluent_person-question-mark-16-filled.svg') }}" alt="notif" />
                <p>
                    Votre paiement vérifié, veuillez remplir votre Information de facturation.
                </p>
            </div>
            <div class="row d-flex align-items-center">

                <div id="facturer" class="col-md-6 text-left">

                    <p>Information de facturation</p>
                    <form id="ferfication_facturation" action="{{ route('frontend.order.details', $order) }}"
                        method="POST">
                        @csrf
                        <div class="form-group">
                            <label for="name">Nom et prenom :</label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <div class="input-group-text">
                                        <svg width="36" height="37" viewBox="0 0 36 37" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M18 0C15.69 0 13.4747 0.887071 11.8413 2.46607C10.2079 4.04506 9.29032 6.18664 9.29032 8.41968C9.29032 10.6527 10.2079 12.7943 11.8413 14.3733C13.4747 15.9523 15.69 16.8394 18 16.8394C20.3099 16.8394 22.5253 15.9523 24.1587 14.3733C25.7921 12.7943 26.7097 10.6527 26.7097 8.41968C26.7097 6.18664 25.7921 4.04506 24.1587 2.46607C22.5253 0.887071 20.3099 0 18 0ZM8.70968 21.3299C6.39973 21.3299 4.18439 22.2169 2.55101 23.7959C0.917624 25.3749 0 27.5165 0 29.7495V32.4169C0 34.1098 1.26813 35.5513 2.99613 35.8229C12.9321 37.3924 23.0679 37.3924 33.0039 35.8229C33.8402 35.6913 34.6008 35.2764 35.1497 34.6524C35.6986 34.0284 36 33.236 36 32.4169V29.7495C36 27.5165 35.0824 25.3749 33.449 23.7959C31.8156 22.2169 29.6003 21.3299 27.2903 21.3299H26.5006C26.071 21.3299 25.6436 21.3972 25.2372 21.5229L23.2258 22.1584C19.8301 23.2299 16.1699 23.2299 12.7742 22.1584L10.7628 21.5229C10.3556 21.3948 9.92996 21.3297 9.50168 21.3299H8.70968Z"
                                                fill="#00B8DF" />
                                        </svg>

                                    </div>
                                </div>
                                <input id="name" name="name" placeholder="Votre nom et prenom" type="text"
                                    class="form-control" value="{{ old('name') }}" required="required">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="discord">Discord : <small>(Format =
                                    username#id)</small></label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <div class="input-group-text">
                                        <svg width="50" height="37" viewBox="0 0 50 37" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M41.7638 3.06926C38.5649 1.62478 35.1894 0.593826 31.7215 0.00210731C31.6901 -0.00309908 31.6578 0.00139751 31.6291 0.014979C31.6004 0.0285604 31.5767 0.0505597 31.5612 0.0779517C31.1264 0.836396 30.6454 1.82844 30.3094 2.60509C26.5712 2.0469 22.7688 2.0469 19.0307 2.60509C18.6558 1.73992 18.2316 0.896201 17.7603 0.0779517C17.7445 0.0508597 17.7207 0.0291139 17.6921 0.0155761C17.6635 0.00203824 17.6314 -0.00265717 17.6 0.00210731C14.1313 0.59066 10.7551 1.62215 7.55769 3.06926C7.53033 3.07953 7.50744 3.09883 7.49294 3.12387C1.09818 12.5255 -0.656222 21.6967 0.204019 30.7525C0.207102 30.795 0.234852 30.8374 0.268768 30.8647C3.99254 33.5788 8.15767 35.651 12.5866 36.993C12.6178 37.0027 12.6514 37.0023 12.6825 36.992C12.7135 36.9816 12.7404 36.9618 12.7592 36.9353C13.7089 35.6611 14.5537 34.3172 15.2814 32.9034C15.2965 32.8743 15.3017 32.8412 15.2962 32.8089C15.2906 32.7766 15.2746 32.747 15.2505 32.7244C15.2346 32.7096 15.2157 32.6983 15.195 32.6911C13.8666 32.1887 12.5801 31.5852 11.3471 30.886C11.3126 30.8668 11.287 30.8353 11.2755 30.798C11.2641 30.7607 11.2676 30.7205 11.2854 30.6857C11.2959 30.6632 11.3118 30.6434 11.3317 30.6281C11.5906 30.437 11.8496 30.2367 12.0963 30.0365C12.1181 30.0193 12.1442 30.0082 12.1719 30.0045C12.1996 30.0007 12.2279 30.0045 12.2536 30.0153C20.3287 33.6437 29.0699 33.6437 37.0464 30.0153C37.073 30.0039 37.1023 29.9999 37.1311 30.0037C37.1599 30.0074 37.1871 30.0187 37.2098 30.0365C37.4565 30.2367 37.7155 30.437 37.9745 30.6281C37.9954 30.6432 38.0123 30.6632 38.0235 30.6862C38.0347 30.7093 38.04 30.7348 38.0388 30.7603C38.0375 30.7858 38.0299 30.8107 38.0165 30.8326C38.0031 30.8546 37.9845 30.8729 37.9621 30.886C36.7319 31.5916 35.4437 32.1944 34.1111 32.688C34.0898 32.6956 34.0705 32.7077 34.0545 32.7234C34.0385 32.7391 34.0263 32.7581 34.0186 32.7791C34.0114 32.7993 34.0086 32.8208 34.0102 32.8422C34.0118 32.8636 34.0178 32.8844 34.0278 32.9034C34.7678 34.3141 35.6157 35.6611 36.5469 36.9353C36.5657 36.9618 36.5926 36.9816 36.6236 36.992C36.6547 37.0023 36.6883 37.0027 36.7196 36.993C41.1558 35.6552 45.3277 33.5827 49.0558 30.8647C49.0745 30.852 49.09 30.8353 49.1012 30.8159C49.1125 30.7965 49.1191 30.7748 49.1206 30.7525C50.1504 20.2829 47.397 11.1876 41.8255 3.1269C41.8199 3.11359 41.8115 3.10158 41.8009 3.09165C41.7903 3.08172 41.7776 3.07409 41.7638 3.06926ZM16.4869 25.2371C14.0542 25.2371 12.0531 23.0406 12.0531 20.3466C12.0531 17.6496 14.0172 15.4531 16.4869 15.4531C18.9752 15.4531 20.9577 17.6678 20.9207 20.3466C20.9207 23.0406 18.9567 25.2371 16.4869 25.2371ZM32.8778 25.2371C30.4481 25.2371 28.444 23.0406 28.444 20.3466C28.444 17.6496 30.408 15.4531 32.8778 15.4531C35.366 15.4531 37.3516 17.6678 37.3115 20.3466C37.3115 23.0406 35.366 25.2371 32.8778 25.2371Z"
                                                fill="#00B8DF" />
                                        </svg>

                                    </div>
                                </div>
                                <input id="discord" name="discord" placeholder="Example : username#1234"
                                    type="text" class="form-control" value="{{ old('discord') }}">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="email">Email :</label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <div class="input-group-text">
                                        <svg width="47" height="37" viewBox="0 0 47 37" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M41.625 0H4.625C2.08125 0 0.023125 2.08125 0.023125 4.625L0 32.375C0 34.9188 2.08125 37 4.625 37H41.625C44.1688 37 46.25 34.9188 46.25 32.375V4.625C46.25 2.08125 44.1688 0 41.625 0ZM40.7 9.82812L24.3506 20.0494C23.6106 20.5119 22.6394 20.5119 21.8994 20.0494L5.55 9.82812C5.31812 9.69796 5.11506 9.52209 4.95312 9.31117C4.79117 9.10026 4.67371 8.85867 4.60783 8.60105C4.54195 8.34342 4.52904 8.0751 4.56986 7.81233C4.61069 7.54957 4.7044 7.29782 4.84534 7.07232C4.98627 6.84682 5.1715 6.65227 5.3898 6.50043C5.60811 6.34859 5.85495 6.24262 6.1154 6.18894C6.37584 6.13526 6.64447 6.13499 6.90502 6.18813C7.16557 6.24127 7.41263 6.34673 7.63125 6.49812L23.125 16.1875L38.6188 6.49812C38.8374 6.34673 39.0844 6.24127 39.345 6.18813C39.6055 6.13499 39.8742 6.13526 40.1346 6.18894C40.395 6.24262 40.6419 6.34859 40.8602 6.50043C41.0785 6.65227 41.2637 6.84682 41.4047 7.07232C41.5456 7.29782 41.6393 7.54957 41.6801 7.81233C41.721 8.0751 41.708 8.34342 41.6422 8.60105C41.5763 8.85867 41.4588 9.10026 41.2969 9.31117C41.1349 9.52209 40.9319 9.69796 40.7 9.82812Z"
                                                fill="#00B8DF" />
                                        </svg>

                                    </div>
                                </div>
                                <input id="email" name="email" placeholder="Email" type="text"
                                    value="@if (old('email') == '') @auth {{ Auth::user()->email }} @endauth @else {{ old('email') }} @endif"
                                    class="form-control" aria-describedby="emailHelpBlock" required="required">
                                <div class="input-group-append">
                                    <div class="input-group-text sendme">
                                        <button id="sendEmailCode" type="button"
                                            data-route="{{ route('order_send_code') }}"
                                            data-order_id="{{ $order->id }}" onclick="openPopup()">
                                            <img src="{{ asset('img/icon/send.svg') }}" alt=""
                                                height="20px">
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <span id="emailHelpBlock" class="form-text mt-2">
                                Envoyer un code de
                                validation</span>
                        </div>
                        <div class="form-group">
                            <label for="code">Verfication code</label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <div class="input-group-text">
                                        <svg width="28" height="37" viewBox="0 0 28 37" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M14 28.1905C14.9283 28.1905 15.8185 27.8192 16.4749 27.1584C17.1313 26.4975 17.5 25.6012 17.5 24.6667C17.5 23.7321 17.1313 22.8358 16.4749 22.175C15.8185 21.5141 14.9283 21.1429 14 21.1429C13.0717 21.1429 12.1815 21.5141 11.5251 22.175C10.8687 22.8358 10.5 23.7321 10.5 24.6667C10.5 25.6012 10.8687 26.4975 11.5251 27.1584C12.1815 27.8192 13.0717 28.1905 14 28.1905ZM24.5 12.3333C25.4283 12.3333 26.3185 12.7046 26.9749 13.3654C27.6313 14.0263 28 14.9226 28 15.8571V33.4762C28 34.4108 27.6313 35.3071 26.9749 35.9679C26.3185 36.6287 25.4283 37 24.5 37H3.5C2.57174 37 1.6815 36.6287 1.02513 35.9679C0.368749 35.3071 0 34.4108 0 33.4762V15.8571C0 14.9226 0.368749 14.0263 1.02513 13.3654C1.6815 12.7046 2.57174 12.3333 3.5 12.3333H5.25V8.80952C5.25 6.47309 6.17187 4.23236 7.81282 2.58025C9.45376 0.928144 11.6794 0 14 0C15.1491 0 16.2869 0.227865 17.3485 0.670585C18.4101 1.11331 19.3747 1.76221 20.1872 2.58025C20.9997 3.39829 21.6442 4.36944 22.0839 5.43826C22.5237 6.50709 22.75 7.65264 22.75 8.80952V12.3333H24.5ZM14 3.52381C12.6076 3.52381 11.2723 4.0807 10.2877 5.07196C9.30312 6.06322 8.75 7.40767 8.75 8.80952V12.3333H19.25V8.80952C19.25 7.40767 18.6969 6.06322 17.7123 5.07196C16.7277 4.0807 15.3924 3.52381 14 3.52381Z"
                                                fill="#00B8DF" />
                                        </svg>

                                    </div>
                                </div>
                                <input id="code" name="code" placeholder="Verfication code" type="text"
                                    value="{{ old('code') }}" class="form-control" required="required">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="city">Ville :</label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <div class="input-group-text">
                                        <svg width="27" height="37" viewBox="0 0 27 37" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M13.2143 17.575C11.9626 17.575 10.7622 17.0877 9.87717 16.2204C8.99212 15.353 8.4949 14.1766 8.4949 12.95C8.4949 11.7234 8.99212 10.547 9.87717 9.67963C10.7622 8.81228 11.9626 8.325 13.2143 8.325C14.4659 8.325 15.6663 8.81228 16.5514 9.67963C17.4365 10.547 17.9337 11.7234 17.9337 12.95C17.9337 13.5574 17.8116 14.1588 17.5744 14.7199C17.3373 15.281 16.9896 15.7909 16.5514 16.2204C16.1132 16.6498 15.5929 16.9905 15.0203 17.2229C14.4477 17.4554 13.834 17.575 13.2143 17.575ZM13.2143 0C9.70964 0 6.34853 1.36437 3.87037 3.79297C1.39222 6.22156 0 9.51545 0 12.95C0 22.6625 13.2143 37 13.2143 37C13.2143 37 26.4286 22.6625 26.4286 12.95C26.4286 9.51545 25.0364 6.22156 22.5582 3.79297C20.08 1.36437 16.7189 0 13.2143 0Z"
                                                fill="#00B8DF" />
                                        </svg>

                                    </div>
                                </div>
                                <input id="city" name="city" placeholder="Ville" type="text"
                                    value="{{ old('city') }}" class="form-control" required="required">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="phone">Numero de telephone :</label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <div class="input-group-text">
                                        <svg width="24" height="37" viewBox="0 0 24 37" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M20.5714 30.2727H3.42857V6.72727H20.5714M20.5714 0H3.42857C1.52571 0 0 1.49682 0 3.36364V33.6364C0 34.5285 0.361223 35.384 1.00421 36.0148C1.64719 36.6456 2.51926 37 3.42857 37H20.5714C21.4807 37 22.3528 36.6456 22.9958 36.0148C23.6388 35.384 24 34.5285 24 33.6364V3.36364C24 2.47154 23.6388 1.61599 22.9958 0.985186C22.3528 0.354382 21.4807 0 20.5714 0Z"
                                                fill="#00B8DF" />
                                        </svg>

                                    </div>
                                </div>
                                <input id="phone" name="phone" placeholder="Numero de telephone" required
                                    value="{{ old('phone') }}" type="text" class="form-control">
                            </div>
                        </div>
                        <div class="form-group">
                            <div>
                                <div class="custom-control custom-radio custom-control-inline">
                                    <input name="verify" id="radio_0" type="radio" class="custom-control-input"
                                        value="1" required="required">
                                    <label for="radio_0" class="custom-control-label">J’ai lu et
                                        j’accepte les conditions générales d’utilisation et les
                                        conditions générales de vente
                                        Suivant</label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <input type="hidden" name="action" value="facturation">
                            <button name="submit" type="submit" class="mybtn2 btn-facturation">Suivant</button>
                        </div>
                    </form>
                </div>
                <div class="col-md-6 d-flex justify-content-end">
                    <img src="{{ asset('img/facturation.png') }}" alt="facturation">
                </div>
            </div>
        @endif


        <!-- Step 3 -->
        @if ($order->facturer == true && $order->liviser == false)
            <div class="payment_notif">
                <img src="{{ asset('assets/images/fluent_person-question-mark-16-filled.svg') }}" alt="notif" />
                <p>
                    Les informations de facturation ont été envoyées. Veuillez remplir votre Informations de livraison.
                </p>
            </div>

            {{-- Confirm data --}}
            <div id="livraison">
                <hr>
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">Nom du personnage</th>
                            <th scope="col">Serveur</th>
                            <th scope="col">Quantite</th>
                            <th scope="col">Methode de paiement</th>
                            <th scope="col">Discord</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th>{{ $order->game_id }}</th>
                            <td>{{ $server->name }}</td>
                            <td>{{ $pack->quantity . 'M' }}</td>
                            <td>{{ $payment->name }}</td>
                            <td>{{ $order->facturation_discrod }}</td>
                        </tr>

                    </tbody>
                </table>
                <hr>
                <form action="{{ route('frontend.order.details', $order) }}" method="POST">
                    @csrf
                    <input type="hidden" name="action" value="livraison">
                    <button class="confirme-btn" type="submit">Je confirme</button>
                </form>
            </div>
            {{-- Confirm data --}}
        @endif


        <!-- Step 4 -->
        @if ($order->liviser == true && $order->delivered == false)
            <div class="payment_notif">
                <img src="{{ asset('assets/images/fluent_person-question-mark-16-filled.svg') }}" alt="notif" />
                <p>
                    Votre commande est soumise avec succès, veuillez
                    attendre qu'un agent vous livre votre commande
                </p>
            </div>
        @endif



        <!-- Order delevired -->
        @if ($order->delivered == true)
            <div class="payment_notif">
                <img src="{{ asset('assets/images/fluent_person-question-mark-16-filled.svg') }}" alt="notif" />
                <p>
                    Merci d'avoir choisi KAMATRIX, votre commande est terminée avec succès.
                </p>
            </div>
        @endif
        

        <!-- Payment info -->
        <div class="pay-total-info my-5">
            <div class="order-status-infos d-flex full-width">
                <div class="order-number-info">Numéro d'ordre : #KX{{ $order->id }}</div>
                <div class="confirmed-order-info">
                    Soumis à : {{ $order->created_at->format('d-M-Y h:i') }}
                </div>
            </div>
            <!-- Server info -->
            <div class="pay-server-info full-width">
                <div class="server-info">{{ $order->server->name }} {{ $order->pack->quantity }}m for
                    @auth {{ Auth::user()->name }} @endauth</div>
                <div class="server-price" @if (setting('site.currency') != 'euro') style="display: none;" @endif>
                    {{ $order->server->price_euro * $pack->quantity }} EUR</div>
                <div class="server-price" @if (setting('site.currency') != 'usd') style="display: none;" @endif>
                    {{ $order->server->price * $pack->quantity }} USD</div>
                <div class="server-price" @if (setting('site.currency') != 'cad') style="display: none;" @endif>
                    {{ $order->server->price_cad * $pack->quantity }} CAD</div>
            </div>
            @if ($order->bonus > 0)
                <!-- Bonus info -->
                <div class="bonus full-width">
                    <div class="bonus-info">Free Bonus</div>
                    <div class="bonus-price">{{ $order->bonus }} ₭</div>
                </div>
            @endif


        </div>
        <div class="tracking-btn">
            <button class="btn" id="prev" disabled>Retour à paiement</button>
            <button class="btn" id="next">Démarrer une conversation</button>
        </div>
    </div>
</section>
<!-- Play Games Area End -->





<style>
    .step {
        width: 300px;
        height: 50px;
        display: contents;
    }

    .step button {
        background-color: rgb(255, 123, 123);
        font-size: 18px;
        padding: 10px 20px;
        border: none;
        margin-right: 20px;
        border-radius: 25px;
        color: white;
        box-shadow: 0 0 3px #cbcbcb;
    }

    .step button.done {
        background-color: rgb(89, 255, 186);
    }

    input {
        width: 300px;
        height: 40px;
        margin-bottom: 15px;
    }
</style>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js"
    integrity="sha512-aVKKRRi/Q/YV+4mjoKBsE4x3H+BkegoM/em46NNlCqNTmUYADjBbeNefNxYV7giUp0VxICtqdrbqU7iVaeZNXA=="
    crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="//code.tidio.co/ts7glsgswlxah0ixbtcut10v2sb7tnfu.js" async></script>
<script>
    $(document).ready(function() {

        $("button#sendEmailCode").click(function(e) {
            e.preventDefault();

            var route = $(this).data('route');

            var order_id = $(this).data('order_id');

            $.ajax({
                url: route,
                data: {
                    email: $("input#email").val(),
                    order_id: order_id
                },
                success: function(info) {
                    console.log(info);
                }
            });
        })

    });
</script>
<script>
    let popup = document.getElementById("popup");

    function openPopup() {
        popup.classList.add("open-popup");
    }

    function closePopup() {
        popup.classList.remove("open-popup");
    }
</script>
<x-footer />

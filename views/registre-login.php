<?php include '_header.php';?>
<main>
    <!-- loginBlock -->
    <article class="loginBlock hdIsVii d-flex w-100">
        <div class="lbAlignWrap d-flex align-items-center w-100">
            <div class="container py-6">
                <!-- exhiTabList -->
                <ul class="nav nav-tabs justify-content-center exhiTabList exhiTabListIV d-block d-flex mb-9"
                    role="tablist">
                    <li class="nav-item">
                        <a class="nav-link" id="login-tab" data-toggle="tab" href="#login" role="tab"
                            aria-controls="login" aria-selected="true">Login</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" id="register-tab" data-toggle="tab" href="#register" role="tab"
                            aria-controls="register" aria-selected="false">Register</a>
                    </li>
                </ul>
                <div class="row">
                    <div class="col-12 col-md-8 offset-md-2 col-xl-6 offset-xl-3">
                        <div class="extraWrap px-md-12">
                            <!-- tab-content -->
                            <div class="tab-content">
                                <!-- login-tab -->
                                <div class="tab-pane fade " id="login" role="tabpanel" aria-labelledby="login-tab">
                                    <form action="../controllers/userController.php?a=signin" method="POST">
                                        <div class="form-group position-relative mb-3">
                                            <label class="d-block mb-0">
                                                <strong class="d-block font-weight-normal mb-1">Email <span
                                                        class="text-brown">*</span></strong>
                                                <input type="text" name="email" class="form-control formControlMedium d-block w-100">
                                            </label>
                                        </div>
                                        <div class="form-group position-relative mb-3">
                                            <label class="d-block mb-0">
                                                <strong class="d-block font-weight-normal mb-1">Mot de pass <span
                                                        class="text-brown">*</span></strong>
                                                <input type="password" name="mdp"
                                                    class="form-control formControlMedium d-block w-100">
                                            </label>
                                        </div>
                                        <!-- <div class="d-flex align-items-center justify-content-between">
                                            <div class="form-group position-relative mb-3">
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input" id="rm">
                                                    <label class="custom-control-label" for="rm">Remember Me</label>
                                                </div>
                                            </div>
                                            <div class="form-group position-relative mb-3">
                                                <a href="javascript:void(0);"
                                                    class="btnForget textDecorationNone text-secondary">Lost your
                                                    password?</a>
                                            </div>
                                        </div> -->
                                        <div class="btnWrap mt-1">
                                            <input type="submit" class="d-block w-100 btn btn-secondary text-uppercase"
                                                value="login">
                                        </div>
                                    </form>
                                </div>
                                <!-- register-tab -->
                                <div class="tab-pane fade show active" id="register" role="tabpanel"
                                    aria-labelledby="register-tab">
                                    <form action="../controllers/userController.php?a=signup" method="POST" enctype="multipart/form-data">
                                        <div class="form-group position-relative mb-3">
                                            <label class="d-block mb-0">
                                                <strong class="d-block font-weight-normal mb-1">Prénom <span
                                                        class="text-brown">*</span></strong>
                                                <input type="text" name="prenom" class="form-control formControlMedium d-block w-100">
                                            </label>
                                        </div>
                                        <div class="form-group position-relative mb-3">
                                            <label class="d-block mb-0">
                                                <strong class="d-block font-weight-normal mb-1">Nom de famille <span
                                                        class="text-red">*</span></strong>
                                                <input type="text" name="nom" class="form-control formControlMedium d-block w-100">
                                            </label>
                                        </div>
                                        <div class="form-group position-relative mb-3">
                                            <label class="d-block mb-0">
                                                <strong class="d-block font-weight-normal mb-1">Email Address <span
                                                        class="text-brown">*</span></strong>
                                                <input type="email" name="email"
                                                    class="form-control formControlMedium d-block w-100">
                                            </label>
                                        </div>
                                        <div class="form-group position-relative mb-3">
                                            <label class="d-block mb-0">
                                                <strong class="d-block font-weight-normal mb-1">Sexe <span
                                                        class="text-brown">*</span></strong>
                                                    <div class="form-check form-check-inline">
                                                        <input class="form-check-input" type="radio" name="sexe" id="inlineRadio1" value="homme">
                                                        <label class="form-check-label" for="inlineRadio1">homme</label>
                                                    </div>
                                                    <div class="form-check form-check-inline">
                                                        <input class="form-check-input" type="radio" name="sexe" id="inlineRadio2" value="femme">
                                                        <label class="form-check-label" for="inlineRadio2">femme</label>
                                                    </div>
                                            </label>
                                        </div>
                                        <div class="form-group position-relative mb-3">
                                            <label class="d-block mb-0">
                                                <strong class="d-block font-weight-normal mb-1">Password <span
                                                        class="text-brown">*</span></strong>
                                                <input type="password" name="mdp"
                                                    class="form-control formControlMedium d-block w-100">
                                            </label>
                                        </div>
                                        <div class="form-group position-relative mb-3">
                                            <label class="d-block mb-0">
                                                <strong class="d-block font-weight-normal mb-1">Date de naissance <span
                                                        class="text-red">*</span></strong>
                                                <input type="date" name="dateDeNaissance"  class="form-control formControlMedium rounded-sm d-block w-100">
                                            </label>
                                        </div>
                                        <div class="form-group position-relative mb-3">
                                            <label class="d-block mb-0">
                                                <strong class="d-block font-weight-normal mb-1">Pays d'origine <span
                                                        class="text-red">*</span></strong>
                                                <select class="form-control" id="exampleFormControlSelect1" name="pays">
                                                    <option selected >Séléctionnez votre ville
                                                    </option>


                                                    <option value="Afghanistan">Afghanistan </option>
                                                    <option value="Afrique_Centrale">Afrique_Centrale </option>
                                                    <option value="Afrique_du_sud">Afrique_du_Sud </option>
                                                    <option value="Albanie">Albanie </option>
                                                    <option value="Algerie">Algerie </option>
                                                    <option value="Allemagne">Allemagne </option>
                                                    <option value="Andorre">Andorre </option>
                                                    <option value="Angola">Angola </option>
                                                    <option value="Anguilla">Anguilla </option>
                                                    <option value="Arabie_Saoudite">Arabie_Saoudite </option>
                                                    <option value="Argentine">Argentine </option>
                                                    <option value="Armenie">Armenie </option>
                                                    <option value="Australie">Australie </option>
                                                    <option value="Autriche">Autriche </option>
                                                    <option value="Azerbaidjan">Azerbaidjan </option>

                                                    <option value="Bahamas">Bahamas </option>
                                                    <option value="Bangladesh">Bangladesh </option>
                                                    <option value="Barbade">Barbade </option>
                                                    <option value="Bahrein">Bahrein </option>
                                                    <option value="Belgique">Belgique </option>
                                                    <option value="Belize">Belize </option>
                                                    <option value="Benin">Benin </option>
                                                    <option value="Bermudes">Bermudes </option>
                                                    <option value="Bielorussie">Bielorussie </option>
                                                    <option value="Bolivie">Bolivie </option>
                                                    <option value="Botswana">Botswana </option>
                                                    <option value="Bhoutan">Bhoutan </option>
                                                    <option value="Boznie_Herzegovine">Boznie_Herzegovine </option>
                                                    <option value="Bresil">Bresil </option>
                                                    <option value="Brunei">Brunei </option>
                                                    <option value="Bulgarie">Bulgarie </option>
                                                    <option value="Burkina_Faso">Burkina_Faso </option>
                                                    <option value="Burundi">Burundi </option>

                                                    <option value="Caiman">Caiman </option>
                                                    <option value="Cambodge">Cambodge </option>
                                                    <option value="Cameroun">Cameroun </option>
                                                    <option value="Canada">Canada </option>
                                                    <option value="Canaries">Canaries </option>
                                                    <option value="Cap_vert">Cap_Vert </option>
                                                    <option value="Chili">Chili </option>
                                                    <option value="Chine">Chine </option>
                                                    <option value="Chypre">Chypre </option>
                                                    <option value="Colombie">Colombie </option>
                                                    <option value="Comores">Colombie </option>
                                                    <option value="Congo">Congo </option>
                                                    <option value="Congo_democratique">Congo_democratique </option>
                                                    <option value="Cook">Cook </option>
                                                    <option value="Coree_du_Nord">Coree_du_Nord </option>
                                                    <option value="Coree_du_Sud">Coree_du_Sud </option>
                                                    <option value="Costa_Rica">Costa_Rica </option>
                                                    <option value="Cote_d_Ivoire">Côte_d_Ivoire </option>
                                                    <option value="Croatie">Croatie </option>
                                                    <option value="Cuba">Cuba </option>

                                                    <option value="Danemark">Danemark </option>
                                                    <option value="Djibouti">Djibouti </option>
                                                    <option value="Dominique">Dominique </option>

                                                    <option value="Egypte">Egypte </option>
                                                    <option value="Emirats_Arabes_Unis">Emirats_Arabes_Unis </option>
                                                    <option value="Equateur">Equateur </option>
                                                    <option value="Erythree">Erythree </option>
                                                    <option value="Espagne">Espagne </option>
                                                    <option value="Estonie">Estonie </option>
                                                    <option value="Etats_Unis">Etats_Unis </option>
                                                    <option value="Ethiopie">Ethiopie </option>

                                                    <option value="Falkland">Falkland </option>
                                                    <option value="Feroe">Feroe </option>
                                                    <option value="Fidji">Fidji </option>
                                                    <option value="Finlande">Finlande </option>
                                                    <option value="France">France </option>

                                                    <option value="Gabon">Gabon </option>
                                                    <option value="Gambie">Gambie </option>
                                                    <option value="Georgie">Georgie </option>
                                                    <option value="Ghana">Ghana </option>
                                                    <option value="Gibraltar">Gibraltar </option>
                                                    <option value="Grece">Grece </option>
                                                    <option value="Grenade">Grenade </option>
                                                    <option value="Groenland">Groenland </option>
                                                    <option value="Guadeloupe">Guadeloupe </option>
                                                    <option value="Guam">Guam </option>
                                                    <option value="Guatemala">Guatemala</option>
                                                    <option value="Guernesey">Guernesey </option>
                                                    <option value="Guinee">Guinee </option>
                                                    <option value="Guinee_Bissau">Guinee_Bissau </option>
                                                    <option value="Guinee equatoriale">Guinee_Equatoriale </option>
                                                    <option value="Guyana">Guyana </option>
                                                    <option value="Guyane_Francaise ">Guyane_Francaise </option>

                                                    <option value="Haiti">Haiti </option>
                                                    <option value="Hawaii">Hawaii </option>
                                                    <option value="Honduras">Honduras </option>
                                                    <option value="Hong_Kong">Hong_Kong </option>
                                                    <option value="Hongrie">Hongrie </option>

                                                    <option value="Inde">Inde </option>
                                                    <option value="Indonesie">Indonesie </option>
                                                    <option value="Iran">Iran </option>
                                                    <option value="Iraq">Iraq </option>
                                                    <option value="Irlande">Irlande </option>
                                                    <option value="Islande">Islande </option>
                                                    <option value="Israel">Israel </option>
                                                    <option value="Italie">italie </option>

                                                    <option value="Jamaique">Jamaique </option>
                                                    <option value="Jan Mayen">Jan Mayen </option>
                                                    <option value="Japon">Japon </option>
                                                    <option value="Jersey">Jersey </option>
                                                    <option value="Jordanie">Jordanie </option>

                                                    <option value="Kazakhstan">Kazakhstan </option>
                                                    <option value="Kenya">Kenya </option>
                                                    <option value="Kirghizstan">Kirghizistan </option>
                                                    <option value="Kiribati">Kiribati </option>
                                                    <option value="Koweit">Koweit </option>

                                                    <option value="Laos">Laos </option>
                                                    <option value="Lesotho">Lesotho </option>
                                                    <option value="Lettonie">Lettonie </option>
                                                    <option value="Liban">Liban </option>
                                                    <option value="Liberia">Liberia </option>
                                                    <option value="Liechtenstein">Liechtenstein </option>
                                                    <option value="Lituanie">Lituanie </option>
                                                    <option value="Luxembourg">Luxembourg </option>
                                                    <option value="Lybie">Lybie </option>

                                                    <option value="Macao">Macao </option>
                                                    <option value="Macedoine">Macedoine </option>
                                                    <option value="Madagascar">Madagascar </option>
                                                    <option value="Madère">Madère </option>
                                                    <option value="Malaisie">Malaisie </option>
                                                    <option value="Malawi">Malawi </option>
                                                    <option value="Maldives">Maldives </option>
                                                    <option value="Mali">Mali </option>
                                                    <option value="Malte">Malte </option>
                                                    <option value="Man">Man </option>
                                                    <option value="Mariannes du Nord">Mariannes du Nord </option>
                                                    <option value="Maroc">Maroc </option>
                                                    <option value="Marshall">Marshall </option>
                                                    <option value="Martinique">Martinique </option>
                                                    <option value="Maurice">Maurice </option>
                                                    <option value="Mauritanie">Mauritanie </option>
                                                    <option value="Mayotte">Mayotte </option>
                                                    <option value="Mexique">Mexique </option>
                                                    <option value="Micronesie">Micronesie </option>
                                                    <option value="Midway">Midway </option>
                                                    <option value="Moldavie">Moldavie </option>
                                                    <option value="Monaco">Monaco </option>
                                                    <option value="Mongolie">Mongolie </option>
                                                    <option value="Montserrat">Montserrat </option>
                                                    <option value="Mozambique">Mozambique </option>

                                                    <option value="Namibie">Namibie </option>
                                                    <option value="Nauru">Nauru </option>
                                                    <option value="Nepal">Nepal </option>
                                                    <option value="Nicaragua">Nicaragua </option>
                                                    <option value="Niger">Niger </option>
                                                    <option value="Nigeria">Nigeria </option>
                                                    <option value="Niue">Niue </option>
                                                    <option value="Norfolk">Norfolk </option>
                                                    <option value="Norvege">Norvege </option>
                                                    <option value="Nouvelle_Caledonie">Nouvelle_Caledonie </option>
                                                    <option value="Nouvelle_Zelande">Nouvelle_Zelande </option>

                                                    <option value="Oman">Oman </option>
                                                    <option value="Ouganda">Ouganda </option>
                                                    <option value="Ouzbekistan">Ouzbekistan </option>

                                                    <option value="Pakistan">Pakistan </option>
                                                    <option value="Palau">Palau </option>
                                                    <option value="Palestine">Palestine </option>
                                                    <option value="Panama">Panama </option>
                                                    <option value="Papouasie_Nouvelle_Guinee">Papouasie_Nouvelle_Guinee
                                                    </option>
                                                    <option value="Paraguay">Paraguay </option>
                                                    <option value="Pays_Bas">Pays_Bas </option>
                                                    <option value="Perou">Perou </option>
                                                    <option value="Philippines">Philippines </option>
                                                    <option value="Pologne">Pologne </option>
                                                    <option value="Polynesie">Polynesie </option>
                                                    <option value="Porto_Rico">Porto_Rico </option>
                                                    <option value="Portugal">Portugal </option>

                                                    <option value="Qatar">Qatar </option>

                                                    <option value="Republique_Dominicaine">Republique_Dominicaine
                                                    </option>
                                                    <option value="Republique_Tcheque">Republique_Tcheque </option>
                                                    <option value="Reunion">Reunion </option>
                                                    <option value="Roumanie">Roumanie </option>
                                                    <option value="Royaume_Uni">Royaume_Uni </option>
                                                    <option value="Russie">Russie </option>
                                                    <option value="Rwanda">Rwanda </option>

                                                    <option value="Sahara Occidental">Sahara Occidental </option>
                                                    <option value="Sainte_Lucie">Sainte_Lucie </option>
                                                    <option value="Saint_Marin">Saint_Marin </option>
                                                    <option value="Salomon">Salomon </option>
                                                    <option value="Salvador">Salvador </option>
                                                    <option value="Samoa_Occidentales">Samoa_Occidentales</option>
                                                    <option value="Samoa_Americaine">Samoa_Americaine </option>
                                                    <option value="Sao_Tome_et_Principe">Sao_Tome_et_Principe </option>
                                                    <option value="Senegal">Senegal </option>
                                                    <option value="Seychelles">Seychelles </option>
                                                    <option value="Sierra Leone">Sierra Leone </option>
                                                    <option value="Singapour">Singapour </option>
                                                    <option value="Slovaquie">Slovaquie </option>
                                                    <option value="Slovenie">Slovenie</option>
                                                    <option value="Somalie">Somalie </option>
                                                    <option value="Soudan">Soudan </option>
                                                    <option value="Sri_Lanka">Sri_Lanka </option>
                                                    <option value="Suede">Suede </option>
                                                    <option value="Suisse">Suisse </option>
                                                    <option value="Surinam">Surinam </option>
                                                    <option value="Swaziland">Swaziland </option>
                                                    <option value="Syrie">Syrie </option>

                                                    <option value="Tadjikistan">Tadjikistan </option>
                                                    <option value="Taiwan">Taiwan </option>
                                                    <option value="Tonga">Tonga </option>
                                                    <option value="Tanzanie">Tanzanie </option>
                                                    <option value="Tchad">Tchad </option>
                                                    <option value="Thailande">Thailande </option>
                                                    <option value="Tibet">Tibet </option>
                                                    <option value="Timor_Oriental">Timor_Oriental </option>
                                                    <option value="Togo">Togo </option>
                                                    <option value="Trinite_et_Tobago">Trinite_et_Tobago </option>
                                                    <option value="Tristan da cunha">Tristan de cuncha </option>
                                                    <option value="Tunisie">Tunisie </option>
                                                    <option value="Turkmenistan">Turmenistan </option>
                                                    <option value="Turquie">Turquie </option>

                                                    <option value="Ukraine">Ukraine </option>
                                                    <option value="Uruguay">Uruguay </option>

                                                    <option value="Vanuatu">Vanuatu </option>
                                                    <option value="Vatican">Vatican </option>
                                                    <option value="Venezuela">Venezuela </option>
                                                    <option value="Vierges_Americaines">Vierges_Americaines </option>
                                                    <option value="Vierges_Britanniques">Vierges_Britanniques </option>
                                                    <option value="Vietnam">Vietnam </option>

                                                    <option value="Wake">Wake </option>
                                                    <option value="Wallis et Futuma">Wallis et Futuma </option>

                                                    <option value="Yemen">Yemen </option>
                                                    <option value="Yougoslavie">Yougoslavie </option>

                                                    <option value="Zambie">Zambie </option>
                                                    <option value="Zimbabwe">Zimbabwe </option>

                                                </select>
                                            </label>
                                        </div>
                                        <div class="col-12 col-sm-6 px-2">
										<div class="form-group position-relative mb-2">
											<label class="d-block">
												<strong class="font-weight-normal d-block mb-1">Image<span class="text-brown">*</span></strong>
												<input type="file" name="img" class="form-control formControlMedium rounded-sm d-block w-100">
											</label>
										</div>
									</div>
                                        <div class="form-check">
                                            <input class="form-check-input" value="client" checked type="radio" name="typecompte"
                                                id="client">
                                            <label class="form-check-label" for="client">
                                                Je suis un client
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="typecompte"
                                                id="artiste" value="artiste" data-toggle="collapse"
                                                href="#multiCollapseExample1" role="button" aria-expanded="false"
                                                aria-controls="multiCollapseExample1">
                                            <label class="form-check-label" for="artiste">
                                                Je suis un artiste
                                            </label>
                                        </div>

                                        <div class="row">
                                            <div class="col-12 md-12">
                                                <div class="collapse multi-collapse" id="multiCollapseExample1">
                                                <table>
                                                    <tr>
                                                        <td>Artiste  Interne</td>
                                                        <td> <input type="checkbox" name="atype[]" value="interne"></td>
                                                        <td>Artiste Donateur</td>
                                                        <td>  <input type="checkbox" name="atype[]" value="donateur"></td>

                                                
                                                    </tr>
                                                    </table>
                                                    <div class="card card-body">
                                                        <strong class="d-block font-weight-normal mb-1">Catégorie <span
                                                                class="text-brown">*</span></strong>
                                                        <div class="form-check">
                                                            <input type="checkbox" value="3" name="cat[]" class="form-check-input"
                                                                id="Photographie">
                                                            <label class="form-check-label"
                                                                for="Photographie">Photographie</label>
                                                        </div>
                                                        <div class="form-check">
                                                            <input type="checkbox" value="1" name="cat[]" class="form-check-input"
                                                                id="Peinture">
                                                            <label class="form-check-label"
                                                                for="Peinture">Peinture</label>
                                                        </div>
                                                        <div class="form-check">
                                                            <input type="checkbox" value="2" name="cat[]" class="form-check-input"
                                                                id="Sculpture">
                                                            <label class="form-check-label"
                                                                for="Sculpture">Sculpture</label>
                                                        </div>
                                                        <div class="form-check">
                                                            <input type="checkbox" value="5" name="cat[]" class="form-check-input" id="Dessin">
                                                            <label class="form-check-label" for="Dessin">Dessinateur</label>
                                                        </div>
                                                        <div class="form-check">
                                                            <input type="checkbox" value="4" name="cat[]" class="form-check-input"
                                                                id="Édition">
                                                            <label class="form-check-label"
                                                                for="Édition">Édition</label>
                                                        </div>
                                    
                                                        <div class="form-group position-relative mb-3">
                                                            <label class="d-block mb-0">
                                                                <strong
                                                                    class="d-block font-weight-normal mb-1">Biographie
                                                                    de l'artiste <span
                                                                        class="text-red">*</span></strong>
                                                                        <textarea class="form-control" name="biographie" id="exampleFormControlTextarea1" rows="6"></textarea>
                                                            </label>
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="exampleFormControlSelect1">Formation</label>
                                                            <select name="ecole" class="form-control" id="exampleFormControlSelect1">
                                                                <option value="1">Lauréat INBA Tétouan</option>
                                                                <option value="2">Lauréat ESBA Casablanca</option>
                                                                <option value="3">Autodidacte</option>
                                                                <option value="4">Formation 04</option>
                                                            </select>
                                                        </div>
                                                            
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                        <div class="btnWrap mt-5">
                                            <input type="submit" class="d-block w-100 btn btn-secondary text-uppercase"
                                                value="register">
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </article>
</main>
<?php include '_footer.php';?>




<form id="main_form" onsubmit="form_submit_validation();" action="#" method="post">
            <label style="font-size: 23px;" class="form-label"> <?php echo $lang_data['home_form_head_text'] ?> </label>
            <div class="mb-3">
                <label for="Passport_number" class="form-label"> <?php echo $lang_data['home_form_input_lable_1'] ?> </label>
                <input name="Passport_number" type="text" class="form-control" id="Passport_number" aria-describedby="emailHelp">
            </div>
            <!--  -->
            <div class="mb-3">
                <label for="Request_Number" class="form-label"> <?php echo $lang_data['home_form_input_lable_2'] ?> </label>
                <input name="Request_Number" type="text" class="form-control" id="Request_Number">
            </div>
            <!--  -->
            <div class="mb-3">
                <label for="Country" class="form-label"> <?php echo $lang_data['home_form_input_lable_3'] ?> </label>
                <!-- <input  type="text" class="form-control" id="Country"> -->
                <select name="Country" id="Country" class="form-control">
                    <option value="Antartida">Antartida</option>
                    <option value="Afganistan">Afganistan</option>
                    <option value="Albania">Albania</option>
                    <option value="Alemania">Alemania</option>
                    <option value="Andorra">Andorra</option>
                    <option value="Angola">Angola</option>
                    <option value="Antigua y Barbuda">Antigua y Barbuda</option>
                    <option value="Antillas Holandesas">Antillas Holandesas</option>
                    <option value="Apatridas, Asilados y Refugiados">Apatridas, Asilados y Refugiados</option>
                    <option value="Arabia Saudita">Arabia Saudita</option>
                    <option value="Argelia">Argelia</option>
                    <option value="Argentina">Argentina</option>
                    <option value="Armenia">Armenia</option>
                    <option value="Australia">Australia</option>
                    <option value="Austria">Austria</option>
                    <option value="Azerbaiyan">Azerbaiyan</option>
                    <option value="Belarus">Belarus</option>
                    <option value="Bahamas">Bahamas</option>
                    <option value="Bahrein">Bahrein</option>
                    <option value="Bangladesh">Bangladesh</option>
                    <option value="Barbados">Barbados</option>
                    <option value="Belgica">Belgica</option>
                    <option value="Belice">Belice</option>
                    <option value="Benin">Benin</option>
                    <option value="Bermuda">Bermuda</option>
                    <option value="Bhutan">Bhutan</option>
                    <option value="Bolivia">Bolivia</option>
                    <option value="Bosnia  y Herzegovina">Bosnia  y Herzegovina</option>
                    <option value="Botswana">Botswana</option>
                    <option value="Brasil">Brasil</option>
                    <option value="Brunei">Brunei</option>
                    <option value="Bulgaria">Bulgaria</option>
                    <option value="Burkina Faso">Burkina Faso</option>
                    <option value="Burundi">Burundi</option>
                    <option value="CROACIA">CROACIA</option>
                    <option value="Cabo Verde">Cabo Verde</option>
                    <option value="Camboya">Camboya</option>
                    <option value="Camerun">Camerun</option>
                    <option value="Canada">Canada</option>
                    <option value="Chad">Chad</option>
                    <option value="Chile">Chile</option>
                    <option value="China">China</option>
                    <option value="China - Hong Kong">China - Hong Kong</option>
                    <option value="China - Macao">China - Macao</option>
                    <option value="Chipre">Chipre</option>
                    <option value="Colombia">Colombia</option>
                    <option value="Congo(Brazzaville)">Congo(Brazzaville)</option>
                    <option value="Corea Del Norte">Corea Del Norte</option>
                    <option value="Corea Del Sur">Corea Del Sur</option>
                    <option value="Costa De Marfil">Costa De Marfil</option>
                    <option value="Costa Rica">Costa Rica</option>
                    <option value="Cuba">Cuba</option>
                    <option value="Dinamarca">Dinamarca</option>
                    <option value="Djibouti">Djibouti</option>
                    <option value="Dominica">Dominica</option>
                    <option value="ESUATINI">ESUATINI</option>
                    <option value="ETIOPIA">ETIOPIA</option>
                    <option value="Ecuador">Ecuador</option>
                    <option value="Egipto">Egipto</option>
                    <option value="El Salvador">El Salvador</option>
                    <option value="Emiratos Arabes Unidos">Emiratos Arabes Unidos</option>
                    <option value="Eritrea">Eritrea</option>
                    <option value="Eslovaquia">Eslovaquia</option>
                    <option value="Eslovenia">Eslovenia</option>
                    <option value="Espa&#241;a">Espa&#241;a</option>
                    <option value="Estados Unidos de America">Estados Unidos de America</option>
                    <option value="Estonia">Estonia</option>
                    <option value="Federaci&#243;n Rusa">Federaci&#243;n Rusa</option>
                    <option value="Fiji">Fiji</option>
                    <option value="Filipinas">Filipinas</option>
                    <option value="Finlandia">Finlandia</option>
                    <option value="Francia">Francia</option>
                    <option value="GUYANA">GUYANA</option>
                    <option value="Gabon">Gabon</option>
                    <option value="Gambia">Gambia</option>
                    <option value="Georgia">Georgia</option>
                    <option value="Ghana">Ghana</option>
                    <option value="Granada">Granada</option>
                    <option value="Grecia">Grecia</option>
                    <option value="Groenlandia">Groenlandia</option>
                    <option value="Guadalupe">Guadalupe</option>
                    <option value="Guatemala">Guatemala</option>
                    <option value="Guayana Francesa">Guayana Francesa</option>
                    <option value="Guinea">Guinea</option>
                    <option value="Guinea Bissau">Guinea Bissau</option>
                    <option value="Guinea Ecuatorial">Guinea Ecuatorial</option>
                    <option value="Haiti">Haiti</option>
                    <option value="Honduras">Honduras</option>
                    <option value="Hungria">Hungria</option>
                    <option value="ISLAS COOK">ISLAS COOK</option>
                    <option value="India">India</option>
                    <option value="Indonesia">Indonesia</option>
                    <option value="Inglaterra">Inglaterra</option>
                    <option value="Iran">Iran</option>
                    <option value="Iraq">Iraq</option>
                    <option value="Irlanda">Irlanda</option>
                    <option value="Isla Caiman">Isla Caiman</option>
                    <option value="Isla Johnston">Isla Johnston</option>
                    <option value="Isla Niue">Isla Niue</option>
                    <option value="Isla Wake">Isla Wake</option>
                    <option value="Islandia">Islandia</option>
                    <option value="Islas Caiman">Islas Caiman</option>
                    <option value="Islas Comoras">Islas Comoras</option>
                    <option value="Islas Feroe">Islas Feroe</option>
                    <option value="Islas Marshall">Islas Marshall</option>
                    <option value="Islas Salomon Britan.">Islas Salomon Britan.</option>
                    <option value="Islas Turcas Y Caico">Islas Turcas Y Caico</option>
                    <option value="Islas Virgenes Britan.">Islas Virgenes Britan.</option>
                    <option value="Israel">Israel</option>
                    <option value="Italia">Italia</option>
                    <option value="Jamaica">Jamaica</option>
                    <option value="Japon">Japon</option>
                    <option value="Jordania">Jordania</option>
                    <option value="KOSOVO">KOSOVO</option>
                    <option value="Kazajstan">Kazajstan</option>
                    <option value="Kenia">Kenia</option>
                    <option value="Kirguistan">Kirguistan</option>
                    <option value="Kiribati">Kiribati</option>
                    <option value="Kuwait">Kuwait</option>
                    <option value="Laos">Laos</option>
                    <option value="Lesotho">Lesotho</option>
                    <option value="Letonia (Latvia)">Letonia (Latvia)</option>
                    <option value="Libano">Libano</option>
                    <option value="Liberia">Liberia</option>
                    <option value="Libia">Libia</option>
                    <option value="Liechtenstein">Liechtenstein</option>
                    <option value="Lituania">Lituania</option>
                    <option value="Luxemburgo">Luxemburgo</option>
                    <option value="MACEDONIA">MACEDONIA</option>
                    <option value="Macedonia del Norte">Macedonia del Norte</option>
                    <option value="MICRONESIA">MICRONESIA</option>
                    <option value="Macao">Macao</option>
                    <option value="Madagascar">Madagascar</option>
                    <option value="Malasia">Malasia</option>
                    <option value="Malawi">Malawi</option>
                    <option value="Maldivas">Maldivas</option>
                    <option value="Mali">Mali</option>
                    <option value="Malta">Malta</option>
                    <option value="Marruecos">Marruecos</option>
                    <option value="Martinica">Martinica</option>
                    <option value="Mauricio">Mauricio</option>
                    <option value="Mauritania">Mauritania</option>
                    <option value="Mexico">Mexico</option>
                    <option value="Moldova">Moldova</option>
                    <option value="Monaco">Monaco</option>
                    <option value="Mongolia">Mongolia</option>
                    <option value="Montenegro">Montenegro</option>
                    <option value="Mozambique">Mozambique</option>
                    <option value="Myanmar (ex-Birmania)">Myanmar (ex-Birmania)</option>
                    <option value="NO ESPECIFICADO">NO ESPECIFICADO</option>
                    <option value="Naciones Unidas">Naciones Unidas</option>
                    <option value="Namibia">Namibia</option>
                    <option value="Nauru">Nauru</option>
                    <option value="Nepal">Nepal</option>
                    <option value="Nicaragua">Nicaragua</option>
                    <option value="Niger">Niger</option>
                    <option value="Nigeria">Nigeria</option>
                    <option value="No definido">No definido</option>
                    <option value="Noruega">Noruega</option>
                    <option value="Nueva Caledonia">Nueva Caledonia</option>
                    <option value="Nueva Zelandia">Nueva Zelandia</option>
                    <option value="Oman">Oman</option>
                    <option value="Organizacion Estados Americanos">Organizacion Estados Americanos</option>
                    <option value="Paises Bajos(Holanda)">Paises Bajos(Holanda)</option>
                    <option value="Pakistan">Pakistan</option>
                    <option value="Palau">Palau</option>
                    <option value="Palestina">Palestina</option>
                    <option value="Panam&#225;">Panam&#225;</option>
                    <option value="Papua Nueva Guinea">Papua Nueva Guinea</option>
                    <option value="Paraguay">Paraguay</option>
                    <option value="Peru">Peru</option>
                    <option value="Polinesia Francesa">Polinesia Francesa</option>
                    <option value="Polonia">Polonia</option>
                    <option value="Portugal">Portugal</option>
                    <option value="Puerto Rico">Puerto Rico</option>
                    <option value="Qatar">Qatar</option>
                    <option value="Reino Unido">Reino Unido</option>
                    <option value="Rep. Centro Africana">Rep. Centro Africana</option>
                    <option value="Rep. Checa">Rep. Checa</option>
                    <option value="Rep. Dem. Del Congo (Ex-Zaire)">Rep. Dem. Del Congo (Ex-Zaire)</option>
                    <option value="Rep. Dominicana">Rep. Dominicana</option>
                    <option value="Reuni&#243;n">Reuni&#243;n</option>
                    <option value="Rumania">Rumania</option>
                    <option value="Rwanda">Rwanda</option>
                    <option value="SIN ESPECIFICAR">SIN ESPECIFICAR</option>
                    <option value="SIRIA">SIRIA</option>
                    <option value="SUDAN DEL SUR">SUDAN DEL SUR</option>
                    <option value="SURINAME">SURINAME</option>
                    <option value="Sahara Occidental">Sahara Occidental</option>
                    <option value="Samoa Occidental">Samoa Occidental</option>
                    <option value="San Cristobal y Nevis">San Cristobal y Nevis</option>
                    <option value="San Marino">San Marino</option>
                    <option value="San Vicente y Granadina">San Vicente y Granadina</option>
                    <option value="Santa Lucia">Santa Lucia</option>
                    <option value="Santa Sede">Santa Sede</option>
                    <option value="Santo Tome y Principe">Santo Tome y Principe</option>
                    <option value="Senegal">Senegal</option>
                    <option value="Serbia">Serbia</option>
                    <option value="Seychelles">Seychelles</option>
                    <option value="Sierra Leona">Sierra Leona</option>
                    <option value="Singapur">Singapur</option>
                    <option value="Somalia">Somalia</option>
                    <option value="Sri Lanka">Sri Lanka</option>
                    <option value="Sudafrica">Sudafrica</option>
                    <option value="Sudan">Sudan</option>
                    <option value="Suecia">Suecia</option>
                    <option value="Suiza">Suiza</option>
                    <option value="Swazilandia">Swazilandia</option>
                    <option value="TAHITI">TAHITI</option>
                    <option value="Tailandia">Tailandia</option>
                    <option value="Taiwan">Taiwan</option>
                    <option value="Tanzania, Rep&#250;blica Unida">Tanzania, Rep&#250;blica Unida</option>
                    <option value="Tayikistan">Tayikistan</option>
                    <option value="Timor Oriental">Timor Oriental</option>
                    <option value="Togo">Togo</option>
                    <option value="Tonga">Tonga</option>
                    <option value="Trinidad y Tobago">Trinidad y Tobago</option>
                    <option value="Tunez (tunisia)">Tunez (tunisia)</option>
                    <option value="Turkmenistan">Turkmenistan</option>
                    <option value="Turquia">Turquia</option>
                    <option value="Tuvalu">Tuvalu</option>
                    <option value="Ucrania">Ucrania</option>
                    <option value="Uganda">Uganda</option>
                    <option value="Union Europea">Union Europea</option>
                    <option value="Uruguay">Uruguay</option>
                    <option value="Uzbekistan">Uzbekistan</option>
                    <option value="Vanuatu">Vanuatu</option>
                    <option value="Vaticano (ciudad Del Vaticano)">Vaticano (ciudad Del Vaticano)</option>
                    <option value="Venezuela">Venezuela</option>
                    <option value="Vietnam">Vietnam</option>
                    <option value="Yemen">Yemen</option>
                    <option value="ZIMBABWE">ZIMBABWE</option>
                    <option value="Zambia">Zambia</option>
            
                </select>
            </div>
            <!--  -->
            <div id="captcha_div" class="mb-3">
                
                <div class="captha_show">
                    <p id="captcha_out_put">
                        <span id="captcha_show_box"></span>
                        <span class="captha_hidw_copy"></span>
                    </p>
                    <div onclick="captcha_refresh()">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20px" height="20px" viewBox="0 0 512 512"><!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.--><path d="M463.5 224H472c13.3 0 24-10.7 24-24V72c0-9.7-5.8-18.5-14.8-22.2s-19.3-1.7-26.2 5.2L413.4 96.6c-87.6-86.5-228.7-86.2-315.8 1c-87.5 87.5-87.5 229.3 0 316.8s229.3 87.5 316.8 0c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0c-62.5 62.5-163.8 62.5-226.3 0s-62.5-163.8 0-226.3c62.2-62.2 162.7-62.5 225.3-1L327 183c-6.9 6.9-8.9 17.2-5.2 26.2s12.5 14.8 22.2 14.8H463.5z"/></svg>
                    </div>
                </div>
                <input id="user_input_captcha" type="text" class="form-control">
            </div>
            <!--  -->
            <label for=""> <?php echo $lang_data['home_form_input_lable_4'] ?> </label>
            <!--  -->
            
            <button style="margin-top: 5px;" type="submit" class="btn btn-primary"> <?php echo $lang_data['home_form_submit_btn_search'] ?> </button>
          </form>
          <style>
            #captcha_out_put{
                background-image: url("http://localhost/passport%20validation%20system/asset/img/background%201.jpg");
                background-repeat: no-repeat;
                background-position: center center;
                z-index: 1;
            }
          </style>
<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">

				<div class="login100-pic js-tilt" data-tilt>
					<img src="<?php echo $candidat->picture; ?>" alt="IMG" />
				</div>

				<form class="login100-form" enctype="multipart/form-data" method="post">
				<?php
				if(isset($_POST['update']))
				{
					
					$candidat=new Candidat($_SESSION['id'],$_POST['nationality'],$_POST['first_name'],$_POST['last_name'],$_POST['email'],$_POST['password'],$candidat->picture,$_POST['job_type'],$_POST['phone'],$_POST['details']);
					
					if(isset($_FILES['picture']))
					{
					if(is_uploaded_file($_FILES['picture']['tmp_name'])){
					$ext=substr($_FILES["picture"]["name"],-3);
					$path="assets/img/candidats/".md5($_FILES['picture']['name']).rand(150,9999).".$ext";
					move_uploaded_file($_FILES['picture']['tmp_name'],$path);
                    $candidat->picture=$path;
					}
					}
                    $candidat->update($conn);
					msg("success","profile successfully modified");
				}
				else
				echo'<span class="login100-form-title">Your profil</span>';
				?>

					<div class="wrap-input100 validate-input" >
							  <select type="text" name="nationality" class="input100"  placeholder="Nationality">
								  <option><?php echo $candidat->nationality; ?></option>
								  <option>Afghanistan</option>
								  <option>Åland Islands</option>
								  <option>Albanie</option>
								  <option>Algérie</option>
								  <option>Samoa</option>
								  <option>Andorre</option>
								  <option value="AGO">Angola</option>
								  <option value="AIA">Anguilla</option>
								  <option value="ATA">Antarctique</option>
								  <option value="ATG">Antigua et Barbuda</option>
								  <option value="ARG">Argentine</option>
								  <option value="ARM">Arménie</option>
								  <option value="ABW">Aruba</option>
								  <option value="AUS">Australie</option>
								  <option value="AUT">Autriche</option>
								  <option value="AZE">Azerbaïdjan</option>
								  <option value="BHS">Bahamas</option>
								  <option value="BHR">Bahrain</option>
								  <option value="BGD">Bangladesh</option>
								  <option value="BRB">Barbade</option>
								  <option value="BLR">Belarus</option>
								  <option value="BEL">Belgique</option>
								  <option value="BLZ">Belize</option>
								  <option value="BEN">Bénin</option>
								  <option value="BMU">Bermuda</option>
								  <option value="BTN">Bhutan</option>
								  <option value="BOL">Bolivie</option>
								  <option value="BES">Bonaire, Saint-Eustache et Saba</option>
								  <option value="BIH">Bosnie-Herzégovine</option>
								  <option value="BWA">Botswana</option>
								  <option value="BVT">Île Bouvet</option>
								  <option value="BRA">Brésil</option>
								  <option value="IOT">Territoire britannique de l'océan Indien</option>
								  <option value="BRN">Brunéi Darussalam</option>
								  <option value="BGR">Bulgarie</option>
								  <option value="BFA">Burkina Faso</option>
								  <option value="BDI">Burundi</option>
								  <option value="KHM">Cambodge</option>
								  <option value="CMR">Cameroun</option>
								  <option value="CAN">Canada</option>
								  <option value="CPV">Cap-Vert</option>
								  <option value="CYM">Îles Caïmans</option>
								  <option value="CAF">République centrafricaine</option>
								  <option value="TCD">Tchad</option>
								  <option value="CHL">Chili</option>
								  <option value="CHN">Chine</option>
								  <option value="CXR">Île Christmas</option>
								  <option value="CCK">Îles Cocos (Keeling)</option>
								  <option value="COL">Colombie</option>
								  <option value="COM">Comores</option>
								  <option value="COG">Congo</option>
								  <option value="COD">Congo, République démocratique du Congo</option>
								  <option value="COK">Îles Cook</option>
								  <option value="CRI">Costa Rica</option>
								  <option value="CIV">Côte d'Ivoire</option>
								  <option value="HRV">Croatie</option>
								  <option value="CUB">Cuba</option>
								  <option value="CUW">Curaçao</option>
								  <option value="CYP">Chypre</option>
								  <option value="CZE">République tchèque</option>
								  <option value="DNK">Danemark</option>
								  <option value="DJI">Djibouti</option>
								  <option value="DMA">Dominique</option>
								  <option value="DOM">République dominicaine</option>
								  <option value="ECU">Équateur</option>
								  <option value="EGY">Égypte</option>
								  <option value="SLV">El Salvador</option>
								  <option value="GNQ">Guinée équatoriale</option>
								  <option value="ERI">Érythrée</option>
								  <option value="EST">Estonie</option>
								  <option value="ETH">Éthiopie</option>
								  <option value="FLK">Îles Falkland (Malvinas)</option>
								  <option value="FRO">Îles Féroé</option>
								  <option value="FJI">Fidji</option>
								  <option value="FIN">Finlande</option>
								  <option value="FRA">France</option>
								  <option value="GUF">Guyane française</option>
								  <option value="PYF">Polynésie française</option>
								  <option value="ATF">Terres australes françaises</option>
								  <option value="GAB">Gabon</option>
								  <option value="GMB">Gambie</option>
								  <option value="GEO">Géorgie</option>
								  <option value="DEU">Allemagne</option>
								  <option value="GHA">Ghana</option>
								  <option value="GIB">Gibraltar</option>
								  <option value="GRC">Grèce</option>
								  <option value="GRL">Groenland</option>
								  <option value="GRD">Grenade</option>
								  <option value="GLP">Guadeloupe</option>
								  <option value="GUM">Guam</option>
								  <option value="GTM">Guatemala</option>
								  <option value="GGY">Guernesey</option>
								  <option value="GIN">Guinée</option>
								  <option value="GNB">Guinée-Bissau</option>
								  <option value="GUY">Guyane</option>
								  <option value="HTI">Haïti</option>
								  <option value="HMD">Île Heard et îles McDonald</option>
								  <option value="VAT">Saint-Siège (État de la Cité du Vatican)</option>
								  <option value="HND">Honduras</option>
								  <option value="HKG">Hong Kong</option>
								  <option value="HUN">Hongrie</option>
								  <option value="ISL">Islande</option>
								  <option value="IND">Inde</option>
								  <option value="IDN">Indonésie</option>
								  <option value="IRN">Iran, République islamique d Iran'</option>
								  <option value="IRQ">Irak</option>
								  <option value="IRL">Irlande</option>
								  <option value="IMN">Île de Man</option>
								  <option value="ISR">Israël</option>
								  <option value="ITA">Italie</option>
								  <option value="JAM">Jamaïque</option>
								  <option value="JPN">Japon</option>
								  <option value="JEY">Jersey</option>
								  <option value="JOR">Jordanie</option>
								  <option value="KAZ">Kazakhstan</option>
								  <option value="KEN">Kenya</option>
								  <option value="KIR">Kiribati</option>
								  <option value="PRK">Corée, République populaire démocratique de Corée</option>
								  <option value="KOR">Corée, République de Corée</option>
								  <option value="KWT">Koweït</option>
								  <option value="KGZ">Kirghizistan</option>
								  <option value="LAO">République démocratique populaire lao</option>
								  <option value="LVA">Lettonie</option>
								  <option value="LBN">Liban</option>
								  <option value="LSO">Lesotho</option>
								  <option value="LBR">Liberia</option>
								  <option value="LBY">Libye</option>
								  <option value="LIE">Liechtenstein</option>
								  <option value="LTU">Lituanie</option>
								  <option value="LUX">Luxembourg</option>
								  <option value="MAC">Macao</option>
								  <option value="MKD">Macédoine, ancienne République de Yougoslavie</option>
								  <option value="MDG">Madagascar</option>
								  <option value="MWI">Malawi</option>
								  <option value="MYS">Malaisie</option>
								  <option value="MDV">Maldives</option>
								  <option value="MLI">Mali</option>
								  <option value="MLT">Malte</option>
								  <option value="MHL">Îles Marshall</option>
								  <option value="MTQ">Martinique</option>
								  <option value="MRT">Mauritanie</option>
								  <option value="MUS">Maurice</option>
								  <option value="MYT">Mayotte</option>
								  <option value="MEX">Mexique</option>
								  <option value="FSM">Micronésie, États fédérés de Micronésie</option>
								  <option value="MDA">Moldavie, République de Moldavie</option>
								  <option value="MCO">Monaco</option>
								  <option value="MNG">Mongolie</option>
								  <option value="MNE">Monténégro</option>
								  <option value="MSR">Montserrat</option>
								  <option value="MAR">Maroc</option>
								  <option value="MOZ">Mozambique</option>
								  <option value="MMR">Myanmar</option>
								  <option value="NAM">Namibie</option>
								  <option value="NRU">Nauru</option>
								  <option value="NPL">Népal</option>
								  <option value="NLD">Pays-Bas</option>
								  <option value="NCL">Nouvelle-Calédonie</option>
								  <option value="NZL">Nouvelle-Zélande</option>
								  <option value="NIC">Nicaragua</option>
								  <option value="NER">Niger</option>
								  <option value="NGA">Nigéria</option>
								  <option value="NIU">Niue</option>
								  <option value="NFK">Île Norfolk</option>
								  <option value="MNP">Îles Mariannes du Nord</option>
								  <option value="NOR">Norvège</option>
								  <option value="OMN">Oman</option>
								  <option value="PAK">Pakistan</option>
								  <option value="PLW">Palau</option>
								  <option value="PSE">Territoire palestinien occupé</option>
								  <option value="PAN">Panama</option>
								  <option value="PNG">Papouasie-Nouvelle-Guinée</option>
								  <option value="PRY">Paraguay</option>
								  <option value="PER">Pérou</option>
								  <option value="PHL">Philippines</option>
								  <option value="PCN">Pitcairn</option>
								  <option value="POL">Pologne</option>
								  <option value="PRT">Portugal</option>
								  <option value="PRI">Porto Rico</option>
								  <option value="QAT">Qatar</option>
								  <option value="REU">Réunion</option>
								  <option value="ROU">Roumanie</option>
								  <option value="RUS">Fédération de Russie</option>
								  <option value="RWA">Rwanda</option>
								  <option value="BLM">Saint Barthélemy</option>
								  <option value="SHN">Sainte-Hélène, Ascension et Tristan da Cunha</option>
								  <option value="KNA">Saint-Kitts-et-Nevis</option>
								  <option value="LCA">Sainte-Lucie</option>
								  <option value="MAF">Saint-Martin (partie française)</option>
								  <option value="SPM">Saint-Pierre-et-Miquelon</option>
								  <option value="VCT">Saint-Vincent-et-les Grenadines</option>
								  <option value="WSM">Samoa</option>
								  <option value="SMR">Saint-Marin</option>
								  <option value="STP">Sao Tomé-et-Principe</option>
								  <option value="SAU">Arabie saoudite</option>
								  <option value="SEN">Sénégal</option>
								  <option value="SRB">Serbie</option>
								  <option value="SYC">Seychelles</option>
								  <option value="SLE">Sierra Leone</option>
								  <option value="SGP">Singapour</option>
								  <option value="SXM">Sint Maarten (partie néerlandaise)</option>
								  <option value="SVK">Slovaquie</option>
								  <option value="SVN">Slovénie</option>
								  <option value="SLB">Îles Salomon</option>
								  <option value="SOM">Somalie</option>
								  <option value="ZAF">Afrique du Sud</option>
								  <option value="SGS">Géorgie du Sud et îles Sandwich du Sud</option>
								  <option value="SSD">Soudan du Sud</option>
								  <option value="ESP">Espagne</option>
								  <option value="LKA">Sri Lanka</option>
								  <option value="SDN">Soudan</option>
								  <option value="SUR">Suriname</option>
								  <option value="SJM">Svalbard et Jan Mayen</option>
								  <option value="SWZ">Swaziland</option>
								  <option value="SWE">Suède</option>
								  <option value="CHE">Suisse</option>
								  <option value="SYR">République arabe syrienne</option>
								  <option value="TWN">Taïwan, province de Chine</option>
								  <option value="TJK">Tadjikistan</option>
								  <option value="TZA">Tanzanie, République-Unie de Tanzanie</option>
								  <option value="THA">Thaïlande</option>
								  <option value="TLS">Timor-Leste</option>
								  <option value="TGO">Togo</option>
								  <option value="TKL">Tokelau</option>
								  <option value="TON">Tonga</option>
								  <option value="TTO">Trinité-et-Tobago</option>
								  <option>Tunisie</option>
								  <option>Turquie</option>
								  <option value="TKM">Turkménistan</option>
								  <option value="TCA">Îles Turques et Caïques</option>
								  <option value="TUV">Tuvalu</option>
								  <option value="UGA">Ouganda</option>
								  <option value="UKR">Ukraine</option>
								  <option value="ARE">Émirats arabes unis</option>
								  <option value="GBR">Royaume-Uni</option>
								  <option value="USA">États-Unis</option>
								  <option value="UMI">Îles mineures éloignées des États-Unis</option>
								  <option value="URY">Uruguay</option>
								  <option value="UZB">Ouzbékistan</option>
								  <option value="VUT">Vanuatu</option>
								  <option value="VEN">Venezuela, République bolivarienne</option>
								  <option value="VNM">Viet Nam</option>
								  <option value="VGB">Îles Vierges britanniques</option>
								  <option value="VIR">Îles Vierges américaines.</option>
								  <option value="WLF">Wallis et Futuna</option>
								  <option value="ESH">Sahara occidental</option>
								  <option value="YEM">Yémen</option>
								  <option value="ZMB">Zambie</option>
								  <option value="ZWE">Zimbabwe</option>      
							  </select>
												
							<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-flag text-primary" aria-hidden="true"></i>
						</span>
					</div>

            <table>
                        <tr>
                        <td>
                            <div class="wrap-input100 validate-input" data-validate = "Valid first name is required">
                                <input class="input100" value="<?php echo $candidat->first_name; ?>" type="text" name="first_name" placeholder="First name">
                                <span class="focus-input100"></span>
                                <span class="symbol-input100">
                                    <i class="fa fa-user text-info" aria-hidden="true"></i>
                                </span>
                            </div>
                        </td>
                        <td>
                                <div class="wrap-input100 validate-input" data-validate = "Valid last name is required: ex@abc.xyz">
                                    <input class="input100" type="text" value="<?php echo $candidat->last_name; ?>" name="last_name" placeholder="Last name">
                                    <span class="focus-input100"></span>
                                    <span class="symbol-input100">
                                        <i class="fa fa-user text-primary" aria-hidden="true"></i>
                                    </span>
                                </div>
                        </td>
                        </tr>
                    </table>
					<div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
						<input class="input100" value="<?php echo $candidat->email; ?>" type="email" name="email" placeholder="Email">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-envelope text-success" aria-hidden="true"></i>
						</span>
					</div>
					<div class="wrap-input100 validate-input" data-validate = "Password is required">
						<input class="input100" type="text" value="<?php echo $candidat->password; ?>" name="password" placeholder="Password">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-lock text-danger" aria-hidden="true"></i>
						</span>
					</div>
					<div class="wrap-input100 validate-input" data-validate = "Job type is required">
                        <select class="input100" name="job_type">
                        <option>Job Type</option>
                        <?php
                        $i=0;
                        $cat=new Categorie();
                        while($i<compteurTable($conn,"categorie",""))
                        {
                            $cat->consult($conn,$i,"");
							if($cat->id==$candidat->id)
                            echo"<option selected value='".$cat->id."'>".$cat->libelle."</option>";
                            else
							echo"<option value='".$cat->id."'>".$cat->libelle."</option>";
                            $i++;
                        }
                        ?>
                        </select>
                        <span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-cog text-danger" aria-hidden="true"></i>
						</span>

					</div>
                    <div class="wrap-input100 validate-input" data-validate = "Valid phone is required">
						<input class="input100" value="<?php echo $candidat->phone; ?>" type="text" name="phone" required placeholder="Phone">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-phone text-danger" aria-hidden="true"></i>
						</span>
					</div> 
                    <div class="wrap-input100 validate-input" data-validate = "Valid details is required">
						<textarea class="input100" name="details" placeholder="Details"><?php echo $candidat->details; ?></textarea>
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-comment text-danger" aria-hidden="true"></i>
						</span>
					</div>                      
				  <div class="custom-file">
					<input type="file" name="picture" class="custom-file-input" id="customFile">
					<label class="custom-file-label" for="customFile">Update Picture</label>
				  </div>					
					<div class="container-login100-form-btn">
						<button name="update" type="submit" class="login100-form-btn">
						    Update
						</button>
					</div>

				</form>
			</div>
		</div>
	</div>
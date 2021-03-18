<?php
session_start();
$_SESSION['cadastro'] = 'cadastro';
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" media="screen" href="css/bootstrap.min.css" />
    <link rel="stylesheet" type="text/css" href="css/cadastro.css" />
    <title>Formulário de dados</title>
</head>

<body>
    <fieldset>
        <form method="post" action="validacao.php" enctype="multipart/form-data">
            <div class="formt">
                <label>Informações pessoais</label> </br>

                Foto: </br> <input type="file" name="pessoal_foto" required /> </br>
                Nome:</br> <input type="text" name="pessoal_nome" id="pessoal_nome" required> </br>
                Nacionalidade:</br><select name="pessoal_nacional" required>
                    <option value="none" selected disabled hidden> Selecione uma opção </option>
                    <option value="afghan">Afegão</option>
                    <option value="albanian">Albanês</option>
                    <option value="algerian">Argelino</option>
                    <option value="american">Americano</option>
                    <option value="andorran">Andorrano</option>
                    <option value="angolan">Angolano</option>
                    <option value="antiguans">Antiguans</option>
                    <option value="argentinean">Argentino</option>
                    <option value="armenian">Armênio</option>
                    <option value="australian">Australiano</option>
                    <option value="austrian">Austríaco</option>
                    <option value="azerbaijani">Azerbaijani</option>
                    <option value="bahamian">Bahamense</option>
                    <option value="bahraini">Bahraini</option>
                    <option value="bangladeshi">Bangladesh</option>
                    <option value="barbadian">Barbadiano</option>
                    <option value="barbudans">Barbudans</option>
                    <option value="batswana">Batswana</option>
                    <option value="belarusian">Bielo-russo</option>
                    <option value="belgian">Belga</option>
                    <option value="belizean">Belize</option>
                    <option value="beninese">Beninês</option>
                    <option value="bhutanese">Butanês</option>
                    <option value="bolivian">Boliviano</option>
                    <option value="bosnian">Bósnio</option>
                    <option value="brasileiro">brasileira</option>
                    <option value="british">Britânico</option>
                    <option value="bruneian">Bruneian</option>
                    <option value="bulgarian">Búlgaro</option>
                    <option value="burkinabe">Burkinabe</option>
                    <option value="burmese">Birmanês</option>
                    <option value="burundian">Burundi</option>
                    <option value="cambodian">Cambojano</option>
                    <option value="cameroonian">Camarões</option>
                    <option value="canadian">Canadense</option>
                    <option value="caboverdean">Cabo-verdiano</option>
                    <option value="centralafrican">Centro-africano</option>
                    <option value="chadian">Chadiano</option>
                    <option value="chilean">Chileno</option>
                    <option value="chinese">Chinês</option>
                    <option value="colombian">Colombiano</option>
                    <option value="comoran">Comoran</option>
                    <option value="congolese">Congolês</option>
                    <option value="costarican">CostaRica</option>
                    <option value="croatian">Croata</option>
                    <option value="cuban">Cubano</option>
                    <option value="cypriot">Cipriota</option>
                    <option value="czech">Checo</option>
                    <option value="danish">Dinamarquês</option>
                    <option value="djibouti">Djibouti</option>
                    <option value="dominican">Dominicana</option>
                    <option value="dutch">Holandês</option>
                    <option value="easttimorese">Timorense</option>
                    <option value="ecuadorean">Equatoriano</option>
                    <option value="egyptian">Egípcio</option>
                    <option value="emirian">Emirado</option>
                    <option value="equatorialguinean">GuineenseEquatorial</option>
                    <option value="eritrean">Eritreia</option>
                    <option value="estonian">Estoniano</option>
                    <option value="ethiopian">Etíope</option>
                    <option value="fijian">Fijian</option>
                    <option value="filipino">Filipino</option>
                    <option value="finnish">Finlandês</option>
                    <option value="french">Francês</option>
                    <option value="gabonese">Gabonês</option>
                    <option value="gambian">Gambian</option>
                    <option value="georgian">Georgiano</option>
                    <option value="german">Alemão</option>
                    <option value="ganesa">Gana</option>
                    <option value="greek">Grego</option>
                    <option value="grenadian">Grenadian</option>
                    <option value="guatemalan">Guatemalteco</option>
                    <option value="guinea-bissauan">Guiné-Bissauan</option>
                    <option value="guinean">Guineense</option>
                    <option value="guyanese">Guianês</option>
                    <option value="haitian">Haitiano</option>
                    <option value="herzegovinian">Herzegovinian</option>
                    <option value="honduran">hondurenho</option>
                    <option value="hungarian">Húngaro</option>
                    <option value="icelander">islandês</option>
                    <option value="indian">Indiana</option>
                    <option value="indonesian">Indonésio</option>
                    <option value="iranian">Iraniano</option>
                    <option value="iraqi">Iraque</option>
                    <option value="irish">Irlandês</option>
                    <option value="israeli">Israelense</option>
                    <option value="italian">Italiano</option>
                    <option value="ivorian">CostadoMarfim</option>
                    <option value="jamaican">Jamaicano</option>
                    <option value="japanese">Japonês</option>
                    <option value="jordanian">Jordaniano</option>
                    <option value="kazakhstani">Cazaquistão</option>
                    <option value="kenyan">Queniano</option>
                    <option value="kittianandnevisian">KittianoeNevisian</option>
                    <option value="kuwaiti">Kuwaitiano</option>
                    <option value="kyrgyz">Quirguistão</option>
                    <option value="laotian">Laosiano</option>
                    <option value="latvian">Letão</option>
                    <option value="lebanese">Libanês</option>
                    <option value="liberian">Liberiano</option>
                    <option value="libyan">Líbio</option>
                    <option value="liechtensteiner">Liechtensteiner</option>
                    <option value="lithuanian">Lituano</option>
                    <option value="luxembourger">Luxemburguês</option>
                    <option value="macedonian">Macedônio</option>
                    <option value="malagasy">Malgaxe</option>
                    <option value="malauiano">malauiano</option>
                    <option value="malaysian">Malaysian</option>
                    <option value="maldivan">Maldivan</option>
                    <option value="malian">Mali</option>
                    <option value="maltese">Maltês</option>
                    <option value="marshallese">Marshallese</option>
                    <option value="mauritanian">Mauritano</option>
                    <option value="mauritian">Mauriciano</option>
                    <option value="mexican">Mexican</option>
                    <option value="micronesian">Micronesian</option>
                    <option value="moldovan">Moldavo</option>
                    <option value="monacan">Monacan</option>
                    <option value="mongolian">Mongol</option>
                    <option value="moroccan">Marroquino</option>
                    <option value="mosotho">Mosotho</option>
                    <option value="Motswana">Motswana</option>
                    <option value="mozambican">Moçambicano</option>
                    <option value="namibian">Namibiano</option>
                    <option value="nauruan">Nauruano</option>
                    <option value="nepalese">Nepalês</option>
                    <option value="newzealander">Neozelandês</option>
                    <option value="ni-vanuatu">Ni-Vanuatu</option>
                    <option value="nicaraguan">Nicaraguan</option>
                    <option value="nigerien">Nigerien</option>
                    <option value="northkorean">NorteCoreano</option>
                    <option value="northernirish">IrlandadoNorte</option>
                    <option value="norwegian">norueguês</option>
                    <option value="omani">Omã</option>
                    <option value="pakistani">Paquistanês</option>
                    <option value="palauan">Palauan</option>
                    <option value="panamanian">Panamenho</option>
                    <option value="papuanewguinean">PapuaNovaGuiné</option>
                    <option value="paraguayan">Paraguai</option>
                    <option value="peruvian">Peruano</option>
                    <option value="polish">Polonês</option>
                    <option value="portuguese">Português</option>
                    <option value="qatari">Catari</option>
                    <option value="romanian">Romeno</option>
                    <option value="russian">Russo</option>
                    <option value="rwandan">Ruandês</option>
                    <option value="saintlucian">SãoLucian</option>
                    <option value="salvadoran">Salvadorenho</option>
                    <option value="samoan">Samoano</option>
                    <option value="sanmarinese">SãoMarinês</option>
                    <option value="saotomean">SãoTomé</option>
                    <option value="saudi">Saudita</option>
                    <option value="scottish">Escocês</option>
                    <option value="senegalese">Senegalês</option>
                    <option value="serbian">Sérvio</option>
                    <option value="seychellois">Seychelles</option>
                    <option value="sierraleonean">SerraLeoa</option>
                    <option value="singaporean">Cingapura</option>
                    <option value="slovakian">Eslovaco</option>
                    <option value="slovenian">Esloveno</option>
                    <option value="solomonislander">SolomonIslander</option>
                    <option value="somali">Somali</option>
                    <option value="southafrican">Sul-africano</option>
                    <option value="southkorean">Sul-coreano</option>
                    <option value="spanish">Espanhol</option>
                    <option value="srilankan">SriLanka</option>
                    <option value="sudanese">Sudanês</option>
                    <option value="surinamer">Surinamer</option>
                    <option value="swazi">Suazi</option>
                    <option value="swedish">Sueco</option>
                    <option value="swiss">Suíço</option>
                    <option value="syrian">Sírio</option>
                    <option value="taiwanese">Taiwanês</option>
                    <option value="tajik">Tajique</option>
                    <option value="tanzanian">Tanzaniano</option>
                    <option value="thai">Tailandês</option>
                    <option value="togolês">Togo</option>
                    <option value="tongan">Tonganês</option>
                    <option value="trinidadianortobagonian">TrinidadouTobagonian</option>
                    <option value="tunisian">Tunisino</option>
                    <option value="turkish">Turco</option>
                    <option value="tuvaluan">Tuvaluano</option>
                    <option value="ugandan">Uganda</option>
                    <option value="ukrainian">Ucraniano</option>
                    <option value="uruguayan">Uruguaio</option>
                    <option value="uzbekistani">Uzbekistani</option>
                    <option value="venezuelan">Venezuelano</option>
                    <option value="vietnamese">Vietnamita</option>
                    <option value="welsh">Galês</option>
                    <option value="yemenite">Iemenita</option>
                    <option value="zambian">Zambiano</option>
                    <option value="zimbabwean">Zimbabuense</option>
                </select>
                Estado Civil:</br>
                <select name="pessoal_estado" id="pessoal_estado" required>
                    <option value="none" selected disabled hidden> Selecione uma opção </option>
                    <option value="SOL">Solteiro</option>
                    <option value="CAS">Casado</option>
                    <option value="UST">União estável</option>
                    <option value="VIU">Viúvo(a)</option>
                    <option value="SPJ">Separado judicialmente</option>
                </select> <br>
                Idade:</br> <input type="number" name="pessoal_idade" required> </br></br>
                <label> Endereço </label> </br>
                Rua:</br> <input type="text" name="endereco_rua" required> </br>
                Número:</br> <input type="number" name="endereco_numero" required> </br>
                Complemento:</br> <input type="text" name="endereco_complemento" required> </br>
                Bairro:</br> <input type="text" name="endereco_bairro" required> </br>
                Município:</br> <input type="text" name="endereco_municipio" required> </br>
                Estado:</br> <select id="UF" name="UF" required>
                    <option value="none" selected disabled hidden>Selecione</option>
                    <option value='AC'>Acre</option>
                    <option value='AL'>Alagoas</option>
                    <option value='AP'>Amapá</option>
                    <option value='AM'>Amazonas</option>
                    <option value='BA'>Bahia</option>
                    <option value='CE'>Ceará</option>
                    <option value='DF'>Distrito Federal</option>
                    <option value='ES'>Espirito Santo</option>
                    <option value='GO'>Goiás</option>
                    <option value='MA'>Maranhão</option>
                    <option value='MS'>Mato Grosso do Sul</option>
                    <option value='MT'>Mato Grosso</option>
                    <option value='MG'>Minas Gerais</option>
                    <option value='PA'>Pará</option>
                    <option value='PB'>Paraíba</option>
                    <option value='PR'>Paraná</option>
                    <option value='PE'>Pernambuco</option>
                    <option value='PI'>Piauí</option>
                    <option value='RJ'>Rio de Janeiro</option>
                    <option value='RN'>Rio Grande do Norte</option>
                    <option value='RS'>Rio Grande do Sul</option>
                    <option value='RO'>Rondônia</option>
                    <option value='RR'>Roraima</option>
                    <option value='SC'>Santa Catarina</option>
                    <option value='SP'>São Paulo</option>
                    <option value='SE'>Sergipe</option>
                    <option value='TO'>Tocantins</option>
                </select> </br></br>
                <!-- "tel" pattern="[0-9]{2}-[0-9]{5}-[0-9]{4}" -->
                Telefone:</br> <input type="tel" id="telefone" name="telefone" placeholder="(00)00000-0000" required> </br>
                E-mail:</br> <input type="email" name="email" required> </br></br>
                Objetivo</br>
                <textarea id="objetivo" name="objetivo"></textarea> </br></br>

                <label> Formação escolar </label> </br>

                Tipo de escolaridade:</br>
                <select name="formacao_escolaridade" id="formacao_escolaridade" required>
                    <option value="none" selected disabled hidden> Selecione uma opção </option>
                    <option value="EM">Ensino Médio</option>
                    <option value="EF">Ensino Superior</option>
                    <option value="ME">Mestrado</option>>
                    <option value="DT">Doutorado</option>
                    <option value="PF">Professor</option>
                </select> </br>
                Curso:</br> <input type="text" name="formacao_curso" required> </br>
                Instituição de ensino:</br> <input type="text" name="formacao_inst" required> </br>
                Ano de conclusão:</br> <input type="number" name="formacao_conclusao" required> </br> </br>
                <label>Experiência profissional </label></br>

                Período de entrada:</br> <input type="number" name="exp_ent" required> </br>
                Período de saída:</br> <input type="number" name="exp_sai" required> </br>
                Cargo ou função:</br> <input type="text" name="exp_cargo" required> </br>
                Setor ou local:</br> <input type="text" name="exp_setor" required> </br>
                Atividade exercida:</br> <input type="text" name="exp_ativ" required> </br></br>

                <label>Atividades extracurriculares </label></br>

                Atividade:</br> <input type="text" name="extra_ativ"> </br>
                Instituição:</br> <input type="text" name="extra_inst"> </br></br>
                
                <label> Idiomas </labeL></br>

                Curso:</br>
                <select name="idioma_curso" required>
                    <option value="none" selected disabled hidden> Selecione uma opção </option>
                    <option value='AF'>Afrikaans</option>
                    <option value='SQ'>Albanês</option>
                    <option value='AR'>Árabe</option>
                    <option value='HY'>Armênio</option>
                    <option value='EU'>Basco</option>
                    <option value='BN'>Bengali</option>
                    <option value='BG'>Búlgaro</option>
                    <option value='CA'>Catalão</option>
                    <option value='KM'>Cambojano</option>
                    <option value='ZH'>Chinês (Mandarin)</option>
                    <option value='HR'>Croata</option>
                    <option value='CS'>Tcheco</option>
                    <option value='DA'>Dinamarquês</option>
                    <option value='NL'>Holandês</option>
                    <option value='EN'>Estadunidense</option>
                    <option value='ET'>Estoniano</option>
                    <option value='FJ'>Fiji</option>
                    <option value='FI'>Finlandês</option>
                    <option value='FR'>Francês</option>
                    <option value='KA'>Georgiano</option>
                    <option value='DE'>Alemão</option>
                    <option value='EL'>Grego</option>
                    <option value='GU'>Guzerate</option>
                    <option value='HE'>Hebraico</option>
                    <option value='HI'>Hindi</option>
                    <option value='HU'>Húngaro</option>
                    <option value='IS'>Islandês</option>
                    <option value='ID'>Indonésio</option>
                    <option value='GA'>Irlandês</option>
                    <option value='IT'>Italiano</option>
                    <option value='JA'>Japonês</option>
                    <option value='JW'>Javanês</option>
                    <option value='KO'>Coreano</option>
                    <option value='LA'>Latina</option>
                    <option value='LV'>Letão</option>
                    <option value='LT'>Lituaniano</option>
                    <option value='MK'>Macedônio</option>
                    <option value='MS'>Malaio</option>
                    <option value='ML'>Malaiala</option>
                    <option value='MT'>Maltês</option>
                    <option value='MI'>Maori</option>
                    <option value='MR'>Marati</option>
                    <option value='MN'>Mongol</option>
                    <option value='NE'>Nepalês</option>
                    <option value='NO'>Norueguês</option>
                    <option value='FA'>Persa/option>
                    <option value='PL'>Polonês</option>
                    <option value='PT'>Português</option>
                    <option value='PA'>Punjabi</option>
                    <option value='QU'>Quechua</option>
                    <option value='RO'>Romanena</option>
                    <option value='RU'>Russo</option>
                    <option value='SM'>Samoano</option>
                    <option value='SR'>Sérvio</option>
                    <option value='SK'>Eslovaco</option>
                    <option value='SL'>Esloveno</option>
                    <option value='ES'>Espanhol</option>
                    <option value='SW'>Suaíli</option>
                    <option value='SV'>Sueco </option>
                    <option value='TA'>Tâmil</option>
                    <option value='TT'>Tártaro</option>
                    <option value='TE'>Telugu</option>
                    <option value='TH'>Tailandês</option>
                    <option value='BO'>Tibetano</option>
                    <option value='TO'>Tonga</option>
                    <option value='TR'>Turco</option>
                    <option value='UK'>Ucraniano</option>
                    <option value='UR'>Urdu</option>
                    <option value='UZ'>Uzbeque</option>
                    <option value='VI'>Vietnamita</option>
                    <option value='CY'>Galês</option>
                    <option value='XH'>Xhosa</option>
                </select>
                <!-- Fala algum outro idioma? Se sim, qual? Select lista aparecer -->
                </select> <br>
                </br>
                Nível:</br> <select name="idioma_nivel"  required>
                    <option value="none" selected disabled hidden> Selecione uma opção </option>
                    <option value="1"> Básico </option>
                    <option value="2"> Intermediário </option>
                    <option value="3"> Avançado </option>
                    <option value="4"> Fluente </option>
                </select>
                </br>
                Instituição:</br> <input type="text" name="idioma_inst" required> </br>
                <div class="div_btn">
                    <button type="reset" id="botao_reset">Limpar </button>
                    <button type="submit" id="botao_submit">Enviar </button> </br>
                </div>
            </div>
        </form>
    </fieldset>
</body>

</html>


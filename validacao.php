<?php

?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Validação</title>
</head>

<body>
    <?php
 
    #Sequência do código 
    #1. Inicia a sessão - linha 34.
    #2. Criação das variáveis - linha 38.
    #3. Definição das variáveis utilizadas em funções e as de sessão como globais. - linha 67.
    #4. Funcao que retorna o diretório e último nome do arquivo upado. - linha 69.
    #5. Validação. - linha 104.
    #6. Criação de cookies. - linha 107.
    #7. Criação de sessões com atribuições das variáveis onde foram inseridos os dados. - linha 109.
    #8. Função que retorna o email formatado. - linha 139.
    #9. Função que retorna o nome do arquivo com o nome do email formatado. - linha 148.
    #10. Substituição do nome do arquivo upado, pelo email do usuário. - linha 158.
    #11. Arrays associativos e seus respectivos foreachs para encontrar o resultado compatível com o select. - linha 167.
    #12. Armazenamento das informações em arrays. - linha 522.
    #13. Escrita dos array para um json. - linha 561.
    #14. Todos os arrays concatenados no então arquivo json_array_3.txt. - linha 579.
    #15. Renomeação do de json_array_3.txt para o email do usuário formatado. - linha 583.

    #1. Inicia a sessão
    session_start();
    $_SESSION['cadastro'] = 'cadastro';

    #2. Criação das variáveis
    $nome = htmlspecialchars($_POST['pessoal_nome']);
    $nacionalidade = $_POST['pessoal_nacional'];
    $estado_civil = $_POST['pessoal_estado'];
    $idade = $_POST['pessoal_idade'];
    $rua = $_POST['endereco_rua'];
    $numero = $_POST['endereco_numero'];
    $complemento = $_POST['endereco_complemento'];
    $bairro = $_POST['endereco_bairro'];
    $municipio = $_POST['endereco_municipio'];
    $estado = $_POST['UF'];
    $telefone = $_POST['telefone'];
    $email = $_POST['email'];
    $objetivo = $_POST['objetivo'];
    $fescolaridade = $_POST['formacao_escolaridade'];
    $curso = $_POST['formacao_curso'];
    $instituicao = $_POST['formacao_inst'];
    $conclusao = $_POST['formacao_conclusao'];
    $exp_ent = $_POST['exp_ent'];
    $exp_sai = $_POST['exp_sai'];
    $exp_cargo = $_POST['exp_cargo'];
    $exp_setor = $_POST['exp_setor'];
    $exp_ativ = $_POST['exp_ativ'];
    $extra_ativ = $_POST['extra_ativ'];
    $extra_inst = $_POST['extra_inst'];
    $idioma_curso = $_POST['idioma_curso'];
    $idioma_nivel = $_POST['idioma_nivel'];
    $idioma_inst = $_POST['idioma_inst'];

    #3. Definição das variáveis utilizadas em funções e as de sessão como globais.
    global  $ext, $pasta, $temp, $ext, $temp, $pasta, $NovoNome, $mensagem, $diretorio, $diretorio2, $diretorio3, $arquivo, $nome_ultimo_arquivo, $nome_ultimo_arquivo2, $entrada, $caminho_arquivo, $_FILES, $nome, $primeiraParte, $restante, $nome_arq, $email_formatado, $email, $dominios, $sessao_estado, $sessao_ecivil, $sessao_fesc, $sessao_idioma,  $sessao_nacionalidade, $sessao_ndioma, $email_formatado;
    #4. Funcao que retorna o diretório e último nome do arquivo upado.
    function uploadCaminhoFoto($nome_ultimo_arquivo, $diretorio)
    {
        global $ext, $pasta, $temp, $ext, $temp, $pasta, $NovoNome, $diretorio, $diretorio2, $arquivo, $nome_ultimo_arquivo2, $nome_ultimo_arquivo, $diretorio3, $entrada, $caminho_arquivo, $_FILES;
        $ext = pathinfo($_FILES['pessoal_foto']['name'], PATHINFO_EXTENSION);
        $pasta = "imagens/";
        $temp = $_FILES['pessoal_foto']['tmp_name'];
        $NovoNome = uniqid() . ".$ext";
        $diretorio = "imagens/";
        if (is_dir($diretorio)) {
            if ($diretorio2 = opendir($diretorio)) {
                while (($arquivo = readdir($diretorio2)) !== false) {
                }
                closedir($diretorio2);
            }
        }
        $nome_ultimo_arquivo2 = 0;
        $nome_ultimo_arquivo = '';
        $diretorio3 = dir($diretorio);
        while (false !== ($entrada = $diretorio3->read())) {
            $caminho_arquivo = "{$diretorio}/{$entrada}";
            if (is_file($caminho_arquivo) && filectime($caminho_arquivo) > $nome_ultimo_arquivo2) {
                $nome_ultimo_arquivo2 = filectime($caminho_arquivo);
                $nome_ultimo_arquivo = $entrada;
            }
        }
        return $nome_ultimo_arquivo;
        return $diretorio;
    }
    uploadCaminhoFoto($nome_ultimo_arquivo, $diretorio);
    $foto = $diretorio . '/' .  $nome_ultimo_arquivo;
    #5. Validação.
    if (isset($foto) && isset($nome) && isset($nacionalidade) && isset($estado_civil) && isset($idade) && isset($rua) && isset($complemento) && isset($numero) && isset($bairro) && isset($municipio) && isset($estado) && isset($email) && isset($objetivo) && isset($telefone) && isset($fescolaridade) && isset($curso) && isset($instituicao) && isset($conclusao) && isset($exp_ent) && isset($exp_sai) && isset($exp_cargo) && isset($exp_setor) && isset($exp_ativ) && isset($extra_ativ) && isset($extra_inst) && isset($idioma_curso) && isset($idioma_nivel) && isset($idioma_inst)) {
        $_SESSION['data'] = date('d/m/y', time());
        #6. Criação de cookies
        setcookie(session_name(), session_id(), time() + 86400, "/");
        #7. Criação de sessões com atribuições das variáveis onde foram inseridos os dados.
        $_SESSION['foto'] = $foto;
        $_SESSION['nome'] = $nome;
        $_SESSION['nacionalidade'] = $nacionalidade;
        $_SESSION['estado_civil'] =  $estado_civil;
        $_SESSION['idade'] = $idade;
        $_SESSION['rua'] = $rua;
        $_SESSION['numero'] =  $numero;
        $_SESSION['complemento'] = $complemento;
        $_SESSION['bairro'] =  $bairro;
        $_SESSION['municipio'] = $municipio;
        $_SESSION['estado'] = $estado;
        $_SESSION['email'] = $email;
        $_SESSION['objetivo'] = $objetivo;
        $_SESSION['telefone'] = $telefone;
        $_SESSION['escolaridade'] = $fescolaridade;
        $_SESSION['curso'] = $curso;
        $_SESSION['instituicao'] = $instituicao;
        $_SESSION['conclusao'] = $conclusao;
        $_SESSION['exp_ent'] = $exp_ent;
        $_SESSION['exp_sai'] = $exp_sai;
        $_SESSION['exp_cargo'] = $exp_cargo;
        $_SESSION['exp_setor']  = $exp_setor;
        $_SESSION['exp_ativ'] = $exp_ativ;
        $_SESSION['extra_ativ'] = $extra_ativ;
        $_SESSION['extra_inst'] = $extra_inst;
        $_SESSION['idioma_curso'] = $idioma_curso;
        $_SESSION['idioma_nivel'] = $idioma_nivel;
        $_SESSION['idioma_inst'] =  $idioma_inst;
        #8. Função que retorna o email formatado.
        function emailFormatado($email_formatado)
        {
            global $email_formatado, $email, $dominios;
            $dominios = array("@gmail.com", "@yahoo.com", "@hotmail.com", "@aol.com", "hotmail.@co.uk", "@hotmail.fr", "@msn.com", "@yahoo.fr", "@wanadoo.fr", "@orange.fr", "@comcast.net", "@yahoo.co.uk", "@yahoo.com.br", "@yahoo.co.in", "@live.com", "@rediffmail.com", "@free.fr", "@gmx.de", "@web.de", "@yandex.ru", "@ymail.com", "@libero.it", "@outlook.com", "@uol.com.br", "@bol.com.br", "@mail.ru", "@cox.net", "@hotmail.it", "@sbcglobal.net", "@sfr.fr", "@live.fr", "@verizon.net", "live.@co.uk", "@googlemail.com", "@yahoo.es", "@ig.com.br", "@live.nl", "@bigpond.com", "@terra.com.br", "@yahoo.it", "@neuf.fr", "@yahoo.de", "@alice.it", "@rocketmail.com", "@att.net", "@laposte.net", "@facebook.com", "@bellsouth.net", "@yahoo.in", "@hotmail.es", "@charter.net", "@yahoo.ca", "yahoo.@com.au", "@rambler.ru", "@hotmail.de", "@tiscali.it", "@shaw.ca", "yahoo.@co.jp", "@sky.com", "@earthlink.net", "@optonline.net", "@freenet.de", "@t-online.de", "@aliceadsl.fr", "@virgilio.it", "@home.nl", "@qq.com", "@telenet.be", "@me.com", "yahoo.@com.ar", "tiscali.@co.uk", "yahoo.@com.mx", "@voila.fr", "@gmx.net", "@mail.com", "@planet.nl", "@tin.it", "@live.it", "@ntlworld.com", "@arcor.de", "@yahoo.co.id", "@frontiernet.net", "@hetnet.nl", "@live.com.au", "@yahoo.@com.sg", "@zonnet.nl", "@club-internet.fr", "@juno.com", "@optusnet.com.au", "@blueyonder.co.uk", "@bluewin.ch", "@skynet.be", "@sympatico.ca", "@windstream.net", "@mac.com", "@centurytel.net", "@chello.nl", "@live.ca", "@aim.com", "@bigpond.net.au", "@email.com");
            $email_formatado = str_replace($dominios, '', $email);
            return $email_formatado;
        }
        emailFormatado($email_formatado);
        #9. Função que retorna o nome do arquivo com o nome do email formatado.
        function nomeFotoArquivo($nome_arq)
        {
            global $nome_ultimo_arquivo, $email_formatado, $primeiraParte, $restante, $nome_arq;
            $primeiraParte = strtok($nome_ultimo_arquivo, '.');
            $restante  = strtok('d');
            $nome_arq = str_replace($primeiraParte, $email_formatado, $nome_ultimo_arquivo);
            return $nome_arq;
        }
        nomeFotoArquivo($nome_arq);
        #10. Substituição do nome do arquivo upado, pelo email do usuário
        $local = $diretorio . '/' . $nome_ultimo_arquivo;
        $local_novo = $diretorio . '/' . $nome_arq;
        $_SESSION['dir'] = $diretorio;
        $_SESSION['nome_arq'] = $nome_arq;
        $caminho = rename($local, $local_novo);
        $_SESSION['local'] = $local_novo;
        #11. Arrays associativos e seus respectivos foreachs para encontrar o resultado compatível com o select.
        $nationality = array(
            'afghan' => 'Afegão',
            'albanian' => 'Albanês',
            'algerian' => 'Argelino',
            'american' => 'Americano',
            'andorran' => 'Andorrano',
            'angolan' => 'Angolano',
            'antiguans' => 'Antiguans',
            'argentinean' => 'Argentino',
            'armenian' => 'Armênio',
            'australian' => 'Australiano',
            'austrian' => 'Austríaco',
            'azerbaijani' => 'Azerbaijani',
            'bahamian' => 'Bahamense',
            'bahraini' => 'Bahraini',
            'bangladeshi' => 'Bangladesh',
            'barbadian' => 'Barbadiano',
            'barbudans' => 'Barbudans',
            'batswana' => 'Batswana',
            'belarusian' => 'Bielo-russo',
            'belgian' => 'Belga',
            'belizean' => 'Belize',
            'beninese' => 'Beninês',
            'bhutanese' => 'Butanês',
            'bolivian' => 'Boliviano',
            'bosnian' => 'Bósnio',
            'brasileiro' => 'brasileira',
            'british' => 'Britânico',
            'bruneian' => 'Bruneian',
            'bulgarian' => 'Búlgaro',
            'burkinabe' => 'Burkinabe',
            'burmese' => 'Birmanês',
            'burundian' => 'Burundi',
            'cambodian' => 'Cambojano',
            'cameroonian' => 'Camarões',
            'canadian' => 'Canadense',
            'caboverdean' => 'Cabo-verdiano',
            'centralafrican' => 'Centro-africano',
            'chadian' => 'Chadiano',
            'chilean' => 'Chileno',
            'chinese' => 'Chinês',
            'colombian' => 'Colombiano',
            'comoran' => 'Comoran',
            'congolese' => 'Congolês',
            'costarican' => 'CostaRica',
            'croatian' => 'Croata',
            'cuban' => 'Cubano',
            'cypriot' => 'Cipriota',
            'czech' => 'Checo',
            'danish' => 'Dinamarquês',
            'djibouti' => 'Djibouti',
            'dominican' => 'Dominicana',
            'dutch' => 'Holandês',
            'easttimorese' => 'Timorense',
            'ecuadorean' => 'Equatoriano',
            'egyptian' => 'Egípcio',
            'emirian' => 'Emirado',
            'equatorialguinean' => 'GuineenseEquatorial',
            'eritrean' => 'Eritreia',
            'estonian' => 'Estoniano',
            'ethiopian' => 'Etíope',
            'fijian' => 'Fijian',
            'filipino' => 'Filipino',
            'finnish' => 'Finlandês',
            'french' => 'Francês',
            'gabonese' => 'Gabonês',
            'gambian' => 'Gambian',
            'georgian' => 'Georgiano',
            'german' => 'Alemão',
            'ganesa' => 'Gana',
            'greek' => 'Grego',
            'grenadian' => 'Grenadian',
            'guatemalan' => 'Guatemalteco',
            'guinea-bissauan' => 'Guiné-Bissauan',
            'guinean' => 'Guineense',
            'guyanese' => 'Guianês',
            'haitian' => 'Haitiano',
            'herzegovinian' => 'Herzegovinian',
            'honduran' => 'hondurenho',
            'hungarian' => 'Húngaro',
            'icelander' => 'islandês',
            'indian' => 'Indiana',
            'indonesian' => 'Indonésio',
            'iranian' => 'Iraniano',
            'iraqi' => 'Iraque',
            'irish' => 'Irlandês',
            'israeli' => 'Israelense',
            'italian' => 'Italiano',
            'ivorian' => 'CostadoMarfim',
            'jamaican' => 'Jamaicano',
            'japanese' => 'Japonês',
            'jordanian' => 'Jordaniano',
            'kazakhstani' => 'Cazaquistão',
            'kenyan' => 'Queniano',
            'kittianandnevisian' => 'KittianoeNevisian',
            'kuwaiti' => 'Kuwaitiano',
            'kyrgyz' => 'Quirguistão',
            'laotian' => 'Laosiano',
            'latvian' => 'Letão',
            'lebanese' => 'Libanês',
            'liberian' => 'Liberiano',
            'libyan' => 'Líbio',
            'liechtensteiner' => 'Liechtensteiner',
            'lithuanian' => 'Lituano',
            'luxembourger' => 'Luxemburguês',
            'macedonian' => 'Macedônio',
            'malagasy' => 'Malgaxe',
            'malauiano' => 'malauiano',
            'malaysian' => 'Malaysian',
            'maldivan' => 'Maldivan',
            'malian' => 'Mali',
            'maltese' => 'Maltês',
            'marshallese' => 'Marshallese',
            'mauritanian' => 'Mauritano',
            'mauritian' => 'Mauriciano',
            'mexican' => 'Mexican',
            'micronesian' => 'Micronesian',
            'moldovan' => 'Moldavo',
            'monacan' => 'Monacan',
            'mongolian' => 'Mongol',
            'moroccan' => 'Marroquino',
            'mosotho' => 'Mosotho',
            'Motswana' => 'Motswana',
            'mozambican' => 'Moçambicano',
            'namibian' => 'Namibiano',
            'nauruan' => 'Nauruano',
            'nepalese' => 'Nepalês',
            'newzealander' => 'Neozelandês',
            'ni-vanuatu' => 'Ni-Vanuatu',
            'nicaraguan' => 'Nicaraguan',
            'nigerien' => 'Nigerien',
            'northkorean' => 'NorteCoreano',
            'northernirish' => 'IrlandadoNorte',
            'norwegian' => 'norueguês',
            'omani' => 'Omã',
            'pakistani' => 'Paquistanês',
            'palauan' => 'Palauan',
            'panamanian' => 'Panamenho',
            'papuanewguinean' => 'PapuaNovaGuiné',
            'paraguayan' => 'Paraguai',
            'peruvian' => 'Peruano',
            'polish' => 'Polonês',
            'portuguese' => 'Português',
            'qatari' => 'Catari',
            'romanian' => 'Romeno',
            'russian' => 'Russo',
            'rwandan' => 'Ruandês',
            'saintlucian' => 'SãoLucian',
            'salvadoran' => 'Salvadorenho',
            'samoan' => 'Samoano',
            'sanmarinese' => 'SãoMarinês',
            'saotomean' => 'SãoTomé',
            'saudi' => 'Saudita',
            'scottish' => 'Escocês',
            'senegalese' => 'Senegalês',
            'serbian' => 'Sérvio',
            'seychellois' => 'Seychelles',
            'sierraleonean' => 'SerraLeoa',
            'singaporean' => 'Cingapura',
            'slovakian' => 'Eslovaco',
            'slovenian' => 'Esloveno',
            'solomonislander' => 'SolomonIslander',
            'somali' => 'Somali',
            'southafrican' => 'Sul-africano',
            'southkorean' => 'Sul-coreano',
            'spanish' => 'Espanhol',
            'srilankan' => 'SriLanka',
            'sudanese' => 'Sudanês',
            'surinamer' => 'Surinamer',
            'swazi' => 'Suazi',
            'swedish' => 'Sueco',
            'swiss' => 'Suíço',
            'syrian' => 'Sírio',
            'taiwanese' => 'Taiwanês',
            'tajik' => 'Tajique',
            'tanzanian' => 'Tanzaniano',
            'thai' => 'Tailandês',
            'togolês' => 'Togo',
            'tongan' => 'Tonganês',
            'trinidadianortobagonian' => 'TrinidadouTobagonian',
            'tunisian' => 'Tunisino',
            'turkish' => 'Turco',
            'tuvaluan' => 'Tuvaluano',
            'ugandan' => 'Uganda',
            'ukrainian' => 'Ucraniano',
            'uruguayan' => 'Uruguaio',
            'uzbekistani' => 'Uzbekistani',
            'venezuelan' => 'Venezuelano',
            'vietnamese' => 'Vietnamita',
            'welsh' => 'Galês',
            'yemenite' => 'Iemenita',
            'zambian' => 'Zambiano',
            'zimbabwean' => 'Zimbabuense'
        );
        foreach ($nationality as $chave => $nacionalidade_sessao) {
            if ($chave == $nacionalidade) {
                $sessao_nacionalidade = $nacionalidade_sessao;
            }
        }
        $_SESSION['sessao_nacionalidade'] = $sessao_nacionalidade;
        $estados = array(
            'AC' => 'Acre',
            'AL' => 'Alagoas',
            'AP' => 'Amapá',
            'AM' => 'Amazonas',
            'BA' => 'Bahia',
            'CE' => 'Ceará',
            'DF' => 'Distrito Federal',
            'ES' => 'Espírito Santo',
            'GO' => 'Goiás',
            'MA' => 'Maranhão',
            'MT' => 'Mato Grosso',
            'MS' => 'Mato Grosso do Sul',
            'MG' => 'Minas Gerais',
            'PA' => 'Pará',
            'PB' => 'Paraíba',
            'PR' => 'Paraná',
            'PE' => 'Pernambuco',
            'PI' => 'Piauí',
            'RJ' => 'Rio de Janeiro',
            'RN' => 'Rio Grande do Norte',
            'RS' => 'Rio Grande do Sul',
            'RO' => 'Rondônia',
            'RR' => 'Roraima',
            'SC' => 'Santa Catarina',
            'SP' => 'São Paulo',
            'SE' => 'Sergipe',
            'TO' => 'Tocantins'
        );
        foreach ($estados as $chave => $estado_sessao) {
            if ($chave == $estado) {
                $sessao_estado = $estado_sessao;
            }
        }
        $_SESSION['sessao_estado'] = $sessao_estado;
        $estadocivil = array(
            'SOL' => 'solteiro',
            'CAS' => 'casado',
            'UST' => 'união estável',
            'VIU' => 'viúvo(a)',
            'SPJ' => 'separado judicialmente'
        );
        foreach ($estadocivil as $chave => $ecivil_sessao) {
            if ($chave == $estado_civil) {
                $sessao_ecivil = $ecivil_sessao;
            }
        }
        $_SESSION['sessao_civil'] = $sessao_ecivil;
        $escolaridade = array(
            'EM' => 'Ensino Médio',
            'EF' => 'Ensino Superior',
            'ME' => 'Mestrado',
            'DT' => 'Doutorado',
            'PF' => 'Professor'
        );
        foreach ($escolaridade as $chave => $fesc_final) {
            if ($chave == $fescolaridade) {
                $sessao_fesc = $fesc_final;
            }
        }
        $_SESSION['sessao_fesc'] = $sessao_fesc;
        $idiomas = array(
            'AF' => 'Afrikaans',
            'SQ' => 'Albanês',
            'AR' => 'Árabe',
            'HY' => 'Armênio',
            'EU' => 'Basco',
            'BN' => 'Bengali',
            'BG' => 'Búlgaro',
            'CA' => 'Catalão',
            'KM' => 'Cambojano',
            'ZH' => 'Chinês (Mandarim)',
            'HR' => 'Croata',
            'CS' => 'Tcheco',
            'DA' => 'Dinamarquês',
            'NL' => 'Holandês',
            'EN' => 'Estadunidense',
            'ET' => 'Estoniano',
            'FJ' => 'Fiji',
            'FI' => 'Finlandês',
            'FR' => 'Francês',
            'KA' => 'Georgiano',
            'DE' => 'Alemão',
            'EL' => 'Grego',
            'GU' => 'Guzerate',
            'HE' => 'Hebraico',
            'HI' => 'Hindi',
            'HU' => 'Húngaro',
            'IS' => 'Islandês',
            'ID' => 'Indonésio',
            'GA' => 'Irlandês',
            'IT' => 'Italiano',
            'JA' => 'Japonês',
            'JW' => 'Javanês',
            'KO' => 'Coreano',
            'LA' => 'Latina',
            'LV' => 'Letão',
            'LT' => 'Lituaniano',
            'MK' => 'Macedônio',
            'MS' => 'Malaio',
            'ML' => 'Malaiala',
            'MT' => 'Maltês',
            'MI' => 'Maori',
            'MR' => 'Marati',
            'MN' => 'Mongol',
            'NE' => 'Nepalês',
            'NO' => 'Norueguês',
            'FA' => 'Persa',
            'PL' => 'Polonês',
            'PT' => 'Português',
            'PA' => 'Punjabi',
            'QU' => 'Quechua',
            'RO' => 'Romanena',
            'RU' => 'Russo',
            'SM' => 'Samoano',
            'SR' => 'Sérvio',
            'SK' => 'Eslovaco',
            'SL' => 'Esloveno',
            'ES' => 'Espanhol',
            'SW' => 'Suaíli',
            'SV' => 'Sueco',
            'TA' => 'Tâmil',
            'TT' => 'Tártaro',
            'TE' => 'Telugu',
            'TH' => 'Tailandês',
            'BO' => 'Tibetano',
            'TO' => 'Tonga',
            'TR' => 'Turco',
            'UK' => 'Ucraniano',
            'UR' => 'Urdu',
            'UZ' => 'Uzbeque',
            'VI' => 'Vietnamita',
            'CY' => 'Galês',
            'XH' => 'Xhosa',
        );
        foreach ($idiomas as $chave => $idioma_sessao) {
            if ($chave == $idioma_curso) {
                $sessao_idioma = $idioma_sessao;
            }
        }
        $_SESSION['sessao_idioma'] = $sessao_idioma;
        $nidioma = array(
            '1' =>  "Básico",
            '2' =>  "Intermediário",
            '3' =>  "Avançado",
            '4' =>  "Fluente",

        );
        foreach ($nidioma as $chave => $ndioma_sessao) {
            if ($chave == $idioma_nivel) {
                $sessao_ndioma = $ndioma_sessao;
            }
        }
        $_SESSION['sessao_nidioma'] = $sessao_ndioma;
        #12. Armazenamento das informações em arrays
        $array_dados_pessoais = array(
            'foto' => $local_novo,
            'nome' => $nome,
            'nacionalidade' => $_SESSION['sessao_nacionalidade'],
            'estado_civil' => $_SESSION['sessao_civil'],
            'idade' => $idade,
            'rua' => $rua,
            'complemento' => $complemento,
            'numero' => $numero,
            'bairro' => $bairro,
            'municipio' => $municipio,
            'estado' => $_SESSION['sessao_estado'],
            'email' => $email,
            'email_formatado' => $email_formatado,
            'telefone' => $telefone,
            'objetivo' => $objetivo,
        );
        $_SESSION['array_dados_pessoais'] = $array_dados_pessoais;
        $array_formacao_academica = array(
            'escolaridade' => $_SESSION['sessao_fesc'],
            'curso' => $curso,
            'instituicao' => $instituicao,
            'conclusao' => $conclusao,
            'exp_ent' => $exp_ent,
            'exp_sai' => $exp_sai,
            'exp_cargo' => $exp_cargo,
            'exp_setor' => $exp_setor,
            'exp_ativ' => $exp_ativ,
            'extra_ativ' => $extra_ativ,
            'extra_inst' => $extra_inst,
        );
        $_SESSION['array_facade'] = $array_formacao_academica;
        $array_idiomas = array(
            'idioma_curso' => $_SESSION['sessao_idioma'],
            'idioma_nivel' => $_SESSION['sessao_nidioma'],
            'idioma_inst' => $idioma_inst,
        );
        $_SESSION['array_idioma'] = $array_idiomas;
        #13. Escrita dos array para um json.
        $string_json_dados = json_encode($array_dados_pessoais);
        $string_json_academico = json_encode($array_formacao_academica);
        $string_json_idiomas = json_encode($array_idiomas);
        file_put_contents('information/json_array_1.txt', $string_json_dados);
        file_put_contents('information/json_array_2.txt', $string_json_academico);
        file_put_contents('information/json_array_3.txt', $string_json_idiomas);
        $arq1 = fopen("information/json_array_1.txt", 'a+');
        $arq2 = fopen("information/json_array_2.txt", 'a+');
        $arq3 = fopen("information/json_array_3.txt", 'a+');
        $conteudo = file_get_contents("information/json_array_1.txt");
        file_put_contents("information/json_array_2.txt", $conteudo, FILE_APPEND);
        $conteudo_2 = file_get_contents("information/json_array_2.txt");
        file_put_contents("information/json_array_3.txt", $conteudo_2, FILE_APPEND);
        #14. Todos os arrays concatenados no então arquivo json_array_3.txt
        $resultado = file_get_contents('information/json_array_3.txt');
        $nome_txt = 'information/json_array_3.txt';
        $end = 'information/' . $nome_arq;
        #15. Renomeação do de json_array_3.txt para o email do usuário formatado.
        rename($nome_txt, $end);
        echo "<meta http-equiv=\"refresh\" content=\"0;url=curriculum.php\">";
    } else {
        unlink($filename);
        echo "Dados inválidos!";
        echo "<meta http-equiv=\"refresh\" content=\"0;url=cadastro.php\">";
    }
    ?>
</body>
</html>
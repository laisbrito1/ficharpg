<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Criar Ficha</title>
    <link rel="shortcut icon" type="imagex/png" href="./IMAGENS/Icone.site.png">
    <link rel="stylesheet" href="./CSS/styleFIcha.css">
</head>
<body>
    <div class="container">

        <div class="manuTop">
            <button>Livros D&D PDF</button>
            <a href="site.php"><button>Home Page</button></a>
        </div>
        <div class="ficha_top">
            <img id="ficha1" src="/IMAGENS/Ficha Oficial D&D 5E Editável em Negrito-001.png" alt="" style="position: bloked;">
                <form class="uu" action="ficha.html">
                    <input id="teste" type="text" name="nome_personagem" placeholder="Nome do Personagem">
                    <select name="classes" id="classes" required>
                        <option value="null">-</option>
                        <option value="barbaro">Barbaro</option>
                        <option value="bardo">Bardo</option>
                        <option value="bruxo">Bruxo</option>
                        <option value="clerigo">Clérigo</option>
                        <option value="druida">Druida</option>
                        <option value="feiticeiro">Feiticeiro</option>
                        <option value="guardiao">Guardião</option>
                        <option value="guerreiro">Guerreiro</option>
                        <option value="ladino">Ladino</option>
                        <option value="mago">Mago</option>
                        <option value="monge">Monge</option>
                        <option value="Paladino">Paladino</option>
                    </select>

                    <select name="antecedentes" id="antecedentes" required style="width: 100px;">
                        <option value="null">-</option>
                        <option value="artesao">Artesão de Guilda</option>
                        <option value="aolito">Acólito</option>
                        <option value="agente">Agente</option>
                        <option value="caçador">Caçador de Recompensas</option>
                        <option value="cavaleiro">Cavaleiro da Ordem</option>
                        <option value="charlatao">Charlatão</option>
                        <option value="cortrsao">Cortesão</option>
                        <option value="criminoso">Criminoso</option>
                        <option value="entretenimento">Entretenimento</option>
                        <option value="eremita">Eremita</option>
                        <option value="escolastico">Escolástico</option>
                        <option value="guarda">Guarda da Cidade</option>
                        <option value="Herdeiro">Herdeiro</option>
                        <option value="heranca">Herança</option>
                        <option value="heroi">Herói do Povo</option>
                        <option value="navegante">Navegante</option>
                        <option value="nobre">Nobre</option>
                        <option value="orfao">Órfão</option>
                        <option value="sabio">Sábio</option>
                        <option value="viajante">Viajante Distante</option>
                        <option value="meretriz">Meretriz</option>
                    </select>
                    <input id="nome_jogador" type="text" name="nome" placeholder="Nome Jogador">

                    <select name="racas" id="racas" required>
                        <option value="null">-</option>
                        <optgroup label="Raça">
                            <option value="anao">Anão</option>
                            <optgroup label="Sub-Raças">
                                <option value="anao_c">Anão da Colina</option>
                                <option value="anao_m">Anão da Montanha</option>
                            </optgroup>
                        </optgroup>
                        
                        <optgroup label="Raça">
                            <option value="draconato">Draconato</option>
                        </optgroup>
                        <optgroup label="Raça">
                            <option value="elfo">Elfo</option>
                            <optgroup label="Sub-Raças">
                                <option value="alto_elfo">Alto Elfo</option>
                                <option value="elfo_n">Elfo Negro</option>
                                <option value="elfo_f">Elfo Floresta</option>

                            </optgroup>
                        </optgroup>
                       
                        <optgroup label="Raça">
                            <option value="gnomo">Gnomo</option>
                            <optgroup label="Sub-Raças">
                                <option value="gnomo_f">Gnomo da Floresta</option>
                                <option value="gnomo_r">Gnomo da Rocha</option>
                            </optgroup>
                        </optgroup>

                        <optgroup label="Raça">
                            <option value="halfling">Halfling</option>
                            <optgroup label="Sub-Raças">
                                <option value="half_r">Robusto</option>
                                <option value="half_p_l">Pés-Leves</option>
                            </optgroup>

                        </optgroup>

                        
                        <optgroup label="Raça">
                            <option value="humano">Humano</option>
                            <option value="meio-elfo">Meio-Elfo</option>
                            <option value="orc">Orc</option>
                            <option value="meio-orc">Meio-Orc</option>
                            <option value="tiefling">Tiefling</option>
                            
                        </optgroup>
                    </select>

                    <select name="alinhamento" id="alinhamento">
                        <option value="null">-</option>
                        <option value="leal">Leal e Bom</option>
                        <option value="leal_N">Leal e Neutro</option>
                        <option value="leal_M">Leal e Mau</option>
                        <option value="neutro">Neutro e Bom</option>
                        <option value="neutro_N">Neutro</option>
                        <option value="neutro_M">Neutro e Mau</option>
                        <option value="caotico">Caótico e Bom</option>
                        <option value="caotico_N">Caótico e Neutro</option>
                        <option value="caotico_M">Caótico e Mau</option>
                    </select>
                    <input id="xp" type="text" name="xp" placeholder="XP">
                </form>
        </div>
        <div class="ficha2">
            <!--<img  id="ficha1" src="/IMAGENS/Ficha Oficial D&D 5E Editável em Negrito-002.png" alt="">

            <form action="ficha.html">
                <input type="text" id="nome_jogador2" name="nome_jogador2" placeholder="Nome Personagem">
            </form>
        </div>

        <div class="ficha3">
            <img id="ficha1" src="/IMAGENS/Ficha Oficial D&D 5E Editável em Negrito-003.png" alt="">

        </div>-->
    </div>
</body>
</html>
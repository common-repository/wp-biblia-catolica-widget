<?php
/*
Plugin Name: B&iacute;blia Cat&oacute;lica Widget
Plugin URI: http://www.bibliacatolica.com.br/
Description: Ofere&ccedil;a a B&iacute;blia Cat&oacute;lica aos seus visitantes. Acesso r&aacute;pido a todos os 73 livros da B&iacute;blia Sagrada...
Author: Wellington Campos Pinho
Version: 1.0.0.6
Author URI: http://www.bibliacatolica.com.br/
*/

function bibliaCatolicaWidget(){
    ?>
    <div id="bibliacatolicaWidget" align="center">
        <table class="texto" style="margin-bottom: 12px; text-align: left;" border="0" cellspacing="0" cellpadding="4" align="center">
        <form name="formBibliaCatolica" id="formBibliaCatolica">
        <tr>
            <td><strong>Livro:</strong><br />
            <select name="bibliacatolicaBooks" style="width: 162px;" class="form">
                <option value="1">Selecione um livro</option>
		<?php echo bibliacatolicaBooks(); ?>
            </select>
            </td>
        </tr>
        <tr>
            <td><strong>Cap&iacute;tulo:</strong><br />
            <select name="bibliacatolicaChapters" class="form" style="width: 60px;">
                <option value="1">---</option>
            </select>
            <a class="btnReadChapter" href="#"><img src="<?php echo plugins_url('/img/btn_lercapitulo.gif', __FILE__ ); ?>" style="margin-left: 3px;" alt="Ler Cap&iacute;tulo" title="Ler Cap&iacute;tulo" align="absmiddle" width="96" height="16" border="0"></a>
            </td>
        </tr>
        </form>
        </table>
	<p class="frases"><?php echo bibliacatolicaRandomVerse();?></p>
    </div>
    <?
}

function jsbibliaCatolicaWidget(){
    wp_enqueue_style('bibliacatolicaCss', plugins_url('/css/style.css', __FILE__ ));
    wp_enqueue_script('jquery');
    wp_enqueue_script('bibliacatolicaJs', plugins_url('/js/bibliaCatolicaWidget.js', __FILE__ ), array('jquery'));
}
add_action('wp_head', 'jsbibliaCatolicaWidget', 1);

function widget_bibliaCatolica($args) {
  extract($args);
  echo $before_widget;
  echo $before_title;?>B&iacute;blia Cat&oacute;lica Online<?php echo $after_title;
  bibliaCatolicaWidget();
  echo $after_widget;
}

function bibliacatolicaRandomVerse(){
    $verse = array(
	'"Em alta voz eu grito por Jav&eacute;, e ele responde-me do seu monte santo. Posso deitar-me, dormir e despertar, pois &eacute; Jav&eacute; quem me sustenta."(Salmo 3)',
	'"Eu te louvo, Pai, Senhor do c&eacute;u e da terra, porque escondeste essas coisas aos s&aacute;bios e inteligentes, e as revelaste aos pequeninos."(Mateus 11,25)',
	'"Saibam que Jav&eacute; faz maravilhas pelo seu fiel: Jav&eacute; ouve quando eu o invoco."(Salmo 4)',
	'"Quando contemplo o c&eacute;u, obra dos teus dedos, a lua e as estrelas que fixaste. O que &eacute; o homem, para dele te lembrares? O ser humano, para que o visites?"(Salmo 8)',
	'"Jav&eacute;, tu ouves o desejo dos pobres, fortaleces-lhes o cora&ccedil;&atilde;o e lhes d&aacute;s ouvidos, fazendo justi&ccedil;a ao &oacute;rf&atilde;o e ao oprimido."(Salmo 10)',
	'"Do c&eacute;u Jav&eacute; se inclina sobre os filhos de Ad&atilde;o, para ver se restou algu&eacute;m sensato, algu&eacute;m que busque a Deus."(Salmo 14)',
	'"Aos famintos o Senhor enche de bens, e despede os ricos de m&atilde;os vazias."(Lucas 1,53)',
	'"Bendigo a Jav&eacute; que me aconselha, e, mesmo durante a noite, internamente me instrui. Com ele &agrave; minha direita, jamais vacilarei."(Salmo 16)',
	'"Manifesta a maravilha do teu amor, tu que salvas dos agressores os que se refugiam &agrave; tua direita. Guarda-me como a pupila dos olhos."(Salmo 17)',
	'"Maria conservava estes fatos, e meditava sobre eles no seu cora&ccedil;&atilde;o."(Lucas 2,19)',
	'"Jav&eacute;, meu rochedo, minha fortaleza, meu libertador; meu Deus, rocha minha, meu ref&uacute;gio, meu escudo, for&ccedil;a que me salva, meu baluarte!"(Salmo 18)',
	'"Devo anunciar a Boa Not&iacute;cia do Reino de Deus tamb&eacute;m &agrave;s outras cidades, porque para isso &eacute; que fui enviado."(Lucas 4,43)',
	'"O caminho de Deus &eacute; perfeito, a palavra de Jav&eacute; &eacute; comprovada. Ele &eacute; um escudo para os que nele se abrigam."(Salmo 18)',
	'"A lei de Jav&eacute; &eacute; perfeita, um descanso para a alma. Os preceitos de Jav&eacute; s&atilde;o retos, alegria para o cora&ccedil;&atilde;o."(Salmo 19)',
	'"Ningu&eacute;m coloca vinho novo em barris velhos. E ningu&eacute;m, depois de beber vinho velho, deseja vinho novo, porque diz: O velho &eacute; melhor."(Lucas 5,39)',
	'"Que Jav&eacute; lhe responda no dia da ang&uacute;stia, que o nome do Deus de Jac&oacute; o proteja! Que do santu&aacute;rio ele lhe mande socorro, e o ap&oacute;ie desde Si&atilde;o!"(Salmo 20)',
	'"N&atilde;o julguem, e voc&ecirc;s n&atilde;o ser&atilde;o julgados; n&atilde;o condenem, e n&atilde;o ser&atilde;o condenados; perdoem, e ser&atilde;o perdoados."(Lucas 6,37)',
	'"Voc&ecirc;s que temem a Jav&eacute;, louvem a Jav&eacute;! Sim, porque ele n&atilde;o desprezou, n&atilde;o desdenhou a desgra&ccedil;a do pobre, nem lhe ocultou a sua face: quando gritou por socorro, ele o escutou."(Salmo 22)',
	'"Jav&eacute; &eacute; o meu pastor. Nada me falta. Em verdes pastagens me faz repousar; para fontes tranq&uuml;ilas me conduz, e restaura as minhas for&ccedil;as."(Salmo 23)',
	'"Se voc&ecirc;s amam somente aqueles que os amam, que gratuitidade &eacute; essa? At&eacute; mesmo os pecadores amam aqueles que os amam."(Lucas 6,32)',
	'"Quem pode subir &agrave; montanha de Jav&eacute;? Quem pode estar no seu lugar santo? Aquele que tem m&atilde;os inocentes e cora&ccedil;&atilde;o puro, nem faz juramento para enganar."(Salmo 24)',
	'"Jav&eacute; &eacute; bondade e retid&atilde;o, e aponta o caminho aos pecadores. Ele encaminha os pobres conforme o direito, e ensina aos pobres o seu caminho."(Salmo 25)',
	'"Prestem aten&ccedil;&atilde;o ao modo como voc&ecirc;s ouvem: a quem tem alguma coisa, ser&aacute; dado ainda mais; &agrave;quele que n&atilde;o tem, lhe ser&aacute; tirado at&eacute; mesmo o que ele pensa ter."(Lucas 8,18)',
	'"Uma coisa pe&ccedil;o a Jav&eacute;, e s&oacute; ela procuro: &eacute; habitar na casa de Jav&eacute; todos os dias da minha vida."(Salmo 27)',
	'"Volte para casa e conte tudo o que Deus fez por voc&ecirc;."(Lucas 8,39)',
	'"Jav&eacute;, meu Deus, eu gritei por ti, e tu me curaste. Tiraste do t&uacute;mulo a minha vida, fizeste-me reviver dentre os que baixam &agrave; cova."(Salmo 30)',
	'"Toquem para Jav&eacute;, fi&eacute;is seus, celebrem a sua mem&oacute;ria sagrada. Sua ira dura um momento, e seu favor a vida inteira."(Salmo 30)',
	'"O que adianta um homem ganhar o mundo inteiro, se perde e destr&oacute;i a si mesmo?"(Lucas 9,25)',
	'"Como &eacute; grande a tua bondade, Jav&eacute;! Tu a reservas para os que temem a ti, e a concedes aos que em ti se abrigam, diante de todos os homens."(Salmo 31)',
	'"Feliz aquele cuja ofensa &eacute; absolvida, cujo pecado &eacute; coberto. Feliz o homem a quem Jav&eacute; n&atilde;o aponta nenhum delito."(Salmo 32)',
	'"Pe&ccedil;am ao dono da colheita que envie oper&aacute;rios para a colheita"(Lucas 10,2)',
	'"A minha alma exultar&aacute; em Jav&eacute;, todo o meu ser dir&aacute;: "Jav&eacute;, quem &eacute; igual a ti, para livrar o fraco do mais forte?"."(Salmo 35)',
	'"Deixe que os mortos sepultem os seus pr&oacute;prios mortos; mas voc&ecirc;, v&aacute; anunciar o Reino de Deus."(Lucas 9,60)',
	'"N&atilde;o se irrite por causa dos maus, nem tenha inveja dos injustos. Secam depressa, murcham logo como a relva."(Salmo 37)',
	'"Observe o &iacute;ntegro, veja o homem reto: h&aacute; uma posteridade para o homem pac&iacute;fico. A salva&ccedil;&atilde;o dos justos vem de Jav&eacute;, que &eacute; o seu ref&uacute;gio no tempo da ang&uacute;stia."(Salmo 37)',
	'"Meu Pai entregou tudo a mim. Ningu&eacute;m conhece quem &eacute; o Filho, a n&atilde;o ser o Pai, e ningu&eacute;m conhece quem &eacute; o Pai, a n&atilde;o ser o Filho e aquele a quem o Filho o quiser revelar."(Lucas 10,22)',
	'"Mostra-me o meu fim, Jav&eacute;, e qual &eacute; a medida dos meus dias, para eu saber quanto sou fr&aacute;gil."(Salmo 39)',
	'"Se o seu corpo inteiro &eacute; luminoso, n&atilde;o tendo nenhuma parte escura, ele ficar&aacute; todo luminoso, como quando a l&acirc;mpada com o seu clar&atilde;o ilumina voc&ecirc;."(Lucas 11,36)',
	'"Feliz quem cuida do fraco e do indigente: Jav&eacute; o salva no dia infeliz. Jav&eacute; o guarda e o mant&eacute;m vivo, para que seja feliz na terra."(Salmo 41)',
	'"N&atilde;o tenha medo, pequeno rebanho, porque o Pai de voc&ecirc;s tem prazer em dar-lhes o Reino."(Lucas 12,32)',
	'"Porque te curvas, &oacute; minha alma, gemendo dentro de mim? Espera em Deus, eu ainda o louvarei: Salva&ccedil;&atilde;o da minha face e meu Deus!"(Salmo 42)',
	'"Felizes dos empregados que o senhor encontra acordados quando chega. Eu lhes garanto: ele mesmo se cingir&aacute;, os far&aacute; sentar &agrave; mesa, e, passando, os servir&aacute;."(Lucas 12,37)',
	'"Eu reconhe&ccedil;o a minha culpa, e o meu pecado est&aacute; sempre na minha frente; pequei contra ti, somente contra ti, praticando o que &eacute; mau aos teus olhos."(Salmo 51)',
	'"H&aacute; &uacute;ltimos que ser&atilde;o primeiros, e primeiros que ser&atilde;o &uacute;ltimos."(Lucas 13,30)',
	'"Tu amas o cora&ccedil;&atilde;o sincero, e, no &iacute;ntimo, me ensinas a sabedoria. Lava-me, e ficarei mais branco do que a neve."(Salmo 51)',
	'"Qualquer de voc&ecirc;s, se n&atilde;o renunciar a tudo o que tem, n&atilde;o pode ser meu disc&iacute;pulo."(Lucas 14,33)',
	'"E assim eu saberei que tu &eacute;s o meu Deus. Nesse Deus eu confio, e n&atilde;o temerei! Que pode um homem fazer contra mim?"(Salmo 56)',
	'"Piedade, &oacute; Deus, tem piedade de mim, pois eu me abrigo em ti; eu me abrigo &agrave; sombra das tuas asas, at&eacute; que passe a desgra&ccedil;a."(Salmo 57)',
	'"Quando tiverem cumprido tudo o que lhes mandarem fazer, digam: "Somos empregados in&uacute;teis; fizemos o que dev&iacute;amos fazer"."(Lucas 17,10)',
	'"S&oacute; em Deus a minha alma repousa, porque dele vem a minha esperan&ccedil;a. S&oacute; ele &eacute; a minha rocha e a minha salva&ccedil;&atilde;o, a minha fortaleza: jamais serei abalado!"(Salmo 62)',
	'"Tomem cuidado para que os cora&ccedil;&otilde;es de voc&ecirc;s n&atilde;o fiquem insens&iacute;veis por causa da gula, da embriaguez e das preocupa&ccedil;&otilde;es da vida, e esse dia n&atilde;o caia de repente sobre voc&ecirc;s."(Lucas    )',
	'"Feliz quem tu escolhes e aproximas de ti para morar no Templo; n&oacute;s estamos saciados com os bens da tua casa, com os dons sagrados do teu Templo."(Salmo 65)',
	'"Levanta-se o Senhor, os seus inimigos debandam, os seus advers&aacute;rios fogem diante dele. Tal como a cera se derrete diante do fogo, assim perecem os injustos diante de Deus."(Salmo 68)',
	'"Contigo, de quem necessitarei no c&eacute;u? Contigo, nada mais me satisfaz na terra. A minha carne e o meu cora&ccedil;&atilde;o podem consumir-se: a minha rocha e por&ccedil;&atilde;o &eacute; Deus para sempre!"(Salmo 73)',
	'"Mas vai chegar a hora, e &eacute; agora, em que os verdadeiros adoradores v&atilde;o adorar o Pai em esp&iacute;rito e verdade. Porque s&atilde;o estes os adoradores que o Pai procura."(Jo&atilde;o 4,23)',
	'"O meu alimento &eacute; fazer a vontade daquele que me enviou e realizar a sua obra."(Jo&atilde;o 4,34)',
	'"Restaura-nos, &oacute; Deus! Faze brilhar a tua face, e seremos salvos!"(Salmo 80)',
	'"Eu enviei voc&ecirc;s para colher aquilo que voc&ecirc;s n&atilde;o trabalharam. Outros trabalharam, e voc&ecirc;s entraram no trabalho deles."(Jo&atilde;o 4,38)',
	'"Nunca haja em voc&ecirc; um deus estranho, nunca adore um deus estrangeiro. Eu sou Jav&eacute; seu Deus. Abra a sua boca, e eu a encherei."(Salmo 81)',
	'"Ah! Se o meu povo me escutasse, se Israel andasse nos meus caminhos... Eu derrotaria os seus inimigos num instante, e contra os seus opressores voltaria a minha m&atilde;o."(Salmo 81)',
	'"Jesus respondeu: A obra de Deus &eacute; que voc&ecirc;s acreditem naquele que ele enviou."(Jo&atilde;o 6,29)',
	'"Como s&atilde;o desej&aacute;veis as tuas moradas, Jav&eacute; dos Ex&eacute;rcitos! A minha alma suspira e desfalece pelos &aacute;trios de Jav&eacute;. O meu cora&ccedil;&atilde;o e a minha carne exultam pelo Deus vivo."(Salmo 84)',
	'"&Eacute; por isso que eu disse: "Ningu&eacute;m pode vir a mim, se isso n&atilde;o lhe &eacute; concedido pelo Pai"."(Jo&atilde;o 6,65)',
	'"Voc&ecirc; que habita ao amparo do Alt&iacute;ssimo, e vive &agrave; sombra do Onipotente, diga a Jav&eacute;: Meu ref&uacute;gio, minha fortaleza, meu Deus, eu confio em ti!"(Salmo 91)',
	'"Eu vim a este mundo para um julgamento, a fim de que os que n&atilde;o v&ecirc;em vejam, e os que v&ecirc;em se tornem cegos."(Jo&atilde;o 9,39)',
	'"A desgra&ccedil;a jamais o atingir&aacute;, e praga nenhuma vai chegar &agrave; sua tenda, pois Jav&eacute; ordenou aos seus anjos que o guardem nos seus caminhos."(Salmo 91)',
	'"Jesus disse: "Eu n&atilde;o lhe disse que, se acreditar, voc&ecirc; ver&aacute; a gl&oacute;ria de Deus?""(Jo&atilde;o 11,40)',
	'"O justo brota como a palmeira, cresce como o cedro do L&iacute;bano: plantado na casa de Jav&eacute;, brota nos &aacute;trios do nosso Deus."(Salmo 92)',
	'"Feliz o homem a quem educas, Jav&eacute;, a quem ensinas com a tua Lei, dando-lhe descanso nos dias maus, enquanto para o injusto se abre uma cova."(Salmo 94)',
	'"Quem tem apego &agrave; sua vida vai perd&ecirc;-la; quem despreza a sua vida neste mundo vai conserv&aacute;-la para a vida eterna."(Jo&atilde;o 12,25)',
	'"Venham, exultemos em Jav&eacute;, aclamemos o Rochedo que nos salva. Entremos com louvor na sua presen&ccedil;a, vamos aclam&aacute;-lo com instrumentos."(Salmo 95)',
	'"A luz ainda estar&aacute; no meio de voc&ecirc;s por um pouco de tempo. Procurem caminhar enquanto voc&ecirc;s t&ecirc;m a luz, para que as trevas n&atilde;o surpreendam voc&ecirc;s."(Jo&atilde;o 12,35)',
	'"Jav&eacute; ama quem detesta o mal, ele protege a vida dos seus fi&eacute;is e liberta-os da m&atilde;o dos injustos. A luz levanta-se para o justo, e a alegria para os cora&ccedil;&otilde;es retos."(Salmo 97)',
	'"E quando eu for e tiver preparado um lugar para voc&ecirc;s, voltarei e levarei voc&ecirc;s comigo, para que onde eu estiver, estejam voc&ecirc;s tamb&eacute;m."(Jo&atilde;o 14,3)',
	'"Bendiga a Jav&eacute;, &oacute; minha alma, e n&atilde;o esque&ccedil;a nenhum dos seus benef&iacute;cios. Ele perdoa suas culpas todas, e cura todos os seus males."(Salmo 103)',
	'"Quem acredita em mim far&aacute; as obras que eu fa&ccedil;o, e far&aacute; ainda maiores do que estas, porque eu vou para o Pai."(Jo&atilde;o 14,12)',
	'"Bendiga a Jav&eacute;, &oacute; minha alma! Jav&eacute;, meu Deus, como &eacute;s grande! Vestido de esplendor e majestade, envolto em luz como num manto."(Salmo 104)',
	'"Todos esperam de ti que a seu tempo lhes atires o alimento: Envias o teu sopro e eles s&atilde;o criados, e assim renovas a face da terra."(Salmo 104)',
	'"Se voc&ecirc;s ficam unidos a mim e as minhas palavras permanecem em voc&ecirc;s, pe&ccedil;am o que quiserem e ser&aacute; concedido a voc&ecirc;s."(Jo&atilde;o 15,7)',
	'"Agrade&ccedil;am a Jav&eacute;, porque ele &eacute; bom, porque o seu amor &eacute; para sempre!"(Salmo 107)',
	'"N&atilde;o foram voc&ecirc;s que me escolheram, mas fui eu que escolhi voc&ecirc;s. Eu os destinei para ir e dar fruto, e para que o fruto de voc&ecirc;s permane&ccedil;a."(Jo&atilde;o 15,16)',
	'"Feliz o homem que teme a Jav&eacute; e se compraz com os seus mandamentos! A sua descend&ecirc;ncia ser&aacute; poderosa na terra, a descend&ecirc;ncia dos retos ser&aacute; aben&ccedil;oada."(Salmo 112)',
	'"Quem &eacute; igual a Jav&eacute;, nosso Deus, que se eleva no seu trono? Ele ergue da poeira o fraco e tira do lixo o indigente."(Salmo 113)',
	'"Lembrem-se do que eu disse: nenhum empregado &eacute; maior do que o seu patr&atilde;o. Se perseguiram a mim, v&atilde;o perseguir voc&ecirc;s tamb&eacute;m."(Jo&atilde;o 15,20)',
	'"Jav&eacute; protege os simples: eu fraquejava, e ele me salvou. Volte ao repouso, &oacute; minha vida, porque Jav&eacute; foi bondoso com voc&ecirc;."(Salmo 116)',
	'"Como retribuirei a Jav&eacute; todo o bem que ele me fez?"(Salmo 116)',
	'"A vida eterna &eacute; esta: que conhe&ccedil;am a ti, o &uacute;nico Deus verdadeiro, e aquele que enviaste, Jesus Cristo."(Jo&atilde;o 17,3)',
	'"A pedra que os construtores rejeitaram tornou-se a pedra angular. Isto vem de Jav&eacute;, e &eacute; maravilha aos nossos olhos."(Salmo 118)',
	'"Que todos sejam um, como tu, Pai, est&aacute;s em mim e eu em ti. E para que tamb&eacute;m eles estejam em n&oacute;s, a fim de que o mundo acredite que tu me enviaste."(Jo&atilde;o 17,21)',
	'"Agrade&ccedil;am a Jav&eacute;, porque ele &eacute; bom, porque o seu amor &eacute; para sempre!"(Salmo 118)',
	'"Sejam perfeitos como &eacute; perfeito o Pai de voc&ecirc;s que est&aacute; no c&eacute;u."(Mateus 5,48)',
	'"Conservei as tuas promessas no meu cora&ccedil;&atilde;o, para n&atilde;o pecar contra ti. S&ecirc; bendito, Jav&eacute;! Ensina-me os teus estatutos."(Salmo 119)',
	'"Inclina o meu cora&ccedil;&atilde;o para os teus testemunhos, e n&atilde;o para o interesse. Evita que os meus olhos vejam o que &eacute; in&uacute;til; d&aacute;-me vida, pela tua Palavra."(Salmo 119)',
	'"N&atilde;o acumulem riquezas aqui na terra, onde a tra&ccedil;a e a ferrugem corroem, e onde os ladr&otilde;es assaltam e roubam."(Mateus 6,19)',
	'"Jav&eacute;, eu me lembro do teu nome durante a noite, e observo a tua Lei. Esta &eacute; a parte que me cabe: observar os teus preceitos."(Salmo 119)',
	'"Tudo o que voc&ecirc;s desejam que os outros fa&ccedil;am a voc&ecirc;s, fa&ccedil;am voc&ecirc;s tamb&eacute;m a eles. Pois nisso consistem a Lei e os Profetas."(Mateus 7,12)',
	'"O teu mandamento torna-me mais s&aacute;bio que os meus inimigos porque ele me pertence para sempre. Sou mais s&aacute;bio que todos os meus mestres, porque medito nos teus testemunhos."(Salmo 119)',
	'"N&atilde;o pensem que vim trazer paz &agrave; terra; n&atilde;o vim trazer a paz, mas a espada."(Mateus 10,34)',
	'"Jav&eacute; guarda de voc&ecirc; de todo o mal, ele guarda a sua vida. Jav&eacute; guarda as suas entradas e sa&iacute;das, desde agora e para sempre."(Salmo 121)',
	'"Os que semeiam com l&aacute;grimas, ceifam em meio a can&ccedil;&otilde;es. V&atilde;o andando e chorando ao levar a semente. Ao regressar, voltam cantando, trazendo os seus feixes."(Salmo 126)',
	'"Carreguem a minha carga e aprendam de mim, porque sou manso e humilde de cora&ccedil;&atilde;o, e voc&ecirc;s encontrar&atilde;o descanso para suas vidas."(Mateus 11,29)',
	'"A minha alma espera em Jav&eacute;, espera na sua Palavra. A minha alma aguarda o Senhor, mais que os guardas pela aurora."(Salmo 130)',
	'"Vejam como &eacute; bom, como &eacute; agrad&aacute;vel os irm&atilde;os viverem unidos."(Salmo 133)',
	'"Voc&ecirc;s s&atilde;o felizes, porque os seus olhos v&ecirc;em e os seus ouvidos ouvem."(Mateus 13,16)',
	'"Eu te agrade&ccedil;o, Jav&eacute;, de todo o meu cora&ccedil;&atilde;o. Na presen&ccedil;a dos anjos eu canto para ti. Eu me prostro em dire&ccedil;&atilde;o ao teu santu&aacute;rio."(Salmo 138)',
	'"Jav&eacute;, tu me sondas e me conheces. Tu conheces o meu sentar e o meu levantar, de longe penetras o meu pensamento. Todos os meus caminhos te s&atilde;o familiares."(Salmo 139)',
	'"Jesus lhes disse: "Eles n&atilde;o precisam ir embora. Voc&ecirc;s &eacute; que t&ecirc;m de lhes dar de comer."(Mateus 14,16)',
	'"Sonda-me, &oacute; Deus, e conhece o meu cora&ccedil;&atilde;o! Prova-me, e conhece os meus sentimentos! V&ecirc; se ando por um caminho errado, e conduz-me pelo caminho eterno."(Salmo 139)',
	'"Jav&eacute; liberta os prisioneiros. Jav&eacute; abre os olhos dos cegos. Jav&eacute; endireita os encurvados. Jav&eacute; ama os justos."(Salmo 146)',
	'"PAI, ... a vida eterna &eacute; esta: que eles te conhe&ccedil;am a ti, o Deus &uacute;nico verdadeiro, e aquele que enviaste, Jesus Cristo"(Jo 17,3)',
	'"Deus, nosso Salvador ... quer que todos os homens sejam salvos e cheguem ao conhecimento da verdade"(1 Tm 2,3-4)',
	'"N&atilde;o h&aacute;, debaixo do c&eacute;u, outro nome dado aos homens pelo qual devamos ser salvos"(At 4,12)'
    );
    shuffle($verse);
    return '<a href="http://www.bibliacatolica.com.br" target="_blank">'. array_shift($verse) .'</a>';
}

function bibliacatolicaBooks(){
    $books = array('Gênesis|50', 'Êxodo|40', 'Levítico|27', 'Números|36', 'Deuteronômio|34', 'Josué|24', 'Juízes|21', 'Rute|4', 'I Samuel|31', 'II Samuel|24', 'I Reis|22', 'II Reis|25', 'I Crônicas|29', 'II Crônicas|36', 'Esdras|10', 'Neemias|13', 'Tobias|14', 'Judite|16', 'Ester|16', 'Jó|42', 'Salmos|150', 'I Macabeus|16', 'II Macabeus|15', 'Provérbios|31', 'Eclesiastes|12', 'Cântico dos Cânticos|8', 'Sabedoria|19', 'Eclesiástico|51', 'Isaías|66', 'Jeremias|52', 'Lamentações|5', 'Baruc|6', 'Ezequiel|48', 'Daniel|14', 'Oséias|14', 'Joel|4', 'Amós|9', 'Abdias|1', 'Jonas|4', 'Miquéias|7', 'Naum|3', 'Habacuc|3', 'Sofonias|3', 'Ageu|2', 'Zacarias|14', 'Malaquias|3', 'São Mateus|28', 'São Marcos|16', 'São Lucas|24', 'São João|21', 'Atos dos Apóstolos|28', 'Romanos|16', 'I Coríntios|16', 'II Coríntios|13', 'Gálatas|6', 'Efésios|6', 'Filipenses|4', 'Colossenses|4', 'I Tessalonicenses|5', 'II Tessalonicenses|3', 'I Timóteo|6', 'II Timóteo|4', 'Tito|3', 'Filêmon|1', 'Hebreus|13', 'São Tiago|5', 'I São Pedro|5', 'II São Pedro|3', 'I São João|5', 'II São João|1', 'III São João|1', 'São Judas|1', 'Apocalipse|22');
    $options = '';
    foreach($books as $book){
	$book = explode('|', $book);
	$options .= '<option value="'.$book[1] .'">'.$book[0] .'</option>';
    }
    return $options;
}

function bibliaCatolica_init(){
  register_sidebar_widget(__('B&iacute;blia Cat&oacute;lica Online'), 'widget_bibliaCatolica');
}

add_action("plugins_loaded", "bibliaCatolica_init");
?>
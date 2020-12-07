<?php
use Mpdf\Mpdf;

require_once __DIR__ . '/vendor/autoload.php';



$html = '

<htmlpagefooter name="footerCover">
    <table width="100%" cellpadding="0" height="60px" style="color:#fff;padding: 20px 0 26px 53px;vertical-apgn:midle;
    border-top: 0.5px sopd #fff;">
        <tr>
            <td><img src="./assets/logoWhite.svg" style="max-width:102px;height: 52px;"></td>
            <td style="font-family:gilroy; font-weight: 400; font-size: 11px; line-height: 16px;padding-left:25px;"> 
                <p style=""> Персональные генетические тесты: Здоровье | долголетие | диетология | витамины | национальность | красота | спорт | питание | заболевания | происхождение рода </p>
                <p> 8 800 3501 226 | order@genomed.ru | все тесты на <a href="https://genomed.ru" style="color:#fff;text-decoration:none;">https://genomed.ru</a>  </p>
            </td>
        </tr>
    </table>
</htmlpagefooter>

<htmlpagefooter name="MyFooter1">
    <table width="100%" height="104px" style="color:#fff;padding: 20px 0 26px 53px;vertical-apgn:midle;">
        <tr>
            <td><img src="./assets/logoWhite.svg" style="max-width:102px;height: 52px;"></td>
            <td style="font-family:gilroy; font-weight: 400; font-size: 11px; line-height: 16px;padding-left:25px;"> 
            <p> Персональные генетические тесты: Здоровье | долголетие | диетология | витамины | национальность | красота | спорт | питание | заболевания | происхождение рода </p>
            <p> 8 800 3501 226 | order@genomed.ru | все тесты на <a href="https://genomed.ru" style="color:#fff;text-decoration:none;">https://genomed.ru</a>  </p>
            </td>
        </tr>
    </table>
</htmlpagefooter>

<htmlpagefooter name="MyFooter2">
    <table width="100%" style="padding: 20px 0 26px 53px;vertical-apgn:midle;">
    <tr>
    <td><img src="./assets/logo.svg" style="max-width:102px;height: 52px;"></td>
    <td style="font-family:gilroy; font-weight: 400; font-size: 11px; line-height: 16px; color:#AEB8BE;padding-left:25px; "> 
    <p> Персональные генетические тесты: Здоровье | долголетие | диетология | витамины | национальность | красота | спорт | питание | заболевания | происхождение рода </p>
    <p> 8 800 3501 226 | order@genomed.ru | все тесты на <a href="https://genomed.ru" style="color:#AEB8BE;text-decoration:none;">https://genomed.ru</a>  </p>
    </td>
    </tr>
    </table>
</htmlpagefooter>

<htmlpagefooter name="MyFooter2-gray">
    <table width="100%" style="padding: 20px 0 26px 53px;vertical-apgn:midle;background: #F7F9FC;">
    <tr>
    <td><img src="./assets/logo.svg" style="max-width:102px;height: 52px;"></td>
    <td style="font-family:gilroy; font-weight: 400; font-size: 11px; line-height: 16px; color:#AEB8BE;padding-left:25px; "> 
    <p> Персональные генетические тесты: Здоровье | долголетие | диетология | витамины | национальность | красота | спорт | питание | заболевания | происхождение рода </p>
    <p> 8 800 3501 226 | order@genomed.ru | все тесты на <a href="https://genomed.ru" style="color:#AEB8BE;text-decoration:none;">https://genomed.ru</a>  </p>
    </td>
    </tr>
    </table>
</htmlpagefooter>

<htmlpagefooter name="MyFooter2-gray-border">
    <table width="100%" style="padding: 20px 0 26px 53px;vertical-apgn:midle;border: 0.5px solid #D1D1D1;z-index:100;">
    <tr>
    <td><img src="./assets/logo.svg" style="max-width:102px;height: 52px;"></td>
    <td style="font-family:gilroy; font-weight: 400; font-size: 11px; line-height: 16px; color:#AEB8BE;padding-left:25px; "> 
    <p> Персональные генетические тесты: Здоровье | долголетие | диетология | витамины | национальность | красота | спорт | питание | заболевания | происхождение рода </p>
    <p> 8 800 3501 226 | order@genomed.ru | все тесты на <a href="https://genomed.ru" style="color:#AEB8BE;text-decoration:none;">https://genomed.ru</a>  </p>
    </td>
    </tr>
    </table>
</htmlpagefooter>


<style>
@page {
margin: 0;
padding: 0;
margin-footer:0;
}

.cover {
   background-color: #000;
    color: #fff;
    width: 100%;
    height: 100%;
    padding: 0;
    margin: 0;
}
.cover-wrap {
    background: url("./assets/bg.png") no-repeat;
    background-image-resize: 4;
    background-position: bottom center;
    width: 100%;
    height: 100%;
}
.cover__titles {
    padding-top:160px;
    text-align:center;
}
.cover__titles h1 {
    font-family: montserrat;
    font-weight: 500;
    font-size: 28px;
    line-height: 42px;
    height:83px;
    margin-bottom:0px;
    padding-bottom:0;
}
.cover .subtitle {
    font-family: montserrat; 
    font-size: 18px;
    line-height: 27px;
    font-weight: 500;
}
.cover .subtitle2 {
    font-family: montserrat; 
    font-size: 24px;
    line-height: 36px;
    font-weight: 500;
}
.page {
    padding-top: 60px;
    padding-left: 53px;
    padding-right:53px;
}

.page2, .page3 {
    background-image-resize: 4;
    background-position: top center;
    width: 100%;
    height: 100%;
}

.page2 {
    background: url("./assets/page2bg.png") no-repeat;
}

.page3 {
    background: url("./assets/page3bg.png") no-repeat;
}

.page4 {
    background: url("./assets/page4.png) no-repeat;
    background-image-resize: 4;
    background-position: top center;
    width: 100%;
    height: 100%;
}

.page h2 {
    font-family: montserrat;
    font-size: 24px;
    line-height: 36px;
    font-weight: bold;
    margin-top:0;
}

.page .content-text p {
   font-family: gilroy;
    font-size: 14px;
    line-height: 21px;
}

.page h2.white {
    color: #fff;
}

.page h2.gray {
    color: #555A5C;
}

.page2 p , .page3 p, {
    color: #fff;
    margin-bottom: 20px;
}

.page4 h2 {
    margin-bottom: 10px;
}

.page4 .content-text p {
    color: #555A5C ;
    font-weight:400;
}

.effect-item {
    text-align:center;
    font-family: montserrat;
    font-size: 12px;
    color:#555A5C;
}

.page.page5 {
    padding-right:0;
    padding-left:0;
    padding-bottom:0;
}

.factors .effect-item {
    text-align:center;
}

.page6 p {
    margin: 0;
}

.radius-box {
    border-radius: 10px;
    border: 1px sopd #E5ECF0;
    width: 994px;
    height: 334px;
    background: transparent url(\'./assets/page7-bg.png\') no-repeat;  
    background-image-resize: 2 ;
    background-position: 750px center;
    margin-right:100px;
}

.gene-content p {
    font-size:15px;line-height:22px;
}

.page7-tabl2 {
    margin: 25px 0 0 47px;
    font-family:gilroy;
    width: 600px;
    border-collapse:collapse;
}

.page7-tabl2 tr.rowValue td {
    text-align:left;
    font-size: 15px;
}

.page7-tabl2 tr.row1 td.blue-td {
    background-image-resize: 0;
    height: 35px;
    color:#fff;
    text-align:center;
    background-position: center center;
    font-size: 16px;
    line-height: 24px;
    margin:0;
    padding:0;
    
}

.blue-td1 {
    background: transparent url(\'./assets/blue-1.svg\') no-repeat;
    width: 100px;
    height: 32px;
}

.blue-td2 {
    background: transparent url(\'./assets/blue-2.svg\') no-repeat;
    width: 160px;
    height: 31px;
}

.blue-td3 {
    background: transparent url(\'./assets/blue-2.svg\') no-repeat;
    height: 31px;
    width: 150px;
}

.rowValue td.col1 {
    width: 100px;
    text-align:left;
    padding-left: 30px;
}

.rowValue td.col2 {
    width: 150px;
    text-align:left;
    padding-left: 50px;
}

.rowValue td.col3 {
    width: 290px;
    text-align:left;
    padding-left:130px;
}

.page8-risk tr td.gray {
    background: transparent url(\'./assets/gray-box.svg\') no-repeat;
    background-position: left center;
    background-image-resize: 0;
    width: 241px;
    height: 149px;
    padding: 17px 20px 13px 20px;
}

.page8-risk {
    font-family:gilroy;
    font-size:12px;
    line-height:150%;
}

.page9, .page10, .page11 {
    background-position: right center;
    background-image-resize: 5;
    height: 100%;
    margin:0;
}

.page9 {
    background: transparent url(\'./assets/page9.png\') no-repeat;
}

.page10 {
    background: transparent url(\'./assets/page10.png\') no-repeat;
}

.page11 {
    background: transparent url(\'./assets/page11.png\') no-repeat;
}

.page9 p , .page10 p , .page11 p {
    margin: 0 0 23px 0;
}

.page12 {
    font-family:gilroyM;
    color: #555A5C;
}

.page12 table tr td {
    font-family:gilroyM;
    color: #555A5C;
}

.page12-food-box   {
    background: transparent url(\'./assets/page12-1.svg\') no-repeat;
    background-position: center center;
    background-image-resize: 0;
    width: 476px;
    height: 410px;
    vertical-align:top;
    padding: 15px 17px 33px 16px;
}

.page13, .page14 {
    background-image-resize: 4;
    background-position: top center;
    width: 100%;
    height: 100%;
}

.page13 {
    background: transparent url(\'./assets/page13.png\') no-repeat;
}

.page14 {
    background: transparent url(\'./assets/page14.png\') no-repeat;
}

.page13 table tr td {
    color: #555A5C;
    font-size: 13px;
    line-height: 150%;
    padding-right:40px;
}

.page14 table tr td {
    color: #555A5C;
    font-size: 13px;
    line-height: 150%;
    padding-right:30px;
}

.page13 table tr.row1 td , .page14 table tr.row1 td {
    height: 70px;
    vertical-align:top;
}

.page13 table tr.row td , .page14 table tr.row td{
    height: 125px;
    vertical-align:top;
    padding-top:3px;
    font-family: gilroy-medium;
}

.page13 tr td.title , .page14 tr td.title  {
    padding-top:0px;
    vertical-align:top;
    font-family: gilroy-semibold;
    color: #555A5C;
    padding-top:0;
    margin-top:0;
    font-size: 18px;
}


</style>

<sethtmlpagefooter name="footerCover" value="on" />
    <div class="cover">
    <div class="cover-wrap">
        <div class="cover__titles">
            <p class="subtitle">Персональный отчет</p>
            <h1>«НУТРИГЕНЕТИКА ОПТИМАЛЬНЫЙ<br> ВАРИАНТ ДИЕТЫ ДЛЯ СНИЖЕНИЯ ВЕСА»</h1>
            <p class="subtitle2">Иванов Иван Иванович</p>
        </div>
    </div>
</div> 



<div class="page page2" style="page-break-before:left;">
    <h2 class="white"> Генетика в обычной жизни </h2>
    <div class="page2__content content-text" style="width:53%">
        <p>
        В спиральной структуре ДНК нашего организма содержится всего четыре вида нуклеотидов A, T, G, C. Они располагаются в определенной последовательности и составляют цепочку размером 3,1 миллиарда нуклеотидов. Это и есть генетический код, в котором заложена вся программа функционирования организма человека. Вся цепочка ДНК поделена на функциональные фрагменты – гены, которые кодируют белки организма, регулируют активность ферментов и выполняют множество других функций. Но, гены не одинаковы у разных людей. Один и тот же ген может иметь незначительные отличия в структуре – полиморфизмы, когда один нуклеотид меняется на другой, исчезает или удваивается. При этом меняется и функция гена или его активность. 
        </p>
        <p>
        Полиморфизмы генов определяют внешние признаки - такие, как цвет волос или глаз, особенности усвоения пищи, склонность к набору веса, психические особенности, склонность к заболеваниям и многое другое. Полиморфизмы гена, отвечающий за быстрый набор массы тела и медленное похудение, был значимым для выживания человека в далекие первобытные времена, но теперь от такого влияния больше вреда. Тогда как, например, гены, которые отвечают за развитие интеллекта, речи, языковых способностей сейчас намного более существенны для полноценной качественной жизни. Скажем, полиморфизмы гена, отвечающего за структуру или цвет волос, нейтрален и не особо важен, тогда как полиморфизмы гена, отвечающего за склонность к возникновению диабета крайне желательно проанализировать
        </p>
    </div>
</div>
<sethtmlpagefooter name="MyFooter1" value="on" />

<div class="page page3" style="page-break-before:left;">
    <h2 class="white"> Генетика в обычной жизни </h2>
    <div class="page3__content content-text" style="width:60%">
        <p>
            Прекрасная новость, что в наше время есть возможность разобраться, какие факторы риска находятся в вашем индивидуальном генетическом коде. Это даст важнейшую информацию для предотвращения влияния вредный наследственных или внешних факторов. Знание генетических особенностей своего организма может помочь в разработке индивидуальной программы профилактики и диагностики, а также полезно в целом для мотивации человека к здоровому образу жизни и контролю своего здоровья. И если человек будет соблюдать все предписания врача, вести определённый образ жизни, то можно снизить риск возникновения заболеваний. Кроме того, многие заболевания вызываются определёнными факторами, которые можно исключить, либо ограничить в повседневной жизни. Так, например, человек, который не пьёт молоко, никогда не почувствует симптомов непереносимости лактозы, даже когда его генетический код содержит такую особенность. В то же время следует знать, что генетический фактор не является определяющим для большинства заболеваний. И хотя для некоторых заболеваний, таких, например, как рак молочной железы наличие определенных генетических вариантов связано с вероятностью развития заболевания в 80% случаев для большинства заболеваний значение генетического фактора не превышает 10 - 15%. Для таких заболеваний большее значение имеет образ жизни, питание, факторы окружающей среды. Во многих случаях значимые риски связаны с хроническими инфекциями. Таким образом данные генетического обследования не являются самостоятельными факторами и их значение для каждого конкретного человека определяется врачом на основании совокупности всех клинических данных.
        </p>
        <p>
            Узнайте больше о своем здоровье, посоветуйтесь в врачом, примите меры. Это поможет сохранить здоровье и хорошее самочувствие на долгие годы.
        </p>
    </div>
</div>
<sethtmlpagefooter name="MyFooter1" value="on" />

<div class="page page4" style="page-break-before:left;">
    <h2 class="gray"> На чем основывается данное исследование</h2>
    <div class="page4__content content-text" style="width:100%">
        <p>
            <b>Представленный отчет состоит из нескольких частей.</b>
        </p>
        <p>
            <b>Первая часть отчета</b> представляет данные лабораторных исследований, выполненных в лицензированной клинической лаборатории на одобренных для клинических тестов оборудовании и реактивов. Эти данные могут использоваться врачом независимо от остальной части отчета для оценки генетических рисков в отношении здоровья пациента.
        </p>
        <p>
            <b>Вторая часть отчета</b> представляет собой обзор данных научных и клинических исследований, публикаций в научной литературе, данных полногеномных ассоциативных исследований (GWAS), международных баз данных, собственной базы данных лаборатории и других данных в отношении обнаруженных у Вас генетических вариантов.  Эта информация постоянно отслеживается, обновляется и  пополняется нашей командой врачей, научных сотрудников и биоинформатиков. Вся новейшая информация сразу попадает в нашу базу знаний и отображается в отчете. Эти данные структурированы следующим образом: 
        </p>
        <p>
           <b>1.</b> Описание исследуемого полиморфизма, его локализации в геноме и его функции. 
        </p>
        <p>
            <b>2.</b> Генотипы полиморфизма. Это включенные в исследование генетические варианты полиморфизма, их частота в европейской популяции и связь с риском возникновения многофакторных заболеваний. 
        </p>
        <p>
            <b>3.</b> Описание конкретного генетического варианта для каждого полиморфизма, который был обнаружен. В описании приводятся данные о связи обнаруженного варианта с риском развития заболеваний, влияния на метаболизм и индивидуальные особенности организма, на основании имеющихся научных данных. В некоторых случаях могут содержатся рекомендации или другая информация если она признана достоверной медицинским сообществом. 
        </p>
        <p>
            <b>4.</b> Расчет интегративного риска. Эта часть отчета содержит информацию об интегративном (теоретически вычисленном на основании данных по всем генетическим вариантам) риске для здоровья человека. Индекс риска - это условная величина которая сравнивается с таковой в европейской популяции и показывает насколько ваши генетические риски выше или ниже среднепопуляционного риска. Для расчета среднепопуляцонного риска используются частоты генотипов из базы данных GnomAD v2.1.1
        </p>
        
    </div>
   
</div>
<sethtmlpagefooter name="MyFooter2" value="on" />

<div class="page page5" style="page-break-before:left;">
    <h2 class="gray" style="margin-bottom:70px;padding-left:53px;"> На чем основывается данное исследование</h2>
    <div class="page5__content" style="width:100%">
        <p class="subtitle" style="text-align:center;font-family:montserrat;font-weight:600;font-size:22px;line-height:33px;color:#555A5C;margin-bottom:10px;">
            Как получить максимальный эффект от исследования
        </p>
        <table class="effect" style="margin:0 auto 0px auto;border-collapse:collapse;" width="990px">
            <tr>
                <td width="280px" style="text-align:center;padding: 0 35px;">
                    <p class="effect-item"> Узнать генетические<br> предрасположенности </p>
                </td>
                <td style="text-align:center;vertical-align:middle;">   
                     <img src="./assets/arrow-shadow.jpg" width="70px" height="70px" style="padding-top:10px;padding-right:5px;">
                </td>
                <td width="27%" style="text-align:center;padding: 0;">
                    <p class="effect-item">Следовать рекомендациям<br> по питанию и образу жизни</p>
                </td>
                <td  style="text-align:center;vertical-align:middle;">
                    <img src="./assets/arrow-shadow.jpg" width="70px" height="70px" style="padding-top:10px;" >
                </td>
                <td width="30%" style="text-align:center;padding: 0 15px;">
                    <p class="effect-item"> Жить полной<br> и здоровой жизнью</p>
                </td>
            </tr>
        </table>
        <table class="factors" style="background: #F7F9FC;padding-top:40px;padding-left:53px;padding-right:53px;text-align:center;" width="994px">
            <tr>
                <td width="310px" style="">
                    <img src="./assets/page5-1.png" width="310" height="170" style="margin-bottom:20px;">
                    <p class="effect-item">Генетика</p>
                </td>
                <td style="width:32px"></td>
                <td width="310px" style="">
                    <img src="./assets/page5-2.png" width="310" height="170" style="margin-bottom:20px;">
                    <p class="effect-item">Питание и образ жизни</p>
                </td>
                <td style="width:32px"></td>
                <td width="310px" style="">
                    <img src="./assets/page5-3.png" width="310" height="170" style="margin-bottom:20px;">
                    <p class="effect-item">Внешние факторы</p>
                </td>
            </tr>
        </table>
        <table align="center" style="background: #F7F9FC;" width="100%">
            <tr>
                <td width="100%" align="center" >
                    <img src="./assets/page5-line.svg" width="690" height="70" style="padding-top:5px;">
                </td>
            </tr>
            <tr>
                <td style="text-align:center;text-transform: uppercase;font-family: montserrat;font-size:18px;line-height: 27px;color: #555A5C;padding-bottom:15px; ">
                    <b>долголетие, молодость, здоровье</b>
                </td>
            </tr>
        </table>
    </div>
</div>
<sethtmlpagefooter name="MyFooter2-gray" value="on"/>

<div class="page page6" style="page-break-before:left;">
    <h2 class="gray" style="margin-bottom:27px;">Как рассчитывается риск</h2>
    <div class="page6__content content-text" style="width:100%; color: #555A5C; margin-bottom:15px;">
        <p>
        Интегративный риск представляет собой суммирование вероятных эффектов или рисков нескольких генетических вариантов в отношении одного и того же признака, состояния или заболевания.
        <p>
        <p>
        Для расчета интегративного риска каждому возможному генетическому варианту каждого полиморфизма на основании литературных данных и данных полногеномных ассоциативных исследований (GWAS) присвоена условная величина, связанная с вероятностью и выраженностью его влияния на такие риски. Такая величина используется для расчета отношения индивидуального риска к среднепопуляционному риску. Это дает возможность оценить, насколько индивидуальный генетический риск пациента выше или ниже среднепопуляционного.
        </p>
        <p>
        <b>Индивидуальный интегративный риск</b> представляет собой расчет генетического риска, основанного на совокупности рисков для каждого генетического варианта полиморфизма, обнаруженного у пациента.
        </p>
        <p>
        <b>Среднепопуляционный интегративный риск</b> представляет собой расчет генетического риска, основанного на совокупности рисков для каждого генетического варианта полиморфизма, с учетом частоты каждого генотипа в популяции.
        </p>
        <p>
        <b>Минимальный риск</b> - теоретически возможный риск, когда имеется сочетание всех благоприятных или нейтральных генетических вариантов. </p>
        <p>
        <b>Максимальный риск</b> - теоретически возможный риск, когда имеется сочетание всех неблагоприятных генетических вариантов.
        </p>
    </div>
    <div class="content-text">
 
        <p class="risk-title" style="margin-bottom:5px;">Индивидуальный риск</p>
        <p class="risk-title" style="margin-bottom:-10px;">Высокий</p>

        <div>
            <img src=\'./assets/flag.svg\' style="margin-bottom:-10px;margin-left: 470px;">
            <p style="width:552px;height:10px; background: linear-gradient(top right, rgb(223, 9, 22,0.5) 0%, #029DE1 100%);margin-bottom:20px;">
            </p>
        </div>

        <p class="risk-title" style="margin-bottom:5px;padding-top:20px;">Среднепопуляционный риск</p>
        <p class="risk-title"  style="margin-bottom:-10px;">Средний риск</p>

        <div>
            <img src=\'./assets/flag.svg\' style="margin-bottom:-10px;margin-left: 300px;">
            <p style="width:552px;height:10px; background: linear-gradient(top right, rgb(223, 9, 22,0.5) 0%, #029DE1 100%);margin-bottom:20px;">
            </p>
        </div>
        
        <div style="background: #F7F9FC;border-radius:6px;color: #555A5C;">
            <p style="padding:22px 24px 17px 23px;font-size:12px;">
            Следует знать, что рассчитанный индивидуальный генетический риск какого-либо заболевания или состояния основан только на включенных в исследование полиморфизмах. Другие полиморфизмы, другие генетические и негенетические факторы могут оказывать значимое влияние на риски заболеваний. Поэтому окончательная оценка риска вероятности какого-либо заболевания может быть сделана только врачом на основании всех имеющихся у него данных.
            </p>
        </div>
    </div>
</div>
<sethtmlpagefooter name="MyFooter2" value="on"/>



<div class="page page7" style="page-break-before:left;">
    <h2 class="gray" style="margin-bottom:27px;">Результаты лабораторного исследования</h2>
    <div class="page7__content content-text">
        <table style="font-family:gilroy;margin-bottom:29px;">
            <tr>
                <td style="padding-right:80px;padding-bottom:10px;color: #555A5C;">Наименование исследования:</td>
                <td style="padding-bottom:10px;color: #555A5C;">Нутригенетика. Оптимальный вариант диеты для снижения веса</td>
            </tr>
            <tr>
                <td style="padding-right:80px;padding-bottom:10px;color: #555A5C;">Заказчик:</td>
                <td  style="padding-bottom:10px;color: #555A5C;">Иванов Иван Иванович</td>
            </tr>
            <tr>
                <td style="padding-right:80px;padding-bottom:10px;color: #555A5C;">Дата рождения</td>
                <td style="padding-bottom:10px;color: #555A5C;">11.12.1986</td>
            </tr>
            <tr>
                <td style="padding-right:80px;padding-bottom:10px;color: #555A5C;">Пол:</td>
                <td style="padding-bottom:10px;color: #555A5C;">женский</td>
            </tr>
            <tr>
                <td style="padding-right:80px;padding-bottom:10px;color: #555A5C;">Номер исследования:</td>
                <td style="padding-bottom:10px;color: #555A5C;">177950</td>
            </tr>
        </table>

        <div class="radius-box-wrap" style="background: #FCFDFE;">
            <div class="radius-box">
                <table class="page7-tabl2">
                    <tr class="row1" style="padding-bottom:21px;">
                        <td class="blue-td blue-td1">
                            Ген
                        </td>
                        <td width="70px"></td>
                        <td class="blue-td blue-td2">
                            Полиморфизм
                        </td>
                     
                        <td class="blue-td blue-td3">
                            Ваш генотип
                        </td>
                    </tr>
                    <tr><td height="21px"></td></tr>
                    <tr class="rowValue">
                        <td class="col1">APOA2</td>
                        <td width="70px"></td>
                        <td class="col2">rs5082</td>
                        <td class="col3">G/A</td>
                    </tr>
                    <tr class="rowValue">
                        <td class="col1">PPARG</td>
                        <td width="40px"></td>
                        <td class="col2">rs1801282</td>
                        <td class="col3">C/C</td>
                    </tr>
                    <tr class="rowValue">
                        <td class="col1">FABP2</td>
                        <td width="40px"></td>
                        <td class="col2">rs1799883</td>
                        <td class="col3">T/C</td>
                    </tr>
                    <tr class="rowValue">
                        <td class="col1">ADRB2</td>
                        <td width="40px"></td>
                        <td class="col2">rs1042714</td>
                        <td class="col3">C/C</td>
                    </tr>
                    <tr class="rowValue">
                        <td class="col1">INS</td>
                        <td width="40px"></td>
                        <td class="col2">rs689</td>
                        <td class="col3">A/T</td>
                    </tr>
                    <tr class="rowValue">
                        <td class="col1">FTO</td>
                        <td width="40px"></td>
                        <td class="col2">rs9939609</td>
                        <td class="col3">T/A</td>
                    </tr>
                    <tr class="rowValue">
                        <td class="col1">TCF7L2</td>
                        <td width="40px"></td>
                        <td class="col2">rs12255372</td>
                        <td class="col3">G/G</td>
                    </tr>
                    <tr class="rowValue">
                        <td class="col1">TCF7L2</td>
                        <td width="40px"></td>
                        <td class="col2">rs7903146</td>
                        <td class="col3">C/T</td>
                    </tr>
                    <tr class="rowValue">
                        <td class="col1">APOA1</td>
                        <td width="40px"></td>
                        <td class="col2">rs670</td>
                        <td class="col3">C/C</td>
                    </tr>
                    <tr class="rowValue">
                        <td class="col1">APOE</td>
                        <td width="70px"></td>
                        <td class="col2">rs429358, rs7412</td>
                        <td class="col3" >T/T, C/T &nbsp; APO-E2/E3</td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
</div>
<sethtmlpagefooter name="MyFooter2" value="on"/>


<div class="page page8" style="padding: 45px 43px 0 53px;page-break-before:left;">
    <h2 class="gray" style="margin-bottom:46px;text-transform:uppercase;">ОБЩИЕ РИСКИ / ПРЕДРАСПОЛОЖЕННОСТИ</h2>
    <div class="page8__content content-text">  
        <table class="page8-risk" style="border-collapse:collapse;" width="100%">
            <tr>
                <td class="gray">
                    <img src=\'./assets/radio-red.svg\' width="12px" height="12px" style="padding-right:5px;margin-bottom:-2px;">
                     <span style="color: #596363;">Высокий риск</span>
                    <p><img src=\'./assets/risk1.svg\' style="padding-top:14px;padding-bottom:7px;" height="50"></p>
                    <p style="color:#555A5C;width:150px;">Риск избыточной массы<br> тела</p>
                </td>              
                <td class="gray">
                    <p>
                    <img src=\'./assets/radio-red.svg\' width="12px" height="12px" style="padding-right:5px;margin-bottom:-2px;">
                     <span style="color: #596363;">Низкая эффективность</span>
                     </p>
                    <p><img src=\'./assets/risk2.svg\' style="padding-top:14px;padding-bottom:7px;" height="50"></p>
                    <p style="color:#555A5C;width:150px;">Эффективность низкожировой<br> диеты</p>
                </td>           
               <td class="gray">
                    <p>
                    <img src=\'./assets/radio-red.svg\' width="12px" height="12px" style="padding-right:5px;margin-bottom:-2px;">
                    <span style="color: #596363;">Низкая эффективность</span>
                    </p>
                    <p><img src=\'./assets/risk3.svg\' style="padding-top:14px;padding-bottom:7px;" height="50"></p>
                    <p style="color:#555A5C;width:150px;">Эффективность низкоуглеводной диеты</p>
                </td>              
                <td class="gray">
                    <p>
                    <img src=\'./assets/radio-yellow.svg\' width="12px" height="12px" style="padding-right:5px;margin-bottom:-2px;">
                    <span style="color: #596363;">Средняя эффективность</span>
                    </p>
                    <p><img src=\'./assets/risk4.svg\' style="padding-top:14px;padding-bottom:7px;" height="50"></p>
                    <p style="color:#555A5C;width:150px;">Ограничение насыщенных жирных кислот</p>
                </td>
            </tr>
            <tr><td style="padding-top:10px;"></td></tr>
            <tr>
                <td class="gray">
                    <p>
                    <img src=\'./assets/radio-green.svg\' width="12px" height="12px" style="padding-right:5px;margin-bottom:-2px;">
                    <span style="color: #596363;">Низкая потребность</span>
                    </p>
                    <p><img src=\'./assets/risk5.png\' style="padding-top:14px;padding-bottom:7px;" height="50"></p>
                    <p style="color:#555A5C;width:150px;">Потребность<br> в разгрузочных днях</p>
                </td>
                <td  class="gray">
                    <p>
                    <img src=\'./assets/radio-red.svg\' width="12px" height="12px" style="padding-right:5px;margin-bottom:-2px;">
                    <span style="color: #596363;">Высокая выраженность</span>
                    </p>
                    <p><img src=\'./assets/risk6.svg\' style="padding-top:14px;padding-bottom:7px;" height="50"></p>
                    <p style="color:#555A5C;width:150px;">Выраженность<br> ЙО-ЙО эффекта</p>
                </td>
                <td  class="gray">
                    <p>
                    <img src=\'./assets/radio-green.svg\' width="12px" height="12px" style="padding-right:5px;margin-bottom:-2px;">
                    <span style="color: #596363;">Низкая склонность</span>
                    </p>
                    <p><img src=\'./assets/risk7.svg\' style="padding-top:14px;padding-bottom:7px;" height="50"></p>
                    <p style="color:#555A5C;width:150px;">Чувство насыщения и склонность к перееданию
                    </p>
                </td>
                <td  class="gray">
                    <p>
                    <img src=\'./assets/radio-yellow.svg\' width="12px" height="12px" style="padding-right:5px;margin-bottom:-2px;">
                    <span style="color: #596363;">Средний риск</span>
                    </p>
                    <p><img src=\'./assets/risk8.svg\' style="padding-top:14px;padding-bottom:7px;" height="50"></p>
                    <p style="color:#555A5C;width:150px;">Риск сахарного диабета<br>  2 типа
                    </p>
                </td>
            </tr>
            <tr><td style="padding-top:10px;"></td></tr>
            <tr>
                <td class="gray">
                    <p>
                    <img src=\'./assets/radio-red.svg\' width="12px" height="12px" style="padding-right:5px;margin-bottom:-2px;">
                    <span style="color: #596363;">Высокий риск</span>
                    </p>
                    <p><img src=\'./assets/risk9.svg\' style="padding-top:14px;padding-bottom:7px;" height="50"></p>
                    <p style="color:#555A5C;width:150px;">Риск патологического отложения жира вокруг внутренних органов
                    </p>
                </td>
            
                <td  class="gray">
                    <p>
                    <img src=\'./assets/radio-red.svg\' width="12px" height="12px" style="padding-right:5px;margin-bottom:-2px;">
                    <span style="color: #596363;">Высокая потребность</span>
                    </p>
                    <p><img src=\'./assets/risk10.svg\' style="padding-top:14px;padding-bottom:7px;" height="50"></p>
                    <p style="color:#555A5C;width:150px;">Потребность в мононенасыщенных жирных кислотах
                    </p>
                </td>
            
                <td class="gray">
                    <p>
                    <img src=\'./assets/radio-red.svg\' width="12px" height="12px" style="padding-right:5px;margin-bottom:-2px;">
                    <span style="color: #596363;">Высокая потребность</span>
                    </p>
                    <p><img src=\'./assets/risk11.svg\' style="padding-top:14px;padding-bottom:7px;" height="50"></p>
                    <p style="color:#555A5C;width:150px;">Потребность в Омега-3 жирных кислотах
                    </p>
                </td>
            </tr>
        </table>
    </div>
</div>
<sethtmlpagefooter name="MyFooter2-gray-border" value="on"/>


<div class="page page9" style="page-break-before:left;">
    <h2 class="gray" style="text-transform:uppercase;margin:0 0 25px 0;">ОБЩИЕ РЕКОМЕНДАЦИИ</h2>
    <div class="page9__content content-text" style="width:504px;color: #555A5C;">  
        <p>
        Негативный эффект генов:
        </p>
        <p>
        - Ваш генетический риск избыточной массы тела и ожирения соответствует повышенному, такой риск встречается примерно у 35% людей. Вам сложнее поддерживать нормальный вес или снижать массу тела при избыточном весе, чем пациентам с низким генетическим риском.
        </p>
        <p>
        - Ниже индивидуальная потребность в разгрузочных днях, предпочтительнее равномерный тип питания.
        </p>
        <p>
        - У Вас выявлена предрасположенность к перееданию из-за позднего наступления чувства насыщения во время еды. Вы хуже контролируете объем разовой порции, чем люди с благоприятным генотипом.
        </p>
        <p>
        - При Вашем генотипе недостаток мононенасыщенных жирных кислот в рационе может привести к более выраженным негативным последствиям, чем при других генотипах.
        </p>
        <p>
        - Ваш риск нарушения углеводного обмена и сахарного диабета 2 типа выше среднепопуляционного. Вам необходимо ограничивать потребление продуктов с высоким гликемическим индексом.
        </p>    
    </div>
</div>
<sethtmlpagefooter name="MyFooter2-gray-border" value="on"/>

<div class="page page10" style="page-break-before:left;">
    <h2 class="gray" style="text-transform:uppercase;margin:0 0 30px 0;">ОБЩИЕ РЕКОМЕНДАЦИИ</h2>
    <div class="page10__content content-text" style="width:633px;color: #555A5C;">  
        <p>
        Рекомендации:
        </p>
        <p>- При необходимости снизить вес для вас более эффективна средиземноморская диета. </p>
        <p>- Не рекомендуются разгрузочные дни и краткосрочные диеты со значительным ограничением калорий. Равномерный тип питания предпочтителен для Вас. При необходимости снизить Вес лучше придерживаться диеты с небольшим ограничением калорий более продолжительный срок.</p>
        <p> - В связи с предрасположенностью к перееданию Вам рекомендовано: соблюдение режима питания – не менее четырех приемов пищи в день, при этом заранее определяйте объем разовой порции. Старайтесь дольше пережевывать пищу. Эта полезная привычка благоприятно влияет на пищеварение, а также дает дополнительное время на активацию нейрогормональных веществ, и Вы почувствуете ощущение сытости раньше, чем съедите лишние калории. Включайте в свой рацион «балластные вещества», которые дают «объем желудку», но не дают лишних калорий. Такие вещества в большом количестве содержатся в сырых овощах и фруктах. Старайтесь начинать прием пищи с овощного салата.</p>
        <p>- При Вашем генотипе необходимо следить за достаточным потреблением мононенасыщенных жирных кислот. Оливковое и арахисовое масло, орехи и авокадо – источник МНЖК.</p>
        <p>- Рекомендовано сократить потребление продуктов, богатых «быстрыми углеводами» (гликемический индекс выше 70) для профилактики СД2. Рекомендовано: корица имбирь, куркума топинамбур – полезные для Вас продукты, снижающие риск инсулинорезистентность.</p>
    </div>
</div>
<sethtmlpagefooter name="MyFooter2-gray-border" value="on"/>


<div class="page page11" style="page-break-before:left;">
    <h2 class="gray" style="text-transform:uppercase;margin:0 0 30px 0;">ОБЩИЕ РЕКОМЕНДАЦИИ</h2>
    <div class="page11__content content-text" style="width:485px;color: #555A5C;">  
        <p>
        Благоприятный эффект генов:
        </p>
        <p>
        - Вы менее чувствительны к избытку жиров в рационе, чем люди с неблагоприятными генотипами.
        </p>
        <p>
        - При рационе, содержащем большое количество углеводов, Вы медленнее набираете вес, чем люди с другими генотипами.
        </p>
        <p>
        - У Вас не выявлено генетической предрасположенности к выраженному йо-йо эффекту. Ваш риск стремительного возвращения к исходному весу после успешного завершения диеты ниже, чем у людей с другим генотипом.
        </p>
        <p>
        - Средняя потребность в ограничении потребления "животных" жиров (насыщенных жирных кислот).
        </p>
        <p>
        - Средняя потребность в повышении потребления Омега-3 ненасыщенных жирных кислот.
        </p>
        <p>
        - У Вас не выявлено генетической предрасположенности к повышенному отложению жира вокруг внутренних органов.
        </p>
    </div>
</div>
<sethtmlpagefooter name="MyFooter2-gray-border" value="on"/>


<div class="page page12" style="page-break-before:left;">
    <h2 class="gray" style="margin:0 0 30px 0;">Рекомендации по питанию</h2>
    <div class="page12__content content-text" style="margin-bottom:0;">  
        <p style="margin-bottom:12px;margin-top:0;">
            Вам рекомендуется: <span style="font-weight:bold">Низкоуглеводная диета</span></p>
        <p style="width:994px;margin-bottom:25px;">
            <span style="font-weight:bold">Низкоуглеводная диета</span> заключается в ограничении количества потребляемых углеводов, предпочтение отдается овощам и фруктам с низким содержанием крахмала, белкам и жирам. Не желательно исключает из рациона углеводы полностью, употребляйте больше продуктов из цельного зерна, например, овсяные хлопья, хлеб и макаронные изделия из муки грубого помола, кукурузные хлебцы. К богатым углеводами продуктам относятся хлеб, крупы, крахмалосодержащие овощи и фрукты.
        </p>

        <table class="page12-food" height="410px">
            <tr>
                <td width="476" class="page12-food-box">
                    <table  style="margin:0;vertical-align:top;">
                        <tr>
                            <td class="border-gray" style="vertical-align:top;">           
                                <table style="padding-bottom:10px;">
                                    <tr>
                                        <td style=""> 
                                        <img src=\'assets/plus.svg\' width="35" height="35" style="padding-right:7px;">                           
                                        </td>
                                        <td>
                                            <span style="font-family:montserrat-semibold;text-transform:uppercase;font-size:12px;line-height:150%;height:35px;">Рекомендуется</span> 
                                        </td>
                                    </tr>
                                </table>    
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <table style="font-family: gilroy; font-size: 13px;line-height:150%;color: #555A5C;">
                                    <tr>
                                        <td>• Мясо. Говядина, баранина, свинина, курятина и другие.</td>
                                    <tr>
                                    <tr>
                                        <td>• Рыба: лосось, форель, пикша и другие. Лучше дикая рыба.</td>
                                    </tr>
                                    <tr>
                                        <td>• Яйца: обогащенные омега-3 или от кур, вскормленных травой</td>
                                    </tr> 
                                    <tr>
                                        <td>• Овощи: шпинат, брокколи, цветная капуста, морковь и другие.</td>
                                    </tr>
                                    <tr>
                                        <td>• Фрукты: яблоки, апельсины, груши, черника, клубника.</td>
                                    </tr>
                                    <tr>
                                        <td>• Орехи и семена: миндаль, грецкие орехи, семена подсолнечника и другие.</td>
                                    </tr>
                                    <tr>
                                        <td>• Молочные продукты с высоким содержанием жира: сыр, сливочное масло, сливки, йогурт.</td>
                                    </tr>
                                    <tr>
                                        <td> • Жиры и масла: кокосовое масло, сливочное масло, сало, оливковое масло и рыбий жир.</td>
                                    </tr>
                                </table>
                            </td>
                        </tr>
                    </table>
                </td>
                <td width="40"></td>
                <td width="476"  class="page12-food-box">
                    <table style="margin:0;">
                        <tr>
                            <td class="border-gray" style="vertical-align:top;">           
                                <table style="padding-bottom:10px;">
                                    <tr>
                                        <td style=""> 
                                        <img src=\'assets/minus.svg\' width="35" height="35" style="padding-right:7px;">                           
                                        </td>
                                        <td>
                                            <span style="font-family:montserrat-semibold;text-transform:uppercase;font-size:12px;line-height:150%;height:35px;">Исключить</span> 
                                        </td>
                                    </tr>
                                </table>    
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <table style="font-family: gilroy; font-size: 13px;line-height:150%;color: #555A5C;">
                                    <tr>
                                        <td>• Изделия из пшеничной муки высшего и 1-го сорта, сдобного теста, торты, пирожные;</td>
                                    <tr>
                                    <tr>
                                        <td>• Плавленый сыр, творожные сладкие сырки, шоколад, какао, сгущённое молоко, сахар;</td>
                                    </tr>
                                    <tr>
                                        <td>• Варенье, мед;</td>
                                    </tr> 
                                    <tr>
                                        <td>• Манная и рисовая каши;</td>
                                    </tr>
                                    <tr>
                                        <td>• Колбасы, копчености, мясные и рыбные консервы, гусь, утка, внутренние органы животных, мозги, животный жир;</td>
                                    </tr>
                                    <tr>
                                        <td>• Маринованные овощи, квашеная капуста;</td>
                                    </tr>
                                    <tr>
                                        <td>• Сладкие сорта плодов и ягод (бананы, виноград, финики, инжир, изюм);</td>
                                    </tr>
                                    <tr>
                                        <td> • Бутербродный маргарин, кулинарные жиры, майонез;</td>
                                    </tr>
                                    <tr>
                                        <td>• Соки с добавлением сахара – соки длительного хранения.</td>
                                    </tr>
                                </table>
                            </td>
                        </tr>
                    </table>
                </td>
            </tr>
        </table>

    </div>
</div>
<sethtmlpagefooter name="MyFooter2" value="on"/>


<div class="page page13" style="page-break-before:left;">
    <h2 class="gray" style="margin:0 0 55px 0;">Меню на неделю</h2>
    <div class="page13__content content-text" >  
        <table width="870" height="500" style="border 1px solid black;">
            <tr class="row1">
                <td class="title" width="120"></td>
                <td class="title">Понедельник</td>
                <td class="title">Вторник</td>
                <td class="title">Среда</td>
            </tr>
            <tr class="row">
                <td class="title" width="120">Завтрак</td>
                <td>Творожная запеканка, огурец
                (помидор), кофе или чай без сахара;</td>
                <td>100-150 г отварной курицы, омлет из двух яиц, кофе или чай без сахара;</td>
                <td>Овощи тушеные, посыпанные тертым сыром, кофе или чай без сахара;</td>
            </tr>
            <tr class="row">
                <td class="title" width="120">Обед</td>
                <td>200 г тушеной рыбы с фасолевым гарниром, хлебец;</td>
                <td>Грибной суп, заправленный сметаной или сливками;</td>
                <td>Суп овощной на курином бульоне;</td>
            </tr>
            <tr class="row">
                <td class="title" width="120">Полдник</td>
                <td>Грейпфрут</td>
                <td>Натуральный йогурт или стакан кефира с измельченными огурцами и зеленью;</td>
                <td>Натуральный йогурт или яблоко;</td>
            </tr>
            <tr class="row">
                <td class="title" width="120">Ужин</td>
                <td>Каша из темного риса с овощами.</td>
                <td>Отварная говядина, овощной салат.</td>
                <td>Отварная куриная грудка с тушеной капустой.</td>
            </tr>
        </table>
    </div>
</div>
<sethtmlpagefooter name="MyFooter2-gray-border" value="on"/>

<div class="page page14" style="page-break-before:left;">
    <h2 class="gray" style="margin:0 0 55px 0;">Меню на неделю</h2>
    <div class="page14__content content-text" >  
        <table width="100%" height="500" >
            <tr class="row1">
                <td class="title" width="120"></td>
                <td class="title">Четверг</td>
                <td class="title">Пятница</td>
                <td class="title">Суббота</td>
                <td class="title">Воскресенье</td>
            </tr>
            <tr class="row">
                <td class="title" width="120">Завтрак</td>
                <td>Овсяная каша с сухофруктами, кофе или чай без сахара;</td>
                <td>2 вареных яйца, 50 г сыра, кофе или чай</td>
                <td>Омлет или 2 вареных яйца, 200 г натурального йогурта;</td>
                <td>Гречневая каша, кофе или чай без сахара;</td>
            </tr>
            <tr class="row">
                <td class="title" width="120">Обед</td>
                <td>Рагу из курицы (телятины) с овощами;</td>
                <td>Говядина, курица или индейка, запеченная с сыром, салат из овощей;</td>
                <td>Суп гороховый с курицей или индейкой, овощной салат;</td>
                <td>Рыба, запеченная с любыми допустимыми овощами;</td>
            </tr>
            <tr class="row">
                <td class="title" width="120">Полдник</td>
                <td>Половина грейпфрута, 30 г миндальных орехов;</td>
                <td>Стакан кефира;</td>
                <td>Зеленое яблоко или груша;</td>
                <td>Натуральный йогурт или стакан кефира;</td>
            </tr>
            <tr class="row">
                <td class="title" width="120">Ужин</td>
                <td>Гречневая каша с салатом из свеклы.</td>
                <td>Тушеные овощи.</td>
                <td>Морепродукты с отварным темным рисом.</td>
                <td>Тушеные овощи.</td>
            </tr>
        </table>
    </div>
</div>
<sethtmlpagefooter name="MyFooter2-gray-border" value="on"/>


 


 
 
';



$mpdf = new Mpdf(['mode' => 'UTF-8', 'format' => [297, 210]]);
 

$mpdf->DefHTMLFooterByName(
    'colontWhite',
    '<div style="text-align: right; font-weight: bold; font-size: 8pt; 
    font-style: itapc;">Chapter 2 Footer</div>'
  );
  $mpdf->SetHTMLHeaderByName('colontWhite');

$mpdf->WriteHTML($html);
$mpdf->Output();

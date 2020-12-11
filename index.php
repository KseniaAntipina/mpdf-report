<?php
use Mpdf\Mpdf;

require_once __DIR__ . '/vendor/autoload.php';



$html = '

<htmlpagefooter name="footerCover">
    <table width="100%" cellpadding="0" height="60px" style="color:#fff;padding: 20px 0 26px 53px;vertical-align:midle;
    border-top: 0.5px solid #fff;">
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
    <table width="100%" height="104px" style="color:#fff;padding: 20px 0 26px 53px;vertical-align:midle;">
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
    <table width="100%" style="padding: 20px 0 26px 53px;vertical-align:midle;">
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
    <table width="100%" style="padding: 20px 0 26px 53px;vertical-align:midle;background: #F7F9FC;">
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
    <table width="100%" style="padding: 20px 0 26px 53px;vertical-align:midle;border-top: 0.5px solid #D1D1D1;z-index:100;">
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
    font-family: montserrat-medium;
    font-weight: 500;
    font-size: 28px;
    line-height: 42px;
    height:83px;
    margin-bottom:0px;
    padding-bottom:0;
}
.cover .subtitle {
    font-family: montserrat-medium; 
    font-size: 18px;
    line-height: 27px;
    font-weight: 500;
}
.cover .subtitle2 {
    font-family: montserrat-medium; 
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
    font-family: montserrat-bold;
    font-weight: normal;
    font-size: 24px;
    line-height: 36px;
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
    font-family:montserrat-semibold;
    font-size: 12px;
    color:#555A5C;
    line-height: 150%;
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

.page6 .content-text .risk-title1 {
    margin-bottom:5px;
    font-size:14px;
    color: #555A5C;
    padding-top:0;
    font-family: gilroy;
}


.page6 .content-text .risk-title2 {
    margin: 5px 0 -8px 0 ;
    font-family:gilroy-semibold;
    font-size:14px;
    color: #555A5C;
}

.radius-box {
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
    font-family: gilroy-medium;
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
    font-family: gilroy-semibold;
    color: #555A5C;
}

.rowValue td.col2 {
    width: 150px;
    text-align:left;
    padding-left: 40px;
    font-family: gilroy-semibold;
    color: #555A5C;
}

.rowValue td.col3 {
    width: 290px;
    text-align:left;
    padding-left:130px;
    font-family: gilroy-semibold;
    color: #555A5C;
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

.bg-right {
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

.page15 {
    background: transparent url(\'./assets/page15.png\') no-repeat;
}

.page19 {
    background: transparent url(\'./assets/page19.png\') no-repeat;
}

.page20 {
    background: transparent url(\'./assets/page20.png\') no-repeat;
}

.page24 {
    background: transparent url(\'./assets/page24.png\') no-repeat;
}

.page25 {
    background: transparent url(\'./assets/page25.png\') no-repeat;
}

.page29 {
    background: transparent url(\'./assets/page29.png\') no-repeat;
}

.page30 {
    background: transparent url(\'./assets/page30.png\') no-repeat;
}

.page33 {
    background: transparent url(\'./assets/page33.png\') no-repeat;
}

.page36 {
    background: transparent url(\'./assets/page36.png\') no-repeat;
}

.page39 {
    background: transparent url(\'./assets/page39.png\') no-repeat;
}

.page34 {
    background: transparent url(\'./assets/page34.png\') no-repeat;
}

.page37 {
    background: transparent url(\'./assets/page37.png\') no-repeat;
}

.page40 {
    background: transparent url(\'./assets/page40.png\') no-repeat;
}

.page42 {
    background: transparent url(\'./assets/page42.png\') no-repeat;
}

.page46 {
    background: transparent url(\'./assets/page46.png\') no-repeat;
}

.page50 {
    background: transparent url(\'./assets/page50.png\') no-repeat;
}

.page43 {
    background: transparent url(\'./assets/page43.png\') no-repeat;
}

.page47 {
    background: transparent url(\'./assets/page47.png\') no-repeat;
}

.page51 {
    background: transparent url(\'./assets/page51.png\') no-repeat;
}

.page54 {
    background: transparent url(\'./assets/page54.png\') no-repeat;
}

.page53 {
    background: transparent url(\'./assets/page53.png\') no-repeat;
}

.page57 {
    background: transparent url(\'./assets/page57.png\') no-repeat;
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

.report-box .table1   , .report-box .table12 {
    background-position: left center;
    background-image-resize: 0;
    width: 320px;
    padding: 18px 17px 30px 19px;
    vertical-align:top;
    margin: 0;
    font-family: gilroy-medium;
    box-sizing: border-box;
}

.graybox1-174 {
    background: transparent url(\'./assets/page16-graybox.svg\') no-repeat;
    height: 174px;
}

.graybox1-158{
    background: transparent url(\'./assets/page17-graybox1.svg\') no-repeat;
    height: 158px;
}

.graybox1-213 {
    background: transparent url(\'./assets/page23-graybox1.svg\') no-repeat;
    height: 213px;
}

.graybox1-166 {
    background: transparent url(\'./assets/graybox1-166.svg\') no-repeat;
    height: 166px;
}

.report-box .table2 , .report-box .table22 {
    background-position: center center;
    background-image-resize: 0;
    width: 584px;
    padding: 23px 30px 20px 29px;
    vertical-align:top;
    margin: 0;
    font-family: gilroy;
    font-size: 13px;
    line-height: 150%;
    box-sizing: border-box;
    color: #555A5C;
}

.graybox2-174 {
    background: transparent url(\'./assets/page16-graybox2.svg\') no-repeat;
    height: 174px;
}

.graybox2-158 {
    background: transparent url(\'./assets/page17-graybox2.svg\') no-repeat;
    height: 158px;
}

.graybox2-213 {
    background: transparent url(\'./assets/page23-graybox2.svg\') no-repeat;
    height: 213px;
}

.graybox2-166 {
    background: transparent url(\'./assets/graybox2-166.svg\') no-repeat;
    height: 166px;
}


.report-box .table1 .desc .gene {
    font-size:14px;
    color: #fff;
    background-position: right center;
    padding-right:10px;
    height: 32px;
}

.report-box .table1 .desc .gene1 {
    background: transparent url(\'./assets/page16-blue95.svg\') no-repeat;
    width: 96px;
}

.report-box .table1 .desc .gene2 {
    background: transparent url(\'./assets/page16-blue159.svg\') no-repeat;
    width: 160px;
    color: #fff;
}

.gene180 {
    background: transparent url(\'./assets/page16-blue180.svg\') no-repeat;
    width: 180px;
    color: #fff;   
}

.gene190 {
    background: transparent url(\'./assets/page17-blue190.svg\') no-repeat;
    width: 190px;
    color: #fff;
    font-size:14px;
}

.gene173 {
    background: transparent url(\'./assets/page17-blue173.svg\') no-repeat;
    width: 173px;
    color: #fff;
}

.content-text .risk-title1 {
    margin-bottom:5px;
    font-family: gilroy-semibold;
    font-size:14px;
    color: #555A5C;
    padding-top:0;
}

.content-text .risk-title2 {
    margin: 5px 0 0 0 ;
    font-family:gilroy-medium;
    font-size:14px;
    color: #555A5C;
}

.template1 table td.item {
    background: transparent url(\'./assets/page15-graybox.svg\') no-repeat;
    background-position: left center;
    background-image-resize: 0;
    width: 320px;
    height: 197px;
    padding: 0 0 0 23px;
    font-family: gilroy;
}

.template1 table {
    font-size: 16px;
    line-height: 24px;
    color: #555A5C;
}

.page7 table tr td.left-title {
    padding-right:80px;
    padding-bottom:10px;
    color: #555A5C;
    font-family:gilroy-medium;
}

.page7 table tr td.content {
    padding-bottom:10px;
    color: #555A5C;
    font-family: gilroy-semibold;
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
            <span style="font-family:gilroy-semibold;"> Представленный отчет состоит из нескольких частей. </span>
        </p>
        <p>
            <span style="font-family:gilroy;font-weight:bold;">Первая часть отчета</span> представляет данные лабораторных исследований, выполненных в лицензированной клинической лаборатории на одобренных для клинических тестов оборудовании и реактивов. Эти данные могут использоваться врачом независимо от остальной части отчета для оценки генетических рисков в отношении здоровья пациента.
        </p>
        <p>
            <span style="font-weight:bold;">Вторая часть отчета</span> представляет собой обзор данных научных и клинических исследований, публикаций в научной литературе, данных полногеномных ассоциативных исследований (GWAS), международных баз данных, собственной базы данных лаборатории и других данных в отношении обнаруженных у Вас генетических вариантов.  Эта информация постоянно отслеживается, обновляется и  пополняется нашей командой врачей, научных сотрудников и биоинформатиков. Вся новейшая информация сразу попадает в нашу базу знаний и отображается в отчете. Эти данные структурированы следующим образом: 
        </p>
        <p>
            <span style="font-weight:bold;">1.</span><span style="font-family:gilroy-medium"> Описание исследуемого полиморфизма, его локализации в геноме и его функции. </span>
        </p>
        <p>
            <span style="font-weight:bold;">2.</span><span style="font-family:gilroy-medium"> Генотипы полиморфизма.</span> Это включенные в исследование генетические варианты полиморфизма, их частота в европейской популяции и связь с риском возникновения многофакторных заболеваний. 
        </p>
        <p>
            <span style="font-weight:bold;">3.</span><span style="font-family:gilroy-medium"> Описание конкретного генетического варианта для каждого полиморфизма, который был обнаружен.</span> В описании приводятся данные о связи обнаруженного варианта с риском развития заболеваний, влияния на метаболизм и индивидуальные особенности организма, на основании имеющихся научных данных. В некоторых случаях могут содержатся рекомендации или другая информация если она признана достоверной медицинским сообществом. 
        </p>
        <p>
            <span style="font-weight:bold;">4.</span><span style="font-family:gilroy-medium"> Расчет интегративного риска.</span> Эта часть отчета содержит информацию об интегративном (теоретически вычисленном на основании данных по всем генетическим вариантам) риске для здоровья человека. Индекс риска - это условная величина которая сравнивается с таковой в европейской популяции и показывает насколько ваши генетические риски выше или ниже среднепопуляционного риска. Для расчета среднепопуляцонного риска используются частоты генотипов из базы данных GnomAD v2.1.1
        </p>
        
    </div>
   
</div>
<sethtmlpagefooter name="MyFooter2" value="on" />

<div class="page page5" style="page-break-before:left;">
    <h2 class="gray" style="margin-bottom:70px;padding-left:53px;"> На чем основывается данное исследование</h2>
    <div class="page5__content" style="width:100%">
        <p class="subtitle" style="text-align:center;font-family:montserrat-semibold;font-size:22px;line-height:33px;color:#555A5C;margin-bottom:10px;">
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
                <td style="text-align:center;text-transform: uppercase;font-family:montserrat-bold;font-size:18px;line-height: 27px;color: #555A5C;padding-bottom:15px; ">
                    долголетие, молодость, здоровье
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
        <span style="font-weight:bold;">Индивидуальный интегративный риск</span> представляет собой расчет генетического риска, основанного на совокупности рисков для каждого генетического варианта полиморфизма, обнаруженного у пациента.
        </p>
        <p>
        <span style="font-weight:bold;">Среднепопуляционный интегративный риск</span> представляет собой расчет генетического риска, основанного на совокупности рисков для каждого генетического варианта полиморфизма, с учетом частоты каждого генотипа в популяции.
        </p>
        <p>
        <span style="font-weight:bold;">Минимальный риск</span> - теоретически возможный риск, когда имеется сочетание всех благоприятных или нейтральных генетических вариантов. </p>
        <p>
        <span style="font-weight:bold;">Максимальный риск</span> - теоретически возможный риск, когда имеется сочетание всех неблагоприятных генетических вариантов.
        </p>
    </div>
    <div class="content-text">
 
        <p class="risk-title1" style="margin:0;">Индивидуальный риск</p>
        <p class="risk-title2">Высокий</p>

        <div>
            <img src=\'./assets/flag.svg\' style="margin-bottom:-10px;margin-left: 470px;">
            <p style="width:552px;height:10px; background: linear-gradient(top right, rgb(223, 9, 22,0.5) 0%, #029DE1 100%);margin-bottom:20px;">
            </p>
        </div>

        <p class="risk-title1">Среднепопуляционный риск</p>
        <p class="risk-title2">Средний риск</p>

        <div>
            <img src=\'./assets/flag.svg\' style="margin-bottom:-10px;margin-left: 300px;">
            <p style="width:552px;height:10px; background: linear-gradient(top right, rgb(223, 9, 22,0.5) 0%, #029DE1 100%);margin-bottom:20px;">
            </p>
        </div>
        
        <div style="background: #F7F9FC;border-radius:6px;color: #555A5C;padding:22px 24px 17px 23px;">
            <p style="margin:0;font-size:12px;line-height:150%;font-family:montserrat-medium;">
            Следует знать, что рассчитанный индивидуальный генетический риск какого-либо заболевания или состояния основан только на включенных в исследование полиморфизмах. Другие полиморфизмы, другие генетические и негенетические факторы могут оказывать значимое влияние на риски заболеваний. Поэтому окончательная оценка риска вероятности какого-либо заболевания может быть сделана только врачом на основании всех имеющихся у него данных.
            </p>
        </div>
    </div>
</div>
<sethtmlpagefooter name="MyFooter2" value="on"/>


<div class="page page7" style="page-break-before:left;">
    <h2 class="gray" style="margin-bottom:27px;">Результаты лабораторного исследования</h2>
    <div class="page7__content content-text">
        <table style="margin-bottom:29px;">
            <tr>
                <td class="left-title">Наименование исследования:</td>
                <td class="content">Нутригенетика. Оптимальный вариант диеты для снижения веса</td>
            </tr>
            <tr>
                <td class="left-title">Заказчик:</td>
                <td class="content">Иванов Иван Иванович</td>
            </tr>
            <tr>
                <td class="left-title">Дата рождения</td>
                <td class="content">11.12.1986</td>
            </tr>
            <tr>
                <td class="left-title">Пол:</td>
                <td class="content">женский</td>
            </tr>
            <tr>
                <td class="left-title">Номер исследования:</td>
                <td class="content">177950</td>
            </tr>
        </table>

        <div class="radius-box-wrap" style="background: #FCFDFE;border-radius: 10px;border: 1px solid #E5ECF0;">
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
                     <span style="color: #596363;font-family: gilroy;">Высокий риск</span>
                    <p><img src=\'./assets/risk1.svg\' style="padding-top:14px;padding-bottom:7px;" height="50"></p>
                    <p style="color:#555A5C;width:150px;font-family: gilroy-semibold;">Риск избыточной массы<br> тела</p>
                </td>              
                <td class="gray">
                    <p>
                    <img src=\'./assets/radio-red.svg\' width="12px" height="12px" style="padding-right:5px;margin-bottom:-2px;">
                     <span style="color: #596363;font-family: gilroy;">Низкая эффективность</span>
                     </p>
                    <p><img src=\'./assets/risk2.svg\' style="padding-top:14px;padding-bottom:7px;" height="50"></p>
                    <p style="color:#555A5C;width:150px;font-family: gilroy-semibold;">Эффективность низкожировой<br> диеты</p>
                </td>           
               <td class="gray">
                    <p>
                    <img src=\'./assets/radio-red.svg\' width="12px" height="12px" style="padding-right:5px;margin-bottom:-2px;">
                    <span style="color: #596363;font-family: gilroy;">Низкая эффективность</span>
                    </p>
                    <p><img src=\'./assets/risk3.svg\' style="padding-top:14px;padding-bottom:7px;" height="50"></p>
                    <p style="color:#555A5C;width:150px;font-family: gilroy-semibold;">Эффективность низкоуглеводной диеты</p>
                </td>              
                <td class="gray">
                    <p>
                    <img src=\'./assets/radio-yellow.svg\' width="12px" height="12px" style="padding-right:5px;margin-bottom:-2px;">
                    <span style="color: #596363;font-family: gilroy;">Средняя эффективность</span>
                    </p>
                    <p><img src=\'./assets/risk4.svg\' style="padding-top:14px;padding-bottom:7px;" height="50"></p>
                    <p style="color:#555A5C;width:150px;font-family: gilroy-semibold;">Ограничение насыщенных жирных кислот</p>
                </td>
            </tr>
            <tr><td style="padding-top:10px;"></td></tr>
            <tr>
                <td class="gray">
                    <p>
                    <img src=\'./assets/radio-green.svg\' width="12px" height="12px" style="padding-right:5px;margin-bottom:-2px;">
                    <span style="color: #596363;font-family: gilroy;">Низкая потребность</span>
                    </p>
                    <p><img src=\'./assets/risk5.png\' style="padding-top:14px;padding-bottom:7px;" height="50"></p>
                    <p style="color:#555A5C;width:150px;font-family: gilroy-semibold;">Потребность<br> в разгрузочных днях</p>
                </td>
                <td  class="gray">
                    <p>
                    <img src=\'./assets/radio-red.svg\' width="12px" height="12px" style="padding-right:5px;margin-bottom:-2px;">
                    <span style="color: #596363;font-family: gilroy;">Высокая выраженность</span>
                    </p>
                    <p><img src=\'./assets/risk6.svg\' style="margin-left:-18px;padding-top:10px;" height="65"></p>
                    <p style="color:#555A5C;width:150px;font-family: gilroy-semibold;margin-top:-5px;">Выраженность<br> ЙО-ЙО эффекта</p>
                </td>
                <td  class="gray">
                    <p>
                    <img src=\'./assets/radio-green.svg\' width="12px" height="12px" style="padding-right:5px;margin-bottom:-2px;">
                    <span style="color: #596363;font-family: gilroy;">Низкая склонность</span>
                    </p>
                    <p><img src=\'./assets/risk7.svg\' style="padding-top:14px;padding-bottom:7px;" height="50"></p>
                    <p style="color:#555A5C;width:150px;font-family: gilroy-semibold;">Чувство насыщения и склонность к перееданию
                    </p>
                </td>
                <td  class="gray">
                    <p>
                    <img src=\'./assets/radio-yellow.svg\' width="12px" height="12px" style="padding-right:5px;margin-bottom:-2px;">
                    <span style="color: #596363;font-family: gilroy;">Средний риск</span>
                    </p>
                    <p><img src=\'./assets/risk8.svg\' style="padding-top:14px;padding-bottom:7px;" height="50"></p>
                    <p style="color:#555A5C;width:150px;font-family: gilroy-semibold;">Риск сахарного диабета<br>  2 типа
                    </p>
                </td>
            </tr>
            <tr><td style="padding-top:10px;"></td></tr>
            <tr>
                <td class="gray">
                    <p>
                    <img src=\'./assets/radio-red.svg\' width="12px" height="12px" style="padding-right:5px;margin-bottom:-2px;">
                    <span style="color: #596363;font-family: gilroy;">Высокий риск</span>
                    </p>
                    <p><img src=\'./assets/risk9.svg\' style="padding-top:14px;padding-bottom:7px;" height="50"></p>
                    <p style="color:#555A5C;width:150px;font-family: gilroy-semibold;">Риск патологического отложения жира вокруг внутренних органов
                    </p>
                </td>
            
                <td  class="gray">
                    <p>
                    <img src=\'./assets/radio-red.svg\' width="12px" height="12px" style="padding-right:5px;margin-bottom:-2px;">
                    <span style="color: #596363;font-family: gilroy;">Высокая потребность</span>
                    </p>
                    <p><img src=\'./assets/risk10.svg\' style="padding-top:14px;padding-bottom:7px;" height="50"></p>
                    <p style="color:#555A5C;width:150px;font-family: gilroy-semibold;">Потребность в мононенасыщенных жирных кислотах
                    </p>
                </td>
            
                <td class="gray">
                    <p>
                    <img src=\'./assets/radio-red.svg\' width="12px" height="12px" style="padding-right:5px;margin-bottom:-2px;">
                    <span style="color: #596363;font-family: gilroy;">Высокая потребность</span>
                    </p>
                    <p><img src=\'./assets/risk11.svg\' style="padding-top:14px;padding-bottom:7px;" height="50"></p>
                    <p style="color:#555A5C;width:150px;font-family: gilroy-semibold;">Потребность в Омега-3 жирных кислотах
                    </p>
                </td>
            </tr>
        </table>
    </div>
</div>
<sethtmlpagefooter name="MyFooter2-gray-border" value="on"/>


<div class="page page9 bg-right" style="page-break-before:left;">
    <h2 class="gray" style="text-transform:uppercase;margin:0 0 25px 0;">ОБЩИЕ РЕКОМЕНДАЦИИ</h2>
    <div class="page9__content content-text" style="width:504px;color: #555A5C;">  
        <p style="font-family:gilroy-semibold;font-size:16px;">
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

<div class="page page10 bg-right" style="page-break-before:left;">
    <h2 class="gray" style="text-transform:uppercase;margin:0 0 30px 0;">ОБЩИЕ РЕКОМЕНДАЦИИ</h2>
    <div class="page10__content content-text" style="width:633px;color: #555A5C;">  
        <p style="font-family:gilroy-semibold;font-size:16px;">
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


<div class="page page11 bg-right" style="page-break-before:left;">
    <h2 class="gray" style="text-transform:uppercase;margin:0 0 30px 0;">ОБЩИЕ РЕКОМЕНДАЦИИ</h2>
    <div class="page11__content content-text" style="width:485px;color: #555A5C;">  
        <p style="font-family:gilroy-semibold;font-size:16px;">
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
                <td class="title" width="220">Четверг</td>
                <td class="title" width="220">Пятница</td>
                <td class="title" width="220">Суббота</td>
                <td class="title" width="220">Воскресенье</td>
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


<div class="page page15 template1 bg-right" style="page-break-before:left;">
    <div class="page15__content content-text" style="color: #555A5C;">  
        <table  height="200" width="600" style="margin-left:-2px;">
            <tr>
                <td class="item" >
                    <img src=\'./assets/radio-red.svg\' width="16px" height="16px" style="padding-right:5px;margin-bottom:-2px;">

                    <span style="color: #596363;font-size: 16px;line-height: 150%;">Высокий риск</span>

                    <p><img src=\'./assets/risk1.svg\' style="padding-top:14px;padding-bottom:10px;" height="70"></p>

                    <p style="font-family:gilroy-semibold;height:43px;margin:0;padding:0;">
                        Риск избыточной массы <br>  тела
                    </p>
                </td>
                <td width="24"></td>
                <td >
                    <table width="255">
                        <tr>
                            <td style="font-size:16px;font-family:gilroy-semibold;padding-bottom:10px;">
                            Генетически обусловленный  риск избыточной массы тела
                            </td>
                        </tr>
                        <tr>
                            <td style="font-size:14px;font-family:gilroy;padding-bottom:20px;line-height: 150%;">
                            Избыточная масса тела и ожирение не только эстетическая проблема, но и значительный фактор риска многих заболеваний. Средний риск ожирения в России составляет 25%.
                            </td>
                        </tr>
                    </table>
                </td>
            </tr>
        </table>
        <div style="width:544px;padding-top:10px;">
            <p>Как и многие другие заболевания, ожирение является результатом взаимодействия между экологическими и генетическими факторами. Исследования выявили варианты в нескольких генах, которые могут способствовать увеличению веса и распределению жира в организме, хотя только в нескольких случаях гены являются основной причиной ожирения.
            Полиморфизмы в различных генах, контролирующих аппетит и метаболизм, предрасполагают к ожирению при определенных диетических условиях. Процент ожирения, который можно отнести к генетике, варьируется в широких пределах, в зависимости от изучаемой популяции, от 6% до 85%. </p>
            <p>
            В генетических исследованиях на больших группах людей были выявлены варианты генов, влияющие на индекс массы тела, которые включены в настоящий тест. Выявление у Вас определенных вариантов генов может повышать или снижать Ваш индивидуальный риск. Ваш образ жизни, питание и уровень физической активности, другие генетические и негенетические факторы также влияют на риск повышенной массы тела и ожирения.
            </p>
        </div>
    </div>
</div>
<sethtmlpagefooter name="MyFooter2-gray-border" value="on"/>


<div class="report-box page page16" style="page-break-before:left;">
    <h2 class="gray" style="margin-bottom:27px;text-transform:uppercase;">Отчет по результатам исследования</h2>
    <div class="page16__content content-text">
        <table height="175" style="border-collapse:collapse;" width="940px">
            <tr>
                <td>
                    <table class="table1 graybox1-174" height="175" width="315" style="margin-left:-2px;">
                    <tr>
                        <td class="img" >
                            <img src=\'./assets/page18-dna.svg\' style="padding-right:15px;" height="70">
                        </td>
                        <td class="desc" style="text-align:right;">
                        <table width="195">
                            <tr>
                                <td class="gene gene1" height="40">Ген ADRB2 </td>
                            </tr>
                            <tr><td height="10"></td></tr>
                            <tr>
                                <td class="gene gene2" height="40" style="padding-right:15px;">Ваша мутация C;C</td>
                            </tr>
                            <tr><td height="10"></td></tr>
                            <tr>
                                <td class="gene gene180" height="40">Полиморфизм rs1042714 </td>
                            </tr>
                        </table>
                        </td>
                    </tr>
                    </table>
                </td>

                <td width="5"></td>
                <td>
                    <table class="table2 graybox2-174">
                        <tr>
                            <td style="padding-bottom:5px;">
                            Полиморфизм  гена ADRB2 (Бета-адренорецептор 2 типа). Расположен на длинном плече хромосомы 5 в цитосегменте 32.
                            </td>
                        </tr>
                        <tr>
                            <td>
                            <span style="font-family:gilroy-semibold">Функция:</span> Присутствует на мембранах клеток гладкой мускулатуры и в жировых клетках. Участвует в мобилизации жира из жировых клеток в ответ на гормоны (адреналин, норадреналин), стимулируют гликогенолиз в печени и выброс глюкозы в кровь для восполнения энергетических потребностей работы мышц.
                            </td>
                        </tr>
                    </table>
                </td>
            </tr>
        </table>

        <div style="font-family:gilroy;margin-top:16px;font-size:13px;line-height:19px;color: #555A5C;width:940px">
            Генотип C/C ассоциирован с умеренно повышенным риском развития ожирения и метаболического синдрома, а также сахарного диабета 2 типа. Энергосберегающий тип. Вариант адренергического рецептора 2 связанный со сниженной активностью рецептора. Рекомендовано подключение физической активности для создания дефицита калорий, либо снижение калорийности дневного рациона за счет снижение потребления количества жиров.
        </div>
    </div>
</div>
<sethtmlpagefooter name="MyFooter2-gray-border" value="on"/>



<div class="report-box page page17" style="page-break-before:left;">
    <h2 class="gray" style="margin-bottom:27px;text-transform:uppercase;">Отчет по результатам исследования</h2>
    <div class="page17__content content-text">
        <table height="158" style="border-collapse:collapse;" width="940px">
            <tr>
                <td>
                    <table class="table1 graybox1-158" height="158" style="margin-left:-2px;">
                    <tr>
                        <td class="img" >
                            <img src=\'./assets/page18-dna.svg\' style="padding-right:15px;" height="70">
                        </td>
                        <td class="desc" style="text-align:right;">
                        <table width="195">
                            <tr>
                                <td class="gene gene1" height="40">Ген APOA2 </td>
                            </tr>
                            <tr><td height="10"></td></tr>
                            <tr>
                                <td class="gene gene2" height="40" style="padding-right:15px;">Ваша мутация G;G</td>
                            </tr>
                            <tr><td height="10"></td></tr>
                            <tr>
                                <td class="gene gene173" height="40" style="padding-right:15px;">Полиморфизм rs5082 </td>
                            </tr>
                        </table>
                        </td>
                    </tr>
                    </table>
                </td>

                <td width="5"></td>
                <td>
                <table class="table2 graybox2-158" height="158" >
                <tr>
                    <td style="padding-bottom:5px;">
                    Полиморфизм гена APOA2 (Аполипопротеин А2). Расположен на длинном плече хромосомы 1, в цитосегменте 23.3. 
                    </td>
                </tr>
                <tr>
                    <td height="80px">
                    <span style="font-family:gilroy-semibold">Функция:</span> Основной белок липопротеинов высокой плотности. Полиморфизм изменяет промоторную последовательность гена APOA2, в результате чего носители экспрессируют меньше белкапродукта этого гена.
                    </td>
                </tr>
            </table>
                </td>
            </tr>
        </table>

        <div style="font-family:gilroy;margin-top:10px;margin-bottom:16px;font-size:13px;line-height:19px;color: #555A5C;width:940px">
            Выше риск избыточной массы. В среднем более высокое потребление калорий за счет жиров и белков.  Данный генотип, по данным исследований, ассоциирован с небольшим протективным эффектом в отношении гипертриглицеридемии и атеросклероза, но это не значит, что будет полезно есть свиное сало на завтрак, обед и ужин, особенно с учетом, что генотип также ассоциирован с большими рисками ожирения.
        </div>


        
        <table  style="border-collapse:collapse;" width="940px">
            <tr>
                <td>
                    <table class="table1 graybox1-158" style="margin-left:-2px;">
                    <tr>
                        <td class="img" >
                            <img src=\'./assets/page18-dna.svg\' style="padding-right:5px;" height="70">
                        </td>
                        <td class="desc" style="text-align:right;">
                        <table width="195">
                            <tr>
                                <td class="gene gene1" height="40">Ген FABP2 </td>
                            </tr>
                            <tr><td height="10"></td></tr>
                            <tr>
                                <td class="gene gene2" height="40" style="padding-right:15px;">Ваша мутация T;C</td>
                            </tr>
                            <tr><td height="10"></td></tr>
                            <tr>
                                <td class="gene gene190" height="40" style="padding-right:15px;">Полиморфизм  rs1799883</td>
                            </tr>
                        </table>
                        </td>
                    </tr>
                    </table>
                </td>

                <td width="5"></td>
                <td>
                    <table class="table2 graybox2-158">
                        <tr>
                            <td style="padding-bottom:5px;">
                            Полиморфизм гена FABP2 (Белок, связывающий жирные кислоты в кишечнике, 2). Находится на длинном плече хромосомы 10, в цитосегменте 25.2 
                            </td>
                        </tr>
                        <tr>
                            <td height="80px">
                            <span style="font-family:gilroy-semibold">Функция:</span> Переносчик жирных кислот в тонком кишечнике. Контролирует эффективность усвоения жиров, поступающих с пищей.

                            </td>
                        </tr>
                    </table>
                </td>
            </tr>
        </table>

        <div style="font-family:gilroy;margin-top:10px;font-size:13px;line-height:19px;color: #555A5C;width:940px">
        Генотип связан с умеренно повышенной чувствительностью к насыщенным жирам. Более активное всасывание жиров в кишечнике по сравнению с распространенным генотипом T/T. Во избежание набора массы тела рекомендовано снижение калорийности рациона за счет снижения потребления пищи, богатой животными жирами.
        </div>


    </div>
</div>
<sethtmlpagefooter name="MyFooter2-gray-border" value="on"/>

 
<div class="report-box page page18" style="page-break-before:left;">
    <h2 class="gray" style="margin-bottom:27px;text-transform:uppercase;">Отчет по результатам исследования</h2>
    <div class="page18__content content-text" >
    <table height="158" style="border-collapse:collapse" width="940px">
        <tr>
            <td>
                <table class="table1 graybox1-158" height="158" style="margin-left:-2px;">
                <tr>
                    <td class="img" >
                        <img src=\'./assets/page18-dna.svg\' style="padding-right:10px;" height="70">
                    </td>
                    <td class="desc" style="text-align:right;">
                    <table width="195">
                        <tr>
                            <td class="gene gene1" height="40" style="padding-right:20px;">Ген FTO </td>
                        </tr>
                        <tr><td height="10"></td></tr>
                        <tr>
                            <td class="gene gene2" height="40" style="padding-right:15px;">Ваша мутация T;A</td>
                        </tr>
                        <tr><td height="10"></td></tr>
                        <tr>
                            <td class="gene gene180" height="40" style="padding-right:10px;">Полиморфизм  rs9939609</td>
                        </tr>
                    </table>
                    </td>
                </tr>
                </table>
            </td>

            <td width="5"></td>
            <td>
            <table class="table2 graybox2-158" height="158" >
            <tr>
                <td style="padding-bottom:5px;">
                Полиморфизм гена FTO (альфа-кетоглутарат-зависимая диоксигеназа). Расположен на хромосоме 16 в цитогенетическом локусе 12.2
                </td>
            </tr>
            <tr>
                <td height="80px">
                <span style="font-family:gilroy-semibold">Функция:</span> Данный генетический локус связан с ожирением за счет нарушения пищевого поведения - избыточным потреблением калорий. Этот ген оказывает последовательное и хорошо воспроизводимое влияние на риск ожирения. С каждым аллелем A связано увеличение веса на около 1,5 кг.
                </td>
            </tr>
        </table>
            </td>
        </tr>
    </table>

    <div style="font-family:gilroy;margin-top:10px;margin-bottom:16px;font-size:13px;line-height:19px;color: #555A5C;width:940px">
    Фактор риска ожирения. Носители этого генотипа обычно имеют вероятность ожирения выше в 1,3 раза по равнению с наиболее распространенным генотипом T/T. Рекомендован контроль потребления пищи, так как носители данного генотипа, по данным исследований, имеют проблемы с бесконтрольным, излишним потреблением еды. Также, рекомендовано снижение потребления углеводов, особенно простых сахаров, в качестве профилактики сахарного диабета и ожирения.
    </div>


    
    <table  style="border-collapse:collapse;" width="940px">
        <tr>
            <td>
                <table class="table1 graybox1-158" style="margin-left:-2px;">
                <tr>
                    <td class="img" >
                        <img src=\'./assets/page18-dna.svg\' style="padding-right:5px;" height="70">
                    </td>
                    <td class="desc" style="text-align:right;">
                    <table width="195">
                        <tr>
                            <td class="gene gene1" height="40" style="padding-right:25px;">Ген INS</td>
                        </tr>
                        <tr><td height="10"></td></tr>
                        <tr>
                            <td class="gene gene2" height="40" style="padding-right:15px;">Ваша мутация T;C
                            </td>
                        </tr>
                        <tr><td height="10"></td></tr>
                        <tr>
                            <td class="gene gene173" height="40" style="padding-right:20px;">Полиморфизм rs689</td>
                        </tr>
                    </table>
                    </td>
                </tr>
                </table>
            </td>

            <td width="5"></td>
            <td>
                <table class="table2 graybox2-158">
                    <tr>
                        <td style="padding-bottom:5px;">
                        Полиморфизм гена INS (Инсулин).  Расположен на коротком плече хромосомы 11 в цитогенетическом локусе 15.5.
                        </td>
                    </tr>
                    <tr>
                        <td height="80px">
                        <span style="font-family:gilroy-semibold">Функция:</span> Ген INS кодирует инсулин – гормон, секретируемый b-клетками поджелудочной железы. Принимает участие в метаболизме глюкозы.
                        </td>
                    </tr>
                </table>
            </td>
        </tr>
    </table>

    <div style="font-family:gilroy;margin-top:10px;font-size:13px;line-height:19px;color: #555A5C;width:940px">
    Несколько выше чувствительность к избытку углеводов в рационе. При избыточном потреблении углеводов повышается вероятность  формирования избыточной массы тела. Рекомендовано снижение потребления углеводов за счет отказа от простых сахаров, что будет актуально, как для поддержания нормального веса, так и профилактики сахарного диабета.
    </div>


</div>
</div>
<sethtmlpagefooter name="MyFooter2-gray-border" value="on"/>

<div class="page page19 bg-right" style="page-break-before:left;">
    <h2 class="gray" style="margin-bottom:20px;text-transforme:uppercase;">ОТЧЕТ ПО РЕЗУЛЬТАТАМ ИССЛЕДОВАНИЯ</h2>
    <div class="page19__content content-text" style="width:507px; color: #555A5C;height:350px; ">
        <p>
        Ваш генетически обусловленный риск избыточной массы тела, рассчитанный на основе исследованных полиморфизмов, выше чем общепопуляционный риск. Это означает, что при одинаковом режиме питания, физических нагрузках и других обстоятельствах ваш вес вероятно будет выше, чем у других людей.
        </p>
        <p>
        Однако, следует помнить, что генетические факторы не являются определяющими при формировании избыточного веса. На формирование избыточного веса значительно влияют диета, физическая активность и другие не генетические факторы. Учитывая особенности вашего генотипа следует более внимательно следить за вашим весом.
        </p>
        <p style="margin:0;">
        Избегайте переедания, придерживайтесь низкожировой и низкоуглеводной диеты и ведите подвижный образ жизни. 
        </p>
    </div>
    <div class="content-text" style="width:560px;margin:0;">
 
        <p class="risk-title1" style="margin:0;">Индивидуальный риск</p>
        <p class="risk-title2" style="">90 баллов - выше среднего</p>

        <div style="margin-bottom:30px;">
            <img src=\'./assets/flag.svg\' style="margin-bottom:-10px;margin-left: 435px;width:20px;height:26px;">
            <p style="width:552px;height:10px; margin:0; background: linear-gradient(top right, rgb(223, 9, 22,0.5) 0%, #029DE1 100%);">
            </p>
        </div>

        <p class="risk-title1" style="">Среднепопуляционный риск</p>
        <p class="risk-title2"  style="">63 баллов</p>

        <div>
            <img src=\'./assets/flag.svg\' style="margin-bottom:-10px;margin-left: 290px;width:20px;height:26px;">
            <p style="width:552px;height:10px; background: linear-gradient(top right, rgb(223, 9, 22,0.5) 0%, #029DE1 100%);margin:0;">
            </p>
        </div>

    </div>
</div>
<sethtmlpagefooter name="MyFooter2-gray-border" value="on"/>


<div class="page page20 template1 bg-right" style="page-break-before:left;">
    <div class="page15__content content-text" style="color: #555A5C;">  
        <table  height="200" width="610" style="margin-left:-2px;">
            <tr>
                <td class="item" >
                    <img src=\'./assets/radio-red.svg\' width="16px" height="16px" style="padding-right:5px;margin-bottom:-2px;">

                    <span style="color: #596363;font-size: 16px;line-height: 150%;">Низкая эффективность</span>

                    <p><img src=\'./assets/risk2.svg\' style="padding-top:14px;padding-bottom:10px;" height="70"></p>

                    <p style="font-family:gilroy-semibold;height:43px;margin:0;padding:0;">
                        Эффективность низкожировой<br> диеты
                    </p>
                </td>
                <td width="20"></td>
                <td >
                    <table width="255">
                        <tr>
                            <td style="font-size:16px;font-family:gilroy-semibold;padding-bottom:10px;">
                                Эффективность низкожировой диеты для снижения веса
                            </td>
                        </tr>
                        <tr>
                            <td style="font-size:14px;font-family:gilroy;padding-bottom:20px;line-height: 150%;">
                            Если Вы хотите сбросить лишний вес - снижение количества жиров не правильный подход к проблеме. Гены расскажут, какая диета подойдет именно Вам
                            </td>
                        </tr>
                    </table>
                </td>
            </tr>
        </table>
        <div style="width:544px;padding-top:10px;">
            <p>Низкожировые диеты - диеты с низким содержанием животных жиров и транс-жиров. Рекомендуемые жиры полиненасыщенные жирные кислоты, содержащиеся в рыбе и нерафинированных растительных жирах. </p>
            <p>
            Соблюдение низкожировой диеты снижает риск сердечно-сосудистых заболеваний, заболеваний печени и почек. Однако резкое ограничение жиров на длительное время не является вариантом правильного питания. Длительное исключение жирных продуктов из рациона может вызвать дефицит жирорастворимых витаминов A, D, К, Е, что ведет к физическому и умственному утомлению, сухости кожи, выпадению волос и другим нарушениям. </p>
            <p>
            Эффективность всасывания жиров стенкой кишечника контролируется геном FABP2. Полиморфные вариации гена снижают активность белка, кодируемого FABP2. Чем ниже активность белка FABP2, тем менее эффективна низкожировая диета в борьбе с лишним весом.
            </p>
            </p>
        </div>
    </div>
</div>
<sethtmlpagefooter name="MyFooter2-gray-border" value="on"/>


<div class="report-box page page21" style="page-break-before:left;">
    <h2 class="gray" style="margin-bottom:27px;text-transform:uppercase;">Отчет по результатам исследования</h2>
    <div class="page21__content content-text">
        <table height="175" style="border-collapse:collapse;" width="940px">
            <tr>
                <td>
                    <table class="table1 graybox1-174" height="175" width="315" style="margin-left:-2px;">
                    <tr>
                        <td class="img" >
                            <img src=\'./assets/page18-dna.svg\' style="padding-right:15px;" height="70">
                        </td>
                        <td class="desc" style="text-align:right;">
                        <table width="195">
                            <tr>
                                <td class="gene gene1" height="40">Ген APOA2 </td>
                            </tr>
                            <tr><td height="10"></td></tr>
                            <tr>
                                <td class="gene gene2" height="40" style="padding-right:15px;">Ваша мутация G;G
                                </td>
                            </tr>
                            <tr><td height="10"></td></tr>
                            <tr>
                                <td class="gene gene180" height="40" style="padding-right:20px">Полиморфизм rs5082</td>
                            </tr>
                        </table>
                        </td>
                    </tr>
                    </table>
                </td>

                <td width="5"></td>
                <td>
                    <table class="table2 graybox2-174">
                        <tr>
                            <td style="padding-bottom:5px;">
                            Полиморфизм гена APOA2 (Аполипопротеин А2). Расположен на длинном плече хромосомы 1, в цитосегменте 23.3.
                            </td>
                        </tr>
                        <tr>
                            <td height="80">
                            <span style="font-family:gilroy-semibold">Функция:</span> Основной белок липопротеинов высокой плотности. Полиморфизм изменяет промоторную последовательность гена APOA2, в результате чего носители экспрессируют меньше белкапродукта этого гена.
                            </td>
                        </tr>
                    </table>
                </td>
            </tr>
        </table>

        <div style="font-family:gilroy;margin-top:16px;font-size:13px;line-height:19px;color: #555A5C;width:940px">
        Выраженный эффект низкожировой диеты по сравнению с носителями других генотипов полиморфизма rs5082. Рекомендовано снижение потребления насыщенных жирных кислот (животный жир, куриная кожа, жирное молоко, сливки, пальмовое/кокосовое масло). У носителей этого генотипа легко могут набирать вес, употребляя выше описанные продукты.
        </div>
    </div>
</div>
<sethtmlpagefooter name="MyFooter2-gray-border" value="on"/>


<div class="report-box page page22" style="page-break-before:left;">
    <h2 class="gray" style="margin-bottom:27px;text-transform:uppercase;">Отчет по результатам исследования</h2>
    <div class="page22__content content-text">
        <table height="158" style="border-collapse:collapse;" width="940px">
            <tr>
                <td>
                    <table class="table1 graybox1-158" height="158" style="margin-left:-2px;">
                    <tr>
                        <td class="img" >
                            <img src=\'./assets/page18-dna.svg\' style="padding-right:5px;" height="70">
                        </td>
                        <td class="desc" style="text-align:right;">
                        <table width="195">
                            <tr>
                                <td class="gene gene1" height="40">Ген FABP2</td>
                            </tr>
                            <tr><td height="10"></td></tr>
                            <tr>
                                <td class="gene gene2" height="40" style="padding-right:15px;">Ваша мутация T;C
                                </td>
                            </tr>
                            <tr><td height="10"></td></tr>
                            <tr>
                                <td class="gene gene190" height="40" style="padding-right:15px;" >Полиморфизм rs1799883 </td>
                            </tr>
                        </table>
                        </td>
                    </tr>
                    </table>
                </td>

                <td width="5"></td>
                <td>
                <table class="table2 graybox2-158" height="158" >
                <tr>
                    <td style="padding-bottom:5px;">
                        Полиморфизм гена FABP2 (Белок, связывающий жирные кислоты в кишечнике, 2). Находится на длинном плече хромосомы 10, в цитосегменте 25.2
                    </td>
                </tr>
                <tr>
                    <td height="80px">
                        <span style="font-family:gilroy-semibold">Функция:</span> Переносчик жирных кислот в тонком кишечнике. Контролирует эффективность усвоения жиров, поступающих с пищей.
                    </td>
                </tr>
            </table>
                </td>
            </tr>
        </table>

        <div style="font-family:gilroy;margin-top:10px;margin-bottom:16px;font-size:13px;line-height:19px;color: #555A5C;width:940px">
        Обнаруженный генотип связан со средней эффективностью низкожировых диет.  Он умеренно повышает чувствительность к насыщенным жирам. Более активное всасывание жиров в кишечнике по сравнению с распространенным генотипом C/C. Рекомендовано снижение потребления жирной пищи, особенно содержащий животные жиры. Данный генотип ассоциирован с повышенной чувствительностью к насыщенным жирным кислотам.
        </div>


        
        <table  style="border-collapse:collapse;" width="940px">
            <tr>
                <td>
                    <table class="table1 graybox1-158" style="margin-left:-2px;">
                    <tr>
                        <td class="img" >
                            <img src=\'./assets/page18-dna.svg\' style="padding-right:5px;" height="70">
                        </td>
                        <td class="desc" style="text-align:right;">
                        <table width="195">
                            <tr>
                                <td class="gene gene1" height="40" style="padding-right:15px;">Ген FTO</td>
                            </tr>
                            <tr><td height="10"></td></tr>
                            <tr>
                                <td class="gene gene2" height="40" style="padding-right:15px;">Ваша мутация T;A
                                </td>
                            </tr>
                            <tr><td height="10"></td></tr>
                            <tr>
                                <td class="gene gene190" height="40" style="padding-right:15px;">Полиморфизм rs9939609</td>
                            </tr>
                        </table>
                        </td>
                    </tr>
                    </table>
                </td>

                <td width="5"></td>
                <td>
                    <table class="table2 graybox2-158">
                        <tr>
                            <td style="padding-bottom:5px;">
                            Полиморфизм rs9939609 гена FTO расположен на коротком плече хромосомы 3, в цитогенетическом локусе 25.2 
                            </td>
                        </tr>
                        <tr>
                            <td height="80px">
                            <span style="font-family:gilroy-semibold">Функция:</span> Данный генетический локус связан с ожирением за счет нарушения пищевого поведения  избыточным потреблением калорий.
                            </td>
                        </tr>
                    </table>
                </td>
            </tr>
        </table>

        <div style="font-family:gilroy;margin-top:10px;font-size:13px;line-height:19px;color: #555A5C;width:940px">
        Для носителей данного генотипа, выше эффективность низкожировых диет. Данный генотип ассоциирован с самым большим индексом массы тела, в сравнении с другими генотипами, но также и самой эффективной потерей веса при соблюдении средиземноморской диеты, принцип которой состоит в ограничении жирного мяса, потреблении большого количества морепродуктов, овощей и фруктов.
        </div>


    </div>
</div>
<sethtmlpagefooter name="MyFooter2-gray-border" value="on"/>

<div class="report-box page page23" style="page-break-before:left;">
    <h2 class="gray" style="margin-bottom:27px;text-transform:uppercase;">Отчет по результатам исследования</h2>
    <div class="page23__content content-text">
        <table height="217" style="border-collapse:collapse;" width="940px">
            <tr>
                <td>
                    <table class="table1 graybox1-213" height="217" width="315" style="margin-left:-2px;">
                    <tr>
                        <td class="img" height="217">
                            <img src=\'./assets/page18-dna.svg\' style="padding-right:15px;padding-top:25px;" height="70">
                        </td>
                        <td class="desc" style="text-align:right;" height="217">
                        <table width="195" style="padding-top:23px;">
                            <tr><td height="10"></td></tr>
                            <tr>
                                <td class="gene gene173" height="40" style="padding-right:15px;">Гаплотипы гена APOE </td>
                            </tr>
                        </table>
                        </td>
                    </tr>
                    </table>
                </td>

                <td width="5"></td>
                <td>
                    <table class="table2 graybox2-213">
                        <tr>
                            <td style="padding-bottom:5px;">
                            Гаплотипы гена APOE - это комбинация 2-х полиморфизмов- rs429358 и rs7412, расположенных в цитосегменте 19q13.32, генотипы которых которые обычно наследуются вместе. Основными гаплотипами являются 
                            <span style="font-family:quivira">&#8455;</span>2, <span style="font-family:quivira">&#8455;</span>3 и <span style="font-family:quivira">&#8455;</span>4, встречающиеся в европейской популяции с частотами 6.65, 78.7 и 12.07% соответственно.
                            </td>
                        </tr>
                        <tr>
                            <td height="80">
                            <span style="font-family:gilroy-semibold">Функция:</span> Гаплотипы гена APOE - это комбинация 2-х полиморфизмов- rs429358 и rs7412, расположенных в цитосегменте 19q13.32, генотипы которых которые обычно наследуются вместе. Основными гаплотипами являются <span style="font-family:quivira">&#8455;</span>2, <span style="font-family:quivira">&#8455;</span>3 и <span style="font-family:quivira">&#8455;</span>4, встречающиеся в европейской популяции с частотами 6.65, 78.7 и 12.07% соответственно.
                            </td>
                        </tr>
                    </table>
                </td>
            </tr>
        </table>

        <div style="font-family:gilroy;font-size:13px;line-height:19px;color: #555A5C;width:940px">
        Обнаружен гаплотип APO-E3/E3. Частота в европейской популяции,%: 78.7761
        </div>
    </div>
</div>
<sethtmlpagefooter name="MyFooter2-gray-border" value="on"/>


<div class="page page24 bg-right" style="page-break-before:left;">
    <h2 class="gray" style="margin-bottom:20px;text-transforme:uppercase;">ОТЧЕТ ПО РЕЗУЛЬТАТАМ ИССЛЕДОВАНИЯ</h2>
    <div class="page24__content content-text" style="width:507px; color: #555A5C;height:350px; ">
        <p>
            Данный генотип не предрасполагает к более выраженному эффекту низкожировой диеты. Данный гаплотип не отличается чувствительностью к потреблению жиров, но любому человеку будет полезно снизить потребление насыщенных жирных кислот для поддержания здоровья и долголетия.
        </p>
        <p style="margin:0;">
            При вашем генотипе эффективность низкожировой диеты выше общепопуляционной.  Также, выше будет эффективность низкожировой диеты для снижения уровня холестерина в крови.
        </p>
    </div>
    <div class="content-text" style="width:560px;margin:0;">
 
        <p class="risk-title1" style="margin:0;">Индивидуальная эффективность</p>
        <p class="risk-title2" style="">54 баллов - выше среднего</p>

        <div style="margin-bottom:30px;">
            <img src=\'./assets/flag.svg\' style="margin-bottom:-10px;margin-left: 260px;width:20px;height:26px;">
            <p style="width:552px;height:10px; margin:0; background: linear-gradient(top right, rgb(223, 9, 22,0.5) 0%, #029DE1 100%);">
            </p>
        </div>

        <p class="risk-title1" style="">Среднепопуляционная эффективность</p>
        <p class="risk-title2"  style="">41 баллов</p>

        <div>
            <img src=\'./assets/flag.svg\' style="margin-bottom:-10px;margin-left: 170px;width:20px;height:26px;">
            <p style="width:552px;height:10px; background: linear-gradient(top right, rgb(223, 9, 22,0.5) 0%, #029DE1 100%);margin:0;">
            </p>
        </div>

    </div>
</div>
<sethtmlpagefooter name="MyFooter2-gray-border" value="on"/>

<div class="page page25 template1 bg-right" style="page-break-before:left;">
    <div class="page25__content content-text" style="color: #555A5C;">  
        <table  height="200" width="610" style="margin-left:-2px;">
            <tr>
                <td class="item" >
                    <img src=\'./assets/radio-red.svg\' width="16px" height="16px" style="padding-right:5px;margin-bottom:-2px;">

                    <span style="color: #596363;font-size: 16px;line-height: 150%;">Низкая эффективность</span>

                    <p><img src=\'./assets/risk3.svg\' style="padding-top:14px;padding-bottom:10px;" height="70"></p>

                    <p style="font-family:gilroy-semibold;height:43px;margin:0;padding:0;">
                        Эффективность низкоуглеводной<br> диеты
                    </p>
                </td>
                <td width="20"></td>
                <td >
                    <table width="255">
                        <tr>
                            <td style="font-size:16px;font-family:gilroy-semibold;padding-bottom:10px;">
                            Эффективность низкоуглеводной диеты для снижения веса
                            
                            </td>
                        </tr>
                        <tr>
                            <td style="font-size:14px;font-family:gilroy;line-height: 150%;">
                            Если Вы хотите сбросить лишний вес - снижение количества углеводов не правильный подход к проблеме. Геный расскажут, какая диета подойдет именно Вам
                            </td>
                        </tr>
                    </table>
                </td>
            </tr>
        </table>
        <div style="width:544px;padding-top:10px;">
            <p>Низкоуглеводная диета заключается в ограничении количества потребляемых углеводов. К продуктам, богатым углеводами, относятся хлеб, крупы, крахмалосодержащие овощи, фрукты, а также молоко и йогурт. В низкоуглеводной диете предпочтение отдается овощам с низким содержанием крахмала, жирам и белковым продуктам. Эффективность метаболизма углеводов контролируется в том числе геном адренергического рецептора 2 (ADRB2). Полиморфные вариации гена снижают активность белка ADRB2. Чем ниже активность белка ADRB2, тем менее эффективна низкоуглеводная диета в борьбе с лишним весом. Генетические факторы риска сахарного диабета 2 типа, при их выявлении диктуют необходимость ограничения «быстрых» углеводов, продуктов с высоким гликемическим индексом. 
            </p>
        </div>
    </div>
</div>
<sethtmlpagefooter name="MyFooter2-gray-border" value="on"/>

<div class="report-box page page26" style="page-break-before:left;">
    <h2 class="gray" style="margin-bottom:27px;text-transform:uppercase;">Отчет по результатам исследования</h2>
    <div class="page26__content content-text">
        <table height="175" style="border-collapse:collapse;" width="940px">
            <tr>
                <td>
                    <table class="table1 graybox1-174" height="175" width="315" style="margin-left:-2px;">
                    <tr>
                        <td class="img" >
                            <img src=\'./assets/page18-dna.svg\' style="padding-right:15px;" height="70">
                        </td>
                        <td class="desc" style="text-align:right;">
                        <table width="195">
                            <tr>
                                <td class="gene gene1" height="40">Ген ADRB2</td>
                            </tr>
                            <tr><td height="10"></td></tr>
                            <tr>
                                <td class="gene gene2" height="40" style="padding-right:15px;">Ваша мутация C;C
                                </td>
                            </tr>
                            <tr><td height="10"></td></tr>
                            <tr>
                                <td class="gene gene180" height="40" style="padding-right:10px">Полиморфизм rs1042714</td>
                            </tr>
                        </table>
                        </td>
                    </tr>
                    </table>
                </td>

                <td width="5"></td>
                <td>
                    <table class="table2 graybox2-174">
                        <tr>
                            <td style="padding-bottom:5px;">
                            Полиморфизм  гена ADRB2 (Бета-адренорецептор 2 типа). Расположен на длинном плече хромосомы 5 в цитосегменте 32. 
                            </td>
                        </tr>
                        <tr>
                            <td height="80">
                            <span style="font-family:gilroy-semibold">Функция:</span> Присутствует на мембранах клеток гладкой мускулатуры и в жировых клетках. Участвует в мобилизации жира из жировых клеток в ответ на гормоны (адреналин, норадреналин), стимулируют гликогенолиз в печени и выброс глюкозы в кровь для восполнения энергетических потребностей работы мышц.
                            </td>
                        </tr>
                    </table>
                </td>
            </tr>
        </table>

        <div style="font-family:gilroy;margin-top:16px;font-size:13px;line-height:19px;color: #555A5C;width:940px">
            Носители данного генотипа обычно имеют более выраженный эффект низкоуглеводной диеты. Рекомендовано придерживаться низкоуглеводной диеты, особенно следует ограничить потребление простых сахаров, что связано с более быстрым набором веса, а также увеличением риска развития диабета.
        </div>
    </div>
</div>
<sethtmlpagefooter name="MyFooter2-gray-border" value="on"/>

<div class="report-box page page27" style="page-break-before:left;">
    <h2 class="gray" style="margin-bottom:27px;text-transform:uppercase;">Отчет по результатам исследования</h2>
    <div class="page27__content content-text">
        <table height="158" style="border-collapse:collapse;" width="940px">
            <tr>
                <td>
                    <table class="table1 graybox1-158" height="158" style="margin-left:-2px;">
                    <tr>
                        <td class="img" >
                            <img src=\'./assets/page18-dna.svg\' style="padding-right:5px;" height="70">
                        </td>
                        <td class="desc" style="text-align:right;">
                        <table width="195">
                            <tr>
                                <td class="gene gene1" height="40">Ген PPARG </td>
                            </tr>
                            <tr><td height="10"></td></tr>
                            <tr>
                                <td class="gene gene2" height="40" style="padding-right:15px;">Ваша мутация C;G
                                </td>
                            </tr>
                            <tr><td height="10"></td></tr>
                            <tr>
                                <td class="gene gene190" height="40" style="padding-right:15px;"> Полиморфизм rs1801282</td>
                            </tr>
                        </table>
                        </td>
                    </tr>
                    </table>
                </td>

                <td width="5"></td>
                <td>
                <table class="table2 graybox2-158" height="158" >
                <tr>
                    <td style="padding-bottom:5px;">
                    Полиморфизм гена PPARG (Рецептор активатора пероксисом G). Расположен на коротком плече хромосомы 3 в цитогенетическом сегменте 25.2 
                    </td>
                </tr>
                <tr>
                    <td height="80px">
                        <span style="font-family:gilroy-semibold">Функция:</span> Регулирует накопление жирных кислот и метаболизм глюкозы.
                    </td>
                </tr>
            </table>
                </td>
            </tr>
        </table>

        <div style="font-family:gilroy;margin-top:10px;margin-bottom:53px;font-size:13px;line-height:19px;color: #555A5C;width:940px">
        Более выраженный эффект низкоуглеводной диеты.
        </div>
        
        <table  style="border-collapse:collapse;" width="940px">
            <tr>
                <td>
                    <table class="table1 graybox1-158" style="margin-left:-2px;">
                    <tr>
                        <td class="img" >
                            <img src=\'./assets/page18-dna.svg\' style="padding-right:5px;" height="70">
                        </td>
                        <td class="desc" style="text-align:right;">
                        <table width="195">
                            <tr>
                                <td class="gene gene1" height="40" style="padding-right:15px;">Ген TCF7L2 </td>
                            </tr>
                            <tr><td height="10"></td></tr>
                            <tr>
                                <td class="gene gene2" height="40" style="padding-right:15px;">Ваша мутация C;C
                                </td>
                            </tr>
                            <tr><td height="10"></td></tr>
                            <tr>
                                <td class="gene gene190" height="40" style="padding-right:15px;">Полиморфизм rs7903146 </td>
                            </tr>
                        </table>
                        </td>
                    </tr>
                    </table>
                </td>

                <td width="5"></td>
                <td>
                    <table class="table2 graybox2-158">
                        <tr>
                            <td style="padding-bottom:5px;">
                            Полиморфизм гена TCF7L2 (фактор транскрипции 7). Расположен на длинном плече хромосомы 10 в сегменте 25.2
                            </td>
                        </tr>
                        <tr>
                            <td height="80px">
                            <span style="font-family:gilroy-semibold">Функция:</span> Регулирует метаболизм глюкозы в тканях поджелудочной железы и печени.
                            </td>
                        </tr>
                    </table>
                </td>
            </tr>
        </table>

        <div style="font-family:gilroy;margin-top:10px;font-size:13px;line-height:19px;color: #555A5C;width:940px">
        Обнаруженный генотип не изменяет эффективность низкоуглеводной диеты. Рекомендовано придерживаться правильного размеренного питания с ограничением потребления простых сахаров.
        </div>

    </div>
</div>
<sethtmlpagefooter name="MyFooter2-gray-border" value="on"/>

<div class="report-box page page28" style="page-break-before:left;">
    <h2 class="gray" style="margin-bottom:27px;text-transform:uppercase;">Отчет по результатам исследования</h2>
    <div class="page28__content content-text">
        <table height="158" style="border-collapse:collapse;" width="940px">
            <tr>
                <td>
                    <table class="table1 graybox1-158" height="158" style="margin-left:-2px;">
                    <tr>
                        <td class="img" >
                            <img src=\'./assets/page18-dna.svg\' style="padding-right:5px;" height="70">
                        </td>
                        <td class="desc" style="text-align:right;">
                        <table width="195">
                            <tr>
                                <td class="gene gene1" height="40">Ген TCF7L2</td>
                            </tr>
                            <tr><td height="10"></td></tr>
                            <tr>
                                <td class="gene gene2" height="40" style="padding-right:15px;"> Ваша мутация G;G
                                </td>
                            </tr>
                            <tr><td height="10"></td></tr>
                            <tr>
                                <td class="gene gene190" height="40" style="padding-right:15px;">Полиморфизм rs12255372</td>
                            </tr>
                        </table>
                        </td>
                    </tr>
                    </table>
                </td>

                <td width="5"></td>
                <td>
                <table class="table2 graybox2-158" height="158" >
                <tr>
                    <td style="padding-bottom:5px;">
                    Полиморфизм гена TCF7L2 (фактор транскрипции 7). Находится на длинном плече хромосомы 10, в цитогенентическом сегменте 25.2 
                    </td>
                </tr>
                <tr>
                    <td height="80px">
                        <span style="font-family:gilroy-semibold">Функция:</span> Регулирует метаболизм глюкозы в тканях поджелудочной железы и печени.
                    </td>
                </tr>
            </table>
                </td>
            </tr>
        </table>

        <div style="font-family:gilroy;margin-top:10px;margin-bottom:5px;font-size:13px;line-height:19px;color: #555A5C;width:940px">
        Обнаруженный генотип не изменяет эффективность низкоуглеводной диеты. Хотя при данном генотипе и не описана высокая эффективность низкоуглеводной диеты, снижение потребления пищи, богатой простыми углеводами будет полезно для поддержания хорошего самочувствия и профилактики различных заболеваний, таких как диабет и сердечнососудистые заболевания.
        </div>
        
        <table height="213" style="border-collapse:collapse;margin-bottom:0px;padding-bottom:0;" width="940px">
            <tr>
                <td width="314">
                    <table height="220" class="table12 graybox1-213" style="margin-left:-2px;margin-bottom:0;padding-bottom:0;padding-top:25px;padding-right:0;" width="314">
                    <tr>
                        <td class="img" height="217" width="80">
                            <img src=\'./assets/page18-dna.svg\'  height="70">
                        </td>
                        <td class="desc" style="text-align:right;padding-top:10px;">
                        <table width="195">
                            <tr>
                                <td class="gene gene173" height="40" style="padding: 0 30px 5px 0;">Гаплотипы гена APOE</td>
                            </tr>
                        </table>
                        </td>
                    </tr>
                    </table>
                </td>

                <td width="12"></td>
                <td>
                    <table height="213" class="table22 graybox2-213" >
                        <tr>
                            <td style="padding-bottom:5px;">
                            Гаплотипы гена APOE - это комбинация 2-х полиморфизмов- rs429358 и rs7412, расположенных в цитосегменте 19q13.32, генотипы которых которые обычно наследуются вместе. Основными гаплотипами являются <span style="font-family:quivira">&#8455;</span>2, <span style="font-family:quivira">&#8455;</span>3 и <span style="font-family:quivira">&#8455;</span>4, встречающиеся в европейской популяции с частотами 6.65, 78.7 и 12.07% соответственно.
                            </td>
                        </tr>
                        <tr>
                            <td height="80px">
                            <span style="font-family:gilroy-semibold">Функция:</span> Ген ApoE кодирует белок аполипопротеин Е (АпоЕ). Белок АпоЕ - фермент, играющий важную роль в метаболизме липидов. Он связан с предрасположенностью к гиперлипопротеинемии (ГЛП), атеросклерозу, гиперхолестеринемии, болезни Альцгеймера и пр.
                            </td>
                        </tr>
                    </table>
                </td>
            </tr>
        </table>

        <div style="padding:0;margin:0;font-family:gilroy;font-size:13px;line-height:19px;color: #555A5C;width:940px">
        <p style="margin: 0 0 5px 0">Обнаружен гаплотип APO-E3/E3. Частота в европейской популяции,%: 78.7761 <br></p>
        <p style="margin:0;">Нейтральный вариант.</p>
        </div>

    </div>
</div>
<sethtmlpagefooter name="MyFooter2-gray-border" value="on"/>


<div class="page page29 bg-right" style="page-break-before:left;">
    <h2 class="gray" style="margin-bottom:20px;text-transforme:uppercase;">ОТЧЕТ ПО РЕЗУЛЬТАТАМ ИССЛЕДОВАНИЯ</h2>
    <div class="page29__content content-text" style="width:558px; color: #555A5C;height:350px; ">
        <p style="margin:0;">
            При рационе, содержащем большое количество углеводов, Вы быстрее набираете вес, чем люди с другими генотипами. При появлении необходимости снизить массу тела, эффективность низкоуглеводной диеты повышенная. Для снижения массы тела рекомендовано сократить калории за счет ограничения потребление продуктов, богатых «быстрыми углеводами» (гликемический индекс выше 70). Организм взрослого человека усваивает не больше 4-6 г сахара в час, избыток будет запасен в виде жировых отложений. Дефицит магния усугубляет нарушение углеводного обмена, обсудите с Вашим врачом необходимость дополнительного приема препаратов магния.
        </p>
    </div>
    <div class="content-text" style="width:560px;margin:0;">
 
        <p class="risk-title1" style="margin:0;">Индивидуальный риск</p>
        <p class="risk-title2" style="">69 баллов - выше среднего</p>

        <div style="margin-bottom:30px;">
            <img src=\'./assets/flag.svg\' style="margin-bottom:-10px;margin-left: 350px;width:20px;height:26px;">
            <p style="width:552px;height:10px; margin:0; background: linear-gradient(top right, rgb(223, 9, 22,0.5) 0%, #029DE1 100%);">
            </p>
        </div>

        <p class="risk-title1" style="">Среднепопуляционный риск
        </p>
        <p class="risk-title2"  style="">49 баллов</p>

        <div>
            <img src=\'./assets/flag.svg\' style="margin-bottom:-10px;margin-left: 250px;width:20px;height:26px;">
            <p style="width:552px;height:10px; background: linear-gradient(top right, rgb(223, 9, 22,0.5) 0%, #029DE1 100%);margin:0;">
            </p>
        </div>

    </div>
</div>
<sethtmlpagefooter name="MyFooter2-gray-border" value="on"/>

<div class="page page30 template1 bg-right" style="page-break-before:left;">
    <div class="page30__content content-text" style="color: #555A5C;">  
        <table  height="200" width="610" style="margin-left:-2px;">
            <tr>
                <td class="item" >
                    <img src=\'./assets/radio-yellow.svg\' width="16px" height="16px" style="padding-right:5px;margin-bottom:-2px;">

                    <span style="color: #596363;font-size: 16px;line-height: 150%;">Средняя потребность</span>

                    <p><img src=\'./assets/risk4.svg\' style="padding-top:14px;padding-bottom:10px;" height="70"></p>

                    <p style="font-family:gilroy-semibold;height:43px;margin:0;padding:0;">
                        Ограничение насыщенных<br> жирных кислот
                    </p>
                </td>
                <td width="20"></td>
                <td >
                    <table width="255">
                        <tr>
                            <td style="font-size:16px;font-family:gilroy-semibold;padding-bottom:10px;">
                            Необходимость ограничивать потребление насыщенных жирных кислот                           
                            </td>
                        </tr>
                        <tr>
                            <td style="font-size:14px;font-family:gilroy;line-height: 150%;padding-bottom:20px;">
                            Насыщенные жирные кислоты участвуют в терморегуляции организма, улучшают состояние волос и кожи
                            </td>
                        </tr>
                    </table>
                </td>
            </tr>
        </table>
        <div style="width:544px;padding-top:10px;">
            <p>Насыщенные жиры содержатся в животном масле, входят в состав мясных, молочных и некоторых растительных продуктов питания. С химической точки зрения, насыщенные жирные кислоты (НЖК) представляют собой вещества с одинарными связями атомов углерода. Особенным свойством таких жиров является то, что они не теряют свою твёрдую форму при комнатной температуре. НЖК наполняют организм человека энергией и активно участвуют в процессе строения клеток.
            </p>
            <p>
            Потребление избыточного количества насыщенных жиров является фактором риска сердечно-сосудистых заболеваний, а у некоторых людей влияет на появление избыточной массы тела. НЖК имеют свойство откладываться в организме «про запас» в виде жировых отложений. Во время физической нагрузки под действием гормонов (адреналина и норадреналина, глюкагона и т.д.). НЖК выделяются в кровоток, высвобождая энергию для организма.            
            </p>
        </div>
    </div>
</div>
<sethtmlpagefooter name="MyFooter2-gray-border" value="on"/>


<div class="report-box page page31" style="page-break-before:left;">
    <h2 class="gray" style="margin-bottom:27px;text-transform:uppercase;">Отчет по результатам исследования</h2>
    <div class="page26__content content-text">
        <table height="175" style="border-collapse:collapse;" width="940px">
            <tr>
                <td>
                    <table class="table1 graybox1-174" height="175" width="315" style="margin-left:-2px;">
                    <tr>
                        <td class="img" >
                            <img src=\'./assets/page18-dna.svg\' style="padding-right:15px;" height="70">
                        </td>
                        <td class="desc" style="text-align:right;">
                        <table width="195">
                            <tr>
                                <td class="gene gene1" height="40">Ген APOA2</td>
                            </tr>
                            <tr><td height="10"></td></tr>
                            <tr>
                                <td class="gene gene2" height="40" style="padding-right:15px;">Ваша мутация G;G
                                </td>
                            </tr>
                            <tr><td height="10"></td></tr>
                            <tr>
                                <td class="gene gene180" height="40" style="padding-right:20px">Полиморфизм rs5082</td>
                            </tr>
                        </table>
                        </td>
                    </tr>
                    </table>
                </td>

                <td width="5"></td>
                <td>
                    <table class="table2 graybox2-174">
                        <tr>
                            <td style="padding-bottom:5px;">
                                Полиморфизм гена APOA2 (Аполипопротеин А2). Расположен на длинном плече хромосомы 1, в цитосегменте 23.3.
                            </td>
                        </tr>
                        <tr>
                            <td height="80">
                            <span style="font-family:gilroy-semibold"> Функция:</span> Основной белок липопротеинов высокой плотности. Полиморфизм изменяет промоторную последовательность гена APOA2, в результате чего носители экспрессируют меньше белкапродукта этого гена.
                            </td>
                        </tr>
                    </table>
                </td>
            </tr>
        </table>

        <div style="font-family:gilroy;margin-top:16px;font-size:13px;line-height:19px;color: #555A5C;width:940px">
            Норма. Вариант гена не предрасполагает к выраженным негативным последствиям избыточного потребления насыщенных жиров.
        </div>
    </div>
</div>
<sethtmlpagefooter name="MyFooter2-gray-border" value="on"/>

<div class="report-box page page32" style="page-break-before:left;">
    <h2 class="gray" style="margin-bottom:27px;text-transform:uppercase;">Отчет по результатам исследования</h2>
    <div class="page28__content content-text">
        <table height="158" style="border-collapse:collapse;" width="940px">
            <tr>
                <td>
                    <table class="table1 graybox1-158" height="158" style="margin-left:-2px;">
                    <tr>
                        <td class="img" >
                            <img src=\'./assets/page18-dna.svg\' style="padding-right:5px;" height="70">
                        </td>
                        <td class="desc" style="text-align:right;">
                        <table width="195">
                            <tr>
                                <td class="gene gene1" height="40">Ген FABP2</td>
                            </tr>
                            <tr><td height="10"></td></tr>
                            <tr>
                                <td class="gene gene2" height="40" style="padding-right:15px;">Ваша мутация T;C
                                </td>
                            </tr>
                            <tr><td height="10"></td></tr>
                            <tr>
                                <td class="gene gene190" height="40" style="padding-right:15px;">Полиморфизм rs1799883</td>
                            </tr>
                        </table>
                        </td>
                    </tr>
                    </table>
                </td>

                <td width="5"></td>
                <td>
                <table class="table2 graybox2-158" height="158" >
                <tr>
                    <td style="padding-bottom:5px;">
                    Полиморфизм гена FABP2 (Белок, связывающий жирные кислоты в кишечнике, 2). Находится на длинном плече хромосомы 10, в цитосегменте 25.2
                    </td>
                </tr>
                <tr>
                    <td height="80px">
                        <span style="font-family:gilroy-semibold">Функция:</span> Переносчик жирных кислот в тонком кишечнике. Контролирует эффективность усвоения жиров, поступающих с пищей.
                    </td>
                </tr>
            </table>
                </td>
            </tr>
        </table>

        <div style="font-family:gilroy;margin-top:10px;margin-bottom:25px;font-size:13px;line-height:19px;color: #555A5C;width:940px">
        Умеренный фактор, повышающий необходимость ограничивать потребление насыщенных жиров.
        </div>
        
        <table height="213" style="border-collapse:collapse;margin-bottom:0px;padding-bottom:0;" width="940px">
            <tr>
                <td width="314">
                    <table height="220" class="table12 graybox1-213" style="margin-left:-2px;margin-bottom:0;padding-bottom:0;padding-top:25px;" >
                    <tr>
                        <td class="img" height="217" width="85">
                            <img src=\'./assets/page18-dna.svg\' style="" height="70">
                        </td>
                        <td class="desc" style="text-align:right;padding-top:5px;">
                        <table width="185" height="217">
                            <tr>
                                <td class="gene gene180" height="40" style="padding: 0 15px 5px 0;">Гаплотипы гена APOE</td>
                            </tr>
                        </table>
                        </td>
                    </tr>
                    </table>
                </td>

                <td width="12"></td>
                <td>
                    <table height="213" class="table22 graybox2-213" >
                        <tr>
                            <td style="padding-bottom:5px;">
                                Гаплотипы гена APOE - это комбинация 2-х полиморфизмов- rs429358 и rs7412, расположенных в цитосегменте 19q13.32, генотипы которых которые обычно наследуются вместе. Основными гаплотипами являются <span style="font-family:quivira">&#8455;</span>2, <span style="font-family:quivira">&#8455;</span>3 и <span style="font-family:quivira">&#8455;</span>4, встречающиеся в европейской популяции с частотами 6.65, 78.7 и 12.07% соответственно.
                            </td>
                        </tr>
                        <tr>
                            <td height="80px">
                            <span style="font-family:gilroy-semibold">Функция:</span> Ген ApoE кодирует белок аполипопротеин Е (АпоЕ). Белок АпоЕ - фермент, играющий важную роль в метаболизме липидов. Он связан с предрасположенностью к гиперлипопротеинемии (ГЛП), атеросклерозу, гиперхолестеринемии, болезни Альцгеймера и пр.
                            </td>
                        </tr>
                    </table>
                </td>
            </tr>
        </table>

        <div style="padding:0;margin:0;font-family:gilroy;font-size:13px;line-height:19px;color: #555A5C;width:940px">
        <p style="margin: 5px 0 0 0">Обнаружен гаплотип APO-E3/E3. Частота в европейской популяции,%: 78.7761
        </p>
        </div>

    </div>
</div>
<sethtmlpagefooter name="MyFooter2-gray-border" value="on"/>

<div class="page page33 bg-right" style="page-break-before:left;">
    <h2 class="gray" style="margin-bottom:20px;text-transforme:uppercase;">ОТЧЕТ ПО РЕЗУЛЬТАТАМ ИССЛЕДОВАНИЯ</h2>
    <div class="page33__content content-text" style="width:558px; color: #555A5C;height:350px; ">
            <p>
                Наиболее распространенный генотип. Не влияет на необходимость ограничивать потребление насыщенных жирных кислот.
            </p>
            <p>
                По результатам генетического теста, выраженность негативных последствий избыточного потребления насыщенных жирных кислот немного ниже среднепопуляционной.
            </p>
            <p style="margin:0;">
                Однако, следует помнить, что избыточное потребление насыщенных жирных кислот может быть самостоятельным фактором риска для некоторых заболеваний независимо от генотипа.        
            </p>
    </div>
    <div class="content-text" style="width:560px;margin:0;">
 
        <p class="risk-title1" style="margin:0;">Индивидуальная потребность</p>
        <p class="risk-title2" style="">45 баллов - ниже среднего
        </p>

        <div style="margin-bottom:30px;">
            <img src=\'./assets/flag.svg\' style="margin-bottom:-10px;margin-left: 220px;width:20px;height:26px;">
            <p style="width:552px;height:10px; margin:0; background: linear-gradient(top right, rgb(223, 9, 22,0.5) 0%, #029DE1 100%);">
            </p>
        </div>

        <p class="risk-title1" style="">Среднепопуляционная потребность</p>
        <p class="risk-title2"  style="">54 баллов</p>

        <div>
            <img src=\'./assets/flag.svg\' style="margin-bottom:-10px;margin-left: 275px;width:20px;height:26px;">
            <p style="width:552px;height:10px; background: linear-gradient(top right, rgb(223, 9, 22,0.5) 0%, #029DE1 100%);margin:0;">
            </p>
        </div>

    </div>
</div>
<sethtmlpagefooter name="MyFooter2-gray-border" value="on"/>

<div class="page page34 template1 bg-right" style="page-break-before:left;">
    <div class="page34__content content-text" style="color: #555A5C;">  
        <table  height="200" width="610" style="margin-left:-2px;">
            <tr>
                <td class="item" >
                    <img src=\'./assets/radio-green.svg\' width="16px" height="16px" style="padding-right:5px;margin-bottom:-2px;">

                    <span style="color: #596363;font-size: 16px;line-height: 150%;">Низкая потребность</span>

                    <p><img src=\'./assets/risk5.png\' style="padding-top:14px;padding-bottom:10px;" height="70"></p>

                    <p style="font-family:gilroy-semibold;height:43px;margin:0;padding:0;">
                        Потребность<br> в разгрузочных днях
                    </p>
                </td>
                <td width="20"></td>
                <td >
                    <table width="255">
                        <tr>
                            <td style="font-size:16px;font-family:gilroy-semibold;padding-bottom:10px;">
                                Потребность в разгрузочных днях
                            </td>
                        </tr>
                        <tr>
                            <td style="font-size:14px;font-family:gilroy;line-height: 150%;">
                                Разгрузочный день – это период, во время которого допустим прием только одного вида продукта, который употребляется на протяжении всего дня. Как правило, это могут быть овощи, фрукты, каши 
                            </td>
                        </tr>
                    </table>
                </td>
            </tr>
        </table>
        <div style="width:544px;padding-top:10px;">
            <p> 
                Нужно ли Вам устраивать «разгрузочные дни» - периоды с низким содержанием жиров в диете или для вашего организма благоприятнее равномерное питание? На этот вопрос может ответить ген PPARG, который отвечает за рост жировых клеток. 
            </p>
            <p>
                Большое количество генов (в том числе PPARG) «достались» нам в ходе эволюции от животных. Так как животные обычно имеют доступ к калорийной пище, богатой жирами, далеко не круглый год, работа PPARG жизненно необходима им в голодные периоды, поскольку этот ген регулирует накопление жира. Вариант С (соответствует Pro12) -примерно 85% людей имеют этот «запасающий» вариант и «разгрузочные дни» с низким содержанием жиров физиологичны и полезны, особенно при низкой физической активности.    
            </p>
        </div>
    </div>
</div>
<sethtmlpagefooter name="MyFooter2-gray-border" value="on"/>

<div class="report-box page page35" style="page-break-before:left;">
    <h2 class="gray" style="margin-bottom:27px;text-transform:uppercase;">Отчет по результатам исследования</h2>
    <div class="page26__content content-text">
        <table height="175" style="border-collapse:collapse;" width="940px">
            <tr>
                <td>
                    <table class="table1 graybox1-174" height="175" width="315" style="margin-left:-2px;">
                    <tr>
                        <td class="img" >
                            <img src=\'./assets/page18-dna.svg\' style="padding-right:15px;" height="70">
                        </td>
                        <td class="desc" style="text-align:right;">
                        <table width="195">
                            <tr>
                                <td class="gene gene1" height="40">Ген PPARG </td>
                            </tr>
                            <tr><td height="10"></td></tr>
                            <tr>
                                <td class="gene gene2" height="40" style="padding-right:15px;">Ваша мутация C;G
                                </td>
                            </tr>
                            <tr><td height="10"></td></tr>
                            <tr>
                                <td class="gene gene180" height="40" style="padding-right:10px">Полиморфизм rs1801282</td>
                            </tr>
                        </table>
                        </td>
                    </tr>
                    </table>
                </td>

                <td width="5"></td>
                <td>
                    <table class="table2 graybox2-174">
                        <tr>
                            <td style="padding-bottom:5px;">
                            Полиморфизм гена PPARG (Рецептор активатора пероксисом G). Расположен на коротком плече хромосомы 3 в цитогенетическом сегменте 25.2 
                            </td>
                        </tr>
                        <tr>
                            <td height="80">
                            <span style="font-family:gilroy-semibold">Функция:</span> Регулирует накопление жирных кислот и метаболизм глюкозы.
                            </td>
                        </tr>
                    </table>
                </td>
            </tr>
        </table>

        <div style="font-family:gilroy;margin-top:16px;font-size:13px;line-height:19px;color: #555A5C;width:940px">
            Данный генотип связан с пониженной, чем при генотипе С/С потребностью в разгрузочных днях. Дня его носителей благоприятнее равномерный тип питания.
        </div>
    </div>
</div>
<sethtmlpagefooter name="MyFooter2-gray-border" value="on"/>

<div class="page page36 bg-right" style="page-break-before:left;">
    <h2 class="gray" style="margin-bottom:20px;text-transforme:uppercase;">ОТЧЕТ ПО РЕЗУЛЬТАТАМ ИССЛЕДОВАНИЯ</h2>
    <div class="page36__content content-text" style="width:558px; color: #555A5C;height:350px; ">
            <p style="margin:0;">
                При Вашем генотипе ниже индивидуальная потребность в разгрузочных днях, предпочтительнее равномерный тип питания. Старайтесь придерживаться равномерного типа питания с умеренным ограничением калорий при необходимости снизить массу тела. Для Вас менее физиологичны разгрузочные дни.     
            </p>
    </div>
    <div class="content-text" style="width:560px;margin:0;">
 
        <p class="risk-title1" style="margin:0;">Индивидуальная потребность</p>
        <p class="risk-title2" style="margin-bottom:20px;">0 баллов - ниже среднего
        </p>

        <div style="margin-bottom:30px;">
            <p style="width:552px;height:10px; margin:0; background: linear-gradient(top right, rgb(223, 9, 22,0.5) 0%, #029DE1 100%);">
            </p>
        </div>

        <p class="risk-title1" style="">Среднепопуляционная потребность</p>
        <p class="risk-title2"  style="">87 баллов</p>

        <div>
            <img src=\'./assets/flag.svg\' style="margin-bottom:-10px;margin-left: 380px;width:20px;height:26px;">
            <p style="width:552px;height:10px; background: linear-gradient(top right, rgb(223, 9, 22,0.5) 0%, #029DE1 100%);margin:0;">
            </p>
        </div>

    </div>
</div>
<sethtmlpagefooter name="MyFooter2-gray-border" value="on"/>


<div class="page page37 template1 bg-right" style="page-break-before:left;">
    <div class="page37__content content-text" style="color: #555A5C;">  
        <table  height="200" width="610" style="margin-left:-2px;">
            <tr>
                <td class="item" >
                    <img src=\'./assets/radio-red.svg\' width="16px" height="16px" style="padding-right:5px;margin-bottom:-2px;">

                    <span style="color: #596363;font-size: 16px;line-height: 150%;">Высокая выраженность</span>

                    <p><img src=\'./assets/risk6.svg\' style="padding: 10px 0 0 0 ;margin-left:-20px;" height="90"></p>

                    <p style="font-family:gilroy-semibold;height:43px;margin:0;padding:0;">
                        Выраженность<br> ЙО-ЙО эффекта
                    </p>
                </td>
                <td width="20"></td>
                <td style="vertical-align:top;">
                    <table width="255" >
                        <tr>
                            <td style="font-size:16px;font-family:gilroy-semibold;padding-bottom:15px;">
                                ЙО-ЙО эффект
                            </td>
                        </tr>
                        <tr>
                            <td style="font-size:14px;font-family:gilroy;line-height: 150%;">
                            Похудели и набрали? Набирали и похудели? Скорее всего дело в генетике, это называется ЙО-ЙО эффект.
                            </td>
                        </tr>
                    </table>
                </td>
            </tr>
        </table>
        <div style="width:544px;padding-top:10px;">
            <p> 
            Исследования показывают, что некоторые люди возвращают свой лишний вес после успешной диеты быстрее, чем другие. Во многом это детерминировано нашими генами.
            </p>
            <p>
            Для обычного человека это скорее минус, чем плюс. Однако, это полезное свойство для спортсменов и системных людей.
            </p>
        </div>
    </div>
</div>
<sethtmlpagefooter name="MyFooter2-gray-border" value="on"/>

<div class="report-box page page38" style="page-break-before:left;">
    <h2 class="gray" style="margin-bottom:27px;text-transform:uppercase;">Отчет по результатам исследования</h2>
    <div class="page27__content content-text">
        <table height="158" style="border-collapse:collapse;" width="940px">
            <tr>
                <td>
                    <table class="table1 graybox1-174" height="158" style="margin-left:-2px;">
                    <tr>
                        <td class="img" >
                            <img src=\'./assets/page18-dna.svg\' style="padding-right:5px;" height="70">
                        </td>
                        <td class="desc" style="text-align:right;">
                        <table width="195">
                            <tr>
                                <td class="gene gene1" height="40">Ген ADRB2</td>
                            </tr>
                            <tr><td height="10"></td></tr>
                            <tr>
                                <td class="gene gene2" height="40" style="padding-right:15px;">Ваша мутация C;C
                                </td>
                            </tr>
                            <tr><td height="10"></td></tr>
                            <tr>
                                <td class="gene gene180" height="40" style="padding-right:15px;">Полиморфизм rs1042714</td>
                            </tr>
                        </table>
                        </td>
                    </tr>
                    </table>
                </td>

                <td width="5"></td>
                <td>
                <table class="table2 graybox2-174" height="158" >
                <tr>
                    <td style="padding-bottom:5px;">
                    Полиморфизм  гена ADRB2 (Бета-адренорецептор 2 типа). Расположен на длинном плече хромосомы 5 в цитосегменте 32. 
                    </td>
                </tr>
                <tr>
                    <td height="80px">
                        <span style="font-family:gilroy-semibold">Функция:</span> Присутствует на мембранах клеток гладкой мускулатуры и в жировых клетках. Участвует в мобилизации жира из жировых клеток в ответ на гормоны (адреналин, норадреналин), стимулируют гликогенолиз в печени и выброс глюкозы в кровь для восполнения энергетических потребностей работы мышц.
                    </td>
                </tr>
            </table>
                </td>
            </tr>
        </table>

        <div style="font-family:gilroy;margin-top:10px;margin-bottom:35px;font-size:13px;line-height:19px;color: #555A5C;width:940px">
            Люди с таким генотипом имеют выше риск набора массы тела после успешного завершения диеты.
        </div>
        
        <table  style="border-collapse:collapse;" width="940px">
            <tr>
                <td>
                    <table class="table1 graybox1-174" style="margin-left:-2px;">
                    <tr>
                        <td class="img" >
                            <img src=\'./assets/page18-dna.svg\' style="padding-right:5px;" height="70">
                        </td>
                        <td class="desc" style="text-align:right;">
                        <table width="195">
                            <tr>
                                <td class="gene gene1" height="40" style="padding-right:15px;">Ген PPARG</td>
                            </tr>
                            <tr><td height="10"></td></tr>
                            <tr>
                                <td class="gene gene2" height="40" style="padding-right:15px;">Ваша мутация C;G

                                </td>
                            </tr>
                            <tr><td height="10"></td></tr>
                            <tr>
                                <td class="gene gene180" height="40" style="padding-right:15px;">Полиморфизм rs1801282</td>
                            </tr>
                        </table>
                        </td>
                    </tr>
                    </table>
                </td>

                <td width="5"></td>
                <td>
                    <table class="table2 graybox2-174">
                        <tr>
                            <td style="padding-bottom:5px;">
                            Полиморфизм гена PPARG (Рецептор активатора пероксисом G). Расположен на коротком плече хромосомы 3 в цитогенетическом сегменте 25.2
                            </td>
                        </tr>
                        <tr>
                            <td height="80px">
                            <span style="font-family:gilroy-semibold">Функция:</span> Регулирует накопление жирных кислот и метаболизм глюкозы.
                            </td>
                        </tr>
                    </table>
                </td>
            </tr>
        </table>

        <div style="font-family:gilroy;margin-top:10px;font-size:13px;line-height:19px;color: #555A5C;width:940px">
            Люди с таким генотипом имеют выше риск набора массы тела после успешного завершения диеты.
        </div>

    </div>
</div>
<sethtmlpagefooter name="MyFooter2-gray-border" value="on"/>

<div class="page page39 bg-right" style="page-break-before:left;">
    <h2 class="gray" style="margin-bottom:20px;text-transforme:uppercase;">ОТЧЕТ ПО РЕЗУЛЬТАТАМ ИССЛЕДОВАНИЯ</h2>
    <div class="page39__content content-text" style="width:558px; color: #555A5C;height:350px; ">
            <p style="margin:0;">
            Ваш генотип предполагает повышенную вероятность проявления ЙО-ЙО эффекта по сравнению со среднепопуляционной вероятностью. При повышенном риске возвращения избыточной массы тела, рекомендуется постоянный контроль калорийности потребляемых продуктов после завершения успешной диеты, равномерная физическая нагрузка.
            </p>
    </div>
    <div class="content-text" style="width:560px;margin:0;">
 
        <p class="risk-title1" style="margin:0;">Индивидуальная выраженность</p>
        <p class="risk-title2" style="">100 баллов - выше среднего
        </p>

        <div style="margin-bottom:30px;">
            <img src=\'./assets/flag.svg\' style="margin-bottom:-10px;margin-left: 532px;width:20px;height:26px;">
            <p style="width:552px;height:10px; margin:0; background: linear-gradient(top right, rgb(223, 9, 22,0.5) 0%, #029DE1 100%);">
            </p>
        </div>

        <p class="risk-title1" style="">Среднепопуляционная выраженность</p>
        <p class="risk-title2"  style="">30 баллов</p>

        <div>
            <img src=\'./assets/flag.svg\' style="margin-bottom:-10px;margin-left: 120px;width:20px;height:26px;">
            <p style="width:552px;height:10px; background: linear-gradient(top right, rgb(223, 9, 22,0.5) 0%, #029DE1 100%);margin:0;">
            </p>
        </div>

    </div>
</div>
<sethtmlpagefooter name="MyFooter2-gray-border" value="on"/>

<div class="page page40 template1 bg-right" style="page-break-before:left;">
    <div class="page40__content content-text" style="color: #555A5C;">  
        <table  height="200" width="610" style="margin-left:-2px;">
            <tr>
                <td class="item" >
                    <img src=\'./assets/radio-green.svg\' width="16px" height="16px" style="padding-right:5px;margin-bottom:-2px;">

                    <span style="color: #596363;font-size: 16px;line-height: 150%;">Низкая склонность</span>

                    <p><img src=\'./assets/risk7.svg\' style="padding-top:14px;padding-bottom:10px;" height="70"></p>

                    <p style="font-family:gilroy-semibold;height:43px;margin:0;padding:0;">
                        Чувство насыщения и <br> склонность к перееданию
                    </p>
                </td>
                <td width="20"></td>
                <td >
                    <table width="255">
                        <tr>
                            <td style="font-size:16px;font-family:gilroy-semibold;padding-bottom:10px;">
                            Пищевое поведение. Чувство насыщения и склонность к перееданию
                            </td>
                        </tr>
                        <tr>
                            <td style="font-size:14px;font-family:gilroy;line-height: 150%;">
                            Многие считают, что склонность к перееданию - это характер, отчасти - да. Не забывайте о генетике ее влияние в этом вопросе занимает не последнее место.
                            </td>
                        </tr>
                    </table>
                </td>
            </tr>
        </table>
        <div style="width:544px;padding-top:10px;">
            <p> 
                Пищевое насыщение - исчезновение чувства голода в процессе еды, отказ от дальнейшего приема пищи. Скорость насыщения зависит как от механических (растяжение желудка), так и от нейроэндокринных факторов (выделение в кровь активных веществ, влияющих на центр насыщения в головном мозге).
            </p>
            <p>
                Вариации в генах, контролирующих нейроэндокринные реакции, могут изменять концентрацию и активность кодируемых ими белков и, таким образом, влиять на скорость возникновения чувства насыщения. 
            </p>
            <p>
                У людей с неблагоприятными вариантами этих генов позже наступает ощущение сытости, им сложнее контролировать объем съедаемой пищи, что может выражаться в переедании.
            </p>
        </div>
    </div>
</div>
<sethtmlpagefooter name="MyFooter2-gray-border" value="on"/>


<div class="report-box page page41" style="page-break-before:left">
    <h2 class="gray" style="margin-bottom:27px;text-transform:uppercase;">Отчет по результатам исследования</h2>
    <div class="page41__content content-text">
        <table height="158" style="border-collapse:collapse;" width="940px">
            <tr>
                <td>
                    <table class="table1 graybox1-174" height="158" style="margin-left:-2px;">
                    <tr>
                        <td class="img" >
                            <img src=\'./assets/page18-dna.svg\' style="padding-right:5px;" height="70">
                        </td>
                        <td class="desc" style="text-align:right;">
                        <table width="195">
                            <tr>
                                <td class="gene gene1" height="40">Ген APOA2 </td>
                            </tr>
                            <tr><td height="10"></td></tr>
                            <tr>
                                <td class="gene gene2" height="40" style="padding-right:15px;">Ваша мутация G;G
                                </td>
                            </tr>
                            <tr><td height="10"></td></tr>
                            <tr>
                                <td class="gene gene180" height="40" style="padding-right:15px;">Полиморфизм rs5082</td>
                            </tr>
                        </table>
                        </td>
                    </tr>
                    </table>
                </td>

                <td width="5"></td>
                <td>
                <table class="table2 graybox2-174" height="158" >
                <tr>
                    <td style="padding-bottom:5px;">
                    Полиморфизм гена APOA2 (Аполипопротеин А2). Расположен на длинном плече хромосомы 1, в цитосегменте 23.3. 
                    </td>
                </tr>
                <tr>
                    <td height="80px">
                        <span style="font-family:gilroy-semibold">Функция:</span> Основной белок липопротеинов высокой плотности. Полиморфизм изменяет промоторную последовательность гена APOA2, в результате чего носители экспрессируют меньше белкапродукта этого гена.
                    </td>
                </tr>
            </table>
                </td>
            </tr>
        </table>

        <div style="font-family:gilroy;margin-top:10px;margin-bottom:35px;font-size:13px;line-height:19px;color: #555A5C;width:940px">
        Ниже склонность к перееданию из-за запаздывающего чувства насыщения.
        </div>
        
        <table  style="border-collapse:collapse;" width="940px">
            <tr>
                <td>
                    <table class="table1 graybox1-174" style="margin-left:-2px;">
                    <tr>
                        <td class="img" >
                            <img src=\'./assets/page18-dna.svg\' style="padding-right:5px;" height="70">
                        </td>
                        <td class="desc" style="text-align:right;">
                        <table width="195">
                            <tr>
                                <td class="gene gene1" height="40" style="padding-right:20px;">Ген FTO</td>
                            </tr>
                            <tr><td height="10"></td></tr>
                            <tr>
                                <td class="gene gene2" height="40" style="padding-right:15px;">Ваша мутация T;A
                                </td>
                            </tr>
                            <tr><td height="10"></td></tr>
                            <tr>
                                <td class="gene gene180" height="40" style="padding-right:10px;">Полиморфизм rs9939609 </td>
                            </tr>
                        </table>
                        </td>
                    </tr>
                    </table>
                </td>

                <td width="5"></td>
                <td>
                    <table class="table2 graybox2-174">
                        <tr>
                            <td style="padding-bottom:5px;">
                            Полиморфизм rs9939609 гена FTO расположен на коротком плече хромосомы 3, в цитогенетическом локусе 25.2
                            </td>
                        </tr>
                        <tr>
                            <td height="80px">
                            <span style="font-family:gilroy-semibold">Функция:</span> Данный генетический локус связан с ожирением за счет нарушения пищевого поведения - избыточным потреблением калорий.
                            </td>
                        </tr>
                    </table>
                </td>
            </tr>
        </table>

        <div style="font-family:gilroy;margin-top:10px;font-size:13px;line-height:19px;color: #555A5C;width:940px">
            Данный генетический вариант связан со средней скорость наступления чувства насыщения во время еды.
        </div>

    </div>
</div>
<sethtmlpagefooter name="MyFooter2-gray-border" value="on"/>

<div class="page page42 bg-right" style="page-break-before:left;">
    <h2 class="gray" style="margin-bottom:20px;text-transform:uppercase;">ОТЧЕТ ПО РЕЗУЛЬТАТАМ ИССЛЕДОВАНИЯ</h2>
    <div class="page42__content content-text" style="width:558px; color: #555A5C;height:350px; ">
            <p style="margin:0;">
            По результатам генетического теста Ваш риск переедания из-за позднего наступления чувства насыщения во время еды ниже среднепопуляционного. Выявлен небольшой "защитный" эффект генов в отношении переедания.
            </p>
    </div>
    <div class="content-text" style="width:560px;margin:0;">
 
        <p class="risk-title1" style="margin:0;">Индивидуальная склонность</p>
        <p class="risk-title2" style="padding-bottom:5px;">24 баллов - ниже среднего
        </p>

        <div style="margin-bottom:30px;">
            <img src=\'./assets/flag.svg\' style="margin-bottom:-10px;margin-left: 110px;width:20px;height:26px;">
            <p style="width:552px;height:10px; margin:0; background: linear-gradient(top right, rgb(223, 9, 22,0.5) 0%, #029DE1 100%);">
            </p>
        </div>

        <p class="risk-title1" style="">Среднепопуляционная склонность
        </p>
        <p class="risk-title2"  style="">37 баллов</p>

        <div>
            <img src=\'./assets/flag.svg\' style="margin-bottom:-10px;margin-left: 150px;width:20px;height:26px;">
            <p style="width:552px;height:10px; background: linear-gradient(top right, rgb(223, 9, 22,0.5) 0%, #029DE1 100%);margin:0;">
            </p>
        </div>

    </div>
</div>
<sethtmlpagefooter name="MyFooter2-gray-border" value="on"/>

<div class="page page43 template1 bg-right" style="page-break-before:left;">
    <div class="page43__content content-text" style="color: #555A5C;">  
        <table  height="200" width="610" style="margin-left:-2px;">
            <tr>
                <td class="item" >
                    <img src=\'./assets/radio-yellow.svg\' width="16px" height="16px" style="padding-right:5px;margin-bottom:-2px;">

                    <span style="color: #596363;font-size: 16px;line-height: 150%;">Средний риск</span>

                    <p><img src=\'./assets/risk8.svg\' style="padding-top:14px;padding-bottom:10px;" height="70"></p>

                    <p style="font-family:gilroy-semibold;height:43px;margin:0;padding:0;">
                    Риск сахарного диабета<br>  2 типа
                    </p>
                </td>
                <td width="20"></td>
                <td style="vertical-align:top;">
                    <table width="255" >
                        <tr>
                            <td style="font-size:16px;font-family:gilroy-semibold;padding-bottom:10px;">
                            Риск сахарного диабета<br>  2 типа
                            </td>
                        </tr>
                        <tr>
                            <td style="font-size:14px;font-family:gilroy;line-height: 150%;">
                            7% людей на земле страдают сахарным диабетом 2 типа, более 20% находятся в преддиабетическом состоянии. Генетика подскажет - есть ли риск?
                            </td>
                        </tr>
                    </table>
                </td>
            </tr>
        </table>
        <div style="width:544px;padding-top:10px;">
            <p> 
                Определение генных маркеров, влияющих на углеводный обмен, позволяет оценить индивидуальный риск повышения уровня глюкозы в крови и резистентности к инсулину (в норме инсулин снижает уровень глюкозы). Крайним проявлением инсулинорезистентности является сахарный диабет 2 типа. Известным средовым фактором, влияющим на риск СД 2 типа, является уровень потребления продуктов с высоким гликемическим индексом.
            </p>
            <p>
                Пациентам, имеющим высокий счет генетического риска инсулинорезистентности, необходимо приложить усилия для ограничения потребления таких продуктов, что будет приводить к снижению риска сахарного диабета 2-ого типа и лучшему контролю массы тела.
            </p>
        </div>
    </div>
</div>
<sethtmlpagefooter name="MyFooter2-gray-border" value="on"/>


<div class="report-box page page44" style="page-break-before:left;">
    <h2 class="gray" style="margin-bottom:27px;text-transform:uppercase;">Отчет по результатам исследования</h2>
    <div class="page44__content content-text">
        <table height="158" style="border-collapse:collapse;" width="940px">
            <tr>
                <td>
                    <table class="table1 graybox1-166" height="158" style="margin-left:-2px;">
                    <tr>
                        <td class="img" >
                            <img src=\'./assets/page18-dna.svg\' style="padding-right:5px;" height="70">
                        </td>
                        <td class="desc" style="text-align:right;">
                        <table width="195">
                            <tr>
                                <td class="gene gene1" height="40" style="padding-right:20px;">Ген FTO</td>
                            </tr>
                            <tr><td height="10"></td></tr>
                            <tr>
                                <td class="gene gene2" height="40" style="padding-right:15px;">Ваша мутация T;A
                                </td>
                            </tr>
                            <tr><td height="10"></td></tr>
                            <tr>
                                <td class="gene gene190" height="40" style="padding-right:15px;">Полиморфизм rs9939609</td>
                            </tr>
                        </table>
                        </td>
                    </tr>
                    </table>
                </td>

                <td width="5"></td>
                <td>
                <table class="table2 graybox2-166" height="158" >
                <tr>
                    <td style="padding-bottom:5px;">
                    Полиморфизм гена FTO (альфа-кетоглутарат-зависимая диоксигеназа). Расположен на хромосоме 16 в цитогенетическом локусе 12.2. 
                    </td>
                </tr>
                <tr>
                    <td height="80px">
                        <span style="font-family:gilroy-semibold">Функция:</span> Данный генетический локус связан с ожирением за счет нарушения пищевого поведения - избыточным потреблением калорий. Этот ген оказывает последовательное и хорошо воспроизводимое влияние на риск ожирения. С каждым аллелем A связано увеличение веса на около 1,5 кг.
                    </td>
                </tr>
            </table>
                </td>
            </tr>
        </table>

        <div style="font-family:gilroy;margin-top:10px;margin-bottom:50px;font-size:13px;line-height:19px;color: #555A5C;width:940px">
            Умеренный фактор риска сахарного диабета 2 типа.
        </div>
        
        <table  style="border-collapse:collapse;" width="940px">
            <tr>
                <td>
                    <table class="table1 graybox1-158" style="margin-left:-2px;">
                    <tr>
                        <td class="img" >
                            <img src=\'./assets/page18-dna.svg\' style="padding-right:5px;" height="70">
                        </td>
                        <td class="desc" style="text-align:right;">
                        <table width="195">
                            <tr>
                                <td class="gene gene1" height="40" style="padding-right:25px;">Ген INS </td>
                            </tr>
                            <tr><td height="10"></td></tr>
                            <tr>
                                <td class="gene gene2" height="40" style="padding-right:15px;">Ваша мутация A;T
                                </td>
                            </tr>
                            <tr><td height="10"></td></tr>
                            <tr>
                                <td class="gene gene173" height="40" style="padding-right:20px;">Полиморфизм rs689</td>
                            </tr>
                        </table>
                        </td>
                    </tr>
                    </table>
                </td>

                <td width="5"></td>
                <td>
                    <table class="table2 graybox2-158">
                        <tr>
                            <td style="padding-bottom:5px;">
                            Полиморфизм гена INS (Инсулин).  Расположен на коротком плече хромосомы 11 в цитогенетическом локусе 15.5.
                            </td>
                        </tr>
                        <tr>
                            <td height="80px">
                            <span style="font-family:gilroy-semibold">Функция:</span> Инсулин – гормон, секретируемый b-клетками поджелудочной железы. Принимает участие в метаболизме глюкозы.
                            </td>
                        </tr>
                    </table>
                </td>
            </tr>
        </table>

        <div style="font-family:gilroy;margin-top:10px;font-size:13px;line-height:19px;color: #555A5C;width:940px">
        Фактор риска инсулинорезистентности.<br> Выше потребность в ограничении углеводов с высоким гликемическим индексом.
        </div>

    </div>
</div>
<sethtmlpagefooter name="MyFooter2-gray-border" value="on"/>

<div class="report-box page page45" style="page-break-before:left;">
    <h2 class="gray" style="margin-bottom:27px;text-transform:uppercase;">Отчет по результатам исследования</h2>
    <div class="page45__content content-text">
        <table height="158" style="border-collapse:collapse;" width="940px">
            <tr>
                <td>
                    <table class="table1 graybox1-158" height="158" style="margin-left:-2px;">
                    <tr>
                        <td class="img" >
                            <img src=\'./assets/page18-dna.svg\' style="padding-right:5px;" height="70">
                        </td>
                        <td class="desc" style="text-align:right;">
                        <table width="195">
                            <tr>
                                <td class="gene gene1" height="40" style="padding-right:10px;">Ген TCF7L2</td>
                            </tr>
                            <tr><td height="10"></td></tr>
                            <tr>
                                <td class="gene gene2" height="40" style="padding-right:15px;">Ваша мутация C;C
                                </td>
                            </tr>
                            <tr><td height="10"></td></tr>
                            <tr>
                                <td class="gene gene190" height="40" style="padding-right:15px;">Полиморфизм rs7903146 </td>
                            </tr>
                        </table>
                        </td>
                    </tr>
                    </table>
                </td>

                <td width="5"></td>
                <td>
                <table class="table2 graybox2-158" height="158" >
                <tr>
                    <td style="padding-bottom:5px;">
                    Полиморфизм гена TCF7L2 (фактор транскрипции 7). Расположен на длинном плече хромосомы 10 в сегменте 25.2.
                    </td>
                </tr>
                <tr>
                    <td height="80px">
                        <span style="font-family:gilroy-semibold">Функция:</span> Регулирует метаболизм глюкозы в тканях поджелудочной железы и печени.
                    </td>
                </tr>
            </table>
                </td>
            </tr>
        </table>

        <div style="font-family:gilroy;margin-top:10px;margin-bottom:50px;font-size:13px;line-height:19px;color: #555A5C;width:940px">
        Норма. Не выявлено фактора, предрасполагающего к инсулинорезистентности и сахарному диабету 2 типа.
        </div>
        
        <table  style="border-collapse:collapse;" width="940px">
            <tr>
                <td>
                    <table class="table1 graybox1-158" style="margin-left:-2px;">
                    <tr>
                        <td class="img" >
                            <img src=\'./assets/page18-dna.svg\' style="padding-right:5px;" height="70">
                        </td>
                        <td class="desc" style="text-align:right;">
                        <table width="195">
                            <tr>
                                <td class="gene gene1" height="40" style="padding-right:10px;">Ген TCF7L2 </td>
                            </tr>
                            <tr><td height="10"></td></tr>
                            <tr>
                                <td class="gene gene2" height="40" style="padding-right:15px;">Ваша мутация G;G
                                </td>
                            </tr>
                            <tr><td height="10"></td></tr>
                            <tr>
                                <td class="gene gene173" height="40" style="padding-right:5px;">Полиморфизм rs12255372</td>
                            </tr>
                        </table>
                        </td>
                    </tr>
                    </table>
                </td>

                <td width="5"></td>
                <td>
                    <table class="table2 graybox2-158">
                        <tr>
                            <td style="padding-bottom:5px;">
                            Полиморфизм гена TCF7L2 (фактор транскрипции 7). Находится на длинном плече хромосомы 10, в цитогенентическом сегменте 25.2
                            </td>
                        </tr>
                        <tr>
                            <td height="80px">
                            <span style="font-family:gilroy-semibold">Функция:</span> Регулирует метаболизм глюкозы в тканях поджелудочной железы и печени.
                            </td>
                        </tr>
                    </table>
                </td>
            </tr>
        </table>

        <div style="font-family:gilroy;margin-top:10px;font-size:13px;line-height:19px;color: #555A5C;width:940px">
            Наиболее распространенный генотип. Не является фактором риска развития сахарного диабета 2 типа.</div>
    </div>
</div>
<sethtmlpagefooter name="MyFooter2-gray-border" value="on"/>

<div class="page page46 bg-right" style="page-break-before:left;">
    <h2 class="gray" style="margin-bottom:20px;text-transforme:uppercase;">ОТЧЕТ ПО РЕЗУЛЬТАТАМ ИССЛЕДОВАНИЯ</h2>
    <div class="page46__content content-text" style="width:558px; color: #555A5C;height:350px; ">
            <p style="margin:0;">
            Ваш  генетический риск развития сахарного диабета 2 типа является общепопуляционным. Это означает, что вероятность развития этого заболевания существует, но она такая же, как и у большинства других людей. Чтобы избежать заболевания следуйте рекомендациям врача, регулярно измеряйте уровень глюкозы в крови (особенно после 40 лет).
            </p>
    </div>
    <div class="content-text" style="width:560px;margin:0;">
 
        <p class="risk-title1" style="margin:0;">Индивидуальный риск</p>
        <p class="risk-title2">65 баллов - средний
        </p>

        <div style="margin-bottom:30px;">
            <img src=\'./assets/flag.svg\' style="margin-bottom:-10px;margin-left: 320px;width:20px;height:26px;">
            <p style="width:552px;height:10px; margin:0; background: linear-gradient(top right, rgb(223, 9, 22,0.5) 0%, #029DE1 100%);">
            </p>
        </div>

        <p class="risk-title1" style="">Среднепопуляционный риск
        </p>
        <p class="risk-title2"  style="">64 балла</p>

        <div>
            <img src=\'./assets/flag.svg\' style="margin-bottom:-10px;margin-left: 310px;width:20px;height:26px;">
            <p style="width:552px;height:10px; background: linear-gradient(top right, rgb(223, 9, 22,0.5) 0%, #029DE1 100%);margin:0;">
            </p>
        </div>

    </div>
</div>
<sethtmlpagefooter name="MyFooter2-gray-border" value="on"/>

<div class="page page47 template1 bg-right" style="page-break-before:left">
    <div class="page47__content content-text" style="color: #555A5C;">  
        <table  height="200" width="610" style="margin-left:-2px;">
            <tr>
                <td class="item" >
                    <img src=\'./assets/radio-red.svg\' width="16px" height="16px" style="padding-right:5px;margin-bottom:-2px;">

                    <span style="color: #596363;font-size: 16px;line-height: 150%;">Высокий риск</span>

                    <p><img src=\'./assets/risk9.svg\' style="padding-top:14px;padding-bottom:10px;" height="70"></p>

                    <p style="font-family:gilroy-semibold;height:43px;margin:0;padding:0;">
                        Риск патологического отложения жира вокруг внутренних органов
                    </p>
                </td>
                <td width="20"></td>
                <td style="vertical-align:top;">
                    <table width="255" >
                        <tr>
                            <td style="font-size:16px;font-family:gilroy-semibold;padding-bottom:10px;">
                            Риск патологического отложения жира вокруг внутренних органов
                            </td>
                        </tr>
                        <tr>
                            <td style="font-size:14px;font-family:gilroy;line-height: 150%;">
                            Висцеральный жир — это один из видов жировых отложений, который скапливается не в подкожных слоях организма, а вокруг жизненно важных органов брюшной полости!
                            </td>
                        </tr>
                    </table>
                </td>
            </tr>
        </table>
        <div style="width:544px;padding-top:10px;">
            <p> 
            Жировая ткань представлена в разном количестве во всех тканях организма, а ее распределение зависит от множества факторов, включающих пол, возраст, уровень физической активности, характер питания и генетические особенности. Подкожный жир выглядит не очень хорошо, он может давать эффект «апельсиновой корки», однако он менее вреден для организма в отличие от жира, располагающегося вокруг внутренних органов. Жировые депо вокруг внутренних органов, нарушают их функционирование, уменьшают количество поступающей к органу крови и приводят к преждевременному изнашиванию и заболеваниям.
            </p>
        </div>
    </div>
</div>
<sethtmlpagefooter name="MyFooter2-gray-border" value="on"/>


<div class="report-box page page48" style="page-break-before:left;">
    <h2 class="gray" style="margin-bottom:27px;text-transform:uppercase;">Отчет по результатам исследования</h2>
    <div class="page48__content content-text">
        <table height="158" style="border-collapse:collapse;" width="940px">
            <tr>
                <td>
                    <table class="table1 graybox1-166" height="158" style="margin-left:-2px;">
                    <tr>
                        <td class="img" >
                            <img src=\'./assets/page18-dna.svg\' style="padding-right:5px;" height="70">
                        </td>
                        <td class="desc" style="text-align:right;">
                        <table width="195">
                            <tr>
                                <td class="gene gene1" height="40" style="padding-right:10px;">Ген ADRB2</td>
                            </tr>
                            <tr><td height="10"></td></tr>
                            <tr>
                                <td class="gene gene2" height="40" style="padding-right:15px;">Ваша мутация C;A
                                </td>
                            </tr>
                            <tr><td height="10"></td></tr>
                            <tr>
                                <td class="gene gene190" height="40" style="padding-right:15px;">Полиморфизм rs1042714</td>
                            </tr>
                        </table>
                        </td>
                    </tr>
                    </table>
                </td>

                <td width="5"></td>
                <td>
                <table class="table2 graybox2-166" height="158" >
                <tr>
                    <td style="padding-bottom:5px;">
                    Полиморфизм  гена ADRB2 (Бета-адренорецептор 2 типа). Расположен на длинном плече хромосомы 5 в цитосегменте 32.
                    </td>
                </tr>
                <tr>
                    <td height="80px">
                        <span style="font-family:gilroy-semibold">Функция:</span> Присутствует на мембранах клеток гладкой мускулатуры и в жировых клетках. Участвует в мобилизации жира из жировых клеток в ответ на гормоны (адреналин, норадреналин), стимулируют гликогенолиз в печени и выброс глюкозы в кровь для восполнения энергетических потребностей работы мышц.
                    </td>
                </tr>
            </table>
                </td>
            </tr>
        </table>

        <div style="font-family:gilroy;margin-top:10px;margin-bottom:50px;font-size:13px;line-height:19px;color: #555A5C;width:940px">
            У носителей данного генотипа, выше вероятность  отложения жира вокруг внутренних органов.
        </div>
        
        <table  style="border-collapse:collapse;" width="940px">
            <tr>
                <td>
                    <table class="table1 graybox1-158" style="margin-left:-2px;">
                    <tr>
                        <td class="img" >
                            <img src=\'./assets/page18-dna.svg\' style="padding-right:5px;" height="70">
                        </td>
                        <td class="desc" style="text-align:right;">
                        <table width="195">
                            <tr>
                                <td class="gene gene1" height="40" style="padding-right:15px;">Ген APOA2  </td>
                            </tr>
                            <tr><td height="10"></td></tr>
                            <tr>
                                <td class="gene gene2" height="40" style="padding-right:15px;">Ваша мутация G;G
                                </td>
                            </tr>
                            <tr><td height="10"></td></tr>
                            <tr>
                                <td class="gene gene173" height="40" style="padding-right:20px;">Полиморфизм rs5082 </td>
                            </tr>
                        </table>
                        </td>
                    </tr>
                    </table>
                </td>

                <td width="5"></td>
                <td>
                    <table class="table2 graybox2-158">
                        <tr>
                            <td style="padding-bottom:5px;">
                            Полиморфизм гена APOA2 (Аполипопротеин А2). Расположен на длинном плече хромосомы 1, в цитосегменте 23.3.
                            </td>
                        </tr>
                        <tr>
                            <td height="80px">
                            <span style="font-family:gilroy-semibold">Функция:</span> Основной белок липопротеинов высокой плотности. Полиморфизм изменяет промоторную последовательность гена APOA2, в результате чего носители экспрессируют меньше белкапродукта этого гена.
                            </td>
                        </tr>
                    </table>
                </td>
            </tr>
        </table>

        <div style="font-family:gilroy;margin-top:10px;font-size:13px;line-height:19px;color: #555A5C;width:940px">
        Ниже риск депонирования жиров вокруг внутренних органов.
        </div>

    </div>
</div>
<sethtmlpagefooter name="MyFooter2-gray-border" value="on"/>


<div class="report-box page page49" style="page-break-before:left;">
    <h2 class="gray" style="margin-bottom:27px;text-transform:uppercase;">Отчет по результатам исследования</h2>
    <div class="page49__content content-text">
        <table height="158" style="border-collapse:collapse;" width="940px">
            <tr>
                <td>
                    <table class="table1 graybox1-158" height="158" style="margin-left:-2px;">
                    <tr>
                        <td class="img" >
                            <img src=\'./assets/page18-dna.svg\' style="padding-right:5px;" height="70">
                        </td>
                        <td class="desc" style="text-align:right;">
                        <table width="195">
                            <tr>
                                <td class="gene gene1" height="40" style="padding-right:10px;">Ген FABP2</td>
                            </tr>
                            <tr><td height="10"></td></tr>
                            <tr>
                                <td class="gene gene2" height="40" style="padding-right:15px;">Ваша мутация T;C
                                </td>
                            </tr>
                            <tr><td height="10"></td></tr>
                            <tr>
                                <td class="gene gene190" height="40" style="padding-right:15px;">Полиморфизм rs1799883</td>
                            </tr>
                        </table>
                        </td>
                    </tr>
                    </table>
                </td>

                <td width="5"></td>
                <td>
                <table class="table2 graybox2-158" height="158" >
                <tr>
                    <td style="padding-bottom:5px;">
                        Полиморфизм гена FABP2 (Белок, связывающий жирные кислоты в кишечнике, 2). Находится на длинном плече хромосомы 10, в цитосегменте 25.2
                    </td>
                </tr>
                <tr>
                    <td height="80px">
                        <span style="font-family:gilroy-semibold">Функция:</span> Переносчик жирных кислот в тонком кишечнике. Контролирует эффективность усвоения жиров, поступающих с пищей.
                    </td>
                </tr>
            </table>
                </td>
            </tr>
        </table>

        <div style="font-family:gilroy;margin-top:10px;margin-bottom:50px;font-size:13px;line-height:19px;color: #555A5C;width:940px">
        Умеренный фактора риска отложения жировых депо вокруг внутренних органов.
        </div>
        
        <table  style="border-collapse:collapse;" width="940px">
            <tr>
                <td>
                    <table class="table1 graybox1-158" style="margin-left:-2px;">
                    <tr>
                        <td class="img" >
                            <img src=\'./assets/page18-dna.svg\' style="padding-right:5px;" height="70">
                        </td>
                        <td class="desc" style="text-align:right;">
                        <table width="195">
                            <tr>
                                <td class="gene gene1" height="40" style="padding-right:10px;">Ген PPARG </td>
                            </tr>
                            <tr><td height="10"></td></tr>
                            <tr>
                                <td class="gene gene2" height="40" style="padding-right:15px;">Ваша мутация C;G
                                </td>
                            </tr>
                            <tr><td height="10"></td></tr>
                            <tr>
                                <td class="gene gene173" height="40" style="padding-right:10px;">Полиморфизм rs1801282 </td>
                            </tr>
                        </table>
                        </td>
                    </tr>
                    </table>
                </td>

                <td width="5"></td>
                <td>
                    <table class="table2 graybox2-158">
                        <tr>
                            <td style="padding-bottom:5px;">
                            Полиморфизм гена PPARG (Рецептор активатора пероксисом G). Расположен на коротком плече хромосомы 3 в цитогенетическом сегменте 25.2

                            </td>
                        </tr>
                        <tr>
                            <td height="80px">
                            <span style="font-family:gilroy-semibold">Функция:</span> Регулирует накопление жирных кислот и метаболизм глюкозы.
                            </td>
                        </tr>
                    </table>
                </td>
            </tr>
        </table>

        <div style="font-family:gilroy;margin-top:10px;font-size:13px;line-height:19px;color: #555A5C;width:940px">
        Умеренно выше риск отложения жира вокруг внутренних органов при избыточном весе.</div>

    </div>
</div>
<sethtmlpagefooter name="MyFooter2-gray-border" value="on"/>


<div class="page page50 bg-right" style="page-break-before:left;">
    <h2 class="gray" style="margin-bottom:20px;text-transforme:uppercase;">ОТЧЕТ ПО РЕЗУЛЬТАТАМ ИССЛЕДОВАНИЯ</h2>
    <div class="page50__content content-text" style="width:558px; color: #555A5C;height:350px; ">
            <p style="margin:0;">
            Ваш генетический риск ожирения внутренних органов выше, чем общепопуляционный риск. Это означает то, что ожирение может представлять для Вас не только эстетическую проблему, но и негативно влиять на работу внутренних органов.  Люди с таким генотипом должны уделять больше внимания контролю своего веса.
            </p>
    </div>
    <div class="content-text" style="width:560px;margin:0;">

        <p class="risk-title1" style="margin:0;">Индивидуальный риск</p>
        <p class="risk-title2">75 баллов - выше среднего
        </p>

        <div style="margin-bottom:30px;">
            <img src=\'./assets/flag.svg\' style="margin-bottom:-10px;margin-left: 350px;width:20px;height:26px;">
            <p style="width:552px;height:10px; margin:0; background: linear-gradient(top right, rgb(223, 9, 22,0.5) 0%, #029DE1 100%);">
            </p>
        </div>

        <p class="risk-title1">Среднепопуляционный риск
        </p>
        <p class="risk-title2">48 баллов</p>

        <div>
            <img src=\'./assets/flag.svg\' style="margin-bottom:-10px;margin-left: 250px;width:20px;height:26px;">
            <p style="width:552px;height:10px; background: linear-gradient(top right, rgb(223, 9, 22,0.5) 0%, #029DE1 100%);margin:0;">
            </p>
        </div>

    </div>
</div>
<sethtmlpagefooter name="MyFooter2-gray-border" value="on"/>



<div class="page page51 template1 bg-right" style="page-break-before:left;">
    <div class="page51__content content-text" style="color: #555A5C;">  
        <table  height="200" width="610" style="margin-left:-2px;">
            <tr>
                <td class="item" >
                    <img src=\'./assets/radio-red.svg\' width="16px" height="16px" style="padding-right:5px;margin-bottom:-2px;">

                    <span style="color: #596363;font-size: 16px;line-height: 150%;">Высокая потребность</span>

                    <p><img src=\'./assets/risk10.svg\' style="padding-top:14px;padding-bottom:10px;" height="70"></p>

                    <p style="font-family:gilroy-semibold;height:43px;margin:0;padding:0;">
                    Потребность в мононенасыщенных жирных кислотах
                    </p>
                </td>
                <td width="20"></td>
                <td style="vertical-align:top;">
                    <table width="255" >
                        <tr>
                            <td style="font-size:16px;font-family:gilroy-semibold;padding-bottom:10px;">
                            Потребность в мононенасыщенных жирных кислотах
                            </td>
                        </tr>
                        <tr>
                            <td style="font-size:14px;font-family:gilroy;line-height: 150%;">
                                Насыщенные жирные кислоты участвуют в терморегуляции организма, улучшают состояние волос и кожи.
                            </td>
                        </tr>
                    </table>
                </td>
            </tr>
        </table>
        <div style="width:579px;padding-top:10px;">
            <p> 
            Мононенасыщенные жиры представляют собой жирные кислоты, в структуре молекул которых не более одной двойной углеродной связи. Самым известным представителем мононенасыщенных жирных кислот (МНЖК) является олеиновая кислота (Омега-9), которая в большом количестве содержится в оливковом масле. Также МНЖК содержатся в арахисовом масле, масле из фундука, многих орехах, авокадо. Мононенасыщенные жиры имеют одну важную отличительную особенность. При комнатной температуре они имеют жидкую консистенцию, но при понижении температуры густеют. Недостаток МНЖК в организме приводит к ухудшению мозговой деятельности, нарушению работы сердечно-сосудистой системы. Недостаток потребления мононенасыщенных жиров может влиять на снижение веса и здоровье в целом у лиц с определенным вариантом гена PPARG. 
            </p>
            <p>
            Потребность в мононенасыщенных жирах дополнительно возрастает: при проживании в холодном регионе; для тех, кто активно занимается спортом, выполняет тяжёлую работу на производстве; для детей в период активного развития; при нарушении работы сердечно-сосудистой системы; при нахождении в экологически неблагоприятных районах (профилактика онкозаболеваний); для больных сахарным диабетом 2 типа.
            </p>
        </div>
    </div>
</div>
<sethtmlpagefooter name="MyFooter2-gray-border" value="on"/>

<div class="report-box page page52" style="page-break-before:left;">
    <h2 class="gray" style="margin-bottom:27px;text-transform:uppercase;">Отчет по результатам исследования</h2>
    <div class="page52__content content-text">
        <table height="174" style="border-collapse:collapse;" width="940px">
            <tr>
                <td>
                    <table class="table1 graybox1-174" height="174" style="margin-left:-2px;">
                    <tr>
                        <td class="img" >
                            <img src=\'./assets/page18-dna.svg\' style="padding-right:5px;" height="70">
                        </td>
                        <td class="desc" style="text-align:right;">
                        <table width="195">
                            <tr>
                                <td class="gene gene1" height="40" style="padding-right:10px;">Ген APOA1</td>
                            </tr>
                            <tr><td height="10"></td></tr>
                            <tr>
                                <td class="gene gene2" height="40" style="padding-right:15px;">Ваша мутация C;C
                                </td>
                            </tr>
                            <tr><td height="10"></td></tr>
                            <tr>
                                <td class="gene gene180" height="40" style="padding-right:25px;">Полиморфизм rs670</td>
                            </tr>
                        </table>
                        </td>
                    </tr>
                    </table>
                </td>

                <td width="5"></td>
                <td>
                <table class="table2 graybox2-174" height="174" style="padding:0;">
                <tr>
                    <td style="padding-top:23px;padding-left:29px;" height="174">
                    Полиморфизм в гене APOAI, члене генного кластера APOAI / CIII / IV / V на хромосоме 11q23-24, кодирует основной белковый компонент липопротеинов высокой плотности, который связан с уровнями липидов в сыворотке. 
                    </td>
                </tr>
            </table>
                </td>
            </tr>
        </table>

        <div style="font-family:gilroy;margin-top:10px;margin-bottom:50px;font-size:13px;line-height:19px;color: #555A5C;width:940px">
        При данном генотипе, потребление мононенасыщенных жирных кисло не отражается на повышении ЛПНП. Нейтральный вариант.
        </div>
        
        <table  style="border-collapse:collapse;" width="940px">
            <tr>
                <td>
                    <table class="table1 graybox1-174" style="margin-left:-2px;">
                    <tr>
                        <td class="img" >
                            <img src=\'./assets/page18-dna.svg\' style="padding-right:5px;" height="70">
                        </td>
                        <td class="desc" style="text-align:right;">
                        <table width="195">
                            <tr>
                                <td class="gene gene1" height="40" style="padding-right:10px;">Ген PPARG </td>
                            </tr>
                            <tr><td height="10"></td></tr>
                            <tr>
                                <td class="gene gene2" height="40" style="padding-right:15px;">Ваша мутация C;G
                                </td>
                            </tr>
                            <tr><td height="10"></td></tr>
                            <tr>
                                <td class="gene gene173" height="40" style="padding-right:10px;">Полиморфизм rs1801282</td>
                            </tr>
                        </table>
                        </td>
                    </tr>
                    </table>
                </td>

                <td width="5"></td>
                <td>
                    <table class="table2 graybox2-174">
                        <tr>
                            <td style="padding-bottom:5px;">
                            Полиморфизм гена PPARG (Рецептор активатора пероксисом G). Расположен на коротком плече хромосомы 3 в цитогенетическом сегменте 25.2
                            </td>
                        </tr>
                        <tr>
                            <td height="80px">
                            <span style="font-family:gilroy-semibold">Функция:</span> Регулирует накопление жирных кислот и метаболизм глюкозы.
                            </td>
                        </tr>
                    </table>
                </td>
            </tr>
        </table>

        <div style="font-family:gilroy;margin-top:10px;font-size:13px;line-height:19px;color: #555A5C;width:940px">
        Люди  с аллелем G имеют меньший риск  развития ожирения , если их потребление  мононенасыщеных жиров больше, чем полиненасыщенных.
        </div>

    </div>
</div>
<sethtmlpagefooter name="MyFooter2-gray-border" value="on"/>

<div class="page page53 bg-right" style="page-break-before:left;">
    <h2 class="gray" style="margin-bottom:20px;text-transforme:uppercase;">ОТЧЕТ ПО РЕЗУЛЬТАТАМ ИССЛЕДОВАНИЯ</h2>
    <div class="page53__content content-text" style="width:558px; color: #555A5C;height:350px; ">
            <p style="margin:0;">
                По результатам генетического теста, необходимость увеличить содержание мононенасыщенных жирных кислот в рационе повышенная. Повышение содержания мононенасыщенных жиров в рационе у людей с таким генотипом способствует нормализации веса и жирового обмена.
            </p>
            <p>
                При Вашем генотипе необходимо следить за достаточным потреблением мононенасыщенных жирных кислот. Список рекомендованных продуктов, содержащих мононенасышенные жирные кислоты приведен в приложении к заключению.     
            </p>
    </div>
    <div class="content-text" style="width:560px;margin:0;">

        <p class="risk-title1" style="margin:0;">Индивидуальный риск</p>
        <p class="risk-title2">100 баллов - выше среднего
        </p>

        <div>
            <img src=\'./assets/flag.svg\' style="margin-bottom:-10px;margin-left: 532px;width:20px;height:26px;">
            <p style="width:552px;height:10px; margin:0; background: linear-gradient(top right, rgb(223, 9, 22,0.5) 0%, #029DE1 100%);">
            </p>
        </div>

        <p class="risk-title1">Среднепопуляционный риск
        </p>
        <p class="risk-title2">64 баллов</p>

        <div>
            <img src=\'./assets/flag.svg\' style="margin-bottom:-10px;margin-left: 350px;width:20px;height:26px;">
            <p style="width:552px;height:10px; background: linear-gradient(top right, rgb(223, 9, 22,0.5) 0%, #029DE1 100%);margin:0;">
            </p>
        </div>

    </div>
</div>
<sethtmlpagefooter name="MyFooter2-gray-border" value="on"/>


<div class="page page54 template1 bg-right" style="page-break-before:left">
    <div class="page54__content content-text" style="color: #555A5C;">  
        <table  height="200" width="610" style="margin-left:-2px;">
            <tr>
                <td class="item" >
                    <img src=\'./assets/radio-red.svg\' width="16px" height="16px" style="padding-right:5px;margin-bottom:-2px;">

                    <span style="color: #596363;font-size: 16px;line-height: 150%;">Высокая потребность</span>

                    <p><img src=\'./assets/risk11.svg\' style="padding-top:14px;padding-bottom:10px;" height="70"></p>

                    <p style="font-family:gilroy-semibold;height:43px;margin:0;padding:0;">
                    Потребность в Омега-3 жирных кислотах

                    </p>
                </td>
                <td width="20"></td>
                <td style="vertical-align:top;">
                    <table width="255" >
                        <tr>
                            <td style="font-size:16px;font-family:gilroy-semibold;padding-bottom:10px;">
                            Потребность в Омега-3 жирных кислотах
                            </td>
                        </tr>
                        <tr>
                            <td style="font-size:14px;font-family:gilroy;line-height: 150%;">
                            Помните? Пейте, дети, рыбий жир - будете здоровы. Омега-3 нужна не только детям!
                            </td>
                        </tr>
                    </table>
                </td>
            </tr>
        </table>
        <div style="width:579px;padding-top:10px;">
            <p> 
            Полиненасыщенные жиры делятся на Омега-6 и Омега-3. Современная диета включает большое количество Омега-6 и недостаточное Омега-3. Оптимальное соотношение 4:1, а современный человек получает из диеты примерно 20:1, то есть в пять раз меньше Омега-3 жирных кислот, что вызывает дисбаланс в обменных процессах, и при определенном генотипе может привести к заболеваниям.
            </p>
            <p>
            При современном типе питания и образе жизни, в целом, всем полезно увеличивать в диете долю Омега-3 по отношению к Омега-6, принимать специальные добавки с Омега-3 (рыбий жир, льняное масло), но при наличии определенных генетических маркеров это особенно критично для профилактики сердечно-сосудистых, онкологических заболеваний и метаболического синдрома.
            </p>
        </div>
    </div>
</div>
<sethtmlpagefooter name="MyFooter2-gray-border" value="on"/>



<div class="report-box page page55" style="page-break-before:left;">
    <h2 class="gray" style="margin-bottom:27px;text-transform:uppercase;">Отчет по результатам исследования</h2>
    <div class="page55__content content-text">
        <table height="175" style="border-collapse:collapse;" width="940px">
            <tr>
                <td>
                    <table class="table1 graybox1-174" height="175" width="315" style="margin-left:-2px;">
                    <tr>
                        <td class="img" >
                            <img src=\'./assets/page18-dna.svg\' style="padding-right:15px;" height="70">
                        </td>
                        <td class="desc" style="text-align:right;">
                        <table width="195">
                            <tr>
                                <td class="gene gene1" height="40">Ген APOA2</td>
                            </tr>
                            <tr><td height="10"></td></tr>
                            <tr>
                                <td class="gene gene2" height="40" style="padding-right:15px;">Ваша мутация G;G
                                </td>
                            </tr>
                            <tr><td height="10"></td></tr>
                            <tr>
                                <td class="gene gene180" height="40" style="padding-right:20px">Полиморфизм rs5082</td>
                            </tr>
                        </table>
                        </td>
                    </tr>
                    </table>
                </td>

                <td width="5"></td>
                <td>
                    <table class="table2 graybox2-174">
                        <tr>
                            <td style="padding-bottom:5px;">
                            Полиморфизм гена APOA2 (Аполипопротеин А2). Расположен на длинном плече хромосомы 1, в цитосегменте 23.3.

                            </td>
                        </tr>
                        <tr>
                            <td height="80">
                            <span style="font-family:gilroy-semibold">Функция:</span> Основной белок липопротеинов высокой плотности. Полиморфизм изменяет промоторную последовательность гена APOA2, в результате чего носители экспрессируют меньше белкапродукта этого гена.
                            </td>
                        </tr>
                    </table>
                </td>
            </tr>
        </table>

        <div style="font-family:gilroy;margin-top:16px;font-size:13px;line-height:19px;color: #555A5C;width:940px">
            Выше потребность в Омега-3 жирных кислотах. Ассоциировано с инсулинорезистентностью и более высоким уровнем воспалительных метаболитов в плазме (СРБ, IL-6). Употребление Омега- 3 может уменьшить воспалительные эффекты, связанные с генотипом GG.
        </div>
    </div>
</div>
<sethtmlpagefooter name="MyFooter2-gray-border" value="on"/>


<div class="report-box page page56" style="page-break-before:left;">
    <h2 class="gray" style="margin-bottom:27px;text-transform:uppercase;">Отчет по результатам исследования</h2>
    <div class="page56__content content-text">
        <table height="174" style="border-collapse:collapse;" width="940px">
            <tr>
                <td>
                    <table class="table1 graybox1-174" height="174" style="margin-left:-2px;">
                    <tr>
                        <td class="img" >
                            <img src=\'./assets/page18-dna.svg\' style="padding-right:5px;" height="70">
                        </td>
                        <td class="desc" style="text-align:right;">
                        <table width="195">
                            <tr>
                                <td class="gene gene1" height="40" style="padding-right:20px;">Ген FTO</td>
                            </tr>
                            <tr><td height="10"></td></tr>
                            <tr>
                                <td class="gene gene2" height="40" style="padding-right:15px;">Ваша мутация T;A
                                </td>
                            </tr>
                            <tr><td height="10"></td></tr>
                            <tr>
                                <td class="gene gene180" height="40" style="padding-right:10px;">Полиморфизм rs9939609 </td>
                            </tr>
                        </table>
                        </td>
                    </tr>
                    </table>
                </td>

                <td width="5"></td>
                <td>
                    <table class="table2 graybox2-174">
                    <tr>
                        <td>
                        Полиморфизм гена FTO (альфа-кетоглутарат-зависимая диоксигеназа). Расположен на хромосоме 16 в цитогенетическом локусе 12.2.

                        </td>
                    </tr>
                    <tr>
                        <td height="80">
                            <span style="font-family:gilroy-semibold">Функция:</span>  Данный генетический локус связан с ожирением за счет нарушения пищевого поведения - избыточным потреблением калорий. Этот ген оказывает последовательное и хорошо воспроизводимое влияние на риск ожирения. С каждым аллелем A связано увеличение веса на около 1,5 кг.
                        </td>
                    </tr>
                    </table>
                </td>
            </tr>
        </table>

        <div style="font-family:gilroy;margin-top:10px;margin-bottom:20px;font-size:13px;line-height:19px;color: #555A5C;width:940px">
        Выше потребность в Омега-3 жирных кислотах.

        </div>
        
        <table style="border-collapse:collapse;margin:0;padding:0;" width="940px" height="213">
            <tr>
                <td  width="314">
                    <table class="table1 graybox1-213" style="margin: 0 0 0 -2px;padding-top:0;padding-bottom:0;" height="213">
                    <tr>
                        <td class="img" >
                            <img src=\'./assets/page18-dna.svg\' style="padding-right:5px;padding-top:20px;" height="70">
                        </td>
                        <td class="desc" style="text-align:right;padding-top:20px;" height="213">
                            <table width="195" style="">
                                <tr>
                                    <td class="gene gene180" height="40" style="padding-right:15px;">Гаплотипы гена APOE</td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                    </table>
                </td>

                <td width="12" ></td>
                <td >
                    <table class="table2 graybox2-213" height="213" style="margin:0;">
                        <tr>
                            <td style="padding-bottom:5px;">
                            Гаплотипы гена APOE - это комбинация 2-х полиморфизмов- rs429358 и rs7412, расположенных в цитосегменте 19q13.32, генотипы которых которые обычно наследуются вместе. Основными гаплотипами являются <span style="font-family:quivira">&#8455;</span>2, <span style="font-family:quivira">&#8455;</span>3 и <span style="font-family:quivira">&#8455;</span>4, встречающиеся в европейской популяции с частотами 6.65, 78.7 и 12.07% соответственно.

                            </td>
                        </tr>
                        <tr>
                            <td height="80px" >
                            <span style="font-family:gilroy-semibold">Функция:</span> Ген ApoE кодирует белок аполипопротеин Е (АпоЕ). Белок АпоЕ - фермент, играющий важную роль в метаболизме липидов. Он связан с предрасположенностью к гиперлипопротеинемии (ГЛП), атеросклерозу, гиперхолестеринемии, болезни Альцгеймера и пр.
                            </td>
                        </tr>
                    </table>
                </td>
            </tr>
        </table>

        <div style="font-family:gilroy;margin-top:10px;padding:0;font-size:13px;line-height:19px;color: #555A5C;width:940px">
        <p style="margin: 0 0 10px 0;">
        Обнаружен гаплотип APO-E3/E3. Частота в европейской популяции,%: 78.7761  
        </p>
        <p style="margin: 0;">
        Наиболее частый генотип. Норма. Потребность в Омега-3 жирных кислотах средняя.        
        </p>
        </div>

    </div>
</div>
<sethtmlpagefooter name="MyFooter2-gray-border" value="on"/>



<div class="page page57 bg-right" style="page-break-before:left;">
    <h2 class="gray" style="margin-bottom:20px;text-transforme:uppercase;">ОТЧЕТ ПО РЕЗУЛЬТАТАМ ИССЛЕДОВАНИЯ</h2>
    <div class="page57__content content-text" style="width:558px; color: #555A5C;height:350px;">
            <p style="margin:0;">
                Людям с таким генотипом необходимо повышать содержание Омега-3 жирных кислот в рационе. Употреблять Омега-3 жирные кислоты в повышенном количестве (с коэффициентом 1,3 по сравнению с нормами потребления, соответствующими вашему полу, возрасту и образу жизни). Возможно применение биологически активных добавок или продуктов, содержащих такие вещества (см. приложение).
            </p>
    </div>
    <div class="content-text" style="width:560px;margin:0;">

        <p class="risk-title1" style="margin:0;">Индивидуальная потребность
        </p>
        <p class="risk-title2">74 балла - выше среднего
        </p>

        <div>
            <img src=\'./assets/flag.svg\' style="margin-bottom:-10px;margin-left: 400px;width:20px;height:26px;">
            <p style="width:552px;height:10px; margin:0; background: linear-gradient(top right, rgb(223, 9, 22,0.5) 0%, #029DE1 100%);">
            </p>
        </div>

        <p class="risk-title1">Среднепопуляционная потребность
        </p>
        <p class="risk-title2">63 баллa</p>
        <div>
            <img src=\'./assets/flag.svg\' style="margin-bottom:-10px;margin-left: 300px;width:20px;height:26px;">
            <p style="width:552px;height:10px; background: linear-gradient(top right, rgb(223, 9, 22,0.5) 0%, #029DE1 100%);margin:0;">
            </p>
        </div>

    </div>
</div>
<sethtmlpagefooter name="MyFooter2-gray-border" value="on"/>




';



$mpdf = new Mpdf(['mode' => 'UTF-8', 'format' => [297, 210]]);

$mpdf->WriteHTML($html);
$mpdf->Output();

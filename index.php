<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Portfolio van Kai Kroon</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="icon" href="images/favi.png" type="image/png" sizes="16x16">


</head>
<style>
    
body{
    background-color: #333536 !important;

}
.header{


    color: #fff;
    padding: 20px;
    font-size: 32px;
    text-align: center;
}
.body{
    text-align: center;
    color: #fff;
}
.center{
    text-align: center !important;
    color: #fff;
}

.navigatie{
    display: block;
    margin-left: auto;
    margin-right: auto;
}


.accordion {

  cursor: pointer;
  padding: 18px;
  width: 100%;
  border: none;
  text-align: left;
  outline: none;
  font-size: 15px;
  transition: 0.4s;
}


.panel {
  padding: 0 18px;
  max-height: 0;
  overflow: hidden;
  transition: max-height 0.2s ease-out;
}




</style>
<body class="center">

    <?php include 'header.php';?>


    <div style="background-color:#333536">
    <div class="tab-content container">
        <div class="tab-pane active fade show" id="start" role="tabpanel" aria-labelledby="start-tab">
            <div class="header" >Hallo dit is mijn portfolio</div>
            <div class="body"><p>Ik ben Kai Kroon een 21 jarige student aan de opleiding Ondernemerschap & Retail Management. Momenteel volg ik de minor Smart industry, deze minor volg ik om mijn huidige kennis die ik heb opgedaan te verbreden. 
            <br><br>
            Buiten school ben ik werkzaam als verkoopmedewerker in een hoog-segment mannenkledingzaak genaamd Tijssen mode. Naast mijn werk heb ik vele hobby's die ik zelf of met mijn vrienden beoefen, zo ben ik teammanager en speler van ons eigen vrienden voetbalteam. Naast voetbal ben ik ook regelmatig in de sportschool te vinden en sinds kort ook op de golfbaan bij het Rijk van Nijmegen. </p></div>
            <br><br>
            <img src="images/foto1.png" width="60%" height="60%">
        </div>
        <div class="tab-pane fade" id="start2" role="tabpanel" aria-labelledby="start2-tab">
            <div class="header" >Smart start</div>
            <div class="body"><p>In dit onderdeel van het portfolio van Kai Kroon zal er verder ingegaan worden op het vak Smart Start. Hier zullen onder andere de week opdrachten, de competenties en mijn ervaringen binnen dit vak besproken worden. 
                <br><br>
                Veel leesplezier!
                
            <br><br>

            <h2>Extra paginas</h2>
            
            <button class="accordion">De Opdrachten</button>
            <div class="panel">
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
            </div>
            
            <button class="accordion">De Competenties</button>
            <div class="panel">
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
            </div>
            
            <button class="accordion">Mijn ervaringen</button>
            <div class="panel">
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
            </div>
            
            <script>
            var acc = document.getElementsByClassName("accordion");
            var i;
            
            for (i = 0; i < acc.length; i++) {
              acc[i].addEventListener("click", function() {
                this.classList.toggle("active");
                var panel = this.nextElementSibling;
                if (panel.style.maxHeight) {
                  panel.style.maxHeight = null;
                } else {
                  panel.style.maxHeight = panel.scrollHeight + "px";
                } 
              });
            }
            </script>
            
            




        </div>
            



             </p></div>
        </div>
        <div class="tab-pane fade" id="business" role="tabpanel" aria-labelledby="business-tab">
            <div class="header" >Smart business</div>
            <div class="body"><p>In dit onderdeel van het portfolio van Kai Kroon zal er verder ingegaan worden op het vak Smart Business. Hier zullen onder andere de week opdrachten, de competenties en mijn ervaringen binnen dit vak besproken worden. 
                <br><br>
                Veel leesplezier!
                
                <br><br>

                <button class="accordion">Opdrachten</button>
            <div class="panel">
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
            </div>
            
            <button class="accordion">Competenties</button>
            <div class="panel">
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
            </div>
            
            <button class="accordion">Mijn ervaringen</button>
            <div class="panel">
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
            </div>



            </p></div>
        </div>
        <div class="tab-pane fade" id="connection" role="tabpanel" aria-labelledby="connection-tab">
            <div class="header" >Smart Connection</div>
            <div class="body"><p>In dit onderdeel van het portfolio van Kai Kroon zal er verder ingegaan worden op het vak Smart Connection. Hier zullen onder andere de week opdrachten, de competenties en mijn ervaringen binnen dit vak besproken worden. 
                <br><br>
                Veel leesplezier!

                <br><br>
             </p></div>
        </div>
        <div class="tab-pane fade" id="technology" role="tabpanel" aria-labelledby="technology-tab">
            <div class="header" >Smart technology</div>
            <div class="body"><p>In dit onderdeel van het portfolio van Kai Kroon zal er verder ingegaan worden op het vak Smart Technology. Hier zullen onder andere de week opdrachten, de competenties en mijn ervaringen binnen dit vak besproken worden. 
                <br><br>
                Veel leesplezier!

                <br><br>
             </p></div>
        </div>
        <div class="tab-pane fade" id="project" role="tabpanel" aria-labelledby="project-tab">
            <div class="header" >Smart project</div>
            <div class="body"><p>In dit onderdeel van het portfolio van Kai Kroon zal er verder ingegaan worden op het project Smartty. Hier zullen onder andere de aanbevelingen, de competenties en mijn ervaringen binnen dit project besproken worden. 
                <br><br>
                Veel leesplezier!

                <br><br>
             </p></div>
        </div>
        <div class="tab-pane fade" id="competenties" role="tabpanel" aria-labelledby="competenties-tab">
            <div class="header" >Competenties</div>
                <div class="body"><p>In dit onderdeel van het portfolio van Kai Kroon zullen de competenties over de onderwerpen Smart Communication, Smart Me en Smart Team & netwerk besproken worden.
                <br><br>Veel leesplezier! </p></div>
                <br><br>
            <div class="header" >Smart Communication</div>
            <div class="body"><p>Communiceert op effectieve wijze zijn bevindingen naar verschillende doelgroepen.</p>
                <br><br>
                Tijdens deze minor ben ik met veel verschillende doelgroepen in aanraking gekomen. Zo ga je om met je medestudenten, je docenten en de opdrachtgevers. Al deze mensen dienen op een nette manier benaderd te worden, toch is vaak de communicatie tussen deze groepen anders. 
                <br><br>
                Zo praat ik met mijn klasgenoten vaak over de opdrachten en wanneer er problemen zijn helpen wij elkaar hierin. Dit gebeurt op een informele manier naar elkaar omdat je elkaar meer als vrienden en mede studenten ziet. In dit geval vind ik het dan ook vaak niet nodig om heel formeel te zijn terwijl ik dit normaal wel vaak ben. Met mijn medestudenten was het dus voornamelijk onze bevindingen met elkaar delen en elkaar verder helpen als ze ergens niet uitkwamen. 
                <br><br>
                Met mijn docenten tijdens mijn minor praten we over het algemeen redelijk formeel. Zelf spreek ik de persoon bij hun achternaam aan en gebruik ik U. Dit kwam voornamelijk ter sprake in het begin van de minor omdat ze docenten daarna ook aangegeven hadden dat we ze ook bij de voornaam mochten noemen. Dit vind ik toch wel een persoonlijkere band scheppen tussen docent en student. Wanneer ik mijn bevindingen deelde met de docenten probeerde ik er altijd voor te zorgen dat deze goed onderbouwt waren doormiddel van bronnen. Mij is tijdens mijn vorige stage en mijn werk altijd geleerd dat je dingen eerst volledig moet uitwerken voordat je het aan mensen laat zien. Wanneer je halve stukken laat zien zorgt dit voor verwarring of extra werkzaamheden voor diegene die het stuk ontvangt, dit wil je het liefste voorkomen. 
                <br><br>
                Tot slot zijn wij ook veel in contact geweest met onze opdrachtgevers van Smartty. Hierin was het in het begin een hele formele communicatie, dit kwam voornamelijk omdat wij bij de kennismaking elkaar nog niet kenden en je op zo een net mogelijke manier wilt overkomen. Wanneer het project vorderde werd de communicatie steeds persoonlijker, dit kwam ook doordat we elke vrijdag om 10:00 uur een meeting hadden waarin we de voortgang bespraken en hierin vragen aan elkaar konden stellen. 
                <br><br>
                Ik ben in mijn verleden veel bezig geweest met het verbeteren van mijn communicatie. In het verleden kwam het voor dat ik te veel binnensmonds praatte, hier ben ik toen mee aan de slag gegaan om ervoor te zorgen dat ik beter ging articuleren en duidelijk had wat ik wou gaan zeggen. Wanneer ik te veel in en keer wou zeggen kwam dit er vaak niet goed uit en was ik te enthousiast. Ook tijdens deze minor ben ik hier weer mee bezig geweest en heb ik dit ook weer in een andere omgeving geoefend, namelijk in een klas met waarin de studenten niet allemaal dezelfde opleiding volgens als ik. Ik ben blij dat ik mijn communicatie zo heb verbeterd, maar hier ga ik in de toekomst nog zeker mee verder om dit naar een nog hoger niveau te krijgen. 
                <br><br>
                <br><br>
            </div>
            <div class="header" >Smart Me</div>
            <div class="body"><p>Werk effectief aan zijn professionele ontwikkelingen</p>
            <br><br>
            Ik ben sinds het begin van mijn opleiding al zeker ervan dat ik een ondernemer wil worden. Dit geeft mij namelijk de mogelijkheid om mijn creativiteit kwijt te kunnen en te delen met andere mensen. Na een tijdje werd het mij ook duidelijk dat ik verder zou willen in de kledingbranche. Ik heb tijdens mijn werk al veel ervaringen opgedaan binnen deze gehele branche, ik heb me hierin beziggehouden met der verkoop, marketing, het beheren van de webshop, het doen van inkopen en misschien wel een van de belangrijkste onderwerpen het onderhouden van mijn klantrelaties. 
            <br><br>
            Tijdens mijn opleiding Ondernemerschap en Retail Management heb ik de hele basis geleerd van het opzetten van je eigen onderneming, Hiermee hebben we ook veel geoefend in de praktijk met het opstellen van je eigen ondernemingsplan. Ook hebben we verschillende planen geschreven rondom de inkoop van producten, de verkoop van spullen, het in de schappen leggen van spullen, etc. Ook hebben voor het vak E-commerce onze eigen webshop mogen opstarten aan de hand van CCV shop. Hierin waren de lay-outs al wel weergegeven maar kon je zelf bepalen wat er verder op kwam. Dit vaak interesseerde mij heel erg, maar maakte mij ook verder nieuwsgierig naar wat er allemaal achter de webshop gebeurt. Hierdoor heb ik mijn keuze gemaakt voor de minor Smart Industry, hier wou ik meer leren over verschillende technologieën omdat je in de huidige tijd niet meer zonder kan. In het begin vond ik het best lastig om die schakeling te maken van mijn economische opleiding naar een technische opleiding. Ik ben zeer blij met mijn keuze geweest en hier heb ik ook veel geleerd wat mij in de toekomst verder kan helpen, zo ga ik in de toekomst voor mijn bedrijf zeker in webshop/ website beginnen en nu heb ik ook geleerd hoe het er in de backend aan toe gaat. De keuze voor deze minor vond ik voor mijn toekomst een zeer professionele keuze omdat het buiten mijn vakgebied is maar het wel mijn huidige kennis verbreden. Naast school ben ik samen met mijn medestudent maar ook een van mijn beste vriendin Bas Terwindt bezig met het opzetten van onze eigen unieke kledinglijn. Hier zijn wij naast onze huidige opleiding veel mee bezig om zo onze toekomst zo succesvol mogelijk te maken. Ook zal deze kledinglijn een maatschappelijk doel hebben, namelijk het helpen van mensen die het moeilijker dan wij hebben in de maatschappij. 
            Verder kan ik er nog niet te veel over zeggen, maar mocht u het interessant vinden en nieuwsgierig zijn kunt u mij altijd benaderen om het even verder toe te lichten. 
            <br><br>
            Ik ben dus al veel bezig met het ontwikkelen van mezelf en me hiermee zo goed mogelijk voor te bereiden op mijn toekomst. Dit probeer ik op zo een professioneel mogelijke manier te doen, maar natuurlijk moet er soms ook een beetje plezier tussendoor komen.
            <br><br>
            <br><br>
            </div>
            <div class="header" >Smart Team & Netwerk</div>
            <div class="body"><p>Draagt actief bij aan optimale werksfeer binnen en buiten zijn team en ontwikkelt een professioneel netwerk. </p>
            <br><br>
            Ik werk sinds de middelbare school eigenlijk al graag in team verband, dit is niet omdat ik het alleen niet aan zou kunnen maar dat ik uit de visie werk dat je met meerdere altijd een beter onderbouwt antwoord krijgt dat van verschillende invalshoeken is bekeken. 
            <br><br>
            Ik werk het beste in een team waar een positieve werksfeer is waarin iedereen op elkaar vertrouwt. Ook is het belangrijk dat iedereen elkaar in zijn of haar waarden laat, als iemand bijvoorbeeld moeite met iets heeft dat ga je deze persoon niet afzeiken maar probeer je deze te helpen om zo als team hogerop te komen. In een team verband ben ik vaak diegene die de leiding en het voortouw neemt. Dit is eigenlijk al sinds een paar jaar duidelijk, zowel als op school maar ook als het om vrienden en sporten gaat. Zo ben ik manager van ons eigen voetbal vriendenteam, hierin regel ik dat iedereen op tijd er is en dat de trainingen voorbereidt zijn. Ook heb ik hierin contact met de directie van de club. Wanneer wij met vrienden iets gaan ondernemen ben ik ook vaak diegene die met een plan komt en dit leg ik dan voor aan de groep. Tot slot is dit op school ook een belangrijk aspect geweest voor mijn ontwikkeling, zo moesten wij bij elk project een projectleider en een notulist kiezen. In meer een deel van de gevallen was ik dan de projectleider en dit viel vaak bij mijn medegroepsleden in de smaak. Dingen die ik vaak te horen kreeg was dat het fijn werken was omdat iedereen wist wie wat moest doen en wanneer wat af moest zijn. Dit kwam voornamelijk omdat ik vaak met een duidelijke en tijdsgebonden planning werk zodat je niet op het laatst voor onverwachte problemen staat. 
            <br><br>
            Naast dat ik het werken in groepjes heel fijn en leuk vind ben ik zelf als persoon druk bezig met het onderhouden van mij eigen netwerk. Zo kom ik tijdens mijn werk en school heel veel verschillende mensen tegen. Om ervoor te zorgen dat ik deze connecties onderhoud gebruik in vaak LinkedIn, zo kan ik wanneer ik iemand nodig heb hier beroep op doen maar ook andersom wanner iemand mij voor iets nodig heeft. Mijn netwerk is het afgelopen jaar niet normaal veel gegroeid, Ik ben van ongeveer 230 Connecties (januari 2020) naar maar liefst 514 connecties (Januari 2021) gegaan. Ook dit heb ik gedaan om mij zo goed mogelijk voor te bereiden op mijn toekomst. Hier heb ik bijvoorbeeld ook mijn afstudeerstage gevonden bij het bedrijf Controlux in Nijmegen. Ik heb tot op heden zelf heel veel profijt van de grote van mijn netwerk en ik kan iedereen aanbevelen om geen dag te wachten met het onderhouden van hun netwerk maar hier meteen mee te beginnen wanneer je dit nog niet gedaan hebt. 
            <br><br>
            Naast mijn LinkedIn-account heb ik tijdens mijn stage ook veel bijeenkomsten mogen bijwonen waar ze eerst dingen over een onderwerp gingen uitleggen en hierna was er een netwerkborrel. Ook op deze borrels heb ik veel nieuwe connecties opgedaan. Wel is het belangrijk om naar deze bijeenkomsten altijd een visitekaartje mee te nemen. Ik heb borrels altijd heel leuk ervaren en het is nooit verspeelde tijd wanneer u er een bezoekt. 
            <br><br>
            </div>
        </p></div>

        </div>
            <div class="tab-pane fade" id="overmij" role="tabpanel" aria-labelledby="overmij-tab">
            <div class="header" >Over mij</div>
            <div class="body"><p>Ik ben Kai Kroon een 21 jarige student aan de opleiding Ondernemerschap & Retail Management. Momenteel volg ik de minor Smart industry, deze minor volg ik om mijn huidige kennis die ik heb opgedaan te verbreden. 
            <br><br>
            Buiten school ben ik werkzaam als verkoopmedewerker in een hoog-segment mannenkledingzaak genaamd Tijssen mode. Naast mijn werk heb ik vele hobby's die ik zelf of met mijn vrienden beoefen, zo ben ik teammanager en speler van ons eigen vrienden voetbalteam. Naast voetbal ben ik ook regelmatig in de sportschool te vinden en sinds kort ook op de golfbaan bij het Rijk van Nijmegen. </p></div>
        
            <br><br>
        </p></div>
        </div>

    </div>





    <!-- FOR BOOTSTRAP -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>




</body>
</html>

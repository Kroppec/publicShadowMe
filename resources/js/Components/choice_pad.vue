<template>
  <div class="question-container">
    <div class="pad-block">
      <h1 class="heading">Profesijas analīze</h1>
      <div class="pad-container">
        <div class="selection-block">
          <h4 class="information">Vai vēlies kļūt par profesionāli šajā nozarē?</h4>
          <div class="s-box-container">
            <div class="s-box">
              <label class="s-box-switch">
                <input id="positive" name="sBox" type="radio" class="s-box-check">
                <span class="s-box-toggle" />
                <h4 class="s-box-title">Vēlos</h4>
              </label>
            </div>
            <div class="s-box">
              <label class="s-box-switch">
                <input id="neutral" name="sBox" type="radio" class="s-box-check">
                <span class="s-box-toggle" />
                <h4 class="s-box-title">Nezinu</h4>
              </label>
            </div>
            <div class="s-box">
              <label class="s-box-switch">
                <input id="negative" name="sBox" type="radio" class="s-box-check">
                <span class="s-box-toggle" />
                <h4 class="s-box-title">Nevēlos</h4>
              </label>
            </div>
          </div>
        </div>
        <div class="input-block">
          <div class="partition">
            <h2 class="information-title">Ieteicamie analīzes punkti</h2>
            <li class="information positive">Kas Tev ļāva saprast, ka vēlies būt šīs nozares profesionālis?</li>
            <li class="information positive">Kuras zināšanas/prasmes/spējas Tev jau piemīt, kas nepieciešamas, lai kļūtu par profesionāli?</li>
            <li class="information positive">Īsi raksturo profesionāļa ikdienas pienākumus!</li>
            <li class="information positive">Kāda izglītība nepieciešama, lai kļūtu par proofesionāli?</li>
            <li class="information positive">Kādas ir profesionāļa iespējas darba tirgū? Kurās profesionālajās nozarēs ir iespējas strādāt?</li>
            <li class="information positive">Kāds bija Tavs Ēnu dienas visspilgtākais moments?</li>
            <li class="information positive">Ko Tu kā personība ieguvi un/vai uzzināji par sevi, ēnojot šo profesionāli?</li>
            <li class="information negative">Kas Tev ļāva saprast, ka nevēlies būt šīs nozares profesionālis?</li>
            <li class="information negative">Kuras intereses/prasmes/zināšanas Tev pietrūkst, lai būtu piemērots ēnotajai profesijai/amatam?</li>
            <li class="information negative">Kādas varētu būt Tavas citas profesionālās izvēles (alternatīvas)?</li>
            <li class="information negative">Kāds bija Tavs Ēnu diienas visspilgtākais moments?</li>
            <li class="information negative">Ko Tu kā personība ieguvi un/vai uzzināji par sevi, ēnojot šo profesionāli?</li>
            <li class="information neutral">Kas Tev neļauj pieņemt lēmumu par savu atbilstību/piemērotību ēnošanai izvēlētajai profesijai/amatam?</li>
            <li class="information neutral">Kāda papildus informācija/darbība Tev varētu palīdzēt izprast situāciju:</li>
            <li class="information neutral">par profesijas standartu/profesionāļa darba ikdienu, darba pienākumiem</li>
            <li class="information neutral">par profesijai nepieciešamo izglītību</li>
            <li class="information neutral">par perspektīvam darba tirgū Latvijā/ārpus Latvijas</li>
            <li class="information neutral">Tavas personības/zināšanu/prasmju novērtējums</li>
            <li class="information neutral">Kāds bija Tavs Ēnu dienas visspilgtākais moments?</li>
            <li class="information neutral">Ko Tu kā personība ieguvi un/vai uzzināji par sevi, ēnojot šo profesionāli?</li>
          </div>
          <div class="partition">
            <div class="information-box">
              <h3 class="information-title">Veido analīzi</h3>
              <p class="information">Sastādi dienas raksturojumu, iekļaujot ieteicamos punktus un citus sev nozīmīgus faktus, lai optimāli aprakstītu savu pieredzi.</p>
            </div>
            <div class="input-box">
              <textarea placeholder="Ēnu dienas pieredzes raksturojums..." class="c-textbox"></textarea>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>

<style>
.c-textbox {
  background-color: #D9DDE8;
  width: 100%;
  height: 100%;
  min-height: 300px;
  border-bottom: 3px solid #838FAB;
  resize: none;
  border-left: none;
  border-top: none;
  border-right: none;
}
.input-box {
  background-color: #E1E5EF;
  height: 80%;
  min-height: 200px;
}
.information {
  font-size: 12pt;
}
.information-title {
  font-size: 13pt;
  font-weight: 500;
}
.s-box-title {
  position: absolute;
  top: -2px;
  width: 100%;
  font-weight: 500;
  text-align: center;
}
.s-box-toggle {
  width: 100%;
  height: 35px;
  top: -2;
  left: 0;
  opacity: 0;
  position: absolute;
  background-color: #D9DDE8;
  transition: .2s;
}
.s-box-check {
  width: 100%;
  height: 100%;
  opacity: 0;
}
.s-box-check:checked + .s-box-toggle {
  background-color: #477998;
  opacity: 1;
  transition: .2s;
}
.s-box-check:checked ~ .s-box-title {
  color: #ffffff;
}

.s-box-switch {
  position: relative;
  height: 35px;
}
.s-box {
  width: 175px;
  height: 35px;
  background-color: #D9DDE8;
}
.s-box-container {
  width: 100%;
  display: flex;
  justify-content: center;
  align-items: center;
}
.pad-container {
  background-color: #E3E7F1;
  width: 100%;
  height: 100%;
  display: flex;
  justify-content: center;
  align-items: center;
  flex-direction: column;
  padding: 25px;
}
.selection-block {
  width: 100%;
  height: 50px;
  display: flex;
  justify-content: center;
  align-items: center;
  flex-direction: column;
}
.input-block {
  margin: 25px 0 0 0;
}
.pad-block {
  width: 100%;
  vertical-align: top;
}
.partition {
  width: 50%;
  position: relative;
}
.input-block {
  display: flex;
  justify-content: center;
}

@media only screen and (max-width: 1000px) {
  .input-block {flex-direction: column;}
  .partition {width: 100%}
}

</style>

<script>
export default {
  name: 'cPad',
};
</script>

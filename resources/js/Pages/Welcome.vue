<template>
<div class="content">
  <h1 class="content-title">Ēnu dienas atskaite</h1>
  <h2 class="content-description">Jānis Bērziņš - Rīgas Valsts 3. ģimnāzija - 12. (B) klase</h2>
  <div class="form-container">
    <div class='form-block'>
      <cQuestion />
      <gQuestion />
      <cPad />
    </div>
  </div>
</div>
</template>

<style>
.content {
  width: 85vw;
  max-width: 1200px;
  margin: auto;
  height: calc(100vh - 45px);
  background-color: #EEF1F9;
  position: relative;
  padding: 2.5vw
}
.content-title {
  font-size: 45pt;
  font-weight: bolder;
}
.content-description {
  font-size: 14pt;
  font-weight: 700;
  color: #838FAB;
  margin: 0 0 25px 0;
}
.form-container {
  position: relative;
  width: 100%;
  max-width: 1200px;
  margin: auto;
  height: calc(90% - 25px);
  background-color: #E8ECF6;
  display: flex;
  justify-content: center;
  align-items: center;
  font-family: 'Ubuntu', sans-serif;
}
.form-block {
  background-color: inherit;
  width: 100%;
  max-width: 1175px;
  height: 100%;
  overflow-y: scroll;
  overflow-x: hidden;
  padding: 10px;
}
::-webkit-scrollbar {
  background-color: #D7DCE8;
  width: 9px;
}
::-webkit-scrollbar-thumb {
  background-color: #838FAB;
  border-radius: 6px;
}

@media only screen and (max-width: 1000px) {
  .content {width: 100vw}
  .form-container {width: 90vw}
  .form-block {width: 87.5vw}
}
</style>

<script>
import gQuestion from '../Components/grade_question.vue'
import cPad  from '../Components/choice_pad.vue'
import cQuestion from '../Components/content_question.vue'
import controller from '../Components/controller.vue'
export default {
  name: 'Welcome',
  components: {
    cQuestion,
    gQuestion,
    cPad,
  }
};
</script>
